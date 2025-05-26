<?php
$dalTablecase_antibiotics = array();
$dalTablecase_antibiotics["case_antibiotic_id"] = array("type"=>3,"varname"=>"case_antibiotic_id", "name" => "case_antibiotic_id", "autoInc" => "1");
$dalTablecase_antibiotics["case_id"] = array("type"=>13,"varname"=>"case_id", "name" => "case_id", "autoInc" => "0");
$dalTablecase_antibiotics["antibiotic_id"] = array("type"=>3,"varname"=>"antibiotic_id", "name" => "antibiotic_id", "autoInc" => "0");
$dalTablecase_antibiotics["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablecase_antibiotics["case_antibiotic_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_case_antibiotics"] = &$dalTablecase_antibiotics;
?>