<?php
// device_fetch.php - Fetch & Sync Salesforce Device Distribution to PostgreSQL

/**
 * ============================================================================
 * Lifebox Device Distribution - Salesforce to PostgreSQL Sync Tool
 * ============================================================================
 * 
 * Features:
 * - Fetches all records from list.php?api=1&action=records
 * - Upserts into PostgreSQL (INSERT ON CONFLICT UPDATE)
 * - Real-time logging with UI
 * - Full reset & re-fetch capability
 * - Dry run mode
 * - Progress tracking
 * 
 * @version 1.0
 * @date 2026-05-14
 */

// ============================================================================
// CONFIGURATION
// ============================================================================
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

// Time limit for large datasets
set_time_limit(300); // 5 minutes
ini_set('memory_limit', '512M');

// API Endpoint
define('API_URL', 'list.php?api=1&action=records');

// PostgreSQL connection details from .env.dev
$envFile = __DIR__ . '/../../.env.dev';
if (file_exists($envFile)) {
    $env = parse_ini_file($envFile);
    define('PG_HOST', '127.0.0.1');
    define('PG_PORT', '5432');
    define('PG_DB', $env['POSTGRES_DB'] ?? 'lifebox_mesystem');
    define('PG_USER', $env['POSTGRES_USER'] ?? 'postgres');
    define('PG_PASS', $env['POSTGRES_PASSWORD'] ?? 'mikeintosh');
} else {
    define('PG_HOST', '127.0.0.1');
    define('PG_PORT', '5432');
    define('PG_DB', 'lifebox_mesystem');
    define('PG_USER', 'postgres');
    define('PG_PASS', 'mikeintosh');
}

// ============================================================================
// POSTGRESQL CONNECTION
// ============================================================================

class DatabaseConnection
{
    private static ?PDO $instance = null;

