<?php

/**
 * Single‑file Office 365 SMTP OAuth2 tester
 * PHP ≥7.3, OpenSSL + cURL enabled
 *
 * – Gets an access‑token (client_credentials)
 * – Builds XOAUTH2 string and sends a test message
 * – Prints the full SMTP conversation + token info
 * SECURITY: never leave this file accessible in production!
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

/* ============ 1. Handle form submit ============ */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenant   = trim($_POST['tenant']   ?? '');
    $client   = trim($_POST['client']   ?? '');
    $secret   = trim($_POST['secret']   ?? '');
    $from     = trim($_POST['from']     ?? '');
    $to       = trim($_POST['to']       ?? '');

    /* 1‑a. Get OAuth2 token */
    $token = get_oauth2_token($tenant, $client, $secret, $err);
    if (!$token) {
        $result = ['ok' => false, 'log' => "❌ Token error:\n$err\n"];
    } else {
        /* 1‑b. Send mail with XOAUTH2  */
        $result = send_smtp_oauth(
            'smtp.office365.com',
            587,
            'tls',
            $from,
            $to,
            $token['access_token']
        );
        $result['log'] = "TOKEN EXPIRES: " . gmdate('Y‑m‑d H:i:s', time() + $token['expires_in']) . " UTC\n\n" . $result['log'];
    }
}

/* ============ 2. Functions ============ */

/* 2‑a. Fetch access token via client‑credentials */
function get_oauth2_token($tenant, $clientId, $clientSecret, &$err = ''): ?array
{
    $url  = "https://login.microsoftonline.com/$tenant/oauth2/v2.0/token";
    $post = http_build_query([
        'client_id'     => $clientId,
        'scope'         => 'https://outlook.office365.com/.default',
        'client_secret' => $clientSecret,
        'grant_type'    => 'client_credentials'
    ]);
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $post,
        CURLOPT_RETURNTRANSFER => true,
    ]);
    $json = curl_exec($ch);
    if (curl_errno($ch)) {
        $err = curl_error($ch);
        return null;
    }
    $data = json_decode($json, true);
    if (!isset($data['access_token'])) {
        $err = $json;
        return null;
    }
    return $data;
}

/* 2‑b. Minimal SMTP client using AUTH XOAUTH2 */
function send_smtp_oauth(
    $host,
    $port,
    $proto,
    $from,
    $to,
    $accessToken
): array {
    $log = '';
    $ctx = stream_context_create(['ssl' => [
        'verify_peer' => true,
        'verify_peer_name' => true
    ]]);
    $stream = @stream_socket_client(
        "$host:$port",
        $eno,
        $estr,
        30,
        STREAM_CLIENT_CONNECT,
        $ctx
    );
    if (!$stream) return ['ok' => false, 'log' => "Connect error: $estr ($eno)\n"];

    /* STARTTLS handshake */
    $log .= fgets($stream);
    fwrite($stream, "EHLO tester\r\n");
    $log .= "EHLO tester\r\n" . read_lines($stream);
    fwrite($stream, "STARTTLS\r\n");
    $log .= "STARTTLS\r\n" . read_lines($stream);
    stream_socket_enable_crypto($stream, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
    fwrite($stream, "EHLO tester\r\n");
    $log .= "EHLO tester\r\n" . read_lines($stream);

    /* AUTH XOAUTH2 */
    $xoauth = base64_encode("user=$from\x01auth=Bearer $accessToken\x01\x01");
    fwrite($stream, "AUTH XOAUTH2 $xoauth\r\n");
    $authResp = read_lines($stream);
    $log .= "AUTH XOAUTH2 <token>\r\n$authResp";
    if (strpos($authResp, '235 ') !== 0) {
        return ['ok' => false, 'log' => $log];
    }

    /* Envelope + DATA */
    fwrite($stream, "MAIL FROM:<$from>\r\n");
    $log .=
        "MAIL FROM:<$from>\r\n" . read_lines($stream);
    fwrite($stream, "RCPT TO:<$to>\r\n");
    $log .=
        "RCPT TO:<$to>\r\n" . read_lines($stream);
    fwrite($stream, "DATA\r\n");
    $log .=
        "DATA\r\n" . read_lines($stream);

    $msg  = "From: $from\r\nTo: $to\r\nSubject: SMTP Test\r\n";
    $msg .= "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n\r\n";
    $msg .= "Test SMTP via OAuth2\r\n.\r\n";

    fwrite($stream, $msg);
    $log .= "[message]\n" . read_lines($stream);

    fwrite($stream, "QUIT\r\n");
    $log .=
        "QUIT\r\n" . read_lines($stream);

    fclose($stream);
    return ['ok' => true, 'log' => $log];
}

/* Helper: read multi‑line SMTP reply */
function read_lines($s)
{
    $o = '';
    while ($l = fgets($s)) {
        $o .= $l;
        if (preg_match('/^\d{3} /', $l)) break;
    }
    return $o;
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Office 365 SMTP OAuth2 Tester</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
            background: #f6f8fa
        }

        form {
            max-width: 640px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .08)
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: 600
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border: 1px solid #ccc;
            border-radius: 4px
        }

        button {
            margin-top: 20px;
            padding: 10px 18px;
            border: 0;
            border-radius: 4px;
            background: #0078d4;
            color: #fff;
            font-weight: 600
        }

        pre {
            white-space: pre-wrap;
            background: #1e1e1e;
            color: #00ff64;
            padding: 14px;
            border-radius: 6px;
            max-width: 960px;
            margin: 24px auto
        }
    </style>
</head>

<body>
    <h2 style="text-align:center">Office 365 SMTP OAuth2 Tester</h2>
    <form method="post">
        <label>Tenant ID</label> <input name="tenant" value="<?= htmlspecialchars($_POST['tenant'] ?? '') ?>" placeholder="11111111-2222-3333-4444-555555555555">
        <label>Client ID</label> <input name="client" value="<?= htmlspecialchars($_POST['client'] ?? '') ?>" placeholder="aaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee">
        <label>Client secret</label> <input name="secret" type="password" value="<?= htmlspecialchars($_POST['secret'] ?? '') ?>">
        <label>Sender (user / shared)</label><input name="from" value="<?= htmlspecialchars($_POST['from'] ?? 'mne@lifebox.org') ?>">
        <label>Recipient</label> <input name="to" value="<?= htmlspecialchars($_POST['to']  ?? 'michaelktd@merqconsultancy.org') ?>">
        <button type="submit">Send Test</button>
    </form>
    <?php if (isset($result)): ?>
        <h3 style="text-align:center;color:<?= $result['ok'] ? 'green' : 'red' ?>"><?= $result['ok'] ? '✓ Sent' : '✗ Failed' ?></h3>
        <pre><?= htmlspecialchars($result['log']) ?></pre>
    <?php endif; ?>
</body>

</html>