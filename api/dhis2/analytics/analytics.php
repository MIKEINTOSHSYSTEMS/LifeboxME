<?php
// DHIS2 API JSON Fetcher with Enhanced Metadata

// Load environment variables
$envFile = __DIR__ . '/../../../.env.dev';
if (file_exists($envFile)) {
    $envVars = parse_ini_file($envFile);
} else {
    die("Error: .env.dev file not found.");
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

// DHIS2 API Configuration
$baseUrl = rtrim($envVars['DHIS2_BASE_URL'], '/');
$username = $envVars['DHIS2_USERNAME'];
$password = $envVars['DHIS2_PASSWORD'];

// API Endpoint
$apiEndpoint = '/api/analytics?dimension=dx:U8uxfPQwq4v&filter=ou:DEnI1SvTKlU&filter=pe:LAST_YEAR&displayProperty=NAME&includeNumDen=false&skipMeta=false&skipData=false';

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
    die("cURL Error: " . $error_msg);
}

// Get HTTP status code
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Check if the request was successful
if ($httpCode !== 200) {
    die("Error: HTTP request failed with status code $httpCode");
}

// Decode the JSON response
$jsonData = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error: Invalid JSON response from server");
}

// Fetch additional metadata from data items API
$dataItemMetadata = fetchDataItemsMetadata();

// Extract basic information
$dxId = $jsonData['metaData']['dimensions']['dx'][0] ?? null;
$ouId = $jsonData['metaData']['dimensions']['ou'][0] ?? null;
$peId = $jsonData['metaData']['dimensions']['pe'][0] ?? null;

// Get metadata from our API if available
$itemInfo = $dataItemMetadata[$dxId] ?? [];

// Build organization units info
$orgUnits = [
    [
        'id' => $ouId,
        'displayName' => $jsonData['metaData']['items'][$ouId]['name'] ?? null
    ]
];

// Build periods info
$periods = [
    [
        'id' => $peId,
        'displayName' => $jsonData['metaData']['items'][$peId]['name'] ?? null,
        'relativePeriod' => $jsonData['metaData']['items']['LAST_YEAR']['name'] ?? null
    ]
];

// Build data values
$dataValues = [];
if (!empty($jsonData['rows'])) {
    foreach ($jsonData['rows'] as $row) {
        $dataValues[] = [
            'value' => $row[1] ?? null,
            'storedBy' => 'system',
            'created' => date('c'),
            'lastUpdated' => date('c')
        ];
    }
}

// Build the final result
$result = [
    [
        'id' => $dxId,
        'displayName' => $itemInfo['displayName'] ?? ($jsonData['metaData']['items'][$dxId]['name'] ?? $dxId),
        'name' => $itemInfo['name'] ?? ($jsonData['metaData']['items'][$dxId]['name'] ?? $dxId),
        'shortName' => $itemInfo['shortName'] ?? 'N/A',
        'displayShortName' => $itemInfo['displayShortName'] ?? ($itemInfo['shortName'] ?? 'N/A'),
        'dimensionItemType' => $itemInfo['dimensionItemType'] ?? 'UNKNOWN',
        'organizationUnits' => $orgUnits,
        'periods' => $periods,
        'dataValues' => $dataValues
    ]
];

// Set the content type header to JSON
header('Content-Type: application/json');

// Output pretty-printed JSON
echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
