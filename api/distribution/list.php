<?php
// list.php - Lifebox Device Distribution List API Endpoint

/**
 * ============================================================================
 * Lifebox Device Distribution List - Salesforce Integration
 * ============================================================================
 *
 * KEY FIX: FIELDS(ALL) is capped at LIMIT 200 by Salesforce. To paginate past
 * 200, we enumerate the exact fields we know exist and use queryMore() via
 * nextRecordsUrl. The pagination loop now correctly handles the relative URL
 * that Salesforce returns (e.g. /services/data/v60.0/query/01gXX...) by
 * building the absolute URL from the instance host, NOT appending the API base.
 *
 * ENV SUPPORT: Reads Salesforce credentials from .env file.
 * TOKEN REFRESH: Automatically handles 401 errors by refreshing the token.
 * EXTERNAL ASSETS: CSS and JS loaded from assets/styles/ and assets/scripts/.
 *
 * @package  LifeboxME
 * @author   @MIKEINTOSHSYSTEMS
 * @version  5.0
 * @date     2026-05-15
 */

// ============================================================================
// CONFIGURATION
// ============================================================================
error_reporting(E_ALL);
ini_set('display_errors', 0); // off in production; errors go to log
ini_set('log_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Load environment variables from .env file.
 * Searches multiple possible locations for flexibility.
 * Falls back to hardcoded values if file not found (development only).
 *
 * @return array Environment variables
 */
function loadEnvConfig(): array
{
    // Possible locations for .env (from deepest to root)
    $possiblePaths = [
        __DIR__ . '/../../.env',            // api/distribution/ → ../../ = project root
        __DIR__ . '/../../../.env',         // Extra level up
        dirname(__DIR__, 3) . '/.env',      // 3 directories up
        __DIR__ . '/.env',                  // Same directory (fallback)
    ];

    foreach ($possiblePaths as $path) {
        if (file_exists($path)) {
            $env = @parse_ini_file($path, false, INI_SCANNER_RAW);
            if ($env && !empty($env['SF_CLIENT_ID'])) {
                error_log("[ENV] Loaded configuration from: " . $path);
                return $env;
            }
        }
    }

    // Fallback to hardcoded values for development
    error_log("[ENV] WARNING: .env not found, using hardcoded fallback values!");
    return [
        'SF_CLIENT_ID'     => '',
        'SF_CLIENT_SECRET' => '',
        'SF_INSTANCE'      => 'https://lifebox.my.salesforce.com',
        'SF_API_VERSION'   => 'v60.0',
        'SF_CACHE_TTL'     => '300',
        'SF_MAX_RECORDS'   => '50000',
    ];
}

// Load and define constants
$env = loadEnvConfig();

define('SF_CLIENT_ID',     $env['SF_CLIENT_ID']);
define('SF_CLIENT_SECRET', $env['SF_CLIENT_SECRET']);
define('SF_INSTANCE',      rtrim($env['SF_INSTANCE'] ?? 'https://lifebox.my.salesforce.com', '/'));
define('SF_TOKEN_URL',     SF_INSTANCE . '/services/oauth2/token');
define('SF_API_VERSION',   $env['SF_API_VERSION'] ?? 'v60.0');
define('SF_API_BASE',      SF_INSTANCE . '/services/data/' . SF_API_VERSION);
define('CACHE_TTL',        (int)($env['SF_CACHE_TTL'] ?? 300));   // 5 min default
define('MAX_RECORDS',      (int)($env['SF_MAX_RECORDS'] ?? 50000)); // safety cap

/**
 * All known fields on Distribution_List__c.
 * Using explicit fields instead of FIELDS(ALL) removes the 200-row hard cap
 * that Salesforce imposes on FIELDS(ALL) queries.
 * This is also used as fallback when dynamic field discovery fails.
 */
define('DL_FIELDS', implode(',', [
    'Id',
    'OwnerId',
    'IsDeleted',
    'Name',
    'CurrencyIsoCode',
    'CreatedDate',
    'CreatedById',
    'LastModifiedDate',
    'LastModifiedById',
    'SystemModstamp',
    'LastViewedDate',
    'LastReferencedDate',
    'Recipient_First_Name__c',
    'Recipient_Last_Name__c',
    'Units__c',
    'Type_of_Device__c',
    'Device_Type__c',
    'Hospital_Name__c',
    'Email_Address__c',
    'Contact_Number__c',
    'Country__c',
    'Region__c',
    'Product_Code__c',
    'Order_Reference__c',
    'Contact_Name__c',
    'Payment__c',
    'Date__c',
]));

// ============================================================================
// SSL CERTIFICATE MANAGER
// ============================================================================

/**
 * Manages SSL CA certificates for Windows/WAMP environments.
 * Automatically downloads and caches the CA bundle if missing.
 */
class SSLCertificateManager
{
    private string $certPath;

    public function __construct()
    {
        $this->certPath = __DIR__ . DIRECTORY_SEPARATOR . 'cacert.pem';
        $this->init();
    }

    /**
     * Initialize SSL certificate: validate existing or download new.
     */
    private function init(): void
    {
        if (!$this->isValid()) {
            $this->download();
        }
        if (file_exists($this->certPath)) {
            @ini_set('curl.cainfo',    $this->certPath);
            @ini_set('openssl.cafile', $this->certPath);
        }
    }

    /**
     * Check if the cached certificate is valid (size > 100KB, less than 30 days old).
     */
    private function isValid(): bool
    {
        return file_exists($this->certPath)
            && filesize($this->certPath) > 100_000
            && filemtime($this->certPath) > strtotime('-30 days');
    }

    /**
     * Download CA certificate bundle from multiple fallback URLs.
     */
    private function download(): void
    {
        $urls = [
            'https://curl.se/ca/cacert.pem',
            'https://raw.githubusercontent.com/bagder/ca-bundle/master/ca-bundle.crt',
        ];
        foreach ($urls as $url) {
            $data = $this->fetch($url);
            if ($data && strlen($data) > 100_000) {
                file_put_contents($this->certPath, $data);
                error_log("[SSL] Certificate downloaded from: $url");
                return;
            }
        }
        error_log("[SSL] WARNING: Failed to download CA certificate!");
    }

    /**
     * Fetch content from URL with SSL verification disabled (for initial download).
     */
    private function fetch(string $url): string|false
    {
        if (!function_exists('curl_init')) return false;
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT      => 'LifeboxSSL/5.0',
        ]);
        $body = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($code === 200 && $body) ? $body : false;
    }

    /**
     * Get the path to the CA certificate file, or null if not found.
     */
    public function certPath(): ?string
    {
        return file_exists($this->certPath) ? $this->certPath : null;
    }
}

