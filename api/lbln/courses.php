<?php
// courses.php - Standalone Lifebox Courses API with Complete Pagination

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
    $envFile = '../../.env.dev';
    
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
            
            // Add delay to avoid rate limiting
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

// Get all courses with filters
function getAllCourses($filters = [], $maxPages = null) {
    return fetchAllPaginatedData('/courses', $filters, $maxPages);
}

// Get single course
function getCourse($courseId) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'], '/');
    $url = $baseUrl . '/courses/' . urlencode($courseId);
    
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

// Get all course users
function getAllCourseUsers($courseId, $filters = [], $maxPages = null) {
    return fetchAllPaginatedData('/courses/' . urlencode($courseId) . '/users', $filters, $maxPages);
}

// Get all course grades
function getAllCourseGrades($courseId, $filters = [], $maxPages = null) {
    return fetchAllPaginatedData('/courses/' . urlencode($courseId) . '/grades', $filters, $maxPages);
}

// Get course analytics
function getCourseAnalytics($courseId) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'], '/');
    $url = $baseUrl . '/courses/' . urlencode($courseId) . '/analytics';
    
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

// Get learning activity analytics
function getLearningActivityAnalytics($courseId, $unitId) {
    $config = loadEnv();
    
    if (isset($config['error'])) {
        return ['error' => $config['message']];
    }
    
    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'], '/');
    $url = $baseUrl . '/courses/' . urlencode($courseId) . '/units/' . urlencode($unitId) . '/analytics';
    
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

// Format response
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

// Main execution
try {
    // Get parameters
    $courseId = $_GET['id'] ?? '';
    $unitId = $_GET['unit_id'] ?? '';
    $action = $_GET['action'] ?? '';
    $page = intval($_GET['page'] ?? 1);
    $access = $_GET['access'] ?? '';
    $categories = $_GET['categories'] ?? '';
    $singlePage = isset($_GET['single_page']) ? filter_var($_GET['single_page'], FILTER_VALIDATE_BOOLEAN) : false;
    $maxPages = isset($_GET['max_pages']) ? intval($_GET['max_pages']) : null;
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : null;
    
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
                'id' => $courseId,
                'unit_id' => $unitId,
                'action' => $action,
                'page' => $page,
                'access' => $access,
                'categories' => $categories,
                'single_page' => $singlePage,
                'max_pages' => $maxPages,
                'limit' => $limit
            ]
        ]);
        exit;
    }
    
    // Determine what to fetch
    $filters = [];
    
    if ($access) {
        $filters['access'] = $access;
    }
    
    if ($categories) {
        $filters['categories'] = $categories;
    }
    
    // Handle different actions
    switch ($action) {
        case 'analytics':
            if (!$courseId) {
                http_response_code(400);
                echo formatResponse(['error' => 'Course ID is required for analytics']);
                exit;
            }
            $result = getCourseAnalytics($courseId);
            break;
            
        case 'users':
            if (!$courseId) {
                http_response_code(400);
                echo formatResponse(['error' => 'Course ID is required for users']);
                exit;
            }
            if ($singlePage) {
                $config = loadEnv();
                $baseUrl = rtrim($config['LIFEBOX_BASE_URL'] ?? '', '/');
                $queryParams = array_merge($filters, ['page' => $page]);
                $url = $baseUrl . '/courses/' . urlencode($courseId) . '/users?' . http_build_query($queryParams);
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
            } else {
                $result = getAllCourseUsers($courseId, $filters, $maxPages);
            }
            break;
            
        case 'grades':
            if (!$courseId) {
                http_response_code(400);
                echo formatResponse(['error' => 'Course ID is required for grades']);
                exit;
            }
            if ($singlePage) {
                $config = loadEnv();
                $baseUrl = rtrim($config['LIFEBOX_BASE_URL'] ?? '', '/');
                $queryParams = array_merge($filters, ['page' => $page]);
                $url = $baseUrl . '/courses/' . urlencode($courseId) . '/grades?' . http_build_query($queryParams);
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
            } else {
                $result = getAllCourseGrades($courseId, $filters, $maxPages);
            }
            break;
            
        case 'unit_analytics':
            if (!$courseId || !$unitId) {
                http_response_code(400);
                echo formatResponse(['error' => 'Course ID and Unit ID are required for unit analytics']);
                exit;
            }
            $result = getLearningActivityAnalytics($courseId, $unitId);
            break;
            
        default:
            // Get course or courses
            if ($courseId) {
                $result = getCourse($courseId);
            } else {
                // Get all courses
                if ($singlePage) {
                    $queryParams = array_merge($filters, ['page' => $page]);
                    $config = loadEnv();
                    $baseUrl = rtrim($config['LIFEBOX_BASE_URL'] ?? '', '/');
                    $url = $baseUrl . '/courses?' . http_build_query($queryParams);
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
                } else {
                    $result = getAllCourses($filters, $maxPages);
                }
            }
            break;
    }
    
    // Apply limit if specified (for data arrays)
    if (!isset($result['error']) && isset($result['data']) && is_array($result['data']) && $limit && $limit > 0) {
        if (count($result['data']) > $limit) {
            $result['data'] = array_slice($result['data'], 0, $limit);
            $result['meta']['limit_applied'] = $limit;
            $result['meta']['totalItems'] = $limit;
        }
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