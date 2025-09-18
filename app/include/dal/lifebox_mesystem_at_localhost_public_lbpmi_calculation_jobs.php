<?php
$dalTablelbpmi_calculation_jobs = array();
$dalTablelbpmi_calculation_jobs["job_id"] = array("type"=>3,"varname"=>"job_id", "name" => "job_id", "autoInc" => "1");
$dalTablelbpmi_calculation_jobs["indicator_id"] = array("type"=>3,"varname"=>"indicator_id", "name" => "indicator_id", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["year"] = array("type"=>3,"varname"=>"year", "name" => "year", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["quarter"] = array("type"=>3,"varname"=>"quarter", "name" => "quarter", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["processed_at"] = array("type"=>135,"varname"=>"processed_at", "name" => "processed_at", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["error_message"] = array("type"=>201,"varname"=>"error_message", "name" => "error_message", "autoInc" => "0");
$dalTablelbpmi_calculation_jobs["job_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_lbpmi_calculation_jobs"] = &$dalTablelbpmi_calculation_jobs;
?>