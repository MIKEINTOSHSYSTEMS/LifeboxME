<?php
// fetch_courses.php - Lifebox Learning Network Data Fetcher
// ==========================================================
// Purpose: Fetch, store, and manage data from Lifebox API into PostgreSQL
// ==========================================================

define('DEBUG_MODE', true);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Increase execution time for large datasets
// set_time_limit(600); // 10 minutes
set_time_limit(1800); // 30 minutes

// Database configuration
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'lifebox_mesystem');
define('DB_USER', 'postgres');
define('DB_PASSWORD', 'mikeintosh');

// API Base URL (relative to current directory)
//define('API_BASE_URL', './');


function getBaseUrl()
{
    // Detect protocol
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        ? 'https://'
        : 'http://';

    // Host (domain + port if any)
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    // Directory of current script
    $path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    return $protocol . $host . $path . '/';
}


// Handle POST requests for AJAX operations
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    handleAjaxRequest();
    exit;
}

// Database connection
function getDbConnection() {
    static $connection = null;
    
    if ($connection === null) {
        try {
            $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
            $connection = new PDO($dsn, DB_USER, DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die(json_encode([
                'success' => false,
                'error' => 'Database connection failed: ' . $e->getMessage()
            ]));
        }
    }
    
    return $connection;
}

// Make API request
function makeApiRequest($endpoint, $params = [])
{
    $baseUrl = getBaseUrl();

    // Build query string
    $queryString = http_build_query($params);
    $queryString = preg_replace('/%5B\d+%5D/', '%5B%5D', $queryString);

    // Final URL
    $url = $baseUrl . ltrim($endpoint, '/');
    if (!empty($queryString)) {
        $url .= '?' . $queryString;
    }

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 120,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
        ]
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        return [
            'success' => false,
            'error' => 'cURL Error: ' . $error,
            'request_url' => $url
        ];
    }

    $decoded = json_decode($response, true);

    if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
        return [
            'success' => false,
            'error' => 'Invalid JSON response',
            'http_status' => $httpCode,
            'raw_response_preview' => substr(strip_tags($response), 0, 300),
            'request_url' => $url
        ];
    }

    // Attach metadata
    $decoded['http_status'] = $httpCode;
    $decoded['request_url'] = $url;

    return $decoded;
}

