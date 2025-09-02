<?php
// test_simple_smtp.php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/smtp_functions.php';

// Get SMTP configuration
$smtpConfig = get_smtp_config($pdo, 2);

if (!$smtpConfig) {
    die("No SMTP configuration found with ID 2");
}

echo "<h2>Testing SMTP Authentication</h2>";

// Test connection and authentication only (no email sending)
$host = $smtpConfig['host'];
$port = $smtpConfig['port'];
$username = $smtpConfig['username'];
$password = $smtpConfig['password'];

// Connect to server
$socket = @fsockopen($host, $port, $errno, $errstr, 10);

if (!$socket) {
    die("Connection failed: $errstr ($errno)");
}

echo "<p>Connected to $host:$port</p>";

// Read greeting
$response = fgets($socket);
echo "<p>Server: " . htmlspecialchars($response) . "</p>";

// Send EHLO
fwrite($socket, "EHLO test.example.com\r\n");
$response = fgets($socket);
echo "<p>EHLO: " . htmlspecialchars($response) . "</p>";

// Read multi-line response
while ($line = fgets($socket)) {
    echo "<p>EHLO: " . htmlspecialchars($line) . "</p>";
    if (preg_match('/^\d{3} /', $line)) break;
}

// Try AUTH LOGIN
fwrite($socket, "AUTH LOGIN\r\n");
$response = fgets($socket);
echo "<p>AUTH LOGIN: " . htmlspecialchars($response) . "</p>";

if (strpos($response, '334') === 0) {
    // Send username
    fwrite($socket, base64_encode($username) . "\r\n");
    $response = fgets($socket);
    echo "<p>Username response: " . htmlspecialchars($response) . "</p>";

    if (strpos($response, '334') === 0) {
        // Send password
        fwrite($socket, base64_encode($password) . "\r\n");
        $response = fgets($socket);
        echo "<p>Password response: " . htmlspecialchars($response) . "</p>";

        if (strpos($response, '235') === 0) {
            echo "<p style='color: green;'>✓ Authentication successful!</p>";
        } else {
            echo "<p style='color: red;'>✗ Authentication failed: " . htmlspecialchars($response) . "</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ Username rejected: " . htmlspecialchars($response) . "</p>";
    }
} else {
    echo "<p style='color: red;'>✗ AUTH LOGIN not supported: " . htmlspecialchars($response) . "</p>";
}

// Quit
fwrite($socket, "QUIT\r\n");
$response = fgets($socket);
echo "<p>QUIT: " . htmlspecialchars($response) . "</p>";

fclose($socket);
