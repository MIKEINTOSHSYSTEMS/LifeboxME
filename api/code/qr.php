<?php

/**
 * QR Code Generator with Auto URL Detection
 * Generates QR codes for the script location URL with automatic protocol and host detection
 * Uses api.qrserver.com API
 */

class QRGenerator
{
    private $size;
    private $margin;
    private $errorCorrectionLevel;
    private $qrScriptPath;

    public function __construct($size = 200, $margin = 10, $errorCorrectionLevel = 'L')
    {
        $this->size = $size;
        $this->margin = $margin;
        $this->errorCorrectionLevel = $errorCorrectionLevel;

        // Store the actual path of qr.php when class is instantiated
        $this->qrScriptPath = $this->getActualScriptPath();
    }

    /**
     * Get the actual path where qr.php is located
     */
    private function getActualScriptPath()
    {
        // Use debug backtrace to find where qr.php is actually located
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $qrScriptFile = null;

        foreach ($backtrace as $trace) {
            if (isset($trace['file']) && basename($trace['file']) === 'qr.php') {
                $qrScriptFile = $trace['file'];
                break;
            }
        }

        if ($qrScriptFile && file_exists($qrScriptFile)) {
            // Get the directory of qr.php
            $qrDir = dirname($qrScriptFile);
            $documentRoot = $_SERVER['DOCUMENT_ROOT'];

            // Convert absolute path to web path
            $webPath = str_replace($documentRoot, '', $qrDir);
            $webPath = str_replace('\\', '/', $webPath); // Windows compatibility

            return rtrim($webPath, '/');
        }

        // Fallback to current script path if couldn't determine
        return dirname($_SERVER['SCRIPT_NAME']);
    }

