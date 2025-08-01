<?php
@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

session_start();
ob_start();

// Load environment variables from .env file
if (file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

// Database configuration
define('DB_HOST', $_ENV['DB_HOST'] ?? '127.0.0.1');
define('DB_PORT', $_ENV['POSTGRES_PORT'] ?? '5432');
define('DB_NAME', $_ENV['POSTGRES_DB'] ?? 'lifebox_mesystem');
define('DB_USER', $_ENV['POSTGRES_USER'] ?? 'postgres');
define('DB_PASSWORD', $_ENV['POSTGRES_PASSWORD'] ?? 'mikeintosh');

// Handle AJAX request for user data
if (isset($_GET['get_user'])) {
    $user_id = (int)$_GET['get_user'];
    $user = get_user($user_id);
    header('Content-Type: application/json');
    echo json_encode($user);
    exit();
}

// Initialize session variables if they don't exist
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = null;
    $_SESSION['username'] = null;
    $is_admin = false;
}

// Try to include dbcommon.php if it exists
$dbcommon_path = "/app/include/dbcommon.php";
if (file_exists($dbcommon_path)) {
    require_once($dbcommon_path);

    if (!Security::isLoggedIn()) {
        $show_login_form = true;
    } else {
        $_SESSION['user_id'] = Security::getUserId();
        $_SESSION['username'] = Security::getUserName();
        $is_admin = Security::isAdmin();
    }
} else {
    $show_login_form = ($_SESSION['user_id'] === null);
    $is_admin = false;
}

