<?php
// test_plain_smtp.php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/smtp_functions.php';

// Get SMTP configuration
$smtpConfig = get_smtp_config($pdo, 2);

if (!$smtpConfig) {
    die("No SMTP configuration found with ID 2");
}

// Force plain authentication for testing
$smtpConfig['secure'] = 'plain';

echo "<h2>Testing SMTP with Plain Authentication</h2>";
echo "<pre>";
echo "Host: " . $smtpConfig['host'] . "\n";
echo "Port: " . $smtpConfig['port'] . "\n";
echo "Protocol: " . $smtpConfig['secure'] . "\n";
echo "Username: " . $smtpConfig['username'] . "\n";
echo "From: " . $smtpConfig['smtpfrom'] . "\n";
echo "</pre>";

// Test email
$to = "michaelktd@merqconsultancy.org";
$subject = "SMTP Test with Plain Authentication";
$body = "<h1>This is a test email</h1><p>If you received this, your SMTP configuration is working with plain authentication!</p>";

$result = send_smtp_email($smtpConfig, $to, $subject, $body);

echo "<h2>Result:</h2>";
if ($result['ok']) {
    echo "<p style='color: green; font-weight: bold;'>✓ Email sent successfully!</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>✗ Failed to send email.</p>";
}

echo "<h2>SMTP Conversation Log:</h2>";
echo "<pre style='background: #f4f4f4; padding: 10px; border: 1px solid #ccc;'>" .
    htmlspecialchars($result['log']) .
    "</pre>";
