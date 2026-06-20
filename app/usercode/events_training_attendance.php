<?php
class eventclass_training_attendance  extends TableEventsBase {
	
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
		'attendance_date' => array(
			'edit' => true 
		),
		'recorded_at' => array(
			'edit' => true 
		),
		'recorded_by' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'recorded_at' => array(
			'edit' => true 
		),
		'recorded_by' => array(
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
	
	public function default_attendance_date_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d");
return $defaultValue;
}

public function default_recorded_at_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}

public function autoupdate_recorded_at_efedit(  ) {
	$defaultValue = date("Y-m-d H:i:s");
return $defaultValue;
}

public function default_recorded_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}

public function autoupdate_recorded_by_efedit(  ) {
	$defaultValue = $_SESSION["UserName"];
return $defaultValue;
}	

}


?>