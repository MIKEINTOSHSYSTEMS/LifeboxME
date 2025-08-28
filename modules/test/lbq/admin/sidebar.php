<?php
// admin/sidebar.php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Sidebar Toggle Button (visible on mobile) -->
<button class="btn btn-primary d-md-none position-fixed" style="top: -3px; left: 0px; height:52px; z-index: 1080;"
    onclick="toggleSidebar()">
    <img src="../lblogo-white.svg" alt="Logo" style="height: 30px; margin-bottom: 5px; margin-right: 150px;"> <i class="bi bi-list"></i>
</button>

<!-- Sidebar -->
<div class="col-md-3 col-lg-2 sidebar p-0" id="sidebar">
    <div class="d-flex flex-column p-3">
        <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <img src="../lblogo-white.svg" alt="Logo" style="height: 30px; margin-bottom: 5px;">
            <span class="text-white"> Test Center </span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?= $current_page == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="tests.php" class="nav-link <?= $current_page == 'tests.php' ? 'active' : '' ?>">
                    <i class="bi bi-journal-text me-2"></i>
                    Tests
                </a>
            </li>
            <li>
                <a href="questions.php" class="nav-link <?= $current_page == 'questions.php' ? 'active' : '' ?>">
                    <i class="bi bi-question-circle me-2"></i>
                    Questions
                </a>
            </li>
            <li>
                <a href="responses.php" class="nav-link <?= $current_page == 'responses.php' ? 'active' : '' ?>">
                    <i class="bi bi-clipboard-data me-2"></i>
                    Responses
                </a>
            </li>
            <li>
                <a href="participants.php" class="nav-link <?= $current_page == 'participants.php' ? 'active' : '' ?>">
                    <i class="bi bi-people me-2"></i>
                    Participants
                </a>
            </li>
            <hr>
            <li>
                <a href="../public/login.php" class="nav-link">
                    <i class="bi bi-table me-2"></i>
                    <small>Go to Test Takers Portal</small>
                </a>
            </li>
        </ul>
        <hr>
        <span> Welcome
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="/assets/img/lifebox.svg" alt="Admin" width="32" height="32" class="rounded-circle me-2">
                    <strong>
                        <p>
                            <font color="White">Admin</font>
                        </p>
                    </strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
            </div>
        </span>
    </div>
</div>

<style>
    /* Sidebar responsive styles */
    @media (max-width: 767.98px) {
        .sidebar {
            position: fixed;
            top: 0;
            left: -444px;
            height: 100vh;
            z-index: 1070;
            transition: left 0.3s ease;
            background-color: #f8f9fa;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar.show {
            left: 0;
            width: 270px;
        }

        main {
            margin-left: 0 !important;
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1060;
        }

        .sidebar-overlay.show {
            display: block;
        }
    }
</style>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        sidebar.classList.toggle('show');
        if (overlay) {
            overlay.classList.toggle('show');
        }
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const toggleBtn = document.querySelector('[onclick="toggleSidebar()"]');

        if (window.innerWidth < 1768 && sidebar.classList.contains('show')) {
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
            overlay.onclick = function() {
                toggleSidebar();
            };
            document.body.appendChild(overlay);
        }
    });

    // Handle window resize
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

<!-- Overlay for mobile (will be added by JavaScript) -->