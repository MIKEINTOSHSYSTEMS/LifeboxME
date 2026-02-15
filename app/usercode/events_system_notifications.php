<?php
class eventclass_system_notifications  extends TableEventsBase {
	
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
		'created_at' => array(
			'edit' => true 
		),
		'created_by' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'updated_at' => array(
			'edit' => true 
		),
		'created_by' => array(
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
	
	public function default_created_at_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}

public function autoupdate_updated_at_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}

public function default_created_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}

public function autoupdate_created_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}	

}


?>