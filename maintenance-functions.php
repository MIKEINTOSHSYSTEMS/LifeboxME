<?php
// maintenance-functions.php
// Functions for maintenance mode control

// Function to enable/disable maintenance mode
function setMaintenanceMode($enable = true)
{
    $config_file = __DIR__ . '/maintenance.config';

    if (file_exists($config_file)) {
        $config_content = file_get_contents($config_file);

        if ($enable) {
            // Enable maintenance mode
            $new_content = preg_replace(
                '/\$maintenance_status\s*=\s*(false|true);/',
                '$maintenance_status = true;',
                $config_content
            );
            // Create flag file
            file_put_contents(__DIR__ . '/maintenance.flag', 'MAINTENANCE_ENABLED');
        } else {
            // Disable maintenance mode
            $new_content = preg_replace(
                '/\$maintenance_status\s*=\s*(false|true);/',
                '$maintenance_status = false;',
                $config_content
            );
            // Remove flag file
            if (file_exists(__DIR__ . '/maintenance.flag')) {
                unlink(__DIR__ . '/maintenance.flag');
            }
        }

        file_put_contents($config_file, $new_content);
    }
}

// Function to check if user can bypass maintenance
function canBypassMaintenance()
{
    $config_path = __DIR__ . '/maintenance.config';
    if (!file_exists($config_path)) return true;

    require_once $config_path;

    if (!isset($allowed_ips) || empty($allowed_ips)) return false;

    $allowed_ip_array = array_map('trim', explode(',', $allowed_ips));
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // Also check for proxy headers
    $forwarded_for = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '';
    $real_ip = isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : '';

    return in_array($user_ip, $allowed_ip_array) ||
        (!empty($forwarded_for) && in_array(trim(explode(',', $forwarded_for)[0]), $allowed_ip_array)) ||
        (!empty($real_ip) && in_array($real_ip, $allowed_ip_array));
}
