<?php
class eventclass_lbpmi_data_values  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'AfterAdd' => true,
	'AfterEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'period_year' => array(
			'edit' => true 
		),
		'period_month' => array(
			'edit' => true 
		),
		'period_day' => array(
			'edit' => true 
		),
		'stored_by' => array(
			'edit' => true 
		),
		'created' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'stored_by' => array(
			'edit' => true 
		),
		'last_updated' => array(
			'edit' => true 
		) 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

addNotification(
    "New Data Value Added: ".$values["value"],
    "Data ID: ".$keys["data_value_id"],
    "fa-plus-circle",
    GetTableLink("lbpmi_data_values", "view", "editid1=".$keys["data_value_id"])
);

		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

$changes = array();

/* Data Element */
if($values["data_element_id"] != $oldvalues["data_element_id"]) {
    $changes[] = "Element changed from '".$oldvalues["data_element_id"]."' to '".$values["data_element_id"]."'";
}

/* Period Type */
if($values["period_type"] != $oldvalues["period_type"]) {
    $changes[] = "Type changed from '".$oldvalues["period_type"]."' to '".$values["period_type"]."'";
}

/* Facility */
if($values["facility_id"] != $oldvalues["facility_id"]) {
    $changes[] = "Facility was updated";
}

/* Deleted Status (corrected) */
if($values["deleted"] != $oldvalues["deleted"]) {

    $oldStatus = ($oldvalues["deleted"] === 't') ? "Deleted" : "Active";
    $newStatus = ($values["deleted"] === 't') ? "Deleted" : "Active";

    $changes[] = "Status changed from '".$oldStatus."' to '".$newStatus."'";
}

if(!empty($changes)) {

    addNotification(
        "Value Updated: ".$values["value"],
        implode(" | ", $changes),
        "fa-edit",
        GetTableLink("lbpmi_data_values", "view", "editid1=".$keys["data_value_id"])
    );

}

		;
		
	}
	public function default_period_year_efedit(  ) {
	$defaultValue = date("Y");
return $defaultValue;
}

public function default_period_month_efedit(  ) {
	$defaultValue = date("m");
return $defaultValue;
}

public function default_period_day_efedit(  ) {
	$defaultValue = date("Y-m-d");
return $defaultValue;
}

public function default_stored_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}

public function autoupdate_stored_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}

public function default_created_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d %H:%M:%S");
return $defaultValue;
}

public function autoupdate_last_updated_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d %H:%M:%S");
return $defaultValue;
}	

}


?>