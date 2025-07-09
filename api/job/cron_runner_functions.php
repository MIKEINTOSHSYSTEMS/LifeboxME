<?php
class CronRunner {
    private $db;
    private $envVars;
    
    public function __construct() {
        // Load environment configuration
        $envFile = __DIR__ . '/../../../.env.dev';
        if (!file_exists($envFile)) die("Configuration error: .env.dev not found");
        $this->envVars = parse_ini_file($envFile);
        
        // Database connection
        $dbHost = $this->envVars['DB_HOST'] ?? 'localhost';
        $dbPort = $this->envVars['POSTGRES_PORT'] ?? '5432';
        $dbName = $this->envVars['POSTGRES_DB'] ?? 'lifebox_mesystem';
        $dbUser = $this->envVars['POSTGRES_USER'] ?? 'postgres';
        $dbPass = $this->envVars['POSTGRES_PASSWORD'] ?? 'mikeintosh';
        
        try {
            $dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName;user=$dbUser;password=$dbPass";
            $this->db = new PDO($dsn);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function executeDueJobs()
    {
        // Get due cron jobs
        $dueJobs = $this->db->query("SELECT cj.*, s.dx, s.ou, s.pe, s.display_property, 
                s.include_num_den, s.skip_meta, s.skip_data, s.paging, s.page_size
            FROM lifeboxme_cron_jobs cj
            JOIN lifeboxme_dhis2_analytics_settings s ON s.id = cj.setting_id
            WHERE cj.enabled = true AND cj.next_run <= NOW()")
            ->fetchAll(PDO::FETCH_ASSOC);

        // Group jobs by frequency to run together
        $jobGroups = [];
        foreach ($dueJobs as $job) {
            $frequency = $job['frequency'];
            if (!isset($jobGroups[$frequency])) {
                $jobGroups[$frequency] = [];
            }
            $jobGroups[$frequency][] = $job;
        }

        // Execute each group of jobs
        foreach ($jobGroups as $frequency => $jobs) {
            $this->executeBulkSettings($jobs);

            // Update next run time for all jobs in this group
            $nextRun = date('Y-m-d H:i:s', strtotime($frequency));
            $jobIds = array_column($jobs, 'id');
            $placeholders = implode(',', array_fill(0, count($jobIds), '?'));

            $stmt = $this->db->prepare("UPDATE lifeboxme_cron_jobs 
                SET last_run = NOW(), next_run = ?
                WHERE id IN ($placeholders)");
            $stmt->execute(array_merge([$nextRun], $jobIds));
        }
    }

    private function executeBulkSettings(array $settings)
    {
        // Create a combined API request for all settings
        $combinedParams = $this->buildCombinedApiParams($settings);

        // Make the combined API call
        $apiResponse = $this->makeDhis2ApiCall($combinedParams);
        $data = json_decode($apiResponse, true);
        if (!$data) throw new Exception("Invalid API response for bulk settings");

        // Process and store data for each setting
        foreach ($settings as $setting) {
            $this->processAndStoreData($data, $setting);
        }
    }

    private function buildCombinedApiParams(array $settings)
    {
        $combinedDimensions = [];
        $combinedFilters = [];

        foreach ($settings as $setting) {
            $dxIds = explode(',', $setting['dx']);
            $ouIds = explode(',', $setting['ou']);
            $peIds = explode(',', $setting['pe']);

            // Add dimensions
            if (!isset($combinedDimensions['dx'])) {
                $combinedDimensions['dx'] = [];
            }
            $combinedDimensions['dx'] = array_merge($combinedDimensions['dx'], $dxIds);

            if (!isset($combinedDimensions['ou'])) {
                $combinedDimensions['ou'] = [];
            }
            $combinedDimensions['ou'] = array_merge($combinedDimensions['ou'], $ouIds);

            // Add filters
            if (!isset($combinedFilters['pe'])) {
                $combinedFilters['pe'] = [];
            }
            $combinedFilters['pe'] = array_merge($combinedFilters['pe'], $peIds);
        }

        // Build dimension parameter
        $dimensionParam = '';
        foreach ($combinedDimensions as $dim => $ids) {
            $dimensionParam .= $dim . ':' . implode(';', array_unique($ids)) . ',';
        }
        $dimensionParam = rtrim($dimensionParam, ',');

        // Build filter parameter
        $filterParam = [];
        foreach ($combinedFilters as $dim => $ids) {
            $filterParam[] = $dim . ':' . implode(';', array_unique($ids));
        }

        // Use parameters from first setting (they should be similar)
        $firstSetting = $settings[0];

        return [
            'dimension' => $dimensionParam,
            'filter' => $filterParam,
            'displayProperty' => $firstSetting['display_property'],
            'includeNumDen' => $firstSetting['include_num_den'] ? 'true' : 'false',
            'skipMeta' => $firstSetting['skip_meta'] ? 'true' : 'false',
            'skipData' => $firstSetting['skip_data'] ? 'true' : 'false',
            'paging' => $firstSetting['paging'] ? 'true' : 'false',
            'pageSize' => $firstSetting['page_size']
        ];
    }

    private function makeDhis2ApiCall($params)
    {
        $baseUrl = rtrim($this->envVars['DHIS2_BASE_URL'], '/');
        $username = $this->envVars['DHIS2_USERNAME'];
        $password = $this->envVars['DHIS2_PASSWORD'];

        // Build query string
        $queryParts = [http_build_query(['dimension' => $params['dimension']])];
        foreach ($params['filter'] as $filter) {
            $queryParts[] = 'filter=' . urlencode($filter);
        }
        $queryParts[] = http_build_query([
            'displayProperty' => $params['displayProperty'],
            'includeNumDen' => $params['includeNumDen'],
            'skipMeta' => $params['skipMeta'],
            'skipData' => $params['skipData'],
            'paging' => $params['paging'],
            'pageSize' => $params['pageSize']
        ]);
        $queryString = implode('&', $queryParts);

        $url = $baseUrl . '/api/analytics?' . $queryString;
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => "$username:$password",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => ['Accept: application/json'],
            CURLOPT_TIMEOUT => 300 // Increased timeout for bulk operations
        ]);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new Exception("DHIS2 API error: " . curl_error($ch));
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            $errorDetails = json_decode($response, true)['message'] ?? $response;
            throw new Exception("DHIS2 returned HTTP $httpCode: $errorDetails");
        }

        return $response;
    }

    private function processAndStoreData($data, $setting)
    {
        // Fetch additional metadata
        $dataItemMetadata = $this->fetchDataItemsMetadata();
        $ouIds = explode(',', $setting['ou']);
        $ouMetadata = $this->fetchOrgUnitsMetadata($ouIds);

        // Process response
        $dxIds = $data['metaData']['dimensions']['dx'] ?? [];
        $ouIds = $data['metaData']['dimensions']['ou'] ?? [];
        $peIds = $data['metaData']['dimensions']['pe'] ?? [];

        // Build org units array with parent info and level
        $allOrgUnits = [];
        foreach ($ouIds as $ouId) {
            $metadata = $ouMetadata[$ouId] ?? null;
            $level = $metadata['level'] ?? null;

            $allOrgUnits[$ouId] = [
                'id' => $ouId,
                'name' => $data['metaData']['items'][$ouId]['name'] ?? $ouId,
                'parent_id' => $metadata['parent_id'] ?? null,
                'parent_name' => $metadata['parent_name'] ?? null,
                'level_id' => $level,
                'level_name' => $this->mapLevelToName($level)
            ];
        }

        // Build periods array
        $allPeriods = [];
        foreach ($peIds as $peId) {
            $allPeriods[$peId] = [
                'id' => $peId,
                'displayName' => $data['metaData']['items'][$peId]['name'] ?? $peId,
                'relativePeriod' => $peId
            ];
        }

        // Build value map
        $dxValueMap = [];
        foreach ($data['rows'] as $row) {
            if (count($row) === 3) {
                $dxId = $row[0];
                $ouId = $row[1];
                $value = $row[2];
                $dxValueMap[$dxId][$ouId] = $value;
            } elseif (count($row) === 2) {
                $dxId = $row[0];
                $value = $row[1];
                foreach ($ouIds as $ouId) {
                    $dxValueMap[$dxId][$ouId] = $value;
                }
            }
        }

        // Clear existing data for this setting
        $this->db->exec("DELETE FROM lifeboxme_dhis2_analytics_data WHERE setting_id = {$setting['setting_id']}");

        // Prepare insert statement
        $stmt = $this->db->prepare("INSERT INTO lifeboxme_dhis2_analytics_data 
            (setting_id, dx_id, dx_name, dx_shortname, dx_displayname, dx_dimensiontype, 
            ou_id, ou_name, ou_parent_id, ou_parent_name, ou_level_id, ou_level_name,
            period_id, period_display_name, pe_relativeperiod, value, stored_by, created, last_updated) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $now = date('Y-m-d H:i:s');

        foreach ($dxIds as $dxId) {
            $itemInfo = $dataItemMetadata[$dxId] ?? [];

            // Get metadata
            $dxName = $itemInfo['displayName'] ?? ($data['metaData']['items'][$dxId]['name'] ?? $dxId);
            $dxShortName = $itemInfo['shortName'] ?? 'N/A';
            $dxDisplayName = $itemInfo['displayShortName'] ?? ($itemInfo['displayName'] ?? $dxName);
            $dxDimensionType = $itemInfo['dimensionItemType'] ?? 'UNKNOWN';

            foreach ($allOrgUnits as $ou) {
                foreach ($allPeriods as $pe) {
                    $value = $dxValueMap[$dxId][$ou['id']] ?? null;

                    $stmt->execute([
                        $setting['setting_id'],
                        $dxId,
                        $dxName,
                        $dxShortName,
                        $dxDisplayName,
                        $dxDimensionType,
                        $ou['id'],
                        $ou['name'],
                        $ou['parent_id'],
                        $ou['parent_name'],
                        $ou['level_id'],
                        $ou['level_name'],
                        $pe['id'],
                        $pe['displayName'],
                        $pe['relativePeriod'],
                        $value,
                        'cron',
                        $now,
                        $now
                    ]);
                }
            }
        }
    }
    
    private function fetchDataItemsMetadata() {
        $scheme = 'http';
        if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || 
            (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) {
            $scheme = 'https';
        }
        
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $dataItemsPath = '/api/dhis2/indicators/dataItems.php';
        $fullUrl = $scheme . '://' . $host . $dataItemsPath;

        try {
            $ch = curl_init($fullUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                throw new Exception('Data items API request failed: ' . curl_error($ch));
            }

            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode !== 200) {
                throw new Exception("Data items API returned HTTP code $httpCode");
            }

            $data = json_decode($response, true);
            if (!is_array($data)) {
                throw new Exception('Invalid response from data items API');
            }

            $metadata = [];
            foreach ($data as $item) {
                $metadata[$item['id']] = $item;
            }

            return $metadata;
        } catch (Exception $e) {
            error_log("Failed to fetch data items metadata: " . $e->getMessage());
            return [];
        }
    }
    
    private function fetchOrgUnitsMetadata($ouIds) {
        $baseUrl = rtrim($this->envVars['DHIS2_BASE_URL'], '/');
        $username = $this->envVars['DHIS2_USERNAME'];
        $password = $this->envVars['DHIS2_PASSWORD'];

        if (empty($ouIds)) {
            return [];
        }

        try {
            $idList = implode(',', $ouIds);
            $url = $baseUrl . '/api/organisationUnits.json?fields=id,name,level,parent[id,name]&filter=id:in:[' . $idList . ']&paging=false';

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                CURLOPT_USERPWD => "$username:$password",
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_TIMEOUT => 60
            ]);

            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                throw new Exception('OU metadata request failed: ' . curl_error($ch));
            }

            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode !== 200) {
                throw new Exception("OU metadata API returned HTTP code $httpCode");
            }

            $data = json_decode($response, true);
            if (!isset($data['organisationUnits'])) {
                throw new Exception('Invalid response from OU metadata API');
            }

            $metadata = [];
            foreach ($data['organisationUnits'] as $unit) {
                $metadata[$unit['id']] = [
                    'name' => $unit['name'],
                    'parent_id' => $unit['parent']['id'] ?? null,
                    'parent_name' => $unit['parent']['name'] ?? null,
                    'level' => $unit['level']
                ];
            }

            return $metadata;
        } catch (Exception $e) {
            error_log("Failed to fetch OU metadata: " . $e->getMessage());
            return [];
        }
    }
    
    private function mapLevelToName($level) {
        $levelMap = [
            1 => 'Lifebox International',
            2 => 'Continent',
            3 => 'Country',
            4 => 'Hospital/Facility'
        ];
        return $levelMap[$level] ?? "Level $level";
    }
}
?>