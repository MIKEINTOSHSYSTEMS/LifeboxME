<?php
// element/ajax_get_value_type_test.php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Set JSON header
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Direct PDO connection (bypasses PHPRunner auth)
$host = "127.0.0.1";
$dbname = "lifebox_mesystem";
$username = "postgres";
$password = "mikeintosh";

try {
    // Create PDO connection
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Validate action
    if (!isset($_POST['action']) || $_POST['action'] !== 'get_value_type') {
        throw new Exception("Invalid action");
    }
    
    // Validate data_element_id
    if (!isset($_POST['data_element_id']) || !is_numeric($_POST['data_element_id'])) {
        throw new Exception("Invalid data element ID");
    }
    
    $data_element_id = intval($_POST['data_element_id']);
    
    // Query to get value_type from data_elements table
    $sql = "SELECT value_type FROM public.lbpmi_data_elements WHERE data_element_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $data_element_id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($row && isset($row['value_type'])) {
        echo json_encode([
            'success' => true,
            'value_type' => htmlspecialchars($row['value_type'], ENT_QUOTES, 'UTF-8'),
            'note' => 'Test mode - direct PDO connection'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Data element ID ' . $data_element_id . ' not found or value_type is empty'
        ]);
    }
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
}

exit;
?>