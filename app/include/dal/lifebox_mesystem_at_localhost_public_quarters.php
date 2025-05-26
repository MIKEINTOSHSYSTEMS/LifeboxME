<?php
$dalTablequarters = array();
$dalTablequarters["quarter_id"] = array("type"=>3,"varname"=>"quarter_id", "name" => "quarter_id", "autoInc" => "1");
$dalTablequarters["quarter_name"] = array("type"=>200,"varname"=>"quarter_name", "name" => "quarter_name", "autoInc" => "0");
$dalTablequarters["quarter_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_quarters"] = &$dalTablequarters;
?>