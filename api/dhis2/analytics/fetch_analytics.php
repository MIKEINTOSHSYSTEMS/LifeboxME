<?php
session_start();
ob_start();

// Database and environment configuration
$envFile = __DIR__ . '/../../../.env.dev';
$envVars = file_exists($envFile) ? parse_ini_file($envFile) : die(json_encode(['error' => 'Configuration error']));

// Database connection
$dbHost = $envVars['DB_HOST'] ?? 'localhost';
$dbPort = $envVars['POSTGRES_PORT'] ?? '5432';
$dbName = $envVars['POSTGRES_DB'] ?? 'lifebox_mesystem';
$dbUser = $envVars['POSTGRES_USER'] ?? 'postgres';
$dbPass = $envVars['POSTGRES_PASSWORD'] ?? 'mikeintosh';

try {
    $dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName;user=$dbUser;password=$dbPass";
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create settings table
    $db->exec("CREATE TABLE IF NOT EXISTS lifeboxme_dhis2_analytics_settings (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        dx TEXT NOT NULL,
        ou TEXT NOT NULL,
        pe TEXT NOT NULL,
        display_property VARCHAR(50) DEFAULT 'NAME',
        include_num_den BOOLEAN DEFAULT false,
        skip_meta BOOLEAN DEFAULT false,
        skip_data BOOLEAN DEFAULT false,
        paging BOOLEAN DEFAULT false,
        page_size INTEGER DEFAULT 50,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // Create data table with enhanced metadata columns
    $db->exec("CREATE TABLE IF NOT EXISTS lifeboxme_dhis2_analytics_data (
        id SERIAL PRIMARY KEY,
        setting_id INTEGER NOT NULL,
        dx_id VARCHAR(255) NOT NULL,
        dx_name VARCHAR(255) NOT NULL,
        dx_shortname VARCHAR(255),
        dx_displayname VARCHAR(255),
        dx_dimensiontype VARCHAR(50),
        ou_id VARCHAR(255) NOT NULL,
        ou_name VARCHAR(255) NOT NULL,
        pe_id VARCHAR(255) NOT NULL,
        pe_name VARCHAR(255) NOT NULL,
        pe_relativeperiod VARCHAR(255),
        value DECIMAL(15,4) NULL,
        stored_by VARCHAR(255) DEFAULT 'system',
        created TIMESTAMP NULL,
        last_updated TIMESTAMP NULL,
        fetched_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (setting_id) REFERENCES lifeboxme_dhis2_analytics_settings(id)
    )");
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// Function to fetch data items metadata (same as index.php)
function fetchDataItemsMetadata($envVars)
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

// Handle actions
$action = $_POST['action'] ?? '';
$response = ['status' => '', 'message' => '', 'data' => []];

if ($action) {
    try {
        switch ($action) {
            case 'save_setting':
                $name = $_POST['name'] ?? '';
                // Remove urlencode - store raw IDs
                $dx = implode(',', array_filter($_POST['dx'] ?? []));
                $ou = implode(',', array_filter($_POST['ou'] ?? []));
                $pe = implode(',', array_filter($_POST['pe'] ?? []));

                if (!$name || !$dx || !$ou || !$pe) {
                    throw new Exception("All fields are required");
                }

                $stmt = $db->prepare("INSERT INTO lifeboxme_dhis2_analytics_settings 
                    (name, dx, ou, pe, display_property, include_num_den, skip_meta, skip_data, paging, page_size) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([
                    $name,
                    $dx,
                    $ou,
                    $pe,
                    $_POST['display_property'] ?? 'NAME',
                    $_POST['include_num_den'] ? 1 : 0,
                    $_POST['skip_meta'] ? 1 : 0,
                    $_POST['skip_data'] ? 1 : 0,
                    $_POST['paging'] ? 1 : 0,
                    $_POST['page_size'] ?? 50
                ]);

                $response = ['status' => 'success', 'message' => 'Setting saved successfully'];
                break;

            case 'update_setting':
                $id = $_POST['id'] ?? 0;
                $name = $_POST['name'] ?? '';
                // Remove urlencode - store raw IDs
                $dx = implode(',', array_filter($_POST['dx'] ?? []));
                $ou = implode(',', array_filter($_POST['ou'] ?? []));
                $pe = implode(',', array_filter($_POST['pe'] ?? []));

                if (!$id || !$name || !$dx || !$ou || !$pe) {
                    throw new Exception("Invalid request");
                }

                $stmt = $db->prepare("UPDATE lifeboxme_dhis2_analytics_settings 
                    SET name = ?, dx = ?, ou = ?, pe = ?, display_property = ?, 
                    include_num_den = ?, skip_meta = ?, skip_data = ?, paging = ?, page_size = ?, updated_at = CURRENT_TIMESTAMP 
                    WHERE id = ?");
                $stmt->execute([
                    $name,
                    $dx,
                    $ou,
                    $pe,
                    $_POST['display_property'] ?? 'NAME',
                    $_POST['include_num_den'] ? 1 : 0,
                    $_POST['skip_meta'] ? 1 : 0,
                    $_POST['skip_data'] ? 1 : 0,
                    $_POST['paging'] ? 1 : 0,
                    $_POST['page_size'] ?? 50,
                    $id
                ]);

                $response = ['status' => 'success', 'message' => 'Setting updated successfully'];
                break;

            case 'delete_setting':
                $id = $_POST['id'] ?? 0;
                if (!$id) throw new Exception("Invalid ID");

                $db->beginTransaction();
                $db->exec("DELETE FROM lifeboxme_dhis2_analytics_data WHERE setting_id = $id");
                $db->exec("DELETE FROM lifeboxme_dhis2_analytics_settings WHERE id = $id");
                $db->commit();

                $response = ['status' => 'success', 'message' => 'Setting deleted'];
                break;

            case 'fetch_data':
                $id = $_POST['id'] ?? 0;
                if (!$id) throw new Exception("Invalid setting ID");

                $setting = $db->query("SELECT * FROM lifeboxme_dhis2_analytics_settings WHERE id = $id")
                    ->fetch(PDO::FETCH_ASSOC);

                if (!$setting) throw new Exception("Setting not found");

                // Build API URL with proper semicolon separation
                $dxIds = explode(',', $setting['dx']);
                $ouIds = explode(',', $setting['ou']);
                $peIds = explode(',', $setting['pe']);

                $params = [
                    'dimension' => 'dx:' . implode(';', $dxIds),
                    'displayProperty' => $setting['display_property'],
                    'includeNumDen' => $setting['include_num_den'] ? 'true' : 'false',
                    'skipMeta' => $setting['skip_meta'] ? 'true' : 'false',
                    'skipData' => $setting['skip_data'] ? 'true' : 'false',
                    'paging' => $setting['paging'] ? 'true' : 'false',
                    'pageSize' => $setting['page_size']
                ];

                // Build filter parameters with semicolon separation
                $filterParams = [
                    'ou:' . implode(';', $ouIds),
                    'pe:' . implode(';', $peIds)
                ];

                // Build query string
                $queryParts = [];
                $queryParts[] = http_build_query($params);
                foreach ($filterParams as $filter) {
                    $queryParts[] = 'filter=' . urlencode($filter);
                }
                $queryString = implode('&', $queryParts);

                // Fetch from DHIS2 API
                $baseUrl = rtrim($envVars['DHIS2_BASE_URL'], '/');
                $username = $envVars['DHIS2_USERNAME'];
                $password = $envVars['DHIS2_PASSWORD'];

                $url = $baseUrl . '/api/analytics?' . $queryString;
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                    CURLOPT_USERPWD => "$username:$password",
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_HTTPHEADER => ['Accept: application/json'],
                    CURLOPT_TIMEOUT => 60 // Increased timeout
                ]);

                $apiResponse = curl_exec($ch);
                if (curl_errno($ch)) {
                    throw new Exception("DHIS2 API error: " . curl_error($ch));
                }

                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                if ($httpCode !== 200) {
                    $errorDetails = json_decode($apiResponse, true)['message'] ?? $apiResponse;
                    throw new Exception("DHIS2 returned HTTP $httpCode: $errorDetails");
                }

                $data = json_decode($apiResponse, true);
                if (!$data) throw new Exception("Invalid API response");

                // Fetch additional metadata
                $dataItemMetadata = fetchDataItemsMetadata($envVars);

                // Process response like index.php
                $dxIds = $data['metaData']['dimensions']['dx'] ?? [];
                $ouIds = $data['metaData']['dimensions']['ou'] ?? [];
                $peIds = $data['metaData']['dimensions']['pe'] ?? [];

                // Build org units array
                $allOrgUnits = [];
                foreach ($ouIds as $ouId) {
                    $allOrgUnits[$ouId] = [
                        'id' => $ouId,
                        'name' => $data['metaData']['items'][$ouId]['name'] ?? $ouId
                    ];
                }

                // Build a map from resolved period ID to user-entered period (e.g., 202506 => THIS_MONTH)
                $userPeriods = $peIds; // These are the periods returned by DHIS2 (e.g., 202506)
                $requestedPeriods = explode(',', $setting['pe']); // These are the user-entered periods (e.g., THIS_MONTH)

                $periodIdToUserPeriod = [];
                if (count($requestedPeriods) === 1) {
                    // If only one user period, map all returned periods to that
                    foreach ($userPeriods as $peId) {
                        $periodIdToUserPeriod[$peId] = $requestedPeriods[0];
                    }
                } else {
                    // If multiple, map by order
                    foreach ($userPeriods as $idx => $peId) {
                        $periodIdToUserPeriod[$peId] = $requestedPeriods[$idx] ?? $peId;
                    }
                }

                // Build periods array
                $allPeriods = [];
                foreach ($peIds as $peId) {
                    $allPeriods[$peId] = [
                        'id' => $peId,
                        'name' => $data['metaData']['items'][$peId]['name'] ?? $peId,
                        'relativePeriod' => $periodIdToUserPeriod[$peId] ?? null
                    ];
                }

                // Build dx value map
                $dxValueMap = [];
                foreach ($data['rows'] as $row) {
                    if (isset($row[0])) {
                        $dxValueMap[$row[0]] = $row[1] ?? null;
                    }
                }

                // Clear existing data
                $db->exec("DELETE FROM lifeboxme_dhis2_analytics_data WHERE setting_id = $id");

                // Set the MINVALUE for the sequence
                $db->exec('ALTER SEQUENCE "public"."lifeboxme_dhis2_analytics_data_id_seq" MINVALUE 0;');

                // Reset the sequence to 0
                $db->exec('SELECT setval(\'"public"."lifeboxme_dhis2_analytics_data_id_seq"\', 0, true);');


                // Prepare insert statement with new columns
                $stmt = $db->prepare("INSERT INTO lifeboxme_dhis2_analytics_data 
                    (setting_id, dx_id, dx_name, dx_shortname, dx_displayname, dx_dimensiontype, 
                    ou_id, ou_name, pe_id, pe_name, pe_relativeperiod, value, stored_by, created, last_updated) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $inserted = 0;
                $now = date('Y-m-d H:i:s');

                foreach ($dxIds as $dxId) {
                    $itemInfo = $dataItemMetadata[$dxId] ?? [];

                    // Get metadata with proper fallbacks
                    $dxName = $itemInfo['displayName'] ?? ($data['metaData']['items'][$dxId]['name'] ?? $dxId);
                    $dxShortName = $itemInfo['shortName'] ?? 'N/A';
                    $dxDisplayName = $itemInfo['displayShortName'] ?? ($itemInfo['displayName'] ?? $dxName);
                    $dxDimensionType = $itemInfo['dimensionItemType'] ?? 'UNKNOWN';

                    foreach ($allOrgUnits as $ou) {
                        foreach ($allPeriods as $pe) {
                            $value = $dxValueMap[$dxId] ?? null;

                            $stmt->execute([
                                $id,
                                $dxId,
                                $dxName,
                                $dxShortName,
                                $dxDisplayName,
                                $dxDimensionType,
                                $ou['id'],
                                $ou['name'],
                                $pe['id'],
                                $pe['name'],
                                $pe['relativePeriod'] ?? $pe['name'],
                                $value,
                                'system',
                                $now,
                                $now
                            ]);
                            $inserted++;
                        }
                    }
                }

                $response = [
                    'status' => 'success',
                    'message' => "Fetched $inserted records",
                    'data_count' => $inserted
                ];
                break;

            case 'delete_data':
                $id = $_POST['id'] ?? 0;
                $type = $_POST['type'] ?? '';

                if (!$id) throw new Exception("Invalid setting ID");

                if ($type === 'all') {
                    $db->exec("DELETE FROM lifeboxme_dhis2_analytics_data WHERE setting_id = $id");
                    $message = "All data deleted";
                } elseif ($type === 'non_null') {
                    $db->exec("DELETE FROM lifeboxme_dhis2_analytics_data WHERE setting_id = $id AND value IS NOT NULL");
                    $message = "Non-null data deleted";
                } else {
                    throw new Exception("Invalid delete type");
                }

                $response = ['status' => 'success', 'message' => $message];
                break;

            case 'get_settings':
                $settings = $db->query("SELECT * FROM lifeboxme_dhis2_analytics_settings ORDER BY created_at DESC")
                    ->fetchAll(PDO::FETCH_ASSOC);
                $response = ['status' => 'success', 'data' => $settings];
                break;

            case 'get_data':
                $id = $_POST['id'] ?? 0;
                if (!$id) {
                    $response = [
                        'draw' => intval($_POST['draw'] ?? 1),
                        'recordsTotal' => 0,
                        'recordsFiltered' => 0,
                        'data' => []
                    ];
                    break;
                }

                $page = $_POST['start'] ?? 0;
                $length = $_POST['length'] ?? 10;
                $search = $_POST['search']['value'] ?? '';

                $query = "SELECT * FROM lifeboxme_dhis2_analytics_data WHERE setting_id = $id";
                $countQuery = "SELECT COUNT(*) FROM lifeboxme_dhis2_analytics_data WHERE setting_id = $id";

                if ($search) {
                    $query .= " AND (dx_name ILIKE '%$search%' OR ou_name ILIKE '%$search%' OR pe_name ILIKE '%$search%' OR pe_relativeperiod ILIKE '%$search%')";
                    $countQuery .= " AND (dx_name ILIKE '%$search%' OR ou_name ILIKE '%$search%' OR pe_name ILIKE '%$search%' OR pe_relativeperiod ILIKE '%$search%')";
                }

                $total = $db->query($countQuery)->fetchColumn();

                $orderColumn = $_POST['order'][0]['column'] ?? 0;
                $orderDir = $_POST['order'][0]['dir'] ?? 'asc';
                // Add all columns to DataTable
                $columns = [
                    'id',
                    'dx_name',
                    'dx_shortname',
                    'dx_displayname',
                    'dx_dimensiontype',
                    'ou_name',
                    'pe_name',
                    'pe_relativeperiod',
                    'value',
                    'fetched_at'
                ];
                $orderBy = $columns[$orderColumn] . ' ' . strtoupper($orderDir);

                $query .= " ORDER BY $orderBy LIMIT $length OFFSET $page";
                $data = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

                $response = [
                    'draw' => intval($_POST['draw'] ?? 1),
                    'recordsTotal' => intval($total),
                    'recordsFiltered' => intval($total),
                    'data' => $data
                ];
                break;

            default:
                $response = ['status' => 'error', 'message' => 'Invalid action'];
        }
    } catch (Exception $e) {
        $response = ['status' => 'error', 'message' => $e->getMessage()];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHIS2 Analytics Fetcher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #078ca7;
            --secondary: #3498db;
            --success: #27ae60;
            --light-bg: #f8f9fa;
        }

        body {
            background-color: var(--light-bg);
            padding-top: 20px;
            padding-bottom: 50px;
            color: #004477;
        }

        .container {
            max-width: 100%;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border: none;
        }

        .card-header {
            background-color: var(--primary);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            font-weight: 600;
        }

        .btn-primary {
            background-color: var(--secondary);
            border: none;
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .log-container {
            height: 300px;
            overflow-y: auto;
            background-color: #2c3e50;
            color: #ecf0f1;
            border-radius: 5px;
            padding: 15px;
            font-family: monospace;
        }

        .log-entry {
            margin-bottom: 5px;
            padding: 3px 0;
            border-bottom: 1px solid #34495e;
        }

        .log-timestamp {
            color: #3498db;
            margin-right: 10px;
        }

        .log-error {
            color: #ff6b6b;
        }

        .log-success {
            color: #51cf66;
        }

        .tab-content {
            padding: 20px 0;
        }

        .setting-item {
            border-left: 4px solid var(--secondary);
            margin-bottom: 15px;
            padding: 10px 15px;
            background-color: white;
            border-radius: 0 5px 5px 0;
        }

        .form-check-label {
            user-select: none;
        }

        /* Make table more compact */
        .table th,
        .table td {
            padding: 0.5rem;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="mb-3"><i class="fas fa-chart-line me-2"></i>DHIS2 Analytics Fetcher</h1>
                <p class="lead">Manage and fetch analytics data from DHIS2</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-cog me-2"></i>Analytics Settings
                    </div>
                    <div class="card-body">
                        <form id="settingForm">
                            <input type="hidden" id="settingId" name="id">

                            <div class="mb-3">
                                <label class="form-label">Setting Name</label>
                                <input type="text" class="form-control" id="settingName" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Data Elements (dx)</label>
                                <div id="dxContainer" class="mb-2">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control dx-input" placeholder="Data element ID">
                                        <button type="button" class="btn btn-outline-danger btn-remove-dx"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addDx">
                                    <i class="fas fa-plus me-1"></i>Add DX
                                </button>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Organisation Units (ou)</label>
                                <div id="ouContainer" class="mb-2">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control ou-input" placeholder="Org unit ID">
                                        <button type="button" class="btn btn-outline-danger btn-remove-ou"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addOu">
                                    <i class="fas fa-plus me-1"></i>Add OU
                                </button>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Periods (pe)</label>
                                <div id="peContainer" class="mb-2">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control pe-input" placeholder="Period ID">
                                        <button type="button" class="btn btn-outline-danger btn-remove-pe"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addPe">
                                    <i class="fas fa-plus me-1"></i>Add PE
                                </button>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Display Property</label>
                                <select class="form-select" name="display_property">
                                    <option value="NAME">Name</option>
                                    <option value="SHORTNAME">Short Name</option>
                                    <option value="CODE">Code</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="include_num_den" id="includeNumDen">
                                        <label class="form-check-label" for="includeNumDen">Include Num/Den</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="paging" id="paging">
                                        <label class="form-check-label" for="paging">Enable Paging</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="skip_meta" id="skipMeta">
                                        <label class="form-check-label" for="skipMeta">Skip Metadata</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="skip_data" id="skipData">
                                        <label class="form-check-label" for="skipData">Skip Data</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Page Size</label>
                                <input type="number" class="form-control" name="page_size" value="50" min="1">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" id="saveBtn">
                                    <i class="fas fa-save me-1"></i>Save Setting
                                </button>
                                <button type="button" class="btn btn-secondary" id="updateBtn" style="display:none;">
                                    <i class="fas fa-sync me-1"></i>Update Setting
                                </button>
                                <button type="button" class="btn btn-danger" id="deleteBtn" style="display:none;">
                                    <i class="fas fa-trash me-1"></i>Delete Setting
                                </button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="fas fa-times me-1"></i>Reset Form
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-database me-2"></i>Data Management
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <select class="form-select" id="settingsSelect">
                                        <option value="" disabled selected>Select a setting</option>
                                    </select>
                                    <button class="btn btn-primary" type="button" id="loadBtn">
                                        <i class="fas fa-download me-1"></i>Load
                                    </button>
                                    <button class="btn btn-success" type="button" id="fetchBtn">
                                        <i class="fas fa-cloud-download-alt me-1"></i>Fetch Data
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-danger me-md-2" type="button" id="deleteAllBtn">
                                        <i class="fas fa-trash me-1"></i>Delete All Data
                                    </button>
                                    <button class="btn btn-warning" type="button" id="deleteNonNullBtn">
                                        <i class="fas fa-filter me-1"></i>Delete Non-Null
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5>Saved Settings</h5>
                            <div id="settingsList" class="row">
                                <!-- Settings will be loaded here -->
                            </div>
                        </div>

                        <div>
                            <h5>Data Preview</h5>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DX Name</th>
                                            <th>DX Short</th>
                                            <th>DX Display</th>
                                            <th>DX Type</th>
                                            <th>Org Unit</th>
                                            <th>Period</th>
                                            <th>Relative Period</th>
                                            <th>Value</th>
                                            <th>Fetched At</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-history me-2"></i>Activity Log
                    </div>
                    <div class="card-body">
                        <div class="log-container" id="logContainer">
                            <div class="log-entry">
                                <span class="log-timestamp"><?= date('H:i:s') ?></span>
                                <span>System initialized</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable with more columns
            const dataTable = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'fetch_analytics.php',
                    type: 'POST',
                    data: function(d) {
                        d.action = 'get_data';
                        d.id = $('#settingsSelect').val() || 0;
                    }
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'dx_name'
                    },
                    {
                        data: 'dx_shortname'
                    },
                    {
                        data: 'dx_displayname'
                    },
                    {
                        data: 'dx_dimensiontype'
                    },
                    {
                        data: 'ou_name'
                    },
                    {
                        data: 'pe_name'
                    },
                    {
                        data: 'pe_relativeperiod'
                    },
                    {
                        data: 'value'
                    },
                    {
                        data: 'fetched_at'
                    }
                ]
            });

            // Add log entry with type-based coloring
            function addLog(message, type = 'info') {
                const timestamp = new Date().toLocaleTimeString();
                const typeClass = type === 'error' ? 'log-error' :
                    type === 'success' ? 'log-success' : '';

                const logEntry = $('<div class="log-entry">')
                    .append(`<span class="log-timestamp">${timestamp}</span>`)
                    .append(`<span class="${typeClass}">${message}</span>`);

                $('#logContainer').prepend(logEntry);
                $('#logContainer').scrollTop(0);
            }

            // Add input field
            function addInputField(container, className, placeholder) {
                const fieldId = Date.now();
                const field = $(`
                <div class="input-group mb-2" id="field-${fieldId}">
                    <input type="text" class="form-control ${className}" placeholder="${placeholder}">
                    <button type="button" class="btn btn-outline-danger btn-remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `);

                container.append(field);
                field.find('.btn-remove').click(function() {
                    if (container.children().length > 1) {
                        $(this).closest('.input-group').remove();
                    } else {
                        $(this).siblings('input').val('');
                    }
                });
            }

            // Initialize input fields
            $('#addDx').click(() => addInputField($('#dxContainer'), 'dx-input', 'Data element ID'));
            $('#addOu').click(() => addInputField($('#ouContainer'), 'ou-input', 'Org unit ID'));
            $('#addPe').click(() => addInputField($('#peContainer'), 'pe-input', 'Period ID'));

            // Load settings
            function loadSettings() {
                $.post('fetch_analytics.php', {
                    action: 'get_settings'
                }, function(response) {
                    if (response.status === 'success') {
                        // Update dropdown
                        $('#settingsSelect').empty().append('<option value="" disabled selected>Select a setting</option>');
                        response.data.forEach(setting => {
                            $('#settingsSelect').append(`<option value="${setting.id}">${setting.name}</option>`);
                        });

                        // Update settings list
                        $('#settingsList').empty();
                        response.data.forEach(setting => {
                            const item = $(`
                            <div class="col-md-6">
                                <div class="setting-item">
                                    <h6>${setting.name}</h6>
                                    <p class="mb-1"><strong>DX:</strong> ${setting.dx.split(',').slice(0, 3).join(', ')}${setting.dx.split(',').length > 3 ? '...' : ''}</p>
                                    <p class="mb-1"><strong>OU:</strong> ${setting.ou.split(',').slice(0, 3).join(', ')}${setting.ou.split(',').length > 3 ? '...' : ''}</p>
                                    <p class="mb-1"><strong>PE:</strong> ${setting.pe.split(',').slice(0, 3).join(', ')}${setting.pe.split(',').length > 3 ? '...' : ''}</p>
                                    <small class="text-muted">Created: ${new Date(setting.created_at).toLocaleString()}</small>
                                    <div class="mt-2">
                                        <button class="btn btn-sm btn-outline-primary edit-setting" data-id="${setting.id}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `);
                            $('#settingsList').append(item);
                        });

                        // Add edit handlers
                        $('.edit-setting').click(function() {
                            const id = $(this).data('id');
                            const setting = response.data.find(s => s.id == id);

                            if (setting) {
                                $('#settingId').val(setting.id);
                                $('#settingName').val(setting.name);

                                // Clear and populate DX
                                $('#dxContainer').empty();
                                setting.dx.split(',').forEach(dx => {
                                    if (dx) {
                                        addInputField($('#dxContainer'), 'dx-input', 'Data element ID');
                                        $('#dxContainer').find('.dx-input').last().val(dx);
                                    }
                                });

                                // Clear and populate OU
                                $('#ouContainer').empty();
                                setting.ou.split(',').forEach(ou => {
                                    if (ou) {
                                        addInputField($('#ouContainer'), 'ou-input', 'Org unit ID');
                                        $('#ouContainer').find('.ou-input').last().val(ou);
                                    }
                                });

                                // Clear and populate PE
                                $('#peContainer').empty();
                                setting.pe.split(',').forEach(pe => {
                                    if (pe) {
                                        addInputField($('#peContainer'), 'pe-input', 'Period ID');
                                        $('#peContainer').find('.pe-input').last().val(pe);
                                    }
                                });

                                // Set other values
                                $('[name="display_property"]').val(setting.display_property);
                                $('[name="include_num_den"]').prop('checked', setting.include_num_den === '1');
                                $('[name="skip_meta"]').prop('checked', setting.skip_meta === '1');
                                $('[name="skip_data"]').prop('checked', setting.skip_data === '1');
                                $('[name="paging"]').prop('checked', setting.paging === '1');
                                $('[name="page_size"]').val(setting.page_size);

                                // Show update/delete buttons
                                $('#saveBtn').hide();
                                $('#updateBtn, #deleteBtn').show();

                                addLog(`Loaded setting: ${setting.name}`);
                            }
                        });
                    }
                }, 'json');
            }

            // Load settings on page load
            loadSettings();

            // Form submission
            $('#settingForm').submit(function(e) {
                e.preventDefault();

                const formData = {
                    action: 'save_setting',
                    name: $('#settingName').val(),
                    dx: $('.dx-input').map((i, el) => $(el).val()).get(),
                    ou: $('.ou-input').map((i, el) => $(el).val()).get(),
                    pe: $('.pe-input').map((i, el) => $(el).val()).get(),
                    display_property: $('[name="display_property"]').val(),
                    include_num_den: $('[name="include_num_den"]').prop('checked') ? 1 : 0,
                    skip_meta: $('[name="skip_meta"]').prop('checked') ? 1 : 0,
                    skip_data: $('[name="skip_data"]').prop('checked') ? 1 : 0,
                    paging: $('[name="paging"]').prop('checked') ? 1 : 0,
                    page_size: $('[name="page_size"]').val()
                };

                $.post('fetch_analytics.php', formData, function(response) {
                    if (response.status === 'success') {
                        addLog(response.message, 'success');
                        loadSettings();
                        $('#settingForm')[0].reset();
                        $('#dxContainer, #ouContainer, #peContainer').empty();
                        addInputField($('#dxContainer'), 'dx-input', 'Data element ID');
                        addInputField($('#ouContainer'), 'ou-input', 'Org unit ID');
                        addInputField($('#peContainer'), 'pe-input', 'Period ID');
                    } else {
                        addLog(response.message, 'error');
                    }
                }, 'json');
            });

            // Update button
            $('#updateBtn').click(function() {
                const id = $('#settingId').val();
                if (!id) return;

                const formData = {
                    action: 'update_setting',
                    id: id,
                    name: $('#settingName').val(),
                    dx: $('.dx-input').map((i, el) => $(el).val()).get(),
                    ou: $('.ou-input').map((i, el) => $(el).val()).get(),
                    pe: $('.pe-input').map((i, el) => $(el).val()).get(),
                    display_property: $('[name="display_property"]').val(),
                    include_num_den: $('[name="include_num_den"]').prop('checked') ? 1 : 0,
                    skip_meta: $('[name="skip_meta"]').prop('checked') ? 1 : 0,
                    skip_data: $('[name="skip_data"]').prop('checked') ? 1 : 0,
                    paging: $('[name="paging"]').prop('checked') ? 1 : 0,
                    page_size: $('[name="page_size"]').val()
                };

                $.post('fetch_analytics.php', formData, function(response) {
                    if (response.status === 'success') {
                        addLog(response.message, 'success');
                        loadSettings();
                        $('#settingForm')[0].reset();
                        $('#dxContainer, #ouContainer, #peContainer').empty();
                        addInputField($('#dxContainer'), 'dx-input', 'Data element ID');
                        addInputField($('#ouContainer'), 'ou-input', 'Org unit ID');
                        addInputField($('#peContainer'), 'pe-input', 'Period ID');
                        $('#saveBtn').show();
                        $('#updateBtn, #deleteBtn').hide();
                    } else {
                        addLog(response.message, 'error');
                    }
                }, 'json');
            });

            // Delete button
            $('#deleteBtn').click(function() {
                if (!confirm('Are you sure you want to delete this setting and all its data?')) return;

                const id = $('#settingId').val();
                if (!id) return;

                $.post('fetch_analytics.php', {
                    action: 'delete_setting',
                    id: id
                }, function(response) {
                    if (response.status === 'success') {
                        addLog(response.message, 'success');
                        loadSettings();
                        $('#settingForm')[0].reset();
                        $('#dxContainer, #ouContainer, #peContainer').empty();
                        addInputField($('#dxContainer'), 'dx-input', 'Data element ID');
                        addInputField($('#ouContainer'), 'ou-input', 'Org unit ID');
                        addInputField($('#peContainer'), 'pe-input', 'Period ID');
                        $('#saveBtn').show();
                        $('#updateBtn, #deleteBtn').hide();
                        dataTable.ajax.reload(); // Reload table after delete
                    } else {
                        addLog(response.message, 'error');
                    }
                }, 'json');
            });

            // Fetch data button
            $('#fetchBtn').click(function() {
                const settingId = $('#settingsSelect').val();
                if (!settingId) {
                    alert('Please select a setting first');
                    return;
                }

                if (!confirm('Fetch data for this setting? This may take some time.')) return;

                addLog(`Starting data fetch for setting ID: ${settingId}`);
                addLog(`Starting data fetch for setting: ${settingName}`);

                $.post('fetch_analytics.php', {
                    action: 'fetch_data',
                    id: settingId
                }, function(response) {
                    if (response.status === 'success') {
                        addLog(response.message, 'success');
                        dataTable.ajax.reload();
                    } else {
                        addLog(response.message, 'error');
                    }
                }, 'json').fail(function(xhr) {
                    addLog('Fetch operation failed: ' + xhr.responseText, 'error');
                });
            });

            // Load button
            $('#loadBtn').click(function() {
                const settingId = $('#settingsSelect').val();
                if (!settingId) {
                    alert('Please select a setting first');
                    return;
                }

                // Find the setting in the list and trigger edit
                $(`.edit-setting[data-id="${settingId}"]`).click();
                addLog(`Loaded setting ID: ${settingId}`);
            });

            // Delete data buttons
            $('#deleteAllBtn').click(function() {
                const settingId = $('#settingsSelect').val();
                if (!settingId) {
                    alert('Please select a setting first');
                    return;
                }

                if (!confirm('Delete ALL data for this setting?')) return;

                $.post('fetch_analytics.php', {
                    action: 'delete_data',
                    id: settingId,
                    type: 'all'
                }, function(response) {
                    if (response.status === 'success') {
                        addLog(response.message, 'success');
                        dataTable.ajax.reload();
                    } else {
                        addLog(response.message, 'error');
                    }
                }, 'json');
            });

            $('#deleteNonNullBtn').click(function() {
                const settingId = $('#settingsSelect').val();
                if (!settingId) {
                    alert('Please select a setting first');
                    return;
                }

                if (!confirm('Delete all NON-NULL data for this setting?')) return;

                $.post('fetch_analytics.php', {
                    action: 'delete_data',
                    id: settingId,
                    type: 'non_null'
                }, function(response) {
                    if (response.status === 'success') {
                        addLog(response.message, 'success');
                        dataTable.ajax.reload();
                    } else {
                        addLog(response.message, 'error');
                    }
                }, 'json');
            });
        });
    </script>
</body>

</html>
<?php
ob_end_flush();
?>