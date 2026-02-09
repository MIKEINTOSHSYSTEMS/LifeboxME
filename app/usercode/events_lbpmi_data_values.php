<?php
class eventclass_lbpmi_data_values  extends TableEventsBase {
	
	function init() {
		$this->events = array(
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