// ============================================================================
// SALESFORCE API CLIENT
// ============================================================================

/**
 * Handles all communication with the Salesforce REST API.
 * Features: OAuth 2.0 client credentials flow, automatic pagination,
 * dynamic field discovery, and automatic 401 token refresh.
 */
class SalesforceClient
{
    private ?string $token      = null;
    private int     $tokenExp   = 0;
    private int     $retryCount = 0;
    private const   MAX_RETRIES = 2;  // Max retries on 401 errors
    private SSLCertificateManager $ssl;

    public function __construct()
    {
        $this->ssl = new SSLCertificateManager();
    }

    // ── Authentication ────────────────────────────────────────────────────────

    /**
     * Get a valid OAuth 2.0 access token.
     * Checks memory cache → session cache → requests new token.
     * Token is cached with 60-second expiry buffer.
     *
     * @return string Access token
     * @throws RuntimeException If authentication fails
     */
    private function token(): string
    {
        // 1. Memory cache (fastest)
        if ($this->token && time() < $this->tokenExp) {
            error_log("[AUTH] Using in-memory token (expires in " . ($this->tokenExp - time()) . "s)");
            return $this->token;
        }

        // 2. Session cache
        if (!empty($_SESSION['sf_token']) && !empty($_SESSION['sf_token_exp'])) {
            if (time() < $_SESSION['sf_token_exp']) {
                $this->token    = $_SESSION['sf_token'];
                $this->tokenExp = $_SESSION['sf_token_exp'];
                error_log("[AUTH] Using session token (expires in " . ($this->tokenExp - time()) . "s)");
                return $this->token;
            }
            error_log("[AUTH] Session token expired at " . date('Y-m-d H:i:s', $_SESSION['sf_token_exp']));
        }

        // 3. Request new token
        return $this->requestNewToken();
    }

