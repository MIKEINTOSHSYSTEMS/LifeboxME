<?php
class eventclass_lbpmi_data_values  extends TableEventsBase {
	
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