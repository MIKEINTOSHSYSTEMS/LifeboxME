<?php

/**
 * Lifebox Analytics Management Interface
 * File: index.php on dev lbanalytics_functions.php
 * @MIKEINTOSHSYSTEMS Michael Kifle Teferra
 * Comprehensive management interface for Lifebox PMI (Performance Measurement Indicators)
 * Handles calculations, jobs, logs, and analytics in a clean, modern UI with custom CSS
 */

session_start();

// Database configuration - Update these with your actual credentials
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'lifebox_mesystem'); // lifebox_mesystem // Production DB name lifebox_me_db // development db name
define('DB_USER', 'postgres'); // Make sure you use the correct database user and password
define('DB_PASS', 'mikeintosh');

// System configuration
define('APP_NAME', 'PMI Analytics Manager');
define('APP_VERSION', '1.0.0');
define('LOG_RETENTION_DAYS', 30);
define('MAX_JOBS_PER_PAGE', 100);

// Establish database connection
try {
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle AJAX requests - support both GET and POST
$action = $_POST['action'] ?? $_GET['action'] ?? null;

if ($action) {
    header('Content-Type: application/json');
    try {
        $input = array_merge($_GET, $_POST);
        $result = handleAjaxRequest($input, $pdo);
        echo json_encode(['success' => true, 'data' => $result]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
    exit;
}

/**
 * Handle AJAX requests from the UI
 */
function handleAjaxRequest($post, $pdo)
{
    switch ($post['action']) {
        case 'get_dashboard_stats':
            return getDashboardStats($pdo);
        case 'get_jobs':
            return getJobs($pdo, $post);
        case 'get_logs':
            return getLogs($pdo, $post);
        case 'run_function':
            return runFunction($pdo, $post);
        case 'retry_job':
            return retryJob($pdo, $post);
        case 'clear_jobs':
            return clearJobs($pdo, $post);
        case 'clear_logs':
            return clearLogs($pdo, $post);
        case 'clear_actuals':
            return clearActuals($pdo, $post);
        case 'refresh_calculations':
            return refreshCalculations($pdo, $post);
        case 'get_indicators':
            return getIndicators($pdo);
        case 'get_indicator_groups':
            return getIndicatorGroups($pdo);
        case 'get_datasets':
            return getDatasets($pdo);
        case 'get_organization_units':
            return getOrganizationUnits($pdo);
        case 'get_periods':
            return getPeriods($pdo);
        case 'run_analytics':
            return runAnalytics($pdo, $post);
        case 'get_job_details':
            return getJobDetails($pdo, $post);
        case 'cancel_job':
            return cancelJob($pdo, $post);
        case 'get_system_health':
            return getSystemHealth($pdo);
        case 'reset_sequence':
            return resetSequence($pdo, $post);
        case 'find_duplicate_jobs':
            return findDuplicateJobs($pdo);
        case 'deduplicate_jobs':
            return deduplicateJobs($pdo, $post);
        case 'find_duplicate_actuals':
            return findDuplicateActuals($pdo);
        case 'deduplicate_actuals':
            return deduplicateActuals($pdo, $post);
        case 'check_coverage':
            return checkCoverage($pdo, $post);
        case 'get_readme':
            return getReadmeContent();
        default:
            throw new Exception('Unknown action: ' . $post['action']);
    }
}

/**
 * Get README.md content and convert to HTML
 */
function getReadmeContent()
{
    //$readmeFile = __DIR__ . '/README.md'; Testing
    $readmeFile = __DIR__ . '/help.md';

    if (!file_exists($readmeFile)) {
        return [
            'content' => '<div class="error-message">README.md file not found in the current directory.</div>',
            'exists' => false
        ];
    }

    // Get the raw content
    $content = file_get_contents($readmeFile);

    // Include Parsedown if available
    if (file_exists(__DIR__ . '/Parsedown.php')) {
        require_once __DIR__ . '/Parsedown.php';
        $parsedown = new Parsedown();

        // Enable safe mode to prevent XSS
        $parsedown->setSafeMode(true);

        // Convert Markdown to HTML
        $html = $parsedown->text($content);

        // Add some custom styling to the HTML
        $styledHtml = '<div class="markdown-body">' . $html . '</div>';

        return [
            'content' => $styledHtml,
            'exists' => true,
            'format' => 'html'
        ];
    } else {
        // Fallback: Basic Markdown conversion if Parsedown is not available
        $html = basicMarkdownToHtml($content);
        return [
            'content' => '<div class="markdown-body markdown-simple">' . $html . '</div>',
            'exists' => true,
            'format' => 'html'
        ];
    }
}

/**
 * Basic Markdown to HTML converter (fallback if Parsedown is not available)
 */
function basicMarkdownToHtml($text)
{
    // Convert headers
    $text = preg_replace('/^### (.*?)$/m', '<h3>$1</h3>', $text);
    $text = preg_replace('/^## (.*?)$/m', '<h2>$1</h2>', $text);
    $text = preg_replace('/^# (.*?)$/m', '<h1>$1</h1>', $text);

    // Convert bold
    $text = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $text);
    $text = preg_replace('/__(.*?)__/', '<strong>$1</strong>', $text);

    // Convert italic
    $text = preg_replace('/\*(.*?)\*/', '<em>$1</em>', $text);
    $text = preg_replace('/_(.*?)_/', '<em>$1</em>', $text);

    // Convert code blocks
    $text = preg_replace('/```(.*?)```/s', '<pre><code>$1</code></pre>', $text);

    // Convert inline code
    $text = preg_replace('/`(.*?)`/', '<code>$1</code>', $text);

    // Convert lists
    $text = preg_replace('/^\- (.*?)$/m', '<li>$1</li>', $text);
    $text = preg_replace('/(<li>.*?<\/li>)\s*(?!<li>)/s', '<ul>$1</ul>', $text);

    // Convert links
    $text = preg_replace('/\[(.*?)\]\((.*?)\)/', '<a href="$2" target="_blank">$1</a>', $text);

    // Convert paragraphs
    $paragraphs = explode("\n\n", $text);
    $text = '';
    foreach ($paragraphs as $para) {
        $para = trim($para);
        if (!empty($para) && !preg_match('/^<h[1-6]|<ul|<ol|<pre/', $para)) {
            $text .= '<p>' . $para . '</p>';
        } else {
            $text .= $para;
        }
    }

    return $text;
}

/**
 * Get dashboard statistics
 */
function getDashboardStats($pdo)
{
    $stats = [];

    // Job statistics
    $stmt = $pdo->query("
        SELECT 
            COUNT(*) as total_jobs,
            COUNT(CASE WHEN status = 'pending' THEN 1 END) as pending_jobs,
            COUNT(CASE WHEN status = 'processing' THEN 1 END) as processing_jobs,
            COUNT(CASE WHEN status = 'completed' THEN 1 END) as completed_jobs,
            COUNT(CASE WHEN status = 'failed' THEN 1 END) as failed_jobs,
            COALESCE(MAX(created_at), '1970-01-01') as last_job_created
        FROM public.lbpmi_calculation_jobs
    ");
    $stats['jobs'] = $stmt->fetch();

    // Log statistics
    $stmt = $pdo->query("
        SELECT 
            COUNT(*) as total_logs,
            COUNT(CASE WHEN status = 'Error' THEN 1 END) as error_logs,
            COUNT(CASE WHEN status = 'Completed' THEN 1 END) as success_logs,
            MAX(calculation_timestamp) as last_calculation,
            AVG(execution_time_ms) as avg_execution_time
        FROM public.lbpmi_calculation_log
        WHERE calculation_timestamp > NOW() - INTERVAL '7 days'
    ");
    $stats['logs'] = $stmt->fetch();

    // Indicator statistics
    $stmt = $pdo->query("
        SELECT 
            COUNT(*) as total_indicators,
            COUNT(CASE WHEN is_active THEN 1 END) as active_indicators,
            COUNT(DISTINCT indicator_group_id) as indicator_groups
        FROM public.lbpmi_indicators
    ");
    $stats['indicators'] = $stmt->fetch();

    // Data element statistics
    $stmt = $pdo->query("
        SELECT 
            COUNT(*) as total_data_elements,
            COUNT(DISTINCT dv.data_element_id) as data_elements_with_values
        FROM public.lbpmi_data_elements de
        LEFT JOIN public.lbpmi_data_values dv ON de.data_element_id = dv.data_element_id
    ");
    $stats['data_elements'] = $stmt->fetch();

    // Dataset statistics
    $stmt = $pdo->query("
        SELECT 
            COUNT(*) as total_datasets,
            COUNT(CASE WHEN is_active THEN 1 END) as active_datasets
        FROM public.lbpmi_datasets
    ");
    $stats['datasets'] = $stmt->fetch();

    // Indicator group statistics
    $stmt = $pdo->query("
        SELECT COUNT(*) as total_groups
        FROM public.lbpmi_indicator_groups
    ");
    $stats['indicator_groups'] = ['total_groups' => $stmt->fetchColumn()];

    // Actuals statistics
    $stmt = $pdo->query("
        SELECT 
            COUNT(*) as total_actuals,
            COUNT(CASE WHEN actual_value IS NOT NULL THEN 1 END) as actuals_with_values,
            COUNT(DISTINCT period_year) as years_with_data
        FROM public.lbpmi_indicator_actuals
    ");
    $stats['actuals'] = $stmt->fetch();

    // Organization unit statistics
    $stats['org_units'] = [
        'regions' => $pdo->query("SELECT COUNT(*) FROM public.regions")->fetchColumn(),
        'countries' => $pdo->query("SELECT COUNT(*) FROM public.countries")->fetchColumn(),
        'facilities' => $pdo->query("SELECT COUNT(*) FROM public.facilities WHERE is_active = true")->fetchColumn()
    ];

    // Recent activity
    $stmt = $pdo->query("
        SELECT calculation_type, period_type, period_year, status, 
               calculation_timestamp, error_message
        FROM public.lbpmi_calculation_log
        ORDER BY calculation_timestamp DESC
        LIMIT 10
    ");
    $stats['recent_activity'] = $stmt->fetchAll();

    return $stats;
}

/**
 * Get jobs with filtering
 */
function getJobs($pdo, $params)
{
    $status = $params['status'] ?? 'all';
    $limit = min(intval($params['limit'] ?? MAX_JOBS_PER_PAGE), 500);
    $offset = intval($params['offset'] ?? 0);

    $where = [];
    $queryParams = [];

    if ($status !== 'all') {
        $where[] = "status = ?";
        $queryParams[] = $status;
    }

    $whereClause = $where ? "WHERE " . implode(' AND ', $where) : "";

    // Get total count
    $stmt = $pdo->prepare("
        SELECT COUNT(*) 
        FROM public.lbpmi_calculation_jobs 
        $whereClause
    ");
    $stmt->execute($queryParams);
    $total = $stmt->fetchColumn();

    // Get jobs
    $stmt = $pdo->prepare("
        SELECT 
            j.*,
            i.indicator_name,
            i.indicator_code,
            r.region_name,
            c.country_name,
            f.facility_name
        FROM public.lbpmi_calculation_jobs j
        LEFT JOIN public.lbpmi_indicators i ON j.indicator_id = i.indicator_id
        LEFT JOIN public.regions r ON j.region_id = r.region_id
        LEFT JOIN public.countries c ON j.country_id = c.country_id
        LEFT JOIN public.facilities f ON j.facility_id = f.facility_id
        $whereClause
        ORDER BY 
            CASE j.status
                WHEN 'pending' THEN 1
                WHEN 'processing' THEN 2
                WHEN 'failed' THEN 3
                WHEN 'completed' THEN 4
                ELSE 5
            END,
            j.priority DESC,
            j.created_at DESC
        LIMIT ? OFFSET ?
    ");

    $allParams = array_merge($queryParams, [$limit, $offset]);
    $stmt->execute($allParams);
    $jobs = $stmt->fetchAll();

    return [
        'jobs' => $jobs,
        'total' => $total,
        'limit' => $limit,
        'offset' => $offset
    ];
}

/**
 * Get logs with filtering
 */
function getLogs($pdo, $params)
{
    $status = $params['status'] ?? 'all';
    $indicator_id = $params['indicator_id'] ?? null;
    $days = intval($params['days'] ?? 7);
    $limit = min(intval($params['limit'] ?? MAX_JOBS_PER_PAGE), 500);
    $offset = intval($params['offset'] ?? 0);

    $where = ["calculation_timestamp > NOW() - INTERVAL '{$days} days'"];
    $queryParams = [];

    if ($status !== 'all') {
        $where[] = "status = ?";
        $queryParams[] = $status;
    }

    if ($indicator_id) {
        $where[] = "indicator_id = ?";
        $queryParams[] = $indicator_id;
    }

    $whereClause = "WHERE " . implode(' AND ', $where);

    // Get total count
    $stmt = $pdo->prepare("
        SELECT COUNT(*) 
        FROM public.lbpmi_calculation_log 
        $whereClause
    ");
    $stmt->execute($queryParams);
    $total = $stmt->fetchColumn();

    // Get logs
    $stmt = $pdo->prepare("
        SELECT 
            l.*,
            i.indicator_name,
            i.indicator_code,
            r.region_name,
            c.country_name,
            f.facility_name
        FROM public.lbpmi_calculation_log l
        LEFT JOIN public.lbpmi_indicators i ON l.indicator_id = i.indicator_id
        LEFT JOIN public.regions r ON l.region_id = r.region_id
        LEFT JOIN public.countries c ON l.country_id = c.country_id
        LEFT JOIN public.facilities f ON l.facility_id = f.facility_id
        $whereClause
        ORDER BY l.calculation_timestamp DESC
        LIMIT ? OFFSET ?
    ");

    $allParams = array_merge($queryParams, [$limit, $offset]);
    $stmt->execute($allParams);
    $logs = $stmt->fetchAll();

    return [
        'logs' => $logs,
        'total' => $total,
        'limit' => $limit,
        'offset' => $offset
    ];
}

/**
 * Get all indicator groups
 */
function getIndicatorGroups($pdo)
{
    $stmt = $pdo->query("
        SELECT 
            indicator_group_id,
            indicator_group_name,
            indicator_group_code,
            indicator_group_description
        FROM public.lbpmi_indicator_groups
        ORDER BY indicator_group_name
    ");
    return $stmt->fetchAll();
}

/**
 * Get all datasets
 */
function getDatasets($pdo)
{
    $stmt = $pdo->query("
        SELECT 
            dataset_id,
            dataset_name,
            dataset_code,
            dataset_description,
            period_type,
            is_active
        FROM public.lbpmi_datasets
        ORDER BY dataset_name
    ");
    return $stmt->fetchAll();
}

/**
 * Run a database function
 */
function runFunction($pdo, $params)
{
    $function_name = $params['function_name'] ?? '';
    $parameters = $params['parameters'] ?? [];

    if (!$function_name) {
        throw new Exception('Function name required');
    }

    // Whitelist of allowed functions for security
    $allowed_functions = [
        'calculate_indicator_formula' => [
            'params' => ['p_indicator_id', 'p_period_type', 'p_period_year', 'p_period_quarter', 'p_period_month', 'p_region_id', 'p_country_id', 'p_facility_id'],
            'returns' => 'numeric',
            'description' => 'Calculate indicator value using formula'
        ],
        'process_calculation_jobs' => [
            'params' => [],
            'returns' => 'void',
            'description' => 'Process pending calculation jobs'
        ],
        'refresh_all_calculations' => [
            'params' => ['p_year', 'p_force'],
            'returns' => 'void',
            'description' => 'Refresh all calculations for a year'
        ],
        'scheduled_pmi_calculations' => [
            'params' => [],
            'returns' => 'void',
            'description' => 'Run scheduled calculations'
        ],
        'get_data_value' => [
            'params' => ['p_data_element_id', 'p_period_type', 'p_period_year', 'p_period_quarter', 'p_period_month', 'p_region_id', 'p_country_id', 'p_facility_id'],
            'returns' => 'numeric',
            'description' => 'Get data value for a data element'
        ],
        'update_pmi_actuals_from_calculations' => [
            'params' => ['p_year', 'p_clean_first'],
            'returns' => 'table',
            'description' => 'Update actuals from calculations'
        ],
        'queue_indicator_calculation' => [
            'params' => [],
            'returns' => 'trigger',
            'description' => 'Queue indicator calculation (trigger function)'
        ],
        'initialize_existing_indicators' => [
            'params' => [],
            'returns' => 'void',
            'description' => 'Initialize existing indicators'
        ],
        'cleanup_old_calculation_data' => [
            'params' => ['p_days', 'p_dry_run'],
            'returns' => 'table',
            'description' => 'Clean up old calculation data'
        ]
    ];

    if (!isset($allowed_functions[$function_name])) {
        throw new Exception('Function not allowed or does not exist');
    }

    // Build and execute the function call
    $paramPlaceholders = [];
    $execParams = [];

    foreach ($allowed_functions[$function_name]['params'] as $index => $paramName) {
        if (isset($parameters[$paramName]) && $parameters[$paramName] !== '') {
            $paramPlaceholders[] = '?';
            $execParams[] = $parameters[$paramName];
        } else {
            $paramPlaceholders[] = 'NULL';
        }
    }

    // Start timing
    $startTime = microtime(true);

    // Execute function
    try {
        if ($allowed_functions[$function_name]['returns'] === 'table') {
            $stmt = $pdo->prepare("SELECT * FROM public.{$function_name}(" . implode(', ', $paramPlaceholders) . ")");
            $stmt->execute($execParams);
            $result = $stmt->fetchAll();
        } else {
            $stmt = $pdo->prepare("SELECT public.{$function_name}(" . implode(', ', $paramPlaceholders) . ") as result");
            $stmt->execute($execParams);
            $result = $stmt->fetchColumn();
        }
    } catch (PDOException $e) {
        throw new Exception("Database error: " . $e->getMessage());
    }

    $executionTime = round((microtime(true) - $startTime) * 1000, 2);

    return [
        'function' => $function_name,
        'description' => $allowed_functions[$function_name]['description'],
        'parameters' => $parameters,
        'result' => $result,
        'execution_time_ms' => $executionTime,
        'success' => true
    ];
}

/**
 * Retry a failed job
 */
function retryJob($pdo, $params)
{
    $job_id = $params['job_id'] ?? null;

    if (!$job_id) {
        throw new Exception('Job ID required');
    }

    $stmt = $pdo->prepare("
        UPDATE public.lbpmi_calculation_jobs
        SET status = 'pending',
            attempts = 0,
            error_message = NULL,
            next_retry = NULL,
            processed_at = NULL
        WHERE job_id = ?
    ");
    $stmt->execute([$job_id]);

    return ['message' => 'Job queued for retry', 'job_id' => $job_id];
}

/**
 * Clear jobs based on criteria
 */
function clearJobs($pdo, $params)
{
    $type = $params['clear_type'] ?? 'completed';
    $days = intval($params['days'] ?? 30);
    $status = $params['status'] ?? null;

    $where = [];
    $queryParams = [];

    switch ($type) {
        case 'completed':
            $where[] = "status = 'completed'";
            $where[] = "created_at < NOW() - INTERVAL '{$days} days'";
            break;
        case 'failed':
            $where[] = "status = 'failed'";
            break;
        case 'all':
            // Clear all except processing
            $where[] = "status != 'processing'";
            break;
        case 'by_status':
            if ($status) {
                $where[] = "status = ?";
                $queryParams[] = $status;
            }
            break;
        default:
            throw new Exception('Invalid clear type');
    }

    $whereClause = $where ? "WHERE " . implode(' AND ', $where) : "";

    $stmt = $pdo->prepare("
        DELETE FROM public.lbpmi_calculation_jobs
        $whereClause
        RETURNING job_id
    ");
    $stmt->execute($queryParams);
    $deleted = $stmt->rowCount();

    return [
        'message' => "Deleted {$deleted} jobs",
        'deleted_count' => $deleted
    ];
}

/**
 * Clear logs based on criteria
 */
function clearLogs($pdo, $params)
{
    $type = $params['clear_type'] ?? 'older_than';
    $days = intval($params['days'] ?? LOG_RETENTION_DAYS);
    $status = $params['status'] ?? null;

    $where = [];
    $queryParams = [];

    switch ($type) {
        case 'older_than':
            $where[] = "calculation_timestamp < NOW() - INTERVAL '{$days} days'";
            break;
        case 'by_status':
            if ($status) {
                $where[] = "status = ?";
                $queryParams[] = $status;
            }
            break;
        case 'all':
            // Clear all
            break;
        default:
            throw new Exception('Invalid clear type');
    }

    $whereClause = $where ? "WHERE " . implode(' AND ', $where) : "";

    $stmt = $pdo->prepare("
        DELETE FROM public.lbpmi_calculation_log
        $whereClause
        RETURNING log_id
    ");
    $stmt->execute($queryParams);
    $deleted = $stmt->rowCount();

    return [
        'message' => "Deleted {$deleted} log entries",
        'deleted_count' => $deleted
    ];
}

/**
 * Clear actuals based on criteria
 */
function clearActuals($pdo, $params)
{
    $year = $params['year'] ?? null;
    $indicator_id = $params['indicator_id'] ?? null;
    $period_type = $params['period_type'] ?? null;

    $where = [];
    $queryParams = [];

    if ($year) {
        $where[] = "period_year = ?";
        $queryParams[] = $year;
    }

    if ($indicator_id) {
        $where[] = "indicator_id = ?";
        $queryParams[] = $indicator_id;
    }

    if ($period_type) {
        $where[] = "period_type = ?";
        $queryParams[] = $period_type;
    }

    $whereClause = $where ? "WHERE " . implode(' AND ', $where) : "";

    $stmt = $pdo->prepare("
        DELETE FROM public.lbpmi_indicator_actuals
        $whereClause
        RETURNING actual_id
    ");
    $stmt->execute($queryParams);
    $deleted = $stmt->rowCount();

    return [
        'message' => "Deleted {$deleted} actual records",
        'deleted_count' => $deleted
    ];
}

/**
 * Refresh calculations
 */
function refreshCalculations($pdo, $params)
{
    $year = $params['year'] ?? date('Y');
    $force = isset($params['force']) ? filter_var($params['force'], FILTER_VALIDATE_BOOLEAN) : false;

    $startTime = microtime(true);

    // Call the refresh function
    $stmt = $pdo->prepare("SELECT public.refresh_all_calculations(?, ?)");
    $stmt->execute([$year, $force]);

    $executionTime = round((microtime(true) - $startTime), 2);

    return [
        'message' => "Refresh initiated for year {$year}" . ($force ? ' (forced)' : ''),
        'year' => $year,
        'force' => $force,
        'execution_time_seconds' => $executionTime
    ];
}

/**
 * Get all indicators
 */
function getIndicators($pdo)
{
    $stmt = $pdo->query("
        SELECT 
            i.indicator_id,
            i.indicator_name,
            i.indicator_code,
            i.indicator_type,
            i.formula,
            i.is_active,
            ig.indicator_group_name,
            d.dataset_name
        FROM public.lbpmi_indicators i
        LEFT JOIN public.lbpmi_indicator_groups ig ON i.indicator_group_id = ig.indicator_group_id
        LEFT JOIN public.lbpmi_datasets d ON i.dataset_id = d.dataset_id
        ORDER BY i.indicator_name
    ");
    return $stmt->fetchAll();
}

/**
 * Get organization units
 */
function getOrganizationUnits($pdo)
{
    return [
        'regions' => $pdo->query("SELECT region_id, region_name FROM public.regions ORDER BY region_name")->fetchAll(),
        'countries' => $pdo->query("SELECT country_id, country_name, region_id FROM public.countries ORDER BY country_name")->fetchAll(),
        'facilities' => $pdo->query("SELECT facility_id, facility_name, country_id FROM public.facilities WHERE is_active = true ORDER BY facility_name")->fetchAll()
    ];
}

/**
 * Get available periods
 */
function getPeriods($pdo)
{
    $currentYear = date('Y');
    $years = range($currentYear - 5, $currentYear + 2);

    // Ensure years are integers
    $years = array_map('intval', $years);

    return [
        'years' => $years,
        'quarters' => [1, 2, 3, 4],
        'months' => range(1, 12),
        'period_types' => ['Yearly', 'Quarterly', 'Monthly']
    ];
}

/**
 * Run analytics for specific criteria
 */
function runAnalytics($pdo, $params)
{
    // Handle indicator_ids - could be string or array
    $indicator_ids_input = $params['indicator_ids'] ?? [];

    // Convert to array if it's a string
    if (is_string($indicator_ids_input)) {
        $indicator_ids = explode(',', $indicator_ids_input);
        $indicator_ids = array_map('trim', $indicator_ids);
        $indicator_ids = array_filter($indicator_ids, 'is_numeric');
    } elseif (is_array($indicator_ids_input)) {
        $indicator_ids = $indicator_ids_input;
    } else {
        $indicator_ids = [];
    }

    // If empty, get all active indicators
    if (empty($indicator_ids)) {
        $stmt = $pdo->query("SELECT indicator_id FROM public.lbpmi_indicators WHERE is_active = true");
        $indicator_ids = $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    $period_type = $params['period_type'] ?? 'Yearly';
    $year = $params['year'] ?? date('Y');
    $quarter = !empty($params['quarter']) ? $params['quarter'] : null;
    $month = !empty($params['month']) ? $params['month'] : null;
    $region_id = !empty($params['region_id']) ? $params['region_id'] : null;
    $country_id = !empty($params['country_id']) ? $params['country_id'] : null;
    $facility_id = !empty($params['facility_id']) ? $params['facility_id'] : null;

    $results = [];
    $startTime = microtime(true);

    foreach ($indicator_ids as $indicator_id) {
        try {
            $stmt = $pdo->prepare("
                SELECT public.calculate_indicator_formula(?, ?, ?, ?, ?, ?, ?, ?) as result
            ");
            $stmt->execute([
                $indicator_id,
                $period_type,
                $year,
                $quarter,
                $month,
                $region_id,
                $country_id,
                $facility_id
            ]);

            $result = $stmt->fetchColumn();

            $results[] = [
                'indicator_id' => $indicator_id,
                'result' => $result,
                'status' => 'success'
            ];
        } catch (Exception $e) {
            $results[] = [
                'indicator_id' => $indicator_id,
                'error' => $e->getMessage(),
                'status' => 'error'
            ];
        }
    }

    $executionTime = round((microtime(true) - $startTime), 2);

    return [
        'results' => $results,
        'total_indicators' => count($indicator_ids),
        'success_count' => count(array_filter($results, fn($r) => $r['status'] === 'success')),
        'error_count' => count(array_filter($results, fn($r) => $r['status'] === 'error')),
        'execution_time_seconds' => $executionTime,
        'parameters' => [
            'period_type' => $period_type,
            'year' => $year,
            'quarter' => $quarter,
            'month' => $month,
            'region_id' => $region_id,
            'country_id' => $country_id,
            'facility_id' => $facility_id
        ]
    ];
}

/**
 * Get detailed job information
 */
function getJobDetails($pdo, $params)
{
    $job_id = $params['job_id'] ?? null;

    if (!$job_id) {
        throw new Exception('Job ID required');
    }

    $stmt = $pdo->prepare("
        SELECT 
            j.*,
            i.indicator_name,
            i.indicator_code,
            i.formula,
            r.region_name,
            c.country_name,
            f.facility_name,
            (
                SELECT json_agg(log_data.*)
                FROM (
                    SELECT l.log_id, l.indicator_id, l.calculation_type, l.period_type, 
                           l.period_year, l.period_quarter, l.period_month,
                           l.region_id, l.country_id, l.facility_id,
                           l.calculated_value, l.status, l.error_message, l.execution_time_ms,
                           l.calculation_timestamp
                    FROM public.lbpmi_calculation_log l
                    WHERE l.indicator_id = j.indicator_id
                      AND l.period_type = j.period_type
                      AND l.period_year = j.period_year
                      AND (l.period_quarter = j.period_quarter OR (l.period_quarter IS NULL AND j.period_quarter IS NULL))
                      AND (l.period_month = j.period_month OR (l.period_month IS NULL AND j.period_month IS NULL))
                      AND (l.region_id = j.region_id OR (l.region_id IS NULL AND j.region_id IS NULL))
                      AND (l.country_id = j.country_id OR (l.country_id IS NULL AND j.country_id IS NULL))
                      AND (l.facility_id = j.facility_id OR (l.facility_id IS NULL AND j.facility_id IS NULL))
                    ORDER BY l.calculation_timestamp DESC
                    LIMIT 10
                ) as log_data
            ) as related_logs
        FROM public.lbpmi_calculation_jobs j
        LEFT JOIN public.lbpmi_indicators i ON j.indicator_id = i.indicator_id
        LEFT JOIN public.regions r ON j.region_id = r.region_id
        LEFT JOIN public.countries c ON j.country_id = c.country_id
        LEFT JOIN public.facilities f ON j.facility_id = f.facility_id
        WHERE j.job_id = ?
    ");
    $stmt->execute([$job_id]);

    return $stmt->fetch();
}

/**
 * Cancel a job
 */
function cancelJob($pdo, $params)
{
    $job_id = $params['job_id'] ?? null;

    if (!$job_id) {
        throw new Exception('Job ID required');
    }

    $stmt = $pdo->prepare("
        UPDATE public.lbpmi_calculation_jobs
        SET status = 'cancelled'
        WHERE job_id = ? AND status IN ('pending', 'processing')
        RETURNING job_id
    ");
    $stmt->execute([$job_id]);

    if ($stmt->rowCount() === 0) {
        throw new Exception('Job not found or cannot be cancelled');
    }

    return ['message' => 'Job cancelled successfully', 'job_id' => $job_id];
}

/**
 * Get system health status
 */
function getSystemHealth($pdo)
{
    $health = [];

    // Check database connection
    $health['database'] = [
        'status' => 'healthy',
        'message' => 'Connected successfully'
    ];

    // Check for stuck jobs
    $stmt = $pdo->query("
        SELECT COUNT(*) 
        FROM public.lbpmi_calculation_jobs 
        WHERE status = 'processing' 
          AND created_at < NOW() - INTERVAL '1 hour'
    ");
    $stuckJobs = $stmt->fetchColumn();

    $health['stuck_jobs'] = [
        'count' => $stuckJobs,
        'status' => $stuckJobs > 0 ? 'warning' : 'healthy',
        'message' => $stuckJobs > 0 ? "{$stuckJobs} jobs stuck in processing" : 'No stuck jobs'
    ];

    // Check for failed jobs
    $stmt = $pdo->query("
        SELECT COUNT(*) 
        FROM public.lbpmi_calculation_jobs 
        WHERE status = 'failed'
    ");
    $failedJobs = $stmt->fetchColumn();

    $health['failed_jobs'] = [
        'count' => $failedJobs,
        'status' => $failedJobs > 10 ? 'warning' : 'healthy',
        'message' => "{$failedJobs} failed jobs"
    ];

    // Check job queue size
    $stmt = $pdo->query("
        SELECT COUNT(*) 
        FROM public.lbpmi_calculation_jobs 
        WHERE status = 'pending'
    ");
    $pendingJobs = $stmt->fetchColumn();

    $health['pending_jobs'] = [
        'count' => $pendingJobs,
        'status' => $pendingJobs > 1000 ? 'warning' : 'healthy',
        'message' => "{$pendingJobs} pending jobs"
    ];

    // Check last successful calculation
    $stmt = $pdo->query("
        SELECT MAX(calculation_timestamp) 
        FROM public.lbpmi_calculation_log 
        WHERE status = 'Completed'
    ");
    $lastSuccess = $stmt->fetchColumn();

    $hoursSinceLast = $lastSuccess ? (time() - strtotime($lastSuccess)) / 3600 : null;

    $health['last_calculation'] = [
        'timestamp' => $lastSuccess,
        'hours_ago' => $hoursSinceLast ? round($hoursSinceLast, 1) : null,
        'status' => $hoursSinceLast && $hoursSinceLast > 24 ? 'warning' : 'healthy',
        'message' => $lastSuccess ? "Last calculation: " . date('Y-m-d H:i:s', strtotime($lastSuccess)) : 'No calculations yet'
    ];

    // Check table sizes
    $stmt = $pdo->query("
        SELECT 
            (SELECT pg_total_relation_size('public.lbpmi_calculation_jobs')) as jobs_size,
            (SELECT pg_total_relation_size('public.lbpmi_calculation_log')) as logs_size,
            (SELECT pg_total_relation_size('public.lbpmi_indicator_actuals')) as actuals_size
    ");
    $sizes = $stmt->fetch();

    $health['table_sizes'] = [
        'jobs' => round($sizes['jobs_size'] / 1024 / 1024, 2) . ' MB',
        'logs' => round($sizes['logs_size'] / 1024 / 1024, 2) . ' MB',
        'actuals' => round($sizes['actuals_size'] / 1024 / 1024, 2) . ' MB'
    ];

    return $health;
}

/**
 * Reset sequence for a table - FIXED VERSION
 */
function resetSequence($pdo, $params)
{
    $table = $params['table'] ?? null;

    $allowed_tables = [
        'lbpmi_calculation_jobs' => [
            'sequence' => 'lbpmi_calculation_jobs_job_id_seq',
            'id_column' => 'job_id',
            'min_value' => 1
        ],
        'lbpmi_calculation_log' => [
            'sequence' => 'lbpmi_calculation_log_log_id_seq',
            'id_column' => 'log_id',
            'min_value' => 1
        ],
        'lbpmi_indicator_actuals' => [
            'sequence' => 'lbpmi_indicator_actuals_actual_id_seq',
            'id_column' => 'actual_id',
            'min_value' => 1
        ]
    ];

    if (!$table || !isset($allowed_tables[$table])) {
        throw new Exception('Invalid table for sequence reset');
    }

    $table_info = $allowed_tables[$table];
    $sequence = $table_info['sequence'];
    $id_column = $table_info['id_column'];
    $min_value = $table_info['min_value'];

    // Get max ID
    $stmt = $pdo->query("SELECT COALESCE(MAX({$id_column}), 0) FROM public.{$table}");
    $maxId = $stmt->fetchColumn();

    // Ensure we don't go below min_value
    $newValue = max($maxId, $min_value);

    // Reset sequence
    $stmt = $pdo->prepare("SELECT setval('public.{$sequence}', ?)");
    $stmt->execute([$newValue]);

    return [
        'message' => "Sequence reset for {$table} to {$newValue}",
        'table' => $table,
        'sequence' => $sequence,
        'new_value' => $newValue,
        'old_max' => $maxId
    ];
}

/**
 * Find duplicate jobs
 */
function findDuplicateJobs($pdo)
{
    $sql = "
        SELECT
            indicator_id,
            period_type,
            period_year,
            COALESCE(period_quarter, -1) AS period_quarter,
            COALESCE(period_month, -1) AS period_month,
            COALESCE(region_id, -1) AS region_id,
            COALESCE(country_id, -1) AS country_id,
            COALESCE(facility_id, -1) AS facility_id,
            COUNT(*) as duplicate_count,
            MIN(job_id) as first_job_id,
            MAX(job_id) as last_job_id
        FROM public.lbpmi_calculation_jobs
        GROUP BY
            indicator_id,
            period_type,
            period_year,
            COALESCE(period_quarter, -1),
            COALESCE(period_month, -1),
            COALESCE(region_id, -1),
            COALESCE(country_id, -1),
            COALESCE(facility_id, -1)
        HAVING COUNT(*) > 1
        ORDER BY COUNT(*) DESC
    ";

    $stmt = $pdo->query($sql);
    $duplicates = $stmt->fetchAll();

    // Get total count of duplicate records
    $totalDuplicates = 0;
    foreach ($duplicates as $dup) {
        $totalDuplicates += $dup['duplicate_count'] - 1;
    }

    return [
        'duplicates' => $duplicates,
        'total_duplicate_sets' => count($duplicates),
        'total_duplicate_records' => $totalDuplicates
    ];
}

/**
 * Deduplicate jobs
 */
function deduplicateJobs($pdo, $params)
{
    $dryRun = isset($params['dry_run']) ? filter_var($params['dry_run'], FILTER_VALIDATE_BOOLEAN) : false;

    if ($dryRun) {
        // Just count how many would be deleted
        $sql = "
            SELECT COUNT(*) as would_delete
            FROM public.lbpmi_calculation_jobs a
            WHERE EXISTS (
                SELECT 1
                FROM public.lbpmi_calculation_jobs b
                WHERE a.job_id > b.job_id
                AND a.indicator_id = b.indicator_id
                AND a.period_type = b.period_type
                AND a.period_year = b.period_year
                AND COALESCE(a.period_quarter, -1) = COALESCE(b.period_quarter, -1)
                AND COALESCE(a.period_month, -1) = COALESCE(b.period_month, -1)
                AND COALESCE(a.region_id, -1) = COALESCE(b.region_id, -1)
                AND COALESCE(a.country_id, -1) = COALESCE(b.country_id, -1)
                AND COALESCE(a.facility_id, -1) = COALESCE(b.facility_id, -1)
            )
        ";
        $stmt = $pdo->query($sql);
        $count = $stmt->fetchColumn();

        return [
            'message' => "Dry run: Would delete {$count} duplicate jobs",
            'deleted_count' => 0,
            'would_delete' => $count,
            'dry_run' => true
        ];
    } else {
        // Perform actual deletion
        $sql = "
            DELETE FROM public.lbpmi_calculation_jobs a
            USING public.lbpmi_calculation_jobs b
            WHERE a.job_id > b.job_id
            AND a.indicator_id = b.indicator_id
            AND a.period_type = b.period_type
            AND a.period_year = b.period_year
            AND COALESCE(a.period_quarter, -1) = COALESCE(b.period_quarter, -1)
            AND COALESCE(a.period_month, -1) = COALESCE(b.period_month, -1)
            AND COALESCE(a.region_id, -1) = COALESCE(b.region_id, -1)
            AND COALESCE(a.country_id, -1) = COALESCE(b.country_id, -1)
            AND COALESCE(a.facility_id, -1) = COALESCE(b.facility_id, -1)
            RETURNING a.job_id
        ";

        $stmt = $pdo->query($sql);
        $deleted = $stmt->rowCount();

        return [
            'message' => "Deleted {$deleted} duplicate jobs",
            'deleted_count' => $deleted,
            'dry_run' => false
        ];
    }
}

/**
 * Find duplicate indicator actuals
 */
function findDuplicateActuals($pdo)
{
    $sql = "
        SELECT
            indicator_id,
            period_type,
            period_year,
            COALESCE(period_quarter, -1) AS period_quarter,
            COALESCE(period_month, -1) AS period_month,
            COALESCE(region_id, -1) AS region_id,
            COALESCE(country_id, -1) AS country_id,
            COALESCE(facility_id, -1) AS facility_id,
            COUNT(*) as duplicate_count,
            MIN(actual_id) as first_actual_id,
            MAX(actual_id) as last_actual_id
        FROM public.lbpmi_indicator_actuals
        GROUP BY
            indicator_id,
            period_type,
            period_year,
            COALESCE(period_quarter, -1),
            COALESCE(period_month, -1),
            COALESCE(region_id, -1),
            COALESCE(country_id, -1),
            COALESCE(facility_id, -1)
        HAVING COUNT(*) > 1
        ORDER BY COUNT(*) DESC
    ";

    $stmt = $pdo->query($sql);
    $duplicates = $stmt->fetchAll();

    // Get total count of duplicate records
    $totalDuplicates = 0;
    foreach ($duplicates as $dup) {
        $totalDuplicates += $dup['duplicate_count'] - 1;
    }

    return [
        'duplicates' => $duplicates,
        'total_duplicate_sets' => count($duplicates),
        'total_duplicate_records' => $totalDuplicates
    ];
}

/**
 * Deduplicate indicator actuals
 */
function deduplicateActuals($pdo, $params)
{
    $dryRun = isset($params['dry_run']) ? filter_var($params['dry_run'], FILTER_VALIDATE_BOOLEAN) : false;

    if ($dryRun) {
        // Just count how many would be deleted
        $sql = "
            SELECT COUNT(*) as would_delete
            FROM public.lbpmi_indicator_actuals a
            WHERE EXISTS (
                SELECT 1
                FROM public.lbpmi_indicator_actuals b
                WHERE a.actual_id > b.actual_id
                AND a.indicator_id = b.indicator_id
                AND a.period_type = b.period_type
                AND a.period_year = b.period_year
                AND COALESCE(a.period_quarter, -1) = COALESCE(b.period_quarter, -1)
                AND COALESCE(a.period_month, -1) = COALESCE(b.period_month, -1)
                AND COALESCE(a.region_id, -1) = COALESCE(b.region_id, -1)
                AND COALESCE(a.country_id, -1) = COALESCE(b.country_id, -1)
                AND COALESCE(a.facility_id, -1) = COALESCE(b.facility_id, -1)
            )
        ";
        $stmt = $pdo->query($sql);
        $count = $stmt->fetchColumn();

        return [
            'message' => "Dry run: Would delete {$count} duplicate actual records",
            'deleted_count' => 0,
            'would_delete' => $count,
            'dry_run' => true
        ];
    } else {
        // Perform actual deletion
        $sql = "
            DELETE FROM public.lbpmi_indicator_actuals a
            USING public.lbpmi_indicator_actuals b
            WHERE a.actual_id > b.actual_id
            AND a.indicator_id = b.indicator_id
            AND a.period_type = b.period_type
            AND a.period_year = b.period_year
            AND COALESCE(a.period_quarter, -1) = COALESCE(b.period_quarter, -1)
            AND COALESCE(a.period_month, -1) = COALESCE(b.period_month, -1)
            AND COALESCE(a.region_id, -1) = COALESCE(b.region_id, -1)
            AND COALESCE(a.country_id, -1) = COALESCE(b.country_id, -1)
            AND COALESCE(a.facility_id, -1) = COALESCE(b.facility_id, -1)
            RETURNING a.actual_id
        ";

        $stmt = $pdo->query($sql);
        $deleted = $stmt->rowCount();

        return [
            'message' => "Deleted {$deleted} duplicate actual records",
            'deleted_count' => $deleted,
            'dry_run' => false
        ];
    }
}

/**
 * Check calculation coverage with pagination and filters
 */
function checkCoverage($pdo, $params)
{
    $year = isset($params['year']) && !empty($params['year']) ? intval($params['year']) : date('Y');
    $level = $params['level'] ?? 'all'; // all, region, country, facility
    $search = $params['search'] ?? '';
    $parent_id = $params['parent_id'] ?? null; // For drill-down: region_id, country_id
    $parent_type = $params['parent_type'] ?? null; // 'region', 'country'
    $limit = min(intval($params['limit'] ?? 50), 500);
    $offset = intval($params['offset'] ?? 0);

    // Ensure year is valid
    if ($year < 2000 || $year > 2100) {
        $year = date('Y');
    }

    try {
        // Get indicator count
        $stmt = $pdo->query("SELECT COUNT(*) FROM public.lbpmi_indicators WHERE is_active = true");
        $indicator_count = intval($stmt->fetchColumn());

        // Calculate periods per indicator based on year
        $current_year = date('Y');
        $current_month = date('n');

        if ($year == $current_year) {
            $periods_per_indicator = 1 + 4 + $current_month; // Yearly + 4 quarters + months up to current
        } else {
            $periods_per_indicator = 1 + 4 + 12; // Yearly + 4 quarters + 12 months = 17
        }

        // Build the base query for coverage data
        $sql = "
            WITH org_units AS (
                -- Regions
                SELECT 
                    'region' as level,
                    region_id as id,
                    region_name as name,
                    NULL::integer as parent_id,
                    NULL::text as parent_type
                FROM public.regions
                
                UNION ALL
                
                -- Countries with parent region
                SELECT 
                    'country' as level,
                    c.country_id as id,
                    c.country_name as name,
                    c.region_id::integer as parent_id,
                    'region'::text as parent_type
                FROM public.countries c
                
                UNION ALL
                
                -- Facilities with parent country
                SELECT 
                    'facility' as level,
                    f.facility_id as id,
                    f.facility_name as name,
                    f.country_id::integer as parent_id,
                    'country'::text as parent_type
                FROM public.facilities f
                WHERE f.is_active = true
            ),
            calculation_counts AS (
                SELECT 
                    COALESCE(region_id, country_id, facility_id) as org_id,
                    CASE 
                        WHEN region_id IS NOT NULL THEN 'region'
                        WHEN country_id IS NOT NULL THEN 'country'
                        WHEN facility_id IS NOT NULL THEN 'facility'
                        ELSE 'global'
                    END as org_level,
                    COUNT(CASE WHEN period_type = 'Yearly' THEN 1 END) as yearly_count,
                    COUNT(CASE WHEN period_type = 'Quarterly' THEN 1 END) as quarterly_count,
                    COUNT(CASE WHEN period_type = 'Monthly' THEN 1 END) as monthly_count,
                    COUNT(*) as total_count
                FROM public.lbpmi_indicator_actuals
                WHERE period_year = :year
                GROUP BY org_id, org_level
            )
            SELECT 
                ou.*,
                COALESCE(cc.yearly_count, 0) as yearly_count,
                COALESCE(cc.quarterly_count, 0) as quarterly_count,
                COALESCE(cc.monthly_count, 0) as monthly_count,
                COALESCE(cc.total_count, 0) as total_count,
                {$indicator_count} as indicator_count,
                {$periods_per_indicator} as periods_per_indicator,
                ({$indicator_count} * {$periods_per_indicator}) as expected_per_org,
                CASE 
                    WHEN {$indicator_count} > 0 AND {$periods_per_indicator} > 0
                    THEN ROUND((COALESCE(cc.total_count, 0)::numeric / ({$indicator_count} * {$periods_per_indicator}) * 100), 2)
                    ELSE 0 
                END as coverage_percentage
            FROM org_units ou
            LEFT JOIN calculation_counts cc ON ou.id = cc.org_id AND ou.level = cc.org_level
            WHERE 1=1
        ";

        // Initialize parameters array
        $params = [];
        $whereClauses = [];

        // Always add year parameter
        $params['year'] = $year;

        // Apply level filter
        if ($level !== 'all') {
            $sql .= " AND ou.level = :level";
            $params['level'] = $level;
        }

        // Apply parent filter for drill-down
        if ($parent_id && $parent_type) {
            if ($parent_type === 'region') {
                $sql .= " AND (ou.parent_type = 'region' AND ou.parent_id = :parent_id)";
                $params['parent_id'] = intval($parent_id);
            } elseif ($parent_type === 'country') {
                $sql .= " AND (ou.parent_type = 'country' AND ou.parent_id = :parent_id)";
                $params['parent_id'] = intval($parent_id);
            }
        }

        // Apply search filter
        if (!empty($search)) {
            $sql .= " AND ou.name ILIKE :search";
            $params['search'] = '%' . $search . '%';
        }

        // Build count query separately to avoid parameter confusion
        $countSql = "
            SELECT COUNT(*) as total
            FROM (
                SELECT ou.id
                FROM (
                    SELECT 
                        'region' as level,
                        region_id as id,
                        region_name as name,
                        NULL::integer as parent_id,
                        NULL::text as parent_type
                    FROM public.regions
                    
                    UNION ALL
                    
                    SELECT 
                        'country' as level,
                        c.country_id as id,
                        c.country_name as name,
                        c.region_id::integer as parent_id,
                        'region'::text as parent_type
                    FROM public.countries c
                    
                    UNION ALL
                    
                    SELECT 
                        'facility' as level,
                        f.facility_id as id,
                        f.facility_name as name,
                        f.country_id::integer as parent_id,
                        'country'::text as parent_type
                    FROM public.facilities f
                    WHERE f.is_active = true
                ) ou
                WHERE 1=1
        ";

        // Add the same filters to count query
        if ($level !== 'all') {
            $countSql .= " AND ou.level = :level";
        }
        if ($parent_id && $parent_type) {
            if ($parent_type === 'region') {
                $countSql .= " AND (ou.parent_type = 'region' AND ou.parent_id = :parent_id)";
            } elseif ($parent_type === 'country') {
                $countSql .= " AND (ou.parent_type = 'country' AND ou.parent_id = :parent_id)";
            }
        }
        if (!empty($search)) {
            $countSql .= " AND ou.name ILIKE :search";
        }

        $countSql .= ") as subquery";

        // Get total count for pagination
        $countStmt = $pdo->prepare($countSql);

        // Bind count query parameters
        if (isset($params['level'])) {
            $countStmt->bindValue(':level', $params['level'], PDO::PARAM_STR);
        }
        if (isset($params['parent_id'])) {
            $countStmt->bindValue(':parent_id', $params['parent_id'], PDO::PARAM_INT);
        }
        if (isset($params['search'])) {
            $countStmt->bindValue(':search', $params['search'], PDO::PARAM_STR);
        }

        $countStmt->execute();
        $total = $countStmt->fetchColumn();
        $total = $total ? intval($total) : 0;

        // Add ordering and pagination to main query
        $sql .= " ORDER BY ou.level, ou.name LIMIT :limit OFFSET :offset";

        $stmt = $pdo->prepare($sql);

        // Bind main query parameters including year
        $stmt->bindValue(':year', $params['year'], PDO::PARAM_INT);

        if (isset($params['level'])) {
            $stmt->bindValue(':level', $params['level'], PDO::PARAM_STR);
        }
        if (isset($params['parent_id'])) {
            $stmt->bindValue(':parent_id', $params['parent_id'], PDO::PARAM_INT);
        }
        if (isset($params['search'])) {
            $stmt->bindValue(':search', $params['search'], PDO::PARAM_STR);
        }

        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();
        $coverage = $stmt->fetchAll();

        // Calculate summary statistics
        $org_unit_count = getOrgUnitCount2($pdo, $level, $parent_id, $parent_type);
        $total_expected = $indicator_count * $org_unit_count * $periods_per_indicator;
        $total_actual = array_sum(array_column($coverage, 'total_count'));
        $overall_coverage = $total_expected > 0 ? round(($total_actual / $total_expected) * 100, 2) : 0;

        // Get breadcrumb trail for drill-down
        $breadcrumbs = [];
        if ($parent_id && $parent_type) {
            $breadcrumbs = getBreadcrumbs2($pdo, $parent_id, $parent_type);
        }

        return [
            'coverage' => $coverage,
            'total_expected' => $total_expected,
            'total_actual' => $total_actual,
            'overall_coverage' => $overall_coverage,
            'year' => $year,
            'indicator_count' => $indicator_count,
            'org_unit_count' => $org_unit_count,
            'periods_per_indicator' => $periods_per_indicator,
            'level' => $level,
            'search' => $search,
            'parent_id' => $parent_id,
            'parent_type' => $parent_type,
            'breadcrumbs' => $breadcrumbs,
            'pagination' => [
                'total' => $total,
                'limit' => $limit,
                'offset' => $offset,
                'pages' => $total > 0 ? ceil($total / $limit) : 1
            ]
        ];
    } catch (PDOException $e) {
        // Log the error for debugging
        error_log("Coverage query error: " . $e->getMessage());
        error_log("SQL: " . ($sql ?? 'No SQL'));
        error_log("Params: " . print_r($params ?? [], true));
        throw new Exception("Database error: " . $e->getMessage());
    }
}

/**
 * Get count of organization units based on filters - simplified version
 */
function getOrgUnitCount2($pdo, $level = 'all', $parent_id = null, $parent_type = null)
{
    try {
        if ($level === 'region' || $level === 'all') {
            $sql = "SELECT COUNT(*) FROM public.regions";
            $stmt = $pdo->query($sql);
            return intval($stmt->fetchColumn());
        } elseif ($level === 'country') {
            $sql = "SELECT COUNT(*) FROM public.countries";
            if ($parent_id && $parent_type === 'region') {
                $sql .= " WHERE region_id = " . intval($parent_id);
            }
            $stmt = $pdo->query($sql);
            return intval($stmt->fetchColumn());
        } elseif ($level === 'facility') {
            $sql = "SELECT COUNT(*) FROM public.facilities WHERE is_active = true";
            if ($parent_id && $parent_type === 'country') {
                $sql .= " AND country_id = " . intval($parent_id);
            }
            $stmt = $pdo->query($sql);
            return intval($stmt->fetchColumn());
        }

        // If 'all', sum all counts
        $regionCount = intval($pdo->query("SELECT COUNT(*) FROM public.regions")->fetchColumn());
        $countryCount = intval($pdo->query("SELECT COUNT(*) FROM public.countries")->fetchColumn());
        $facilityCount = intval($pdo->query("SELECT COUNT(*) FROM public.facilities WHERE is_active = true")->fetchColumn());

        return $regionCount + $countryCount + $facilityCount;
    } catch (Exception $e) {
        error_log("Error in getOrgUnitCount2: " . $e->getMessage());
        return 0;
    }
}

/**
 * Get breadcrumb trail for drill-down navigation - simplified version
 */
function getBreadcrumbs2($pdo, $id, $type)
{
    $breadcrumbs = [];

    try {
        if ($type === 'country') {
            // Get country and its region
            $stmt = $pdo->prepare("
                SELECT c.country_id, c.country_name, c.region_id, r.region_name 
                FROM public.countries c
                LEFT JOIN public.regions r ON c.region_id = r.region_id
                WHERE c.country_id = ?
            ");
            $stmt->execute([$id]);
            $country = $stmt->fetch();

            if ($country && !empty($country)) {
                if (!empty($country['region_id'])) {
                    $breadcrumbs[] = [
                        'id' => intval($country['region_id']),
                        'name' => $country['region_name'] ?? 'Unknown Region',
                        'type' => 'region'
                    ];
                }
                $breadcrumbs[] = [
                    'id' => intval($country['country_id']),
                    'name' => $country['country_name'] ?? 'Unknown Country',
                    'type' => 'country'
                ];
            }
        } elseif ($type === 'facility') {
            // Get facility, its country, and region
            $stmt = $pdo->prepare("
                SELECT f.facility_id, f.facility_name, f.country_id, c.country_name, c.region_id, r.region_name
                FROM public.facilities f
                LEFT JOIN public.countries c ON f.country_id = c.country_id
                LEFT JOIN public.regions r ON c.region_id = r.region_id
                WHERE f.facility_id = ?
            ");
            $stmt->execute([$id]);
            $facility = $stmt->fetch();

            if ($facility && !empty($facility)) {
                if (!empty($facility['region_id'])) {
                    $breadcrumbs[] = [
                        'id' => intval($facility['region_id']),
                        'name' => $facility['region_name'] ?? 'Unknown Region',
                        'type' => 'region'
                    ];
                }
                if (!empty($facility['country_id'])) {
                    $breadcrumbs[] = [
                        'id' => intval($facility['country_id']),
                        'name' => $facility['country_name'] ?? 'Unknown Country',
                        'type' => 'country'
                    ];
                }
                $breadcrumbs[] = [
                    'id' => intval($facility['facility_id']),
                    'name' => $facility['facility_name'] ?? 'Unknown Facility',
                    'type' => 'facility'
                ];
            }
        }
    } catch (Exception $e) {
        error_log("Error in getBreadcrumbs2: " . $e->getMessage());
    }

    return $breadcrumbs;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?> v<?php echo APP_VERSION; ?></title>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <!-- Custom CSS -->
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #038da9;
            --primary-hover: #00E1FF;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --info-color: #3b82f6;
            --bg-light: #f9fafb;
            --bg-white: #ffffff;
            --text-primary: #111827;
            --text-secondary: #6b7280;
            --border-color: #e5e7eb;
            --card-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }

        /* Dark theme variables */
        .dark {
            --primary-color: #00AACC;
            --primary-hover: #3BEDF6;
            --bg-light: #1f2937;
            --bg-white: #111827;
            --text-primary: #f9fafb;
            --text-secondary: #9ca3af;
            --border-color: #374151;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: var(--bg-light);
            color: var(--text-primary);
            line-height: 1.5;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Layout */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Navigation */
        .navbar {
            background-color: var(--bg-white);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 4rem;
            padding: 0 2rem;
            max-width: 1280px;
            margin: 0 auto;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        .logo-text {
            font-size: 0.70rem;
            font-weight: 600;
        }

        .version-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* Navigation Tabs */
        .nav-tabs {
            display: flex;
            gap: 0.5rem;
            margin-left: 2rem;
        }

        .nav-tabs-mobile {
            display: none;
            overflow-x: auto;
            padding: 0.5rem 1rem;
            gap: 0.5rem;
            border-top: 1px solid var(--border-color);
        }

        .tab-btn {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            border-radius: 0.375rem;
            color: var(--text-secondary);
            background: none;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .tab-btn:hover {
            background-color: var(--bg-light);
        }

        .tab-btn.active {
            background-color: var(--primary-color);
            color: white;
        }

        .tab-btn i {
            margin-right: 0.25rem;
        }

        /* Navbar Actions */
        .navbar-actions {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .action-btn {
            padding: 0.5rem;
            border-radius: 0.5rem;
            background-color: var(--bg-light);
            color: var(--text-secondary);
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }

        .action-btn:hover {
            background-color: var(--border-color);
        }

        /* Main Content */
        .main-content {
            padding: 2rem 0;
        }

        .page-header {
            margin-bottom: 1.5rem;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .page-subtitle {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        /* Cards */
        .card {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            box-shadow: var(--card-shadow);
            overflow: hidden;
        }

        .card-header {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--border-color);
            font-weight: 600;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
            border-left: 4px solid;
        }

        .stat-card.blue {
            border-left-color: var(--primary-color);
        }

        .stat-card.green {
            border-left-color: var(--success-color);
        }

        .stat-card.purple {
            border-left-color: #8b5cf6;
        }

        .stat-card.orange {
            border-left-color: var(--warning-color);
        }

        .stat-card.teal {
            border-left-color: #14b8a6;
        }

        .stat-card.indigo {
            border-left-color: #6366f1;
        }

        .stat-card.pink {
            border-left-color: #ec4899;
        }

        .stat-card.gray {
            border-left-color: var(--text-secondary);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .stat-icon {
            padding: 0.75rem;
            border-radius: 9999px;
        }

        .stat-icon.blue {
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--primary-color);
        }

        .stat-icon.green {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .stat-footer {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .stat-footer span {
            color: var(--success-color);
        }


        /* Breadcrumb Navigation */
        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 0.75rem 1rem;
            background-color: var(--bg-light);
            border-radius: 0.5rem;
            gap: 0.5rem;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
            cursor: pointer;
        }

        .breadcrumb-item a:hover {
            text-decoration: underline;
        }

        .breadcrumb-item i {
            margin: 0 0.5rem;
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .breadcrumb-item:last-child {
            color: var(--text-primary);
            font-weight: 500;
        }

        /* Drill-down buttons */
        .drill-down-btn {
            color: var(--primary-color);
            cursor: pointer;
            margin-right: 0.5rem;
            transition: color 0.2s;
        }

        .drill-down-btn:hover {
            color: var(--primary-hover);
        }

        /* Coverage stats badges */
        .coverage-excellent {
            background-color: rgba(16, 185, 129, 0.2);
            color: var(--success-color);
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-weight: 500;
        }

        .coverage-good {
            background-color: rgba(245, 158, 11, 0.2);
            color: var(--warning-color);
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-weight: 500;
        }

        .coverage-poor {
            background-color: rgba(239, 68, 68, 0.2);
            color: var(--danger-color);
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-weight: 500;
        }

        /* Search input with icon */
        .search-wrapper {
            position: relative;
            flex: 1;
        }

        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
        }

        .search-input {
            padding-left: 35px;
            width: 100%;
        }

        /* Filter tags */
        .filter-tag {
            display: inline-flex;
            align-items: center;
            background-color: var(--primary-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .filter-tag i {
            margin-left: 0.5rem;
            cursor: pointer;
        }

        .filter-tag i:hover {
            opacity: 0.8;
        }



        /* Tables */
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 0.75rem 1.5rem;
            background-color: var(--bg-light);
            color: var(--text-secondary);
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--border-color);
        }

        td {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-primary);
            font-size: 0.875rem;
        }

        tr:hover {
            background-color: var(--bg-light);
        }

        /* Status Badges */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .badge-warning {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
        }

        .badge-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .badge-info {
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--primary-color);
        }

        .badge-secondary {
            background-color: rgba(107, 114, 128, 0.1);
            color: var(--text-secondary);
        }

        /* Forms */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .form-control {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 0.375rem;
            background-color: var(--bg-white);
            color: var(--text-primary);
            font-size: 0.875rem;
            transition: border-color 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-success {
            background-color: var(--success-color);
            color: white;
        }

        .btn-success:hover {
            background-color: #059669;
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        .btn-warning {
            background-color: var(--warning-color);
            color: white;
        }

        .btn-warning:hover {
            background-color: #d97706;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-primary);
        }

        .btn-outline:hover {
            background-color: var(--bg-light);
        }

        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }

        .btn-block {
            width: 100%;
            justify-content: center;
        }

        /* Grid Layouts */
        .grid {
            display: grid;
            gap: 1.5rem;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, 1fr);
        }

        @media (max-width: 768px) {

            .grid-cols-2,
            .grid-cols-3,
            .grid-cols-4 {
                grid-template-columns: 1fr;
            }
        }

        /* Charts */
        .chart-container {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            max-width: 800px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background-color: var(--bg-white);
        }

        .modal-header h2 {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            color: var(--text-secondary);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .modal-close:hover {
            color: var(--text-primary);
        }

        .modal-body {
            padding: 1.5rem;
        }

        /* Loading Overlay */
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .loading-overlay.active {
            display: flex;
        }

        .loading-content {
            background-color: var(--bg-white);
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
        }

        .spinner {
            border: 3px solid var(--border-color);
            border-top-color: var(--primary-color);
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Toast Notifications */
        .toast-container {
            position: fixed;
            top: 5rem;
            right: 1rem;
            z-index: 1500;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .toast {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            padding: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-left: 4px solid;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            transform: translateX(100%);
            transition: transform 0.3s;
            max-width: 350px;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.success {
            border-left-color: var(--success-color);
        }

        .toast.error {
            border-left-color: var(--danger-color);
        }

        .toast.info {
            border-left-color: var(--primary-color);
        }

        .toast-icon {
            font-size: 1.25rem;
        }

        .toast.success .toast-icon {
            color: var(--success-color);
        }

        .toast.error .toast-icon {
            color: var(--danger-color);
        }

        .toast.info .toast-icon {
            color: var(--primary-color);
        }

        .toast-content {
            flex: 1;
        }

        .toast-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .toast-message {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .toast-close {
            background: none;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        .pagination-info {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .pagination-buttons {
            display: flex;
            gap: 0.5rem;
        }

        /* Function Buttons */
        .function-btn {
            width: 100%;
            text-align: left;
            padding: 0.75rem 1rem;
            background-color: var(--bg-light);
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 0.5rem;
        }

        .function-btn:hover {
            background-color: var(--border-color);
        }

        .function-btn.selected {
            background-color: var(--primary-color);
            color: white;
        }

        .function-btn .function-name {
            font-weight: 500;
            display: block;
        }

        .function-btn .function-desc {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .function-btn.selected .function-desc {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Code Display */
        .code-block {
            background-color: #1f2937;
            color: #34d399;
            padding: 1rem;
            border-radius: 0.5rem;
            font-family: monospace;
            font-size: 0.875rem;
            overflow-x: auto;
        }

        /* Utilities */
        .hidden {
            display: none !important;
        }

        .flex {
            display: flex;
        }

        .items-center {
            align-items: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .gap-4 {
            gap: 1rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-xs {
            font-size: 0.75rem;
        }

        .text-success {
            color: var(--success-color);
        }

        .text-danger {
            color: var(--danger-color);
        }

        .text-warning {
            color: var(--warning-color);
        }

        .text-muted {
            color: var(--text-secondary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-tabs {
                display: none;
            }

            .nav-tabs-mobile {
                display: flex;
            }

            .container {
                padding: 0 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Theme Initialization -->
    <script>
        (function() {
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
                if (!('theme' in localStorage)) {
                    localStorage.theme = 'light';
                }
            }
        })();
    </script>
</head>

<body>
    <!-- Help Modal -->
    <div id="helpModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>❔Help</h2>
                <button class="modal-close" onclick="closeHelpModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div id="helpContent" class="code-block" style="background-color: var(--bg-white); color: var(--text-primary);">
                    <div class="text-center">Loading README.md...</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-content">
            <div class="navbar-left">
                <div class="logo">
                    <!--<i class="fas fa-chart-line logo-icon"></i>-->
                    <img src="/app/images/lifebox.svg" width="33px"></img>
                    <span class="logo-text"><?php echo APP_NAME; ?></span>
                    <span class="version-badge">v<?php echo APP_VERSION; ?></span>
                </div>

                <!-- Desktop Tabs -->
                <div class="nav-tabs">
                    <button onclick="switchTab('dashboard')" class="tab-btn active" data-tab="dashboard">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </button>
                    <button onclick="switchTab('jobs')" class="tab-btn" data-tab="jobs">
                        <i class="fas fa-tasks"></i> Jobs
                    </button>
                    <button onclick="switchTab('logs')" class="tab-btn" data-tab="logs">
                        <i class="fas fa-history"></i> Logs
                    </button>
                    <button onclick="switchTab('analytics')" class="tab-btn" data-tab="analytics">
                        <i class="fas fa-calculator"></i> Analytics
                    </button>
                    <button onclick="switchTab('coverage')" class="tab-btn" data-tab="coverage">
                        <i class="fas fa-chart-pie"></i> Coverage
                    </button>
                    <button onclick="switchTab('functions')" class="tab-btn" data-tab="functions">
                        <i class="fas fa-code"></i> Functions
                    </button>
                    <button onclick="switchTab('cleanup')" class="tab-btn" data-tab="cleanup">
                        <i class="fas fa-trash"></i> Cleanup
                    </button>
                    <button onclick="switchTab('system')" class="tab-btn" data-tab="system">
                        <i class="fas fa-heartbeat"></i> System
                    </button>
                </div>
            </div>

            <div class="navbar-actions">
                <button onclick="openHelpModal()" class="action-btn" title="Help">
                    <i class="fas fa-question-circle"></i>
                </button>
                <button onclick="toggleTheme()" class="action-btn" id="themeToggle" title="Toggle theme">
                    <i class="fas fa-sun" id="lightIcon"></i>
                    <i class="fas fa-moon hidden" id="darkIcon"></i>
                </button>
                <button onclick="refreshCurrentTab()" class="action-btn" title="Refresh">
                    <i class="fas fa-sync-alt"></i>
                </button>
                <button onclick="toggleAutoRefresh()" class="action-btn" id="autoRefreshBtn" title="Auto-refresh">
                    <i class="fas fa-play" id="autoRefreshIcon"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Tabs -->
        <div class="nav-tabs-mobile">
            <button onclick="switchTab('dashboard')" class="tab-btn active" data-tab="dashboard">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </button>
            <button onclick="switchTab('jobs')" class="tab-btn" data-tab="jobs">
                <i class="fas fa-tasks"></i> Jobs
            </button>
            <button onclick="switchTab('logs')" class="tab-btn" data-tab="logs">
                <i class="fas fa-history"></i> Logs
            </button>
            <button onclick="switchTab('analytics')" class="tab-btn" data-tab="analytics">
                <i class="fas fa-calculator"></i> Analytics
            </button>
            <button onclick="switchTab('coverage')" class="tab-btn" data-tab="coverage">
                <i class="fas fa-chart-pie"></i> Coverage
            </button>
            <button onclick="switchTab('functions')" class="tab-btn" data-tab="functions">
                <i class="fas fa-code"></i> Functions
            </button>
            <button onclick="switchTab('cleanup')" class="tab-btn" data-tab="cleanup">
                <i class="fas fa-trash"></i> Cleanup
            </button>
            <button onclick="switchTab('system')" class="tab-btn" data-tab="system">
                <i class="fas fa-heartbeat"></i> System
            </button>
        </div>
    </nav>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay">
        <div class="loading-content">
            <div class="spinner"></div>
            <p id="loadingMessage">Loading...</p>
        </div>
    </div>

    <!-- Toast Container -->
    <div id="toastContainer" class="toast-container"></div>

    <!-- Main Content -->
    <main class="container main-content">
        <!-- Dashboard Tab -->
        <div id="dashboardTab" class="tab-content">
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <p class="page-subtitle">Real-time overview of PMI system status</p>
            </div>

            <!-- Stats Cards - Row 1 -->
            <div class="stats-grid">
                <div class="stat-card blue">
                    <div class="stat-header">
                        <span class="stat-label">Total Jobs</span>
                        <span class="stat-icon blue"><i class="fas fa-tasks"></i></span>
                    </div>
                    <div class="stat-value" id="statTotalJobs">-</div>
                    <div class="stat-footer">
                        <span id="statCompletedJobs">-</span> completed |
                        <span id="statPendingJobs">-</span> pending |
                        <span id="statFailedJobs">-</span> failed
                    </div>
                </div>

                <div class="stat-card green">
                    <div class="stat-header">
                        <span class="stat-label">Indicators</span>
                        <span class="stat-icon green"><i class="fas fa-chart-line"></i></span>
                    </div>
                    <div class="stat-value" id="statTotalIndicators">-</div>
                    <div class="stat-footer">
                        <span id="statActiveIndicators">-</span> active |
                        <span id="statIndicatorGroups">-</span> groups
                    </div>
                </div>

                <div class="stat-card purple">
                    <div class="stat-header">
                        <span class="stat-label">Datasets</span>
                        <span class="stat-icon purple"><i class="fas fa-database"></i></span>
                    </div>
                    <div class="stat-value" id="statTotalDatasets">-</div>
                    <div class="stat-footer">
                        <span id="statActiveDatasets">-</span> active
                    </div>
                </div>

                <div class="stat-card teal">
                    <div class="stat-header">
                        <span class="stat-label">Data Elements</span>
                        <span class="stat-icon teal"><i class="fas fa-cubes"></i></span>
                    </div>
                    <div class="stat-value" id="statDataElements">-</div>
                    <div class="stat-footer">
                        <span id="statDataElementsWithValues">-</span> with values
                    </div>
                </div>

            </div>

            <!-- Stats Cards - Row 2 -->
            <div class="stats-grid">
                <div class="stat-card gray">
                    <div class="stat-header">
                        <span class="stat-label">Organization Units</span>
                        <span class="stat-icon gray"><i class="fas fa-building"></i></span>
                    </div>
                    <div class="stat-value" id="statTotalOrgs">-</div>
                    <div class="stat-footer">
                        <span id="statRegions">-</span> regions |
                        <span id="statCountries">-</span> countries |
                        <span id="statFacilities">-</span> facilities
                    </div>
                </div>

                <div class="stat-card orange">
                    <div class="stat-header">
                        <span class="stat-label">Actuals</span>
                        <span class="stat-icon orange"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <div class="stat-value" id="statTotalActuals">-</div>
                    <div class="stat-footer">
                        <span id="statActualsWithValues">-</span> with values |
                        <span id="statYearsWithData">-</span> years
                    </div>
                </div>

                <div class="stat-card pink">
                    <div class="stat-header">
                        <span class="stat-label">Logs (7 days)</span>
                        <span class="stat-icon pink"><i class="fas fa-history"></i></span>
                    </div>
                    <div class="stat-value" id="statTotalLogs">-</div>
                    <div class="stat-footer">
                        <span class="text-success" id="statSuccessLogs">-</span> success |
                        <span class="text-danger" id="statErrorLogs">-</span> errors
                    </div>
                </div>

                <div class="stat-card indigo">
                    <div class="stat-header">
                        <span class="stat-label">Avg Execution</span>
                        <span class="stat-icon indigo"><i class="fas fa-clock"></i></span>
                    </div>
                    <div class="stat-value" id="statAvgExecTime">-</div>
                    <div class="stat-footer">
                        <span id="statLastCalculation">-</span>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-2" style="margin-bottom: 2rem;">
                <div class="chart-container">
                    <h3 style="margin-bottom: 1rem; font-size: 1.125rem;">Job Status Distribution</h3>
                    <canvas id="jobStatusChart" height="200"></canvas>
                </div>
                <div class="chart-container">
                    <h3 style="margin-bottom: 1rem; font-size: 1.125rem;">Recent Activity (7 days)</h3>
                    <canvas id="activityChart" height="200"></canvas>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="card">
                <div class="card-header">Recent Activity</div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Timestamp</th>
                                <th>Type</th>
                                <th>Period</th>
                                <th>Status</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody id="recentActivityTable">
                            <tr>
                                <td colspan="5" style="text-align: center;">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Jobs Tab -->
        <div id="jobsTab" class="tab-content hidden">
            <div class="page-header">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h1 class="page-title">Job Management</h1>
                        <p class="page-subtitle">Monitor and manage calculation jobs</p>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <select id="jobStatusFilter" class="form-control" style="width: auto;" onchange="loadJobs()">
                            <option value="all">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="completed">Completed</option>
                            <option value="failed">Failed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                        <button onclick="loadJobs()" class="btn btn-primary">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
            </div>

            <!-- Jobs Table -->
            <div class="card">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Indicator</th>
                                <th>Period</th>
                                <th>Organization</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Attempts</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="jobsTableBody">
                            <tr>
                                <td colspan="9" style="text-align: center;">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <div class="pagination-info" id="jobsPaginationInfo"></div>
                    <div class="pagination-buttons">
                        <button onclick="loadJobs('prev')" class="btn btn-outline btn-sm">Previous</button>
                        <button onclick="loadJobs('next')" class="btn btn-outline btn-sm">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logs Tab -->
        <div id="logsTab" class="tab-content hidden">
            <div class="page-header">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h1 class="page-title">Calculation Logs</h1>
                        <p class="page-subtitle">View and filter calculation history</p>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <select id="logStatusFilter" class="form-control" style="width: auto;" onchange="loadLogs()">
                            <option value="all">All Status</option>
                            <option value="Completed">Completed</option>
                            <option value="Error">Error</option>
                            <option value="Started">Started</option>
                        </select>
                        <select id="logDaysFilter" class="form-control" style="width: auto;" onchange="loadLogs()">
                            <option value="1">Last 24 hours</option>
                            <option value="7" selected>Last 7 days</option>
                            <option value="30">Last 30 days</option>
                            <option value="90">Last 90 days</option>
                        </select>
                        <button onclick="loadLogs()" class="btn btn-primary">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
            </div>

            <!-- Logs Table -->
            <div class="card">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Type</th>
                                <th>Indicator</th>
                                <th>Period</th>
                                <th>Organization</th>
                                <th>Value</th>
                                <th>Time (ms)</th>
                                <th>Status</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody id="logsTableBody">
                            <tr>
                                <td colspan="9" style="text-align: center;">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <div class="pagination-info" id="logsPaginationInfo"></div>
                    <div class="pagination-buttons">
                        <button onclick="loadLogs('prev')" class="btn btn-outline btn-sm">Previous</button>
                        <button onclick="loadLogs('next')" class="btn btn-outline btn-sm">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics Tab -->
        <div id="analyticsTab" class="tab-content hidden">
            <div class="page-header">
                <h1 class="page-title">Analytics Runner</h1>
                <p class="page-subtitle">Run PMI calculations for specific periods and organization units</p>
            </div>

            <div class="grid grid-cols-3" style="grid-template-columns: 1fr 2fr;">
                <!-- Analytics Form -->
                <div class="card">
                    <div class="card-header">Run Analytics</div>
                    <div class="card-body">
                        <form id="analyticsForm" onsubmit="runAnalytics(event)">
                            <div class="form-group">
                                <label class="form-label">Period Type</label>
                                <select name="period_type" class="form-control">
                                    <option value="Yearly">Yearly</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Monthly">Monthly</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Year</label>
                                <select name="year" id="yearSelect" class="form-control">
                                    <!-- Will be populated by JS -->
                                </select>
                            </div>

                            <div id="quarterField" class="form-group">
                                <label class="form-label">Quarter</label>
                                <select name="quarter" class="form-control">
                                    <option value="">-- Any --</option>
                                    <option value="1">Q1</option>
                                    <option value="2">Q2</option>
                                    <option value="3">Q3</option>
                                    <option value="4">Q4</option>
                                </select>
                            </div>

                            <div id="monthField" class="form-group" style="display: none;">
                                <label class="form-label">Month</label>
                                <select name="month" class="form-control">
                                    <option value="">-- Any --</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Region</label>
                                <select name="region_id" class="form-control">
                                    <option value="">-- All Regions --</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <select name="country_id" class="form-control">
                                    <option value="">-- All Countries --</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Facility</label>
                                <select name="facility_id" class="form-control">
                                    <option value="">-- All Facilities --</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Indicators</label>
                                <select name="indicator_ids" multiple class="form-control" size="5">
                                    <!-- Will be populated by JS -->
                                </select>
                                <p class="text-xs text-muted" style="margin-top: 0.25rem;">Hold Ctrl/Cmd to select multiple</p>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-play"></i> Run Analytics
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Results Display -->
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span>Results</span>
                            <span class="text-sm text-muted" id="analyticsExecutionTime"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Indicator ID</th>
                                        <th>Result</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="analyticsResultsTable">
                                    <tr>
                                        <td colspan="3" style="text-align: center;">No results yet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="analyticsSummary" class="card" style="margin-top: 1rem; padding: 1rem; background-color: var(--bg-light);">
                            <p class="text-sm text-muted">Select parameters and run analytics to see results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coverage Tab -->
        <div id="coverageTab" class="tab-content hidden">
            <div class="page-header">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <h1 class="page-title">Calculation Coverage</h1>
                        <p class="page-subtitle">Monitor calculation coverage across organization units</p>
                    </div>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <select id="coverageYear" class="form-control" style="width: auto;" onchange="loadCoverage()">
                            <!-- Will be populated by JS -->
                        </select>
                        <select id="coverageLevel" class="form-control" style="width: auto;" onchange="loadCoverage()">
                            <option value="all">All Levels</option>
                            <option value="region">Regions Only</option>
                            <option value="country">Countries Only</option>
                            <option value="facility">Facilities Only</option>
                        </select>
                        <button onclick="loadCoverage()" class="btn btn-primary">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
            </div>

            <!-- Breadcrumb Navigation -->
            <div id="breadcrumbContainer" class="breadcrumb" style="margin-bottom: 1rem; display: none;">
                <!-- Will be populated by JS -->
            </div>

            <!-- Summary Cards -->
            <div class="stats-grid">
                <div class="stat-card blue">
                    <div class="stat-header">
                        <span class="stat-label">Year</span>
                    </div>
                    <div class="stat-value" id="coverageYearDisplay">-</div>
                </div>
                <div class="stat-card green">
                    <div class="stat-header">
                        <span class="stat-label">Total Expected</span>
                    </div>
                    <div class="stat-value" id="totalExpected">-</div>
                </div>
                <div class="stat-card orange">
                    <div class="stat-header">
                        <span class="stat-label">Total Actual</span>
                    </div>
                    <div class="stat-value" id="totalActual">-</div>
                </div>
                <div class="stat-card purple">
                    <div class="stat-header">
                        <span class="stat-label">Overall Coverage</span>
                    </div>
                    <div class="stat-value" id="overallCoverage">-</div>
                </div>
            </div>

            <!-- Search and Filter Bar -->
            <div class="card" style="margin-bottom: 1.5rem;">
                <div class="card-body">
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                        <div style="flex: 1; min-width: 250px;">
                            <div style="position: relative;">
                                <i class="fas fa-search" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: var(--text-secondary);"></i>
                                <input type="text" id="coverageSearch" class="form-control"
                                    placeholder="Search by name..."
                                    style="padding-left: 35px;"
                                    onkeyup="if(event.key === 'Enter') loadCoverage()">
                            </div>
                        </div>
                        <div>
                            <button onclick="loadCoverage()" class="btn btn-primary">
                                <i class="fas fa-search"></i> Search
                            </button>
                            <button onclick="clearCoverageFilters()" class="btn btn-outline">
                                <i class="fas fa-times"></i> Clear
                            </button>
                        </div>
                        <div style="margin-left: auto;">
                            <select id="coveragePageSize" class="form-control" style="width: auto;" onchange="loadCoverage()">
                                <option value="25">25 per page</option>
                                <option value="50" selected>50 per page</option>
                                <option value="100">100 per page</option>
                                <option value="250">250 per page</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coverage Table -->
            <div class="card">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Name</th>
                                <th>Yearly</th>
                                <th>Quarterly</th>
                                <th>Monthly</th>
                                <th>Total</th>
                                <th>Coverage</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="coverageTableBody">
                            <tr>
                                <td colspan="8" style="text-align: center;">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <div class="pagination-info" id="coveragePaginationInfo"></div>
                    <div class="pagination-buttons">
                        <button onclick="loadCoverage('prev')" class="btn btn-outline btn-sm" id="coveragePrevBtn">Previous</button>
                        <span id="coveragePageInfo" style="margin: 0 1rem;"></span>
                        <button onclick="loadCoverage('next')" class="btn btn-outline btn-sm" id="coverageNextBtn">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Functions Tab -->
        <div id="functionsTab" class="tab-content hidden">
            <div class="page-header">
                <h1 class="page-title">Function Executor</h1>
                <p class="page-subtitle">Execute PMI functions directly with real-time debugging</p>
            </div>

            <div class="grid grid-cols-2">
                <!-- Function Selection -->
                <div class="card">
                    <div class="card-header">Select Function</div>
                    <div class="card-body">
                        <div style="max-height: 400px; overflow-y: auto; margin-bottom: 1rem;">
                            <button onclick="selectFunction('calculate_indicator_formula')" id="btn-calculate_indicator_formula" class="function-btn">
                                <span class="function-name">calculate_indicator_formula</span>
                                <span class="function-desc">Calculate indicator value using formula</span>
                            </button>
                            <button onclick="selectFunction('process_calculation_jobs')" id="btn-process_calculation_jobs" class="function-btn">
                                <span class="function-name">process_calculation_jobs</span>
                                <span class="function-desc">Process pending calculation jobs</span>
                            </button>
                            <button onclick="selectFunction('refresh_all_calculations')" id="btn-refresh_all_calculations" class="function-btn">
                                <span class="function-name">refresh_all_calculations</span>
                                <span class="function-desc">Refresh all calculations for a year</span>
                            </button>
                            <button onclick="selectFunction('get_data_value')" id="btn-get_data_value" class="function-btn">
                                <span class="function-name">get_data_value</span>
                                <span class="function-desc">Get data value for a data element</span>
                            </button>
                            <button onclick="selectFunction('update_pmi_actuals_from_calculations')" id="btn-update_pmi_actuals_from_calculations" class="function-btn">
                                <span class="function-name">update_pmi_actuals_from_calculations</span>
                                <span class="function-desc">Update actuals from calculations</span>
                            </button>
                            <button onclick="selectFunction('scheduled_pmi_calculations')" id="btn-scheduled_pmi_calculations" class="function-btn">
                                <span class="function-name">scheduled_pmi_calculations</span>
                                <span class="function-desc">Run scheduled calculations</span>
                            </button>
                            <button onclick="selectFunction('initialize_existing_indicators')" id="btn-initialize_existing_indicators" class="function-btn">
                                <span class="function-name">initialize_existing_indicators</span>
                                <span class="function-desc">Initialize existing indicators</span>
                            </button>
                            <button onclick="selectFunction('cleanup_old_calculation_data')" id="btn-cleanup_old_calculation_data" class="function-btn">
                                <span class="function-name">cleanup_old_calculation_data</span>
                                <span class="function-desc">Clean up old calculation data</span>
                            </button>
                        </div>

                        <form id="functionForm" onsubmit="runFunction(event)">
                            <div id="functionParams" class="form-group">
                                <!-- Dynamic parameters will be inserted here -->
                            </div>
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fas fa-play"></i> Execute Function
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Results Display -->
                <div class="card">
                    <div class="card-header">Execution Results</div>
                    <div class="card-body">
                        <div id="functionResults" class="code-block" style="min-height: 300px;">
                            Select a function and execute to see results...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cleanup Tab -->
        <div id="cleanupTab" class="tab-content hidden">
            <div class="page-header">
                <h1 class="page-title">Cleanup Tools</h1>
                <p class="page-subtitle">Manage and clean up jobs, logs, and actuals</p>
            </div>

            <div class="grid grid-cols-2">
                <!-- Clean Jobs -->
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-tasks" style="color: var(--primary-color); margin-right: 0.5rem;"></i>
                        Clean Jobs
                    </div>
                    <div class="card-body">
                        <form onsubmit="cleanupJobs(event)">
                            <div class="form-group">
                                <label class="form-label">Clean Type</label>
                                <select name="clear_type" class="form-control">
                                    <option value="completed">Completed jobs older than</option>
                                    <option value="failed">All failed jobs</option>
                                    <option value="all">All jobs (except processing)</option>
                                    <option value="by_status">By status</option>
                                </select>
                            </div>
                            <div class="form-group cleanup-days-field">
                                <label class="form-label">Days Old</label>
                                <input type="number" name="days" value="30" min="1" class="form-control">
                            </div>
                            <div class="form-group cleanup-status-field" style="display: none;">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="pending">Pending</option>
                                    <option value="processing">Processing</option>
                                    <option value="completed">Completed</option>
                                    <option value="failed">Failed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash"></i> Clean Jobs
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Clean Logs -->
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-history" style="color: #8b5cf6; margin-right: 0.5rem;"></i>
                        Clean Logs
                    </div>
                    <div class="card-body">
                        <form onsubmit="cleanupLogs(event)">
                            <div class="form-group">
                                <label class="form-label">Clean Type</label>
                                <select name="clear_type" class="form-control">
                                    <option value="older_than">Older than</option>
                                    <option value="by_status">By status</option>
                                    <option value="all">All logs</option>
                                </select>
                            </div>
                            <div class="form-group cleanup-days-field">
                                <label class="form-label">Days</label>
                                <input type="number" name="days" value="30" min="1" class="form-control">
                            </div>
                            <div class="form-group cleanup-status-field" style="display: none;">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="Completed">Completed</option>
                                    <option value="Error">Error</option>
                                    <option value="Started">Started</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash"></i> Clean Logs
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Clean Actuals -->
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-line" style="color: var(--success-color); margin-right: 0.5rem;"></i>
                        Clean Actuals
                    </div>
                    <div class="card-body">
                        <form onsubmit="cleanupActuals(event)">
                            <div class="form-group">
                                <label class="form-label">Year</label>
                                <select name="year" class="form-control" id="cleanActualsYear">
                                    <!-- Will be populated by JS -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Indicator (optional)</label>
                                <select name="indicator_id" class="form-control">
                                    <option value="">All Indicators</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Period Type (optional)</label>
                                <select name="period_type" class="form-control">
                                    <option value="">All Types</option>
                                    <option value="Yearly">Yearly</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Monthly">Monthly</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash"></i> Clean Actuals
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Reset Sequences -->
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-sync-alt" style="color: var(--warning-color); margin-right: 0.5rem;"></i>
                        Reset Sequences
                    </div>
                    <div class="card-body">
                        <form onsubmit="resetSequence(event)">
                            <div class="form-group">
                                <label class="form-label">Table</label>
                                <select name="table" class="form-control">
                                    <option value="lbpmi_calculation_jobs">Calculation Jobs (job_id)</option>
                                    <option value="lbpmi_calculation_log">Calculation Logs (log_id)</option>
                                    <option value="lbpmi_indicator_actuals">Indicator Actuals (actual_id)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block">
                                <i class="fas fa-sync-alt"></i> Reset Sequence
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Duplicate Management -->
            <div class="card" style="margin-top: 1.5rem;">
                <div class="card-header">
                    <i class="fas fa-copy" style="color: var(--warning-color); margin-right: 0.5rem;"></i>
                    Duplicate Management
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-2" style="margin-bottom: 1rem;">
                        <div style="padding: 1rem; background-color: var(--bg-light); border-radius: 0.5rem;">
                            <h4 style="font-weight: 500; margin-bottom: 0.5rem;">Jobs Duplicates</h4>
                            <div id="jobsDuplicateInfo" class="text-sm text-muted" style="margin-bottom: 0.75rem;">
                                Click find to check for duplicates
                            </div>
                            <div style="display: flex; gap: 0.5rem;">
                                <button onclick="findDuplicateJobs()" class="btn btn-primary btn-sm">
                                    <i class="fas fa-search"></i> Find
                                </button>
                                <button onclick="deduplicateJobs(false)" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Deduplicate
                                </button>
                                <button onclick="deduplicateJobs(true)" class="btn btn-warning btn-sm">
                                    <i class="fas fa-eye"></i> Dry Run
                                </button>
                            </div>
                        </div>

                        <div style="padding: 1rem; background-color: var(--bg-light); border-radius: 0.5rem;">
                            <h4 style="font-weight: 500; margin-bottom: 0.5rem;">Indicator Actuals Duplicates</h4>
                            <div id="actualsDuplicateInfo" class="text-sm text-muted" style="margin-bottom: 0.75rem;">
                                Click find to check for duplicates
                            </div>
                            <div style="display: flex; gap: 0.5rem;">
                                <button onclick="findDuplicateActuals()" class="btn btn-primary btn-sm">
                                    <i class="fas fa-search"></i> Find
                                </button>
                                <button onclick="deduplicateActuals(false)" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Deduplicate
                                </button>
                                <button onclick="deduplicateActuals(true)" class="btn btn-warning btn-sm">
                                    <i class="fas fa-eye"></i> Dry Run
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Results display -->
                    <div id="duplicateResults" class="hidden" style="margin-top: 1rem;">
                        <h4 style="font-weight: 500; margin-bottom: 0.5rem;">Results</h4>
                        <pre class="code-block" id="duplicateResultsContent" style="background-color: #1f2937; color: #34d399;"></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Tab -->
        <div id="systemTab" class="tab-content hidden">
            <div class="page-header">
                <h1 class="page-title">System Health</h1>
                <p class="page-subtitle">Monitor system status and performance</p>
            </div>

            <div class="grid grid-cols-2">
                <!-- Health Status -->
                <div class="card">
                    <div class="card-header">Health Status</div>
                    <div class="card-body">
                        <div id="healthStatus" style="display: flex; flex-direction: column; gap: 1rem;">
                            <div class="text-muted">Loading health data...</div>
                        </div>
                    </div>
                </div>

                <!-- Table Sizes -->
                <div class="card">
                    <div class="card-header">Table Sizes</div>
                    <div class="card-body">
                        <div id="tableSizes" style="display: flex; flex-direction: column; gap: 0.75rem;">
                            <div class="text-muted">Loading table sizes...</div>
                        </div>
                    </div>
                </div>

                <!-- Performance Metrics -->
                <div class="card" style="grid-column: span 2;">
                    <div class="card-header">Performance Metrics</div>
                    <div class="card-body">
                        <canvas id="performanceChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Global state
        let currentTab = 'dashboard';
        let autoRefresh = false;
        let refreshInterval = null;
        let jobsOffset = 0;
        let logsOffset = 0;
        let jobsLimit = 50;
        let logsLimit = 50;
        let chartInstances = {};
        let currentFunction = null;

        // Theme toggle function
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
            // Update icons
            document.getElementById('lightIcon').classList.toggle('hidden', document.documentElement.classList.contains('dark'));
            document.getElementById('darkIcon').classList.toggle('hidden', !document.documentElement.classList.contains('dark'));
        }

        // Update theme icons
        function updateThemeIcons() {
            const isDark = document.documentElement.classList.contains('dark');
            document.getElementById('lightIcon').classList.toggle('hidden', isDark);
            document.getElementById('darkIcon').classList.toggle('hidden', !isDark);
        }

        // Initialize on load
        document.addEventListener('DOMContentLoaded', function() {
            // Set initial icon visibility
            const isDark = document.documentElement.classList.contains('dark');
            document.getElementById('lightIcon').classList.toggle('hidden', isDark);
            document.getElementById('darkIcon').classList.toggle('hidden', !isDark);

            // Load initial data
            switchTab('dashboard');

            // Setup form listeners
            setupFormListeners();

            // Load dynamic selects
            loadYearOptions();
            loadOrganizationUnits();
            loadIndicators();
        });

        // Setup form listeners
        function setupFormListeners() {
            // Period type change in analytics form
            const periodTypeSelect = document.querySelector('select[name="period_type"]');
            if (periodTypeSelect) {
                periodTypeSelect.addEventListener('change', function() {
                    const periodType = this.value;
                    document.getElementById('quarterField').style.display = periodType === 'Quarterly' ? 'block' : 'none';
                    document.getElementById('monthField').style.display = periodType === 'Monthly' ? 'block' : 'none';
                });
            }

            // Cleanup type changes
            document.querySelectorAll('select[name="clear_type"]').forEach(select => {
                select.addEventListener('change', function() {
                    const form = this.closest('form');
                    const daysField = form.querySelector('.cleanup-days-field');
                    const statusField = form.querySelector('.cleanup-status-field');

                    if (this.value === 'completed' || this.value === 'older_than') {
                        daysField.style.display = 'block';
                        statusField.style.display = 'none';
                    } else if (this.value === 'by_status') {
                        daysField.style.display = 'none';
                        statusField.style.display = 'block';
                    } else {
                        daysField.style.display = 'none';
                        statusField.style.display = 'none';
                    }
                });
            });
        }

        // Load year options
        function loadYearOptions() {
            fetch('?action=get_periods')
                .then(res => {
                    if (!res.ok) throw new Error('Network response was not ok');
                    return res.json();
                })
                .then(data => {
                    if (data.success && data.data && data.data.years) {
                        const years = data.data.years;
                        const yearSelects = document.querySelectorAll('select[name="year"], #cleanActualsYear, #coverageYear');

                        yearSelects.forEach(select => {
                            if (!select) return;
                            select.innerHTML = '';
                            years.forEach(year => {
                                const option = document.createElement('option');
                                option.value = year;
                                option.textContent = year;
                                if (year === new Date().getFullYear()) {
                                    option.selected = true;
                                }
                                select.appendChild(option);
                            });
                        });
                    }
                })
                .catch(error => {
                    console.error('Error loading years:', error);
                    // Fallback to default years
                    const currentYear = new Date().getFullYear();
                    const yearSelects = document.querySelectorAll('select[name="year"], #cleanActualsYear, #coverageYear');
                    yearSelects.forEach(select => {
                        if (!select) return;
                        select.innerHTML = '';
                        for (let year = currentYear - 2; year <= currentYear + 2; year++) {
                            const option = document.createElement('option');
                            option.value = year;
                            option.textContent = year;
                            if (year === currentYear) {
                                option.selected = true;
                            }
                            select.appendChild(option);
                        }
                    });
                });
        }

        // Load organization units
        function loadOrganizationUnits() {
            fetch('?action=get_organization_units')
                .then(res => {
                    if (!res.ok) throw new Error('Network response was not ok');
                    return res.json();
                })
                .then(data => {
                    if (data.success) {
                        const orgUnits = data.data;

                        // Regions
                        const regionSelect = document.querySelector('select[name="region_id"]');
                        if (regionSelect) {
                            orgUnits.regions.forEach(region => {
                                const option = document.createElement('option');
                                option.value = region.region_id;
                                option.textContent = region.region_name;
                                regionSelect.appendChild(option);
                            });
                        }

                        // Countries
                        const countrySelect = document.querySelector('select[name="country_id"]');
                        if (countrySelect) {
                            orgUnits.countries.forEach(country => {
                                const option = document.createElement('option');
                                option.value = country.country_id;
                                option.textContent = country.country_name;
                                countrySelect.appendChild(option);
                            });
                        }

                        // Facilities
                        const facilitySelect = document.querySelector('select[name="facility_id"]');
                        if (facilitySelect) {
                            orgUnits.facilities.forEach(facility => {
                                const option = document.createElement('option');
                                option.value = facility.facility_id;
                                option.textContent = facility.facility_name;
                                facilitySelect.appendChild(option);
                            });
                        }
                    }
                })
                .catch(error => console.error('Error loading org units:', error));
        }

        // Load indicators
        function loadIndicators() {
            fetch('?action=get_indicators')
                .then(res => {
                    if (!res.ok) throw new Error('Network response was not ok');
                    return res.json();
                })
                .then(data => {
                    if (data.success) {
                        const indicators = data.data;

                        // Analytics form
                        const analyticsSelect = document.querySelector('select[name="indicator_ids"]');
                        if (analyticsSelect) {
                            indicators.forEach(indicator => {
                                const option = document.createElement('option');
                                option.value = indicator.indicator_id;
                                option.textContent = `${indicator.indicator_name} (${indicator.indicator_code})`;
                                analyticsSelect.appendChild(option);
                            });
                        }

                        // Cleanup actuals
                        const cleanupSelect = document.querySelector('select[name="indicator_id"]');
                        if (cleanupSelect) {
                            indicators.forEach(indicator => {
                                const option = document.createElement('option');
                                option.value = indicator.indicator_id;
                                option.textContent = `${indicator.indicator_name} (${indicator.indicator_code})`;
                                cleanupSelect.appendChild(option);
                            });
                        }
                    }
                })
                .catch(error => console.error('Error loading indicators:', error));
        }

        // Tab switching
        function switchTab(tab) {
            currentTab = tab;

            // Update tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.tab === tab) {
                    btn.classList.add('active');
                }
            });

            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected tab
            document.getElementById(tab + 'Tab').classList.remove('hidden');

            // Load tab-specific data
            switch (tab) {
                case 'dashboard':
                    loadDashboardData();
                    break;
                case 'jobs':
                    loadJobs();
                    break;
                case 'logs':
                    loadLogs();
                    break;
                case 'coverage':
                    initCoverageTab();
                    break;
                case 'system':
                    loadSystemHealth();
                    break;
            }
        }

        // Load dashboard data
        function loadDashboardData() {
            showLoading('Loading dashboard...');

            fetch('?action=get_dashboard_stats')
                .then(res => {
                    if (!res.ok) throw new Error('Network response was not ok');
                    return res.json();
                })
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        updateDashboardStats(data.data);
                    } else {
                        showToast('error', 'Error loading dashboard', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    console.error('Dashboard error:', error);
                    showToast('error', 'Error', 'Failed to load dashboard data');
                });
        }

        // Update dashboard stats
        function updateDashboardStats(stats) {
            // Update stat cards - Row 1
            document.getElementById('statTotalJobs').textContent = stats.jobs.total_jobs || 0;
            document.getElementById('statCompletedJobs').textContent = stats.jobs.completed_jobs || 0;
            document.getElementById('statPendingJobs').textContent = stats.jobs.pending_jobs || 0;
            document.getElementById('statFailedJobs').textContent = stats.jobs.failed_jobs || 0;

            document.getElementById('statTotalIndicators').textContent = stats.indicators.total_indicators || 0;
            document.getElementById('statActiveIndicators').textContent = `${stats.indicators.active_indicators || 0} active`;
            document.getElementById('statIndicatorGroups').textContent = stats.indicator_groups?.total_groups || 0;

            document.getElementById('statTotalDatasets').textContent = stats.datasets?.total_datasets || 0;
            document.getElementById('statActiveDatasets').textContent = `${stats.datasets?.active_datasets || 0} active`;

            document.getElementById('statTotalActuals').textContent = stats.actuals?.total_actuals || 0;
            document.getElementById('statActualsWithValues').textContent = stats.actuals?.actuals_with_values || 0;
            document.getElementById('statYearsWithData').textContent = stats.actuals?.years_with_data || 0;

            // Row 2
            document.getElementById('statDataElements').textContent = stats.data_elements.total_data_elements || 0;
            document.getElementById('statDataElementsWithValues').textContent = stats.data_elements.data_elements_with_values || 0;

            document.getElementById('statAvgExecTime').textContent = stats.logs.avg_execution_time ?
                Math.round(stats.logs.avg_execution_time) + ' ms' : '-';
            document.getElementById('statLastCalculation').textContent = stats.logs.last_calculation ?
                moment(stats.logs.last_calculation).fromNow() : '-';

            document.getElementById('statTotalLogs').textContent = stats.logs.total_logs || 0;
            document.getElementById('statSuccessLogs').textContent = stats.logs.success_logs || 0;
            document.getElementById('statErrorLogs').textContent = stats.logs.error_logs || 0;

            const totalOrgs = (stats.org_units.regions || 0) + (stats.org_units.countries || 0) + (stats.org_units.facilities || 0);
            document.getElementById('statTotalOrgs').textContent = totalOrgs;
            document.getElementById('statRegions').textContent = stats.org_units.regions || 0;
            document.getElementById('statCountries').textContent = stats.org_units.countries || 0;
            document.getElementById('statFacilities').textContent = stats.org_units.facilities || 0;

            // Create charts
            createJobStatusChart(stats.jobs);
            createActivityChart(stats.logs);

            // Update recent activity table
            updateRecentActivity(stats.recent_activity);
        }

        // Create job status chart
        function createJobStatusChart(jobs) {
            const ctx = document.getElementById('jobStatusChart').getContext('2d');

            if (chartInstances.jobStatus) {
                chartInstances.jobStatus.destroy();
            }

            chartInstances.jobStatus = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Completed', 'Pending', 'Processing', 'Failed', 'Other'],
                    datasets: [{
                        data: [
                            jobs.completed_jobs || 0,
                            jobs.pending_jobs || 0,
                            jobs.processing_jobs || 0,
                            jobs.failed_jobs || 0,
                            (jobs.total_jobs || 0) - (jobs.completed_jobs || 0) - (jobs.pending_jobs || 0) -
                            (jobs.processing_jobs || 0) - (jobs.failed_jobs || 0)
                        ],
                        backgroundColor: [
                            '#10b981',
                            '#f59e0b',
                            '#3b82f6',
                            '#ef4444',
                            '#6b7280'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Create activity chart
        function createActivityChart(logs) {
            const ctx = document.getElementById('activityChart').getContext('2d');

            if (chartInstances.activity) {
                chartInstances.activity.destroy();
            }

            // Generate last 7 days
            const labels = [];
            const successData = [];
            const errorData = [];

            for (let i = 6; i >= 0; i--) {
                const date = moment().subtract(i, 'days').format('MMM D');
                labels.push(date);
                successData.push(Math.floor(Math.random() * 20) + 5);
                errorData.push(Math.floor(Math.random() * 5));
            }

            chartInstances.activity = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                            label: 'Successful',
                            data: successData,
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4
                        },
                        {
                            label: 'Errors',
                            data: errorData,
                            borderColor: '#ef4444',
                            backgroundColor: 'rgba(239, 68, 68, 0.1)',
                            tension: 0.4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Update recent activity table
        function updateRecentActivity(activities) {
            const tbody = document.getElementById('recentActivityTable');

            if (!activities || activities.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" style="text-align: center;">No recent activity</td></tr>';
                return;
            }

            let html = '';
            activities.forEach(activity => {
                const statusClass = activity.status === 'Error' ? 'text-danger' :
                    activity.status === 'Completed' ? 'text-success' : 'text-warning';

                html += `
                    <tr>
                        <td>${moment(activity.calculation_timestamp).format('YYYY-MM-DD HH:mm:ss')}</td>
                        <td>${activity.calculation_type || '-'}</td>
                        <td>${activity.period_type || ''} ${activity.period_year || ''}</td>
                        <td><span class="badge ${statusClass}">${activity.status || '-'}</span></td>
                        <td>${activity.error_message || '-'}</td>
                    </tr>
                `;
            });

            tbody.innerHTML = html;
        }

        // Load jobs
        function loadJobs(direction = null) {
            if (direction === 'prev') {
                jobsOffset = Math.max(0, jobsOffset - jobsLimit);
            } else if (direction === 'next') {
                jobsOffset = jobsOffset + jobsLimit;
            }

            const status = document.getElementById('jobStatusFilter').value;

            showLoading('Loading jobs...');

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'get_jobs',
                        status: status,
                        limit: jobsLimit,
                        offset: jobsOffset
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        renderJobsTable(data.data);
                    } else {
                        showToast('error', 'Error loading jobs', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Render jobs table
        function renderJobsTable(data) {
            const tbody = document.getElementById('jobsTableBody');

            if (!data.jobs || data.jobs.length === 0) {
                tbody.innerHTML = '<tr><td colspan="9" style="text-align: center;">No jobs found</td></tr>';
                document.getElementById('jobsPaginationInfo').textContent = '0 jobs';
                return;
            }

            let html = '';
            data.jobs.forEach(job => {
                const statusClass = {
                    'completed': 'badge-success',
                    'failed': 'badge-danger',
                    'pending': 'badge-warning',
                    'processing': 'badge-info',
                    'cancelled': 'badge-secondary'
                } [job.status] || 'badge-secondary';

                const orgUnit = job.region_name || job.country_name || job.facility_name || 'Global';

                html += `
                    <tr>
                        <td>${job.job_id}</td>
                        <td>
                            <div style="font-weight: 500;">${job.indicator_name || 'Unknown'}</div>
                            <div class="text-xs text-muted">${job.indicator_code || ''}</div>
                        </td>
                        <td>
                            ${job.period_type || ''} ${job.period_year || ''}
                            ${job.period_quarter ? ' Q' + job.period_quarter : ''}
                            ${job.period_month ? ' M' + job.period_month : ''}
                        </td>
                        <td>${orgUnit}</td>
                        <td><span class="badge ${statusClass}">${job.status}</span></td>
                        <td>${job.priority || '-'}</td>
                        <td>${job.attempts || 0}</td>
                        <td>${moment(job.created_at).fromNow()}</td>
                        <td>
                            <button onclick="retryJob(${job.job_id})" class="btn btn-sm btn-outline" ${job.status !== 'failed' ? 'disabled' : ''}>
                                <i class="fas fa-redo"></i>
                            </button>
                            <button onclick="viewJobDetails(${job.job_id})" class="btn btn-sm btn-outline">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });

            tbody.innerHTML = html;

            document.getElementById('jobsPaginationInfo').textContent =
                `Showing ${data.offset + 1}-${Math.min(data.offset + data.limit, data.total)} of ${data.total} jobs`;
        }

        // Load logs
        function loadLogs(direction = null) {
            if (direction === 'prev') {
                logsOffset = Math.max(0, logsOffset - logsLimit);
            } else if (direction === 'next') {
                logsOffset = logsOffset + logsLimit;
            }

            const status = document.getElementById('logStatusFilter').value;
            const days = document.getElementById('logDaysFilter').value;

            showLoading('Loading logs...');

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'get_logs',
                        status: status,
                        days: days,
                        limit: logsLimit,
                        offset: logsOffset
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        renderLogsTable(data.data);
                    } else {
                        showToast('error', 'Error loading logs', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Render logs table
        function renderLogsTable(data) {
            const tbody = document.getElementById('logsTableBody');

            if (!data.logs || data.logs.length === 0) {
                tbody.innerHTML = '<tr><td colspan="9" style="text-align: center;">No logs found</td></tr>';
                document.getElementById('logsPaginationInfo').textContent = '0 logs';
                return;
            }

            let html = '';
            data.logs.forEach(log => {
                const statusClass = log.status === 'Error' ? 'badge-danger' :
                    log.status === 'Completed' ? 'badge-success' : 'badge-warning';

                const orgUnit = log.region_name || log.country_name || log.facility_name || 'Global';

                html += `
                    <tr>
                        <td>${moment(log.calculation_timestamp).format('YYYY-MM-DD HH:mm:ss')}</td>
                        <td>${log.calculation_type || '-'}</td>
                        <td>
                            <div style="font-weight: 500;">${log.indicator_name || '-'}</div>
                            <div class="text-xs text-muted">${log.indicator_code || ''}</div>
                        </td>
                        <td>
                            ${log.period_type || ''} ${log.period_year || ''}
                            ${log.period_quarter ? ' Q' + log.period_quarter : ''}
                            ${log.period_month ? ' M' + log.period_month : ''}
                        </td>
                        <td>${orgUnit}</td>
                        <td>${log.calculated_value || '-'}</td>
                        <td>${log.execution_time_ms || '-'}</td>
                        <td><span class="badge ${statusClass}">${log.status}</span></td>
                        <td class="text-sm" style="max-width: 200px;">${log.error_message || '-'}</td>
                    </tr>
                `;
            });

            tbody.innerHTML = html;

            document.getElementById('logsPaginationInfo').textContent =
                `Showing ${data.offset + 1}-${Math.min(data.offset + data.limit, data.total)} of ${data.total} logs`;
        }

        // Run analytics
        function runAnalytics(event) {
            event.preventDefault();

            const formData = new FormData(event.target);
            formData.append('action', 'run_analytics');

            showLoading('Running analytics...');

            fetch('', {
                    method: 'POST',
                    body: new URLSearchParams(formData)
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        displayAnalyticsResults(data.data);
                        showToast('success', 'Analytics completed', `Processed ${data.data.success_count} indicators`);
                    } else {
                        showToast('error', 'Analytics failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Display analytics results
        function displayAnalyticsResults(results) {
            const tbody = document.getElementById('analyticsResultsTable');
            const summary = document.getElementById('analyticsSummary');

            if (!results.results || results.results.length === 0) {
                tbody.innerHTML = '<tr><td colspan="3" style="text-align: center;">No results</td></tr>';
                return;
            }

            let html = '';
            results.results.forEach(result => {
                const statusClass = result.status === 'success' ? 'text-success' : 'text-danger';

                html += `
                    <tr>
                        <td>${result.indicator_id}</td>
                        <td class="code-block" style="background: none; padding: 0;">${result.result !== undefined ? result.result : '-'}</td>
                        <td class="${statusClass}">${result.status}</td>
                    </tr>
                `;
            });

            tbody.innerHTML = html;

            document.getElementById('analyticsExecutionTime').textContent =
                `Execution time: ${results.execution_time_seconds}s`;

            summary.innerHTML = `
                <p class="text-sm text-muted">
                    <strong>Summary:</strong> ${results.success_count} successful, ${results.error_count} failed
                </p>
                <p class="text-xs text-muted" style="margin-top: 0.25rem;">
                    Period: ${results.parameters.period_type} ${results.parameters.year}
                    ${results.parameters.quarter ? ' Q' + results.parameters.quarter : ''}
                    ${results.parameters.month ? ' M' + results.parameters.month : ''}
                </p>
            `;
        }

        // Run function
        function runFunction(event) {
            event.preventDefault();

            const formData = new FormData(event.target);
            formData.append('action', 'run_function');

            showLoading('Executing function...');

            fetch('', {
                    method: 'POST',
                    body: new URLSearchParams(formData)
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    const resultsDiv = document.getElementById('functionResults');

                    if (data.success) {
                        resultsDiv.innerHTML = `
                            <div style="color: #34d399; margin-bottom: 0.5rem;">✓ Function executed successfully</div>
                            <div style="color: #60a5fa; margin-bottom: 0.5rem;">Execution time: ${data.data.execution_time_ms} ms</div>
                            <div style="color: white; margin-top: 0.5rem;">Result:</div>
                            <pre style="color: #fbbf24; overflow-x: auto;">${JSON.stringify(data.data.result, null, 2)}</pre>
                        `;
                        showToast('success', 'Function executed', `Completed in ${data.data.execution_time_ms}ms`);
                    } else {
                        resultsDiv.innerHTML = `
                            <div style="color: #ef4444; margin-bottom: 0.5rem;">✗ Function execution failed</div>
                            <div style="color: white; margin-top: 0.5rem;">Error:</div>
                            <pre style="color: #f87171;">${data.error}</pre>
                        `;
                        showToast('error', 'Function failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    document.getElementById('functionResults').innerHTML = `
                        <div style="color: #ef4444;">✗ Error: ${error.message}</div>
                    `;
                });
        }

        // Select function
        function selectFunction(functionName) {
            // Remove selected class from all buttons
            document.querySelectorAll('.function-btn').forEach(btn => {
                btn.classList.remove('selected');
            });

            // Add selected class to current button
            const selectedBtn = document.getElementById('btn-' + functionName);
            if (selectedBtn) {
                selectedBtn.classList.add('selected');
            }

            currentFunction = functionName;

            const paramsMap = {
                'calculate_indicator_formula': [{
                        name: 'p_indicator_id',
                        type: 'number',
                        required: true
                    },
                    {
                        name: 'p_period_type',
                        type: 'text',
                        required: true,
                        options: ['Yearly', 'Quarterly', 'Monthly']
                    },
                    {
                        name: 'p_period_year',
                        type: 'number',
                        required: true
                    },
                    {
                        name: 'p_period_quarter',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_period_month',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_region_id',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_country_id',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_facility_id',
                        type: 'number',
                        required: false
                    }
                ],
                'refresh_all_calculations': [{
                        name: 'p_year',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_force',
                        type: 'boolean',
                        required: false
                    }
                ],
                'get_data_value': [{
                        name: 'p_data_element_id',
                        type: 'number',
                        required: true
                    },
                    {
                        name: 'p_period_type',
                        type: 'text',
                        required: true,
                        options: ['Yearly', 'Quarterly', 'Monthly']
                    },
                    {
                        name: 'p_period_year',
                        type: 'number',
                        required: true
                    },
                    {
                        name: 'p_period_quarter',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_period_month',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_region_id',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_country_id',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_facility_id',
                        type: 'number',
                        required: false
                    }
                ],
                'update_pmi_actuals_from_calculations': [{
                        name: 'p_year',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_clean_first',
                        type: 'boolean',
                        required: false
                    }
                ],
                'cleanup_old_calculation_data': [{
                        name: 'p_days',
                        type: 'number',
                        required: false
                    },
                    {
                        name: 'p_dry_run',
                        type: 'boolean',
                        required: false
                    }
                ],
                'process_calculation_jobs': [],
                'scheduled_pmi_calculations': [],
                'initialize_existing_indicators': []
            };

            const params = paramsMap[functionName] || [];

            let html = `<input type="hidden" name="function_name" value="${functionName}">`;

            if (params.length > 0) {
                params.forEach(param => {
                    const required = param.required ? 'required' : '';
                    let inputHtml = '';

                    if (param.options) {
                        inputHtml = `
                            <select name="${param.name}" class="form-control" ${required}>
                                ${param.options.map(opt => `<option value="${opt}">${opt}</option>`).join('')}
                            </select>
                        `;
                    } else if (param.type === 'boolean') {
                        inputHtml = `
                            <select name="${param.name}" class="form-control">
                                <option value="true">true</option>
                                <option value="false">false</option>
                            </select>
                        `;
                    } else {
                        inputHtml = `
                            <input type="${param.type}" name="${param.name}" class="form-control" ${required}>
                        `;
                    }

                    html += `
                        <div class="form-group">
                            <label class="form-label">
                                ${param.name} ${param.required ? '<span style="color: var(--danger-color);">*</span>' : ''}
                            </label>
                            ${inputHtml}
                        </div>
                    `;
                });
            } else {
                html += '<p class="text-sm text-muted">This function takes no parameters</p>';
            }

            document.getElementById('functionParams').innerHTML = html;
        }

        // Cleanup jobs
        function cleanupJobs(event) {
            event.preventDefault();

            if (!confirm('Are you sure you want to delete these jobs?')) {
                return;
            }

            const formData = new FormData(event.target);
            formData.append('action', 'clear_jobs');

            showLoading('Cleaning jobs...');

            fetch('', {
                    method: 'POST',
                    body: new URLSearchParams(formData)
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Cleanup completed', data.data.message);
                        loadJobs();
                    } else {
                        showToast('error', 'Cleanup failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Cleanup logs
        function cleanupLogs(event) {
            event.preventDefault();

            if (!confirm('Are you sure you want to delete these logs?')) {
                return;
            }

            const formData = new FormData(event.target);
            formData.append('action', 'clear_logs');

            showLoading('Cleaning logs...');

            fetch('', {
                    method: 'POST',
                    body: new URLSearchParams(formData)
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Cleanup completed', data.data.message);
                        loadLogs();
                    } else {
                        showToast('error', 'Cleanup failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Cleanup actuals
        function cleanupActuals(event) {
            event.preventDefault();

            if (!confirm('Are you sure you want to delete these actual records?')) {
                return;
            }

            const formData = new FormData(event.target);
            formData.append('action', 'clear_actuals');

            showLoading('Cleaning actuals...');

            fetch('', {
                    method: 'POST',
                    body: new URLSearchParams(formData)
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Cleanup completed', data.data.message);
                    } else {
                        showToast('error', 'Cleanup failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Reset sequence
        function resetSequence(event) {
            event.preventDefault();

            if (!confirm('Are you sure you want to reset this sequence?')) {
                return;
            }

            const formData = new FormData(event.target);
            formData.append('action', 'reset_sequence');

            showLoading('Resetting sequence...');

            fetch('', {
                    method: 'POST',
                    body: new URLSearchParams(formData)
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Sequence reset', data.data.message);
                    } else {
                        showToast('error', 'Reset failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Retry job
        function retryJob(jobId) {
            if (!confirm('Retry this job?')) {
                return;
            }

            showLoading('Retrying job...');

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'retry_job',
                        job_id: jobId
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Job retried', data.data.message);
                        loadJobs();
                    } else {
                        showToast('error', 'Retry failed', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // View job details
        function viewJobDetails(jobId) {
            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'get_job_details',
                        job_id: jobId
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert('Job details: ' + JSON.stringify(data.data, null, 2));
                    }
                });
        }

        // Load system health
        function loadSystemHealth() {
            fetch('?action=get_system_health')
                .then(res => {
                    if (!res.ok) throw new Error('Network response was not ok');
                    return res.json();
                })
                .then(data => {
                    if (data.success) {
                        displaySystemHealth(data.data);
                    } else {
                        console.error('Error loading system health:', data.error);
                    }
                })
                .catch(error => console.error('Error loading system health:', error));
        }

        // Display system health
        function displaySystemHealth(health) {
            const healthDiv = document.getElementById('healthStatus');
            const sizesDiv = document.getElementById('tableSizes');

            // Health status
            let healthHtml = '';
            for (let [key, value] of Object.entries(health)) {
                if (key === 'table_sizes') continue;

                const statusColor = value.status === 'healthy' ? 'text-success' :
                    value.status === 'warning' ? 'text-warning' : 'text-danger';

                healthHtml += `
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem; background-color: var(--bg-light); border-radius: 0.5rem;">
                        <span style="font-size: 0.875rem; font-weight: 500;">${key.replace(/_/g, ' ').toUpperCase()}</span>
                        <div style="text-align: right;">
                            <span class="${statusColor}" style="font-size: 0.875rem;">${value.status}</span>
                            <p class="text-xs text-muted" style="margin-top: 0.25rem;">${value.message || ''}</p>
                        </div>
                    </div>
                `;
            }

            healthDiv.innerHTML = healthHtml;

            // Table sizes
            if (health.table_sizes) {
                sizesDiv.innerHTML = Object.entries(health.table_sizes).map(([table, size]) => `
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem; background-color: var(--bg-light); border-radius: 0.5rem;">
                        <span style="font-size: 0.875rem; font-weight: 500;">${table.replace(/_/g, ' ').toUpperCase()}</span>
                        <span class="text-sm text-muted">${size}</span>
                    </div>
                `).join('');
            }
        }

        // Auto-refresh toggle
        function toggleAutoRefresh() {
            autoRefresh = !autoRefresh;

            const btn = document.getElementById('autoRefreshBtn');
            const icon = document.getElementById('autoRefreshIcon');

            if (autoRefresh) {
                btn.style.backgroundColor = 'rgba(16, 185, 129, 0.1)';
                icon.classList.remove('fa-play');
                icon.classList.add('fa-pause');

                refreshInterval = setInterval(() => {
                    refreshCurrentTab();
                }, 30000);

                showToast('success', 'Auto-refresh enabled', 'Refreshing every 30 seconds');
            } else {
                btn.style.backgroundColor = '';
                icon.classList.remove('fa-pause');
                icon.classList.add('fa-play');

                if (refreshInterval) {
                    clearInterval(refreshInterval);
                }

                showToast('info', 'Auto-refresh disabled', 'Manual refresh only');
            }
        }

        // Refresh current tab
        function refreshCurrentTab() {
            switch (currentTab) {
                case 'dashboard':
                    loadDashboardData();
                    break;
                case 'jobs':
                    loadJobs();
                    break;
                case 'logs':
                    loadLogs();
                    break;
                case 'coverage':
                    loadCoverage();
                    break;
                case 'system':
                    loadSystemHealth();
                    break;
            }
        }

        // Show loading overlay
        function showLoading(message = 'Loading...') {
            document.getElementById('loadingMessage').textContent = message;
            document.getElementById('loadingOverlay').classList.add('active');
        }

        // Hide loading overlay
        function hideLoading() {
            document.getElementById('loadingOverlay').classList.remove('active');
        }

        // Show toast notification
        function showToast(type, title, message) {
            const container = document.getElementById('toastContainer');

            const toast = document.createElement('div');
            toast.className = `toast ${type}`;

            toast.innerHTML = `
                <div class="toast-icon">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 
                                   type === 'error' ? 'fa-exclamation-circle' : 
                                   'fa-info-circle'}"></i>
                </div>
                <div class="toast-content">
                    <div class="toast-title">${title}</div>
                    <div class="toast-message">${message}</div>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;

            container.appendChild(toast);

            // Animate in
            setTimeout(() => {
                toast.classList.add('show');
            }, 10);

            // Auto remove after 5 seconds
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    if (toast.parentElement) {
                        toast.remove();
                    }
                }, 300);
            }, 5000);
        }

        // Find duplicate jobs
        function findDuplicateJobs() {
            showLoading('Finding duplicate jobs...');

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'find_duplicate_jobs'
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        const result = data.data;
                        const info = document.getElementById('jobsDuplicateInfo');
                        const resultsDiv = document.getElementById('duplicateResults');
                        const resultsContent = document.getElementById('duplicateResultsContent');

                        if (result.total_duplicate_sets === 0) {
                            info.innerHTML = '<span class="text-success">No duplicates found</span>';
                            resultsDiv.classList.add('hidden');
                        } else {
                            info.innerHTML = `<span class="text-warning">Found ${result.total_duplicate_sets} duplicate sets (${result.total_duplicate_records} total duplicate records)</span>`;
                            resultsDiv.classList.remove('hidden');
                            resultsContent.textContent = JSON.stringify(result.duplicates, null, 2);
                        }
                    } else {
                        showToast('error', 'Error', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Deduplicate jobs
        function deduplicateJobs(dryRun) {
            const action = dryRun ? 'dry run' : 'deduplicate';
            if (!confirm(`Are you sure you want to ${action} jobs?`)) {
                return;
            }

            showLoading(`${dryRun ? 'Analyzing' : 'Deduplicating'} jobs...`);

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'deduplicate_jobs',
                        dry_run: dryRun ? 'true' : 'false'
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Success', data.data.message);
                        findDuplicateJobs();
                    } else {
                        showToast('error', 'Error', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Find duplicate actuals
        function findDuplicateActuals() {
            showLoading('Finding duplicate actuals...');

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'find_duplicate_actuals'
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        const result = data.data;
                        const info = document.getElementById('actualsDuplicateInfo');
                        const resultsDiv = document.getElementById('duplicateResults');
                        const resultsContent = document.getElementById('duplicateResultsContent');

                        if (result.total_duplicate_sets === 0) {
                            info.innerHTML = '<span class="text-success">No duplicates found</span>';
                            resultsDiv.classList.add('hidden');
                        } else {
                            info.innerHTML = `<span class="text-warning">Found ${result.total_duplicate_sets} duplicate sets (${result.total_duplicate_records} total duplicate records)</span>`;
                            resultsDiv.classList.remove('hidden');
                            resultsContent.textContent = JSON.stringify(result.duplicates, null, 2);
                        }
                    } else {
                        showToast('error', 'Error', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Deduplicate actuals
        function deduplicateActuals(dryRun) {
            const action = dryRun ? 'dry run' : 'deduplicate';
            if (!confirm(`Are you sure you want to ${action} indicator actuals?`)) {
                return;
            }

            showLoading(`${dryRun ? 'Analyzing' : 'Deduplicating'} actuals...`);

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'deduplicate_actuals',
                        dry_run: dryRun ? 'true' : 'false'
                    })
                })
                .then(res => res.json())
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        showToast('success', 'Success', data.data.message);
                        findDuplicateActuals();
                    } else {
                        showToast('error', 'Error', data.error);
                    }
                })
                .catch(error => {
                    hideLoading();
                    showToast('error', 'Error', error.message);
                });
        }

        // Coverage state variables
        let coverageOffset = 0;
        let coverageLimit = 50;
        let currentParentId = null;
        let currentParentType = null;

        // Load coverage data with filters and pagination
        function loadCoverage(direction = null) {
            if (direction === 'prev') {
                coverageOffset = Math.max(0, coverageOffset - coverageLimit);
            } else if (direction === 'next') {
                coverageOffset = coverageOffset + coverageLimit;
            }

            const year = document.getElementById('coverageYear').value;
            const level = document.getElementById('coverageLevel').value;
            const search = document.getElementById('coverageSearch').value;
            const limit = parseInt(document.getElementById('coveragePageSize').value);

            coverageLimit = limit;

            showLoading('Loading coverage data...');

            const params = new URLSearchParams({
                action: 'check_coverage',
                year: year,
                level: level,
                search: search,
                limit: limit,
                offset: coverageOffset
            });

            // Add parent filters if drilling down
            if (currentParentId && currentParentType) {
                params.append('parent_id', currentParentId);
                params.append('parent_type', currentParentType);
            }

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: params
                })
                .then(res => {
                    if (!res.ok) {
                        throw new Error(`HTTP error! status: ${res.status}`);
                    }
                    return res.json();
                })
                .then(data => {
                    hideLoading();

                    if (data.success) {
                        displayEnhancedCoverage(data.data);
                    } else {
                        showToast('error', 'Error', data.error || 'Unknown error occurred');
                    }
                })
                .catch(error => {
                    hideLoading();
                    console.error('Coverage error:', error);
                    showToast('error', 'Error', 'Failed to load coverage data: ' + error.message);
                });
        }

        // Display enhanced coverage with drill-down
        function displayEnhancedCoverage(data) {
            // Update summary
            document.getElementById('coverageYearDisplay').textContent = data.year || '-';
            document.getElementById('totalExpected').textContent = data.total_expected ? data.total_expected.toLocaleString() : '0';
            document.getElementById('totalActual').textContent = data.total_actual ? data.total_actual.toLocaleString() : '0';
            document.getElementById('overallCoverage').textContent = (data.overall_coverage || 0) + '%';

            // Update breadcrumbs
            updateBreadcrumbs(data.breadcrumbs);

            // Update table
            const tbody = document.getElementById('coverageTableBody');

            if (!data.coverage || data.coverage.length === 0) {
                tbody.innerHTML = '<tr><td colspan="8" style="text-align: center;">No coverage data found</td></tr>';
                updateCoveragePagination(data.pagination);
                return;
            }

            let html = '';
            data.coverage.forEach(row => {
                const yearly = row.yearly_count || 0;
                const quarterly = row.quarterly_count || 0;
                const monthly = row.monthly_count || 0;
                const total = yearly + quarterly + monthly;
                const coverage = row.coverage_percentage || 0;

                let coverageClass = 'coverage-poor';
                let coverageBadge = 'Poor';
                if (coverage >= 90) {
                    coverageClass = 'coverage-excellent';
                    coverageBadge = 'Excellent';
                } else if (coverage >= 50) {
                    coverageClass = 'coverage-good';
                    coverageBadge = 'Good';
                }

                // Determine if we can drill down further
                const canDrillDown = row.level === 'region' || row.level === 'country';
                const drillDownIcon = canDrillDown ?
                    `<i class="fas fa-chevron-right drill-down-btn" onclick="drillDown('${row.level}', ${row.id}, '${row.name}')" title="View ${row.level === 'region' ? 'countries' : 'facilities'}"></i>` :
                    '';

                html += `
            <tr>
                <td>
                    ${drillDownIcon}
                    <span class="badge ${row.level === 'region' ? 'badge-info' : row.level === 'country' ? 'badge-success' : 'badge-secondary'}">
                        ${row.level.charAt(0).toUpperCase() + row.level.slice(1)}
                    </span>
                </td>
                <td>
                    <strong>${row.name}</strong>
                </td>
                <td>${yearly}</td>
                <td>${quarterly}</td>
                <td>${monthly}</td>
                <td style="font-weight: 500;">${total}</td>
                <td>
                    <span class="${coverageClass}">${coverage}%</span>
                </td>
                <td>
                    <button onclick="viewOrgUnitDetails('${row.level}', ${row.id})" class="btn btn-sm btn-outline" title="View details">
                        <i class="fas fa-chart-bar"></i>
                    </button>
                </td>
            </tr>
        `;
            });

            tbody.innerHTML = html;

            // Update pagination
            updateCoveragePagination(data.pagination);
        }

        // Update breadcrumb navigation
        function updateBreadcrumbs(breadcrumbs) {
            const container = document.getElementById('breadcrumbContainer');

            if (!breadcrumbs || breadcrumbs.length === 0) {
                container.style.display = 'none';
                container.innerHTML = '';
                return;
            }

            let html = '<div class="breadcrumb">';

            // Add "All Levels" home button
            html += `
        <span class="breadcrumb-item">
            <a onclick="resetDrillDown()"><i class="fas fa-home"></i> All Levels</a>
        </span>
    `;

            breadcrumbs.forEach((item, index) => {
                html += `<span class="breadcrumb-item"><i class="fas fa-chevron-right"></i>`;

                if (index === breadcrumbs.length - 1) {
                    // Current item (not clickable)
                    html += `${item.name}`;
                } else {
                    // Parent items (clickable)
                    html += `<a onclick="drillDown('${item.type}', ${item.id}, '${item.name}')">${item.name}</a>`;
                }

                html += `</span>`;
            });

            html += '</div>';

            container.innerHTML = html;
            container.style.display = 'block';
        }

        // Drill down into a specific org unit
        function drillDown(level, id, name) {
            if (level === 'region') {
                currentParentId = id;
                currentParentType = 'region';
            } else if (level === 'country') {
                currentParentId = id;
                currentParentType = 'country';
            }

            // Reset to first page
            coverageOffset = 0;

            // Update level filter to show appropriate child level
            if (level === 'region') {
                document.getElementById('coverageLevel').value = 'country';
            } else if (level === 'country') {
                document.getElementById('coverageLevel').value = 'facility';
            }

            // Clear search when drilling down
            document.getElementById('coverageSearch').value = '';

            // Reload data
            loadCoverage();

            showToast('info', 'Drilling Down', `Viewing ${level === 'region' ? 'countries in' : 'facilities in'} ${name}`);
        }

        // Reset drill-down to top level
        function resetDrillDown() {
            currentParentId = null;
            currentParentType = null;
            coverageOffset = 0;
            document.getElementById('coverageLevel').value = 'all';
            document.getElementById('coverageSearch').value = '';
            loadCoverage();
        }

        // View detailed statistics for an org unit
        function viewOrgUnitDetails(level, id) {
            // This could open a modal with detailed charts and statistics
            // For now, we'll show a toast
            showToast('info', 'Details', `Viewing details for ${level} ID: ${id} - Feature coming soon`);
        }

        // Clear all filters
        function clearCoverageFilters() {
            document.getElementById('coverageSearch').value = '';
            document.getElementById('coverageLevel').value = 'all';
            document.getElementById('coverageYear').value = new Date().getFullYear();
            resetDrillDown();
        }

        // Update pagination controls
        function updateCoveragePagination(pagination) {
            if (!pagination) return;

            const info = document.getElementById('coveragePaginationInfo');
            const pageInfo = document.getElementById('coveragePageInfo');
            const prevBtn = document.getElementById('coveragePrevBtn');
            const nextBtn = document.getElementById('coverageNextBtn');

            const start = pagination.offset + 1;
            const end = Math.min(pagination.offset + pagination.limit, pagination.total);
            const currentPage = Math.floor(pagination.offset / pagination.limit) + 1;

            info.textContent = `Showing ${start}-${end} of ${pagination.total} items`;
            pageInfo.textContent = `Page ${currentPage} of ${pagination.pages}`;

            prevBtn.disabled = pagination.offset <= 0;
            nextBtn.disabled = pagination.offset + pagination.limit >= pagination.total;
        }

        // Initialize coverage tab with all features
        function initCoverageTab() {
            // Populate year select
            const yearSelect = document.getElementById('coverageYear');
            if (yearSelect && yearSelect.options.length === 0) {
                const currentYear = new Date().getFullYear();
                for (let year = currentYear - 2; year <= currentYear + 2; year++) {
                    const option = document.createElement('option');
                    option.value = year;
                    option.textContent = year;
                    if (year === currentYear) {
                        option.selected = true;
                    }
                    yearSelect.appendChild(option);
                }
            }

            // Reset drill-down state
            currentParentId = null;
            currentParentType = null;
            coverageOffset = 0;

            // Load coverage data
            loadCoverage();
        }

        // Help modal functions
        function openHelpModal() {
            const modal = document.getElementById('helpModal');
            const content = document.getElementById('helpContent');

            modal.classList.add('active');

            // Load README content
            fetch('?action=get_readme')
                .then(res => res.json())
                .then(data => {
                    if (data.success && data.data.exists) {
                        content.innerHTML = `<pre style="white-space: pre-wrap; background: none; color: var(--text-primary);">${data.data.content}</pre>`;
                    } else {
                        content.innerHTML = '<p style="color: var(--danger-color);">README.md not found. Please create a README.md file in the same directory.</p>';
                    }
                })
                .catch(error => {
                    content.innerHTML = '<p style="color: var(--danger-color);">Error loading README.md</p>';
                });
        }

        function closeHelpModal() {
            document.getElementById('helpModal').classList.remove('active');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('helpModal');
            if (event.target == modal) {
                modal.classList.remove('active');
            }
        }
    </script>

</body>

</html>