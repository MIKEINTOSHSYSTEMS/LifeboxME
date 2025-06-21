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
function fetchDhis2Data($endpoint)
{
    global $DHIS2_BASE_URL, $DHIS2_USERNAME, $DHIS2_PASSWORD;

    $url = $DHIS2_BASE_URL . $endpoint;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$DHIS2_USERNAME:$DHIS2_PASSWORD");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For development only

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        throw new Exception('DHIS2 API request failed: ' . curl_error($ch));
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode !== 200) {
        throw new Exception("DHIS2 API returned HTTP code $httpCode");
    }

    curl_close($ch);

    return json_decode($response, true);
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
        'Lifebox International ID' => null,
        'Lifebox International' => null,
        'Continent ID' => null,
        'Continent' => null,
        'Country ID' => null,
        'Country' => null,
        'Hospital_Facility_ID' => null,
        'Hospital_Facility_Name' => null,
        'Level' => $unit['level']
    ];

    $current = $unit;

    while (isset($current['parent']['id'])) {
        switch ($current['level']) {
            case 4:
                $path['Hospital_Facility_ID'] = $current['id'];
                $path['Hospital_Facility_Name'] = $current['name'];
                break;
            case 3:
                $path['Country ID'] = $current['id'];
                $path['Country'] = $current['name'];
                break;
            case 2:
                $path['Continent ID'] = $current['id'];
                $path['Continent'] = $current['name'];
                break;
            case 1:
                $path['Lifebox International ID'] = $current['id'];
                $path['Lifebox International'] = $current['name'];
                break;
        }

        if (isset($current['parent']['full'])) {
            $current = $current['parent']['full'];
        } else {
            break;
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

        // Fill in Lifebox International if not already set
        if ($path['Lifebox International ID'] === null && $level1) {
            $path['Lifebox International ID'] = $level1['id'];
            $path['Lifebox International'] = $level1['name'];
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
