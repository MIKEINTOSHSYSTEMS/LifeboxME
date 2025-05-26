<?php
$dalTableregions = array();
$dalTableregions["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "1");
$dalTableregions["region_name"] = array("type"=>200,"varname"=>"region_name", "name" => "region_name", "autoInc" => "0");
$dalTableregions["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableregions["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableregions["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTableregions["region_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_regions"] = &$dalTableregions;
?>