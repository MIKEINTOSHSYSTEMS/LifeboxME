<?php
$dalTabletransaction_types = array();
$dalTabletransaction_types["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletransaction_types["transaction_name"] = array("type"=>200,"varname"=>"transaction_name", "name" => "transaction_name", "autoInc" => "0");
$dalTabletransaction_types["id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_transaction_types"] = &$dalTabletransaction_types;
?>