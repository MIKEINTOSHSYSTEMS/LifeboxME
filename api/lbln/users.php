<?php
// users.php - Standalone Lifebox Users API with Complete Pagination

define('DEBUG_MODE', true);

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}

// Increase execution time for large datasets
set_time_limit(300); // 5 minutes

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Handle OPTIONS request for CORS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Load environment variables from .env file
function loadEnv() {
    $envFile = __DIR__ . '../../../.env.dev';
    
    if (!file_exists($envFile)) {
        // Try parent directory
        $envFile = dirname(__DIR__) . '/.env';
    }
    
    if (!file_exists($envFile)) {
        return [
            'error' => true,
            'message' => '.env file not found. Please create one with your API credentials.'
        ];
    }
    
    $config = [];
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        
        $parts = explode('=', $line, 2);
        if (count($parts) === 2) {
            $key = trim($parts[0]);
            $value = trim($parts[1]);
            if (preg_match('/^[\'"](.*)[\'"]$/', $value, $matches)) {
                $value = $matches[1];
            }
            $config[$key] = $value;
        }
    }
    
    // Check required configuration
    $required = ['LIFEBOX_BASE_URL', 'LIFEBOX_ACCESS_TOKEN', 'LIFEBOX_CLIENT_ID'];
    foreach ($required as $key) {
        if (empty($config[$key])) {
            return [
                'error' => true,
                'message' => "Missing required configuration: $key"
            ];
        }
    }
    
    return $config;
}

// Make API request
function makeApiRequest($url, $method = 'GET', $data = null) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $accessToken = $config['LIFEBOX_ACCESS_TOKEN'];
    $clientId = $config['LIFEBOX_CLIENT_ID'];
    $timeout = isset($config['TIMEOUT']) ? intval($config['TIMEOUT']) : 30;
    $maxRetries = isset($config['MAX_RETRIES']) ? intval($config['MAX_RETRIES']) : 3;
    
    for ($attempt = 1; $attempt <= $maxRetries; $attempt++) {
        $ch = curl_init();
        
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $accessToken,
                'Lw-Client: ' . $clientId,
                'Accept: application/json',
                'Content-Type: application/json',
                'User-Agent: Lifebox-API-Client/1.0'
            ],
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
        ]);
        
        if ($method === 'POST' && $data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        
        curl_close($ch);
        
        if ($response === false) {
            if ($attempt === $maxRetries) {
                return [
                    'error' => 'cURL Error: ' . $error,
                    'url' => $url
                ];
            }
            sleep(pow(2, $attempt - 1)); // Exponential backoff
            continue;
        }
        
        $decoded = json_decode($response, true);
        
        if ($httpCode >= 400) {
            if ($attempt === $maxRetries) {
                return [
                    'error' => "API Error ($httpCode)",
                    'details' => $decoded['error'] ?? $decoded['errors'][0]['message'] ?? 'Unknown error',
                    'response' => $decoded,
                    'url' => $url
                ];
            }
            sleep(pow(2, $attempt - 1));
            continue;
        }
        
        return $decoded;
    }
    
    return ['error' => 'Max retries exceeded'];
}

