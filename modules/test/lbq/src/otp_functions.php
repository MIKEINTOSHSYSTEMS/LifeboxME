<?php
// modules/test/lbq/src/otp_functions.php

/**
 * OTP Functions for Lifebox Test Center
 * Handles generation, storage, validation, and emailing of OTP codes
 */

/**
 * Generate a random 6-character alphanumeric OTP (uppercase letters + digits)
 * Excludes easily confused characters: 0, O, 1, I, L
 *
 * @return string 6-character OTP code
 */
function generate_otp(): string
{
    $chars = '23456789ABCDEFGHJKMNPQRSTUVWXYZ';
    $otp   = '';
    $max   = strlen($chars) - 1;
    for ($i = 0; $i < 6; $i++) {
        $otp .= $chars[random_int(0, $max)];
    }
    return $otp;
}

/**
 * Store OTP in the database.
 * Invalidates any previous unused OTPs for the same email + purpose first.
 *
 * @param PDO    $pdo           Database connection
 * @param string $email         Recipient email
 * @param string $otpCode       Generated OTP code
 * @param string $purpose       Purpose of this OTP (default: 'login')
 * @param int    $expiryMinutes Minutes until expiration (default: 15)
 * @return int|false OTP ID or false on failure
 */
function store_otp(PDO $pdo, string $email, string $otpCode, string $purpose = 'login', int $expiryMinutes = 15): int|false
{
    try {
        // Invalidate any previous unused OTPs for this email and purpose
        $stmt = $pdo->prepare("
            UPDATE public.lbotp_login
            SET    is_used    = TRUE,
                   updated_at = NOW()
            WHERE  email      = :email
              AND  purpose    = :purpose
              AND  is_used    = FALSE
              AND  is_verified = FALSE
              AND  expires_at > NOW()
        ");
        $stmt->execute([':email' => $email, ':purpose' => $purpose]);

        // Insert new OTP — use PostgreSQL NOW() + interval for timezone consistency
        $stmt = $pdo->prepare("
            INSERT INTO public.lbotp_login
                (email, otp_code, purpose, ip_address, user_agent, expires_at, created_at, updated_at)
            VALUES
                (:email, :otp_code, :purpose, :ip_address, :user_agent,
                 NOW() + INTERVAL '" . (int)$expiryMinutes . " minutes',
                 NOW(), NOW())
            RETURNING otp_id
        ");
        $stmt->execute([
            ':email'      => $email,
            ':otp_code'   => $otpCode,
            ':purpose'    => $purpose,
            ':ip_address' => $_SERVER['REMOTE_ADDR']     ?? null,
            ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
        ]);

        $otpId = (int) $stmt->fetchColumn();
        error_log("OTP stored: ID=$otpId, email=$email, expires in {$expiryMinutes}min");
        return $otpId;
    } catch (PDOException $e) {
        error_log("Failed to store OTP: " . $e->getMessage());
        return false;
    }
}

/**
 * Verify an OTP code against the database.
 *
 * @param PDO    $pdo     Database connection
 * @param string $email   User's email
 * @param string $otpCode OTP code to verify
 * @param string $purpose Purpose of the OTP (default: 'login')
 * @return array Keys: 'valid' (bool), 'message' (string), 'participant' (array|null)
 */
function verify_otp(PDO $pdo, string $email, string $otpCode, string $purpose = 'login'): array
{
    try {
        // Find the most recent valid OTP for this email and purpose
        $stmt = $pdo->prepare("
            SELECT otp_id, otp_code, attempts, max_attempts, is_used, expires_at
            FROM   public.lbotp_login
            WHERE  email       = :email
              AND  purpose     = :purpose
              AND  is_used     = FALSE
              AND  is_verified = FALSE
              AND  expires_at  > NOW()
            ORDER BY created_at DESC
            LIMIT 1
        ");
        $stmt->execute([':email' => $email, ':purpose' => $purpose]);
        $otp = $stmt->fetch();

        if (!$otp) {
            return [
                'valid'       => false,
                'message'     => 'No valid OTP found. Please request a new one.',
                'participant' => null,
            ];
        }

        // Check if max attempts already exceeded
        if ($otp['attempts'] >= $otp['max_attempts']) {
            $pdo->prepare("
                UPDATE public.lbotp_login
                SET    is_used = TRUE, updated_at = NOW()
                WHERE  otp_id  = :id
            ")->execute([':id' => $otp['otp_id']]);

            return [
                'valid'       => false,
                'message'     => 'Maximum attempts exceeded. Please request a new OTP.',
                'participant' => null,
            ];
        }

        // Increment attempt counter before checking the code
        $pdo->prepare("
            UPDATE public.lbotp_login
            SET    attempts   = attempts + 1,
                   updated_at = NOW()
            WHERE  otp_id = :id
        ")->execute([':id' => $otp['otp_id']]);

        // Compare codes (case-insensitive)
        if (strtoupper(trim($otpCode)) !== strtoupper($otp['otp_code'])) {
            $remainingAttempts = $otp['max_attempts'] - ($otp['attempts'] + 1);
            return [
                'valid'       => false,
                'message'     => "Invalid OTP code. {$remainingAttempts} attempt(s) remaining.",
                'participant' => null,
            ];
        }

        // OTP is valid — mark as verified and used
        $pdo->prepare("
            UPDATE public.lbotp_login
            SET    is_verified = TRUE,
                   is_used     = TRUE,
                   verified_at = NOW(),
                   updated_at  = NOW()
            WHERE  otp_id = :id
        ")->execute([':id' => $otp['otp_id']]);

        // Fetch participant data
        $stmt = $pdo->prepare("SELECT * FROM training_participants WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $participant = $stmt->fetch();

        if (!$participant) {
            return [
                'valid'       => false,
                'message'     => 'Account not found. Please register first.',
                'participant' => null,
            ];
        }

        return [
            'valid'       => true,
            'message'     => 'OTP verified successfully.',
            'participant' => $participant,
        ];
    } catch (PDOException $e) {
        error_log("OTP verification error: " . $e->getMessage());
        return [
            'valid'       => false,
            'message'     => 'System error. Please try again later.',
            'participant' => null,
        ];
    }
}

/**
 * Check if an OTP was recently sent to prevent abuse (cooldown guard).
 *
 * @param PDO    $pdo             Database connection
 * @param string $email           User's email
 * @param string $purpose         Purpose of OTP
 * @param int    $cooldownSeconds Cooldown period in seconds (default: 60)
 * @return bool True if cooldown has passed (safe to send), false if still cooling down
 */
function can_send_otp(PDO $pdo, string $email, string $purpose = 'login', int $cooldownSeconds = 60): bool
{
    try {
        $stmt = $pdo->prepare("
            SELECT created_at
            FROM   public.lbotp_login
            WHERE  email      = :email
              AND  purpose    = :purpose
              AND  created_at > NOW() - INTERVAL '1 second' * :cooldown
            ORDER BY created_at DESC
            LIMIT 1
        ");
        $stmt->execute([
            ':email'    => $email,
            ':purpose'  => $purpose,
            ':cooldown' => $cooldownSeconds,
        ]);
        return $stmt->fetch() === false; // true = no recent OTP = safe to send
    } catch (PDOException $e) {
        error_log("OTP cooldown check error: " . $e->getMessage());
        return true; // fail open so users are not permanently locked out
    }
}

/**
 * Send OTP email to the user via SMTP.
 *
 * @param PDO    $pdo       Database connection (kept for API consistency)
 * @param string $email     Recipient email
 * @param string $firstName Recipient's first name
 * @param string $otpCode   The OTP code to send
 * @return bool True if sent successfully
 */
function send_otp_email(PDO $pdo, string $email, string $firstName, string $otpCode, array $context = []): bool
{
    // ------------------------------------------------------------------
    // Detect local / development environment
    // ------------------------------------------------------------------
    $serverName = strtolower(
        $_SERVER['SERVER_NAME'] ?? $_SERVER['HTTP_HOST'] ?? ''
    );
    $serverName = explode(':', $serverName)[0];

    $isLocal = in_array($serverName, ['localhost', '127.0.0.1', '::1'], true)
        || str_ends_with($serverName, '.local')
        || str_ends_with($serverName, '.test');

    error_log("OTP Email: SERVER_NAME='{$serverName}', isLocal=" . ($isLocal ? 'true' : 'false'));

    if ($isLocal) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['dev_otp_code'] = $otpCode;
        error_log("DEV MODE: OTP for {$email} is: {$otpCode} (SMTP skipped)");
        return true;
    }

    // ------------------------------------------------------------------
    // Load SMTP helper
    // ------------------------------------------------------------------
    $smtpPath = __DIR__ . '/smtp_functions.php';

    if (!file_exists($smtpPath)) {
        error_log("OTP Email: FATAL — smtp_functions.php not found at: {$smtpPath}");
        return false;
    }

    require_once $smtpPath;

    if (!function_exists('send_smtp_email')) {
        error_log("OTP Email: FATAL — send_smtp_email() not defined after require_once");
        return false;
    }

    // ------------------------------------------------------------------
    // SMTP configuration
    // ------------------------------------------------------------------
    $smtpConfig = [
        'host'     => 'cloud.merqconsultancy.org',
        'port'     => 587,
        'secure'   => 'tls',
        'username' => 'lifebox@cloud.merqconsultancy.org',
        'password' => 'LifeboxCloud',
        'smtpfrom' => 'lifebox@cloud.merqconsultancy.org',
    ];

    // ------------------------------------------------------------------
    // Build email body
    // ------------------------------------------------------------------
    $expiryTime = date('g:i A', time() + (15 * 60));
    $safeFirst  = htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8');
    $safeOtp    = htmlspecialchars($otpCode,   ENT_QUOTES, 'UTF-8');
    $safeExpiry = htmlspecialchars($expiryTime, ENT_QUOTES, 'UTF-8');
    $subject    = 'Your Login Code (OTP) ' . $safeOtp . ' - Lifebox Test Center';
    $year       = date('Y');

    // Context
    $ctxUrl  = htmlspecialchars($context['request_url'] ?? '', ENT_QUOTES, 'UTF-8');
    $ctxIp   = htmlspecialchars($context['ip_address']  ?? '', ENT_QUOTES, 'UTF-8');
    $ctxUa   = htmlspecialchars($context['user_agent']  ?? '', ENT_QUOTES, 'UTF-8');
    $ctxTime = htmlspecialchars($context['time']        ?? '', ENT_QUOTES, 'UTF-8');

    $htmlCtx = '';
    if ($ctxUrl || $ctxIp || $ctxUa) {
        $htmlCtx = '<div style="background:#fafafa;border-left:3px solid #0079a5;padding:12px 16px;margin-top:20px">'
            . '<p style="margin:0 0 4px;color:#333;font-size:13px;font-weight:bold;line-height:1.5">Login Request Details</p>'
            . '<p style="margin:0;color:#555;font-size:12px;line-height:1.6">';
        if ($ctxUrl)  $htmlCtx .= "URL: {$ctxUrl}<br>";
        if ($ctxIp)   $htmlCtx .= "IP: {$ctxIp}<br>";
        if ($ctxUa)   $htmlCtx .= "Browser: {$ctxUa}<br>";
        if ($ctxTime) $htmlCtx .= "Time: {$ctxTime}";
        $htmlCtx .= '</p></div>';
    }

    $body = <<<HTML
<div style="font-family:Arial,Helvetica,sans-serif;max-width:560px;margin:0 auto">
<div style="background:#0079a5;color:white;padding:20px 24px;text-align:center">
<h2 style="margin:0;font-size:18px;font-weight:bold">Lifebox Test Center</h2>
<p style="margin:4px 0 0;font-size:13px;color:#cce6f0">Your One-Time Login Code</p>
<h3 style="margin:4px 0 0;font-size:14px;color:#FFBF00;font-weight:bold">OTP</h3>
</div>
<div style="padding:24px;background:white;border:1px solid #e0e0e0;border-top:none">
<p style="margin:0 0 16px;font-size:15px;color:#333;line-height:1.5">Hello {$safeFirst},</p>
<p style="margin:0 0 16px;font-size:15px;color:#333;line-height:1.5">Use the code below to sign in to the <a href="https://mne.lifebox.org/test/" style="color:#0079a5;text-decoration:underline">Lifebox Test Center</a>:</p>
<div style="background:#f0f8ff;border:2px dashed #0079a5;padding:16px;text-align:center">
<p style="margin:0 0 8px;color:#666;font-size:11px;text-transform:uppercase;letter-spacing:1px">Your Login Code</p>
<p style="margin:0;font-size:28px;font-weight:bold;color:#0079a5;letter-spacing:8px;font-family:'Courier New',Courier,monospace">{$safeOtp}</p>
<p style="margin:10px 0 0;color:#e74c3c;font-size:12px">Expires at {$safeExpiry} (15 minutes)</p>
</div>
{$htmlCtx}
<div style="background:#fafafa;border-left:3px solid #e74c3c;padding:12px 16px;margin-top:12px">
<p style="margin:0 0 4px;color:#333;font-size:13px;font-weight:bold;line-height:1.5">Security Tips</p>
<p style="margin:0;color:#555;font-size:13px;line-height:1.5">• Never share your code with anyone<br>• If you did not request this code, please ignore this email</p>
</div>
</div>
<div style="background:#f8f9fa;padding:14px 24px;text-align:center;border:1px solid #e0e0e0;border-top:none;font-size:11px;color:#999;line-height:1.5">
&copy; {$year} Lifebox &mdash; this is an automated message
</div>
</div>
HTML;

    // ------------------------------------------------------------------
    // Send with retry — try STARTTLS first, then plain as fallback
    // ------------------------------------------------------------------
    $protocols = ['tls', 'plain'];

    foreach ($protocols as $protocol) {
        $smtpConfig['secure'] = $protocol;
        error_log("OTP Email: Attempting to send to {$email} via {$smtpConfig['host']}:{$smtpConfig['port']} (secure={$protocol})");

        $result = send_smtp_email($smtpConfig, $email, $subject, $body);

        if ($result['ok']) {
            error_log("OTP Email: SUCCESS — sent to {$email} (secure={$protocol})");
            return true;
        }

        error_log("OTP Email: RETRY {$protocol} FAILED — " . $result['log']);
    }

    error_log("OTP Email: ALL ATTEMPTS FAILED for {$email}");
    return false;
}

/**
 * Clean up expired OTP records older than 24 hours, and used records older than 7 days.
 *
 * @param PDO $pdo Database connection
 * @return int Number of records deleted
 */
function cleanup_expired_otps(PDO $pdo): int
{
    try {
        $stmt = $pdo->prepare("
            DELETE FROM public.lbotp_login
            WHERE  expires_at < NOW() - INTERVAL '24 hours'
               OR  (is_used = TRUE AND created_at < NOW() - INTERVAL '7 days')
        ");
        $stmt->execute();
        return $stmt->rowCount();
    } catch (PDOException $e) {
        error_log("OTP cleanup error: " . $e->getMessage());
        return 0;
    }
}
