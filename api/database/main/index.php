<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'lifebox_mesystem');
define('DB_USER', 'postgres');
define('DB_PASS', 'mikeintosh');
define('BACKUP_DIR', 'backup');
define('ITEMS_PER_PAGE', 10);

// Create backup directory if it doesn't exist
if (!file_exists(BACKUP_DIR)) {
    mkdir(BACKUP_DIR, 0755, true);
}

// Handle actions
$action = $_POST['action'] ?? $_GET['action'] ?? '';
$message = '';
$error = '';
$logContent = '';
$progress = 0;
$operation = '';
$isProgressView = in_array($action, ['backup_progress', 'restore_progress']);

// Database connection function
function connectDB()
{
    $connString = "host=" . DB_HOST . " port=" . DB_PORT . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASS;
    $conn = pg_connect($connString);
    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    }
    return $conn;
}

// Get total table count
function getTableCount($conn)
{
    $result = pg_query($conn, "SELECT COUNT(table_name) AS total_tables FROM information_schema.tables WHERE table_schema = 'public' AND table_type = 'BASE TABLE'");
    if (!$result) {
        return 0;
    }
    $row = pg_fetch_assoc($result);
    return intval($row['total_tables']);
}

// Handle backup action
if ($action === 'backup') {
    // Redirect to progress page
    header("Location: index.php?action=backup_progress");
    exit;
}

