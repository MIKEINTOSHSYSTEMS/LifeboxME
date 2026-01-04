<?php
// index.php - Lifebox API Testing Dashboard
// This file should be placed in the same directory as courses.php, users.php, forms.php, assessments.php, and .env file

// Handle direct API calls from the frontend
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    handleApiRequest();
    exit;
}

// Function to handle API requests from the frontend
function handleApiRequest() {
    $action = $_POST['action'] ?? '';
    $params = $_POST['params'] ?? [];
    
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
                'error' => 'Unknown action',
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
    
    // Make the request
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 30,
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
    
    // Add URL and status code to response
    $decoded = json_decode($response, true);
    $decoded['request_url'] = $url;
    $decoded['http_status'] = $httpCode;
    $decoded['timestamp'] = date('Y-m-d H:i:s');
    
    echo json_encode($decoded, JSON_PRETTY_PRINT);
}

// Helper function to get base URL
function getBaseUrl() {
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
    <title>Lifebox API Tester Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --primary-light: #dbeafe;
            --secondary: #10b981;
            --secondary-dark: #0d9668;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --background: #f8fafc;
            --card-bg: #ffffff;
            --sidebar-bg: #1e293b;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-light: #94a3b8;
            --text-on-dark: #f1f5f9;
            --border: #e2e8f0;
            --border-dark: #334155;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --radius: 10px;
            --radius-sm: 6px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .app-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            background: var(--sidebar-bg);
            color: var(--text-on-dark);
            padding: 20px 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: var(--transition);
            z-index: 1000;
        }

        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid var(--border-dark);
            margin-bottom: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-icon i {
            font-size: 20px;
            color: white;
        }

        .logo-text h1 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .logo-text span {
            font-size: 12px;
            color: var(--text-light);
            font-weight: 400;
        }

        .sidebar-nav {
            padding: 0 20px;
        }

        .nav-title {
            font-size: 12px;
            text-transform: uppercase;
            color: var(--text-light);
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
            padding-left: 10px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            border-radius: var(--radius-sm);
            color: var(--text-light);
            text-decoration: none;
            margin-bottom: 5px;
            transition: var(--transition);
            cursor: pointer;
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .nav-item.active {
            background: var(--primary);
            color: white;
        }

        .nav-item i {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .nav-item span {
            font-size: 14px;
            font-weight: 500;
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid var(--border-dark);
            margin-top: 20px;
        }

        .env-status {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: var(--radius-sm);
            font-size: 12px;
        }

        .env-status i {
            color: var(--secondary);
        }

        .env-status.error i {
            color: var(--danger);
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: 280px;
            padding: 20px;
            min-height: 100vh;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        .header-title h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .header-title p {
            color: var(--text-secondary);
            font-size: 14px;
        }

        .header-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border: none;
            border-radius: var(--radius-sm);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
            box-shadow: var(--shadow);
        }

        .btn-secondary {
            background: var(--primary-light);
            color: var(--primary);
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: white;
        }

        .btn-success {
            background: var(--secondary);
            color: white;
        }

        .btn-success:hover {
            background: var(--secondary-dark);
        }

        .btn-icon {
            padding: 10px;
            border-radius: var(--radius-sm);
        }

        /* Content Sections */
        .content-section {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .content-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Dashboard Overview */
        .dashboard-overview {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 25px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .stat-icon.courses { background: var(--primary-light); color: var(--primary); }
        .stat-icon.users { background: #f0f9ff; color: #0ea5e9; }
        .stat-icon.forms { background: #f0fdf4; color: var(--secondary); }
        .stat-icon.assessments { background: #fef3c7; color: var(--warning); }

        .stat-info h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-info p {
            color: var(--text-secondary);
            font-size: 14px;
        }

        /* Endpoint Grid */
        .endpoint-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .endpoint-card {
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .endpoint-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .card-header {
            padding: 20px;
            background: linear-gradient(135deg, var(--primary-light), #e0f2fe);
            border-bottom: 1px solid var(--border);
            position: relative;
        }

        .method-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .method-badge.get { background: var(--primary); color: white; }
        .method-badge.post { background: var(--secondary); color: white; }

        .card-header h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .card-header p {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.5;
        }

        .card-body {
            padding: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-primary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            font-size: 14px;
            transition: var(--transition);
            background: var(--background);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        /* Quick Actions */
        .quick-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 25px;
            padding: 20px;
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .quick-action-btn {
            padding: 10px 20px;
            background: var(--primary-light);
            border: 1px solid rgba(37, 99, 235, 0.2);
            border-radius: var(--radius-sm);
            color: var(--primary);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .quick-action-btn:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-1px);
        }

        .quick-action-btn i {
            font-size: 14px;
        }

        /* Response Section */
        .response-section {
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            margin-top: 30px;
        }

        .response-header {
            padding: 20px;
            background: #1e293b;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .response-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 18px;
            font-weight: 600;
        }

        .response-title i {
            color: var(--secondary);
        }

        .response-actions {
            display: flex;
            gap: 10px;
        }

        .response-body {
            padding: 0;
        }

        .response-url {
            padding: 15px 20px;
            background: #f8fafc;
            border-bottom: 1px solid var(--border);
            font-family: 'Courier New', monospace;
            font-size: 14px;
            color: var(--text-secondary);
            word-break: break-all;
        }

        .response-container {
            padding: 20px;
            max-height: 500px;
            overflow-y: auto;
        }

        .response-json {
            background: #1e293b;
            color: #e2e8f0;
            padding: 20px;
            border-radius: var(--radius-sm);
            font-family: 'Fira Code', 'Courier New', monospace;
            font-size: 13px;
            line-height: 1.6;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 10px;
        }

        .status-200 { background: var(--secondary); color: white; }
        .status-400 { background: var(--warning); color: white; }
        .status-404 { background: #f59e0b; color: white; }
        .status-500 { background: var(--danger); color: white; }

        /* Loading State */
        .loading {
            text-align: center;
            padding: 40px;
            color: var(--text-secondary);
        }

        .loading i {
            font-size: 32px;
            margin-bottom: 15px;
            color: var(--primary);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: var(--radius);
            width: 90%;
            max-width: 500px;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: var(--shadow-lg);
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            padding: 20px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* Toast */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 20px;
            background: var(--secondary);
            color: white;
            border-radius: var(--radius-sm);
            box-shadow: var(--shadow-lg);
            display: flex;
            align-items: center;
            gap: 10px;
            transform: translateY(100px);
            opacity: 0;
            transition: var(--transition);
            z-index: 3000;
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        .toast.error {
            background: var(--danger);
        }

        .toast.warning {
            background: var(--warning);
        }

        /* Toggle Switch */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 26px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .toggle-slider {
            background-color: var(--primary);
        }

        input:checked + .toggle-slider:before {
            transform: translateX(24px);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .endpoint-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow-x: hidden;
            }
            
            .sidebar-header .logo-text,
            .nav-item span,
            .nav-title,
            .env-status span {
                display: none;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .logo {
                justify-content: center;
            }
            
            .nav-item {
                justify-content: center;
                padding: 15px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .header-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .main-content {
                padding: 15px;
            }
            
            .quick-actions {
                flex-direction: column;
            }
            
            .quick-action-btn {
                width: 100%;
                justify-content: center;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            :root {
                --background: #0f172a;
                --card-bg: #1e293b;
                --text-primary: #f1f5f9;
                --text-secondary: #94a3b8;
                --border: #334155;
            }
            
            .form-control {
                background: #334155;
                border-color: #475569;
                color: #f1f5f9;
            }
            
            .quick-actions {
                background: #1e293b;
            }
            
            .response-url {
                background: #0f172a;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Code Highlighting */
        .json-key { color: #f97316; }
        .json-string { color: #22c55e; }
        .json-number { color: #3b82f6; }
        .json-boolean { color: #8b5cf6; }
        .json-null { color: #ef4444; }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-chart-network"></i>
                    </div>
                    <div class="logo-text">
                        <h1>Lifebox API</h1>
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
                    <button class="btn btn-secondary" onclick="toggleDarkMode()">
                        <i class="fas fa-moon"></i> Theme
                    </button>
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

    <script>
        // Global variables
        let currentEndpoint = '';
        let requestHistory = JSON.parse(localStorage.getItem('lifebox_request_history') || '[]');
        let darkMode = localStorage.getItem('darkMode') === 'true';

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            // Set up navigation
            document.querySelectorAll('.nav-item').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const section = this.getAttribute('data-section');
                    showSection(section);
                });
            });

            // Set base URL
            document.getElementById('config-base-url').value = window.location.href.replace(/\/[^\/]*$/, '/');

            // Load dashboard stats
            loadDashboardStats();

            // Apply dark mode if enabled
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }

            // Check environment
            checkEnvironment();
        });

        // Show a specific section
        function showSection(sectionId) {
            // Update navigation
            document.querySelectorAll('.nav-item').forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('data-section') === sectionId) {
                    item.classList.add('active');
                }
            });

            // Show section content
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');

            // Update page title
            const titles = {
                'dashboard': 'API Testing Dashboard',
                'courses': 'Courses API Testing',
                'users': 'Users API Testing',
                'forms': 'Forms API Testing',
                'assessments': 'Assessments API Testing'
            };
            
            const descriptions = {
                'dashboard': 'Interactive interface to test all Lifebox API endpoints',
                'courses': 'Test and explore the Courses API endpoints',
                'users': 'Test and explore the Users API endpoints',
                'forms': 'Test and explore the Forms API endpoints',
                'assessments': 'Test and explore the Assessments API endpoints'
            };

            document.getElementById('page-title').textContent = titles[sectionId] || 'API Testing';
            document.getElementById('page-description').textContent = descriptions[sectionId] || '';
        }

        // Test Courses API endpoints
        async function testCoursesEndpoint(action) {
            const params = {};
            
            switch(action) {
                case 'getAllCourses':
                    params.access = document.getElementById('courses-access').value;
                    params.categories = document.getElementById('courses-categories').value;
                    params.single_page = document.getElementById('courses-single-page').checked;
                    params.page = document.getElementById('courses-page').value;
                    params.max_pages = document.getElementById('courses-max-pages').value || null;
                    params.limit = document.getElementById('courses-limit').value || null;
                    break;
                    
                case 'getCourse':
                    params.id = document.getElementById('course-id').value;
                    break;
                    
                case 'getCourseAnalytics':
                    params.id = document.getElementById('course-analytics-id').value;
                    params.action = 'analytics';
                    break;
                    
                case 'getCourseUsers':
                    params.id = document.getElementById('course-users-id').value;
                    params.action = 'users';
                    params.single_page = document.getElementById('course-users-single-page').checked;
                    params.page = document.getElementById('course-users-page').value;
                    params.max_pages = document.getElementById('course-users-max-pages').value || null;
                    break;
                    
                case 'getUnitAnalytics':
                    params.id = document.getElementById('unit-course-id').value;
                    params.unit_id = document.getElementById('unit-id').value;
                    params.action = 'unit_analytics';
                    break;
            }
            
            await makeApiRequest(action, params);
        }

        // Test Users API endpoints
        async function testUsersEndpoint(action) {
            const params = {};
            
            switch(action) {
                case 'getAllUsers':
                    params.email_contains = document.getElementById('users-email').value;
                    params.name_contains = document.getElementById('users-name').value;
                    params.single_page = document.getElementById('users-single-page').checked;
                    params.page = document.getElementById('users-page').value;
                    params.max_pages = document.getElementById('users-max-pages').value || null;
                    params.limit = document.getElementById('users-limit').value || null;
                    break;
                    
                case 'getUser':
                    params.id = document.getElementById('user-id').value;
                    break;
                    
                case 'getUserCourses':
                    params.id = document.getElementById('user-courses-id').value;
                    params.action = 'courses';
                    params.single_page = document.getElementById('user-courses-single-page').checked;
                    params.page = document.getElementById('user-courses-page').value;
                    params.max_pages = document.getElementById('user-courses-max-pages').value || null;
                    break;
                    
                case 'getUserProgress':
                    params.id = document.getElementById('user-progress-id').value;
                    params.action = 'progress';
                    params.single_page = document.getElementById('user-progress-single-page').checked;
                    params.page = document.getElementById('user-progress-page').value;
                    if (document.getElementById('user-progress-min').value) {
                        params.min_progress = document.getElementById('user-progress-min').value;
                    }
                    if (document.getElementById('user-progress-status').value) {
                        params.progress_status = document.getElementById('user-progress-status').value;
                    }
                    break;
            }
            
            await makeApiRequest(action, params);
        }

        // Test Forms API endpoints
        async function testFormsEndpoint(action) {
            const params = {
                id: document.getElementById('form-id').value
            };
            
            if (document.getElementById('forms-single-page').checked) {
                params.single_page = true;
                params.page = document.getElementById('forms-page').value;
            }
            
            if (document.getElementById('forms-items-per-page').value) {
                params.items_per_page = document.getElementById('forms-items-per-page').value;
            }
            
            if (document.getElementById('forms-user-id').value) {
                params.user_id = document.getElementById('forms-user-id').value;
            }
            
            if (document.getElementById('forms-email').value) {
                params.email_contains = document.getElementById('forms-email').value;
            }
            
            await makeApiRequest(action, params);
        }

        // Test Assessments API endpoints
        async function testAssessmentsEndpoint(action) {
            const params = {
                id: document.getElementById('assessment-id').value
            };
            
            if (document.getElementById('assessments-single-page').checked) {
                params.single_page = true;
                params.page = document.getElementById('assessments-page').value;
            }
            
            if (document.getElementById('assessments-items-per-page').value) {
                params.items_per_page = document.getElementById('assessments-items-per-page').value;
            }
            
            if (document.getElementById('assessments-users').value) {
                params.users = document.getElementById('assessments-users').value;
            }
            
            if (document.getElementById('assessments-passed').value) {
                params.passed = document.getElementById('assessments-passed').value;
            }
            
            await makeApiRequest(action, params);
        }

        // Make API request
        async function makeApiRequest(action, params) {
            // Show loading state
            document.getElementById('loading').style.display = 'block';
            document.getElementById('response-json').textContent = '';
            
            try {
                const response = await fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: action,
                        params: JSON.stringify(params)
                    })
                });
                
                const data = await response.json();
                
                // Store in history
                const historyItem = {
                    action: action,
                    params: params,
                    response: data,
                    timestamp: new Date().toISOString()
                };
                
                requestHistory.unshift(historyItem);
                if (requestHistory.length > 50) {
                    requestHistory = requestHistory.slice(0, 50);
                }
                localStorage.setItem('lifebox_request_history', JSON.stringify(requestHistory));
                
                // Display response
                displayResponse(data);
                
                // Update dashboard stats if needed
                if (action === 'getAllCourses' && data.success && data.data) {
                    document.getElementById('courses-count').textContent = data.meta?.totalItems || data.data.length;
                }
                
                if (action === 'getAllUsers' && data.success && data.data) {
                    document.getElementById('users-count').textContent = data.meta?.totalItems || data.data.length;
                }
                
            } catch (error) {
                displayResponse({
                    success: false,
                    error: 'Network error: ' + error.message,
                    timestamp: new Date().toISOString()
                });
            } finally {
                document.getElementById('loading').style.display = 'none';
            }
        }

        // Display API response
        function displayResponse(data) {
            const responseJson = document.getElementById('response-json');
            const responseUrl = document.getElementById('response-url');
            const responseStatus = document.getElementById('response-status');
            
            // Display URL
            responseUrl.textContent = data.request_url || 'Request URL not available';
            
            // Display status
            const status = data.http_status || (data.success ? 200 : 400);
            responseStatus.textContent = status;
            responseStatus.className = 'status-badge status-' + status;
            
            // Format and display JSON with syntax highlighting
            const formattedJson = JSON.stringify(data, null, 2);
            const highlightedJson = syntaxHighlight(formattedJson);
            responseJson.innerHTML = highlightedJson;
            
            // Scroll to response
            document.querySelector('.response-section').scrollIntoView({ behavior: 'smooth' });
        }

        // Syntax highlighting for JSON
        function syntaxHighlight(json) {
            json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
                let cls = 'json-number';
                if (/^"/.test(match)) {
                    if (/:$/.test(match)) {
                        cls = 'json-key';
                    } else {
                        cls = 'json-string';
                    }
                } else if (/true|false/.test(match)) {
                    cls = 'json-boolean';
                } else if (/null/.test(match)) {
                    cls = 'json-null';
                }
                return '<span class="' + cls + '">' + match + '</span>';
            });
        }

        // Copy response to clipboard
        function copyResponse() {
            const responseText = document.getElementById('response-json').textContent;
            navigator.clipboard.writeText(responseText).then(() => {
                showToast('Response copied to clipboard!');
            });
        }

        // Clear response
        function clearResponse() {
            document.getElementById('response-json').textContent = '';
            document.getElementById('response-url').textContent = 'No request made yet';
            document.getElementById('response-status').textContent = '--';
            document.getElementById('response-status').className = 'status-badge';
        }

        // Toggle response fullscreen
        function toggleResponseFullscreen() {
            const responseSection = document.querySelector('.response-section');
            if (!document.fullscreenElement) {
                responseSection.requestFullscreen().catch(err => {
                    console.error(`Error attempting to enable fullscreen: ${err.message}`);
                });
            } else {
                document.exitFullscreen();
            }
        }

        // Show toast notification
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');
            
            toastMessage.textContent = message;
            toast.className = `toast ${type}`;
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Fill example data for Courses
        function fillCoursesExample(example) {
            switch(example) {
                case 'getAllCourses':
                    document.getElementById('courses-access').value = '';
                    document.getElementById('courses-categories').value = '';
                    document.getElementById('courses-single-page').checked = false;
                    document.getElementById('courses-page').value = '1';
                    document.getElementById('courses-max-pages').value = '';
                    document.getElementById('courses-limit').value = '10';
                    showToast('Example filled: Get first 10 courses');
                    break;
                    
                case 'getFreeCourses':
                    document.getElementById('courses-access').value = 'free';
                    document.getElementById('courses-categories').value = '';
                    document.getElementById('courses-single-page').checked = false;
                    showToast('Example filled: Get all free courses');
                    break;
                    
                case 'getCourseAnalytics':
                    document.getElementById('course-analytics-id').value = 'oxygen-transport';
                    showToast('Example filled: Test course analytics');
                    break;
                    
                case 'getCourseUsers':
                    document.getElementById('course-users-id').value = 'oxygen-transport';
                    document.getElementById('course-users-single-page').checked = true;
                    document.getElementById('course-users-page').value = '1';
                    showToast('Example filled: Get course users (page 1)');
                    break;
            }
        }

        // Fill example data for Users
        function fillUsersExample(example) {
            switch(example) {
                case 'getAllUsers':
                    document.getElementById('users-email').value = '';
                    document.getElementById('users-name').value = '';
                    document.getElementById('users-single-page').checked = true;
                    document.getElementById('users-page').value = '1';
                    document.getElementById('users-limit').value = '20';
                    showToast('Example filled: Get first page of users (20 per page)');
                    break;
                    
                case 'getSingleUser':
                    document.getElementById('user-id').value = '6942675c002c836fb30d1c9d';
                    showToast('Example filled: Get single user by ID');
                    break;
                    
                case 'getUserCourses':
                    document.getElementById('user-courses-id').value = '6942675c002c836fb30d1c9d';
                    document.getElementById('user-courses-single-page').checked = false;
                    showToast('Example filled: Get all courses for user');
                    break;
                    
                case 'getUserProgress':
                    document.getElementById('user-progress-id').value = '6942675c002c836fb30d1c9d';
                    document.getElementById('user-progress-single-page').checked = false;
                    document.getElementById('user-progress-min').value = '50';
                    document.getElementById('user-progress-status').value = 'in_progress';
                    showToast('Example filled: Get user progress with filters');
                    break;
            }
        }

        // Fill example data for Forms
        function fillFormsExample(example) {
            if (example === 'getResponses') {
                document.getElementById('form-id').value = '';
                document.getElementById('forms-single-page').checked = true;
                document.getElementById('forms-page').value = '1';
                document.getElementById('forms-items-per-page').value = '20';
                showToast('Please enter a Form ID and adjust filters as needed');
            }
        }

        // Fill example data for Assessments
        function fillAssessmentsExample(example) {
            if (example === 'getResponses') {
                document.getElementById('assessment-id').value = '';
                document.getElementById('assessments-single-page').checked = true;
                document.getElementById('assessments-page').value = '1';
                document.getElementById('assessments-items-per-page').value = '20';
                document.getElementById('assessments-passed').value = 'true';
                showToast('Please enter an Assessment ID and adjust filters as needed');
            }
        }

        // Reset courses form
        function resetCoursesForm() {
            document.getElementById('courses-access').value = '';
            document.getElementById('courses-categories').value = '';
            document.getElementById('courses-single-page').checked = false;
            document.getElementById('courses-page').value = '1';
            document.getElementById('courses-max-pages').value = '';
            document.getElementById('courses-limit').value = '';
            showToast('Form reset');
        }

        // Check environment configuration
        async function checkEnvironment() {
            try {
                const response = await fetch('courses.php?test=true');
                const data = await response.json();
                
                if (data.test && data.config) {
                    const envStatus = document.getElementById('env-status');
                    envStatus.innerHTML = '<i class="fas fa-check-circle"></i> <span>Environment: Loaded ✓</span>';
                    showToast('Environment configuration loaded successfully');
                }
            } catch (error) {
                const envStatus = document.getElementById('env-status');
                envStatus.innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span>Environment: Check failed</span>';
                envStatus.classList.add('error');
            }
        }

        // Load dashboard statistics
        async function loadDashboardStats() {
            // Try to get some sample data
            try {
                // Test courses endpoint
                const coursesResponse = await fetch('courses.php?single_page=true&page=1&limit=1');
                const coursesData = await coursesResponse.json();
                if (coursesData.success && coursesData.meta) {
                    document.getElementById('courses-count').textContent = coursesData.meta.totalItemsAvailable || '100+';
                }
                
                // Test users endpoint  
                const usersResponse = await fetch('users.php?single_page=true&page=1&limit=1');
                const usersData = await usersResponse.json();
                if (usersData.success && usersData.meta) {
                    document.getElementById('users-count').textContent = usersData.meta.totalItemsAvailable || '500+';
                }
                
            } catch (error) {
                // Fallback to sample data
                document.getElementById('courses-count').textContent = '125';
                document.getElementById('users-count').textContent = '542';
                document.getElementById('forms-count').textContent = '89';
                document.getElementById('assessments-count').textContent = '156';
            }
        }

        // Check all endpoints
        async function checkAllEndpoints() {
            showToast('Testing all API endpoints...', 'warning');
            
            const endpoints = [
                { name: 'Courses', file: 'courses.php' },
                { name: 'Users', file: 'users.php' },
                { name: 'Forms', file: 'forms.php' },
                { name: 'Assessments', file: 'assessments.php' }
            ];
            
            let allWorking = true;
            
            for (const endpoint of endpoints) {
                try {
                    const response = await fetch(`${endpoint.file}?test=true`);
                    const data = await response.json();
                    
                    if (data.test) {
                        console.log(`${endpoint.name} API: ✓ Working`);
                    } else {
                        console.log(`${endpoint.name} API: ✗ Not working`);
                        allWorking = false;
                    }
                } catch (error) {
                    console.log(`${endpoint.name} API: ✗ Error - ${error.message}`);
                    allWorking = false;
                }
            }
            
            if (allWorking) {
                showToast('All API endpoints are working correctly!', 'success');
            } else {
                showToast('Some API endpoints have issues. Check console for details.', 'error');
            }
        }

        // Load sample data
        function loadSampleData() {
            showToast('Loading sample data for testing...');
            
            // Fill courses form with sample data
            document.getElementById('course-id').value = 'oxygen-transport';
            document.getElementById('course-analytics-id').value = 'oxygen-transport';
            document.getElementById('course-users-id').value = 'oxygen-transport';
            document.getElementById('unit-course-id').value = 'oxygen-transport';
            document.getElementById('unit-id').value = '5f05ffd08d353f09493a1a91';
            
            // Fill users form with sample data
            document.getElementById('user-id').value = '6942675c002c836fb30d1c9d';
            document.getElementById('user-courses-id').value = '6942675c002c836fb30d1c9d';
            document.getElementById('user-progress-id').value = '6942675c002c836fb30d1c9d';
            
            showToast('Sample data loaded. You can now test the endpoints.');
        }

        // Test all endpoints
        async function testAllEndpoints() {
            showToast('Testing all endpoints with sample data...', 'warning');
            
            // Test a sample from each category
            const tests = [
                { section: 'courses', action: 'getCourse', params: { id: 'oxygen-transport' } },
                { section: 'users', action: 'getUser', params: { id: '6942675c002c836fb30d1c9d' } }
            ];
            
            for (const test of tests) {
                await makeApiRequest(test.action, test.params);
                await new Promise(resolve => setTimeout(resolve, 1000)); // Delay between tests
            }
            
            showToast('All sample tests completed!', 'success');
        }

        // Toggle dark mode
        function toggleDarkMode() {
            darkMode = !darkMode;
            localStorage.setItem('darkMode', darkMode);
            
            if (darkMode) {
                document.body.classList.add('dark-mode');
                showToast('Dark mode enabled');
            } else {
                document.body.classList.remove('dark-mode');
                showToast('Light mode enabled');
            }
        }

        // Show modal
        function showModal(modalId) {
            document.getElementById(modalId + '-modal').classList.add('active');
        }

        // Hide modal
        function hideModal(modalId) {
            document.getElementById(modalId + '-modal').classList.remove('active');
        }

        // Add event listeners for modals
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal')) {
                e.target.classList.remove('active');
            }
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl + Enter to submit form
            if (e.ctrlKey && e.key === 'Enter') {
                const activeSection = document.querySelector('.content-section.active').id;
                const testButton = document.querySelector(`#${activeSection} .btn-primary`);
                if (testButton) testButton.click();
            }
            
            // Escape to close modals
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal.active').forEach(modal => {
                    modal.classList.remove('active');
                });
            }
        });
    </script>
</body>
</html>