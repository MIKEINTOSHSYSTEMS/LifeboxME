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

// Database connection function
function connectDB() {
    $connString = "host=".DB_HOST." port=".DB_PORT." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASS;
    $conn = pg_connect($connString);
    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    }
    return $conn;
}

// Handle backup action
if ($action === 'backup') {
    $backupName = 'lifeboxme_db_bak_' . date('Y-m-d_H-i-s') . '.sql';
    $backupPath = BACKUP_DIR . '/' . $backupName;
    
    // Try both methods - first system command, then PHP fallback
    $backupSuccess = false;
    
    // Method 1: System command (preferred)
    $pgDumpPaths = [
        '/usr/bin/pg_dump',
        '/usr/local/bin/pg_dump',
        '/opt/homebrew/bin/pg_dump', // For macOS Homebrew
        'pg_dump' // Try system PATH
    ];
    
    $foundPgDump = null;
    foreach ($pgDumpPaths as $path) {
        if (is_executable($path)) {
            $foundPgDump = $path;
            break;
        }
    }
    
    if ($foundPgDump) {
        // Build the command with full path to pg_dump
        $command = sprintf(
            '%s -h %s -p %s -U %s -F c -b -v -f %s %s',
            escapeshellarg($foundPgDump),
            escapeshellarg(DB_HOST),
            escapeshellarg(DB_PORT),
            escapeshellarg(DB_USER),
            escapeshellarg($backupPath),
            escapeshellarg(DB_NAME)
        );
        
        // Set PGPASSWORD in environment
        putenv("PGPASSWORD=".DB_PASS);
        
        // Execute and capture output and return code
        $output = [];
        $returnCode = 0;
        exec($command . ' 2>&1', $output, $returnCode);
        
        if ($returnCode === 0) {
            $message = "Backup created successfully (system command): " . $backupName;
            $backupSuccess = true;
        } else {
            $errorDetails = "Backup command failed with error code: " . $returnCode . "<br>";
            $errorDetails .= "Command: " . htmlspecialchars($command) . "<br>";
            $errorDetails .= "Output: " . htmlspecialchars(implode("\n", $output));
            
            // Clean up failed backup file if it was partially created
            if (file_exists($backupPath)) {
                unlink($backupPath);
            }
        }
    } else {
        $errorDetails = "pg_dump command not found in common locations. Trying PHP fallback method.";
    }
    
    // Method 2: PHP fallback if system command failed
    if (!$backupSuccess) {
        try {
            $conn = connectDB();
            
            // Begin building SQL dump
            $dump = "";
            
            // Add header
            $dump .= "-- PostgreSQL database dump\n";
            $dump .= "-- Generated at " . date('Y-m-d H:i:s') . "\n";
            $dump .= "-- Database: " . DB_NAME . "\n\n";
            
            // Set search path
            $dump .= "SET search_path = public;\n\n";
            
            // Add extensions
            $result = pg_query($conn, "SELECT extname FROM pg_extension");
            while ($row = pg_fetch_assoc($result)) {
                $dump .= "CREATE EXTENSION IF NOT EXISTS \"{$row['extname']}\";\n";
            }
            $dump .= "\n";
            
            // Add custom types
            $result = pg_query($conn, "SELECT t.typname, t.typbasetype, t.typtype, pg_catalog.format_type(t.typbasetype, t.typtypmod) as basetype 
                                      FROM pg_catalog.pg_type t 
                                      JOIN pg_catalog.pg_namespace n ON n.oid = t.typnamespace 
                                      WHERE (t.typrelid = 0 OR (SELECT c.relkind = 'c' FROM pg_catalog.pg_class c WHERE c.oid = t.typrelid)) 
                                      AND NOT EXISTS(SELECT 1 FROM pg_catalog.pg_type el WHERE el.oid = t.typelem AND el.typarray = t.oid)
                                      AND n.nspname = 'public'");
            while ($row = pg_fetch_assoc($result)) {
                if ($row['typtype'] === 'd') { // Domain type
                    $dump .= "CREATE DOMAIN \"{$row['typname']}\" AS {$row['basetype']};\n";
                } elseif ($row['typtype'] === 'e') { // Enum type
                    $dump .= "CREATE TYPE \"{$row['typname']}\" AS ENUM (";
                    $enum_result = pg_query($conn, "SELECT enumlabel FROM pg_enum WHERE enumtypid = (SELECT oid FROM pg_type WHERE typname = '{$row['typname']}') ORDER BY enumsortorder");
                    $enum_values = [];
                    while ($enum_row = pg_fetch_assoc($enum_result)) {
                        $enum_values[] = "'" . pg_escape_string($conn, $enum_row['enumlabel']) . "'";
                    }
                    $dump .= implode(", ", $enum_values) . ");\n";
                }
            }
            $dump .= "\n";
            
            // Get all tables in the database
            $result = pg_query($conn, "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public' AND table_type = 'BASE TABLE'");
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
            foreach ($tables as $table) {
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
                    
                    // Handle custom types (USER-DEFINED)
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
                $result = pg_query($conn, "SELECT * FROM \"$table\"");
                if (!$result) {
                    throw new Exception("Failed to get data for $table: " . pg_last_error($conn));
                }
                
                // Add INSERT statements
                while ($row = pg_fetch_assoc($result)) {
                    $cols = [];
                    $vals = [];
                    foreach ($row as $col => $val) {
                        $cols[] = "\"$col\"";
                        $vals[] = $val === null ? 'NULL' : "'" . pg_escape_string($conn, $val) . "'";
                    }
                    $dump .= "INSERT INTO \"$table\" (" . implode(', ', $cols) . ") VALUES (" . implode(', ', $vals) . ");\n";
                }
                $dump .= "\n";
            }
            
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
            
            // Add functions
            $result = pg_query($conn, "SELECT proname, pg_get_functiondef(p.oid) AS functiondef 
                                      FROM pg_proc p 
                                      JOIN pg_namespace n ON p.pronamespace = n.oid 
                                      WHERE n.nspname = 'public'");
            while ($row = pg_fetch_assoc($result)) {
                $dump .= $row['functiondef'] . ";\n\n";
            }
            
            // Add views
            $result = pg_query($conn, "SELECT table_name, view_definition 
                                      FROM information_schema.views 
                                      WHERE table_schema = 'public'");
            while ($row = pg_fetch_assoc($result)) {
                $dump .= "CREATE OR REPLACE VIEW \"{$row['table_name']}\" AS {$row['view_definition']};\n\n";
            }
            
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
            
            // Write to file
            if (file_put_contents($backupPath, $dump) !== false) {
                $message = "Backup created successfully (PHP fallback): " . $backupName;
                $backupSuccess = true;
            } else {
                $errorDetails = "Failed to write backup file. Check directory permissions.";
            }
            
            pg_close($conn);
        } catch (Exception $e) {
            $errorDetails = "Backup failed (PHP method): " . $e->getMessage();
        }
    }
    
    if (!$backupSuccess) {
        $error = $errorDetails;
    }
}

// Handle restore action
if ($action === 'restore' && isset($_POST['backup_file'])) {
    $backupFile = $_POST['backup_file'];
    $backupPath = BACKUP_DIR . '/' . $backupFile;
    
    if (file_exists($backupPath)) {
        // Try system command first
        $restoreSuccess = false;
        
        // Method 1: System command (preferred)
        $pgRestorePaths = [
            '/usr/bin/pg_restore',
            '/usr/local/bin/pg_restore',
            '/opt/homebrew/bin/pg_restore', // For macOS Homebrew
            'pg_restore' // Try system PATH
        ];
        
        $foundPgRestore = null;
        foreach ($pgRestorePaths as $path) {
            if (is_executable($path)) {
                $foundPgRestore = $path;
                break;
            }
        }
        
        if ($foundPgRestore) {
            // Drop all existing connections first
            $conn = connectDB();
            pg_query($conn, "SELECT pg_terminate_backend(pg_stat_activity.pid) FROM pg_stat_activity WHERE pg_stat_activity.datname = '".DB_NAME."' AND pid <> pg_backend_pid();");
            pg_close($conn);
            
            // Build restore command
            $command = sprintf(
                '%s -h %s -p %s -U %s -d %s -c -v %s',
                escapeshellarg($foundPgRestore),
                escapeshellarg(DB_HOST),
                escapeshellarg(DB_PORT),
                escapeshellarg(DB_USER),
                escapeshellarg(DB_NAME),
                escapeshellarg($backupPath)
            );
            
            // Set PGPASSWORD in environment
            putenv("PGPASSWORD=".DB_PASS);
            
            // Execute and capture output and return code
            $output = [];
            $returnCode = 0;
            exec($command . ' 2>&1', $output, $returnCode);
            
            if ($returnCode === 0) {
                $message = "Database restored successfully (system command) from: " . $backupFile;
                $restoreSuccess = true;
            } else {
                $errorDetails = "Restore failed with error code: " . $returnCode . "<br>";
                $errorDetails .= "Command: " . htmlspecialchars($command) . "<br>";
                $errorDetails .= "Output: " . htmlspecialchars(implode("\n", $output));
            }
        } else {
            $errorDetails = "pg_restore command not found in common locations. Trying PHP fallback method.";
        }
        
        // Method 2: PHP fallback if system command failed
        if (!$restoreSuccess) {
            try {
                $conn = connectDB();
                
                // Drop all existing connections first
                pg_query($conn, "SELECT pg_terminate_backend(pg_stat_activity.pid) FROM pg_stat_activity WHERE pg_stat_activity.datname = '".DB_NAME."' AND pid <> pg_backend_pid();");
                
                // Read the backup file
                $backupContent = file_get_contents($backupPath);
                if ($backupContent === false) {
                    throw new Exception("Failed to read backup file");
                }
                
                // Split into individual statements (more robust splitting)
                $statements = preg_split('/;\s*\n/', $backupContent);
                
                // Execute each statement
                foreach ($statements as $statement) {
                    $statement = trim($statement);
                    if (!empty($statement)) {
                        // Skip comments
                        if (strpos($statement, '--') === 0) {
                            continue;
                        }
                        
                        // Handle multi-line statements (like CREATE FUNCTION)
                        if (preg_match('/\bCREATE\s+(OR\s+REPLACE\s+)?(FUNCTION|TRIGGER|VIEW)\b/i', $statement)) {
                            // Execute as-is (already ends with semicolon)
                            $result = pg_query($conn, $statement);
                        } else {
                            // Add semicolon if missing
                            if (substr($statement, -1) !== ';') {
                                $statement .= ';';
                            }
                            $result = pg_query($conn, $statement);
                        }
                        
                        if (!$result) {
                            $error = pg_last_error($conn);
                            // Skip certain errors that might be non-critical
                            if (!preg_match('/already exists|does not exist/i', $error)) {
                                throw new Exception("Error executing statement: " . $error . "\nStatement: " . substr($statement, 0, 100) . "...");
                            }
                        }
                    }
                }
                
                $message = "Database restored successfully (PHP fallback) from: " . $backupFile;
                $restoreSuccess = true;
                pg_close($conn);
            } catch (Exception $e) {
                $errorDetails = "Restore failed (PHP method): " . $e->getMessage();
            }
        }
        
        if (!$restoreSuccess) {
            $error = $errorDetails;
        }
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
    </style>
</head>

<body>
    <main>
        <div class="container">
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
                        </div>
                        <div class="card-action">
                            <form method="post" action="index.php">
                                <input type="hidden" name="action" value="backup">
                                <button type="submit" class="btn waves-effect waves-light teal">
                                    <i class="material-icons left">backup</i>Create Backup
                                </button>
                            </form>
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