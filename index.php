<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        img,
        svg {
            height: 40px;
            vertical-align: middle;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: #0079a5db !important;
        }

        .slider {
            height: 90vh;
            background: url('https://via.placeholder.com/1500x600') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #248cb2;
            text-align: center;
        }

        .features .icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            font-size: 1.5rem;
        }

        footer {
            background: #0079a5;
            color: white;
            padding: 30px 0;
        }

        footer a {
            color: white;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img srcset="https://www.lifebox.org/wp-content/themes/lifebox/assets//images/lblogo.svg 1x, https://www.lifebox.org/wp-content/themes/lifebox/assets//images/lblogo.svg 2x" alt="Lifebox logo" data-src="https://www.lifebox.org/wp-content/themes/lifebox/assets//images/lblogo.svg" class="header-logo-image header-logo-image--light lazyloaded" src="https://www.lifebox.org/wp-content/themes/lifebox/assets//images/lblogo.svg">
            <a class="navbar-brand" href="#"> M&E System</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#launch">Launch</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="slider">
        <div class="container">
            <h1 class="display-4 fw-bold">Welcome to Lifebox M&E System</h1>
            <p class="lead">Modern, Interactive, and User-Friendly Monitoring & Evaluation System</p>
            <button class="btn btn-primary mt-3" onclick="location.href='app/index.htm'">Get Started</button>
        </div>
    </header>

    <section id="features" class="features py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4">System Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon text-primary"><i class="fas fa-chart-line"></i></div>
                    <h5>Real-time Dashboards</h5>
                </div>
                <div class="col-md-4">
                    <div class="icon text-success"><i class="fas fa-database"></i></div>
                    <h5>Data Management</h5>
                </div>
                <div class="col-md-4">
                    <div class="icon text-danger"><i class="fas fa-bell"></i></div>
                    <h5>Alerts and Notifications</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 text-center">
        <div class="container">
            <h2>About Lifebox M&E System</h2>
            <p>Lifebox M&E System is a comprehensive platform for monitoring and evaluating projects, ensuring transparency, efficiency, and real-time insights for better decision-making.</p>
        </div>
    </section>

    <section id="contact" class="bg-light py-5 text-center">
        <div class="container">
            <h2>Contact Information</h2>
            <p>Email: info@lifebox.org | Phone: +123 456 7890</p>
        </div>
    </section>

    <section id="launch" class="py-5 text-center">
        <div class="container">
            <h2>Countdown to Launch</h2>
            <div id="countdown" class="countdown"></div>
            <button class="btn btn-primary mt-3" onclick="location.href='app/index.htm'">Get Started</button>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <img src="https://www.lifebox.org/wp-content/themes/lifebox/assets//images/lblogo.svg" alt="Lifebox Logo" class="mb-3">
            <p>&copy; <span id="year"></span> <a href="https://lifebox.org">Lifebox</a> M&E System. Designed & Developed by <a href="https://merqconsultancy.org"> MERQ Consultancy</a>.</p>
            <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Countdown Timer
        const launchDate = new Date('October 7, 2025 00:00:00').getTime();
        const countdownEl = document.getElementById('countdown');

        setInterval(() => {
            const now = new Date().getTime();
            const distance = launchDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownEl.innerHTML = `
        <div><strong>${days}</strong> Days</div>
        <div><strong>${hours}</strong> Hours</div>
        <div><strong>${minutes}</strong> Minutes</div>
        <div><strong>${seconds}</strong> Seconds</div>
      `;
        }, 1000);

        // Set footer year
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>