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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--<link rel="stylesheet" href="../assets/css/dbdb.css">-->

    <!-- Vis.js for ER Diagram -->
    <script src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/vis-network/9.1.2/vis-network.min.css" rel="stylesheet">

    <!-- jsPDF for PDF Export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style>
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

        /* Sidebar Header */
        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 20px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Link inside sidebar header (logo + text) */
        .sidebar-header a {
            display: flex;
            align-items: center;
            text-decoration: none;
            /* Remove underline */
            color: white;
            /* Set text color to white */
        }

        /* Logo styling */
        .sidebar-header img {
            width: 40px;
            /* Adjust logo size */
            height: auto;
            margin-right: 10px;
            /* Space between logo and title */
        }

        /* Sidebar header text styling */
        .sidebar-header h3 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: bold;
        }

        /* Sidebar Menu */
        .sidebar-menu {
            list-style: none;
            padding: 15px 0;
            margin: 0;
        }

        /* Menu item styling */
        .sidebar-menu li {
            margin: 5px 0;
        }

        /* Link inside the menu */
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

        /* Hover state for menu links */
        .sidebar-menu a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        /* Icon styling within menu links */
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

        /* Button Styles*/
        /* Modern Button Styles for Bootstrap Compatibility */
        button.btn {
            background-color: #ff3000;
            appearance: none;
            /* Remove any default button styling */
            border: none;
            /* Remove border */
            outline: none;
            /* Remove outline on focus (customize focus styles instead) */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Modern sans-serif font */
            font-size: 1rem;
            /* Slightly larger font */
            font-weight: 600;
            /* Bold font weight for visibility */
            text-transform: uppercase;
            /* Uppercase text for a modern touch */
            letter-spacing: 1px;
            /* Slight letter-spacing for clarity */
            padding: 12px 24px;
            /* Adequate padding for comfort */
            border-radius: 6px;
            /* Rounded corners for a modern, soft look */
            cursor: pointer;
            /* Pointer cursor on hover */
            transition: all 0.3s ease;
            /* Smooth transition for hover effects */
            box-sizing: border-box;
            /* Ensures padding doesn't mess with the width */
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
            /* Subtle shadow for depth */
        }

        /* Hover Effects */
        button.btn:hover {
            background-color: #0056b3;
            /* Darker shade of blue on hover */
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4);
            /* Slightly more prominent shadow */
        }

        /* Focus Effects */
        button.btn:focus {
            outline: 2px solid #ffcc00;
            /* Yellow outline to indicate focus */
            outline-offset: 2px;
            /* Offset the outline a little */
        }

        /* Active Effects */
        button.btn:active {
            background-color: #004085;
            /* Even darker shade when clicked */
            box-shadow: 0 3px 6px rgba(0, 123, 255, 0.2);
            /* Lighter shadow when pressed */
        }

        /* Disabled Button */
        button.btn:disabled {
            background-color: #ccc;
            /* Light grey background */
            color: #666;
            /* Darker grey text */
            cursor: not-allowed;
            /* Not-allowed cursor */
            box-shadow: none;
            /* Remove shadow */
        }

        /* Bootstrap Color Classes Compatibility */
        button.btn-primary {
            background-color: #FF7700FF;
            /* Primary Blue */
            color: #fff;
        }

        button.btn-secondary {
            background-color: #6c757d;
            /* Secondary Grey */
            color: #fff;
        }

        button.btn-info {
            background-color: #17a2b8;
            /* Info Cyan */
            color: #fff;
        }

        button.btn-success {
            background-color: #28a745;
            /* Success Green */
            color: #fff;
        }

        button.btn-warn {
            background-color: #ff7000;
            /* Info Cyan */
            color: #fff;
        }


        /* Custom hover states for different button types */
        button.btn-primary:hover {
            background-color: #B90047FF;
        }

        button.btn-secondary:hover {
            background-color: #5a6268;
        }

        button.btn-info:hover {
            background-color: #138496;
        }

        .btn-danger {
            --bs-btn-color: #fff;
            --bs-btn-bg: #dc3545;
            --bs-btn-border-color: #dc3545;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #bb2d3b;
            --bs-btn-hover-border-color: #b02a37;
            --bs-btn-focus-shadow-rgb: 225, 83, 97;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #b02a37;
            --bs-btn-active-border-color: #a52834;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #dc3545;
            --bs-btn-disabled-border-color: #dc3545;
        }

        /* Add spacing between buttons if needed (e.g., for `.mr-2` Bootstrap utility class) */
        button+button {
            margin-left: 10px;
        }

        .rounded {
            border-radius: var(--bs-border-radius) !important;
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important;
        }

        .px-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important;
        }

        .w-auto {
            width: auto !important;
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
            /*padding: 25px;*/
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

        .dark-mode .search-container input {
            color: var(--text-light);
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
                display: flex !important;
            }
        }

        .mobile-visible {
            width: 100%;
            margin-top: 22px;
            margin-bottom: 20px;
            display: flex !important;
        }

        /* Hide .mobile-search-btn on mobile devices */
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
    </style>
