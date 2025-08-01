<?php
session_start();

// Load environment variables from .env file
if (file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

// Database configuration
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_PORT', $_ENV['POSTGRES_PORT'] ?? '5432');
define('DB_NAME', $_ENV['POSTGRES_DB'] ?? 'lifebox_mesystem');
define('DB_USER', $_ENV['POSTGRES_USER'] ?? 'postgres');
define('DB_PASSWORD', $_ENV['POSTGRES_PASSWORD'] ?? 'mikeintosh');

// Create PostgreSQL database connection
try {
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Authentication check
function check_auth()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../index.php');
        exit;
    }
}

// Admin check
function is_admin()
{
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
        $conn = new PDO(
            "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME,
            DB_USER,
            DB_PASSWORD
        );
        $stmt = $conn->prepare("SELECT \"GroupID\" FROM lifeboxme_ugmembers WHERE \"UserName\" = ?");
        $stmt->execute([$_SESSION['username']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return $user['GroupID'] == -1; // -1 indicates admin
        }
    }
    return false;
}

// Generate secure API key
function generate_api_key()
{
    return bin2hex(random_bytes(32));
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT \"ID\" as id, username, password, \"GroupID\" as groupid FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = ($user['groupid'] === -1); // Assuming -1 is admin group
        header('Location: index.php');
        exit;
    } else {
        $login_error = "Invalid username or password";
    }
}

// Logout
function logout()
{
    if (class_exists('Security')) {
        Security::logout();
    }
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit;
}

// Handle API key generation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate_key'])) {
    check_auth();

    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $api_key = generate_api_key();
        $hashed_key = password_hash($api_key, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("UPDATE users SET api_key = ? WHERE \"ID\" = ?");
        $stmt->execute([$hashed_key, $user_id]);

        // Get username for display
        $stmt = $pdo->prepare("SELECT username FROM users WHERE \"ID\" = ?");
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['generated_key'] = $api_key;
        $_SESSION['key_user'] = $user_id;
        $_SESSION['key_user_name'] = $user['username'] ?? '';
        header('Location: index.php');
        exit;
    }
}

// Handle bulk API key generation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bulk_generate'])) {
    check_auth();

    if (is_admin() && isset($_POST['user_ids']) && is_array($_POST['user_ids'])) {
        $count = 0;
        foreach ($_POST['user_ids'] as $user_id) {
            $api_key = generate_api_key();
            $hashed_key = password_hash($api_key, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("UPDATE users SET api_key = ? WHERE \"ID\" = ?");
            $stmt->execute([$hashed_key, $user_id]);
            $count++;
        }
        $_SESSION['bulk_success'] = "$count API keys generated";
        header('Location: index.php');
        exit;
    }
}

// Handle key revocation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['revoke_key'])) {
    check_auth();

    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        $stmt = $pdo->prepare("UPDATE users SET api_key = NULL WHERE \"ID\" = ?");
        $stmt->execute([$user_id]);

        $_SESSION['revoke_success'] = "API key revoked";
        header('Location: index.php');
        exit;
    }
}

