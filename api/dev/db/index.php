<?php
// File: ./db/index.php
// Database Schema Documentation for Lifebox M&E System
// This file provides comprehensive documentation for the PostgreSQL database schema

// Load environment variables
$envPath = realpath(__DIR__ . '/../.env');
if (file_exists($envPath)) {
    $envContents = file_get_contents($envPath);
    foreach (explode("\n", $envContents) as $line) {
        if (strpos(trim($line), '#') === 0 || trim($line) === '') continue;
        list($name, $value) = explode('=', $line, 2);
        putenv(trim($name) . '=' . trim($value));
    }
}

// Database connection
$db_host = getenv('DB_HOST') ?: '127.0.0.1';
$db_port = getenv('POSTGRES_PORT') ?: '5432';
$db_name = getenv('POSTGRES_DB') ?: 'lifebox_mesystem';
$db_user = getenv('POSTGRES_USER') ?: 'postgres';
$db_pass = getenv('POSTGRES_PASSWORD') ?: 'mikeintosh';

try {
    $pdo = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name;user=$db_user;password=$db_pass");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Silently fail for documentation purposes
}

// Get all tables and their structure
function getDatabaseSchema($pdo, $db_name)
{
    $tables = [];

    // Get all tables
    $stmt = $pdo->query("
        SELECT table_name 
        FROM information_schema.tables 
        WHERE table_schema = 'public' 
        AND table_type = 'BASE TABLE'
    ");
    $tableNames = $stmt->fetchAll(PDO::FETCH_COLUMN);

    foreach ($tableNames as $tableName) {
        // Get table structure
        $stmt = $pdo->prepare("
            SELECT 
                column_name AS \"Field\",
                udt_name || 
                CASE 
                    WHEN character_maximum_length IS NOT NULL THEN '(' || character_maximum_length || ')' 
                    WHEN numeric_precision IS NOT NULL THEN '(' || numeric_precision || ',' || numeric_scale || ')' 
                    ELSE '' 
                END AS \"Type\",
                CASE WHEN is_nullable = 'YES' THEN 'YES' ELSE 'NO' END AS \"Null\",
                column_default AS \"Default\",
                '' AS \"Key\"  -- Will be populated later
            FROM information_schema.columns
            WHERE table_name = ?
            ORDER BY ordinal_position
        ");
        $stmt->execute([$tableName]);
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Identify primary keys
        $stmt = $pdo->prepare("
            SELECT a.attname AS column_name
            FROM pg_index i
            JOIN pg_attribute a ON a.attrelid = i.indrelid AND a.attnum = ANY(i.indkey)
            WHERE i.indrelid = ?::regclass
            AND i.indisprimary
        ");
        $stmt->execute([$tableName]);
        $primaryKeys = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Identify foreign keys
        $stmt = $pdo->prepare("
            SELECT
                kcu.column_name AS \"COLUMN_NAME\",
                ccu.table_name AS \"REFERENCED_TABLE_NAME\",
                ccu.column_name AS \"REFERENCED_COLUMN_NAME\"
            FROM 
                information_schema.table_constraints AS tc 
                JOIN information_schema.key_column_usage AS kcu
                    ON tc.constraint_name = kcu.constraint_name
                    AND tc.table_schema = kcu.table_schema
                JOIN information_schema.constraint_column_usage AS ccu
                    ON ccu.constraint_name = tc.constraint_name
                    AND ccu.table_schema = tc.table_schema
            WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ?
        ");
        $stmt->execute([$tableName]);
        $foreignKeys = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Identify unique constraints
        $stmt = $pdo->prepare("
            SELECT
                kcu.column_name
            FROM 
                information_schema.table_constraints AS tc 
                JOIN information_schema.key_column_usage AS kcu
                    ON tc.constraint_name = kcu.constraint_name
                    AND tc.table_schema = kcu.table_schema
            WHERE tc.constraint_type = 'UNIQUE' AND tc.table_name = ?
        ");
        $stmt->execute([$tableName]);
        $uniqueKeys = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Update column keys information
        foreach ($columns as &$column) {
            $columnName = $column['Field'];
            if (in_array($columnName, $primaryKeys)) {
                $column['Key'] = 'PRI';
            } elseif (in_array($columnName, $uniqueKeys)) {
                $column['Key'] = 'UNI';
            } else {
                // Check if it's a foreign key
                $isForeignKey = false;
                foreach ($foreignKeys as $fk) {
                    if ($fk['COLUMN_NAME'] === $columnName) {
                        $isForeignKey = true;
                        break;
                    }
                }
                $column['Key'] = $isForeignKey ? 'MUL' : '';
            }
        }
        unset($column);

        // Get indexes
        $stmt = $pdo->prepare("
            SELECT 
                indexname AS \"Key_name\",
                indexdef AS \"Index_type\"
            FROM pg_indexes
            WHERE tablename = ?
        ");
        $stmt->execute([$tableName]);
        $indexes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Get table comment
        $stmt = $pdo->prepare("
            SELECT obj_description(oid) as comment
            FROM pg_class
            WHERE relname = ? AND relkind = 'r'
        ");
        $stmt->execute([$tableName]);
        $commentRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $comment = $commentRow['comment'] ?? '';

        $tables[$tableName] = [
            'columns' => $columns,
            'foreign_keys' => $foreignKeys,
            'indexes' => $indexes,
            'comment' => $comment
        ];
    }

    return $tables;
}

$schema = getDatabaseSchema($pdo, $db_name);

// Get sample data for tables
function getSampleData($pdo, $tableName, $limit = 5)
{
    try {
        $stmt = $pdo->prepare("SELECT * FROM \"$tableName\" LIMIT ?");
        $stmt->execute([$limit]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Process data for better display
        foreach ($data as &$row) {
            foreach ($row as &$value) {
                if (is_string($value)) {
                    // Trim long text
                    if (strlen($value) > 100) {
                        $value = substr($value, 0, 100) . '...';
                    }
                } elseif ($value === null) {
                    $value = 'NULL';
                }
            }
        }

        return $data;
    } catch (Exception $e) {
        return [];
    }
}

// Function to generate ERD data
function generateErdData($schema)
{
    $nodes = [];
    $edges = [];

    foreach ($schema as $tableName => $tableData) {
        // Create node for each table
        $columns = [];
        foreach ($tableData['columns'] as $column) {
            $columnInfo = $column['Field'] . ' (' . $column['Type'] . ')';
            if ($column['Key'] === 'PRI') {
                $columnInfo = '<strong>' . $columnInfo . ' [PK]</strong>';
            } elseif ($column['Key'] === 'MUL') {
                $columnInfo = '<em>' . $columnInfo . ' [FK]</em>';
            } elseif ($column['Key'] === 'UNI') {
                $columnInfo = $columnInfo . ' [UQ]';
            }
            $columns[] = $columnInfo;
        }

        $nodes[] = [
            'id' => $tableName,
            'label' => $tableName,
            'columns' => $columns,
            'shape' => 'box'
        ];

        // Create edges for relationships
        foreach ($tableData['foreign_keys'] as $fk) {
            $edges[] = [
                'from' => $tableName,
                'to' => $fk['REFERENCED_TABLE_NAME'],
                'label' => $fk['COLUMN_NAME'] . ' → ' . $fk['REFERENCED_COLUMN_NAME'],
                'arrows' => 'to'
            ];
        }
    }

    return [
        'nodes' => $nodes,
        'edges' => $edges
    ];
}

$erdData = generateErdData($schema);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System Database Schema Documentation</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/api.css">

    <!-- Vis.js for ER Diagram -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis-network/10.0.1/standalone/umd/vis-network.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/vis-network/10.0.1/dist/dist/vis-network.min.css" rel="stylesheet">

    <!-- jsPDF for PDF Export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style>
        /* Login Modal Styles */
        .login-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: 9999;
            backdrop-filter: blur(8px);
            animation: fadeIn 0.3s ease;
        }

        .login-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 3px;
            border-radius: 20px;
            animation: slideUp 0.4s ease;
            max-width: 450px;
            width: 90%;
        }

        .login-card {
            background: white;
            border-radius: 18px;
            padding: 40px;
            text-align: center;
        }

        .login-icon {
            font-size: 70px;
            color: #667eea;
            margin-bottom: 20px;
        }

        .login-card h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .login-card p {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-group input.error {
            border-color: #f44336;
            animation: shake 0.5s;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            left: auto !important;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: #667eea;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 15px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn.disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .error-message {
            color: #f44336;
            font-size: 13px;
            margin-top: -15px;
            margin-bottom: 15px;
            text-align: left;
            padding-left: 10px;
        }

        .timer-message {
            color: #ff9800;
            font-size: 13px;
            margin-top: 10px;
            text-align: center;
        }

        .attempts-left {
            color: #666;
            font-size: 12px;
            margin-top: 10px;
        }

        .security-note {
            background: #f8f9fa;
            padding: 12px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        /* Main content visibility */
        .main-content,
        .container {
            display: none;
        }

        .main-content.visible,
        .container.visible {
            display: block;
        }

        :root {
            --primary-color: #2c6e9b;
            --secondary-color: #3da58a;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
            --dark-bg: #1e293b;
            --text-dark: #2d3748;
            --text-light: #f8f9fa;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            color: var(--text-dark);
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            background: linear-gradient(135deg, var(--primary-color), #1a4a6e);
            color: white;
            height: 100vh;
            position: fixed;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 20px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
        }

        .sidebar-header img {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }

        .sidebar-header h3 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: bold;
        }

        .sidebar-menu {
            list-style: none;
            padding: 15px 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin: 5px 0;
        }

        .sidebar-menu a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border-radius: 4px;
            transition: all 0.3s;
            gap: 10px;
        }

        .sidebar-menu a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .sidebar-menu a i {
            width: 24px;
            text-align: center;
        }

        .menu-item .menu-link {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-toggle {
            transition: transform 0.3s;
            font-size: 0.8rem;
        }

        .menu-toggle.rotated {
            transform: rotate(90deg);
        }

        .menu-dropdown {
            list-style: none;
            padding-left: 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .menu-dropdown.show {
            max-height: 1000px;
        }

        .menu-dropdown li a {
            padding: 8px 15px;
            font-size: 0.9rem;
        }

        .menu-dropdown li a i {
            font-size: 0.7rem;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: 280px;
            background-color: var(--light-bg);
        }

        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .go-to-start-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .go-to-start-btn:hover {
            background: #1a4a6e;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-container {
            position: relative;
            background: #f1f3f5;
            border-radius: 50px;
            padding: 8px 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            width: 250px;
        }

        .search-container input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            font-size: 0.9rem;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 5px;
            max-height: 300px;
            overflow-y: auto;
            display: none;
            z-index: 200;
        }

        .search-results.show {
            display: block;
        }

        .search-result-item {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: background 0.2s;
        }

        .search-result-item:hover {
            background: #f8f9fa;
        }

        .result-type {
            background: var(--primary-color);
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 4px;
            margin-right: 8px;
        }

        .result-name {
            font-weight: 500;
        }

        .result-context {
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 3px;
        }

        /* Button Styles */
        button.btn {
            background-color: #ff3000;
            border: none;
            outline: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-sizing: border-box;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
        }

        button.btn-primary {
            background-color: #FF7700FF;
            color: #fff;
        }

        button.btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        button.btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        button.btn-success {
            background-color: #28a745;
            color: #fff;
        }

        button.btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .mobile-search-btn,
        .mobile-menu-btn {
            background: transparent;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--text-dark);
            display: none;
        }

        .mobile-search-container {
            padding: 15px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 70px;
            left: 0;
            right: 0;
            z-index: 100;
        }

        /* Content Styles */
        .content {
            padding: 0px;
        }

        .section {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            overflow: hidden;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px 25px;
        }

        .section-header h2 {
            margin: 0;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-body {
            padding: 25px;
        }

        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            overflow: hidden;
            border: 1px solid #eaeaea;
        }

        .card-header {
            background: #f8f9fa;
            padding: 15px 20px;
            border-bottom: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h3 {
            margin: 0;
            font-size: 1.2rem;
        }

        .card-body {
            padding: 20px;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .badge-primary {
            background: var(--primary-color);
            color: white;
        }

        .badge-success {
            background: var(--secondary-color);
            color: white;
        }

        .badge-info {
            background: #17a2b8;
            color: white;
        }

        /* Table Styles */
        .table-responsive {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .data-table th {
            background: #f1f5f9;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            color: var(--text-dark);
            border-bottom: 2px solid #e2e8f0;
        }

        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #edf2f7;
        }

        .data-table tr:hover td {
            background: #f8fafc;
        }

        .field-name {
            font-weight: 600;
            color: var(--primary-color);
        }

        .field-type {
            color: #e53e3e;
            font-family: 'Roboto Mono', monospace;
        }

        .field-key {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .PRI {
            background: #f0fff4;
            color: #38a169;
            border: 1px solid #c6f6d5;
        }

        .MUL {
            background: #ebf8ff;
            color: #3182ce;
            border: 1px solid #bee3f8;
        }

        .UNI {
            background: #fffaf0;
            color: #dd6b20;
            border: 1px solid #feebc8;
        }

        /* Tabs */
        .tabs {
            display: flex;
            border-bottom: 1px solid #e2e8f0;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-bottom: none;
            border-radius: 5px 5px 0 0;
            margin-right: 5px;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .tab.active {
            background: white;
            border-bottom: 1px solid white;
            margin-bottom: -1px;
            font-weight: 500;
            color: var(--primary-color);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* ER Diagram Styles */
        .erd-diagram {
            width: 100%;
            height: 700px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: white;
            margin-top: 20px;
        }

        /* Utility Classes */
        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .d-flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .align-items-center {
            align-items: center;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .text-muted {
            color: #718096;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-menu-btn,
            .mobile-search-btn {
                display: flex;
            }

            .header-left h1 {
                font-size: 1.2rem;
            }

            .search-container {
                display: none;
            }

            .mobile-visible {
                width: 100%;
                margin-top: 22px;
                margin-bottom: 20px;
                display: flex !important;
            }
        }

        @media (max-width: 767px) {
            .mobile-search-btn {
                display: none !important;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .header-right {
                width: 100%;
                justify-content: space-between;
            }

            .mobile-search-container {
                top: 115px;
            }

            .section-body {
                padding: 15px;
            }

            .tabs {
                flex-wrap: wrap;
            }

            .tab {
                margin-bottom: 5px;
            }
        }

        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 100;
        }

        /* Dark Mode */
        .dark-mode {
            background-color: var(--dark-bg);
            color: var(--text-light);
        }

        .dark-mode .header,
        .dark-mode .card,
        .dark-mode .section,
        .dark-mode .section-body {
            background-color: #2d3748;
            color: var(--text-light);
        }

        .dark-mode .card-header,
        .dark-mode .tabs {
            background-color: #1a202c;
            border-color: #2d3748;
        }

        .dark-mode .data-table th {
            background-color: #1a202c;
            border-color: #2d3748;
        }

        .dark-mode .data-table td {
            border-color: #2d3748;
        }

        .dark-mode .data-table tr:hover td {
            background-color: #2d3748;
        }

        .dark-mode .tab {
            background-color: #1a202c;
            border-color: #2d3748;
            color: var(--text-light);
        }

        .dark-mode .tab.active {
            background-color: #2d3748;
            color: white;
        }

        .dark-mode .search-container {
            background-color: #c7cedc;
        }
    </style>
</head>

<body>
    <!-- Login Modal -->
    <div class="login-modal" id="loginModal">
        <div class="login-container">
            <div class="login-card">
                <div class="login-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h2>Secure Database Access</h2>
                <p>Please enter the master password to access the Lifebox M&E Database Documentation</p>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="masterPassword" placeholder="Enter Master Password" autocomplete="off">
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                </div>

                <button class="login-btn" id="loginBtn">
                    <i class="fas fa-sign-in-alt"></i> Access Documentation
                </button>

                <div id="errorMessage" class="error-message"></div>
                <div id="timerMessage" class="timer-message"></div>
                <div id="attemptsLeft" class="attempts-left"></div>

                <div class="security-note">
                    <i class="fas fa-info-circle"></i>
                    This is a secure area. Unauthorized access attempts will be logged and may result in temporary lockout.
                </div>
                <p>The Credential Is Found on The Lifebox System Administration Playbook!</p>
            </div>
        </div>
    </div>

    <div class="container" id="mainContainer">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-link">
                    <img src="/assets/img/lblogo-white.svg" alt="Lifebox M&E Logo" class="sidebar-logo">
                    <h3 class="sidebar-title">M&E System</h3>
                </a>
            </div>

            <ul class="sidebar-menu" id="sidebarMenu">
                <li>
                    <a href="#introduction"><i class="fas fa-info-circle"></i> Introduction</a>
                </li>
                <li>
                    <a href="#getting-started"><i class="fas fa-rocket"></i> Getting Started</a>
                </li>
                <li>
                    <a href="#erd"><i class="fas fa-project-diagram"></i> ER Diagram</a>
                </li>

                <!-- Tables Section -->
                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link">
                        <i class="fas fa-table"></i> Database Tables
                        <i class="fas fa-chevron-right menu-toggle"></i>
                    </a>
                    <ul class="menu-dropdown" id="tablesDropdown">
                        <?php foreach ($schema as $tableName => $tableData): ?>
                            <li>
                                <a href="#table-<?php echo str_replace('_', '-', $tableName); ?>">
                                    <i class="fas fa-angle-right"></i> <?php echo $tableName; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li>
                    <a href="#sample-queries"><i class="fas fa-code"></i> Sample Queries</a>
                </li>
                <li>
                    <a href="#best-practices"><i class="fas fa-check-circle"></i> Best Practices</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            <header class="header">
                <div class="header-left">
                    <button class="go-to-start-btn" onclick="window.location.href='../';">
                        <i class="fas fa-home"></i>
                    </button>
                    <h1>Lifebox M&E System Database Schema Documentation</h1>
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="header-right">
                    <div class="search-container" id="desktopSearch">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchInput" placeholder="Search tables, columns...">
                        <div class="search-results" id="searchResults"></div>
                    </div>

                    <button class="mobile-search-btn" id="mobileSearchBtn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </header>

            <!-- Mobile Search Container -->
            <div class="search-container mobile-visible d-none" id="mobileSearchContainer">
                <i class="fas fa-search"></i>
                <input type="text" id="mobileSearchInput" placeholder="Search tables, columns...">
                <div class="search-results" id="mobileSearchResults"></div>
            </div>

            <div class="content">
                <!-- Introduction Section -->
                <section class="section fade-in" id="introduction">
                    <div class="section-header">
                        <h2><i class="fas fa-info-circle mr-2"></i> Introduction</h2>
                    </div>
                    <div class="section-body">
                        <p>This documentation provides a comprehensive overview of the <strong>lifebox_mesystem</strong> PostgreSQL database schema. Designed to support a comprehensive monitoring and evaluation system with features for tracking projects, indicators, beneficiaries, and evaluations.</p>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Key Features</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><strong>Project Management:</strong> Track project details, timelines, and budgets</li>
                                    <li><strong>Indicator Tracking:</strong> Monitor performance indicators and targets</li>
                                    <li><strong>Beneficiary Management:</strong> Track beneficiary information and participation</li>
                                    <li><strong>Evaluation Framework:</strong> Conduct baseline, midline and endline evaluations</li>
                                    <li><strong>Real-time Reporting:</strong> Generate comprehensive reports and dashboards</li>
                                    <li><strong>User Management:</strong> Role-based access control system</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Database Overview</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="data-table">
                                        <thead>
                                            32<th>Statistic</th>
                                            <th>Value</th>
                                        </thead>
                                        <tbody>
                                            32<td>Total Tables</td>
                                            <td><?php echo count($schema); ?></td>
                                            </tr>
                                            32<td>Primary Tables</td>
                                            <td>projects, indicators, beneficiaries, evaluations</td>
                                            </tr>
                                            32<td>Reference Tables</td>
                                            <td>locations, organizations, indicator_types, etc.</td>
                                            </tr>
                                            32<td>System Tables</td>
                                            <td>users, roles, permissions, audit_logs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Getting Started Section -->
                <section class="section fade-in" id="getting-started">
                    <div class="section-header">
                        <h2><i class="fas fa-rocket mr-2"></i> Getting Started</h2>
                    </div>
                    <div class="section-body">
                        <h3 class="mb-2">Database Connection</h3>
                        <p>To connect to the lifebox_mesystem database, use the following connection parameters:</p>

                        <pre><code>// PHP PDO Connection for PostgreSQL
$db_host = '<?php echo $db_host; ?>';
$db_port = '<?php echo $db_port; ?>';
$db_name = '<?php echo $db_name; ?>';
$db_user = '<?php echo $db_user; ?>';
$db_pass = '<?php echo $db_pass; ?>';

try {
    $pdo = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}</code></pre>

                        <h3 class="mt-4 mb-2">Database Schema</h3>
                        <p>The database follows a relational model with proper normalization. Key entities include:</p>

                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    32<th>Entity</th>
                                    <th>Description</th>
                                    <th>Related Tables</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    32<td>Projects</td>
                                    <td>Core entity storing all project information</td>
                                    <td>projects, project_indicators, project_beneficiaries</td>
                                    </tr>
                                    32<td>Indicators</td>
                                    <td>Performance indicators and targets</td>
                                    <td>indicators, indicator_values, indicator_types</td>
                                    </tr>
                                    32<td>Beneficiaries</td>
                                    <td>Beneficiary information and participation</td>
                                    <td>beneficiaries, beneficiary_projects, beneficiary_evaluations</td>
                                    </tr>
                                    32<td>Evaluations</td>
                                    <td>Evaluation data and results</td>
                                    <td>evaluations, evaluation_indicators, evaluation_participants</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- ER Diagram Section -->
                <section class="section fade-in" id="erd">
                    <div class="section-header">
                        <h2><i class="fas fa-project-diagram mr-2"></i> Entity Relationship Diagram</h2>
                    </div>
                    <div class="section-body">
                        <p>The interactive Entity Relationship Diagram (ERD) below provides a visual representation of the database structure and relationships. Click and drag to navigate, scroll to zoom, and click on tables to see details.</p>

                        <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                            <button class="btn btn-primary me-2" id="fitDiagram">
                                <i class="fas fa-search-plus me-1"></i> Fit Diagram
                            </button>
                            <button class="btn btn-secondary me-2" id="centerDiagram">
                                <i class="fas fa-align-center me-1"></i> Center Diagram
                            </button>
                            <button class="btn btn-info me-2" id="togglePhysics">
                                <i class="fas fa-flask me-1"></i> Toggle Physics
                            </button>
                            <button class="btn btn-success me-2" id="exportImage">
                                <i class="fas fa-file-image me-1"></i> Export PNG
                            </button>
                            <button class="btn btn-danger me-2" id="exportPDF">
                                <i class="fas fa-file-pdf me-1"></i> Export PDF
                            </button>
                            <select id="themeSelector" class="form-select w-auto rounded px-2 py-1">
                                <option value="neon">🌟 Neon</option>
                                <option value="pastel">🎨 Pastel</option>
                                <option value="dark">🌑 Dark Mode</option>
                            </select>
                        </div>

                        <div class="erd-diagram" id="erdDiagram"></div>
                    </div>
                </section>

                <!-- Rest of your sections remain the same -->
                <!-- Tables Documentation Section -->
                <section class="section fade-in" id="tables-documentation">
                    <div class="section-header">
                        <h2><i class="fas fa-table mr-2"></i> Tables Documentation</h2>
                    </div>
                    <div class="section-body">
                        <p>This section provides detailed documentation for each table in the database, including column definitions, relationships, and sample data.</p>

                        <?php foreach ($schema as $tableName => $tableData): ?>
                            <div class="card mt-4" id="table-<?php echo str_replace('_', '-', $tableName); ?>">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="mb-0"><?php echo $tableName; ?></h3>
                                    <div>
                                        <span class="badge badge-primary"><?php echo count($tableData['columns']); ?> columns</span>
                                        <?php if (!empty($tableData['foreign_keys'])): ?>
                                            <span class="badge badge-success"><?php echo count($tableData['foreign_keys']); ?> relationships</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tabs">
                                        <div class="tab active" data-tab="structure">Structure</div>
                                        <div class="tab" data-tab="relationships">Relationships</div>
                                        <div class="tab" data-tab="sample-data">Sample Data</div>
                                    </div>

                                    <div class="tab-content active" id="structure-<?php echo $tableName; ?>">
                                        <div class="table-responsive">
                                            <table class="data-table">
                                                <thead>
                                                    32<th>Column</th>
                                                    <th>Type</th>
                                                    <th>Nullable</th>
                                                    <th>Default</th>
                                                    <th>Key</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tableData['columns'] as $column): ?>
                                                        32<td class="field-name"><?php echo $column['Field']; ?></td>
                                                        <td class="field-type"><?php echo $column['Type']; ?></td>
                                                        <td><?php echo $column['Null'] === 'YES' ? 'Yes' : 'No'; ?></td>
                                                        <td><?php echo $column['Default'] ?? 'NULL'; ?></td>
                                                        <td>
                                                            <?php if ($column['Key'] === 'PRI'): ?>
                                                                <span class="field-key PRI">PRIMARY</span>
                                                            <?php elseif ($column['Key'] === 'MUL'): ?>
                                                                <span class="field-key MUL">FOREIGN</span>
                                                            <?php elseif ($column['Key'] === 'UNI'): ?>
                                                                <span class="field-key UNI">UNIQUE</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-content" id="relationships-<?php echo $tableName; ?>">
                                        <?php if (!empty($tableData['foreign_keys'])): ?>
                                            <div class="table-responsive">
                                                <table class="data-table">
                                                    <thead>32<th>Column</th>
                                                        <th>References</th>
                                                        <th>Relationship</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($tableData['foreign_keys'] as $fk): ?>
                                                            32<td class="field-name"><?php echo $fk['COLUMN_NAME']; ?></td>
                                                            <td><?php echo $fk['REFERENCED_TABLE_NAME']; ?> (<?php echo $fk['REFERENCED_COLUMN_NAME']; ?>)</td>
                                                            <td>Many <?php echo $tableName; ?> belong to one <?php echo $fk['REFERENCED_TABLE_NAME']; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php else: ?>
                                            <p class="text-muted">This table has no foreign key relationships.</p>
                                        <?php endif; ?>
                                    </div>

                                    <div class="tab-content" id="sample-data-<?php echo $tableName; ?>">
                                        <?php $sampleData = getSampleData($pdo, $tableName, 5); ?>
                                        <?php if (!empty($sampleData)): ?>
                                            <div class="table-responsive">
                                                <table class="data-table sample-data-table">
                                                    <thead>
                                                        32
                                                        <?php foreach (array_keys($sampleData[0]) as $column): ?>
                                                            <th><?php echo $column; ?></th>
                                                        <?php endforeach; ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($sampleData as $row): ?>
                                                            32
                                                            <?php foreach ($row as $value): ?>
                                                                <td title="<?php echo htmlspecialchars((string) $value ?? ''); ?>">
                                                                    <?php echo htmlspecialchars((string) $value ?? ''); ?>
                                                                </td>
                                                            <?php endforeach; ?>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <p class="text-muted mt-2">Showing <?php echo count($sampleData); ?> sample records.</p>
                                        <?php else: ?>
                                            <p class="text-muted">No sample data available for this table.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- Sample Queries Section -->
                <section class="section fade-in" id="sample-queries">
                    <div class="section-header">
                        <h2><i class="fas fa-code mr-2"></i> Sample Queries</h2>
                    </div>
                    <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h3>Basic CRUD Operations</h3>
                            </div>
                            <div class="card-body">
                                <pre><code>-- Insert a new project
INSERT INTO projects (project_name, start_date, end_date, budget) 
VALUES ('Community Health Initiative', '2023-06-01', '2024-05-31', 500000);

-- Get all active projects
SELECT * FROM projects WHERE end_date > CURRENT_DATE ORDER BY start_date;

-- Update a project's end date
UPDATE projects SET end_date = '2024-08-31' WHERE project_id = 123;

-- Delete a beneficiary
DELETE FROM beneficiaries WHERE beneficiary_id = 456;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Best Practices Section -->
                <section class="section fade-in" id="best-practices">
                    <div class="section-header">
                        <h2><i class="fas fa-check-circle mr-2"></i> Best Practices</h2>
                    </div>
                    <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h3>Database Usage Guidelines</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Always use parameterized queries to prevent SQL injection</li>
                                    <li>Create appropriate indexes for frequently queried columns</li>
                                    <li>Regularly backup the database using pg_dump</li>
                                    <li>Use transactions for operations that modify multiple related tables</li>
                                    <li>Use EXPLAIN ANALYZE to optimize query performance</li>
                                    <li>Follow the principle of least privilege for database users</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <div class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
    </div>

    <script>
        // Password protection system
        const MASTER_PASSWORD = "Lifebox@Mne7";
        const MAX_ATTEMPTS = 3;
        const LOCKOUT_DURATION = 5 * 60 * 1000;
        let failedAttempts = 0;
        let lockoutUntil = null;

        function isAuthenticated() {
            const authTime = sessionStorage.getItem('lifebox_db_auth_time');
            if (authTime && (Date.now() - parseInt(authTime) < 24 * 60 * 60 * 1000)) {
                return true;
            }
            return false;
        }

        function setAuthenticated() {
            sessionStorage.setItem('lifebox_db_auth_time', Date.now().toString());
        }

        function isLockedOut() {
            return lockoutUntil && Date.now() < lockoutUntil;
        }

        function getRemainingLockoutSeconds() {
            if (lockoutUntil) {
                return Math.ceil((lockoutUntil - Date.now()) / 1000);
            }
            return 0;
        }

        function updateLockoutUI() {
            const loginBtn = document.getElementById('loginBtn');
            const passwordInput = document.getElementById('masterPassword');
            const timerMessage = document.getElementById('timerMessage');
            const attemptsLeft = document.getElementById('attemptsLeft');

            if (isLockedOut()) {
                const remainingSeconds = getRemainingLockoutSeconds();
                const minutes = Math.floor(remainingSeconds / 60);
                const seconds = remainingSeconds % 60;

                loginBtn.disabled = true;
                loginBtn.classList.add('disabled');
                passwordInput.disabled = true;
                timerMessage.innerHTML = `<i class="fas fa-hourglass-half"></i> Too many failed attempts. Please wait ${minutes}:${seconds.toString().padStart(2, '0')} before trying again.`;
                timerMessage.style.display = 'block';

                if (window.lockoutInterval) clearInterval(window.lockoutInterval);
                window.lockoutInterval = setInterval(() => {
                    if (isLockedOut()) {
                        const remaining = getRemainingLockoutSeconds();
                        const mins = Math.floor(remaining / 60);
                        const secs = remaining % 60;
                        timerMessage.innerHTML = `<i class="fas fa-hourglass-half"></i> Please wait ${mins}:${secs.toString().padStart(2, '0')}`;
                    } else {
                        clearInterval(window.lockoutInterval);
                        resetLoginState();
                    }
                }, 1000);
            } else {
                if (window.lockoutInterval) clearInterval(window.lockoutInterval);
                loginBtn.disabled = false;
                loginBtn.classList.remove('disabled');
                passwordInput.disabled = false;
                timerMessage.style.display = 'none';
                attemptsLeft.style.display = 'block';
                attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${MAX_ATTEMPTS - failedAttempts} attempt(s) remaining before 5-minute lockout`;
            }
        }

        function resetLoginState() {
            const loginBtn = document.getElementById('loginBtn');
            const passwordInput = document.getElementById('masterPassword');
            const timerMessage = document.getElementById('timerMessage');
            const errorMessage = document.getElementById('errorMessage');

            loginBtn.disabled = false;
            loginBtn.classList.remove('disabled');
            passwordInput.disabled = false;
            timerMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            passwordInput.value = '';
            passwordInput.classList.remove('error');
        }

        function showError(message) {
            const errorMessage = document.getElementById('errorMessage');
            const passwordInput = document.getElementById('masterPassword');

            errorMessage.innerHTML = `<i class="fas fa-times-circle"></i> ${message}`;
            errorMessage.style.display = 'block';
            passwordInput.classList.add('error');

            setTimeout(() => {
                passwordInput.classList.remove('error');
            }, 500);
        }

        function attemptLogin() {
            if (isLockedOut()) {
                showError('Account is temporarily locked. Please wait.');
                updateLockoutUI();
                return;
            }

            const passwordInput = document.getElementById('masterPassword');
            const enteredPassword = passwordInput.value;

            if (enteredPassword === MASTER_PASSWORD) {
                setAuthenticated();
                document.getElementById('loginModal').classList.remove('active');
                document.getElementById('mainContainer').classList.add('visible');
                document.getElementById('mainContent').classList.add('visible');
                failedAttempts = 0;
                sessionStorage.setItem('lifebox_db_failed_attempts', '0');
            } else {
                failedAttempts++;
                sessionStorage.setItem('lifebox_db_failed_attempts', failedAttempts.toString());

                const remainingAttempts = MAX_ATTEMPTS - failedAttempts;

                if (failedAttempts >= MAX_ATTEMPTS) {
                    lockoutUntil = Date.now() + LOCKOUT_DURATION;
                    sessionStorage.setItem('lifebox_db_lockout_until', lockoutUntil.toString());
                    sessionStorage.setItem('lifebox_db_failed_attempts', '0');
                    showError(`Too many failed attempts! Access locked for 5 minutes.`);
                    updateLockoutUI();
                } else {
                    showError(`Incorrect password. ${remainingAttempts} attempt(s) remaining.`);
                    const attemptsLeft = document.getElementById('attemptsLeft');
                    attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${remainingAttempts} attempt(s) remaining before 5-minute lockout`;
                }

                passwordInput.value = '';
                passwordInput.focus();
            }
        }

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('masterPassword');
            const toggleIcon = document.getElementById('togglePassword');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        function initProtection() {
            const savedFailedAttempts = sessionStorage.getItem('lifebox_db_failed_attempts');
            const savedLockoutUntil = sessionStorage.getItem('lifebox_db_lockout_until');

            if (savedFailedAttempts) {
                failedAttempts = parseInt(savedFailedAttempts);
            }

            if (savedLockoutUntil) {
                const savedTime = parseInt(savedLockoutUntil);
                if (Date.now() < savedTime) {
                    lockoutUntil = savedTime;
                } else {
                    sessionStorage.removeItem('lifebox_db_lockout_until');
                }
            }

            if (isAuthenticated()) {
                document.getElementById('loginModal').classList.remove('active');
                document.getElementById('mainContainer').classList.add('visible');
                document.getElementById('mainContent').classList.add('visible');
                return;
            }

            document.getElementById('loginModal').classList.add('active');
            document.getElementById('mainContainer').classList.remove('visible');
            document.getElementById('mainContent').classList.remove('visible');

            if (isLockedOut()) {
                updateLockoutUI();
            } else {
                const attemptsLeft = document.getElementById('attemptsLeft');
                attemptsLeft.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${MAX_ATTEMPTS - failedAttempts} attempt(s) remaining before 5-minute lockout`;
            }

            document.getElementById('loginBtn').addEventListener('click', attemptLogin);
            document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
            document.getElementById('masterPassword').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    attemptLogin();
                }
            });
        }

        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });

        // Mobile search toggle
        document.getElementById('mobileSearchBtn').addEventListener('click', function() {
            document.getElementById('mobileSearchContainer').classList.toggle('d-none');
        });

        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                const parentCard = this.closest('.card');

                parentCard.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                parentCard.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                });
                parentCard.querySelector(`#${tabId}-${parentCard.id.split('-')[1]}`).classList.add('active');
            });
        });

        // Menu dropdown toggle
        document.querySelectorAll('.menu-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                this.classList.toggle('rotated');
                const dropdown = this.parentElement.nextElementSibling;
                dropdown.classList.toggle('show');
            });
        });

        // Search functionality
        function setupSearch(inputId, resultsId) {
            const searchInput = document.getElementById(inputId);
            const searchResults = document.getElementById(resultsId);
            if (!searchInput || !searchResults) return;

            const searchIndex = [{
                    type: 'Section',
                    name: 'Introduction',
                    id: 'introduction'
                },
                {
                    type: 'Section',
                    name: 'Getting Started',
                    id: 'getting-started'
                },
                {
                    type: 'Section',
                    name: 'ER Diagram',
                    id: 'erd'
                },
                {
                    type: 'Section',
                    name: 'Sample Queries',
                    id: 'sample-queries'
                },
                {
                    type: 'Section',
                    name: 'Best Practices',
                    id: 'best-practices'
                }
            ];

            <?php foreach ($schema as $tableName => $tableData): ?>
                searchIndex.push({
                    type: 'Table',
                    name: '<?php echo $tableName; ?>',
                    id: 'table-<?php echo str_replace('_', '-', $tableName); ?>'
                });
                <?php foreach ($tableData['columns'] as $column): ?>
                    searchIndex.push({
                        type: 'Column',
                        name: '<?php echo $column['Field']; ?>',
                        id: 'table-<?php echo str_replace('_', '-', $tableName); ?>'
                    });
                <?php endforeach; ?>
            <?php endforeach; ?>

            searchInput.addEventListener('input', function() {
                const term = this.value.toLowerCase();
                searchResults.innerHTML = '';
                if (term.length < 2) {
                    searchResults.classList.remove('show');
                    return;
                }

                const results = searchIndex.filter(item => item.name.toLowerCase().includes(term));
                if (results.length === 0) {
                    searchResults.innerHTML = '<div class="search-result-item">No results</div>';
                }

                results.slice(0, 10).forEach(result => {
                    const div = document.createElement('div');
                    div.className = 'search-result-item';
                    div.innerHTML = `<span class="result-type">${result.type}</span> ${result.name}`;
                    div.onclick = () => {
                        document.getElementById(result.id).scrollIntoView({
                            behavior: 'smooth'
                        });
                        searchResults.classList.remove('show');
                        searchInput.value = '';
                    };
                    searchResults.appendChild(div);
                });
                searchResults.classList.add('show');
            });

            document.addEventListener('click', (e) => {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.remove('show');
                }
            });
        }

        setupSearch('searchInput', 'searchResults');
        setupSearch('mobileSearchInput', 'mobileSearchResults');

        // Theme toggle
        const themeToggle = document.getElementById('themeToggle');
        themeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const icon = themeToggle.querySelector('i');
            if (document.body.classList.contains('dark-mode')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });

        // ER Diagram functionality
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('erdDiagram');
            if (!container) return;

            let currentTheme = 'neon';

            function getRandomColorFromTheme(theme) {
                const themes = {
                    neon: ['#39FF14', '#FF073A', '#00FFFF', '#FFAE00', '#FF00FF', '#7DF9FF'],
                    pastel: ['#A0CED9', '#FFB5E8', '#CBAACB', '#FFDAC1', '#FFFFD1', '#B5EAD7'],
                    dark: ['#1f1f1f', '#333333', '#444444', '#555555', '#777777', '#999999']
                };
                const palette = themes[theme] || themes['neon'];
                return palette[Math.floor(Math.random() * palette.length)];
            }

            const rawNodes = <?php echo json_encode($erdData['nodes']); ?>;
            const rawEdges = <?php echo json_encode($erdData['edges']); ?>;

            let nodes = new vis.DataSet(rawNodes.map(node => ({
                ...node,
                color: {
                    background: getRandomColorFromTheme(currentTheme),
                    border: getRandomColorFromTheme(currentTheme)
                }
            })));
            let edges = new vis.DataSet(rawEdges.map(edge => ({
                ...edge,
                color: {
                    color: getRandomColorFromTheme(currentTheme)
                }
            })));

            const data = {
                nodes,
                edges
            };
            const options = {
                layout: {
                    improvedLayout: true
                },
                physics: {
                    enabled: true,
                    solver: 'forceAtlas2Based'
                },
                nodes: {
                    shape: 'box',
                    margin: 10,
                    font: {
                        size: 14
                    },
                    borderWidth: 1,
                    shadow: true
                },
                edges: {
                    smooth: true,
                    arrows: {
                        to: {
                            enabled: true
                        }
                    },
                    font: {
                        size: 11
                    }
                },
                interaction: {
                    hover: true,
                    tooltipDelay: 300
                }
            };

            const network = new vis.Network(container, data, options);

            document.getElementById('fitDiagram').addEventListener('click', () => network.fit({
                animation: true
            }));
            document.getElementById('centerDiagram').addEventListener('click', () => network.focus(0, {
                scale: 1,
                animation: true
            }));

            let physicsEnabled = true;
            document.getElementById('togglePhysics').addEventListener('click', function() {
                physicsEnabled = !physicsEnabled;
                network.setOptions({
                    physics: {
                        enabled: physicsEnabled
                    }
                });
                this.textContent = physicsEnabled ? 'Disable Physics' : 'Enable Physics';
            });

            document.getElementById('exportImage').addEventListener('click', function() {
                html2canvas(container).then(canvas => {
                    const link = document.createElement('a');
                    link.href = canvas.toDataURL('image/png');
                    link.download = 'Lifebox_ERD_Diagram.png';
                    link.click();
                });
            });

            document.getElementById('exportPDF').addEventListener('click', function() {
                html2canvas(container).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');
                    const {
                        jsPDF
                    } = window.jspdf;
                    const pdf = new jsPDF({
                        orientation: 'landscape',
                        unit: 'px',
                        format: [canvas.width, canvas.height]
                    });
                    pdf.addImage(imgData, 'PNG', 0, 0);
                    pdf.save('Lifebox_ERD_Diagram.pdf');
                });
            });

            document.getElementById('themeSelector').addEventListener('change', function() {
                currentTheme = this.value;
                nodes.clear();
                edges.clear();
                nodes.add(rawNodes.map(node => ({
                    ...node,
                    color: {
                        background: getRandomColorFromTheme(currentTheme),
                        border: getRandomColorFromTheme(currentTheme)
                    }
                })));
                edges.add(rawEdges.map(edge => ({
                    ...edge,
                    color: {
                        color: getRandomColorFromTheme(currentTheme)
                    }
                })));
                network.setData({
                    nodes,
                    edges
                });
            });
        });

        // Highlight current section in sidebar
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.section');
            let currentSection = '';
            sections.forEach(section => {
                if (window.scrollY >= section.offsetTop - 200) {
                    currentSection = section.getAttribute('id');
                }
            });
            document.querySelectorAll('.sidebar-menu li').forEach(item => {
                item.classList.remove('active');
                const link = item.querySelector('a');
                if (link && link.getAttribute('href') === `#${currentSection}`) {
                    item.classList.add('active');
                }
            });
        });

        // Initialize protection
        initProtection();
    </script>
</body>

</html>