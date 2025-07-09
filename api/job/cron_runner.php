<?php
/*
 * Cron Runner for Lifebox.me
 * This script is designed to run scheduled cron jobs.
 * It checks the database for due jobs and executes them.
 * 
 * Usage: This script should be called by a cron job on the server.
 */


 require __DIR__ . '/cron_runner_functions.php';
 
 // Execute due jobs
 try {
     $runner = new CronRunner();
     $runner->executeDueJobs();
     echo "Cron jobs executed successfully at " . date('Y-m-d H:i:s');
 } catch (Exception $e) {
     error_log("Cron runner failed: " . $e->getMessage());
     echo "Error: " . $e->getMessage();
 }
 ?>






















 /*
require __DIR__ . '/cronjobs.php';

// Get due cron jobs
$dueJobs = $db->query("SELECT * FROM lifeboxme_cron_jobs 
    WHERE enabled = true AND next_run <= NOW()")
    ->fetchAll(PDO::FETCH_ASSOC);

foreach ($dueJobs as $job) {
    $url = "http://".$_SERVER['HTTP_HOST']."/cronjobs.php";
    $data = ['action' => 'run_cron', 'id' => $job['id']];
    
    // Use cURL to trigger execution
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1); // Don't wait for response
    curl_exec($ch);
    curl_close($ch);
    
    // Update next run time immediately
    $nextRun = date('Y-m-d H:i:s', strtotime($job['frequency']));
    $db->prepare("UPDATE lifeboxme_cron_jobs SET next_run = ? WHERE id = ?")
        ->execute([$nextRun, $job['id']]);
}
?>
*/