<?php
class eventclass_lbapt_annual_plan_tracker  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeMoveNextList' => true 
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
		function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		$statusColors = [
    1 => 'yellow',
    2 => 'red', 
    3 => 'grey',
    4 => 'green'
    
];

if (isset($statusColors[$data["status_id"]])) {
    $record["status_id_css"] .= 'background:' . $statusColors[$data["status_id"]] . ';';
}


// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
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