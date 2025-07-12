<?php

/**
 * ──────────────────────────────────────────────────────────────
 *  SMTP Test Utility – all‑in‑one PHP file
 *  PHP ≥7.2  +  openssl extension
 * ──────────────────────────────────────────────────────────────
 *  ✓ Plain, SSL or STARTTLS (tls)             ✓ AUTH LOGIN
 *  ✓ Shows full server conversation log       ✓ No external libs
 * ----------------------------------------------------------------
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

/* ───────── Handle form submission ───────── */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host  = trim($_POST['host'] ?? '');
    $port  = (int)($_POST['port'] ?? 25);
    $proto = strtolower(trim($_POST['protocol'] ?? 'plain')); // plain | ssl | tls
    $user  = trim($_POST['user'] ?? '');
    $pass  = trim($_POST['pass'] ?? '');
    $to    = trim($_POST['to']  ?? '');

    $subject = 'SMTP Test';
    $body    = 'Test SMTP';

    $result = send_smtp_mail($host, $port, $proto, $user, $pass, $user, $to, $subject, $body);
}

/* ───────── Mini SMTP client ───────── */
function send_smtp_mail(
    $host,
    $port,
    $protocol,
    $username,
    $password,
    $from,
    $to,
    $subject,
    $body
): array {
    $log = '';
    $prefix = $protocol === 'ssl' ? 'ssl://' : '';
    $stream = @stream_socket_client(
        $prefix . $host . ':' . $port,
        $errno,
        $errstr,
        30,
        STREAM_CLIENT_CONNECT,
        stream_context_create(['ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false
        ]])
    );

    if (!$stream) {
        return ['ok' => false, 'log' => "⚠️  Connect failed: $errstr ($errno)\n"];
    }
    $log .= fgets($stream);              // server greeting
    $ehlo = "EHLO tester\r\n";

    fwrite($stream, $ehlo);
    $log .= $ehlo . read_multiline($stream);

    /* Upgrade to TLS if requested */
    if ($protocol === 'tls') {
        fwrite($stream, "STARTTLS\r\n");
        $log .= "STARTTLS\r\n" . read_multiline($stream);
        if (!stream_socket_enable_crypto($stream, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            return ['ok' => false, 'log' => $log . "⚠️  TLS negotiation failed\n"];
        }
        fwrite($stream, $ehlo);
        $log .= $ehlo . read_multiline($stream);
    }

    /* AUTH LOGIN */
    fwrite($stream, "AUTH LOGIN\r\n");
    $log .= "AUTH LOGIN\r\n" . read_multiline($stream);
    fwrite($stream, base64_encode($username) . "\r\n");
    $log .= "***username***\n" . read_multiline($stream);
    fwrite($stream, base64_encode($password) . "\r\n");
    $log .= "***password***\n" . read_multiline($stream);

    /* Envelope commands */
    fwrite($stream, "MAIL FROM:<$from>\r\n");
    $log .= "MAIL FROM:<$from>\r\n" . read_multiline($stream);
    fwrite($stream, "RCPT TO:<$to>\r\n");
    $log .= "RCPT TO:<$to>\r\n" . read_multiline($stream);
    fwrite($stream, "DATA\r\n");
    $log .= "DATA\r\n" . read_multiline($stream);

    /* Message data */
    $headers  = "From: $from\r\n";
    $headers .= "To: $to\r\n";
    $headers .= "Subject: $subject\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    fwrite($stream, $headers . "\r\n" . $body . "\r\n.\r\n");
    $log .= "[message sent]\n" . read_multiline($stream);

    /* QUIT */
    fwrite($stream, "QUIT\r\n");
    $log .= "QUIT\r\n" . read_multiline($stream);

    fclose($stream);
    return ['ok' => true, 'log' => $log];
}

/* Read a potentially multi‑line SMTP response */
function read_multiline($stream): string
{
    $out = '';
    while ($line = fgets($stream)) {
        $out .= $line;
        if (preg_match('/^\d{3} /', $line)) break;
    }
    return $out;
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>SMTP Tester</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f8fa;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin: 0 0 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 620px;
            margin: 0 auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 8px 10px;
            margin-top: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 20px;
            padding: 10px 18px;
            border: none;
            border-radius: 4px;
            background: #0078d4;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        pre {
            white-space: pre-wrap;
            background: #1e1e1e;
            color: #00ff64;
            padding: 16px;
            border-radius: 6px;
            max-width: 920px;
            margin: 24px auto;
        }
    </style>
</head>

<body>
    <h2>SMTP Test Utility</h2>

    <form method="post">
        <label>SMTP server</label>
        <input name="host" value="<?= htmlspecialchars($_POST['host'] ?? 'smtp-mail.outlook.com') ?>">
        <label>SMTP port</label>
        <input name="port" value="<?= htmlspecialchars($_POST['port'] ?? '587') ?>">
        <label>Protocol (plain | starttls | tls | ssl)</label>
        <input name="protocol" value="<?= htmlspecialchars($_POST['protocol'] ?? 'starttls') ?>">
        <label>SMTP username</label>
        <input name="user" value="<?= htmlspecialchars($_POST['user'] ?? 'mne@lifebox.org') ?>">
        <label>SMTP password</label>
        <input name="pass" type="password" value="<?= htmlspecialchars($_POST['pass'] ?? 'G.817939771353uk') ?>">
        <label>Recipient e‑mail</label>
        <input name="to" value="<?= htmlspecialchars($_POST['to'] ?? 'michaelktd@merqconsultancy.org') ?>">
        <button type="submit">Send Test</button>
    </form>

    <?php if (isset($result)): ?>
        <h3 style="text-align:center;color:<?= $result['ok'] ? 'green' : 'red'; ?>">
            <?= $result['ok'] ? '✓ Message sent – see log below' : '✗ Failed – see diagnostics below'; ?>
        </h3>
        <pre><?= htmlspecialchars($result['log']) ?></pre>
    <?php endif; ?>

</body>

</html>