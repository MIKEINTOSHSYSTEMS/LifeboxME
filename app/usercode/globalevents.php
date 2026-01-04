<?php
class class_GlobalEvents extends GlobalEventsBase
{
	function init() {
		$this->events = array(
	'pageEvents' => array(
		'BeforeRegister' => true,
		'AfterAppInit' => true 
	),
	'onScreenEvents' => array(
		'4594' => true 
	),
	'dashboardEvents' => array(
		 
	),
	'buttons' => array(
		'4596' => true 
	),
	'maps' => array(
		 
	),
	'tablePermissions' => array(
		 
	),
	'recordEditable' => array(
		 
	) 
);
	}

		function BeforeRegister( &$userdata, &$sqlValues, &$message, $pageObject ) {
		// Place event code here.

$api_key = getPasswordHash ($userdata["id"].$userdata["username"]);
$userdata["api_key"] = $api_key;
$_SESSION["apikey"] = $api_key;

return true;
		;
		return true;
	}
	
	// custom buttons 
	
	// ajax code snippets
	
	
	// field events
	

	// code snippets
		// code snippet - _global__snippet_apikey
	function event_4594(  ) {
		
		// Put your code here.
echo "Your API Key is: ".$_SESSION["apikey"];
		;
		
	}


}
?>
