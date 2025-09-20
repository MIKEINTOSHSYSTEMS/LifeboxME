<?php
$dalTablelbpmi_calculation_jobs = array();
$dalTablelbpmi_calculation_jobs["job_id"] = array("type"=>3,"varname"=>"job_id", "name" => "job_id", "autoInc" => "1");
$dalTablelbpmi_calculation_jobs["indicator_id"] = array("type"=>3,"varname"=>"indicator_id", "name" => "indicator_id", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["data_element_id"] = array("type"=>3,"varname"=>"data_element_id", "name" => "data_element_id", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["period_type"] = array("type"=>200,"varname"=>"period_type", "name" => "period_type", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["period_year"] = array("type"=>3,"varname"=>"period_year", "name" => "period_year", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["period_quarter"] = array("type"=>3,"varname"=>"period_quarter", "name" => "period_quarter", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["period_month"] = array("type"=>3,"varname"=>"period_month", "name" => "period_month", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["priority"] = array("type"=>3,"varname"=>"priority", "name" => "priority", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["processed_at"] = array("type"=>135,"varname"=>"processed_at", "name" => "processed_at", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["error_message"] = array("type"=>201,"varname"=>"error_message", "name" => "error_message", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["attempts"] = array("type"=>3,"varname"=>"attempts", "name" => "attempts", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["next_retry"] = array("type"=>135,"varname"=>"next_retry", "name" => "next_retry", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["job_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_lbpmi_calculation_jobs"] = &$dalTablelbpmi_calculation_jobs;
?>