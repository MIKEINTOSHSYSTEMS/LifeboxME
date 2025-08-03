<?php
require_once 'database.php';

class NotificationManager
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Get all active notifications for a specific user with read status
    public function getActiveNotificationsForUser($userId)
    {
        $now = date('Y-m-d H:i:s');
        $sql = "SELECT n.*, 
                (SELECT COUNT(*) FROM notification_reads nr 
                 WHERE nr.notification_id = n.id AND nr.user_id = :user_id) > 0 AS is_read
                FROM system_notifications n
                WHERE n.is_active = TRUE 
                AND (n.start_date IS NULL OR n.start_date <= :now)
                AND (n.end_date IS NULL OR n.end_date >= :now)
                ORDER BY n.priority DESC, n.created_at DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now, ':user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Count unread notifications for a user
    public function getUnreadCountForUser($userId)
    {
        $now = date('Y-m-d H:i:s');
        $sql = "SELECT COUNT(n.id) as count
                FROM system_notifications n
                WHERE n.is_active = TRUE 
                AND (n.start_date IS NULL OR n.start_date <= :now)
                AND (n.end_date IS NULL OR n.end_date >= :now)
                AND NOT EXISTS (
                    SELECT 1 FROM notification_reads nr 
                    WHERE nr.notification_id = n.id AND nr.user_id = :user_id
                )";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now, ':user_id' => $userId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }

    // Mark a single notification as read for a user
    public function markNotificationAsRead($notificationId, $userId)
    {
        // First check if already read to avoid duplicates
        $checkSql = "SELECT id FROM notification_reads 
                     WHERE notification_id = :notification_id 
                     AND user_id = :user_id";
        $checkStmt = $this->pdo->prepare($checkSql);
        $checkStmt->execute([
            ':notification_id' => $notificationId,
            ':user_id' => $userId
        ]);

        if ($checkStmt->fetch()) {
            return true; // Already marked as read
        }

        $sql = "INSERT INTO notification_reads (notification_id, user_id) 
                VALUES (:notification_id, :user_id)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':notification_id' => $notificationId,
            ':user_id' => $userId
        ]);
    }

    // Mark all notifications as read for a user
    public function markAllNotificationsAsRead($userId)
    {
        $now = date('Y-m-d H:i:s');

        // Get all unread notifications for this user
        $sql = "SELECT n.id
                FROM system_notifications n
                WHERE n.is_active = TRUE 
                AND (n.start_date IS NULL OR n.start_date <= :now)
                AND (n.end_date IS NULL OR n.end_date >= :now)
                AND NOT EXISTS (
                    SELECT 1 FROM notification_reads nr 
                    WHERE nr.notification_id = n.id AND nr.user_id = :user_id
                )";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now, ':user_id' => $userId]);
        $unreadNotifications = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Mark each as read
        foreach ($unreadNotifications as $notification) {
            $this->markNotificationAsRead($notification['id'], $userId);
        }

        return count($unreadNotifications);
    }

    // Create a new notification
    public function createNotification($data)
    {
        $sql = "INSERT INTO system_notifications 
                (title, content, notification_type, is_active, start_date, end_date, priority, action_url, action_text) 
                VALUES (:title, :content, :type, :active, :start, :end, :priority, :url, :action_text)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':title' => $data['title'],
            ':content' => $data['content'],
            ':type' => $data['type'],
            ':active' => $data['is_active'] ?? true,
            ':start' => $data['start_date'] ?? null,
            ':end' => $data['end_date'] ?? null,
            ':priority' => $data['priority'] ?? 0,
            ':url' => $data['action_url'] ?? null,
            ':action_text' => $data['action_text'] ?? null
        ]);
    }

    // Get all active notifications (for display)
    public function getActiveNotifications()
    {
        $now = date('Y-m-d H:i:s');
        $sql = "SELECT * FROM system_notifications 
                WHERE is_active = TRUE 
                AND (start_date IS NULL OR start_date <= :now)
                AND (end_date IS NULL OR end_date >= :now)
                ORDER BY priority DESC, created_at DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get all notifications (for admin)
    public function getAllNotifications()
    {
        $sql = "SELECT * FROM system_notifications ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Update a notification
    public function updateNotification($id, $data)
    {
        $sql = "UPDATE system_notifications SET 
                title = :title,
                content = :content,
                notification_type = :type,
                is_active = :active,
                start_date = :start,
                end_date = :end,
                priority = :priority,
                action_url = :url,
                action_text = :action_text,
                updated_at = CURRENT_TIMESTAMP
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':title' => $data['title'],
            ':content' => $data['content'],
            ':type' => $data['type'],
            ':active' => $data['is_active'] ?? true,
            ':start' => $data['start_date'] ?? null,
            ':end' => $data['end_date'] ?? null,
            ':priority' => $data['priority'] ?? 0,
            ':url' => $data['action_url'] ?? null,
            ':action_text' => $data['action_text'] ?? null
        ]);
    }

    // Toggle notification status
    public function toggleNotification($id, $status)
    {
        $sql = "UPDATE system_notifications SET is_active = :status WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id, ':status' => $status]);
    }

    // Delete a notification
    public function deleteNotification($id)
    {
        $sql = "DELETE FROM system_notifications WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    // Helper function to get notification by ID
    public function getNotificationById($id)
    {
        $sql = "SELECT * FROM system_notifications WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Get count of active notifications
    public function getNotificationCount()
    {
        $now = date('Y-m-d H:i:s');
        $sql = "SELECT COUNT(*) as count FROM system_notifications 
            WHERE is_active = TRUE 
            AND (start_date IS NULL OR start_date <= :now)
            AND (end_date IS NULL OR end_date >= :now)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }

    // If you want to implement read status later
    public function markAsRead($notificationId, $userId)
    {
        $sql = "INSERT INTO notification_reads (notification_id, user_id) 
            VALUES (:notification_id, :user_id)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':notification_id' => $notificationId,
            ':user_id' => $userId
        ]);
    }

    // Add this method to NotificationManager class
    public function getUserNotifications($userId)
    {
        $now = date('Y-m-d H:i:s');
        $sql = "SELECT n.*, 
            (nr.user_id IS NOT NULL) AS is_read
            FROM system_notifications n
            LEFT JOIN notification_reads nr ON n.id = nr.notification_id AND nr.user_id = :user_id
            WHERE n.is_active = TRUE 
            AND (n.start_date IS NULL OR n.start_date <= :now)
            AND (n.end_date IS NULL OR n.end_date >= :now)
            ORDER BY n.priority DESC, n.created_at DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now, ':user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Add this old method to get active notifications for the current user

    /*
    public function getUserNotifications($userId = null)
    {
        if ($userId === null) {
            if (!isset($_SESSION['user_id'])) {
                return [];
            }
            $userId = (int)$_SESSION['user_id'];
        }

        $now = date('Y-m-d H:i:s');
        $sql = "SELECT n.*, 
                (SELECT COUNT(*) FROM notification_reads nr 
                 WHERE nr.notification_id = n.id AND nr.user_id = :user_id) > 0 AS is_read
                FROM system_notifications n
                WHERE n.is_active = TRUE 
                AND (n.start_date IS NULL OR n.start_date <= :now)
                AND (n.end_date IS NULL OR n.end_date >= :now)
                ORDER BY n.priority DESC, n.created_at DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now, ':user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    */

    // Add this method to get unread count for the current user
    public function getUserUnreadCount($userId = null)
    {
        if ($userId === null) {
            if (!isset($_SESSION['UserID'])) {
                return 0;
            }
            $userId = (int)$_SESSION['UserID'];
        }

        $now = date('Y-m-d H:i:s');
        $sql = "SELECT COUNT(n.id) as count
                FROM system_notifications n
                WHERE n.is_active = TRUE 
                AND (n.start_date IS NULL OR n.start_date <= :now)
                AND (n.end_date IS NULL OR n.end_date >= :now)
                AND NOT EXISTS (
                    SELECT 1 FROM notification_reads nr 
                    WHERE nr.notification_id = n.id AND nr.user_id = :user_id
                )";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':now' => $now, ':user_id' => $userId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return (int)$result['count'];
    }
}
?>