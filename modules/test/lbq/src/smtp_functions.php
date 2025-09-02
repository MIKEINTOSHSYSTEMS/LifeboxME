<?php
// src/smtp_functions.php

/**
 * Send email using SMTP with the provided configuration
 * 
 * @param array $smtpConfig SMTP configuration array
 * @param string $to Recipient email address
 * @param string $subject Email subject
 * @param string $body Email body (HTML)
 * @return array Result array with 'ok' status and 'log' message
 */
function send_smtp_email($smtpConfig, $to, $subject, $body)
{
    $log = '';

    // Extract SMTP configuration
    $host = $smtpConfig['host'];
    $port = $smtpConfig['port'];
    $protocol = strtolower(trim($smtpConfig['secure']));
    $username = $smtpConfig['username'];
    $password = $smtpConfig['password'];
    $from = $smtpConfig['smtpfrom'];


    error_log("Attempting to send email via SMTP to: $to");
    error_log("Using SMTP server: $host:$port");


    // Modify the prefix to handle both SSL and TLS (including STARTTLS)
    $prefix = ($protocol === 'ssl' || $protocol === 'tls') ? $protocol . '://' : '';

    // Create context with IPv4 forcing
    $context = stream_context_create([
        'socket' => [
            'bindto' => '0:0', // Forces IPv4
        ],
        'ssl' => [
            'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT, // Force TLS 1.2
            'verify_peer'       => false,
            'verify_peer_name'  => false
        ]
    ]);

    $stream = @stream_socket_client(
        $prefix . $host . ':' . $port,
        $errno,
        $errstr,
        30,
        STREAM_CLIENT_CONNECT,
        $context
    );

    if (!$stream) {
        error_log("SMTP connection failed to $host:$port - $errstr ($errno)");
        return ['ok' => false, 'log' => "⚠️  Connect failed: $errstr ($errno)\n"];
    }

    // Handle STARTTLS if the protocol is 'starttls'
    if ($protocol === 'starttls') {
        stream_set_timeout($stream, 15); // 15 second timeout for TLS
    }

    $log .= fgets($stream); // server greeting
    $ehlo = "EHLO tester\r\n";

    fwrite($stream, $ehlo);
    $log .= $ehlo . read_multiline_smtp($stream);

    /* Upgrade to TLS if requested */
    if ($protocol === 'tls' || $protocol === 'starttls') {
        fwrite($stream, "STARTTLS\r\n");
        $log .= "STARTTLS\r\n" . read_multiline_smtp($stream);
        if (!stream_socket_enable_crypto($stream, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            return ['ok' => false, 'log' => $log . "⚠️  TLS negotiation failed\n"];
        }
        fwrite($stream, $ehlo); // re-send EHLO after STARTTLS
        $log .= $ehlo . read_multiline_smtp($stream);
    }

    /* AUTH LOGIN */
    fwrite($stream, "AUTH LOGIN\r\n");
    $log .= "AUTH LOGIN\r\n" . read_multiline_smtp($stream);

    // Send base64 encoded username and password
    fwrite($stream, base64_encode($username) . "\r\n");
    $log .= "***username***\n" . read_multiline_smtp($stream);

    fwrite($stream, base64_encode($password) . "\r\n");
    $log .= "***password***\n" . read_multiline_smtp($stream);

    /* Envelope commands */
    fwrite($stream, "MAIL FROM:<$from>\r\n");
    $log .= "MAIL FROM:<$from>\r\n" . read_multiline_smtp($stream);
    fwrite($stream, "RCPT TO:<$to>\r\n");
    $log .= "RCPT TO:<$to>\r\n" . read_multiline_smtp($stream);
    fwrite($stream, "DATA\r\n");
    $log .= "DATA\r\n" . read_multiline_smtp($stream);

    // Email Headers with HTML content type
    $headers  = "From: $from\r\n";
    $headers .= "To: $to\r\n";
    $headers .= "Subject: $subject\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: quoted-printable\r\n";

    // Send email body (HTML formatted)
    fwrite($stream, $headers . "\r\n" . $body . "\r\n.\r\n");
    $log .= "[HTML message sent]\n" . read_multiline_smtp($stream);

    /* QUIT */
    fwrite($stream, "QUIT\r\n");
    $log .= "QUIT\r\n" . read_multiline_smtp($stream);

    fclose($stream);
    return ['ok' => true, 'log' => $log];
}

/**
 * Read a potentially multi-line SMTP response
 */
function read_multiline_smtp($stream): string
{
    $out = '';
    while ($line = fgets($stream)) {
        $out .= $line;
        if (preg_match('/^\d{3} /', $line)) break;
    }
    return $out;
}

/**
 * Get SMTP configuration by ID (defaults to ID 2)
 */
function get_smtp_config($pdo, $id = 2)
{
    $stmt = $pdo->prepare("SELECT * FROM SMTP WHERE id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