// Connect to PostgreSQL database
function db_connect()
{
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";user=" . DB_USER . ";password=" . DB_PASSWORD;

    try {
        $conn = new PDO($dsn);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Generate API key
function generate_api_key()
{
    return password_hash(uniqid() . mt_rand(), PASSWORD_BCRYPT);
}

// Authenticate user
function authenticate($username, $password)
{
    global $is_admin;

    if (class_exists('Security')) {
        if (Security::login($username, $password)) {
            $_SESSION['user_id'] = Security::getUserId();
            $_SESSION['username'] = Security::getUserName();
            $is_admin = Security::isAdmin();
            return true;
        }
        return false;
    }

    $conn = db_connect();
    $stmt = $conn->prepare("SELECT \"ID\" as id, username, password, active FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password']) && $user['active']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $is_admin = is_admin();
        return true;
    }
    return false;
}

// Check if user is logged in
function is_logged_in()
{
    if (class_exists('Security') && Security::isLoggedIn()) {
        return true;
    }
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null;
}

// Check if user is admin
function is_admin()
{
    if (class_exists('Security') && Security::isAdmin()) {
        return true;
    }

    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
        $conn = db_connect();
        $stmt = $conn->prepare("SELECT \"GroupID\" FROM lifeboxme_ugmembers WHERE \"UserName\" = ?");
        $stmt->execute([$_SESSION['username']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return $user['GroupID'] == -1; // -1 indicates admin
        }
    }

    return false;
}

// Logout
function logout()
{
    if (class_exists('Security')) {
        Security::logout();
    }
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

function get_pagination_link($page_number)
{
    $base_url = 'index.php';
    $query_string = '?page=' . $page_number;

    if (isset($_GET['search'])) {
        $query_string .= '&search=' . urlencode($_GET['search']);
    }
    if (isset($_GET['status'])) {
        $query_string .= '&status=' . $_GET['status'];
    }
    if (isset($_GET['api_key_filter'])) {
        $query_string .= '&api_key_filter=' . $_GET['api_key_filter'];
    }
    if (isset($_GET['per_page'])) {
        $query_string .= '&per_page=' . $_GET['per_page'];
    }
    if (isset($_GET['sort'])) {
        $query_string .= '&sort=' . $_GET['sort'];
    }
    if (isset($_GET['order'])) {
        $query_string .= '&order=' . $_GET['order'];
    }

    return $base_url . $query_string;
}

// Process form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        if (authenticate($username, $password)) {
            session_regenerate_id(true);
            //header("Location: index.php"); uncomment it if you want to staty at the main page
            header("Location: /api/users/profile/");
            exit();
        } else {
            $login_error = "Invalid username or password";
            $show_login_form = true;
        }
    }

    if (isset($_POST['logout'])) {
        logout();
    }

    if (is_logged_in()) {
        // Get pagination and filter parameters
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 5;
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $status_filter = isset($_GET['status']) ? $_GET['status'] : '';
        $sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
        $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

        // Process bulk actions
        if (is_admin() && isset($_POST['bulk_action'])) {
            $action = $_POST['bulk_action'];
            $user_ids = isset($_POST['bulk_users']) ? $_POST['bulk_users'] : [];

            if (!empty($user_ids)) {
                $conn = db_connect();
                $count = 0;

                foreach ($user_ids as $user_id) {
                    $user_id = (int)$user_id; // Cast to integer
                    switch ($action) {
                        case 'generate_keys':
                            $api_key = generate_api_key();
                            $stmt = $conn->prepare("UPDATE users SET api_key = ? WHERE \"ID\" = ?");
                            $stmt->execute([$api_key, $user_id]);
                            $count++;
                            break;

                        case 'remove_keys':
                            $stmt = $conn->prepare("UPDATE users SET api_key = NULL WHERE \"ID\" = ?");
                            $stmt->execute([$user_id]);
                            $count++;
                            break;

                        case 'activate':
                            $stmt = $conn->prepare("UPDATE users SET active = true WHERE \"ID\" = ?");
                            $stmt->execute([$user_id]);
                            $count++;
                            break;

                        case 'deactivate':
                            $stmt = $conn->prepare("UPDATE users SET active = false WHERE \"ID\" = ?");
                            $stmt->execute([$user_id]);
                            $count++;
                            break;
                    }
                }

                $conn = null;
                $_SESSION['api_key_message'] = "Bulk action '$action' completed for $count users";
                header("Location: index.php?page=$page&per_page=$per_page&search=$search&status=$status_filter&sort=$sort&order=$order");
                exit();
            }
        }

        // Process single actions
        if (isset($_POST['generate_single'])) {
            $user_id = (int)$_POST['user_id']; // Cast to integer
            $api_key = generate_api_key();
            $conn = db_connect();
            $stmt = $conn->prepare("UPDATE users SET api_key = ? WHERE \"ID\" = ?");
            $stmt->execute([$api_key, $user_id]);
            $conn = null;
            $_SESSION['api_key_message'] = "API key generated for user ID: $user_id";
            header("Location: index.php?page=$page&per_page=$per_page&search=$search&status=$status_filter&sort=$sort&order=$order");
            exit();
        }

        if (is_admin() && isset($_POST['remove_key'])) {
            $user_id = (int)$_POST['user_id']; // Cast to integer
            $conn = db_connect();
            $stmt = $conn->prepare("UPDATE users SET api_key = NULL WHERE \"ID\" = ?");
            $stmt->execute([$user_id]);
            $conn = null;
            $_SESSION['api_key_message'] = "API key removed for user ID: $user_id";
            header("Location: index.php?page=$page&per_page=$per_page&search=$search&status=$status_filter&sort=$sort&order=$order");
            exit();
        }

        if (is_admin() && isset($_POST['toggle_status'])) {
            $user_id = (int)$_POST['user_id']; // Cast to integer
            $conn = db_connect();
            $stmt = $conn->prepare("SELECT active FROM users WHERE \"ID\" = ?");
            $stmt->execute([$user_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $new_status = $user['active'] ? 0 : 1;
                $stmt = $conn->prepare("UPDATE users SET active = ? WHERE \"ID\" = ?");
                $stmt->execute([$new_status, $user_id]);
                $_SESSION['api_key_message'] = "Status updated for user ID: $user_id";
            }

            $conn = null;
            header("Location: index.php?page=$page&per_page=$per_page&search=$search&status=$status_filter&sort=$sort&order=$order");
            exit();
        }

        if (is_admin() && isset($_POST['create_user'])) {
            $username = trim($_POST['new_username']);
            $password = password_hash(trim($_POST['new_password']), PASSWORD_BCRYPT);
            $email = trim($_POST['email']);
            $fullname = trim($_POST['fullname']);
            $designation = trim($_POST['designation']);
            $api_key = generate_api_key();

            $conn = db_connect();
            $stmt = $conn->prepare("INSERT INTO users (username, password, email, fullname, designation_role, api_key, active) VALUES (?, ?, ?, ?, ?, ?, true)");
            if ($stmt->execute([$username, $password, $email, $fullname, $designation, $api_key])) {
                $_SESSION['user_message'] = "User created successfully";
            } else {
                $_SESSION['user_message'] = "Error creating user";
            }
            $conn = null;
            header("Location: index.php");
            exit();
        }

        if (is_admin() && isset($_POST['update_user'])) {
            $user_id = (int)$_POST['user_id']; // Cast to integer
            $email = trim($_POST['email']);
            $fullname = trim($_POST['fullname']);
            $designation = trim($_POST['designation']);

            $conn = db_connect();
            $stmt = $conn->prepare("UPDATE users SET email = ?, fullname = ?, designation_role = ? WHERE \"ID\" = ?");
            if ($stmt->execute([$email, $fullname, $designation, $user_id])) {
                $_SESSION['user_message'] = "User updated successfully";
            } else {
                $_SESSION['user_message'] = "Error updating user";
            }
            $conn = null;
            header("Location: index.php?page=$page&per_page=$per_page&search=$search&status=$status_filter&sort=$sort&order=$order");
            exit();
        }

        if (is_admin() && isset($_POST['change_password'])) {
            $user_id = (int)$_POST['user_id']; // Cast to integer
            $new_password = password_hash(trim($_POST['new_password']), PASSWORD_BCRYPT);

            $conn = db_connect();
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE \"ID\" = ?");
            if ($stmt->execute([$new_password, $user_id])) {
                $_SESSION['user_message'] = "Password changed successfully";
            } else {
                $_SESSION['user_message'] = "Error changing password";
            }
            $conn = null;
            header("Location: index.php?page=$page&per_page=$per_page&search=$search&status=$status_filter&sort=$sort&order=$order");
            exit();
        }
    }
}


