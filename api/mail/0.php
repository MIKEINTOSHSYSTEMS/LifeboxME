use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
//Server settings
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

//OAuth2 authentication setup goes here (covered below)

//Sender and recipient settings
$mail->setFrom('youremail@yourdomain.com', 'Your Name');
$mail->addAddress('recipient@domain.com', 'Recipient Name');

//Content
$mail->isHTML(true);
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email using Office 365 SMTP and PHPMailer.';

//Send email
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}