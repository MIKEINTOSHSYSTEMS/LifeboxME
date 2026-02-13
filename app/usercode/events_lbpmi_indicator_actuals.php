<?php
class eventclass_lbpmi_indicator_actuals  extends TableEventsBase {
	
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
		'calculation_timestamp' => array(
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
	
	public function default_period_year_efedit(  ) {
	$defaultValue = date("Y");
return $defaultValue;
}

public function default_period_month_efedit(  ) {
	$defaultValue = date("m");
return $defaultValue;
}

public function default_calculation_timestamp_efedit(  ) {
	$defaultValue = strftime("%Y-%m-%d %H:%M:%S");
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