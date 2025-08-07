<?php
// /api/auth/database.php

//require_once __DIR__ . '/../../app/include/appsettings.php';
require_once '/app/include/appsettings.php';

// Get database connection info from PHPRunner
$defaultConn = $cman->getDefault();
$connInfo = $defaultConn->getConnectionInfo();

// Database connection settings
$dbConfig = [
    'host' => $connInfo['server'],
    'port' => $connInfo['port'],
    'dbname' => $connInfo['database'],
    'user' => $connInfo['username'],
    'password' => $connInfo['password'],
    'driver' => 'pgsql' // Change to 'mysql' if using MySQL
];

// Create PDO connection
try {
    $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};port={$dbConfig['port']};dbname={$dbConfig['dbname']}";
    $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    // Set timezone if needed
    $pdo->exec("SET TIME ZONE 'UTC'");
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Database connection error");
}

/**
 * Execute a database query
 */
function db_query($sql, $params = [])
{
    global $pdo;

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        error_log("Database query error: " . $e->getMessage());
        return false;
    }
}

/**
 * Get single row
 */
function db_get_row($sql, $params = [])
{
    $stmt = db_query($sql, $params);
    return $stmt ? $stmt->fetch() : false;
}

/**
 * Get all rows
 */
function db_get_all($sql, $params = [])
{
    $stmt = db_query($sql, $params);
    return $stmt ? $stmt->fetchAll() : false;
}
