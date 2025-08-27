<?php
// src/db.php
$config = require __DIR__ . '/config.php';

try {
    $pdo = new PDO($config['db']['dsn'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());

    // Show user-friendly error message
    if (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) {
        // Admin error
        http_response_code(500);
        echo "Database connection failed. Please try again later or contact the administrator.";
    } else {
        // Public error
        http_response_code(500);
        echo "System temporarily unavailable. Please try again later.";
    }
    exit;
}
