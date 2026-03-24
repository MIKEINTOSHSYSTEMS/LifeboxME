<?php
// File: ./api/index.php
// API Documentation and Testing Environment for Lifebox M&E System
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System - API Documentation & Playground</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/api.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/api.css">
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="/assets/img/lb_favicon.svg" />
    <style>
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

        /* Main content visibility */
        .main-content,
        .container {
            display: none;
        }

        .main-content.visible,
        .container.visible {
            display: block;
        }

        /* API Documentation Styles */
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

        .field-name {
            font-family: monospace;
            color: #2c3e50;
            font-weight: 600;
        }

        .field-type {
            font-family: monospace;
            color: #7f8c8d;
        }

        .open-url-btn {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #00F7FF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .open-url-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .information-container {
            margin: 30px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .wrapper {
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
        }

        .example-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .example-tab {
            padding: 8px 16px;
            background-color: #e0e0e0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .example-tab.active {
            background-color: #2196f3;
            color: white;
        }

        .example-content {
            display: none;
        }

        .example-content.active {
            display: block;
        }

        .param-row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .param-row input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .remove-param {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .add-param-btn {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .send-btn {
            background-color: #2196f3;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
        }

        .api-response {
            background-color: #1e1e1e;
            color: #d4d4d4;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: monospace;
            font-size: 14px;
            max-height: 400px;
            overflow-y: auto;
        }

        .api-url {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            margin: 15px 0;
            font-family: monospace;
            word-break: break-all;
        }

        .url-base {
            color: #4caf50;
        }

        .url-params {
            color: #2196f3;
        }

        .service-card {
            margin-bottom: 20px;
        }

        .step-card {
            margin-bottom: 20px;
        }

        .step-number {
            display: inline-block;
            width: 30px;
            height: 30px;
            background: #2196f3;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 10px;
        }

        .alert {
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }

        .alert-info {
            background-color: #e3f2fd;
            border-left: 4px solid #2196f3;
            color: #0c5460;
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
                <p>Please enter the master password to access the Lifebox M&E API Documentation</p>

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
                <p>The Credential Is Found on The Lifebox System Administration Playbook!</p>
            </div>
        </div>
    </div>

    <div class="container" id="mainContainer">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="#">
                    <h3><i class="fas fa-code"></i> Lifebox M&E API</h3>
                </a>
            </div>

            <ul class="sidebar-menu" id="sidebarMenu">
                <li><a href="#introduction"><i class="fas fa-info-circle"></i> Introduction</a></li>
                <li><a href="#authentication"><i class="fas fa-lock"></i> Authentication</a></li>
                <li><a href="#getting-started"><i class="fas fa-rocket"></i> Getting Started</a></li>
                <li><a href="#api-reference"><i class="fas fa-book"></i> API Reference</a></li>
                <li><a href="#api-playground"><i class="fas fa-flask"></i> API Playground</a></li>
                <li><a href="#examples"><i class="fas fa-code"></i> Code Examples</a></li>
                <li><a href="#tables"><i class="fas fa-table"></i> Available Tables</a></li>
                <li><a href="#webhooks"><i class="fa-solid fa-arrows-to-eye"></i> WebHooks</a></li>
                <li><a href="#rate-limiting"><i class="fas fa-tachometer-alt"></i> Rate Limiting</a></li>
                <li><a href="#errors"><i class="fas fa-exclamation-triangle"></i> Error Codes</a></li>
                <li><a href="#best-practices"><i class="fas fa-check-circle"></i> Best Practices</a></li>
                <li><a href="#troubleshooting"><i class="fas fa-wrench"></i> Troubleshooting</a></li>
                <li><a href="https://mne.lifebox.org/swagger/" target="_blank"><i class="fa-solid fa-circle-nodes"></i> Swagger UI</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            <header class="header">
                <div class="header-left">
                    <button class="go-to-start-btn" onclick="window.location.href='../';">
                        <i class="fas fa-home"></i>
                    </button>
                    <h1>Lifebox M&E System - API Documentation</h1>
                </div>
                <div class="header-right">
                    <div class="search-container" id="desktopSearch">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchInput" placeholder="Search endpoints, tables...">
                        <div class="search-results" id="searchResults"></div>
                    </div>
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </header>

            <div class="content">
                <?php
                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
                $host = $_SERVER['HTTP_HOST'];
                $base_url = $protocol . '://' . $host . '/app/api/v1.php';
                $metabase_url = $protocol . '://' . $host . '/metabase/api/docs/';
                ?>

                <!-- Introduction Section -->
                <section class="section" id="introduction">
                    <div class="section-header">
                        <h2><i class="fas fa-info-circle mr-2"></i> Introduction</h2>
                    </div>
                    <div class="section-body">
                        <p>Welcome to the <strong>Lifebox Monitoring & Evaluation (M&E) System REST API</strong>. This API provides programmatic access to all M&E data, including data values and indicator actuals for the Lifebox M&E System.</p>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Key Features</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><strong>RESTful Architecture:</strong> Standard REST endpoints with JSON responses</li>
                                    <li><strong>Secure Authentication:</strong> Multiple authentication methods (API Key, HTTP Basic Auth)</li>
                                    <li><strong>Full CRUD Operations:</strong> Create, Read, Update, Delete for all M&E data tables</li>
                                    <li><strong>Advanced Filtering:</strong> Filter by region, period, data element, and more</li>
                                    <li><strong>Pagination Support:</strong> Control record limits with records and skip parameters</li>
                                    <li><strong>Real-time Testing:</strong> Built-in API playground for testing endpoints</li>
                                    <li><strong>Multiple Language Support:</strong> Code examples in JavaScript, PHP, Python, Node.js, and C#</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Base URLs</h3>
                            </div>
                            <div class="card-body">
                                <p><strong>Main API:</strong></p>
                                <div class="code-block">
                                    <div class="code-header">
                                        <span>Base URL</span>
                                        <button class="copy-btn" data-clipboard-target="#base-url-code">Copy</button>
                                    </div>
                                    <div class="code-content" id="base-url-code"><?php echo $base_url; ?></div>
                                </div>
                                <p class="mt-3"><strong>Metabase API:</strong></p>
                                <div class="code-block">
                                    <div class="code-header">
                                        <span>Metabase API Docs</span>
                                        <button class="copy-btn" data-clipboard-target="#metabase-url-code">Copy</button>
                                    </div>
                                    <div class="code-content" id="metabase-url-code"><?php echo $metabase_url; ?></div>
                                </div>
                                <div class="mt-3">
                                    <button class="open-url-btn" onclick="window.open('<?php echo $metabase_url; ?>', '_blank');">
                                        <i class="fas fa-chart-line"></i> Open Metabase API Documentation
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- OpenAPI Information -->
                <div class="information-container wrapper">
                    <section class="block col-12">
                        <div class="info">
                            <hgroup class="main">
                                <h2 class="title">
                                    Lifebox M&E System OpenAPI Spec
                                    <small><span class="version">1.0.0</span></small>
                                    <small class="version-stamp"><span class="version">OAS 3.0</span></small>
                                </h2>
                                <a target="_blank" href="https://mne.lifebox.org/api/gen/output/openapi.json" rel="noopener noreferrer" class="link">
                                    <span class="url">https://mne.lifebox.org/api/gen/output/openapi.json</span>
                                </a>
                            </hgroup>
                            <div class="description">
                                <div class="renderedMarkdown">
                                    <p>This is a comprehensive Lifebox M&E System API based on the OpenAPI 3.0 specification. Interactive documentation available at:</p>
                                    <ul>
                                        <li><a href="https://mne.lifebox.org/swagger/" target="_blank"><i class="fas fa-circle-nodes"></i> Swagger UI</a> - Interactive API documentation</li>
                                        <li><a href="https://mne.lifebox.org/swagger_editor/" target="_blank"><i class="fas fa-edit"></i> Swagger Editor</a> - Edit and test the API specification</li>
                                        <li><a href="https://github.com/mikeintoshsystems/lifeboxme" target="_blank"><i class="fab fa-git"></i> Git Repository</a> - Source code and documentation</li>
                                        <li><a href="https://mne.lifebox.org/api/users/" target="_blank"><i class="fas fa-key"></i> Get Your API Key</a> - Register to obtain API access</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info__contact">
                                <a href="mailto:lifebox@merqconsultancy.org" target="_blank" class="link">
                                    <i class="fas fa-envelope"></i> Contact the Developer
                                </a>
                            </div>
                            <div class="info__license">
                                <a href="https://www.apache.org/licenses/LICENSE-2.0.html" target="_blank" class="link">Apache 2.0 License</a>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Authentication Section -->
                <section class="section" id="authentication">
                    <div class="section-header">
                        <h2><i class="fas fa-lock mr-2"></i> Authentication</h2>
                    </div>
                    <div class="section-body">
                        <p>All API requests require authentication. Obtain your API key by logging into the Lifebox M&E System and navigating to your user profile.</p>

                        <h3>Authentication Methods</h3>

                        <div class="service-card">
                            <h4><i class="fas fa-key"></i> 1. API Key as Query Parameter</h4>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>Example URL</span>
                                    <button class="copy-btn" data-clipboard-target="#auth-query">Copy</button>
                                </div>
                                <div class="code-content" id="auth-query">
                                    <?php echo $base_url; ?>?table=lbpmi_data_values&action=list&apikey=YOUR_API_KEY
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4><i class="fas fa-header"></i> 2. API Key as HTTP Header</h4>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>Example Header</span>
                                    <button class="copy-btn" data-clipboard-target="#auth-header">Copy</button>
                                </div>
                                <div class="code-content" id="auth-header">
                                    X-Auth-Token: YOUR_API_KEY
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4><i class="fas fa-user-lock"></i> 3. HTTP Basic Authentication</h4>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>cURL Example</span>
                                    <button class="copy-btn" data-clipboard-target="#basic-auth">Copy</button>
                                </div>
                                <div class="code-content" id="basic-auth">
                                    curl --user username:password "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list"
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle"></i> <strong>Note:</strong> API keys are the recommended authentication method. Keep your API key secure and never share it publicly.
                        </div>
                    </div>
                </section>

                <!-- Getting Started Section -->
                <section class="section" id="getting-started">
                    <div class="section-header">
                        <h2><i class="fas fa-rocket mr-2"></i> Getting Started</h2>
                    </div>
                    <div class="section-body">
                        <div class="step-card">
                            <h4><span class="step-number">1</span> Obtain Your API Key</h4>
                            <p>Log in to the Lifebox M&E System at <a href="https://mne.lifebox.org" target="_blank">https://mne.lifebox.org</a> and navigate to your profile page to find your API key.</p>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">2</span> Understand the Endpoint Structure</h4>
                            <div class="code-block">
                                <div class="code-content">
                                    <?php echo $base_url; ?>?table=TABLE_NAME&action=ACTION&[PARAMETERS]&apikey=YOUR_API_KEY
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">3</span> Make Your First Request</h4>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>cURL Example</span>
                                    <button class="copy-btn" data-clipboard-target="#first-request">Copy</button>
                                </div>
                                <div class="code-content" id="first-request">
                                    curl "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list&records=5&apikey=YOUR_API_KEY"
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">4</span> Explore Available Tables</h4>
                            <p>Review the list of available tables in the <a href="#tables">Available Tables</a> section.</p>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">5</span> Test with the API Playground</h4>
                            <p>Use the built-in <a href="#api-playground">API Playground</a> to test endpoints without writing any code.</p>
                        </div>
                    </div>
                </section>

                <!-- API Reference Section -->
                <section class="section" id="api-reference">
                    <div class="section-header">
                        <h2><i class="fas fa-book mr-2"></i> API Reference</h2>
                    </div>
                    <div class="section-body">
                        <h3>Available Actions</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>HTTP Method</th>
                                        <th>Description</th>
                                        <th>Required Parameters</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="field-name">list</td>
                                        <td>GET</td>
                                        <td>Retrieve multiple records</td>
                                        <td>None</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">view</td>
                                        <td>GET</td>
                                        <td>Retrieve a single record by ID</td>
                                        <td>editid1</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">insert</td>
                                        <td>POST</td>
                                        <td>Create a new record</td>
                                        <td>Field values for the new record</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">update</td>
                                        <td>POST</td>
                                        <td>Update an existing record</td>
                                        <td>editid1, field values to update</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">delete</td>
                                        <td>POST</td>
                                        <td>Delete a record</td>
                                        <td>editid1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Common Parameters</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Applicable Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="field-name">records</td>
                                        <td>integer</td>
                                        <td>Number of records to return (max: 1000)</td>
                                        <td>list</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">skip</td>
                                        <td>integer</td>
                                        <td>Number of records to skip (pagination)</td>
                                        <td>list</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">q</td>
                                        <td>string</td>
                                        <td>Advanced search filter</td>
                                        <td>list</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">qs</td>
                                        <td>string</td>
                                        <td>Full-text search query</td>
                                        <td>list</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">editid1</td>
                                        <td>integer</td>
                                        <td>ID of the record to view/update/delete</td>
                                        <td>view, update, delete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Filter Operators</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Operator</th>
                                        <th>Description</th>
                                        <th>Example</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="field-name">equals</td>
                                        <td>Exact match</td>
                                        <td>q=(region_id~equals~8)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">contains</td>
                                        <td>Contains substring</td>
                                        <td>q=(stored_by~contains~Abush)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">gt</td>
                                        <td>Greater than</td>
                                        <td>q=(value~gt~100)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">lt</td>
                                        <td>Less than</td>
                                        <td>q=(value~lt~50)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">gte</td>
                                        <td>Greater than or equal</td>
                                        <td>q=(value~gte~100)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">lte</td>
                                        <td>Less than or equal</td>
                                        <td>q=(value~lte~50)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">AND</td>
                                        <td>Combine conditions</td>
                                        <td>q=(period_year~equals~2026)AND(region_id~equals~8)</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">OR</td>
                                        <td>Combine conditions</td>
                                        <td>q=(region_id~equals~8)OR(region_id~equals~9)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- API Playground Section -->
                <section class="section" id="api-playground">
                    <div class="section-header">
                        <h2><i class="fas fa-flask mr-2"></i> API Playground</h2>
                    </div>
                    <div class="section-body">
                        <p>Test any API endpoint directly from this documentation. Enter your API key, select a table and action, and see the response.</p>

                        <div class="api-playground">
                            <div class="api-controls">
                                <div class="api-control-group">
                                    <label for="base-url-input">Base URL</label>
                                    <input type="text" id="base-url-input" value="<?php echo $base_url; ?>">
                                </div>
                                <div class="api-control-group">
                                    <label for="table">Table</label>
                                    <select id="table">
                                        <option value="lbpmi_data_values">lbpmi_data_values (M&E Data Values)</option>
                                        <option value="lbpmi_indicator_actuals">lbpmi_indicator_actuals (Indicator Actuals)</option>
                                    </select>
                                </div>
                                <div class="api-control-group">
                                    <label for="action">Action</label>
                                    <select id="action">
                                        <option value="list">list</option>
                                        <option value="view">view</option>
                                        <option value="insert">insert</option>
                                        <option value="update">update</option>
                                        <option value="delete">delete</option>
                                    </select>
                                </div>
                                <div class="api-control-group">
                                    <label for="api-key">API Key</label>
                                    <input type="text" id="api-key" placeholder="Paste your API key here">
                                </div>
                            </div>

                            <div class="api-url">
                                <span class="url-base" id="url-base"><?php echo $base_url; ?></span>
                                <span class="url-params" id="url-params">?table=lbpmi_data_values&action=list</span>
                            </div>

                            <div class="api-params" id="common-params">
                                <h4>Common Parameters</h4>
                                <div id="common-params-container">
                                    <div class="param-row"><input type="text" class="param-key" placeholder="Key" value="records"><input type="text" class="param-value" placeholder="Value" value="10"><button class="remove-param">-</button></div>
                                    <div class="param-row"><input type="text" class="param-key" placeholder="Key" value="skip"><input type="text" class="param-value" placeholder="Value" value="0"><button class="remove-param">-</button></div>
                                </div>
                                <button class="add-param-btn" id="add-common-param">+ Add Parameter</button>
                            </div>

                            <div class="api-params" id="action-params" style="display: none;">
                                <h4>Action Parameters</h4>
                                <div id="action-params-container">
                                    <div class="param-row"><input type="text" class="param-key" placeholder="Key" value="editid1"><input type="text" class="param-value" placeholder="Value"><button class="remove-param">-</button></div>
                                </div>
                                <button class="add-param-btn" id="add-action-param">+ Add Parameter</button>
                            </div>

                            <div class="api-actions">
                                <button class="send-btn" id="send-request"><i class="fas fa-paper-plane"></i> Send Request</button>
                            </div>

                            <div class="api-response-container">
                                <h4>Response</h4>
                                <pre class="api-response" id="api-response">{
    "message": "Send a request to see the response here"
}</pre>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Code Examples Section -->
                <section class="section" id="examples">
                    <div class="section-header">
                        <h2><i class="fas fa-code mr-2"></i> Code Examples</h2>
                    </div>
                    <div class="section-body">
                        <p>Use these code examples to integrate the Lifebox M&E API into your application. The examples demonstrate how to perform common operations using different programming languages.</p>

                        <div class="example-tabs" id="example-tabs">
                            <button class="example-tab active" data-language="javascript">JavaScript</button>
                            <button class="example-tab" data-language="php">PHP</button>
                            <button class="example-tab" data-language="python">Python</button>
                            <button class="example-tab" data-language="nodejs">Node.js</button>
                            <button class="example-tab" data-language="csharp">C#</button>
                            <button class="example-tab" data-language="curl">cURL</button>
                        </div>

                        <!-- JavaScript Example -->
                        <div class="example-content active" id="javascript-example">
                            <h3>JavaScript (Fetch API)</h3>
                            <div class="code-block">
                                <div class="code-header"><span>List Data Values</span><button class="copy-btn" data-clipboard-target="#js-example">Copy</button></div>
                                <div class="code-content" id="js-example">
                                    // List data values with pagination
                                    const apiKey = 'YOUR_API_KEY';
                                    const baseUrl = '<?php echo $base_url; ?>';

                                    async function listDataValues() {
                                    const url = `${baseUrl}?table=lbpmi_data_values&action=list&records=10&skip=0`;

                                    try {
                                    const response = await fetch(url, {
                                    headers: { 'X-Auth-Token': apiKey }
                                    });
                                    const data = await response.json();

                                    if (data.success) {
                                    console.log('Data Values:', data.data);
                                    data.data.forEach(item => {
                                    console.log(`ID: ${item.data_value_id}, Value: ${item.value}`);
                                    });
                                    } else {
                                    console.error('Error:', data.error);
                                    }
                                    } catch (error) {
                                    console.error('Request failed:', error);
                                    }
                                    }

                                    // Filter by region
                                    async function filterByRegion(regionId) {
                                    const url = `${baseUrl}?table=lbpmi_data_values&action=list&q=(region_id~equals~${regionId})`;
                                    const response = await fetch(url, { headers: { 'X-Auth-Token': apiKey } });
                                    const data = await response.json();
                                    return data;
                                    }

                                    // Create new data value
                                    async function createDataValue(dataElementId, periodYear, regionId, value) {
                                    const url = `${baseUrl}?table=lbpmi_data_values&action=insert&apikey=${apiKey}`;
                                    const formData = new URLSearchParams();
                                    formData.append('data_element_id', dataElementId);
                                    formData.append('period_year', periodYear);
                                    formData.append('region_id', regionId);
                                    formData.append('value', value);

                                    const response = await fetch(url, {
                                    method: 'POST',
                                    body: formData
                                    });
                                    return await response.json();
                                    }

                                    // Run examples
                                    listDataValues();
                                </div>
                            </div>
                        </div>

                        <!-- PHP Example -->
                        <div class="example-content" id="php-example">
                            <h3>PHP (cURL)</h3>
                            <div class="code-block">
                                <div class="code-header"><span>List Indicator Actuals</span><button class="copy-btn" data-clipboard-target="#php-example">Copy</button></div>
                                <div class="code-content" id="php-example">
                                    <?php
                                    // List indicator actuals
                                    $apiKey = 'YOUR_API_KEY';
                                    $baseUrl = '<?php echo $base_url; ?>';

                                    function listIndicatorActuals($apiKey, $records = 10)
                                    {
                                        global $baseUrl;
                                        $url = $baseUrl . "?table=lbpmi_indicator_actuals&action=list&records=" . $records;

                                        $ch = curl_init($url);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                                            'X-Auth-Token: ' . $apiKey
                                        ]);

                                        $response = curl_exec($ch);
                                        curl_close($ch);

                                        return json_decode($response, true);
                                    }

                                    function filterByYearAndQuarter($apiKey, $year, $quarter)
                                    {
                                        global $baseUrl;
                                        $filter = "(period_year~equals~{$year})AND(period_quarter~equals~{$quarter})";
                                        $url = $baseUrl . "?table=lbpmi_data_values&action=list&q=" . urlencode($filter);

                                        $ch = curl_init($url);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-Auth-Token: ' . $apiKey]);

                                        $response = curl_exec($ch);
                                        curl_close($ch);

                                        return json_decode($response, true);
                                    }

                                    function updateDataValue($apiKey, $dataValueId, $newValue)
                                    {
                                        global $baseUrl;
                                        $url = $baseUrl . "?table=lbpmi_data_values&action=update&editid1=" . $dataValueId;

                                        $ch = curl_init($url);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_POST, true);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['value' => $newValue]));
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-Auth-Token: ' . $apiKey]);

                                        $response = curl_exec($ch);
                                        curl_close($ch);

                                        return json_decode($response, true);
                                    }

                                    // Example usage
                                    $result = listIndicatorActuals($apiKey);
                                    if ($result && $result['success']) {
                                        foreach ($result['data'] as $actual) {
                                            echo "Indicator ID: " . $actual['indicator_id'] . "\n";
                                            echo "Actual Value: " . $actual['actual_value'] . "\n";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- Python Example -->
                        <div class="example-content" id="python-example">
                            <h3>Python (Requests)</h3>
                            <div class="code-block">
                                <div class="code-header"><span>Complete Python Client</span><button class="copy-btn" data-clipboard-target="#python-example">Copy</button></div>
                                <div class="code-content" id="python-example">
                                    import requests
                                    import json

                                    class LifeboxMEClient:
                                    def __init__(self, api_key, base_url="<?php echo $base_url; ?>"):
                                    self.api_key = api_key
                                    self.base_url = base_url
                                    self.headers = {'X-Auth-Token': api_key}

                                    def list_data_values(self, records=20, skip=0, filters=None):
                                    """List data values with optional filters"""
                                    params = {
                                    'table': 'lbpmi_data_values',
                                    'action': 'list',
                                    'records': records,
                                    'skip': skip
                                    }

                                    if filters:
                                    params['q'] = filters

                                    response = requests.get(self.base_url, params=params, headers=self.headers)
                                    return response.json()

                                    def get_data_value(self, data_value_id):
                                    """Get a single data value by ID"""
                                    params = {
                                    'table': 'lbpmi_data_values',
                                    'action': 'view',
                                    'editid1': data_value_id
                                    }
                                    response = requests.get(self.base_url, params=params, headers=self.headers)
                                    return response.json()

                                    def create_data_value(self, data_element_id, period_year, region_id, value, period_type='Quarterly'):
                                    """Create a new data value"""
                                    params = {
                                    'table': 'lbpmi_data_values',
                                    'action': 'insert'
                                    }
                                    data = {
                                    'data_element_id': data_element_id,
                                    'period_year': period_year,
                                    'region_id': region_id,
                                    'value': value,
                                    'period_type': period_type
                                    }
                                    response = requests.post(self.base_url, params=params, data=data, headers=self.headers)
                                    return response.json()

                                    def update_data_value(self, data_value_id, **kwargs):
                                    """Update an existing data value"""
                                    params = {
                                    'table': 'lbpmi_data_values',
                                    'action': 'update',
                                    'editid1': data_value_id
                                    }
                                    response = requests.post(self.base_url, params=params, data=kwargs, headers=self.headers)
                                    return response.json()

                                    def delete_data_value(self, data_value_id):
                                    """Delete a data value"""
                                    params = {
                                    'table': 'lbpmi_data_values',
                                    'action': 'delete',
                                    'editid1': data_value_id
                                    }
                                    response = requests.post(self.base_url, params=params, headers=self.headers)
                                    return response.json()

                                    def list_indicator_actuals(self, records=20):
                                    """List indicator actuals"""
                                    params = {
                                    'table': 'lbpmi_indicator_actuals',
                                    'action': 'list',
                                    'records': records
                                    }
                                    response = requests.get(self.base_url, params=params, headers=self.headers)
                                    return response.json()

                                    def filter_by_region(self, region_id):
                                    """Filter data values by region"""
                                    return self.list_data_values(filters=f"(region_id~equals~{region_id})")

                                    def filter_by_year_quarter(self, year, quarter):
                                    """Filter data values by year and quarter"""
                                    return self.list_data_values(filters=f"(period_year~equals~{year})AND(period_quarter~equals~{quarter})")

                                    # Usage example
                                    client = LifeboxMEClient(api_key="YOUR_API_KEY")

                                    # List data values
                                    data = client.list_data_values(records=5)
                                    print(json.dumps(data, indent=2))

                                    # Filter by region
                                    region_data = client.filter_by_region(8)
                                    print(f"Found {len(region_data.get('data', []))} records for region 8")

                                    # Create new data value
                                    new_value = client.create_data_value(
                                    data_element_id=10,
                                    period_year=2026,
                                    region_id=8,
                                    value=500
                                    )
                                    print("Created:", new_value)
                                </div>
                            </div>
                        </div>

                        <!-- Node.js Example -->
                        <div class="example-content" id="nodejs-example">
                            <h3>Node.js (Axios)</h3>
                            <div class="code-block">
                                <div class="code-header"><span>Node.js Client</span><button class="copy-btn" data-clipboard-target="#nodejs-example">Copy</button></div>
                                <div class="code-content" id="nodejs-example">
                                    const axios = require('axios');

                                    class LifeboxMEClient {
                                    constructor(apiKey, baseUrl = '<?php echo $base_url; ?>') {
                                    this.apiKey = apiKey;
                                    this.baseUrl = baseUrl;
                                    this.client = axios.create({
                                    baseURL: baseUrl,
                                    headers: { 'X-Auth-Token': apiKey }
                                    });
                                    }

                                    async listDataValues(records = 20, skip = 0, filters = null) {
                                    const params = {
                                    table: 'lbpmi_data_values',
                                    action: 'list',
                                    records,
                                    skip
                                    };

                                    if (filters) {
                                    params.q = filters;
                                    }

                                    const response = await this.client.get('', { params });
                                    return response.data;
                                    }

                                    async getDataValue(dataValueId) {
                                    const response = await this.client.get('', {
                                    params: {
                                    table: 'lbpmi_data_values',
                                    action: 'view',
                                    editid1: dataValueId
                                    }
                                    });
                                    return response.data;
                                    }

                                    async createDataValue(dataElementId, periodYear, regionId, value, periodType = 'Quarterly') {
                                    const params = {
                                    table: 'lbpmi_data_values',
                                    action: 'insert'
                                    };

                                    const data = new URLSearchParams({
                                    data_element_id: dataElementId,
                                    period_year: periodYear,
                                    region_id: regionId,
                                    value: value,
                                    period_type: periodType
                                    });

                                    const response = await this.client.post('', data, { params });
                                    return response.data;
                                    }

                                    async updateDataValue(dataValueId, updates) {
                                    const params = {
                                    table: 'lbpmi_data_values',
                                    action: 'update',
                                    editid1: dataValueId
                                    };

                                    const data = new URLSearchParams(updates);
                                    const response = await this.client.post('', data, { params });
                                    return response.data;
                                    }

                                    async deleteDataValue(dataValueId) {
                                    const params = {
                                    table: 'lbpmi_data_values',
                                    action: 'delete',
                                    editid1: dataValueId
                                    };

                                    const response = await this.client.post('', null, { params });
                                    return response.data;
                                    }

                                    async listIndicatorActuals(records = 20) {
                                    const response = await this.client.get('', {
                                    params: {
                                    table: 'lbpmi_indicator_actuals',
                                    action: 'list',
                                    records
                                    }
                                    });
                                    return response.data;
                                    }

                                    async filterByRegion(regionId) {
                                    return this.listDataValues(100, 0, `(region_id~equals~${regionId})`);
                                    }

                                    async filterByYearQuarter(year, quarter) {
                                    return this.listDataValues(100, 0, `(period_year~equals~${year})AND(period_quarter~equals~${quarter})`);
                                    }
                                    }

                                    // Usage example
                                    async function main() {
                                    const client = new LifeboxMEClient('YOUR_API_KEY');

                                    try {
                                    // List data values
                                    const data = await client.listDataValues(5);
                                    console.log('Data Values:', JSON.stringify(data, null, 2));

                                    // Filter by region
                                    const regionData = await client.filterByRegion(8);
                                    console.log(`Found ${regionData.data?.length || 0} records for region 8`);

                                    // Create new data value
                                    const newValue = await client.createDataValue(10, 2026, 8, 500);
                                    console.log('Created:', newValue);

                                    // List indicator actuals
                                    const indicators = await client.listIndicatorActuals(10);
                                    console.log('Indicators:', indicators);

                                    } catch (error) {
                                    console.error('Error:', error.response?.data || error.message);
                                    }
                                    }

                                    main();
                                </div>
                            </div>
                        </div>

                        <!-- C# Example -->
                        <div class="example-content" id="csharp-example">
                            <h3>C# (.NET)</h3>
                            <div class="code-block">
                                <div class="code-header"><span>C# Client</span><button class="copy-btn" data-clipboard-target="#csharp-example">Copy</button></div>
                                <div class="code-content" id="csharp-example">
                                    using System;
                                    using System.Collections.Generic;
                                    using System.Net.Http;
                                    using System.Threading.Tasks;
                                    using System.Text.Json;

                                    namespace LifeboxMEClient
                                    {
                                    public class LifeboxMEClient
                                    {
                                    private readonly HttpClient _httpClient;
                                    private readonly string _baseUrl;
                                    private readonly string _apiKey;

                                    public LifeboxMEClient(string apiKey, string baseUrl = "<?php echo $base_url; ?>")
                                    {
                                    _apiKey = apiKey;
                                    _baseUrl = baseUrl;
                                    _httpClient = new HttpClient();
                                    _httpClient.DefaultRequestHeaders.Add("X-Auth-Token", apiKey);
                                    }

                                    public async Task<ApiResponse<List<DataValue>>> ListDataValues(int records = 20, int skip = 0, string filters = null)
                                        {
                                        var url = $"{_baseUrl}?table=lbpmi_data_values&action=list&records={records}&skip={skip}";

                                        if (!string.IsNullOrEmpty(filters))
                                        {
                                        url += $"&q={Uri.EscapeDataString(filters)}";
                                        }

                                        var response = await _httpClient.GetAsync(url);
                                        var json = await response.Content.ReadAsStringAsync();
                                        return JsonSerializer.Deserialize<ApiResponse<List<DataValue>>>(json);
                                            }

                                            public async Task<ApiResponse<DataValue>> GetDataValue(int dataValueId)
                                                {
                                                var url = $"{_baseUrl}?table=lbpmi_data_values&action=view&editid1={dataValueId}";
                                                var response = await _httpClient.GetAsync(url);
                                                var json = await response.Content.ReadAsStringAsync();
                                                return JsonSerializer.Deserialize<ApiResponse<DataValue>>(json);
                                                    }

                                                    public async Task<ApiResponse<object>> CreateDataValue(DataValue data)
                                                        {
                                                        var url = $"{_baseUrl}?table=lbpmi_data_values&action=insert";
                                                        var content = new FormUrlEncodedContent(new[]
                                                        {
                                                        new KeyValuePair<string, string>("data_element_id", data.DataElementId.ToString()),
                                                            new KeyValuePair<string, string>("period_year", data.PeriodYear.ToString()),
                                                                new KeyValuePair<string, string>("region_id", data.RegionId.ToString()),
                                                                    new KeyValuePair<string, string>("value", data.Value.ToString()),
                                                                        new KeyValuePair<string, string>("period_type", data.PeriodType)
                                                                            });

                                                                            var response = await _httpClient.PostAsync(url, content);
                                                                            var json = await response.Content.ReadAsStringAsync();
                                                                            return JsonSerializer.Deserialize<ApiResponse<object>>(json);
                                                                                }

                                                                                public async Task<ApiResponse<object>> UpdateDataValue(int dataValueId, decimal value)
                                                                                    {
                                                                                    var url = $"{_baseUrl}?table=lbpmi_data_values&action=update&editid1={dataValueId}";
                                                                                    var content = new FormUrlEncodedContent(new[]
                                                                                    {
                                                                                    new KeyValuePair<string, string>("value", value.ToString())
                                                                                        });

                                                                                        var response = await _httpClient.PostAsync(url, content);
                                                                                        var json = await response.Content.ReadAsStringAsync();
                                                                                        return JsonSerializer.Deserialize<ApiResponse<object>>(json);
                                                                                            }

                                                                                            public async Task<ApiResponse<object>> DeleteDataValue(int dataValueId)
                                                                                                {
                                                                                                var url = $"{_baseUrl}?table=lbpmi_data_values&action=delete&editid1={dataValueId}";
                                                                                                var response = await _httpClient.PostAsync(url, null);
                                                                                                var json = await response.Content.ReadAsStringAsync();
                                                                                                return JsonSerializer.Deserialize<ApiResponse<object>>(json);
                                                                                                    }

                                                                                                    public async Task<ApiResponse<List<IndicatorActual>>> ListIndicatorActuals(int records = 20)
                                                                                                        {
                                                                                                        var url = $"{_baseUrl}?table=lbpmi_indicator_actuals&action=list&records={records}";
                                                                                                        var response = await _httpClient.GetAsync(url);
                                                                                                        var json = await response.Content.ReadAsStringAsync();
                                                                                                        return JsonSerializer.Deserialize<ApiResponse<List<IndicatorActual>>>(json);
                                                                                                            }
                                                                                                            }

                                                                                                            // Data Models
                                                                                                            public class DataValue
                                                                                                            {
                                                                                                            public int DataValueId { get; set; }
                                                                                                            public int DataElementId { get; set; }
                                                                                                            public string PeriodType { get; set; }
                                                                                                            public int PeriodYear { get; set; }
                                                                                                            public int? PeriodQuarter { get; set; }
                                                                                                            public int RegionId { get; set; }
                                                                                                            public decimal Value { get; set; }
                                                                                                            public string StoredBy { get; set; }
                                                                                                            public DateTime Created { get; set; }
                                                                                                            }

                                                                                                            public class IndicatorActual
                                                                                                            {
                                                                                                            public int ActualId { get; set; }
                                                                                                            public int IndicatorId { get; set; }
                                                                                                            public string PeriodType { get; set; }
                                                                                                            public int PeriodYear { get; set; }
                                                                                                            public int? PeriodQuarter { get; set; }
                                                                                                            public int RegionId { get; set; }
                                                                                                            public decimal ActualValue { get; set; }
                                                                                                            public bool IsCalculated { get; set; }
                                                                                                            public DateTime CreatedAt { get; set; }
                                                                                                            }

                                                                                                            public class ApiResponse<T>
                                                                                                                {
                                                                                                                public bool Success { get; set; }
                                                                                                                public T Data { get; set; }
                                                                                                                public string Error { get; set; }
                                                                                                                }

                                                                                                                // Usage Example
                                                                                                                class Program
                                                                                                                {
                                                                                                                static async Task Main()
                                                                                                                {
                                                                                                                var client = new LifeboxMEClient("YOUR_API_KEY");

                                                                                                                // List data values
                                                                                                                var result = await client.ListDataValues(5);
                                                                                                                if (result.Success)
                                                                                                                {
                                                                                                                foreach (var item in result.Data)
                                                                                                                {
                                                                                                                Console.WriteLine($"ID: {item.DataValueId}, Value: {item.Value}");
                                                                                                                }
                                                                                                                }

                                                                                                                // List indicator actuals
                                                                                                                var indicators = await client.ListIndicatorActuals(10);
                                                                                                                if (indicators.Success)
                                                                                                                {
                                                                                                                foreach (var indicator in indicators.Data)
                                                                                                                {
                                                                                                                Console.WriteLine($"Indicator: {indicator.IndicatorId}, Actual: {indicator.ActualValue}");
                                                                                                                }
                                                                                                                }
                                                                                                                }
                                                                                                                }
                                                                                                                }
                                </div>
                            </div>
                        </div>

                        <!-- cURL Example -->
                        <div class="example-content" id="curl-example">
                            <h3>cURL</h3>
                            <div class="code-block">
                                <div class="code-header"><span>cURL Examples</span><button class="copy-btn" data-clipboard-target="#curl-example-full">Copy</button></div>
                                <div class="code-content" id="curl-example-full">
                                    # List data values with API key as parameter
                                    curl "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list&records=5&apikey=YOUR_API_KEY"

                                    # List with API key as header
                                    curl -H "X-Auth-Token: YOUR_API_KEY" \
                                    "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list&records=5"

                                    # Filter by region
                                    curl -H "X-Auth-Token: YOUR_API_KEY" \
                                    "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list&q=(region_id~equals~8)"

                                    # Filter by year and quarter
                                    curl -H "X-Auth-Token: YOUR_API_KEY" \
                                    "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list&q=(period_year~equals~2026)AND(period_quarter~equals~1)"

                                    # View specific record
                                    curl -H "X-Auth-Token: YOUR_API_KEY" \
                                    "<?php echo $base_url; ?>?table=lbpmi_data_values&action=view&editid1=2"

                                    # Create new data value (POST)
                                    curl -X POST "<?php echo $base_url; ?>?table=lbpmi_data_values&action=insert&apikey=YOUR_API_KEY" \
                                    -d "data_element_id=10&period_year=2026&region_id=8&value=500&period_type=Quarterly"

                                    # Update data value
                                    curl -X POST "<?php echo $base_url; ?>?table=lbpmi_data_values&action=update&apikey=YOUR_API_KEY" \
                                    -d "editid1=2&value=350&stored_by=System User"

                                    # Delete data value
                                    curl -X POST "<?php echo $base_url; ?>?table=lbpmi_data_values&action=delete&apikey=YOUR_API_KEY" \
                                    -d "editid1=2"

                                    # List indicator actuals
                                    curl -H "X-Auth-Token: YOUR_API_KEY" \
                                    "<?php echo $base_url; ?>?table=lbpmi_indicator_actuals&action=list&records=5"

                                    # Debug with verbose output
                                    curl -v -H "X-Auth-Token: YOUR_API_KEY" \
                                    "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list"
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Available Tables Section -->
                <section class="section" id="tables">
                    <div class="section-header">
                        <h2><i class="fas fa-table mr-2"></i> Available Tables</h2>
                    </div>
                    <div class="section-body">
                        <div class="service-card">
                            <h4>lbpmi_data_values</h4>
                            <p>Stores M&E data values for indicators and data elements</p>
                            <div class="table-responsive">
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="field-name">data_value_id</td>
                                            <td class="field-type">int</td>
                                            <td>Unique identifier for the data value</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">data_element_id</td>
                                            <td class="field-type">int</td>
                                            <td>ID of the data element/indicator</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_type</td>
                                            <td class="field-type">varchar(20)</td>
                                            <td>Type of period (Quarterly, Monthly, Weekly, Daily)</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_year</td>
                                            <td class="field-type">int</td>
                                            <td>Year of the reporting period</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_quarter</td>
                                            <td class="field-type">int</td>
                                            <td>Quarter (1-4) if applicable</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_month</td>
                                            <td class="field-type">int</td>
                                            <td>Month (1-12) if applicable</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">region_id</td>
                                            <td class="field-type">int</td>
                                            <td>ID of the region</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">value</td>
                                            <td class="field-type">decimal</td>
                                            <td>The data value</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">stored_by</td>
                                            <td class="field-type">varchar(255)</td>
                                            <td>User who stored the value</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">created</td>
                                            <td class="field-type">datetime</td>
                                            <td>Creation timestamp</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>lbpmi_indicator_actuals</h4>
                            <p>Stores indicator actual values for M&E reporting</p>
                            <div class="table-responsive">
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="field-name">actual_id</td>
                                            <td class="field-type">int</td>
                                            <td>Unique identifier for the indicator actual</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">indicator_id</td>
                                            <td class="field-type">int</td>
                                            <td>ID of the indicator</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_type</td>
                                            <td class="field-type">varchar(20)</td>
                                            <td>Type of period (Quarterly, Monthly, etc.)</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_year</td>
                                            <td class="field-type">int</td>
                                            <td>Year of the reporting period</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">period_quarter</td>
                                            <td class="field-type">int</td>
                                            <td>Quarter (1-4) if applicable</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">region_id</td>
                                            <td class="field-type">int</td>
                                            <td>ID of the region</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">actual_value</td>
                                            <td class="field-type">decimal</td>
                                            <td>The actual value achieved</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">is_calculated</td>
                                            <td class="field-type">boolean</td>
                                            <td>Whether the value is calculated (t/f)</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">created_at</td>
                                            <td class="field-type">datetime</td>
                                            <td>Creation timestamp</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- WebHooks Section -->
                <section class="section" id="webhooks">
                    <div class="section-header">
                        <h2><i class="fas fa-webhook mr-2"></i> WebHooks</h2>
                    </div>
                    <div class="section-body">
                        <p>The Lifebox M&E System supports WebHooks for real-time data integration. WebHooks allow you to receive automatic notifications when data is created, updated, or deleted.</p>

                        <h3>WebHook Configuration</h3>
                        <div class="service-card">
                            <h4>Create a WebHook</h4>
                            <p>WebHooks can be configured through the Lifebox Forms interface. Each WebHook requires:</p>
                            <ul>
                                <li><strong>Form Selection:</strong> Choose which form triggers the WebHook</li>
                                <li><strong>URL:</strong> The endpoint where data will be sent</li>
                                <li><strong>Handshake Key:</strong> Optional authentication key for security</li>
                                <li><strong>JSON Format:</strong> Choose to send data as JSON or URL-encoded</li>
                            </ul>
                        </div>

                        <h3>WebHook Payload Example</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Sample WebHook Payload (JSON)</span>
                                <button class="copy-btn" data-clipboard-target="#webhook-payload">Copy</button>
                            </div>
                            <div class="code-content" id="webhook-payload">
                                {
                                "form_id": "lbpmi_data_form",
                                "form_name": "M&E Data Entry",
                                "record_id": "12345",
                                "action": "insert",
                                "timestamp": "2026-03-25T10:30:00Z",
                                "data": {
                                "data_element_id": "5",
                                "period_year": "2026",
                                "period_quarter": "1",
                                "region_id": "8",
                                "value": "300",
                                "stored_by": "Data Manager"
                                }
                                }
                            </div>
                        </div>

                        <h3>WebHook Receiver Example (PHP)</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>WebHook Receiver Script</span>
                                <button class="copy-btn" data-clipboard-target="#webhook-receiver">Copy</button>
                            </div>
                            <div class="code-content" id="webhook-receiver">
                                <?php
                                // WebHook Receiver Script
                                $handshakeKey = 'YOUR_HANDSHAKE_KEY';
                                $input = json_decode(file_get_contents('php://input'), true);

                                // Verify handshake key if configured
                                if (isset($input['handshake_key']) && $input['handshake_key'] !== $handshakeKey) {
                                    http_response_code(401);
                                    die('Invalid handshake key');
                                }

                                // Process the webhook data
                                if ($input['action'] === 'insert') {
                                    $data = $input['data'];

                                    // Store in external database
                                    $pdo = new PDO('mysql:host=localhost;dbname=external_db', 'user', 'password');
                                    $stmt = $pdo->prepare("INSERT INTO webhook_logs 
        (record_id, data_element_id, period_year, region_id, value, received_at) 
        VALUES (?, ?, ?, ?, ?, NOW())");
                                    $stmt->execute([
                                        $input['record_id'],
                                        $data['data_element_id'],
                                        $data['period_year'],
                                        $data['region_id'],
                                        $data['value']
                                    ]);

                                    // Send confirmation
                                    echo json_encode(['status' => 'success', 'message' => 'WebHook processed']);
                                } else {
                                    echo json_encode(['status' => 'ignored', 'message' => 'Action not processed']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Rate Limiting Section -->
                <section class="section" id="rate-limiting">
                    <div class="section-header">
                        <h2><i class="fas fa-tachometer-alt mr-2"></i> Rate Limiting</h2>
                    </div>
                    <div class="section-body">
                        <p>To ensure fair usage and system stability, the API implements rate limiting.</p>

                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Limit Type</th>
                                        <th>Limit</th>
                                        <th>Window</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Requests per API Key</td>
                                        <td>1000</td>
                                        <td>Hour</td>
                                    </tr>
                                    <tr>
                                        <td>Requests per IP</td>
                                        <td>500</td>
                                        <td>Hour</td>
                                    </tr>
                                    <tr>
                                        <td>Concurrent Requests</td>
                                        <td>10</td>
                                        <td>Per second</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Rate Limit Headers</h3>
                        <p>Rate limit information is included in response headers:</p>
                        <ul>
                            <li><code>X-RateLimit-Limit</code>: Maximum requests allowed in the current window</li>
                            <li><code>X-RateLimit-Remaining</code>: Remaining requests in the current window</li>
                            <li><code>X-RateLimit-Reset</code>: Time when the rate limit resets (Unix timestamp)</li>
                        </ul>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Check Rate Limits</span>
                                <button class="copy-btn" data-clipboard-target="#rate-limit-check">Copy</button>
                            </div>
                            <div class="code-content" id="rate-limit-check">
                                curl -I -H "X-Auth-Token: YOUR_API_KEY" \
                                "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list"
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Error Codes Section -->
                <section class="section" id="errors">
                    <div class="section-header">
                        <h2><i class="fas fa-exclamation-triangle mr-2"></i> Error Codes</h2>
                    </div>
                    <div class="section-body">
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>HTTP Status</th>
                                        <th>Error Code</th>
                                        <th>Description</th>
                                        <th>Solution</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>400</td>
                                        <td>INVALID_REQUEST</td>
                                        <td>Invalid request parameters</td>
                                        <td>Check parameter names and values</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td>UNAUTHORIZED</td>
                                        <td>Missing or invalid API key</td>
                                        <td>Provide valid API key via apikey param or X-Auth-Token header</td>
                                    </tr>
                                    <tr>
                                        <td>403</td>
                                        <td>FORBIDDEN</td>
                                        <td>Insufficient permissions</td>
                                        <td>Contact administrator to upgrade permissions</td>
                                    </tr>
                                    <tr>
                                        <td>404</td>
                                        <td>NOT_FOUND</td>
                                        <td>Resource not found</td>
                                        <td>Verify table name and record ID</td>
                                    </tr>
                                    <tr>
                                        <td>429</td>
                                        <td>RATE_LIMITED</td>
                                        <td>Too many requests</td>
                                        <td>Wait and retry after rate limit reset</td>
                                    </tr>
                                    <tr>
                                        <td>500</td>
                                        <td>SERVER_ERROR</td>
                                        <td>Internal server error</td>
                                        <td>Retry after a few minutes, contact support if persists</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="code-block mt-3">
                            <div class="code-header">
                                <span>Error Response Example</span>
                                <button class="copy-btn" data-clipboard-target="#error-example">Copy</button>
                            </div>
                            <div class="code-content" id="error-example">
                                {
                                "success": false,
                                "error": "Invalid API key",
                                "code": "UNAUTHORIZED",
                                "status": 401
                                }
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Best Practices Section -->
                <section class="section" id="best-practices">
                    <div class="section-header">
                        <h2><i class="fas fa-check-circle mr-2"></i> Best Practices</h2>
                    </div>
                    <div class="section-body">
                        <div class="service-card">
                            <h4>1. Use API Keys Securely</h4>
                            <ul>
                                <li>Never expose API keys in client-side code</li>
                                <li>Store API keys in environment variables or secure vaults</li>
                                <li>Rotate API keys periodically</li>
                                <li>Use different API keys for development and production</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>2. Implement Proper Error Handling</h4>
                            <div class="code-block">
                                <div class="code-content">
                                    try {
                                    const response = await api.listDataValues();
                                    if (!response.success) {
                                    // Handle API error
                                    console.error('API Error:', response.error);
                                    // Implement retry logic for transient errors
                                    if (response.code === 'RATE_LIMITED') {
                                    await delay(response.retryAfter || 1000);
                                    return retry();
                                    }
                                    }
                                    } catch (error) {
                                    // Handle network errors
                                    console.error('Network Error:', error);
                                    }
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>3. Use Pagination for Large Datasets</h4>
                            <div class="code-block">
                                <div class="code-content">
                                    // Fetch all data using pagination
                                    async function fetchAllData(api, batchSize = 100) {
                                    let allData = [];
                                    let skip = 0;
                                    let hasMore = true;

                                    while (hasMore) {
                                    const response = await api.listDataValues(batchSize, skip);
                                    if (response.success && response.data.length > 0) {
                                    allData.push(...response.data);
                                    skip += batchSize;
                                    hasMore = response.data.length === batchSize;
                                    } else {
                                    hasMore = false;
                                    }
                                    }
                                    return allData;
                                    }
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>4. Implement Retry Logic with Exponential Backoff</h4>
                            <div class="code-block">
                                <div class="code-content">
                                    async function fetchWithRetry(fn, maxRetries = 3) {
                                    for (let i = 0; i < maxRetries; i++) {
                                        try {
                                        return await fn();
                                        } catch (error) {
                                        if (i===maxRetries - 1) throw error;
                                        const delay=Math.pow(2, i) * 1000;
                                        await new Promise(resolve=> setTimeout(resolve, delay));
                                        }
                                        }
                                        }
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>5. Cache Frequently Accessed Data</h4>
                            <div class="code-block">
                                <div class="code-content">
                                    class CachedClient {
                                    constructor(api, cacheTTL = 300000) { // 5 minutes
                                    this.api = api;
                                    this.cache = new Map();
                                    this.cacheTTL = cacheTTL;
                                    }

                                    async getDataValue(id) {
                                    const cached = this.cache.get(id);
                                    if (cached && Date.now() - cached.timestamp < this.cacheTTL) {
                                        return cached.data;
                                        }

                                        const data=await this.api.getDataValue(id);
                                        this.cache.set(id, { data, timestamp: Date.now() });
                                        return data;
                                        }
                                        }
                                        </div>
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
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Issue</th>
                                        <th>Possible Cause</th>
                                        <th>Solution</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>401 Unauthorized</td>
                                        <td>Missing or invalid API key</td>
                                        <td>Verify API key is correct and included as &apikey= or X-Auth-Token header</td>
                                    </tr>
                                    <tr>
                                        <td>Empty data response</td>
                                        <td>No data matching query</td>
                                        <td>Verify filter conditions. Check if data exists in the table</td>
                                    </tr>
                                    <tr>
                                        <td>Filter not working</td>
                                        <td>Incorrect filter syntax</td>
                                        <td>Use format: q=(field~operator~value). Operators: equals, contains, gt, lt</td>
                                    </tr>
                                    <tr>
                                        <td>500 Server Error</td>
                                        <td>Server-side issue</td>
                                        <td>Check server logs, retry after a few minutes, contact support</td>
                                    </tr>
                                    <tr>
                                        <td>Rate limited (429)</td>
                                        <td>Too many requests</td>
                                        <td>Implement exponential backoff, reduce request frequency</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Debugging Commands</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Debug with cURL Verbose</span>
                                <button class="copy-btn" data-clipboard-target="#debug-curl-final">Copy</button>
                            </div>
                            <div class="code-content" id="debug-curl-final">
                                # See full request/response details
                                curl -v -H "X-Auth-Token: YOUR_API_KEY" \
                                "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list"

                                # Save response to file
                                curl -H "X-Auth-Token: YOUR_API_KEY" \
                                "<?php echo $base_url; ?>?table=lbpmi_data_values&action=list" \
                                -o response.json
                            </div>
                        </div>

                        <h3 class="mt-4">Getting Support</h3>
                        <p>If you're unable to resolve an issue, contact support with:</p>
                        <ul>
                            <li>The full URL of the request that failed</li>
                            <li>The exact error message received</li>
                            <li>The API key used (obfuscated if sharing publicly)</li>
                            <li>Any relevant code snippets</li>
                            <li>The timestamp when the error occurred</li>
                        </ul>
                        <p>Email: <a href="mailto:lifebox@merqconsultancy.org">lifebox@merqconsultancy.org</a></p>
                        <p>GitHub Issues: <a href="https://github.com/mikeintoshsystems/lifeboxme/issues" target="_blank">Submit an Issue</a></p>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script>
        // Password protection system
        const MASTER_PASSWORD = "Lifebox@Mne7";
        const MAX_ATTEMPTS = 3;
        const LOCKOUT_DURATION = 5 * 60 * 1000;

        let failedAttempts = 0;
        let lockoutUntil = null;

        function isAuthenticated() {
            const authTime = sessionStorage.getItem('lifebox_api_auth_time');
            if (authTime) {
                const authTimestamp = parseInt(authTime);
                const now = Date.now();
                if (now - authTimestamp < 24 * 60 * 60 * 1000) {
                    return true;
                } else {
                    sessionStorage.removeItem('lifebox_api_auth_time');
                    return false;
                }
            }
            return false;
        }

        function setAuthenticated() {
            sessionStorage.setItem('lifebox_api_auth_time', Date.now().toString());
        }

        function isLockedOut() {
            if (lockoutUntil && Date.now() < lockoutUntil) {
                return true;
            }
            lockoutUntil = null;
            return false;
        }

        function getRemainingLockoutSeconds() {
            if (lockoutUntil) {
                return Math.ceil((lockoutUntil - Date.now()) / 1000);
            }
            return 0;
        }

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

        function resetLoginState() {
            const loginBtn = document.getElementById('loginBtn');
            const passwordInput = document.getElementById('masterPassword');
            const timerMessage = document.getElementById('timerMessage');
            const errorMessage = document.getElementById('errorMessage');

            loginBtn.disabled = false;
            loginBtn.classList.remove('disabled');
            passwordInput.disabled = false;
            timerMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            passwordInput.value = '';
            passwordInput.classList.remove('error');
        }

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

        function attemptLogin() {
            if (isLockedOut()) {
                showError('Account is temporarily locked. Please wait.');
                updateLockoutUI();
                return;
            }

            const passwordInput = document.getElementById('masterPassword');
            const enteredPassword = passwordInput.value;

            if (enteredPassword === MASTER_PASSWORD) {
                setAuthenticated();
                document.getElementById('loginModal').classList.remove('active');
                document.getElementById('mainContainer').classList.add('visible');
                document.getElementById('mainContent').classList.add('visible');
                failedAttempts = 0;
                sessionStorage.setItem('lifebox_api_failed_attempts', '0');
            } else {
                failedAttempts++;
                sessionStorage.setItem('lifebox_api_failed_attempts', failedAttempts.toString());

                const remainingAttempts = MAX_ATTEMPTS - failedAttempts;

                if (failedAttempts >= MAX_ATTEMPTS) {
                    lockoutUntil = Date.now() + LOCKOUT_DURATION;
                    sessionStorage.setItem('lifebox_api_lockout_until', lockoutUntil.toString());
                    sessionStorage.setItem('lifebox_api_failed_attempts', '0');
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

        function initProtection() {
            const savedFailedAttempts = sessionStorage.getItem('lifebox_api_failed_attempts');
            const savedLockoutUntil = sessionStorage.getItem('lifebox_api_lockout_until');

            if (savedFailedAttempts) {
                failedAttempts = parseInt(savedFailedAttempts);
            }

            if (savedLockoutUntil) {
                const savedTime = parseInt(savedLockoutUntil);
                if (Date.now() < savedTime) {
                    lockoutUntil = savedTime;
                } else {
                    sessionStorage.removeItem('lifebox_api_lockout_until');
                }
            }

            if (isAuthenticated()) {
                document.getElementById('loginModal').classList.remove('active');
                document.getElementById('mainContainer').classList.add('visible');
                document.getElementById('mainContent').classList.add('visible');
                return;
            }

            document.getElementById('loginModal').classList.add('active');
            document.getElementById('mainContainer').classList.remove('visible');
            document.getElementById('mainContent').classList.remove('visible');

            if (isLockedOut()) {
                updateLockoutUI();
            } else {
                const attemptsLeft = document.getElementById('attemptsLeft');
                attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${MAX_ATTEMPTS - failedAttempts} attempt(s) remaining before 5-minute lockout`;
            }

            document.getElementById('loginBtn').addEventListener('click', attemptLogin);
            document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
            document.getElementById('masterPassword').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    attemptLogin();
                }
            });
        }

        // Initialize Clipboard.js
        if (typeof ClipboardJS !== 'undefined') {
            new ClipboardJS('.copy-btn');
        }

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

        // Example tab switching
        document.querySelectorAll('.example-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.example-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.example-content').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                const language = this.getAttribute('data-language');
                document.getElementById(`${language}-example`).classList.add('active');
            });
        });

        // API Playground functionality
        const baseUrlInput = document.getElementById('base-url-input');
        const tableSelect = document.getElementById('table');
        const actionSelect = document.getElementById('action');
        const apiKeyInput = document.getElementById('api-key');
        const urlBase = document.getElementById('url-base');
        const urlParams = document.getElementById('url-params');
        const commonParamsContainer = document.getElementById('common-params-container');
        const actionParamsContainer = document.getElementById('action-params-container');
        const actionParamsSection = document.getElementById('action-params');
        const apiResponse = document.getElementById('api-response');
        const sendRequestBtn = document.getElementById('send-request');

        function updateUrlDisplay() {
            const baseUrl = baseUrlInput.value;
            const table = tableSelect.value;
            const action = actionSelect.value;
            const apiKey = apiKeyInput.value;

            let params = `?table=${table}&action=${action}`;

            document.querySelectorAll('#common-params-container .param-row').forEach(row => {
                const key = row.querySelector('.param-key').value;
                const value = row.querySelector('.param-value').value;
                if (key && value) {
                    params += `&${key}=${encodeURIComponent(value)}`;
                }
            });

            document.querySelectorAll('#action-params-container .param-row').forEach(row => {
                const key = row.querySelector('.param-key').value;
                const value = row.querySelector('.param-value').value;
                if (key && value) {
                    params += `&${key}=${encodeURIComponent(value)}`;
                }
            });

            if (apiKey) {
                params += `&apikey=${apiKey}`;
            }

            urlBase.textContent = baseUrl;
            urlParams.textContent = params;
        }

        function addParamRow(container) {
            const row = document.createElement('div');
            row.className = 'param-row';
            row.innerHTML = `
                <input type="text" class="param-key" placeholder="Key">
                <input type="text" class="param-value" placeholder="Value">
                <button class="remove-param">-</button>
            `;
            container.appendChild(row);

            row.querySelector('.remove-param').addEventListener('click', function() {
                row.remove();
                updateUrlDisplay();
            });

            row.querySelectorAll('input').forEach(input => {
                input.addEventListener('input', updateUrlDisplay);
            });
        }

        document.getElementById('add-common-param').addEventListener('click', function() {
            addParamRow(commonParamsContainer);
        });

        document.getElementById('add-action-param').addEventListener('click', function() {
            addParamRow(actionParamsContainer);
        });

        actionSelect.addEventListener('change', function() {
            const action = this.value;
            if (action === 'view' || action === 'update' || action === 'delete') {
                actionParamsSection.style.display = 'block';
            } else {
                actionParamsSection.style.display = 'none';
            }
            updateUrlDisplay();
        });

        baseUrlInput.addEventListener('input', updateUrlDisplay);
        tableSelect.addEventListener('change', updateUrlDisplay);
        actionSelect.addEventListener('change', updateUrlDisplay);
        apiKeyInput.addEventListener('input', updateUrlDisplay);

        document.querySelectorAll('.param-key, .param-value').forEach(input => {
            input.addEventListener('input', updateUrlDisplay);
        });

        document.querySelectorAll('.remove-param').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.param-row').remove();
                updateUrlDisplay();
            });
        });

        sendRequestBtn.addEventListener('click', function() {
            const url = urlBase.textContent + urlParams.textContent;
            const apiKey = apiKeyInput.value;
            const action = actionSelect.value;

            apiResponse.textContent = "Sending request...";
            sendRequestBtn.disabled = true;

            const method = (action === 'list' || action === 'view') ? 'GET' : 'POST';
            const headers = new Headers();
            if (apiKey) {
                headers.append('X-Auth-Token', apiKey);
            }

            const requestOptions = {
                method: method,
                headers: headers
            };

            if (method === 'POST') {
                const formData = new FormData();
                document.querySelectorAll('#common-params-container .param-row').forEach(row => {
                    const key = row.querySelector('.param-key').value;
                    const value = row.querySelector('.param-value').value;
                    if (key && value) {
                        formData.append(key, value);
                    }
                });
                document.querySelectorAll('#action-params-container .param-row').forEach(row => {
                    const key = row.querySelector('.param-key').value;
                    const value = row.querySelector('.param-value').value;
                    if (key && value) {
                        formData.append(key, value);
                    }
                });
                requestOptions.body = new URLSearchParams(formData);
            }

            fetch(url, requestOptions)
                .then(async response => {
                    const contentType = response.headers.get('content-type');
                    let data;
                    if (contentType && contentType.includes('application/json')) {
                        data = await response.json();
                    } else {
                        data = await response.text();
                    }
                    return {
                        status: response.status,
                        data: data
                    };
                })
                .then(result => {
                    apiResponse.textContent = typeof result.data === 'string' ? result.data : JSON.stringify(result.data, null, 2);
                    sendRequestBtn.disabled = false;
                })
                .catch(error => {
                    apiResponse.textContent = `Request failed: ${error.message}`;
                    sendRequestBtn.disabled = false;
                });
        });

        updateUrlDisplay();

        // Search functionality
        function setupSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');

            const searchIndex = [{
                    type: 'Section',
                    name: 'Introduction',
                    id: 'introduction',
                    context: 'API overview and features'
                },
                {
                    type: 'Section',
                    name: 'Authentication',
                    id: 'authentication',
                    context: 'API key authentication methods'
                },
                {
                    type: 'Section',
                    name: 'Getting Started',
                    id: 'getting-started',
                    context: 'How to use the API'
                },
                {
                    type: 'Section',
                    name: 'API Reference',
                    id: 'api-reference',
                    context: 'Endpoint documentation'
                },
                {
                    type: 'Section',
                    name: 'API Playground',
                    id: 'api-playground',
                    context: 'Test API endpoints'
                },
                {
                    type: 'Section',
                    name: 'Code Examples',
                    id: 'examples',
                    context: 'Programming language examples'
                },
                {
                    type: 'Section',
                    name: 'Available Tables',
                    id: 'tables',
                    context: 'List of accessible data tables'
                },
                {
                    type: 'Section',
                    name: 'WebHooks',
                    id: 'webhooks',
                    context: 'Real-time data integration'
                },
                {
                    type: 'Section',
                    name: 'Rate Limiting',
                    id: 'rate-limiting',
                    context: 'API usage limits'
                },
                {
                    type: 'Section',
                    name: 'Error Codes',
                    id: 'errors',
                    context: 'HTTP status codes and solutions'
                },
                {
                    type: 'Section',
                    name: 'Best Practices',
                    id: 'best-practices',
                    context: 'Optimization guidelines'
                },
                {
                    type: 'Section',
                    name: 'Troubleshooting',
                    id: 'troubleshooting',
                    context: 'Common issues and solutions'
                },
                {
                    type: 'Table',
                    name: 'lbpmi_data_values',
                    id: 'tables',
                    context: 'M&E data values table'
                },
                {
                    type: 'Table',
                    name: 'lbpmi_indicator_actuals',
                    id: 'tables',
                    context: 'Indicator actuals table'
                },
                {
                    type: 'Action',
                    name: 'list',
                    id: 'api-reference',
                    context: 'Retrieve multiple records'
                },
                {
                    type: 'Action',
                    name: 'view',
                    id: 'api-reference',
                    context: 'Retrieve a single record'
                },
                {
                    type: 'Action',
                    name: 'insert',
                    id: 'api-reference',
                    context: 'Create a new record'
                },
                {
                    type: 'Action',
                    name: 'update',
                    id: 'api-reference',
                    context: 'Update an existing record'
                },
                {
                    type: 'Action',
                    name: 'delete',
                    id: 'api-reference',
                    context: 'Delete a record'
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
                    item.innerHTML = `<div><span class="result-type">${result.type}</span><span class="result-name">${result.name}</span><div class="result-context">${result.context}</div></div>`;
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

            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.remove('show');
                }
            });
        }

        setupSearch();

        // Highlight current section
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.section');
            let currentSection = '';
            sections.forEach(section => {
                if (window.scrollY >= (section.offsetTop - 100)) {
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
        });

        // Initialize everything
        initProtection();
    </script>
</body>

</html>