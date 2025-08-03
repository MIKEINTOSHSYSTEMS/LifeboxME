<?php
// res/session_helper.php

// Match PHPRunner's session configuration
$cookieParams = session_get_cookie_params();
$secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

define("ACCESS_LEVEL_ADMIN", "Admin");
define("ACCESS_LEVEL_ADMINGROUP", "AdminGroup");
define("ACCESS_LEVEL_USER", "User");
define("ACCESS_LEVEL_GUEST", "Guest");

// Use the same session name as PHPRunner
session_name('pLifeboxSA7lVH6MEdvwh');

// Set cookie parameters to match
session_set_cookie_params([
    'lifetime' => 15 * 60, // 15 minutes
    'path' => $cookieParams['path'],
    'domain' => $cookieParams['domain'],
    'secure' => $secure,
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Map PHPRunner session variables to our format
if (isset($_SESSION['UserID'])) {
    $_SESSION['user_id'] = (int)$_SESSION['UserID'];
    $_SESSION['username'] = $_SESSION['UserName'] ?? null;
    $_SESSION['is_admin'] = ($_SESSION['AccessLevel'] ?? 0) === ACCESS_LEVEL_ADMIN;
}

/**
 * Check if user is logged in
 */
function is_logged_in()
{
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null;
}

/**
 * Handle logout
 */
function handle_logout()
{
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
}

// Handle logout if requested
handle_logout();