// Log fetch operation
function logFetchOperation($tableName, $operationType, $parameters = []) {
    $db = getDbConnection();
    
    try {
        $stmt = $db->prepare("
            INSERT INTO lbln_fetch_logs 
            (operation_type, table_name, parameters, start_time, status)
            VALUES (?, ?, ?::JSONB, CURRENT_TIMESTAMP, 'running')
            RETURNING log_id
        ");
        
        $stmt->execute([
            $operationType,
            $tableName,
            json_encode($parameters)
        ]);
        
        return $stmt->fetchColumn();
    } catch (Exception $e) {
        error_log("Failed to log fetch operation: " . $e->getMessage());
        return null;
    }
}

// Update fetch log
function updateFetchLog($logId, $data) {
    $db = getDbConnection();
    
    try {
        $setParts = [];
        $params = [];
        $paramIndex = 1;
        
        foreach ($data as $key => $value) {
            if ($key === 'errors' && is_array($value)) {
                $setParts[] = "$key = ?::JSONB";
                $params[] = json_encode($value);
            } else {
                $setParts[] = "$key = ?";
                $params[] = $value;
            }
        }
        
        $params[] = $logId;
        
        $sql = "UPDATE lbln_fetch_logs SET " . implode(', ', $setParts) . " WHERE log_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        
        return true;
    } catch (Exception $e) {
        error_log("Failed to update fetch log: " . $e->getMessage());
        return false;
    }
}

// Fetch all courses
function fetchAllCourses() {
    $logId = logFetchOperation('lbln_courses', 'fetch_courses', [
        'endpoint' => 'courses.php',
        'params' => ['single_page' => 0, 'page' => 1]
    ]);
    
    $response = makeApiRequest('courses.php', [
        'single_page' => 0,
        'page' => 1
    ]);
    
    if (!$response['success']) {
        updateFetchLog($logId, [
            'status' => 'failed',
            'message' => 'API request failed',
            'errors' => [$response['error']],
            'end_time' => date('Y-m-d H:i:s')
        ]);
        
        return $response;
    }
    
    $courses = $response['data'] ?? [];
    $totalCourses = count($courses);
    $inserted = 0;
    $updated = 0;
    $skipped = 0;
    $errors = [];
    
    if ($totalCourses > 0) {
        $db = getDbConnection();
        
        foreach ($courses as $course) {
            try {
                // Check if course exists
                $checkStmt = $db->prepare("SELECT data_id FROM lbln_courses WHERE course_id = ?");
                $checkStmt->execute([$course['id']]);
                $exists = $checkStmt->fetch();
                
                // Prepare categories as JSON
                $categories = !empty($course['categories']) ? json_encode($course['categories']) : json_encode([]);
                $identifiers = !empty($course['identifiers']) ? json_encode($course['identifiers']) : json_encode([]);
                $afterPurchase = !empty($course['afterPurchase']) ? json_encode($course['afterPurchase']) : json_encode([]);
                $author = !empty($course['author']) ? json_encode($course['author']) : json_encode([]);
                
                if ($exists) {
                    // Update existing course
                    $stmt = $db->prepare("
                        UPDATE lbln_courses SET
                            course_title = ?,
                            categories = ?::JSONB,
                            description = ?,
                            name = ?,
                            image = ?,
                            course_image = ?,
                            original_price = ?,
                            discount_price = ?,
                            final_price = ?,
                            access = ?,
                            expires = ?,
                            expires_type = ?,
                            drip_feed = ?,
                            identifiers = ?::JSONB,
                            after_purchase = ?::JSONB,
                            author = ?::JSONB,
                            created = ?,
                            modified = ?,
                            is_active = TRUE
                        WHERE course_id = ?
                    ");
                    
                    $stmt->execute([
                        $course['title'] ?? '',
                        $categories,
                        $course['description'] ?? '',
                        $course['author']['name'] ?? null,
                        $course['author']['image'] ?? null,
                        $course['courseImage'] ?? null,
                        $course['original_price'] ?? 0,
                        $course['discount_price'] ?? 0,
                        $course['final_price'] ?? 0,
                        $course['access'] ?? 'free',
                        !empty($course['expires']) ? date('Y-m-d H:i:s', $course['expires']) : null,
                        $course['expiresType'] ?? null,
                        $course['dripFeed'] ?? 'none',
                        $identifiers,
                        $afterPurchase,
                        $author,
                        $course['created'] ?? null,
                        $course['modified'] ?? null,
                        $course['id']
                    ]);
                    
                    $updated++;
                } else {
                    // Insert new course
                    $stmt = $db->prepare("
                        INSERT INTO lbln_courses (
                            course_id, course_title, categories, description, name,
                            image, course_image, original_price, discount_price,
                            final_price, access, expires, expires_type, drip_feed,
                            identifiers, after_purchase, author, created, modified
                        ) VALUES (?, ?, ?::JSONB, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?::JSONB, ?::JSONB, ?::JSONB, ?, ?)
                    ");
                    
                    $stmt->execute([
                        $course['id'],
                        $course['title'] ?? '',
                        $categories,
                        $course['description'] ?? '',
                        $course['author']['name'] ?? null,
                        $course['author']['image'] ?? null,
                        $course['courseImage'] ?? null,
                        $course['original_price'] ?? 0,
                        $course['discount_price'] ?? 0,
                        $course['final_price'] ?? 0,
                        $course['access'] ?? 'free',
                        !empty($course['expires']) ? date('Y-m-d H:i:s', $course['expires']) : null,
                        $course['expiresType'] ?? null,
                        $course['dripFeed'] ?? 'none',
                        $identifiers,
                        $afterPurchase,
                        $author,
                        $course['created'] ?? null,
                        $course['modified'] ?? null
                    ]);
                    
                    $inserted++;
                }
            } catch (Exception $e) {
                $errors[] = "Course {$course['id']}: " . $e->getMessage();
                $skipped++;
            }
        }
    }
    
    updateFetchLog($logId, [
        'items_processed' => $totalCourses,
        'items_inserted' => $inserted,
        'items_updated' => $updated,
        'items_skipped' => $skipped,
        'errors' => $errors,
        'status' => empty($errors) ? 'completed' : 'completed_with_errors',
        'message' => "Processed $totalCourses courses ($inserted inserted, $updated updated, $skipped skipped)",
        'end_time' => date('Y-m-d H:i:s')
    ]);
    
    return [
        'success' => true,
        'total' => $totalCourses,
        'inserted' => $inserted,
        'updated' => $updated,
        'skipped' => $skipped,
        'errors' => $errors
    ];
}

// Fetch course analytics
function fetchCourseAnalytics() {
    $db = getDbConnection();
    
    // Get all active courses
    $stmt = $db->prepare("SELECT course_id, course_title FROM lbln_courses WHERE is_active = TRUE");
    $stmt->execute();
    $courses = $stmt->fetchAll();
    
    $logId = logFetchOperation('lbln_course_analytics', 'fetch_analytics', [
        'courses_count' => count($courses)
    ]);
    
    $totalProcessed = 0;
    $inserted = 0;
    $skipped = 0;
    $errors = [];
    
    foreach ($courses as $course) {
        $totalProcessed++;
        
        try {
            $response = makeApiRequest('courses.php', [
                'id' => $course['course_id'],
                'action' => 'analytics'
            ]);
            
            if (!$response['success'] || !isset($response['data'])) {
                $errors[] = "Course {$course['course_id']}: " . ($response['error'] ?? 'No analytics data');
                $skipped++;
                continue;
            }
            
            $analytics = $response['data'];
            
            // Insert analytics data
            $stmt = $db->prepare("
                INSERT INTO lbln_course_analytics (
                    course_id, course_title, students, videos, learning_units,
                    video_time, avg_score_rate, success_rate, total_study_time,
                    avg_time_to_finish, social_interactions, certificates_issued,
                    video_viewing_time, analytics_date
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE)
                ON CONFLICT (course_id, analytics_date) DO UPDATE SET
                    students = EXCLUDED.students,
                    videos = EXCLUDED.videos,
                    learning_units = EXCLUDED.learning_units,
                    video_time = EXCLUDED.video_time,
                    avg_score_rate = EXCLUDED.avg_score_rate,
                    success_rate = EXCLUDED.success_rate,
                    total_study_time = EXCLUDED.total_study_time,
                    avg_time_to_finish = EXCLUDED.avg_time_to_finish,
                    social_interactions = EXCLUDED.social_interactions,
                    certificates_issued = EXCLUDED.certificates_issued,
                    video_viewing_time = EXCLUDED.video_viewing_time,
                    fetched_at = CURRENT_TIMESTAMP
            ");
            
            $stmt->execute([
                $course['course_id'],
                $course['course_title'],
                $analytics['students'] ?? 0,
                $analytics['videos'] ?? 0,
                $analytics['learning_units'] ?? 0,
                $analytics['video_time'] ?? 0,
                $analytics['avg_score_rate'] ?? 0,
                $analytics['success_rate'] ?? 0,
                $analytics['total_study_time'] ?? 0,
                $analytics['avg_time_to_finish'] ?? 0,
                $analytics['social_interactions'] ?? 0,
                $analytics['certificates_issued'] ?? 0,
                $analytics['video_viewing_time'] ?? 0
            ]);
            
            $inserted++;
            
        } catch (Exception $e) {
            $errors[] = "Course {$course['course_id']}: " . $e->getMessage();
            $skipped++;
        }
        
        // Small delay to avoid rate limiting
        usleep(100000); // 0.1 second
    }
    
    updateFetchLog($logId, [
        'items_processed' => $totalProcessed,
        'items_inserted' => $inserted,
        'items_skipped' => $skipped,
        'errors' => $errors,
        'status' => empty($errors) ? 'completed' : 'completed_with_errors',
        'message' => "Processed analytics for $totalProcessed courses ($inserted inserted, $skipped skipped)",
        'end_time' => date('Y-m-d H:i:s')
    ]);
    
    return [
        'success' => true,
        'total' => $totalProcessed,
        'inserted' => $inserted,
        'skipped' => $skipped,
        'errors' => $errors
    ];
}

// Fetch course users
function fetchCourseUsers() {
    $db = getDbConnection();
    
    // Get all active courses
    $stmt = $db->prepare("SELECT course_id, course_title FROM lbln_courses WHERE is_active = TRUE");
    $stmt->execute();
    $courses = $stmt->fetchAll();
    
    $logId = logFetchOperation('lbln_course_users', 'fetch_users', [
        'courses_count' => count($courses)
    ]);
    
    $totalProcessed = 0;
    $totalUsers = 0;
    $inserted = 0;
    $updated = 0;
    $skipped = 0;
    $errors = [];
    
    foreach ($courses as $course) {
        $totalProcessed++;
        
        try {
            // Fetch all pages of users for this course
            $page = 1;
            $hasMorePages = true;
            $courseUsers = 0;
            
            while ($hasMorePages) {
                $response = makeApiRequest('courses.php', [
                    'id' => $course['course_id'],
                    'action' => 'users',
                    'single_page' => 0,
                    'page' => $page
                ]);
                
                if (!$response['success'] || !isset($response['data'])) {
                    $errors[] = "Course {$course['course_id']} page $page: " . ($response['error'] ?? 'No user data');
                    break;
                }
                
                $users = $response['data'];
                $courseUsers += count($users);
                
                foreach ($users as $user) {
                    try {
                        // Prepare JSON fields
                        $fields = !empty($user['fields']) ? json_encode($user['fields']) : json_encode([]);
                        $tags = !empty($user['tags']) ? json_encode($user['tags']) : json_encode([]);
                        $utms = !empty($user['utms']) ? json_encode($user['utms']) : json_encode([]);
                        $billingInfo = !empty($user['billing_info']) ? json_encode($user['billing_info']) : json_encode([]);
                        
                        // Extract UTM data
                        $fcCountry = $user['utms']['fc_country'] ?? null;
                        $fcReferrer = $user['utms']['fc_referrer'] ?? null;
                        $lcReferrer = $user['utms']['lc_referrer'] ?? null;
                        $lcCountry = $user['utms']['lc_country'] ?? null;
                        
                        // Check if user already exists for this course
                        $checkStmt = $db->prepare("
                            SELECT data_id FROM lbln_course_users 
                            WHERE course_id = ? AND user_id = ?
                        ");
                        $checkStmt->execute([$course['course_id'], $user['id']]);
                        $exists = $checkStmt->fetch();
                        
                        if ($exists) {
                            // Update existing user
                            $stmt = $db->prepare("
                                UPDATE lbln_course_users SET
                                    email = ?,
                                    username = ?,
                                    first_name = ?,
                                    last_name = ?,
                                    subscribed_for_marketing_emails = ?,
                                    eu_customer = ?,
                                    is_admin = ?,
                                    is_instructor = ?,
                                    is_suspended = ?,
                                    is_reporter = ?,
                                    is_affiliate = ?,
                                    role_level = ?,
                                    role_name = ?,
                                    referrer_id = ?,
                                    created = ?,
                                    last_login = ?,
                                    signup_approval_status = ?,
                                    email_verification_status = ?,
                                    fields = ?::JSONB,
                                    tags = ?::JSONB,
                                    utms = ?::JSONB,
                                    billing_info = ?::JSONB,
                                    nps_score = ?,
                                    nps_comment = ?,
                                    fc_country = ?,
                                    fc_referrer = ?,
                                    lc_referrer = ?,
                                    lc_country = ?,
                                    last_seen = CURRENT_TIMESTAMP
                                WHERE course_id = ? AND user_id = ?
                            ");
                            
                            $stmt->execute([
                                $user['email'] ?? '',
                                $user['username'] ?? null,
                                $user['first_name'] ?? null,
                                $user['last_name'] ?? null,
                                $user['subscribed_for_marketing_emails'] ?? false,
                                $user['eu_customer'] ?? false,
                                $user['is_admin'] ?? false,
                                $user['is_instructor'] ?? false,
                                $user['is_suspended'] ?? false,
                                $user['is_reporter'] ?? false,
                                $user['is_affiliate'] ?? false,
                                $user['role']['level'] ?? null,
                                $user['role']['name'] ?? null,
                                $user['referrer_id'] ?? null,
                                $user['created'] ?? null,
                                $user['last_login'] ?? null,
                                $user['signup_approval_status'] ?? null,
                                $user['email_verification_status'] ?? null,
                                $fields,
                                $tags,
                                $utms,
                                $billingInfo,
                                $user['nps_score'] ?? null,
                                $user['nps_comment'] ?? null,
                                $fcCountry,
                                $fcReferrer,
                                $lcReferrer,
                                $lcCountry,
                                $course['course_id'],
                                $user['id']
                            ]);
                            
                            $updated++;
                        } else {
                            // Insert new user
                            $stmt = $db->prepare("
                                INSERT INTO lbln_course_users (
                                    course_id, course_title, user_id, email, username,
                                    first_name, last_name, subscribed_for_marketing_emails,
                                    eu_customer, is_admin, is_instructor, is_suspended,
                                    is_reporter, is_affiliate, role_level, role_name,
                                    referrer_id, created, last_login, signup_approval_status,
                                    email_verification_status, fields, tags, utms,
                                    billing_info, nps_score, nps_comment, fc_country,
                                    fc_referrer, lc_referrer, lc_country
                                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?::JSONB, ?::JSONB, ?::JSONB, ?::JSONB, ?, ?, ?, ?, ?, ?, ?)
                            ");
                            
                            $stmt->execute([
                                $course['course_id'],
                                $course['course_title'],
                                $user['id'],
                                $user['email'] ?? '',
                                $user['username'] ?? null,
                                $user['first_name'] ?? null,
                                $user['last_name'] ?? null,
                                $user['subscribed_for_marketing_emails'] ?? false,
                                $user['eu_customer'] ?? false,
                                $user['is_admin'] ?? false,
                                $user['is_instructor'] ?? false,
                                $user['is_suspended'] ?? false,
                                $user['is_reporter'] ?? false,
                                $user['is_affiliate'] ?? false,
                                $user['role']['level'] ?? null,
                                $user['role']['name'] ?? null,
                                $user['referrer_id'] ?? null,
                                $user['created'] ?? null,
                                $user['last_login'] ?? null,
                                $user['signup_approval_status'] ?? null,
                                $user['email_verification_status'] ?? null,
                                $fields,
                                $tags,
                                $utms,
                                $billingInfo,
                                $user['nps_score'] ?? null,
                                $user['nps_comment'] ?? null,
                                $fcCountry,
                                $fcReferrer,
                                $lcReferrer,
                                $lcCountry
                            ]);
                            
                            $inserted++;
                        }
                        
                    } catch (Exception $e) {
                        $errors[] = "User {$user['id']} in course {$course['course_id']}: " . $e->getMessage();
                        $skipped++;
                    }
                }
                
                // Check if there are more pages
                $meta = $response['meta'] ?? [];
                $totalPages = $meta['totalPagesAvailable'] ?? 1;
                $fetchedPages = $meta['totalPagesFetched'] ?? $page;
                
                if ($page >= $totalPages || $page >= $fetchedPages) {
                    $hasMorePages = false;
                } else {
                    $page++;
                }
                
                // Small delay between pages
                usleep(50000); // 0.05 second
            }
            
            $totalUsers += $courseUsers;
            
        } catch (Exception $e) {
            $errors[] = "Course {$course['course_id']}: " . $e->getMessage();
            $skipped++;
        }
        
        // Delay between courses to avoid rate limiting
        usleep(200000); // 0.2 second
    }
    
    updateFetchLog($logId, [
        'items_processed' => $totalProcessed,
        'items_inserted' => $inserted,
        'items_updated' => $updated,
        'items_skipped' => $skipped,
        'errors' => $errors,
        'status' => empty($errors) ? 'completed' : 'completed_with_errors',
        'message' => "Processed users for $totalProcessed courses ($totalUsers total users, $inserted inserted, $updated updated, $skipped skipped)",
        'end_time' => date('Y-m-d H:i:s')
    ]);
    
    return [
        'success' => true,
        'courses_processed' => $totalProcessed,
        'total_users' => $totalUsers,
        'inserted' => $inserted,
        'updated' => $updated,
        'skipped' => $skipped,
        'errors' => $errors
    ];
}

// Clear table data
function clearTableData($tableName) {
    $db = getDbConnection();
    
    try {
        $logId = logFetchOperation($tableName, 'clear_data', []);
        
        // Call the PostgreSQL function
        $stmt = $db->prepare("SELECT clear_table_data(?)");
        $stmt->execute([$tableName]);
        $rowsDeleted = $stmt->fetchColumn();
        
        updateFetchLog($logId, [
            'items_processed' => $rowsDeleted,
            'status' => 'completed',
            'message' => "Cleared $rowsDeleted records from $tableName",
            'end_time' => date('Y-m-d H:i:s')
        ]);
        
        return [
            'success' => true,
            'rows_deleted' => $rowsDeleted,
            'message' => "Successfully cleared $rowsDeleted records from $tableName"
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Get table statistics
function getTableStats($tableName = null) {
    $db = getDbConnection();
    
    try {
        if ($tableName) {
            $stmt = $db->prepare("SELECT COUNT(*) FROM $tableName");
            $stmt->execute();
            $count = $stmt->fetchColumn();
            
            $stmt = $db->prepare("
                SELECT MAX(fetched_at) as last_fetch 
                FROM $tableName 
                LIMIT 1
            ");
            $stmt->execute();
            $lastFetch = $stmt->fetchColumn();
            
            return [
                'success' => true,
                'table' => $tableName,
                'count' => $count,
                'last_fetch' => $lastFetch
            ];
        } else {
            // Get all table stats
            $tables = ['lbln_courses', 'lbln_course_analytics', 'lbln_course_users'];
            $stats = [];
            
            foreach ($tables as $table) {
                $stmt = $db->prepare("SELECT COUNT(*) FROM $table");
                $stmt->execute();
                $count = $stmt->fetchColumn();
                
                $stmt = $db->prepare("
                    SELECT MAX(fetched_at) as last_fetch 
                    FROM $table 
                    LIMIT 1
                ");
                $stmt->execute();
                $lastFetch = $stmt->fetchColumn();
                
                $stats[$table] = [
                    'count' => $count,
                    'last_fetch' => $lastFetch
                ];
            }
            
            return [
                'success' => true,
                'stats' => $stats
            ];
        }
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Get recent fetch logs
function getRecentLogs($limit = 20) {
    $db = getDbConnection();
    
    try {
        $stmt = $db->prepare("
            SELECT 
                log_id, operation_type, table_name, items_processed,
                items_inserted, items_updated, items_skipped,
                status, start_time, end_time, duration, message
            FROM lbln_fetch_logs
            ORDER BY start_time DESC
            LIMIT ?
        ");
        
        $stmt->execute([$limit]);
        $logs = $stmt->fetchAll();
        
        return [
            'success' => true,
            'logs' => $logs
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Preview table data
function previewTableData($tableName, $limit = 10) {
    $db = getDbConnection();
    
    try {
        $stmt = $db->prepare("SELECT * FROM $tableName ORDER BY fetched_at DESC LIMIT ?");
        $stmt->execute([$limit]);
        $data = $stmt->fetchAll();
        
        return [
            'success' => true,
            'table' => $tableName,
            'data' => $data,
            'count' => count($data)
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Handle AJAX requests
function handleAjaxRequest() {
    $action = $_POST['action'] ?? '';
    $data = [];
    
    switch ($action) {
        case 'fetch_courses':
            $data = fetchAllCourses();
            break;
            
        case 'fetch_analytics':
            $data = fetchCourseAnalytics();
            break;
            
        case 'fetch_users':
            $data = fetchCourseUsers();
            break;
            
        case 'clear_table':
            $tableName = $_POST['table'] ?? '';
            if (in_array($tableName, ['lbln_courses', 'lbln_course_analytics', 'lbln_course_users'])) {
                $data = clearTableData($tableName);
            } else {
                $data = ['success' => false, 'error' => 'Invalid table name'];
            }
            break;
            
        case 'get_stats':
            $tableName = $_POST['table'] ?? null;
            $data = getTableStats($tableName);
            break;
            
        case 'get_logs':
            $limit = $_POST['limit'] ?? 20;
            $data = getRecentLogs($limit);
            break;
            
        case 'preview_data':
            $tableName = $_POST['table'] ?? '';
            $limit = $_POST['limit'] ?? 10;
            if (in_array($tableName, ['lbln_courses', 'lbln_course_analytics', 'lbln_course_users'])) {
                $data = previewTableData($tableName, $limit);
            } else {
                $data = ['success' => false, 'error' => 'Invalid table name'];
            }
            break;
            
        default:
            $data = ['success' => false, 'error' => 'Unknown action'];
    }
    
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// Get current statistics
$stats = getTableStats();
$recentLogs = getRecentLogs(10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox Learning Network - Data Fetcher</title>
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fetcher.css">
    <style>

    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>
                <i class="fas fa-database"></i>
                Lifebox Learning Network - Data Fetcher
            </h1>
            <div class="subtitle">
                Fetch, store, and manage data from Lifebox API into PostgreSQL database
            </div>
            <div class="btn-group">
                <button class="btn btn-primary" onclick="showModal('fetch-all-modal')">
                    <i class="fas fa-bolt"></i> Fetch All Data
                </button>
                <button class="btn btn-secondary" onclick="refreshStats()">
                    <i class="fas fa-sync-alt"></i> Refresh Stats
                </button>
                <button class="btn btn-secondary" onclick="showModal('logs-modal')">
                    <i class="fas fa-history"></i> View All Logs
                </button>
            </div>
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card courses">
                <h3><i class="fas fa-graduation-cap"></i> Courses</h3>
                <div class="stat-value" id="courses-count"><?php echo $stats['success'] ? $stats['stats']['lbln_courses']['count'] : 'Error'; ?></div>
                <div class="stat-meta">
                    <span>Last fetch: <span id="courses-last"><?php echo $stats['success'] ? ($stats['stats']['lbln_courses']['last_fetch'] ? date('Y-m-d H:i', strtotime($stats['stats']['lbln_courses']['last_fetch'])) : 'Never') : 'Error'; ?></span></span>
                    <button class="btn btn-sm btn-primary" onclick="showModal('courses-modal')">
                        <i class="fas fa-cog"></i> Manage
                    </button>
                </div>
            </div>

            <div class="stat-card analytics">
                <h3><i class="fas fa-chart-bar"></i> Course Analytics</h3>
                <div class="stat-value" id="analytics-count"><?php echo $stats['success'] ? $stats['stats']['lbln_course_analytics']['count'] : 'Error'; ?></div>
                <div class="stat-meta">
                    <span>Last fetch: <span id="analytics-last"><?php echo $stats['success'] ? ($stats['stats']['lbln_course_analytics']['last_fetch'] ? date('Y-m-d H:i', strtotime($stats['stats']['lbln_course_analytics']['last_fetch'])) : 'Never') : 'Error'; ?></span></span>
                    <button class="btn btn-sm btn-primary" onclick="showModal('analytics-modal')">
                        <i class="fas fa-cog"></i> Manage
                    </button>
                </div>
            </div>

            <div class="stat-card users">
                <h3><i class="fas fa-users"></i> Course Users</h3>
                <div class="stat-value" id="users-count"><?php echo $stats['success'] ? $stats['stats']['lbln_course_users']['count'] : 'Error'; ?></div>
                <div class="stat-meta">
                    <span>Last fetch: <span id="users-last"><?php echo $stats['success'] ? ($stats['stats']['lbln_course_users']['last_fetch'] ? date('Y-m-d H:i', strtotime($stats['stats']['lbln_course_users']['last_fetch'])) : 'Never') : 'Error'; ?></span></span>
                    <button class="btn btn-sm btn-primary" onclick="showModal('users-modal')">
                        <i class="fas fa-cog"></i> Manage
                    </button>
                </div>
            </div>
        </div>

        <!-- Action Cards -->
        <div class="actions-grid">
            <!-- Courses Card -->
            <div class="action-card">
                <h3><i class="fas fa-graduation-cap"></i> Courses Management</h3>
                <div class="btn-group">
                    <button class="btn btn-success" onclick="startFetch('courses')">
                        <i class="fas fa-download"></i> Fetch Courses
                    </button>
                    <button class="btn btn-warning" onclick="clearTable('lbln_courses')">
                        <i class="fas fa-trash"></i> Clear Courses
                    </button>
                    <button class="btn btn-secondary" onclick="previewTable('lbln_courses')">
                        <i class="fas fa-eye"></i> Preview Data
                    </button>
                </div>
                <div id="courses-status"></div>
            </div>

            <!-- Analytics Card -->
            <div class="action-card">
                <h3><i class="fas fa-chart-bar"></i> Analytics Management</h3>
                <div class="btn-group">
                    <button class="btn btn-success" onclick="startFetch('analytics')">
                        <i class="fas fa-download"></i> Fetch Analytics
                    </button>
                    <button class="btn btn-warning" onclick="clearTable('lbln_course_analytics')">
                        <i class="fas fa-trash"></i> Clear Analytics
                    </button>
                    <button class="btn btn-secondary" onclick="previewTable('lbln_course_analytics')">
                        <i class="fas fa-eye"></i> Preview Data
                    </button>
                </div>
                <div id="analytics-status"></div>
            </div>

            <!-- Users Card -->
            <div class="action-card">
                <h3><i class="fas fa-users"></i> Users Management</h3>
                <div class="btn-group">
                    <button class="btn btn-success" onclick="startFetch('users')">
                        <i class="fas fa-download"></i> Fetch Users
                    </button>
                    <button class="btn btn-warning" onclick="clearTable('lbln_course_users')">
                        <i class="fas fa-trash"></i> Clear Users
                    </button>
                    <button class="btn btn-secondary" onclick="previewTable('lbln_course_users')">
                        <i class="fas fa-eye"></i> Preview Data
                    </button>
                </div>
                <div id="users-status"></div>
            </div>
        </div>

        <!-- Recent Activity Logs -->
        <div class="log-section">
            <h3><i class="fas fa-history"></i> Recent Activity Logs</h3>
            <div class="log-container" id="recent-logs">
                <?php if ($recentLogs['success'] && !empty($recentLogs['logs'])): ?>
                    <?php foreach ($recentLogs['logs'] as $log): ?>
                        <div class="log-entry <?php echo $log['status']; ?>">
                            <div class="log-time">
                                <?php echo date('Y-m-d H:i:s', strtotime($log['start_time'])); ?>
                                <?php if ($log['end_time']): ?>
                                    (Duration: <?php echo $log['duration']; ?>)
                                <?php endif; ?>
                            </div>
                            <div class="log-message">
                                <strong><?php echo $log['operation_type']; ?></strong> - 
                                <?php echo $log['table_name']; ?>: 
                                <?php echo $log['message'] ?? 'Completed'; ?>
                                <?php if ($log['items_processed'] > 0): ?>
                                    (Processed: <?php echo $log['items_processed']; ?>,
                                    Inserted: <?php echo $log['items_inserted']; ?>,
                                    Updated: <?php echo $log['items_updated']; ?>)
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="log-entry info">
                        <div class="log-message">No recent activity logs found.</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Lifebox Learning Network Data Fetcher v1.0 | 
                <a href="#" onclick="showModal('about-modal')">About</a> | 
                <a href="#" onclick="showModal('help-modal')">Help</a>
            </p>
            <p>Database: <?php echo DB_NAME; ?> | Connected to: <?php echo DB_HOST; ?>:<?php echo DB_PORT; ?></p>
        </div>
    </div>

    <!-- Modals -->
    
    <!-- Fetch All Modal -->
    <div class="modal" id="fetch-all-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-bolt"></i> Fetch All Data</h3>
                <button class="modal-close" onclick="hideModal('fetch-all-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i> This will fetch all data from all three endpoints sequentially.
                    Estimated time: 2-5 minutes depending on data size.
                </div>
                
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" id="fetch-all-progress"></div>
                    </div>
                    <div class="progress-text">
                        <span>Progress: <span id="fetch-all-percent">0%</span></span>
                        <span>Step: <span id="fetch-all-step">Not started</span></span>
                    </div>
                </div>

                <div class="real-time-log" id="fetch-all-log">
                    <div class="log-line">Ready to start fetching all data...</div>
                </div>

                <div class="btn-group">
                    <button class="btn btn-success" onclick="startFetchAll()">
                        <i class="fas fa-play"></i> Start Fetching All
                    </button>
                    <button class="btn btn-secondary" onclick="hideModal('fetch-all-modal')">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Modal -->
    <div class="modal" id="courses-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-graduation-cap"></i> Courses Management</h3>
                <button class="modal-close" onclick="hideModal('courses-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabs">
                    <button class="tab active" onclick="switchTab('courses-fetch')">Fetch</button>
                    <button class="tab" onclick="switchTab('courses-preview')">Preview</button>
                    <button class="tab" onclick="switchTab('courses-settings')">Settings</button>
                </div>

                <div id="courses-fetch" class="tab-content active">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Fetch all courses from the API and store them in the database.
                    </div>
                    
                    <div class="real-time-log" id="courses-fetch-log" style="height: 200px;">
                        <!-- Real-time logs will appear here -->
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-success" onclick="startFetch('courses')">
                            <i class="fas fa-play"></i> Start Fetch
                        </button>
                        <button class="btn btn-warning" onclick="clearTable('lbln_courses')">
                            <i class="fas fa-trash"></i> Clear Table
                        </button>
                    </div>
                </div>

                <div id="courses-preview" class="tab-content">
                    <div class="data-preview" id="courses-preview-data">
                        <p>Click "Load Preview" to see the latest courses data.</p>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary" onclick="loadPreview('lbln_courses', 'courses-preview-data')">
                            <i class="fas fa-eye"></i> Load Preview
                        </button>
                    </div>
                </div>

                <div id="courses-settings" class="tab-content">
                    <div class="form-group">
                        <label>API Endpoint</label>
                        <input type="text" class="form-control" value="courses.php" readonly>
                    </div>
                    <div class="form-group">
                        <label>Parameters</label>
                        <input type="text" class="form-control" value="single_page=0&page=1" readonly>
                    </div>
                    <div class="form-group">
                        <label>Database Table</label>
                        <input type="text" class="form-control" value="lbln_courses" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Modal -->
    <div class="modal" id="analytics-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-chart-bar"></i> Analytics Management</h3>
                <button class="modal-close" onclick="hideModal('analytics-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabs">
                    <button class="tab active" onclick="switchTab('analytics-fetch')">Fetch</button>
                    <button class="tab" onclick="switchTab('analytics-preview')">Preview</button>
                    <button class="tab" onclick="switchTab('analytics-settings')">Settings</button>
                </div>

                <div id="analytics-fetch" class="tab-content active">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Fetch analytics for all courses currently in the database.
                    </div>
                    
                    <div class="real-time-log" id="analytics-fetch-log" style="height: 200px;">
                        <!-- Real-time logs will appear here -->
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-success" onclick="startFetch('analytics')">
                            <i class="fas fa-play"></i> Start Fetch
                        </button>
                        <button class="btn btn-warning" onclick="clearTable('lbln_course_analytics')">
                            <i class="fas fa-trash"></i> Clear Table
                        </button>
                    </div>
                </div>

                <div id="analytics-preview" class="tab-content">
                    <div class="data-preview" id="analytics-preview-data">
                        <p>Click "Load Preview" to see the latest analytics data.</p>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary" onclick="loadPreview('lbln_course_analytics', 'analytics-preview-data')">
                            <i class="fas fa-eye"></i> Load Preview
                        </button>
                    </div>
                </div>

                <div id="analytics-settings" class="tab-content">
                    <div class="form-group">
                        <label>API Endpoint</label>
                        <input type="text" class="form-control" value="courses.php" readonly>
                    </div>
                    <div class="form-group">
                        <label>Parameters</label>
                        <input type="text" class="form-control" value="id={course_id}&action=analytics" readonly>
                    </div>
                    <div class="form-group">
                        <label>Database Table</label>
                        <input type="text" class="form-control" value="lbln_course_analytics" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Modal -->
    <div class="modal" id="users-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-users"></i> Users Management</h3>
                <button class="modal-close" onclick="hideModal('users-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabs">
                    <button class="tab active" onclick="switchTab('users-fetch')">Fetch</button>
                    <button class="tab" onclick="switchTab('users-preview')">Preview</button>
                    <button class="tab" onclick="switchTab('users-settings')">Settings</button>
                </div>

                <div id="users-fetch" class="tab-content active">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Fetch users for all courses currently in the database. 
                        This may take several minutes depending on the number of courses and users.
                    </div>
                    
                    <div class="real-time-log" id="users-fetch-log" style="height: 200px;">
                        <!-- Real-time logs will appear here -->
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-success" onclick="startFetch('users')">
                            <i class="fas fa-play"></i> Start Fetch
                        </button>
                        <button class="btn btn-warning" onclick="clearTable('lbln_course_users')">
                            <i class="fas fa-trash"></i> Clear Table
                        </button>
                    </div>
                </div>

                <div id="users-preview" class="tab-content">
                    <div class="data-preview" id="users-preview-data">
                        <p>Click "Load Preview" to see the latest users data.</p>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary" onclick="loadPreview('lbln_course_users', 'users-preview-data')">
                            <i class="fas fa-eye"></i> Load Preview
                        </button>
                    </div>
                </div>

                <div id="users-settings" class="tab-content">
                    <div class="form-group">
                        <label>API Endpoint</label>
                        <input type="text" class="form-control" value="courses.php" readonly>
                    </div>
                    <div class="form-group">
                        <label>Parameters</label>
                        <input type="text" class="form-control" value="id={course_id}&action=users&single_page=0&page=1" readonly>
                    </div>
                    <div class="form-group">
                        <label>Database Table</label>
                        <input type="text" class="form-control" value="lbln_course_users" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logs Modal -->
    <div class="modal" id="logs-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-history"></i> All Activity Logs</h3>
                <button class="modal-close" onclick="hideModal('logs-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="log-container" id="all-logs" style="max-height: 60vh;">
                    <!-- All logs will be loaded here -->
                </div>
                <div class="btn-group">
                    <button class="btn btn-secondary" onclick="loadAllLogs()">
                        <i class="fas fa-sync-alt"></i> Refresh Logs
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Help Modal -->
    <div class="modal" id="help-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-question-circle"></i> Help & Documentation</h3>
                <button class="modal-close" onclick="hideModal('help-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <h4>How to Use</h4>
                <ol>
                    <li><strong>Fetch Courses:</strong> Click "Fetch Courses" to get all courses from the API.</li>
                    <li><strong>Fetch Analytics:</strong> After fetching courses, click "Fetch Analytics" to get analytics for each course.</li>
                    <li><strong>Fetch Users:</strong> Click "Fetch Users" to get users enrolled in each course.</li>
                    <li><strong>Fetch All:</strong> Use the "Fetch All Data" button to run all three operations sequentially.</li>
                </ol>
                
                <h4>Database Tables</h4>
                <ul>
                    <li><strong>lbln_courses:</strong> Stores all course information</li>
                    <li><strong>lbln_course_analytics:</strong> Stores analytics data for each course</li>
                    <li><strong>lbln_course_users:</strong> Stores user information for each course</li>
                </ul>
                
                <h4>Notes</h4>
                <ul>
                    <li>Always fetch courses first before fetching analytics or users.</li>
                    <li>Analytics and users are fetched for all courses currently in the database.</li>
                    <li>Data is automatically inserted or updated based on existence.</li>
                    <li>Use "Clear Table" buttons to remove all data from a table.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Modal -->
    <div class="modal" id="about-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-info-circle"></i> About</h3>
                <button class="modal-close" onclick="hideModal('about-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <h4>Lifebox Learning Network Data Fetcher</h4>
                <p>Version: 1.0.0</p>
                <p>This application fetches data from the Lifebox Learning Network API and stores it in a PostgreSQL database for monitoring and evaluation purposes.</p>
                
                <h4>Features</h4>
                <ul>
                    <li>Fetch courses, analytics, and users from Lifebox API</li>
                    <li>Store data in PostgreSQL database with proper schema</li>
                    <li>Real-time progress tracking and logging</li>
                    <li>Data preview and management interface</li>
                    <li>Comprehensive activity logging</li>
                </ul>
                
                <h4>Technical Details</h4>
                <ul>
                    <li>Backend: PHP 8.1+ with PDO PostgreSQL</li>
                    <li>Database: PostgreSQL with JSONB support</li>
                    <li>Frontend: Vanilla JavaScript with modern CSS</li>
                    <li>API Integration: Lifebox Learning Network REST API</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="assets/js/fetcher.js">

    </script>
</body>
</html>