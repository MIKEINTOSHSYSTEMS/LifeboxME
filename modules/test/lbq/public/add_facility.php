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
    $facilityName = trim($_POST['facility_name'] ?? '');
    $countryId = $_POST['country_id'] ?? '';
    $facilityType = trim($_POST['facility_type'] ?? '');
    $address = trim($_POST['address'] ?? '');

    if (empty($facilityName) || empty($countryId)) {
        echo json_encode(['success' => false, 'message' => 'Facility name and country are required']);
        exit;
    }

    $stmt = $pdo->prepare("
        INSERT INTO facilities (facility_name, country_id, facility_type, address, is_active, created_at, updated_at)
        VALUES (:name, :country, :type, :address, true, NOW(), NOW())
        RETURNING facility_id
    ");

    $stmt->execute([
        ':name' => $facilityName,
        ':country' => $countryId,
        ':type' => $facilityType,
        ':address' => $address
    ]);

    $facilityId = $stmt->fetchColumn();

    echo json_encode(['success' => true, 'facility_id' => $facilityId]);
} catch (Exception $e) {
    error_log("Error adding facility: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
