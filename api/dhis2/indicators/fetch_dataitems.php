<?php
// fetch_dataitems.php

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
        <title>DHIS2 Data Items Fetcher</title>
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

            .badge-indicator {
                background-color: #6f42c1;
            }

            .badge-program-indicator {
                background-color: #20c997;
            }

            .badge-data-element {
                background-color: #fd7e14;
            }

            .badge-attribute {
                background-color: #6610f2;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>DHIS2 Data Items Fetcher</h2>
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
                            <div class="alert alert-light">
                                <h5>Item Type Legend:</h5>
                                <span class="badge badge-indicator text-white me-2">INDICATOR</span>
                                <span class="badge badge-program-indicator text-white me-2">PROGRAM_INDICATOR</span>
                                <span class="badge badge-data-element text-white me-2">DATA_ELEMENT</span>
                                <span class="badge badge-attribute text-white">PROGRAM_ATTRIBUTE</span>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>ID</th>
                                    <th>Display Name</th>
                                    <th>Short Name</th>
                                    <th>Name</th>
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
                        url: 'fetch_dataitems.php',
                        type: 'POST',
                        data: {
                            action: 'get_data'
                        },
                        dataSrc: 'data'
                    },
                    columns: [{
                            data: 'dimensionItemType',
                            render: function(data, type, row) {
                                let badgeClass = '';
                                switch (data) {
                                    case 'INDICATOR':
                                        badgeClass = 'badge-indicator';
                                        break;
                                    case 'PROGRAM_INDICATOR':
                                        badgeClass = 'badge-program-indicator';
                                        break;
                                    case 'DATA_ELEMENT':
                                        badgeClass = 'badge-data-element';
                                        break;
                                    case 'PROGRAM_ATTRIBUTE':
                                        badgeClass = 'badge-attribute';
                                        break;
                                    default:
                                        badgeClass = 'badge-secondary';
                                }
                                return `<span class="badge ${badgeClass} text-white">${data}</span>`;
                            }
                        },
                        {
                            data: 'id'
                        },
                        {
                            data: 'displayName'
                        },
                        {
                            data: 'displayShortName'
                        },
                        {
                            data: 'name'
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

                    const eventSource = new EventSource('fetch_dataitems.php?action=fetch');

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

                    $.post('fetch_dataitems.php', {
                        action: 'test_connection'
                    }, function(res) {
                        const dbStatus = res.database ?
                            '<span class="text-success">✔ Connected</span>' :
                            '<span class="text-success">✔ Connected</span>';

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
                    $.post('fetch_dataitems.php', {
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
        $tableExists = $pdo->query("SELECT 1 FROM information_schema.tables WHERE table_name = 'lifeboxme_dhis2_dataitems'")->fetchColumn();

        if (!$tableExists) {
            $sql = "
                CREATE TABLE lifeboxme_dhis2_dataitems (
                    id SERIAL PRIMARY KEY,
                    item_id VARCHAR(255) NOT NULL,
                    display_name TEXT,
                    name TEXT,
                    short_name TEXT,
                    display_short_name TEXT,
                    dimension_item_type VARCHAR(50),
                    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    CONSTRAINT unique_item_id UNIQUE (item_id)
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
        $stmt = $pdo->query("SELECT MAX(last_updated) FROM lifeboxme_dhis2_dataitems");
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
        $stmt = $pdo->query("SELECT COUNT(*) FROM lifeboxme_dhis2_dataitems");
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
                item_id as id,
                display_name,
                name,
                short_name,
                display_short_name,
                dimension_item_type
            FROM lifeboxme_dhis2_dataitems
            ORDER BY dimension_item_type, display_name
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
        $pdo->exec("TRUNCATE TABLE lifeboxme_dhis2_dataitems");
        sendProgress(30, "Table cleared successfully", 'log-success');

        // Fetch from DHIS2
        sendProgress(35, "Fetching data items from DHIS2...", 'log-entry');
        $dataItems = fetchDhis2Data('api/dataItems.json?fields=id,displayName,name,shortName,displayShortName,dimensionItemType&paging=false', $env);

        if (!isset($dataItems['dataItems'])) {
            throw new Exception("No data items found in DHIS2 response");
        }

        sendProgress(40, sprintf("Fetched %d data items", count($dataItems['dataItems'])), 'log-success');

        // Prepare insert statement
        sendProgress(45, "Preparing to insert data into database...", 'log-entry');
        $insertStmt = $pdo->prepare("
            INSERT INTO lifeboxme_dhis2_dataitems (
                item_id, display_name, name, short_name, display_short_name, dimension_item_type
            ) VALUES (?, ?, ?, ?, ?, ?)
            ON CONFLICT (item_id) DO UPDATE SET
                display_name = EXCLUDED.display_name,
                name = EXCLUDED.name,
                short_name = EXCLUDED.short_name,
                display_short_name = EXCLUDED.display_short_name,
                dimension_item_type = EXCLUDED.dimension_item_type,
                last_updated = CURRENT_TIMESTAMP
        ");

        // Insert data
        $totalItems = count($dataItems['dataItems']);
        $processed = 0;
        $successCount = 0;

        sendProgress(50, "Starting data insertion...", 'log-entry');
        foreach ($dataItems['dataItems'] as $item) {
            try {
                $insertStmt->execute([
                    $item['id'],
                    $item['displayName'] ?? null,
                    $item['name'] ?? null,
                    $item['shortName'] ?? null,
                    $item['displayShortName'] ?? null,
                    $item['dimensionItemType'] ?? null
                ]);
                $successCount++;
            } catch (PDOException $e) {
                sendProgress(null, "Error inserting record for item {$item['id']}: " . $e->getMessage(), 'log-error');
            }

            $processed++;
            $progress = 50 + (($processed / $totalItems) * 50);
            if ($processed % 10 === 0 || $processed === $totalItems) {
                sendProgress($progress, sprintf("Processed %d/%d items", $processed, $totalItems), 'log-entry');
            }
        }

        // Complete
        sendProgress(100, sprintf("Successfully inserted %d data items", $successCount), 'log-success');
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
