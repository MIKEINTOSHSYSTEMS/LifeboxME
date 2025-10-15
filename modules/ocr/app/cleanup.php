<?php
require_once __DIR__ . '/autoload.php';

/**
 * Cleanup script for temporary files
 * Can be run manually or via cron job
 */

class CleanupManager
{
    public function run(): array
    {
        $results = [
            'deleted_files' => 0,
            'errors' => []
        ];

        try {
            $uploader = new FileUploader();
            $results['deleted_files'] = $uploader->cleanupOldFiles(Config::TMP_FILE_MAX_AGE);

            // Additional cleanup for session files
            $results['deleted_files'] += $this->cleanupSessionFiles();
        } catch (Exception $e) {
            $results['errors'][] = $e->getMessage();
        }

        return $results;
    }

    private function cleanupSessionFiles(): int
    {
        $deleted = 0;
        $sessions = glob(session_save_path() . '/sess_*');
        $max_age = Config::TMP_FILE_MAX_AGE * 3600;

        foreach ($sessions as $session_file) {
            if (is_file($session_file) && (time() - filemtime($session_file)) > $max_age) {
                if (unlink($session_file)) {
                    $deleted++;
                }
            }
        }

        return $deleted;
    }
}

// Run cleanup if accessed directly
if (php_sapi_name() === 'cli' || isset($_GET['run_cleanup'])) {
    $cleanup = new CleanupManager();
    $results = $cleanup->run();

    if (php_sapi_name() === 'cli') {
        echo "Cleanup completed:\n";
        echo "Deleted files: " . $results['deleted_files'] . "\n";
        if (!empty($results['errors'])) {
            echo "Errors: " . implode(', ', $results['errors']) . "\n";
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}
