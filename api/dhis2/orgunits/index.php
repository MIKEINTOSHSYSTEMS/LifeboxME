<?php
// aio_organisationUnits.php

/**
 * Fetches and organizes DHIS2 organization units data in a structured format
 * Reads credentials from ../../.env.dev
 */

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to parse .env file
function parseEnvFile($filePath)
{
    if (!file_exists($filePath)) {
        throw new Exception("Environment file not found: $filePath");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];

    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split on first equals sign
        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);

        // Remove quotes if present
        if (preg_match('/^"(.*)"$/', $value, $matches)) {
            $value = $matches[1];
        } elseif (preg_match('/^\'(.*)\'$/', $value, $matches)) {
            $value = $matches[1];
        }

        $env[$key] = $value;
    }

    return $env;
}

// Load environment variables
try {
    $envFile = '../../../.env.dev';
    $env = parseEnvFile($envFile);

    // Validate required DHIS2 configuration
    $requiredVars = ['DHIS2_BASE_URL', 'DHIS2_USERNAME', 'DHIS2_PASSWORD'];
    foreach ($requiredVars as $var) {
        if (!isset($env[$var]) || empty($env[$var])) {
            throw new Exception("Required environment variable missing or empty: $var");
        }
    }

    $DHIS2_BASE_URL = rtrim($env['DHIS2_BASE_URL'], '/') . '/';
    $DHIS2_USERNAME = $env['DHIS2_USERNAME'];
    $DHIS2_PASSWORD = $env['DHIS2_PASSWORD'];
} catch (Exception $e) {
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
    exit;
}

// Function to fetch data from DHIS2 API
function fetchDhis2Data($endpoint, $maxRetries = 3)
{
    global $DHIS2_BASE_URL, $DHIS2_USERNAME, $DHIS2_PASSWORD;

    $url = $DHIS2_BASE_URL . $endpoint;
    $attempt = 0;

    while ($attempt < $maxRetries) {
        $attempt++;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$DHIS2_USERNAME:$DHIS2_PASSWORD");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Development only

        // NEW: Timeout settings
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); // 15s to establish connection
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);        // 60s max request time

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);

            // Retry on timeout or transient errors
            if ($attempt < $maxRetries) {
                error_log("DHIS2 request attempt $attempt failed: $error. Retrying...");
                sleep($attempt * 2); // 2s, 4s, 6s backoff
                continue;
            } else {
                throw new Exception("DHIS2 API request failed after $maxRetries attempts: $error");
            }
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            if ($attempt < $maxRetries) {
                error_log("DHIS2 request attempt $attempt returned HTTP $httpCode. Retrying...");
                sleep($attempt * 2);
                continue;
            } else {
                throw new Exception("DHIS2 API returned HTTP code $httpCode after $maxRetries attempts");
            }
        }

        return json_decode($response, true);
    }

    // Should never reach here
    throw new Exception("Unknown error during DHIS2 API fetch");
}

// Function to build a complete hierarchy map
function buildHierarchyMap($units)
{
    $map = [];
    $level1 = null;

    // First pass: create a map of all units by ID
    foreach ($units as $unit) {
        $map[$unit['id']] = $unit;  // Fixed this line - was missing the closing bracket
        if ($unit['level'] == 1) {
            $level1 = $unit;
        }
    }

    // Second pass: build the hierarchy relationships
    foreach ($map as &$unit) {
        if (isset($unit['parent']['id'])) {
            $parentId = $unit['parent']['id'];
            if (isset($map[$parentId])) {
                $unit['parent']['full'] = $map[$parentId];
            }
        }
    }

    return ['map' => $map, 'level1' => $level1];
}

// Function to get the full hierarchy path for a unit
function getHierarchyPath($unit, $map)
{
    $path = [
        'LB_Int_ID' => null,
        'LB_Int' => null,
        'Cont_ID' => null,
        'Continent' => null,
        'Count_ID' => null,
        'Country' => null,
        'Hosp_Fac_ID' => null,
        'Hospital_Facility' => null,
        'Level' => $unit['level']
    ];

    // Set current level's information first
    switch ($unit['level']) {
        case 4:
            $path['Hosp_Fac_ID'] = $unit['id'];
            $path['Hospital_Facility'] = $unit['name'];
            break;
        case 3:
            $path['Count_ID'] = $unit['id'];
            $path['Country'] = $unit['name'];
            break;
        case 2:
            $path['Cont_ID'] = $unit['id'];
            $path['Continent'] = $unit['name'];
            break;
        case 1:
            $path['LB_Int_ID'] = $unit['id'];
            $path['LB_Int'] = $unit['name'];
            return $path; // No parent for level 1
    }

    // Now resolve parent hierarchy
    $current = $unit;
    while (isset($current['parent']['id'])) {
        $parentId = $current['parent']['id'];

        // If we have the full parent in our map
        if (isset($map[$parentId])) {
            $parent = $map[$parentId];

            switch ($parent['level']) {
                case 3: // Parent is a country
                    if ($unit['level'] == 4) { // Only set if current is facility
                        $path['Count_ID'] = $parent['id'];
                        $path['Country'] = $parent['name'];
                    }
                    break;
                case 2: // Parent is a continent
                    if ($unit['level'] >= 3) { // Set for countries and facilities
                        $path['Cont_ID'] = $parent['id'];
                        $path['Continent'] = $parent['name'];
                    }
                    break;
                case 1: // Parent is Lifebox International
                    $path['LB_Int_ID'] = $parent['id'];
                    $path['LB_Int'] = $parent['name'];
                    break;
            }

            $current = $parent;
        } else {
            break; // No more parents in our map
        }
    }

    return $path;
}


// Main execution
try {
    // Fetch organization units
    $orgUnits = fetchDhis2Data('api/organisationUnits.json?fields=id,name,level,parent[id,displayName]&paging=false');

    // Fetch organization unit levels for validation (optional)
    $orgUnitLevels = fetchDhis2Data('api/organisationUnitLevels.json?fields=id,name,level&paging=false');

    // Build hierarchy map
    $hierarchy = buildHierarchyMap($orgUnits['organisationUnits']);
    $map = $hierarchy['map'];
    $level1 = $hierarchy['level1'];

    // Prepare the structured data
    $structuredData = [];

    foreach ($map as $unitId => $unit) {
        $path = getHierarchyPath($unit, $map);

        // Fill in LB_Int if not already set
        if ($path['LB_Int_ID'] === null && $level1) {
            $path['LB_Int_ID'] = $level1['id'];
            $path['LB_Int'] = $level1['name'];
        }

        $structuredData[] = $path;
    }

    // Add metadata
    $result = [
        'success' => true,
        'timestamp' => date('c'),
        'apiVersion' => '1.0',
        'data' => $structuredData,
        'metadata' => [
            'organizationUnitLevels' => $orgUnitLevels['organisationUnitLevels'],
            'totalCounts' => [
                'level1' => count(array_filter($structuredData, function ($item) {
                    return $item['Level'] == 1;
                })),
                'level2' => count(array_filter($structuredData, function ($item) {
                    return $item['Level'] == 2;
                })),
                'level3' => count(array_filter($structuredData, function ($item) {
                    return $item['Level'] == 3;
                })),
                'level4' => count(array_filter($structuredData, function ($item) {
                    return $item['Level'] == 4;
                }))
            ],
            'source' => $DHIS2_BASE_URL
        ]
    ];

    // Set JSON headers and output
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
} catch (Exception $e) {
    // Error handling
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
}
