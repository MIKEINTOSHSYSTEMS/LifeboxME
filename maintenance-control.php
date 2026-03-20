<?php
// maintenance-control.php
// Password protect this file or restrict access to admin IPs only

session_start();

// Simple authentication
$admin_password = 'LifeboxAdmin@Mne7';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['password']) || $_POST['password'] !== $admin_password) {
        die('Invalid password');
    }

    require_once __DIR__ . '/maintenance.config';

    if (isset($_POST['enable'])) {
        setMaintenanceMode(true);
        $message = "Maintenance mode ENABLED successfully!";
    } elseif (isset($_POST['disable'])) {
        setMaintenanceMode(false);
        $message = "Maintenance mode DISABLED successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox Maintenance Control</title>
    <link rel="icon" type="image/png" href="./assets/img/lb_favicon.svg">
    <!-- Google Fonts for a cleaner look -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: <?php echo $bg_color; ?>;
            color: <?php echo $text_color; ?>;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-image: linear-gradient(135deg, rgba(0, 28, 54, 0.95) 0%, rgba(0, 39, 75, 0.95) 100%), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M0,0 L100,100 M100,0 L0,100" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .container {
            background-color: #7eb7dd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 18px;
            color: #555;
        }

        .form-group {
            margin: 20px 0;
        }

        input[type="password"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            padding: 12px 25px;
            margin: 10px 5px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .enable {
            background-color: #e74c3c;
            color: white;
        }

        .enable:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .disable {
            background-color: #2ecc71;
            color: white;
        }

        .disable:hover {
            background-color: #27ae60;
            transform: scale(1.05);
        }

        .message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 16px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Status Section */
        .status {
            padding: 15px;
            margin: 20px 0;
            font-size: 16px;
            border-radius: 8px;
            background-color: #7eb9dd;
        }

        .status span {
            font-weight: bold;
        }

        .status-enabled {
            color: #e74c3c;
        }

        .status-disabled {
            color: #2ecc71;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="Lifebox_logo.png" height="50px" alt="Lifebox Logo" class="logo pulse-animation">

        <h1>Lifebox Maintenance Control</h1>

        <?php if (isset($message)): ?>
            <div class="message success"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" name="enable" class="enable">
                    <i class="fas fa-lock"></i> Enable Maintenance Mode
                </button>
                <button type="submit" name="disable" class="disable">
                    <i class="fas fa-unlock"></i> Disable Maintenance Mode
                </button>
            </div>
        </form>
        <div><a href="index.php">Go To Home</a></div>
        <div class="status">
            <h3>Current Status:</h3>
            <p>
                Maintenance Mode:
                <strong>
                    <?php
                    if (file_exists(__DIR__ . '/maintenance.flag')) {
                        echo '<span class="status-enabled">ENABLED</span>';
                    } else {
                        echo '<span class="status-disabled">DISABLED</span>';
                    }
                    ?>
                </strong>
            </p>
            <p>Flag file exists: <?php echo file_exists(__DIR__ . '/maintenance.flag') ? 'Yes' : 'No'; ?></p>
        </div>
    </div>

    <!-- Font Awesome CDN for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>