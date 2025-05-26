<?php
$dalTableantibiotics = array();
$dalTableantibiotics["antibiotic_id"] = array("type"=>3,"varname"=>"antibiotic_id", "name" => "antibiotic_id", "autoInc" => "1");
$dalTableantibiotics["antibiotic_name"] = array("type"=>200,"varname"=>"antibiotic_name", "name" => "antibiotic_name", "autoInc" => "0");
$dalTableantibiotics["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableantibiotics["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableantibiotics["antibiotic_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_antibiotics"] = &$dalTableantibiotics;
?>