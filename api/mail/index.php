<?php

/**
 * SMTP Tester Application
 *
 * This script provides a simple web interface to test SMTP server connections
 * and send a test email using PHPMailer.
 *
 * To use this script:
 * 1. Save this code as a .php file (e.g., smtp_tester.php).
 * 2. Download PHPMailer: Go to https://github.com/PHPMailer/PHPMailer/releases
 * and download the latest stable release.
 * 3. Extract the downloaded archive.
 * 4. Copy the following files from the 'src' directory of the PHPMailer
 * extraction into the same directory as your smtp_tester.php file:
 * - PHPMailer.php
 * - SMTP.php
 * - Exception.php
 * 5. Access the script in your web browser (e.g., http://localhost/smtp_tester.php).
 *
 * Note: For security reasons, avoid leaving this script publicly accessible
 * on a production server.
 *
 * PHPRUNNER Compatibility Notes:
 * PHPRUNNER often includes PHPMailer internally. The key concepts from this tester
 * can be applied within your PHPRUNNER custom events (e.g., BeforeAdd, BeforeEdit,
 * or on a custom page) to configure and debug email sending.
 *
 * When troubleshooting email issues in PHPRUNNER:
 * - Locate where PHPRUNNER initializes its PHPMailer instance (often in generated
 * email sending functions or global settings).
 * - Apply the SMTP settings (Host, Port, Username, Password, SMTPSecure)
 * from your PHPRUNNER project's email settings or directly in the code.
 * - To get verbose debugging output, you can typically add or modify the line:
 * $mail->SMTPDebug = SMTP::DEBUG_SERVER;
 * (Ensure 'SMTP' class is accessible, usually by PHPRUNNER's includes).
 * The debug output will appear in your web server's error logs or directly
 * on the page if not suppressed by PHPRUNNER.
 */

// Include PHPMailer classes
use PHPMailer;
use SMTP;
//use Exception;

// Manually require PHPMailer files since Composer autoloader is not assumed
require './PHPMailer.php';
require './SMTP.php';
//require 'Exception.php';
/*
// Manually require PHPMailer files since Composer autoloader is not assumed
require '../../app/libs/phpmailer/class.phpmailer.php';
require '../../app/libs/phpmailer/class.smtp.php';
//require 'Exception.php';

*/

// Initialize variables for form fields with default values
$smtpServer = $_POST['smtp_server'] ?? '';
$smtpPort = $_POST['smtp_port'] ?? '587'; // Default to common TLS port
$protocol = $_POST['protocol'] ?? 'tls'; // Default to TLS
$smtpUsername = $_POST['smtp_username'] ?? 'mne@lifebox.org';
$smtpPassword = $_POST['smtp_password'] ?? 'G.817939771353uk';
$subject = $_POST['subject'] ?? 'SMTP Test';
$message = $_POST['message'] ?? 'This is a test email sent from the SMTP Tester application.';
$fromEmail = $_POST['from_email'] ?? 'mne@lifebox.org'; // Sender email, often needs to match SMTP username's domain
$toEmail = $_POST['to_email'] ?? 'michaelktd@merqconsultancy.org'; // Recipient email

