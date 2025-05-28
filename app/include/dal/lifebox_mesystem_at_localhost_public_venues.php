<?php
$dalTablevenues = array();
$dalTablevenues["venue_id"] = array("type"=>3,"varname"=>"venue_id", "name" => "venue_id", "autoInc" => "1");
$dalTablevenues["venue_name"] = array("type"=>200,"varname"=>"venue_name", "name" => "venue_name", "autoInc" => "0");
$dalTablevenues["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTablevenues["address_line1"] = array("type"=>200,"varname"=>"address_line1", "name" => "address_line1", "autoInc" => "0");
$dalTablevenues["address_line2"] = array("type"=>200,"varname"=>"address_line2", "name" => "address_line2", "autoInc" => "0");
$dalTablevenues["city"] = array("type"=>200,"varname"=>"city", "name" => "city", "autoInc" => "0");
$dalTablevenues["state_province"] = array("type"=>200,"varname"=>"state_province", "name" => "state_province", "autoInc" => "0");
$dalTablevenues["postal_code"] = array("type"=>200,"varname"=>"postal_code", "name" => "postal_code", "autoInc" => "0");
$dalTablevenues["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "0");
$dalTablevenues["capacity"] = array("type"=>3,"varname"=>"capacity", "name" => "capacity", "autoInc" => "0");
$dalTablevenues["room_type"] = array("type"=>200,"varname"=>"room_type", "name" => "room_type", "autoInc" => "0");
$dalTablevenues["amenities"] = array("type"=>201,"varname"=>"amenities", "name" => "amenities", "autoInc" => "0");
$dalTablevenues["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTablevenues["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablevenues["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablevenues["venue_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_venues"] = &$dalTablevenues;
?>