// Get all users with pagination, sorting, and filtering
function get_all_users($page = 1, $per_page = 10, $search = '', $status = '', $sort = 'id', $order = 'ASC')
{
    $offset = ($page - 1) * $per_page;
    $conn = db_connect();

    $query = "SELECT 
                u.\"ID\" as id, 
                u.username, 
                u.email, 
                u.fullname, 
                u.designation_role as designation, 
                u.api_key, 
                u.active,
                (SELECT STRING_AGG(g.\"Label\", ', ') 
                 FROM lifeboxme_ugmembers m 
                 JOIN lifeboxme_uggroups g ON m.\"GroupID\" = g.\"GroupID\"
                 WHERE m.\"UserName\" = u.username) as group_labels
              FROM users u";
    $where = [];
    $params = [];
    $types = '';

    if (!is_admin()) {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            $where[] = "u.\"ID\" = ?";
            $params[] = $_SESSION['user_id'];
            $types .= 'i';
        } else {
            // If not logged in and not admin, return empty array
            $conn = null;
            return [];
        }
    }

    if (!empty($search)) {
        $where[] = "(username LIKE ? OR email LIKE ? OR fullname LIKE ? OR designation_role LIKE ? OR api_key LIKE ?)";
        $search_term = "%$search%";
        $params = array_merge($params, [$search_term, $search_term, $search_term, $search_term, $search_term]);
        $types .= 'sssss';
    }

    if ($status !== '') {
        $status_value = $status === 'active' ? 1 : 0;
        $where[] = "active = ?";
        $params[] = $status_value;
        $types .= 'i';
    }

    if (isset($_GET['api_key_filter']) && $_GET['api_key_filter'] !== '') {
        $api_key_filter = $_GET['api_key_filter'];
        if ($api_key_filter === 'with') {
            $where[] = "api_key IS NOT NULL";
        } elseif ($api_key_filter === 'without') {
            $where[] = "api_key IS NULL";
        }
    }

    if (!empty($where)) {
        $query .= " WHERE " . implode(" AND ", $where);
    }

    $allowed_sorts = ['id', 'username', 'email', 'fullname', 'designation', 'active'];
    $sort = in_array($sort, $allowed_sorts) ? $sort : 'id';
    $order = in_array(strtoupper($order), ['ASC', 'DESC']) ? strtoupper($order) : 'ASC';
    $query .= " ORDER BY $sort $order";

    $query .= " LIMIT ? OFFSET ?";
    $params[] = $per_page;
    $params[] = $offset;
    $types .= 'ii';

    $stmt = $conn->prepare($query);
    $stmt->execute($params);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $conn = null;
    return $users;
}

// Count all users with filters
function count_users($search = '', $status = '')
{
    $conn = db_connect();

    $query = "SELECT COUNT(*) AS total FROM users u";
    $where = [];
    $params = [];
    $types = '';

    if (!is_admin()) {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            $where[] = "u.\"ID\" = ?";
            $params[] = $_SESSION['user_id'];
            $types .= 'i';
        } else {
            // If not logged in and not admin, return 0
            $conn = null;
            return 0;
        }
    }

    if (!empty($search)) {
        $where[] = "(username LIKE ? OR email LIKE ? OR fullname LIKE ? OR designation_role LIKE ? OR api_key LIKE ?)";
        $search_term = "%$search%";
        $params = array_merge($params, [$search_term, $search_term, $search_term, $search_term, $search_term]);
        $types .= 'sssss';
    }

    if ($status !== '') {
        $status_value = $status === 'active' ? 1 : 0;
        $where[] = "active = ?";
        $params[] = $status_value;
        $types .= 'i';
    }

    if (isset($_GET['api_key_filter']) && $_GET['api_key_filter'] !== '') {
        $api_key_filter = $_GET['api_key_filter'];
        if ($api_key_filter === 'with') {
            $where[] = "api_key IS NOT NULL";
        } elseif ($api_key_filter === 'without') {
            $where[] = "api_key IS NULL";
        }
    }

    if (!empty($where)) {
        $query .= " WHERE " . implode(" AND ", $where);
    }

    $stmt = $conn->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total = $result['total'];

    $conn = null;
    return $total;
}

