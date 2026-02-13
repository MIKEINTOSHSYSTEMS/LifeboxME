<?php
class eventclass_device_distributions  extends TableEventsBase {
	
	function init() {
		$this->events = array(
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
		'distribution_year' => array(
			'edit' => true 
		),
		'created_at' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
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
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

addNotification(
    "New Device Disributed: ".$values["quantity"],
    "Device Distribution: ".$keys["distribution_id"],
    "fa-plus-circle",
    GetTableLink("device_distributions", "view", "editid1=".$keys["distribution_id"])
);

		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

$changes = array();

/* Quantity */
if($values["quantity"] != $oldvalues["quantity"]) {
    $changes[] = "Quantity changed from '".$oldvalues["quantity"]."' to '".$values["quantity"]."'";
}

/* Region */
if($values["region_id"] != $oldvalues["region_id"]) {
    $changes[] = "Region updated";
}

/* Country */
if($values["country_id"] != $oldvalues["country_id"]) {
    $changes[] = "Country updated";
}

/* Facility */
if($values["facility_id"] != $oldvalues["facility_id"]) {
    $changes[] = "Facility updated";
}

/* Order Reference */
if($values["order_reference"] != $oldvalues["order_reference"]) {
    $changes[] = "Order reference changed from '".$oldvalues["order_reference"]."' to '".$values["order_reference"]."'";
}

/* Distribution Year */
if($values["distribution_year"] != $oldvalues["distribution_year"]) {
    $changes[] = "Distribution year changed from '".$oldvalues["distribution_year"]."' to '".$values["distribution_year"]."'";
}

/* Distribution Month */
if($values["distribution_month"] != $oldvalues["distribution_month"]) {
    $changes[] = "Distribution month changed from '".$oldvalues["distribution_month"]."' to '".$values["distribution_month"]."'";
}

/* Device Type */
if($values["device_type"] != $oldvalues["device_type"]) {
    $changes[] = "Device type updated";
}

/* Payment Method */
if($values["payment_method"] != $oldvalues["payment_method"]) {
    $changes[] = "Payment method updated";
}

/* Transaction Type */
if($values["transaction_type"] != $oldvalues["transaction_type"]) {
    $changes[] = "Transaction type updated";
}

/* Donor */
if($values["donor"] != $oldvalues["donor"]) {
    $changes[] = "Donor updated";
}

/* Is Received (t/f) */
if($values["is_recieved"] != $oldvalues["is_recieved"]) {

    $oldStatus = ($oldvalues["is_recieved"] === 't') ? "Received" : "Not Received";
    $newStatus = ($values["is_recieved"] === 't') ? "Received" : "Not Received";

    $changes[] = "Received status changed from '".$oldStatus."' to '".$newStatus."'";
}

if(!empty($changes)) {

    addNotification(
        "Device Distribution Updated (Ref: ".$values["order_reference"].")",
        implode(" | ", $changes),
        "fa-edit",
        GetTableLink("device_distributions", "view", "editid1=".$keys["distribution_id"])
    );

}

		;
		
	}
	public function default_distribution_year_efedit(  ) {
	$defaultValue = strftime("%Y");
return $defaultValue;
}

public function default_created_at_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d");
return $defaultValue;
}

public function autoupdate_updated_at_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d");
return $defaultValue;
}	

}


?>