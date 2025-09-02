<?php
// test_smtp_protocols.php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/smtp_functions.php';

// Test the SMTP configuration
$smtpConfig = get_smtp_config($pdo, 2);

if (!$smtpConfig) {
    die("No SMTP configuration found with ID 2");
}

$to = "michaelktd@merqconsultancy.org";
$subject = "SMTP Protocol Test";
$body = "<h1>Testing different protocols</h1>";

$protocols = ['starttls', 'tls', 'ssl', 'plain'];

foreach ($protocols as $protocol) {
    echo "<h2>Testing with protocol: $protocol</h2>";

    // Create a copy of config with different protocol
    $testConfig = $smtpConfig;
    $testConfig['secure'] = $protocol;

    $result = send_smtp_email($testConfig, $to, $subject, $body . "<p>Protocol: $protocol</p>");

    if ($result['ok']) {
        echo "<p style='color: green;'>✓ Success with $protocol</p>";
        break; // Stop testing if one works
    } else {
        echo "<p style='color: red;'>✗ Failed with $protocol</p>";
    }

    echo "<pre style='background: #f4f4f4; padding: 10px; border: 1px solid #ccc;'>" .
        htmlspecialchars($result['log']) .
        "</pre>";
}
