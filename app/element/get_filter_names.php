<?php
// app/element/get_filter_names.php
require_once("../include/dbcommon.php");

// Security check
if (!isLogged()) {
    echo json_encode(["error" => "Not authenticated"]);
    exit;
}

$response = [
    "regions" => [],
    "countries" => [],
    "facilities" => []
];

// Check if we have any parameters
if (empty($_GET)) {
    echo json_encode(["error" => "No parameters provided"]);
    exit;
}

// Fetch regions
if (isset($_GET['region_id']) && !empty($_GET['region_id'])) {
    $regionIds = explode(',', $_GET['region_id']);
    $regionIds = array_map('intval', $regionIds);

    // Use a simpler query approach
    $sql = "SELECT region_id, region_name FROM regions WHERE region_id IN (" . implode(',', $regionIds) . ")";
    $rs = DB::Query($sql);

    if ($rs) {
        while ($row = $rs->fetchAssoc()) {
            $response['regions'][$row['region_id']] = $row['region_name'];
        }
    }

    // If no results found, try alternative column names
    if (empty($response['regions'])) {
        $sql = "SELECT region_id, name as region_name FROM regions WHERE region_id IN (" . implode(',', $regionIds) . ")";
        $rs = DB::Query($sql);

        if ($rs) {
            while ($row = $rs->fetchAssoc()) {
                $response['regions'][$row['region_id']] = $row['region_name'];
            }
        }
    }

    // If still no results, return the ID as fallback
    if (empty($response['regions'])) {
        foreach ($regionIds as $id) {
            $response['regions'][$id] = "Region " . $id;
        }
    }
}

// Fetch countries
if (isset($_GET['country_id']) && !empty($_GET['country_id'])) {
    $countryIds = explode(',', $_GET['country_id']);
    $countryIds = array_map('intval', $countryIds);

    // Use a simpler query approach
    $sql = "SELECT country_id, country_name FROM countries WHERE country_id IN (" . implode(',', $countryIds) . ")";
    $rs = DB::Query($sql);

    if ($rs) {
        while ($row = $rs->fetchAssoc()) {
            $response['countries'][$row['country_id']] = $row['country_name'];
        }
    }

    // If no results found, try alternative column names
    if (empty($response['countries'])) {
        $sql = "SELECT country_id, name as country_name FROM countries WHERE country_id IN (" . implode(',', $countryIds) . ")";
        $rs = DB::Query($sql);

        if ($rs) {
            while ($row = $rs->fetchAssoc()) {
                $response['countries'][$row['country_id']] = $row['country_name'];
            }
        }
    }

    // If still no results, return the ID as fallback
    if (empty($response['countries'])) {
        foreach ($countryIds as $id) {
            $response['countries'][$id] = "Country " . $id;
        }
    }
}

// Fetch facilities
if (isset($_GET['facility_id']) && !empty($_GET['facility_id'])) {
    $facilityIds = explode(',', $_GET['facility_id']);
    $facilityIds = array_map('intval', $facilityIds);

    // Use a simpler query approach
    $sql = "SELECT facility_id, facility_name FROM facilities WHERE facility_id IN (" . implode(',', $facilityIds) . ")";
    $rs = DB::Query($sql);

    if ($rs) {
        while ($row = $rs->fetchAssoc()) {
            $response['facilities'][$row['facility_id']] = $row['facility_name'];
        }
    }

    // If no results found, try alternative column names
    if (empty($response['facilities'])) {
        $sql = "SELECT facility_id, name as facility_name FROM facilities WHERE facility_id IN (" . implode(',', $facilityIds) . ")";
        $rs = DB::Query($sql);

        if ($rs) {
            while ($row = $rs->fetchAssoc()) {
                $response['facilities'][$row['facility_id']] = $row['facility_name'];
            }
        }
    }

    // If still no results, return the ID as fallback
    if (empty($response['facilities'])) {
        foreach ($facilityIds as $id) {
            $response['facilities'][$id] = "Facility " . $id;
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response);
exit;
// MIKEINTOSH