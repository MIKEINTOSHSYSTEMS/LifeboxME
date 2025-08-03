<?php
// res/notifications/get_active.php
require_once '../database.php';
require_once '../notifications.php';
require_once '../session_helper.php';

header('Content-Type: application/json');

if (!is_logged_in()) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

try {
    $notificationManager = new NotificationManager($pdo);
    $notifications = $notificationManager->getUserNotifications($_SESSION['user_id']);

    echo json_encode(array_map(function ($notification) {
        return [
            'id' => (int)$notification['id'],
            'content' => $notification['content'],
            'created_at' => $notification['created_at'],
            'is_read' => (bool)$notification['is_read'],
            'type' => $notification['notification_type']
        ];
    }, $notifications));
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}