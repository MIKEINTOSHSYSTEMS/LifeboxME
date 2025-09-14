<?php
// sidebar.php
// require __DIR__ . '/session_helper.php';

$current_page = basename($_SERVER['PHP_SELF']);

// Get current user details from SESSION
$user_details = $_SESSION['user_details'] ?? null;
$username = $user_details['username'] ?? ($_SESSION['UserName'] ?? 'User');
$email = $user_details['email'] ?? '';
$first_name = $user_details['first_name'] ?? '';
$last_name = $user_details['last_name'] ?? '';
$display_name = trim("$first_name $last_name") ?: $username;
$user_id = $_SESSION['UserID'] ?? '';
?>

<head>
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(["setCookieDomain", "*.lifebox.merqconsultancy.org"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://lifebox.merqconsultancy.org/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

    <!-- Matomo Image Tracker-->
    <img referrerpolicy="no-referrer-when-downgrade" src="https://lifebox.merqconsultancy.org/analytics/matomo.php?idsite=1&amp;rec=1" style="border:0" alt="" />
    <!-- End Matomo -->

    <!-- Matomo Tag Manager -->
    <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({
            'mtm.startTime': (new Date().getTime()),
            'event': 'mtm.Start'
        });
        (function() {
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = 'https://lifebox.merqconsultancy.org/analytics/js/container_DPKCUiEL.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Tag Manager -->

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//lifebox.merqconsultancy.org/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->
</head>

<!-- Sidebar Toggle Button (for both desktop and mobile) -->
<button class="btn btn-primary position-fixed toggle-sidebar-btn"
    onclick="toggleSidebar()"
    style="top: 0px; left: 0px; z-index: 1081; padding-right: 0px ; border-radius: 0 0 10px 0;">
    <i class="bi bi-list"> <img src="../lblogo-white.svg" alt="Logo" height="30" class="me-2"> Test Administration Portal</i>
</button>

<!-- Sidebar -->
<div class="col-md-3 col-lg-2 sidebar p-0" id="sidebar"
    style="background: linear-gradient(135deg, #078ca9e7 0%, #34495e 100%); border-radius: 1px;">
    <div class="d-flex flex-column p-3 text-white h-100">
        <!-- Logo -->
        <a href="dashboard.php" class="d-flex align-items-center mb-4 text-decoration-none">
            <img src="../lblogo-white.svg" alt="Logo" style="height: 35px; margin-right: 10px;">
            <span class="fs-5 fw-bold">
                <h4>TESTS</h4>
                <h6>Administration</h6>
            </span>
        </a>

        <hr class="text-white-50">

        <!-- Navigation -->
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item mb-2">
                <a href="dashboard.php" class="nav-link text-white <?= $current_page == 'dashboard.php' ? 'active' : '' ?>"
                    style="background: <?= $current_page == 'dashboard.php' ? 'rgba(255,255,255,0.2)' : 'transparent' ?>; border-radius: 10px;">
                    <i class="bi bi-speedometer2 me-3"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="tests.php" class="nav-link text-white <?= $current_page == 'tests.php' ? 'active' : '' ?>"
                    style="background: <?= $current_page == 'tests.php' ? 'rgba(255,255,255,0.2)' : 'transparent' ?>; border-radius: 10px;">
                    <i class="bi bi-journal-text me-3"></i>
                    Tests
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="questions.php" class="nav-link text-white <?= $current_page == 'questions.php' ? 'active' : '' ?>"
                    style="background: <?= $current_page == 'questions.php' ? 'rgba(255,255,255,0.2)' : 'transparent' ?>; border-radius: 10px;">
                    <i class="bi bi-question-circle me-3"></i>
                    Questions
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="responses.php" class="nav-link text-white <?= $current_page == 'responses.php' ? 'active' : '' ?>"
                    style="background: <?= $current_page == 'responses.php' ? 'rgba(255,255,255,0.2)' : 'transparent' ?>; border-radius: 10px;">
                    <i class="bi bi-clipboard-data me-3"></i>
                    Responses
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="participants.php" class="nav-link text-white <?= $current_page == 'participants.php' ? 'active' : '' ?>"
                    style="background: <?= $current_page == 'participants.php' ? 'rgba(255,255,255,0.2)' : 'transparent' ?>; border-radius: 10px;">
                    <i class="bi bi-people me-3"></i>
                    Participants
                </a>
            </li>
        </ul>

        <hr class="text-white-50">

        <!-- Test Takers Portal -->
        <div class="mb-4">
            <a href="../public/login.php" class="btn btn-outline-light w-100" style="border-radius: 10px;">
                <i class="bi bi-box-arrow-up-right me-2"></i>
                Test Takers Portal
            </a>
        </div>

        <hr class="text-white-50">

        <!-- User Profile -->
        <div class="mt-auto">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" style="border-radius: 10px; padding: 10px; background: rgba(255,255,255,0.1);">
                    <img src="/assets/img/lifebox.svg" alt="User" width="40" height="40" class="rounded-circle me-3">
                    <div class="flex-grow-1">
                        <strong class="d-block"><?= htmlspecialchars($display_name) ?></strong>
                        <small class="text-white-50">@<?= htmlspecialchars($username) ?></small>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark shadow-lg" style="border-radius: 15px; border: none;">
                    <?php if ($email): ?>
                        <li class="dropdown-item-text">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-envelope me-2 text-primary"></i>
                                <small><?= htmlspecialchars($email) ?></small>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    <?php endif; ?>
                    <?php if ($first_name || $last_name): ?>
                        <li class="dropdown-item-text">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person me-2 text-info"></i>
                                <small><?= htmlspecialchars(trim("$first_name $last_name")) ?></small>
                            </div>
                        </li>
                    <?php endif; ?>
                    <li class="dropdown-item-text">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-key me-2 text-warning"></i>
                            <small>ID: <?= htmlspecialchars($user_id) ?></small>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="logout.php?logout=1">
                            <i class="bi bi-box-arrow-right me-2 text-danger"></i>
                            Sign out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Overlay (for mobile) -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        --info-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
        --warning-gradient: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
        --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        --primary-color: #77DFEAFF;
    }

    /* Sidebar Style */
    .sidebar {
        position: fixed;
        top: 43px;
        left: 0;
        height: 100vh;
        width: 250px;
        z-index: 1000;
        transition: all 0.3s ease;
        box-shadow: 2px 0 20px rgba(0, 0, 0, 0.3);
    }

    .sidebar.collapsed {
        width: 0;
        overflow: hidden;
    }

    .sidebar-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    a {
        color: rgba(var(--primary-color), var(--bs-link-opacity, 1));
        text-decoration: none;
    }


    .dropdown,
    .dropdown-center,
    .dropend,
    .dropstart,
    .dropup,
    .dropup-center {
        position: relative;
        bottom: 70px;
    }


    @media (min-width: 1200px) {

        .h2,
        h2 {
            font-size: 2rem;
            color: darkcyan;
        }
    }

    @media (max-width: 767.98px) {
        .sidebar {
            left: -250px;
            width: 250px;
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar-overlay.show {
            display: block;
        }
    }

    .toggle-sidebar-btn {
        display: block;
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1081;
        background: linear-gradient(135deg, #078ca9e7 0%, #34495e 100%);
    }

    .nav-link {
        transition: all 0.3s ease;
        padding: 12px 15px;
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.1) !important;
        transform: translateX(5px);
    }

    .nav-link.active {
        background: rgba(255, 255, 255, 0.2) !important;
        border-left: 4px solid #038DA9;
    }

    .main-content {
        transition: margin-left 0.3s ease;
    }

    body.sidebar-collapsed .sidebar {
        width: 0 !important;
    }

    body.sidebar-collapsed .main-content {
        margin-left: 0 !important;
    }
</style>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const isMobile = window.innerWidth < 768;

        if (isMobile) {
            sidebar.classList.toggle('show');
            if (overlay) {
                overlay.classList.toggle('show');
            }
        } else {
            sidebar.classList.toggle('collapsed');
            document.body.classList.toggle('sidebar-collapsed');
        }
    }

    // Close sidebar when clicking outside (mobile only)
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const toggleBtn = document.querySelector('.toggle-sidebar-btn');

        if (window.innerWidth < 768 && sidebar.classList.contains('show')) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggleBtn = toggleBtn && toggleBtn.contains(event.target);

            if (!isClickInsideSidebar && !isClickOnToggleBtn && overlay) {
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
            }
        }
    });

    // Add overlay for mobile
    document.addEventListener('DOMContentLoaded', function() {
        if (window.innerWidth < 768) {
            const overlay = document.createElement('div');
            overlay.id = 'sidebarOverlay';
            overlay.className = 'sidebar-overlay';
            overlay.onclick = toggleSidebar;
            document.body.appendChild(overlay);
        }
    });

    // Reset on window resize
    window.addEventListener('resize', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        if (window.innerWidth >= 768) {
            sidebar.classList.remove('show');
            if (overlay) {
                overlay.classList.remove('show');
            }
        }
    });
</script>