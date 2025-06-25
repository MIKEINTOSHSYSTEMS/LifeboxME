<?php
$topslifebox_dhis2_dataitems = array();
			$topslifebox_dhis2_dataitems["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/indicators/dataItems.php",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "4",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["Lifebox_DHIS2_dataItems"][".operations"] = &$topslifebox_dhis2_dataitems;
?>