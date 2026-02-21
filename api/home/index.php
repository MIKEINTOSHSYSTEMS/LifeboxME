<?php
// ===============================
// index.php - Clean Full Version
// ===============================

require_once '../../res/database.php';
require_once '../../res/session_helper.php';
require_once '../../res/notifications.php';

// DEBUGS (Uncomment to see all session variables and permissions)
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;


// ===============================
// Load notifications
// ===============================
try {
    $notificationManager = new NotificationManager($pdo);
    $activeNotifications = $notificationManager->getActiveNotifications();
} catch (Exception $e) {
    $activeNotifications = [];
}

// ===============================
// Initialize variables
// ===============================
$userPermissions = [];
$userRole = 'Guest';
$functionalGroups = [];
$displayName = 'Guest';

// ===============================
// Check login (PHPRunner session)
// ===============================
if (isset($_SESSION['UserData']['username'])) {

    $username = $_SESSION['UserData']['username'];
    $displayName = $_SESSION['UserName'] ?? $username;

    try {
        // ===============================
        // Get user role
        // ===============================
        $roleStmt = $pdo->prepare("
            SELECT DISTINCT g.\"Label\" as role, g.\"Comment\"
            FROM users u
            JOIN lifeboxme_ugmembers m ON m.\"UserName\" = u.username
            JOIN lifeboxme_uggroups g ON g.\"GroupID\" = m.\"GroupID\"
            WHERE u.username = ?
            ORDER BY g.\"Label\"
        ");
        $roleStmt->execute([$username]);
        $roles = $roleStmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($roles)) {
            $primaryRole = $roles[0];
            $userRole = !empty($primaryRole['Comment']) ? $primaryRole['Comment'] : $primaryRole['role'];
            if (empty($userRole)) $userRole = 'System User';
        }

        // ===============================
        // Check if system administrator
        // ===============================
        $adminStmt = $pdo->prepare("
            SELECT COUNT(*) as is_admin
            FROM lifeboxme_ugmembers
            WHERE \"UserName\" = ? AND \"GroupID\" = -1
        ");
        $adminStmt->execute([$username]);
        $adminCheck = $adminStmt->fetch(PDO::FETCH_ASSOC);
        if ($adminCheck && $adminCheck['is_admin'] > 0) {
            $userRole = 'System Administrator';
        }

        // ===============================
        // Load user permissions
        // ===============================
        $permStmt = $pdo->prepare("
            WITH permission_data AS (
                SELECT DISTINCT
                    r.\"TableName\",
                    r.\"AccessMask\",
                    CASE 
                        WHEN r.\"TableName\" ILIKE 'public.training_%' THEN '🎓 Training Management'
                        WHEN r.\"TableName\" ILIKE 'public.device_%' THEN '📱 Device Management'
                        WHEN r.\"TableName\" ILIKE 'public.lbapt_%' THEN '📊 Annual Planning'
                        WHEN r.\"TableName\" ILIKE 'public.lbpmi_%' THEN '📈 Performance Monitoring'
                        WHEN r.\"TableName\" ILIKE 'public.lifeboxme_dhis2_%' THEN '🔄 DHIS2 Integration'
                        WHEN r.\"TableName\" IN (
                            'public.countries','public.regions','public.facilities',
                            'public.languages','public.partners','public.donors','public.programs'
                        ) THEN '🌍 Geographic & Partner Setup'
                        WHEN r.\"TableName\" IN ('public.months','public.quarters','public.years') THEN '⏱️ Time Configuration'
                        WHEN r.\"TableName\" = 'Dashboard' OR r.\"TableName\" ILIKE '%summary_view%' OR r.\"TableName\" ILIKE '%report%' THEN '📋 Dashboard & Reporting'
                        ELSE '🔧 Other Modules'
                    END AS functional_group,
                    INITCAP(REPLACE(REPLACE(r.\"TableName\", 'public.', ''),'_',' ')) AS module_name,
                    TRIM(
                        CASE WHEN POSITION('S' IN r.\"AccessMask\") > 0 THEN 'View, ' ELSE '' END ||
                        CASE WHEN POSITION('A' IN r.\"AccessMask\") > 0 THEN 'Add, ' ELSE '' END ||
                        CASE WHEN POSITION('E' IN r.\"AccessMask\") > 0 THEN 'Edit, ' ELSE '' END ||
                        CASE WHEN POSITION('D' IN r.\"AccessMask\") > 0 THEN 'Delete, ' ELSE '' END ||
                        CASE WHEN POSITION('P' IN r.\"AccessMask\") > 0 THEN 'Export/Print, ' ELSE '' END ||
                        CASE WHEN POSITION('I' IN r.\"AccessMask\") > 0 THEN 'Import, ' ELSE '' END
                    , ', ') AS permissions,
                    CASE 
                        WHEN POSITION('A' IN r.\"AccessMask\") > 0 AND POSITION('E' IN r.\"AccessMask\") > 0 AND POSITION('D' IN r.\"AccessMask\") > 0 THEN 'full_access'
                        WHEN POSITION('S' IN r.\"AccessMask\") > 0 AND POSITION('A' IN r.\"AccessMask\") = 0 THEN 'view_only'
                        WHEN POSITION('A' IN r.\"AccessMask\") > 0 THEN 'can_add'
                        WHEN POSITION('E' IN r.\"AccessMask\") > 0 THEN 'can_edit'
                        ELSE 'limited'
                    END AS access_type
                FROM users u
                JOIN lifeboxme_ugmembers m ON m.\"UserName\" = u.username
                JOIN lifeboxme_uggroups g ON g.\"GroupID\" = m.\"GroupID\"
                JOIN lifeboxme_ugrights r ON r.\"GroupID\" = g.\"GroupID\"
                WHERE u.username = ?
            )
            SELECT * FROM permission_data
            WHERE module_name NOT ILIKE '%seq%' AND module_name NOT ILIKE '%pkey%' AND module_name NOT ILIKE '%view%'
            ORDER BY functional_group, module_name
        ");
        $permStmt->execute([$username]);
        $userPermissions = $permStmt->fetchAll(PDO::FETCH_ASSOC);

        // Group permissions
        foreach ($userPermissions as $perm) {
            $group = $perm['functional_group'];
            if (!isset($functionalGroups[$group])) {
                $functionalGroups[$group] = ['modules' => [], 'permissions_summary' => []];
            }
            $functionalGroups[$group]['modules'][] = $perm;
            if (!in_array($perm['access_type'], $functionalGroups[$group]['permissions_summary'])) {
                $functionalGroups[$group]['permissions_summary'][] = $perm['access_type'];
            }
        }
    } catch (Exception $e) {
        error_log("Error fetching user permissions: " . $e->getMessage());
    }
}

// ===============================
// Helper functions
// ===============================
function getAccessTypeIcon($accessType)
{
    switch ($accessType) {
        case 'full_access':
            return 'fa-check-circle text-success';
        case 'view_only':
            return 'fa-eye text-info';
        case 'can_add':
            return 'fa-plus-circle text-primary';
        case 'can_edit':
            return 'fa-edit text-warning';
        default:
            return 'fa-lock text-secondary';
    }
}

function getActionIcon($action)
{
    $icons = ['View' => 'fa-eye', 'Add' => 'fa-plus-circle', 'Edit' => 'fa-edit', 'Delete' => 'fa-trash-alt', 'Export' => 'fa-file-export', 'Print' => 'fa-print', 'Import' => 'fa-file-import'];
    foreach ($icons as $key => $icon) {
        if (strpos($action, $key) !== false) return $icon;
    }
    return 'fa-check';
}

function getRoleDisplay($role)
{
    if ($role === 'System Administrator') return '<span class="badge bg-danger"><i class="fas fa-shield-alt me-1"></i>System Administrator</span>';
    elseif ($role === 'Guest') return '<span class="badge bg-secondary"><i class="fas fa-user me-1"></i>Guest</span>';
    else return '<span class="badge bg-info">' . htmlspecialchars($role) . '</span>';
}

// Initialize shared session with PHPRunner
//initializeSharedSession();

?>

<?php
// Helper function to get appropriate icon for notification type
function getNotificationIcon($type)
{
    switch ($type) {
        case 'info':
            return 'info-circle';
        case 'warning':
            return 'exclamation-triangle';
        case 'primary':
            return 'bullhorn';
        case 'danger':
            return 'exclamation-circle';
        case 'success':
            return 'check-circle';
        default:
            return 'info-circle';
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System</title>
    <meta name="description" content="Welcome to Lifebox M&E System Dashboard, Data Exploration and Administration System">
    <meta name="keywords"
        content="Monitoring, Evaluation, Lifebox, Surgical, Reporting, Dashboard, and, Data, Data Management, Exploration, Portal, MIKEINTOSH, Systems, System, MERQ Consultancy">
    <meta name="author" content="MERQ Consultancy">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../assets/style/styles.css">
    <link rel="stylesheet" href="../../assets/style/icons/all.css">
    <link rel="stylesheet" href="../../assets/style/icons/sharp-solid.css">
    <link rel="stylesheet" href="../../assets/style/icons/sharp-regular.css">
    <link rel="stylesheet" href="../../assets/style/icons/sharp-light.css">
    <link rel="stylesheet" href="../../assets/style/icons/duotone.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/brands.css" />
    <style>
        :root {
            --primary: #1282ad;
            --secondary: #00bcd7;
            --accent: #ff5722;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --success: #28a745;
            --warning: #ffc107;
            --info: #17a2b8;
            --transition: all 0.3s ease;
        }

        /* General styling for all spans inside .logo-text */
        .logo-text span {
            color: black;
            /* Default color */
        }

        /* Specific color for each span */
        .logo-text span:first-child {
            color: white;
            /* Color for 'Welcome' */
        }

        .logo-text span:nth-child(2) {
            color: #E3D83AFF;
            /* Color for 'To' */
        }

        .logo-text span:nth-child(3) {
            color: #ffd166;
            /* Color for 'Lifebox' */
        }

        .logo-text span:nth-child(4) {
            color: #9BE6FFFF;
            /* Color for 'M' */
        }

        .logo-text span:nth-child(5) {
            color: #DADADAFF;
            /* Color for '&' */
        }

        .logo-text span:nth-child(6) {
            color: #DEFF96FF;
            /* Color for 'E' */
        }

        .logo-text span:nth-child(7) {
            color: #ff5722;
            /* Color for 'System' */
        }

        /* Gradient background for the section title */
        .section-title {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 0.5px;
            color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .components {
            padding: 7px 0;
            background: transparent;
        }

        /* Custom tab styles */
        .nav-tabs {
            margin-bottom: 20px;
            border-bottom: 1px solid var(--primary);
        }

        .nav-link {
            color: var(--dark);
            font-weight: 600;
            transition: var(--transition);
            border: none !important;
            border-radius: 8px 8px 0 0;
            padding: 12px 20px;
            margin: 0 5px;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-link.active {
            background-color: var(--primary) !important;
            color: white !important;
        }

        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:not(.active):hover {
            color: var(--primary);
            background-color: rgba(18, 130, 173, 0.1);
        }

        .nav-link:not(.active):hover::before {
            width: 100%;
            background: var(--secondary);
        }

        .tab-content {
            padding: 30px;
            background: transparent;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: transparent;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            background: linear-gradient(135deg, #f5f7fa 0%, #C3CFE200 100%);
            min-height: 100vh;
        }

        .tabs-section,
        .tab-content,
        .tab-pane {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* FIXED STYLES */
        html,
        body {
            height: 100%;
            overflow: hidden;
            /*overflow: scroll;*/
        }

        #tabsContent {
            height: calc(100% - 60px);
            /* Account for tabs height */
        }

        .tab-pane {
            height: 100%;
        }

        #embed {
            padding: 0 !important;
        }

        .dashboard-container {
            height: 100%;
            width: 100%;
            position: relative;
        }

        .dashboard-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            overflow: hidden;
        }

        .help-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            overflow: hidden;
        }

        /* Component tabs styling */
        .component-tabs .nav-link {
            color: var(--dark);
            border-radius: 20px;
            margin: 0 5px 15px;
            padding: 8px 20px;
            transition: var(--transition);
        }

        .component-tabs .nav-link.active {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .component-tabs .nav-link:hover:not(.active) {
            background: rgba(18, 130, 173, 0.1);
        }

        /* Component items styling */
        .component-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding: 30px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            transform: translateY(0);
        }


        .component-item:last-child {
            margin-bottom: 0;
            padding-bottom: 40px;
            border-bottom: none;
        }

        .component-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .component-icon {
            flex: 0 0 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .component-text h4 {
            color: var(--primary);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .component-text p {
            color: #666;
            margin-bottom: 0;
        }

        /* Animation classes */
        .animate-fade-in {
            animation: fadeIn 0.8s ease forwards;
        }

        .animate-slide-in {
            animation: slideIn 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .nav-tabs .nav-item {
                margin-bottom: 10px;
                width: 100%;
            }

            .nav-link {
                border-radius: 8px;
                text-align: center;
            }

            .component-item {
                flex-direction: column;
                text-align: center;
            }

            .component-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .component-tabs .nav-link {
                margin-bottom: 10px;
            }

            .tab-content {
                padding: 15px;
            }
        }

        /* Loading animation for iframes */
        .iframe-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--primary);
            font-size: 2rem;
        }

        .iframe-loading::after {
            content: '';
            animation: loadingDots 1.5s infinite;
        }

        @keyframes loadingDots {
            0% {
                content: '';
            }

            25% {
                content: '.';
            }

            50% {
                content: '..';
            }

            75% {
                content: '...';
            }

            100% {
                content: '';
            }
        }

        /* Enhanced contrast for accessibility */
        .component-text h4 {
            color: #0a5a7a;
        }

        .component-text p {
            color: #444;
        }

        .section-title p {
            color: rgba(255, 255, 255, 0.9);
        }


        .component-link {
            text-decoration: none;
            color: inherit;
            display: block;
            transition: var(--transition);
        }

        .component-link:hover {
            text-decoration: none;
            color: inherit;
            transform: translateY(-2px);
        }

        .component-link:hover .component-item {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        /* Search box styling */
        .search-box {
            max-width: 600px;
            margin: 20px auto;
            position: relative;
            animation: fadeIn 1.5s ease;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .search-box input:focus {
            outline: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .search-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Tab Section -->
    <section class="tabs-section">
        <ul class="nav nav-tabs justify-content-center" id="tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="embed-tab" data-bs-toggle="tab" data-bs-target="#embed" type="button" role="tab">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" type="button" role="tab">
                    <i class="fa-solid fa-chart-line"></i> Reports
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">
                    <i class="fa-solid fa-info-circle"></i> Info
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="help-tab" data-bs-toggle="tab" data-bs-target="#help" type="button" role="tab">
                    <i class="fa-solid fa-question-circle"></i> Help
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="tabsContent">
            <!-- Embed Tab (Now first and active by default) -->
            <div class="tab-pane fade show active" id="embed" role="tabpanel">
                <div class="dashboard-container">
                    <div class="iframe-loading">Loading Dashboards</div>
                    <iframe
                        src="../meta/index.php"
                        class="dashboard-iframe"
                        allowtransparency="true"
                        allowfullscreen
                        onload="document.querySelector('.iframe-loading').style.display = 'none';">
                    </iframe>
                </div>
            </div>

            <div class="tab-pane fade show active" id="report" role="tabpanel">
                <div class="dashboard-container">
                    <div class="iframe-loading">Loading Reports</div>
                    <iframe
                        src="../meta/reports.php"
                        class="dashboard-iframe"
                        allowtransparency="true"
                        allowfullscreen
                        onload="document.querySelector('.iframe-loading').style.display = 'none';">
                    </iframe>
                </div>
            </div>

            <!-- Info Tab (Now second) -->
            <div class="tab-pane fade" id="info" role="tabpanel">

                <!-- System Components Section -->
                <section class="components" id="components">
                    <div class="container">
                        <div class="section-title animate-fade-in">
                            <h2>
                                <div class="logo-text">
                                    <span>Welcome</span><span> To</span>
                                </div>
                                <div class="lifebox-title" style="font-size: 17px; font-weight: bold;">
                                    <img src="../../assets/img/lblogo-white.svg" height="47px" alt="Lifebox Logo">
                                    <br>
                                    <div class="me-system-text">
                                        <span class="m-letter">M</span>
                                        <span class="ampersand">&amp;</span>
                                        <span class="e-letter">E</span>
                                        <span class="ampersand"> Learning</span>
                                        <span class="system-text"> System</span>
                                    </div>
                                </div>
                            </h2>
                            <!--<p class="typing-animation">Explore the comprehensive modules that make up the Lifebox M&E System.</p>-->
                            <i class="fa-duotone fa-solid fa-circle-info fa-3x"></i>
                            <p>This platform supports Lifebox programs by tracking training, devices, implementation quality, and surgical outcomes. It is designed to help teams monitor performance, identify gaps, learn from data, and take action to improve surgical safety.</p>
                            <!--<p>Explore the comprehensive modules that make up the Lifebox M&E System.</p>-->
                        </div>

                        <style>
                            /* 3D Text Animation */
                            .welcome-text-3d {
                                display: inline-block;
                                font-size: 2.5rem;
                                font-weight: 800;
                                text-transform: uppercase;
                                color: white;
                                text-shadow:
                                    0 1px 0 #ccc,
                                    0 2px 0 #c9c9c9,
                                    0 3px 0 #bbb,
                                    0 4px 0 #b9b9b9,
                                    0 5px 0 #aaa,
                                    0 6px 1px rgba(0, 0, 0, .1),
                                    0 0 5px rgba(0, 0, 0, .1),
                                    0 1px 3px rgba(0, 0, 0, .3),
                                    0 3px 5px rgba(0, 0, 0, .2),
                                    0 5px 10px rgba(0, 0, 0, .25),
                                    0 10px 10px rgba(0, 0, 0, .2),
                                    0 20px 20px rgba(0, 0, 0, .15);
                                animation: bounceIn 1.5s ease forwards;
                                opacity: 0;
                                transform: translateY(-30px);
                            }

                            @keyframes bounceIn {
                                0% {
                                    opacity: 0;
                                    transform: translateY(-30px) scale(0.3);
                                }

                                50% {
                                    opacity: 1;
                                    transform: translateY(0) scale(1.05);
                                }

                                70% {
                                    transform: translateY(0) scale(0.9);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0) scale(1);
                                }
                            }

                            /* Individual letter animation */
                            .welcome-text-3d {
                                overflow: hidden;
                                white-space: nowrap;
                                margin: 0 auto;
                                letter-spacing: 0.15em;
                                animation: typing 3.5s steps(10, end), blink-caret 0.75s step-end infinite;
                                border-right: 0.15em solid white;
                            }

                            /* Typing effect */
                            @keyframes typing {
                                from {
                                    width: 0
                                }

                                to {
                                    width: 100%
                                }
                            }

                            /* Cursor effect */
                            @keyframes blink-caret {

                                from,
                                to {
                                    border-color: transparent
                                }

                                50% {
                                    border-color: white;
                                }
                            }

                            /* M&E System text animation */
                            .me-system-text {
                                display: inline-block;
                                margin-top: 10px;
                            }

                            .m-letter,
                            .e-letter,
                            .ampersand,
                            .system-text {
                                display: inline-block;
                                opacity: 0;
                                animation: fadeInUp 0.8s ease forwards;
                            }

                            .m-letter {
                                color: #ff6b6b;
                                animation-delay: 1.2s;
                                text-shadow: 0 2px 10px rgba(255, 107, 107, 0.5);
                            }

                            .ampersand {
                                color: #D5F7FFFF;
                                animation-delay: 1.5s;
                                text-shadow: 0 2px 10px rgba(213, 247, 255, 0.5);
                            }

                            .e-letter {
                                color: #ffd166;
                                animation-delay: 1.8s;
                                text-shadow: 0 2px 10px rgba(255, 209, 102, 0.5);
                            }

                            .system-text {
                                color: #FAFFAFFF;
                                animation-delay: 2.1s;
                                text-shadow: 0 2px 10px rgba(250, 255, 175, 0.5);
                            }

                            @keyframes fadeInUp {
                                from {
                                    opacity: 0;
                                    transform: translateY(20px);
                                }

                                to {
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            }

                            /* Subtitle typing animation */
                            .typing-animation {
                                overflow: hidden;
                                white-space: nowrap;
                                margin: 20px auto 0;
                                font-size: 1.2rem;
                                max-width: 550px;
                                animation: typing 4s steps(60, end) 2.5s forwards, blink-caret 0.75s step-end infinite;
                                border-right: 0.15em solid white;
                                opacity: 0;
                            }

                            /* Make sure the animation works on all devices */
                            @media (max-width: 768px) {
                                .welcome-text-3d {
                                    font-size: 1.8rem;
                                }

                                .typing-animation {
                                    font-size: 1rem;
                                    white-space: normal;
                                    animation: none;
                                    border-right: none;
                                    opacity: 1;
                                }
                            }
                        </style>


                        <style>
                            :root {
                                --primary: #1282ad;
                                --secondary: #00bcd7;
                                --accent: #ff5722;
                                --light: #f8f9fa;
                                --dark: #2c3e50;
                                --success: #28a745;
                                --warning: #ffc107;
                                --info: #17a2b8;
                                --transition: all 0.3s ease;
                            }

                            /* Container for hex flow */
                            .hex-flow-container {
                                display: flex;
                                flex-wrap: wrap;
                                justify-content: center;
                                align-items: center;
                                gap: 2rem;
                                margin: 2rem 0;
                            }

                            /* Hexagon wrapper */
                            .hex {
                                position: relative;
                                width: 177px;
                                /* width of hex */
                                height: 177px;
                                /* height = width * sqrt(3)/2 */
                                padding: 21px;
                                background-color: var(--primary);
                                margin: 34.64px 0;
                                /* half height for proper spacing */
                                color: var(--light);
                                font-weight: bold;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                text-align: center;
                                transition: var(--transition);
                                cursor: default;
                                clip-path: polygon(50% 0%,
                                        93% 25%,
                                        93% 75%,
                                        50% 100%,
                                        7% 75%,
                                        7% 25%);
                                /* true hexagon shape */
                            }

                            /* Rotation on hover */
                            .hex:hover {
                                transform: rotate(360deg);
                            }

                            /* Assign colors to each hex individually */
                            .hex.step-1 {
                                background-color: var(--primary);
                            }

                            .hex.step-2 {
                                background-color: var(--success);
                            }

                            .hex.step-3 {
                                background-color: var(--warning);
                            }

                            .hex.step-4 {
                                background-color: var(--info);
                            }

                            .hex.step-5 {
                                background-color: var(--accent);
                            }

                            /* Arrow between hexes */
                            .hex-arrow {
                                font-size: 2rem;
                                font-weight: bold;
                                color: #ff0000;
                                /* fallback red */
                                background: linear-gradient(45deg, red, yellow);
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                                text-shadow: 0 0 10px rgba(255, 0, 0, 0.5), 0 0 20px rgba(255, 255, 0, 0.3);
                                animation: bounce 2s infinite alternate;
                            }

                            /* Bounce animation for arrows */
                            @keyframes bounce {
                                0% {
                                    transform: translateY(0);
                                }

                                100% {
                                    transform: translateY(-5px);
                                }
                            }

                            /* Responsive adjustments */
                            @media(max-width: 768px) {
                                .hex {
                                    width: 80px;
                                    height: 46.19px;
                                    margin: 23.09px 0;
                                }

                                .hex-arrow {
                                    font-size: 1.5rem;
                                }
                            }
                        </style>

                        <div class="hex-flow-container">
                            <!-- Step 1 -->
                            <div class="hex step-1">Training, System Strengthening Programs & Devices</div>
                            <div class="hex-arrow">→</div>

                            <!-- Step 2 -->
                            <div class="hex step-2">Safe Practice</div>
                            <div class="hex-arrow">→</div>

                            <!-- Step 3 -->
                            <div class="hex step-3">Better Outcomes</div>
                            <div class="hex-arrow">→</div>

                            <!-- Step 4 -->
                            <div class="hex step-4">Learning & Scale Up</div>
                            <div class="hex-arrow">→</div>

                            <!-- Step 5 -->
                            <div class="hex step-5">Sustainability</div>
                        </div>

                        <div class="container my-4">
                            <!-- Header Card -->
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Where Can I Go From Here?</h5>
                                    <p class="fw-semibold text-secondary mb-3">
                                        Dear
                                        <a href="/app/userinfo.php" target="_blank"><?= htmlspecialchars($_SESSION['username'] ?? 'User') ?></a>,
                                        based on your role as <?= getRoleDisplay($userRole); ?>,
                                        you will be able to access:
                                    </p>
                                </div>
                            </div>

                            <!-- Functional Groups Grid -->
                            <div class="row g-3">
                                <?php if (!empty($functionalGroups)): ?>
                                    <?php foreach ($functionalGroups as $groupName => $groupData): ?>
                                        <?php
                                        // Create a unique modal ID for each group
                                        $modalId = 'modal_' . preg_replace('/[^a-zA-Z0-9]/', '_', $groupName);
                                        ?>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <!-- Group Card -->
                                            <div class="card h-100 shadow-sm clickable" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>" style="cursor:pointer;">
                                                <div class="card-body d-flex align-items-center justify-content-center">
                                                    <h6 class="card-title fw-bold text-center mb-0"><?= htmlspecialchars($groupName); ?></h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal for Permissions -->
                                        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="<?= $modalId ?>Label"><?= htmlspecialchars($groupName); ?> Permissions</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php if (!empty($groupData['modules'])): ?>
                                                            <ul class="list-unstyled mb-0">
                                                                <?php foreach ($groupData['modules'] as $module): ?>
                                                                    <li class="mb-2">
                                                                        <i class="fas <?= getAccessTypeIcon($module['access_type']); ?> me-1"></i>
                                                                        <?= htmlspecialchars($module['module_name']); ?>
                                                                        <br>
                                                                        <span class="text-muted small"><?= htmlspecialchars($module['permissions']); ?></span>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php else: ?>
                                                            <span class="text-muted">No permissions assigned for this group.</span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="col-12">
                                        <span class="text-muted">No permissions assigned.</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <br></br>
                        <!-- Search Box -->
                        <!--
                        <div class="search-box">
                            <input type="text" id="searchInput" placeholder="Search for system modules...">
                            <i class="fas fa-search"></i>
                        </div>
                                -->

                        <!-- Search Tabs -->
                        <!--
                        <ul class="nav nav-pills component-tabs justify-content-center" id="components-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tracking-tab" data-bs-toggle="pill" data-bs-target="#tracking" type="button" role="tab">Tracking Modules</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="training-tab" data-bs-toggle="pill" data-bs-target="#training" type="button" role="tab">Training Modules</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="data-tab" data-bs-toggle="pill" data-bs-target="#data" type="button" role="tab">Data Modules</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="admin-tab" data-bs-toggle="pill" data-bs-target="#admin" type="button" role="tab">Admin Modules</button>
                            </li>
                        </ul>

                                -->

                        <!-- Component Tabs Content -->
                        <!--
                        <div class="tab-content" id="components-tabContent">
                            <div class="tab-pane fade show active" id="tracking" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item animate-slide-in" data-link="/api/meta/index.php" style="animation-delay: 0.4s;">
                                            <div class="component-icon">
                                                <i class="fa-regular fa-chart-mixed"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Lifebox at Glance Dashboard</h4>
                                                <p>Analyze data visualizations and components grouped by Training, Device Distributions, DHIS2...</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" data-href="/app/index.htm" style="animation-delay: 0.1s;">
                                            <div class="component-icon">
                                                <i class="fa-regular fa-users-medical"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Patient Impact Tracker</h4>
                                                <p>Track patient outcomes and measure the impact of surgical safety interventions.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" data-href="/app/clean_cut_implementations_list.php" style="animation-delay: 0.2s;">
                                            <div class="component-icon">
                                                <i class="fas fa-scissors"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Clean Cut Implementation</h4>
                                                <p>Monitor the adoption and effectiveness of infection prevention protocols in surgical settings.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item animate-slide-in" data-href="/app/device_distributions_list.php" style="animation-delay: 0.3s;">
                                            <div class="component-icon">
                                                <i class="fa-solid fa-chart-network"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Device Distribution Tracker</h4>
                                                <p>Manage inventory and track distribution of pulse oximeters and other medical devices.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" data-href="/app/surgical_cases_list.php">
                                            <div class=" component-icon">
                                                <i class="fas fa-procedures"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Surgical Case Tracker</h4>
                                                <p>Monitor surgical cases with detailed information on procedures, outcomes, and safety checklist compliance.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" data-href="/app/antibiotics_list.php" style="animation-delay: 0.5s;">
                                            <div class="component-icon">
                                                <i class="fa-solid fa-prescription-bottle-pill"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Antibiotics Usage</h4>
                                                <p>Monitor perioperative antibiotic use and compliance with protocols.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="training" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item" data-href="/app/training_sessions_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Sessions</h4>
                                                <p>Schedule, manage, and track all training sessions conducted across locations.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/training_participants_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Participants</h4>
                                                <p>Manage participant information, attendance, and training outcomes.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/training_courses_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-certificate"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Courses</h4>
                                                <p>Catalog of all training courses offered with curriculum details and materials.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item" data-href="/app/trainers_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Trainers</h4>
                                                <p>Database of trainers with their qualifications and training assignments.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/dashboard_dashboard.php?page=lifebox_test_center&menuItemId=124">
                                            <div class="component-icon">
                                                <i class="fas fa-clipboard-check"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Evaluation</h4>
                                                <p>Assess training effectiveness through pre- and post-training evaluations.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/training_languages_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-language"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Languages</h4>
                                                <p>Manage multilingual training materials and resources.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="data" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item" data-href="/app/regions_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-globe-africa"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Countries & Regions</h4>
                                                <p>Geographical data management for all countries and regions of operation.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/facilities_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-hospital"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Facilities</h4>
                                                <p>Comprehensive database of healthcare facilities implementing Lifebox programs.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/diagnoses_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-procedures"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Procedures & Diagnoses</h4>
                                                <p>Standardized coding system for surgical procedures and diagnoses.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item" data-href="/app/partners_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-people-arrows"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Partners</h4>
                                                <p>Management of partner organizations and their engagement details.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/lifebox_staff_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-user-md"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Lifebox Staff</h4>
                                                <p>Directory of Lifebox team members and their roles across regions.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/period_types_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Quarters & Periods</h4>
                                                <p>Financial and reporting period management for consistent data analysis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="admin" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item" data-href="/app/admin_rights_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-user-shield"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Roles & Access Management</h4>
                                                <p>Granular control over user permissions and data access levels.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="">
                                            <div class="component-icon">
                                                <i class="fas fa-cogs"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>System Configuration</h4>
                                                <p>Centralized settings for system behavior, notifications, and integrations.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="">
                                            <div class="component-icon">
                                                <i class="fas fa-database"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Data Backup & Recovery</h4>
                                                <p>Scheduled backups and point-in-time recovery options.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item" data-href="/app/webreport.php">
                                            <div class="component-icon">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Report Templates</h4>
                                                <p>Management of standard and custom report templates.</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/lifeboxme_dhis2_analytics_settings_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-exchange-alt"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Integration Settings</h4>
                                                <p>Configuration of external system integrations (DHIS2, etc.).</p>
                                            </div>
                                        </div>
                                        <div class="component-item" data-href="/app/lifeboxme__audit_list.php">
                                            <div class="component-icon">
                                                <i class="fas fa-history"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Audit Logs</h4>
                                                <p>Detailed tracking of all system activities and data changes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                -->
                    </div>
                </section>

            </div>

            <!-- Help Tab -->
            <div class="tab-pane fade" id="help" role="tabpanel">
                <div class="dashboard-container">
                    <div class="iframe-loading">Loading</div>
                    <iframe
                        src="help.php"
                        class="help-iframe"
                        allowtransparency="true"
                        onload="document.querySelectorAll('.iframe-loading')[1].style.display = 'none';">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to calculate available height for iframe
            function calculateAvailableHeight() {
                const tabsHeight = document.getElementById('tabs').offsetHeight;
                const windowHeight = window.innerHeight;
                return windowHeight - tabsHeight;
            }

            // Set initial height for tabsContent
            document.getElementById('tabsContent').style.height = calculateAvailableHeight() + 'px';

            // Adjust height on window resize
            window.addEventListener('resize', function() {
                document.getElementById('tabsContent').style.height = calculateAvailableHeight() + 'px';
            });

            // Handle tab switching
            const tabButtons = document.querySelectorAll('[data-bs-toggle="tab"]');
            tabButtons.forEach(button => {
                button.addEventListener('shown.bs.tab', function() {
                    // Force resize after tab switch
                    document.getElementById('tabsContent').style.height = calculateAvailableHeight() + 'px';

                    // Show loading indicator for iframe tabs
                    if (this.id === 'embed-tab' || this.id === 'report-tab' || this.id === 'help-tab') {
                        const iframeContainers = document.querySelectorAll('.dashboard-container');
                        iframeContainers.forEach(container => {
                            const loadingIndicator = container.querySelector('.iframe-loading');
                            if (loadingIndicator) {
                                loadingIndicator.style.display = 'block';
                            }
                        });
                    }
                });
            });

            // Add animation to component items when they become visible
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-slide-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all component items
            document.querySelectorAll('.component-item').forEach(item => {
                if (!item.classList.contains('animate-slide-in')) {
                    observer.observe(item);
                }
            });

            // Add hover effect to component tabs
            const componentTabs = document.querySelectorAll('.component-tabs .nav-link');
            componentTabs.forEach(tab => {
                tab.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('active')) {
                        this.style.transform = 'translateY(-2px)';
                    }
                });

                tab.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('active')) {
                        this.style.transform = 'translateY(0)';
                    }
                });
            });

            // Ensure the dashboard iframe is properly loaded when page opens
            const dashboardIframe = document.querySelector('#embed iframe');
            if (dashboardIframe) {
                // Check if iframe is already loaded
                if (dashboardIframe.contentWindow && dashboardIframe.contentWindow.document.readyState === 'complete') {
                    document.querySelector('#embed .iframe-loading').style.display = 'none';
                }
            }
        });
    </script>

    <script>
        // Add click handlers to component items
        /* */
        document.querySelectorAll('.component-item').forEach(item => {
            item.style.cursor = 'pointer';
            item.addEventListener('click', function() {
                const href = this.getAttribute('data-link');
                if (href) {
                    window.location.href = href;
                }
            });
        });



        // Enhanced version with configurable window features

        document.addEventListener('DOMContentLoaded', function() {
            function openComponentWindow(url) {
                //const windowFeatures = 'width=1700,height=800,scrollbars=yes,resizable=yes,toolbar=yes,menubar=yes,location=yes';
                const windowFeatures = 'width=1700,height=800,scrollbars=yes,resizable=yes';
                //window.open(url, '_blank', windowFeatures);
                window.open(url, '_blank');
            }

            document.querySelectorAll('.component-item[data-href]').forEach(item => {
                item.addEventListener('click', function(e) {
                    const href = this.getAttribute('data-href');
                    if (href) {
                        openComponentWindow(href);
                    }
                });

                // Keyboard and accessibility support
                item.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        const href = this.getAttribute('data-href');
                        if (href) {
                            openComponentWindow(href);
                        }
                    }
                });

                item.setAttribute('tabindex', '0');
                item.setAttribute('role', 'button');
                item.setAttribute('aria-label', `Open ${item.querySelector('h4').textContent}`);
            });
        });


        /*
        // Modified version to reload application window with clicked URL
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.component-item[data-href]').forEach(item => {
                item.addEventListener('click', function(e) {
                    const href = this.getAttribute('data-href');
                    if (href) {
                        // Navigate to the new URL in the same window
                        //window.location.href = href;
                        window.location.assign(href);
                    }
                });

                // Keyboard and accessibility support
                item.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        const href = this.getAttribute('data-href');
                        if (href) {
                            //window.location.href = href;
                            window.location.assign(href);
                        }
                    }
                });

                item.setAttribute('tabindex', '0');
                item.setAttribute('role', 'button');
                item.setAttribute('aria-label', `Open ${item.querySelector('h4').textContent}`);
            });
        });
        */
    </script>

    <script>
        // Search functionality for system modules
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                const filter = this.value.toLowerCase();
                const componentItems = document.querySelectorAll('.component-item');

                componentItems.forEach(item => {
                    const title = item.querySelector('h4').textContent.toLowerCase();
                    const description = item.querySelector('p').textContent.toLowerCase();

                    if (title.includes(filter) || description.includes(filter)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>