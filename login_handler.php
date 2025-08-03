<?php
require_once 'res/database.php';
require_once 'res/session_helper.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        // Fetch user from database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['UserID'] = $user['ID'];
            $_SESSION['UserName'] = $user['username'];
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['username'] = $user['username'];

            // Get user's group to determine admin status
            $groupStmt = $pdo->prepare("SELECT \"GroupID\" FROM lifeboxme_ugmembers WHERE \"UserName\" = ?");
            $groupStmt->execute([$username]);
            $group = $groupStmt->fetch(PDO::FETCH_ASSOC);

            $is_admin = ($group && $group['GroupID'] == -1);
            $_SESSION['AccessLevel'] = $is_admin ? ACCESS_LEVEL_ADMIN : ACCESS_LEVEL_USER;
            $_SESSION['is_admin'] = $is_admin;

            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid credentials']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
}
