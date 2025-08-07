<?php
// /api/auth/login_handler.php

// Include required files
require_once __DIR__ . '/session_helper.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/../../app/include/dbcommon.php';
require_once __DIR__ . '/../../app/classes/security.php';
require_once __DIR__ . '/../../app/include/appsettings.php';

// Set content type
header('Content-Type: application/json');

// Process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF token
    verify_csrf_token();

    // Get input
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $captcha = $_POST['captcha'] ?? '';

    // Validate input
    if (empty($username) || empty($password)) {
        echo json_encode(['success' => false, 'error' => 'Username and password are required']);
        exit;
    }

    // Verify captcha if enabled
    if (GetGlobalData("CaptchaSettings") && GetGlobalData("CaptchaSettings")["type"] == 1) {
        if (empty($captcha)) {
            echo json_encode(['success' => false, 'error' => 'CAPTCHA verification required']);
            exit;
        }

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => GetGlobalData("CaptchaSettings")["secretKey"],
            'response' => $captcha,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);

        if (!$response->success) {
            echo json_encode(['success' => false, 'error' => 'CAPTCHA verification failed']);
            exit;
        }
    }

    try {
        // Use PHPRunner's security system for authentication
        $success = Security::login($username, $password, false, true);

        if ($success) {
            // Get current user data from PHPRunner's session
            $userId = Security::getUserName();
            $displayName = Security::getDisplayName();
            $accessLevel = $_SESSION['AccessLevel'] ?? ACCESS_LEVEL_USER;

            // Set session variables
            $_SESSION['UserID'] = $userId;
            $_SESSION['UserName'] = $displayName;
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $displayName;
            $_SESSION['AccessLevel'] = $accessLevel;

            // Determine admin status
            $is_admin = ($accessLevel === ACCESS_LEVEL_ADMIN) || Security::isAdmin();
            $_SESSION['is_admin'] = $is_admin;

            // Regenerate session ID for security
            session_regenerate_id(true);

            // Set CSRF protection cookie
            $runnerSession = generatePassword(20);
            $_SESSION['runnerSession'] = $runnerSession;
            setProjectCookie('runnerSession', $runnerSession, 0, true, true);

            // Response with user data
            echo json_encode([
                'success' => true,
                'user' => get_current_user(),
                'session' => [
                    'runnerSession' => $runnerSession,
                    'session_id' => session_id()
                ],
                'redirect' => 'index.php'
            ]);
            exit;
        } else {
            echo json_encode([
                'success' => false,
                'error' => 'Invalid credentials'
            ]);
            exit;
        }
    } catch (Exception $e) {
        error_log('Login error: ' . $e->getMessage());
        echo json_encode([
            'success' => false,
            'error' => 'Authentication error'
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
