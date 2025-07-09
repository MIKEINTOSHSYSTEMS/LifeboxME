<?php
session_start();

// Load environment configuration
$envFile = __DIR__ . '/../../.env.dev';
if (!file_exists($envFile)) die("Configuration error: .env.dev not found");
$envVars = parse_ini_file($envFile);

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

    // Create cron jobs table
    $db->exec("CREATE TABLE IF NOT EXISTS lifeboxme_cron_jobs (
        id SERIAL PRIMARY KEY,
        setting_id TEXT NOT NULL,
        frequency VARCHAR(50) NOT NULL,
        last_run TIMESTAMP NULL,
        next_run TIMESTAMP NOT NULL,
        enabled BOOLEAN DEFAULT true,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// Handle actions
$action = $_POST['action'] ?? '';
$response = ['status' => '', 'message' => ''];

if ($action) {
    try {
        switch ($action) {
            case 'add_cron':
                $settingId = $_POST['setting_id'] ?? 0;
                $frequency = $_POST['frequency'] ?? '';

                if (!$settingId || !$frequency) {
                    throw new Exception("Setting and frequency are required");
                }

                // Calculate next run time
                $nextRun = date('Y-m-d H:i:s', strtotime($frequency));

                $stmt = $db->prepare("INSERT INTO lifeboxme_cron_jobs 
                    (setting_id, frequency, next_run) 
                    VALUES (?, ?, ?)");
                $stmt->execute([$settingId, $frequency, $nextRun]);

                $response = ['status' => 'success', 'message' => 'Cron job added'];
                break;

            case 'toggle_cron':
                $id = $_POST['id'] ?? 0;
                $enabled = $_POST['enabled'] ?? 0;

                $stmt = $db->prepare("UPDATE lifeboxme_cron_jobs 
                    SET enabled = ?, last_run = CASE WHEN ? = 1 THEN last_run ELSE last_run END 
                    WHERE id = ?");
                $stmt->execute([$enabled, $enabled, $id]);

                $response = ['status' => 'success', 'message' => 'Cron job updated'];
                break;

            case 'delete_cron':
                $id = $_POST['id'] ?? 0;
                $db->exec("DELETE FROM lifeboxme_cron_jobs WHERE id = $id");
                $response = ['status' => 'success', 'message' => 'Cron job deleted'];
                break;

            case 'get_crons':
                $crons = $db->query("SELECT cj.*, s.name AS setting_name
                    FROM lifeboxme_cron_jobs cj
                    JOIN lifeboxme_dhis2_analytics_settings s ON s.id = cj.setting_id
                    ORDER BY next_run ASC")
                    ->fetchAll(PDO::FETCH_ASSOC);
                $response = ['status' => 'success', 'data' => $crons];
                break;

            case 'get_settings':
                $settings = $db->query("SELECT id, name FROM lifeboxme_dhis2_analytics_settings")
                    ->fetchAll(PDO::FETCH_ASSOC);
                $response = ['status' => 'success', 'data' => $settings];
                break;

            case 'add_bulk_cron':
                $settingIds = $_POST['setting_ids'] ?? [];
                $frequency = $_POST['frequency'] ?? '';

                if (empty($settingIds) || !$frequency) {
                    throw new Exception("Settings and frequency are required");
                }

                // Create a combined cron job for all settings
                $settingIdsStr = implode(',', $settingIds);
                $nextRun = date('Y-m-d H:i:s', strtotime($frequency));

                $stmt = $db->prepare("INSERT INTO lifeboxme_cron_jobs 
                        (setting_id, frequency, next_run) 
                        VALUES (?, ?, ?)");
                $stmt->execute([$settingIdsStr, $frequency, $nextRun]);

                $response = ['status' => 'success', 'message' => 'Bulk cron job created'];
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
    <title>Cron Job Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>


    </style>
</head>

<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="mb-3"><i class="fas fa-clock me-2"></i>Cron Job Manager</h1>
                <p class="lead">Schedule automated data fetching from DHIS2</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Cron Job Scheduler</h5>
                    </div>
                    <div class="card-body">
                        <form id="cronForm">
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Select Setting</label>
                                    <select class="form-select" name="setting_id" required id="settingsSelect">
                                        <option value="">Loading settings...</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Frequency</label>
                                    <select class="form-select" name="frequency" required>
                                        <option value="+1 hour">Hourly</option>
                                        <option value="+1 day" selected>Daily</option>
                                        <option value="+1 week">Weekly</option>
                                        <option value="+1 month">Monthly</option>
                                    </select>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fas fa-plus me-1"></i> Add
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- bluk operation cron table -->
                        <div class="mt-4">
                            <h5>Bulk Operations</h5>
                            <div class="card">
                                <div class="card-body">
                                    <form id="bulkCronForm">
                                        <div class="row g-2 mb-3">
                                            <div class="col-md-8">
                                                <label class="form-label">Select Settings</label>
                                                <select class="form-select" name="setting_ids[]" multiple required
                                                    id="bulkSettingsSelect" size="5">
                                                    <!-- Settings will be populated by JS -->
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Frequency</label>
                                                <select class="form-select" name="frequency" required>
                                                    <option value="+1 hour">Hourly</option>
                                                    <option value="+1 day" selected>Daily</option>
                                                    <option value="+1 week">Weekly</option>
                                                    <option value="+1 month">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-info">
                                                <i class="fas fa-layer-group me-1"></i> Create Bulk Cron Job
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="mt-4">
                            <h5>Scheduled Jobs</h5>
                            <div class="table-responsive">
                                <table class="table table-hover" id="cronTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Setting</th>
                                            <th>Frequency</th>
                                            <th>Last Run</th>
                                            <th>Next Run</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Cron jobs will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mt-4 bg-light p-3 rounded">
                            <h5><i class="fas fa-info-circle me-2"></i>Cron Setup Instructions</h5>
                            <ol class="mt-3">
                                <li class="mb-2">Add this to your system's crontab:</li>
                                <pre class="bg-dark text-white p-3 rounded">* * * * * /usr/bin/php <?= realpath(__DIR__) ?>/cron_runner.php</pre>

                                <li class="mt-3">Create a <code>cron_runner.php</code> file in the same directory with this content:</li>
                                <pre class="bg-dark text-white p-3 rounded"><?= htmlspecialchars("<?php
require __DIR__ . '/cron_runner_functions.php';
\$runner = new CronRunner();
\$runner->executeDueJobs();
?>") ?></pre>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Load settings for cron form
            function loadSettings() {
                $.post('cronjobs.php', {
                    action: 'get_settings'
                }, function(res) {
                    if (res.status === 'success') {
                        $('#settingsSelect').empty();
                        $('#settingsSelect').append('<option value="">Select a setting</option>');
                        res.data.forEach(setting => {
                            $('#settingsSelect').append(
                                `<option value="${setting.id}">${setting.name}</option>`
                            );
                        });
                    }
                });
            }

            // Load cron jobs
            function loadCrons() {
                $.post('cronjobs.php', {
                    action: 'get_crons'
                }, function(res) {
                    if (res.status === 'success') {
                        $('#cronTable tbody').empty();

                        if (res.data.length === 0) {
                            $('#cronTable tbody').append(
                                `<tr><td colspan="6" class="text-center text-muted py-4">No cron jobs scheduled yet</td></tr>`
                            );
                            return;
                        }

                        res.data.forEach(cron => {
                            const lastRun = cron.last_run ?
                                new Date(cron.last_run).toLocaleString() : 'Never';
                            const nextRun = new Date(cron.next_run).toLocaleString();
                            const isActive = cron.enabled;

                            const row = `
                        <tr>
                            <td>${cron.setting_name}</td>
                            <td>${cron.frequency.replace('+', 'Every ').replace('1', '')}</td>
                            <td>${lastRun}</td>
                            <td>${nextRun}</td>
                            <td>
                                <span class="status-badge ${isActive ? 'status-active' : 'status-inactive'}">
                                    ${isActive ? 'Active' : 'Inactive'}
                                </span>
                            </td>
                            <td class="cron-actions">
                                <div class="form-check form-switch d-inline-block me-2">
                                    <input type="checkbox" class="form-check-input toggle-cron" 
                                        data-id="${cron.id}" 
                                        ${isActive ? 'checked' : ''}>
                                </div>
                                <button class="btn btn-sm btn-danger delete-cron" 
                                    data-id="${cron.id}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                            $('#cronTable tbody').append(row);
                        });

                        // Add event handlers
                        $('.toggle-cron').change(function() {
                            const id = $(this).data('id');
                            const enabled = $(this).prop('checked') ? 1 : 0;

                            $.post('cronjobs.php', {
                                action: 'toggle_cron',
                                id: id,
                                enabled: enabled
                            }, function(res) {
                                if (res.status === 'success') {
                                    loadCrons();
                                } else {
                                    alert(res.message || 'Error updating cron job');
                                }
                            });
                        });

                        $('.delete-cron').click(function() {
                            if (!confirm('Are you sure you want to delete this cron job?')) return;

                            const id = $(this).data('id');
                            $.post('cronjobs.php', {
                                action: 'delete_cron',
                                id: id
                            }, function(res) {
                                if (res.status === 'success') {
                                    loadCrons();
                                } else {
                                    alert(res.message || 'Error deleting cron job');
                                }
                            });
                        });
                    }
                });
            }

            // Add new cron
            $('#cronForm').submit(function(e) {
                e.preventDefault();
                const formData = $(this).serializeArray();
                formData.push({
                    name: 'action',
                    value: 'add_cron'
                });

                $.post('cronjobs.php', formData, function(res) {
                    if (res.status === 'success') {
                        loadCrons();
                        $('#cronForm')[0].reset();
                    } else {
                        alert(res.message || 'Error adding cron job');
                    }
                });
            });

            // Initial load
            loadSettings();
            loadCrons();

            // Load settings for bulk form
            function loadBulkSettings() {
                $.post('cronjobs.php', {
                    action: 'get_settings'
                }, function(res) {
                    if (res.status === 'success') {
                        $('#bulkSettingsSelect').empty();
                        res.data.forEach(setting => {
                            $('#bulkSettingsSelect').append(
                                `<option value="${setting.id}">${setting.name}</option>`
                            );
                        });
                    }
                });
            }

            // Handle bulk cron form submission
            $('#bulkCronForm').submit(function(e) {
                e.preventDefault();
                const formData = $(this).serializeArray();
                formData.push({
                    name: 'action',
                    value: 'add_bulk_cron'
                });

                $.post('cronjobs.php', formData, function(res) {
                    if (res.status === 'success') {
                        loadCrons();
                        $('#bulkCronForm')[0].reset();
                    } else {
                        alert(res.message || 'Error creating bulk cron job');
                    }
                });
            });

            // Add to initial load
            loadBulkSettings();

        });
    </script>
</body>

</html>