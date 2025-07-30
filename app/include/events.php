<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeRegister"]=true;



//	onscreen events
		$this->events["_global__snippet_apikey"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$sqlValues, &$message, $pageObject)
{

		
// Place event code here.

$api_key = getPasswordHash ($userdata["id"].$userdata["username"]);
$userdata["api_key"] = $api_key;
$_SESSION["apikey"] = $api_key;

return true;
;		
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event__global__snippet_apikey(&$params)
	{
	// Put your code here.
echo "Your API Key is: ".$_SESSION["apikey"];

	;
}




}
?>
