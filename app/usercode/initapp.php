<?php
//	After application initialized event
// Function to generate a random 11-character string
function gen_random_string($length=11)

{

$chars ="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$final_rand='';

for($i=0;$i<$length; $i++)

{

$final_rand .= $chars[ rand(0,strlen($chars)-1)];



}

return $final_rand;

}


// mail settings

// =============================================
// SMTP Configuration with Fallback Support
// =============================================

// 1. Load SMTP Configurations from Database
$sql = "SELECT * FROM SMTP ORDER BY id ASC LIMIT 2"; // Get first two SMTP configurations
$rs = DB::Query($sql);
$smtpConfigs = [];
while ($row = $rs->fetchAssoc()) {
  $smtpConfigs[] = $row;
}

// If we have at least one SMTP configuration
if (!empty($smtpConfigs)) {
  // =============================================
  // 2. Global SMTP Settings Configuration
  // =============================================
  $globalSettings["useBuiltInMailer"] = false;
  $globalSettings["useCustomSMTPSettings"] = true;

  // Set primary configuration (ID 1)
  $primaryConfig = $smtpConfigs[0];
  $globalSettings["strSMTPUser"] = $primaryConfig["username"];
  $globalSettings["strSMTPServer"] = $primaryConfig["host"];
  $globalSettings["strSMTPPort"] = $primaryConfig["port"];
  $globalSettings["strSMTPPassword"] = $primaryConfig["password"];
  $globalSettings["strFromEmail"] = $primaryConfig["smtpfrom"];
  $secure = strtolower($primaryConfig["secure"]);
  $globalSettings["SMTPSecure"] = ($secure === 'tls') ? 'ssl' : 'tls';
  
  // Check if the protocol is 'starttls', then 'ssl', and default to 'tls'
  //$globalSettings["SMTPSecure"] = ($secure === 'starttls') ? 'starttls' : (($secure === 'ssl') ? 'ssl' : 'tls');

  // Enhanced email settings
  $globalSettings["SMTPAuth"] = true;
  $globalSettings["SMTPDebug"] = 3; // Enable verbose debug output
  $globalSettings["CharSet"] = 'UTF-8';
  $globalSettings["ContentType"] = 'text/html';
  $globalSettings["Encoding"] = 'quoted-printable';
  $globalSettings["isHTML"] = true;

  // =============================================
  // 3. Email Sending Function with Fallback
  // =============================================
  if (!function_exists('sendHtmlEmail')) {
    function sendHtmlEmail($to, $subject, $body, $altBody = '')
    {
      global $globalSettings, $smtpConfigs;

      // Try each SMTP configuration until one works
      foreach ($smtpConfigs as $config) {
        error_log("===== TRYING SMTP CONFIGURATION: " . $config["host"] . " =====");

        // Load PHPMailer
        require_once('../libs/phpmailer/class.phpmailer.php');
        require_once('../libs/phpmailer/class.smtp.php');

        $mail = new PHPMailer(true);

        try {
          // =============================================
          // 4. SMTP Configuration with Remote Fixes
          // =============================================
          $mail->isSMTP();

          // Force IPv4 if remote server
          $mail->Host = gethostbyname($config["host"]);
          $mail->Port = $config["port"];
          $mail->SMTPAuth = true;
          $mail->Username = $config["username"];
          $mail->Password = $config["password"];
          $secure = strtolower($config["secure"]);
          $mail->SMTPSecure = ($secure === 'ssl') ? 'ssl' : 'tls';

          // Critical remote server settings
          $mail->SMTPOptions = [
            'ssl' => [
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
            ],
            'socket' => [
              'bindto' => '0:0' // Force IPv4 explicitly
            ]
          ];

          // Timeout and connection settings
          $mail->Timeout = 30;
          $mail->SMTPKeepAlive = false;

          // =============================================
          // 5. Email Content Setup
          // =============================================
          $mail->setFrom($config["smtpfrom"], 'Lifebox M&E System');
          $mail->addAddress($to);
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $body . $globalSettings["htmlFooter"];
          $mail->AltBody = $altBody ?: strip_tags($body);

          // =============================================
          // 6. Pre-Send Connection Test
          // =============================================
          if (!$mail->smtpConnect()) {
            error_log("SMTP PRE-CONNECTION FAILED for " . $config["host"] . ": " . $mail->ErrorInfo);
            continue; // Try next configuration
          }

          // =============================================
          // 7. Attempt to Send Email
          // =============================================
          $result = $mail->send();

          if ($result) {
            error_log("Email successfully sent using " . $config["host"]);
            return true;
          } else {
            error_log("Email sending failed with " . $config["host"] . ": " . $mail->ErrorInfo);
            continue; // Try next configuration
          }
        } catch (Exception $e) {
          error_log("SMTP EXCEPTION with " . $config["host"] . ": " . $e->getMessage());
          continue; // Try next configuration
        }
      }

      // If we get here, all configurations failed
      error_log("ALL SMTP CONFIGURATIONS FAILED");
      return false;
    }
  }
} else {
  // =============================================
  // 8. Fallback Configuration
  // =============================================
  $globalSettings["useBuiltInMailer"] = true;
  $globalSettings["useCustomSMTPSettings"] = false;
  error_log("No SMTP configurations found in database - falling back to mail()");
}

// =============================================
// HTML Email Footer
// =============================================
$globalSettings["htmlFooter"] = '
<div align="center" style="margin: 30px 0; font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif; background-color: #078ca9e7; border: 1px solid #1e97b1; border-radius: 8px; padding: 20px; box-shadow: 0 3px 10px #0079a7cc;">
    <p style="font-size: 16px; color: white; margin: 0;">
        <strong>Lifebox Monitoring &amp; Evaluation System</strong> <br>
        <span style="font-style: italic; color: #f8f9fa;">Version 0.1 | Build 0.7</span><br>
        <span style="color: white;">All Rights Reserved.</span>
        <img src="https://www.lifebox.org/wp-content/themes/lifebox/assets/images/lblogo.svg" alt="Lifebox Logo" width="15" height="15" style="vertical-align: middle;">
        <a href="https://lifebox.org" style="text-decoration: none; color: white; font-weight: bold;">Lifebox</a> ©
        ' . date('Y') . '<br>
        <span style="color: #ff6b35;">Designed &amp; Developed By</span>
        <a href="https://merqconsultancy.org" style="text-decoration: none; color: white; font-weight: bold;">MERQ Consultancy</a>
        <br><br>
        <a href="' . rtrim($globalSettings["rootURL"], '/') . '" style="display: inline-block; background-color: #ffc107; color: #212529; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-weight: bold;">
            <i class="fa fa-home" style="margin-right: 5px;"></i>Home
        </a>
    </p>
</div>';

// PHP mailer configuration (using primary config if available)
if (!empty($smtpConfigs)) {
  ini_set('SMTP', $smtpConfigs[0]["host"]);
  ini_set('smtp_port', $smtpConfigs[0]["port"]);
  ini_set('sendmail_from', $smtpConfigs[0]["smtpfrom"]);
}

error_log("SMTP configuration loaded successfully");

  // end of smtp mail settings
  // Place event code here.
  // Use "Add Action" button to add code snippets.;

?>