// Handle backup progress
if ($action === 'backup_progress') {
    $operation = 'backup';
    $backupName = 'lifeboxme_db_bak_' . date('Y-m-d_H-i-s') . '.sql';
    $backupPath = BACKUP_DIR . '/' . $backupName;
    $logFile = BACKUP_DIR . '/backup_log_' . date('YmdHis') . '.txt';
    $logContent = "Starting backup operation at " . date('Y-m-d H:i:s') . "\n";
    $logContent .= "Database: " . DB_NAME . "\n";
    $logContent .= "Backup file: " . $backupName . "\n\n";

    $backupSuccess = false;
    $conn = connectDB();

    try {
        $totalTables = getTableCount($conn);
        $logContent .= "Found $totalTables tables in database\n\n";

        // Begin building SQL dump
        $dump = "";

        // Add header
        $dump .= "-- PostgreSQL database dump\n";
        $dump .= "-- Generated at " . date('Y-m-d H:i:s') . "\n";
        $dump .= "-- Database: " . DB_NAME . "\n\n";

        // Set search path
        $dump .= "SET search_path = public;\n\n";

        // Drop all existing connections
        $logContent .= "Dropping existing connections...\n";
        pg_query($conn, "SELECT pg_terminate_backend(pg_stat_activity.pid) FROM pg_stat_activity WHERE pg_stat_activity.datname = '" . DB_NAME . "' AND pid <> pg_backend_pid();");

        // Add extensions
        $logContent .= "Backing up extensions...\n";
        $result = pg_query($conn, "SELECT extname FROM pg_extension");
        while ($row = pg_fetch_assoc($result)) {
            $dump .= "CREATE EXTENSION IF NOT EXISTS \"{$row['extname']}\";\n";
        }
        // Ensure uuid-ossp is included
        $dump .= "CREATE EXTENSION IF NOT EXISTS \"uuid-ossp\";\n\n";

        // Add custom types
        $logContent .= "Backing up custom types...\n";
        $result = pg_query($conn, "SELECT t.typname, t.typbasetype, t.typtype, 
                                 pg_catalog.format_type(t.typbasetype, t.typtypmod) as basetype 
                                 FROM pg_catalog.pg_type t 
                                 JOIN pg_catalog.pg_namespace n ON n.oid = t.typnamespace 
                                 WHERE (t.typrelid = 0 OR 
                                       (SELECT c.relkind = 'c' FROM pg_catalog.pg_class c WHERE c.oid = t.typrelid)) 
                                 AND NOT EXISTS(SELECT 1 FROM pg_catalog.pg_type el WHERE el.oid = t.typelem AND el.typarray = t.oid)
                                 AND n.nspname = 'public'");
        while ($row = pg_fetch_assoc($result)) {
            if ($row['typtype'] === 'd') { // Domain type
                $dump .= "CREATE DOMAIN \"{$row['typname']}\" AS {$row['basetype']};\n";
            } elseif ($row['typtype'] === 'e') { // Enum type
                $dump .= "CREATE TYPE \"{$row['typname']}\" AS ENUM (";
                $enum_result = pg_query($conn, "SELECT enumlabel FROM pg_enum WHERE enumtypid = 
                                              (SELECT oid FROM pg_type WHERE typname = '{$row['typname']}') 
                                              ORDER BY enumsortorder");
                $enum_values = [];
                while ($enum_row = pg_fetch_assoc($enum_result)) {
                    $enum_values[] = "'" . pg_escape_string($conn, $enum_row['enumlabel']) . "'";
                }
                $dump .= implode(", ", $enum_values) . ");\n";
            }
        }
        $dump .= "\n";

        // Get all tables in the database
        $result = pg_query($conn, "SELECT table_name 
                          FROM information_schema.tables 
                          WHERE table_schema = 'public' 
                          AND table_type = 'BASE TABLE'
                          ORDER BY table_name");
        $tables = [];
        while ($row = pg_fetch_assoc($result)) {
            $tables[] = $row['table_name'];
        }

        // Add DROP statements for all objects
        foreach ($tables as $table) {
            $dump .= "DROP TABLE IF EXISTS \"$table\" CASCADE;\n";
        }
        $dump .= "\n";

        // Add CREATE TABLE statements and data
        $currentTable = 0;
        foreach ($tables as $table) {
            $currentTable++;
            $progress = intval(($currentTable / $totalTables) * 80);
            $logContent .= "[$currentTable/$totalTables] Backing up table: $table\n";

            // Get table structure
            $result = pg_query($conn, "SELECT column_name, data_type, udt_name, character_maximum_length, 
                                      is_nullable, column_default 
                                      FROM information_schema.columns 
                                      WHERE table_name = '$table' 
                                      ORDER BY ordinal_position");
            if (!$result) {
                throw new Exception("Failed to get table structure for $table: " . pg_last_error($conn));
            }

            $columns = [];
            while ($row = pg_fetch_assoc($result)) {
                $columns[] = $row;
            }

            // Build CREATE TABLE statement
            $dump .= "CREATE TABLE \"$table\" (\n";
            $columnDefs = [];
            foreach ($columns as $col) {
                $colDef = "  \"{$col['column_name']}\" ";

                // Handle custom types
                if ($col['data_type'] === 'USER-DEFINED') {
                    $colDef .= $col['udt_name'];
                } else {
                    $colDef .= $col['data_type'];
                }

                // Add length for character types
                if ($col['character_maximum_length']) {
                    $colDef .= "({$col['character_maximum_length']})";
                }

                // Add NOT NULL constraint
                if ($col['is_nullable'] === 'NO') {
                    $colDef .= " NOT NULL";
                }

                // Add default value
                if ($col['column_default']) {
                    $colDef .= " DEFAULT {$col['column_default']}";
                }

                $columnDefs[] = $colDef;
            }

            // Add primary key
            $pk_result = pg_query($conn, "SELECT kcu.column_name 
                                         FROM information_schema.table_constraints tc 
                                         JOIN information_schema.key_column_usage kcu 
                                         ON tc.constraint_name = kcu.constraint_name 
                                         WHERE tc.table_name = '$table' 
                                         AND tc.constraint_type = 'PRIMARY KEY'");
            $pk_columns = [];
            while ($pk_row = pg_fetch_assoc($pk_result)) {
                $pk_columns[] = "\"{$pk_row['column_name']}\"";
            }
            if (!empty($pk_columns)) {
                $columnDefs[] = "PRIMARY KEY (" . implode(", ", $pk_columns) . ")";
            }

            $dump .= implode(",\n", $columnDefs) . "\n);\n\n";

            // Get table data
            $result = pg_query($conn, "SELECT COUNT(*) AS total_rows FROM \"$table\"");
            $rowCount = pg_fetch_result($result, 0, 'total_rows');
            $logContent .= "  Rows to backup: $rowCount\n";

            $result = pg_query($conn, "SELECT * FROM \"$table\"");
            if (!$result) {
                throw new Exception("Failed to get data for $table: " . pg_last_error($conn));
            }

            // Add INSERT statements
            $currentRow = 0;
            while ($row = pg_fetch_assoc($result)) {
                $currentRow++;
                $cols = [];
                $vals = [];
                foreach ($row as $col => $val) {
                    $cols[] = "\"$col\"";
                    $vals[] = $val === null ? 'NULL' : "'" . pg_escape_string($conn, $val) . "'";
                }
                $dump .= "INSERT INTO \"$table\" (" . implode(', ', $cols) . ") VALUES (" . implode(', ', $vals) . ");\n";

                // Update progress every 100 rows
                if ($currentRow % 100 === 0) {
                    $rowProgress = min(5, intval(($currentRow / $rowCount) * 5)); // Max 5% per table
                    $progress = intval(($currentTable / $totalTables) * 80) + $rowProgress;
                }
            }
            $dump .= "\n";

            // Write intermediate progress to log file
            file_put_contents($logFile, $logContent);
        }

        $progress = 85;
        $logContent .= "\nBacking up foreign keys...\n";

        // Add foreign key constraints
        foreach ($tables as $table) {
            $result = pg_query($conn, "SELECT tc.constraint_name, 
                                      kcu.column_name, 
                                      ccu.table_name AS foreign_table_name,
                                      ccu.column_name AS foreign_column_name 
                                      FROM information_schema.table_constraints AS tc 
                                      JOIN information_schema.key_column_usage AS kcu 
                                      ON tc.constraint_name = kcu.constraint_name 
                                      JOIN information_schema.constraint_column_usage AS ccu 
                                      ON ccu.constraint_name = tc.constraint_name 
                                      WHERE tc.table_name = '$table' 
                                      AND tc.constraint_type = 'FOREIGN KEY'");
            while ($row = pg_fetch_assoc($result)) {
                $dump .= "ALTER TABLE \"$table\" ADD CONSTRAINT \"{$row['constraint_name']}\" " .
                    "FOREIGN KEY (\"{$row['column_name']}\") " .
                    "REFERENCES \"{$row['foreign_table_name']}\" (\"{$row['foreign_column_name']}\");\n";
            }
        }
        $dump .= "\n";

        $progress = 90;
        $logContent .= "Backing up indexes...\n";

        // Add indexes
        foreach ($tables as $table) {
            $result = pg_query($conn, "SELECT indexname, indexdef 
                                      FROM pg_indexes 
                                      WHERE tablename = '$table' 
                                      AND indexname NOT LIKE '%pkey'");
            while ($row = pg_fetch_assoc($result)) {
                $dump .= $row['indexdef'] . ";\n";
            }
        }
        $dump .= "\n";

        $progress = 92;
        $logContent .= "Backing up functions...\n";

        // Add functions
        $result = pg_query($conn, "SELECT proname, pg_get_functiondef(p.oid) AS functiondef 
                                  FROM pg_proc p 
                                  JOIN pg_namespace n ON p.pronamespace = n.oid 
                                  WHERE n.nspname = 'public'");
        while ($row = pg_fetch_assoc($result)) {
            // Ensure proper formatting of function definitions
            $functionDef = $row['functiondef'];
            if (strpos($functionDef, 'CREATE OR REPLACE FUNCTION') === false) {
                $functionDef = "CREATE OR REPLACE FUNCTION " . $functionDef;
            }
            $dump .= $functionDef . ";\n\n";
        }

        $progress = 94;
        $logContent .= "Backing up views...\n";

        // Add views
        $result = pg_query($conn, "SELECT table_name, view_definition 
                                  FROM information_schema.views 
                                  WHERE table_schema = 'public'");
        while ($row = pg_fetch_assoc($result)) {
            $dump .= "CREATE OR REPLACE VIEW \"{$row['table_name']}\" AS {$row['view_definition']};\n\n";
        }

        $progress = 96;
        $logContent .= "Backing up triggers...\n";

        // Add triggers
        $result = pg_query($conn, "SELECT tgname, pg_get_triggerdef(t.oid) AS triggerdef 
                                  FROM pg_trigger t 
                                  JOIN pg_class c ON t.tgrelid = c.oid 
                                  JOIN pg_namespace n ON c.relnamespace = n.oid 
                                  WHERE n.nspname = 'public' 
                                  AND NOT t.tgisinternal");
        while ($row = pg_fetch_assoc($result)) {
            $dump .= $row['triggerdef'] . ";\n\n";
        }

        $progress = 98;
        $logContent .= "Backing up sequences...\n";

        // Add sequences
        $result = pg_query($conn, "SELECT sequence_name, data_type, start_value, increment 
                                  FROM information_schema.sequences 
                                  WHERE sequence_schema = 'public'");

        if (!$result) {
            throw new Exception("Failed to get sequences: " . pg_last_error($conn));
        }

        while ($row = pg_fetch_assoc($result)) {
            $dump .= "CREATE SEQUENCE \"{$row['sequence_name']}\" 
                     AS {$row['data_type']}
                     START WITH {$row['start_value']}
                     INCREMENT BY {$row['increment']};\n\n";
        }

        // Write to file
        if (file_put_contents($backupPath, $dump) !== false) {
            $progress = 100;
            $logContent .= "Backup completed successfully! File: $backupName\n";
            $logContent .= "Total size: " . formatSize(filesize($backupPath)) . "\n";
            $backupSuccess = true;
            $message = "Backup created successfully: " . $backupName;
        } else {
            throw new Exception("Failed to write backup file. Check directory permissions.");
        }

        pg_close($conn);
    } catch (Exception $e) {
        $progress = 100;
        $logContent .= "Backup failed: " . $e->getMessage() . "\n";
        $error = "Backup failed: " . $e->getMessage();
        if (file_exists($backupPath)) {
            unlink($backupPath);
        }
    }

    // Save final log
    file_put_contents($logFile, $logContent);
}

// Handle restore action
if ($action === 'restore') {
    if (isset($_POST['backup_file'])) {
        // Redirect to progress page
        header("Location: index.php?action=restore_progress&file=" . urlencode($_POST['backup_file']));
        exit;
    } else {
        $error = "No backup file selected";
    }
}

// Handle restore progress
if ($action === 'restore_progress' && isset($_GET['file'])) {
    $operation = 'restore';
    $backupFile = $_GET['file'];
    $backupPath = BACKUP_DIR . '/' . $backupFile;
    $logFile = BACKUP_DIR . '/restore_log_' . date('YmdHis') . '.txt';
    $logContent = "Starting restore operation at " . date('Y-m-d H:i:s') . "\n";
    $logContent .= "Database: " . DB_NAME . "\n";
    $logContent .= "Restoring from: " . $backupFile . "\n\n";

    if (file_exists($backupPath)) {
        $restoreSuccess = false;
        $conn = null;

        try {
            $logContent .= "Reading backup file...\n";
            $backupContent = file_get_contents($backupPath);
            if ($backupContent === false) {
                throw new Exception("Failed to read backup file");
            }

            // Improved SQL statement parser
            $statements = [];
            $current = '';
            $inString = false;
            $inDollarQuote = false;
            $dollarTag = '';
            $escapeNext = false;
            $len = strlen($backupContent);

            for ($i = 0; $i < $len; $i++) {
                $char = $backupContent[$i];
                
                // Handle dollar-quoted strings
                if (!$inString && $char === '$') {
                    // Check if we're at the start of a dollar quote
                    $potentialTag = '';
                    $j = $i + 1;
                    while ($j < $len && ctype_alpha($backupContent[$j])) {
                        $potentialTag .= $backupContent[$j];
                        $j++;
                    }
                    
                    if ($j < $len && $backupContent[$j] === '$') {
                        if ($inDollarQuote && $potentialTag === $dollarTag) {
                            // End of dollar quote
                            $current .= substr($backupContent, $i, $j - $i + 1);
                            $i = $j;
                            $inDollarQuote = false;
                            $dollarTag = '';
                        } elseif (!$inDollarQuote) {
                            // Start of dollar quote
                            $current .= substr($backupContent, $i, $j - $i + 1);
                            $i = $j;
                            $inDollarQuote = true;
                            $dollarTag = $potentialTag;
                        } else {
                            $current .= $char;
                        }
                        continue;
                    }
                }
                
                // Handle regular strings
                if ($char === "'" && !$inDollarQuote && !$escapeNext) {
                    $inString = !$inString;
                }
                
                // Handle escape sequences
                if ($char === "\\" && $inString) {
                    $escapeNext = !$escapeNext;
                } else {
                    $escapeNext = false;
                }
                
                $current .= $char;
                
                // Detect statement boundaries
                if (!$inString && !$inDollarQuote && $char === ';') {
                    $statements[] = trim($current);
                    $current = '';
                    // Skip trailing whitespace/newlines
                    while ($i + 1 < $len && ctype_space($backupContent[$i + 1])) {
                        $i++;
                    }
                }
            }

            // Add final statement if not empty
            if (!empty(trim($current))) {
                $statements[] = trim($current);
            }

            $totalStatements = count($statements);
            $logContent .= "Total SQL statements to execute: $totalStatements\n\n";

            $conn = connectDB();

            // Terminate all connections
            $logContent .= "Terminating existing connections...\n";
            pg_query($conn, "SELECT pg_terminate_backend(pg_stat_activity.pid) FROM pg_stat_activity WHERE pg_stat_activity.datname = '" . DB_NAME . "' AND pid <> pg_backend_pid();");

            // Drop all objects in public schema
            $logContent .= "Dropping existing schema...\n";
            pg_query($conn, "DROP SCHEMA public CASCADE;");
            pg_query($conn, "CREATE SCHEMA public;");
            pg_query($conn, "GRANT ALL ON SCHEMA public TO postgres;");
            pg_query($conn, "GRANT ALL ON SCHEMA public TO public;");

            // Create extensions first
            $logContent .= "Creating extensions...\n";
            pg_query($conn, "CREATE EXTENSION IF NOT EXISTS \"uuid-ossp\";");

            // Execute statements in batches with error handling
            $currentStatement = 0;
            $batchSize = 10;
            $batch = [];
            
            foreach ($statements as $statement) {
                $currentStatement++;
                $statement = trim($statement);
                if (empty($statement)) continue;

                // Skip comments
                if (strpos($statement, '--') === 0) continue;

                $batch[] = $statement;
                
                // Execute in batches or if it's the last statement
                if (count($batch) >= $batchSize || $currentStatement == $totalStatements) {
                    $progress = 10 + intval(($currentStatement / $totalStatements) * 85);
                    
                    // Log every 10 statements
                    if ($currentStatement % 10 === 0) {
                        $logContent .= "Executing statement $currentStatement/$totalStatements\n";
                        file_put_contents($logFile, $logContent);
                    }
                    
                    // Execute each statement in the batch
                    foreach ($batch as $stmt) {
                        $result = @pg_query($conn, $stmt);
                        if (!$result) {
                            $error = pg_last_error($conn);
                            // Log non-critical errors but continue
                            if (!preg_match('/(relation .* does not exist|already exists|type .* does not exist)/i', $error)) {
                                $logContent .= "WARNING: $error\n";
                            }
                        }
                    }
                    
                    $batch = []; // Reset batch
                }
            }

            $progress = 98;
            $logContent .= "\nRunning post-restore checks...\n";

            // Verify restore
            $tableCount = getTableCount($conn);
            $logContent .= "Found $tableCount tables after restore\n";

            if ($tableCount > 0) {
                $progress = 100;
                $logContent .= "Restore completed successfully!\n";
                $restoreSuccess = true;
                $message = "Database restored successfully from: " . $backupFile;
            } else {
                throw new Exception("Restore failed - no tables found in database");
            }

            pg_close($conn);
        } catch (Exception $e) {
            $progress = 100;
            $logContent .= "Restore failed: " . $e->getMessage() . "\n";
            $error = "Restore failed: " . $e->getMessage();
            if ($conn) {
                pg_close($conn);
            }
        }

        // Save final log
        file_put_contents($logFile, $logContent);
    } else {
        $error = "Backup file not found: " . $backupFile;
    }
}

// Handle delete action
if ($action === 'delete' && isset($_POST['backup_files'])) {
    $deletedCount = 0;
    foreach ($_POST['backup_files'] as $backupFile) {
        $backupPath = BACKUP_DIR . '/' . $backupFile;
        if (file_exists($backupPath)) {
            if (unlink($backupPath)) {
                $deletedCount++;
            }
        }
    }
    if ($deletedCount > 0) {
        $message = "Deleted $deletedCount backup file(s)";
    } else {
        $error = "No files were deleted";
    }
}

// Handle delete all action
if ($action === 'delete_all') {
    $files = glob(BACKUP_DIR . '/*.sql');
    $deletedCount = 0;
    foreach ($files as $file) {
        if (is_file($file)) {
            if (unlink($file)) {
                $deletedCount++;
            }
        }
    }
    if ($deletedCount > 0) {
        $message = "Deleted all $deletedCount backup files";
    } else {
        $error = "No backup files found to delete";
    }
}

// Handle upload action
if ($action === 'upload' && isset($_FILES['backup_file'])) {
    $uploadedFile = $_FILES['backup_file'];
    if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
        $tempName = $uploadedFile['tmp_name'];
        $fileName = basename($uploadedFile['name']);
        $targetPath = BACKUP_DIR . '/' . $fileName;

        // Validate file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = ['sql', 'backup', 'dump', 'pgdump'];
        if (in_array($fileExt, $allowedExtensions)) {
            if (move_uploaded_file($tempName, $targetPath)) {
                $message = "File uploaded successfully: " . $fileName;
            } else {
                $error = "Failed to move uploaded file. Check directory permissions.";
            }
        } else {
            $error = "Invalid file type. Allowed extensions: " . implode(', ', $allowedExtensions);
        }
    } else {
        $uploadErrors = [
            UPLOAD_ERR_INI_SIZE => 'File exceeds upload_max_filesize directive',
            UPLOAD_ERR_FORM_SIZE => 'File exceeds MAX_FILE_SIZE directive',
            UPLOAD_ERR_PARTIAL => 'File was only partially uploaded',
            UPLOAD_ERR_NO_FILE => 'No file was uploaded',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
            UPLOAD_ERR_EXTENSION => 'File upload stopped by extension'
        ];
        $error = "Upload failed: " . ($uploadErrors[$uploadedFile['error']] ?? 'Unknown error');
    }
}

// Get list of backup files
$backupFiles = glob(BACKUP_DIR . '/*.{sql,backup,dump,pgdump}', GLOB_BRACE);
rsort($backupFiles); // Sort by newest first

// Pagination
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$totalFiles = count($backupFiles);
$totalPages = ceil($totalFiles / ITEMS_PER_PAGE);
$offset = ($page - 1) * ITEMS_PER_PAGE;
$paginatedFiles = array_slice($backupFiles, $offset, ITEMS_PER_PAGE);

// Function to format file size
function formatSize($bytes)
{
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox Main DB Backup & Restore Tool</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: #f5f5f5;
        }

        main {
            flex: 1 0 auto;
            padding: 20px 0;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn {
            margin: 5px;
        }

        .backup-item {
            border-left: 4px solid #26a69a;
            padding: 10px;
            margin: 5px 0;
            background-color: white;
            border-radius: 4px;
        }

        .pagination li.active {
            background-color: #26a69a;
        }

        .file-field input[type="file"] {
            width: 0;
            height: 0;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .file-field .btn {
            float: left;
            height: 3rem;
            line-height: 3rem;
        }

        .file-field .file-path-wrapper {
            padding-left: 10px;
            overflow: hidden;
        }

        .toast {
            border-radius: 4px;
        }

        .system-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .tab-content {
            padding: 20px 0;
        }

        .progress-container {
            margin: 20px 0;
            background: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-bar {
            height: 25px;
            background: #26a69a;
            text-align: center;
            color: white;
            line-height: 25px;
            transition: width 0.3s;
        }

        .log-container {
            height: 400px;
            overflow-y: auto;
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 15px;
            font-family: monospace;
            border-radius: 4px;
            margin: 20px 0;
            white-space: pre-wrap;
        }

        .log-entry {
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .log-time {
            color: #6a9955;
        }

        .log-message {
            color: #d4d4d4;
        }

        .log-error {
            color: #f48771;
        }

        .log-warning {
            color: #d7ba7d;
        }

        .log-success {
            color: #4ec9b0;
        }

        .operation-status {
            margin: 15px 0;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }

        .status-processing {
            background-color: #bbdefb;
            color: #0d47a1;
        }

        .status-success {
            background-color: #c8e6c9;
            color: #1b5e20;
        }

        .status-error {
            background-color: #ffcdd2;
            color: #b71c1c;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <!-- Progress View (for backup/restore operations) -->
            <?php if ($isProgressView): ?>
                <div class="row">
                    <div class="col s12">
                        <h4 class="teal-text text-darken-2">
                            <?php echo $operation === 'backup' ? 'Database Backup in Progress' : 'Database Restore in Progress'; ?>
                        </h4>

                        <div class="operation-status status-processing">
                            <i class="material-icons left">hourglass_full</i>
                            Operation is running...
                        </div>

                        <div class="progress-container">
                            <div class="progress-bar" id="progress-bar" style="width: <?php echo $progress; ?>%;">
                                <?php echo $progress; ?>%
                            </div>
                        </div>

                        <h5>Operation Log</h5>
                        <div class="log-container" id="log-container">
                            <?php
                            // Format log content for display
                            $logLines = explode("\n", $logContent);
                            foreach ($logLines as $line) {
                                $lineClass = 'log-message';
                                if (stripos($line, 'error') !== false || stripos($line, 'fail') !== false) {
                                    $lineClass = 'log-error';
                                } elseif (stripos($line, 'warning') !== false) {
                                    $lineClass = 'log-warning';
                                } elseif (stripos($line, 'success') !== false) {
                                    $lineClass = 'log-success';
                                }

                                // Extract timestamp if present
                                $timestamp = '';
                                if (preg_match('/^(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}) - (.*)$/', $line, $matches)) {
                                    $timestamp = $matches[1];
                                    $message = $matches[2];
                                    echo '<div class="log-entry"><span class="log-time">[' . $timestamp . ']</span> <span class="' . $lineClass . '">' . $message . '</span></div>';
                                } else {
                                    echo '<div class="log-entry"><span class="' . $lineClass . '">' . $line . '</span></div>';
                                }
                            }
                            ?>
                        </div>

                        <div class="center-align" style="margin-top: 20px;">
                            <?php if ($progress < 100): ?>
                                <div class="preloader-wrapper big active">
                                    <div class="spinner-layer spinner-teal-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>Please wait, this may take several minutes...</p>
                                <script>
                                    // Auto-refresh every 5 seconds to update progress
                                    setTimeout(function() {
                                        window.location.reload();
                                    }, 5000);
                                </script>
                            <?php else: ?>
                                <?php if (empty($error)): ?>
                                    <div class="operation-status status-success">
                                        <i class="material-icons left">check_circle</i>
                                        Operation completed successfully!
                                    </div>
                                <?php else: ?>
                                    <div class="operation-status status-error">
                                        <i class="material-icons left">error</i>
                                        Operation failed!
                                    </div>
                                <?php endif; ?>

                                <a href="index.php" class="btn waves-effect waves-light teal">
                                    <i class="material-icons left">arrow_back</i> Return to Dashboard
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Main Dashboard View -->
            <?php else: ?>
                <div class="row">
                    <div class="col s12">
                        <h4 class="teal-text text-darken-2">Lifebox Main DB Backup & Restore</h4>
                        <p class="grey-text">Database: <?php echo DB_NAME; ?></p>
                    </div>
                </div>

                <!-- System Information -->
                <div class="row system-info">
                    <div class="col s12">
                        <h5>System Information</h5>
                        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
                        <p><strong>PostgreSQL Extension:</strong> <?php echo extension_loaded('pgsql') ? 'Loaded' : 'Not Loaded'; ?></p>
                        <p><strong>Backup Directory:</strong> <?php echo realpath(BACKUP_DIR); ?> (<?php echo is_writable(BACKUP_DIR) ? 'Writable' : 'Not Writable'; ?>)</p>
                        <p><strong>Available Disk Space:</strong> <?php echo formatSize(disk_free_space(BACKUP_DIR)); ?></p>

                        <?php
                        $conn = @connectDB();
                        if ($conn) {
                            $tableCount = getTableCount($conn);
                            echo "<p><strong>Database Tables:</strong> $tableCount</p>";
                            pg_close($conn);
                        }
                        ?>
                    </div>
                </div>

                <!-- Messages -->
                <?php if ($message): ?>
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel teal lighten-2 white-text">
                                <?php echo $message; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($error): ?>
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel red lighten-2 white-text">
                                <?php echo $error; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Action Cards -->
                <div class="row">
                    <!-- Backup Card -->
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title teal-text">Create Backup</span>
                                <p>Create a new backup of the current database state.</p>
                                <p>Backup includes all tables, views, functions, triggers, and sequences.</p>
                            </div>
                            <div class="card-action">
                                <form method="post" action="index.php">
                                    <input type="hidden" name="action" value="backup">
                                    <button type="submit" class="btn waves-effect waves-light teal">
                                        <i class="material-icons left">backup</i>Create Backup
                                    </button>
                                </form>
                                <button class="btn waves-effect waves-light teal">
                                    <a href="./index.php?action=backup_progress">
                                        <i class="material-icons left">restore</i>View Last Backup Logs
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Card -->
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title teal-text">Upload Backup</span>
                                <p>Upload a database backup file to the server.</p>
                                <p>Allowed formats: .sql, .backup, .dump, .pgdump</p>
                            </div>
                            <div class="card-action">
                                <form method="post" action="index.php" enctype="multipart/form-data">
                                    <input type="hidden" name="action" value="upload">
                                    <div class="file-field input-field">
                                        <div class="btn teal">
                                            <span>File</span>
                                            <input type="file" name="backup_file" accept=".sql,.backup,.dump,.pgdump" required>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Select backup file">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn waves-effect waves-light teal">
                                        <i class="material-icons left">cloud_upload</i>Upload
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Delete All Card -->
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title teal-text">Delete All Backups</span>
                                <p>Warning: This will permanently delete all backup files.</p>
                            </div>
                            <div class="card-action">
                                <form method="post" action="index.php" onsubmit="return confirm('Are you sure you want to delete ALL backup files?');">
                                    <input type="hidden" name="action" value="delete_all">
                                    <button type="submit" class="btn waves-effect waves-light red">
                                        <i class="material-icons left">delete_forever</i>Delete All
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backup List -->
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title teal-text">Available Backups</span>
                                <p>Total backups: <?php echo $totalFiles; ?></p>

                                <form method="post" action="index.php" id="backupForm">
                                    <input type="hidden" name="action" value="restore" id="formAction">

                                    <?php if (count($paginatedFiles) > 0): ?>
                                        <table class="highlight">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label>
                                                            <input type="checkbox" id="selectAll">
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>File Name</th>
                                                    <th>Size</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($paginatedFiles as $file): ?>
                                                    <?php
                                                    $fileName = basename($file);
                                                    $fileSize = filesize($file);
                                                    $fileDate = date('Y-m-d H:i:s', filemtime($file));
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="checkbox" name="backup_files[]" value="<?php echo $fileName; ?>" class="backup-checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td><?php echo $fileName; ?></td>
                                                        <td><?php echo formatSize($fileSize); ?></td>
                                                        <td><?php echo $fileDate; ?></td>
                                                        <td>
                                                            <button type="button" onclick="restoreBackup('<?php echo $fileName; ?>')" class="btn-small waves-effect waves-light teal">
                                                                <i class="material-icons left">restore</i>Restore
                                                            </button>
                                                            <button type="button" onclick="downloadBackup('<?php echo $fileName; ?>')" class="btn-small waves-effect waves-light blue">
                                                                <i class="material-icons left">cloud_download</i>Download
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php else: ?>
                                        <p class="grey-text">No backup files found.</p>
                                    <?php endif; ?>
                                </form>
                            </div>
                            <div class="card-action">
                                <button type="button" onclick="setAction('restore')" class="btn waves-effect waves-light teal" id="restoreSelectedBtn" disabled>
                                    <i class="material-icons left">restore</i>Restore Selected
                                </button>
                                <button type="button" onclick="setAction('delete')" class="btn waves-effect waves-light red" id="deleteSelectedBtn" disabled>
                                    <i class="material-icons left">delete</i>Delete Selected
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <?php if ($totalPages > 1): ?>
                    <div class="row">
                        <div class="col s12 center-align">
                            <ul class="pagination">
                                <?php if ($page > 1): ?>
                                    <li class="waves-effect">
                                        <a href="?page=<?php echo $page - 1; ?>">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="disabled">
                                        <a href="#!">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="<?php echo $i == $page ? 'active' : 'waves-effect'; ?>">
                                        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($page < $totalPages): ?>
                                    <li class="waves-effect">
                                        <a href="?page=<?php echo $page + 1; ?>">
                                            <i class="material-icons">chevron_right</i>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="disabled">
                                        <a href="#!">
                                            <i class="material-icons">chevron_right</i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </main>

    <footer class="page-footer teal lighten-2">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <p class="white-text">Lifebox Main DB Backup & Restore Tool</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        // Initialize Materialize components
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();

            // Checkbox functionality
            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.backup-checkbox');
            const restoreBtn = document.getElementById('restoreSelectedBtn');
            const deleteBtn = document.getElementById('deleteSelectedBtn');

            selectAll.addEventListener('change', function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = selectAll.checked;
                });
                updateButtonStates();
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Uncheck "select all" if one checkbox is unchecked
                    if (!checkbox.checked && selectAll.checked) {
                        selectAll.checked = false;
                    }
                    updateButtonStates();
                });
            });

            function updateButtonStates() {
                const checkedCount = document.querySelectorAll('.backup-checkbox:checked').length;
                restoreBtn.disabled = checkedCount !== 1;
                deleteBtn.disabled = checkedCount === 0;
            }

            // Auto-scroll log container
            const logContainer = document.getElementById('log-container');
            if (logContainer) {
                logContainer.scrollTop = logContainer.scrollHeight;
            }
        });

        function setAction(action) {
            const form = document.getElementById('backupForm');
            const formAction = document.getElementById('formAction');

            if (action === 'delete') {
                if (!confirm('Are you sure you want to delete the selected backup(s)?')) {
                    return;
                }
            } else if (action === 'restore') {
                if (!confirm('Are you sure you want to restore this backup? This will overwrite the current database.')) {
                    return;
                }
            }

            formAction.value = action;
            form.submit();
        }

        function restoreBackup(filename) {
            if (confirm('Are you sure you want to restore this backup? This will overwrite the current database.')) {
                const form = document.getElementById('backupForm');
                const formAction = document.getElementById('formAction');

                // Clear all checkboxes
                document.querySelectorAll('.backup-checkbox').forEach(checkbox => {
                    checkbox.checked = false;
                });

                // Create a hidden input for the selected file
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'backup_file';
                input.value = filename;
                form.appendChild(input);

                formAction.value = 'restore';
                form.submit();
            }
        }

        function downloadBackup(filename) {
            window.location.href = 'backup/' + filename;
        }
    </script>
</body>

</html>