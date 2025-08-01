<?php
// File: ./dev/index.php
// Lifebox M&E System Developers Documentation Hub
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System - Developers Documentation</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/dev.css">
    <script src="./assets/scripts/dev.js"></script>
    <link rel="shortcut icon" type="image/png" href="/lb.svg" />
    <style>

    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="#">
                    <img src="/assets/img/lblogo-dark.svg" width="100%" alt="Lifebox M&E Logo">
                    <!--<i class="fas fa-code fa-2x" style="color: #ff7a00;"></i>-->
                    <!--<h1>M&E System Developers Documentation</h1>-->
                </a>
            </div>

            <nav>
                <ul id="mainMenu">
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="/documentation/">Main Documentation</a></li>
                    <li><a href="#">GitHub</a></li>
                    <li><a href="https://merqconsultancy/contact">Contact</a></li>
                </ul>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>
                < />
            </h1>
            <h2>Live Developer Documentation</h2>
            <p>Everything you need to build, extend, and integrate with the Lifebox M&E System. Access detailed documentation for database schemas, APIs, and Docker architecture.</p>
            <div class="hero-buttons">
                <a href="#documentation" class="btn btn-primary">
                    <i class="fas fa-book-open"></i> Explore Documentation
                </a>
                <a href="/" class="btn btn-secondary">
                    <i class="fas fa-play"></i> Go To Lifebox M&E System
                </a>
            </div>
        </div>
    </section>

    <!-- Documentation Cards Section -->
    <section class="docs-section" id="documentation">
        <div class="section-header">
            <h2>Documentation Sections</h2>
            <p>Explore our comprehensive documentation resources for all aspects of the Lifebox M&E System</p>
        </div>

        <div class="cards-container">
            <!-- Database Documentation Card -->
            <div class="doc-card">
                <div class="card-header">
                    <i class="fas fa-database"></i>
                    <h3>Database Documentation</h3>
                </div>
                <div class="card-body">
                    <p>Detailed documentation of the database schema, relationships, and data models powering the Lifebox M&E System.</p>
                    <ul class="features-list">
                        <li>Complete ER diagrams for all modules</li>
                        <li>Table relationships and constraints</li>
                        <li>Data dictionaries with field descriptions</li>
                        <li>Query optimization techniques</li>
                        <li>Data migration strategies</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="./db/" class="card-btn">
                        <i class="fas fa-arrow-right"></i> Explore Database Docs
                    </a>
                </div>
            </div>

            <!-- API Documentation Card -->
            <div class="doc-card">
                <div class="card-header">
                    <i class="fas fa-code"></i>
                    <h3>API Documentation</h3>
                </div>
                <div class="card-body">
                    <p>Comprehensive API reference with interactive examples for integrating with the Lifebox M&E System.</p>
                    <ul class="features-list">
                        <li>Interactive API playground</li>
                        <li>Endpoint documentation with examples</li>
                        <li>Authentication methods</li>
                        <li>SDKs for multiple languages</li>
                        <li>Rate limiting and best practices</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="./api/" class="card-btn">
                        <i class="fas fa-arrow-right"></i> Explore API Docs
                    </a>
                </div>
            </div>

            <!-- Docker Documentation Card -->
            <div class="doc-card">
                <div class="card-header">
                    <i class="fab fa-docker"></i>
                    <h3>Docker & Deployment</h3>
                </div>
                <div class="card-body">
                    <p>Detailed guides for Docker architecture, deployment strategies, and infrastructure management.</p>
                    <ul class="features-list">
                        <li>Container architecture diagrams</li>
                        <li>Docker Compose configurations</li>
                        <li>CI/CD pipeline setup</li>
                        <li>Scaling and performance tuning</li>
                        <li>Troubleshooting guides</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="./docker/" class="card-btn">
                        <i class="fas fa-arrow-right"></i> Explore Docker Docs
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview-section" id="overview">
        <div class="overview-container">
            <div class="overview-content">
                <h2>About the Lifebox M&E System</h2>
                <p>The Lifebox M&E Monitoring and Evaluation System is a comprehensive platform designed to track, analyze, and report on various development programs and initiatives. Built with scalability and extensibility in mind, it provides robust tools for data collection, analysis, and visualization.</p>
                <p>This documentation portal serves as the central hub for developers working with the Lifebox M&E System. Whether you're integrating with our APIs, extending functionality, or deploying custom instances, you'll find comprehensive resources here.</p>
                <p>The system follows a modern microservices architecture powered by Docker containers, with a RESTful API for integrations and a well-documented database schema for custom reporting and analysis.</p>
            </div>
            <div class="overview-image">
                <div class="architecture-diagram">
                    <h3>System Architecture</h3>
                    <div class="architecture-layers">
                        <div class="layer">
                            <i class="fas fa-layer-group"></i>
                            <span>Presentation Layer (React/HTML/CSS)</span>
                        </div>
                        <div class="layer">
                            <i class="fas fa-code"></i>
                            <span>Application Layer (PHP/Python)</span>
                        </div>
                        <div class="layer">
                            <i class="fas fa-plug"></i>
                            <span>API Layer (REST/GraphQL)</span>
                        </div>
                        <div class="layer">
                            <i class="fas fa-database"></i>
                            <span>Data Layer (MariaDB/PostgreSQL)</span>
                        </div>
                        <div class="layer">
                            <i class="fab fa-docker"></i>
                            <span>Infrastructure (Docker/Kubernetes)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-container">
            <div class="footer-logo">
                <h3>Lifebox M&E System</h3>
                <p>Comprehensive monitoring and evaluation platform for development programs. Robust, scalable, and developer-friendly.</p>
                <p>© 2025 Lifebox M&E System. All rights reserved.</p>
            </div>

            <div class="footer-links">
                <h4>Documentation</h4>
                <ul>
                    <li><a href="./db/">Database Documentation</a></li>
                    <li><a href="./api/">API Documentation</a></li>
                    <li><a href="./docker/">Docker & Deployment</a></li>
                    <li><a href="/documentation/developer-guide/">Developer Resources</a></li>
                    <li><a href="/documentation/user-guide/">Tutorials & Guides</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Resources</h4>
                <ul>
                    <li><a href="/documentation/developer-guide/?h=sdk#api-tools">SDKs & Libraries</a></li>
                    <li><a href="/documentation/commands/">Commands</a></li>
                    <li><a href="/documentation/developer-guide/?h=postman+collection#api-tools">Postman Collection</a></li>
                    <li><a href="/">Main Application</a></li>
                    <li><a href="/documentation/architecture/">System Architecture</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4>Contact Us</h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Support Email</strong>
                            <a href="mailto:support@merqconsultancy.org">support@merqconsultancy.org</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-comments"></i>
                        <div>

                            <a href="#"><strong>Help Desk</strong></a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-gitlab"></i>
                        <div>
                            <strong>GitHub Repository</strong>
                            <a href="">github.com/mikeintoshsystems/lifeboxme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Lifebox M&E System v3.2.1 | Documentation Portal v1.0</p>
            <p>Designed & Developed By | <a href="https://merqconsultancy.org"><strong>MERQ Consultancy</strong></a></p>
        </div>
    </footer>

    <script>

    </script>
</body>

</html>