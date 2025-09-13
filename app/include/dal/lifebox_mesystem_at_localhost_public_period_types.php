<?php
$dalTableperiod_types = array();
$dalTableperiod_types["period_id"] = array("type"=>3,"varname"=>"period_id", "name" => "period_id", "autoInc" => "1");
$dalTableperiod_types["period_name"] = array("type"=>200,"varname"=>"period_name", "name" => "period_name", "autoInc" => "0");
$dalTableperiod_types["period_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_period_types"] = &$dalTableperiod_types;
?>