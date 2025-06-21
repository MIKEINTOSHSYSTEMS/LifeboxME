<?php
$topslifebox_dhis2_orgunits = array();
			$topslifebox_dhis2_orgunits["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/orgunits/index.php",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "4",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["Lifebox_DHIS2_OrgUnits"][".operations"] = &$topslifebox_dhis2_orgunits;
?>