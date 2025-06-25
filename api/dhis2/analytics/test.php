<?php

// dhis2_analytics.php

/**
 * Fetches DHIS2 analytics data and returns structured results
 * Reads credentials from ../../../.env.dev
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
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);

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

// Function to fetch data from DHIS2 API with retries
function fetchDhis2Data($endpoint, $maxRetries = 3)
{
    global $DHIS2_BASE_URL, $DHIS2_USERNAME, $DHIS2_PASSWORD;

    $url = $DHIS2_BASE_URL . $endpoint;
    error_log("Fetching DHIS2 URL: $url");
    $attempt = 0;

    while ($attempt < $maxRetries) {
        $attempt++;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$DHIS2_USERNAME:$DHIS2_PASSWORD");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);

            if ($attempt < $maxRetries) {
                error_log("DHIS2 request attempt $attempt failed: $error. Retrying...");
                sleep($attempt * 2);
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

    throw new Exception("Unknown error during DHIS2 API fetch");
}

// Function to fetch data items metadata
function fetchDataItemsMetadata()
{
    //$dataItemsApi = 'http://lifeboxme/api/dhis2/indicators/dataItems.php';
    // Get current scheme and host dynamically
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $basePath = dirname($_SERVER['SCRIPT_NAME']); // e.g., /api/dhis2/analytics
    $dataItemsPath = '/api/dhis2/indicators/dataItems.php';

    // Build full URL to dataItems.php
    $fullUrl = $scheme . '://' . $host . $dataItemsPath;

    try {
        $ch = curl_init($fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception('Data items API request failed: ' . curl_error($ch));
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new Exception("Data items API returned HTTP code $httpCode");
        }

        $data = json_decode($response, true);

        if (!is_array($data)) {
            throw new Exception('Invalid response from data items API');
        }

        $metadata = [];
        foreach ($data as $item) {
            $metadata[$item['id']] = $item;
        }

        return $metadata;
    } catch (Exception $e) {
        error_log("Failed to fetch data items metadata: " . $e->getMessage());
        return [];
    }
}

// Main execution
try {
    // Get parameters from URL
    $dimensions = $_GET['dimensions'] ?? '';
    $filters = $_GET['filters'] ?? '';

    error_log("Received request with dimensions: $dimensions and filters: $filters");

    // Construct the endpoint
    $endpoint = 'api/analytics.json?';
    if (!empty($dimensions)) {
        $endpoint .= 'dimension=' . urlencode($dimensions) . '&';
    }
    if (!empty($filters)) {
        $endpoint .= 'filter=' . urlencode($filters) . '&';
    }
    $endpoint .= 'displayProperty=NAME&includeNumDen=false&skipMeta=false&skipData=false';

    error_log("Constructed DHIS2 endpoint: $endpoint");

    // Fetch analytics data from DHIS2 API
    $response = fetchDhis2Data($endpoint);

    if (empty($response['rows'])) {
        throw new Exception("No data found for the given analytics query.");
    }

    $metaData = $response['metaData']['items'] ?? [];
    $dimensionData = $response['metaData']['dimensions'] ?? [];

    // Extract organization unit information from metadata
    $orgUnits = [];
    foreach ($dimensionData['ou'] ?? [] as $ouId) {
        $orgUnits[] = [
            'id' => $ouId,
            'displayName' => $metaData[$ouId]['name'] ?? $ouId
        ];
    }

    // If no org units found in dimensions, check the first filter
    if (empty($orgUnits)) {
        $requestedOrgUnitId = '';
        if (!empty($filters)) {
            $filterParts = explode('&', $filters);
            foreach ($filterParts as $filter) {
                if (strpos($filter, 'ou:') === 0) {
                    $requestedOrgUnitId = substr($filter, 3);
                    // Handle multiple org units separated by semicolons
                    $requestedOrgUnitId = explode(';', $requestedOrgUnitId)[0];
                    $requestedOrgUnitId = trim($requestedOrgUnitId);
                    break;
                }
            }
        }

        if (!empty($requestedOrgUnitId)) {
            $orgUnits[] = [
                'id' => $requestedOrgUnitId,
                'displayName' => $metaData[$requestedOrgUnitId]['name'] ?? $requestedOrgUnitId
            ];
        }
    }

    // Pre-fetch required metadata
    $dataItemMetadata = fetchDataItemsMetadata();

    // Extract IDs from dimensions
    $dxIds = $dimensionData['dx'] ?? [];
    $peIds = $dimensionData['pe'] ?? [];

    // Map period IDs to names
    $periods = [];
    foreach ($peIds as $peId) {
        $periods[] = $metaData[$peId]['name'] ?? $peId;
    }

    // Precompute data values by dxId
    $dxValues = [];
    foreach ($response['rows'] as $row) {
        $dxId = $row[0];
        $value = (float)$row[1];
        if (!isset($dxValues[$dxId])) {
            $dxValues[$dxId] = [];
        }
        $dxValues[$dxId][] = $value;
    }

    // Process each data item
    $result = [];
    foreach ($dxIds as $dxId) {
        // Get metadata from our API if available
        $itemInfo = $dataItemMetadata[$dxId] ?? [];

        // Build the result item with org unit info
        $resultItem = [
            'id' => $dxId,
            'displayName' => $itemInfo['displayName'] ?? ($metaData[$dxId]['name'] ?? $dxId),
            'name' => $itemInfo['name'] ?? ($metaData[$dxId]['name'] ?? $dxId),
            'shortName' => $itemInfo['shortName'] ?? 'N/A',
            'displayShortName' => $itemInfo['displayShortName'] ?? $itemInfo['shortName'] ?? 'N/A',
            'dimensionItemType' => $itemInfo['dimensionItemType'] ?? 'UNKNOWN',
            'organizationUnits' => $orgUnits, // Changed to plural and array format
            'periods' => $periods, // Changed to plural for consistency
            'dataValues' => $dxValues[$dxId] ?? []
        ];

        $result[] = $resultItem;
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
} catch (Exception $e) {
    error_log("Error in main execution: " . $e->getMessage());
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
}
