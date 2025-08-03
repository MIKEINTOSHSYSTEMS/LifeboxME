<?php
// res/notifications/mark_read.php
require_once '../database.php';
require_once '../notifications.php';
require_once '../session_helper.php';

header('Content-Type: application/json');

try {
    if (!is_logged_in()) {
        throw new Exception('User not authenticated', 401);
    }

    $input = json_decode(file_get_contents('php://input'), true);
    $notificationManager = new NotificationManager($pdo);
    $userId = (int)$_SESSION['user_id'];
    
    if (isset($input['mark_all']) && $input['mark_all']) {
        $count = $notificationManager->markAllNotificationsAsRead($userId);
        echo json_encode(['success' => true, 'count' => $count]);
    } elseif (isset($input['notification_id'])) {
        $success = $notificationManager->markNotificationAsRead(
            (int)$input['notification_id'], 
            $userId
        );
        echo json_encode(['success' => $success]);
    } else {
        throw new Exception('Invalid request', 400);
    }
} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>