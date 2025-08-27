<?php
// admin/sidebar.php
?>
<!-- Sidebar -->
<div class="col-md-3 col-lg-2 sidebar p-0">
    <div class="d-flex flex-column p-3">
        <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <img src="../lblogo-white.svg" alt="Logo" style="height: 30px; margin-bottom: 5px;">
            <span class="text-white"> Test Center  </span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="tests.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'tests.php' ? 'active' : '' ?>">
                    <i class="bi bi-journal-text me-2"></i>
                    Tests
                </a>
            </li>
            <li>
                <a href="questions.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'questions.php' ? 'active' : '' ?>">
                    <i class="bi bi-question-circle me-2"></i>
                    Questions
                </a>
            </li>
            <li>
                <a href="responses.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'responses.php' ? 'active' : '' ?>">
                    <i class="bi bi-clipboard-data me-2"></i>
                    Responses
                </a>
            </li>
            <li>
                <a href="participants.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'participants.php' ? 'active' : '' ?>">
                    <i class="bi bi-people me-2"></i>
                    Participants
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <img src="https://via.placeholder.com/32" alt="Admin" width="32" height="32" class="rounded-circle me-2">
                <strong>Admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>