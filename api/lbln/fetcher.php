<?php
// fetch_courses.php - Lifebox Learning Network Data Fetcher
// ==========================================================
// Purpose: Fetch, store, and manage data from Lifebox API into PostgreSQL
// Improved: Enhanced user fetching with progress tracking, selective fetching, and resumption
// ==========================================================

define('DEBUG_MODE', true);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Increase execution time for large datasets
set_time_limit(1800); // 30 minutes

// Database configuration
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'lifebox_mesystem');
define('DB_USER', 'postgres');
define('DB_PASSWORD', 'mikeintosh');

// Batch size for user fetching (reduces memory usage)
define('USER_FETCH_BATCH_SIZE', 100);
define('COURSES_PER_BATCH', 5); // Process multiple courses simultaneously

// Fetch status tracking constants
define('FETCH_STATUS_PENDING', 'pending');
define('FETCH_STATUS_RUNNING', 'running');
define('FETCH_STATUS_PAUSED', 'paused');
define('FETCH_STATUS_COMPLETED', 'completed');
define('FETCH_STATUS_FAILED', 'failed');

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
function getDbConnection()
{
    static $connection = null;

    if ($connection === null) {
        try {
            $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
            $connection = new PDO($dsn, DB_USER, DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            die(json_encode([
                'success' => false,
                'error' => 'Database connection failed: ' . $e->getMessage()
            ]));
        }
    }

    return $connection;
}

// Make API request with timeout handling
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
        CURLOPT_TIMEOUT => 60, // Reduced timeout for individual requests
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
function logFetchOperation($tableName, $operationType, $parameters = [])
{
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
function updateFetchLog($logId, $data)
{
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

// ============================================
// NEW FUNCTIONS FOR USER FETCHING IMPROVEMENTS
// ============================================

// Get course analytics summary (students count per course) - FIXED VERSION
function getCourseAnalyticsSummary()
{
    $db = getDbConnection();

    try {
        // First, let's debug what data we have
        $debugStmt = $db->prepare("
            SELECT course_id, COUNT(*) as total_records, 
                   MAX(analytics_date) as latest_date,
                   MAX(fetched_at) as latest_fetch
            FROM lbln_course_analytics 
            GROUP BY course_id
            ORDER BY latest_date DESC
            LIMIT 5
        ");
        $debugStmt->execute();
        $debugData = $debugStmt->fetchAll();
        error_log("Analytics debug data: " . json_encode($debugData));

        // Get the most recent analytics for each course
        $stmt = $db->prepare("
            WITH latest_analytics AS (
                SELECT DISTINCT ON (course_id) 
                    course_id,
                    students,
                    analytics_date,
                    fetched_at
                FROM lbln_course_analytics 
                ORDER BY course_id, analytics_date DESC, fetched_at DESC
            )
            SELECT 
                c.course_id,
                c.course_title,
                COALESCE(la.students, 0) as total_students,
                COUNT(DISTINCT cu.user_id) as fetched_users,
                c.created as course_created,
                MAX(cu.fetched_at) as last_user_fetch,
                la.analytics_date as last_analytics_date,
                la.fetched_at as last_analytics_fetch
            FROM lbln_courses c
            LEFT JOIN latest_analytics la ON c.course_id = la.course_id
            LEFT JOIN lbln_course_users cu ON c.course_id = cu.course_id
            WHERE c.is_active = TRUE
            GROUP BY c.course_id, c.course_title, c.created, 
                     la.students, la.analytics_date, la.fetched_at
            ORDER BY c.course_title
        ");

        $stmt->execute();
        $data = $stmt->fetchAll();

        // Debug the results
        error_log("Course analytics summary count: " . count($data));
        if (!empty($data)) {
            error_log("Sample course data: " . json_encode($data[0]));
        }

        return [
            'success' => true,
            'data' => $data,
            'count' => count($data)
        ];
    } catch (Exception $e) {
        error_log("Error in getCourseAnalyticsSummary: " . $e->getMessage());
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Force refresh analytics for specific courses
function refreshCourseAnalytics($courseIds = [])
{
    $db = getDbConnection();

    if (empty($courseIds)) {
        return ['success' => false, 'error' => 'No course IDs provided'];
    }

    $logId = logFetchOperation('lbln_course_analytics', 'refresh_analytics', [
        'course_ids' => $courseIds
    ]);

    $processed = 0;
    $inserted = 0;
    $errors = [];

    foreach ($courseIds as $courseId) {
        $processed++;

        try {
            // Get course info
            $stmt = $db->prepare("SELECT course_id, course_title FROM lbln_courses WHERE course_id = ?");
            $stmt->execute([$courseId]);
            $course = $stmt->fetch();

            if (!$course) {
                $errors[] = "Course $courseId not found";
                continue;
            }

            // Fetch analytics
            $response = makeApiRequest('courses.php', [
                'id' => $courseId,
                'action' => 'analytics'
            ]);

            if (!$response['success'] || !isset($response['data'])) {
                $errors[] = "Course $courseId: " . ($response['error'] ?? 'No analytics data');
                continue;
            }

            $analytics = $response['data'];

            // Fix numeric values
            $avgScoreRate = min($analytics['avg_score_rate'] ?? 0, 999.999);
            $successRate = min($analytics['success_rate'] ?? 0, 999.999);

            // Insert or update
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
                $courseId,
                $course['course_title'],
                $analytics['students'] ?? 0,
                $analytics['videos'] ?? 0,
                $analytics['learning_units'] ?? 0,
                $analytics['video_time'] ?? 0,
                $avgScoreRate,
                $successRate,
                $analytics['total_study_time'] ?? 0,
                $analytics['avg_time_to_finish'] ?? 0,
                $analytics['social_interactions'] ?? 0,
                $analytics['certificates_issued'] ?? 0,
                $analytics['video_viewing_time'] ?? 0
            ]);

            $inserted++;
        } catch (Exception $e) {
            $errors[] = "Course $courseId: " . $e->getMessage();
            error_log("Error refreshing analytics for $courseId: " . $e->getMessage());
        }

        usleep(100000); // 0.1 second delay
    }

    updateFetchLog($logId, [
        'items_processed' => $processed,
        'items_inserted' => $inserted,
        'errors' => $errors,
        'status' => empty($errors) ? 'completed' : 'completed_with_errors',
        'message' => "Refreshed analytics for $processed courses ($inserted updated)",
        'end_time' => date('Y-m-d H:i:s')
    ]);

    return [
        'success' => true,
        'processed' => $processed,
        'inserted' => $inserted,
        'errors' => $errors
    ];
}

// Create user fetch session for progress tracking
function createUserFetchSession($courseIds = [], $options = [])
{
    $db = getDbConnection();

    try {
        $sessionId = 'user_fetch_' . uniqid('', true);
        $selectedCourses = is_array($courseIds) ? $courseIds : [];

        // If no courses specified, fetch all active courses
        if (empty($selectedCourses)) {
            $stmt = $db->prepare("SELECT course_id FROM lbln_courses WHERE is_active = TRUE");
            $stmt->execute();
            $selectedCourses = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
        }

        // Initialize progress tracking for each course
        $courseProgress = [];
        foreach ($selectedCourses as $courseId) {
            $courseProgress[$courseId] = [
                'status' => FETCH_STATUS_PENDING,
                'processed_pages' => 0,
                'total_pages' => 0,
                'total_users' => 0,
                'fetched_users' => 0,
                'last_page' => 0,
                'errors' => []
            ];
        }

        $stmt = $db->prepare("
            INSERT INTO lbln_fetch_sessions 
            (session_id, session_type, target_table, selected_courses, 
             course_progress, total_courses, options, status, created_at)
            VALUES (?, 'user_fetch', 'lbln_course_users', ?::JSONB, 
                    ?::JSONB, ?, ?::JSONB, ?, CURRENT_TIMESTAMP)
            RETURNING session_id
        ");

        $stmt->execute([
            $sessionId,
            json_encode($selectedCourses),
            json_encode($courseProgress),
            count($selectedCourses),
            json_encode($options),
            FETCH_STATUS_PENDING
        ]);

        return [
            'success' => true,
            'session_id' => $sessionId,
            'total_courses' => count($selectedCourses),
            'selected_courses' => $selectedCourses
        ];
    } catch (Exception $e) {
        error_log("Error creating fetch session: " . $e->getMessage());
        return [
            'success' => false,
            'error' => 'Database error: ' . $e->getMessage()
        ];
    }
}

// Get user fetch session status
function getUserFetchSessionStatus($sessionId)
{
    $db = getDbConnection();

    try {
        $stmt = $db->prepare("
            SELECT * FROM lbln_fetch_sessions 
            WHERE session_id = ? AND session_type = 'user_fetch'
        ");

        $stmt->execute([$sessionId]);
        $session = $stmt->fetch();

        if (!$session) {
            return [
                'success' => false,
                'error' => 'Session not found'
            ];
        }

        // Calculate overall progress
        $progress = json_decode($session['course_progress'], true);
        $totalCourses = $session['total_courses'];
        $completedCourses = 0;
        $totalUsers = 0;
        $fetchedUsers = 0;

        foreach ($progress as $courseProgress) {
            if ($courseProgress['status'] === FETCH_STATUS_COMPLETED) {
                $completedCourses++;
            }
            $totalUsers += $courseProgress['total_users'];
            $fetchedUsers += $courseProgress['fetched_users'];
        }

        $overallProgress = $totalCourses > 0 ? ($completedCourses / $totalCourses) * 100 : 0;

        return [
            'success' => true,
            'session' => $session,
            'progress' => $progress,
            'overall_progress' => round($overallProgress, 2),
            'completed_courses' => $completedCourses,
            'total_courses' => $totalCourses,
            'fetched_users' => $fetchedUsers,
            'total_users' => $totalUsers,
            'status' => $session['status']
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Update course progress in session - IMPROVED VERSION
function updateCourseProgress($sessionId, $courseId, $progressData)
{
    $db = getDbConnection();

    try {
        // Get current session
        $stmt = $db->prepare("SELECT course_progress FROM lbln_fetch_sessions WHERE session_id = ?");
        $stmt->execute([$sessionId]);
        $session = $stmt->fetch();

        if (!$session) {
            error_log("Session not found: $sessionId");
            return false;
        }

        // Update specific course progress
        $progress = json_decode($session['course_progress'], true);

        if (isset($progress[$courseId])) {
            $progress[$courseId] = array_merge($progress[$courseId], $progressData);

            // Update session
            $stmt = $db->prepare("
                UPDATE lbln_fetch_sessions 
                SET course_progress = ?::JSONB, updated_at = CURRENT_TIMESTAMP 
                WHERE session_id = ?
            ");

            $result = $stmt->execute([json_encode($progress), $sessionId]);

            if (!$result) {
                error_log("Failed to update course progress for session $sessionId");
                return false;
            }

            return true;
        } else {
            error_log("Course $courseId not found in session $sessionId");
            return false;
        }
    } catch (Exception $e) {
        error_log("Error updating course progress: " . $e->getMessage());
        return false;
    }
}

// Mark course as completed in session
function markCourseAsCompleted($sessionId, $courseId, $totalUsers)
{
    $db = getDbConnection();

    try {
        $progressData = [
            'status' => FETCH_STATUS_COMPLETED,
            'fetched_users' => $totalUsers,
            'total_users' => $totalUsers,
            'completed_at' => date('Y-m-d H:i:s')
        ];

        return updateCourseProgress($sessionId, $courseId, $progressData);
    } catch (Exception $e) {
        error_log("Error marking course as completed: " . $e->getMessage());
        return false;
    }
}


// Debug function to check table structure
function debugTableStructure($tableName)
{
    $db = getDbConnection();

    try {
        $stmt = $db->prepare("
            SELECT column_name, data_type, is_nullable 
            FROM information_schema.columns 
            WHERE table_name = ?
            ORDER BY ordinal_position
        ");

        $stmt->execute([$tableName]);
        $columns = $stmt->fetchAll();

        error_log("Table structure for $tableName:");
        foreach ($columns as $col) {
            error_log("  {$col['column_name']} - {$col['data_type']} - Nullable: {$col['is_nullable']}");
        }

        return $columns;
    } catch (Exception $e) {
        error_log("Error getting table structure: " . $e->getMessage());
        return [];
    }
}


// Fetch users for specific course (with pagination) - UTM VALUES FIXED VERSION
function fetchUsersForCourse($courseId, $sessionId = null, $startPage = 1)
{
    // Debug table structure
    debugTableStructure('lbln_course_users');

    $db = getDbConnection();

    // Get course info
    $stmt = $db->prepare("SELECT course_id, course_title FROM lbln_courses WHERE course_id = ?");
    $stmt->execute([$courseId]);
    $course = $stmt->fetch();

    if (!$course) {
        return [
            'success' => false,
            'error' => 'Course not found'
        ];
    }

    $inserted = 0;
    $updated = 0;
    $skipped = 0;
    $errors = [];
    $totalPages = 1;
    $currentPage = $startPage;
    $hasMorePages = true;
    $batchCount = 0;

    // If session exists, update status to running
    if ($sessionId) {
        updateCourseProgress($sessionId, $courseId, [
            'status' => FETCH_STATUS_RUNNING,
            'current_page' => $currentPage
        ]);
    }

    while ($hasMorePages && $batchCount < USER_FETCH_BATCH_SIZE) {
        $response = makeApiRequest('courses.php', [
            'id' => $courseId,
            'action' => 'users',
            'single_page' => 0,
            'page' => $currentPage
        ]);

        if (!$response['success'] || !isset($response['data'])) {
            $errorMsg = $response['error'] ?? 'No user data received';
            $errors[] = "Page $currentPage: $errorMsg";

            // If session exists, record error
            if ($sessionId) {
                $currentErrors = [];
                try {
                    $progressStmt = $db->prepare("
                        SELECT course_progress->?->'errors' as errors 
                        FROM lbln_fetch_sessions WHERE session_id = ?
                    ");
                    $progressStmt->execute([$courseId, $sessionId]);
                    $errorData = $progressStmt->fetch();

                    if ($errorData && $errorData['errors']) {
                        $currentErrors = json_decode($errorData['errors'], true) ?? [];
                    }

                    $currentErrors[] = $errorMsg;
                    updateCourseProgress($sessionId, $courseId, [
                        'errors' => $currentErrors,
                        'last_error_page' => $currentPage
                    ]);
                } catch (Exception $e) {
                    error_log("Error updating course errors: " . $e->getMessage());
                }
            }

            break;
        }

        $users = $response['data'] ?? [];
        $meta = $response['meta'] ?? [];

        // Update total pages if available
        if (isset($meta['totalPagesAvailable'])) {
            $totalPages = $meta['totalPagesAvailable'];
        }

        // Process users in smaller batches for memory efficiency
        $userBatch = array_chunk($users, 50);

        foreach ($userBatch as $batch) {
            try {
                // Process each user individually
                foreach ($batch as $user) {
                    try {
                        // Extract all fields with proper defaults
                        $userId = $user['id'] ?? '';
                        $email = $user['email'] ?? '';
                        $username = $user['username'] ?? null;
                        $firstName = $user['first_name'] ?? null;
                        $middleName = null; // API doesn't provide middle name
                        $lastName = $user['last_name'] ?? null;

                        // Convert boolean fields to PostgreSQL format
                        $subscribedMarketing = isset($user['subscribed_for_marketing_emails']) && $user['subscribed_for_marketing_emails'] ? 't' : 'f';
                        $euCustomer = isset($user['eu_customer']) && $user['eu_customer'] ? 't' : 'f';
                        $isAdmin = isset($user['is_admin']) && $user['is_admin'] ? 't' : 'f';
                        $isInstructor = isset($user['is_instructor']) && $user['is_instructor'] ? 't' : 'f';
                        $isSuspended = isset($user['is_suspended']) && $user['is_suspended'] ? 't' : 'f';
                        $isReporter = isset($user['is_reporter']) && $user['is_reporter'] ? 't' : 'f';
                        $isAffiliate = isset($user['is_affiliate']) && $user['is_affiliate'] ? 't' : 'f';

                        // Extract role data
                        $roleLevel = isset($user['role']['level']) ? $user['role']['level'] : null;
                        $roleName = isset($user['role']['name']) ? $user['role']['name'] : null;

                        $referrerId = $user['referrer_id'] ?? null;
                        $created = $user['created'] ?? null;
                        $lastLogin = $user['last_login'] ?? null;
                        $signupApprovalStatus = $user['signup_approval_status'] ?? null;
                        $emailVerificationStatus = $user['email_verification_status'] ?? null;

                        // Prepare JSON fields with proper null handling
                        $fieldsJson = !empty($user['fields']) && is_array($user['fields']) ?
                            json_encode($user['fields']) :
                            json_encode([]);

                        $tagsJson = !empty($user['tags']) && is_array($user['tags']) ?
                            json_encode($user['tags']) :
                            json_encode([]);

                        $utmsJson = !empty($user['utms']) && is_array($user['utms']) ?
                            json_encode($user['utms']) :
                            json_encode([]);

                        $billingInfoJson = !empty($user['billing_info']) && (is_array($user['billing_info']) || $user['billing_info'] === null) ?
                            json_encode($user['billing_info']) :
                            json_encode([]);

                        // Extract specific UTM data for dedicated columns - FIXED VERSION
                        // Check if utms exists and is an array before accessing its keys
                        $fcCountry = null;
                        $fcReferrer = null;
                        $lcReferrer = null;
                        $lcCountry = null;

                        if (isset($user['utms']) && is_array($user['utms'])) {
                            $fcCountry = $user['utms']['fc_country'] ?? null;
                            $fcReferrer = $user['utms']['fc_referrer'] ?? null;
                            $lcReferrer = $user['utms']['lc_referrer'] ?? null;
                            $lcCountry = $user['utms']['lc_country'] ?? null;
                        }

                        $npsScore = isset($user['nps_score']) ? $user['nps_score'] : null;
                        $npsComment = isset($user['nps_comment']) ? $user['nps_comment'] : null;

                        // Debug: Log extracted values including UTM
                        error_log("Processing user {$userId}: username='{$username}', roleLevel='{$roleLevel}', roleName='{$roleName}'");
                        error_log("UTM values - fc_country='{$fcCountry}', fc_referrer='{$fcReferrer}', lc_referrer='{$lcReferrer}', lc_country='{$lcCountry}'");

                        // Check if user already exists for this course
                        $checkStmt = $db->prepare("
                            SELECT data_id FROM lbln_course_users 
                            WHERE course_id = ? AND user_id = ?
                        ");
                        $checkStmt->execute([$courseId, $userId]);
                        $exists = $checkStmt->fetch();

                        if ($exists) {
                            // Update existing user with ALL fields
                            $stmt = $db->prepare("
                                UPDATE lbln_course_users SET
                                    email = ?,
                                    username = ?,
                                    first_name = ?,
                                    middle_name = ?,
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

                            $result = $stmt->execute([
                                $email,
                                $username,
                                $firstName,
                                $middleName,
                                $lastName,
                                $subscribedMarketing,
                                $euCustomer,
                                $isAdmin,
                                $isInstructor,
                                $isSuspended,
                                $isReporter,
                                $isAffiliate,
                                $roleLevel,
                                $roleName,
                                $referrerId,
                                $created,
                                $lastLogin,
                                $signupApprovalStatus,
                                $emailVerificationStatus,
                                $fieldsJson,
                                $tagsJson,
                                $utmsJson,
                                $billingInfoJson,
                                $npsScore,
                                $npsComment,
                                $fcCountry,
                                $fcReferrer,
                                $lcReferrer,
                                $lcCountry,
                                $courseId,
                                $userId
                            ]);

                            if ($result && $stmt->rowCount() > 0) {
                                $updated++;
                                error_log("Updated user {$userId} for course {$courseId}");
                            } else {
                                error_log("User {$userId} exists but no update needed or update failed");
                            }
                        } else {
                            // Insert new user with ALL fields
                            $stmt = $db->prepare("
                                INSERT INTO lbln_course_users (
                                    course_id, course_title, user_id, email, username,
                                    first_name, middle_name, last_name, subscribed_for_marketing_emails,
                                    eu_customer, is_admin, is_instructor, is_suspended,
                                    is_reporter, is_affiliate, role_level, role_name,
                                    referrer_id, created, last_login, signup_approval_status,
                                    email_verification_status, fields, tags, utms,
                                    billing_info, nps_score, nps_comment, fc_country,
                                    fc_referrer, lc_referrer, lc_country, fetched_at, last_seen
                                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?::JSONB, ?::JSONB, ?::JSONB, ?::JSONB, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)
                            ");

                            // Debug: Log the values being inserted
                            error_log("Inserting user: {$userId} for course: {$courseId}");

                            $result = $stmt->execute([
                                $courseId,
                                $course['course_title'],
                                $userId,
                                $email,
                                $username,
                                $firstName,
                                $middleName,
                                $lastName,
                                $subscribedMarketing,
                                $euCustomer,
                                $isAdmin,
                                $isInstructor,
                                $isSuspended,
                                $isReporter,
                                $isAffiliate,
                                $roleLevel,
                                $roleName,
                                $referrerId,
                                $created,
                                $lastLogin,
                                $signupApprovalStatus,
                                $emailVerificationStatus,
                                $fieldsJson,
                                $tagsJson,
                                $utmsJson,
                                $billingInfoJson,
                                $npsScore,
                                $npsComment,
                                $fcCountry,
                                $fcReferrer,
                                $lcReferrer,
                                $lcCountry
                            ]);

                            if ($result) {
                                $inserted++;
                                error_log("Successfully inserted user {$userId} for course {$courseId}");
                                error_log("UTM saved: fc_country={$fcCountry}, fc_referrer={$fcReferrer}, lc_referrer={$lcReferrer}, lc_country={$lcCountry}");
                            } else {
                                $errorInfo = $stmt->errorInfo();
                                throw new Exception("Insert failed: " . ($errorInfo[2] ?? 'Unknown error'));
                            }
                        }
                    } catch (Exception $e) {
                        $errors[] = "User {$user['id']}: " . $e->getMessage();
                        error_log("Error inserting/updating user {$user['id']}: " . $e->getMessage());
                        $skipped++;

                        // Try a simplified insert with essential fields including UTM
                        error_log("Trying simplified insert for user {$user['id']}");
                        try {
                            // Try a minimal insert with just essential fields including UTM
                            $simpleStmt = $db->prepare("
                                INSERT INTO lbln_course_users (
                                    course_id, course_title, user_id, email, username,
                                    first_name, last_name, created, last_login,
                                    subscribed_for_marketing_emails, eu_customer,
                                    is_admin, is_instructor, is_suspended,
                                    is_reporter, is_affiliate, role_level, role_name,
                                    email_verification_status,
                                    fc_country, fc_referrer, lc_referrer, lc_country
                                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                            ");

                            $simpleResult = $simpleStmt->execute([
                                $courseId,
                                $course['course_title'],
                                $userId,
                                $email,
                                $username,
                                $firstName,
                                $lastName,
                                $created,
                                $lastLogin,
                                $subscribedMarketing,
                                $euCustomer,
                                $isAdmin,
                                $isInstructor,
                                $isSuspended,
                                $isReporter,
                                $isAffiliate,
                                $roleLevel,
                                $roleName,
                                $emailVerificationStatus,
                                $fcCountry,
                                $fcReferrer,
                                $lcReferrer,
                                $lcCountry
                            ]);

                            if ($simpleResult) {
                                $inserted++;
                                // Remove the error since we succeeded
                                array_pop($errors);
                                $skipped--;
                                error_log("Simplified insert succeeded for user {$user['id']}");
                                error_log("UTM in simplified insert: fc_country={$fcCountry}, fc_referrer={$fcReferrer}, lc_referrer={$lcReferrer}, lc_country={$lcCountry}");
                            } else {
                                throw new Exception("Simplified insert failed");
                            }
                        } catch (Exception $e2) {
                            error_log("Simplified insert also failed: " . $e2->getMessage());
                        }
                    }
                }

                $batchCount++;

                // Update progress if session exists
                if ($sessionId) {
                    updateCourseProgress($sessionId, $courseId, [
                        'processed_pages' => $currentPage,
                        'fetched_users' => $inserted + $updated,
                        'current_page' => $currentPage
                    ]);
                }
            } catch (Exception $e) {
                $errors[] = "Batch processing failed: " . $e->getMessage();
                error_log("Batch processing error: " . $e->getMessage());
                $skipped += count($batch);
            }

            // Small delay to prevent overwhelming the API
            usleep(100000); // 0.1 second
        }

        // Check if there are more pages
        $fetchedPages = $meta['totalPagesFetched'] ?? $currentPage;

        if ($currentPage >= $totalPages || $currentPage >= $fetchedPages || empty($users)) {
            $hasMorePages = false;
        } else {
            $currentPage++;
        }
    }

    // If session exists, update final status
    if ($sessionId) {
        if (!$hasMorePages) {
            markCourseAsCompleted($sessionId, $courseId, $inserted + $updated);
        } else {
            updateCourseProgress($sessionId, $courseId, [
                'status' => FETCH_STATUS_PAUSED,
                'last_page' => $currentPage - 1,
                'processed_pages' => $currentPage - 1,
                'fetched_users' => $inserted + $updated,
                'total_users' => ($inserted + $updated) * ($totalPages / max(1, $currentPage - 1)) // Estimate
            ]);
        }
    }

    return [
        'success' => true,
        'course_id' => $courseId,
        'course_title' => $course['course_title'],
        'total_pages' => $totalPages,
        'processed_pages' => $currentPage - 1,
        'has_more_pages' => $hasMorePages,
        'next_page' => $hasMorePages ? $currentPage : null,
        'inserted' => $inserted,
        'updated' => $updated,
        'skipped' => $skipped,
        'total_users' => $inserted + $updated,
        'errors' => $errors,
        'real_time_logs' => generateRealtimeLogs($courseId, $course['course_title'], $currentPage - 1, $totalPages, $inserted + $updated)
    ];
}

// Fetch users for multiple courses with progress tracking
function fetchCourseUsersWithProgress($sessionId = null, $batchSize = COURSES_PER_BATCH)
{
    $db = getDbConnection();

    if (!$sessionId) {
        // Create new session
        $sessionResult = createUserFetchSession();
        if (!$sessionResult['success']) {
            return $sessionResult;
        }
        $sessionId = $sessionResult['session_id'];
    }

    // Get session details
    $sessionStatus = getUserFetchSessionStatus($sessionId);
    if (!$sessionStatus['success']) {
        return $sessionStatus;
    }

    $session = $sessionStatus['session'];
    $progress = $sessionStatus['progress'];
    $selectedCourses = json_decode($session['selected_courses'], true);

    $logId = logFetchOperation('lbln_course_users', 'fetch_users_progress', [
        'session_id' => $sessionId,
        'courses_count' => count($selectedCourses),
        'batch_size' => $batchSize
    ]);

    $totalProcessed = 0;
    $batchProcessed = 0;
    $results = [];
    $errors = [];

    // Get pending or paused courses
    $coursesToProcess = [];
    foreach ($progress as $courseId => $courseProgress) {
        if (in_array($courseProgress['status'], [FETCH_STATUS_PENDING, FETCH_STATUS_PAUSED, FETCH_STATUS_RUNNING])) {
            $coursesToProcess[] = [
                'course_id' => $courseId,
                'status' => $courseProgress['status'],
                'last_page' => $courseProgress['last_page'] ?? 1
            ];
        }
    }

    // Process courses in batches
    $batchCourses = array_slice($coursesToProcess, 0, $batchSize);

    foreach ($batchCourses as $courseInfo) {
        $totalProcessed++;
        $batchProcessed++;

        $startPage = $courseInfo['status'] === FETCH_STATUS_PAUSED
            ? ($courseInfo['last_page'] + 1)
            : 1;

        $result = fetchUsersForCourse($courseInfo['course_id'], $sessionId, $startPage);
        $results[] = $result;

        if (!empty($result['errors'])) {
            $errors = array_merge($errors, $result['errors']);
        }

        // Small delay between courses
        usleep(200000); // 0.2 second

        // Break if we've processed enough for this batch
        if ($batchProcessed >= $batchSize) {
            break;
        }
    }

    // Check if all courses are completed
    $sessionStatus = getUserFetchSessionStatus($sessionId);
    $allCompleted = true;
    foreach ($sessionStatus['progress'] as $courseProgress) {
        if ($courseProgress['status'] !== FETCH_STATUS_COMPLETED) {
            $allCompleted = false;
            break;
        }
    }

    // Update session status
    $sessionStatusUpdate = $allCompleted ? FETCH_STATUS_COMPLETED : FETCH_STATUS_RUNNING;
    $db->prepare("
        UPDATE lbln_fetch_sessions 
        SET status = ?, updated_at = CURRENT_TIMESTAMP 
        WHERE session_id = ?
    ")->execute([$sessionStatusUpdate, $sessionId]);

    // Calculate totals
    $totalUsers = 0;
    $totalInserted = 0;
    $totalUpdated = 0;
    $totalSkipped = 0;

    foreach ($results as $result) {
        if ($result['success']) {
            $totalUsers += $result['total_users'];
            $totalInserted += $result['inserted'];
            $totalUpdated += $result['updated'];
            $totalSkipped += $result['skipped'];
        }
    }

    updateFetchLog($logId, [
        'items_processed' => $totalProcessed,
        'items_inserted' => $totalInserted,
        'items_updated' => $totalUpdated,
        'items_skipped' => $totalSkipped,
        'errors' => $errors,
        'status' => empty($errors) ? ($allCompleted ? 'completed' : 'partial') : 'completed_with_errors',
        'message' => "Processed $batchProcessed courses in batch ($totalUsers users, $totalInserted inserted, $totalUpdated updated)",
        'end_time' => date('Y-m-d H:i:s')
    ]);

    return [
        'success' => true,
        'session_id' => $sessionId,
        'batch_processed' => $batchProcessed,
        'total_processed' => $totalProcessed,
        'courses_to_process' => count($coursesToProcess),
        'all_completed' => $allCompleted,
        'total_users' => $totalUsers,
        'inserted' => $totalInserted,
        'updated' => $totalUpdated,
        'skipped' => $totalSkipped,
        'errors' => $errors,
        'session_status' => $sessionStatusUpdate,
        'progress' => $sessionStatus,
        'detailed_results' => $results, // ADD THIS LINE - includes per-course details
        'log_entries' => generateLogEntries($results)
    ];
}


// Add this function after the fetchCourseUsersWithProgress() function:
function generateLogEntries($results)
{
    $logs = [];

    foreach ($results as $result) {
        if ($result['success']) {
            $logs[] = [
                'type' => 'info',
                'message' => "Course '{$result['course_title']}' ({$result['course_id']}): " .
                    "Pages processed: {$result['processed_pages']}/{$result['total_pages']}, " .
                    "Users: {$result['total_users']} (Inserted: {$result['inserted']}, Updated: {$result['updated']}, Skipped: {$result['skipped']})"
            ];

            if ($result['has_more_pages']) {
                $logs[] = [
                    'type' => 'warning',
                    'message' => "Course '{$result['course_title']}' has more pages to fetch. Will continue from page {$result['next_page']}"
                ];
            } else {
                $logs[] = [
                    'type' => 'success',
                    'message' => "Course '{$result['course_title']}' completed!"
                ];
            }

            if (!empty($result['errors'])) {
                foreach ($result['errors'] as $error) {
                    $logs[] = [
                        'type' => 'error',
                        'message' => "Error in '{$result['course_title']}': $error"
                    ];
                }
            }
        } else {
            $logs[] = [
                'type' => 'error',
                'message' => "Failed to fetch '{$result['course_title']}': {$result['error']}"
            ];
        }
    }

    return $logs;
}


// Add this function after generateLogEntries():
function generateRealtimeLogs($courseId, $courseTitle, $currentPage, $totalPages, $totalUsers)
{
    $timestamp = date('H:i:s');
    $logs = [];

    $logs[] = [
        'type' => 'info',
        'timestamp' => $timestamp,
        'message' => "Processing '$courseTitle' - Page $currentPage/$totalPages"
    ];

    if ($totalUsers > 0) {
        $logs[] = [
            'type' => 'success',
            'timestamp' => $timestamp,
            'message' => "Fetched $totalUsers users from '$courseTitle'"
        ];
    }

    return $logs;
}

// Get active user fetch sessions
function getActiveUserFetchSessions()
{
    $db = getDbConnection();

    try {
        $stmt = $db->prepare("
            SELECT * FROM lbln_fetch_sessions 
            WHERE session_type = 'user_fetch' 
            AND status IN ('pending', 'running', 'paused')
            ORDER BY created_at DESC
        ");

        $stmt->execute();
        $sessions = $stmt->fetchAll();

        // Enhance sessions with progress details
        foreach ($sessions as &$session) {
            $progress = getUserFetchSessionStatus($session['session_id']);
            if ($progress['success']) {
                $session['overall_progress'] = $progress['overall_progress'];
                $session['completed_courses'] = $progress['completed_courses'];
                $session['total_courses'] = $progress['total_courses'];
                $session['fetched_users'] = $progress['fetched_users'];
            }
        }

        return [
            'success' => true,
            'sessions' => $sessions,
            'count' => count($sessions)
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// Resume specific user fetch session
function resumeUserFetchSession($sessionId, $batchSize = COURSES_PER_BATCH)
{
    return fetchCourseUsersWithProgress($sessionId, $batchSize);
}

// Cancel/delete user fetch session
function cancelUserFetchSession($sessionId)
{
    $db = getDbConnection();

    try {
        $stmt = $db->prepare("
            DELETE FROM lbln_fetch_sessions 
            WHERE session_id = ? AND session_type = 'user_fetch'
        ");

        $stmt->execute([$sessionId]);

        return [
            'success' => true,
            'message' => 'Session cancelled successfully'
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}

// ============================================
// ORIGINAL FUNCTIONS (with minor improvements)
// ============================================

// SAFE VERSION - fetchAllCourses
function fetchAllCourses()
{
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

        // Prepare both statements
        $updateStmt = $db->prepare("
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

        $insertStmt = $db->prepare("
            INSERT INTO lbln_courses (
                course_id, course_title, categories, description, name,
                image, course_image, original_price, discount_price,
                final_price, access, expires, expires_type, drip_feed,
                identifiers, after_purchase, author, created, modified
            ) VALUES (?, ?, ?::JSONB, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?::JSONB, ?::JSONB, ?::JSONB, ?, ?)
        ");

        foreach ($courses as $course) {
            try {
                // Check if course exists
                $checkStmt = $db->prepare("SELECT data_id FROM lbln_courses WHERE course_id = ?");
                $checkStmt->execute([$course['id']]);
                $exists = $checkStmt->fetch();

                // Prepare all values safely
                $courseId = $course['id'];
                $courseTitle = $course['title'] ?? '';
                $description = $course['description'] ?? '';

                // Handle categories
                $categories = !empty($course['categories']) ? json_encode($course['categories']) : json_encode([]);

                // Handle author safely
                $authorName = null;
                $authorImage = null;
                if (isset($course['author']) && is_array($course['author'])) {
                    $authorName = $course['author']['name'] ?? null;
                    $authorImage = $course['author']['image'] ?? null;
                }
                $author = !empty($course['author']) ? json_encode($course['author']) : json_encode([]);

                $courseImage = $course['courseImage'] ?? null;
                $originalPrice = $course['original_price'] ?? 0;
                $discountPrice = $course['discount_price'] ?? 0;
                $finalPrice = $course['final_price'] ?? 0;
                $access = $course['access'] ?? 'free';

                // Handle expires
                $expires = null;
                if (!empty($course['expires'])) {
                    $expires = date('Y-m-d H:i:s', $course['expires']);
                }

                $expiresType = $course['expiresType'] ?? null;
                $dripFeed = $course['dripFeed'] ?? 'none';

                // Handle other JSON fields
                $identifiers = !empty($course['identifiers']) ? json_encode($course['identifiers']) : json_encode([]);
                $afterPurchase = !empty($course['afterPurchase']) ? json_encode($course['afterPurchase']) : json_encode([]);

                $created = $course['created'] ?? null;
                $modified = $course['modified'] ?? null;

                if ($exists) {
                    // Update existing course
                    $updateStmt->execute([
                        $courseTitle,
                        $categories,
                        $description,
                        $authorName,
                        $authorImage,
                        $courseImage,
                        $originalPrice,
                        $discountPrice,
                        $finalPrice,
                        $access,
                        $expires,
                        $expiresType,
                        $dripFeed,
                        $identifiers,
                        $afterPurchase,
                        $author,
                        $created,
                        $modified,
                        $courseId
                    ]);

                    $updated++;
                } else {
                    // Insert new course
                    $insertStmt->execute([
                        $courseId,
                        $courseTitle,
                        $categories,
                        $description,
                        $authorName,
                        $authorImage,
                        $courseImage,
                        $originalPrice,
                        $discountPrice,
                        $finalPrice,
                        $access,
                        $expires,
                        $expiresType,
                        $dripFeed,
                        $identifiers,
                        $afterPurchase,
                        $author,
                        $created,
                        $modified
                    ]);

                    $inserted++;
                }
            } catch (Exception $e) {
                $errors[] = "Course {$course['id']}: " . $e->getMessage();
                error_log("Error processing course {$course['id']}: " . $e->getMessage());
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

// Fetch course analytics - FIXED VERSION
function fetchCourseAnalytics()
{
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

            // Fix numeric values to prevent overflow
            $avgScoreRate = $analytics['avg_score_rate'] ?? 0;
            $successRate = $analytics['success_rate'] ?? 0;

            // Cap values at 999.999 if they're too high
            if ($avgScoreRate > 999.999) {
                $avgScoreRate = 999.999;
                error_log("Capped avg_score_rate for course {$course['course_id']} from {$analytics['avg_score_rate']} to 999.999");
            }

            if ($successRate > 999.999) {
                $successRate = 999.999;
                error_log("Capped success_rate for course {$course['course_id']} from {$analytics['success_rate']} to 999.999");
            }

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
                $avgScoreRate,
                $successRate,
                $analytics['total_study_time'] ?? 0,
                $analytics['avg_time_to_finish'] ?? 0,
                $analytics['social_interactions'] ?? 0,
                $analytics['certificates_issued'] ?? 0,
                $analytics['video_viewing_time'] ?? 0
            ]);

            $inserted++;
        } catch (Exception $e) {
            $errors[] = "Course {$course['course_id']}: " . $e->getMessage();
            error_log("Error fetching analytics for course {$course['course_id']}: " . $e->getMessage());
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

// OLD fetchCourseUsers function - kept for backward compatibility
function fetchCourseUsers()
{
    return fetchCourseUsersWithProgress();
}

// Clear table data
function clearTableData($tableName)
{
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
function getTableStats($tableName = null)
{
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
function getRecentLogs($limit = 20)
{
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
function previewTableData($tableName, $limit = 10)
{
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

// Handle AJAX requests with new actions
function handleAjaxRequest()
{
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

        case 'fetch_users_progress':
            $sessionId = $_POST['session_id'] ?? null;
            $batchSize = $_POST['batch_size'] ?? COURSES_PER_BATCH;
            $data = fetchCourseUsersWithProgress($sessionId, $batchSize);
            break;

        case 'get_course_analytics_summary':
            $data = getCourseAnalyticsSummary();
            break;

        case 'refresh_course_analytics':
            $courseIds = $_POST['course_ids'] ?? [];
            if (!empty($courseIds) && is_string($courseIds)) {
                $courseIds = json_decode($courseIds, true) ?? [];
            }
            $data = refreshCourseAnalytics($courseIds);
            break;

        case 'create_user_fetch_session':
            $courseIds = $_POST['course_ids'] ?? [];
            if (!empty($courseIds) && is_string($courseIds)) {
                $courseIds = json_decode($courseIds, true) ?? [];
            }
            $options = $_POST['options'] ?? [];
            if (!empty($options) && is_string($options)) {
                $options = json_decode($options, true) ?? [];
            }
            $data = createUserFetchSession($courseIds, $options);
            break;

        case 'get_user_fetch_session_status':
            $sessionId = $_POST['session_id'] ?? '';
            $data = getUserFetchSessionStatus($sessionId);
            break;

        case 'get_active_user_fetch_sessions':
            $data = getActiveUserFetchSessions();
            break;

        case 'resume_user_fetch_session':
            $sessionId = $_POST['session_id'] ?? '';
            $batchSize = $_POST['batch_size'] ?? COURSES_PER_BATCH;
            $data = resumeUserFetchSession($sessionId, $batchSize);
            break;

        case 'cancel_user_fetch_session':
            $sessionId = $_POST['session_id'] ?? '';
            $data = cancelUserFetchSession($sessionId);
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

// Create fetch_sessions table if not exists
function createFetchSessionsTable()
{
    $db = getDbConnection();

    try {
        $db->exec("
        CREATE TABLE IF NOT EXISTS lbln_fetch_sessions (
            id SERIAL PRIMARY KEY,
            session_id VARCHAR(100) NOT NULL UNIQUE,
            session_type VARCHAR(50) NOT NULL,
            target_table VARCHAR(50) NOT NULL,
            selected_courses JSONB,
            course_progress JSONB,
            total_courses INTEGER DEFAULT 0,
            options JSONB,
            status VARCHAR(20) DEFAULT 'pending',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            completed_at TIMESTAMP
        );

        CREATE INDEX idx_fetch_sessions_type ON lbln_fetch_sessions (session_type);
        CREATE INDEX idx_fetch_sessions_status ON lbln_fetch_sessions (status);
        CREATE INDEX idx_fetch_sessions_created ON lbln_fetch_sessions (created_at);
                    )
        ");

        return true;
    } catch (Exception $e) {
        error_log("Failed to create fetch_sessions table: " . $e->getMessage());
        return false;
    }
}

// Initialize fetch sessions table
createFetchSessionsTable();

// Get current statistics
$stats = getTableStats();
$recentLogs = getRecentLogs(10);
$courseAnalytics = getCourseAnalyticsSummary();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox Learning Network - Advanced Data Fetcher</title>
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #038DA9;
            --primary-dark: #02708A;
            --primary-light: #E6F4F7;
            --secondary: #6C757D;
            --success: #28A745;
            --warning: #FFC107;
            --danger: #DC3545;
            --info: #17A2B8;
            --light: #F8F9FA;
            --dark: #343A40;
            --border: #DEE2E6;
            --radius: 8px;
            --radius-sm: 4px;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 5px 20px rgba(0, 0, 0, 0.15);
            --shadow-xl: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px;
            color: var(--dark);
        }

        .container {
            max-width: 1600px;
            margin: 0 auto;
        }

        .header {
            background: white;
            border-radius: var(--radius);
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
            border-left: 5px solid var(--primary);
        }

        .header h1 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header h1 i {
            color: var(--primary);
            font-size: 2rem;
        }

        .header .subtitle {
            color: var(--secondary);
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: var(--radius);
            padding: 25px;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 4px solid var(--primary);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .stat-card.courses {
            border-top-color: #4CAF50;
        }

        .stat-card.analytics {
            border-top-color: #2196F3;
        }

        .stat-card.users {
            border-top-color: #FF9800;
        }

        .stat-card h3 {
            color: var(--dark);
            font-size: 1.5rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stat-card h3 i {
            font-size: 1.8rem;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 15px 0;
        }

        .stat-meta {
            color: var(--secondary);
            font-size: 0.9rem;
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .action-card {
            background: white;
            border-radius: var(--radius);
            padding: 25px;
            box-shadow: var(--shadow);
        }

        .action-card h3 {
            color: var(--dark);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-light);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-card h3 i {
            color: var(--primary);
        }

        .btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: var(--radius-sm);
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-success:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        .btn-warning {
            background: var(--warning);
            color: var(--dark);
        }

        .btn-warning:hover {
            background: #E0A800;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background: #C82333;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--secondary);
            color: white;
        }

        .btn-secondary:hover {
            background: #5A6268;
            transform: translateY(-2px);
        }

        .btn-info {
            background: var(--info);
            color: white;
        }

        .btn-info:hover {
            background: #138496;
            transform: translateY(-2px);
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 0.85rem;
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
        }

        .log-section {
            background: white;
            border-radius: var(--radius);
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .log-section h3 {
            color: var(--dark);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .log-container {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 15px;
            background: var(--light);
        }

        .log-entry {
            padding: 12px 15px;
            margin-bottom: 10px;
            background: white;
            border-radius: var(--radius-sm);
            border-left: 4px solid var(--primary);
            font-family: 'Monaco', 'Courier New', monospace;
            font-size: 0.9rem;
        }

        .log-entry.success {
            border-left-color: var(--success);
        }

        .log-entry.error {
            border-left-color: var(--danger);
        }

        .log-entry.warning {
            border-left-color: var(--warning);
        }

        .log-entry.info {
            border-left-color: var(--info);
        }

        .log-time {
            color: var(--secondary);
            font-size: 0.8rem;
            margin-bottom: 5px;
        }

        .log-message {
            color: var(--dark);
            font-weight: 500;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: var(--radius);
            width: 90%;
            max-width: 1200px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            background: var(--primary);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            color: white;
            margin: 0;
        }

        .modal-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 5px;
            transition: transform 0.2s;
        }

        .modal-close:hover {
            transform: scale(1.1);
        }

        .modal-body {
            padding: 30px;
            max-height: 60vh;
            overflow-y: auto;
        }

        .modal-body-lg {
            max-height: 70vh;
        }

        .progress-container {
            background: var(--light);
            border-radius: var(--radius-sm);
            padding: 20px;
            margin-bottom: 20px;
        }

        .progress-bar {
            height: 25px;
            background: var(--border);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 10px;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--info));
            width: 0%;
            transition: width 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-image: linear-gradient(-45deg,
                    rgba(255, 255, 255, 0.2) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(255, 255, 255, 0.2) 50%,
                    rgba(255, 255, 255, 0.2) 75%,
                    transparent 75%,
                    transparent);
            background-size: 50px 50px;
            animation: moveStripes 2s linear infinite;
        }

        @keyframes moveStripes {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 50px 50px;
            }
        }

        .progress-text {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: var(--secondary);
        }

        .real-time-log {
            background: #1E1E1E;
            color: #00FF00;
            font-family: 'Monaco', 'Courier New', monospace;
            padding: 15px;
            border-radius: var(--radius-sm);
            max-height: 300px;
            overflow-y: auto;
            margin-bottom: 20px;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .log-line {
            margin-bottom: 5px;
            padding: 5px 0;
            border-bottom: 1px solid #333;
        }

        .log-line:last-child {
            border-bottom: none;
        }

        .log-line.success {
            color: #28a745;
        }

        .log-line.error {
            color: #dc3545;
        }

        .log-line.warning {
            color: #ffc107;
        }

        .log-line.info {
            color: #17a2b8;
        }

        .data-preview {
            background: var(--light);
            border-radius: var(--radius-sm);
            padding: 15px;
            max-height: 400px;
            overflow-y: auto;
        }

        .preview-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.85rem;
        }

        .preview-table th {
            background: var(--primary);
            color: white;
            padding: 10px;
            text-align: left;
            position: sticky;
            top: 0;
        }

        .preview-table td {
            padding: 8px 10px;
            border-bottom: 1px solid var(--border);
        }

        .preview-table tr:hover {
            background: var(--primary-light);
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-success {
            background: #D4EDDA;
            color: #155724;
        }

        .status-error {
            background: #F8D7DA;
            color: #721C24;
        }

        .status-warning {
            background: #FFF3CD;
            color: #856404;
        }

        .status-running {
            background: #D1ECF1;
            color: #0C5460;
        }

        .status-pending {
            background: #E2E3E5;
            color: #383D41;
        }

        .status-paused {
            background: #FFF3CD;
            color: #856404;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: var(--secondary);
            font-size: 0.9rem;
            margin-top: 30px;
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .tabs {
            display: flex;
            border-bottom: 1px solid var(--border);
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .tab {
            padding: 12px 25px;
            background: none;
            border: none;
            border-bottom: 3px solid transparent;
            cursor: pointer;
            font-weight: 600;
            color: var(--secondary);
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .tab:hover {
            color: var(--primary);
        }

        .tab.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(3, 141, 169, 0.1);
        }

        .alert {
            padding: 15px;
            border-radius: var(--radius-sm);
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .alert-success {
            background: #D4EDDA;
            color: #155724;
            border-left: 4px solid #28A745;
        }

        .alert-error {
            background: #F8D7DA;
            color: #721C24;
            border-left: 4px solid #DC3545;
        }

        .alert-warning {
            background: #FFF3CD;
            color: #856404;
            border-left: 4px solid #FFC107;
        }

        .alert-info {
            background: #D1ECF1;
            color: #0C5460;
            border-left: 4px solid #17A2B8;
        }

        .alert i {
            font-size: 1.2rem;
            margin-top: 2px;
        }

        /* Course selection styles */
        .courses-selection-container {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 15px;
            background: var(--light);
        }

        .course-checkbox-item {
            padding: 12px 15px;
            margin-bottom: 8px;
            background: white;
            border-radius: var(--radius-sm);
            border-left: 3px solid var(--primary);
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.2s;
        }

        .course-checkbox-item:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow);
        }

        .course-checkbox-item.selected {
            background: var(--primary-light);
            border-left-color: var(--success);
        }

        .course-checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .course-info {
            flex: 1;
        }

        .course-title {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .course-meta {
            display: flex;
            gap: 20px;
            font-size: 0.85rem;
            color: var(--secondary);
        }

        .course-stats {
            display: flex;
            gap: 15px;
            margin-left: auto;
        }

        .stat-badge {
            padding: 4px 10px;
            background: var(--light);
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .stat-badge.students {
            background: #E8F5E9;
            color: #2E7D32;
        }

        .stat-badge.fetched {
            background: #E3F2FD;
            color: #1565C0;
        }

        /* Session management styles */
        .sessions-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .session-card {
            background: white;
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: var(--shadow);
            border-left: 4px solid var(--primary);
            transition: all 0.3s;
        }

        .session-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .session-card.running {
            border-left-color: var(--info);
            background: linear-gradient(to right, #f8fdff, white);
        }

        .session-card.paused {
            border-left-color: var(--warning);
            background: linear-gradient(to right, #fffdf6, white);
        }

        .session-card.completed {
            border-left-color: var(--success);
            background: linear-gradient(to right, #f8fff9, white);
        }

        .session-card.failed {
            border-left-color: var(--danger);
            background: linear-gradient(to right, #fff8f8, white);
        }

        .session-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .session-id {
            font-family: 'Monaco', 'Courier New', monospace;
            font-size: 0.9rem;
            color: var(--secondary);
            background: var(--light);
            padding: 4px 8px;
            border-radius: 4px;
        }

        .session-progress {
            margin: 15px 0;
        }

        .session-courses {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .course-progress-badge {
            padding: 6px 12px;
            background: var(--light);
            border-radius: 16px;
            font-size: 0.8rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .course-progress-badge.completed {
            background: #D4EDDA;
            color: #155724;
        }

        .course-progress-badge.running {
            background: #D1ECF1;
            color: #0C5460;
        }

        .course-progress-badge.pending {
            background: #E2E3E5;
            color: #383D41;
        }

        .course-progress-badge.paused {
            background: #FFF3CD;
            color: #856404;
        }

        .course-progress-badge.failed {
            background: #F8D7DA;
            color: #721C24;
        }

        /* Enhanced progress indicators */
        .progress-stack {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .progress-item {
            background: white;
            padding: 15px;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border);
        }

        .progress-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .progress-item-title {
            font-weight: 600;
            color: var(--dark);
        }

        .progress-item-status {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .mini-progress-bar {
            height: 10px;
            background: var(--border);
            border-radius: 5px;
            overflow: hidden;
        }

        .mini-progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        /* Live updates indicator */
        .live-indicator {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            background: var(--success);
            color: white;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }

            100% {
                opacity: 1;
            }
        }

        /* Batch controls */
        .batch-controls {
            display: flex;
            gap: 10px;
            align-items: center;
            background: var(--light);
            padding: 15px;
            border-radius: var(--radius-sm);
            margin-bottom: 20px;
        }

        .batch-size-selector {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .batch-size-selector select {
            padding: 8px 12px;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            background: white;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .container {
                max-width: 95%;
            }

            .modal-content {
                width: 95%;
                margin: 10px;
            }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .stats-grid,
            .actions-grid {
                grid-template-columns: 1fr;
            }

            .btn-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .modal-body {
                padding: 20px;
            }

            .session-header {
                flex-direction: column;
                gap: 10px;
            }

            .course-checkbox-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .course-stats {
                margin-left: 0;
                width: 100%;
                justify-content: flex-start;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 20px;
            }

            .stat-card {
                padding: 20px;
            }

            .stat-value {
                font-size: 2rem;
            }

            .tabs {
                overflow-x: auto;
            }

            .tab {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top-color: var(--primary);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Tooltip */
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: var(--dark);
            color: white;
            text-align: center;
            border-radius: var(--radius-sm);
            padding: 10px;
            position: absolute;
            z-index: 1001;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.85rem;
            font-weight: normal;
            box-shadow: var(--shadow);
        }

        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }

        /* Card grid for courses */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .course-card {
            background: white;
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: var(--shadow);
            border-top: 4px solid var(--primary);
            transition: all 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .course-card h4 {
            color: var(--dark);
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .course-card .course-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .course-card .course-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--secondary);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--border);
        }

        .empty-state h4 {
            color: var(--dark);
            margin-bottom: 10px;
        }

        /* Confirmation dialog */
        .confirmation-dialog {
            background: white;
            border-radius: var(--radius);
            padding: 30px;
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            box-shadow: var(--shadow-xl);
        }

        .confirmation-dialog h4 {
            color: var(--dark);
            margin-bottom: 15px;
        }

        .confirmation-dialog p {
            color: var(--secondary);
            margin-bottom: 25px;
        }

        .confirmation-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>
                <i class="fas fa-database"></i>
                Lifebox Learning Network - Advanced Data Fetcher
            </h1>
            <div class="subtitle">
                Enhanced user fetching with progress tracking, selective fetching, and resumption capability
            </div>
            <div class="btn-group">
                <button class="btn btn-primary" onclick="showModal('fetch-all-modal')">
                    <i class="fas fa-bolt"></i> Fetch All Data
                </button>
                <button class="btn btn-info" onclick="showModal('users-advanced-modal')">
                    <i class="fas fa-users-cog"></i> Advanced User Fetch
                </button>
                <button class="btn btn-secondary" onclick="refreshStats()">
                    <i class="fas fa-sync-alt"></i> Refresh Stats
                </button>
                <button class="btn btn-secondary" onclick="showModal('logs-modal')">
                    <i class="fas fa-history"></i> View All Logs
                </button>
                <!--
                <button class="btn btn-info" onclick="refreshSelectedCourseAnalytics()">
                    <i class="fas fa-sync-alt"></i> Refresh Selected Course Analytics
                </button>
                -->
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
                    <button class="btn btn-info" onclick="showModal('users-advanced-modal')">
                        <i class="fas fa-cogs"></i> Advanced Fetch
                    </button>
                </div>
                <div id="users-status"></div>
            </div>
        </div>

        <!-- Active Sessions Section -->
        <div class="log-section">
            <h3><i class="fas fa-play-circle"></i> Active Fetch Sessions</h3>
            <div class="sessions-container" id="active-sessions">
                <div class="empty-state">
                    <i class="fas fa-hourglass-half"></i>
                    <h4>No active sessions</h4>
                    <p>Start a new fetch session to see progress here</p>
                </div>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm" onclick="loadActiveSessions()">
                    <i class="fas fa-sync-alt"></i> Refresh Sessions
                </button>
                <button class="btn btn-info btn-sm" onclick="showModal('sessions-modal')">
                    <i class="fas fa-list"></i> View All Sessions
                </button>
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
            <p>Lifebox Learning Network Advanced Data Fetcher v2.0 |
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

    <!-- Advanced Users Modal -->
    <div class="modal" id="users-advanced-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-users-cog"></i> Advanced User Fetching</h3>
                <button class="modal-close" onclick="hideModal('users-advanced-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body modal-body-lg">
                <div class="tabs">
                    <button class="tab active" onclick="switchTab('users-select')">Select Courses</button>
                    <button class="tab" onclick="switchTab('users-progress')">Progress Tracking</button>
                    <button class="tab" onclick="switchTab('users-sessions')">Active Sessions</button>
                    <button class="tab" onclick="switchTab('users-settings')">Settings</button>
                </div>

                <!-- Course Selection Tab -->
                <div id="users-select" class="tab-content active">
                    <button class="btn btn-info" onclick="refreshSelectedCourseAnalytics()">
                        <i class="fas fa-sync-alt"></i> Refresh Selected Course Analytics
                    </button>
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Select specific courses to fetch users from.
                        You can see how many students are enrolled per course before fetching.
                    </div>

                    <div class="batch-controls">
                        <div class="batch-size-selector">
                            <span>Batch size:</span>
                            <select id="batch-size">
                                <option value="1">1 course at a time</option>
                                <option value="3" selected>3 courses at a time</option>
                                <option value="5">5 courses at a time</option>
                                <option value="10">10 courses at a time</option>
                            </select>
                        </div>
                        <button class="btn btn-sm btn-secondary" onclick="selectAllCourses()">
                            <i class="fas fa-check-square"></i> Select All
                        </button>
                        <button class="btn btn-sm btn-secondary" onclick="deselectAllCourses()">
                            <i class="fas fa-square"></i> Deselect All
                        </button>
                    </div>

                    <div class="courses-selection-container" id="courses-selection-list">
                        <p>Loading courses...</p>
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-success" onclick="startAdvancedUserFetch()">
                            <i class="fas fa-play"></i> Start Selected Fetch
                        </button>
                        <button class="btn btn-warning" onclick="startResumableUserFetch()">
                            <i class="fas fa-history"></i> Resume Last Fetch
                        </button>
                        <button class="btn btn-secondary" onclick="loadCourseAnalyticsSummary()">
                            <i class="fas fa-sync-alt"></i> Refresh List
                        </button>
                    </div>
                </div>

                <!-- Progress Tracking Tab -->
                <div id="users-progress" class="tab-content">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Track the progress of your user fetching session in real-time.
                    </div>

                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-fill" id="users-progress-bar"></div>
                        </div>
                        <div class="progress-text">
                            <span>Overall Progress: <span id="users-progress-percent">0%</span></span>
                            <span>Status: <span id="users-progress-status">Idle</span></span>
                        </div>
                    </div>

                    <div class="progress-stack" id="users-progress-details">
                        <div class="progress-item">
                            <div class="progress-item-header">
                                <span class="progress-item-title">Waiting for session to start</span>
                                <span class="progress-item-status status-pending">Pending</span>
                            </div>
                            <div class="mini-progress-bar">
                                <div class="mini-progress-fill" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="real-time-log" id="users-progress-log" style="height: 200px;">
                        <div class="log-line">Ready to start fetching users...</div>
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-success" id="start-progress-btn" onclick="startProgressTracking()">
                            <i class="fas fa-play"></i> Start Progress Tracking
                        </button>
                        <button class="btn btn-warning" id="pause-progress-btn" onclick="pauseProgressTracking()" disabled>
                            <i class="fas fa-pause"></i> Pause
                        </button>
                        <button class="btn btn-danger" id="stop-progress-btn" onclick="stopProgressTracking()" disabled>
                            <i class="fas fa-stop"></i> Stop
                        </button>
                    </div>
                </div>

                <!-- Active Sessions Tab -->
                <div id="users-sessions" class="tab-content">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Manage your active and completed user fetch sessions.
                    </div>

                    <div class="sessions-container" id="advanced-sessions-list">
                        <div class="empty-state">
                            <i class="fas fa-hourglass-half"></i>
                            <h4>No sessions found</h4>
                            <p>Start a new fetch session to see it here</p>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-secondary" onclick="loadAllSessions()">
                            <i class="fas fa-sync-alt"></i> Refresh Sessions
                        </button>
                        <button class="btn btn-danger" onclick="clearAllSessions()">
                            <i class="fas fa-trash"></i> Clear All Sessions
                        </button>
                    </div>
                </div>

                <!-- Settings Tab -->
                <div id="users-settings" class="tab-content">
                    <div class="form-group">
                        <label>Default Batch Size</label>
                        <select class="form-control" id="default-batch-size">
                            <option value="1">1 course at a time</option>
                            <option value="3" selected>3 courses at a time</option>
                            <option value="5">5 courses at a time</option>
                            <option value="10">10 courses at a time</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Auto-refresh Interval (seconds)</label>
                        <select class="form-control" id="refresh-interval">
                            <option value="2">2 seconds</option>
                            <option value="5" selected>5 seconds</option>
                            <option value="10">10 seconds</option>
                            <option value="30">30 seconds</option>
                            <option value="60">60 seconds</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Users per Batch</label>
                        <select class="form-control" id="users-per-batch">
                            <option value="50">50 users</option>
                            <option value="100" selected>100 users</option>
                            <option value="200">200 users</option>
                            <option value="500">500 users</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="auto-resume" checked> Auto-resume interrupted sessions
                        </label>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="notifications" checked> Enable desktop notifications
                        </label>
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-primary" onclick="saveUserFetchSettings()">
                            <i class="fas fa-save"></i> Save Settings
                        </button>
                        <button class="btn btn-secondary" onclick="resetUserFetchSettings()">
                            <i class="fas fa-undo"></i> Reset to Defaults
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sessions Modal -->
    <div class="modal" id="sessions-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-list"></i> All Fetch Sessions</h3>
                <button class="modal-close" onclick="hideModal('sessions-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="sessions-container" id="all-sessions-list">
                    <p>Loading sessions...</p>
                </div>
                <div class="btn-group">
                    <button class="btn btn-secondary" onclick="loadAllSessions()">
                        <i class="fas fa-sync-alt"></i> Refresh
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Modal (Keep Original) -->
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

    <!-- Analytics Modal (Keep Original) -->
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

    <!-- Users Modal (Original) -->
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
                <h4>Advanced User Fetching Features</h4>
                <ol>
                    <li><strong>Selective Fetching:</strong> Choose specific courses to fetch users from, reducing fetch time.</li>
                    <li><strong>Progress Tracking:</strong> Real-time progress tracking with pause/resume capability.</li>
                    <li><strong>Batch Processing:</strong> Process multiple courses simultaneously for better performance.</li>
                    <li><strong>Session Management:</strong> Save and resume fetch sessions at any time.</li>
                    <li><strong>Student Count Preview:</strong> See how many students are in each course before fetching.</li>
                </ol>

                <h4>How to Use Advanced Features</h4>
                <ol>
                    <li>Click "Advanced User Fetch" button to open the advanced interface</li>
                    <li>Select specific courses you want to fetch users from</li>
                    <li>Choose batch size (how many courses to process simultaneously)</li>
                    <li>Start the fetch and monitor progress in real-time</li>
                    <li>Pause and resume at any time</li>
                    <li>View all sessions and their status</li>
                </ol>

                <h4>Performance Tips</h4>
                <ul>
                    <li>Start with a small batch size if you have slow internet</li>
                    <li>Fetch courses and analytics first to get student counts</li>
                    <li>Use selective fetching for courses with many users</li>
                    <li>Pause and resume if you need to stop the fetch</li>
                    <li>Monitor memory usage with large datasets</li>
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
                <h4>Lifebox Learning Network Advanced Data Fetcher</h4>
                <p>Version: 2.0.0</p>
                <p>Enhanced version with advanced user fetching capabilities including progress tracking, selective fetching, and session management.</p>

                <h4>New Features</h4>
                <ul>
                    <li>Selective course user fetching</li>
                    <li>Real-time progress tracking with pause/resume</li>
                    <li>Session management for long-running fetches</li>
                    <li>Batch processing for improved performance</li>
                    <li>Student count preview before fetching</li>
                    <li>Enhanced UI with live updates</li>
                </ul>

                <h4>Technical Improvements</h4>
                <ul>
                    <li>Optimized for large datasets (10k+ users)</li>
                    <li>Reduced memory usage with batch processing</li>
                    <li>Improved timeout handling</li>
                    <li>Enhanced error recovery and retry logic</li>
                    <li>Better database transaction management</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Confirmation Dialog -->
    <div class="modal" id="confirmation-modal">
        <div class="modal-content">
            <div class="confirmation-dialog">
                <h4 id="confirmation-title">Confirm Action</h4>
                <p id="confirmation-message">Are you sure you want to perform this action?</p>
                <div class="confirmation-actions">
                    <button class="btn btn-danger" id="confirmation-confirm">Confirm</button>
                    <button class="btn btn-secondary" onclick="hideModal('confirmation-modal')">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Global variables
        let currentFetch = null;
        let currentSession = null;
        let progressInterval = null;
        let refreshInterval = null;
        let isFetching = false;
        let userFetchSettings = {
            batchSize: 3,
            refreshInterval: 5,
            usersPerBatch: 100,
            autoResume: true,
            notifications: true
        };

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing...');

            // Load user settings from localStorage
            loadUserSettings();

            // Load course analytics summary
            loadCourseAnalyticsSummary();

            // Load active sessions
            loadActiveSessions();

            // Set up modals
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        hideModal(this.id);
                    }
                });
            });

            // Close modals with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    document.querySelectorAll('.modal.active').forEach(modal => {
                        hideModal(modal.id);
                    });
                }
            });

            // Initialize notifications if enabled
            if (userFetchSettings.notifications && 'Notification' in window) {
                if (Notification.permission === 'default') {
                    Notification.requestPermission();
                }
            }

            // Setup event listeners for course checkboxes
            document.addEventListener('change', function(e) {
                if (e.target.type === 'checkbox' && e.target.closest('.course-checkbox-item')) {
                    const item = e.target.closest('.course-checkbox-item');
                    if (e.target.checked) {
                        item.classList.add('selected');
                    } else {
                        item.classList.remove('selected');
                    }
                }
            });

            console.log('Initialization complete');
        });

        // Load user settings from localStorage
        function loadUserSettings() {
            console.log('Loading user settings...');
            const savedSettings = localStorage.getItem('userFetchSettings');
            if (savedSettings) {
                try {
                    const parsedSettings = JSON.parse(savedSettings);
                    userFetchSettings = {
                        ...userFetchSettings,
                        ...parsedSettings
                    };
                    console.log('Loaded settings:', userFetchSettings);
                } catch (e) {
                    console.error('Error parsing saved settings:', e);
                }
            }

            // Update UI elements if they exist
            const defaultBatchSize = document.getElementById('default-batch-size');
            const refreshIntervalElem = document.getElementById('refresh-interval');
            const usersPerBatch = document.getElementById('users-per-batch');
            const autoResume = document.getElementById('auto-resume');
            const notifications = document.getElementById('notifications');
            const batchSize = document.getElementById('batch-size');

            if (defaultBatchSize) defaultBatchSize.value = userFetchSettings.batchSize;
            if (refreshIntervalElem) refreshIntervalElem.value = userFetchSettings.refreshInterval;
            if (usersPerBatch) usersPerBatch.value = userFetchSettings.usersPerBatch;
            if (autoResume) autoResume.checked = userFetchSettings.autoResume;
            if (notifications) notifications.checked = userFetchSettings.notifications;
            if (batchSize) batchSize.value = userFetchSettings.batchSize;

            console.log('Settings loaded and UI updated');
        }

        // Save user settings to localStorage
        function saveUserFetchSettings() {
            console.log('Saving user settings...');

            const defaultBatchSize = document.getElementById('default-batch-size');
            const refreshIntervalElem = document.getElementById('refresh-interval');
            const usersPerBatch = document.getElementById('users-per-batch');
            const autoResume = document.getElementById('auto-resume');
            const notifications = document.getElementById('notifications');

            if (defaultBatchSize) userFetchSettings.batchSize = parseInt(defaultBatchSize.value);
            if (refreshIntervalElem) userFetchSettings.refreshInterval = parseInt(refreshIntervalElem.value);
            if (usersPerBatch) userFetchSettings.usersPerBatch = parseInt(usersPerBatch.value);
            if (autoResume) userFetchSettings.autoResume = autoResume.checked;
            if (notifications) userFetchSettings.notifications = notifications.checked;

            localStorage.setItem('userFetchSettings', JSON.stringify(userFetchSettings));

            showAlert('success', 'Settings saved successfully!', 'users-progress');

            // Update batch size in selection
            const batchSize = document.getElementById('batch-size');
            if (batchSize) batchSize.value = userFetchSettings.batchSize;

            console.log('Settings saved:', userFetchSettings);
        }

        // Reset user settings to defaults
        function resetUserFetchSettings() {
            console.log('Resetting user settings to defaults...');
            userFetchSettings = {
                batchSize: 3,
                refreshInterval: 5,
                usersPerBatch: 100,
                autoResume: true,
                notifications: true
            };

            localStorage.setItem('userFetchSettings', JSON.stringify(userFetchSettings));
            loadUserSettings();

            showAlert('success', 'Settings reset to defaults!', 'users-progress');
        }

        // Show modal
        function showModal(modalId) {
            console.log('Showing modal:', modalId);
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            } else {
                console.error('Modal not found:', modalId);
            }
        }

        // Hide modal
        function hideModal(modalId) {
            console.log('Hiding modal:', modalId);
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        // Show confirmation dialog
        function showConfirmation(title, message, confirmCallback) {
            console.log('Showing confirmation dialog:', title);
            const confirmationTitle = document.getElementById('confirmation-title');
            const confirmationMessage = document.getElementById('confirmation-message');

            if (confirmationTitle && confirmationMessage) {
                confirmationTitle.textContent = title;
                confirmationMessage.textContent = message;

                const confirmBtn = document.getElementById('confirmation-confirm');
                if (confirmBtn) {
                    // Remove existing listeners
                    const newConfirmBtn = confirmBtn.cloneNode(true);
                    confirmBtn.parentNode.replaceChild(newConfirmBtn, confirmBtn);

                    // Add new listener
                    newConfirmBtn.onclick = function() {
                        console.log('Confirmation confirmed');
                        confirmCallback();
                        hideModal('confirmation-modal');
                    };

                    showModal('confirmation-modal');
                }
            }
        }

        // Switch tabs
        function switchTab(tabId) {
            console.log('Switching to tab:', tabId);

            // Hide all tabs in the current context
            const tabContent = document.getElementById(tabId);
            if (!tabContent) {
                console.error('Tab content not found:', tabId);
                return;
            }

            const parent = tabContent.closest('.modal-body') || tabContent.closest('.tab-container');
            if (parent) {
                // Hide all tabs in this container
                parent.querySelectorAll('.tab-content').forEach(tab => {
                    tab.classList.remove('active');
                });

                // Show selected tab
                tabContent.classList.add('active');

                // Update tab buttons
                parent.querySelectorAll('.tab').forEach(tab => {
                    tab.classList.remove('active');
                });

                const tabButton = parent.querySelector(`.tab[onclick*="${tabId}"]`);
                if (tabButton) {
                    tabButton.classList.add('active');
                }
            }
        }

        // Refresh statistics
        function refreshStats() {
            console.log('Refreshing statistics...');
            showAlert('info', 'Refreshing statistics...', 'courses-status');

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_stats'
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update courses stats
                        const coursesCount = document.getElementById('courses-count');
                        const coursesLast = document.getElementById('courses-last');
                        const analyticsCount = document.getElementById('analytics-count');
                        const analyticsLast = document.getElementById('analytics-last');
                        const usersCount = document.getElementById('users-count');
                        const usersLast = document.getElementById('users-last');

                        if (coursesCount && coursesLast) {
                            coursesCount.textContent = data.stats.lbln_courses.count;
                            coursesLast.textContent = data.stats.lbln_courses.last_fetch ?
                                new Date(data.stats.lbln_courses.last_fetch).toLocaleString() :
                                'Never';
                        }

                        if (analyticsCount && analyticsLast) {
                            analyticsCount.textContent = data.stats.lbln_course_analytics.count;
                            analyticsLast.textContent = data.stats.lbln_course_analytics.last_fetch ?
                                new Date(data.stats.lbln_course_analytics.last_fetch).toLocaleString() :
                                'Never';
                        }

                        if (usersCount && usersLast) {
                            usersCount.textContent = data.stats.lbln_course_users.count;
                            usersLast.textContent = data.stats.lbln_course_users.last_fetch ?
                                new Date(data.stats.lbln_course_users.last_fetch).toLocaleString() :
                                'Never';
                        }

                        showAlert('success', 'Statistics refreshed successfully!', 'courses-status');
                    } else {
                        showAlert('error', 'Failed to refresh statistics: ' + (data.error || 'Unknown error'), 'courses-status');
                    }
                })
                .catch(error => {
                    console.error('Error refreshing stats:', error);
                    showAlert('error', 'Error refreshing statistics: ' + error.message, 'courses-status');
                });
        }

        // Load course analytics summary
        function loadCourseAnalyticsSummary() {
            console.log('Loading course analytics summary...');
            const container = document.getElementById('courses-selection-list');
            if (!container) {
                console.log('Courses selection list container not found');
                return;
            }

            container.innerHTML = '<p><i class="fas fa-spinner loading"></i> Loading courses...</p>';

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_course_analytics_summary'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Course analytics data received:', data);
                    if (data.success && data.data && data.data.length > 0) {
                        let html = '';
                        data.data.forEach(course => {
                            const fetchedPercentage = course.total_students > 0 ?
                                Math.round((course.fetched_users / course.total_students) * 100) :
                                0;

                            html += `
                        <div class="course-checkbox-item" data-course-id="${course.course_id}">
                            <input type="checkbox" id="course-${course.course_id}" value="${course.course_id}">
                            <div class="course-info">
                                <div class="course-title">${course.course_title}</div>
                                <div class="course-meta">
                                    <span>ID: ${course.course_id}</span>
                                    <span>Created: ${course.course_created ? new Date(course.course_created * 1000).toLocaleDateString() : 'Unknown'}</span>
                                    <span>Last fetch: ${course.last_user_fetch ? new Date(course.last_user_fetch).toLocaleString() : 'Never'}</span>
                                </div>
                            </div>
                            <div class="course-stats">
                                <div class="stat-badge students tooltip">
                                    ${course.total_students || 0} students
                                    <span class="tooltip-text">Total enrolled students according to analytics</span>
                                </div>
                                <div class="stat-badge fetched tooltip">
                                    ${course.fetched_users || 0} fetched (${fetchedPercentage}%)
                                    <span class="tooltip-text">Users already fetched and stored in database</span>
                                </div>
                            </div>
                        </div>
                    `;
                        });
                        container.innerHTML = html;
                    } else {
                        container.innerHTML = '<div class="empty-state"><i class="fas fa-graduation-cap"></i><h4>No courses found</h4><p>Fetch courses first to see them here</p></div>';
                    }
                })
                .catch(error => {
                    console.error('Error loading courses:', error);
                    container.innerHTML = `<p class="error">Error loading courses: ${error.message}</p>`;
                });
        }

        // Select all courses
        function selectAllCourses() {
            console.log('Selecting all courses');
            document.querySelectorAll('.course-checkbox-item input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = true;
                checkbox.closest('.course-checkbox-item').classList.add('selected');
            });
        }

        // Deselect all courses
        function deselectAllCourses() {
            console.log('Deselecting all courses');
            document.querySelectorAll('.course-checkbox-item input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
                checkbox.closest('.course-checkbox-item').classList.remove('selected');
            });
        }

        // Get selected course IDs
        function getSelectedCourseIds() {
            const selectedIds = [];
            document.querySelectorAll('.course-checkbox-item input[type="checkbox"]:checked').forEach(checkbox => {
                selectedIds.push(checkbox.value);
            });
            console.log('Selected course IDs:', selectedIds);
            return selectedIds;
        }

        // Start advanced user fetch
        function startAdvancedUserFetch() {
            console.log('Starting advanced user fetch...');
            const selectedIds = getSelectedCourseIds();

            if (selectedIds.length === 0) {
                showAlert('warning', 'Please select at least one course to fetch users from.', 'users-progress');
                return;
            }

            if (isFetching) {
                showAlert('warning', 'Another fetch operation is already in progress.', 'users-progress');
                return;
            }

            isFetching = true;
            const batchSize = parseInt(document.getElementById('batch-size')?.value || userFetchSettings.batchSize);

            // Switch to progress tab
            switchTab('users-progress');

            // Clear previous logs
            const progressLog = document.getElementById('users-progress-log');
            if (progressLog) {
                progressLog.innerHTML = '<div class="log-line">Starting advanced user fetch...</div>';
            }

            // Create new session
            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=create_user_fetch_session&course_ids=' + JSON.stringify(selectedIds)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Session creation response:', data);
                    if (data.success) {
                        currentSession = data.session_id;
                        showAlert('success', `Created session for ${data.total_courses} courses`, 'users-progress');

                        // Start the actual fetch
                        startBatchFetch(batchSize);
                    } else {
                        showAlert('error', 'Failed to create session: ' + (data.error || 'Unknown error'), 'users-progress');
                        isFetching = false;
                    }
                })
                .catch(error => {
                    console.error('Error creating session:', error);
                    showAlert('error', 'Error creating session: ' + error.message, 'users-progress');
                    isFetching = false;
                });
        }

        // Start batch fetch
        function startBatchFetch(batchSize) {
            console.log('Starting batch fetch, session:', currentSession, 'batch size:', batchSize);

            if (!currentSession) {
                console.error('No current session');
                showAlert('error', 'No active session', 'users-progress');
                isFetching = false;
                return;
            }

            // Enable progress tracking buttons
            const startBtn = document.getElementById('start-progress-btn');
            const pauseBtn = document.getElementById('pause-progress-btn');
            const stopBtn = document.getElementById('stop-progress-btn');

            if (startBtn) startBtn.disabled = true;
            if (pauseBtn) pauseBtn.disabled = false;
            if (stopBtn) stopBtn.disabled = false;

            // Clear and show initial log
            const logContainer = document.getElementById('users-progress-log');
            if (logContainer) {
                const timestamp = new Date().toLocaleTimeString();
                logContainer.innerHTML = `<div class="log-line">[${timestamp}] Starting batch fetch for session: ${currentSession}</div>`;
                logContainer.innerHTML += `<div class="log-line">[${timestamp}] Batch size: ${batchSize} courses</div>`;
            }

            // Start progress tracking
            if (progressInterval) {
                clearInterval(progressInterval);
            }
            progressInterval = setInterval(updateProgress, userFetchSettings.refreshInterval * 1000);

            // Start the fetch
            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=fetch_users_progress&session_id=' + currentSession + '&batch_size=' + batchSize
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Batch fetch response:', data);
                    if (data.success) {
                        updateProgressDisplay(data);

                        if (!data.all_completed && data.session_status !== 'completed') {
                            // Show continuation message
                            if (logContainer) {
                                const timestamp = new Date().toLocaleTimeString();
                                logContainer.innerHTML += `<div class="log-line info">[${timestamp}] Continuing fetch... ${data.courses_to_process || 0} courses remaining</div>`;
                                logContainer.scrollTop = logContainer.scrollHeight;
                            }

                            // Continue fetching after delay
                            console.log('Continuing fetch, not completed yet');
                            setTimeout(() => startBatchFetch(batchSize), 2000);
                        } else {
                            // All completed
                            console.log('Fetch completed');
                            showAlert('success', 'User fetch completed successfully!', 'users-progress');
                            isFetching = false;

                            // Update buttons
                            if (startBtn) startBtn.disabled = false;
                            if (pauseBtn) pauseBtn.disabled = true;
                            if (stopBtn) stopBtn.disabled = true;

                            // Clear interval
                            if (progressInterval) {
                                clearInterval(progressInterval);
                                progressInterval = null;
                            }

                            // Add completion message to log
                            if (logContainer) {
                                const timestamp = new Date().toLocaleTimeString();
                                logContainer.innerHTML += `<div class="log-line success">[${timestamp}] Fetch completed! Total users: ${data.total_users || 0}</div>`;
                                logContainer.scrollTop = logContainer.scrollHeight;
                            }

                            // Refresh stats
                            refreshStats();

                            // Load active sessions
                            loadActiveSessions();

                            // Show notification
                            if (userFetchSettings.notifications && 'Notification' in window && Notification.permission === 'granted') {
                                new Notification('User Fetch Completed', {
                                    body: `Successfully fetched ${data.total_users || 0} users from ${data.total_processed || 0} courses`
                                });
                            }
                        }
                    } else {
                        console.error('Fetch error:', data.error);

                        // Show error in log
                        if (logContainer) {
                            const timestamp = new Date().toLocaleTimeString();
                            logContainer.innerHTML += `<div class="log-line error">[${timestamp}] Fetch error: ${data.error || 'Unknown error'}</div>`;
                            logContainer.scrollTop = logContainer.scrollHeight;
                        }

                        showAlert('error', 'Fetch error: ' + (data.error || 'Unknown error'), 'users-progress');
                        isFetching = false;

                        // Update buttons
                        if (startBtn) startBtn.disabled = false;
                        if (pauseBtn) pauseBtn.disabled = true;
                        if (stopBtn) stopBtn.disabled = true;
                    }
                })
                .catch(error => {
                    console.error('Network error in batch fetch:', error);

                    // Show network error in log
                    if (logContainer) {
                        const timestamp = new Date().toLocaleTimeString();
                        logContainer.innerHTML += `<div class="log-line error">[${timestamp}] Network error: ${error.message}</div>`;
                        logContainer.scrollTop = logContainer.scrollHeight;
                    }

                    showAlert('error', 'Network error: ' + error.message, 'users-progress');
                    isFetching = false;

                    // Update buttons
                    if (startBtn) startBtn.disabled = false;
                    if (pauseBtn) pauseBtn.disabled = true;
                    if (stopBtn) stopBtn.disabled = true;
                });
        }

        // Start progress tracking (manual)
        function startProgressTracking() {
            console.log('Starting progress tracking');
            if (!currentSession) {
                showAlert('warning', 'No active session. Start a fetch first.', 'users-progress');
                return;
            }

            // Enable buttons
            const startBtn = document.getElementById('start-progress-btn');
            const pauseBtn = document.getElementById('pause-progress-btn');
            const stopBtn = document.getElementById('stop-progress-btn');

            if (startBtn) startBtn.disabled = true;
            if (pauseBtn) pauseBtn.disabled = false;
            if (stopBtn) stopBtn.disabled = false;

            // Start interval for progress updates
            if (progressInterval) {
                clearInterval(progressInterval);
            }

            progressInterval = setInterval(updateProgress, userFetchSettings.refreshInterval * 1000);
            updateProgress();
        }

        // Update progress display
        function updateProgress() {
            console.log('Updating progress...');
            if (!currentSession) {
                console.log('No current session for progress update');
                return;
            }

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_user_fetch_session_status&session_id=' + currentSession
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Progress update response:', data);
                    if (data.success) {
                        updateProgressDisplay(data);
                    } else {
                        console.error('Error in progress update:', data.error);
                    }
                })
                .catch(error => {
                    console.error('Error updating progress:', error);
                });
        }

        // Update progress display with data
        function updateProgressDisplay(data) {
            console.log('Updating progress display with data:', data);

            // Update progress bar
            const progressPercent = data.overall_progress || 0;
            const progressBar = document.getElementById('users-progress-bar');
            const progressPercentElem = document.getElementById('users-progress-percent');
            const progressStatus = document.getElementById('users-progress-status');

            if (progressBar) progressBar.style.width = progressPercent + '%';
            if (progressPercentElem) progressPercentElem.textContent = progressPercent.toFixed(1) + '%';
            if (progressStatus) progressStatus.textContent = data.status || 'Unknown';

            // Update progress details
            const detailsContainer = document.getElementById('users-progress-details');
            if (detailsContainer && data.progress) {
                let html = '';
                Object.entries(data.progress).forEach(([courseId, progress]) => {
                    const courseProgress = progress.fetched_users && progress.total_users ?
                        Math.round((progress.fetched_users / progress.total_users) * 100) :
                        (progress.status === 'completed' ? 100 : 0);

                    html += `
                <div class="progress-item">
                    <div class="progress-item-header">
                        <span class="progress-item-title">${courseId}</span>
                        <span class="progress-item-status status-${progress.status}">${progress.status}</span>
                    </div>
                    <div class="mini-progress-bar">
                        <div class="mini-progress-fill" style="width: ${courseProgress}%"></div>
                    </div>
                    <div style="font-size: 0.8rem; color: var(--secondary); margin-top: 5px;">
                        ${progress.fetched_users || 0} / ${progress.total_users || '?'} users
                        ${progress.processed_pages ? `(Page ${progress.processed_pages})` : ''}
                    </div>
                </div>
            `;
                });
                detailsContainer.innerHTML = html;
            }

            // Update log with detailed information
            const logContainer = document.getElementById('users-progress-log');
            if (logContainer) {
                const timestamp = new Date().toLocaleTimeString();

                // Add session status update
                logContainer.innerHTML += `<div class="log-line">[${timestamp}] Status: ${data.session_status || 'unknown'}, Progress: ${progressPercent.toFixed(1)}%</div>`;

                // Add batch results if available
                if (data.detailed_results) {
                    data.detailed_results.forEach(result => {
                        if (result.success) {
                            logContainer.innerHTML += `<div class="log-line success">[${timestamp}] ${result.course_title}: Page ${result.processed_pages}/${result.total_pages}, Users: ${result.total_users} (${result.inserted} new, ${result.updated} updated)</div>`;

                            if (result.errors && result.errors.length > 0) {
                                result.errors.forEach(error => {
                                    logContainer.innerHTML += `<div class="log-line error">[${timestamp}] Error: ${error}</div>`;
                                });
                            }
                        }
                    });
                }

                // Add log entries if available
                if (data.log_entries) {
                    data.log_entries.forEach(entry => {
                        const logType = entry.type || 'info';
                        const logMessage = entry.message || '';
                        const logTime = entry.timestamp || timestamp;

                        logContainer.innerHTML += `<div class="log-line ${logType}">[${logTime}] ${logMessage}</div>`;
                    });
                }

                // Add basic info if no detailed logs
                if (!data.detailed_results && !data.log_entries) {
                    logContainer.innerHTML += `<div class="log-line info">[${timestamp}] Processed: ${data.batch_processed || 0} courses, Total users: ${data.total_users || 0}</div>`;
                }

                // Keep only last 50 lines to prevent memory issues
                const lines = logContainer.querySelectorAll('.log-line');
                if (lines.length > 50) {
                    for (let i = 0; i < lines.length - 50; i++) {
                        lines[i].remove();
                    }
                }

                logContainer.scrollTop = logContainer.scrollHeight;
            }
        }

        // Pause progress tracking
        function pauseProgressTracking() {
            console.log('Pausing progress tracking');
            if (progressInterval) {
                clearInterval(progressInterval);
                progressInterval = null;
                showAlert('warning', 'Progress tracking paused', 'users-progress');

                // Update buttons
                const startBtn = document.getElementById('start-progress-btn');
                const pauseBtn = document.getElementById('pause-progress-btn');

                if (startBtn) startBtn.disabled = false;
                if (pauseBtn) pauseBtn.disabled = true;
            }
        }

        // Stop progress tracking
        function stopProgressTracking() {
            console.log('Stopping progress tracking');
            showConfirmation('Stop Fetch Session', 'Are you sure you want to stop this fetch session?', function() {
                if (progressInterval) {
                    clearInterval(progressInterval);
                    progressInterval = null;
                }

                if (currentSession) {
                    // Cancel the session
                    fetch('', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: 'action=cancel_user_fetch_session&session_id=' + currentSession
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                showAlert('success', 'Session cancelled successfully', 'users-progress');
                                currentSession = null;
                                isFetching = false;

                                // Update buttons
                                const startBtn = document.getElementById('start-progress-btn');
                                const pauseBtn = document.getElementById('pause-progress-btn');
                                const stopBtn = document.getElementById('stop-progress-btn');

                                if (startBtn) startBtn.disabled = false;
                                if (pauseBtn) pauseBtn.disabled = true;
                                if (stopBtn) stopBtn.disabled = true;

                                // Clear display
                                const progressBar = document.getElementById('users-progress-bar');
                                const progressPercentElem = document.getElementById('users-progress-percent');
                                const progressStatus = document.getElementById('users-progress-status');
                                const detailsContainer = document.getElementById('users-progress-details');

                                if (progressBar) progressBar.style.width = '0%';
                                if (progressPercentElem) progressPercentElem.textContent = '0%';
                                if (progressStatus) progressStatus.textContent = 'Idle';
                                if (detailsContainer) {
                                    detailsContainer.innerHTML = `
                                <div class="progress-item">
                                    <div class="progress-item-header">
                                        <span class="progress-item-title">Waiting for session to start</span>
                                        <span class="progress-item-status status-pending">Pending</span>
                                    </div>
                                    <div class="mini-progress-bar">
                                        <div class="mini-progress-fill" style="width: 0%"></div>
                                    </div>
                                </div>
                            `;
                                }

                                // Load active sessions
                                loadActiveSessions();
                            } else {
                                showAlert('error', 'Error cancelling session: ' + (data.error || 'Unknown error'), 'users-progress');
                            }
                        })
                        .catch(error => {
                            console.error('Error cancelling session:', error);
                            showAlert('error', 'Network error: ' + error.message, 'users-progress');
                        });
                }
            });
        }

        // Start resumable user fetch
        function startResumableUserFetch() {
            console.log('Starting resumable user fetch...');
            // Load active sessions and resume the first one
            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_active_user_fetch_sessions'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Active sessions response:', data);
                    if (data.success && data.sessions && data.sessions.length > 0) {
                        // Find the most recent session that can be resumed
                        const resumeSession = data.sessions.find(s =>
                            s.status === 'paused' || s.status === 'running'
                        ) || data.sessions[0];

                        currentSession = resumeSession.session_id;
                        showAlert('info', `Resuming session ${currentSession}`, 'users-progress');

                        // Switch to progress tab
                        switchTab('users-progress');

                        // Start batch fetch
                        const batchSize = userFetchSettings.batchSize;
                        startBatchFetch(batchSize);
                    } else {
                        showAlert('warning', 'No active sessions found to resume', 'users-progress');
                    }
                })
                .catch(error => {
                    console.error('Error loading sessions:', error);
                    showAlert('error', 'Error loading sessions: ' + error.message, 'users-progress');
                });
        }

        // Load active sessions
        function loadActiveSessions() {
            console.log('Loading active sessions...');
            const container = document.getElementById('active-sessions');
            if (!container) {
                console.log('Active sessions container not found');
                return;
            }

            container.innerHTML = '<p><i class="fas fa-spinner loading"></i> Loading sessions...</p>';

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_active_user_fetch_sessions'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Active sessions data:', data);
                    if (data.success && data.sessions && data.sessions.length > 0) {
                        let html = '';
                        data.sessions.forEach(session => {
                            html += createSessionCard(session);
                        });
                        container.innerHTML = html;
                    } else {
                        container.innerHTML = '<div class="empty-state"><i class="fas fa-hourglass-half"></i><h4>No active sessions</h4><p>Start a new fetch session to see it here</p></div>';
                    }
                })
                .catch(error => {
                    console.error('Error loading active sessions:', error);
                    container.innerHTML = `<p class="error">Error loading sessions: ${error.message}</p>`;
                });
        }

        // Load all sessions
        function loadAllSessions() {
            console.log('Loading all sessions...');
            const container = document.getElementById('advanced-sessions-list');
            if (!container) {
                console.log('Advanced sessions list container not found');
                return;
            }

            container.innerHTML = '<p><i class="fas fa-spinner loading"></i> Loading sessions...</p>';

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_active_user_fetch_sessions'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('All sessions data:', data);
                    if (data.success && data.sessions && data.sessions.length > 0) {
                        let html = '';
                        data.sessions.forEach(session => {
                            html += createSessionCard(session);
                        });
                        container.innerHTML = html;
                    } else {
                        container.innerHTML = '<div class="empty-state"><i class="fas fa-hourglass-half"></i><h4>No sessions found</h4><p>Start a new fetch session to see it here</p></div>';
                    }
                })
                .catch(error => {
                    console.error('Error loading all sessions:', error);
                    container.innerHTML = `<p class="error">Error loading sessions: ${error.message}</p>`;
                });
        }

        // Create session card HTML
        function createSessionCard(session) {
            console.log('Creating session card for:', session.session_id);
            const created = new Date(session.created_at).toLocaleString();
            const statusClass = session.status || 'pending';

            return `
            <div class="session-card ${statusClass}">
                <div class="session-header">
                    <div>
                        <h4 style="margin: 0;">User Fetch Session</h4>
                        <div class="session-id">${session.session_id}</div>
                    </div>
                    <div>
                        <span class="status-badge status-${statusClass}">${statusClass}</span>
                    </div>
                </div>
                
                <div class="session-progress">
                    <div class="progress-bar" style="height: 15px;">
                        <div class="progress-fill" style="width: ${session.overall_progress || 0}%"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-top: 5px;">
                        <span>${session.overall_progress || 0}% complete</span>
                        <span>${session.completed_courses || 0}/${session.total_courses || 0} courses</span>
                    </div>
                </div>
                
                <div style="font-size: 0.9rem; color: var(--secondary);">
                    <div>Started: ${created}</div>
                    <div>Users fetched: ${session.fetched_users || 0}</div>
                    <div>Courses: ${session.total_courses || 0} selected</div>
                </div>
                
                <div class="btn-group" style="margin-top: 15px;">
                    <button class="btn btn-sm btn-success" onclick="resumeSession('${session.session_id}')">
                        <i class="fas fa-play"></i> Resume
                    </button>
                    <button class="btn btn-sm btn-warning" onclick="pauseSession('${session.session_id}')">
                        <i class="fas fa-pause"></i> Pause
                    </button>
                    <button class="btn btn-sm btn-danger" onclick="cancelSession('${session.session_id}')">
                        <i class="fas fa-stop"></i> Cancel
                    </button>
                </div>
            </div>
        `;
        }

        // Resume session
        function resumeSession(sessionId) {
            console.log('Resuming session:', sessionId);
            currentSession = sessionId;
            showAlert('info', `Resuming session ${sessionId}`, 'users-progress');

            // Switch to progress tab in advanced modal
            showModal('users-advanced-modal');
            switchTab('users-progress');

            // Start batch fetch
            const batchSize = userFetchSettings.batchSize;
            startBatchFetch(batchSize);
        }

        // Pause session
        function pauseSession(sessionId) {
            console.log('Pausing session:', sessionId);
            // In a real implementation, you would have a pause endpoint
            // For now, we'll just stop the current fetch
            if (currentSession === sessionId) {
                pauseProgressTracking();
                showAlert('warning', 'Session paused', 'users-progress');
            }
        }

        // Cancel session
        function cancelSession(sessionId) {
            console.log('Cancelling session:', sessionId);
            showConfirmation('Cancel Session', 'Are you sure you want to cancel this session?', function() {
                fetch('', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'action=cancel_user_fetch_session&session_id=' + sessionId
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            showAlert('success', 'Session cancelled', 'users-progress');
                            if (currentSession === sessionId) {
                                currentSession = null;
                                isFetching = false;
                            }
                            loadActiveSessions();
                        } else {
                            showAlert('error', 'Error cancelling session: ' + (data.error || 'Unknown error'), 'users-progress');
                        }
                    })
                    .catch(error => {
                        console.error('Error cancelling session:', error);
                        showAlert('error', 'Network error: ' + error.message, 'users-progress');
                    });
            });
        }

        // Clear all sessions
        function clearAllSessions() {
            console.log('Clearing all sessions');
            showConfirmation('Clear All Sessions', 'Are you sure you want to clear all sessions? This cannot be undone.', function() {
                // In a real implementation, you would have an endpoint to clear all sessions
                // For now, we'll show a message
                showAlert('info', 'This feature would clear all sessions in a full implementation.', 'users-progress');
            });
        }

        // Original fetch functions (kept for compatibility)
        function startFetch(type) {
            console.log('Starting fetch for:', type);
            if (isFetching) {
                showAlert('warning', 'Another fetch operation is already in progress.', type + '-status');
                return;
            }

            isFetching = true;
            const modalId = type + '-modal';
            const logId = type + '-fetch-log';

            showModal(modalId);
            const logDiv = document.getElementById(logId);
            if (logDiv) {
                logDiv.innerHTML = '<div class="log-line">Starting fetch operation...</div>';
            }

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=fetch_' + type
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (logDiv) {
                        if (data.success) {
                            let message = `${type.charAt(0).toUpperCase() + type.slice(1)} fetch completed! `;

                            if (type === 'courses') {
                                message += `Total: ${data.total}, Inserted: ${data.inserted}, Updated: ${data.updated}, Skipped: ${data.skipped}`;
                            } else if (type === 'analytics') {
                                message += `Courses processed: ${data.total}, Inserted: ${data.inserted}, Skipped: ${data.skipped}`;
                            } else if (type === 'users') {
                                message += `Courses processed: ${data.courses_processed}, Total users: ${data.total_users}, Inserted: ${data.inserted}, Updated: ${data.updated}, Skipped: ${data.skipped}`;
                            }

                            logDiv.innerHTML += `<div class="log-line success">${message}</div>`;
                            showAlert('success', message, type + '-status');

                            // Update statistics
                            refreshStats();

                            // Refresh course list if it's courses or users
                            if (type === 'courses' || type === 'users') {
                                loadCourseAnalyticsSummary();
                            }
                        } else {
                            logDiv.innerHTML += `<div class="log-line error">Error: ${data.error}</div>`;
                            showAlert('error', 'Fetch failed: ' + data.error, type + '-status');
                        }

                        if (data.errors && data.errors.length > 0) {
                            logDiv.innerHTML += `<div class="log-line warning">Errors (${data.errors.length}):</div>`;
                            data.errors.forEach(error => {
                                logDiv.innerHTML += `<div class="log-line warning">- ${error}</div>`;
                            });
                        }

                        logDiv.scrollTop = logDiv.scrollHeight;
                    }
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                    if (logDiv) {
                        logDiv.innerHTML += `<div class="log-line error">Network error: ${error.message}</div>`;
                        showAlert('error', 'Network error: ' + error.message, type + '-status');
                        logDiv.scrollTop = logDiv.scrollHeight;
                    }
                })
                .finally(() => {
                    isFetching = false;
                });
        }

        // Start fetch all operation
        function startFetchAll() {
            console.log('Starting fetch all operation...');
            if (isFetching) {
                alert('Another fetch operation is already in progress.');
                return;
            }

            isFetching = true;
            const progressBar = document.getElementById('fetch-all-progress');
            const progressPercent = document.getElementById('fetch-all-percent');
            const progressStep = document.getElementById('fetch-all-step');
            const logDiv = document.getElementById('fetch-all-log');

            if (progressBar) progressBar.style.width = '0%';
            if (progressPercent) progressPercent.textContent = '0%';
            if (progressStep) progressStep.textContent = 'Not started';
            if (logDiv) logDiv.innerHTML = '<div class="log-line">Starting fetch all operation...</div>';

            // Define the steps
            const steps = [{
                    name: 'courses',
                    label: 'Fetching Courses',
                    percent: 33
                },
                {
                    name: 'analytics',
                    label: 'Fetching Analytics',
                    percent: 66
                },
                {
                    name: 'users',
                    label: 'Fetching Users',
                    percent: 100
                }
            ];

            let currentStep = 0;

            function executeStep(stepIndex) {
                if (stepIndex >= steps.length) {
                    // All steps completed
                    if (progressBar) progressBar.style.width = '100%';
                    if (progressPercent) progressPercent.textContent = '100%';
                    if (progressStep) progressStep.textContent = 'All steps completed';
                    if (logDiv) {
                        logDiv.innerHTML += '<div class="log-line success">All fetch operations completed successfully!</div>';
                        logDiv.scrollTop = logDiv.scrollHeight;
                    }
                    isFetching = false;

                    // Update statistics
                    refreshStats();
                    return;
                }

                const step = steps[stepIndex];
                if (progressStep) progressStep.textContent = step.label;
                if (logDiv) {
                    logDiv.innerHTML += `<div class="log-line info">${step.label}...</div>`;
                    logDiv.scrollTop = logDiv.scrollHeight;
                }

                fetch('', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'action=fetch_' + step.name
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            if (progressBar) progressBar.style.width = step.percent + '%';
                            if (progressPercent) progressPercent.textContent = step.percent + '%';

                            let message = `${step.label} completed: `;
                            if (step.name === 'courses') {
                                message += `${data.total} courses processed (${data.inserted} inserted, ${data.updated} updated)`;
                            } else if (step.name === 'analytics') {
                                message += `${data.total} analytics records inserted`;
                            } else if (step.name === 'users') {
                                message += `${data.courses_processed} courses, ${data.total_users} users processed`;
                            }

                            if (logDiv) {
                                logDiv.innerHTML += `<div class="log-line success">${message}</div>`;

                                if (data.errors && data.errors.length > 0) {
                                    logDiv.innerHTML += `<div class="log-line warning">Errors (${data.errors.length}):</div>`;
                                    data.errors.forEach(error => {
                                        logDiv.innerHTML += `<div class="log-line warning">- ${error}</div>`;
                                    });
                                }

                                logDiv.scrollTop = logDiv.scrollHeight;
                            }

                            // Execute next step
                            setTimeout(() => executeStep(stepIndex + 1), 1000);
                        } else {
                            if (logDiv) {
                                logDiv.innerHTML += `<div class="log-line error">${step.label} failed: ${data.error}</div>`;
                                logDiv.scrollTop = logDiv.scrollHeight;
                            }
                            isFetching = false;
                        }
                    })
                    .catch(error => {
                        console.error('Step error:', error);
                        if (logDiv) {
                            logDiv.innerHTML += `<div class="log-line error">${step.label} network error: ${error.message}</div>`;
                            logDiv.scrollTop = logDiv.scrollHeight;
                        }
                        isFetching = false;
                    });
            }

            // Start with first step
            executeStep(0);
        }

        // Clear table data
        function clearTable(tableName) {
            console.log('Clearing table:', tableName);
            showConfirmation('Clear Table', `Are you sure you want to clear all data from ${tableName}? This action cannot be undone.`, function() {
                const tableLabel = tableName.replace('lbln_', '').replace(/_/g, ' ');
                showAlert('warning', `Clearing ${tableLabel}...`, 'courses-status');

                fetch('', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'action=clear_table&table=' + tableName
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            showAlert('success', data.message, 'courses-status');
                            refreshStats();
                        } else {
                            showAlert('error', 'Failed to clear table: ' + (data.error || 'Unknown error'), 'courses-status');
                        }
                    })
                    .catch(error => {
                        console.error('Error clearing table:', error);
                        showAlert('error', 'Error clearing table: ' + error.message, 'courses-status');
                    });
            });
        }

        // Preview table data
        function previewTable(tableName) {
            console.log('Previewing table:', tableName);
            const modalId = tableName.replace('lbln_', '') + '-modal';
            showModal(modalId);
            switchTab(tableName.replace('lbln_', '') + '-preview');
            loadPreview(tableName, tableName.replace('lbln_', '') + '-preview-data');
        }

        // Load preview data
        function loadPreview(tableName, containerId) {
            console.log('Loading preview for table:', tableName);
            const container = document.getElementById(containerId);
            if (!container) {
                console.error('Container not found:', containerId);
                return;
            }

            container.innerHTML = '<p>Loading data...</p>';

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=preview_data&table=' + tableName + '&limit=10'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success && data.data.length > 0) {
                        // Create table
                        let html = '<table class="preview-table">';

                        // Headers
                        html += '<tr>';
                        Object.keys(data.data[0]).forEach(key => {
                            html += `<th>${key}</th>`;
                        });
                        html += '</tr>';

                        // Rows
                        data.data.forEach(row => {
                            html += '<tr>';
                            Object.values(row).forEach(value => {
                                if (value === null || value === undefined) {
                                    html += '<td><em>null</em></td>';
                                } else if (typeof value === 'object') {
                                    html += '<td><code>JSON</code></td>';
                                } else if (typeof value === 'boolean') {
                                    html += `<td>${value ? '✓' : '✗'}</td>`;
                                } else {
                                    html += `<td>${String(value).substring(0, 50)}${String(value).length > 50 ? '...' : ''}</td>`;
                                }
                            });
                            html += '</tr>';
                        });

                        html += '</table>';
                        container.innerHTML = html;
                    } else if (data.success) {
                        container.innerHTML = '<p>No data found in the table.</p>';
                    } else {
                        container.innerHTML = `<p class="error">Error: ${data.error}</p>`;
                    }
                })
                .catch(error => {
                    console.error('Error loading preview:', error);
                    container.innerHTML = `<p class="error">Error loading data: ${error.message}</p>`;
                });
        }

        // Load all logs
        function loadAllLogs() {
            console.log('Loading all logs...');
            const container = document.getElementById('all-logs');
            if (!container) {
                console.error('All logs container not found');
                return;
            }

            container.innerHTML = '<p>Loading logs...</p>';

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_logs&limit=50'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success && data.logs.length > 0) {
                        let html = '';
                        data.logs.forEach(log => {
                            html += `<div class="log-entry ${log.status}">
                        <div class="log-time">
                            ${new Date(log.start_time).toLocaleString()}
                            ${log.end_time ? `(Duration: ${log.duration})` : ''}
                        </div>
                        <div class="log-message">
                            <strong>${log.operation_type}</strong> - 
                            ${log.table_name}: 
                            ${log.message || 'Completed'}
                            ${log.items_processed > 0 ? `(Processed: ${log.items_processed}, Inserted: ${log.items_inserted}, Updated: ${log.items_updated})` : ''}
                        </div>
                    </div>`;
                        });
                        container.innerHTML = html;
                    } else if (data.success) {
                        container.innerHTML = '<div class="log-entry info"><div class="log-message">No logs found.</div></div>';
                    } else {
                        container.innerHTML = `<div class="log-entry error"><div class="log-message">Error: ${data.error}</div></div>`;
                    }
                })
                .catch(error => {
                    console.error('Error loading logs:', error);
                    container.innerHTML = `<div class="log-entry error"><div class="log-message">Error loading logs: ${error.message}</div></div>`;
                });
        }

        // Show alert
        function showAlert(type, message, containerId = null) {
            console.log('Showing alert:', type, message);
            const alertClass = {
                'success': 'alert-success',
                'error': 'alert-error',
                'warning': 'alert-warning',
                'info': 'alert-info'
            } [type] || 'alert-info';

            const icon = {
                'success': 'fa-check-circle',
                'error': 'fa-exclamation-circle',
                'warning': 'fa-exclamation-triangle',
                'info': 'fa-info-circle'
            } [type] || 'fa-info-circle';

            const alertHtml = `
            <div class="alert ${alertClass}">
                <i class="fas ${icon}"></i>
                <div>${message}</div>
            </div>
        `;

            if (containerId) {
                const container = document.getElementById(containerId);
                if (container) {
                    container.innerHTML = alertHtml;

                    // Auto-remove after 5 seconds
                    setTimeout(() => {
                        if (container.innerHTML === alertHtml) {
                            container.innerHTML = '';
                        }
                    }, 5000);
                }
            }

            return alertHtml;
        }

        // Refresh analytics for selected courses
        function refreshSelectedCourseAnalytics() {
            const selectedIds = getSelectedCourseIds();

            if (selectedIds.length === 0) {
                showAlert('warning', 'Please select at least one course to refresh analytics for.', 'users-progress');
                return;
            }

            showAlert('info', `Refreshing analytics for ${selectedIds.length} courses...`, 'users-progress');

            // Create a simple form to submit
            const formData = new FormData();
            formData.append('action', 'refresh_course_analytics');
            formData.append('course_ids', JSON.stringify(selectedIds));

            fetch('', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showAlert('success', `Successfully refreshed analytics for ${data.inserted} courses`, 'users-progress');
                        // Reload the course list
                        loadCourseAnalyticsSummary();
                    } else {
                        showAlert('error', 'Failed to refresh analytics: ' + (data.error || 'Unknown error'), 'users-progress');
                    }
                })
                .catch(error => {
                    showAlert('error', 'Error refreshing analytics: ' + error.message, 'users-progress');
                });
        }
    </script>
</body>

</html>