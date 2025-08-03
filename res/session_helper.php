<?php
// res/session_helper.php

/**
 * Initialize shared session with PHPRunner
 */
function initializeSharedSession() {
    // Match PHPRunner's session configuration
    $cookieParams = session_get_cookie_params();
    $secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
    
    // Use the same session name as PHPRunner
    session_name('LifeboxSA7lVH6MEdvwh');
    
    // Set cookie parameters to match
    session_set_cookie_params([
        'lifetime' => 15 * 60, // 15 minutes in seconds
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
    
    // Check for PHPRunner session variables
    if (isset($_SESSION['UserID'])) {
        // Map PHPRunner session vars to our format
        $_SESSION['user_id'] = (int)$_SESSION['UserID'];
        $_SESSION['username'] = $_SESSION['UserName'] ?? null;
    }
}

/**
 * Check if user is logged in (has active session)
 */
function is_logged_in() {
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null;
}

/**
 * Handle logout
 */
function handle_logout() {
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
}

// Initialize the session when this file is included
initializeSharedSession();
handle_logout();
?>