    /**
     * Request a fresh OAuth token from Salesforce using client credentials flow.
     *
     * @return string New access token
     * @throws RuntimeException If token request fails
     */
    private function requestNewToken(): string
    {
        error_log("[AUTH] Requesting new OAuth token from " . SF_TOKEN_URL);
        error_log("[AUTH] Client ID: " . substr(SF_CLIENT_ID, 0, 15) . "...");

        $ch = curl_init(SF_TOKEN_URL);

        $postFields = http_build_query([
            'grant_type'    => 'client_credentials',
            'client_id'     => SF_CLIENT_ID,
            'client_secret' => SF_CLIENT_SECRET,
        ]);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $postFields,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_CONNECTTIMEOUT => 15,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT      => 'LifeboxSF/5.0',
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/x-www-form-urlencoded',
                'Accept: application/json',
            ],
        ]);

        // SSL configuration
        $cert = $this->ssl->certPath();
        if ($cert) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_CAINFO, $cert);
        } else {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error    = curl_error($ch);
        $errorNo  = curl_errno($ch);
        curl_close($ch);

        if ($error) {
            error_log("[AUTH] cURL error ($errorNo): $error");
            throw new RuntimeException("Failed to connect to Salesforce: $error");
        }

        $data = json_decode($response, true);

        if ($httpCode !== 200 || empty($data['access_token'])) {
            $errorMsg = $data['error_description'] ?? $data['error'] ?? "HTTP $httpCode";
            error_log("[AUTH] Token request failed ($httpCode): $errorMsg");

            if ($httpCode === 401 || stripos($errorMsg, 'invalid_client') !== false) {
                throw new RuntimeException(
                    "Salesforce authentication failed: $errorMsg\n\n" .
                        "Please verify SF_CLIENT_ID and SF_CLIENT_SECRET in your .env.dev file.\n" .
                        "Also ensure your Connected App allows 'client_credentials' grant type."
                );
            }

            throw new RuntimeException("Salesforce auth failed ($httpCode): $errorMsg");
        }

        // Cache the new token (with 60-second buffer)
        $this->token    = $data['access_token'];
        $expiresIn      = (int)($data['expires_in'] ?? 3600);
        $this->tokenExp = time() + $expiresIn - 60;

        $_SESSION['sf_token']     = $this->token;
        $_SESSION['sf_token_exp'] = $this->tokenExp;

        error_log("[AUTH] New token obtained! Expires in {$expiresIn}s");
        return $this->token;
    }

    // ── Core HTTP ─────────────────────────────────────────────────────────────

    /**
     * Execute a cURL request with SSL and authentication headers.
     * Automatically retries on 401 errors with a fresh token.
     *
     * @param string $url   Full URL to request
     * @param array  $extra Additional CURLOPT_* options
     * @return array Decoded JSON response
     * @throws RuntimeException On HTTP or cURL errors
     */
    private function curl(string $url, array $extra = []): array
    {
        $ch = curl_init($url);
        $defaults = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_CONNECTTIMEOUT => 20,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_USERAGENT      => 'LifeboxSF/5.0',
        ];

        $cert = $this->ssl->certPath();
        if ($cert) {
            $defaults[CURLOPT_SSL_VERIFYPEER] = true;
            $defaults[CURLOPT_SSL_VERIFYHOST] = 2;
            $defaults[CURLOPT_CAINFO]         = $cert;
        } else {
            $defaults[CURLOPT_SSL_VERIFYPEER] = false;
            $defaults[CURLOPT_SSL_VERIFYHOST] = 0;
        }

        curl_setopt_array($ch, $extra + $defaults);
        $body = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err  = curl_error($ch);
        curl_close($ch);

        if ($err) throw new RuntimeException("cURL error: $err");

        $data = json_decode($body, true) ?? [];

        // Auto-retry on 401 (Session expired or invalid)
        if ($code === 401 && $this->retryCount < self::MAX_RETRIES) {
            error_log("[HTTP] 401 error, refreshing token (attempt " . ($this->retryCount + 1) . ")");

            // Clear cached tokens
            $this->token    = null;
            $this->tokenExp = 0;
            unset($_SESSION['sf_token'], $_SESSION['sf_token_exp']);

            $this->retryCount++;

            // Retry with fresh token
            $retryOptions = $extra + $defaults;
            $retryOptions[CURLOPT_HTTPHEADER] = [
                'Authorization: Bearer ' . $this->token(),
                'Accept: application/json',
            ];

            $ch2 = curl_init($url);
            curl_setopt_array($ch2, $retryOptions);
            $body = curl_exec($ch2);
            $code = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
            curl_close($ch2);

            $this->retryCount = 0;

            if ($code >= 400) {
                $data = json_decode($body, true) ?? [];
                $msg  = $data[0]['message'] ?? $data['error'] ?? "HTTP $code";
                throw new RuntimeException("Salesforce error after token refresh ($code): $msg");
            }

            return json_decode($body, true) ?? [];
        }

        $this->retryCount = 0;

        if ($code >= 400) {
            $msg = $data[0]['message'] ?? $data['error_description'] ?? $data['error'] ?? "HTTP $code";
            throw new RuntimeException("Salesforce error ($code): $msg");
        }

        return $data;
    }

    /**
     * Authenticated GET request to Salesforce API.
     * Handles relative URLs by prepending SF_INSTANCE.
     *
     * @param string $url Absolute or relative URL
     * @return array Decoded JSON response
     */
    private function get(string $url): array
    {
        if (str_starts_with($url, '/')) {
            $url = SF_INSTANCE . $url;
        }

        return $this->curl($url, [
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $this->token(),
                'Accept: application/json',
            ],
        ]);
    }

    // ── Field Discovery ───────────────────────────────────────────────────────

    /**
     * Dynamically discover all queryable fields for a Salesforce object.
     * Results are cached in session for CACHE_TTL seconds.
     * Falls back to hardcoded list if describe API fails.
     *
     * @param string $objectName Salesforce object API name
     * @return array List of field names
     */
    private function getObjectFields(string $objectName): array
    {
        $cacheKey = "sf_fields_{$objectName}";

        // Return cached fields if available
        if (
            !empty($_SESSION[$cacheKey]) &&
            !empty($_SESSION[$cacheKey . '_t']) &&
            (time() - $_SESSION[$cacheKey . '_t']) < CACHE_TTL
        ) {
            return $_SESSION[$cacheKey];
        }

        try {
            $describeUrl = SF_API_BASE . "/sobjects/{$objectName}/describe";
            $resp = $this->get($describeUrl);

            $fields = [];
            if (!empty($resp['fields']) && is_array($resp['fields'])) {
                foreach ($resp['fields'] as $field) {
                    if (!empty($field['name'])) {
                        $fields[] = $field['name'];
                    }
                }
            }

            if (!empty($fields)) {
                sort($fields);
                $_SESSION[$cacheKey]    = $fields;
                $_SESSION[$cacheKey . '_t'] = time();
                error_log("[FIELDS] Discovered " . count($fields) . " fields for {$objectName}");
                return $fields;
            }

            throw new RuntimeException("Describe returned no fields");
        } catch (Throwable $e) {
            error_log("[FIELDS] Discovery failed: " . $e->getMessage());
            $fallback = $this->getFallbackFields($objectName);
            $_SESSION[$cacheKey]    = $fallback;
            $_SESSION[$cacheKey . '_t'] = time();
            return $fallback;
        }
    }

    /**
     * Get hardcoded fallback fields when dynamic discovery fails.
     */
    private function getFallbackFields(string $objectName): array
    {
        $fallbacks = [
            'Distribution_List__c' => explode(',', DL_FIELDS),
            'Device_Request__c'    => ['Id', 'Name', 'CreatedDate', 'LastModifiedDate'],
            'Device_Procurement__c' => ['Id', 'Name', 'CreatedDate', 'LastModifiedDate'],
        ];
        return $fallbacks[$objectName] ?? ['Id', 'Name'];
    }

    /**
     * Force refresh the cached field list for an object.
     */
    public function refreshObjectFields(string $objectName): array
    {
        $cacheKey = "sf_fields_{$objectName}";
        unset($_SESSION[$cacheKey], $_SESSION[$cacheKey . '_t']);
        return $this->getObjectFields($objectName);
    }

    // ── Query / Pagination ────────────────────────────────────────────────────

    /**
     * Execute a SOQL query and automatically follow nextRecordsUrl for all pages.
     *
     * @param string $soql SOQL query string
     * @return array All records
     */
    public function queryAll(string $soql): array
    {
        $all  = [];
        $url  = SF_API_BASE . '/query/?q=' . urlencode($soql);
        $page = 0;

        while ($url && count($all) < MAX_RECORDS) {
            $page++;
            $resp = $this->get($url);

            if (!empty($resp['records'])) {
                $batchCount = count($resp['records']);
                $all = array_merge($all, $resp['records']);
                error_log("[QUERY] Page $page: +{$batchCount} records (total: " . count($all) . ")");
            }

            if (!empty($resp['done']) || empty($resp['nextRecordsUrl'])) break;
            $url = $resp['nextRecordsUrl'];
        }

        error_log("[QUERY] Complete: " . count($all) . " records in $page pages");
        return $all;
    }

    /**
     * Execute a SOQL query returning only the first page.
     */
    public function queryFirst(string $soql): array
    {
        return $this->get(SF_API_BASE . '/query/?q=' . urlencode($soql));
    }

    // ── Business Methods ──────────────────────────────────────────────────────

    /**
     * Get device distribution records with optional filters.
     *
     * @param array $f Filter criteria
     * @return array Matching records
     */
    public function getDistributions(array $f = []): array
    {
        $where = [];

        if (!empty($f['device_type'])) {
            $v = str_replace("'", "\\'", $f['device_type']);
            $where[] = "Device_Type__c = '$v'";
        }
        if (!empty($f['status'])) {
            $v = str_replace("'", "\\'", $f['status']);
            $where[] = "Status__c = '$v'";
        }
        if (!empty($f['region'])) {
            $v = str_replace("'", "\\'", $f['region']);
            $where[] = "Region__c = '$v'";
        }
        if (!empty($f['country'])) {
            $v = str_replace("'", "\\'", $f['country']);
            $where[] = "Country__c = '$v'";
        }
        if (!empty($f['payment'])) {
            $v = str_replace("'", "\\'", $f['payment']);
            $where[] = "Payment__c = '$v'";
        }
        if (!empty($f['date_from'])) {
            $d = date('Y-m-d', strtotime($f['date_from']));
            $where[] = "Date__c >= $d";
        }
        if (!empty($f['date_to'])) {
            $d = date('Y-m-d', strtotime($f['date_to']));
            $where[] = "Date__c <= $d";
        }
        if (!empty($f['search'])) {
            $s = str_replace("'", "\\'", $f['search']);
            $where[] = "(Name LIKE '%$s%' OR Contact_Name__c LIKE '%$s%' OR Email_Address__c LIKE '%$s%' OR Country__c LIKE '%$s%' OR Order_Reference__c LIKE '%$s%')";
        }
        if (!empty($f['only_devices'])) {
            $where[] = "Device_Type__c != NULL";
        }

        $fields    = $this->getObjectFields('Distribution_List__c');
        $fieldList = implode(',', $fields);

        $soql = "SELECT " . $fieldList . " FROM Distribution_List__c";
        if ($where) $soql .= " WHERE " . implode(' AND ', $where);
        $soql .= " ORDER BY CreatedDate DESC";

        return $this->queryAll($soql);
    }

    /**
     * Get distinct device types for filter dropdown.
     */
    public function getDeviceTypes(): array
    {
        $key = 'sf_device_types';
        if (!empty($_SESSION[$key]) && (time() - ($_SESSION[$key . '_t'] ?? 0)) < CACHE_TTL) {
            return $_SESSION[$key];
        }
        $resp  = $this->queryFirst("SELECT Device_Type__c FROM Distribution_List__c WHERE Device_Type__c != NULL GROUP BY Device_Type__c LIMIT 200");
        $types = array_filter(array_column($resp['records'] ?? [], 'Device_Type__c'));
        sort($types);
        $_SESSION[$key]        = array_values($types);
        $_SESSION[$key . '_t'] = time();
        return $_SESSION[$key];
    }

    /**
     * Get distinct values for any field (for filter dropdowns).
     */
    public function getDistinctValues(string $field): array
    {
        $key = "sf_distinct_$field";
        if (!empty($_SESSION[$key]) && (time() - ($_SESSION[$key . '_t'] ?? 0)) < CACHE_TTL) {
            return $_SESSION[$key];
        }
        $resp   = $this->queryFirst("SELECT $field FROM Distribution_List__c WHERE $field != NULL GROUP BY $field LIMIT 500");
        $values = array_filter(array_column($resp['records'] ?? [], $field));
        sort($values);
        $_SESSION[$key]        = array_values($values);
        $_SESSION[$key . '_t'] = time();
        return $_SESSION[$key];
    }

    /**
     * Get statistics about Distribution_List__c records.
     */
    public function getStats(): array
    {
        $key = 'sf_stats';
        if (!empty($_SESSION[$key]) && (time() - ($_SESSION[$key . '_t'] ?? 0)) < CACHE_TTL) {
            return $_SESSION[$key];
        }
        $stats = ['total' => 0, 'this_month' => 0, 'device_types' => 0, 'latest' => null];
        try {
            $r = $this->queryFirst("SELECT COUNT() FROM Distribution_List__c");
            $stats['total'] = $r['totalSize'] ?? 0;

            $fm = date('Y-m-01');
            $r  = $this->queryFirst("SELECT COUNT() FROM Distribution_List__c WHERE CreatedDate >= {$fm}T00:00:00Z");
            $stats['this_month'] = $r['totalSize'] ?? 0;

            $types = $this->getDeviceTypes();
            $stats['device_types'] = count($types);

            $r = $this->queryFirst("SELECT Name, CreatedDate FROM Distribution_List__c ORDER BY CreatedDate DESC LIMIT 1");
            $stats['latest'] = $r['records'][0] ?? null;
        } catch (Throwable $e) {
            error_log("Stats error: " . $e->getMessage());
        }

        $_SESSION[$key]        = $stats;
        $_SESSION[$key . '_t'] = time();
        return $stats;
    }
}

