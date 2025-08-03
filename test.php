<?php
require_once 'res/database.php';
require_once 'res/notifications.php';

$notificationManager = new NotificationManager($pdo);
$notifications = $notificationManager->getActiveNotifications();

echo "<pre>";
print_r($notifications);
echo "</pre>";
?>

<?php
echo phpinfo();
?>