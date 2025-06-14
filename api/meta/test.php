<?php
// Load environment variables manually from .env.dev
$envPath = __DIR__ . '/../../.env.dev';
if (!file_exists($envPath)) {
    die("Environment file not found at $envPath");
}
$env = parse_ini_file($envPath);

// Required environment variables (including the secret key)
$siteUrl = 'https://' . rtrim($env['MB_SITE_URL'] ?? '', '/');
$secretKey = $env['MB_SECRET_KEY'] ?? '';
if (empty($siteUrl) || empty($secretKey)) {
    die("Missing MB_SITE_URL or MB_SECRET_KEY in .env.dev");
}

// Get dashboard ID from URL (default to 2 if not set)
$dashboardId = isset($_GET['dashboard']) ? intval($_GET['dashboard']) : 2;

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

// Construct the iframe URL with the signed token
$iframeUrl = $siteUrl . "/embed/dashboard/" . $token . "#bordered=true&titled=true";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Embedded Metabase Dashboard</title>
</head>

<body>
    <h6>Lifebox M&E Embedded Dashboard Current ID: <?php echo htmlspecialchars($dashboardId); ?> DEMO </h6>
    <iframe
        src="<?php echo htmlspecialchars($iframeUrl); ?>"
        frameborder="0"
        width="100%"
        height="800px"
        allowtransparency></iframe>

    <h6>DEMO ONLY</h6>
</body>

</html>