// ============================================================================
// EXPORT FUNCTIONS
// ============================================================================
function getExportColumns(): array
{
    return [
        'Id',
        'Name',
        'Contact_Name__c',
        'Email_Address__c',
        'Contact_Number__c',
        'Device_Type__c',
        'Type_of_Device__c',
        'Units__c',
        'Country__c',
        'Region__c',
        'Hospital_Name__c',
        'Order_Reference__c',
        'Product_Code__c',
        'Payment__c',
        'Date__c',
        'CreatedDate',
        'LastModifiedDate'
    ];
}

function exportCSV(array $records): void
{
    $cols = getExportColumns();
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="distribution_' . date('Ymd_His') . '.csv"');
    $out = fopen('php://output', 'w');
    fprintf($out, chr(0xEF) . chr(0xBB) . chr(0xBF)); // BOM for Excel UTF-8
    fputcsv($out, $cols);
    foreach ($records as $r) {
        $row = [];
        foreach ($cols as $c) {
            $v = $r[$c] ?? '';
            if (is_array($v) || is_object($v)) $v = json_encode($v);
            $row[] = $v;
        }
        fputcsv($out, $row);
    }
    fclose($out);
    exit;
}

function exportExcel(array $records): void
{
    $cols = getExportColumns();
    header('Content-Type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename="distribution_' . date('Ymd_His') . '.xls"');
    echo '<html><head><meta charset="UTF-8"></head><body><table border="1">';
    echo '<tr>' . implode('', array_map(fn($c) => '<th>' . htmlspecialchars($c) . '</th>', $cols)) . '</tr>';
    foreach ($records as $r) {
        echo '<tr>';
        foreach ($cols as $c) {
            $v = $r[$c] ?? '';
            if (is_array($v) || is_object($v)) $v = json_encode($v);
            echo '<td>' . htmlspecialchars((string)$v) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table></body></html>';
    exit;
}

function exportJSON(array $records): void
{
    $cols = getExportColumns();
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Disposition: attachment; filename="distribution_' . date('Ymd_His') . '.json"');
    $out = [];
    foreach ($records as $r) {
        $row = [];
        foreach ($cols as $c) $row[$c] = $r[$c] ?? null;
        $out[] = $row;
    }
    echo json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// ============================================================================
// HELPER FUNCTIONS
// ============================================================================
function fv($value, string $col = ''): string
{
    if (is_null($value) || $value === '') return '<span class="null-val">—</span>';
    if (is_bool($value)) return $value
        ? '<span class="badge-yes">✓ Yes</span>'
        : '<span class="badge-no">✗ No</span>';

    if (is_array($value)) {
        return '<span class="badge-arr">[ ' . count($value) . ' ]</span>';
    }

    $str = (string)$value;

    if (preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}/', $str)) {
        return '<span class="cell-date">' . date('d M Y', strtotime($str)) . '<br><small>' . date('H:i:s', strtotime($str)) . ' UTC</small></span>';
    }

    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $str)) {
        return '<span class="cell-date">' . date('d M Y', strtotime($str)) . '</span>';
    }

    $disp = htmlspecialchars($str);
    if (strlen($disp) > 80) {
        return '<span class="cell-long" title="' . $disp . '">' . htmlspecialchars(substr($str, 0, 60)) . '…</span>';
    }
    return $disp;
}

