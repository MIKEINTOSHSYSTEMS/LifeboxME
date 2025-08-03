<?php
// res/database.php
$host = '127.0.0.1';
$dbname = 'lifebox_mesystem';
$username = 'postgres';
$password = 'mikeintosh';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
