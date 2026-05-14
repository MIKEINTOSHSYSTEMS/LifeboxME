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
 * @version 4.0
 * @date 2026-05-14
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

define('SF_CLIENT_ID',     '3MVG9KI2HHAq33Rzc5Pj4yAje0Gv3KziV4Di7JXqP6EQQxHfszUtvUTWlmENSpJFF_rMIw.pSTmcUmxdMYL07');
define('SF_CLIENT_SECRET', '79E5A031CAB542FEAFA039FB6E05810EE8069568E914C086A9CDA6E669D192DA');
define('SF_INSTANCE',      'https://lifebox.my.salesforce.com');
define('SF_TOKEN_URL',     SF_INSTANCE . '/services/oauth2/token');
define('SF_API_VERSION',   'v60.0');
define('SF_API_BASE',      SF_INSTANCE . '/services/data/' . SF_API_VERSION);
define('CACHE_TTL',        300);   // 5 min
define('MAX_RECORDS',      50000); // safety cap

/**
 * All known fields on Distribution_List__c.
 * Using explicit fields instead of FIELDS(ALL) removes the 200-row hard cap
 * that Salesforce imposes on FIELDS(ALL) queries.
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
// SSL MANAGER
// ============================================================================
class SSLCertificateManager
{
    private string $certPath;

    public function __construct()
    {
        $this->certPath = __DIR__ . DIRECTORY_SEPARATOR . 'cacert.pem';
        $this->init();
    }

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

    private function isValid(): bool
    {
        return file_exists($this->certPath)
            && filesize($this->certPath) > 100_000
            && filemtime($this->certPath) > strtotime('-30 days');
    }

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
                return;
            }
        }
    }

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
            CURLOPT_USERAGENT      => 'LifeboxSSL/4.0',
        ]);
        $body = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($code === 200 && $body) ? $body : false;
    }

    public function certPath(): ?string
    {
        return file_exists($this->certPath) ? $this->certPath : null;
    }
}

// ============================================================================
// SALESFORCE CLIENT
// ============================================================================
class SalesforceClient
{
    private ?string $token    = null;
    private int     $tokenExp = 0;
    private SSLCertificateManager $ssl;

    public function __construct()
    {
        $this->ssl = new SSLCertificateManager();
    }

    // ── Authentication ────────────────────────────────────────────────────────

    private function token(): string
    {
        if ($this->token && time() < $this->tokenExp) return $this->token;

        if (!empty($_SESSION['sf_token']) && time() < ($_SESSION['sf_token_exp'] ?? 0)) {
            $this->token    = $_SESSION['sf_token'];
            $this->tokenExp = $_SESSION['sf_token_exp'];
            return $this->token;
        }

        $resp = $this->curl(SF_TOKEN_URL, [
            CURLOPT_POST       => true,
            CURLOPT_POSTFIELDS => http_build_query([
                'grant_type'    => 'client_credentials',
                'client_id'     => SF_CLIENT_ID,
                'client_secret' => SF_CLIENT_SECRET,
            ]),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
                'Accept: application/json',
            ],
        ]);

        if (empty($resp['access_token'])) {
            $msg = $resp['error_description'] ?? $resp['error'] ?? 'unknown';
            throw new RuntimeException("SF auth failed: $msg");
        }

        $this->token    = $resp['access_token'];
        $this->tokenExp = time() + (int)($resp['expires_in'] ?? 3600) - 60;
        $_SESSION['sf_token']     = $this->token;
        $_SESSION['sf_token_exp'] = $this->tokenExp;
        return $this->token;
    }

    // ── Core HTTP ─────────────────────────────────────────────────────────────

    private function curl(string $url, array $extra = []): array
    {
        $ch = curl_init($url);
        $defaults = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_CONNECTTIMEOUT => 20,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_USERAGENT      => 'LifeboxSF/4.0',
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

        if ($code >= 400) {
            $msg = $data[0]['message'] ?? $data['error_description'] ?? $data['error'] ?? "HTTP $code";
            throw new RuntimeException("Salesforce error ($code): $msg");
        }
        return $data;
    }

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
     * With fallback to hardcoded list if discovery fails.
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
            error_log("Using cached fields for {$objectName}: " . count($_SESSION[$cacheKey]) . " fields");
            return $_SESSION[$cacheKey];
        }

        try {
            // Call Salesforce describe endpoint
            $describeUrl = SF_API_BASE . "/sobjects/{$objectName}/describe";
            error_log("Discovering fields for {$objectName} from: {$describeUrl}");

            $resp = $this->get($describeUrl);

            $fields = [];
            if (!empty($resp['fields']) && is_array($resp['fields'])) {
                foreach ($resp['fields'] as $field) {
                    // Include all fields that have a name (even if not queryable, 
                    // as custom fields are usually queryable)
                    if (!empty($field['name'])) {
                        $fields[] = $field['name'];
                    }
                }
            }

            // If we got fields, cache them
            if (!empty($fields)) {
                sort($fields);
                $_SESSION[$cacheKey] = $fields;
                $_SESSION[$cacheKey . '_t'] = time();
                error_log("Discovered " . count($fields) . " fields for {$objectName}");
                return $fields;
            }

            // If describe returned no fields, use fallback
            throw new RuntimeException("Describe returned no fields for {$objectName}");
        } catch (Throwable $e) {
            error_log("Field discovery failed for {$objectName}: " . $e->getMessage());
            error_log("Using fallback fields for {$objectName}");

            $fallback = $this->getFallbackFields($objectName);

            // Cache the fallback so we don't keep failing
            $_SESSION[$cacheKey] = $fallback;
            $_SESSION[$cacheKey . '_t'] = time();

            return $fallback;
        }
    }

    /**
     * Fallback field list if dynamic discovery fails.
     */
    private function getFallbackFields(string $objectName): array
    {
        $fallbacks = [
            'Distribution_List__c' => [
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
            ],
            'Device_Request__c' => [
                'Id',
                'Name',
                'CreatedDate',
                'LastModifiedDate',
            ],
            'Device_Procurement__c' => [
                'Id',
                'Name',
                'CreatedDate',
                'LastModifiedDate',
            ],
        ];

        return $fallbacks[$objectName] ?? ['Id', 'Name'];
    }

    public function refreshObjectFields(string $objectName): array
    {
        $cacheKey = "sf_fields_{$objectName}";
        unset($_SESSION[$cacheKey], $_SESSION[$cacheKey . '_t']);
        return $this->getObjectFields($objectName);
    }

    // ── Query / Pagination ────────────────────────────────────────────────────

    public function queryAll(string $soql): array
    {
        $all   = [];
        $url   = SF_API_BASE . '/query/?q=' . urlencode($soql);
        $page  = 0;

        while ($url && count($all) < MAX_RECORDS) {
            $page++;
            $resp = $this->get($url);

            if (!empty($resp['records'])) {
                $batchCount = count($resp['records']);
                $all = array_merge($all, $resp['records']);
                error_log("SF page $page: +{$batchCount} records (total " . count($all) . ")");
            }

            if (!empty($resp['done']) || empty($resp['nextRecordsUrl'])) {
                break;
            }
            $url = $resp['nextRecordsUrl'];
        }

        return $all;
    }

    public function queryFirst(string $soql): array
    {
        return $this->get(SF_API_BASE . '/query/?q=' . urlencode($soql));
    }

    // ── Business Methods ──────────────────────────────────────────────────────

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

        // Get fields dynamically
        $fields = $this->getObjectFields('Distribution_List__c');

        // Safety check: ensure we have fields
        if (empty($fields)) {
            throw new RuntimeException("No fields found for Distribution_List__c");
        }

        $fieldList = implode(',', $fields);

        error_log("Building query with " . count($fields) . " fields");

        $soql  = "SELECT " . $fieldList . " FROM Distribution_List__c";
        if ($where) $soql .= " WHERE " . implode(' AND ', $where);
        $soql .= " ORDER BY CreatedDate DESC";

        error_log("SOQL Query: " . substr($soql, 0, 200) . "...");

        return $this->queryAll($soql);
    }

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
// EXPORT
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
    fprintf($out, chr(0xEF) . chr(0xBB) . chr(0xBF));
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
// HELPERS
// ============================================================================
function fv($value, string $col = ''): string
{
    if (is_null($value) || $value === '') return '<span class="null-val">—</span>';
    if (is_bool($value)) return $value
        ? '<span class="badge-yes">✓ Yes</span>'
        : '<span class="badge-no">✗ No</span>';

    if (is_array($value)) {
        $json = htmlspecialchars(json_encode($value, JSON_PRETTY_PRINT));
        return '<span class="badge-arr" title="' . $json . '">[ ' . count($value) . ' ]</span>';
    }

    $str = (string)$value;

    // ISO datetime
    if (preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}/', $str)) {
        $ts  = strtotime($str);
        $fmt = date('d M Y', $ts) . '<br><small>' . date('H:i:s', $ts) . ' UTC</small>';
        return '<span class="cell-date">' . $fmt . '</span>';
    }

    // Plain date
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $str)) {
        return '<span class="cell-date">' . date('d M Y', strtotime($str)) . '</span>';
    }

    // Salesforce ID (15/18 chars)
    if (preg_match('/^[a-zA-Z0-9]{15,18}$/', $str) && !str_contains($str, ' ')) {
        return '<code class="sf-id" title="' . htmlspecialchars($str) . '">' . substr($str, 0, 6) . '…</code>';
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
                    'device_type' => $_GET['device_type'] ?? '',
                    'status'      => $_GET['status']      ?? '',
                    'region'      => $_GET['region']      ?? '',
                    'country'     => $_GET['country']     ?? '',
                    'payment'     => $_GET['payment']     ?? '',
                    'date_from'   => $_GET['date_from']   ?? '',
                    'date_to'     => $_GET['date_to']     ?? '',
                    'search'      => $_GET['search']      ?? '',
                    'only_devices' => !empty($_GET['only_devices']),
                ];
                $records = $sf->getDistributions($f);
                $page    = max(1, (int)($_GET['page'] ?? 1));
                $limit   = min(5000, max(1, (int)($_GET['limit'] ?? count($records))));
                $offset  = ($page - 1) * $limit;
                $paged   = array_slice($records, $offset, $limit);

                echo json_encode([
                    'success'      => true,
                    'total_records' => count($records),
                    'page'         => $page,
                    'limit'        => $limit,
                    'pages'        => (int)ceil(count($records) / $limit),
                    'returned'     => count($paged),
                    'records'      => $paged,
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
        $sf      = new SalesforceClient();
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
$error     = null;
$records   = [];
$stats     = [];
$deviceTypes = [];
$regions   = [];
$countries = [];
$payments  = [];
$fetchTime = 0;

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
    $t0  = microtime(true);
    $sf  = new SalesforceClient();

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

    <style>
        /* ── TOKENS ────────────────────────────────────────────────────────────────── */
        :root {
            --ink: #004769ed !important;
            --ink2: #3a3e4a;
            --ink3: #7a7f8e;
            --bg: #f5f6fa;
            --surface: #ffffff;
            --border: #e3e5ec;

            --brand: #00B7FFED;
            --brand-light: #e9eefb;
            --brand-dark: #0e35b3;

            --green: #12b76a;
            --amber: #f59e0b;
            --red: #ef4444;
            --teal: #0ea5e9;

            --radius: 12px;
            --shadow: 0 2px 12px rgba(0, 0, 0, .07);
            --shadow-md: 0 6px 24px rgba(0, 0, 0, .10);

            --font: 'DM Sans', sans-serif;
            --mono: 'DM Mono', monospace;
        }

        /* ── RESET / BASE ──────────────────────────────────────────────────────────── */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--bg);
            font-family: var(--font);
            color: var(--ink);
            font-size: 14px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* ── TOPBAR ────────────────────────────────────────────────────────────────── */
        .topbar {
            background: var(--ink);
            padding: .55rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .topbar-brand {
            display: flex;
            align-items: center;
            gap: .75rem;
            text-decoration: none;
        }

        .topbar-logo {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: var(--brand);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
        }

        .topbar-name {
            color: #fff;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: -.02em;
        }

        .topbar-name span {
            color: var(--brand);
            font-size: 10px;
            font-weight: 500;
            letter-spacing: .06em;
            display: block;
            text-transform: uppercase;
        }

        .topbar-actions {
            display: flex;
            gap: .5rem;
        }

        .topbar-btn {
            background: rgba(255, 255, 255, .08);
            border: none;
            color: #fff;
            padding: .35rem .8rem;
            border-radius: 6px;
            font-size: 12px;
            font-family: var(--font);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: .4rem;
            transition: background .15s;
        }

        .topbar-btn:hover {
            background: rgba(255, 255, 255, .16);
        }

        .topbar-btn.primary {
            background: var(--brand);
        }

        .topbar-btn.primary:hover {
            background: var(--brand-dark);
        }

        /* ── HERO ──────────────────────────────────────────────────────────────────── */
        .hero {
            background: var(--ink);
            padding: 2.5rem 1.5rem 4rem;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 60% 80% at 80% 50%, rgba(20, 71, 230, .35) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 1rem;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero-title {
            color: #fff;
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 700;
            letter-spacing: -.03em;
            line-height: 1.2;
        }

        .hero-title em {
            color: var(--brand);
            font-style: normal;
        }

        .hero-sub {
            color: rgba(255, 255, 255, .55);
            margin-top: .35rem;
            font-size: .9rem;
        }

        .hero-meta {
            color: rgba(255, 255, 255, .4);
            font-size: .75rem;
            font-family: var(--mono);
            white-space: nowrap;
            text-align: right;
        }

        .hero-meta strong {
            color: rgba(255, 255, 255, .7);
        }

        /* ── LAYOUT ────────────────────────────────────────────────────────────────── */
        .page-wrap {
            /* max-width: 1400px; */
            margin: 0 auto;
            padding: 0 1.25rem 2rem;
            margin-top: -1.5rem;
            position: relative;
            z-index: 2;
        }

        /* ── STAT CARDS ────────────────────────────────────────────────────────────── */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .stat-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.1rem 1.25rem;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: transform .2s, box-shadow .2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .stat-icon.blue {
            background: var(--brand-light);
            color: var(--brand);
        }

        .stat-icon.green {
            background: #d1fae5;
            color: var(--green);
        }

        .stat-icon.amber {
            background: #fef3c7;
            color: var(--amber);
        }

        .stat-icon.teal {
            background: #e0f2fe;
            color: var(--teal);
        }

        .stat-val {
            font-size: 1.6rem;
            font-weight: 700;
            line-height: 1;
            letter-spacing: -.03em;
        }

        .stat-lbl {
            font-size: .72rem;
            color: var(--ink3);
            text-transform: uppercase;
            letter-spacing: .05em;
            margin-top: .15rem;
        }

        /* ── PANEL ─────────────────────────────────────────────────────────────────── */
        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 1.25rem;
        }

        .panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border);
            gap: .75rem;
            flex-wrap: wrap;
        }

        .panel-title {
            font-weight: 600;
            font-size: .95rem;
            display: flex;
            align-items: center;
            gap: .5rem;
        }

        .panel-title i {
            color: var(--brand);
        }

        .panel-body {
            padding: 1.25rem;
        }

        /* ── FILTER GRID ───────────────────────────────────────────────────────────── */
        .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: .75rem;
        }

        .filter-group label {
            font-size: .72rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: var(--ink3);
            margin-bottom: .3rem;
            display: block;
        }

        .filter-group input,
        .filter-group select {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: .45rem .75rem;
            font-size: .85rem;
            font-family: var(--font);
            background: var(--bg);
            color: var(--ink);
            transition: border-color .15s, box-shadow .15s;
            outline: none;
            appearance: none;
        }

        .filter-group input:focus,
        .filter-group select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(20, 71, 230, .1);
            background: #fff;
        }

        .filter-group.search-group {
            position: relative;
        }

        .filter-group.search-group input {
            padding-left: 2.1rem;
        }

        .filter-group.search-group i {
            position: absolute;
            left: .7rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--ink3);
            font-size: .8rem;
            pointer-events: none;
        }

        .filter-actions {
            display: flex;
            gap: .6rem;
            flex-wrap: wrap;
            align-items: center;
            padding-top: .75rem;
            border-top: 1px solid var(--border);
            margin-top: .75rem;
        }

        .btn-lb {
            padding: .45rem 1rem;
            border-radius: 8px;
            font-size: .8rem;
            font-weight: 500;
            font-family: var(--font);
            cursor: pointer;
            border: 1px solid transparent;
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            transition: all .15s;
            white-space: nowrap;
        }

        .btn-lb.primary {
            background: var(--brand);
            color: #fff;
            border-color: var(--brand);
        }

        .btn-lb.primary:hover {
            background: var(--brand-dark);
        }

        .btn-lb.ghost {
            background: transparent;
            color: var(--ink2);
            border-color: var(--border);
        }

        .btn-lb.ghost:hover {
            background: var(--bg);
            border-color: var(--ink3);
        }

        .btn-lb.green {
            background: #ecfdf5;
            color: var(--green);
            border-color: #a7f3d0;
        }

        .btn-lb.green:hover {
            background: #d1fae5;
        }

        .btn-lb.amber {
            background: #fffbeb;
            color: #92400e;
            border-color: #fde68a;
        }

        .btn-lb.amber:hover {
            background: #fef3c7;
        }

        .btn-lb.teal {
            background: #f0f9ff;
            color: #0369a1;
            border-color: #bae6fd;
        }

        .btn-lb.teal:hover {
            background: #e0f2fe;
        }

        /* active filter chips */
        .chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: .4rem;
            margin-top: .6rem;
        }

        .chip {
            background: var(--brand-light);
            color: var(--brand);
            border-radius: 20px;
            padding: .2rem .65rem;
            font-size: .72rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: .35rem;
        }

        .chip-x {
            cursor: pointer;
            opacity: .6;
        }

        .chip-x:hover {
            opacity: 1;
        }

        /* ── TABLE PANEL ───────────────────────────────────────────────────────────── */
        .tbl-count {
            background: var(--brand);
            color: #fff;
            border-radius: 20px;
            padding: .1rem .6rem;
            font-size: .72rem;
            font-weight: 600;
        }

        .tbl-wrap {
            overflow-x: auto;
        }

        #distTable {
            width: 100%;
            border-collapse: collapse;
            font-size: .8rem;
        }

        #distTable thead th {
            background: #1a1d27;
            color: rgba(255, 255, 255, .85);
            font-size: .68rem;
            font-weight: 600;
            letter-spacing: .06em;
            text-transform: uppercase;
            padding: .6rem .8rem;
            white-space: nowrap;
            position: sticky;
            top: 0;
            border-right: 1px solid rgba(255, 255, 255, .07);
        }

        #distTable thead th:first-child {
            border-radius: 0;
        }

        #distTable tbody tr {
            border-bottom: 1px solid var(--border);
            transition: background .1s;
        }

        #distTable tbody tr:hover {
            background: #f8f9ff;
        }

        #distTable tbody td {
            padding: .5rem .8rem;
            vertical-align: middle;
        }

        #distTable tbody td:first-child {
            color: var(--ink3);
            font-size: .72rem;
            font-family: var(--mono);
            font-weight: 500;
            white-space: nowrap;
        }

        /* cell helpers */
        .null-val {
            color: #ccc;
        }

        .sf-id {
            font-family: var(--mono);
            font-size: .7rem;
            color: var(--ink3);
            background: var(--bg);
            padding: .1rem .4rem;
            border-radius: 4px;
        }

        .cell-date {
            font-size: .75rem;
            color: var(--ink2);
            line-height: 1.3;
        }

        .cell-long {
            max-width: 180px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
            cursor: help;
        }

        .badge-yes {
            color: var(--green);
            font-weight: 600;
        }

        .badge-no {
            color: var(--ink3);
        }

        .badge-arr {
            color: var(--teal);
            font-family: var(--mono);
            font-size: .75rem;
        }

        /* ── DataTables overrides ──────────────────────────────────────────────────── */
        .dataTables_wrapper .dataTables_length select,
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: .35rem .65rem;
            font-family: var(--font);
            font-size: .8rem;
            background: var(--bg);
            color: var(--ink);
            outline: none;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(20, 71, 230, .1);
        }

        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            font-size: .78rem;
            color: var(--ink3);
        }

        .dataTables_wrapper .dt-buttons .btn {
            background: var(--bg);
            border: 1px solid var(--border);
            color: var(--ink2);
            font-size: .72rem;
            border-radius: 6px;
            padding: .3rem .7rem;
            font-family: var(--font);
        }

        .dataTables_wrapper .dt-buttons .btn:hover {
            background: var(--border);
        }

        .dataTables_paginate .paginate_button {
            border-radius: 6px !important;
            font-size: .75rem !important;
        }

        .dataTables_paginate .paginate_button.current {
            background: var(--brand) !important;
            color: #fff !important;
            border-color: var(--brand) !important;
        }

        /* ── LOADING OVERLAY ───────────────────────────────────────────────────────── */
        #loadOverlay {
            position: fixed;
            inset: 0;
            background: rgba(13, 15, 20, .6);
            display: none;
            place-items: center;
            z-index: 9999;
        }

        #loadOverlay.on {
            display: grid;
        }

        .spin-box {
            background: #fff;
            border-radius: 16px;
            padding: 2rem 2.5rem;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .3);
        }

        .spin {
            width: 40px;
            height: 40px;
            border: 3px solid var(--border);
            border-top-color: var(--brand);
            border-radius: 50%;
            animation: spin .7s linear infinite;
            margin: 0 auto 1rem;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        .spin-text {
            font-size: .85rem;
            color: var(--ink3);
        }

        /* ── TOAST ─────────────────────────────────────────────────────────────────── */
        .toast-shelf {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 10000;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }

        .toast-msg {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: .7rem 1rem;
            font-size: .8rem;
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: .5rem;
            animation: slideIn .25s ease;
            max-width: 300px;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(20px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        .toast-msg.ok i {
            color: var(--green);
        }

        .toast-msg.err i {
            color: var(--red);
        }

        /* ── RESPONSIVE ────────────────────────────────────────────────────────────── */
        @media(max-width:768px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-meta {
                display: none;
            }

            .filter-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stats-row {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media(max-width:480px) {
            .filter-grid {
                grid-template-columns: 1fr;
            }

            .stats-row {
                grid-template-columns: 1fr;
            }
        }

        @media print {

            .topbar,
            .hero,
            .panel-head .filter-actions,
            .btn-lb {
                display: none !important;
            }

            .panel {
                box-shadow: none;
                border: none;
            }
        }
    </style>
</head>

<body>

    <!-- Loading -->
    <div id="loadOverlay">
        <div class="spin-box">
            <div class="spin"></div>
            <div class="spin-text">Fetching from Salesforce…</div>
        </div>
    </div>

    <!-- Toast shelf -->
    <div class="toast-shelf" id="toastShelf"></div>

    <!-- ── TOPBAR ── -->
    <header class="topbar">
        <a class="topbar-brand" href="">
            <div class="topbar-logo"><img src="salesforce.png" alt="Lifebox Salesforce"></div>
            <div class="topbar-name">Lifebox Salesforce <span>Device Distribution Integration</span></div>
        </a>
        <div class="topbar-actions">
            <button class="topbar-btn" onclick="location.reload()"><i class="fas fa-sync-alt"></i> Refresh</button>
            <button class="topbar-btn primary" onclick="window.open('?api=1&action=records','_blank')"><i class="fas fa-code"></i> API</button>
        </div>
    </header>

    <!-- ── HERO ── -->
    <section class="hero">
        <div class="hero-grid">
            <div>
                <h1 class="hero-title">Device <em>Distribution</em> List</h1>
                <p class="hero-sub"><i class="fas fa-cloud me-1" style="color:var(--brand)"></i>
                    Live sync · Salesforce <strong style="color:#fff">v60.0</strong>
                    <?php if ($fetchTime): ?> · loaded in <strong style="color:#fff"><?= $fetchTime ?>s</strong><?php endif; ?>
                </p>
            </div>
            <div class="hero-meta">
                <strong><?= date('d M Y, H:i') ?></strong><br>
                Addis Ababa · EAT
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

                        <!-- Search -->
                        <div class="filter-group search-group" style="grid-column:span 2;">
                            <label>Search</label>
                            <i class="fas fa-search"></i>
                            <input type="text" name="search" placeholder="Name, contact, email, country, order ref…"
                                value="<?= htmlspecialchars($f['search']) ?>">
                        </div>

                        <!-- Device Type -->
                        <div class="filter-group">
                            <label>Device Type</label>
                            <select name="device_type">
                                <option value="">All Types</option>
                                <?php foreach ($deviceTypes as $t): ?>
                                    <option value="<?= htmlspecialchars($t) ?>" <?= $f['device_type'] === $t ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($t) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Region -->
                        <div class="filter-group">
                            <label>Region</label>
                            <select name="region">
                                <option value="">All Regions</option>
                                <?php foreach ($regions as $r): ?>
                                    <option value="<?= htmlspecialchars($r) ?>" <?= $f['region'] === $r ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($r) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Country -->
                        <div class="filter-group">
                            <label>Country</label>
                            <select name="country">
                                <option value="">All Countries</option>
                                <?php foreach ($countries as $c): ?>
                                    <option value="<?= htmlspecialchars($c) ?>" <?= $f['country'] === $c ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($c) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Payment -->
                        <div class="filter-group">
                            <label>Payment</label>
                            <select name="payment">
                                <option value="">All Payments</option>
                                <?php foreach ($payments as $p): ?>
                                    <option value="<?= htmlspecialchars($p) ?>" <?= $f['payment'] === $p ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($p) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Date From -->
                        <div class="filter-group">
                            <label>Date From</label>
                            <input type="date" name="date_from" value="<?= htmlspecialchars($f['date_from']) ?>">
                        </div>

                        <!-- Date To -->
                        <div class="filter-group">
                            <label>Date To</label>
                            <input type="date" name="date_to" value="<?= htmlspecialchars($f['date_to']) ?>">
                        </div>

                        <!-- Only devices checkbox -->
                        <div class="filter-group" style="display:flex;align-items:flex-end;">
                            <label style="display:flex;align-items:center;gap:.5rem;text-transform:none;font-size:.82rem;cursor:pointer;">
                                <input type="checkbox" name="only_devices" value="1" <?= $f['only_devices'] ? 'checked' : '' ?>
                                    style="width:16px;height:16px;accent-color:var(--brand);">
                                Only with device type
                            </label>
                        </div>

                    </div>

                    <!-- Active chips -->
                    <?php
                    $chipLabels = [
                        'search' => 'Search',
                        'device_type' => 'Device',
                        'region' => 'Region',
                        'country' => 'Country',
                        'payment' => 'Payment',
                        'date_from' => 'From',
                        'date_to' => 'To'
                    ];
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
                                <span class="chip">
                                    <?= $lbl ?>: <?= $disp ?>
                                    <span class="chip-x" onclick="removeFilter('<?= $k ?>')">✕</span>
                                </span>
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
                    <i class="fas fa-table"></i>
                    Distribution Records
                    <?php if ($records): ?>
                        <span class="tbl-count"><?= number_format(count($records)) ?></span>
                    <?php endif; ?>
                </div>
                <div style="font-size:.75rem;color:var(--ink3);">
                    Scroll horizontally to see all columns &rarr;
                </div>
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

    </div><!-- /page-wrap -->

    <!-- Scripts -->
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

    <script>
        $(function() {
            if (!$('#distTable tbody tr').length) return;

            $('#distTable').DataTable({
                pageLength: 10,
                lengthMenu: [
                    [5, 10, 15, 25, 50, 100, 250, 500, -1],
                    ['5', '10', '15', '25', '50', '100', '250', '500', 'All']
                ],
                order: [
                    [0, 'asc']
                ],
                scrollX: true,
                scrollY: '62vh',
                scrollCollapse: true,
                dom: '<"dt-top-row"lf>rtip<"dt-btn-row"B>',
                buttons: [{
                        extend: 'copy',
                        text: '<i class="fas fa-copy"></i> Copy',
                        className: 'btn btn-sm btn-outline-secondary',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv"></i> CSV',
                        className: 'btn btn-sm btn-outline-secondary',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Excel',
                        className: 'btn btn-sm btn-outline-secondary',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> PDF',
                        className: 'btn btn-sm btn-outline-secondary',
                        orientation: 'landscape',
                        pageSize: 'A3',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Print',
                        className: 'btn btn-sm btn-outline-secondary',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                ],
                language: {
                    search: '',
                    searchPlaceholder: 'Quick search…',
                    lengthMenu: 'Show _MENU_',
                    info: '_START_–_END_ of _TOTAL_',
                    infoFiltered: '(from _MAX_)',
                    zeroRecords: 'No matching records',
                    paginate: {
                        first: '«',
                        last: '»',
                        next: '›',
                        previous: '‹'
                    },
                },
                initComplete() {
                    // move buttons into the top bar area for visual grouping
                    $('.dt-btn-row').hide();
                }
            });

            // Hide overlay when done
            $('#loadOverlay').removeClass('on');
        });

        function clearFilters() {
            window.location.href = window.location.pathname;
        }

        function removeFilter(key) {
            const p = new URLSearchParams(window.location.search);
            p.delete(key);
            const s = p.toString();
            window.location.href = window.location.pathname + (s ? '?' + s : '');
        }

        function exportData(fmt) {
            const qs = new URLSearchParams($('#filterForm').serialize()).toString();
            window.location.href = '?' + qs + '&export=' + fmt;
        }

        function copyAPI() {
            const qs = new URLSearchParams($('#filterForm').serialize()).toString();
            const url = location.origin + location.pathname + '?api=1&action=records' + (qs ? '&' + qs : '');
            navigator.clipboard.writeText(url)
                .then(() => toast('API URL copied to clipboard', 'ok'))
                .catch(() => {
                    prompt('Copy this URL:', url);
                });
        }

        function toast(msg, type = 'ok') {
            const el = document.createElement('div');
            el.className = 'toast-msg ' + type;
            el.innerHTML = `<i class="fas fa-${type==='ok'?'check-circle':'exclamation-circle'}"></i> ${msg}`;
            document.getElementById('toastShelf').appendChild(el);
            setTimeout(() => el.remove(), 3500);
        }

        // Hide overlay if already loaded (no-op if not shown)
        window.addEventListener('load', () => document.getElementById('loadOverlay').classList.remove('on'));
    </script>
</body>

</html>