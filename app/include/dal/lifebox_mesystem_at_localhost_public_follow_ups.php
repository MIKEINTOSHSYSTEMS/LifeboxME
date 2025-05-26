<?php
$dalTablefollow_ups = array();
$dalTablefollow_ups["follow_up_id"] = array("type"=>3,"varname"=>"follow_up_id", "name" => "follow_up_id", "autoInc" => "1");
$dalTablefollow_ups["case_id"] = array("type"=>13,"varname"=>"case_id", "name" => "case_id", "autoInc" => "0");
$dalTablefollow_ups["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTablefollow_ups["phone_call_date"] = array("type"=>7,"varname"=>"phone_call_date", "name" => "phone_call_date", "autoInc" => "0");
$dalTablefollow_ups["data_collector_name"] = array("type"=>200,"varname"=>"data_collector_name", "name" => "data_collector_name", "autoInc" => "0");
$dalTablefollow_ups["call_successful"] = array("type"=>11,"varname"=>"call_successful", "name" => "call_successful", "autoInc" => "0");
$dalTablefollow_ups["call_failure_reason"] = array("type"=>201,"varname"=>"call_failure_reason", "name" => "call_failure_reason", "autoInc" => "0");
$dalTablefollow_ups["patient_status"] = array("type"=>200,"varname"=>"patient_status", "name" => "patient_status", "autoInc" => "0");
$dalTablefollow_ups["neonatal_death"] = array("type"=>11,"varname"=>"neonatal_death", "name" => "neonatal_death", "autoInc" => "0");
$dalTablefollow_ups["wound_opened"] = array("type"=>11,"varname"=>"wound_opened", "name" => "wound_opened", "autoInc" => "0");
$dalTablefollow_ups["wound_drainage"] = array("type"=>11,"varname"=>"wound_drainage", "name" => "wound_drainage", "autoInc" => "0");
$dalTablefollow_ups["drainage_type"] = array("type"=>13,"varname"=>"drainage_type", "name" => "drainage_type", "autoInc" => "0");
$dalTablefollow_ups["visited_healthcare_provider"] = array("type"=>11,"varname"=>"visited_healthcare_provider", "name" => "visited_healthcare_provider", "autoInc" => "0");
$dalTablefollow_ups["provider_location"] = array("type"=>200,"varname"=>"provider_location", "name" => "provider_location", "autoInc" => "0");
$dalTablefollow_ups["scheduled_postop_visit"] = array("type"=>11,"varname"=>"scheduled_postop_visit", "name" => "scheduled_postop_visit", "autoInc" => "0");
$dalTablefollow_ups["attended_postop_visit"] = array("type"=>11,"varname"=>"attended_postop_visit", "name" => "attended_postop_visit", "autoInc" => "0");
$dalTablefollow_ups["missed_visit_reason"] = array("type"=>201,"varname"=>"missed_visit_reason", "name" => "missed_visit_reason", "autoInc" => "0");
$dalTablefollow_ups["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablefollow_ups["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablefollow_ups["follow_up_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_follow_ups"] = &$dalTablefollow_ups;
?>