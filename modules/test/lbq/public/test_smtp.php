<?php
// test_smtp.php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/smtp_functions.php';

// Test the SMTP configuration
$smtpConfig = get_smtp_config($pdo, 2);

if (!$smtpConfig) {
    die("No SMTP configuration found with ID 2");
}

echo "Testing SMTP configuration:<br>";
echo "Host: " . $smtpConfig['host'] . "<br>";
echo "Port: " . $smtpConfig['port'] . "<br>";
echo "Username: " . $smtpConfig['username'] . "<br>";

// Test email
$to = "michaelktd@merqconsultancy.org"; // Replace with your email
$subject = "SMTP Test Email";
$body = "<h1>This is a test email</h1><p>If you received this, your SMTP configuration is working!</p>";

$result = send_smtp_email($smtpConfig, $to, $subject, $body);

echo "<h2>Result:</h2>";
if ($result['ok']) {
    echo "<p style='color: green;'>Email sent successfully!</p>";
} else {
    echo "<p style='color: red;'>Failed to send email.</p>";
}

echo "<h2>SMTP Log:</h2>";
echo "<pre>" . htmlspecialchars($result['log']) . "</pre>";
