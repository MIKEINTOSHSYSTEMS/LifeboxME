<?php
require __DIR__ . '/../src/db.php'; // Include database connection first
require __DIR__ . '/session_helper.php';

// Redirect if already logged in
if (is_logged_in()) {
  header('Location: dashboard.php');
  exit;
}

$error = '';

if (!empty($_POST)) {
  $user = trim($_POST['username'] ?? '');
  $pass = trim($_POST['password'] ?? '');

  // Authenticate user against database
  $authenticated_user = authenticate_user($user, $pass, $pdo);

  if ($authenticated_user) {
    // Set PHPRunner-compatible session variables
    $_SESSION['UserID'] = (int)$authenticated_user['ID'];
    $_SESSION['UserName'] = $authenticated_user['username'];

    // Store ALL user details in session for sidebar display
    $_SESSION['user_details'] = $authenticated_user; // Store the entire user array

    error_log("Login successful for user: " . $authenticated_user['username']); // Debug logging
    error_log("Session user details: " . print_r($_SESSION['user_details'], true)); // Debug logging

    header('Location: dashboard.php');
    exit;
  } else {
    $error = "Invalid credentials";
  }
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login - LifeBox Test Center</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .card-header {
      background: linear-gradient(135deg, #038DA9 0%, #025e73 100%);
      color: white;
      border-radius: 15px 15px 0 0 !important;
      text-align: center;
    }

    .btn-primary {
      background: linear-gradient(135deg, #038DA9 0%, #025e73 100%);
      border: none;
      border-radius: 25px;
      padding: 10px 30px;
      font-weight: 600;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #025e73 0%, #038DA9 100%);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card login-card">
          <div class="card-header">
            <h4 class="mb-0"><i class="bi bi-shield-lock me-2"></i>LifeBox Test Center</h4>
          </div>
          <div class="card-body p-4">
            <h5 class="card-title text-center mb-4">Login to Admin Panel</h5>

            <?php if (!empty($error)): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i><?= htmlspecialchars($error) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <form method="post">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>
              </div>

              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-key"></i></span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">
                  <i class="bi bi-box-arrow-in-right me-2"></i>Login
                </button>
              </div>
            </form>

            <div class="text-center mt-4">
              <small class="text-muted">
                <i class="bi bi-info-circle me-1"></i>
                Enter your credentials to access the admin panel
              </small>
            </div>
          </div>
        </div>

        <div class="text-center mt-3">
          <small class="text-white">
            &copy; <?= date('Y') ?> LifeBox Test Center. All rights reserved.
          </small>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple form validation
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function(e) {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!username || !password) {
          e.preventDefault();
          alert('Please fill in both username and password fields.');
          return false;
        }
      });
    });
  </script>
</body>

</html>