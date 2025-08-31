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

try {
    $roleName = trim($_POST['role_name'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if (empty($roleName)) {
        echo json_encode(['success' => false, 'message' => 'Role name is required']);
        exit;
    }

    $stmt = $pdo->prepare("
        INSERT INTO participant_role (role_name, description, is_active, created_at, updated_at)
        VALUES (:name, :desc, true, NOW(), NOW())
        RETURNING role_id
    ");

    $stmt->execute([
        ':name' => $roleName,
        ':desc' => $description
    ]);

    $roleId = $stmt->fetchColumn();

    echo json_encode(['success' => true, 'role_id' => $roleId]);
} catch (Exception $e) {
    error_log("Error adding role: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
