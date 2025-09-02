<?php
// test_smtp_auth.php
require_once __DIR__ . '/../src/db.php';

// Get SMTP configuration
$stmt = $pdo->prepare("SELECT * FROM SMTP WHERE id = :id");
$stmt->execute([':id' => 2]);
$smtpConfig = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$smtpConfig) {
    die("No SMTP configuration found with ID 2");
}

echo "<h2>SMTP Configuration:</h2>";
echo "<pre>";
echo "Host: " . $smtpConfig['host'] . "\n";
echo "Port: " . $smtpConfig['port'] . "\n";
echo "Protocol: " . $smtpConfig['secure'] . "\n";
echo "Username: " . $smtpConfig['username'] . "\n";
echo "Password: " . $smtpConfig['password'] . "\n";
echo "From: " . $smtpConfig['smtpfrom'] . "\n";
echo "</pre>";

// Test connection without authentication
$host = $smtpConfig['host'];
$port = $smtpConfig['port'];
$timeout = 30;

echo "<h2>Testing Connection to $host:$port</h2>";

$socket = @fsockopen($host, $port, $errno, $errstr, $timeout);

if (!$socket) {
    echo "<p style='color: red;'>Connection failed: $errstr ($errno)</p>";
} else {
    echo "<p style='color: green;'>✓ Connection successful</p>";

    // Read server greeting
    $response = fgets($socket);
    echo "<p>Server greeting: " . htmlspecialchars($response) . "</p>";

    // Send EHLO
    fwrite($socket, "EHLO test.example.com\r\n");
    $response = fgets($socket);
    echo "<p>EHLO response: " . htmlspecialchars($response) . "</p>";

    // Read multi-line response
    while ($line = fgets($socket)) {
        echo "<p>EHLO: " . htmlspecialchars($line) . "</p>";
        if (preg_match('/^\d{3} /', $line)) break;
    }

    fclose($socket);
}

// Test if we can connect to the mail server on the specified port
echo "<h2>Port Test:</h2>";
$connection = @fsockopen($host, $port, $errno, $errstr, 5);
if (is_resource($connection)) {
    echo "<p style='color: green;'>✓ Port $port is open on $host</p>";
    fclose($connection);
} else {
    echo "<p style='color: red;'>✗ Cannot connect to $host on port $port: $errstr</p>";
}

// Check if the username and domain match
$username = $smtpConfig['username'];
$fromEmail = $smtpConfig['smtpfrom'];

if (strpos($username, '@') !== false) {
    $usernameDomain = explode('@', $username)[1];
    $fromDomain = explode('@', $fromEmail)[1];

    if ($usernameDomain !== $fromDomain) {
        echo "<p style='color: orange;'>⚠️ Username domain ($usernameDomain) doesn't match From email domain ($fromDomain)</p>";
    } else {
        echo "<p style='color: green;'>✓ Username and From email domains match</p>";
    }
}
