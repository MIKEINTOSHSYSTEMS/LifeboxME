<?php
// res/notifications/get_count.php
require_once '../database.php';
require_once '../notifications.php';
require_once '../session_helper.php';

header('Content-Type: application/json');

try {
    if (!is_logged_in()) {
        throw new Exception('User not authenticated', 401);
    }

    $notificationManager = new NotificationManager($pdo);
    $count = $notificationManager->getUserUnreadCount();
    echo json_encode(['count' => $count]);
} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode(['count' => 0]);
}
