<?php
// modules/test/lbq/src/smtp_functions.php

/**
 * Send email using SMTP with the provided configuration.
 * Uses stream_socket_client() for better Windows/WAMP compatibility.
 *
 * @param array  $smtpConfig SMTP configuration array
 * @param string $to         Recipient email address
 * @param string $subject    Email subject
 * @param string $body       Email body (HTML)
 * @return array ['ok' => bool, 'log' => string]
 */
function send_smtp_email(array $smtpConfig, string $to, string $subject, string $body): array
{
    $log = [];

    try {
        $host     = $smtpConfig['host'];
        $port     = (int) $smtpConfig['port'];
        $username = $smtpConfig['username'];
        $password = $smtpConfig['password'];
        $from     = $smtpConfig['smtpfrom'];
        $secure   = strtolower($smtpConfig['secure'] ?? 'tls');

        $ehloHost = $_SERVER['SERVER_NAME'] ?? gethostname() ?: 'localhost';

        $log[] = "Connecting to SMTP: $host:$port (secure=$secure)";

        // Build connection prefix based on protocol
        // 'ssl' or 'tls' as prefix means implicit TLS from the start
        // 'starttls' or 'plain' means plain TCP then upgrade via STARTTLS
        $prefix = ($secure === 'ssl') ? 'ssl://' : '';

        $context = stream_context_create([
            'socket' => ['bindto' => '0:0'],
            'ssl' => [
                'verify_peer'      => false,
                'verify_peer_name' => false,
            ],
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
            return ['ok' => false, 'log' => "CONNECT FAILED: $errstr ($errno)"];
        }

        stream_set_timeout($stream, 30);

        $read = function () use ($stream) {
            $data = '';
            while ($str = fgets($stream, 515)) {
                $data .= $str;
                if (substr($str, 3, 1) === ' ') break;
            }
            return rtrim($data);
        };

        $write = function (string $cmd) use ($stream, &$log) {
            fwrite($stream, $cmd . "\r\n");
            $log[] = "C: $cmd";
        };

        // =========================================================
        // GREETING
        // =========================================================
        $log[] = "S: " . $read();

        fwrite($stream, "EHLO $ehloHost\r\n");
        $log[] = "C: EHLO $ehloHost";
        $log[] = "S: " . $read();

        // =========================================================
        // STARTTLS (for 'tls' or 'starttls' protocols)
        // =========================================================
        if (in_array($secure, ['tls', 'starttls'], true)) {
            fwrite($stream, "STARTTLS\r\n");
            $log[] = "C: STARTTLS";
            $resp  = $read();
            $log[] = "S: $resp";

            if (strpos($resp, '220') === false) {
                fclose($stream);
                return ['ok' => false, 'log' => implode("\n", $log) . "\nSTARTTLS FAILED"];
            }

            $cryptoOk = stream_socket_enable_crypto(
                $stream,
                true,
                STREAM_CRYPTO_METHOD_TLS_CLIENT
            );
            if (!$cryptoOk) {
                fclose($stream);
                return ['ok' => false, 'log' => implode("\n", $log) . "\nTLS NEGOTIATION FAILED"];
            }

            fwrite($stream, "EHLO $ehloHost\r\n");
            $log[] = "C: EHLO $ehloHost";
            $log[] = "S: " . $read();
        }

        // =========================================================
        // AUTH LOGIN
        // =========================================================
        fwrite($stream, "AUTH LOGIN\r\n");
        $log[] = "C: AUTH LOGIN";
        $log[] = "S: " . $read();

        fwrite($stream, base64_encode($username) . "\r\n");
        $log[] = "C: [USERNAME BASE64]";
        $log[] = "S: " . $read();

        fwrite($stream, base64_encode($password) . "\r\n");
        $log[] = "C: [PASSWORD BASE64]";
        $authResp = $read();
        $log[] = "S: $authResp";

        if (strpos($authResp, '235') === false) {
            fclose($stream);
            return ['ok' => false, 'log' => implode("\n", $log) . "\nAUTH FAILED"];
        }

        // =========================================================
        // MAIL TRANSACTION
        // =========================================================
        fwrite($stream, "MAIL FROM:<$from>\r\n");
        $log[] = "C: MAIL FROM:<$from>";
        $fromResp = $read();
        $log[] = "S: $fromResp";
        if (strpos($fromResp, '250') === false) {
            fclose($stream);
            return ['ok' => false, 'log' => implode("\n", $log) . "\nMAIL FROM REJECTED"];
        }

        fwrite($stream, "RCPT TO:<$to>\r\n");
        $log[] = "C: RCPT TO:<$to>";
        $rcptResp = $read();
        $log[] = "S: $rcptResp";
        if (strpos($rcptResp, '250') === false && strpos($rcptResp, '251') === false) {
            fclose($stream);
            return ['ok' => false, 'log' => implode("\n", $log) . "\nRCPT TO REJECTED"];
        }

        fwrite($stream, "DATA\r\n");
        $log[] = "C: DATA";
        $log[] = "S: " . $read();

        // =========================================================
        // HEADERS + BODY
        // =========================================================
        $messageId = '<' . time() . '.' . bin2hex(random_bytes(8)) . '@' . $ehloHost . '>';
        $date      = date('r');

        $headers =
            "Date: $date\r\n" .
            "Message-ID: $messageId\r\n" .
            "From: Lifebox Test Center <$from>\r\n" .
            "To: $to\r\n" .
            "Subject: $subject\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/html; charset=UTF-8\r\n" .
            "X-Mailer: Lifebox-OTP-Mailer/1.0\r\n";

        fwrite($stream, $headers . "\r\n" . $body . "\r\n.\r\n");
        $log[] = "EMAIL DATA SENT";

        $dataResp = $read();
        $log[] = "S: $dataResp";

        if (strpos($dataResp, '250') === false) {
            fclose($stream);
            return ['ok' => false, 'log' => implode("\n", $log) . "\nDATA REJECTED BY SERVER"];
        }

        // =========================================================
        // QUIT
        // =========================================================
        fwrite($stream, "QUIT\r\n");
        $log[] = "C: QUIT";
        $log[] = "S: " . $read();
        fclose($stream);

        return ['ok' => true, 'log' => implode("\n", $log)];
    } catch (Throwable $e) {
        return ['ok' => false, 'log' => "FATAL ERROR: " . $e->getMessage()];
    }
}

/**
 * Read a potentially multi-line SMTP response.
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
 * Get SMTP configuration by ID from the database (defaults to ID 2).
 */
function get_smtp_config(PDO $pdo, int $id = 2): array|false
{
    $stmt = $pdo->prepare("SELECT * FROM SMTP WHERE id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