function columnLabel(string $col): string
{
    $col = str_replace(['__c', '_c'], '', $col);
    $col = str_replace('_', ' ', $col);
    return ucwords(strtolower($col));
}

// ============================================================================
// API MODE
// ============================================================================
if (isset($_GET['api'])) {
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, OPTIONS');
    header('Access-Control-Allow-Headers: Authorization, Content-Type');

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(204);
        exit;
    }

    $action = $_GET['action'] ?? 'records';

    try {
        $sf = new SalesforceClient();

        switch ($action) {
            case 'records':
                $f = [
                    'device_type'  => $_GET['device_type'] ?? '',
                    'status'       => $_GET['status']      ?? '',
                    'region'       => $_GET['region']      ?? '',
                    'country'      => $_GET['country']     ?? '',
                    'payment'      => $_GET['payment']     ?? '',
                    'date_from'    => $_GET['date_from']   ?? '',
                    'date_to'      => $_GET['date_to']     ?? '',
                    'search'       => $_GET['search']      ?? '',
                    'only_devices' => !empty($_GET['only_devices']),
                ];
                $records = $sf->getDistributions($f);
                $page    = max(1, (int)($_GET['page'] ?? 1));
                $limit   = min(5000, max(1, (int)($_GET['limit'] ?? count($records))));
                $offset  = ($page - 1) * $limit;
                $paged   = array_slice($records, $offset, $limit);

                echo json_encode([
                    'success'       => true,
                    'total_records' => count($records),
                    'page'          => $page,
                    'limit'         => $limit,
                    'pages'         => (int)ceil(count($records) / $limit),
                    'returned'      => count($paged),
                    'records'       => $paged,
                ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                break;

            case 'device_types':
                echo json_encode(['success' => true, 'device_types' => $sf->getDeviceTypes()]);
                break;

            case 'regions':
                echo json_encode(['success' => true, 'regions' => $sf->getDistinctValues('Region__c')]);
                break;

            case 'countries':
                echo json_encode(['success' => true, 'countries' => $sf->getDistinctValues('Country__c')]);
                break;

            case 'payments':
                echo json_encode(['success' => true, 'payments' => $sf->getDistinctValues('Payment__c')]);
                break;

            case 'statistics':
                echo json_encode(['success' => true, 'statistics' => $sf->getStats()]);
                break;

            case 'token_status':
                echo json_encode([
                    'success'              => true,
                    'has_token'            => !empty($_SESSION['sf_token']),
                    'token_expiry'         => $_SESSION['sf_token_exp'] ?? null,
                    'token_expiry_formatted' => isset($_SESSION['sf_token_exp'])
                        ? date('Y-m-d H:i:s', $_SESSION['sf_token_exp']) : null,
                    'is_valid'             => !empty($_SESSION['sf_token'])
                        && time() < ($_SESSION['sf_token_exp'] ?? 0),
                ]);
                break;

            default:
                http_response_code(400);
                echo json_encode(['success' => false, 'error' => "Unknown action: $action"]);
        }
    } catch (Throwable $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
    exit;
}

// ============================================================================
// EXPORT MODE
// ============================================================================
if (isset($_GET['export'])) {
    try {
        $sf = new SalesforceClient();
        $f = [
            'device_type'  => $_GET['device_type'] ?? '',
            'region'       => $_GET['region']       ?? '',
            'country'      => $_GET['country']      ?? '',
            'payment'      => $_GET['payment']      ?? '',
            'date_from'    => $_GET['date_from']    ?? '',
            'date_to'      => $_GET['date_to']      ?? '',
            'search'       => $_GET['search']       ?? '',
            'only_devices' => !empty($_GET['only_devices']),
        ];
        $records = $sf->getDistributions($f);
        match ($_GET['export']) {
            'csv'   => exportCSV($records),
            'excel' => exportExcel($records),
            'json'  => exportJSON($records),
            default => throw new RuntimeException('Unknown format'),
        };
    } catch (Throwable $e) {
        http_response_code(500);
        die("Export failed: " . htmlspecialchars($e->getMessage()));
    }
}

// ============================================================================
// PAGE MODE
// ============================================================================
$error       = null;
$records     = [];
$stats       = [];
$deviceTypes = [];
$regions     = [];
$countries   = [];
$payments    = [];
$fetchTime   = 0;

$f = [
    'device_type'  => trim($_GET['device_type'] ?? ''),
    'region'       => trim($_GET['region']       ?? ''),
    'country'      => trim($_GET['country']      ?? ''),
    'payment'      => trim($_GET['payment']      ?? ''),
    'date_from'    => trim($_GET['date_from']    ?? ''),
    'date_to'      => trim($_GET['date_to']      ?? ''),
    'search'       => trim($_GET['search']       ?? ''),
    'only_devices' => !empty($_GET['only_devices']),
];

try {
    $t0 = microtime(true);
    $sf = new SalesforceClient();

    $records     = $sf->getDistributions($f);
    $stats       = $sf->getStats();
    $deviceTypes = $sf->getDeviceTypes();
    $regions     = $sf->getDistinctValues('Region__c');
    $countries   = $sf->getDistinctValues('Country__c');
    $payments    = $sf->getDistinctValues('Payment__c');
    $fetchTime   = round(microtime(true) - $t0, 2);
} catch (Throwable $e) {
    $error = $e->getMessage();
    error_log("Lifebox SF Error: $error");
}

// Priority display columns for the table
$displayCols = [
    'Name',
    'Contact_Name__c',
    'Email_Address__c',
    'Contact_Number__c',
    'Device_Type__c',
    'Type_of_Device__c',
    'Units__c',
    'Country__c',
    'Region__c',
    'Hospital_Name__c',
    'Order_Reference__c',
    'Product_Code__c',
    'Payment__c',
    'Date__c',
    'CreatedDate',
];

$qs = http_build_query(array_filter($f, fn($v) => $v !== '' && $v !== false));

// Asset paths
$stylePath  = __DIR__ . '/assets/styles/style.css';
$scriptPath = __DIR__ . '/assets/scripts/script.js';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox · Device Distribution</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <?php if (file_exists($stylePath)): ?>
        <style>
            <?php include $stylePath; ?>
        </style>
    <?php endif; ?>
</head>

<body>

    <!-- Loading Overlay -->
    <div id="loadOverlay">
        <div class="spin-box">
            <div class="spin"></div>
            <div class="spin-text">Fetching from Salesforce…</div>
        </div>
    </div>

    <!-- Toast Shelf -->
    <div class="toast-shelf" id="toastShelf"></div>

    <!-- ── TOPBAR ── -->
    <header class="topbar">
        <a class="topbar-brand" href="">
            <div class="topbar-logo"><img src="salesforce.png" alt="Lifebox Salesforce"></div>
            <div class="topbar-name">Lifebox Salesforce <span>Device Distribution Integration</span></div>
        </a>
        <div class="topbar-actions">
            <button class="topbar-btn" onclick="location.reload()"><i class="fas fa-sync-alt"></i> Refresh</button>
            <!-- <a href="device_fetch.php" class="topbar-btn"><i class="fas fa-database"></i> Sync DB</a> -->
            <button class="topbar-btn primary" onclick="window.open('?api=1&action=records','_blank')"><i class="fas fa-code"></i> API</button>
        </div>
    </header>

    <!-- ── HERO ── -->
    <section class="hero">
        <div class="hero-grid">
            <div>
                <h1 class="hero-title">Device <em>Distribution</em> List</h1>
                <p class="hero-sub">
                    <i class="fas fa-cloud me-1" style="color:var(--brand)"></i>
                    Live sync · Salesforce <strong style="color:#fff"><?= SF_API_VERSION ?></strong>
                    <?php if ($fetchTime): ?> · loaded in <strong style="color:#fff"><?= $fetchTime ?>s</strong><?php endif; ?>
                </p>
            </div>
            <div class="hero-meta">
                <strong><?= date('d M Y, H:i') ?></strong><br>
                UTC Timezone<br>
            </div>
        </div>
    </section>

    <div class="page-wrap">

        <?php if ($error): ?>
            <div style="background:#fff1f2;border:1px solid #fecaca;border-radius:var(--radius);padding:1.25rem;margin-bottom:1.25rem;">
                <strong style="color:var(--red)"><i class="fas fa-exclamation-triangle me-1"></i>Salesforce Error</strong>
                <p style="margin-top:.5rem;font-family:var(--mono);font-size:.8rem;color:#7f1d1d;"><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>

        <!-- ── STAT CARDS ── -->
        <div class="stats-row">
            <div class="stat-card">
                <div class="stat-icon blue"><i class="fas fa-database"></i></div>
                <div>
                    <div class="stat-val"><?= number_format($stats['total'] ?? 0) ?></div>
                    <div class="stat-lbl">Total Records</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon green"><i class="fas fa-list-check"></i></div>
                <div>
                    <div class="stat-val"><?= number_format(count($records)) ?></div>
                    <div class="stat-lbl">Showing Now</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon amber"><i class="fas fa-calendar-week"></i></div>
                <div>
                    <div class="stat-val"><?= number_format($stats['this_month'] ?? 0) ?></div>
                    <div class="stat-lbl">This Month</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon teal"><i class="fas fa-tags"></i></div>
                <div>
                    <div class="stat-val"><?= $stats['device_types'] ?? 0 ?></div>
                    <div class="stat-lbl">Device Types</div>
                </div>
            </div>
        </div>

        <!-- ── FILTERS ── -->
        <div class="panel">
            <div class="panel-head">
                <div class="panel-title"><i class="fas fa-sliders-h"></i> Filters</div>
            </div>
            <div class="panel-body">
                <form method="GET" id="filterForm">
                    <div class="filter-grid">
                        <div class="filter-group search-group" style="grid-column:span 2;">
                            <label>Search</label>
                            <i class="fas fa-search"></i>
                            <input type="text" name="search" placeholder="Name, contact, email, country, order ref…"
                                value="<?= htmlspecialchars($f['search']) ?>">
                        </div>
                        <div class="filter-group">
                            <label>Device Type</label>
                            <select name="device_type">
                                <option value="">All Types</option>
                                <?php foreach ($deviceTypes as $t): ?>
                                    <option value="<?= htmlspecialchars($t) ?>" <?= $f['device_type'] === $t ? 'selected' : '' ?>><?= htmlspecialchars($t) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Region</label>
                            <select name="region">
                                <option value="">All Regions</option>
                                <?php foreach ($regions as $r): ?>
                                    <option value="<?= htmlspecialchars($r) ?>" <?= $f['region'] === $r ? 'selected' : '' ?>><?= htmlspecialchars($r) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Country</label>
                            <select name="country">
                                <option value="">All Countries</option>
                                <?php foreach ($countries as $c): ?>
                                    <option value="<?= htmlspecialchars($c) ?>" <?= $f['country'] === $c ? 'selected' : '' ?>><?= htmlspecialchars($c) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Payment</label>
                            <select name="payment">
                                <option value="">All Payments</option>
                                <?php foreach ($payments as $p): ?>
                                    <option value="<?= htmlspecialchars($p) ?>" <?= $f['payment'] === $p ? 'selected' : '' ?>><?= htmlspecialchars($p) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Date From</label>
                            <input type="date" name="date_from" value="<?= htmlspecialchars($f['date_from']) ?>">
                        </div>
                        <div class="filter-group">
                            <label>Date To</label>
                            <input type="date" name="date_to" value="<?= htmlspecialchars($f['date_to']) ?>">
                        </div>
                        <div class="filter-group" style="display:flex;align-items:flex-end;">
                            <label style="display:flex;align-items:center;gap:.5rem;text-transform:none;font-size:.82rem;cursor:pointer;">
                                <input type="checkbox" name="only_devices" value="1" <?= $f['only_devices'] ? 'checked' : '' ?>
                                    style="width:16px;height:16px;accent-color:var(--brand);">
                                Only with device type
                            </label>
                        </div>
                    </div>

                    <?php
                    $chipLabels = ['search' => 'Search', 'device_type' => 'Device', 'region' => 'Region', 'country' => 'Country', 'payment' => 'Payment', 'date_from' => 'From', 'date_to' => 'To'];
                    $hasFilters = false;
                    foreach ($f as $k => $v) if ($v !== '' && $v !== false) {
                        $hasFilters = true;
                        break;
                    }
                    ?>
                    <?php if ($hasFilters): ?>
                        <div class="chip-row">
                            <?php foreach ($f as $k => $v):
                                if ($v === '' || $v === false) continue;
                                $lbl = $chipLabels[$k] ?? $k;
                                $disp = is_bool($v) ? 'Yes' : htmlspecialchars($v);
                            ?>
                                <span class="chip"><?= $lbl ?>: <?= $disp ?><span class="chip-x" onclick="removeFilter('<?= $k ?>')">✕</span></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="filter-actions">
                        <button type="submit" class="btn-lb primary" onclick="document.getElementById('loadOverlay').classList.add('on')">
                            <i class="fas fa-search"></i> Apply
                        </button>
                        <button type="button" class="btn-lb ghost" onclick="clearFilters()">
                            <i class="fas fa-times"></i> Clear
                        </button>
                        <button type="button" class="btn-lb green" onclick="exportData('csv')">
                            <i class="fas fa-file-csv"></i> CSV
                        </button>
                        <button type="button" class="btn-lb green" onclick="exportData('excel')">
                            <i class="fas fa-file-excel"></i> Excel
                        </button>
                        <button type="button" class="btn-lb amber" onclick="exportData('json')">
                            <i class="fas fa-file-code"></i> JSON
                        </button>
                        <button type="button" class="btn-lb teal" onclick="copyAPI()">
                            <i class="fas fa-copy"></i> Copy API URL
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- ── TABLE ── -->
        <div class="panel">
            <div class="panel-head">
                <div class="panel-title">
                    <i class="fas fa-table"></i> Distribution Records
                    <?php if ($records): ?><span class="tbl-count"><?= number_format(count($records)) ?></span><?php endif; ?>
                </div>
                <div style="font-size:.75rem;color:var(--ink3);">Scroll horizontally to see all columns &rarr;</div>
            </div>

            <?php if ($records): ?>
                <div class="tbl-wrap" style="padding:0;">
                    <table id="distTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <?php foreach ($displayCols as $c): ?>
                                    <th title="<?= htmlspecialchars($c) ?>"><?= htmlspecialchars(columnLabel($c)) ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <?php foreach ($displayCols as $c): ?>
                                        <td><?= fv($row[$c] ?? null, $c) ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div style="padding:3rem;text-align:center;color:var(--ink3);">
                    <i class="fas fa-inbox" style="font-size:2.5rem;margin-bottom:1rem;display:block;opacity:.3;"></i>
                    <strong>No records found</strong><br>
                    <span style="font-size:.85rem;">Try adjusting your filters or clear them to see all records.</span>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer -->
        <footer style="text-align:center;color:var(--ink3);font-size:.72rem;padding:.5rem 0 1rem;">
            Lifebox ME · Salesforce <?= SF_API_VERSION ?> · <?= date('Y-m-d H:i:s') ?> EAT
        </footer>
    </div>

    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- Custom Scripts -->
    <?php if (file_exists($scriptPath)): ?>
        <script>
            <?php include $scriptPath; ?>
        </script>
    <?php endif; ?>
</body>

</html>