<?php
// navbar.php

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

<!-- Desktop Navbar (hidden on mobile) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-none d-md-flex fixed-top shadow" style="z-index: 1100;">
    <div class="container-fluid">
        <!-- Brand / Logo -->
        <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
            <img src="../lblogo-white.svg" alt="Logo" height="30" class="me-2">
            <span>Admin Panel</span>
        </a>

        <!-- Navigation Links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link <?= $current_page == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $current_page == 'tests.php' ? 'active' : '' ?>" href="tests.php">Tests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $current_page == 'questions.php' ? 'active' : '' ?>" href="questions.php">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $current_page == 'responses.php' ? 'active' : '' ?>" href="responses.php">Responses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $current_page == 'participants.php' ? 'active' : '' ?>" href="participants.php">Participants</a>
            </li>
        </ul>

        <!-- User Info Dropdown -->
        <div class="dropdown">
            <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/assets/img/lifebox.svg" alt="User" width="32" height="32" class="rounded-circle me-2">
                <strong><?= htmlspecialchars($display_name) ?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow" aria-labelledby="userDropdown">
                <?php if ($email): ?>
                    <li class="dropdown-item-text d-flex align-items-center">
                        <i class="bi bi-envelope me-2 text-primary"></i>
                        <small><?= htmlspecialchars($email) ?></small>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                <?php endif; ?>
                <?php if ($first_name || $last_name): ?>
                    <li class="dropdown-item-text d-flex align-items-center">
                        <i class="bi bi-person me-2 text-info"></i>
                        <small><?= htmlspecialchars(trim("$first_name $last_name")) ?></small>
                    </li>
                <?php endif; ?>
                <li class="dropdown-item-text d-flex align-items-center">
                    <i class="bi bi-key me-2 text-warning"></i>
                    <small>ID: <?= htmlspecialchars($user_id) ?></small>
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
</nav>

<!-- Space below fixed navbar -->
<style>
    @media (min-width: 768px) {
        body {
            padding-top: 56px;
            /* Adjust this based on navbar height */
        }
    }
</style>