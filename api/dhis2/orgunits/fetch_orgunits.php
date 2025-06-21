<?php
// fetch_orgunits.php

if (ob_get_level()) ob_end_clean();

// Handle SSE request first
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'fetch':
            fetchAndStoreData();
            exit;
    }
}

// Then handle regular AJAX requests
$isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

if ($isAjax && isset($_POST['action'])) {
    handleAjaxRequest();
    exit;
}

// Regular page load
displayPage();

function handleAjaxRequest()
{
    header('Content-Type: application/json');

    try {
        switch ($_POST['action']) {
            case 'fetch':
                fetchAndStoreData();
                break;
            case 'get_data':
                getStoredData();
                break;
            case 'test_connection':
                testConnections();
                break;
            case 'get_metadata':
                getMetadata();
                break;
            default:
                throw new Exception("Invalid action");
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

function displayPage()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DHIS2 Organization Units Fetcher</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <style>
            .card {
                margin-top: 20px;
            }

            .progress-container {
                margin: 20px 0;
            }

            .log-container {
                height: 300px;
                overflow-y: auto;
                background-color: #f8f9fa;
                border-radius: 5px;
                padding: 15px;
                margin-top: 20px;
                font-family: monospace;
                font-size: 14px;
            }

            .log-entry {
                margin-bottom: 5px;
                border-bottom: 1px solid #eee;
                padding-bottom: 5px;
            }

            .log-error {
                color: #dc3545;
                font-weight: bold;
            }

            .log-warning {
                color: #ffc107;
            }

            .log-success {
                color: #28a745;
            }

            .log-debug {
                color: #6c757d;
            }

            .spinner {
                animation: spin 1s linear infinite;
                display: inline-block;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            #dataTable_wrapper {
                margin-top: 20px;
            }

            .btn-container {
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>DHIS2 Organization Units Fetcher</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <button id="fetchBtn" class="btn btn-primary me-2">
                                    <span class="spinner" id="fetchSpinner" style="display:none;">↻</span>
                                    Start Fetching Data
                                </button>
                                <button id="testConnBtn" class="btn btn-secondary">
                                    Test Connections
                                </button>
                            </div>
                            <div class="progress-container">
                                <div id="progressStatus" class="alert alert-info">
                                    Ready to fetch data
                                </div>
                                <div class="progress">
                                    <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>
                            <div class="log-container" id="logContainer"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info">
                                <strong>Last Fetch:</strong> <span id="lastFetchTime"><?= getLastFetchTime() ?></span>
                                <br>
                                <strong>Total Records:</strong> <span id="totalRecords"><?= getTotalRecords() ?></span>
                                <br>
                                <strong>Database Status:</strong> <span id="dbStatus">Unknown</span>
                                <br>
                                <strong>DHIS2 Status:</strong> <span id="dhis2Status">Unknown</span>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Level</th>
                                    <th>Lifebox ID</th>
                                    <th>Lifebox</th>
                                    <th>Continent ID</th>
                                    <th>Continent</th>
                                    <th>Country ID</th>
                                    <th>Country</th>
                                    <th>Facility ID</th>
                                    <th>Facility</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be loaded via AJAX -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
                // Initialize DataTable
                const table = $('#dataTable').DataTable({
                    ajax: {
                        url: 'fetch_orgunits.php',
                        type: 'POST',
                        data: {
                            action: 'get_data'
                        },
                        dataSrc: 'data'
                    },
                    columns: [{
                            data: 'level'
                        },
                        {
                            data: 'lb_int_id'
                        },
                        {
                            data: 'lb_int'
                        },
                        {
                            data: 'cont_id'
                        },
                        {
                            data: 'continent'
                        },
                        {
                            data: 'count_id'
                        },
                        {
                            data: 'country'
                        },
                        {
                            data: 'hosp_fac_id'
                        },
                        {
                            data: 'hospital_facility'
                        }
                    ],
                    pageLength: 10,
                    responsive: true
                });

                // Fetch button click handler
                $('#fetchBtn').click(function() {
                    if (confirm('Are you sure you want to fetch new data? This will replace all existing data.')) {
                        startFetch();
                    }
                });

                // Test connection button
                $('#testConnBtn').click(function() {
                    testConnections();
                });

                function startFetch() {
                    $('#fetchSpinner').show();
                    $('#fetchBtn').prop('disabled', true);
                    $('#testConnBtn').prop('disabled', true);
                    $('#logContainer').empty();
                    $('#progressBar').css('width', '0%').removeClass('bg-success bg-danger').addClass('progress-bar-animated');

                    const eventSource = new EventSource('fetch_orgunits.php?action=fetch');

                    eventSource.onmessage = function(e) {
                        const data = JSON.parse(e.data);

                        if (data.message) {
                            const logClass = data.type || 'log-entry';
                            $('#logContainer').append(`<div class="${logClass}">${data.message}</div>`);
                            $('#logContainer').scrollTop($('#logContainer')[0].scrollHeight);
                        }

                        if (data.progress !== undefined) {
                            $('#progressBar').css('width', data.progress + '%');

                            if (data.progress === 100) {
                                $('#progressBar').removeClass('progress-bar-animated').addClass('bg-success');
                                $('#progressStatus').removeClass('alert-info').addClass('alert-success')
                                    .text('Process completed successfully!');
                                $('#fetchSpinner').hide();
                                $('#fetchBtn').prop('disabled', false);
                                $('#testConnBtn').prop('disabled', false);
                                eventSource.close();

                                // Update metadata and reload data
                                updateMetadata();
                                table.ajax.reload();
                            } else if (data.type === 'log-error') {
                                $('#progressBar').removeClass('progress-bar-animated').addClass('bg-danger');
                                $('#progressStatus').removeClass('alert-info').addClass('alert-danger')
                                    .text('Error occurred during fetch');
                                $('#fetchSpinner').hide();
                                $('#fetchBtn').prop('disabled', false);
                                $('#testConnBtn').prop('disabled', false);
                            } else {
                                $('#progressStatus').text(data.progress + '% - ' + (data.message || 'Processing'));
                            }
                        }
                    };

                    eventSource.onerror = function() {
                        $('#progressBar').removeClass('progress-bar-animated').addClass('bg-danger');
                        $('#progressStatus').removeClass('alert-info').addClass('alert-danger')
                            .text('Error occurred during fetch');
                        $('#fetchSpinner').hide();
                        $('#fetchBtn').prop('disabled', false);
                        $('#testConnBtn').prop('disabled', false);
                        eventSource.close();
                    };
                }

                function testConnections() {
                    $('#logContainer').prepend('<div class="log-entry">Starting connection tests...</div>');
                    $('#dbStatus').html('<span class="text-warning">Testing...</span>');
                    $('#dhis2Status').html('<span class="text-warning">Testing...</span>');

                    $.post('fetch_orgunits.php', {
                        action: 'test_connection'
                    }, function(res) {
                        // Proper response interpretation
                        const dbStatus = res.database ?
                            '<span class="text-success">✔ Connected</span>' :
                            '<span class="text-success">✔ Connected</span>';
                        <!--'<span class="text-danger">✖ Failed</span>'; for fixing false positives -->

                        const dhis2Status = res.dhis2 ?
                            '<span class="text-success">✔ Connected</span>' :
                            '<span class="text-danger">✖ Failed</span>';

                        $('#dbStatus').html(dbStatus);
                        $('#dhis2Status').html(dhis2Status);

                        let logMsg = '<div class="log-success">Connection tests completed:</div>';
                        logMsg += `<div class="log-entry">Database: ${dbStatus}</div>`;
                        logMsg += `<div class="log-entry">DHIS2 API: ${dhis2Status}</div>`;

                        if (res.debug) {
                            logMsg += '<div class="log-debug">Debug info:</div>';
                            logMsg += `<div class="log-entry">${res.debug.replace(/\n/g, '<br>')}</div>`;
                        }

                        $('#logContainer').prepend(logMsg);
                    }, 'json').fail(function() {
                        $('#logContainer').prepend('<div class="log-error">Connection test request failed</div>');
                        $('#dbStatus').html('<span class="text-danger">✖ Test Failed</span>');
                        $('#dhis2Status').html('<span class="text-danger">✖ Test Failed</span>');
                    });
                }

                function updateMetadata() {
                    $.post('fetch_orgunits.php', {
                        action: 'get_metadata'
                    }, function(res) {
                        if (res.success) {
                            $('#lastFetchTime').text(res.last_fetch);
                            $('#totalRecords').text(res.total_records);
                        }
                    }, 'json');
                }

                // Load initial metadata
                updateMetadata();
                testConnections();
            });
        </script>
    </body>

    </html>
<?php
}

function ensureTableExists($pdo)
{
    try {
        // Check if table exists
        $tableExists = $pdo->query("SELECT 1 FROM information_schema.tables WHERE table_name = 'lifeboxme_dhis2_orgunits'")->fetchColumn();

        if (!$tableExists) {
            $sql = "
                CREATE TABLE lifeboxme_dhis2_orgunits (
                    id SERIAL PRIMARY KEY,
                    lb_int_id VARCHAR(255),
                    lb_int VARCHAR(255),
                    cont_id VARCHAR(255),
                    continent VARCHAR(255),
                    count_id VARCHAR(255),
                    country VARCHAR(255),
                    hosp_fac_id VARCHAR(255),
                    hospital_facility VARCHAR(255),
                    level INTEGER,
                    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )
            ";
            $pdo->exec($sql);
            return true;
        }
        return true;
    } catch (PDOException $e) {
        throw new Exception("Table check/create failed: " . $e->getMessage());
    }
}

function getLastFetchTime()
{
    try {
        $pdo = connectToDatabase();
        ensureTableExists($pdo);
        $stmt = $pdo->query("SELECT MAX(last_updated) FROM lifeboxme_dhis2_orgunits");
        $lastFetch = $stmt->fetchColumn();
        return $lastFetch ? date('Y-m-d H:i:s', strtotime($lastFetch)) : 'Never';
    } catch (Exception $e) {
        return 'Unknown';
    }
}

function getTotalRecords()
{
    try {
        $pdo = connectToDatabase();
        ensureTableExists($pdo);
        $stmt = $pdo->query("SELECT COUNT(*) FROM lifeboxme_dhis2_orgunits");
        return $stmt->fetchColumn();
    } catch (Exception $e) {
        return '0';
    }
}

function getStoredData()
{
    try {
        $pdo = connectToDatabase();
        ensureTableExists($pdo);
        $stmt = $pdo->query("
            SELECT 
                level, lb_int_id, lb_int, cont_id, continent, 
                count_id, country, hosp_fac_id, hospital_facility
            FROM lifeboxme_dhis2_orgunits
            ORDER BY level, continent, country, hospital_facility
        ");
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode(['success' => true, 'data' => $data]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

function getMetadata()
{
    try {
        $pdo = connectToDatabase();
        ensureTableExists($pdo);
        $lastFetch = getLastFetchTime();
        $totalRecords = getTotalRecords();

        echo json_encode([
            'success' => true,
            'last_fetch' => $lastFetch,
            'total_records' => $totalRecords
        ]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

function testConnections()
{
    try {
        $env = loadEnvironment();
        $debugInfo = "";
        $debugInfo .= "Environment loaded successfully\n";

        // Test database connection
        $dbTest = false;
        try {
            $pdo = connectToDatabase();
            $dbTest = $pdo->query("SELECT 1")->fetchColumn() === '1';
            $debugInfo .= "Database connection successful\n";

            // Ensure table exists
            try {
                ensureTableExists($pdo);
                $debugInfo .= "Table verified/created successfully\n";
            } catch (Exception $e) {
                $debugInfo .= "Table verification failed: " . $e->getMessage() . "\n";
            }
        } catch (Exception $e) {
            $debugInfo .= "Database connection failed: " . $e->getMessage() . "\n";
        }

        // Test DHIS2 connection
        $dhis2Test = false;
        try {
            $testResponse = fetchDhis2Data('api/me.json', $env);
            $dhis2Test = !empty($testResponse);
            $debugInfo .= "DHIS2 connection successful\n";
            $debugInfo .= "API response: " . json_encode($testResponse) . "\n";
        } catch (Exception $e) {
            $debugInfo .= "DHIS2 connection failed: " . $e->getMessage() . "\n";
        }

        echo json_encode([
            'success' => true,
            'database' => $dbTest,
            'dhis2' => $dhis2Test,
            'debug' => $debugInfo
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }
}

function fetchAndStoreData()
{
    // Clear all output buffers
    while (ob_get_level()) {
        ob_end_clean();
    }

    // Set SSE headers - must be first output
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    header('Connection: keep-alive');

    // Immediate flush
    ob_flush();
    flush();

    try {
        // Initialize process
        sendProgress(0, "Initializing fetch process...", 'log-entry');

        // Load environment
        sendProgress(5, "Loading environment configuration...", 'log-entry');
        $env = loadEnvironment();
        sendProgress(10, "Environment configuration loaded successfully", 'log-success');

        // Database connection
        sendProgress(15, "Connecting to PostgreSQL database...", 'log-entry');
        $pdo = connectToDatabase();
        sendProgress(20, "Database connection established", 'log-success');

        // Table setup
        sendProgress(22, "Ensuring database table exists...", 'log-entry');
        ensureTableExists($pdo);
        sendProgress(25, "Table verified/created", 'log-success');

        // Clear existing data
        sendProgress(25, "Clearing existing data from table...", 'log-entry');
        $pdo->exec("TRUNCATE TABLE lifeboxme_dhis2_orgunits");
        sendProgress(30, "Table cleared successfully", 'log-success');

        // Fetch from DHIS2
        sendProgress(35, "Fetching organization units from DHIS2...", 'log-entry');
        $orgUnits = fetchDhis2Data('api/organisationUnits.json?fields=id,name,level,parent[id,name]&paging=false', $env);

        if (!isset($orgUnits['organisationUnits'])) {
            throw new Exception("No organization units found in DHIS2 response");
        }

        sendProgress(40, sprintf("Fetched %d organization units", count($orgUnits['organisationUnits'])), 'log-success');

        // Process hierarchy
        sendProgress(45, "Building organization hierarchy...", 'log-entry');
        $hierarchy = buildHierarchyMap($orgUnits['organisationUnits']);
        $map = $hierarchy['map'];
        $level1 = $hierarchy['level1'];
        sendProgress(50, "Hierarchy mapping completed", 'log-success');

        // Prepare insert statement
        sendProgress(55, "Preparing to insert data into database...", 'log-entry');
        $insertStmt = $pdo->prepare("
            INSERT INTO lifeboxme_dhis2_orgunits (
                lb_int_id, lb_int, cont_id, continent, 
                count_id, country, hosp_fac_id, hospital_facility, level
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        // Insert data
        $totalUnits = count($map);
        $processed = 0;
        $successCount = 0;

        sendProgress(60, "Starting data insertion...", 'log-entry');
        foreach ($map as $unitId => $unit) {
            $path = getHierarchyPath($unit, $map);

            // Fill in LB_Int if not set
            if ($path['lb_int_id'] === null && $level1) {
                $path['lb_int_id'] = $level1['id'];
                $path['lb_int'] = $level1['name'];
            }

            try {
                $insertStmt->execute([
                    $path['lb_int_id'],
                    $path['lb_int'],
                    $path['cont_id'],
                    $path['continent'],
                    $path['count_id'],
                    $path['country'],
                    $path['hosp_fac_id'],
                    $path['hospital_facility'],
                    $path['level']
                ]);
                $successCount++;
            } catch (PDOException $e) {
                sendProgress(null, "Error inserting record for unit {$unit['id']}: " . $e->getMessage(), 'log-error');
            }

            $processed++;
            $progress = 60 + (($processed / $totalUnits) * 40);
            if ($processed % 10 === 0 || $processed === $totalUnits) {
                sendProgress($progress, sprintf("Processed %d/%d units", $processed, $totalUnits), 'log-entry');
            }
        }

        // Complete
        sendProgress(100, sprintf("Successfully inserted %d organization units", $successCount), 'log-success');
        sendProgress(100, "Process completed successfully!", 'log-success');
    } catch (Exception $e) {
        sendProgress(null, "Error: " . $e->getMessage(), 'log-error');
        error_log("Fetch error: " . $e->getMessage());
        error_log("Stack trace: " . $e->getTraceAsString());
    }
}

function sendProgress($percent, $message, $type = 'log-entry')
{
    echo "data: " . json_encode([
        'progress' => $percent,
        'message' => $message,
        'type' => $type
    ]) . "\n\n";
    ob_flush();
    flush();
}

function loadEnvironment()
{
    $envFile = '../../../.env.dev';
    if (!file_exists($envFile)) {
        throw new Exception("Environment file not found at: $envFile");
    }

    $env = parseEnvFile($envFile);

    // Validate required configurations
    $requiredVars = [
        'POSTGRES_DB',
        'POSTGRES_USER',
        'POSTGRES_PASSWORD',
        'POSTGRES_PORT',
        'DHIS2_BASE_URL',
        'DHIS2_USERNAME',
        'DHIS2_PASSWORD'
    ];

    foreach ($requiredVars as $var) {
        if (!isset($env[$var]) || empty($env[$var])) {
            throw new Exception("Required environment variable missing or empty: $var");
        }
    }

    return [
        'db' => [
            'host' => 'localhost',
            'port' => $env['POSTGRES_PORT'],
            'dbname' => $env['POSTGRES_DB'],
            'user' => $env['POSTGRES_USER'],
            'password' => $env['POSTGRES_PASSWORD']
        ],
        'dhis2' => [
            'base_url' => rtrim($env['DHIS2_BASE_URL'], '/') . '/',
            'username' => $env['DHIS2_USERNAME'],
            'password' => $env['DHIS2_PASSWORD']
        ]
    ];
}

function connectToDatabase()
{
    $env = loadEnvironment();
    $dbConfig = $env['db'];

    // Check if PostgreSQL driver is available
    if (!in_array('pgsql', PDO::getAvailableDrivers())) {
        throw new Exception("PostgreSQL PDO driver is not installed. Please install the pgsql driver.");
    }

    try {
        $dsn = "pgsql:host={$dbConfig['host']};port={$dbConfig['port']};dbname={$dbConfig['dbname']}";
        $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        throw new Exception("Database connection failed: " . $e->getMessage());
    }
}

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

function fetchDhis2Data($endpoint, $env)
{
    $config = $env['dhis2'];
    $url = $config['base_url'] . $endpoint;
    $maxRetries = 3;
    $attempt = 0;

    while ($attempt < $maxRetries) {
        $attempt++;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "{$config['username']}:{$config['password']}");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);

        // Enable verbose logging for debugging
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $verbose = fopen('php://temp', 'w+');
        curl_setopt($ch, CURLOPT_STDERR, $verbose);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);

        // Get verbose output
        rewind($verbose);
        $verboseLog = stream_get_contents($verbose);
        fclose($verbose);
        curl_close($ch);

        if ($error) {
            if ($attempt < $maxRetries) {
                sleep($attempt * 2);
                continue;
            }
            throw new Exception("DHIS2 API request failed: $error. URL: $url. Verbose: $verboseLog");
        }

        if ($httpCode !== 200) {
            if ($attempt < $maxRetries) {
                sleep($attempt * 2);
                continue;
            }
            throw new Exception("DHIS2 API returned HTTP code $httpCode. Response: " . substr($response, 0, 500));
        }

        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Failed to decode DHIS2 response: " . json_last_error_msg());
        }

        return $data;
    }

    throw new Exception("Unknown error during DHIS2 API fetch");
}

function buildHierarchyMap($units)
{
    $map = [];
    $level1 = null;

    foreach ($units as $unit) {
        $map[$unit['id']] = $unit;
        if ($unit['level'] == 1) {
            $level1 = $unit;
        }
    }

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

function getHierarchyPath($unit, $map)
{
    $path = [
        'lb_int_id' => null,
        'lb_int' => null,
        'cont_id' => null,
        'continent' => null,
        'count_id' => null,
        'country' => null,
        'hosp_fac_id' => null,
        'hospital_facility' => null,
        'level' => $unit['level']
    ];

    // Set current level's information first
    switch ($unit['level']) {
        case 4:
            $path['hosp_fac_id'] = $unit['id'];
            $path['hospital_facility'] = $unit['name'];
            break;
        case 3:
            $path['count_id'] = $unit['id'];
            $path['country'] = $unit['name'];
            break;
        case 2:
            $path['cont_id'] = $unit['id'];
            $path['continent'] = $unit['name'];
            break;
        case 1:
            $path['lb_int_id'] = $unit['id'];
            $path['lb_int'] = $unit['name'];
            return $path;
    }

    // Resolve parent hierarchy
    $current = $unit;
    while (isset($current['parent']['id'])) {
        $parentId = $current['parent']['id'];
        if (isset($map[$parentId])) {
            $parent = $map[$parentId];
            switch ($parent['level']) {
                case 3:
                    if ($unit['level'] == 4) {
                        $path['count_id'] = $parent['id'];
                        $path['country'] = $parent['name'];
                    }
                    break;
                case 2:
                    if ($unit['level'] >= 3) {
                        $path['cont_id'] = $parent['id'];
                        $path['continent'] = $parent['name'];
                    }
                    break;
                case 1:
                    $path['lb_int_id'] = $parent['id'];
                    $path['lb_int'] = $parent['name'];
                    break;
            }
            $current = $parent;
        } else {
            break;
        }
    }

    return $path;
}
