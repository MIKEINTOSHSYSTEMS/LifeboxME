<?php
// session_helper.php

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

    // Check if user is admin
    $is_admin = ($_SESSION['AccessLevel'] ?? 0) === ACCESS_LEVEL_ADMIN;
    $_SESSION['is_admin'] = $is_admin;
}

/**
 * Check if user is logged in
 */
function is_logged_in()
{
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null;
}

/**
 * Get user details from database
 */
function get_user_details($user_id)
{
    global $pdo;

    try {
        $stmt = $pdo->prepare("
            SELECT u.ID, u.username, u.email, u.first_name, u.last_name 
            FROM users u 
            WHERE u.ID = :user_id
        ");
        $stmt->execute([':user_id' => $user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching user details: " . $e->getMessage());
        return null;
    }
}

/**
 * Get current user details
 */
function get_current_user_details()
{
    if (isset($_SESSION['user_id'])) {
        return get_user_details($_SESSION['user_id']);
    }
    return null;
}

/**
 * Authenticate user against database - allows any user
 */
function authenticate_user($username, $password, $pdo = null)
{
    // Use provided PDO connection or try to use global
    if ($pdo === null) {
        if (!isset($GLOBALS['pdo'])) {
            error_log("Database connection not available for authentication");
            return false;
        }
        $pdo = $GLOBALS['pdo'];
    }

    try {
        $stmt = $pdo->prepare("
            SELECT u.ID, u.username, u.email, u.first_name, u.last_name, u.password_hash
            FROM users u 
            WHERE u.username = :username
        ");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        error_log("User query result: " . print_r($user, true)); // Debug logging

        if ($user) {
            error_log("Password verification: " . (password_verify($password, $user['password_hash']) ? "SUCCESS" : "FAILED")); // Debug logging
        }

        if ($user && password_verify($password, $user['password_hash'])) {
            return $user;
        }
        return false;
    } catch (PDOException $e) {
        error_log("Authentication error: " . $e->getMessage());
        return false;
    }
}

/**
 * Check if user is admin
 */
function is_admin()
{
    return isset($_SESSION['AccessLevel']) && $_SESSION['AccessLevel'] === ACCESS_LEVEL_ADMIN;
}

/**
 * Check if user has access to admin area (admin or admin group)
 */
function has_admin_access()
{
    $access_level = $_SESSION['AccessLevel'] ?? '';
    return in_array($access_level, [ACCESS_LEVEL_ADMIN, ACCESS_LEVEL_ADMINGROUP]);
}

/**
 * Handle logout
 */
function handle_logout()
{
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
}

// Handle logout if requested
handle_logout();
