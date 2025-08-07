<?php
// /api/login.php

require_once __DIR__ . '/../../../app/include/dbcommon.php';
require_once __DIR__ . '/session_helper.php';

// Redirect if already logged in
if (is_logged_in()) {
    header('Location: index.php');
    exit;
}

// Get reCAPTCHA site key if enabled
$captchaEnabled = false;
$captchaSiteKey = '';
if (GetGlobalData("CaptchaSettings") && GetGlobalData("CaptchaSettings")["type"] == 1) {
    $captchaEnabled = true;
    $captchaSiteKey = GetGlobalData("CaptchaSettings")["siteKey"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PHPRunner Session Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php if ($captchaEnabled): ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
    <style>
        :root {
            --primary: #1e6a7d;
            --secondary: #ff6b35;
        }

        body {
            background: linear-gradient(135deg, #1e6a7d 0%, #155263 100%);
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
        }

        .login-card {
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border: none;
            overflow: hidden;
        }

        .login-header {
            background: var(--primary);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .login-body {
            padding: 30px;
            background: white;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(30, 106, 125, 0.25);
        }

        .btn-login {
            background: var(--primary);
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background: #155263;
            transform: translateY(-2px);
        }

        .logo {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: white;
        }

        .g-recaptcha {
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-lock"></i>
                </div>
                <h2>PHPRunner Session Manager</h2>
                <p>Sign in to your account</p>
            </div>

            <div class="login-body">
                <form id="loginForm">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>

                    <?php if ($captchaEnabled): ?>
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="<?= $captchaSiteKey ?>"></div>
                        </div>
                    <?php endif; ?>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-login">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </div>

                    <div class="text-center">
                        <div id="message" class="mt-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const captcha = grecaptcha ? grecaptcha.getResponse() : '';

            const messageDiv = document.getElementById('message');
            messageDiv.innerHTML = '<div class="spinner-border text-primary" role="status"></div>';
            messageDiv.className = 'text-center';

            const formData = new FormData();
            formData.append('username', username);
            formData.append('password', password);
            formData.append('csrf_token', '<?= $_SESSION['csrf_token'] ?? '' ?>');
            if (captcha) formData.append('captcha', captcha);

            fetch('login_handler.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        messageDiv.innerHTML = '<div class="alert alert-success">Login successful! Redirecting...</div>';
                        setTimeout(() => {
                            window.location.href = 'index.php';
                        }, 1500);
                    } else {
                        messageDiv.innerHTML = `<div class="alert alert-danger">${data.error || 'Login failed'}</div>`;
                        if (grecaptcha) grecaptcha.reset();
                    }
                })
                .catch(error => {
                    messageDiv.innerHTML = `<div class="alert alert-danger">Error: ${error.message}</div>`;
                    if (grecaptcha) grecaptcha.reset();
                });
        });
    </script>
</body>

</html>