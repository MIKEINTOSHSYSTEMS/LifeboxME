<?php
// You can include this 404 page logic in your PHP file.
http_response_code(404); // Set HTTP response to 404
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Lifebox M&E System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="./assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="./assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="./assets/img/lb_favicon.svg" color="#038DA9">
    <style>
        /* Base Colors */
        :root {
            --primary-color: #0079a5;
            --secondary-color: #1e6a7d;
            --accent-color: #ff6b35;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --dark-bg: #003447;
            /* Dark Background */
            --light-yellow: #fffeee;
            --lifebox-yellow: #f2ea60;
            --lifebox-green: #6fb395;
            --lifebox-red: #ec3627;
            --lifebox-blue: #079ca7;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: var(--dark-bg);
            font-family: 'Arial', sans-serif;
            color: var(--light-color);
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .error-wrapper {
            max-width: 1700px;
            /*padding: 5px;*/
            padding-top: 50px;
            padding-bottom: 50px;
            padding-right: 50px;
            padding-left: 50px;
            background: #003447;
            border-radius: 15px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1.5s ease-in-out;
            transition: transform 0.3s ease;
        }

        @keyframes fadeInUp {
            0% {
                transform: translateY(100px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .error-logo img {
            width: 130px;
            margin-bottom: 30px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .error-text h1 {
            font-size: 80px;
            font-weight: bold;
            color: var(--lifebox-red);
            margin-bottom: 15px;
        }

        .error-text p {
            font-size: 22px;
            color: var(--light-color);
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .btn {
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 50px;
            transition: all 0.4s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn i {
            margin-right: 8px;
        }

        .btn-primary {
            background-color: var(--lifebox-green);
            border-color: var(--lifebox-green);
        }

        .btn-primary:hover {
            background-color: var(--lifebox-blue);
            border-color: var(--lifebox-blue);
            transform: translateY(-3px);
        }

        .btn-outline-primary {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: #fff;
            transform: translateY(-3px);
        }

        .btn-outline-light {
            border-color: var(--lifebox-yellow);
            color: var(--lifebox-yellow);
        }

        .btn-outline-light:hover {
            background-color: var(--lifebox-yellow);
            color: #fff;
            transform: translateY(-3px);
        }

        .error-footer {
            margin-top: 30px;
        }

        .error-footer a {
            color: var(--light-color);
            font-size: 16px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .error-footer a:hover {
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .error-wrapper {
                padding: 30px;
            }

            .error-logo img {
                width: 100px;
            }

            .error-text h1 {
                font-size: 60px;
            }

            .error-text p {
                font-size: 18px;
            }

            .btn {
                font-size: 16px;
                padding: 12px 24px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="error-wrapper">
            <div class="error-logo">
                <img src="./assets/img/lblogo-white.svg" alt="Lifebox Logo">
            </div>
            <div class="error-text">
                <h1>Oops! 404</h1>
                <h1>🤔</h1>
                <p>Looks like you got lost!</p>
                <p>It seems the page you're looking for is missing or has been moved. Don't worry, we'll guide you back!</p>
                <!-- Home Button with Icon -->
                <a href="/" class="btn btn-primary">
                    <i class="fas fa-home"></i> Go Back Home
                </a>
                <!-- Dashboard Button with Icon -->
                <a href="/app/login.php" class="btn btn-outline-primary">
                    <i class="fas fa-tachometer-alt"></i> Go Dashboard
                </a>
                <!-- Tests Button with Icon -->
                <a href="/modules/test/lbq/public/" class="btn btn-outline-light ms-2">
                    <i class="fas fa-vials"></i> Go to Tests
                </a>
            </div>
            <div class="error-footer">
                <a href="/#contact">Need Help? Contact Support</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>