<?php
require_once("../include/dbcommon.php");

// Security (optional but recommended)
if (!isLogged()) {
    echo json_encode(["error" => "Not authenticated"]);
    exit;
}

// Query active data elements with their indicator group names and dataset names
$sql = "
    SELECT 
        de.data_element_id,
        de.data_element_name,
        de.data_element_code,
        de.value_type,
        de.aggregation_type,
        de.category_combo_id,
        de.dataset_id,
        de.domain_type,
        ig.indicator_group_name,
        ig.indicator_group_code,
        ds.dataset_name,
        ds.dataset_code
    FROM lbpmi_data_elements de
    LEFT JOIN lbpmi_indicator_groups ig ON de.category_combo_id = ig.indicator_group_id
    LEFT JOIN lbpmi_datasets ds ON de.dataset_id = ds.dataset_id
    WHERE de.is_active = true
    ORDER BY ig.indicator_group_name, de.data_element_name ASC
";

$rs = DB::Query($sql);

$data = [];
while ($row = $rs->fetchAssoc()) {
    // Transform the response to include friendly names
    $data[] = [
        "data_element_id" => $row["data_element_id"],
        "data_element_name" => $row["data_element_name"],
        "data_element_code" => $row["data_element_code"],
        "value_type" => $row["value_type"],
        "aggregation_type" => $row["aggregation_type"],
        "category_combo_id" => $row["category_combo_id"],
        "indicator_group_name" => $row["indicator_group_name"] ?? "Uncategorized",
        "indicator_group_code" => $row["indicator_group_code"] ?? "",
        "dataset_id" => $row["dataset_id"],
        "dataset_name" => $row["dataset_name"] ?? "No Dataset",
        "dataset_code" => $row["dataset_code"] ?? "",
        "domain_type" => $row["domain_type"]
    ];
}

// Return JSON
echo json_encode([
    "success" => true,
    "data" => $data
]);
exit;
// MIKEINTOSH