// Fetch all paginated data from any endpoint with progress tracking
function fetchAllPaginatedData($endpoint, $filters = [], $maxPages = null) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'], '/');
    
    $allData = [];
    $page = 1;
    $hasMorePages = true;
    $totalPages = 1;
    
    while ($hasMorePages && (!$maxPages || $page <= $maxPages)) {
        $queryParams = array_merge($filters, ['page' => $page]);
        $queryString = http_build_query($queryParams);
        $queryString = preg_replace('/%5B\d+%5D/', '%5B%5D', $queryString);
        
        $url = $baseUrl . $endpoint . '?' . $queryString;
        
        if (DEBUG_MODE) {
            error_log("Fetching page $page from: " . $url);
        }
        
        $response = makeApiRequest($url);
        
        if (isset($response['error'])) {
            return $response;
        }
        
        // Handle different response formats
        if (isset($response['data']) && is_array($response['data'])) {
            $allData = array_merge($allData, $response['data']);
            $meta = $response['meta'] ?? [];
            $totalPages = $meta['totalPages'] ?? 1;
            $itemsPerPage = $meta['itemsPerPage'] ?? 20;
            $totalItems = $meta['totalItems'] ?? 0;
            
            // Log progress
            if (DEBUG_MODE) {
                error_log("Page $page: " . count($response['data']) . " items, Total so far: " . count($allData));
            }
        } else if (is_array($response) && isset($response[0])) {
            // If response is directly an array (not wrapped in data/meta)
            $allData = array_merge($allData, $response);
            $totalPages = 1; // Assume single page if no meta
        } else if (!empty($response)) {
            // Single item response
            $allData[] = $response;
            $totalPages = 1;
        } else {
            // Empty response
            $hasMorePages = false;
            break;
        }
        
        // Check if we have more pages
        if ($page >= $totalPages) {
            $hasMorePages = false;
        } else {
            $page++;
            
            // Add delay to avoid rate limiting, but reduce it for faster fetching
            usleep(50000); // 0.05 second delay
        }
    }
    
    return [
        'success' => true,
        'data' => $allData,
        'meta' => [
            'totalItems' => count($allData),
            'totalPagesFetched' => $page - 1,
            'totalPagesAvailable' => $totalPages,
            'maxPagesLimit' => $maxPages,
            'timestamp' => date('Y-m-d H:i:s')
        ]
    ];
}

// Get all users with filters and optional page limit
function getAllUsers($filters = [], $maxPages = null) {
    return fetchAllPaginatedData('/users', $filters, $maxPages);
}

// Get single user by ID or email
function getUser($userId) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'], '/');
    $url = $baseUrl . '/users/' . urlencode($userId);
    
    $response = makeApiRequest($url);
    
    if (isset($response['error'])) {
        return $response;
    }
    
    return [
        'success' => true,
        'data' => $response,
        'meta' => [
            'timestamp' => date('Y-m-d H:i:s')
        ]
    ];
}

// Get user courses (enrollments) with pagination
function getUserCourses($userId, $filters = [], $maxPages = null) {
    return fetchAllPaginatedData('/users/' . urlencode($userId) . '/courses', $filters, $maxPages);
}

// Get single page of user courses
function getUserCoursesSinglePage($userId, $page = 1) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'], '/');
    $url = $baseUrl . '/users/' . urlencode($userId) . '/courses?page=' . $page;
    
    $response = makeApiRequest($url);
    
    if (isset($response['error'])) {
        return $response;
    }
    
    return [
        'success' => true,
        'data' => $response['data'] ?? $response,
        'meta' => $response['meta'] ?? [
            'page' => $page,
            'timestamp' => date('Y-m-d H:i:s')
        ]
    ];
}

