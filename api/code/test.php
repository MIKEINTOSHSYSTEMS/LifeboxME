<?php
include '../../modules/test/lbq/public/qr.php';
//include 'qr.php';

echo "<h1 style='text-align: center; color: #079ca7;'>QR Code Generator Test Page</h1>";
echo "<div style='max-width: 1200px; margin: 0 auto; padding: 20px;'>";

echo "<h2>1. Standard QR Code Widget</h2>";
displayQRCode(200, "Standard QR Code", true);

echo "<h2>2. Vibrant QR Code Widget</h2>";
displayVibrantQRCode(200, "Vibrant QR Code", true);

echo "<h2>3. Multiple Color Schemes</h2>";
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;'>";

$qr1 = new QRGenerator(150);
echo $qr1->generateVibrantWidget("Location 1", true);

$qr2 = new QRGenerator(150);
echo $qr2->generateVibrantWidget("Location 2", true);

$qr3 = new QRGenerator(150);
echo $qr3->generateVibrantWidget("Location 3", true);

echo "</div>";

echo "<h2>4. Just QR Image</h2>";
echo getQRCodeImage(150, "QR Code Image");

echo "<h2>5. Script Information</h2>";
echo "<div style='background: #f8f9fa; padding: 15px; border-radius: 10px;'>";
echo "<strong>QR.php Location:</strong> " . getScriptPath() . "<br>";
echo "<strong>Full URL:</strong> " . getScriptLocationUrl() . "<br>";
echo "<strong>Test.php Location:</strong> " . dirname($_SERVER['SCRIPT_NAME']) . "<br>";
echo "</div>";

echo "</div>";
