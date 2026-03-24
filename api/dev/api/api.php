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

    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="#">
                    <h3><i class="fas fa-code"></i> API Documentation</h3>
                </a>
            </div>

            <ul class="sidebar-menu" id="sidebarMenu">
                <li>
                    <a href="#introduction"><i class="fas fa-info-circle"></i> Introduction</a>
                </li>
                <li>
                    <a href="#authentication"><i class="fas fa-lock"></i> Authentication</a>
                </li>
                <li>
                    <a href="#getting-started"><i class="fas fa-rocket"></i> Getting Started</a>
                </li>
                <li>
                    <a href="#api-reference"><i class="fas fa-book"></i> API Reference</a>
                </li>
                <li>
                    <a href="#api-playground"><i class="fas fa-flask"></i> API Playground</a>
                </li>
                <li>
                    <a href="#examples"><i class="fas fa-code"></i> Code Examples</a>
                </li>
                <li>
                    <a href="#tables"><i class="fas fa-table"></i> Available Tables</a>
                </li>
                <!-- <li>
                    <a href="#lifeboxforms"><i class="fas fa-list"></i> Lifebox Forms</a>
                </li>-->
                <li>
                    <a href="#troubleshooting"><i class="fas fa-wrench"></i> Troubleshooting</a>
                </li>
                <li>
                    <a href="https://mne.lifebox.org/swagger/"><i class="fa-solid fa-circle-nodes"></i> Swagger UI</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
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
                <!-- Introduction Section -->
                <section class="section" id="introduction">
                    <div class="section-header">
                        <h2><i class="fas fa-info-circle mr-2"></i> Introduction</h2>
                    </div>
                    <div class="section-body">
                        <p>This documentation provides a comprehensive guide to the REST API for the Lifebox M&E System. The API allows developers to interact with the system programmatically to access and manipulate data.</p>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Key Features</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><strong>RESTful Architecture:</strong> Standard REST endpoints with JSON responses</li>
                                    <li><strong>Secure Authentication:</strong> API key authentication for all requests</li>
                                    <li><strong>CRUD Operations:</strong> Create, Read, Update, Delete actions for all data tables</li>
                                    <li><strong>Filtering & Pagination:</strong> Advanced filtering and pagination capabilities</li>
                                    <li><strong>Real-time Testing:</strong> Built-in API playground for testing endpoints</li>
                                    <li><strong>Multiple Formats:</strong> Responses in JSON format</li>
                                </ul>
                            </div>
                        </div>
                        <br></br>
                        <h3 class="mt-4">Base URL for Main System</h3>
                        <p>All API endpoints are accessed through the base URL:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Base URL</span>
                                <button class="copy-btn" data-clipboard-target="#base-url-code">Copy</button>
                            </div>
                            <div class="code-content" id="base-url-code">
                                <?php
                                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
                                $host = $_SERVER['HTTP_HOST'];
                                $base_url = $protocol . '://' . $host . '/app/api/v1.php';
                                echo $base_url;
                                ?>
                            </div>
                        </div>

                        <br></br>
                        <h3 class="mt-4">Base URL for Metabase Data Visualization Application</h3>
                        <p>Metabase API endpoints are accessed through the following Metabase URL:</p>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Base URL</span>
                                <button class="copy-btn" data-clipboard-target="#metabase-url-code">Copy</button>
                            </div>
                            <div class="code-content" id="metabase-url-code">
                                <?php
                                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
                                $host = $_SERVER['HTTP_HOST'];
                                $metabase_url = $protocol . '://' . $host . '/metabase/api/docs/';
                                echo $metabase_url;
                                ?>
                            </div>
                        </div>

                        <!-- New Button to Open URL in New Tab -->
                        <div class="mt-3">
                            <button class="open-url-btn" onclick="window.open('<?php echo $metabase_url; ?>', '_blank');">
                                Open Metabase API Documentation
                            </button>
                        </div>

                        <style>
                            /* General Styles */
                            body {
                                font-family: 'Arial', sans-serif;
                                color: #333;
                                line-height: 1.6;
                                margin: 0;
                                padding: 0;
                            }

                            /* Main Container */
                            .information-container {
                                /*max-width: 1200px;*/
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

                            /* Heading and API info */
                            hgroup.main {
                                margin-bottom: 20px;
                            }

                            .title {
                                font-size: 28px;
                                color: #2e6da4;
                                margin-bottom: 10px;
                            }

                            .title span {
                                font-size: 18px;
                                color: #555;
                            }

                            .version,
                            .version-stamp {
                                font-size: 14px;
                                color: #aaa;
                            }

                            .url {
                                font-size: 14px;
                                color: #008cba;
                                text-decoration: underline;
                            }

                            .link {
                                color: #0066cc;
                                text-decoration: none;
                            }

                            .link:hover {
                                text-decoration: underline;
                            }

                            /* Description and Content */
                            .description {
                                margin-bottom: 30px;
                            }

                            .renderedMarkdown p {
                                font-size: 16px;
                                margin-bottom: 15px;
                            }

                            ul {
                                list-style-type: disc;
                                margin-left: 20px;
                            }

                            ul li {
                                font-size: 16px;
                                margin-bottom: 10px;
                            }

                            /* Info Section Links */
                            .info__tos,
                            .info__contact,
                            .info__license,
                            .info__extdocs {
                                margin-top: 15px;
                                font-size: 14px;
                            }

                            .info__tos a,
                            .info__contact a,
                            .info__license a,
                            .info__extdocs a {
                                color: #0066cc;
                            }

                            .info__tos a:hover,
                            .info__contact a:hover,
                            .info__license a:hover,
                            .info__extdocs a:hover {
                                text-decoration: underline;
                            }

                            .info__license__url {
                                font-size: 14px;
                                margin-top: 10px;
                            }

                            .info__license__url a {
                                color: #0066cc;
                            }

                            .info__license__url a:hover {
                                text-decoration: underline;
                            }
                        </style>

                        <!-- Button CSS -->
                        <style>
                            /* Button styling */
                            .open-url-btn {
                                padding: 10px 20px;
                                font-size: 16px;
                                color: white;
                                background-color: #00F7FF;
                                /* Primary blue color */
                                border: none;
                                border-radius: 5px;
                                cursor: pointer;
                                transition: background-color 0.3s ease, transform 0.2s ease;
                            }

                            /* Hover effect */
                            .open-url-btn:hover {
                                background-color: #0056b3;
                                /* Darker blue */
                                transform: translateY(-2px);
                            }

                            /* Focus effect for accessibility */
                            .open-url-btn:focus {
                                outline: none;
                                box-shadow: 0 0 0 2px rgba(38, 143, 255, 0.6);
                                /* Blue glow on focus */
                            }

                            /* Active state (when clicked) */
                            .open-url-btn:active {
                                background-color: #004085;
                                /* Even darker blue */
                                transform: translateY(1px);
                            }

                            /* Padding and margin for spacing */
                            .mt-3 {
                                margin-top: 20px;
                            }

                            a {
                                color: darkturquoise;
                            }
                        </style>
                    </div>
                </section>

                <div class="information-container wrapper">
                    <section class="block col-12">
                        <div>
                            <div class="info">
                                <!-- Title and API info -->
                                <hgroup class="main">
                                    <h2 class="title">
                                        Lifebox M&E System OpenAPI Spec
                                        <br></br>
                                        <span> Accessible Via
                                            <a href="/swagger/">{Swagger UI}</a>
                                            <small>
                                                <span class="version">1.0.0</span>
                                            </small>
                                            <small class="version-stamp">
                                                <span class="version">OAS 3.0</span>
                                            </small>
                                        </span>
                                    </h2>
                                    <a target="_blank" href="https://mne.lifebox.org/api/gen/output/openapi.json" rel="noopener noreferrer" class="link">
                                        <span class="url">https://mne.lifebox.org/api/gen/output/openapi.json</span>
                                    </a>
                                </hgroup>

                                <!-- Description and Links -->
                                <div class="description">
                                    <div class="renderedMarkdown">
                                        <p>
                                            This is a comprehensive Lifebox M&E System Server based on the OpenAPI 3.0 specification. You can find out more about the
                                            <a href="https://mne.lifebox.org/api/dev/api/" target="_blank" rel="noopener noreferrer"> This Lifebox M&E API Documentation</a>.
                                        </p>
                                        <p>
                                            You can find the Generator for this Spec at
                                            <a href="http://mne.lifebox.org:5000" target="_blank" rel="noopener noreferrer">Lifebox M&E API Spec Generator</a>.
                                        </p>
                                        <p>
                                            If you want to access the spec editor, you can find it at
                                            <a href="https://mne.lifebox.org/swagger_editor/" target="_blank" rel="noopener noreferrer">Swagger Editor</a>.
                                            You can modify the API Spec by either changing the definition itself or by editing the code using the Python app.py!
                                        </p>
                                        <p>
                                            Over time, we aim to improve the API and expose new features in OAS3.
                                        </p>

                                        <!-- Useful Links -->
                                        <p><strong>Some useful links:</strong></p>
                                        <ul>
                                            <li><a href="https://gitlab.com/mikeintoshsystems/lifeboxme" target="_blank" rel="noopener noreferrer">The Lifebox M&E System Repository</a></li>
                                            <li><a href="https://mne.lifebox.org/api/gen/lifeboxme_dynamic.yaml" target="_blank" rel="noopener noreferrer">The source API definition for Lifebox M&E System YAML</a></li>
                                            <li><a href="https://mne.lifebox.org/api/gen/output/openapi.json" target="_blank" rel="noopener noreferrer">The source API definition for Lifebox M&E System JSON</a></li>
                                            <li><a href="https://mne.lifebox.org/api/users/" target="_blank" rel="noopener noreferrer">To Get Your API Key, Please go to Lifebox M&E System Users and Login Using Your Account</a></li>
                                            <li><a href="https://merqconsultancy.org" target="_blank" rel="noopener noreferrer">Contact the Developers</a></li>
                                        </ul>

                                        <!-- Information Section -->
                                        <p><strong>Information Section</strong></p>
                                    </div>
                                </div>

                                <!-- Terms of Service and License -->
                                <div class="info__tos">
                                    <a href="https://swagger.io/terms/" target="_blank" rel="noopener noreferrer" class="link">Terms of Service</a>
                                </div>
                                <div class="info__contact">
                                    <a href="mailto:michaelktd@merqconsultancy.org" target="_blank" rel="noopener noreferrer" class="link">Contact the Developer</a>
                                </div>
                                <div class="info__license">
                                    <div class="info__license__url">
                                        <a href="https://www.apache.org/licenses/LICENSE-2.0.html" target="_blank" rel="noopener noreferrer" class="link">Apache 2.0 License</a>
                                    </div>
                                </div>
                                <a class="info__extdocs link" href="https://swagger.io/" target="_blank" rel="noopener noreferrer">Find out more about Swagger</a>
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
                        <p>All API requests require authentication using an API key. You can find your API key in your user profile after logging into the Lifebox M&E System.</p>

                        <h3>Authentication Methods</h3>
                        <p>You can authenticate your requests using one of the following methods:</p>

                        <div class="service-card">
                            <h4>1. Query Parameter</h4>
                            <p>Include the API key as a query parameter in your request URL:</p>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>Example URL</span>
                                    <button class="copy-btn" data-clipboard-target="#auth-query">Copy</button>
                                </div>
                                <div class="code-content" id="auth-query">
                                    <?php echo $base_url; ?>?table=candidates&action=list&apikey=YOUR_API_KEY
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>2. HTTP Header</h4>
                            <p>Include the API key in the <code>X-Auth-Token</code> header of your request:</p>
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

                        <h3 class="mt-4">Security Considerations</h3>
                        <ul>
                            <li>Keep your API key secure and never share it publicly</li>
                            <li>Regenerate your API key if you suspect it has been compromised</li>
                            <li>Use HTTPS for all API requests to ensure encryption</li>
                            <li>Limit API key access to only necessary endpoints</li>
                        </ul>
                    </div>
                </section>

                <!-- Getting Started Section -->
                <section class="section" id="getting-started">
                    <div class="section-header">
                        <h2><i class="fas fa-rocket mr-2"></i> Getting Started</h2>
                    </div>
                    <div class="section-body">
                        <p>Follow these steps to start using the Lifebox M&E System API:</p>

                        <div class="step-card">
                            <h4><span class="step-number">1</span> Obtain Your API Key</h4>
                            <p>Log in to the Lifebox M&E System and navigate to your profile page to find your API key.</p>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">2</span> Understand the Endpoint Structure</h4>
                            <p>All API endpoints follow this structure:</p>
                            <div class="code-block">
                                <div class="code-content">
                                    BASE_URL?table=TABLE_NAME&action=ACTION&[PARAMETERS]
                                </div>
                            </div>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">3</span> Explore Available Tables</h4>
                            <p>Review the list of available tables in the <a href="#tables">Available Tables</a> section.</p>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">4</span> Test with the API Playground</h4>
                            <p>Use the built-in <a href="#api-playground">API Playground</a> to test endpoints without writing any code.</p>
                        </div>

                        <div class="step-card">
                            <h4><span class="step-number">5</span> Implement in Your Application</h4>
                            <p>Use the <a href="#examples">Code Examples</a> to integrate the API into your application.</p>
                        </div>

                        <h3 class="mt-4">Response Format</h3>
                        <p>All API responses are in JSON format and include a <code>success</code> field indicating whether the request was successful.</p>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Success Response</span>
                                <button class="copy-btn" data-clipboard-target="#success-response">Copy</button>
                            </div>
                            <div class="code-content" id="success-response">
                                {
                                "success": true,
                                "data": {
                                // Response data
                                }
                                }
                            </div>
                        </div>

                        <div class="code-block">
                            <div class="code-header">
                                <span>Error Response</span>
                                <button class="copy-btn" data-clipboard-target="#error-response">Copy</button>
                            </div>
                            <div class="code-content" id="error-response">
                                {
                                "success": false,
                                "error": "Error message describing the issue"
                                }
                            </div>
                        </div>
                    </div>
                </section>

                <!-- API Reference Section -->
                <section class="section" id="api-reference">
                    <div class="section-header">
                        <h2><i class="fas fa-book mr-2"></i> API Reference</h2>
                    </div>
                    <div class="section-body">
                        <p>The Lifebox M&E System API provides endpoints for interacting with all data tables. Each endpoint requires a <code>table</code> parameter specifying the table name and an <code>action</code> parameter specifying the operation.</p>

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
                                        <td>Number of records to return (default: 20)</td>
                                        <td>list</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">skip</td>
                                        <td>integer</td>
                                        <td>Number of records to skip (for pagination)</td>
                                        <td>list</td>
                                    </tr>
                                    <tr>
                                        <td class="field-name">q</td>
                                        <td>string</td>
                                        <td>Advanced search filter (e.g., (Status~equals~Active))</td>
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
                                        <td>integer/string</td>
                                        <td>ID of the record to view, update, or delete</td>
                                        <td>view, update, delete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Response Status Codes</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Status Code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>200 OK</td>
                                        <td>Request succeeded</td>
                                    </tr>
                                    <tr>
                                        <td>400 Bad Request</td>
                                        <td>Invalid request parameters</td>
                                    </tr>
                                    <tr>
                                        <td>401 Unauthorized</td>
                                        <td>Missing or invalid API key</td>
                                    </tr>
                                    <tr>
                                        <td>403 Forbidden</td>
                                        <td>Insufficient permissions</td>
                                    </tr>
                                    <tr>
                                        <td>404 Not Found</td>
                                        <td>Resource not found</td>
                                    </tr>
                                    <tr>
                                        <td>500 Internal Server Error</td>
                                        <td>Server-side error</td>
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
                        <p>Test any API endpoint directly from this documentation. The playground will automatically detect the base URL of your installation.</p>

                        <div class="api-playground">
                            <div class="api-controls">
                                <div class="api-control-group">
                                    <label for="base-url-input">Base URL</label>
                                    <input type="text" id="base-url-input" value="<?php echo $base_url; ?>">
                                </div>
                                <div class="api-control-group">
                                    <label for="table">Table</label>
                                    <select id="table">
                                        <option value="candidates">candidates</option>
                                        <option value="training_participants">Training Participants</option>
                                        <option value="event_participants">Event Participants</option>
                                        <option value="candidate_employment_tracker">Candidate Employment Tracker</option>
                                        <option value="trainings">trainings</option>
                                        <option value="events">Events</option>
                                        <option value="admin_users">users</option>
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
                                <span class="url-params" id="url-params">?table=candidates&action=list</span>
                            </div>

                            <div class="api-params" id="common-params">
                                <h4>Common Parameters</h4>
                                <div id="common-params-container">
                                    <div class="param-row">
                                        <input type="text" class="param-key" placeholder="Key" value="records">
                                        <input type="text" class="param-value" placeholder="Value" value="10">
                                        <button class="remove-param">-</button>
                                    </div>
                                    <div class="param-row">
                                        <input type="text" class="param-key" placeholder="Key" value="skip">
                                        <input type="text" class="param-value" placeholder="Value" value="0">
                                        <button class="remove-param">-</button>
                                    </div>
                                </div>
                                <button class="add-param-btn" id="add-common-param">Add Parameter</button>
                            </div>

                            <div class="api-params" id="action-params" style="display: none;">
                                <h4>Action Parameters</h4>
                                <div id="action-params-container">
                                    <div class="param-row">
                                        <input type="text" class="param-key" placeholder="Key" value="editid1">
                                        <input type="text" class="param-value" placeholder="Value">
                                        <button class="remove-param">-</button>
                                    </div>
                                </div>
                                <button class="add-param-btn" id="add-action-param">Add Parameter</button>
                            </div>

                            <div class="api-actions">
                                <button class="send-btn" id="send-request">
                                    <i class="fas fa-paper-plane"></i> Send Request
                                </button>
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

                <!-- Examples Section -->
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
                        </div>

                        <div class="example-content active" id="javascript-example">
                            <h3>JavaScript (Fetch API)</h3>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>List Candidates</span>
                                    <button class="copy-btn" data-clipboard-target="#js-example">Copy</button>
                                </div>
                                <div class="code-content" id="js-example">
                                    // List candidates with pagination
                                    const apiKey = 'YOUR_API_KEY';
                                    const url = '<?php echo $base_url; ?>?table=candidates&action=list&records=10&skip=0';

                                    fetch(url, {
                                    headers: {
                                    'X-Auth-Token': apiKey
                                    }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                    if (data.success) {
                                    console.log('Candidates:', data.data);
                                    } else {
                                    console.error('Error:', data.error);
                                    }
                                    })
                                    .catch(error => console.error('Request failed:', error));
                                </div>
                            </div>
                        </div>

                        <div class="example-content" id="php-example">
                            <h3>PHP (cURL)</h3>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>Create a Candidate</span>
                                    <button class="copy-btn" data-clipboard-target="#php-example">Copy</button>
                                </div>
                                <div class="code-content" id="php-example">
                                    <?php
                                    // Create a new candidate
                                    $apiKey = 'YOUR_API_KEY';
                                    $url = '<?php echo $base_url; ?>?table=candidates&action=insert';

                                    $data = [
                                        'Full_Name' => 'John Doe',
                                        'Email_Address' => 'john.doe@example.com',
                                        'Phone_Number' => '+1234567890',
                                        'Region' => 'Addis Ababa'
                                    ];

                                    $ch = curl_init($url);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($ch, CURLOPT_POST, true);
                                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                                    curl_setopt($ch, CURLOPT_HTTPHEADER, [
                                        'X-Auth-Token: ' . $apiKey
                                    ]);

                                    $response = curl_exec($ch);
                                    curl_close($ch);

                                    $result = json_decode($response, true);

                                    if ($result && $result['success']) {
                                        echo "Candidate created with ID: " . $result['data']['CandidateID'];
                                    } else {
                                        echo "Error: " . ($result['error'] ?? 'Unknown error');
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="example-content" id="python-example">
                            <h3>Python (Requests)</h3>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>Update a Candidate</span>
                                    <button class="copy-btn" data-clipboard-target="#python-example">Copy</button>
                                </div>
                                <div class="code-content" id="python-example">
                                    import requests

                                    api_key = "YOUR_API_KEY"
                                    url = "<?php echo $base_url; ?>"
                                    params = {
                                    "table": "candidates",
                                    "action": "update",
                                    "editid1": "123"
                                    }
                                    data = {
                                    "Email_Address": "new.email@example.com",
                                    "Phone_Number": "+0987654321"
                                    }
                                    headers = {
                                    "X-Auth-Token": api_key
                                    }

                                    response = requests.post(url, params=params, data=data, headers=headers)
                                    result = response.json()

                                    if result["success"]:
                                    print("Candidate updated successfully")
                                    else:
                                    print(f"Error: {result.get('error', 'Unknown error')}")
                                </div>
                            </div>
                        </div>

                        <div class="example-content" id="nodejs-example">
                            <h3>Node.js (Axios)</h3>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>Delete a Candidate</span>
                                    <button class="copy-btn" data-clipboard-target="#nodejs-example">Copy</button>
                                </div>
                                <div class="code-content" id="nodejs-example">
                                    const axios = require('axios');

                                    const apiKey = 'YOUR_API_KEY';
                                    const url = '<?php echo $base_url; ?>';
                                    const params = {
                                    table: 'candidates',
                                    action: 'delete',
                                    editid1: '123'
                                    };

                                    axios.post(url, null, {
                                    params: params,
                                    headers: {
                                    'X-Auth-Token': apiKey
                                    }
                                    })
                                    .then(response => {
                                    if (response.data.success) {
                                    console.log('Candidate deleted successfully');
                                    } else {
                                    console.error('Error:', response.data.error);
                                    }
                                    })
                                    .catch(error => console.error('Request failed:', error));
                                </div>
                            </div>
                        </div>

                        <div class="example-content" id="csharp-example">
                            <h3>C# (HttpClient)</h3>
                            <div class="code-block">
                                <div class="code-header">
                                    <span>View a Candidate</span>
                                    <button class="copy-btn" data-clipboard-target="#csharp-example">Copy</button>
                                </div>
                                <div class="code-content" id="csharp-example">
                                    using System;
                                    using System.Net.Http;
                                    using System.Threading.Tasks;

                                    class Program
                                    {
                                    static async Task Main()
                                    {
                                    var apiKey = "YOUR_API_KEY";
                                    var baseUrl = "<?php echo $base_url; ?>";
                                    var url = $"{baseUrl}?table=candidates&action=view&editid1=123";

                                    using (var client = new HttpClient())
                                    {
                                    client.DefaultRequestHeaders.Add("X-Auth-Token", apiKey);

                                    try
                                    {
                                    var response = await client.GetAsync(url);
                                    var content = await response.Content.ReadAsStringAsync();

                                    if (response.IsSuccessStatusCode)
                                    {
                                    // Parse JSON response here
                                    Console.WriteLine($"Response: {content}");
                                    }
                                    else
                                    {
                                    Console.WriteLine($"Error: {response.StatusCode}");
                                    }
                                    }
                                    catch (Exception ex)
                                    {
                                    Console.WriteLine($"Request failed: {ex.Message}");
                                    }
                                    }
                                    }
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Tables Section -->
                <section class="section" id="tables">
                    <div class="section-header">
                        <h2><i class="fas fa-table mr-2"></i> Available Tables</h2>
                    </div>
                    <div class="section-body">
                        <p>The following tables are available through the API. Each table supports the standard CRUD operations.</p>

                        <div class="service-card">
                            <h4>candidates</h4>
                            <p>Stores information about job candidates</p>
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
                                            <td class="field-name">CandidateID</td>
                                            <td class="field-type">int</td>
                                            <td>Unique identifier for the candidate</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Full_Name</td>
                                            <td class="field-type">varchar(255)</td>
                                            <td>Candidate's full name</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Email_Address</td>
                                            <td class="field-type">varchar(255)</td>
                                            <td>Candidate's email address</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Phone_Number</td>
                                            <td class="field-type">varchar(20)</td>
                                            <td>Candidate's phone number</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Region</td>
                                            <td class="field-type">varchar(100)</td>
                                            <td>Candidate's region</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Employment_Status</td>
                                            <td class="field-type">varchar(50)</td>
                                            <td>Current employment status</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>employers</h4>
                            <p>Stores information about employers</p>
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
                                            <td class="field-name">EmployerID</td>
                                            <td class="field-type">int</td>
                                            <td>Unique identifier for the employer</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Company_Name</td>
                                            <td class="field-type">varchar(255)</td>
                                            <td>Employer's company name</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Contact_Person</td>
                                            <td class="field-type">varchar(255)</td>
                                            <td>Primary contact person</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Industry</td>
                                            <td class="field-type">varchar(100)</td>
                                            <td>Industry sector</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="service-card">
                            <h4>jobs</h4>
                            <p>Stores information about job postings</p>
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
                                            <td class="field-name">JobID</td>
                                            <td class="field-type">int</td>
                                            <td>Unique identifier for the job</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Title</td>
                                            <td class="field-type">varchar(255)</td>
                                            <td>Job title</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Description</td>
                                            <td class="field-type">text</td>
                                            <td>Job description</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">EmployerID</td>
                                            <td class="field-type">int</td>
                                            <td>ID of the employer posting the job</td>
                                        </tr>
                                        <tr>
                                            <td class="field-name">Status</td>
                                            <td class="field-type">varchar(20)</td>
                                            <td>Job status (Open, Closed, etc.)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p class="mt-3"><strong>Note:</strong> This is a subset of available tables. Additional tables can be accessed using the same API pattern.</p>
                    </div>
                </section>

                <!-- Lifebox Forms Section -->
                <!--
                <section class="section" id="lifeboxforms">
                    <div class="service-card">
                        <div class="section-header">
                            <h2 class="section-title"><i class="fas fa-list mr-2"></i> Lifebox Forms & Webhooks</h2>
                        </div>
                        <p class="intro-text">
                            This section provides documentation for the Lifebox Forms WebHooks Add-On, which allows you to send data from your forms to external URLs for integration with other systems. You can use this add-on to push form submissions to third-party services or custom scripts for further processing.
                        </p>

                        <p>
                            <strong>Lifebox Forms</strong> is built with Custom <strong>EasyForms</strong> application & script that will be used for Creating as many users, forms, fields, conditional rules, reports, as you want. Receive unlimited submissions, unlimited files and send unlimited email notifications
                        </p>

                        <div class="guide-content">
                            <h2 id="webhooks-add-on" class="guide-header">WebHooks Add-On</h2>
                            <div class="table-of-contents">
                                <ol>
                                    <li><a href="#webhooksintroduction">Introduction</a></li>
                                    <li><a href="#install-webhooks-add-on">Install WebHooks Add-On</a></li>
                                    <li><a href="#create-a-webhook">Create a WebHook</a></li>
                                    <li><a href="#disable-enable-a-webhook">Disable / Enable a WebHook</a></li>
                                    <li><a href="#delete-a-webhook">Delete a WebHook</a></li>
                                    <li><a href="#send-data-as-json">Send Data as JSON</a></li>
                                    <li><a href="#using-webhooks">Using WebHooks</a></li>
                                    <li><a href="#saving-form-submissions-in-an-external-database">Saving Form Submissions in an External Database</a></li>
                                </ol>
                            </div>

                            <h3 id="webhooksintroduction" class="sub-header">Introduction</h3>
                            <p>The WebHooks Add-On allows you to send data from your forms to any custom page or script. This page can perform integration tasks such as transforming, parsing, manipulating, and sending your submission data wherever you need.</p>
                            <p>WebHooks is useful when developing applications that need to be updated immediately after a form submission, allowing you to pass all submitted form data at once.</p>
                            <blockquote class="note">
                                <p><strong>Note:</strong> Lifebox Forms support multiple WebHooks per form.</p>
                            </blockquote>

                            <h3 id="install-webhooks-add-on" class="sub-header">Webhooks is already preinstalled </h3>
                            <p>WebHooks add-on is already installed but to install, you can follow the instructions in the <a href="#">Add-On Manager documentation</a>.</p>

                            <h3 id="create-a-webhook" class="sub-header">Create a WebHook</h3>
                            <p>Follow these steps to create a WebHook:</p>
                            <ol>
                                <li>Go to the Add-Ons Manager and click on WebHooks.</li>
                                <li>Click on the "Create a Webhook" button.</li>
                                <li>Fill out the form with the following details:
                                    <ul>
                                        <li><strong>Form</strong>: Select the form that will send notifications.</li>
                                        <li><strong>Handshake Key</strong>: Optional authentication key to prevent spam.</li>
                                        <li><strong>URL</strong>: The URL where your script is located.</li>
                                        <li><strong>Status</strong>: <ul>
                                                <li><strong>On</strong>: Send notifications</li>
                                                <li><strong>Off</strong>: Do not send notifications</li>
                                            </ul>
                                        </li>
                                        <li><strong>JSON</strong>: <ul>
                                                <li><strong>On</strong>: Send data as JSON</li>
                                                <li><strong>Off</strong>: Send data as URL-encoded string</li>
                                            </ul>
                                        </li>
                                        <li><strong>Alias</strong>: <ul>
                                                <li><strong>On</strong>: Send data with field alias as key</li>
                                                <li><strong>Off</strong>: Send data with field ID as key</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Click "Create" to finish.</li>
                            </ol>

                            <blockquote class="note">
                                <p><strong>Note:</strong> You can select multiple forms to create the same WebHook for each form.</p>
                            </blockquote>

                            <h3 id="disable-enable-a-webhook" class="sub-header">Disable / Enable a WebHook</h3>
                            <p>To temporarily disable a WebHook, follow these steps:</p>
                            <ol>
                                <li>Go to the Add-Ons Manager and click on WebHooks.</li>
                                <li>Click the "Actions" button of the WebHook to disable.</li>
                                <li>Click "Update".</li>
                                <li>Change the Status from On to Off (or vice versa).</li>
                                <li>Click "Update" again.</li>
                            </ol>

                            <h3 id="delete-a-webhook" class="sub-header">Delete a WebHook</h3>
                            <p>To delete a WebHook:</p>
                            <ol>
                                <li>Select the checkbox of the WebHook you want to delete.</li>
                                <li>Click "Bulk Actions".</li>
                                <li>Click "Delete".</li>
                                <li>Confirm your decision in the popup.</li>
                            </ol>

                            <h3 id="send-data-as-json" class="sub-header">Send Data as JSON</h3>
                            <p>Follow these steps to send the post data as a JSON string:</p>
                            <ol>
                                <li>Go to the Add-Ons Manager and click on WebHooks.</li>
                                <li>Click the "Actions" button of the WebHook to disable.</li>
                                <li>Click "Update".</li>
                                <li>Change the "JSON" field from "On" to "Off" (or vice versa).</li>
                                <li>Click "Update".</li>
                            </ol>

                            <h3 id="using-webhooks" class="sub-header">Using WebHooks</h3>
                            <p>Now that you know how to set up WebHooks, let's walk through an example using <a href="https://beeceptor.com/">Beeceptor</a> to capture your notifications.</p>

                            <h4>First Steps</h4>
                            <ol>
                                <li>Go to <a href="https://beeceptor.com/">https://beeceptor.com/</a></li>
                                <li>Enter an Endpoint Name and click "Create Endpoint".</li>
                                <li>Copy the Endpoint URL.</li>
                            </ol>
                            <p>Now you have a URL that will receive notifications sent by Lifebox Forms.</p>

                            <h4>Next Steps</h4>
                            <ol>
                                <li>Go to Lifebox Forms and open the Add-Ons Manager.</li>
                                <li>Click on WebHooks and create a new WebHook.</li>
                                <li>Fill out the form:
                                    <ul>
                                        <li>Form: Select "Mailing List".</li>
                                        <li>URL: Paste the Endpoint URL.</li>
                                        <li>Handshake Key: "my_handshake_key".</li>
                                        <li>Status: On.</li>
                                    </ul>
                                </li>
                                <li>Click "Create".</li>
                            </ol>

                            <h4>Final Steps: Test Your Notifications</h4>
                            <ol>
                                <li>Go to Form Manager and select the "Mailing List" form.</li>
                                <li>Click the "Publish and Share" button.</li>
                                <li>Click "Share Form Link".</li>
                                <li>Uncheck the box "Without" and press "Go!".</li>
                                <li>Fill out the form and submit.</li>
                            </ol>

                            <h3 id="saving-form-submissions-in-an-external-database" class="sub-header">Saving Form Submissions in an External Database</h3>
                            <p>To store form submissions in an external database, follow the steps below.</p>
                            <p><strong>Note:</strong> You can use the Lifebox Forms demo for testing.</p>

                            <h4>In Your Own Website</h4>
                            <ol>
                                <li>Create a database: "test".</li>
                                <li>Create a table: "subscribers" with fields: id, name, email, and ip_address.</li>
                                <li>Configure the database settings in <code>@app/custom/saveToDB.php</code>.</li>
                                <li>Upload the PHP file to your server.</li>
                            </ol>

                            <h4>In Lifebox Forms Demo Page</h4>
                            <ol>
                                <li>Go to <a href="https://mne.lifebox.org/backend/forms/">Lifebox Forms demo</a>.</li>
                                <li>Login with Username: demo and Password: demo.</li>
                                <li>Change the WebHook URL to: <a href="https://mne.lifebox.org/backend/forms/saveToDB.php">https://mne.lifebox.org/backend/forms/saveToDB.php</a>.</li>
                                <li>Click "Update".</li>
                            </ol>
                            <p>Now, each time the form is submitted, the data will be stored in your database.</p>
                        </div>
                    </div>
                </section>

                                -->

                <!-- Styling -->
                <style>
                    .lifebox-forms-section {
                        background-color: #f8f9fa;
                        padding: 30px;
                    }

                    .section-title {
                        font-size: 32px;
                        margin-bottom: 10px;
                        color: #343a40;
                    }

                    .intro-text {
                        font-size: 18px;
                        margin-bottom: 30px;
                        color: #495057;
                    }

                    .guide-content {
                        margin-top: 20px;
                    }

                    .guide-header {
                        font-size: 28px;
                        color: #003377;
                    }

                    .sub-header {
                        font-size: 24px;
                        margin-top: 20px;
                        color: #003377;
                    }

                    .table-of-contents {
                        margin-bottom: 20px;
                    }

                    .table-of-contents ol {
                        list-style-type: none;
                        padding-left: 0;
                    }

                    .table-of-contents li {
                        margin-bottom: 5px;
                    }

                    .table-of-contents a {
                        color: #003377;
                        text-decoration: none;
                    }

                    .table-of-contents a:hover {
                        text-decoration: underline;
                    }

                    .note {
                        background-color: #e9ecef;
                        border-left: 4px solid #007733;
                        padding: 15px;
                        margin: 20px 0;
                    }

                    ol {
                        padding-left: 20px;
                    }

                    ol li {
                        margin-bottom: 10px;
                    }

                    blockquote {
                        background-color: #f1f1f1;
                        border-left: 5px solid #00F7FF;
                        padding: 10px 20px;
                        font-style: italic;
                        margin: 20px 0;
                    }
                </style>

                <!-- Lifebox Forms Section -->


                <!-- Troubleshooting Section -->
                <section class="section" id="troubleshooting">
                    <div class="section-header">
                        <h2><i class="fas fa-wrench mr-2"></i> Troubleshooting</h2>
                    </div>
                    <div class="section-body">
                        <p>If you encounter issues while using the API, consult this section for solutions to common problems.</p>

                        <h3>Common Issues and Solutions</h3>
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
                                        <td>401 Unauthorized</td>
                                        <td>Missing or invalid API key</td>
                                        <td>Verify your API key is correct and included in the request</td>
                                    </tr>
                                    <tr>
                                        <td>400 Bad Request</td>
                                        <td>Invalid parameters or missing required fields</td>
                                        <td>Check the API documentation for required parameters and valid formats</td>
                                    </tr>
                                    <tr>
                                        <td>403 Forbidden</td>
                                        <td>Insufficient permissions for the requested action</td>
                                        <td>Ensure your user account has the necessary permissions</td>
                                    </tr>
                                    <tr>
                                        <td>404 Not Found</td>
                                        <td>Invalid table name or resource not found</td>
                                        <td>Verify the table name and that the resource exists</td>
                                    </tr>
                                    <tr>
                                        <td>500 Internal Server Error</td>
                                        <td>Server-side issue</td>
                                        <td>Check server logs for more details</td>
                                    </tr>
                                    <tr>
                                        <td>Empty response</td>
                                        <td>No data matching the request</td>
                                        <td>Verify your filters and parameters</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4">Debugging Tips</h3>
                        <ul>
                            <li>Use the API Playground to test requests before implementing in code</li>
                            <li>Check the response for detailed error messages</li>
                            <li>Verify your API key is active and has the necessary permissions</li>
                            <li>Test with different actions and tables to isolate the issue</li>
                            <li>Ensure you're using the correct HTTP method for each action</li>
                            <li>Validate your request parameters for type and format requirements</li>
                        </ul>

                        <h3 class="mt-4">Getting Support</h3>
                        <p>If you're unable to resolve an issue, contact support with the following information:</p>
                        <ul>
                            <li>The full URL of the request that failed</li>
                            <li>The exact error message received</li>
                            <li>The API key used (obfuscate if sharing publicly)</li>
                            <li>Any relevant code snippets</li>
                            <li>The time the error occurred</li>
                        </ul>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script>
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

        // Example tab switching
        document.querySelectorAll('.example-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs and content
                document.querySelectorAll('.example-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.example-content').forEach(c => c.classList.remove('active'));

                // Add active class to clicked tab
                this.classList.add('active');

                // Show corresponding content
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

        // Function to update URL display
        function updateUrlDisplay() {
            const baseUrl = baseUrlInput.value;
            const table = tableSelect.value;
            const action = actionSelect.value;
            const apiKey = apiKeyInput.value;

            let params = `?table=${table}&action=${action}`;

            // Add common parameters
            document.querySelectorAll('#common-params-container .param-row').forEach(row => {
                const key = row.querySelector('.param-key').value;
                const value = row.querySelector('.param-value').value;
                if (key && value) {
                    params += `&${key}=${encodeURIComponent(value)}`;
                }
            });

            // Add action parameters
            document.querySelectorAll('#action-params-container .param-row').forEach(row => {
                const key = row.querySelector('.param-key').value;
                const value = row.querySelector('.param-value').value;
                if (key && value) {
                    params += `&${key}=${encodeURIComponent(value)}`;
                }
            });

            // Add API key if provided
            if (apiKey) {
                params += `&apikey=${apiKey}`;
            }

            urlBase.textContent = baseUrl;
            urlParams.textContent = params;
        }

        // Function to add parameter row
        function addParamRow(container) {
            const row = document.createElement('div');
            row.className = 'param-row';
            row.innerHTML = `
                <input type="text" class="param-key" placeholder="Key">
                <input type="text" class="param-value" placeholder="Value">
                <button class="remove-param">-</button>
            `;
            container.appendChild(row);

            // Add event listener to remove button
            row.querySelector('.remove-param').addEventListener('click', function() {
                row.remove();
                updateUrlDisplay();
            });

            // Add input listeners
            row.querySelectorAll('input').forEach(input => {
                input.addEventListener('input', updateUrlDisplay);
            });
        }

        // Initialize common parameters
        document.getElementById('add-common-param').addEventListener('click', function() {
            addParamRow(commonParamsContainer);
        });

        // Initialize action parameters
        document.getElementById('add-action-param').addEventListener('click', function() {
            addParamRow(actionParamsContainer);
        });

        // Handle action changes
        actionSelect.addEventListener('change', function() {
            const action = this.value;

            // Show/hide action parameters section
            if (action === 'view' || action === 'update' || action === 'delete') {
                actionParamsSection.style.display = 'block';
            } else {
                actionParamsSection.style.display = 'none';
            }

            updateUrlDisplay();
        });

        // Add input listeners for dynamic URL update
        baseUrlInput.addEventListener('input', updateUrlDisplay);
        tableSelect.addEventListener('change', updateUrlDisplay);
        actionSelect.addEventListener('change', updateUrlDisplay);
        apiKeyInput.addEventListener('input', updateUrlDisplay);

        // Add input listeners to existing parameter rows
        document.querySelectorAll('.param-key, .param-value').forEach(input => {
            input.addEventListener('input', updateUrlDisplay);
        });

        // Add remove event listeners to existing remove buttons
        document.querySelectorAll('.remove-param').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.param-row').remove();
                updateUrlDisplay();
            });
        });

        // Send API request
        sendRequestBtn.addEventListener('click', function() {
            const url = urlBase.textContent + urlParams.textContent;
            const apiKey = apiKeyInput.value;
            const action = actionSelect.value;

            // Show loading indicator
            apiResponse.textContent = "Sending request...";
            sendRequestBtn.disabled = true;

            // Determine request method
            const method = (action === 'list' || action === 'view') ? 'GET' : 'POST';

            // Prepare headers
            const headers = new Headers();
            headers.append('X-Auth-Token', apiKey);

            // Prepare request
            const requestOptions = {
                method: method,
                headers: headers
            };

            // For POST requests, we need to handle form data
            if (method === 'POST') {
                const formData = new FormData();

                // Add common parameters
                document.querySelectorAll('#common-params-container .param-row').forEach(row => {
                    const key = row.querySelector('.param-key').value;
                    const value = row.querySelector('.param-value').value;
                    if (key && value) {
                        formData.append(key, value);
                    }
                });

                // Add action parameters
                document.querySelectorAll('#action-params-container .param-row').forEach(row => {
                    const key = row.querySelector('.param-key').value;
                    const value = row.querySelector('.param-value').value;
                    if (key && value) {
                        formData.append(key, value);
                    }
                });

                requestOptions.body = new URLSearchParams(formData);
            }

            // Send request
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
                    if (typeof result.data === 'string') {
                        apiResponse.textContent = result.data;
                    } else {
                        apiResponse.textContent = JSON.stringify(result.data, null, 2);
                    }
                    sendRequestBtn.disabled = false;
                })
                .catch(error => {
                    apiResponse.textContent = `Request failed: ${error.message}`;
                    sendRequestBtn.disabled = false;
                });
        });

        // Initialize URL display
        updateUrlDisplay();

        // Search functionality
        function setupSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');

            // Search index
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
                    name: 'Lifebox Forms & Webhooks',
                    id: 'lifeboxforms',
                    context: 'Lifebox forms and webooks usage parameters'
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
                    name: 'Troubleshooting',
                    id: 'troubleshooting',
                    context: 'Common issues and solutions'
                },
                {
                    type: 'Table',
                    name: 'candidates',
                    id: 'tables',
                    context: 'Candidate information table'
                },
                {
                    type: 'Table',
                    name: 'employers',
                    id: 'tables',
                    context: 'Employer information table'
                },
                {
                    type: 'Table',
                    name: 'jobs',
                    id: 'tables',
                    context: 'Job postings table'
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
                },
                {
                    type: 'Parameter',
                    name: 'records',
                    id: 'api-reference',
                    context: 'Number of records to return'
                },
                {
                    type: 'Parameter',
                    name: 'skip',
                    id: 'api-reference',
                    context: 'Records to skip for pagination'
                },
                {
                    type: 'Parameter',
                    name: 'editid1',
                    id: 'api-reference',
                    context: 'ID of the record to view/update/delete'
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

        // Initialize search
        setupSearch();

        // Highlight current section in sidebar
        window.addEventListener('scroll', function() {
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
        });
    </script>
</body>

</html>