    /**
     * Get script location URL with automatic protocol detection
     */
    private function getScriptUrl()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];

        return $protocol . $host . $this->qrScriptPath;
    }

    /**
     * Generate QR code using QR Server API with custom colors
     */
    public function generateQRCode($url = null, $color = '2c5aa0', $bgcolor = 'ffffff')
    {
        if ($url === null) {
            $url = $this->getScriptUrl();
        }

        $size = $this->size . 'x' . $this->size;
        $encodedUrl = urlencode($url);
        $margin = $this->margin;
        $ecl = $this->errorCorrectionLevel;

        // Generate QR with custom colors
        return "https://api.qrserver.com/v1/create-qr-code/?size={$size}&data={$encodedUrl}&margin={$margin}&ecc={$ecl}&color={$color}&bgcolor={$bgcolor}&format=png";
    }

    /**
     * Generate QR code image tag with beautiful styling
     */
    public function generateQRImage($url = null, $alt = "QR Code", $color = '2c5aa0', $bgcolor = 'ffffff')
    {
        $qrUrl = $this->generateQRCode($url, $color, $bgcolor);
        return "<img src=\"{$qrUrl}\" alt=\"{$alt}\" title=\"Scan this QR code to visit this location\" class=\"qr-image\" style=\"border: 3px solid #cca028; border-radius: 12px; padding: 8px; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: transform 0.3s ease;\">";
    }

    /**
     * Generate complete QR widget with beautiful styling
     */
    public function generateWidget($title = "Scan QR Code", $showUrl = true, $color = '2c5aa0', $bgcolor = 'ffffff')
    {
        $scriptUrl = $this->getScriptUrl();
        $scriptPath = $this->qrScriptPath;

        $widget = "
        <div class=\"qr-widget\" style=\"
            text-align: center; 
            padding: 20px; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px; 
            border: 2px solid #cca028;
            max-width: 280px; 
            margin: 15px auto;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            font-family: 'Arial', sans-serif;
            color: white;
            position: relative;
            overflow: hidden;
        \">
            <!-- Decorative elements -->
            <div style=\"position: absolute; top: -50px; right: -50px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%;\"></div>
            <div style=\"position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%;\"></div>
            
            <div class=\"qr-title\" style=\"
                font-size: 16px; 
                font-weight: bold; 
                margin-bottom: 15px;
                text-shadow: 0 2px 4px rgba(0,0,0,0.3);
                position: relative;
                z-index: 2;
            \">
                ✨ {$title} ✨
            </div>
            <div class=\"qr-image-container\" style=\"position: relative; z-index: 2;\">
                {$this->generateQRImage(null, 'QR Code',$color,$bgcolor)}
            </div>";

        if ($showUrl) {
            $widget .= "
            <div class=\"qr-url\" style=\"
                margin-top: 15px; 
                font-size: 12px; 
                color: rgba(255,255,255,0.9); 
                word-break: break-all;
                background: rgba(0,0,0,0.2);
                padding: 10px;
                border-radius: 8px;
                border-left: 3px solid #28a745;
                position: relative;
                z-index: 2;
            \">
                <strong style=\"color: #ffc107;\">🌐 URL:</strong><br>
                " . htmlspecialchars($scriptUrl) . "
            </div>
            <div class=\"qr-path\" style=\"
                margin-top: 8px; 
                font-size: 11px; 
                color: rgba(255,255,255,0.8);
                background: rgba(0,0,0,0.15);
                padding: 6px;
                border-radius: 6px;
                border-left: 3px solid #17a2b8;
                position: relative;
                z-index: 2;
            \">
                <strong style=\"color: #dc3545;\">📁 Path:</strong> " . htmlspecialchars($scriptPath) . "
            </div>";
        }

        $widget .= "
            <div class=\"qr-instruction\" style=\"
                margin-top: 12px; 
                font-size: 11px; 
                color: rgba(255,255,255,0.9);
                background: rgba(255,193,7,0.2);
                padding: 8px;
                border-radius: 6px;
                border: 1px solid rgba(255,193,7,0.3);
                position: relative;
                z-index: 2;
            \">
                📱 Scan to visit this location
            </div>
        </div>
        
        <style>
            .qr-widget:hover .qr-image {
                transform: scale(1.05);
            }
            .qr-image:hover {
                transform: scale(1.08) !important;
                box-shadow: 0 6px 20px rgba(0,0,0,0.25) !important;
            }
        </style>";

        return $widget;
    }

    /**
     * Generate a vibrant colorful widget with random colors
     */
    public function generateVibrantWidget($title = "Scan QR Code", $showUrl = true)
    {
        $colorSchemes = [
            ['color' => '2c5aa0', 'bgcolor' => 'ffffff', 'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'],
            ['color' => 'dc3545', 'bgcolor' => 'ffffff', 'gradient' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)'],
            ['color' => '28a745', 'bgcolor' => 'ffffff', 'gradient' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)'],
            ['color' => 'ffc107', 'bgcolor' => '2c5aa0', 'gradient' => 'linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%)'],
            ['color' => '17a2b8', 'bgcolor' => 'ffffff', 'gradient' => 'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)'],
        ];

        $scheme = $colorSchemes[array_rand($colorSchemes)];

        $scriptUrl = $this->getScriptUrl();
        $scriptPath = $this->qrScriptPath;

        $widget = "
        <div class=\"qr-widget-vibrant\" style=\"
            text-align: center; 
            padding: 20px; 
            background: {$scheme['gradient']};
            border-radius: 20px; 
            border: 3px solid #cca028;
            max-width: 300px; 
            margin: 15px auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            font-family: 'Arial', sans-serif;
            color: #333;
            position: relative;
            overflow: hidden;
        \">
            <!-- Animated background elements -->
            <div style=\"position: absolute; top: -60px; right: -60px; width: 120px; height: 120px; background: rgba(255,255,255,0.15); border-radius: 50%; animation: float 6s ease-in-out infinite;\"></div>
            <div style=\"position: absolute; bottom: -40px; left: -40px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 8s ease-in-out infinite reverse;\"></div>
            
            <div class=\"qr-title\" style=\"
                font-size: 18px; 
                font-weight: bold; 
                margin-bottom: 15px;
                color: white;
                text-shadow: 0 2px 8px rgba(0,0,0,0.3);
                position: relative;
                z-index: 2;
            \">
                🎯 {$title} 🎯
            </div>
            <div class=\"qr-image-container\" style=\"position: relative; z-index: 2;\">
                " . $this->generateQRImage(null, 'QR Code', $scheme['color'], $scheme['bgcolor']) . "
            </div>";

        if ($showUrl) {
            $widget .= "
            <div class=\"qr-url\" style=\"
                margin-top: 15px; 
                font-size: 12px; 
                color: white; 
                word-break: break-all;
                background: rgba(255,255,255,0.2);
                padding: 12px;
                border-radius: 10px;
                border: 1px solid rgba(255,255,255,0.3);
                backdrop-filter: blur(10px);
                position: relative;
                z-index: 2;
            \">
                <strong style=\"color: #ffc107; display: block; margin-bottom: 5px;\">🌐 Website URL</strong>
                " . htmlspecialchars($scriptUrl) . "
            </div>
            <div class=\"qr-path\" style=\"
                margin-top: 10px; 
                font-size: 11px; 
                color: white;
                background: rgba(0,0,0,0.2);
                padding: 8px;
                border-radius: 8px;
                border-left: 3px solid #28a745;
                position: relative;
                z-index: 2;
            \">
                <strong style=\"color: #17a2b8;\">📁 Location:</strong> " . htmlspecialchars($scriptPath) . "
            </div>";
        }

        $widget .= "
            <div class=\"qr-instruction\" style=\"
                margin-top: 15px; 
                font-size: 12px; 
                color: white;
                background: rgba(204, 160, 40, 0.3);
                padding: 10px;
                border-radius: 8px;
                border: 1px solid rgba(204, 160, 40, 0.5);
                position: relative;
                z-index: 2;
            \">
                📱 Scan QR Code to Visit
            </div>
        </div>
        
        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-10px) rotate(180deg); }
            }
            .qr-widget-vibrant:hover .qr-image {
                transform: scale(1.08);
            }
            .qr-image:hover {
                transform: scale(1.12) !important;
                box-shadow: 0 8px 25px rgba(0,0,0,0.3) !important;
            }
        </style>";

        return $widget;
    }

    /**
     * Get script URL (public method)
     */
    public function getScriptUrlPublic()
    {
        return $this->getScriptUrl();
    }

    /**
     * Get script path (public method)
     */
    public function getScriptPath()
    {
        return $this->qrScriptPath;
    }
}

