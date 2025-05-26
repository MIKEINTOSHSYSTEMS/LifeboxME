<?php
$dalTablediagnoses = array();
$dalTablediagnoses["diagnosis_id"] = array("type"=>3,"varname"=>"diagnosis_id", "name" => "diagnosis_id", "autoInc" => "1");
$dalTablediagnoses["diagnosis_name"] = array("type"=>200,"varname"=>"diagnosis_name", "name" => "diagnosis_name", "autoInc" => "0");
$dalTablediagnoses["diagnosis_category"] = array("type"=>200,"varname"=>"diagnosis_category", "name" => "diagnosis_category", "autoInc" => "0");
$dalTablediagnoses["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablediagnoses["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablediagnoses["diagnosis_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_diagnoses"] = &$dalTablediagnoses;
?>