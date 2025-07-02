<?php
$strTableName="public.lifeboxme_dhis2_analytics_data";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.lifeboxme_dhis2_analytics_data";

$gstrOrderBy="ORDER BY id, ou_level_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>