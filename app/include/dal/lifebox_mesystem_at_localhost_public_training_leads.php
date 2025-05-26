<?php
$dalTabletraining_leads = array();
$dalTabletraining_leads["training_lead_id"] = array("type"=>3,"varname"=>"training_lead_id", "name" => "training_lead_id", "autoInc" => "1");
$dalTabletraining_leads["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTabletraining_leads["staff_id"] = array("type"=>3,"varname"=>"staff_id", "name" => "staff_id", "autoInc" => "0");
$dalTabletraining_leads["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_leads["training_lead_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_training_leads"] = &$dalTabletraining_leads;
?>