// Get all users (for admin)
$users = [];
if (is_admin()) {
    $stmt = $pdo->query("SELECT \"ID\" as id, username, email, api_key FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Get current user
$current_user = [];
if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("SELECT \"ID\" as id, username, email, api_key FROM users WHERE \"ID\" = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $current_user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E API Key Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .api-key {
            font-family: monospace;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            word-break: break-all;
        }

        .status-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .btn-action {
            min-width: 100px;
        }

        .user-card {
            margin-bottom: 20px;
        }

        .bulk-actions {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .api-key {
            font-family: monospace;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            word-break: break-all;
            cursor: pointer;
        }

        .api-key:hover {
            background-color: #e9ecef;
        }

        .copy-btn {
            transition: all 0.3s;
        }

        .copy-btn:hover {
            background-color: #e9ecef;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: #00acc7 !important;
        }

        #generateKeyBtn {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Lifebox API Key Manager</a>
            <div class="d-flex">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="navbar-text me-3">
                        <i class="fas fa-user me-1"></i> <?= htmlspecialchars($_SESSION['username']) ?>
                    </span>

                    <form method="post" style="display:inline;">
                        <button type="submit" name="logout" class="btn btn-outline-light btn-sm ms-2">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </button>
                    </form>
                    <a href="../" class="btn btn-outline-light btn-sm ms-2">
                        <i class="fas fa-list-alt me-1"></i> API Management
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <?php if (isset($_SESSION['generated_key'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">API Key Generated!</h4>
                <p>This key will only be shown once. Save it securely:</p>
                <div class="api-key my-3"><?= htmlspecialchars($_SESSION['generated_key']) ?></div>
                <p><strong>User:</strong> <?= htmlspecialchars($_SESSION['key_user_name'] ?? '') ?></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['generated_key']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['bulk_success'])): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['bulk_success']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['bulk_success']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['revoke_success'])): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['revoke_success']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['revoke_success']); ?>
        <?php endif; ?>

        <div class="row">
            <!-- User Profile Card -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-user-circle me-2"></i>Your Profile</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($current_user): ?>
                            <div class="mb-3">
                                <label class="form-label text-muted small">Username</label>
                                <p class="mb-0"><?= htmlspecialchars($current_user['username']) ?></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted small">Email</label>
                                <p class="mb-0"><?= htmlspecialchars($current_user['email']) ?></p>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-muted small">API Key Status</label>
                                <p class="mb-0">
                                    <?php if ($current_user['api_key']): ?>
                                        <span class="badge bg-success status-badge">Active</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger status-badge">Not Generated</span>
                                    <?php endif; ?>
                                </p>
                            </div>

                            <?php if ($current_user['api_key']): ?>
                                <div class="mb-4">
                                    <label class="form-label text-muted small">Your API Key</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control api-key" id="apiKey"
                                            value="<?= htmlspecialchars($current_user['api_key']) ?>" readonly>
                                        <button class="btn btn-outline-secondary copy-btn" type="button"
                                            data-bs-toggle="tooltip" title="Copy to clipboard">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </div>
                                    <button id="generateKeyBtn" class="btn btn-warning w-100"
                                        data-user-id="<?= $current_user['id'] ?>">
                                        <i class="fas fa-sync me-1"></i> Regenerate Key
                                    </button>
                                    <small class="text-muted">Click the copy button to copy your API key</small>
                                </div>
                            <?php else: ?>
                                <div class="mb-4">
                                    <button id="generateKeyBtn" class="btn btn-success w-100"
                                        data-user-id="<?= $current_user['id'] ?>">
                                        <i class="fas fa-key me-1"></i> Generate API Key
                                    </button>
                                </div>
                            <?php endif; ?>

                            <form method="post">
                                <input type="hidden" name="user_id" value="<?= $current_user['id'] ?>">
                                <?php if ($current_user['api_key']): ?>
                                    <button type="submit" name="revoke_key" class="btn btn-danger w-100 btn-action">
                                        <i class="fas fa-ban me-1"></i> Revoke Key
                                    </button>
                                <?php endif; ?>
                            </form>
                        <?php else: ?>
                            <p>Please <a href="../index.php">log in</a> to view your profile.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- User Management Section -->
            <div class="col-lg-8">
                <?php if (is_admin()): ?>
                    <div class="card mb-4">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0"><i class="fas fa-users-cog me-2"></i>User Management</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" class="bulk-actions">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6>Bulk Actions</h6>
                                    <div>
                                        <button type="submit" name="bulk_generate" class="btn btn-primary me-2">
                                            <i class="fas fa-key me-1"></i> Generate Keys
                                        </button>
                                        <button type="button" id="select-all" class="btn btn-outline-secondary">
                                            Select All
                                        </button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="select-all-checkbox">
                                                    </div>
                                                </th>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>API Key Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $user): ?>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input user-checkbox" type="checkbox" name="user_ids[]" value="<?= $user['id'] ?>">
                                                        </div>
                                                    </td>
                                                    <td><?= $user['id'] ?></td>
                                                    <td><?= htmlspecialchars($user['username']) ?></td>
                                                    <td><?= htmlspecialchars($user['email']) ?></td>
                                                    <td>
                                                        <?php if ($user['api_key']): ?>
                                                            <span class="badge bg-success status-badge">Active</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-danger status-badge">Inactive</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <form method="post" class="d-inline">
                                                                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                                <button type="submit" name="generate_key" class="btn btn-sm btn-primary">
                                                                    <i class="fas fa-key"></i>
                                                                </button>
                                                            </form>
                                                            <form method="post" class="d-inline">
                                                                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                                <button type="submit" name="revoke_key" class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-ban"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>About API Keys</h5>
                        </div>
                        <div class="card-body">
                            <h5>What are API Keys?</h5>
                            <p class="mb-3">
                                API keys are unique identifiers used to authenticate API requests. They allow secure access to our services and help track usage.
                            </p>

                            <h5>Security Best Practices</h5>
                            <ul>
                                <li>Never share your API key publicly</li>
                                <li>Store keys securely (password managers recommended)</li>
                                <li>Regenerate keys periodically</li>
                                <li>Revoke keys immediately if compromised</li>
                            </ul>

                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Important:</strong> You will only see your API key once after generation. Save it securely!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Copy API key to clipboard
        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', function() {
                const apiKeyInput = this.closest('.input-group').querySelector('.api-key');
                apiKeyInput.select();
                document.execCommand('copy');

                // Change icon to checkmark temporarily
                const originalIcon = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check"></i>';

                // Update tooltip text
                const tooltip = bootstrap.Tooltip.getInstance(this);
                tooltip.setContent({
                    '.tooltip-inner': 'Copied!'
                });
                tooltip.show();

                // Reset after 2 seconds
                setTimeout(() => {
                    this.innerHTML = originalIcon;
                    tooltip.setContent({
                        '.tooltip-inner': 'Copy to clipboard'
                    });
                }, 2000);
            });
        });

        // Bulk selection functionality
        document.getElementById('select-all-checkbox')?.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.user-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        document.getElementById('select-all')?.addEventListener('click', function() {
            const selectAllCheckbox = document.getElementById('select-all-checkbox');
            selectAllCheckbox.checked = !selectAllCheckbox.checked;
            selectAllCheckbox.dispatchEvent(new Event('change'));
        });

        // Confirmations for critical actions
        document.querySelectorAll('button[name="revoke_key"]').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!confirm('Are you sure you want to revoke this API key? All applications using it will stop working.')) {
                    e.preventDefault();
                }
            });
        });

        // Handle API key generation via AJAX
        document.getElementById('generateKeyBtn')?.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');
            const btn = this;

            // Disable button during processing
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Processing...';

            // Make AJAX request to ../index.php
            fetch('../index.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `generate_single=1&user_id=${userId}`
                })
                .then(response => {
                    if (response.redirected) {
                        // If the response is a redirect, reload the page to see the new key
                        window.location.reload();
                    } else {
                        return response.text().then(text => {
                            throw new Error(text || 'Failed to generate API key');
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error generating API key: ' + error.message);
                })
                .finally(() => {
                    btn.disabled = false;
                    btn.innerHTML = '<i class="fas fa-key me-1"></i> Generate API Key';
                });
        });
    </script>
</body>

</html>