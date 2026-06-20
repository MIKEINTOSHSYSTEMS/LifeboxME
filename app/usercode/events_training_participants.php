<?php
class eventclass_training_participants  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	 
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
		'training_date' => array(
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
		'phone' => array(
			'edit' => true 
		) 
	) 
);
			}
	
	public function plugin_phone_efedit( $pageObject ) {
	$this->settings = array();
$this->settings["required"] = true;                    // Wether is mandatory
$this->settings["tooltip"] = "Click here to enter telephone"; // Information tooltip
$this->settings["initialCountry"] = "et";               // Country default
$this->settings["preferredCountries"] = "et";           // Preferred Country;
return $this->settings;
}

public function default_training_date_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}

public function default_created_at_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}

public function autoupdate_updated_at_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}	

}


?>