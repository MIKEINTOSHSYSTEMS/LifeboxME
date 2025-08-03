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
    $notifications = $notificationManager->getActiveNotificationsForUser((int)$_SESSION['user_id']);
    
    // Format for display
    $result = array_map(function($notification) {
        return [
            'id' => (int)$notification['id'],
            'content' => (string)$notification['content'],
            'created_at' => (string)$notification['created_at'],
            'is_read' => (bool)$notification['is_read']
        ];
    }, $notifications);
    
    echo json_encode($result);
} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>