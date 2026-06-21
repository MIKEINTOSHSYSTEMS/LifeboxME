<?php
$current_page = basename($_SERVER['PHP_SELF']);

$user_details = $_SESSION['user_details'] ?? null;
$username = $user_details['username'] ?? ($_SESSION['UserName'] ?? 'User');
$email = $user_details['email'] ?? '';
$first_name = $user_details['first_name'] ?? '';
$last_name = $user_details['last_name'] ?? '';
$display_name = trim("$first_name $last_name") ?: $username;
$user_id = $_SESSION['UserID'] ?? '';

// Check if user is logged in
if (!is_logged_in()) {
  header('Location: login.php');
  exit;
}
?>
<head>
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        _paq.push(["setCookieDomain", "*.mne.lifebox.org"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://mne.lifebox.org/analytics/";
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
    <img referrerpolicy="no-referrer-when-downgrade" src="https://mne.lifebox.org/analytics/matomo.php?idsite=1&amp;rec=1" style="border:0" alt="" />
    <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({ 'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start' });
        (function() {
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = 'https://mne.lifebox.org/analytics/js/container_DPKCUiEL.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <script>
        var _paq = window._paq = window._paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//mne.lifebox.org/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
</head>

<!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(135deg, #078ca9e7 0%, #34495e 100%); position: fixed; top: 0; left: 0; right: 0; z-index: 1080; box-shadow: 0 2px 10px rgba(0,0,0,0.3);">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
            <img src="../lblogo-white.svg" alt="Logo" height="32" class="me-2">
            <span class="fw-semibold">Test Administration</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'tests.php' ? 'active' : '' ?>" href="tests.php">
                        <i class="bi bi-journal-text me-1"></i> Tests
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'questions.php' ? 'active' : '' ?>" href="questions.php">
                        <i class="bi bi-question-circle me-1"></i> Questions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'responses.php' ? 'active' : '' ?>" href="responses.php">
                        <i class="bi bi-clipboard-data me-1"></i> Responses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'participants.php' ? 'active' : '' ?>" href="participants.php">
                        <i class="bi bi-people me-1"></i> Participants
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                <a href="../public/login.php" class="btn btn-outline-light btn-sm" target="_blank" style="padding: 5px 10px; border-radius: 8px;">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Test Takers Portal
                </a>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" style="padding: 5px 10px; background: rgba(255,255,255,0.1); border-radius: 8px;">
                        <img src="/assets/img/lifebox.svg" alt="User" width="30" height="30" class="rounded-circle me-2">
                        <span class="d-none d-md-inline"><?= htmlspecialchars($display_name) ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow-lg" style="border-radius: 10px;">
                        <?php if ($email): ?>
                            <li class="dropdown-item-text"><small><i class="bi bi-envelope me-2"></i><?= htmlspecialchars($email) ?></small></li>
                            <li><hr class="dropdown-divider"></li>
                        <?php endif; ?>
                        <?php if ($first_name || $last_name): ?>
                            <li class="dropdown-item-text"><small><i class="bi bi-person me-2"></i><?= htmlspecialchars(trim("$first_name $last_name")) ?></small></li>
                        <?php endif; ?>
                        <li class="dropdown-item-text"><small><i class="bi bi-key me-2"></i>ID: <?= htmlspecialchars($user_id) ?></small></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php?logout=1"><i class="bi bi-box-arrow-right me-2 text-danger"></i>Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    body {
        padding-top: 56px;
        overflow-x: hidden;
    }
    .nav-link {
        padding: 8px 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    .nav-link:hover {
        background: rgba(255,255,255,0.1);
    }
    .nav-link.active {
        background: rgba(255,255,255,0.2);
        font-weight: 600;
    }
    @media (min-width: 768px) {
        .px-md-4 { padding-right: 7.5rem !important; padding-left: 1.5rem !important; }
    }
</style>
