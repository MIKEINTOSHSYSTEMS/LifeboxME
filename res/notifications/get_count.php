<?php
require_once '../database.php';
require_once '../notifications.php';
require_once '../session_helper.php';

// Initialize shared session
initializeSharedSession();

header('Content-Type: application/json');

try {
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('User not authenticated', 401);
    }

    $notificationManager = new NotificationManager($pdo);
    $count = $notificationManager->getUnreadCountForUser((int)$_SESSION['user_id']);
    echo json_encode(['count' => (int)$count]);
} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode(['count' => 0]);
}
?>