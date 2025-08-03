<?php
// login_handler.php
require_once 'res/database.php';
require_once 'res/session_helper.php';

header('Content-Type: application/json');

// PHPRunner authentication simulation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        // Validate credentials (use your actual PHPRunner auth logic)
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            // Set session variables like PHPRunner
            $_SESSION['UserID'] = $user['id'];
            $_SESSION['UserName'] = $user['username'];
            $_SESSION['AccessLevel'] = $user['access_level'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = ($user['access_level'] === ACCESS_LEVEL_ADMIN);

            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid credentials']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Database error']);
    }
    exit;
}
