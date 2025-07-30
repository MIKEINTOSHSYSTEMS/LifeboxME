<?php

/**
 * ──────────────────────────────────────────────────────────────
 *  SMTP Test Utility – all‑in‑one PHP file
 *  PHP ≥7.2  +  openssl extension
 * ──────────────────────────────────────────────────────────────
 *  ✓ Plain, SSL or STARTTLS (tls)             ✓ AUTH LOGIN
 *  ✓ Shows full server conversation log       ✓ No external libs
 *  ✓ HTML email support
 * ----------------------------------------------------------------
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

/* ───────── PostgreSQL Database Connection ───────── */
$host = '127.0.0.1';
$dbname = 'lifebox_mesystem';
$user = 'postgres';
$password = 'mikeintosh';

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

/* ───────── Fetch All SMTP Configurations for Dropdown ───────── */
$smtpConfigs = get_all_smtp_configs($conn); // Fetch all configs for the dropdown

/* ───────── Fetch Selected SMTP Configuration ───────── */
$smtpConfig = null;
if (isset($_POST['smtp_id'])) {
    $smtpConfig = get_smtp_config_by_id($conn, $_POST['smtp_id']);
}

if (!$smtpConfig) {
    $smtpConfig = [
        'id' => '',
        'username' => '',
        'host' => '',
        'port' => '',
        'password' => '',
        'smtpfrom' => '',
        'secure' => 'starttls', // Default protocol if no config found
    ];
}

/* ───────── Handle form submission ───────── */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_test'])) {
    $host  = $smtpConfig['host']; // Use DB values or user input
    $port  = $smtpConfig['port'];
    $proto = strtolower(trim($_POST['protocol'] ?? $smtpConfig['secure'])); // Default to secure from DB
    $user  = $smtpConfig['username'];
    $pass  = $smtpConfig['password'];
    $from  = $smtpConfig['smtpfrom'];
    $to    = trim($_POST['to'] ?? '');

    $subject = 'SMTP Test - HTML Email';
    $body    = '<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background-color: #0078d4; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
        .footer { margin-top: 20px; padding-top: 10px; border-top: 1px solid #eee; font-size: 0.9em; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SMTP Test Successful!</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>This is a <strong>test email</strong> sent from the Lifebox M&E System SMTP Tester.</p>
            <p>If you\'re reading this, your SMTP configuration is working correctly.</p>
            <p>Here are the details of this test:</p>
            <ul>
                <li><strong>Server:</strong> ' . htmlspecialchars($host) . '</li>
                <li><strong>Port:</strong> ' . htmlspecialchars($port) . '</li>
                <li><strong>Protocol:</strong> ' . htmlspecialchars($proto) . '</li>
                <li><strong>From:</strong> ' . htmlspecialchars($from) . '</li>
                <li><strong>To:</strong> ' . htmlspecialchars($to) . '</li>
            </ul>
        </div>
        <div class="footer">
            <p>This is an automated message. Please do not reply.</p>
            <p>&copy; ' . date('Y') . ' Lifebox M&E System</p>
        </div>
    </div>
</body>
</html>';

    $result = send_smtp_mail($host, $port, $proto, $user, $pass, $from, $to, $subject, $body);
}

/* Fetch all SMTP configurations from PostgreSQL */
function get_all_smtp_configs($conn)
{
    $query = "SELECT id, host, username FROM SMTP ORDER BY created_at DESC";
    $result = pg_query($conn, $query);
    if ($result) {
        return pg_fetch_all($result); // Return all rows
    }
    return [];
}

/* Fetch SMTP configuration by ID */
function get_smtp_config_by_id($conn, $id)
{
    $query = "SELECT * FROM SMTP WHERE id = $1";
    $result = pg_query_params($conn, $query, [$id]);
    if ($result) {
        return pg_fetch_assoc($result); // Return the config row by ID
    }
    return null;
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

    $log .= fgets($stream); // server greeting
    $ehlo = "EHLO tester\r\n";

    fwrite($stream, $ehlo);
    $log .= $ehlo . read_multiline($stream);

    /* Upgrade to TLS if requested */
    if ($protocol === 'tls' || $protocol === 'starttls') {
        fwrite($stream, "STARTTLS\r\n");
        $log .= "STARTTLS\r\n" . read_multiline($stream);
        if (!stream_socket_enable_crypto($stream, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            return ['ok' => false, 'log' => $log . "⚠️  TLS negotiation failed\n"];
        }
        fwrite($stream, $ehlo); // re-send EHLO after STARTTLS
        $log .= $ehlo . read_multiline($stream);
    }

    /* AUTH LOGIN */
    fwrite($stream, "AUTH LOGIN\r\n");
    $log .= "AUTH LOGIN\r\n" . read_multiline($stream);

    // Send base64 encoded username and password
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

    // Email Headers with HTML content type
    $headers  = "From: $from\r\n";
    $headers .= "To: $to\r\n";
    $headers .= "Subject: $subject\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: quoted-printable\r\n";

    // Send email body (HTML formatted)
    fwrite($stream, $headers . "\r\n" . $body . "\r\n.\r\n");
    $log .= "[HTML message sent]\n" . read_multiline($stream);

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

        select {
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
    <h2>Lifebox M&E | SMTP Test Utility</h2>

    <form method="post">
        <label>Select SMTP Setting</label>
        <select name="smtp_id" onchange="this.form.submit()">
            <option value="">Select SMTP Config</option>
            <?php foreach ($smtpConfigs as $config): ?>
                <option value="<?= $config['id'] ?>" <?= $config['id'] == $smtpConfig['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($config['host']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>SMTP server</label>
        <input name="host" value="<?= htmlspecialchars($smtpConfig['host']) ?>" required>

        <label>SMTP port</label>
        <input name="port" value="<?= htmlspecialchars($smtpConfig['port']) ?>" required>

        <label>Protocol (plain | starttls | tls | ssl)</label>
        <input name="protocol" value="<?= htmlspecialchars($smtpConfig['secure']) ?>" required>

        <label>SMTP username</label>
        <input name="user" value="<?= htmlspecialchars($smtpConfig['username']) ?>" required>

        <label>SMTP password</label>
        <input name="pass" type="password" value="<?= htmlspecialchars($smtpConfig['password']) ?>" required>

        <label>Recipient e‑mail</label>
        <input name="to" value="<?= htmlspecialchars($_POST['to'] ?? '') ?>" required>

        <button name="send_test" type="submit">Send Test</button>
    </form>

    <?php if (isset($result)): ?>
        <h3 style="text-align:center;color:<?= $result['ok'] ? 'green' : 'red'; ?>">
            <?= $result['ok'] ? '✓ Message sent – see log below' : '✗ Failed – see diagnostics below'; ?>
        </h3>
        <pre><?= htmlspecialchars($result['log']) ?></pre>
    <?php endif; ?>

</body>

</html>