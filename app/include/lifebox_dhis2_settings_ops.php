<?php
$topslifebox_dhis2_settings = array();
		$topslifebox_dhis2_settings["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	id,
	lb_int_id,
	lb_int,
	cont_id,
	continent,
	count_id,
	country,
	hosp_fac_id,
	hospital_facility,
	\"level\",
	last_updated
FROM \"public\".lifeboxme_dhis2_orgunits",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
		$tables_data["Lifebox_DHIS2_Settings"][".operations"] = &$topslifebox_dhis2_settings;
?>