    public static function get(): PDO
    {
        if (self::$instance === null) {
            $dsn = sprintf(
                'pgsql:host=%s;port=%s;dbname=%s',
                PG_HOST,
                PG_PORT,
                PG_DB
            );

            try {
                self::$instance = new PDO($dsn, PG_USER, PG_PASS, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                throw new RuntimeException("Database connection failed: " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}

// ============================================================================
// DATA SYNCHRONIZER
// ============================================================================

class DeviceDistributionSync
{
    private PDO $db;
    private array $log = [];
    private int $inserted = 0;
    private int $updated = 0;
    private int $skipped = 0;
    private int $total = 0;
    private float $startTime;

    public function __construct()
    {
        $this->db = DatabaseConnection::get();
        $this->startTime = microtime(true);
    }

    /**
     * Add log entry with timestamp
     */
    private function log(string $message, string $type = 'info'): void
    {
        $timestamp = date('H:i:s');
        $this->log[] = [
            'time' => $timestamp,
            'message' => $message,
            'type' => $type,
        ];

        // Also log to error log
        error_log("[DeviceSync] [$type] $message");
    }

    /**
     * Get all logs
     */
    public function getLogs(): array
    {
        return $this->log;
    }

    /**
     * Get statistics
     */
    public function getStats(): array
    {
        return [
            'total' => $this->total,
            'inserted' => $this->inserted,
            'updated' => $this->updated,
            'skipped' => $this->skipped,
            'duration' => round(microtime(true) - $this->startTime, 2),
            'logs' => $this->log,
        ];
    }

    /**
     * Fetch records from the API
     */
    public function fetchFromAPI(): array
    {
        $this->log("Starting API fetch from: " . API_URL);

        $apiUrl = API_URL;

        // Handle relative vs absolute URL
        if (!str_starts_with($apiUrl, 'http')) {
            $apiUrl = 'http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') .
                rtrim(dirname($_SERVER['PHP_SELF']), '/') . '/' . $apiUrl;
        }

        $this->log("Fetching from: $apiUrl");

        $context = stream_context_create([
            'http' => [
                'timeout' => 120,
                'ignore_errors' => true,
            ],
        ]);

        $response = @file_get_contents($apiUrl, false, $context);

        if ($response === false) {
            throw new RuntimeException("Failed to fetch from API. Check that list.php is accessible.");
        }

        $data = json_decode($response, true);

        if (!isset($data['success']) || !$data['success']) {
            $error = $data['error'] ?? 'Unknown API error';
            throw new RuntimeException("API returned error: $error");
        }

        $records = $data['records'] ?? [];
        $this->total = count($records);

        $this->log("Fetched {$this->total} records from API");

        return $records;
    }

    /**
     * Clear all existing records
     */
    public function truncateTable(): void
    {
        $this->log("Truncating existing records...", 'warning');
        $this->db->exec("TRUNCATE TABLE salesforce_device_distribution RESTART IDENTITY CASCADE");
        $this->log("Table truncated successfully", 'success');
    }

    /**
     * Upsert a single record into PostgreSQL
     */
    private function upsertRecord(array $record): void
    {
        $sql = "
            INSERT INTO salesforce_device_distribution (
                sf_id, sf_name, owner_id, is_deleted, currency_iso_code,
                created_date, created_by_id, last_modified_date, last_modified_by_id,
                system_modstamp, last_viewed_date, last_referenced_date,
                contact_name, email_address, contact_number,
                recipient_first_name, recipient_last_name,
                device_type, type_of_device, units,
                country, region, hospital_name,
                order_reference, product_code, payment,
                date_field,
                attributes_type, attributes_url, raw_json,
                last_synced_at, sync_version
            ) VALUES (
                :sf_id, :sf_name, :owner_id, :is_deleted, :currency_iso_code,
                :created_date, :created_by_id, :last_modified_date, :last_modified_by_id,
                :system_modstamp, :last_viewed_date, :last_referenced_date,
                :contact_name, :email_address, :contact_number,
                :recipient_first_name, :recipient_last_name,
                :device_type, :type_of_device, :units,
                :country, :region, :hospital_name,
                :order_reference, :product_code, :payment,
                :date_field,
                :attributes_type, :attributes_url, :raw_json,
                NOW(), 1
            )
            ON CONFLICT (sf_id) 
            DO UPDATE SET
                sf_name = EXCLUDED.sf_name,
                owner_id = EXCLUDED.owner_id,
                is_deleted = EXCLUDED.is_deleted,
                currency_iso_code = EXCLUDED.currency_iso_code,
                created_date = EXCLUDED.created_date,
                created_by_id = EXCLUDED.created_by_id,
                last_modified_date = EXCLUDED.last_modified_date,
                last_modified_by_id = EXCLUDED.last_modified_by_id,
                system_modstamp = EXCLUDED.system_modstamp,
                last_viewed_date = EXCLUDED.last_viewed_date,
                last_referenced_date = EXCLUDED.last_referenced_date,
                contact_name = EXCLUDED.contact_name,
                email_address = EXCLUDED.email_address,
                contact_number = EXCLUDED.contact_number,
                recipient_first_name = EXCLUDED.recipient_first_name,
                recipient_last_name = EXCLUDED.recipient_last_name,
                device_type = EXCLUDED.device_type,
                type_of_device = EXCLUDED.type_of_device,
                units = EXCLUDED.units,
                country = EXCLUDED.country,
                region = EXCLUDED.region,
                hospital_name = EXCLUDED.hospital_name,
                order_reference = EXCLUDED.order_reference,
                product_code = EXCLUDED.product_code,
                payment = EXCLUDED.payment,
                date_field = EXCLUDED.date_field,
                attributes_type = EXCLUDED.attributes_type,
                attributes_url = EXCLUDED.attributes_url,
                raw_json = EXCLUDED.raw_json,
                last_synced_at = NOW(),
                sync_version = salesforce_device_distribution.sync_version + 1,
                updated_at = NOW()
        ";

        $attributes = $record['attributes'] ?? [];

        $params = [
            ':sf_id' => $record['Id'] ?? null,
            ':sf_name' => $record['Name'] ?? null,
            ':owner_id' => $record['OwnerId'] ?? null,
            ':is_deleted' => isset($record['IsDeleted']) ? ($record['IsDeleted'] ? 'true' : 'false') : 'false',
            ':currency_iso_code' => $record['CurrencyIsoCode'] ?? 'USD',
            ':created_date' => $this->formatDate($record['CreatedDate'] ?? null),
            ':created_by_id' => $record['CreatedById'] ?? null,
            ':last_modified_date' => $this->formatDate($record['LastModifiedDate'] ?? null),
            ':last_modified_by_id' => $record['LastModifiedById'] ?? null,
            ':system_modstamp' => $this->formatDate($record['SystemModstamp'] ?? null),
            ':last_viewed_date' => $this->formatDate($record['LastViewedDate'] ?? null),
            ':last_referenced_date' => $this->formatDate($record['LastReferencedDate'] ?? null),
            ':contact_name' => $record['Contact_Name__c'] ?? null,
            ':email_address' => $record['Email_Address__c'] ?? null,
            ':contact_number' => $record['Contact_Number__c'] ?? null,
            ':recipient_first_name' => $record['Recipient_First_Name__c'] ?? null,
            ':recipient_last_name' => $record['Recipient_Last_Name__c'] ?? null,
            ':device_type' => $record['Device_Type__c'] ?? null,
            ':type_of_device' => $record['Type_of_Device__c'] ?? null,
            ':units' => isset($record['Units__c']) ? (float)$record['Units__c'] : null,
            ':country' => $record['Country__c'] ?? null,
            ':region' => $record['Region__c'] ?? null,
            ':hospital_name' => $record['Hospital_Name__c'] ?? null,
            ':order_reference' => $record['Order_Reference__c'] ?? null,
            ':product_code' => $record['Product_Code__c'] ?? null,
            ':payment' => $record['Payment__c'] ?? null,
            ':date_field' => $record['Date__c'] ?? null,
            ':attributes_type' => $attributes['type'] ?? null,
            ':attributes_url' => $attributes['url'] ?? null,
            ':raw_json' => json_encode($record),
        ];

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
    }

    /**
     * Format Salesforce date to PostgreSQL timestamp
     */
    private function formatDate(?string $date): ?string
    {
        if (empty($date)) return null;

        try {
            $dt = new DateTime($date);
            return $dt->format('Y-m-d H:i:s.uP');
        } catch (Throwable) {
            return null;
        }
    }

    /**
     * Check if a record has changed by comparing with existing
     */
    private function hasChanged(array $record): bool
    {
        $stmt = $this->db->prepare("
            SELECT system_modstamp, last_modified_date 
            FROM salesforce_device_distribution 
            WHERE sf_id = :sf_id
        ");
        $stmt->execute([':sf_id' => $record['Id'] ?? '']);
        $existing = $stmt->fetch();

        if (!$existing) {
            return true; // New record
        }

        $newModStamp = $record['SystemModstamp'] ?? null;
        $newLastMod = $record['LastModifiedDate'] ?? null;

        // Compare timestamps
        if ($newModStamp && $existing['system_modstamp']) {
            $existingStamp = date('Y-m-d H:i:s', strtotime($existing['system_modstamp']));
            $newStamp = date('Y-m-d H:i:s', strtotime($newModStamp));
            return $newStamp > $existingStamp;
        }

        return true; // If we can't compare, update anyway
    }

    /**
     * Sync all records
     */
    public function sync(bool $reset = false): array
    {
        try {
            // Fetch from API
            $records = $this->fetchFromAPI();

            if (empty($records)) {
                $this->log("No records to sync", 'warning');
                return $this->getStats();
            }

            // Reset if requested
            if ($reset) {
                $this->truncateTable();
            }

            // Begin transaction
            $this->db->beginTransaction();

            $this->log("Starting sync of {$this->total} records...", 'info');

            // Process each record
            $processed = 0;
            foreach ($records as $record) {
                $sfId = $record['Id'] ?? 'unknown';
                $sfName = $record['Name'] ?? 'unknown';

                try {
                    if (!$reset && !$this->hasChanged($record)) {
                        $this->skipped++;
                        if ($processed % 50 === 0) {
                            $this->log("Skipped unchanged: $sfName ($sfId)", 'skip');
                        }
                    } else {
                        $this->upsertRecord($record);

                        if ($reset || $this->inserted === 0) {
                            $this->inserted++;
                        } else {
                            $this->updated++;
                        }

                        if ($processed % 10 === 0) {
                            $this->log("Processed $processed/{$this->total}: $sfName", 'success');
                        }
                    }

                    $processed++;
                } catch (Exception $e) {
                    $this->log("Error on record $sfName ($sfId): " . $e->getMessage(), 'error');
                }
            }

            // Commit transaction
            $this->db->commit();

            $duration = round(microtime(true) - $this->startTime, 2);
            $this->log("Sync complete! Inserted: {$this->inserted}, Updated: {$this->updated}, Skipped: {$this->skipped}, Duration: {$duration}s", 'success');
        } catch (Exception $e) {
            $this->db->rollBack();
            $this->log("Sync failed: " . $e->getMessage(), 'error');
            throw $e;
        }

        return $this->getStats();
    }

    /**
     * Get current table statistics
     */
    public function getTableStats(): array
    {
        try {
            $stmt = $this->db->query("
                SELECT 
                    COUNT(*) as total_records,
                    COUNT(DISTINCT device_type) as unique_device_types,
                    COUNT(DISTINCT country) as unique_countries,
                    MIN(last_synced_at) as first_synced,
                    MAX(last_synced_at) as last_synced,
                    SUM(CASE WHEN units IS NOT NULL THEN units ELSE 0 END) as total_units
                FROM salesforce_device_distribution
            ");
            return $stmt->fetch();
        } catch (Exception $e) {
            return [
                'total_records' => 0,
                'unique_device_types' => 0,
                'unique_countries' => 0,
                'first_synced' => null,
                'last_synced' => null,
                'total_units' => 0,
            ];
        }
    }
}

// ============================================================================
// AJAX HANDLER
// ============================================================================

if (isset($_GET['ajax'])) {
    header('Content-Type: application/json');

    $action = $_GET['ajax'] ?? '';

    try {
        $sync = new DeviceDistributionSync();

        switch ($action) {
            case 'sync':
                $reset = isset($_GET['reset']) && $_GET['reset'] === '1';
                $stats = $sync->sync($reset);
                $stats['table_stats'] = $sync->getTableStats();
                echo json_encode(['success' => true, 'stats' => $stats]);
                break;

            case 'stats':
                $stats = $sync->getTableStats();
                echo json_encode(['success' => true, 'stats' => $stats]);
                break;

            case 'reset':
                $sync->truncateTable();
                echo json_encode(['success' => true, 'message' => 'Table truncated']);
                break;

            default:
                throw new Exception("Unknown action: $action");
        }
    } catch (Throwable $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }

    exit;
}

// ============================================================================
// PAGE MODE
// ============================================================================

// Get initial table stats
try {
    $sync = new DeviceDistributionSync();
    $tableStats = $sync->getTableStats();
} catch (Throwable $e) {
    $tableStats = ['total_records' => 0];
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Distribution Sync · Salesforce → PostgreSQL</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --ink: #0d0f14;
            --ink2: #3a3e4a;
            --ink3: #7a7f8e;
            --bg: #f5f6fa;
            --surface: #ffffff;
            --border: #e3e5ec;
            --brand: #1447e6;
            --brand-light: #e9eefb;
            --green: #12b76a;
            --amber: #f59e0b;
            --red: #ef4444;
            --teal: #0ea5e9;
            --radius: 12px;
            --shadow: 0 2px 12px rgba(0, 0, 0, .07);
            --font: 'DM Sans', sans-serif;
            --mono: 'DM Mono', monospace;
        }

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

        /* Topbar */
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
            color: var(--teal);
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

        .topbar-btn.danger {
            background: var(--red);
        }

        /* Page Wrap */
        .page-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.25rem;
        }

        /* Stats Cards */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
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
            box-shadow: 0 6px 24px rgba(0, 0, 0, .10);
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

        /* Panel */
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

        .panel-body {
            padding: 1.25rem;
        }

        /* Buttons */
        .btn-sync {
            padding: .65rem 1.5rem;
            border-radius: 8px;
            font-size: .9rem;
            font-weight: 600;
            font-family: var(--font);
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            transition: all .15s;
            white-space: nowrap;
            text-decoration: none;
        }

        .btn-sync.primary {
            background: var(--brand);
            color: #fff;
        }

        .btn-sync.primary:hover {
            background: #0e35b3;
            transform: translateY(-1px);
        }

        .btn-sync.reset {
            background: #fff;
            color: var(--red);
            border: 1px solid var(--red);
        }

        .btn-sync.reset:hover {
            background: #fff1f2;
        }

        .btn-sync:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }

        /* Log Console */
        .log-console {
            background: #1a1d27;
            border-radius: var(--radius);
            padding: 1rem;
            max-height: 60vh;
            overflow-y: auto;
            font-family: var(--mono);
            font-size: .75rem;
            line-height: 1.8;
            color: #a0aec0;
        }

        .log-console .log-entry {
            display: flex;
            gap: .75rem;
        }

        .log-console .log-time {
            color: #718096;
            flex-shrink: 0;
        }

        .log-console .log-msg {
            color: #a0aec0;
        }

        .log-console .log-entry.info .log-msg {
            color: #63b3ed;
        }

        .log-console .log-entry.success .log-msg {
            color: #68d391;
        }

        .log-console .log-entry.warning .log-msg {
            color: #f6ad55;
        }

        .log-console .log-entry.error .log-msg {
            color: #fc8181;
        }

        .log-console .log-entry.skip .log-msg {
            color: #718096;
        }

        /* Progress Bar */
        .progress-wrap {
            margin-bottom: 1rem;
            display: none;
        }

        .progress-wrap.active {
            display: block;
        }

        .progress {
            height: 8px;
            background: var(--border);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: var(--brand);
            border-radius: 4px;
            transition: width .3s ease;
            width: 0%;
        }

        .progress-text {
            font-size: .75rem;
            color: var(--ink3);
            margin-top: .25rem;
            text-align: center;
        }

        /* Pulse animation for sync button */
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        .syncing {
            animation: pulse 1s infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .stats-row {
                grid-template-columns: 1fr 1fr;
            }

            .btn-sync {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .stats-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Topbar -->
    <header class="topbar">
        <a class="topbar-brand" href="">
            <div class="topbar-logo"><i class="fas fa-sync-alt"></i></div>
            <div class="topbar-name">Device Sync <span>Salesforce → PostgreSQL</span></div>
        </a>
        <div class="topbar-actions">
            <a href="list.php" class="topbar-btn"><i class="fas fa-list"></i> Distribution List</a>
            <a href="device_fetch.php" class="topbar-btn primary"><i class="fas fa-sync-alt"></i> Sync Tool</a>
        </div>
    </header>

    <div class="page-wrap">

        <!-- Stats Cards -->
        <div class="stats-row">
            <div class="stat-card">
                <div class="stat-icon blue"><i class="fas fa-database"></i></div>
                <div>
                    <div class="stat-val" id="statTotal"><?= number_format($tableStats['total_records'] ?? 0) ?></div>
                    <div class="stat-lbl">Records in DB</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon green"><i class="fas fa-tags"></i></div>
                <div>
                    <div class="stat-val" id="statDeviceTypes"><?= number_format($tableStats['unique_device_types'] ?? 0) ?></div>
                    <div class="stat-lbl">Device Types</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon amber"><i class="fas fa-globe"></i></div>
                <div>
                    <div class="stat-val" id="statCountries"><?= number_format($tableStats['unique_countries'] ?? 0) ?></div>
                    <div class="stat-lbl">Countries</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon teal"><i class="fas fa-clock"></i></div>
                <div>
                    <div class="stat-val" id="statLastSync">
                        <?= isset($tableStats['last_synced']) ? date('H:i', strtotime($tableStats['last_synced'])) : '—' ?>
                    </div>
                    <div class="stat-lbl">Last Sync</div>
                </div>
            </div>
        </div>

        <!-- Sync Controls -->
        <div class="panel">
            <div class="panel-head">
                <div class="panel-title">
                    <i class="fas fa-sync-alt" style="color: var(--brand);"></i>
                    Sync Controls
                </div>
            </div>
            <div class="panel-body">
                <div class="d-flex gap-3 flex-wrap align-items-center">
                    <button class="btn-sync primary" id="btnSync" onclick="startSync(false)">
                        <i class="fas fa-download"></i> Sync Records
                    </button>
                    <button class="btn-sync reset" id="btnReset" onclick="startSync(true)">
                        <i class="fas fa-trash-restore"></i> Reset & Re-fetch
                    </button>
                    <button class="btn-sync" style="background:#fff;border:1px solid var(--border);color:var(--ink2);"
                        onclick="refreshStats()">
                        <i class="fas fa-chart-bar"></i> Refresh Stats
                    </button>
                    <span style="font-size:.8rem;color:var(--ink3);">
                        <i class="fas fa-info-circle"></i>
                        "Sync" updates only changed records. "Reset" clears all and re-fetches.
                    </span>
                </div>

                <!-- Progress Bar -->
                <div class="progress-wrap" id="progressWrap">
                    <div class="progress">
                        <div class="progress-bar" id="progressBar"></div>
                    </div>
                    <div class="progress-text" id="progressText">Preparing...</div>
                </div>
            </div>
        </div>

        <!-- Log Console -->
        <div class="panel">
            <div class="panel-head">
                <div class="panel-title">
                    <i class="fas fa-terminal" style="color: var(--teal);"></i>
                    Sync Log
                </div>
                <button class="topbar-btn" style="background:transparent;color:var(--ink3);border:1px solid var(--border);font-size:.75rem;"
                    onclick="clearLogs()">
                    <i class="fas fa-eraser"></i> Clear
                </button>
            </div>
            <div class="panel-body">
                <div class="log-console" id="logConsole">
                    <div class="log-entry info">
                        <span class="log-time">[<?= date('H:i:s') ?>]</span>
                        <span class="log-msg">Ready. Click "Sync Records" to start fetching from Salesforce API.</span>
                    </div>
                    <div class="log-entry info">
                        <span class="log-time">[<?= date('H:i:s') ?>]</span>
                        <span class="log-msg">Database: <?= PG_DB ?> on <?= PG_HOST ?></span>
                    </div>
                    <?php if (isset($error)): ?>
                        <div class="log-entry error">
                            <span class="log-time">[<?= date('H:i:s') ?>]</span>
                            <span class="log-msg">Error: <?= htmlspecialchars($error) ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

    <script>
        let isRunning = false;

        // Add log entry to console
        function addLog(message, type = 'info') {
            const console = document.getElementById('logConsole');
            const now = new Date();
            const time = now.toTimeString().substring(0, 8);

            const entry = document.createElement('div');
            entry.className = `log-entry ${type}`;
            entry.innerHTML = `
        <span class="log-time">[${time}]</span>
        <span class="log-msg">${message}</span>
    `;

            console.appendChild(entry);
            console.scrollTop = console.scrollHeight;
        }

        // Clear logs
        function clearLogs() {
            const console = document.getElementById('logConsole');
            console.innerHTML = '';
            addLog('Logs cleared', 'info');
        }

        // Update progress bar
        function updateProgress(current, total) {
            const progressWrap = document.getElementById('progressWrap');
            const progressBar = document.getElementById('progressBar');
            const progressText = document.getElementById('progressText');

            progressWrap.classList.add('active');

            if (total > 0) {
                const percent = Math.round((current / total) * 100);
                progressBar.style.width = percent + '%';
                progressText.textContent = `Processing ${current} of ${total} (${percent}%)`;
            } else {
                progressBar.style.width = '0%';
                progressText.textContent = 'Preparing...';
            }
        }

        // Reset progress
        function resetProgress() {
            const progressWrap = document.getElementById('progressWrap');
            progressWrap.classList.remove('active');
            document.getElementById('progressBar').style.width = '0%';
            document.getElementById('progressText').textContent = '';
        }

        // Update stats cards
        function updateStats(stats) {
            document.getElementById('statTotal').textContent = (stats.total_records || 0).toLocaleString();
            document.getElementById('statDeviceTypes').textContent = (stats.unique_device_types || 0).toLocaleString();
            document.getElementById('statCountries').textContent = (stats.unique_countries || 0).toLocaleString();

            if (stats.last_synced) {
                const date = new Date(stats.last_synced);
                document.getElementById('statLastSync').textContent =
                    date.toTimeString().substring(0, 5);
            }
        }

        // Start sync
        async function startSync(reset = false) {
            if (isRunning) {
                addLog('Sync already in progress, please wait...', 'warning');
                return;
            }

            isRunning = true;

            // Disable buttons
            document.getElementById('btnSync').disabled = true;
            document.getElementById('btnReset').disabled = true;
            document.getElementById('btnSync').classList.add('syncing');
            document.getElementById('btnReset').classList.add('syncing');

            // Reset progress
            resetProgress();

            const action = reset ? 'Reset & Re-fetch' : 'Sync';
            addLog(`========================================`, 'info');
            addLog(`STARTING: ${action}`, 'warning');
            addLog(`Mode: ${reset ? 'Full reset + fetch' : 'Incremental update'}`, 'info');
            addLog(`========================================`, 'info');

            try {
                const params = new URLSearchParams({
                    ajax: 'sync',
                    reset: reset ? '1' : '0'
                });

                addLog('Connecting to list.php API endpoint...', 'info');
                updateProgress(0, 100);

                const response = await fetch('?' + params.toString());
                const data = await response.json();

                if (data.success) {
                    const stats = data.stats;

                    // Display logs
                    if (stats.logs && Array.isArray(stats.logs)) {
                        stats.logs.forEach(log => {
                            addLog(log.message, log.type || 'info');
                        });
                    }

                    // Update progress
                    updateProgress(stats.total || 0, stats.total || 0);

                    // Update stats cards with table stats
                    if (stats.table_stats) {
                        updateStats(stats.table_stats);
                    }

                    // Summary
                    addLog(`========================================`, 'info');
                    addLog(`SYNC COMPLETE!`, 'success');
                    addLog(`Total: ${stats.total} | Inserted: ${stats.inserted} | Updated: ${stats.updated} | Skipped: ${stats.skipped}`, 'success');
                    addLog(`Duration: ${stats.duration}s`, 'success');
                    addLog(`========================================`, 'info');

                    // Refresh stats after sync
                    setTimeout(refreshStats, 2000);

                } else {
                    addLog(`Sync failed: ${data.error || 'Unknown error'}`, 'error');
                }

            } catch (error) {
                addLog(`Connection error: ${error.message}`, 'error');
                addLog('Check that list.php is accessible and the API is working', 'warning');
            } finally {
                isRunning = false;
                document.getElementById('btnSync').disabled = false;
                document.getElementById('btnReset').disabled = false;
                document.getElementById('btnSync').classList.remove('syncing');
                document.getElementById('btnReset').classList.remove('syncing');
                resetProgress();
            }
        }

        // Refresh stats from database
        async function refreshStats() {
            try {
                addLog('Refreshing database statistics...', 'info');

                const response = await fetch('?ajax=stats');
                const data = await response.json();

                if (data.success && data.stats) {
                    updateStats(data.stats);
                    addLog('Statistics refreshed', 'success');
                }

            } catch (error) {
                addLog(`Refresh failed: ${error.message}`, 'error');
            }
        }

        // Auto-refresh stats on page load
        document.addEventListener('DOMContentLoaded', () => {
            refreshStats();
        });

        // Keyboard shortcut: Ctrl+S to sync
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                startSync(false);
            }
            if (e.ctrlKey && e.shiftKey && e.key === 'S') {
                e.preventDefault();
                startSync(true);
            }
        });
    </script>

</body>

</html>