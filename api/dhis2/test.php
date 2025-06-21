<?php
// aio_organisationUnits.php

/**
 * Fetches and organizes DHIS2 organization units data in a structured format
 * Reads credentials from ../../.env.dev
 */
//make it to fetch like Lifebox International ID,Lifebox International, Continent ID, Continent, Country ID, Country, Hospital ID, Hospital
// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to parse .env file
function parseEnvFile($filePath)
{
    if (!file_exists($filePath)) {
        throw new Exception("Environment file not found: $filePath");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];

    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split on first equals sign
        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);

        // Remove quotes if present
        if (preg_match('/^"(.*)"$/', $value, $matches)) {
            $value = $matches[1];
        } elseif (preg_match('/^\'(.*)\'$/', $value, $matches)) {
            $value = $matches[1];
        }

        $env[$key] = $value;
    }

    return $env;
}

// Load environment variables
try {
    $envFile = '../../.env.dev';
    $env = parseEnvFile($envFile);

    // Validate required DHIS2 configuration
    $requiredVars = ['DHIS2_BASE_URL', 'DHIS2_USERNAME', 'DHIS2_PASSWORD'];
    foreach ($requiredVars as $var) {
        if (!isset($env[$var]) || empty($env[$var])) {
            throw new Exception("Required environment variable missing or empty: $var");
        }
    }

    $DHIS2_BASE_URL = rtrim($env['DHIS2_BASE_URL'], '/') . '/';
    $DHIS2_USERNAME = $env['DHIS2_USERNAME'];
    $DHIS2_PASSWORD = $env['DHIS2_PASSWORD'];
} catch (Exception $e) {
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
    exit;
}

// Function to fetch data from DHIS2 API
function fetchDhis2Data($endpoint)
{
    global $DHIS2_BASE_URL, $DHIS2_USERNAME, $DHIS2_PASSWORD;

    $url = $DHIS2_BASE_URL . $endpoint;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$DHIS2_USERNAME:$DHIS2_PASSWORD");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For development only

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        throw new Exception('DHIS2 API request failed: ' . curl_error($ch));
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode !== 200) {
        throw new Exception("DHIS2 API returned HTTP code $httpCode");
    }

    curl_close($ch);

    return json_decode($response, true);
}

// Function to organize the organization units by level
function organizeOrganizationUnits($units)
{
    $organized = [
        'level1' => [], // Lifebox International
        'level2' => [], // Continents
        'level3' => [], // Countries
        'level4' => []  // Hospitals/Facilities
    ];

    foreach ($units as $unit) {
        switch ($unit['level']) {
            case 1:
                $organized['level1'][] = [
                    'name' => $unit['name'],
                    'id' => $unit['id'],
                    'level' => $unit['level']
                ];
                break;

            case 2:
                $organized['level2'][] = [
                    'name' => $unit['name'],
                    'id' => $unit['id'],
                    'level' => $unit['level'],
                    'parent' => [
                        'displayName' => $unit['parent']['displayName'],
                        'id' => $unit['parent']['id']
                    ]
                ];
                break;

            case 3:
                $organized['level3'][] = [
                    'name' => $unit['name'],
                    'id' => $unit['id'],
                    'level' => $unit['level'],
                    'parent' => [
                        'displayName' => $unit['parent']['displayName'],
                        'id' => $unit['parent']['id']
                    ]
                ];
                break;

            case 4:
                $organized['level4'][] = [
                    'name' => $unit['name'],
                    'id' => $unit['id'],
                    'level' => $unit['level'],
                    'parent' => [
                        'displayName' => $unit['parent']['displayName'],
                        'id' => $unit['parent']['id']
                    ]
                ];
                break;
        }
    }

    return $organized;
}

