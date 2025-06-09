<?php
$dalTabledevice_distribution_log = array();
$dalTabledevice_distribution_log["log_id"] = array("type"=>3,"varname"=>"log_id", "name" => "log_id", "autoInc" => "1");
$dalTabledevice_distribution_log["distribution_id"] = array("type"=>3,"varname"=>"distribution_id", "name" => "distribution_id", "autoInc" => "0");
$dalTabledevice_distribution_log["device_type"] = array("type"=>3,"varname"=>"device_type", "name" => "device_type", "autoInc" => "0");
$dalTabledevice_distribution_log["previous_quantity"] = array("type"=>3,"varname"=>"previous_quantity", "name" => "previous_quantity", "autoInc" => "0");
$dalTabledevice_distribution_log["distributed_quantity"] = array("type"=>3,"varname"=>"distributed_quantity", "name" => "distributed_quantity", "autoInc" => "0");
$dalTabledevice_distribution_log["new_quantity"] = array("type"=>3,"varname"=>"new_quantity", "name" => "new_quantity", "autoInc" => "0");
$dalTabledevice_distribution_log["performed_by"] = array("type"=>200,"varname"=>"performed_by", "name" => "performed_by", "autoInc" => "0");
$dalTabledevice_distribution_log["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabledevice_distribution_log["log_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_device_distribution_log"] = &$dalTabledevice_distribution_log;
?>