// Get current user
function get_user($user_id)
{
    $conn = db_connect();
    $stmt = $conn->prepare("SELECT \"ID\" as id, username, email, fullname, designation_role as designation, api_key, active FROM users WHERE \"ID\" = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $user;
}


// Get pagination and filter parameters
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 5;
$search = isset($_GET['search']) ? $_GET['search'] : '';
$status_filter = isset($_GET['status']) ? $_GET['status'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

// Get users with pagination and filters
$users = get_all_users($page, $per_page, $search, $status_filter, $sort, $order);
$total_users = count_users($search, $status_filter);
$total_pages = ceil($total_users / $per_page);

// Display messages
$api_key_message = isset($_SESSION['api_key_message']) ? $_SESSION['api_key_message'] : '';
$user_message = isset($_SESSION['user_message']) ? $_SESSION['user_message'] : '';
unset($_SESSION['api_key_message']);
unset($_SESSION['user_message']);

// Show login form if not logged in
if (!is_logged_in()) {
    $show_login_form = true;
}
?>

<?php if (isset($show_login_form) && $show_login_form): ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifebox M&E Users API Key Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            :root {
                --primary-color: #4361ee;
                --secondary-color: #3f37c9;
                --success-color: #4cc9f0;
                --light-color: #f8f9fa;
                --dark-color: #212529;
                --gray-color: #6c757d;
            }

            .btn-primary {
                --bs-btn-color: #fff;
                --bs-btn-bg: #f22777;
                --bs-btn-border-color: #f22777;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #fd7e14;
                --bs-btn-hover-border-color: #0a58ca;
                --bs-btn-focus-shadow-rgb: 49, 132, 253;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #CAA40AFF;
                --bs-btn-active-border-color: #286CD2FF;
                --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                --bs-btn-disabled-color: #fff;
                --bs-btn-disabled-bg: #0d6efd;
                --bs-btn-disabled-border-color: #0d6efd;
            }

            body {
                background-color: #f5f7fb;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .login-container {
                max-width: 400px;
                margin: 100px auto;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                background-color: white;
            }

            .user-avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #00acc7;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                font-size: 18px;
            }
        </style>
    </head>

    <body>
        <div class="login-container">
            <div class="text-center mb-4">
                <div class="user-avatar mx-auto mb-3">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>Lifebox M&E Users API Key Management</h3>
                <p class="text-muted">Sign in to your account</p>
            </div>

            <?php if (isset($login_error)): ?>
                <div class="alert alert-danger"><?php echo $login_error; ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Sign In</button>
            </form>
        </div>
    </body>

    </html>
<?php else: ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifebox M&E Users API Key Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            :root {
                --primary-color: #FD7E47;
                --secondary-color: #f22777;
                --success-color: #4cc9f0;
                --light-color: #f8f9fa;
                --dark-color: #212529;
                --gray-color: #6c757d;
            }

            body {
                background-color: #f5f7fb;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .navbar {
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .card {
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                border: none;
                margin-bottom: 25px;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .card-header {
                background-color: white;
                border-bottom: 1px solid #eaeaea;
                padding: 20px 25px;
                border-radius: 12px 12px 0 0 !important;
                font-weight: 600;
            }

            .btn-primary {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-primary:hover {
                background-color: var(--secondary-color);
                border-color: var(--secondary-color);
            }

            .btn-outline-primary {
                color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-outline-primary:hover {
                background-color: var(--primary-color);
                color: white;
            }

            .table th {
                font-weight: 600;
                color: var(--gray-color);
                cursor: pointer;
                position: relative;
            }

            .table th.sort-asc::after {
                content: "▲";
                font-size: 0.7rem;
                margin-left: 5px;
                position: absolute;
            }

            .table th.sort-desc::after {
                content: "▼";
                font-size: 0.7rem;
                margin-left: 5px;
                position: absolute;
            }

            .api-key {
                font-family: monospace;
                font-size: 0.85rem;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 250px;
                display: inline-block;
                white-space: nowrap;
            }

            .status-badge {
                padding: 5px 10px;
                border-radius: 20px;
                font-size: 0.8rem;
                font-weight: 500;
            }

            .status-active {
                background-color: rgba(76, 201, 240, 0.2);
                color: #0d6efd;
            }

            .status-inactive {
                background-color: rgba(220, 53, 69, 0.2);
                color: #dc3545;
            }

            .message-box {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 1050;
                max-width: 400px;
            }

            .user-avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #ffad4a;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                font-size: 18px;
            }

            .action-btn {
                padding: 5px 10px;
                border-radius: 5px;
                margin: 0 3px;
                font-size: 0.9rem;
            }

            .main-container {
                margin-top: 20px;
                padding-bottom: 50px;
            }

            .bulk-checkbox {
                width: 20px;
                height: 20px;
            }

            .filter-bar {
                background-color: white;
                border-radius: 10px;
                padding: 20px;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            }

            .pagination-container {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            .action-dropdown {
                display: inline-block;
            }

            .sortable:hover {
                background-color: rgba(67, 97, 238, 0.1);
            }

            .copy-btn {
                transition: all 0.3s;
            }

            .copy-btn:hover {
                background-color: #e9ecef;
            }

            .bg-white {
                --bs-bg-opacity: 1;
                background-color: #00acc7 !important;
            }

            .navbar-brand {
                padding-top: var(--bs-navbar-brand-padding-y);
                padding-bottom: var(--bs-navbar-brand-padding-y);
                margin-right: var(--bs-navbar-brand-margin-end);
                font-size: var(--bs-navbar-brand-font-size);
                color: #f7feff;
                text-decoration: none;
                white-space: nowrap;
            }
        </style>
    </head>

    <body>
        <!-- Main Application -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">
                    <i class="fas fa-users me-2 text-primary"></i>
                    Lifebox API Key Management
                </a>
                <div>
                    <a href="/api/users/profile/index.php" class="btn btn-primary">
                        <i class="fas fa-user-cog"></i> View Your API Credentials
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <span class="user-avatar me-2"><?php echo substr($_SESSION['username'], 0, 1); ?></span>
                                <?php echo htmlspecialchars($_SESSION['username']); ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?php if (is_admin()): ?>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#createUserModal">
                                            <i class="fas fa-user-plus me-2"></i>Create New User
                                        </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <form method="POST">
                                        <button type="submit" name="logout" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid main-container">
            <!-- Messages -->
            <?php if ($api_key_message): ?>
                <div class="alert alert-success alert-dismissible fade show message-box" role="alert">
                    <?php echo $api_key_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if ($user_message): ?>
                <div class="alert alert-info alert-dismissible fade show message-box" role="alert">
                    <?php echo $user_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <!-- User Counters -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text display-5"><?php echo $total_users; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Active Users</h5>
                            <p class="card-text display-5"><?php echo count_users('', 'active'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">Inactive Users</h5>
                            <p class="card-text display-5"><?php echo count_users('', 'inactive'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Bar -->
            <div class="filter-bar">
                <form method="GET" class="row g-3">
                    <input type="hidden" name="sort" value="<?php echo htmlspecialchars($sort); ?>">
                    <input type="hidden" name="order" value="<?php echo htmlspecialchars($order); ?>">

                    <div class="col-md-3">
                        <label for="search" class="form-label">Search</label>
                        <input type="text" class="form-control" id="search" name="search"
                            value="<?php echo htmlspecialchars($search); ?>" placeholder="Search users...">
                    </div>

                    <div class="col-md-2">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="">All Statuses</option>
                            <option value="active" <?php echo $status_filter === 'active' ? 'selected' : ''; ?>>Active</option>
                            <option value="inactive" <?php echo $status_filter === 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="api_key_filter" class="form-label">API Key</label>
                        <select class="form-select" id="api_key_filter" name="api_key_filter">
                            <option value="">All</option>
                            <option value="with" <?php echo isset($_GET['api_key_filter']) && $_GET['api_key_filter'] === 'with' ? 'selected' : ''; ?>>With Key</option>
                            <option value="without" <?php echo isset($_GET['api_key_filter']) && $_GET['api_key_filter'] === 'without' ? 'selected' : ''; ?>>Without Key</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="per_page" class="form-label">Items per page</label>
                        <select class="form-select" id="per_page" name="per_page">
                            <option value="5" <?php echo $per_page == 5 ? 'selected' : ''; ?>>5</option>
                            <option value="10" <?php echo $per_page == 10 ? 'selected' : ''; ?>>10</option>
                            <option value="25" <?php echo $per_page == 25 ? 'selected' : ''; ?>>25</option>
                            <option value="50" <?php echo $per_page == 50 ? 'selected' : ''; ?>>50</option>
                        </select>
                    </div>

                    <div class="col-md-3 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="fas fa-filter me-1"></i> Apply Filters
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary">
                            <i class="fas fa-sync me-1"></i> Reset
                        </a>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-users me-2"></i>
                                Users (Showing <?php echo ($page - 1) * $per_page + 1; ?>-<?php echo min($page * $per_page, $total_users); ?> of <?php echo $total_users; ?>)
                            </div>
                            <?php if (is_admin()): ?>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createUserModal">
                                        <i class="fas fa-user-plus me-1"></i> New User
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="bulkForm">
                                <?php if (is_admin()): ?>
                                    <div class="d-flex mb-3">
                                        <div class="action-dropdown me-2">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="bulkActions" data-bs-toggle="dropdown">
                                                <i class="fas fa-tasks me-1"></i> Bulk Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button class="dropdown-item" type="submit" name="bulk_action" value="generate_keys">
                                                        <i class="fas fa-key me-2"></i> Generate API Keys
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="dropdown-item" type="submit" name="bulk_action" value="remove_keys">
                                                        <i class="fas fa-trash me-2"></i> Remove API Keys
                                                    </button>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <button class="dropdown-item" type="submit" name="bulk_action" value="activate">
                                                        <i class="fas fa-check-circle me-2"></i> Activate Users
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="dropdown-item" type="submit" name="bulk_action" value="deactivate">
                                                        <i class="fas fa-ban me-2"></i> Deactivate Users
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                        <button type="submit" name="bulk_action" value="generate_keys" class="btn btn-primary me-2">
                                            <i class="fas fa-key me-1"></i> Generate Keys
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <?php if (is_admin()): ?>
                                                    <th style="width: 50px;">
                                                        <input type="checkbox" id="selectAll">
                                                    </th>
                                                <?php endif; ?>
                                                <th class="sortable" onclick="sortTable('username')">
                                                    User
                                                    <?php if ($sort === 'username'): ?>
                                                        <span class="<?php echo $order === 'ASC' ? 'sort-asc' : 'sort-desc'; ?>"></span>
                                                    <?php endif; ?>
                                                </th>
                                                <th class="sortable" onclick="sortTable('email')">
                                                    Contact
                                                    <?php if ($sort === 'email'): ?>
                                                        <span class="<?php echo $order === 'ASC' ? 'sort-asc' : 'sort-desc'; ?>"></span>
                                                    <?php endif; ?>
                                                </th>
                                                <th class="sortable" onclick="sortTable('designation')">
                                                    Designation
                                                    <?php if ($sort === 'designation'): ?>
                                                        <span class="<?php echo $order === 'ASC' ? 'sort-asc' : 'sort-desc'; ?>"></span>
                                                    <?php endif; ?>
                                                </th>
                                                <th>Groups</th>
                                                <th>API Key</th>
                                                <th class="sortable" onclick="sortTable('active')">
                                                    Status
                                                    <?php if ($sort === 'active'): ?>
                                                        <span class="<?php echo $order === 'ASC' ? 'sort-asc' : 'sort-desc'; ?>"></span>
                                                    <?php endif; ?>
                                                </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (count($users) > 0): ?>
                                                <?php foreach ($users as $user): ?>
                                                    <tr>
                                                        <?php if (is_admin()): ?>
                                                            <td>
                                                                <input type="checkbox" class="bulk-checkbox" name="bulk_users[]" value="<?php echo $user['id']; ?>">
                                                            </td>
                                                        <?php endif; ?>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="user-avatar me-3">
                                                                    <?php echo substr($user['username'], 0, 1); ?>
                                                                </div>
                                                                <div>
                                                                    <div class="fw-bold"><?php echo htmlspecialchars($user['username']); ?></div>
                                                                    <div class="text-muted"><?php echo htmlspecialchars($user['fullname']); ?></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div><?php echo htmlspecialchars($user['email']); ?></div>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlspecialchars($user['designation'] ?? ''); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlspecialchars($user['group_labels'] ?? ''); ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($user['api_key']): ?>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="api-key me-2" title="<?php echo htmlspecialchars($user['api_key']); ?>">
                                                                        <?php echo substr($user['api_key'], 0, 20) . '...'; ?>
                                                                    </span>
                                                                    <button class="btn btn-outline-secondary copy-btn"
                                                                        type="button"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Copy to clipboard"
                                                                        data-api-key="<?php echo htmlspecialchars($user['api_key']); ?>">
                                                                        <i class="fas fa-copy"></i>
                                                                    </button>
                                                                </div>
                                                            <?php else: ?>
                                                                <span class="badge bg-warning text-dark">Not Generated</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($user['active']): ?>
                                                                <span class="status-badge status-active">Active</span>
                                                            <?php else: ?>
                                                                <span class="status-badge status-inactive">Inactive</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <?php if (is_admin()): ?>
                                                                    <button type="button" class="btn btn-sm btn-outline-primary action-btn edit-user"
                                                                        data-user-id="<?php echo $user['id']; ?>">
                                                                        <i class="fas fa-edit"></i>
                                                                    </button>

                                                                    <form method="POST" style="display: inline;">
                                                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                                        <button type="submit" name="toggle_status" class="btn btn-sm btn-outline-<?php echo $user['active'] ? 'warning' : 'success'; ?> action-btn">
                                                                            <i class="fas fa-<?php echo $user['active'] ? 'ban' : 'check'; ?>"></i>
                                                                        </button>
                                                                    </form>
                                                                <?php endif; ?>

                                                                <form method="POST" style="display: inline;">
                                                                    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                                    <button type="submit" name="generate_single" class="btn btn-sm btn-outline-info action-btn">
                                                                        <i class="fas fa-key"></i>
                                                                    </button>
                                                                </form>

                                                                <?php if (is_admin()): ?>
                                                                    <form method="POST" style="display: inline;">
                                                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                                        <button type="submit" name="remove_key" class="btn btn-sm btn-outline-danger action-btn">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                <?php endif; ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="<?php echo is_admin() ? '8' : '7'; ?>" class="text-center py-4">
                                                        <i class="fas fa-user-slash fa-2x text-muted mb-3"></i>
                                                        <h5>No users found</h5>
                                                        <p class="text-muted">Try adjusting your filters</p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>

                            <!-- Pagination -->
                            <?php if ($total_pages > 1): ?>
                                <div class="pagination-container">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                                                <a class="page-link" href="<?php echo get_pagination_link(1); ?>">
                                                    <i class="fas fa-angle-double-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                                                <a class="page-link" href="<?php echo get_pagination_link($page - 1); ?>">
                                                    <i class="fas fa-angle-left"></i>
                                                </a>
                                            </li>

                                            <?php
                                            $start_page = max(1, $page - 2);
                                            $end_page = min($total_pages, $page + 2);

                                            if ($start_page > 1) {
                                                echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                                            }

                                            for ($i = $start_page; $i <= $end_page; $i++): ?>
                                                <li class="page-item <?php echo $page == $i ? 'active' : ''; ?>">
                                                    <a class="page-link" href="<?php echo get_pagination_link($i); ?>">
                                                        <?php echo $i; ?>
                                                    </a>
                                                </li>
                                            <?php endfor;

                                            if ($end_page < $total_pages) {
                                                echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                                            }
                                            ?>

                                            <li class="page-item <?php echo $page >= $total_pages ? 'disabled' : ''; ?>">
                                                <a class="page-link" href="<?php echo get_pagination_link($page + 1); ?>">
                                                    <i class="fas fa-angle-right"></i>
                                                </a>
                                            </li>
                                            <li class="page-item <?php echo $page >= $total_pages ? 'disabled' : ''; ?>">
                                                <a class="page-link" href="<?php echo get_pagination_link($total_pages); ?>">
                                                    <i class="fas fa-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create User Modal -->
        <?php if (is_admin()): ?>
            <div class="modal fade" id="createUserModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create New User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="new_username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="new_password" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="fullname" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Designation</label>
                                    <input type="text" name="designation" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="create_user" class="btn btn-primary">Create User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST">
                        <input type="hidden" name="user_id" id="edit_user_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" id="edit_email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="fullname" id="edit_fullname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" id="edit_designation" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="edit_active" name="active" disabled>
                                    <label class="form-check-label" for="edit_active">Active User</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Change Password Modal -->
        <div class="modal fade" id="changePasswordModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST">
                        <input type="hidden" name="user_id" id="password_user_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" name="new_password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Toggle all checkboxes
            document.getElementById('selectAll')?.addEventListener('click', function(e) {
                const checkboxes = document.querySelectorAll('.bulk-checkbox');
                for (let checkbox of checkboxes) {
                    checkbox.checked = e.target.checked;
                }
            });

            // Close alerts automatically after 5 seconds
            setTimeout(() => {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    new bootstrap.Alert(alert).close();
                });
            }, 5000);

            // Edit user modal handler
            document.querySelectorAll('.edit-user').forEach(button => {
                button.addEventListener('click', function() {
                    const userId = this.getAttribute('data-user-id');
                    document.getElementById('edit_user_id').value = userId;

                    // Fetch user data via AJAX
                    fetch('index.php?get_user=' + userId)
                        .then(response => response.json())
                        .then(user => {
                            document.getElementById('edit_email').value = user.email;
                            document.getElementById('edit_fullname').value = user.fullname;
                            document.getElementById('edit_designation').value = user.designation;
                            document.getElementById('edit_active').checked = user.active == 1;

                            // Show the modal
                            const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
                            editModal.show();
                        })
                        .catch(error => {
                            console.error('Error fetching user data:', error);
                        });
                });
            });

            // Copy API key to clipboard
            document.querySelectorAll('.copy-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const apiKey = this.getAttribute('data-api-key');

                    // Create a temporary input element
                    const tempInput = document.createElement('input');
                    tempInput.value = apiKey;
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand('copy');
                    document.body.removeChild(tempInput);

                    // Change icon to checkmark temporarily
                    const originalIcon = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check"></i>';

                    // Update tooltip text
                    const tooltip = bootstrap.Tooltip.getInstance(this) ||
                        new bootstrap.Tooltip(this);
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

            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Sort table function
            function sortTable(column) {
                const url = new URL(window.location.href);
                const currentSort = url.searchParams.get('sort');
                const currentOrder = url.searchParams.get('order');

                let newOrder = 'ASC';
                if (currentSort === column && currentOrder === 'ASC') {
                    newOrder = 'DESC';
                }

                url.searchParams.set('sort', column);
                url.searchParams.set('order', newOrder);
                window.location.href = url.toString();
            }
        </script>


    </body>

    </html>
<?php endif; ?>
<?php ob_end_flush(); ?>