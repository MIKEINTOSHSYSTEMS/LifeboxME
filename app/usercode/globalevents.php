<?php
class class_GlobalEvents extends GlobalEventsBase
{
	function init() {
		$this->events = array(
	'pageEvents' => array(
		'BeforeRegister' => true,
		'AfterAppInit' => true,
		'BeforeLogin' => true 
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

	function BeforeLogin( &$username, &$password, &$message, $pageObject, &$values ) {
		
/**
 * Event: BeforeLogin (V2 - Hardened)
 * Context: Validates user email domains with anti-spoofing constraints before core password validation.
 */

// Update the allowed user email domains for login
$allowedDomains = ['lifebox.org', 'merqconsultancy.org', 'merqconsultancy.com'];
$bypassAccounts = ['admin', 'sysadmin']; 

// 1. Dynamic Bypass Evaluation
if (in_array(strtolower(trim($username)), $bypassAccounts)) {
    return true; 
}

// 2. Database Lookup via Modern API
$sql = DB::PrepareSQL("SELECT email FROM users WHERE username = ':1'", $username);
$rs = DB::Query($sql);

// 3. Defensive Extraction & Validation
if ($rs && $data = $rs->fetchAssoc()) {
    $email = trim($data['email']);
    
    if (empty($email) || strpos($email, '@') === false) {
        $message = "Access Denied: Invalid or missing email address configuration.";
        return false;
    }

    // 4. Strict Domain Targeting (Anti-Spoofing)
    $emailParts = explode('@', $email);
    $domain = strtolower(trim(end($emailParts))); // Target the LAST element to prevent multi-@ bypass
    
    if (in_array($domain, $allowedDomains)) {
        return true; 
    }
}

// 5. Unified Obfuscated Rejection (Prevents Username Enumeration)
$message = "Access Denied: Invalid credentials or unauthorized organizational domain.";
return false;



// MIKEINTOSH
// Place event code here.
// Use "Add Action" button to add code snippets.


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
