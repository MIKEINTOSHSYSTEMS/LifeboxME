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
    $userId = (int)$_SESSION['user_id'];
    
    $input = json_decode(file_get_contents('php://input'), true) ?: [];
    
    if (isset($input['notification_id'])) {
        // Mark single notification as read
        $success = $notificationManager->markNotificationAsRead(
            (int)$input['notification_id'], 
            $userId
        );
        echo json_encode(['success' => (bool)$success]);
    } else {
        // Mark all notifications as read
        $count = $notificationManager->markAllNotificationsAsRead($userId);
        echo json_encode(['success' => true, 'count' => (int)$count]);
    }
} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>