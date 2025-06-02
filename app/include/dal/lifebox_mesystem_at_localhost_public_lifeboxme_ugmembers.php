<?php
$dalTablelifeboxme_ugmembers = array();
$dalTablelifeboxme_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablelifeboxme_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablelifeboxme_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablelifeboxme_ugmembers["UserName"]["key"]=true;
$dalTablelifeboxme_ugmembers["GroupID"]["key"]=true;
$dalTablelifeboxme_ugmembers["Provider"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_lifeboxme_ugmembers"] = &$dalTablelifeboxme_ugmembers;
?>