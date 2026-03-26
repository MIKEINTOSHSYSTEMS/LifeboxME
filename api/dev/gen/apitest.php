<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set CORS headers to allow requests from anywhere for testing
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox API Tester</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }

        .api-endpoint {
            font-family: 'Courier New', monospace;
            background: #f8f9fa;
            border-radius: 5px;
            padding: 10px;
            border-left: 4px solid var(--secondary-color);
        }

        .response-area {
            min-height: 300px;
            max-height: 500px;
            overflow-y: auto;
            font-family: 'Courier New', monospace;
            font-size: 0.9em;
        }

        .success-badge {
            background-color: var(--success-color);
        }

        .error-badge {
            background-color: var(--danger-color);
        }

        .warning-badge {
            background-color: var(--warning-color);
        }

        .test-case {
            cursor: pointer;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .test-case:hover {
            background-color: #f8f9fa;
            border-left-color: var(--secondary-color);
        }

        .parameter-badge {
            font-size: 0.75em;
        }

        .loading-spinner {
            display: none;
        }

        .tab-pane {
            padding: 20px 0;
        }

        .stats-card {
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .stats-number {
            font-size: 2em;
            font-weight: bold;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-api me-2"></i>Lifebox API Tester
            </a>
            <div class="navbar-nav ms-auto">
                <span class="navbar-text text-light">
                    Testing Environment v1.0
                </span>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="glass-card p-4 mb-4">
                    <h2 class="mb-4"><i class="fas fa-vial me-2"></i>API Testing Dashboard</h2>

                    <!-- Quick Stats -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="stats-card bg-primary text-white">
                                <i class="fas fa-plug fa-2x"></i>
                                <div class="stats-number" id="totalRequests">0</div>
                                <div>Total Requests</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card bg-success text-white">
                                <i class="fas fa-check-circle fa-2x"></i>
                                <div class="stats-number" id="successRequests">0</div>
                                <div>Successful</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card bg-danger text-white">
                                <i class="fas fa-times-circle fa-2x"></i>
                                <div class="stats-number" id="failedRequests">0</div>
                                <div>Failed</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card bg-warning text-white">
                                <i class="fas fa-clock fa-2x"></i>
                                <div class="stats-number" id="avgResponseTime">0ms</div>
                                <div>Avg Response Time</div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="test-tab" data-bs-toggle="tab" data-bs-target="#test" type="button" role="tab">
                                <i class="fas fa-play-circle me-1"></i>Test API
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="quick-tab" data-bs-toggle="tab" data-bs-target="#quick" type="button" role="tab">
                                <i class="fas fa-bolt me-1"></i>Quick Tests
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab">
                                <i class="fas fa-history me-1"></i>Test History
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content mt-4" id="myTabContent">
                        <!-- Test API Tab -->
                        <div class="tab-pane fade show active" id="test" role="tabpanel">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">API Endpoint URL</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-link"></i></span>
                                            <input type="text" class="form-control" id="apiUrl"
                                                value="https://mne.lifebox.org/app/api/v1.php/lbpmi_data_values">
                                        </div>
                                        <div class="form-text">Full URL to your API endpoint</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">HTTP Method</label>
                                            <select class="form-select" id="httpMethod">
                                                <option value="GET" selected>GET</option>
                                                <option value="POST">POST</option>
                                                <option value="PUT">PUT</option>
                                                <option value="DELETE">DELETE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="form-label fw-bold">API Key</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                <input type="text" class="form-control" id="apiKey"
                                                    value="$2y$10$CPrlfPZs4wI0QHECfzUUq.0eyCgbkRwOpNOpSpnyVDnmOVOav2qTm">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Query Parameters</label>
                                        <div id="queryParams">
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" placeholder="Parameter" value="table">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Value" value="lbpmi_data_values">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" placeholder="Parameter" value="action">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Value" value="list">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" placeholder="Parameter" value="records">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Value" value="5">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" placeholder="Parameter" value="skip">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Value" value="0">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-sm mt-2" onclick="addParam()">
                                            <i class="fas fa-plus me-1"></i>Add Parameter
                                        </button>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Request Headers</label>
                                        <div id="requestHeaders">
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" placeholder="Header" value="Content-Type">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Value" value="application/json">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeHeader(this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-sm mt-2" onclick="addHeader()">
                                            <i class="fas fa-plus me-1"></i>Add Header
                                        </button>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Request Body (for POST/PUT)</label>
                                        <textarea class="form-control" id="requestBody" rows="6" placeholder='{"key": "value"}'></textarea>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-secondary me-md-2" onclick="resetForm()">
                                            <i class="fas fa-redo me-1"></i>Reset
                                        </button>
                                        <button type="button" class="btn btn-success" onclick="executeTest()" id="executeBtn">
                                            <i class="fas fa-play me-1"></i>Execute Test
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-primary text-white">
                                            <i class="fas fa-info-circle me-1"></i>Request Information
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <strong>Generated URL:</strong>
                                                <div class="api-endpoint mt-1 small" id="generatedUrl">
                                                    https://mne.lifebox.org/app/api/v1.php/lbpmi_data_values?table=lbpmi_data_values&action=list&records=5&skip=0&apikey=***
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Parameters Count:</strong>
                                                <span class="badge bg-primary" id="paramCount">4</span>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Headers Count:</strong>
                                                <span class="badge bg-primary" id="headerCount">1</span>
                                            </div>
                                            <div>
                                                <strong>Status:</strong>
                                                <span class="badge bg-secondary" id="requestStatus">Ready</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mt-3">
                                        <div class="card-header bg-info text-white">
                                            <i class="fas fa-lightbulb me-1"></i>Tips
                                        </div>
                                        <div class="card-body small">
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fas fa-check text-success me-1"></i>Ensure API key is valid</li>
                                                <li><i class="fas fa-check text-success me-1"></i>Check parameter names match API spec</li>
                                                <li><i class="fas fa-check text-success me-1"></i>Verify endpoint URL is correct</li>
                                                <li><i class="fas fa-check text-success me-1"></i>Monitor response time for performance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Tests Tab -->
                        <div class="tab-pane fade" id="quick" role="tabpanel">
                            <h5 class="mb-3">Pre-configured Test Cases</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card test-case mb-3" onclick="loadQuickTest('list_indicator_data')">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <i class="fas fa-list me-2 text-primary"></i>List Indicator Data
                                            </h6>
                                            <p class="card-text small">Fetch list of lbpmi_data_values records with pagination</p>
                                            <div class="small">
                                                <span class="badge parameter-badge bg-primary">table=lbpmi_data_values</span>
                                                <span class="badge parameter-badge bg-primary">action=list</span>
                                                <span class="badge parameter-badge bg-primary">records=5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card test-case mb-3" onclick="loadQuickTest('view_single_record')">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <i class="fas fa-eye me-2 text-success"></i>View Single Record
                                            </h6>
                                            <p class="card-text small">View details of a specific record by ID</p>
                                            <div class="small">
                                                <span class="badge parameter-badge bg-success">action=view</span>
                                                <span class="badge parameter-badge bg-success">editid1=8</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card test-case mb-3" onclick="loadQuickTest('test_cors')">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <i class="fas fa-network-wired me-2 text-warning"></i>Test CORS
                                            </h6>
                                            <p class="card-text small">Test Cross-Origin Resource Sharing configuration</p>
                                            <div class="small">
                                                <span class="badge parameter-badge bg-warning">CORS Headers</span>
                                                <span class="badge parameter-badge bg-warning">OPTIONS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card test-case mb-3" onclick="loadQuickTest('error_test')">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <i class="fas fa-bug me-2 text-danger"></i>Error Handling Test
                                            </h6>
                                            <p class="card-text small">Test API error responses and handling</p>
                                            <div class="small">
                                                <span class="badge parameter-badge bg-danger">Invalid Table</span>
                                                <span class="badge parameter-badge bg-danger">Missing Params</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Results Tab -->
                        <div class="tab-pane fade" id="results" role="tabpanel">
                            <h5 class="mb-3">Test Execution History</h5>
                            <div id="testHistory" class="mb-4">
                                <div class="text-center text-muted py-4">
                                    <i class="fas fa-history fa-3x mb-3"></i>
                                    <p>No test history yet. Execute some tests to see results here.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results Section -->
                <div class="glass-card p-4">
                    <h4 class="mb-3"><i class="fas fa-chart-line me-2"></i>Test Results</h4>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="loading-spinner spinner-border text-primary me-3" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div>
                                    <strong>Status:</strong>
                                    <span class="badge" id="resultStatus">Not executed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <strong>Response Time:</strong>
                            <span id="responseTime">-</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    <i class="fas fa-code me-1"></i>Response Body
                                </div>
                                <div class="card-body">
                                    <pre class="response-area" id="responseBody">{
  "status": "No test executed yet"
}</pre>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-info text-white">
                                    <i class="fas fa-list-alt me-1"></i>Response Details
                                </div>
                                <div class="card-body">
                                    <div class="mb-2">
                                        <strong>HTTP Status:</strong>
                                        <span class="badge bg-secondary" id="httpStatus">-</span>
                                    </div>
                                    <div class="mb-2">
                                        <strong>Content Type:</strong>
                                        <span id="contentType">-</span>
                                    </div>
                                    <div class="mb-2">
                                        <strong>Response Size:</strong>
                                        <span id="responseSize">-</span>
                                    </div>
                                    <div class="mb-2">
                                        <strong>Request URL:</strong>
                                        <div class="small text-muted" id="fullRequestUrl">-</div>
                                    </div>
                                    <div class="mt-3">
                                        <strong>Response Headers:</strong>
                                        <pre class="small mt-2 p-2 bg-light rounded" id="responseHeaders">-</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let testHistory = [];
        let stats = {
            total: 0,
            success: 0,
            failed: 0,
            totalResponseTime: 0
        };

        function updateStats() {
            document.getElementById('totalRequests').textContent = stats.total;
            document.getElementById('successRequests').textContent = stats.success;
            document.getElementById('failedRequests').textContent = stats.failed;
            document.getElementById('avgResponseTime').textContent = stats.total > 0 ?
                Math.round(stats.totalResponseTime / stats.total) + 'ms' : '0ms';
        }

        function updateGeneratedUrl() {
            const baseUrl = document.getElementById('apiUrl').value;
            const params = getQueryParams();
            const apiKey = document.getElementById('apiKey').value;

            let url = baseUrl;
            if (Object.keys(params).length > 0) {
                url += '?' + new URLSearchParams(params).toString();
            }
            if (apiKey) {
                url += (url.includes('?') ? '&' : '?') + 'apikey=' + encodeURIComponent(apiKey);
            }

            document.getElementById('generatedUrl').textContent = url;
            document.getElementById('paramCount').textContent = Object.keys(params).length;
        }

        function getQueryParams() {
            const params = {};
            const paramRows = document.getElementById('queryParams').children;

            for (let row of paramRows) {
                const inputs = row.getElementsByTagName('input');
                const key = inputs[0].value.trim();
                const value = inputs[1].value.trim();

                if (key && value) {
                    params[key] = value;
                }
            }

            return params;
        }

        function getHeaders() {
            const headers = {};
            const headerRows = document.getElementById('requestHeaders').children;

            for (let row of headerRows) {
                const inputs = row.getElementsByTagName('input');
                const key = inputs[0].value.trim();
                const value = inputs[1].value.trim();

                if (key && value) {
                    headers[key] = value;
                }
            }

            return headers;
        }

        function addParam() {
            const paramsDiv = document.getElementById('queryParams');
            const newRow = document.createElement('div');
            newRow.className = 'row mb-2';
            newRow.innerHTML = `
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Parameter" oninput="updateGeneratedUrl()">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Value" oninput="updateGeneratedUrl()">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            paramsDiv.appendChild(newRow);
            updateGeneratedUrl();
        }

        function removeParam(button) {
            button.closest('.row').remove();
            updateGeneratedUrl();
        }

        function addHeader() {
            const headersDiv = document.getElementById('requestHeaders');
            const newRow = document.createElement('div');
            newRow.className = 'row mb-2';
            newRow.innerHTML = `
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Header">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Value">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeHeader(this)">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            headersDiv.appendChild(newRow);
            document.getElementById('headerCount').textContent = headersDiv.children.length;
        }

        function removeHeader(button) {
            button.closest('.row').remove();
            document.getElementById('headerCount').textContent = document.getElementById('requestHeaders').children.length;
        }

        function resetForm() {
            document.getElementById('apiUrl').value = 'https://mne.lifebox.org/app/api/v1.php/lbpmi_data_values';
            document.getElementById('httpMethod').value = 'GET';
            document.getElementById('apiKey').value = '$2y$10$CPrlfPZs4wI0QHECfzUUq.0eyCgbkRwOpNOpSpnyVDnmOVOav2qTm';
            document.getElementById('requestBody').value = '';

            // Reset parameters to default
            const paramsDiv = document.getElementById('queryParams');
            paramsDiv.innerHTML = `
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Parameter" value="table" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Value" value="lbpmi_data_values" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Parameter" value="action" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Value" value="list" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Parameter" value="records" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Value" value="5" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Parameter" value="skip" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Value" value="0" oninput="updateGeneratedUrl()">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeParam(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            `;

            // Reset headers
            const headersDiv = document.getElementById('requestHeaders');
            headersDiv.innerHTML = `
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Header" value="Content-Type">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Value" value="application/json">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm w-100" onclick="removeHeader(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            `;

            updateGeneratedUrl();
            document.getElementById('headerCount').textContent = '1';
            document.getElementById('requestStatus').textContent = 'Ready';
            document.getElementById('requestStatus').className = 'badge bg-secondary';
        }

        async function executeTest() {
            const executeBtn = document.getElementById('executeBtn');
            const spinner = document.querySelector('.loading-spinner');
            const resultStatus = document.getElementById('resultStatus');

            // Update UI for loading state
            executeBtn.disabled = true;
            spinner.style.display = 'block';
            resultStatus.textContent = 'Executing...';
            resultStatus.className = 'badge bg-warning';
            document.getElementById('requestStatus').textContent = 'Processing';
            document.getElementById('requestStatus').className = 'badge bg-warning';

            const startTime = performance.now();

            try {
                const method = document.getElementById('httpMethod').value;
                const url = document.getElementById('generatedUrl').textContent;
                const headers = getHeaders();
                const body = document.getElementById('requestBody').value;

                const options = {
                    method: method,
                    headers: headers
                };

                if (method === 'POST' || method === 'PUT') {
                    options.body = body;
                }

                const response = await fetch(url, options);
                const endTime = performance.now();
                const responseTime = Math.round(endTime - startTime);

                // Update stats
                stats.total++;
                stats.totalResponseTime += responseTime;

                const responseText = await response.text();
                let responseData;

                try {
                    responseData = JSON.parse(responseText);
                } catch (e) {
                    responseData = {
                        raw: responseText
                    };
                }

                // Update results UI
                document.getElementById('responseTime').textContent = responseTime + 'ms';
                document.getElementById('httpStatus').textContent = response.status + ' ' + response.statusText;
                document.getElementById('httpStatus').className = response.ok ? 'badge bg-success' : 'badge bg-danger';
                document.getElementById('contentType').textContent = response.headers.get('content-type') || 'Not specified';
                document.getElementById('responseSize').textContent = new Blob([responseText]).size + ' bytes';
                document.getElementById('fullRequestUrl').textContent = url;

                // Format and display response headers
                const headerArray = [];
                response.headers.forEach((value, key) => {
                    headerArray.push(`${key}: ${value}`);
                });
                document.getElementById('responseHeaders').textContent = headerArray.join('\n') || 'No headers received';

                // Display response body with syntax highlighting
                document.getElementById('responseBody').textContent = JSON.stringify(responseData, null, 2);

                // Update status
                if (response.ok) {
                    resultStatus.textContent = 'Success';
                    resultStatus.className = 'badge bg-success';
                    document.getElementById('requestStatus').textContent = 'Success';
                    document.getElementById('requestStatus').className = 'badge bg-success';
                    stats.success++;
                } else {
                    resultStatus.textContent = 'Error';
                    resultStatus.className = 'badge bg-danger';
                    document.getElementById('requestStatus').textContent = 'Error';
                    document.getElementById('requestStatus').className = 'badge bg-danger';
                    stats.failed++;
                }

                // Add to history
                addToHistory({
                    url: url,
                    method: method,
                    status: response.status,
                    responseTime: responseTime,
                    timestamp: new Date().toLocaleString(),
                    success: response.ok
                });

            } catch (error) {
                const endTime = performance.now();
                const responseTime = Math.round(endTime - startTime);

                stats.total++;
                stats.failed++;

                document.getElementById('responseTime').textContent = responseTime + 'ms';
                document.getElementById('httpStatus').textContent = 'Network Error';
                document.getElementById('httpStatus').className = 'badge bg-danger';
                document.getElementById('responseBody').textContent = JSON.stringify({
                    error: error.message,
                    type: error.name
                }, null, 2);

                resultStatus.textContent = 'Failed';
                resultStatus.className = 'badge bg-danger';
                document.getElementById('requestStatus').textContent = 'Failed';
                document.getElementById('requestStatus').className = 'badge bg-danger';

                addToHistory({
                    url: document.getElementById('generatedUrl').textContent,
                    method: document.getElementById('httpMethod').value,
                    status: 0,
                    responseTime: responseTime,
                    timestamp: new Date().toLocaleString(),
                    success: false,
                    error: error.message
                });
            } finally {
                executeBtn.disabled = false;
                spinner.style.display = 'none';
                updateStats();
            }
        }

        function addToHistory(testResult) {
            testHistory.unshift(testResult);
            if (testHistory.length > 10) {
                testHistory = testHistory.slice(0, 10);
            }

            updateHistoryDisplay();
        }

        function updateHistoryDisplay() {
            const historyDiv = document.getElementById('testHistory');

            if (testHistory.length === 0) {
                historyDiv.innerHTML = `
                    <div class="text-center text-muted py-4">
                        <i class="fas fa-history fa-3x mb-3"></i>
                        <p>No test history yet. Execute some tests to see results here.</p>
                    </div>
                `;
                return;
            }

            let html = '';
            testHistory.forEach((test, index) => {
                html += `
                    <div class="card mb-2 ${test.success ? 'border-success' : 'border-danger'}">
                        <div class="card-body py-2">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <span class="badge ${test.success ? 'bg-success' : 'bg-danger'}">${test.method}</span>
                                </div>
                                <div class="col-md-4 small text-truncate" title="${test.url}">
                                    ${test.url}
                                </div>
                                <div class="col-md-2">
                                    <span class="badge ${test.status === 200 ? 'bg-success' : 'bg-warning'}">${test.status}</span>
                                </div>
                                <div class="col-md-2">
                                    <small>${test.responseTime}ms</small>
                                </div>
                                <div class="col-md-2 text-end">
                                    <small class="text-muted">${test.timestamp}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });

            historyDiv.innerHTML = html;
        }

        function loadQuickTest(testType) {
            resetForm();

            switch (testType) {
                case 'list_indicator_data':
                    document.getElementById('apiUrl').value = 'https://mne.lifebox.org/app/api/v1.php/lbpmi_data_values';
                    updateGeneratedUrl();
                    break;

                case 'view_single_record':
                    document.getElementById('apiUrl').value = 'https://mne.lifebox.org/app/api/v1.php/lbpmi_data_values';
                    // Add editid1 parameter
                    addParam();
                    const lastParamRow = document.getElementById('queryParams').lastElementChild;
                    const inputs = lastParamRow.getElementsByTagName('input');
                    inputs[0].value = 'editid1';
                    inputs[1].value = '8';
                    updateGeneratedUrl();
                    break;

                case 'test_cors':
                    document.getElementById('apiUrl').value = 'https://mne.lifebox.org/app/api/v1.php';
                    document.getElementById('httpMethod').value = 'OPTIONS';
                    updateGeneratedUrl();
                    break;

                case 'error_test':
                    document.getElementById('apiUrl').value = 'https://mne.lifebox.org/app/api/v1.php/nonexistent_table';
                    updateGeneratedUrl();
                    break;
            }

            // Switch to test tab
            new bootstrap.Tab(document.getElementById('test-tab')).show();
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateGeneratedUrl();
            document.getElementById('apiUrl').addEventListener('input', updateGeneratedUrl);
            document.getElementById('apiKey').addEventListener('input', updateGeneratedUrl);
            document.getElementById('httpMethod').addEventListener('change', updateGeneratedUrl);
        });
    </script>
</body>

</html>