<?php
$dalTableprograms = array();
$dalTableprograms["program_id"] = array("type"=>3,"varname"=>"program_id", "name" => "program_id", "autoInc" => "1");
$dalTableprograms["program_name"] = array("type"=>200,"varname"=>"program_name", "name" => "program_name", "autoInc" => "0");
$dalTableprograms["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableprograms["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTableprograms["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableprograms["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTableprograms["program_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_programs"] = &$dalTableprograms;
?>