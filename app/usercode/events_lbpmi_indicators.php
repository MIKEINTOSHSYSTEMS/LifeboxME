<?php
class eventclass_lbpmi_indicators  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'AfterAdd' => true,
	'AfterEdit' => true,
	'OnPageLoad' => true 
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
		'created_by' => array(
			'edit' => true 
		),
		'created_at' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'created_by' => array(
			'edit' => true 
		),
		'updated_at' => array(
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
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		// No Splitter - Directly generate an 11-character string
$values["indicator_code"] = gen_random_string(); 

// $values["indicator_code"] = implode('-', str_split(gen_random_string(), 5));


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		// No Splitter - Directly generate an 11-character string
//$values["indicator_code"] = gen_random_string();  //Correct and Working No need to change the indicator if you are updating it but uncomment if you want to make it update the unique code

// $values["indicator_code"] = implode('-', str_split(gen_random_string(), 5)); // WRONG

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

addNotification(
    "New Indicator Added: ".$values["indicator_name"],
    "Group ID: ".$keys["indicator_id"],
    "fa-plus-circle",
    GetTableLink("lbpmi_indicators", "view", "editid1=".$keys["indicator_id"])
);

		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

$changes = array();

/* Name */
if($values["indicator_name"] != $oldvalues["indicator_name"]) {
    $changes[] = "Name changed from '".$oldvalues["indicator_name"]."' to '".$values["indicator_name"]."'";
}

/* Type */
if($values["indicator_type"] != $oldvalues["indicator_type"]) {
    $changes[] = "Type changed from '".$oldvalues["indicator_type"]."' to '".$values["indicator_type"]."'";
}

/* Formula */
if($values["formula"] != $oldvalues["formula"]) {
    $changes[] = "Formula was updated";
}

/* Active Status (t / f) */
if($values["is_active"] != $oldvalues["is_active"]) {

    $oldStatus = ($oldvalues["is_active"] === 't') ? "Active" : "Inactive";
    $newStatus = ($values["is_active"] === 't') ? "Active" : "Inactive";

    $changes[] = "Status changed from '".$oldStatus."' to '".$newStatus."'";
}

if(!empty($changes)) {

    addNotification(
        "Indicator Updated: ".$values["indicator_name"],
        implode(" | ", $changes),
        "fa-edit",
        GetTableLink("lbpmi_indicators", "view", "editid1=".$keys["indicator_id"])
    );

}

		;
		
	}
	public function default_created_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}

public function autoupdate_created_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}

public function default_created_at_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d %H:%M:%S");
return $defaultValue;
}

public function autoupdate_updated_at_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d %H:%M:%S");
return $defaultValue;
}	

}


?>