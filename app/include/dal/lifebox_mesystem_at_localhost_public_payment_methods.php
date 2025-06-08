<?php
$dalTablepayment_methods = array();
$dalTablepayment_methods["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepayment_methods["method"] = array("type"=>200,"varname"=>"method", "name" => "method", "autoInc" => "0");
$dalTablepayment_methods["id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_payment_methods"] = &$dalTablepayment_methods;
?>