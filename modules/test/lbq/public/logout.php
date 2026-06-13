<?php
// modules/test/lbq/public/logout.php
session_start();

// Check if this is a restart (going back to email step from OTP)
if (isset($_GET['action']) && $_GET['action'] === 'restart_login') {
    unset($_SESSION['otp_pending'], $_SESSION['otp_email'], $_SESSION['otp_participant_name']);
    header('Location: login.php');
    exit;
}

// Full logout
$_SESSION = array();

// Destroy session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destroy "Remember Me" cookie
if (isset($_COOKIE['lb_remember'])) {
    setcookie('lb_remember', '', time() - 3600, '/', '', isset($_SERVER['HTTPS']), true);
}

session_destroy();

header('Location: login.php');
exit;
