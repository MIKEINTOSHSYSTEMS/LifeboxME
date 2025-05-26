<?php
$dalTablefacilities = array();
$dalTablefacilities["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "1");
$dalTablefacilities["facility_name"] = array("type"=>200,"varname"=>"facility_name", "name" => "facility_name", "autoInc" => "0");
$dalTablefacilities["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "0");
$dalTablefacilities["facility_type"] = array("type"=>200,"varname"=>"facility_type", "name" => "facility_type", "autoInc" => "0");
$dalTablefacilities["address"] = array("type"=>201,"varname"=>"address", "name" => "address", "autoInc" => "0");
$dalTablefacilities["city"] = array("type"=>200,"varname"=>"city", "name" => "city", "autoInc" => "0");
$dalTablefacilities["latitude"] = array("type"=>14,"varname"=>"latitude", "name" => "latitude", "autoInc" => "0");
$dalTablefacilities["longitude"] = array("type"=>14,"varname"=>"longitude", "name" => "longitude", "autoInc" => "0");
$dalTablefacilities["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTablefacilities["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablefacilities["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablefacilities["facility_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_facilities"] = &$dalTablefacilities;
?>