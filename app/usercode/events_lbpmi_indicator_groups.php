<?php
class eventclass_lbpmi_indicator_groups  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
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
		 
	),
	'autoUpdateValue' => array(
		 
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
$values["indicator_group_code"] = gen_random_string(); 

// $values["indicator_group_code"] = implode('-', str_split(gen_random_string(), 5));

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;



		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		// No Splitter - Directly generate an 11-character string
// $values["indicator_group_code"] = gen_random_string(); // WORKING but we do not to update the existing group unique id uncomment it if you want to update on edit

// $values["indicator_group_code"] = implode('-', str_split(gen_random_string(), 5)); //NOT WORKING


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
    "New Indicator Group Added: ".$values["indicator_group_name"],
    "Group ID: ".$keys["indicator_group_id"],
    "fa-plus-circle",
    GetTableLink("lbpmi_indicator_groups", "view", "editid1=".$keys["indicator_group_id"])
);

		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

$changes = array();

if($values["indicator_group_name"] != $oldvalues["indicator_group_name"]) {
    $changes[] = "Name changed from '".$oldvalues["indicator_group_name"]."' to '".$values["indicator_group_name"]."'";
}

if(!empty($changes)) {

    addNotification(
        "Indicator Group Updated",
        implode(", ", $changes),
        "fa-edit",
        GetTableLink("lbpmi_indicator_groups", "view", "editid1=".$keys["indicator_group_id"])
    );

}

		;
		
	}
		

}


?>