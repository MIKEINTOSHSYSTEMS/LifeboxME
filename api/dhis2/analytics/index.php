<?php
// DHIS2 Analytics API Proxy with Enhanced Metadata

// Load environment variables
$envFile = __DIR__ . '/../../../.env.dev';
if (file_exists($envFile)) {
    $envVars = parse_ini_file($envFile);
} else {
    die(json_encode(['error' => 'Configuration file not found']));
}

// Helper function to parse dimension strings
function parseDimensionString($str)
{
    if (empty($str)) {
        return [];
    }
    $result = [];
    $parts = explode(',', $str);
    foreach ($parts as $part) {
        if (strpos($part, ':') !== false) {
            list($dim, $itemsStr) = explode(':', $part, 2);
            $items = explode(';', $itemsStr);
            $result[$dim] = $items;
        }
    }
    return $result;
}

// Helper function to parse filter values
function parseFilterValue($filterValue)
{
    $filters = [];
    if (is_array($filterValue)) {
        $filterStrings = $filterValue;
    } else {
        $filterStrings = [$filterValue];
    }

    foreach ($filterStrings as $filterStr) {
        if (strpos($filterStr, ':') !== false) {
            list($dim, $itemsStr) = explode(':', $filterStr, 2);
            $items = explode(';', $itemsStr);
            if (!isset($filters[$dim])) {
                $filters[$dim] = [];
            }
            $filters[$dim] = array_merge($filters[$dim], $items);
        }
    }
    return $filters;
}

// Function to fetch data items metadata
function fetchDataItemsMetadata()
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $dataItemsPath = '/api/dhis2/indicators/dataItems.php';
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

// Get all query parameters
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

// Parse dimension parameter to extract org units and periods
$dimensionParam = $_GET['dimension'] ?? '';
$dimensionData = parseDimensionString($dimensionParam);

// Parse filter parameter to extract org units and periods
$filterParam = $_GET['filter'] ?? [];
$filterData = parseFilterValue($filterParam);

// Combine org units from both dimension and filter parameters
$filteredOrgUnits = array_merge(
    $dimensionData['ou'] ?? [],
    $filterData['ou'] ?? []
);

// Combine periods from both dimension and filter parameters
$filteredPeriods = array_merge(
    $dimensionData['pe'] ?? [],
    $filterData['pe'] ?? []
);

// For period mapping, use only filter periods (relative periods)
$periodsForMapping = $filterData['pe'] ?? [];

// Build API endpoint
$queryParams = [];
foreach ($_GET as $key => $value) {
    if (in_array($key, $allowedParams)) {
        if ($key === 'filter' && is_array($value)) {
            foreach ($value as $filter) {
                $queryParams[] = "$key=$filter";
            }
        } else {
            $queryParams[] = "$key=$value";
        }
    }
}

$apiEndpoint = '/api/analytics?' . implode('&', $queryParams);

// DHIS2 API Configuration
$baseUrl = rtrim($envVars['DHIS2_BASE_URL'], '/');
$username = $envVars['DHIS2_USERNAME'];
$password = $envVars['DHIS2_PASSWORD'];
$url = $baseUrl . $apiEndpoint;

// Make API request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$headers = [
    'Accept: application/json',
    'Content-Type: application/json'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    curl_close($ch);
    die(json_encode(['error' => "DHIS2 API request failed: $error_msg"]));
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    die(json_encode(['error' => "DHIS2 API returned HTTP code $httpCode"]));
}

$jsonData = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die(json_encode(['error' => 'Invalid JSON response from DHIS2 API']));
}

// Get additional metadata
$dataItemMetadata = fetchDataItemsMetadata();

// Process response
$result = [];

// Get all indicator IDs
$dxIds = $jsonData['metaData']['dimensions']['dx'] ?? [];

// Get all org units from response
$allOrgUnits = [];
if (isset($jsonData['metaData']['dimensions']['ou'])) {
    foreach ($jsonData['metaData']['dimensions']['ou'] as $ouId) {
        $allOrgUnits[$ouId] = [
            'id' => $ouId,
            'displayName' => $jsonData['metaData']['items'][$ouId]['name'] ?? $ouId
        ];
    }
}

// Build a map from resolved period ID to user-entered period (e.g., 202506 => THIS_MONTH)
$periodIdToUserPeriod = [];
if (isset($jsonData['metaData']['dimensions']['pe'])) {
    // If user entered a single period filter, map all returned periods to that filter
    if (count($periodsForMapping) === 1) {
        foreach ($jsonData['metaData']['dimensions']['pe'] as $peId) {
            $periodIdToUserPeriod[$peId] = $periodsForMapping[0];
        }
    } else {
        // If multiple, try to map by order (DHIS2 usually preserves order)
        foreach ($jsonData['metaData']['dimensions']['pe'] as $idx => $peId) {
            $periodIdToUserPeriod[$peId] = $periodsForMapping[$idx] ?? $peId;
        }
    }
}

// Get all periods from response
$allPeriods = [];
if (isset($jsonData['metaData']['dimensions']['pe'])) {
    foreach ($jsonData['metaData']['dimensions']['pe'] as $peId) {
        $allPeriods[$peId] = [
            'id' => $peId,
            'displayName' => $jsonData['metaData']['items'][$peId]['name'] ?? $peId,
            'relativePeriod' => $periodIdToUserPeriod[$peId] ?? null
        ];
    }
}

// NEW: Create a map for values based on dimensions
$valueMap = [];
foreach ($jsonData['rows'] as $row) {
    // Determine row structure based on dimensions in the request
    $isOrgUnitDimension = isset($dimensionData['ou']);

    // Case 1: When ou is a dimension (dx, ou, value)
    if ($isOrgUnitDimension) {
        if (count($row) >= 3) {
            $dxId = $row[0];
            $ouId = $row[1];
            $value = $row[2];
            $valueMap[$dxId][$ouId] = $value;
        }
    }
    // Case 2: When ou is a filter (dx, value)
    else {
        if (count($row) >= 2) {
            $dxId = $row[0];
            $value = $row[1];
            // For filtered org units, associate value with each org unit
            foreach ($filteredOrgUnits as $ouId) {
                $valueMap[$dxId][$ouId] = $value;
            }
        }
    }
}

// Process each indicator
foreach ($dxIds as $dxId) {
    $itemInfo = $dataItemMetadata[$dxId] ?? [];

    $indicator = [
        'id' => $dxId,
        'displayName' => $itemInfo['displayName'] ?? ($jsonData['metaData']['items'][$dxId]['name'] ?? $dxId),
        'name' => $itemInfo['name'] ?? ($jsonData['metaData']['items'][$dxId]['name'] ?? $dxId),
        'shortName' => $itemInfo['shortName'] ?? 'N/A',
        'displayShortName' => $itemInfo['displayShortName'] ?? ($itemInfo['shortName'] ?? 'N/A'),
        'dimensionItemType' => $itemInfo['dimensionItemType'] ?? 'UNKNOWN',
        'organizationUnits' => array_values($allOrgUnits),
        'periods' => array_values($allPeriods),
        'data' => []
    ];

    // Create data entries for each org unit and period combination
    foreach ($allOrgUnits as $ouId => $ouInfo) {
        foreach ($allPeriods as $peId => $peInfo) {
            // Get value from map if available
            $value = $valueMap[$dxId][$ouId] ?? null;

            $indicator['data'][] = [
                'orgUnit' => $ouInfo,
                'period' => $peInfo,
                'value' => $value,
                'storedBy' => 'system',
                'created' => date('c'),
                'lastUpdated' => date('c')
            ];
        }
    }

    $result[] = $indicator;
}

header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
