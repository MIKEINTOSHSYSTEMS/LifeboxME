<?php
class eventclass_lbpmi_calculation_jobs  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeProcessList' => true 
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
		function BeforeProcessList( $pageObject ) {
		$sql = "SELECT public.process_calculation_jobs();";
db_exec($sql, $conn);

// Optional response message
//echo "Calculation job completed.";

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
		

}


?>