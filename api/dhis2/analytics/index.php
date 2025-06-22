<?php
// DHIS2 Analytics API Proxy with Enhanced Metadata

// Load environment variables
$envFile = __DIR__ . '/../../../.env.dev';
if (file_exists($envFile)) {
    $envVars = parse_ini_file($envFile);
} else {
    die(json_encode(['error' => 'Configuration file not found']));
}

// Function to fetch data items metadata
function fetchDataItemsMetadata()
{
    $dataItemsApi = 'http://lifeboxme/api/dhis2/indicators/dataItems.php';

    try {
        $ch = curl_init($dataItemsApi);
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

// Get all query parameters except those we want to exclude
$allowedParams = [
    'dimension',
    'filter',
    'displayProperty',
    'includeNumDen',
    'skipMeta',
    'skipData',
    'paging',
    'pageSize',
    'page'
];

$queryParams = [];
foreach ($_GET as $key => $value) {
    if (in_array($key, $allowedParams)) {
        // Handle multiple filter parameters
        if ($key === 'filter' && is_array($value)) {
            foreach ($value as $filter) {
                $queryParams[] = "$key=$filter";
            }
        } else {
            $queryParams[] = "$key=$value";
        }
    }
}

// Build the API endpoint
$apiEndpoint = '/api/analytics?' . implode('&', $queryParams);

// DHIS2 API Configuration
$baseUrl = rtrim($envVars['DHIS2_BASE_URL'], '/');
$username = $envVars['DHIS2_USERNAME'];
$password = $envVars['DHIS2_PASSWORD'];

// Full URL
$url = $baseUrl . $apiEndpoint;

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For testing only, remove in production
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For testing only, remove in production

// Add headers for JSON response
$headers = [
    'Accept: application/json',
    'Content-Type: application/json'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    curl_close($ch);
    die(json_encode(['error' => "DHIS2 API request failed: $error_msg"]));
}

// Get HTTP status code
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Check if the request was successful
if ($httpCode !== 200) {
    die(json_encode(['error' => "DHIS2 API returned HTTP code $httpCode"]));
}

// Decode the JSON response
$jsonData = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die(json_encode(['error' => 'Invalid JSON response from DHIS2 API']));
}

// Fetch additional metadata from data items API
$dataItemMetadata = fetchDataItemsMetadata();

// Process the response
$result = [];

// Extract all dimension IDs from the response
$dxIds = [];
foreach ($jsonData['metaData']['dimensions'] as $dimension => $ids) {
    if ($dimension === 'dx') {
        $dxIds = $ids;
        break;
    }
}

// Process each indicator
foreach ($dxIds as $dxId) {
    // Get metadata from our API if available
    $itemInfo = $dataItemMetadata[$dxId] ?? [];

    // Build organization units info
    $orgUnits = [];
    if (isset($jsonData['metaData']['dimensions']['ou'])) {
        foreach ($jsonData['metaData']['dimensions']['ou'] as $ouId) {
            $orgUnits[] = [
                'id' => $ouId,
                'displayName' => $jsonData['metaData']['items'][$ouId]['name'] ?? null
            ];
        }
    }

    // Build periods info
    $periods = [];
    if (isset($jsonData['metaData']['dimensions']['pe'])) {
        foreach ($jsonData['metaData']['dimensions']['pe'] as $peId) {
            $periods[] = [
                'id' => $peId,
                'displayName' => $jsonData['metaData']['items'][$peId]['name'] ?? null,
                'relativePeriod' => $jsonData['metaData']['items']['LAST_YEAR']['name'] ?? null
            ];
        }
    }

    // Build data values for this indicator
    $dataValues = [];
    if (!empty($jsonData['rows'])) {
        foreach ($jsonData['rows'] as $row) {
            // Check if this row belongs to current indicator
            if ($row[0] === $dxId) {
                $dataValues[] = [
                    'value' => $row[1] ?? null,
                    'storedBy' => 'system',
                    'created' => date('c'),
                    'lastUpdated' => date('c')
                ];
            }
        }
    }

    // Build the result item
    $result[] = [
        'id' => $dxId,
        'displayName' => $itemInfo['displayName'] ?? ($jsonData['metaData']['items'][$dxId]['name'] ?? $dxId),
        'name' => $itemInfo['name'] ?? ($jsonData['metaData']['items'][$dxId]['name'] ?? $dxId),
        'shortName' => $itemInfo['shortName'] ?? 'N/A',
        'displayShortName' => $itemInfo['displayShortName'] ?? ($itemInfo['shortName'] ?? 'N/A'),
        'dimensionItemType' => $itemInfo['dimensionItemType'] ?? 'UNKNOWN',
        'organizationUnits' => $orgUnits,
        'periods' => $periods,
        'dataValues' => $dataValues
    ];
}

// Set the content type header to JSON
header('Content-Type: application/json');

// Output pretty-printed JSON
echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
