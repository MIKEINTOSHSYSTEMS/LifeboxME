<?php
// File: ./docker/index.php
// Comprehensive Docker Architecture Documentation for Lifebox M&E System
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System - Docker Architecture Documentation</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/docker.css">
    <script src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="/assets/img/lb_favicon.svg" />
    <style>
        /* Additional styles for better API documentation */
        .api-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }

        .api-table th,
        .api-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .api-table th {
            background-color: #f2f2f2;
            font-weight: 600;
        }

        .api-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .api-endpoint {
            background-color: #f5f5f5;
            padding: 1rem;
            border-left: 4px solid #2196f3;
            margin: 1rem 0;
            font-family: monospace;
        }

        .badge-method {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: bold;
            margin-right: 8px;
        }

        .badge-get {
            background-color: #61affe;
            color: white;
        }

        .badge-post {
            background-color: #49cc90;
            color: white;
        }

        .badge-put {
            background-color: #fca130;
            color: white;
        }

        .badge-delete {
            background-color: #f93e3e;
            color: white;
        }

        /* Login Modal Styles */
        .login-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: 9999;
            backdrop-filter: blur(8px);
            animation: fadeIn 0.3s ease;
        }

        .login-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 3px;
            border-radius: 20px;
            animation: slideUp 0.4s ease;
            max-width: 450px;
            width: 90%;
            margin: 20px;
        }

        .login-card {
            background: white;
            border-radius: 18px;
            padding: 40px;
            text-align: center;
        }

        .login-icon {
            font-size: 70px;
            color: #667eea;
            margin-bottom: 20px;
        }

        .login-card h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .login-card p {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .input-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-group input.error {
            border-color: #f44336;
            animation: shake 0.5s;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: #667eea;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 15px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn.disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .error-message {
            color: #f44336;
            font-size: 13px;
            margin-top: -15px;
            margin-bottom: 15px;
            text-align: left;
            padding-left: 10px;
        }

        .timer-message {
            color: #ff9800;
            font-size: 13px;
            margin-top: 10px;
            text-align: center;
        }

        .attempts-left {
            color: #666;
            font-size: 12px;
            margin-top: 10px;
        }

        .security-note {
            background: #f8f9fa;
            padding: 12px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        /* Hide main content initially */
        .main-content {
            display: none;
        }

        .main-content.visible {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Login Modal -->
    <div class="login-modal" id="loginModal">
        <div class="login-container">
            <div class="login-card">
                <div class="login-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h2>Secure Access Required</h2>
                <p>Please enter the master password to access the Lifebox M&E System Documentation</p>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="masterPassword" placeholder="Enter Master Password" autocomplete="off">
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                </div>

                <button class="login-btn" id="loginBtn">
                    <i class="fas fa-sign-in-alt"></i> Access Documentation
                </button>

                <div id="errorMessage" class="error-message"></div>
                <div id="timerMessage" class="timer-message"></div>
                <div id="attemptsLeft" class="attempts-left"></div>

                <div class="security-note">
                    <i class="fas fa-info-circle"></i>
                    This is a secure area. Unauthorized access attempts will be logged and may result in temporary lockout.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="#">
                    <h3><i class="fas fa-server"></i> Lifebox M&E System</h3>
                </a>
            </div>

            <ul class="sidebar-menu" id="sidebarMenu">
                <li>
                    <a href="#introduction"><i class="fas fa-info-circle"></i> Introduction</a>
                </li>
                <li>
                    <a href="#getting-started"><i class="fas fa-rocket"></i> Getting Started</a>
                </li>
                <li>
                    <a href="#architecture"><i class="fas fa-project-diagram"></i> System Architecture</a>
                </li>
                <li>
                    <a href="#network"><i class="fas fa-network-wired"></i> Network Architecture</a>
                </li>
                <li>
                    <a href="#services"><i class="fas fa-server"></i> Docker Services</a>
                </li>
                <li>
                    <a href="#build"><i class="fas fa-hammer"></i> Build Process</a>
                </li>
                <li>
                    <a href="#deployment"><i class="fas fa-code-branch"></i> Deployment</a>
                </li>
                <li>
                    <a href="#configuration"><i class="fas fa-cog"></i> Configuration</a>
                </li>
                <li>
                    <a href="#ci-cd"><i class="fas fa-sync-alt"></i> CI/CD Pipeline</a>
                </li>
                <li>
                    <a href="#api"><i class="fas fa-plug"></i> API Documentation</a>
                </li>
                <li>
                    <a href="#database"><i class="fas fa-database"></i> Database</a>
                </li>
                <li>
                    <a href="#hosting"><i class="fas fa-cloud"></i> Virtualmin Hosting</a>
                </li>
                <li>
                    <a href="#troubleshooting"><i class="fas fa-wrench"></i> Troubleshooting</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            <header class="header">
                <div class="header-left">
                    <button class="go-to-start-btn" onclick="window.location.href='../';">
                        <i class="fas fa-home"></i>
                    </button>
                    <h1>Lifebox M&E System - Docker Architecture</h1>
                </div>
                <div class="header-right">
                    <div class="search-container" id="desktopSearch">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchInput" placeholder="Search services, commands...">
                        <div class="search-results" id="searchResults"></div>
                    </div>

                    <button class="mobile-search-btn" id="mobileSearchBtn">
                        <i class="fas fa-search"></i>
                    </button>

                    <button class="pdf-btn" id="pdfBtn">
                        <i class="fas fa-file-pdf"></i> Export to PDF
                    </button>

                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </header>

            <div class="content">
                <!-- Introduction Section -->
                <section class="section" id="introduction">
                    <div class="section-header">
                        <h2><i class="fas fa-info-circle mr-2"></i> Introduction</h2>
                    </div>
                    <div class="section-body">
                        <p>This documentation provides a comprehensive overview of the Docker-based architecture for the <strong>Lifebox Monitoring & Evaluation (M&E) System</strong>. The system is containerized using Docker and orchestrated with Docker Compose, making it portable and scalable across different environments.</p>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Key Features</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><strong>Containerized Architecture:</strong> All components run in isolated Docker containers</li>
                                    <li><strong>Microservices Design:</strong> Independent services for database, analytics, documentation, and tracking</li>
                                    <li><strong>CI/CD Pipeline:</strong> Automated build and deployment with GitLab CI</li>
                                    <li><strong>Scalability:</strong> Easily scale individual services as needed</li>
                                    <li><strong>Environment Consistency:</strong> Consistent environments from development to production</li>
                                    <li><strong>Infrastructure as Code:</strong> All infrastructure defined in Docker Compose files</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">System Overview</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="data-table">
                                        <thead>
                                            32<th>Component</th>
                                            <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PostgreSQL Database</td>
                                                <td>Primary analytics database for M&E data (lifebox_mesystem)</td>
                                            </tr>
                                            <tr>
                                                <td>MariaDB Database</td>
                                                <td>Application database for Matomo analytics and forms (lifeboxme_matomo, lifeboxme_forms)</td>
                                            </tr>
                                            <tr>
                                                <td>Metabase</td>
                                                <td>Business intelligence and reporting dashboard</td>
                                            </tr>
                                            <tr>
                                                <td>Matomo</td>
                                                <td>Web analytics and tracking platform</td>
                                            </tr>
                                            <tr>
                                                <td>pgAdmin</td>
                                                <td>PostgreSQL administration tool</td>
                                            </tr>
                                            <tr>
                                                <td>phpMyAdmin</td>
                                                <td>MariaDB administration tool</td>
                                            </tr>
                                            <tr>
                                                <td>MkDocs</td>
                                                <td>Documentation site for the Lifebox M&E System</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Getting Started Section -->
                <section class="section" id="getting-started">
                    <div class="section-header">
                        <h2><i class="fas fa-rocket mr-2"></i> Getting Started</h2>
                    </div>
                    <div class="section-body">
                        <h3 class="mb-2">Prerequisites</h3>
                        <p>Before you begin, ensure you have the following installed:</p>
                        <ul>
                            <li>Docker (minimum version 20.10.x)</li>
                            <li>Docker Compose (minimum version 1.29.x)</li>
                            <li>Git (for cloning the repository)</li>
                        </ul>

                        <h3 class="mt-4 mb-2">Installation Steps</h3>

                        <div class="step-card">
                            <h4><span class="step-number">1</span> Clone the Repository</h4>
                            <div class="code-block mt-2">
                                <div class="code-header">
                                    <span>Terminal Command</span>
                                    <button class="copy-btn" data-clipboard-target="#clone-cmd">Copy</button>
                                </div>
                                <div class="code-content" id="clone-cmd">
                                    git clone https://your-repository-url/lifeboxme.git
                                    cd lifeboxme
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">2</span> Configure Environment</h4>
                            <div class="code-block mt-2">
                                <div class="code-header">
                                    <span>Copy .env.dev to .env</span>
                                    <button class="copy-btn" data-clipboard-target="#env-cmd">Copy</button>
                                </div>
                                <div class="code-content" id="env-cmd">
                                    cp .env.dev .env
                                    # Edit .env with your specific configuration if needed
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">3</span> Start the System</h4>
                            <div class="code-block mt-2">
                                <div class="code-header">
                                    <span>Start Command</span>
                                    <button class="copy-btn" data-clipboard-target="#start-cmd">Copy</button>
                                </div>
                                <div class="code-content" id="start-cmd">
                                    docker-compose -p lifeboxme up -d
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">4</span> Access Services</h4>
                            <div class="table-responsive mt-2">
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>URL</th>
                                            <th>Credentials</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Metabase Analytics</td>
                                            <td>http://localhost:4000</td>
                                            <td>lifebox@cloud.merqconsultancy.org / lifeboxme0</td>
                                        </tr>
                                        <tr>
                                            <td>pgAdmin (PostgreSQL Admin)</td>
                                            <td>http://localhost:5445</td>
                                            <td>dev@merqconsultancy.org / lifeboxme@sys</td>
                                        </tr>
                                        <tr>
                                            <td>phpMyAdmin (MariaDB Admin)</td>
                                            <td>http://localhost:3309</td>
                                            <td>lifeboxme_system / lifeboxme_system</td>
                                        </tr>
                                        <tr>
                                            <td>Matomo Analytics</td>
                                            <td>http://localhost:8088</td>
                                            <td>Configure during first setup</td>
                                        </tr>
                                        <tr>
                                            <td>MkDocs Documentation</td>
                                            <td>http://localhost:8558</td>
                                            <td>Public access</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Architecture Section -->
                <section class="section" id="architecture">
                    <div class="section-header">
                        <h2><i class="fas fa-project-diagram mr-2"></i> System Architecture</h2>
                    </div>
                    <div class="section-body">
                        <p>The Lifebox M&E system follows a containerized microservices architecture. Each component runs in its own Docker container, communicating through a dedicated network.</p>

                        <div class="service-diagram-container">
                            <div class="diagram-controls">
                                <button id="fitDiagram">
                                    <i class="fas fa-search-plus"></i> Fit Diagram
                                </button>
                                <button id="centerDiagram">
                                    <i class="fas fa-align-center"></i> Center Diagram
                                </button>
                                <button id="togglePhysics">
                                    <i class="fas fa-flask"></i> Toggle Physics
                                </button>
                            </div>
                            <div class="diagram" id="architectureDiagram"></div>
                        </div>

                        <h3 class="mt-4">Data Flow</h3>
                        <p>The system follows this data flow pattern:</p>
                        <ol>
                            <li>User requests are handled by Metabase or Matomo web interfaces</li>
                            <li>Metabase queries PostgreSQL (lifebox_mesystem) for M&E analytics</li>
                            <li>Matomo tracks web analytics and stores data in MariaDB (lifeboxme_matomo)</li>
                            <li>Lifebox Forms data is stored in MariaDB (lifeboxme_forms)</li>
                            <li>pgAdmin and phpMyAdmin provide database management interfaces</li>
                            <li>MkDocs serves documentation for the system</li>
                        </ol>
                    </div>
                </section>

                <!-- Network Architecture Section -->
                <section class="section" id="network">
                    <div class="section-header">
                        <h2><i class="fas fa-network-wired mr-2"></i> Network Architecture</h2>
                    </div>
                    <div class="section-body">
                        <p>The system uses a custom bridge network (<code>lifeboxnet</code>) with a configurable subnet (default: 192.168.47.0/24). Each service has a static IP address within this subnet:</p>

                        <div class="service-diagram-container">
                            <div class="diagram-controls">
                                <button id="fitNetworkDiagram">
                                    <i class="fas fa-search-plus"></i> Fit Diagram
                                </button>
                                <button id="centerNetworkDiagram">
                                    <i class="fas fa-align-center"></i> Center Diagram
                                </button>
                                <button id="toggleNetworkPhysics">
                                    <i class="fas fa-flask"></i> Toggle Physics
                                </button>
                            </div>
                            <div class="diagram" id="serviceDiagram"></div>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>IP Address</th>
                                        <th>Port (Host)</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>lifeboxme_db (PostgreSQL)</td>
                                        <td>192.168.47.2</td>
                                        <td>5432</td>
                                        <td>Primary analytics database</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_pgadmin</td>
                                        <td>192.168.47.3</td>
                                        <td>5445</td>
                                        <td>PostgreSQL administration</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_metabase</td>
                                        <td>192.168.47.4</td>
                                        <td>4000</td>
                                        <td>Analytics dashboard</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_mariadb</td>
                                        <td>192.168.47.5</td>
                                        <td>3306 (internal)</td>
                                        <td>Application database</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_phpmyadmin</td>
                                        <td>192.168.47.6</td>
                                        <td>3309</td>
                                        <td>MariaDB administration</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_matomo</td>
                                        <td>192.168.47.7</td>
                                        <td>8088</td>
                                        <td>Web analytics platform</td>
                                    </tr>
                                    <tr>
                                        <td>mkdocs</td>
                                        <td>192.168.47.8</td>
                                        <td>8558</td>
                                        <td>Documentation site</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Services Section -->
                <section class="section" id="services">
                    <div class="section-header">
                        <h2><i class="fas fa-server mr-2"></i> Docker Services</h2>
                    </div>
                    <div class="section-body">
                        <p>The Docker Compose file defines the following services that make up the Lifebox M&E system:</p>

                        <div class="service-card">
                            <h4>lifeboxme_db (PostgreSQL)</h4>
                            <p>Primary analytics database for the Lifebox M&E system.</p>
                            <ul>
                                <li><strong>Image:</strong> postgres:17-alpine</li>
                                <li><strong>Database:</strong> lifebox_mesystem</li>
                                <li><strong>User:</strong> postgres</li>
                                <li><strong>Network IP:</strong> 192.168.47.2</li>
                                <li><strong>Port:</strong> 5432 (mapped to host)</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge">PostgreSQL 17</span>
                                <span class="badge">Analytics</span>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>lifeboxme_mariadb</h4>
                            <p>Application database for Matomo analytics and Lifebox Forms.</p>
                            <ul>
                                <li><strong>Image:</strong> mariadb:11.2.4</li>
                                <li><strong>Databases:</strong> lifeboxme_matomo, lifeboxme_forms</li>
                                <li><strong>User:</strong> lifeboxme_system</li>
                                <li><strong>Network IP:</strong> 192.168.47.5</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge">MariaDB 11.2</span>
                                <span class="badge">Application DB</span>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>lifeboxme_metabase</h4>
                            <p>Business intelligence and analytics dashboard.</p>
                            <ul>
                                <li><strong>Image:</strong> metabase/metabase:latest</li>
                                <li><strong>Port:</strong> 4000:3000</li>
                                <li><strong>Database:</strong> PostgreSQL (lifebox_mesystem)</li>
                                <li><strong>Network IP:</strong> 192.168.47.4</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge badge-port">Port 4000</span>
                                <span class="badge">Analytics</span>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>lifeboxme_matomo</h4>
                            <p>Web analytics platform for tracking and reporting.</p>
                            <ul>
                                <li><strong>Image:</strong> matomo:latest</li>
                                <li><strong>Port:</strong> 8088:80</li>
                                <li><strong>Database:</strong> MariaDB (lifeboxme_matomo)</li>
                                <li><strong>Network IP:</strong> 192.168.47.7</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge badge-port">Port 8088</span>
                                <span class="badge">Analytics</span>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>lifeboxme_pgadmin</h4>
                            <p>PostgreSQL administration tool.</p>
                            <ul>
                                <li><strong>Image:</strong> dpage/pgadmin4:latest</li>
                                <li><strong>Port:</strong> 5445:80</li>
                                <li><strong>Email:</strong> dev@merqconsultancy.org</li>
                                <li><strong>Network IP:</strong> 192.168.47.3</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge badge-port">Port 5445</span>
                                <span class="badge">Management</span>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>lifeboxme_phpmyadmin</h4>
                            <p>MariaDB administration tool.</p>
                            <ul>
                                <li><strong>Image:</strong> phpmyadmin:5.2.1</li>
                                <li><strong>Port:</strong> 3309:80</li>
                                <li><strong>Network IP:</strong> 192.168.47.6</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge badge-port">Port 3309</span>
                                <span class="badge">Management</span>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>mkdocs</h4>
                            <p>Documentation site for the Lifebox M&E System.</p>
                            <ul>
                                <li><strong>Build:</strong> Custom Dockerfile (mkdocs_app target)</li>
                                <li><strong>Port:</strong> 8558:8558</li>
                                <li><strong>Network IP:</strong> 192.168.47.8</li>
                            </ul>
                            <div class="service-meta">
                                <span class="badge badge-port">Port 8558</span>
                                <span class="badge">Documentation</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Build Section -->
                <section class="section" id="build">
                    <div class="section-header">
                        <h2><i class="fas fa-hammer mr-2"></i> Build Process</h2>
                    </div>
                    <div class="section-body">
                        <p>The system uses Docker Compose for building and managing services. Most services use official images, while the MkDocs service uses a custom Dockerfile.</p>

                        <h3>Dockerfile Structure</h3>
                        <p>The Dockerfile defines multiple build targets:</p>
                        <ol>
                            <li><strong>mkdocs_app:</strong> Python-based MkDocs documentation server</li>
                            <li>Additional targets can be added as needed for custom PHP applications</li>
                        </ol>

                        <h3>Building the System</h3>
                        <p>To build the entire system:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Build Command</span>
                                <button class="copy-btn" data-clipboard-target="#build-command">Copy</button>
                            </div>
                            <div class="code-content" id="build-command">
                                docker-compose -p lifebox build --no-cache
                            </div>
                        </div>

                        <h3>Building Individual Components</h3>
                        <p>To build specific services:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Build MkDocs Service</span>
                                <button class="copy-btn" data-clipboard-target="#build-mkdocs">Copy</button>
                            </div>
                            <div class="code-content" id="build-mkdocs">
                                docker-compose -p lifebox build mkdocs
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Deployment Section -->
                <section class="section" id="deployment">
                    <div class="section-header">
                        <h2><i class="fas fa-code-branch mr-2"></i> Deployment</h2>
                    </div>
                    <div class="section-body">
                        <p>The system can be deployed to different environments using Docker Compose.</p>

                        <h3>Starting the System</h3>
                        <p>To start all services in detached mode:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Start Command</span>
                                <button class="copy-btn" data-clipboard-target="#start-command">Copy</button>
                            </div>
                            <div class="code-content" id="start-command">
                                docker-compose -p lifeboxme up -d
                            </div>
                        </div>

                        <h3>Stopping the System</h3>
                        <p>To stop all services while preserving data volumes:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Stop Command</span>
                                <button class="copy-btn" data-clipboard-target="#stop-command">Copy</button>
                            </div>
                            <div class="code-content" id="stop-command">
                                docker-compose -p lifebox down
                            </div>
                        </div>

                        <h3>Full Cleanup</h3>
                        <p>To stop all services and remove all resources:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Cleanup Command</span>
                                <button class="copy-btn" data-clipboard-target="#cleanup-command">Copy</button>
                            </div>
                            <div class="code-content" id="cleanup-command">
                                docker-compose -p lifebox down --volumes --rmi all
                            </div>
                        </div>

                        <h3>View Logs</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Follow Logs</span>
                                <button class="copy-btn" data-clipboard-target="#logs-command-deploy">Copy</button>
                            </div>
                            <div class="code-content" id="logs-command-deploy">
                                docker-compose -p lifebox logs -f
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Configuration Section -->
                <section class="section" id="configuration">
                    <div class="section-header">
                        <h2><i class="fas fa-cog mr-2"></i> Configuration</h2>
                    </div>
                    <div class="section-body">
                        <p>The system is configured through environment variables in the <code>.env</code> file.</p>

                        <h3>Key Configuration Files</h3>
                        <ul>
                            <li><strong>docker-compose.yml:</strong> Main service definitions and configurations</li>
                            <li><strong>.env.dev / .env.prod:</strong> Environment variables for development/production</li>
                            <li><strong>Dockerfile:</strong> Build instructions for custom images</li>
                            <li><strong>pgadmin-servers.json:</strong> Pre-configured pgAdmin servers</li>
                        </ul>

                        <h3>Environment Variables</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Variable</th>
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>Default Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>POSTGRES_DB</td>
                                        <td>PostgreSQL</td>
                                        <td>Primary database name</td>
                                        <td>lifebox_mesystem</td>
                                    </tr>
                                    <tr>
                                        <td>POSTGRES_USER</td>
                                        <td>PostgreSQL</td>
                                        <td>Database username</td>
                                        <td>postgres</td>
                                    </tr>
                                    <tr>
                                        <td>POSTGRES_PASSWORD</td>
                                        <td>PostgreSQL</td>
                                        <td>Database password</td>
                                        <td>mikeintosh</td>
                                    </tr>
                                    <tr>
                                        <td>MARIADB_DATABASE</td>
                                        <td>MariaDB</td>
                                        <td>Matomo database name</td>
                                        <td>lifeboxme_matomo</td>
                                    </tr>
                                    <tr>
                                        <td>MARIADB_USER</td>
                                        <td>MariaDB</td>
                                        <td>Database username</td>
                                        <td>lifeboxme_system</td>
                                    </tr>
                                    <tr>
                                        <td>MARIADB_PASSWORD</td>
                                        <td>MariaDB</td>
                                        <td>Database password</td>
                                        <td>lifeboxme_system</td>
                                    </tr>
                                    <tr>
                                        <td>MB_ADMIN_EMAIL</td>
                                        <td>Metabase</td>
                                        <td>Metabase admin email</td>
                                        <td>lifebox@cloud.merqconsultancy.org</td>
                                    </tr>
                                    <tr>
                                        <td>MB_ADMIN_PASSWORD</td>
                                        <td>Metabase</td>
                                        <td>Metabase admin password</td>
                                        <td>lifeboxme0</td>
                                    </tr>
                                    <tr>
                                        <td>PGADMIN_DEFAULT_EMAIL</td>
                                        <td>pgAdmin</td>
                                        <td>pgAdmin admin email</td>
                                        <td>dev@merqconsultancy.org</td>
                                    </tr>
                                    <tr>
                                        <td>PGADMIN_DEFAULT_PASSWORD</td>
                                        <td>pgAdmin</td>
                                        <td>pgAdmin admin password</td>
                                        <td>lifeboxme@sys</td>
                                    </tr>
                                    <tr>
                                        <td>NETWORK_SUBNET</td>
                                        <td>All Services</td>
                                        <td>Docker network subnet</td>
                                        <td>192.168.47.0/24</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- CI/CD Section -->
                <section class="section" id="ci-cd">
                    <div class="section-header">
                        <h2><i class="fas fa-sync-alt mr-2"></i> CI/CD Pipeline</h2>
                    </div>
                    <div class="section-body">
                        <p>The system uses GitLab CI for automated build and deployment.</p>

                        <h3>Pipeline Stages</h3>
                        <ol>
                            <li><strong>Build:</strong> Build custom Docker images (MkDocs, etc.)</li>
                            <li><strong>Deploy:</strong> Deploy to production environment</li>
                        </ol>

                        <h3>Build Stage</h3>
                        <p>Builds custom images and pushes to container registry:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>.gitlab-ci.yml (Build)</span>
                                <button class="copy-btn" data-clipboard-target="#ci-build">Copy</button>
                            </div>
                            <div class="code-content" id="ci-build">
                                build-mkdocs:
                                stage: build
                                image: docker:24.0.7
                                services:
                                - docker:24.0.7-dind
                                script:
                                - echo "$DOCKER_PASSWORD" | docker login -u "$DOCKER_USERNAME" --password-stdin
                                - docker build --target mkdocs_app -t $DOCKER_REGISTRY/lifebox-mkdocs:latest .
                                - docker push $DOCKER_REGISTRY/lifebox-mkdocs:latest
                                only:
                                - main
                            </div>
                        </div>

                        <h3>Deploy Stage</h3>
                        <p>Deploys the application to production environment:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>.gitlab-ci.yml (Deploy)</span>
                                <button class="copy-btn" data-clipboard-target="#ci-deploy">Copy</button>
                            </div>
                            <div class="code-content" id="ci-deploy">
                                deploy-production:
                                stage: deploy
                                image: docker:24.0.7
                                services:
                                - docker:24.0.7-dind
                                tags:
                                - lifebox-production
                                script:
                                - echo "$DOCKER_PASSWORD" | docker login -u "$DOCKER_USERNAME" --password-stdin
                                - docker-compose -p lifebox down
                                - docker-compose -p lifebox pull
                                - docker-compose -p lifeboxme up -d --build
                                - docker image prune -f
                                only:
                                - main
                            </div>
                        </div>
                    </div>
                </section>

                <!-- API Documentation Section -->
                <section class="section" id="api">
                    <div class="section-header">
                        <h2><i class="fas fa-plug mr-2"></i> API Documentation</h2>
                    </div>
                    <div class="section-body">
                        <p>The Lifebox M&E system provides RESTful APIs for accessing M&E data. All endpoints are available through the PHPRunner REST API implementation.</p>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> <strong>Base URL:</strong> <code>https://mne.lifebox.org/app/api/v1.php</code>
                        </div>

                        <!-- Authentication Section -->
                        <h3><i class="fas fa-lock mr-2"></i> Authentication</h3>
                        <p>All API endpoints require authentication. Two authentication methods are supported:</p>

                        <h4 class="mt-3">Method 1: API Key (Recommended)</h4>
                        <p>Include the API key as a parameter in the request:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>API Key Example</span>
                                <button class="copy-btn" data-clipboard-target="#apikey-example">Copy</button>
                            </div>
                            <div class="code-content" id="apikey-example">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list&apikey=$2y$10$CPrlfPZs4wI0QHECfzUUq.0eyCgbkRwOpNOpSpnyVDnmOVOav2qTm
                            </div>
                        </div>

                        <h4 class="mt-3">Method 2: HTTP Basic Authentication</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Basic Auth Example</span>
                                <button class="copy-btn" data-clipboard-target="#basic-auth">Copy</button>
                            </div>
                            <div class="code-content" id="basic-auth">
                                curl --user username:password "https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list"
                            </div>
                        </div>

                        <!-- API Tables -->
                        <h3 class="mt-4"><i class="fas fa-database mr-2"></i> Available API Tables</h3>
                        <div class="table-responsive">
                            <table class="data-table api-table">
                                <thead>
                                    <tr>
                                        <th>Table Name</th>
                                        <th>Description</th>
                                        <th>Key Fields</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>lbpmi_data_values</code></td>
                                        <td>M&E data values for indicators and data elements</td>
                                        <td>data_value_id, data_element_id, period_year, region_id, value</td>
                                    </tr>
                                    <tr>
                                        <td><code>lbpmi_indicator_actuals</code></td>
                                        <td>Indicator actual values for M&E reporting</td>
                                        <td>actual_id, indicator_id, period_year, region_id, actual_value</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- API Endpoints for lbpmi_data_values -->
                        <h3 class="mt-4"><i class="fas fa-chart-line mr-2"></i> Data Values API (lbpmi_data_values)</h3>

                        <div class="api-endpoint">
                            <span class="badge-method badge-get">GET</span>
                            <strong>List Data Values</strong>
                            <code>?table=lbpmi_data_values&action=list</code>
                        </div>

                        <h4 class="mt-3">Parameters</h4>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Description</th>
                                        <th>Example</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>records</code></td>
                                        <td>Number of records to return</td>
                                        <td>records=5</td>
                                    </tr>
                                    <tr>
                                        <td><code>skip</code></td>
                                        <td>Records to skip (pagination)</td>
                                        <td>skip=10</td>
                                    </tr>
                                    <tr>
                                        <td><code>q</code></td>
                                        <td>Advanced search filter</td>
                                        <td>q=(region_id~equals~8)</td>
                                    </tr>
                                    <tr>
                                        <td><code>qs</code></td>
                                        <td>Full-text search</td>
                                        <td>qs=Abush</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4 class="mt-3">Example Request</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>List Data Values (5 records)</span>
                                <button class="copy-btn" data-clipboard-target="#list-data-values">Copy</button>
                            </div>
                            <div class="code-content" id="list-data-values">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list&records=5&skip=0&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <h4 class="mt-3">Sample Response</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Response JSON</span>
                                <button class="copy-btn" data-clipboard-target="#data-values-response">Copy</button>
                            </div>
                            <div class="code-content" id="data-values-response">
                                {
                                "data": [
                                {
                                "data_value_id": "2",
                                "data_element_id": "5",
                                "period_type": "Quarterly",
                                "period_year": "2026",
                                "period_quarter": "1",
                                "period_month": "3",
                                "period_week": null,
                                "period_day": "2026-03-20",
                                "region_id": "8",
                                "country_id": null,
                                "facility_id": null,
                                "value": "300",
                                "stored_by": "Mr. Abush (Data Manager)",
                                "created": "2026-03-20 02:53:50",
                                "last_updated": "2026-03-20 02:55:54",
                                "deleted": "f",
                                "data_source": "",
                                "source_detail": "",
                                "value_type": "Loading..."
                                }
                                ],
                                "success": true
                                }
                            </div>
                        </div>

                        <div class="api-endpoint mt-4">
                            <span class="badge-method badge-get">GET</span>
                            <strong>View Single Data Value</strong>
                            <code>?table=lbpmi_data_values&action=view&editid1={id}</code>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>View Data Value by ID</span>
                                <button class="copy-btn" data-clipboard-target="#view-data-value">Copy</button>
                            </div>
                            <div class="code-content" id="view-data-value">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=view&editid1=2&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <div class="api-endpoint mt-4">
                            <span class="badge-method badge-post">POST</span>
                            <strong>Insert Data Value</strong>
                            <code>?table=lbpmi_data_values&action=insert</code>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Insert New Data Value</span>
                                <button class="copy-btn" data-clipboard-target="#insert-data-value">Copy</button>
                            </div>
                            <div class="code-content" id="insert-data-value">
                                curl -X POST "https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=insert&apikey=YOUR_API_KEY" \
                                -d "data_element_id=10&period_year=2026&region_id=8&value=500"
                            </div>
                        </div>

                        <div class="api-endpoint mt-4">
                            <span class="badge-method badge-post">POST</span>
                            <strong>Update Data Value</strong>
                            <code>?table=lbpmi_data_values&action=update</code>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Update Existing Data Value</span>
                                <button class="copy-btn" data-clipboard-target="#update-data-value">Copy</button>
                            </div>
                            <div class="code-content" id="update-data-value">
                                curl -X POST "https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=update&apikey=YOUR_API_KEY" \
                                -d "editid1=2&value=350&stored_by=System User"
                            </div>
                        </div>

                        <div class="api-endpoint mt-4">
                            <span class="badge-method badge-post">POST</span>
                            <strong>Delete Data Value</strong>
                            <code>?table=lbpmi_data_values&action=delete&editid1={id}</code>
                        </div>

                        <!-- API Endpoints for lbpmi_indicator_actuals -->
                        <h3 class="mt-4"><i class="fas fa-chart-simple mr-2"></i> Indicator Actuals API (lbpmi_indicator_actuals)</h3>

                        <div class="api-endpoint">
                            <span class="badge-method badge-get">GET</span>
                            <strong>List Indicator Actuals</strong>
                            <code>?table=lbpmi_indicator_actuals&action=list</code>
                        </div>

                        <h4 class="mt-3">Example Request</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>List Indicator Actuals (5 records)</span>
                                <button class="copy-btn" data-clipboard-target="#list-indicator-actuals">Copy</button>
                            </div>
                            <div class="code-content" id="list-indicator-actuals">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_indicator_actuals&action=list&records=5&skip=0&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <h4 class="mt-3">Sample Response</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Response JSON</span>
                                <button class="copy-btn" data-clipboard-target="#indicator-actuals-response">Copy</button>
                            </div>
                            <div class="code-content" id="indicator-actuals-response">
                                {
                                "data": [
                                {
                                "actual_id": "2",
                                "indicator_id": "28",
                                "period_type": "Quarterly",
                                "period_year": "2026",
                                "period_quarter": "1",
                                "period_month": "3",
                                "region_id": "8",
                                "country_id": null,
                                "facility_id": null,
                                "actual_value": "5",
                                "is_calculated": "f",
                                "calculation_timestamp": "2026-03-19 03:20:17",
                                "created_at": "2026-03-19 03:20:17",
                                "updated_at": null
                                }
                                ],
                                "success": true
                                }
                            </div>
                        </div>

                        <div class="api-endpoint mt-4">
                            <span class="badge-method badge-get">GET</span>
                            <strong>View Single Indicator Actual</strong>
                            <code>?table=lbpmi_indicator_actuals&action=view&editid1={id}</code>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>View Indicator Actual by ID</span>
                                <button class="copy-btn" data-clipboard-target="#view-indicator-actual">Copy</button>
                            </div>
                            <div class="code-content" id="view-indicator-actual">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_indicator_actuals&action=view&editid1=2&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <!-- Filter Examples -->
                        <h3 class="mt-4"><i class="fas fa-filter mr-2"></i> Advanced Filtering</h3>

                        <h4 class="mt-3">Filter by Region</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Filter: region_id = 8</span>
                                <button class="copy-btn" data-clipboard-target="#filter-region">Copy</button>
                            </div>
                            <div class="code-content" id="filter-region">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list&q=(region_id~equals~8)&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <h4 class="mt-3">Filter by Year and Quarter</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Filter: period_year = 2026 AND period_quarter = 1</span>
                                <button class="copy-btn" data-clipboard-target="#filter-year-quarter">Copy</button>
                            </div>
                            <div class="code-content" id="filter-year-quarter">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list&q=(period_year~equals~2026)AND(period_quarter~equals~1)&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <h4 class="mt-3">Filter by Data Element ID</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Filter: data_element_id = 42</span>
                                <button class="copy-btn" data-clipboard-target="#filter-element">Copy</button>
                            </div>
                            <div class="code-content" id="filter-element">
                                https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list&q=(data_element_id~equals~42)&apikey=YOUR_API_KEY
                            </div>
                        </div>

                        <!-- Troubleshooting -->
                        <h3 class="mt-4"><i class="fas fa-bug mr-2"></i> API Troubleshooting</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Issue</th>
                                        <th>Solution</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Authentication failures</td>
                                        <td>Verify API key is valid. Check that the API key parameter is correctly formatted as <code>&apikey=...</code></td>
                                    </tr>
                                    <tr>
                                        <td>Empty data response</td>
                                        <td>Check if the table name is correct. Verify that the user has permissions to access the data.</td>
                                    </tr>
                                    <tr>
                                        <td>Filter not working</td>
                                        <td>Verify filter syntax. Use the format: <code>q=(field~operator~value)</code> with operators like equals, contains, gt, lt, etc.</td>
                                    </tr>
                                    <tr>
                                        <td>Debugging API calls</td>
                                        <td>Use verbose mode: <code>curl -v "https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list"</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="code-block mt-3">
                            <div class="code-header">
                                <span>Debugging Example</span>
                                <button class="copy-btn" data-clipboard-target="#debug-curl">Copy</button>
                            </div>
                            <div class="code-content" id="debug-curl">
                                curl -v "https://mne.lifebox.org/app/api/v1.php?table=lbpmi_data_values&action=list&apikey=YOUR_API_KEY"
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Database Section -->
                <section class="section" id="database">
                    <div class="section-header">
                        <h2><i class="fas fa-database mr-2"></i> Database Documentation</h2>
                    </div>
                    <div class="section-body">
                        <p>The system uses two primary databases for different services.</p>

                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Database</th>
                                        <th>Type</th>
                                        <th>Username</th>
                                        <th>Host</th>
                                        <th>Port</th>
                                        <th>Purpose</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>lifebox_mesystem</td>
                                        <td>PostgreSQL</td>
                                        <td>postgres</td>
                                        <td>lifeboxme_db</td>
                                        <td>5432</td>
                                        <td>Primary M&E analytics database</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_matomo</td>
                                        <td>MariaDB</td>
                                        <td>lifeboxme_system</td>
                                        <td>lifeboxme_mariadb</td>
                                        <td>3306</td>
                                        <td>Matomo web analytics database</td>
                                    </tr>
                                    <tr>
                                        <td>lifeboxme_forms</td>
                                        <td>MariaDB</td>
                                        <td>lifeboxme_system</td>
                                        <td>lifeboxme_mariadb</td>
                                        <td>3306</td>
                                        <td>Lifebox Forms application database</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Database Access Commands</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Access PostgreSQL</span>
                                <button class="copy-btn" data-clipboard-target="#db-access">Copy</button>
                            </div>
                            <div class="code-content" id="db-access">
                                docker exec -it lifeboxme_db psql -U postgres -d lifebox_mesystem
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Access MariaDB</span>
                                <button class="copy-btn" data-clipboard-target="#mariadb-access">Copy</button>
                            </div>
                            <div class="code-content" id="mariadb-access">
                                docker exec -it lifeboxme_mariadb mariadb -u lifeboxme_system -plifeboxme_system lifeboxme_matomo
                            </div>
                        </div>

                        <h3 class="mt-4">Key Tables</h3>
                        <ul>
                            <li><strong>lbpmi_data_values:</strong> Stores M&E data values with periods, regions, and values</li>
                            <li><strong>lbpmi_indicator_actuals:</strong> Stores indicator actual values for reporting</li>
                            <li><strong>matomo_* tables:</strong> Matomo analytics data tables</li>
                        </ul>
                    </div>
                </section>

                <!-- Virtualmin Hosting Section -->
                <section class="section" id="hosting">
                    <div class="section-header">
                        <h2><i class="fas fa-cloud mr-2"></i> Virtualmin Hosting</h2>
                    </div>
                    <div class="section-body">
                        <p>Production deployment on Virtualmin requires specific configuration for Docker services.</p>

                        <h3>Virtualmin Server Requirements</h3>
                        <ul>
                            <li>Ubuntu 22.04 LTS</li>
                            <li>4 vCPU cores</li>
                            <li>8GB RAM minimum</li>
                            <li>50GB storage</li>
                            <li>Docker and Docker Compose installed</li>
                        </ul>

                        <h3>Configuration Steps</h3>
                        <div class="step-card">
                            <h4><span class="step-number">1</span> Create Virtual Server</h4>
                            <div class="code-block mt-2">
                                <div class="code-header">
                                    <span>Virtualmin Command</span>
                                    <button class="copy-btn" data-clipboard-target="#vserver-cmd">Copy</button>
                                </div>
                                <div class="code-content" id="vserver-cmd">
                                    sudo virtualmin create-domain --domain mne.lifebox.org --pass 'securepassword' --desc "Lifebox M&E System"
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">2</span> Configure Proxy for Metabase</h4>
                            <div class="code-block mt-2">
                                <div class="code-header">
                                    <span>Virtualmin Command</span>
                                    <button class="copy-btn" data-clipboard-target="#proxy-cmd">Copy</button>
                                </div>
                                <div class="code-content" id="proxy-cmd">
                                    sudo virtualmin create-proxy --domain mne.lifebox.org/metabase/ \
                                    --path / --url http://127.0.0.1:4000/
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">3</span> SSL Configuration</h4>
                            <div class="code-block mt-2">
                                <div class="code-header">
                                    <span>Virtualmin Command</span>
                                    <button class="copy-btn" data-clipboard-target="#ssl-config-cmd">Copy</button>
                                </div>
                                <div class="code-content" id="ssl-config-cmd">
                                    sudo virtualmin install-cert --domain mne.lifebox.org --letsencrypt
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-4">Deployment to Production</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Transfer Docker Setup</span>
                                <button class="copy-btn" data-clipboard-target="#transfer-cmd">Copy</button>
                            </div>
                            <div class="code-content" id="transfer-cmd">
                                scp -r lifeboxme/ user@mne.lifebox.org:/opt/lifeboxme
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Start Production System</span>
                                <button class="copy-btn" data-clipboard-target="#prod-deploy-cmd">Copy</button>
                            </div>
                            <div class="code-content" id="prod-deploy-cmd">
                                cd /opt/lifeboxme
                                cp .env.prod .env
                                docker-compose -p lifeboxme up -d
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Troubleshooting Section -->
                <section class="section" id="troubleshooting">
                    <div class="section-header">
                        <h2><i class="fas fa-wrench mr-2"></i> Troubleshooting</h2>
                    </div>
                    <div class="section-body">
                        <p>Common issues and solutions for the Docker-based Lifebox M&E system.</p>

                        <h3>Common Problems</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Issue</th>
                                        <th>Possible Cause</th>
                                        <th>Solution</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Containers not starting</td>
                                        <td>Port conflicts</td>
                                        <td>Check for other services using ports 4000, 5445, 3309, 8088, 8558. Change ports in .env if needed.</td>
                                    </tr>
                                    <tr>
                                        <td>Database connection errors</td>
                                        <td>Incorrect credentials in .env</td>
                                        <td>Verify environment variables in .env file match your configuration</td>
                                    </tr>
                                    <tr>
                                        <td>Permission issues with volumes</td>
                                        <td>Volume ownership/permissions</td>
                                        <td>Ensure data directories have correct permissions: <code>sudo chown -R 999:999 ./data/postgres-data</code> (PostgreSQL uses UID 999)</td>
                                    </tr>
                                    <tr>
                                        <td>Metabase not loading</td>
                                        <td>PostgreSQL connection issue</td>
                                        <td>Check PostgreSQL logs: <code>docker logs lifeboxme_db</code>. Verify MB_DB_HOST is set correctly.</td>
                                    </tr>
                                    <tr>
                                        <td>Matomo database connection error</td>
                                        <td>MariaDB not ready</td>
                                        <td>Wait for MariaDB health check to pass, then restart Matomo: <code>docker restart lifeboxme_matomo</code></td>
                                    </tr>
                                    <tr>
                                        <td>pgAdmin cannot connect to PostgreSQL</td>
                                        <td>Server configuration missing</td>
                                        <td>Use the pre-configured servers.json file or manually add server: host=lifeboxme_db, port=5432</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>Useful Commands</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>View All Container Logs</span>
                                <button class="copy-btn" data-clipboard-target="#logs-command">Copy</button>
                            </div>
                            <div class="code-content" id="logs-command">
                                docker-compose -p lifebox logs -f
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>View Specific Service Logs</span>
                                <button class="copy-btn" data-clipboard-target="#logs-service">Copy</button>
                            </div>
                            <div class="code-content" id="logs-service">
                                docker-compose -p lifebox logs -f lifeboxme_metabase
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Rebuild Single Service</span>
                                <button class="copy-btn" data-clipboard-target="#rebuild-service">Copy</button>
                            </div>
                            <div class="code-content" id="rebuild-service">
                                docker-compose -p lifeboxme up -d --build mkdocs
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Check Container Health Status</span>
                                <button class="copy-btn" data-clipboard-target="#health-status">Copy</button>
                            </div>
                            <div class="code-content" id="health-status">
                                docker ps --format "table {{.Names}}\t{{.Status}}"
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Clean Docker System</span>
                                <button class="copy-btn" data-clipboard-target="#clean-docker">Copy</button>
                            </div>
                            <div class="code-content" id="clean-docker">
                                docker system prune -a -f --volumes
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>

    <script>
        // Password protection system
        const MASTER_PASSWORD = "Lifebox@Mne7";
        const MAX_ATTEMPTS = 3;
        const LOCKOUT_DURATION = 5 * 60 * 1000; // 5 minutes in milliseconds

        let failedAttempts = 0;
        let lockoutUntil = null;

        // Check if already authenticated via session storage
        function isAuthenticated() {
            const authTime = sessionStorage.getItem('lifebox_auth_time');
            if (authTime) {
                const authTimestamp = parseInt(authTime);
                const now = Date.now();
                // Session valid for 24 hours
                if (now - authTimestamp < 24 * 60 * 60 * 1000) {
                    return true;
                } else {
                    sessionStorage.removeItem('lifebox_auth_time');
                    return false;
                }
            }
            return false;
        }

        // Save authentication state
        function setAuthenticated() {
            sessionStorage.setItem('lifebox_auth_time', Date.now().toString());
        }

        // Check lockout status
        function isLockedOut() {
            if (lockoutUntil && Date.now() < lockoutUntil) {
                return true;
            }
            lockoutUntil = null;
            return false;
        }

        // Get remaining lockout time in seconds
        function getRemainingLockoutSeconds() {
            if (lockoutUntil) {
                return Math.ceil((lockoutUntil - Date.now()) / 1000);
            }
            return 0;
        }

        // Update UI for lockout state
        function updateLockoutUI() {
            const loginBtn = document.getElementById('loginBtn');
            const passwordInput = document.getElementById('masterPassword');
            const timerMessage = document.getElementById('timerMessage');
            const attemptsLeft = document.getElementById('attemptsLeft');

            if (isLockedOut()) {
                const remainingSeconds = getRemainingLockoutSeconds();
                const minutes = Math.floor(remainingSeconds / 60);
                const seconds = remainingSeconds % 60;

                loginBtn.disabled = true;
                loginBtn.classList.add('disabled');
                passwordInput.disabled = true;
                timerMessage.innerHTML = `<i class="fas fa-hourglass-half"></i> Too many failed attempts. Please wait ${minutes}:${seconds.toString().padStart(2, '0')} before trying again.`;
                timerMessage.style.display = 'block';

                // Update timer every second
                if (window.lockoutInterval) clearInterval(window.lockoutInterval);
                window.lockoutInterval = setInterval(() => {
                    if (isLockedOut()) {
                        const remaining = getRemainingLockoutSeconds();
                        const mins = Math.floor(remaining / 60);
                        const secs = remaining % 60;
                        timerMessage.innerHTML = `<i class="fas fa-hourglass-half"></i> Too many failed attempts. Please wait ${mins}:${secs.toString().padStart(2, '0')} before trying again.`;
                    } else {
                        clearInterval(window.lockoutInterval);
                        resetLoginState();
                    }
                }, 1000);
            } else {
                if (window.lockoutInterval) clearInterval(window.lockoutInterval);
                loginBtn.disabled = false;
                loginBtn.classList.remove('disabled');
                passwordInput.disabled = false;
                timerMessage.style.display = 'none';
                attemptsLeft.style.display = 'block';
                attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${MAX_ATTEMPTS - failedAttempts} attempt(s) remaining before 5-minute lockout`;
            }
        }

        // Reset login state after lockout
        function resetLoginState() {
            loginBtn.disabled = false;
            loginBtn.classList.remove('disabled');
            passwordInput.disabled = false;
            timerMessage.style.display = 'none';
            attemptsLeft.style.display = 'block';
            attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${MAX_ATTEMPTS - failedAttempts} attempt(s) remaining before 5-minute lockout`;
            errorMessage.style.display = 'none';
            errorMessage.innerHTML = '';
            passwordInput.value = '';
            passwordInput.classList.remove('error');
        }

        // Show error message with shake animation
        function showError(message) {
            const errorMessage = document.getElementById('errorMessage');
            const passwordInput = document.getElementById('masterPassword');

            errorMessage.innerHTML = `<i class="fas fa-times-circle"></i> ${message}`;
            errorMessage.style.display = 'block';
            passwordInput.classList.add('error');

            setTimeout(() => {
                passwordInput.classList.remove('error');
            }, 500);
        }

        // Handle login attempt
        function attemptLogin() {
            if (isLockedOut()) {
                showError('Account is temporarily locked. Please wait.');
                updateLockoutUI();
                return;
            }

            const passwordInput = document.getElementById('masterPassword');
            const enteredPassword = passwordInput.value;

            if (enteredPassword === MASTER_PASSWORD) {
                // Successful login
                setAuthenticated();
                document.getElementById('loginModal').classList.remove('active');
                document.getElementById('mainContent').classList.add('visible');
                failedAttempts = 0; // Reset failed attempts on successful login
                sessionStorage.setItem('lifebox_failed_attempts', '0');
            } else {
                // Failed login
                failedAttempts++;
                sessionStorage.setItem('lifebox_failed_attempts', failedAttempts.toString());

                const remainingAttempts = MAX_ATTEMPTS - failedAttempts;

                if (failedAttempts >= MAX_ATTEMPTS) {
                    // Lock out for 5 minutes
                    lockoutUntil = Date.now() + LOCKOUT_DURATION;
                    sessionStorage.setItem('lifebox_lockout_until', lockoutUntil.toString());
                    sessionStorage.setItem('lifebox_failed_attempts', '0');
                    showError(`Too many failed attempts! Access locked for 5 minutes.`);
                    updateLockoutUI();
                } else {
                    showError(`Incorrect password. ${remainingAttempts} attempt(s) remaining.`);
                    const attemptsLeft = document.getElementById('attemptsLeft');
                    attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${remainingAttempts} attempt(s) remaining before 5-minute lockout`;
                }

                passwordInput.value = '';
                passwordInput.focus();
            }
        }

        // Toggle password visibility
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('masterPassword');
            const toggleIcon = document.getElementById('togglePassword');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        // Initialize the protection system
        function initProtection() {
            // Load saved state from session storage
            const savedFailedAttempts = sessionStorage.getItem('lifebox_failed_attempts');
            const savedLockoutUntil = sessionStorage.getItem('lifebox_lockout_until');

            if (savedFailedAttempts) {
                failedAttempts = parseInt(savedFailedAttempts);
            }

            if (savedLockoutUntil) {
                const savedTime = parseInt(savedLockoutUntil);
                if (Date.now() < savedTime) {
                    lockoutUntil = savedTime;
                } else {
                    sessionStorage.removeItem('lifebox_lockout_until');
                }
            }

            // Check if already authenticated
            if (isAuthenticated()) {
                document.getElementById('loginModal').classList.remove('active');
                document.getElementById('mainContent').classList.add('visible');
                return;
            }

            // Show login modal
            document.getElementById('loginModal').classList.add('active');
            document.getElementById('mainContent').classList.remove('visible');

            // Update UI if locked out
            if (isLockedOut()) {
                updateLockoutUI();
            } else {
                const attemptsLeft = document.getElementById('attemptsLeft');
                attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${MAX_ATTEMPTS - failedAttempts} attempt(s) remaining before 5-minute lockout`;
            }

            // Set up event listeners
            document.getElementById('loginBtn').addEventListener('click', attemptLogin);
            document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
            document.getElementById('masterPassword').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    attemptLogin();
                }
            });
        }

        // Initialize Clipboard.js
        new ClipboardJS('.copy-btn');

        // Add copied feedback
        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check"></i> Copied!';
                this.classList.add('copied');

                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.classList.remove('copied');
                }, 2000);
            });
        });

        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });

        // PDF Export
        document.getElementById('pdfBtn').addEventListener('click', function() {
            window.print();
        });

        // Search functionality
        function setupSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');

            // Comprehensive search index (keep your existing search index)
            const searchIndex = [{
                    type: 'Section',
                    name: 'Introduction',
                    id: 'introduction',
                    context: 'System overview and features'
                },
                {
                    type: 'Section',
                    name: 'Getting Started',
                    id: 'getting-started',
                    context: 'Installation and setup instructions'
                },
                {
                    type: 'Section',
                    name: 'System Architecture',
                    id: 'architecture',
                    context: 'Container relationships and network'
                },
                {
                    type: 'Section',
                    name: 'Network Architecture',
                    id: 'network',
                    context: 'IP assignments and network configuration'
                },
                {
                    type: 'Section',
                    name: 'Docker Services',
                    id: 'services',
                    context: 'Details of all Docker services'
                },
                {
                    type: 'Section',
                    name: 'Build Process',
                    id: 'build',
                    context: 'Building Docker images'
                },
                {
                    type: 'Section',
                    name: 'Deployment',
                    id: 'deployment',
                    context: 'Deploying to different environments'
                },
                {
                    type: 'Section',
                    name: 'Configuration',
                    id: 'configuration',
                    context: 'Environment variables and config files'
                },
                {
                    type: 'Section',
                    name: 'CI/CD Pipeline',
                    id: 'ci-cd',
                    context: 'Automated build and deployment'
                },
                {
                    type: 'Section',
                    name: 'API Documentation',
                    id: 'api',
                    context: 'API endpoints for M&E data'
                },
                {
                    type: 'Section',
                    name: 'Database',
                    id: 'database',
                    context: 'Database access and configuration'
                },
                {
                    type: 'Section',
                    name: 'Virtualmin Hosting',
                    id: 'hosting',
                    context: 'Production deployment on Virtualmin'
                },
                {
                    type: 'Section',
                    name: 'Troubleshooting',
                    id: 'troubleshooting',
                    context: 'Common issues and solutions'
                },
                {
                    type: 'Service',
                    name: 'lifeboxme_db',
                    id: 'services',
                    context: 'PostgreSQL database for M&E analytics'
                },
                {
                    type: 'Service',
                    name: 'lifeboxme_mariadb',
                    id: 'services',
                    context: 'MariaDB for Matomo and Forms'
                },
                {
                    type: 'Service',
                    name: 'lifeboxme_metabase',
                    id: 'services',
                    context: 'Analytics dashboard'
                },
                {
                    type: 'Service',
                    name: 'lifeboxme_matomo',
                    id: 'services',
                    context: 'Web analytics platform'
                },
                {
                    type: 'Service',
                    name: 'lifeboxme_pgadmin',
                    id: 'services',
                    context: 'PostgreSQL administration tool'
                },
                {
                    type: 'Service',
                    name: 'lifeboxme_phpmyadmin',
                    id: 'services',
                    context: 'MariaDB administration tool'
                },
                {
                    type: 'Service',
                    name: 'mkdocs',
                    id: 'services',
                    context: 'Documentation site'
                },
                {
                    type: 'API',
                    name: 'lbpmi_data_values',
                    id: 'api',
                    context: 'M&E data values API endpoint'
                },
                {
                    type: 'API',
                    name: 'lbpmi_indicator_actuals',
                    id: 'api',
                    context: 'Indicator actual values API endpoint'
                },
                {
                    type: 'Command',
                    name: 'docker-compose up -d',
                    id: 'deployment',
                    context: 'Start all services'
                },
                {
                    type: 'Command',
                    name: 'docker-compose down',
                    id: 'deployment',
                    context: 'Stop all services'
                },
                {
                    type: 'Command',
                    name: 'docker-compose logs -f',
                    id: 'troubleshooting',
                    context: 'View container logs'
                }
            ];

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                searchResults.innerHTML = '';

                if (searchTerm.length < 2) {
                    searchResults.classList.remove('show');
                    return;
                }

                const results = searchIndex.filter(item =>
                    item.name.toLowerCase().includes(searchTerm) ||
                    (item.context && item.context.toLowerCase().includes(searchTerm))
                );

                if (results.length === 0) {
                    searchResults.classList.add('show');
                    searchResults.innerHTML = '<div class="search-result-item">No results found</div>';
                    return;
                }

                results.slice(0, 10).forEach(result => {
                    const item = document.createElement('div');
                    item.className = 'search-result-item';
                    item.innerHTML = `
                        <div>
                            <span class="result-type">${result.type}</span>
                            <span class="result-name">${result.name}</span>
                            <div class="result-context">${result.context}</div>
                        </div>
                    `;

                    item.addEventListener('click', function() {
                        const targetElement = document.getElementById(result.id);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 20,
                                behavior: 'smooth'
                            });
                            searchResults.classList.remove('show');
                            searchInput.value = '';
                        }
                    });

                    searchResults.appendChild(item);
                });

                searchResults.classList.add('show');
            });

            // Close search results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.remove('show');
                }
            });
        }

        // Initialize everything
        function init() {
            initProtection();
            setupSearch();

            // Initialize diagrams after authentication or immediately if already authenticated
            if (isAuthenticated()) {
                initDiagrams();
            } else {
                // Wait for authentication before initializing diagrams
                const checkAuth = setInterval(() => {
                    if (isAuthenticated()) {
                        clearInterval(checkAuth);
                        initDiagrams();
                    }
                }, 500);
            }
        }

        // Diagram initialization (keep your existing initDiagrams function)
        function initDiagrams() {
            // Initialize Architecture Diagram
            const archContainer = document.getElementById('architectureDiagram');
            if (archContainer) {
                const nodes = new vis.DataSet([{
                        id: 'postgres',
                        label: 'PostgreSQL\n(lifebox_mesystem)',
                        group: 'database',
                        title: 'Primary M&E Analytics Database'
                    },
                    {
                        id: 'mariadb',
                        label: 'MariaDB\n(Matomo/Forms)',
                        group: 'database',
                        title: 'Application Database for Matomo & Forms'
                    },
                    {
                        id: 'metabase',
                        label: 'Metabase',
                        group: 'analytics',
                        title: 'Business Intelligence Dashboard'
                    },
                    {
                        id: 'matomo',
                        label: 'Matomo',
                        group: 'analytics',
                        title: 'Web Analytics Platform'
                    },
                    {
                        id: 'pgadmin',
                        label: 'pgAdmin',
                        group: 'tools',
                        title: 'PostgreSQL Admin Tool'
                    },
                    {
                        id: 'phpmyadmin',
                        label: 'phpMyAdmin',
                        group: 'tools',
                        title: 'MariaDB Admin Tool'
                    },
                    {
                        id: 'mkdocs',
                        label: 'MkDocs',
                        group: 'docs',
                        title: 'Documentation Site'
                    }
                ]);

                const edges = new vis.DataSet([{
                        from: 'metabase',
                        to: 'postgres',
                        arrows: 'to',
                        label: 'Queries data',
                        color: '#9C27B0'
                    },
                    {
                        from: 'matomo',
                        to: 'mariadb',
                        arrows: 'to',
                        label: 'Stores analytics',
                        color: '#FF9800'
                    },
                    {
                        from: 'pgadmin',
                        to: 'postgres',
                        arrows: 'to',
                        label: 'Manages',
                        color: '#607D8B',
                        dashes: true
                    },
                    {
                        from: 'phpmyadmin',
                        to: 'mariadb',
                        arrows: 'to',
                        label: 'Manages',
                        color: '#607D8B',
                        dashes: true
                    }
                ]);

                const data = {
                    nodes,
                    edges
                };
                const options = {
                    groups: {
                        database: {
                            color: {
                                background: '#f44336',
                                border: '#d32f2f'
                            }
                        },
                        analytics: {
                            color: {
                                background: '#9c27b0',
                                border: '#7b1fa2'
                            }
                        },
                        tools: {
                            color: {
                                background: '#607d8b',
                                border: '#455a64'
                            }
                        },
                        docs: {
                            color: {
                                background: '#4caf50',
                                border: '#388e3c'
                            }
                        }
                    },
                    physics: {
                        enabled: true,
                        solver: 'forceAtlas2Based'
                    },
                    interaction: {
                        hover: true,
                        tooltipDelay: 300
                    }
                };

                const network = new vis.Network(archContainer, data, options);

                document.getElementById('fitDiagram').addEventListener('click', () => network.fit({
                    animation: true
                }));
                document.getElementById('centerDiagram').addEventListener('click', () => network.focus(0, {
                    scale: 0.7,
                    animation: true
                }));

                let physicsEnabled = true;
                document.getElementById('togglePhysics').addEventListener('click', function() {
                    physicsEnabled = !physicsEnabled;
                    network.setOptions({
                        physics: {
                            enabled: physicsEnabled
                        }
                    });
                    this.innerHTML = physicsEnabled ? '<i class="fas fa-flask"></i> Disable Physics' : '<i class="fas fa-flask"></i> Enable Physics';
                });
            }

            // Initialize Service Diagram (Network Architecture)
            const serviceContainer = document.getElementById('serviceDiagram');
            if (serviceContainer) {
                const nodes = new vis.DataSet([{
                        id: 'postgres',
                        label: 'PostgreSQL\n(192.168.47.2)',
                        group: 'database',
                        shape: 'box',
                        color: '#FF9800'
                    },
                    {
                        id: 'pgadmin',
                        label: 'pgAdmin\n(192.168.47.3)',
                        group: 'tools',
                        shape: 'box',
                        color: '#607D8B'
                    },
                    {
                        id: 'metabase',
                        label: 'Metabase\n(192.168.47.4)',
                        group: 'analytics',
                        shape: 'box',
                        color: '#9C27B0'
                    },
                    {
                        id: 'mariadb',
                        label: 'MariaDB\n(192.168.47.5)',
                        group: 'database',
                        shape: 'box',
                        color: '#FF9800'
                    },
                    {
                        id: 'phpmyadmin',
                        label: 'phpMyAdmin\n(192.168.47.6)',
                        group: 'tools',
                        shape: 'box',
                        color: '#607D8B'
                    },
                    {
                        id: 'matomo',
                        label: 'Matomo\n(192.168.47.7)',
                        group: 'analytics',
                        shape: 'box',
                        color: '#9C27B0'
                    },
                    {
                        id: 'mkdocs',
                        label: 'MkDocs\n(192.168.47.8)',
                        group: 'docs',
                        shape: 'box',
                        color: '#4CAF50'
                    }
                ]);

                const edges = new vis.DataSet([{
                        from: 'metabase',
                        to: 'postgres',
                        label: 'Analytics',
                        arrows: 'to',
                        color: '#9C27B0'
                    },
                    {
                        from: 'matomo',
                        to: 'mariadb',
                        label: 'Data storage',
                        arrows: 'to',
                        color: '#FF9800'
                    },
                    {
                        from: 'pgadmin',
                        to: 'postgres',
                        label: 'Manage',
                        arrows: 'to',
                        color: '#607D8B',
                        dashes: true
                    },
                    {
                        from: 'phpmyadmin',
                        to: 'mariadb',
                        label: 'Manage',
                        arrows: 'to',
                        color: '#607D8B',
                        dashes: true
                    }
                ]);

                const data = {
                    nodes,
                    edges
                };
                const options = {
                    groups: {
                        database: {
                            color: '#FF9800'
                        },
                        tools: {
                            color: '#607D8B'
                        },
                        analytics: {
                            color: '#9C27B0'
                        },
                        docs: {
                            color: '#4CAF50'
                        }
                    },
                    physics: {
                        enabled: true,
                        solver: 'forceAtlas2Based'
                    },
                    interaction: {
                        hover: true,
                        tooltipDelay: 300
                    }
                };

                const network = new vis.Network(serviceContainer, data, options);

                document.getElementById('fitNetworkDiagram').addEventListener('click', () => network.fit({
                    animation: true
                }));
                document.getElementById('centerNetworkDiagram').addEventListener('click', () => network.focus(0, {
                    scale: 0.7,
                    animation: true
                }));

                let physicsEnabled = true;
                document.getElementById('toggleNetworkPhysics').addEventListener('click', function() {
                    physicsEnabled = !physicsEnabled;
                    network.setOptions({
                        physics: {
                            enabled: physicsEnabled
                        }
                    });
                    this.innerHTML = physicsEnabled ? '<i class="fas fa-flask"></i> Disable Physics' : '<i class="fas fa-flask"></i> Enable Physics';
                });
            }
        }

        // Highlight current section in sidebar
        window.addEventListener('scroll', function() {
            if (isAuthenticated()) {
                const sections = document.querySelectorAll('.section');
                let currentSection = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;

                    if (window.scrollY >= (sectionTop - 100)) {
                        currentSection = section.getAttribute('id');
                    }
                });

                document.querySelectorAll('.sidebar-menu li').forEach(item => {
                    item.classList.remove('active');

                    const link = item.querySelector('a');
                    if (link && link.getAttribute('href') === `#${currentSection}`) {
                        item.classList.add('active');
                    }
                });
            }
        });

        // Start initialization
        init();
    </script>
</body>

</html>