</head>

<body>
    <div class="container">
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
        <main class="main-content">
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
                                            <tr>
                                                <th>Statistic</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total Tables</td>
                                                <td><?php echo count($schema); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Primary Tables</td>
                                                <td>projects, indicators, beneficiaries, evaluations</td>
                                            </tr>
                                            <tr>
                                                <td>Reference Tables</td>
                                                <td>locations, organizations, indicator_types, etc.</td>
                                            </tr>
                                            <tr>
                                                <td>System Tables</td>
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
                                    <tr>
                                        <th>Entity</th>
                                        <th>Description</th>
                                        <th>Related Tables</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projects</td>
                                        <td>Core entity storing all project information</td>
                                        <td>projects, project_indicators, project_beneficiaries</td>
                                    </tr>
                                    <tr>
                                        <td>Indicators</td>
                                        <td>Performance indicators and targets</td>
                                        <td>indicators, indicator_values, indicator_types</td>
                                    </tr>
                                    <tr>
                                        <td>Beneficiaries</td>
                                        <td>Beneficiary information and participation</td>
                                        <td>beneficiaries, beneficiary_projects, beneficiary_evaluations</td>
                                    </tr>
                                    <tr>
                                        <td>Evaluations</td>
                                        <td>Evaluation data and results</td>
                                        <td>evaluations, evaluation_indicators, evaluation_participants</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-4 mb-2">Table Relationships</h3>
                        <p>The database maintains referential integrity through foreign key relationships:</p>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Key Relationships</h3>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><strong>projects ↔ project_indicators:</strong> One-to-many (One project can have multiple indicators)</li>
                                    <li><strong>indicators ↔ indicator_values:</strong> One-to-many (One indicator can have multiple values over time)</li>
                                    <li><strong>projects ↔ project_beneficiaries:</strong> One-to-many (One project can have many beneficiaries)</li>
                                    <li><strong>beneficiaries ↔ beneficiary_evaluations:</strong> One-to-many (One beneficiary can participate in multiple evaluations)</li>
                                    <li><strong>evaluations ↔ evaluation_indicators:</strong> One-to-many (One evaluation can measure multiple indicators)</li>
                                </ul>
                            </div>
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

                        <div class="mt-4">
                            <h3>Key Entities and Relationships</h3>
                            <div class="table-responsive">
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Entity</th>
                                            <th>Description</th>
                                            <th>Relationships</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>projects</td>
                                            <td>Main table storing project information</td>
                                            <td>Related to indicators, beneficiaries and evaluations</td>
                                        </tr>
                                        <tr>
                                            <td>indicators</td>
                                            <td>Performance measurement indicators</td>
                                            <td>Related to projects and indicator values</td>
                                        </tr>
                                        <tr>
                                            <td>beneficiaries</td>
                                            <td>Beneficiary information</td>
                                            <td>Related to projects and evaluations</td>
                                        </tr>
                                        <tr>
                                            <td>evaluations</td>
                                            <td>Evaluation data collection</td>
                                            <td>Related to projects, indicators and beneficiaries</td>
                                        </tr>
                                        <tr>
                                            <td>users</td>
                                            <td>System users and administrators</td>
                                            <td>Related to roles and permissions</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Tables Documentation -->
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
                                        <?php if (!empty($tableData['comment'])): ?>
                                            <span class="badge badge-info" title="<?php echo htmlspecialchars($tableData['comment']); ?>">Description</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tabs">
                                        <div class="tab active" data-tab="structure">Structure</div>
                                        <div class="tab" data-tab="relationships">Relationships</div>
                                        <div class="tab" data-tab="sample-data">Sample Data</div>
                                        <?php if (!empty($tableData['comment'])): ?>
                                            <div class="tab" data-tab="description">Description</div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="tab-content active" id="structure-<?php echo $tableName; ?>">
                                        <div class="table-responsive">
                                            <table class="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Column</th>
                                                        <th>Type</th>
                                                        <th>Nullable</th>
                                                        <th>Default</th>
                                                        <th>Key</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tableData['columns'] as $column): ?>
                                                        <tr>
                                                            <td class="field-name"><?php echo $column['Field']; ?></td>
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
                                                            <td>
                                                                <?php
                                                                $desc = '';
                                                                if (strpos($column['Field'], 'id') !== false) {
                                                                    $desc = 'Identifier field';
                                                                } elseif (strpos($column['Field'], 'name') !== false) {
                                                                    $desc = 'Name or title field';
                                                                } elseif (strpos($column['Field'], 'date') !== false || strpos($column['Field'], 'created') !== false) {
                                                                    $desc = 'Date/time field';
                                                                } elseif (strpos($column['Field'], 'email') !== false) {
                                                                    $desc = 'Email address field';
                                                                } elseif (strpos($column['Field'], 'phone') !== false) {
                                                                    $desc = 'Phone number field';
                                                                }
                                                                echo $desc;
                                                                ?>
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
                                                    <thead>
                                                        <tr>
                                                            <th>Column</th>
                                                            <th>References</th>
                                                            <th>Relationship</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($tableData['foreign_keys'] as $fk): ?>
                                                            <tr>
                                                                <td class="field-name"><?php echo $fk['COLUMN_NAME']; ?></td>
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

                                        <?php
                                        // Find tables that reference this table
                                        $referencedBy = [];
                                        foreach ($schema as $otherTable => $otherData) {
                                            foreach ($otherData['foreign_keys'] as $fk) {
                                                if ($fk['REFERENCED_TABLE_NAME'] === $tableName) {
                                                    $referencedBy[] = [
                                                        'table' => $otherTable,
                                                        'column' => $fk['COLUMN_NAME'],
                                                        'ref_column' => $fk['REFERENCED_COLUMN_NAME']
                                                    ];
                                                }
                                            }
                                        }
                                        ?>

                                        <?php if (!empty($referencedBy)): ?>
                                            <h4 class="mt-4">Referenced By</h4>
                                            <div class="table-responsive">
                                                <table class="data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Table</th>
                                                            <th>Column</th>
                                                            <th>References</th>
                                                            <th>Relationship</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($referencedBy as $ref): ?>
                                                            <tr>
                                                                <td><?php echo $ref['table']; ?></td>
                                                                <td class="field-name"><?php echo $ref['column']; ?></td>
                                                                <td><?php echo $tableName; ?> (<?php echo $ref['ref_column']; ?>)</td>
                                                                <td>One <?php echo $tableName; ?> has many <?php echo $ref['table']; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="tab-content" id="sample-data-<?php echo $tableName; ?>">
                                        <?php $sampleData = getSampleData($pdo, $tableName, 5); ?>
                                        <?php if (!empty($sampleData)): ?>
                                            <div class="table-responsive">
                                                <table class="data-table sample-data-table">
                                                    <thead>
                                                        <tr>
                                                            <?php foreach (array_keys($sampleData[0]) as $column): ?>
                                                                <th><?php echo $column; ?></th>
                                                            <?php endforeach; ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($sampleData as $row): ?>
                                                            <tr>
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
                                            <p class="text-muted mt-2">Showing <?php echo count($sampleData); ?> sample records. Hover over cells to see full content.</p>
                                        <?php else: ?>
                                            <p class="text-muted">No sample data available for this table.</p>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (!empty($tableData['comment'])): ?>
                                        <div class="tab-content" id="description-<?php echo $tableName; ?>">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4>Table Description</h4>
                                                    <p><?php echo htmlspecialchars($tableData['comment']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
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
                        <p>This section provides practical SQL query examples for common operations with the database.</p>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="mb-0">Basic CRUD Operations</h3>
                            </div>
                            <div class="card-body">
                                <h4>Create (Insert)</h4>
                                <pre><code>-- Insert a new project
INSERT INTO projects (
    project_name, start_date, end_date, budget
) VALUES (
    'Community Health Initiative', '2023-06-01', '2024-05-31', 500000
);

-- Insert a new indicator
INSERT INTO indicators (
    indicator_name, indicator_type, target_value, unit
) VALUES (
    'Number of trained health workers', 'Output', 50, 'persons'
);</code></pre>

                                <h4 class="mt-4">Read (Select)</h4>
                                <pre><code>-- Get all active projects
SELECT * FROM projects
WHERE end_date > CURRENT_DATE
ORDER BY start_date;

-- Get beneficiaries with their project details
SELECT b.first_name, b.last_name, p.project_name, p.start_date
FROM beneficiaries b
JOIN project_beneficiaries pb ON b.beneficiary_id = pb.beneficiary_id
JOIN projects p ON pb.project_id = p.project_id
WHERE p.project_id = 5;</code></pre>

                                <h4 class="mt-4">Update</h4>
                                <pre><code>-- Update a project's end date
UPDATE projects
SET end_date = '2024-08-31'
WHERE project_id = 123;

-- Update indicator target
UPDATE indicators
SET target_value = 75
WHERE indicator_id = 10;</code></pre>

                                <h4 class="mt-4">Delete</h4>
                                <pre><code>-- Delete a beneficiary
DELETE FROM beneficiaries
WHERE beneficiary_id = 456;

-- Delete an evaluation (with cascade if configured)
DELETE FROM evaluations
WHERE evaluation_id = 20;</code></pre>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="mb-0">Advanced Queries</h3>
                            </div>
                            <div class="card-body">
                                <h4>Project Performance</h4>
                                <pre><code>-- Project progress against targets
SELECT 
    p.project_name,
    i.indicator_name,
    i.target_value,
    COALESCE(MAX(iv.value), 0) AS current_value,
    ROUND(COALESCE(MAX(iv.value), 0) * 100.0 / i.target_value, 2) AS progress_percent
FROM projects p
JOIN project_indicators pi ON p.project_id = pi.project_id
JOIN indicators i ON pi.indicator_id = i.indicator_id
LEFT JOIN indicator_values iv ON i.indicator_id = iv.indicator_id
GROUP BY p.project_name, i.indicator_name, i.target_value
ORDER BY progress_percent DESC;

-- Beneficiaries by location
SELECT 
    l.location_name,
    COUNT(DISTINCT b.beneficiary_id) AS beneficiary_count
FROM beneficiaries b
JOIN locations l ON b.location_id = l.location_id
GROUP BY l.location_name
ORDER BY beneficiary_count DESC;</code></pre>

                                <h4 class="mt-4">Evaluation Analysis</h4>
                                <pre><code>-- Evaluation results by indicator
SELECT 
    e.evaluation_name,
    i.indicator_name,
    AVG(ei.result_value) AS average_result,
    MIN(ei.result_value) AS min_result,
    MAX(ei.result_value) AS max_result
FROM evaluations e
JOIN evaluation_indicators ei ON e.evaluation_id = ei.evaluation_id
JOIN indicators i ON ei.indicator_id = i.indicator_id
GROUP BY e.evaluation_name, i.indicator_name;

-- Beneficiaries participating in multiple evaluations
SELECT 
    b.first_name, 
    b.last_name,
    COUNT(DISTINCT ep.evaluation_id) AS evaluations_attended
FROM beneficiaries b
JOIN evaluation_participants ep ON b.beneficiary_id = ep.beneficiary_id
GROUP BY b.first_name, b.last_name
HAVING COUNT(DISTINCT ep.evaluation_id) > 1
ORDER BY evaluations_attended DESC;</code></pre>
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
                                <h3 class="mb-0">Database Usage Guidelines</h3>
                            </div>
                            <div class="card-body">
                                <h4>General Guidelines</h4>
                                <ul>
                                    <li>Always use parameterized queries to prevent SQL injection</li>
                                    <li>Create appropriate indexes for frequently queried columns</li>
                                    <li>Regularly backup the database using pg_dump</li>
                                    <li>Use transactions for operations that modify multiple related tables</li>
                                    <li>Follow the established naming conventions for consistency</li>
                                </ul>

                                <h4 class="mt-4">Performance Tips</h4>
                                <ul>
                                    <li>Use EXPLAIN ANALYZE to optimize query performance</li>
                                    <li>Consider using materialized views for complex reports</li>
                                    <li>Use partial indexes for filtered queries</li>
                                    <li>Regularly analyze and vacuum the database</li>
                                </ul>

                                <h4 class="mt-4">Data Integrity</h4>
                                <ul>
                                    <li>Use foreign key constraints to maintain referential integrity</li>
                                    <li>Use CHECK constraints for domain integrity</li>
                                    <li>Use appropriate data types for each column</li>
                                    <li>Implement triggers for complex validation rules</li>
                                </ul>

                                <h4 class="mt-4">Security Considerations</h4>
                                <ul>
                                    <li>Follow the principle of least privilege for database users</li>
                                    <li>Encrypt sensitive data using pgcrypto</li>
                                    <li>Use SSL for database connections</li>
                                    <li>Regularly review and audit user permissions</li>
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

                // Remove active class from all tabs in this card
                parentCard.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));

                // Add active class to clicked tab
                this.classList.add('active');

                // Hide all tab contents in this card
                parentCard.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                });

                // Show the selected tab content
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

        // Table of contents navigation
        document.querySelectorAll('.sidebar-menu a').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 20,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        document.getElementById('sidebar').classList.remove('show');
                    }
                }
            });
        });

        // Search functionality
        function setupSearch(inputId, resultsId) {
            const searchInput = document.getElementById(inputId);
            const searchResults = document.getElementById(resultsId);

            if (!searchInput || !searchResults) return;

            // Create search index
            const searchIndex = [];

            // Index tables
            <?php foreach ($schema as $tableName => $tableData): ?>
                searchIndex.push({
                    type: 'Table',
                    name: '<?php echo $tableName; ?>',
                    id: 'table-<?php echo str_replace('_', '-', $tableName); ?>',
                    context: 'Database table',
                    columns: <?php echo json_encode(array_column($tableData['columns'], 'Field')); ?>
                });

                // Index columns
                <?php foreach ($tableData['columns'] as $column): ?>
                    searchIndex.push({
                        type: 'Column',
                        name: '<?php echo $column['Field']; ?>',
                        id: 'table-<?php echo str_replace('_', '-', $tableName); ?>',
                        context: 'Column in <?php echo $tableName; ?> table',
                        table: '<?php echo $tableName; ?>'
                    });
                <?php endforeach; ?>
            <?php endforeach; ?>

            // Index sections
            const sections = [{
                    type: 'Section',
                    name: 'Introduction',
                    id: 'introduction',
                    context: 'Documentation section'
                },
                {
                    type: 'Section',
                    name: 'Getting Started',
                    id: 'getting-started',
                    context: 'Documentation section'
                },
                {
                    type: 'Section',
                    name: 'ER Diagram',
                    id: 'erd',
                    context: 'Documentation section'
                },
                {
                    type: 'Section',
                    name: 'Sample Queries',
                    id: 'sample-queries',
                    context: 'Documentation section'
                },
                {
                    type: 'Section',
                    name: 'Best Practices',
                    id: 'best-practices',
                    context: 'Documentation section'
                }
            ];

            searchIndex.push(...sections);

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();

                if (searchTerm.length < 2) {
                    searchResults.classList.remove('show');
                    return;
                }

                const results = searchIndex.filter(item =>
                    item.name.toLowerCase().includes(searchTerm) ||
                    (item.context && item.context.toLowerCase().includes(searchTerm)) ||
                    (item.columns && item.columns.some(col => col.toLowerCase().includes(searchTerm)))
                );

                displayResults(results);
            });

            function displayResults(results) {
                searchResults.innerHTML = '';

                if (results.length === 0) {
                    searchResults.classList.add('show');
                    searchResults.innerHTML = '<div class="search-result-item">No results found</div>';
                    return;
                }

                results.slice(0, 10).forEach(result => {
                    const item = document.createElement('div');
                    item.className = 'search-result-item';

                    let html = `
                    <div>
                        <span class="result-type">${result.type}</span>
                        <span class="result-name">${result.name}</span>
                        <div class="result-context">${result.context}</div>
                `;

                    if (result.columns) {
                        const matchingColumns = result.columns.filter(col =>
                            col.toLowerCase().includes(searchInput.value.toLowerCase())
                        );

                        if (matchingColumns.length > 0) {
                            html += `<div class="result-context">Matching columns: ${matchingColumns.join(', ')}</div>`;
                        }
                    }

                    html += `</div>`;
                    item.innerHTML = html;

                    item.addEventListener('click', function() {
                        const targetElement = document.getElementById(result.id);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 20,
                                behavior: 'smooth'
                            });

                            // Highlight the target section
                            targetElement.style.animation = 'none';
                            void targetElement.offsetWidth; // Trigger reflow
                            targetElement.style.animation = 'fadeIn 0.3s ease-out forwards';

                            // Close search results
                            searchResults.classList.remove('show');
                            searchInput.value = '';

                            // Close mobile search if open
                            document.getElementById('mobileSearchContainer').classList.add('d-none');
                        }
                    });

                    searchResults.appendChild(item);
                });

                searchResults.classList.add('show');
            }

            // Close search results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.remove('show');
                }
            });
        }

        // Initialize search for both desktop and mobile
        setupSearch('searchInput', 'searchResults');
        setupSearch('mobileSearchInput', 'mobileSearchResults');

        // Theme toggle functionality
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

            function generateStyledNodes(rawNodes, theme) {
                return rawNodes.map(node => {
                    const bgColor = getRandomColorFromTheme(theme);
                    const borderColor = getRandomColorFromTheme(theme);
                    return {
                        ...node,
                        color: {
                            background: bgColor,
                            border: borderColor,
                            highlight: {
                                background: borderColor,
                                border: bgColor
                            },
                            hover: {
                                background: borderColor,
                                border: bgColor
                            }
                        },
                        font: {
                            color: theme === 'dark' ? '#ffffff' : '#000000'
                        }
                    };
                });
            }

            function generateStyledEdges(rawEdges, theme) {
                return rawEdges.map(edge => ({
                    ...edge,
                    color: {
                        color: getRandomColorFromTheme(theme),
                        highlight: getRandomColorFromTheme(theme),
                        hover: getRandomColorFromTheme(theme),
                        inherit: false
                    }
                }));
            }

            const rawNodes = <?php echo json_encode($erdData['nodes']); ?>;
            const rawEdges = <?php echo json_encode($erdData['edges']); ?>;

            let nodes = new vis.DataSet(generateStyledNodes(rawNodes, currentTheme));
            let edges = new vis.DataSet(generateStyledEdges(rawEdges, currentTheme));

            const data = {
                nodes,
                edges
            };

            const options = {
                layout: {
                    improvedLayout: true,
                    hierarchical: {
                        enabled: false,
                        direction: 'UD',
                        sortMethod: 'directed'
                    }
                },
                physics: {
                    enabled: true,
                    solver: 'forceAtlas2Based',
                    forceAtlas2Based: {
                        theta: 0.5,
                        gravitationalConstant: -50,
                        centralGravity: 0.01,
                        springConstant: 0.08,
                        springLength: 100,
                        damping: 0.4,
                        avoidOverlap: 0
                    },
                    maxVelocity: 50,
                    minVelocity: 0.1,
                    stabilization: {
                        enabled: true,
                        iterations: 1000,
                        updateInterval: 100,
                        onlyDynamicEdges: false,
                        fit: true
                    },
                    timestep: 0.5,
                    adaptiveTimestep: true,
                    wind: {
                        x: 0,
                        y: 0
                    }
                },
                nodes: {
                    shape: 'box',
                    margin: 10,
                    font: {
                        size: 14,
                        face: 'Roboto',
                        multi: true
                    },
                    borderWidth: 1,
                    shadow: true
                },
                edges: {
                    smooth: true,
                    arrows: {
                        to: {
                            enabled: true,
                            scaleFactor: 0.6
                        }
                    },
                    font: {
                        size: 11,
                        face: 'Roboto',
                        align: 'middle'
                    },
                    width: 1
                },
                interaction: {
                    hover: true,
                    tooltipDelay: 300,
                    hideEdgesOnDrag: false
                }
            };

            const network = new vis.Network(container, data, options);

            network.on("hoverNode", function(params) {
                const node = nodes.get(params.node);
                const tooltip = document.createElement('div');
                tooltip.className = 'vis-tooltip';
                let html = `<strong>${node.label}</strong>`;
                if (node.columns) {
                    html += '<ul>' + node.columns.map(col => `<li>${col}</li>`).join('') + '</ul>';
                }

                tooltip.innerHTML = html;
                tooltip.style.position = 'absolute';
                tooltip.style.background = '#333';
                tooltip.style.color = '#fff';
                tooltip.style.padding = '10px';
                tooltip.style.borderRadius = '6px';
                tooltip.style.zIndex = 9999;

                document.body.appendChild(tooltip);

                network.on('mousemove', function(event) {
                    tooltip.style.left = event.pointer.DOM.x + 10 + 'px';
                    tooltip.style.top = event.pointer.DOM.y + 10 + 'px';
                });
            });

            network.on("blurNode", function() {
                const tooltip = document.querySelector('.vis-tooltip');
                if (tooltip) tooltip.remove();
            });

            network.once("stabilizationIterationsDone", function() {
                network.fit({
                    animation: {
                        duration: 800
                    }
                });
            });

            document.getElementById('fitDiagram').addEventListener('click', () => {
                network.fit({
                    animation: true
                });
            });

            document.getElementById('centerDiagram').addEventListener('click', () => {
                network.focus(0, {
                    scale: 1,
                    animation: true
                });
            });

            let physicsEnabled = false;
            document.getElementById('togglePhysics').addEventListener('click', function() {
                physicsEnabled = !physicsEnabled;
                network.setOptions({
                    physics: {
                        enabled: physicsEnabled
                    }
                });
                this.textContent = physicsEnabled ? 'Disable Physics' : 'Enable Physics';
            });

            // Export as PNG
            document.getElementById('exportImage').addEventListener('click', function() {
                html2canvas(container).then(canvas => {
                    const link = document.createElement('a');
                    link.href = canvas.toDataURL('image/png');
                    link.download = 'Lifebox_ERD_Diagram.png';
                    link.click();
                });
            });

            // Export as PDF
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

            // Theme switcher
            document.getElementById('themeSelector').addEventListener('change', function() {
                currentTheme = this.value;
                nodes.clear();
                edges.clear();
                nodes.add(generateStyledNodes(rawNodes, currentTheme));
                edges.add(generateStyledEdges(rawEdges, currentTheme));
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
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (window.scrollY >= sectionTop - 200 && window.scrollY < sectionTop + sectionHeight - 200) {
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
    </script>
</body>

</html>