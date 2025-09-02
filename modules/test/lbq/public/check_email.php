<?php
session_start();
require_once __DIR__ . '/../src/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['available' => false, 'message' => 'Invalid request method']);
    exit;
}

// Validate CSRF token
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['available' => false, 'message' => 'Invalid CSRF token']);
    exit;
}

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['available' => false, 'message' => 'Invalid email format']);
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM training_participants WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $count = $stmt->fetchColumn();

    echo json_encode(['available' => $count === 0, 'message' => $count === 0 ? 'Email available' : 'Email already registered']);
} catch (Exception $e) {
    echo json_encode(['available' => false, 'message' => 'Error checking email']);
}
