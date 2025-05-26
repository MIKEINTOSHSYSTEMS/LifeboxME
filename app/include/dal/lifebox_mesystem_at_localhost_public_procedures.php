<?php
$dalTableprocedures = array();
$dalTableprocedures["procedure_id"] = array("type"=>3,"varname"=>"procedure_id", "name" => "procedure_id", "autoInc" => "1");
$dalTableprocedures["procedure_name"] = array("type"=>200,"varname"=>"procedure_name", "name" => "procedure_name", "autoInc" => "0");
$dalTableprocedures["procedure_category"] = array("type"=>200,"varname"=>"procedure_category", "name" => "procedure_category", "autoInc" => "0");
$dalTableprocedures["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableprocedures["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableprocedures["procedure_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_procedures"] = &$dalTableprocedures;
?>