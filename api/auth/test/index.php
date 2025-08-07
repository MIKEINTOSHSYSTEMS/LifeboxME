<?php
// /api/index.php

require_once __DIR__ . '/session_helper.php';

// Check if user is logged in
$loggedIn = is_logged_in();
$user = get_current_user();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPRunner Session Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1e6a7d;
            --secondary: #ff6b35;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4ecfb 100%);
            min-height: 100vh;
            padding-top: 20px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background: var(--primary);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: #155263;
            transform: translateY(-2px);
        }

        .btn-logout {
            background: var(--secondary);
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
        }

        .user-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .user-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            margin: 0 auto 20px;
        }

        .session-info {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .test-section {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">PHPRunner Session Manager</h1>
            <p class="lead text-muted">Manage and test authentication sessions across applications</p>
        </div>

        <!-- User Info Card -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8">
                <div class="user-card">
                    <div class="text-center">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>

                        <?php if ($loggedIn): ?>
                            <h2 class="mb-3">Welcome, <?= htmlspecialchars($user['username']) ?></h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="badge bg-<?= $user['is_admin'] ? 'danger' : 'primary' ?> p-2 fs-6">
                                    <?= $user['is_admin'] ? 'Administrator' : 'User' ?>
                                </span>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-id-card feature-icon"></i>
                                            <h5>User ID</h5>
                                            <p class="text-muted"><?= $user['id'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-shield-alt feature-icon"></i>
                                            <h5>Access Level</h5>
                                            <p class="text-muted"><?= $user['access_level'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="?logout=1" class="btn btn-logout btn-lg mt-3">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a>
                        <?php else: ?>
                            <h2 class="mb-3">Not Logged In</h2>
                            <p class="text-muted mb-4">Please login to access your account</p>
                            <a href="login.php" class="btn btn-primary btn-lg px-4">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Session Information -->
        <?php if ($loggedIn): ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="session-info">
                        <h4 class="mb-4 text-primary"><i class="fas fa-key me-2"></i>Session Information</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Session ID</td>
                                        <td><code><?= session_id() ?></code></td>
                                    </tr>
                                    <tr>
                                        <td>Runner Session</td>
                                        <td><code><?= $_SESSION['runnerSession'] ?? 'Not set' ?></code></td>
                                    </tr>
                                    <tr>
                                        <td>Session Duration</td>
                                        <td><?= round((time() - $_SESSION['session_start'] ?? time()) / 60, 1) ?> minutes</td>
                                    </tr>
                                    <tr>
                                        <td>User Agent</td>
                                        <td><?= $_SERVER['HTTP_USER_AGENT'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>IP Address</td>
                                        <td><?= $_SERVER['REMOTE_ADDR'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Testing Tools -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div class="test-section">
                    <h4 class="mb-4 text-primary"><i class="fas fa-flask me-2"></i>Testing Tools</h4>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-cookie me-2"></i>Cookie Inspector</h5>
                                    <p class="card-text">View and verify session cookies</p>
                                    <button class="btn btn-sm btn-outline-primary" id="showCookies">
                                        Show Cookies
                                    </button>
                                    <div id="cookieList" class="mt-3 d-none">
                                        <pre class="bg-light p-3 rounded"></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-shield-alt me-2"></i>CSRF Tester</h5>
                                    <p class="card-text">Test CSRF protection mechanisms</p>
                                    <button class="btn btn-sm btn-outline-primary" id="testCsrf">
                                        Test Protection
                                    </button>
                                    <div id="csrfResult" class="mt-3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-database me-2"></i>User Lookup</h5>
                                    <p class="card-text">Retrieve user data from database</p>
                                    <?php if ($loggedIn): ?>
                                        <button class="btn btn-sm btn-outline-primary" id="fetchUserData">
                                            Fetch My Data
                                        </button>
                                        <div id="userDataResult" class="mt-3"></div>
                                    <?php else: ?>
                                        <p class="text-muted">Login required</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-exchange-alt me-2"></i>Session Transfer</h5>
                                    <p class="card-text">Test session transfer to external apps</p>
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control" placeholder="App URL" id="appUrl">
                                        <button class="btn btn-outline-primary" id="transferSession">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show cookies
            document.getElementById('showCookies').addEventListener('click', function() {
                const cookieList = document.getElementById('cookieList');
                const pre = cookieList.querySelector('pre');

                if (cookieList.classList.contains('d-none')) {
                    pre.textContent = document.cookie || 'No cookies found';
                    cookieList.classList.remove('d-none');
                } else {
                    cookieList.classList.add('d-none');
                }
            });

            // Test CSRF protection
            document.getElementById('testCsrf').addEventListener('click', function() {
                const resultDiv = document.getElementById('csrfResult');
                resultDiv.innerHTML = '<div class="spinner-border text-primary" role="status"></div>';

                fetch('login_handler.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            test: 'csrf'
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error && data.error.includes('CSRF')) {
                            resultDiv.innerHTML = `
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                CSRF protection is working correctly
                            </div>
                        `;
                        } else {
                            resultDiv.innerHTML = `
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                CSRF protection test failed
                            </div>
                        `;
                        }
                    })
                    .catch(error => {
                        resultDiv.innerHTML = `
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Error: ${error.message}
                        </div>
                    `;
                    });
            });

            // Fetch user data
            <?php if ($loggedIn): ?>
                document.getElementById('fetchUserData').addEventListener('click', function() {
                    const resultDiv = document.getElementById('userDataResult');
                    resultDiv.innerHTML = '<div class="spinner-border text-primary" role="status"></div>';

                    fetch('auth/database.php?action=get_user&id=<?= $user['id'] ?>')
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                let html = '<ul class="list-group">';
                                for (const [key, value] of Object.entries(data.user)) {
                                    html += `
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <strong>${key}:</strong>
                                    <span>${value || 'N/A'}</span>
                                </li>
                            `;
                                }
                                html += '</ul>';
                                resultDiv.innerHTML = html;
                            } else {
                                resultDiv.innerHTML = `
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                ${data.error || 'Failed to fetch user data'}
                            </div>
                        `;
                            }
                        })
                        .catch(error => {
                            resultDiv.innerHTML = `
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Error: ${error.message}
                        </div>
                    `;
                        });
                });
            <?php endif; ?>

            // Transfer session
            document.getElementById('transferSession').addEventListener('click', function() {
                const appUrl = document.getElementById('appUrl').value;
                if (!appUrl) {
                    alert('Please enter an application URL');
                    return;
                }

                // In a real implementation, you would pass the session token securely
                window.open(`${appUrl}?session_token=${encodeURIComponent('<?= session_id() ?>')}`, '_blank');
            });
        });
    </script>
</body>

</html>