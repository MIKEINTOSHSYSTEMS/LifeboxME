<?php
// /api/auth/test/session_helper.php

// Match PHPRunner's session configuration
$cookieParams = session_get_cookie_params();
$secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

// Define constants from PHPRunner
define("ACCESS_LEVEL_ADMIN", "Admin");
define("ACCESS_LEVEL_ADMINGROUP", "AdminGroup");
define("ACCESS_LEVEL_USER", "User");
define("ACCESS_LEVEL_GUEST", "Guest");

// Only set session parameters if session hasn't started yet
if (session_status() === PHP_SESSION_NONE) {
    // Use the same session name as PHPRunner
    $sessionName = 'pLifeboxSA7lVH6MEdvwh';
    session_name($sessionName);

    // Set cookie parameters to match PHPRunner exactly
    session_set_cookie_params([
        'lifetime' => 0, // Match dbcommon.php: session_set_cookie_params(0, ...)
        'path' => $cookieParams['path'],
        'domain' => $cookieParams['domain'],
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
}

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize runnerSession for CSRF protection
if (!isset($_SESSION['runnerSession']) && isset($_COOKIE['runnerSession'])) {
    $_SESSION['runnerSession'] = $_COOKIE['runnerSession'];
}

// Map PHPRunner session variables to our format
if (isset($_SESSION['UserID'])) {
    $_SESSION['user_id'] = (int)$_SESSION['UserID'];
    $_SESSION['username'] = $_SESSION['UserName'] ?? null;

    // Check if user is admin
    $is_admin = ($_SESSION['AccessLevel'] ?? 0) === ACCESS_LEVEL_ADMIN;
    $_SESSION['is_admin'] = $is_admin;
}

/**
 * Check if user is logged in
 */
function is_logged_in()
{
    return isset($_SESSION['UserID']) && $_SESSION['UserID'] !== null;
}

/**
 * Handle logout
 */
function handle_logout()
{
    if (isset($_GET['logout'])) {
        // Use PHPRunner's logout mechanism
        require_once __DIR__ . '/../../app/classes/security.php';
        Security::logout();

        // Clear local session
        session_unset();
        session_destroy();

        // Clear session cookies
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );

        header("Location: index.php");
        exit();
    }
}

// Handle logout if requested
handle_logout();

/**
 * Verify CSRF token
 */
function verify_csrf_token()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $token = $_POST['csrf_token'] ?? '';
        if (!$token || $token !== ($_SESSION['csrf_token'] ?? '')) {
            http_response_code(403);
            echo json_encode(['success' => false, 'error' => 'CSRF token validation failed']);
            exit;
        }
    }
}

// Generate and store CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

/**
 * Get current user information
 */
/*
function get_current_user()
{
    return [
        'id' => $_SESSION['user_id'] ?? null,
        'username' => $_SESSION['username'] ?? null,
        'is_admin' => $_SESSION['is_admin'] ?? false,
        'access_level' => $_SESSION['AccessLevel'] ?? ACCESS_LEVEL_GUEST
    ];
}
    */
