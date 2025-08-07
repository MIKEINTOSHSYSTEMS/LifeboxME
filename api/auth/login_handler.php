<?php
require_once 'database.php';
require_once 'session_helper.php';

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
            // Set session variables for both systems
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

            // Set runnerSession in both cookie and session
            //$runnerSession = generatePassword(20);
            $runnerSession = bin2hex(random_bytes(20));
            $_SESSION['runnerSession'] = $runnerSession;
            setcookie(
                'runnerSession',
                $runnerSession,
                [
                    'expires' => time() + 15 * 60,
                    'path' => '/',
                    'domain' => $_SERVER['HTTP_HOST'],
                    'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
                    'httponly' => true,
                    'samesite' => 'strict'
                    //'samesite' => 'Lax'
                ]
            );

            // Regenerate session ID for security (matches PHPRunner behavior)
            session_regenerate_id(true);

            // Set a flag that this is a valid session
            $_SESSION['validated'] = true;

            echo json_encode([
                'success' => true,
                'redirect' => '../database/index.php' // Adjust path as needed
            ]);
            exit;
        } else {
            echo json_encode([
                'success' => false,
                'error' => 'Invalid credentials'
            ]);
            exit;
        }
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'error' => 'Database error: ' . $e->getMessage()
        ]);
        exit;
    }
}

// If not POST request
echo json_encode([
    'success' => false,
    'error' => 'Invalid request method'
]);
exit;
