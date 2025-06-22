<?php

// programIndicatorGroups.php

/**
 * Fetches DHIS2 programIndicatorGroups and returns their id and displayName in a structured format
 * Reads credentials from ../../../.env.dev
 */

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to parse .env file
function parseEnvFile($filePath)
{
    if (!file_exists($filePath)) {
        throw new Exception("Environment file not found: $filePath");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];

    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split on first equals sign
        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);

        // Remove quotes if present
        if (preg_match('/^"(.*)"$/', $value, $matches)) {
            $value = $matches[1];
        } elseif (preg_match('/^\'(.*)\'$/', $value, $matches)) {
            $value = $matches[1];
        }

        $env[$key] = $value;
    }

    return $env;
}

// Load environment variables
try {
    $envFile = '../../../.env.dev';
    $env = parseEnvFile($envFile);

    // Validate required DHIS2 configuration
    $requiredVars = ['DHIS2_BASE_URL', 'DHIS2_USERNAME', 'DHIS2_PASSWORD'];
    foreach ($requiredVars as $var) {
        if (!isset($env[$var]) || empty($env[$var])) {
            throw new Exception("Required environment variable missing or empty: $var");
        }
    }

    $DHIS2_BASE_URL = rtrim($env['DHIS2_BASE_URL'], '/') . '/';
    $DHIS2_USERNAME = $env['DHIS2_USERNAME'];
    $DHIS2_PASSWORD = $env['DHIS2_PASSWORD'];
} catch (Exception $e) {
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
    exit;
}

// Function to fetch data from DHIS2 API
function fetchDhis2Data($endpoint, $maxRetries = 3)
{
    global $DHIS2_BASE_URL, $DHIS2_USERNAME, $DHIS2_PASSWORD;

    $url = $DHIS2_BASE_URL . $endpoint;
    $attempt = 0;

    while ($attempt < $maxRetries) {
        $attempt++;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$DHIS2_USERNAME:$DHIS2_PASSWORD");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Development only

        // NEW: Timeout settings
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); // 15s to establish connection
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);        // 60s max request time

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);

            // Retry on timeout or transient errors
            if ($attempt < $maxRetries) {
                error_log("DHIS2 request attempt $attempt failed: $error. Retrying...");
                sleep($attempt * 2); // 2s, 4s, 6s backoff
                continue;
            } else {
                throw new Exception("DHIS2 API request failed after $maxRetries attempts: $error");
            }
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            if ($attempt < $maxRetries) {
                error_log("DHIS2 request attempt $attempt returned HTTP $httpCode. Retrying...");
                sleep($attempt * 2);
                continue;
            } else {
                throw new Exception("DHIS2 API returned HTTP code $httpCode after $maxRetries attempts");
            }
        }

        return json_decode($response, true);
    }

    // Should never reach here
    throw new Exception("Unknown error during DHIS2 API fetch");
}

// Main execution
try {
    // Fetch program programIndicatorGroups data
    $programIndicatorGroups = fetchDhis2Data('api/programIndicatorGroups.json?paging=false');

    // Extract only 'id' and 'displayName' from the program programIndicatorGroups
    if (isset($programIndicatorGroups['programIndicatorGroups'])) {
        $result = array_map(function ($indicator) {
            return [
                'id' => $indicator['id'],
                'displayName' => $indicator['displayName']
            ];
        }, $programIndicatorGroups['programIndicatorGroups']);

        // Set JSON headers and output
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    } else {
        throw new Exception("No program programIndicatorGroups found in the API response.");
    }
} catch (Exception $e) {
    // Error handling
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
}
