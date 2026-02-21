<?php
// Load environment variables manually from .env.dev
//$envPath = __DIR__ . '/.env.dev';
$envPath = __DIR__ . '/../../.env.dev';
if (!file_exists($envPath)) {
    die("Environment file not found at $envPath");
}
$env = parse_ini_file($envPath);

// Required environment variables
$siteUrl = 'https://' . rtrim($env['MB_SITE_URL'] ?? '', '/');
$secretKey = $env['MB_SECRET_KEY'] ?? '';
if (empty($siteUrl) || empty($secretKey)) {
    die("Missing MB_SITE_URL or MB_SECRET_KEY in .env.dev");
}

// Get dashboard ID from URL (default to 2)
$dashboardId = isset($_GET['dashboard']) ? intval($_GET['dashboard']) : 6; // Default to dashboard 6 for reports

// JWT Header
$header = json_encode([
    'alg' => 'HS256',
    'typ' => 'JWT'
]);

// JWT Payload
$payload = json_encode([
    'resource' => ['dashboard' => $dashboardId],
    'params' => new stdClass(), // Optional: you can pass any filters here
    'exp' => time() + (60 * 60) // Expiry time (1 hour)
]);

// Base64Url encoding function
function base64url_encode($data)
{
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

// Encode Header and Payload
$base64UrlHeader = base64url_encode($header);
$base64UrlPayload = base64url_encode($payload);

// Create Signature
$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secretKey, true);
$base64UrlSignature = base64url_encode($signature);

// Combine to get the token
$token = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

$iframeUrl = $siteUrl . "/embed/dashboard/" . $token . "#background=false&bordered=true&titled=true";
//$iframeUrl = $siteUrl . "/embed/dashboard/" . $token . "#bordered=true&titled=true";
//$iframeUrl = $siteUrl . "/embed/dashboard/" . $token . "#bordered=true&titled=true&background=transparent&theme=night";
?>

<!DOCTYPE html>
<html>

<head>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body>

    <iframe
        src="<?php echo htmlspecialchars($iframeUrl); ?>"
        allowfullscreen
        allowtransparency="true">
        <h6>Lifebox M&E Embedded Dashboard Current ID: <?php echo htmlspecialchars($dashboardId); ?> DEMO </h6>
    </iframe>
</body>

</html>