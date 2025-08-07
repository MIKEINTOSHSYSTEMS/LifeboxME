<?php
// api/auth/session_helper.php

// Match PHPRunner's session configuration exactly
$cookieParams = session_get_cookie_params();

// Determine if using HTTPS
$secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
          || ($_SERVER['SERVER_PORT'] ?? 443) == 443;

define("ACCESS_LEVEL_ADMIN", "Admin");
define("ACCESS_LEVEL_ADMINGROUP", "AdminGroup");
define("ACCESS_LEVEL_USER", "User");
define("ACCESS_LEVEL_GUEST", "Guest");

// Use the same session name as PHPRunner
session_name('pLifeboxSA7lVH6MEdvwh');

// Set cookie parameters to match main application
session_set_cookie_params([
    'lifetime' => 15 * 60, // 15 minutes
    'path' => '/', // Set to root path to share across entire domain
    'domain' => $_SERVER['HTTP_HOST'], // Use current host
    'secure' => $secure,
    'httponly' => true,
    'samesite' => 'strict' // Match main app's setting
    //'samesite' => 'Lax' // Match main app's setting
]);

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check for runnerSession cookie and synchronize with our session
if (!isset($_SESSION['runnerSession'])) {
    if (isset($_COOKIE['runnerSession'])) {
        $_SESSION['runnerSession'] = $_COOKIE['runnerSession'];
    } else {
        // Generate a new runnerSession if none exists
        //$_SESSION['runnerSession'] = generatePassword(20);
        $_SESSION['runnerSession'] = bin2hex(random_bytes(20));
        setcookie(
            'runnerSession',
            $_SESSION['runnerSession'],
            [
                'expires' => time() + 15 * 60,
                'path' => '/',
                'domain' => $_SERVER['HTTP_HOST'],
                'secure' => $secure,
                'httponly' => true,
                'samesite' => 'strict'
                //'samesite' => 'Lax'
            ]
        );
    }
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
    // Check both our session and runnerSession
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null 
           && isset($_COOKIE['runnerSession']);
}

/**
 * Handle logout
 */
function handle_logout()
{
    if (isset($_GET['logout'])) {
        // Clear all session data
        $_SESSION = [];
        
        // Delete session cookie
        if (ini_get("session.use_cookies")) {
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
            // Also delete runnerSession cookie
            setcookie(
                'runnerSession',
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }
        
        session_destroy();
        header("Location: index.php");
        exit();
    }
}

// Handle logout if requested
handle_logout();