<?php
session_start();
require_once __DIR__ . '/../src/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Validate CSRF token
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid CSRF token']);
    exit;
}

$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

if (empty($phone)) {
    echo json_encode(['available' => false]);
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM training_participants WHERE phone = :phone");
    $stmt->execute([':phone' => $phone]);
    $count = $stmt->fetchColumn();

    echo json_encode(['available' => $count === 0]);
} catch (Exception $e) {
    error_log("Error checking phone: " . $e->getMessage());
    echo json_encode(['available' => true]); // Assume available on error
}