// Format response - handles both success and error responses
function formatResponse($data) {
    // If data already has an error key
    if (isset($data['error'])) {
        http_response_code(400);
        return json_encode([
            'success' => false,
            'error' => $data['error'],
            'details' => $data['details'] ?? null,
            'url' => $data['url'] ?? null,
            'timestamp' => date('Y-m-d H:i:s')
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    // If data is a direct API response (not wrapped in success/data structure)
    if (!isset($data['success']) && (isset($data['data']) || isset($data[0]))) {
        // It's already a proper API response
        return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    // If it's a direct array response from API
    if (is_array($data) && isset($data[0])) {
        return json_encode([
            'success' => true,
            'data' => $data,
            'meta' => [
                'totalItems' => count($data),
                'timestamp' => date('Y-m-d H:i:s')
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    // If it's a single item
    if (!empty($data) && !isset($data['success'])) {
        return json_encode([
            'success' => true,
            'data' => $data,
            'meta' => [
                'timestamp' => date('Y-m-d H:i:s')
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    // Default: assume it's already properly formatted
    return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

// Helper function to filter users
function filterUsers($users, $filters) {
    if (empty($filters) || empty($users)) {
        return $users;
    }
    
    $filtered = [];
    foreach ($users as $user) {
        $include = true;
        
        foreach ($filters as $key => $value) {
            if (empty($value)) continue;
            
            if ($key === 'email_contains') {
                $email = strtolower($user['email'] ?? '');
                $search = strtolower($value);
                if (strpos($email, $search) === false) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'name_contains') {
                $firstName = strtolower($user['first_name'] ?? '');
                $lastName = strtolower($user['last_name'] ?? '');
                $username = strtolower($user['username'] ?? '');
                $search = strtolower($value);
                
                if (strpos($firstName, $search) === false && 
                    strpos($lastName, $search) === false && 
                    strpos($username, $search) === false) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'is_admin') {
                $isAdmin = $user['is_admin'] ?? false;
                $filterValue = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                if ($isAdmin !== $filterValue) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'country') {
                $country = strtolower($user['fields']['country'] ?? 
                                      $user['utms']['fc_country'] ?? 
                                      $user['utms']['lc_country'] ?? '');
                $search = strtolower($value);
                if ($country !== $search) {
                    $include = false;
                    break;
                }
            }
        }
        
        if ($include) {
            $filtered[] = $user;
        }
    }
    
    return $filtered;
}

// Helper function to filter user courses
function filterUserCourses($courses, $filters) {
    if (empty($filters) || empty($courses)) {
        return $courses;
    }
    
    $filtered = [];
    foreach ($courses as $enrollment) {
        $include = true;
        $course = $enrollment['course'] ?? [];
        
        foreach ($filters as $key => $value) {
            if (empty($value)) continue;
            
            if ($key === 'course_title_contains') {
                $title = strtolower($course['title'] ?? '');
                $search = strtolower($value);
                if (strpos($title, $search) === false) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'course_id') {
                $courseId = $course['id'] ?? '';
                if ($courseId !== $value) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'course_access') {
                $access = $course['access'] ?? '';
                if ($access !== $value) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'category_contains') {
                $categories = $course['categories'] ?? [];
                $search = strtolower($value);
                $found = false;
                
                foreach ($categories as $category) {
                    if (stripos($category, $search) !== false) {
                        $found = true;
                        break;
                    }
                }
                
                if (!$found) {
                    $include = false;
                    break;
                }
            } elseif ($key === 'free_only') {
                $isFree = ($course['access'] ?? '') === 'free';
                if (!$isFree) {
                    $include = false;
                    break;
                }
            }
        }
        
        if ($include) {
            $filtered[] = $enrollment;
        }
    }
    
    return $filtered;
}

// Main execution
try {
    // Get parameters
    $userId = $_GET['id'] ?? '';
    $action = $_GET['action'] ?? '';
    $page = intval($_GET['page'] ?? 1);
    $singlePage = isset($_GET['single_page']) ? filter_var($_GET['single_page'], FILTER_VALIDATE_BOOLEAN) : false;
    $maxPages = isset($_GET['max_pages']) ? intval($_GET['max_pages']) : null;
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : null;
    
    // Filter parameters
    $emailContains = $_GET['email_contains'] ?? '';
    $nameContains = $_GET['name_contains'] ?? '';
    $isAdmin = $_GET['is_admin'] ?? '';
    $country = $_GET['country'] ?? '';
    
    // Course filter parameters
    $courseTitleContains = $_GET['course_title_contains'] ?? '';
    $courseIdFilter = $_GET['course_id'] ?? '';
    $courseAccessFilter = $_GET['course_access'] ?? '';
    $categoryContains = $_GET['category_contains'] ?? '';
    $freeOnly = isset($_GET['free_only']) ? filter_var($_GET['free_only'], FILTER_VALIDATE_BOOLEAN) : false;
    
    // Test mode
    $testMode = isset($_GET['test']);
    
    if ($testMode) {
        // Test configuration
        $config = loadEnv();
        echo formatResponse([
            'test' => true,
            'config' => [
                'base_url' => $config['LIFEBOX_BASE_URL'] ?? 'Not set',
                'has_access_token' => !empty($config['LIFEBOX_ACCESS_TOKEN']),
                'has_client_id' => !empty($config['LIFEBOX_CLIENT_ID']),
                'env_file_exists' => file_exists(__DIR__ . '/.env'),
                'current_directory' => __DIR__
            ],
            'request' => [
                'id' => $userId,
                'action' => $action,
                'page' => $page,
                'single_page' => $singlePage,
                'max_pages' => $maxPages,
                'limit' => $limit,
                'filters' => [
                    'email_contains' => $emailContains,
                    'name_contains' => $nameContains,
                    'is_admin' => $isAdmin,
                    'country' => $country
                ],
                'course_filters' => [
                    'course_title_contains' => $courseTitleContains,
                    'course_id' => $courseIdFilter,
                    'course_access' => $courseAccessFilter,
                    'category_contains' => $categoryContains,
                    'free_only' => $freeOnly
                ]
            ]
        ]);
        exit;
    }
    
    // API filters
    $apiFilters = [];
    
    // Handle different actions
    switch ($action) {
        case 'courses':
            // Get user courses (enrollments)
            if (!$userId) {
                http_response_code(400);
                echo formatResponse(['error' => 'User ID or email is required for courses action']);
                exit;
            }
            
            $courseFilters = [];
            if ($singlePage) {
                $result = getUserCoursesSinglePage($userId, $page);
            } else {
                $result = getUserCourses($userId, $courseFilters, $maxPages);
            }
            
            // Apply course filters if needed
            if (!isset($result['error']) && isset($result['data']) && is_array($result['data'])) {
                $clientCourseFilters = [];
                if ($courseTitleContains) $clientCourseFilters['course_title_contains'] = $courseTitleContains;
                if ($courseIdFilter) $clientCourseFilters['course_id'] = $courseIdFilter;
                if ($courseAccessFilter) $clientCourseFilters['course_access'] = $courseAccessFilter;
                if ($categoryContains) $clientCourseFilters['category_contains'] = $categoryContains;
                if ($freeOnly) $clientCourseFilters['free_only'] = $freeOnly;
                
                if (!empty($clientCourseFilters)) {
                    $filteredCourses = filterUserCourses($result['data'], $clientCourseFilters);
                    $result['data'] = $filteredCourses;
                    $result['meta']['totalItems'] = count($filteredCourses);
                    $result['meta']['filters_applied'] = $clientCourseFilters;
                }
                
                // Apply limit if specified
                if ($limit && $limit > 0 && count($result['data']) > $limit) {
                    $result['data'] = array_slice($result['data'], 0, $limit);
                    $result['meta']['limit_applied'] = $limit;
                    $result['meta']['totalItems'] = $limit;
                }
            }
            break;
            
        default:
            // Default action: get users or specific user
            if ($singlePage) {
                $apiFilters['page'] = $page;
                
                $config = loadEnv();
                $baseUrl = rtrim($config['LIFEBOX_BASE_URL'] ?? '', '/');
                $url = $baseUrl . '/users?' . http_build_query($apiFilters);
                
                $response = makeApiRequest($url);
                
                if (isset($response['error'])) {
                    $result = $response;
                } else {
                    $result = [
                        'success' => true,
                        'data' => $response['data'] ?? $response,
                        'meta' => $response['meta'] ?? [
                            'page' => $page,
                            'timestamp' => date('Y-m-d H:i:s')
                        ]
                    ];
                }
            } 
            // If specific user ID requested
            elseif ($userId) {
                $result = getUser($userId);
            } 
            // Get all users (with optional page limit)
            else {
                $result = getAllUsers($apiFilters, $maxPages);
            }
            
            // Apply client-side filters if needed (and if we have data)
            if (!isset($result['error']) && isset($result['data']) && is_array($result['data'])) {
                $clientFilters = [];
                if ($emailContains) $clientFilters['email_contains'] = $emailContains;
                if ($nameContains) $clientFilters['name_contains'] = $nameContains;
                if ($isAdmin !== '') $clientFilters['is_admin'] = $isAdmin;
                if ($country) $clientFilters['country'] = $country;
                
                if (!empty($clientFilters)) {
                    $filteredUsers = filterUsers($result['data'], $clientFilters);
                    $result['data'] = $filteredUsers;
                    $result['meta']['totalItems'] = count($filteredUsers);
                    $result['meta']['filters_applied'] = $clientFilters;
                }
                
                // Apply limit if specified
                if ($limit && $limit > 0 && count($result['data']) > $limit) {
                    $result['data'] = array_slice($result['data'], 0, $limit);
                    $result['meta']['limit_applied'] = $limit;
                    $result['meta']['totalItems'] = $limit;
                }
            }
            break;
    }
    
    // Output result
    echo formatResponse($result);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Internal Server Error',
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
        'timestamp' => date('Y-m-d H:i:s')
    ], JSON_PRETTY_PRINT);
}
?>