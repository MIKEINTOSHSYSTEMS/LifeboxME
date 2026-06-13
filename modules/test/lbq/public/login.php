<?php
// modules/test/lbq/public/login.php
session_start();

require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/otp_functions.php';

// -----------------------------------------------------------------------
// Redirect if already logged in
// -----------------------------------------------------------------------
if (!empty($_SESSION['participant_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error   = '';
$success = '';
$step    = 'email'; // 'email' or 'otp'

if (isset($_SESSION['otp_pending']) && $_SESSION['otp_pending'] === true) {
    $step = 'otp';
}

// -----------------------------------------------------------------------
// Handle POST actions
// -----------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // ===================================================================
    // STEP 1 — Send OTP
    // ===================================================================
    if ($action === 'send_otp') {
        $email = trim($_POST['email'] ?? '');

        if (empty($email)) {
            $error = "Please enter your email address.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Please enter a valid email address.";
        } else {
            // Check if email exists in training_participants
            $stmt = $pdo->prepare("SELECT * FROM training_participants WHERE email = :email");
            $stmt->execute([':email' => $email]);
            $participant = $stmt->fetch();

            if (!$participant) {
                $error = "No account found with that email address. Please register first.";
            } elseif (!can_send_otp($pdo, $email, 'login', 60)) {
                $error = "Please wait at least 60 seconds before requesting another code.";
            } else {
                $otpCode = generate_otp();
                $otpId   = store_otp($pdo, $email, $otpCode, 'login', 15);

                if ($otpId === false) {
                    $error = "Failed to generate login code. Please try again.";
                } else {
                    $firstName = $participant['first_name'] ?? 'User';
                    $emailSent = send_otp_email($pdo, $email, $firstName, $otpCode);

                    // Store session state regardless of email success
                    $_SESSION['otp_pending']          = true;
                    $_SESSION['otp_email']            = $email;
                    $_SESSION['otp_participant_name'] = trim(
                        ($participant['first_name'] ?? '') . ' ' . ($participant['last_name'] ?? '')
                    );
                    $step = 'otp';

                    if ($emailSent) {
                        $success = "A 6-character login code has been sent to <strong>"
                            . htmlspecialchars($email, ENT_QUOTES, 'UTF-8')
                            . "</strong>. Please check your inbox (and spam folder).";
                    } else {
                        error_log("OTP email failed but continuing to OTP step for: {$email}");
                        $success = "A login code has been generated. "
                            . "If you don't receive an email within a minute, please try again or contact support.";
                    }
                }
            }
        }
    }

    // ===================================================================
    // STEP 2 — Verify OTP
    // ===================================================================
    elseif ($action === 'verify_otp') {
        $email   = $_SESSION['otp_email'] ?? '';
        $otpCode = strtoupper(trim($_POST['otp_code'] ?? ''));
        $remember = isset($_POST['remember_me']);

        if (empty($email)) {
            unset($_SESSION['otp_pending'], $_SESSION['otp_email'], $_SESSION['otp_participant_name']);
            $step  = 'email';
            $error = "Your session has expired. Please start again.";
        } elseif (empty($otpCode)) {
            $step  = 'otp';
            $error = "Please enter the login code.";
        } elseif (strlen($otpCode) !== 6) {
            $step  = 'otp';
            $error = "The login code must be 6 characters.";
        } else {
            $result = verify_otp($pdo, $email, $otpCode, 'login');

            if ($result['valid']) {
                $participant = $result['participant'];

                // Set session
                $_SESSION['participant_id']    = $participant['participant_id'];
                $_SESSION['participant_name']  = trim(
                    ($participant['first_name'] ?? '') . ' ' . ($participant['last_name'] ?? '')
                );
                $_SESSION['participant_email'] = $participant['email'];

                // Remember Me cookie (30 days)
                if ($remember) {
                    $token       = bin2hex(random_bytes(32));
                    $cookieValue = $participant['participant_id'] . ':' . $token;
                    setcookie('lb_remember', $cookieValue, [
                        'expires'  => time() + (30 * 24 * 60 * 60),
                        'path'     => '/',
                        'domain'   => '',
                        'secure'   => isset($_SERVER['HTTPS']),
                        'httponly' => true,
                        'samesite' => 'Lax',
                    ]);
                }

                // Clear OTP session vars
                unset(
                    $_SESSION['otp_pending'],
                    $_SESSION['otp_email'],
                    $_SESSION['otp_participant_name'],
                    $_SESSION['dev_otp_code']
                );

                header('Location: dashboard.php');
                exit;
            } else {
                $step  = 'otp';
                $error = $result['message'];

                // If OTP is completely invalid / expired, drop back to email step
                if (
                    stripos($result['message'], 'No valid OTP found')        !== false ||
                    stripos($result['message'], 'Maximum attempts exceeded') !== false
                ) {
                    unset($_SESSION['otp_pending'], $_SESSION['otp_email'], $_SESSION['otp_participant_name']);
                    $step = 'email';
                }
            }
        }
    }

    // ===================================================================
    // RESEND OTP
    // ===================================================================
    elseif ($action === 'resend_otp') {
        $email = $_SESSION['otp_email'] ?? '';

        if (empty($email)) {
            $step  = 'email';
            $error = "Session expired. Please start again.";
        } elseif (!can_send_otp($pdo, $email, 'login', 60)) {
            $step  = 'otp';
            $error = "Please wait at least 60 seconds before requesting another code.";
        } else {
            $stmt = $pdo->prepare("SELECT * FROM training_participants WHERE email = :email");
            $stmt->execute([':email' => $email]);
            $participant = $stmt->fetch();

            $step = 'otp';

            if ($participant) {
                $otpCode = generate_otp();
                $otpId   = store_otp($pdo, $email, $otpCode, 'login', 15);

                if ($otpId !== false) {
                    $firstName = $participant['first_name'] ?? 'User';
                    $emailSent = send_otp_email($pdo, $email, $firstName, $otpCode);

                    if ($emailSent) {
                        $success = "A new login code has been sent to <strong>"
                            . htmlspecialchars($email, ENT_QUOTES, 'UTF-8')
                            . "</strong>.";
                    } else {
                        $success = "A new code has been generated. Please try again if you don't receive it.";
                    }
                } else {
                    $error = "Failed to generate a new code. Please try again.";
                }
            } else {
                $error = "Account not found. Please start the login process again.";
                unset($_SESSION['otp_pending'], $_SESSION['otp_email'], $_SESSION['otp_participant_name']);
                $step = 'email';
            }
        }
    }
} // end POST handling

// -----------------------------------------------------------------------
// If we're on the OTP step but the participant name is missing, fetch it
// -----------------------------------------------------------------------
if ($step === 'otp' && empty($_SESSION['otp_participant_name']) && !empty($_SESSION['otp_email'])) {
    $stmt = $pdo->prepare("SELECT first_name, last_name FROM training_participants WHERE email = :email");
    $stmt->execute([':email' => $_SESSION['otp_email']]);
    $p = $stmt->fetch();
    if ($p) {
        $_SESSION['otp_participant_name'] = trim($p['first_name'] . ' ' . $p['last_name']);
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
        :root {
            --primary-color: #0079a5;
            --success-color: #28a745;
            --danger-color: #dc3545;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%);
            color: #343a40;
            min-height: 100vh;
        }

        .login-container {
            margin-top: 47px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }

        .login-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
            overflow: hidden;
        }

        .login-card .card-body {
            padding: 2.5rem;
        }

        h2 {
            font-size: 1.8rem;
            color: #0079a3;
        }

        /* OTP boxes */
        .otp-input-group {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin: 20px 0;
        }

        .otp-input-group input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: "Courier New", monospace;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            transition: border-color .2s, box-shadow .2s;
            text-transform: uppercase;
        }

        .otp-input-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 121, 165, .25);
            outline: none;
        }

        .otp-input-group input.filled {
            border-color: var(--success-color);
            background-color: #f0fff4;
        }

        .email-display {
            background-color: #f0f8ff;
            border: 1px solid #b8daff;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 15px;
            text-align: center;
        }

        .email-display .email-address {
            font-weight: 600;
            color: var(--primary-color);
        }

        .timer-text {
            text-align: center;
            font-size: .9em;
            color: #6c757d;
            margin-top: 10px;
        }

        .timer-text .countdown {
            font-weight: bold;
            color: var(--danger-color);
        }

        @media (max-width: 576px) {
            .otp-input-group input {
                width: 40px;
                height: 50px;
                font-size: 20px;
            }

            .login-card .card-body {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="container">
            <div class="row justify-content-center">

                <!-- ===================== LOGIN CARD ===================== -->
                <div class="col-md-6 col-lg-5">
                    <div class="card login-card">
                        <div class="card-body">

                            <!-- Logo / title -->
                            <div class="text-center mb-4">
                                <img src="../lblogo-dark.svg" alt="Lifebox Logo" height="60" class="me-2">
                                <h2 class="mt-2">Test Center</h2>
                                <p class="text-muted">
                                    <?= $step === 'email' ? 'Sign in to access your tests' : 'Enter the code sent to your email' ?>
                                </p>
                            </div>

                            <!-- Error alert -->
                            <?php if (!empty($error)): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                    <?= $error ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <!-- Success alert -->
                            <?php if (!empty($success)): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle me-2"></i>
                                    <?= $success ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <!-- ==================== STEP 1: Email form ==================== -->
                            <?php if ($step === 'email'): ?>
                                <form method="post" id="emailForm">
                                    <input type="hidden" name="action" value="send_otp">

                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold">
                                          <!--  <i class="bi bi-envelope me-1"></i> Email Address -->
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light">
                                                <i class="bi bi-envelope-fill text-primary"></i>
                                            </span>
                                            <input type="email"
                                                class="form-control form-control-lg"
                                                id="email"
                                                name="email"
                                                placeholder="Enter your registered email"
                                                required autofocus autocomplete="email">
                                        </div>
                                        <div class="form-text">A 6-character login code will be sent to this email.</div>
                                    </div>

                                    <button type="submit" class="btn btn-warning w-100 py-2 fw-semibold" id="sendOtpBtn">
                                        <i class="bi bi-send me-1"></i> Send Login Code
                                    </button>
                                </form>

                                <div class="text-center mt-4">
                                    <p class="text-muted">
                                        Don't have an account?<br>
                                        <a href="register.php" class="btn btn-success mt-2 d-block text-center">
                                            <i class="bi bi-person-plus me-1"></i> Register for an account
                                        </a>
                                    </p>
                                    <small class="text-muted">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Your email must be registered in our training system.
                                        Contact your administrator if you can't access your account.
                                    </small>
                                </div>

                                <!-- ==================== STEP 2: OTP form ==================== -->
                            <?php else: ?>
                                <div class="email-display">
                                    <small class="text-muted">Code sent to:</small><br>
                                    <span class="email-address">
                                        <i class="bi bi-envelope-check me-1"></i>
                                        <?= htmlspecialchars($_SESSION['otp_email'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                    <?php if (!empty($_SESSION['otp_participant_name'])): ?>
                                        <br>
                                        <small class="text-muted">
                                            Welcome back, <?= htmlspecialchars($_SESSION['otp_participant_name'], ENT_QUOTES, 'UTF-8') ?>
                                        </small>
                                    <?php endif; ?>
                                </div>

                                <form method="post" id="otpForm">
                                    <input type="hidden" name="action" value="verify_otp">

                                    <label class="form-label fw-semibold text-center d-block">
                                        <i class="bi bi-shield-lock me-1"></i> Enter 6-Character Code
                                    </label>

                                    <div class="otp-input-group" id="otpContainer">
                                        <?php for ($i = 1; $i <= 6; $i++): ?>
                                            <input type="text" maxlength="1" class="otp-box"
                                                id="otp<?= $i ?>" inputmode="text" autocomplete="off">
                                        <?php endfor; ?>
                                    </div>

                                    <!-- Hidden field that holds the combined 6-char code -->
                                    <input type="hidden" name="otp_code" id="combinedOtp">

                                    <div class="timer-text" id="timerSection">
                                        Code expires in: <span class="countdown" id="countdown">15:00</span>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="remember_me" id="rememberMe" value="1">
                                            <label class="form-check-label" for="rememberMe">
                                                Remember me for 30 days
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 py-2 fw-semibold mb-2" id="verifyOtpBtn">
                                        <i class="bi bi-check-circle me-1"></i> Verify &amp; Sign In
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary w-100 py-2" id="changeEmailBtn">
                                        <i class="bi bi-arrow-left me-1"></i> Use Different Email
                                    </button>
                                </form>

                                <!-- Resend form -->
                                <form method="post" id="resendForm" class="mt-3 text-center">
                                    <input type="hidden" name="action" value="resend_otp">
                                    <button type="submit" class="btn btn-link text-decoration-none" id="resendBtn" disabled>
                                        <i class="bi bi-arrow-repeat me-1"></i> Resend Code
                                    </button>
                                    <small class="text-muted d-block" id="resendTimerLabel">Available in 60s</small>
                                </form>

                                <!-- DEV MODE: show OTP on-screen (localhost only) -->
                                <?php if (!empty($_SESSION['dev_otp_code'])): ?>
                                    <div class="alert alert-info text-center mt-3">
                                        <strong>&#x1F527; DEV MODE &mdash; Your OTP:</strong><br>
                                        <span style="font-size:28px;font-weight:bold;letter-spacing:6px;">
                                            <?= htmlspecialchars($_SESSION['dev_otp_code'], ENT_QUOTES, 'UTF-8') ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                            <?php endif; ?>

                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col (card) -->

                <!-- QR code column -->
                <div class="col-md-6 col-lg-5 mt-4 mt-md-0">
                    <div class="">
                        <div class="card-body p-5" align="center">
                            <?php
                            include 'qr.php';
                            /*
                                echo "<h1 style='text-align: center; color: #2c5aa0;'>QR Code Generator Test Page</h1>";
                                echo "<div style='max-width: 1200px; margin: 0 auto; padding: 20px;'>";

                                echo "<h2>1. Standard QR Code Widget</h2>";
                                displayQRCode(200, "Standard QR Code", true);

                                echo "<h2>2. Vibrant QR Code Widget</h2>";
                                displayVibrantQRCode(200, "Vibrant QR Code", true);

                                echo "<h2>3. Multiple Color Schemes</h2>";
                                echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;'>";

                                $qr1 = new QRGenerator(150);
                                echo $qr1->generateVibrantWidget("Location 1", true);

                                $qr2 = new QRGenerator(150);
                                echo $qr2->generateVibrantWidget("Location 2", true);

                                $qr3 = new QRGenerator(150);
                                echo $qr3->generateVibrantWidget("Location 3", true);

                                echo "</div>";
                                */

                            echo "<h2>Share or Scan with your mobile</h2>";
                            echo "<h2>To Access Test Page</h2>";
                            echo getQRCodeImage(300, "QR Code Image");
                            ?>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.login-container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ==================== Email step JS ==================== -->
    <?php if ($step === 'email'): ?>
        <script>
            document.getElementById('emailForm').addEventListener('submit', function() {
                const btn = document.getElementById('sendOtpBtn');
                btn.disabled = true;
                btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Sending...';
            });
        </script>
    <?php endif; ?>

    <!-- ==================== OTP step JS ==================== -->
    <?php if ($step === 'otp'): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                // ---------------------------------------------------------------
                // OTP input boxes
                // ---------------------------------------------------------------
                const otpInputs = document.querySelectorAll('#otpContainer input');
                const combinedOtp = document.getElementById('combinedOtp');
                const verifyBtn = document.getElementById('verifyOtpBtn');
                const otpForm = document.getElementById('otpForm');

                if (otpInputs.length > 0) {
                    otpInputs[0].focus();
                }

                function syncCombined() {
                    let val = '';
                    otpInputs.forEach(function(inp) {
                        val += inp.value.toUpperCase();
                        inp.classList.toggle('filled', inp.value !== '');
                    });
                    combinedOtp.value = val;
                }

                otpInputs.forEach(function(input, idx) {

                    // Typing
                    input.addEventListener('input', function() {
                        const ch = this.value.replace(/[^A-Za-z0-9]/g, '').toUpperCase().slice(-1);
                        this.value = ch;
                        syncCombined();
                        if (ch && idx < otpInputs.length - 1) {
                            otpInputs[idx + 1].focus();
                        }
                        // Move focus to submit button when all 6 filled
                        if (combinedOtp.value.length === 6) {
                            verifyBtn.focus();
                        }
                    });

                    // Backspace / arrow keys
                    input.addEventListener('keydown', function(e) {
                        if (e.key === 'Backspace' && !this.value && idx > 0) {
                            otpInputs[idx - 1].focus();
                            otpInputs[idx - 1].value = '';
                            syncCombined();
                        }
                        if (e.key === 'ArrowLeft' && idx > 0) otpInputs[idx - 1].focus();
                        if (e.key === 'ArrowRight' && idx < otpInputs.length - 1) otpInputs[idx + 1].focus();
                    });

                    // Paste
                    input.addEventListener('paste', function(e) {
                        e.preventDefault();
                        const raw = (e.clipboardData || window.clipboardData).getData('text');
                        const clean = raw.replace(/[^A-Za-z0-9]/g, '').toUpperCase().slice(0, 6);
                        for (let i = 0; i < otpInputs.length; i++) {
                            otpInputs[i].value = clean[i] || '';
                        }
                        syncCombined();
                        const nextEmpty = Math.min(clean.length, otpInputs.length - 1);
                        otpInputs[nextEmpty].focus();
                    });
                });

                // Submit on Enter when all 6 filled
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' && combinedOtp.value.length === 6) {
                        otpForm.submit();
                    }
                });

                // Validate combined before submit (prevent empty submission)
                otpForm.addEventListener('submit', function(e) {
                    syncCombined(); // make sure it's up to date
                    if (combinedOtp.value.length !== 6) {
                        e.preventDefault();
                        alert('Please fill in all 6 characters of the code.');
                        otpInputs[0].focus();
                    }
                });

                // ---------------------------------------------------------------
                // Countdown timer (15 min)
                // ---------------------------------------------------------------
                let totalSeconds = 15 * 60;
                const countdownEl = document.getElementById('countdown');

                function tickCountdown() {
                    const m = Math.floor(totalSeconds / 60);
                    const s = totalSeconds % 60;
                    countdownEl.textContent = m + ':' + String(s).padStart(2, '0');

                    if (totalSeconds <= 0) {
                        clearInterval(countdownInterval);
                        countdownEl.textContent = 'EXPIRED';
                        verifyBtn.disabled = true;
                        verifyBtn.textContent = 'Code Expired — Please Resend';
                    }
                    totalSeconds--;
                }
                const countdownInterval = setInterval(tickCountdown, 1000);
                tickCountdown();

                // ---------------------------------------------------------------
                // Resend cooldown (60 s)
                // ---------------------------------------------------------------
                const resendBtn = document.getElementById('resendBtn');
                const resendLabel = document.getElementById('resendTimerLabel');
                let resendCooldown = 60;

                function tickResend() {
                    if (resendCooldown <= 0) {
                        clearInterval(resendInterval);
                        resendBtn.disabled = false;
                        resendLabel.textContent = "Didn't receive the code?";
                    } else {
                        resendBtn.disabled = true;
                        resendLabel.textContent = 'Resend available in ' + resendCooldown + 's';
                        resendCooldown--;
                    }
                }
                const resendInterval = setInterval(tickResend, 1000);
                tickResend();

                // ---------------------------------------------------------------
                // "Use different email" button
                // ---------------------------------------------------------------
                document.getElementById('changeEmailBtn').addEventListener('click', function() {
                    window.location.href = 'logout.php?action=restart_login';
                });

            });
        </script>
    <?php endif; ?>

</body>

</html>