<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    $dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";
    $db = new PDO($dsn, $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create cron jobs table with proper schema
    $db->exec("CREATE TABLE IF NOT EXISTS lifeboxme_cron_jobs (
        id SERIAL PRIMARY KEY,
        setting_id INTEGER NOT NULL REFERENCES lifeboxme_dhis2_analytics_settings(id),
        frequency VARCHAR(50) NOT NULL,
        last_run TIMESTAMP NULL,
        next_run TIMESTAMP NOT NULL,
        enabled BOOLEAN DEFAULT true,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
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

                // Validate setting exists
                $stmt = $db->prepare("SELECT id FROM lifeboxme_dhis2_analytics_settings WHERE id = ?");
                $stmt->execute([$settingId]);
                if (!$stmt->fetch()) {
                    throw new Exception("Invalid setting ID");
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
                $stmt = $db->prepare("DELETE FROM lifeboxme_cron_jobs WHERE id = ?");
                $stmt->execute([$id]);

                // Reset sequence if table is empty
                $checkEmpty = $db->query("SELECT COUNT(*) FROM lifeboxme_cron_jobs")->fetchColumn();
                if ($checkEmpty == 0) {
                    $db->exec("ALTER SEQUENCE lifeboxme_cron_jobs_id_seq RESTART WITH 1");
                }

                $response = ['status' => 'success', 'message' => 'Cron job deleted'];
                break;

            case 'delete_selected':
                $ids = $_POST['ids'] ?? [];
                if (empty($ids)) {
                    throw new Exception("No cron jobs selected");
                }

                $placeholders = implode(',', array_fill(0, count($ids), '?'));
                $stmt = $db->prepare("DELETE FROM lifeboxme_cron_jobs WHERE id IN ($placeholders)");
                $stmt->execute($ids);

                // Reset sequence if table is empty
                $checkEmpty = $db->query("SELECT COUNT(*) FROM lifeboxme_cron_jobs")->fetchColumn();
                if ($checkEmpty == 0) {
                    $db->exec("ALTER SEQUENCE lifeboxme_cron_jobs_id_seq RESTART WITH 1");
                }

                $response = ['status' => 'success', 'message' => 'Selected cron jobs deleted'];
                break;

            case 'delete_all':
                $db->exec("TRUNCATE TABLE lifeboxme_cron_jobs RESTART IDENTITY");
                $response = ['status' => 'success', 'message' => 'All cron jobs deleted'];
                break;

            case 'get_crons':
                // Pagination parameters
                $page = $_POST['page'] ?? 1;
                $perPage = $_POST['per_page'] ?? 10;
                $offset = ($page - 1) * $perPage;

                // Sorting parameters
                $sortColumn = $_POST['sort'] ?? 'next_run';
                $sortDirection = $_POST['dir'] ?? 'asc';

                // Validate sort column
                $validColumns = ['id', 'setting_name', 'frequency', 'last_run', 'next_run', 'enabled'];
                if (!in_array($sortColumn, $validColumns)) {
                    $sortColumn = 'next_run';
                }

                // Validate sort direction
                $sortDirection = strtolower($sortDirection) === 'desc' ? 'DESC' : 'ASC';

                // Get total count
                $total = $db->query("SELECT COUNT(*) FROM lifeboxme_cron_jobs")->fetchColumn();

                // Get paginated data
                $query = "SELECT cj.*, s.name AS setting_name
                    FROM lifeboxme_cron_jobs cj
                    JOIN lifeboxme_dhis2_analytics_settings s ON s.id = cj.setting_id
                    ORDER BY $sortColumn $sortDirection
                    LIMIT $perPage OFFSET $offset";

                $stmt = $db->prepare($query);
                $stmt->execute();
                $crons = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $response = [
                    'status' => 'success',
                    'data' => $crons,
                    'total' => $total,
                    'page' => $page,
                    'per_page' => $perPage,
                    'total_pages' => ceil($total / $perPage)
                ];
                break;

            case 'get_settings':
                $stmt = $db->prepare("SELECT id, name FROM lifeboxme_dhis2_analytics_settings");
                $stmt->execute();
                $settings = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $response = ['status' => 'success', 'data' => $settings];
                break;

            case 'add_bulk_cron':
                $settingIds = $_POST['setting_ids'] ?? [];
                $frequency = $_POST['frequency'] ?? '';

                if (empty($settingIds) || !$frequency) {
                    throw new Exception("Settings and frequency are required");
                }

                // Start transaction
                $db->beginTransaction();
                try {
                    $nextRun = date('Y-m-d H:i:s', strtotime($frequency));
                    $stmt = $db->prepare("INSERT INTO lifeboxme_cron_jobs 
                            (setting_id, frequency, next_run) 
                            VALUES (?, ?, ?)");

                    foreach ($settingIds as $settingId) {
                        // Validate each setting exists
                        $checkStmt = $db->prepare("SELECT id FROM lifeboxme_dhis2_analytics_settings WHERE id = ?");
                        $checkStmt->execute([$settingId]);
                        if (!$checkStmt->fetch()) {
                            throw new Exception("Invalid setting ID: $settingId");
                        }

                        $stmt->execute([$settingId, $frequency, $nextRun]);
                    }

                    $db->commit();
                    $response = ['status' => 'success', 'message' => 'Bulk cron jobs created'];
                } catch (Exception $e) {
                    $db->rollBack();
                    throw $e;
                }
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
        .status-badge {
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-active {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-inactive {
            background-color: #fee2e2;
            color: #b91c1c;
        }

        .sortable {
            cursor: pointer;
        }

        .sortable:hover {
            background-color: #f8f9fa;
        }

        .sort-asc::after {
            content: " ↑";
        }

        .sort-desc::after {
            content: " ↓";
        }

        .table-responsive {
            overflow-x: auto;
        }

        .pagination {
            justify-content: center;
        }

        .select-all-checkbox {
            margin-right: 8px;
        }
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
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Cron Job Scheduler</h5>
                        <div>
                            <button id="deleteSelectedBtn" class="btn btn-danger btn-sm me-2" disabled>
                                <i class="fas fa-trash me-1"></i> Delete Selected
                            </button>
                            <button id="deleteAllBtn" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt me-1"></i> Delete All
                            </button>
                        </div>
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

                        <!-- Bulk operation cron table -->
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
                                            <th width="40px">
                                                <input type="checkbox" id="selectAll" class="select-all-checkbox">
                                            </th>
                                            <th class="sortable" data-sort="setting_name">Setting</th>
                                            <th class="sortable" data-sort="frequency">Frequency</th>
                                            <th class="sortable" data-sort="last_run">Last Run</th>
                                            <th class="sortable" data-sort="next_run">Next Run</th>
                                            <th class="sortable" data-sort="enabled">Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Cron jobs will be loaded here -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="form-group">
                                    <select id="perPageSelect" class="form-select form-select-sm" style="width: auto;">
                                        <option value="5">5 per page</option>
                                        <option value="10" selected>10 per page</option>
                                        <option value="25">25 per page</option>
                                        <option value="50">50 per page</option>
                                        <option value="100">100 per page</option>
                                    </select>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination" id="pagination">
                                        <!-- Pagination will be loaded here -->
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="mt-4 bg-light p-3 rounded">
                            <h5><i class="fas fa-info-circle me-2"></i>Cron Setup Instructions</h5>
                            <ol class="mt-3">
                                <li class="mb-2">Add this to your system's crontab:</li>
                                <pre class="bg-dark text-white p-3 rounded">* * * * * /usr/bin/php <?= realpath(__DIR__) ?>/cron_runner.php</pre>

                                <li class="mt-3">Make sure you have or Create a <code>cron_runner.php</code> file in the same directory with this content:</li>
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
            // Current pagination and sorting state
            let currentPage = 1;
            let perPage = 10;
            let sortColumn = 'next_run';
            let sortDirection = 'asc';
            let selectedCronIds = [];

            // Load settings for cron form
            function loadSettings() {
                $.post('cronjobs.php', {
                    action: 'get_settings'
                }, function(res) {
                    if (res.status === 'success') {
                        $('#settingsSelect').empty();
                        $('#settingsSelect').append('<option value="">Select a setting</option>');
                        $('#bulkSettingsSelect').empty();

                        res.data.forEach(setting => {
                            $('#settingsSelect').append(
                                `<option value="${setting.id}">${setting.name}</option>`
                            );
                            $('#bulkSettingsSelect').append(
                                `<option value="${setting.id}">${setting.name}</option>`
                            );
                        });
                    }
                });
            }

            // Load cron jobs with pagination and sorting
            function loadCrons() {
                $('#cronTable tbody').html('<tr><td colspan="7" class="text-center py-4"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></td></tr>');

                $.post('cronjobs.php', {
                    action: 'get_crons',
                    page: currentPage,
                    per_page: perPage,
                    sort: sortColumn,
                    dir: sortDirection
                }, function(res) {
                    if (res.status === 'success') {
                        renderCronTable(res);
                        renderPagination(res);
                        updateSelectedCount();
                    } else {
                        $('#cronTable tbody').html(
                            `<tr><td colspan="7" class="text-center text-danger py-4">${res.message || 'Error loading cron jobs'}</td></tr>`
                        );
                    }
                });
            }

            // Render cron jobs table
            function renderCronTable(res) {
                $('#cronTable tbody').empty();

                if (res.data.length === 0) {
                    $('#cronTable tbody').append(
                        `<tr><td colspan="7" class="text-center text-muted py-4">No cron jobs scheduled yet</td></tr>`
                    );
                    return;
                }

                res.data.forEach(cron => {
                    const lastRun = cron.last_run ?
                        new Date(cron.last_run).toLocaleString() : 'Never';
                    const nextRun = new Date(cron.next_run).toLocaleString();
                    const isActive = cron.enabled;
                    const isChecked = selectedCronIds.includes(cron.id);

                    const row = `
                        <tr>
                            <td>
                                <input type="checkbox" class="cron-checkbox" data-id="${cron.id}" ${isChecked ? 'checked' : ''}>
                            </td>
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

                // Add checkbox handlers
                $('.cron-checkbox').change(function() {
                    const id = $(this).data('id');
                    const isChecked = $(this).is(':checked');

                    if (isChecked && !selectedCronIds.includes(id)) {
                        selectedCronIds.push(id);
                    } else if (!isChecked) {
                        selectedCronIds = selectedCronIds.filter(item => item !== id);
                    }

                    updateSelectedCount();
                });
            }

            // Render pagination
            function renderPagination(res) {
                const totalPages = res.total_pages || 1;
                const pagination = $('#pagination');
                pagination.empty();

                if (totalPages <= 1) return;

                // Previous button
                pagination.append(`
                    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="${currentPage - 1}">&laquo;</a>
                    </li>
                `);

                // Page numbers
                const maxVisiblePages = 5;
                let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
                let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                if (startPage > 1) {
                    pagination.append(`
                        <li class="page-item">
                            <a class="page-link" href="#" data-page="1">1</a>
                        </li>
                        ${startPage > 2 ? '<li class="page-item disabled"><span class="page-link">...</span></li>' : ''}
                    `);
                }

                for (let i = startPage; i <= endPage; i++) {
                    pagination.append(`
                        <li class="page-item ${i === currentPage ? 'active' : ''}">
                            <a class="page-link" href="#" data-page="${i}">${i}</a>
                        </li>
                    `);
                }

                if (endPage < totalPages) {
                    pagination.append(`
                        ${endPage < totalPages - 1 ? '<li class="page-item disabled"><span class="page-link">...</span></li>' : ''}
                        <li class="page-item">
                            <a class="page-link" href="#" data-page="${totalPages}">${totalPages}</a>
                        </li>
                    `);
                }

                // Next button
                pagination.append(`
                    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="${currentPage + 1}">&raquo;</a>
                    </li>
                `);

                // Add click handlers
                $('.page-link').click(function(e) {
                    e.preventDefault();
                    const page = $(this).data('page');
                    if (page && page !== currentPage) {
                        currentPage = page;
                        loadCrons();
                    }
                });
            }

            // Update selected count and delete button state
            function updateSelectedCount() {
                const count = selectedCronIds.length;
                $('#deleteSelectedBtn')
                    .prop('disabled', count === 0)
                    .html(`<i class="fas fa-trash me-1"></i> Delete Selected (${count})`);
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

            // Handle delete selected
            $('#deleteSelectedBtn').click(function() {
                if (selectedCronIds.length === 0) return;
                if (!confirm(`Are you sure you want to delete ${selectedCronIds.length} selected cron jobs?`)) return;

                $.post('cronjobs.php', {
                    action: 'delete_selected',
                    ids: selectedCronIds
                }, function(res) {
                    if (res.status === 'success') {
                        selectedCronIds = [];
                        loadCrons();
                    } else {
                        alert(res.message || 'Error deleting selected cron jobs');
                    }
                });
            });

            // Handle delete all
            $('#deleteAllBtn').click(function() {
                if (!confirm('Are you sure you want to delete ALL cron jobs? This cannot be undone.')) return;

                $.post('cronjobs.php', {
                    action: 'delete_all'
                }, function(res) {
                    if (res.status === 'success') {
                        selectedCronIds = [];
                        loadCrons();
                    } else {
                        alert(res.message || 'Error deleting all cron jobs');
                    }
                });
            });

            // Handle select all checkbox
            $('#selectAll').change(function() {
                const isChecked = $(this).is(':checked');
                $('.cron-checkbox').prop('checked', isChecked).trigger('change');
            });

            // Handle per page change
            $('#perPageSelect').change(function() {
                perPage = $(this).val();
                currentPage = 1;
                loadCrons();
            });

            // Handle column sorting
            $('.sortable').click(function() {
                const column = $(this).data('sort');

                // Remove previous sort indicators
                $('.sortable').removeClass('sort-asc sort-desc');

                if (sortColumn === column) {
                    // Toggle direction if same column clicked
                    sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
                } else {
                    // New column, default to ascending
                    sortColumn = column;
                    sortDirection = 'asc';
                }

                // Add sort indicator
                $(this).addClass(sortDirection === 'asc' ? 'sort-asc' : 'sort-desc');

                // Reload data
                loadCrons();
            });

            // Initial load
            loadSettings();
            loadCrons();
        });
    </script>
</body>

</html>