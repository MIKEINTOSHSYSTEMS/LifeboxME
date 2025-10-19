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
    $countryId = $_POST['country_id'] ?? '';

    if (empty($countryId)) {
        echo json_encode(['success' => false, 'message' => 'Country ID is required']);
        exit;
    }

    // Get facilities for the selected country
    $stmt = $pdo->prepare("
        SELECT facility_id, facility_name 
        FROM facilities 
        WHERE country_id = :country_id AND is_active = true 
        ORDER BY facility_name
    ");

    $stmt->execute([':country_id' => $countryId]);
    $facilities = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Format the response
    $formattedFacilities = [];
    foreach ($facilities as $facility) {
        $formattedFacilities[] = [
            'id' => $facility['facility_id'],
            'name' => $facility['facility_name']
        ];
    }

    echo json_encode([
        'success' => true,
        'facilities' => $formattedFacilities
    ]);
} catch (Exception $e) {
    error_log("Error fetching facilities: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
