<?php
// element/simple_test.php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "127.0.0.1";
$dbname = "lifebox_mesystem";
$username = "postgres";
$password = "mikeintosh";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Test query
    $sql = "SELECT value_type FROM public.lbpmi_data_elements WHERE data_element_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => 1]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "Success!<br>";
    echo "Value Type: " . ($row['value_type'] ?? 'Not found');
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>