/**
 * Standalone QR code display function for easy embedding
 */
function displayQRCode($size = 200, $title = "Scan QR Code", $showUrl = true)
{
    $qr = new QRGenerator($size);
    echo $qr->generateWidget($title, $showUrl);
}

/**
 * Display vibrant QR code
 */
function displayVibrantQRCode($size = 200, $title = "Scan QR Code", $showUrl = true)
{
    $qr = new QRGenerator($size);
    echo $qr->generateVibrantWidget($title, $showUrl);
}

/**
 * Function to get QR code image URL only
 */
function getQRCodeUrl($size = 200)
{
    $qr = new QRGenerator($size);
    return $qr->generateQRCode();
}

/**
 * Function to get QR code image tag only
 */
function getQRCodeImage($size = 200, $alt = "QR Code")
{
    $qr = new QRGenerator($size);
    return $qr->generateQRImage(null, $alt);
}

/**
 * Function to get script location URL
 */
function getScriptLocationUrl()
{
    $qr = new QRGenerator();
    return $qr->getScriptUrlPublic();
}

/**
 * Function to get script path
 */
function getScriptPath()
{
    $qr = new QRGenerator();
    return $qr->getScriptPath();
}

// Handle direct access to qr.php
if (basename($_SERVER['PHP_SELF']) == 'qr.php') {
    // Display standalone QR code page
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Code Generator</title>
        <style>
            :root {
                --secondary-color: #cca028;
                --success-color: #28a745;
                --info-color: #17a2b8;
                --warning-color: #ffc107;
                --danger-color: #dc3545;
            }

            body {
                font-family: 'Arial', sans-serif;
                max-width: 1000px;
                margin: 0 auto;
                padding: 20px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
            }

            .container {
                background: white;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            }

            .header {
                text-align: center;
                margin-bottom: 30px;
            }

            .header h1 {
                color: #2c5aa0;
                font-size: 2.5em;
                margin-bottom: 10px;
                background: linear-gradient(135deg, #2c5aa0, #764ba2);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .demo-section {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
                margin: 30px 0;
            }

            .instructions {
                background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
                padding: 25px;
                border-radius: 15px;
                border-left: 5px solid var(--secondary-color);
                margin: 20px 0;
            }

            .url-display,
            .path-display {
                background: #f8f9fa;
                padding: 15px;
                border-radius: 10px;
                margin: 15px 0;
                border-left: 4px solid var(--info-color);
            }

            .api-examples {
                background: #fff3cd;
                padding: 20px;
                border-radius: 10px;
                border-left: 4px solid var(--warning-color);
                margin: 20px 0;
            }

            code {
                background: #2c5aa0;
                color: white;
                padding: 4px 8px;
                border-radius: 5px;
                font-family: 'Courier New', monospace;
                font-size: 0.9em;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <h1>🎯 QR Code Generator</h1>
                <p style="color: #666; font-size: 1.1em;">Beautiful & Vibrant QR Codes for Script Location</p>
            </div>

            <div class="instructions">
                <h3 style="color: #2c5aa0; margin-bottom: 15px;">🚀 How to use this script:</h3>
                <p><strong>Method 1 (Simple):</strong> <code>&lt;?php include 'qr.php'; displayQRCode(); ?&gt;</code></p>
                <p><strong>Method 2 (Vibrant):</strong> <code>&lt;?php include 'qr.php'; displayVibrantQRCode(); ?&gt;</code></p>
                <p><strong>Method 3 (Class):</strong> <code>&lt;?php $qr = new QRGenerator(); echo $qr->generateVibrantWidget(); ?&gt;</code></p>
                <p><strong>Method 4 (Image only):</strong> <code>&lt;?php echo getQRCodeImage(200); ?&gt;</code></p>
            </div>

            <div class="demo-section">
                <?php
                $qr = new QRGenerator();
                echo $qr->generateWidget("Standard QR Code", true);
                echo $qr->generateVibrantWidget("Vibrant QR Code", true);
                ?>
            </div>

            <div class="path-display">
                <strong>🎯 Script Location Path:</strong><br>
                <code style="background: #28a745; padding: 8px 12px; display: inline-block; margin-top: 8px;">
                    <?php echo htmlspecialchars($qr->getScriptPath()); ?>
                </code>
            </div>

            <div class="url-display">
                <strong>🌐 Full Script URL:</strong><br>
                <code style="background: #17a2b8; padding: 8px 12px; display: inline-block; margin-top: 8px; word-break: break-all;">
                    <?php echo htmlspecialchars($qr->getScriptUrlPublic()); ?>
                </code>
            </div>

            <div class="api-examples">
                <h3 style="color: #856404; margin-bottom: 15px;">🔧 Direct API Usage Examples:</h3>
                <p><strong>Script location QR:</strong> <code>qr.php?api=image</code></p>
                <p><strong>Custom size:</strong> <code>qr.php?api=image&size=300</code></p>
                <p><strong>Custom URL:</strong> <code>qr.php?url=<?php echo urlencode('https://example.com'); ?></code></p>
            </div>
        </div>
    </body>

    </html>
<?php
    exit;
}
?>