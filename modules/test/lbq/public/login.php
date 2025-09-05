<?php
session_start();
require __DIR__ . '/../src/db.php';

// Redirect if already logged in
if (!empty($_SESSION['participant_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (!empty($email)) {
        // Check if email exists in training_participants table
        $stmt = $pdo->prepare("SELECT * FROM training_participants WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $participant = $stmt->fetch();

        if ($participant) {
            // Set session and redirect to dashboard
            $_SESSION['participant_id'] = $participant['participant_id'];
            $_SESSION['participant_name'] = $participant['first_name'] . ' ' . $participant['last_name'];
            $_SESSION['participant_email'] = $participant['email'];

            header('Location: dashboard.php');
            exit;
        } else {
            $error = "No account found with that email address.";
        }
    } else {
        $error = "Please enter your email address.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - LifeBox Test Center</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
        }

        .login-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        :root {
            --primary-color: #0079a5;
            --secondary-color: #1e6a7d;
            --accent-color: #ff6b35;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --info-color: #17a2b8;
        }

        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        @media (min-width: 768px) {
            .px-md-4 {
                padding-right: 7.5rem !important;
                padding-left: 1.5rem !important;
            }
        }

        .text-dark {

            color: var(--primary-color) !important;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card login-card">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <img src="../lblogo-dark.svg" alt="Logo" height="70" class="me-2">
                                <h2 class="card-title text-dark">Test Center</h2>
                                <p class="text-muted">Sign in to access your tests</p>
                            </div>

                            <?php if (!empty($error)): ?>
                                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                            <?php endif; ?>

                            <form method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email address" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-warning w-100 py-2">Sign In</button>
                            </form>

                            <div>
                                <a href="register.php" class="btn btn-link mt-3 d-block text-center">Register for an account</a>
                            </div>

                            <div class="text-center mt-4">
                                <p class="text-muted">
                                    Don't have an account?<br>
                                    <small>Your email should be registered in our training system. Contact your administrator if you can't access your account.</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>