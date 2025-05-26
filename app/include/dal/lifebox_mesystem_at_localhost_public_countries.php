<?php
$dalTablecountries = array();
$dalTablecountries["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "1");
$dalTablecountries["country_name"] = array("type"=>200,"varname"=>"country_name", "name" => "country_name", "autoInc" => "0");
$dalTablecountries["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTablecountries["iso_code"] = array("type"=>200,"varname"=>"iso_code", "name" => "iso_code", "autoInc" => "0");
$dalTablecountries["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablecountries["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablecountries["country_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_countries"] = &$dalTablecountries;
?>