<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System API Gateway</title>
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4G5V0x1QG4p6dkhFp6F6d5YQg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background-color: #0069A2;
            color: #ffffff;
            display: flex;
            flex-direction: column;
        }

        /* ===== TOP SECTION ===== */
        .hero {
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
        }

        .container {
            animation: fadeScaleIn 1.2s ease forwards;
        }

        .logo {
            width: 120px;
            max-width: 40%;
            margin-bottom: 24px;
            animation: pulse 3s ease-in-out infinite;
        }

        h1 {
            font-size: clamp(1.4rem, 3vw, 2.2rem);
            font-weight: 600;
            margin-bottom: 12px;
        }

        h2 {
            font-size: clamp(1rem, 2.5vw, 1.4rem);
            font-weight: 400;
            opacity: 0.9;
            margin-bottom: 16px;
        }

        .construction-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #FFD200;
            animation: bounce 2s infinite;
        }

        .home-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background-color: #FFD200;
            color: #001234;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .home-button i {
            margin-right: 8px;
        }

        .home-button:hover {
            background-color: #ffffff;
            color: #001234;
            transform: translateY(-2px);
        }

        /* ===== BOTTOM SECTION ===== */
        .phpinfo-section {
            background: #001234;
            color: #00E1FF;
            padding: 20px;
            overflow-x: auto;
        }

        .phpinfo-section table {
            width: 100%;
            border-collapse: collapse;
        }

        /* ===== Animations ===== */
        @keyframes fadeScaleIn {
            from {
                opacity: 0;
                transform: scale(0.95) translateY(10px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.03);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }
    </style>
</head>

<body>

    <!-- TOP SECTION -->
    <section class="hero">
        <div class="container">
            <img
                src="/assets/img/lblogo-white.svg"
                alt="Lifebox Logo"
                class="logo">

            <h1>Welcome To Lifebox's M&E System API's List</h1>
            <h2>Currently Under Development!</h2>

            <!-- Construction Icon -->
            <div class="construction-icon">
                <i class="fa-solid fa-person-digging"></i>
            </div>

            <!-- Home Button -->
            <a
                href="/"
                class="home-button"
                target="_blank"
                rel="noopener noreferrer">
                <i class="fa-solid fa-house"></i>
                Go to Home
            </a>
        </div>
    </section>

    <!-- BOTTOM SECTION -->
    <section class="phpinfo-section">
        <?php
        phpinfo();
        ?>
    </section>

</body>

</html>