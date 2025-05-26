<?php
$dalTablelanguages = array();
$dalTablelanguages["language_id"] = array("type"=>3,"varname"=>"language_id", "name" => "language_id", "autoInc" => "1");
$dalTablelanguages["language_name"] = array("type"=>200,"varname"=>"language_name", "name" => "language_name", "autoInc" => "0");
$dalTablelanguages["iso_code"] = array("type"=>200,"varname"=>"iso_code", "name" => "iso_code", "autoInc" => "0");
$dalTablelanguages["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablelanguages["language_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_languages"] = &$dalTablelanguages;
?>