// Main execution
/*
try {
    // Fetch organization units
    $orgUnits = fetchDhis2Data('api/organisationUnits.json?fields=id,name,level,parent[id,displayName]&paging=false');

    // Fetch organization unit levels for validation (optional)
    $orgUnitLevels = fetchDhis2Data('api/organisationUnitLevels.json?fields=id,name,level&paging=false');

    // Organize the data
    $organizedData = organizeOrganizationUnits($orgUnits['organisationUnits']);

    // Add metadata
    $result = [
        'success' => true,
        'timestamp' => date('c'),
        'apiVersion' => '1.0',
        'data' => $organizedData,
        'metadata' => [
            'organizationUnitLevels' => $orgUnitLevels['organisationUnitLevels'],
            'totalCounts' => [
                'level1' => count($organizedData['level1']),
                'level2' => count($organizedData['level2']),
                'level3' => count($organizedData['level3']),
                'level4' => count($organizedData['level4'])
            ],
            'source' => $DHIS2_BASE_URL
        ]
    ];

    // Set JSON headers and output
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
} catch (Exception $e) {
    // Error handling
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('c')
    ], JSON_PRETTY_PRINT);
}
*/

// Main execution
try {
    // Fetch organization units
    $orgUnits = fetchDhis2Data('api/organisationUnits.json?fields=id,name,level,parent[id,displayName]&paging=false');

    // Fetch organization unit levels for validation (optional)
    $orgUnitLevels = fetchDhis2Data('api/organisationUnitLevels.json?fields=id,name,level&paging=false');

    // Organize the data
    $organizedData = organizeOrganizationUnits($orgUnits['organisationUnits']);

    // Start HTML output
    header('Content-Type: text/html; charset=utf-8');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DHIS2 Organization Units</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            h1 {
                color: #2c3e50;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            .level1 {
                background-color: #e6f7ff;
            }

            .level2 {
                background-color: #fff7e6;
            }

            .level3 {
                background-color: #f0ffe6;
            }

            .level4 {
                background-color: #ffe6e6;
            }
        </style>
    </head>

    <body>
        <h1>DHIS2 Organization Units Structure</h1>
        <p>Last updated: <?= date('Y-m-d H:i:s') ?></p>

        <h2>Level 1: Lifebox International</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizedData['level1'] as $unit): ?>
                    <tr class="level1">
                        <td><?= htmlspecialchars($unit['id']) ?></td>
                        <td><?= htmlspecialchars($unit['name']) ?></td>
                        <td><?= $unit['level'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Level 2: Continents</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Parent Name</th>
                    <th>Parent ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizedData['level2'] as $unit): ?>
                    <tr class="level2">
                        <td><?= htmlspecialchars($unit['id']) ?></td>
                        <td><?= htmlspecialchars($unit['name']) ?></td>
                        <td><?= $unit['level'] ?></td>
                        <td><?= htmlspecialchars($unit['parent']['displayName']) ?></td>
                        <td><?= htmlspecialchars($unit['parent']['id']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Level 3: Countries</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Parent Name</th>
                    <th>Parent ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizedData['level3'] as $unit): ?>
                    <tr class="level3">
                        <td><?= htmlspecialchars($unit['id']) ?></td>
                        <td><?= htmlspecialchars($unit['name']) ?></td>
                        <td><?= $unit['level'] ?></td>
                        <td><?= htmlspecialchars($unit['parent']['displayName']) ?></td>
                        <td><?= htmlspecialchars($unit['parent']['id']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Level 4: Hospitals/Facilities</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Parent Name</th>
                    <th>Parent ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizedData['level4'] as $unit): ?>
                    <tr class="level4">
                        <td><?= htmlspecialchars($unit['id']) ?></td>
                        <td><?= htmlspecialchars($unit['name']) ?></td>
                        <td><?= $unit['level'] ?></td>
                        <td><?= htmlspecialchars($unit['parent']['displayName']) ?></td>
                        <td><?= htmlspecialchars($unit['parent']['id']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>

    </html>
<?php

} catch (Exception $e) {
    // Error handling
    header('Content-Type: text/html; charset=utf-8');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Error</title>
    </head>

    <body>
        <h1>Error Fetching Organization Units</h1>
        <p><?= htmlspecialchars($e->getMessage()) ?></p>
    </body>

    </html>
<?php
}
