<?php
// app/element/save_data_element.php
require_once("../include/dbcommon.php");

function sqlValue($val)
{
    if ($val === null || $val === '') return "NULL";
    if (is_numeric($val)) return $val;
    return "'" . addslashes($val) . "'";
}

header('Content-Type: application/json');

if (!isLogged()) {
    echo json_encode(["success" => false, "error" => "Not authenticated"]);
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data || !isset($data['values'])) {
    echo json_encode(["success" => false, "error" => "Invalid data"]);
    exit;
}

$saved = 0;
$errors = 0;
$errorMessages = [];

foreach ($data['values'] as $v) {

    $value = ($v['value'] === "" || $v['value'] === null) ? 0 : $v['value'];

    $fields = [
        "data_element_id" => (int)$v['data_element_id'],
        "period_type"     => $v['period_type'] ?? null,
        "period_year"     => $v['period_year'] ?? null,
        "period_quarter"  => $v['period_quarter'] ?? null,
        "period_month"    => $v['period_month'] ?? null,
        "period_week"     => $v['period_week'] ?? null,
        "period_day"      => $v['period_day'] ?? null,
        "region_id"       => $v['region_id'] ?? null,
        "country_id"      => $v['country_id'] ?? null,
        "facility_id"     => $v['facility_id'] ?? null,
        "scope_level"     => $v['scope_level'] ?? null,
        "value_type"      => $v['value_type'] ?? null,
        "value"           => $value,
        "stored_by"       => $v['stored_by'] ?? null,
        "data_source"     => $v['data_source'] ?? null,
        "source_detail"   => $v['source_detail'] ?? null
    ];

    // Build WHERE clause safely
    // Fix null date explicitly
    if (empty($fields['period_day'])) {
        $fields['period_day'] = null;
    }

    // Helper function to safely format SQL values


    // Ensure all required fields exist
    $requiredKeys = [
        'data_element_id',
        'period_type',
        'period_year',
        'period_quarter',
        'period_month',
        'period_week',
        'period_day',
        'region_id',
        'country_id',
        'facility_id',
        'scope_level',
        'value_type'
    ];

    foreach ($requiredKeys as $key) {
        if (!array_key_exists($key, $fields)) {
            $fields[$key] = null;
        }
    }

    // Fix empty date


    // Build SQL manually (SAFE + RELIABLE)
    $sqlCheck = "
    SELECT data_value_id 
    FROM lbpmi_data_values 
    WHERE data_element_id = " . sqlValue($fields['data_element_id']) . "
      AND period_type = " . sqlValue($fields['period_type']) . "
      AND (period_year = " . sqlValue($fields['period_year']) . " OR (" . sqlValue($fields['period_year']) . " IS NULL AND period_year IS NULL))
      AND (period_quarter = " . sqlValue($fields['period_quarter']) . " OR (" . sqlValue($fields['period_quarter']) . " IS NULL AND period_quarter IS NULL))
      AND (period_month = " . sqlValue($fields['period_month']) . " OR (" . sqlValue($fields['period_month']) . " IS NULL AND period_month IS NULL))
      AND (period_week = " . sqlValue($fields['period_week']) . " OR (" . sqlValue($fields['period_week']) . " IS NULL AND period_week IS NULL))
      AND (period_day = " . sqlValue($fields['period_day']) . " OR (" . sqlValue($fields['period_day']) . " IS NULL AND period_day IS NULL))
      AND (region_id = " . sqlValue($fields['region_id']) . " OR (" . sqlValue($fields['region_id']) . " IS NULL AND region_id IS NULL))
      AND (country_id = " . sqlValue($fields['country_id']) . " OR (" . sqlValue($fields['country_id']) . " IS NULL AND country_id IS NULL))
      AND (facility_id = " . sqlValue($fields['facility_id']) . " OR (" . sqlValue($fields['facility_id']) . " IS NULL AND facility_id IS NULL))
      AND (scope_level = " . sqlValue($fields['scope_level']) . " OR (" . sqlValue($fields['scope_level']) . " IS NULL AND scope_level IS NULL))
      AND (value_type = " . sqlValue($fields['value_type']) . " OR (" . sqlValue($fields['value_type']) . " IS NULL AND value_type IS NULL))
      AND (deleted = false OR deleted IS NULL)
";

    $rs = DB::Query($sqlCheck);

    if ($rs === false) {
        $errors++;
        $errorMessages[] = "SQL Error: " . $sqlCheck;
        continue;
    }

    $row = $rs->fetchAssoc();

    if ($row) {
        $sql = DB::PrepareSQL("
            UPDATE lbpmi_data_values
            SET value=%value%, stored_by=%stored_by%, scope_level=%scope_level%, value_type=%value_type%, last_updated=NOW()
            WHERE data_value_id=%id%
        ", [
            "value" => $fields['value'],
            "stored_by" => $fields['stored_by'],
            "scope_level" => $fields['scope_level'],
            "value_type" => $fields['value_type'],
            "id" => $row['data_value_id']
        ]);
    } else {
        $sql = "
            INSERT INTO lbpmi_data_values
            (
                data_element_id, period_type, period_year, period_quarter,
                period_month, period_week, period_day,
                region_id, country_id, facility_id, scope_level, value_type,
                value, stored_by, data_source, source_detail,
                created, last_updated
            )
            VALUES
            (
                " . sqlValue($fields['data_element_id']) . ",
                " . sqlValue($fields['period_type']) . ",
                " . sqlValue($fields['period_year']) . ",
                " . sqlValue($fields['period_quarter']) . ",
                " . sqlValue($fields['period_month']) . ",
                " . sqlValue($fields['period_week']) . ",
                " . sqlValue($fields['period_day']) . ",
                " . sqlValue($fields['region_id']) . ",
                " . sqlValue($fields['country_id']) . ",
                " . sqlValue($fields['facility_id']) . ",
                " . sqlValue($fields['scope_level']) . ",
                " . sqlValue($fields['value_type']) . ",
                " . sqlValue($fields['value']) . ",
                " . sqlValue($fields['stored_by']) . ",
                " . sqlValue($fields['data_source']) . ",
                " . sqlValue($fields['source_detail']) . ",
                NOW(), NOW()
            )";
    }

    if (DB::Exec($sql) === false) {
        $errors++;
        $errorMessages[] = "Failed for element ID " . $fields['data_element_id'] . " | SQL: " . $sql;
    } else {
        $saved++;
    }
}

echo json_encode([
    "success" => true,
    "saved"   => $saved,
    "errors"  => $errors,
    "details" => $errorMessages
]);
exit;
// MIKEINTOSH