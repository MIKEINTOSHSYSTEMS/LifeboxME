<?php
// index.php - Lifebox API Testing Dashboard
// This file should be placed in the same directory as courses.php, users.php, forms.php, assessments.php, and .env file
// Increase execution time for large datasets
set_time_limit(300); // 5 minutes

// Handle direct API calls from the frontend
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    handleApiRequest();
    exit;
}

// Function to handle API requests from the frontend
function handleApiRequest()
{
    $action = $_POST['action'] ?? '';
    $params = $_POST['params'] ?? [];

    // Your fix: If params is a JSON string, decode it
    if (is_string($params)) {
        $decodedParams = json_decode($params, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            $params = $decodedParams;
        } else {
            $params = [];
        }
    }

    // Ensure params is always an array
    if (!is_array($params)) {
        $params = [];
    }

    // FIX 1: Handle boolean parameters properly
    // Convert false to 0 and true to 1 for PHP query string
    foreach ($params as $key => $value) {
        if ($value === false) {
            $params[$key] = 0;
        } elseif ($value === true) {
            $params[$key] = 1;
        }
    }

    // FIX 2: For users search, add limit to prevent timeout
    if ($action === 'getAllUsers' && !isset($params['limit']) && !isset($params['max_pages'])) {
        // Default limit for user searches to prevent timeout
        $params['limit'] = 50;
    }

    // Build query string from parameters
    $queryParams = http_build_query($params);
    $queryParams = preg_replace('/%5B\d+%5D/', '%5B%5D', $queryParams);

    // Determine which endpoint to call
    $endpointFile = '';
    switch ($action) {
        // Courses endpoints
        case 'getAllCourses':
        case 'getCourse':
        case 'getCourseAnalytics':
        case 'getCourseUsers':
        case 'getCourseGrades':
        case 'getUnitAnalytics':
            $endpointFile = 'courses.php';
            break;

        // Users endpoints
        case 'getAllUsers':
        case 'getUser':
        case 'getUserCourses':
        case 'getUserProgress':
        case 'getUserCourseProgress':
            $endpointFile = 'users.php';
            break;

        // Forms endpoints
        case 'getFormResponses':
            $endpointFile = 'forms.php';
            break;

        // Assessments endpoints
        case 'getAssessmentResponses':
            $endpointFile = 'assessments.php';
            break;

        default:
            echo json_encode([
                'success' => false,
                'error' => 'Unknown action: ' . $action,
                'timestamp' => date('Y-m-d H:i:s')
            ]);
            return;
    }

    // Check if endpoint file exists
    if (!file_exists($endpointFile)) {
        echo json_encode([
            'success' => false,
            'error' => "Endpoint file not found: $endpointFile",
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        return;
    }

    // Build the URL
    $baseUrl = getBaseUrl();
    $url = $baseUrl . $endpointFile . '?' . $queryParams;

    // Make the request with longer timeout for searches
    $timeout = 300; // 45 seconds for user searches
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
        ]
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        echo json_encode([
            'success' => false,
            'error' => 'cURL Error: ' . $error,
            'url' => $url,
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        return;
    }

    // Try to decode the response
    $decoded = json_decode($response, true);

    // Handle non-JSON responses (HTML errors from PHP)
    if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
        // It's likely an HTML error page
        $errorMessage = 'API returned non-JSON response';

        // Try to extract error from HTML
        if (strpos($response, '<b>') !== false) {
            // Extract PHP error message
            preg_match('/<b>(.*?)<\/b>/', $response, $matches);
            if (isset($matches[1])) {
                $errorMessage .= ': ' . htmlspecialchars($matches[1]);
            }
        }

        echo json_encode([
            'success' => false,
            'error' => $errorMessage,
            'http_status' => $httpCode,
            'raw_response_preview' => substr(strip_tags($response), 0, 200),
            'request_url' => $url,
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        return;
    }

    // Add metadata to response
    $decoded['request_url'] = $url;
    $decoded['http_status'] = $httpCode;
    $decoded['timestamp'] = date('Y-m-d H:i:s');

    // Output the response
    header('Content-Type: application/json');
    echo json_encode($decoded, JSON_PRETTY_PRINT);
}

// Helper function to get base URL
function getBaseUrl()
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $path = dirname($_SERVER['SCRIPT_NAME']);
    return $protocol . $host . rtrim($path, '/') . '/';
}

// Check if it's a POST request - if so, handle API and exit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System | Learning Network - API Tester Dashboard</title>
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--  <link rel="stylesheet" href="/assets/style/styles.css">-->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>


    <div class="app-container">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-chart-network"></i>
                        <img src="/assets/img/lblogo-white.svg"></img>
                    </div>
                    <div class="logo-text">
                        <h1>Learning Network API</h1>
                        <span>Testing Dashboard</span>
                    </div>
                </div>
            </div>

            <div class="sidebar-nav">
                <div class="nav-title">Navigation</div>
                <a href="#dashboard" class="nav-item active" data-section="dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#courses" class="nav-item" data-section="courses">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Courses API</span>
                </a>
                <a href="#users" class="nav-item" data-section="users">
                    <i class="fas fa-users"></i>
                    <span>Users API</span>
                </a>
                <a href="#forms" class="nav-item" data-section="forms">
                    <i class="fas fa-file-alt"></i>
                    <span>Forms API</span>
                </a>
                <a href="#assessments" class="nav-item" data-section="assessments">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Assessments API</span>
                </a>

                <div class="nav-title" style="margin-top: 20px;">Tools</div>
                <a href="#history" class="nav-item" data-section="history">
                    <i class="fas fa-history"></i>
                    <span>Request History</span>
                </a>
                <a href="#settings" class="nav-item" data-section="settings">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </div>

            <div class="sidebar-footer">
                <div class="env-status" id="env-status">
                    <i class="fas fa-check-circle"></i>
                    <span>Environment: Loaded</span>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="main-header">
                <div class="header-title">
                    <h2 id="page-title">API Testing Dashboard</h2>
                    <p id="page-description">Interactive interface to test all Lifebox API endpoints</p>
                </div>
                <div class="header-actions">
                    <!-- Mobile Menu Toggle Button -->
                    <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="theme-toggle">
                        <input type="checkbox" id="theme-toggle">
                        <label for="theme-toggle" class="theme-toggle-slider"></label>
                    </div>

                    <button class="btn btn-primary" onclick="testAllEndpoints()">
                        <i class="fas fa-bolt"></i> Test All
                    </button>
                </div>
            </div>

            <!-- Dashboard Section -->
            <div id="dashboard" class="content-section active">
                <div class="dashboard-overview">
                    <div class="stat-card">
                        <div class="stat-icon courses">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="stat-info">
                            <h3 id="courses-count">0</h3>
                            <p>Courses Available</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon users">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3 id="users-count">0</h3>
                            <p>Active Users</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon forms">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-info">
                            <h3 id="forms-count">0</h3>
                            <p>Forms Processed</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon assessments">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <div class="stat-info">
                            <h3 id="assessments-count">0</h3>
                            <p>Assessments Taken</p>
                        </div>
                    </div>
                </div>

                <div class="quick-actions">
                    <button class="quick-action-btn" onclick="showSection('courses')">
                        <i class="fas fa-graduation-cap"></i> Test Courses API
                    </button>
                    <button class="quick-action-btn" onclick="showSection('users')">
                        <i class="fas fa-users"></i> Test Users API
                    </button>
                    <button class="quick-action-btn" onclick="showSection('forms')">
                        <i class="fas fa-file-alt"></i> Test Forms API
                    </button>
                    <button class="quick-action-btn" onclick="showSection('assessments')">
                        <i class="fas fa-clipboard-check"></i> Test Assessments API
                    </button>
                </div>

                <div class="endpoint-card">
                    <div class="card-header">
                        <h3>API Configuration Status</h3>
                        <p>Current environment configuration and connection status</p>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Base URL</label>
                                <input type="text" class="form-control" id="config-base-url" readonly>
                            </div>
                            <div class="form-group">
                                <label>API Version</label>
                                <input type="text" class="form-control" value="v2" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>API Endpoints</label>
                            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 10px;">
                                <div style="background: var(--primary-light); padding: 10px; border-radius: var(--radius-sm);">
                                    <div style="font-weight: 600; color: var(--primary);">courses.php</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">Courses API</div>
                                </div>
                                <div style="background: var(--primary-light); padding: 10px; border-radius: var(--radius-sm);">
                                    <div style="font-weight: 600; color: var(--primary);">users.php</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">Users API</div>
                                </div>
                                <div style="background: var(--primary-light); padding: 10px; border-radius: var(--radius-sm);">
                                    <div style="font-weight: 600; color: var(--primary);">forms.php</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">Forms API</div>
                                </div>
                                <div style="background: var(--primary-light); padding: 10px; border-radius: var(--radius-sm);">
                                    <div style="font-weight: 600; color: var(--primary);">assessments.php</div>
                                    <div style="font-size: 12px; color: var(--text-secondary);">Assessments API</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button class="btn btn-success" onclick="checkAllEndpoints()">
                                <i class="fas fa-plug"></i> Test Connection
                            </button>
                            <button class="btn btn-secondary" onclick="loadSampleData()">
                                <i class="fas fa-download"></i> Load Sample Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Section -->
            <div id="courses" class="content-section">
                <div class="quick-actions">
                    <button class="quick-action-btn" onclick="fillCoursesExample('getAllCourses')">
                        <i class="fas fa-list"></i> Get All Courses
                    </button>
                    <button class="quick-action-btn" onclick="fillCoursesExample('getFreeCourses')">
                        <i class="fas fa-tag"></i> Get Free Courses
                    </button>
                    <button class="quick-action-btn" onclick="fillCoursesExample('getCourseAnalytics')">
                        <i class="fas fa-chart-bar"></i> Test Analytics
                    </button>
                    <button class="quick-action-btn" onclick="fillCoursesExample('getCourseUsers')">
                        <i class="fas fa-users"></i> Get Course Users
                    </button>
                </div>

                <div class="endpoint-grid">
                    <!-- Get All Courses -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get All Courses</h3>
                            <p>Returns all courses with optional filtering and pagination</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Access Filter</label>
                                <select class="form-control" id="courses-access">
                                    <option value="">All access types</option>
                                    <option value="free">Free</option>
                                    <option value="paid">Paid</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Categories (comma-separated)</label>
                                <input type="text" class="form-control" id="courses-categories" placeholder="Anaesthesia safety, COVID-19">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="courses-single-page"> Single Page Only
                                    </label>
                                    <input type="number" class="form-control" id="courses-page" value="1" min="1" placeholder="Page">
                                </div>
                                <div class="form-group">
                                    <label>Max Pages</label>
                                    <input type="number" class="form-control" id="courses-max-pages" placeholder="All pages">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Result Limit</label>
                                <input type="number" class="form-control" id="courses-limit" placeholder="No limit">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testCoursesEndpoint('getAllCourses')">
                                    <i class="fas fa-play"></i> Test Endpoint
                                </button>
                                <button class="btn btn-secondary" onclick="resetCoursesForm()">
                                    <i class="fas fa-redo"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get Single Course -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get Single Course</h3>
                            <p>Get detailed information about a specific course</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Course ID</label>
                                <input type="text" class="form-control" id="course-id" value="oxygen-transport" placeholder="Enter course ID">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testCoursesEndpoint('getCourse')">
                                    <i class="fas fa-search"></i> Get Course
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get Course Analytics -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get Course Analytics</h3>
                            <p>Get analytics for a specific course</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Course ID</label>
                                <input type="text" class="form-control" id="course-analytics-id" value="oxygen-transport">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testCoursesEndpoint('getCourseAnalytics')">
                                    <i class="fas fa-chart-bar"></i> Get Analytics
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get Course Users -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get Course Users</h3>
                            <p>Get users enrolled in a specific course</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Course ID</label>
                                <input type="text" class="form-control" id="course-users-id" value="oxygen-transport">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="course-users-single-page"> Single Page
                                    </label>
                                    <input type="number" class="form-control" id="course-users-page" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Max Pages</label>
                                    <input type="number" class="form-control" id="course-users-max-pages" placeholder="All pages">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testCoursesEndpoint('getCourseUsers')">
                                    <i class="fas fa-users"></i> Get Users
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get Learning Activity Analytics -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Learning Activity Analytics</h3>
                            <p>Get analytics for a specific learning activity/unit</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Course ID</label>
                                <input type="text" class="form-control" id="unit-course-id" value="oxygen-transport">
                            </div>
                            <div class="form-group">
                                <label>Unit/Learning Activity ID</label>
                                <input type="text" class="form-control" id="unit-id" value="5f05ffd08d353f09493a1a91" placeholder="Unit ID">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testCoursesEndpoint('getUnitAnalytics')">
                                    <i class="fas fa-chart-line"></i> Get Unit Analytics
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Section -->
            <div id="users" class="content-section">
                <div class="quick-actions">
                    <button class="quick-action-btn" onclick="fillUsersExample('getAllUsers')">
                        <i class="fas fa-users"></i> Get All Users
                    </button>
                    <button class="quick-action-btn" onclick="fillUsersExample('getSingleUser')">
                        <i class="fas fa-user"></i> Get Single User
                    </button>
                    <button class="quick-action-btn" onclick="fillUsersExample('getUserCourses')">
                        <i class="fas fa-book-open"></i> Get User Courses
                    </button>
                    <button class="quick-action-btn" onclick="fillUsersExample('getUserProgress')">
                        <i class="fas fa-tasks"></i> Get User Progress
                    </button>
                </div>

                <div class="endpoint-grid">
                    <!-- Get All Users -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get All Users</h3>
                            <p>Returns all users with optional filtering</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Email Contains</label>
                                <input type="text" class="form-control" id="users-email" placeholder="gmail.com">
                            </div>
                            <div class="form-group">
                                <label>Name Contains</label>
                                <input type="text" class="form-control" id="users-name" placeholder="John">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="users-single-page"> Single Page
                                    </label>
                                    <input type="number" class="form-control" id="users-page" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Max Pages</label>
                                    <input type="number" class="form-control" id="users-max-pages" placeholder="All pages">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Result Limit</label>
                                <input type="number" class="form-control" id="users-limit" placeholder="No limit">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testUsersEndpoint('getAllUsers')">
                                    <i class="fas fa-play"></i> Test Endpoint
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get Single User -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get Single User</h3>
                            <p>Get detailed information about a specific user</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>User ID or Email</label>
                                <input type="text" class="form-control" id="user-id" value="6942675c002c836fb30d1c9d" placeholder="User ID or email">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testUsersEndpoint('getUser')">
                                    <i class="fas fa-user"></i> Get User
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get User Courses -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get User Courses</h3>
                            <p>Get courses a user is enrolled in</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>User ID or Email</label>
                                <input type="text" class="form-control" id="user-courses-id" value="6942675c002c836fb30d1c9d">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="user-courses-single-page"> Single Page
                                    </label>
                                    <input type="number" class="form-control" id="user-courses-page" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Max Pages</label>
                                    <input type="number" class="form-control" id="user-courses-max-pages" placeholder="All pages">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testUsersEndpoint('getUserCourses')">
                                    <i class="fas fa-book-open"></i> Get Courses
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Get User Progress -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get User Progress</h3>
                            <p>Get progress for all user courses</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>User ID or Email</label>
                                <input type="text" class="form-control" id="user-progress-id" value="6942675c002c836fb30d1c9d">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="user-progress-single-page"> Single Page
                                    </label>
                                    <input type="number" class="form-control" id="user-progress-page" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Filter by Min Progress</label>
                                    <input type="number" class="form-control" id="user-progress-min" placeholder="0" min="0" max="100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Filter by Status</label>
                                <select class="form-control" id="user-progress-status">
                                    <option value="">All statuses</option>
                                    <option value="completed">Completed</option>
                                    <option value="not_started">Not Started</option>
                                    <option value="in_progress">In Progress</option>
                                </select>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testUsersEndpoint('getUserProgress')">
                                    <i class="fas fa-tasks"></i> Get Progress
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Forms Section -->
            <div id="forms" class="content-section">
                <div class="quick-actions">
                    <button class="quick-action-btn" onclick="fillFormsExample('getResponses')">
                        <i class="fas fa-file-alt"></i> Get Form Responses
                    </button>
                    <button class="quick-action-btn" onclick="showModal('forms-help')">
                        <i class="fas fa-question-circle"></i> How to Get Form ID
                    </button>
                </div>

                <div class="endpoint-grid">
                    <!-- Get Form Responses -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get Form Responses</h3>
                            <p>Get all responses submitted for a form</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Form ID</label>
                                <input type="text" class="form-control" id="form-id" placeholder="Enter form ID">
                                <small style="color: var(--text-secondary); margin-top: 5px; display: block;">
                                    <i class="fas fa-info-circle"></i> You can find Form ID in the Lifebox admin panel or URL
                                </small>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="forms-single-page"> Single Page
                                    </label>
                                    <input type="number" class="form-control" id="forms-page" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Items Per Page</label>
                                    <input type="number" class="form-control" id="forms-items-per-page" min="1" max="200" value="20">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Filter by User ID (optional)</label>
                                <input type="text" class="form-control" id="forms-user-id" placeholder="User ID">
                            </div>
                            <div class="form-group">
                                <label>Filter by Email (optional)</label>
                                <input type="text" class="form-control" id="forms-email" placeholder="Email contains">
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testFormsEndpoint('getFormResponses')">
                                    <i class="fas fa-play"></i> Get Responses
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assessments Section -->
            <div id="assessments" class="content-section">
                <div class="quick-actions">
                    <button class="quick-action-btn" onclick="fillAssessmentsExample('getResponses')">
                        <i class="fas fa-clipboard-check"></i> Get Assessment Responses
                    </button>
                </div>

                <div class="endpoint-grid">
                    <!-- Get Assessment Responses -->
                    <div class="endpoint-card">
                        <div class="card-header">
                            <span class="method-badge get">GET</span>
                            <h3>Get Assessment Responses</h3>
                            <p>Get all responses submitted for an assessment</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Assessment ID</label>
                                <input type="text" class="form-control" id="assessment-id" placeholder="Enter assessment ID">
                                <small style="color: var(--text-secondary); margin-top: 5px; display: block;">
                                    <i class="fas fa-info-circle"></i> You can find Assessment ID in the Lifebox admin panel
                                </small>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" id="assessments-single-page"> Single Page
                                    </label>
                                    <input type="number" class="form-control" id="assessments-page" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Items Per Page</label>
                                    <input type="number" class="form-control" id="assessments-items-per-page" min="1" max="200" value="20">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Filter by Users (comma-separated IDs)</label>
                                <input type="text" class="form-control" id="assessments-users" placeholder="user1,user2,user3">
                            </div>
                            <div class="form-group">
                                <label>Filter by Passing Status</label>
                                <select class="form-control" id="assessments-passed">
                                    <option value="">All</option>
                                    <option value="true">Passed only</option>
                                    <option value="false">Failed only</option>
                                </select>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" onclick="testAssessmentsEndpoint('getAssessmentResponses')">
                                    <i class="fas fa-play"></i> Get Responses
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Response Section -->
            <div class="response-section">
                <div class="response-header">
                    <div class="response-title">
                        <i class="fas fa-server"></i> API Response
                        <span id="response-status" class="status-badge">--</span>
                    </div>
                    <div class="response-actions">
                        <button class="btn btn-icon" onclick="copyResponse()" title="Copy response">
                            <i class="fas fa-copy"></i>
                        </button>
                        <button class="btn btn-icon" onclick="clearResponse()" title="Clear response">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button class="btn btn-icon" onclick="toggleResponseFullscreen()" title="Toggle fullscreen">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <div class="response-body">
                    <div class="response-url" id="response-url">No request made yet</div>
                    <div class="response-container">
                        <div id="loading" class="loading" style="display: none;">
                            <i class="fas fa-spinner fa-spin"></i>
                            <p>Making API request...</p>
                        </div>
                        <pre id="response-json" class="response-json"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">Operation completed successfully</span>
    </div>

    <!-- Modals -->
    <div class="modal" id="forms-help-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>How to Find Form ID</h3>
                <button class="btn btn-icon" onclick="hideModal('forms-help-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>To get the Form ID:</p>
                <ol>
                    <li>Log in to your Lifebox admin panel</li>
                    <li>Navigate to the Forms section</li>
                    <li>Click on the form you want to test</li>
                    <li>Look at the URL in your browser</li>
                    <li>The Form ID is the alphanumeric string after "/forms/"</li>
                </ol>
                <p><strong>Example URL:</strong> https://admin.lifeboxlearningnetwork.com/forms/<strong>form_abc123</strong>/responses</p>
                <p>In this case, the Form ID would be: <code>form_abc123</code></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="hideModal('forms-help-modal')">
                    Got it!
                </button>
            </div>
        </div>
    </div>

    <!-- Updated Footer Section -->
    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="/api/" target="_blank" class="footer-link">
                    <i class="fas fa-external-link-alt"></i> Go To Main APIs List
                </a>
                <span class="footer-separator">|</span>
                <a href="#" class="footer-link" onclick="showSection('dashboard')">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <span class="footer-separator">|</span>
                <a href="#" class="footer-link" onclick="showSection('settings')">
                    <i class="fas fa-cog"></i> Settings
                </a>
            </div>
            <div class="footer-text">
                All Rights Reserved © <span id="current-year">2026</span> Lifebox M&E System. | LBLN - API Gateway V2.0 |
                Designed & Developed by
                <a href="https://merqconsultancy.org" target="_blank" class="footer-highlight">MERQ Consultancy</a>.
            </div>
            <div class="footer-tech">
                <span class="tech-badge">
                    <i class="fas fa-code"></i> PHP 8.1+
                </span>
                <span class="tech-badge">
                    <i class="fas fa-database"></i> MongoDB
                </span>
                <span class="tech-badge">
                    <i class="fab fa-js-square"></i> JavaScript ES6
                </span>
                <span class="tech-badge">
                    <i class="fas fa-mobile-alt"></i> Responsive
                </span>
            </div>
        </div>
    </footer>

</body>

</html>