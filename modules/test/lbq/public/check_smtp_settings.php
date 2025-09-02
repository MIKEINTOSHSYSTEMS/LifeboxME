<?php
// check_smtp_settings.php
require_once __DIR__ . '/../src/db.php';

// Get SMTP configuration
$stmt = $pdo->prepare("SELECT * FROM SMTP WHERE id = :id");
$stmt->execute([':id' => 2]);
$smtpConfig = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$smtpConfig) {
    die("No SMTP configuration found with ID 2");
}

echo "<h2>Current SMTP Settings</h2>";
echo "<pre>";
print_r($smtpConfig);
echo "</pre>";

// Check if we need to update the password
if (isset($_POST['update_password'])) {
    $newPassword = $_POST['password'];

    $updateStmt = $pdo->prepare("UPDATE SMTP SET password = :password WHERE id = :id");
    $result = $updateStmt->execute([':password' => $newPassword, ':id' => 2]);

    if ($result) {
        echo "<p style='color: green;'>✓ Password updated successfully</p>";
        // Reload the config
        $stmt->execute([':id' => 2]);
        $smtpConfig = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "<p style='color: red;'>✗ Failed to update password</p>";
    }
}

echo "<h2>Update SMTP Password</h2>";
echo "<form method='post'>";
echo "<label for='password'>New Password:</label>";
echo "<input type='password' name='password' id='password' required>";
echo "<input type='submit' name='update_password' value='Update Password'>";
echo "</form>";

// Test common SMTP issues
echo "<h2>Common SMTP Issues Checklist</h2>";
echo "<ul>";
echo "<li>" . (strpos($smtpConfig['username'], '@') !== false ? "✓" : "✗") . " Username contains @ symbol</li>";
echo "<li>" . (!empty($smtpConfig['password']) ? "✓" : "✗") . " Password is not empty</li>";
echo "<li>" . (filter_var($smtpConfig['smtpfrom'], FILTER_VALIDATE_EMAIL) ? "✓" : "✗") . " From email is valid</li>";
echo "<li>" . (strpos($smtpConfig['username'], $smtpConfig['smtpfrom']) !== false ? "✓" : "✗") . " Username matches From email domain</li>";
echo "</ul>";

// Test port connectivity
echo "<h2>Port Connectivity Test</h2>";
$host = $smtpConfig['host'];
$port = $smtpConfig['port'];

$connection = @fsockopen($host, $port, $errno, $errstr, 5);
if (is_resource($connection)) {
    echo "<p style='color: green;'>✓ Port $port is open on $host</p>";
    fclose($connection);
} else {
    echo "<p style='color: red;'>✗ Cannot connect to $host on port $port: $errstr</p>";
}
