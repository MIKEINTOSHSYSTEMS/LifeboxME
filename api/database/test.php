<?php
@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

// Load environment variables from .env.dev
$envPath = realpath(__DIR__ . '/../../.env.dev');
if (file_exists($envPath)) {
    $envVars = parse_ini_file($envPath);
    foreach ($envVars as $key => $value) {
        putenv("$key=$value");
        $_ENV[$key] = $value;
    }
}

// Include the shared session and database helpers
require_once __DIR__ . '/../../res/session_helper.php';
require_once __DIR__ . '/../../res/database.php';


// Database Configuration
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_PORT', getenv('POSTGRES_PORT') ?: '5432');
define('DB_NAME', getenv('POSTGRES_DB') ?: 'lifebox_mesystem');
define('DB_USER', getenv('POSTGRES_USER') ?: 'postgres');
define('DB_PASS', getenv('POSTGRES_PASSWORD') ?: 'mikeintosh');

// Session configuration matching PHPRunner
/*
$cookieParams = session_get_cookie_params();
$secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
session_set_cookie_params(0, $cookieParams["path"], $cookieParams["domain"], $secure, true);
session_name("pLifeboxSA7lVH6MEdvwh");
session_cache_limiter("");
session_start();
*/
// Session configuration is handled by session_helper.php

// Initialize variables
$show_login_form = false;
$is_admin = false;
$login_error = null;

// Check for PHPRunner session or local session
if (isset($_SESSION['UserID']) || isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['UserID'] ?? $_SESSION['user_id'];
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $_SESSION['UserName'] ?? $_SESSION['username'] ?? null;

    // Verify admin status from database or session
    $is_admin = $_SESSION['is_admin'] ?? verify_admin_from_database($user_id);

    if (!$is_admin) {
        $login_error = "You are not a system administrator";
        session_unset();
        session_destroy();
    }
}