$resultMessage = '';
$resultType = ''; // 'success' or 'error'

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic validation (you might want more robust validation)
    if (empty($smtpServer) || empty($smtpPort) || empty($smtpUsername) || empty($smtpPassword) || empty($fromEmail) || empty($toEmail)) {
        $resultMessage = 'Please fill in all required fields (SMTP Server, Port, Username, Password, From Email, To Email).';
        $resultType = 'error';
    } else {
        $mail = new PHPMailer(true); // Enable exceptions

        try {
            // Server settings
            // Uncomment the line below in your PHPRUNNER custom event for verbose debug output:
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $smtpServer;                            // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $smtpUsername;                          // SMTP username
            $mail->Password   = $smtpPassword;                          // SMTP password
            $mail->SMTPSecure = $protocol === 'none' ? '' : $protocol;  // Enable implicit TLS encryption or STARTTLS
            $mail->Port       = (int)$smtpPort;                         // TCP port to connect to

            // Recipients
            $mail->setFrom($fromEmail, 'SMTP Tester');
            $mail->addAddress($toEmail);     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = strip_tags($message); // Plain text for non-HTML mail clients

            $mail->send();
            $resultMessage = 'Email sent successfully!';
            $resultType = 'success';
        } catch (Exception $e) {
            $resultMessage = "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $resultType = 'error';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTP Tester</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align to top to prevent jumping on message */
            min-height: 100vh;
            padding: 2rem;
        }

        .container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            color: #4b5563;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.25);
        }

        .btn-submit {
            background-color: #6366f1;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, transform 0.1s ease-in-out;
            border: none;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #4f46e5;
            transform: translateY(-1px);
        }

        .message-box {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .message-box.success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #34d399;
        }

        .message-box.error {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #ef4444;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">SMTP Tester</h1>

        <?php if ($resultMessage): ?>
            <div class="message-box <?php echo $resultType; ?>">
                <?php echo $resultMessage; ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="space-y-5">
            <div class="form-group">
                <label for="smtp_server">SMTP Server:</label>
                <input type="text" id="smtp_server" name="smtp_server" value="<?php echo htmlspecialchars($smtpServer); ?>" placeholder="e.g., smtp.example.com" required class="rounded-lg">
            </div>

            <div class="form-group">
                <label for="smtp_port">SMTP Server Port:</label>
                <input type="number" id="smtp_port" name="smtp_port" value="<?php echo htmlspecialchars($smtpPort); ?>" placeholder="e.g., 587" required class="rounded-lg">
            </div>

            <div class="form-group">
                <label for="protocol">Protocol:</label>
                <select id="protocol" name="protocol" class="rounded-lg">
                    <option value="STARTTLS" <?php echo ($protocol === 'STARTTLS') ? 'selected' : ''; ?>>STARTTLS (Outlook for Port 587)</option>
                    <option value="tls" <?php echo ($protocol === 'tls') ? 'selected' : ''; ?>>TLS (Recommended for Port 587)</option>
                    <option value="ssl" <?php echo ($protocol === 'ssl') ? 'selected' : ''; ?>>SSL (Recommended for Port 465)</option>
                    <option value="none" <?php echo ($protocol === 'none') ? 'selected' : ''; ?>>None (No Encryption)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="smtp_username">SMTP Username:</label>
                <input type="text" id="smtp_username" name="smtp_username" value="<?php echo htmlspecialchars($smtpUsername); ?>" placeholder="Your SMTP username" required class="rounded-lg">
            </div>

            <div class="form-group">
                <label for="smtp_password">SMTP Password:</label>
                <input type="password" id="smtp_password" name="smtp_password" value="<?php echo htmlspecialchars($smtpPassword); ?>" placeholder="Your SMTP password" required class="rounded-lg">
            </div>

            <div class="form-group">
                <label for="from_email">From Email Address:</label>
                <input type="email" id="from_email" name="from_email" value="<?php echo htmlspecialchars($fromEmail); ?>" placeholder="sender@example.com" required class="rounded-lg">
                <p class="text-sm text-gray-500 mt-1">This is the email address that will appear as the sender.</p>
            </div>

            <div class="form-group">
                <label for="to_email">To Email Address:</label>
                <input type="email" id="to_email" name="to_email" value="<?php echo htmlspecialchars($toEmail); ?>" placeholder="recipient@example.com" required class="rounded-lg">
                <p class="text-sm text-gray-500 mt-1">This is the email address where the test email will be sent.</p>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($subject); ?>" placeholder="SMTP Test" class="rounded-lg">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="Test SMTP message" class="rounded-lg"><?php echo htmlspecialchars($message); ?></textarea>
            </div>

            <button type="submit" class="btn-submit rounded-lg">Send Test Email</button>
        </form>
    </div>
</body>

</html>