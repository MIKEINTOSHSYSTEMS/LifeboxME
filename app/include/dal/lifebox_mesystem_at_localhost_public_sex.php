<?php
$dalTablesex = array();
$dalTablesex["sex_id"] = array("type"=>3,"varname"=>"sex_id", "name" => "sex_id", "autoInc" => "1");
$dalTablesex["sex_name"] = array("type"=>200,"varname"=>"sex_name", "name" => "sex_name", "autoInc" => "0");
$dalTablesex["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablesex["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTablesex["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablesex["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablesex["sex_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_sex"] = &$dalTablesex;
?>