// Database connection function using PDO (matches database.php)
function db_connect()
{
    try {
        $conn = new PDO(
            "pgsql:host=" . DB_HOST .
                ";port=" . DB_PORT .
                ";dbname=" . DB_NAME,
            DB_USER,
            DB_PASS
        );
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Verify admin status from database
function verify_admin_from_database($user_id)
{
    $conn = db_connect();
    if (!$conn) return false;

    try {
        // Updated query for Lifebox tables
        $stmt = $conn->prepare("
            SELECT ug.\"GroupID\" 
            FROM lifeboxme_ugmembers ug
            JOIN users u ON ug.\"UserName\" = u.username
            WHERE u.id = ? AND ug.\"GroupID\" = -1
        ");
        $stmt->execute([$user_id]);

        return ($stmt->rowCount() === 1);
    } catch (PDOException $e) {
        error_log("Admin verification error: " . $e->getMessage());
        return false;
    }
}

// Check if user is logged in

// Check if user is admin
function is_admin()
{
    if (!is_logged_in()) return false;

    // For PHPRunner sessions, we already verified admin status
    if (isset($_SESSION['UserID'])) {
        return $_SESSION['is_admin'] ?? false;
    }

    // For local logins, check database again
    return verify_admin_from_database($_SESSION['user_id']);
}

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

// Update admin status
$is_admin = is_admin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox Database Backup System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0079a5;
            --secondary-color: #1e6a7d;
            --accent-color: #ff6b35;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --success-color: #4cc9f0;
            --warning-color: #f8961e;
            --danger-color: #F72525FF;
            --border-radius: 8px;
            --box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeInDown 1s ease;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .logo i {
            color: var(--accent-color);
        }

        .subtitle {
            position: relative;
            top: 20px;
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .tabs-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            margin-bottom: 30px;
            animation: fadeIn 1s ease;
        }

        .tabs-header {
            display: flex;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            overflow-x: auto;
            scrollbar-width: none;
        }

        .tabs-header::-webkit-scrollbar {
            display: none;
        }

        .tab-btn {
            padding: 15px 25px;
            background: transparent;
            border: none;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            white-space: nowrap;
        }

        .tab-btn:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }

        .tab-btn.active {
            color: white;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 3px;
            background: var(--accent-color);
            border-radius: 3px 3px 0 0;
        }

        .tab-content {
            display: none;
            padding: 30px;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        .tab-content h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .tab-content h3 {
            color: var(--secondary-color);
            margin: 15px 0 10px;
            font-size: 1.4rem;
        }

        .tab-content p {
            margin-bottom: 15px;
        }

        .tab-content ul,
        .tab-content ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .tab-content li {
            margin-bottom: 8px;
        }

        .iframe-container {
            position: relative;
            width: 100%;
            height: 400vh;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            margin-top: 20px;
            background: #f1f3f5;
            border: 1px solid #e9ecef;
        }

        .iframe-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .iframe-loading {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.8);
            z-index: 10;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .logo {
                position: relative;
                top: 25px;
                font-size: 2rem;
            }

            .tab-btn {
                padding: 12px 15px;
                font-size: 0.9rem;
            }

            .tab-content {
                padding: 20px;
            }

            .iframe-container {
                height: 400px;
            }

            .user-info {
                position: static;
                justify-content: center;
                margin-top: 10px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .tab-btn {
                padding: 10px 12px;
                font-size: 0.8rem;
            }

            .tab-content h2 {
                font-size: 1.5rem;
            }

            .iframe-container {
                height: 200vh;
            }

            .modal-content {
                padding: 20px;
            }
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(67, 97, 238, 0.2);
            border-radius: 50%;
            border-top-color: var(--primary-color);
            animation: spin 1s ease-in-out infinite;
        }

        .card {
            background: white;
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: var(--box-shadow);
        }

        .card-title {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            margin: 5px 0;
        }

        .btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-submit {
            background: transparent;
            border: 2px solid var(--success-color);
            color: var(--success-color);
        }

        .btn-outline:hover {
            background: var(--primary-color);
            color: white;
        }

        .alert {
            padding: 15px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            background: #e9ecef;
            border-left: 4px solid var(--primary-color);
        }

        .alert-warning {
            background: #fff3bf;
            border-left-color: var(--warning-color);
        }

        .alert-danger {
            background: #ffc9c9;
            border-left-color: var(--danger-color);
        }

        .alert-success {
            background: #d3f9d8;
            border-left-color: #2b8a3e;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Login Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease;
        }

        .modal-header {
            margin-bottom: 20px;
            text-align: center;
        }

        .modal-header h1 {
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        .modal-header h2 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .modal-body {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .form-group input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(215, 67, 33, 0.2);
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .error-message {
            color: var(--danger-color);
            margin-top: 10px;
            font-size: 0.9rem;
            text-align: center;
        }

        .user-info {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info span {
            font-weight: 600;
            color: var(--primary-color);
        }

        .logout-btn {
            background: var(--danger-color);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
        }

        .logout-btn:hover {
            background: #d6336c;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <?php if (!is_logged_in()): ?>
        <!-- Login Modal -->
        <div id="loginModal" class="modal-overlay" style="display: flex;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Lifebox Admin</h1>
                    <h2>Authentication Required</h2>
                    <p>Please login to continue</p>
                </div>
                <?php if (isset($login_error)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($login_error); ?></div>
                <?php endif; ?>
                <form method="POST" action="/login_handler.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="usernameInput">Username:</label>
                            <input type="text" id="usernameInput" name="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Password:</label>
                            <input type="password" id="passwordInput" name="password" placeholder="Enter password" required>
                        </div>
                        <?php if (isset($login_error)): ?>
                            <div class="error-message"><?php echo htmlspecialchars($login_error); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-submit"
                            style="background-color: var(--success-color, #4cc9f0); color: white;"
                            onmouseover="this.style.backgroundColor='#00FFCCFF'"
                            onmouseout="this.style.backgroundColor='var(--success-color, #4cc9f0)'">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <?php if (is_logged_in()): ?>
            <div class="user-info">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <?php if ($is_admin): ?>
                    <span>(Admin)</span>
                <?php endif; ?>
                <button class="logout-btn" onclick="window.location.href='?logout=1'">Logout</button>
            </div>
        <?php endif; ?>

        <header>
            <div class="logo">
                <i class="fas fa-database"></i>
                <span>Lifebox M&E System Database Backup</span>
            </div>
            <p class="subtitle">Secure and efficient database backup management for Lifebox Application, Metabase & Forms Database</p>
        </header>

        <div class="tabs-container">
            <div class="tabs-header">
                <button class="tab-btn active" data-tab="intro">
                    <i class="fas fa-info-circle"></i> Introduction
                </button>
                <button class="tab-btn" data-tab="main-app" <?php echo (!is_logged_in() || !$is_admin) ? 'disabled style="opacity: 0.6; cursor: not-allowed;"' : ''; ?>>
                    <i class="fas fa-server"></i> Lifebox Application
                </button>
                <button class="tab-btn" data-tab="metabase" <?php echo (!is_logged_in() || !$is_admin) ? 'disabled style="opacity: 0.6; cursor: not-allowed;"' : ''; ?>>
                    <i class="fas fa-chart-bar"></i> Metabase
                </button>
                <button class="tab-btn" data-tab="lifebox-forms" <?php echo (!is_logged_in() || !$is_admin) ? 'disabled style="opacity: 0.6; cursor: not-allowed;"' : ''; ?>>
                    <i class="fas fa-file-alt"></i> Forms
                </button>
                <button class="tab-btn" data-tab="lifebox-analytics" <?php echo (!is_logged_in() || !$is_admin) ? 'disabled style="opacity: 0.6; cursor: not-allowed;"' : ''; ?>>
                    <i class="fas fa-chart-pie"></i> Analytics
                </button>
            </div>

            <div class="tab-content active" id="intro">
                <h2>Database Backup System</h2>
                <p>Welcome to the Database Backup System. This platform provides comprehensive tools for managing and backing up your Lifebox M&E Systems.</p>

                <div class="alert alert-warning">
                    <strong>Important:</strong> Regular database backups are essential for data protection and disaster recovery.
                </div>

                <div class="card">
                    <h3 class="card-title">How to Back Up Your Database</h3>
                    <ol>
                        <li>Navigate to the appropriate tab for your database system</li>
                        <li>Follow the on-screen instructions for your specific database</li>
                        <li>Enter the Credentials Provided by the System Admin</li>
                        <li>Schedule regular backups if needed</li>
                        <li>Verify your backups periodically</li>
                    </ol>
                </div>

                <div class="card">
                    <h3 class="card-title">Backup Best Practices</h3>
                    <ul>
                        <li>Perform backups during low-usage periods</li>
                        <li>Store backups in multiple locations (3-2-1 rule: 3 copies, 2 media types, 1 offsite)</li>
                        <li>Test your backup restoration process regularly</li>
                        <li>Encrypt sensitive backup data</li>
                        <li>Document your backup procedures</li>
                    </ul>
                </div>

                <div class="alert alert-success">
                    <strong>Tip:</strong> Set up automated backup schedules to ensure you never miss a backup.
                </div>
            </div>

            <div class="tab-content" id="main-app">
                <h2>Lifebox Application Backup</h2>
                <p>Use this interface to manage backups for the main Lifebox application database.</p>

                <div class="iframe-container">
                    <div class="iframe-loading">
                        <div class="spinner"></div>
                    </div>
                    <iframe src="./main/" id="main-app-iframe" loading="lazy"></iframe>
                </div>
            </div>

            <div class="tab-content" id="metabase">
                <h2>Metabase Database</h2>
                <p>Access the Metabase reporting system to manage analytics database backups.</p>

                <div class="alert">
                    <strong>Note:</strong> Metabase backups include reports, dashboards, and query history in addition to database contents.
                </div>

                <div class="iframe-container">
                    <div class="iframe-loading">
                        <div class="spinner"></div>
                    </div>
                    <iframe src="./meta/" id="metabase-iframe" loading="lazy"></iframe>
                </div>
            </div>

            <div class="tab-content" id="lifebox-forms">
                <h2>Lifebox Forms Database</h2>
                <p>Manage backups for the Lifebox Forms system, including form submissions and configurations.</p>

                <div class="iframe-container">
                    <div class="iframe-loading">
                        <div class="spinner"></div>
                    </div>
                    <iframe src="./forms/" id="lifebox-forms-iframe" loading="lazy"></iframe>
                </div>
            </div>

            <div class="tab-content" id="lifebox-analytics">
                <h2>Lifebox Analytics Database</h2>
                <p>Manage backups for the Lifebox Analytics system, including visitors/users analytics and configurations.</p>

                <div class="iframe-container">
                    <div class="iframe-loading">
                        <div class="spinner"></div>
                    </div>
                    <iframe src="./analytics/" id="lifebox-analytics-iframe" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Lifebox Database Backup System. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            function setupTabSwitching() {
                tabBtns.forEach(btn => {
                    if (!btn.disabled) {
                        btn.addEventListener('click', function() {
                            const tabId = btn.getAttribute('data-tab');

                            tabBtns.forEach(b => b.classList.remove('active'));
                            tabContents.forEach(c => c.classList.remove('active'));

                            btn.classList.add('active');
                            document.getElementById(tabId).classList.add('active');

                            if (tabId === 'main-app') {
                                loadIframe('main-app-iframe');
                            } else if (tabId === 'metabase') {
                                loadIframe('metabase-iframe');
                            } else if (tabId === 'lifebox-forms') {
                                loadIframe('lifebox-forms-iframe');
                            } else if (tabId === 'lifebox-analytics') {
                                loadIframe('lifebox-analytics-iframe');
                            }
                        });
                    }
                });
            }

            function loadIframe(iframeId) {
                const iframe = document.getElementById(iframeId);
                const loadingElement = iframe.previousElementSibling;

                if (iframe.getAttribute('data-loaded') !== 'true') {
                    loadingElement.style.display = 'flex';

                    iframe.onload = function() {
                        loadingElement.style.display = 'none';
                        iframe.setAttribute('data-loaded', 'true');
                    };

                    setTimeout(() => {
                        loadingElement.style.display = 'none';
                        iframe.setAttribute('data-loaded', 'true');
                    }, 1000);
                }
            }

            setupTabSwitching();
        });
    </script>
</body>

</html>