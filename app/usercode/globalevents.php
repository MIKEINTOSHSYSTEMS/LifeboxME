<?php
class class_GlobalEvents extends GlobalEventsBase
{
	function init() {
		$this->events = array(
	'pageEvents' => array(
		'BeforeRegister' => true,
		'AfterAppInit' => true,
		'BeforeLogin' => true,
		'OnPageLoad' => true 
	),
	'onScreenEvents' => array(
		'4594' => true 
	),
	'dashboardEvents' => array(
		 
	),
	'buttons' => array(
		'4596' => true,
		'22027' => true 
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
		
/**
 * Event: BeforeRegister
 * Context: Hardened domain validation + Core API Key assignment payload.
 */

$allowedDomains = ['lifebox.org', 'merqconsultancy.org', 'merqconsultancy.com'];
$email = trim($userdata['email']); // Ensure 'email' matches the exact database/form field name

// 1. Strict Domain Validation (Anti-Spoofing checks)
if (empty($email) || strpos($email, '@') === false) {
    $message = "Registration Denied: A valid organizational email is required.";
    return false;
}

$emailParts = explode('@', $email);
$domain = strtolower(trim(end($emailParts)));

// 2. Block unauthorized insertions
if (!in_array($domain, $allowedDomains)) {
    $message = "Registration Denied: Accounts cannot be provisioned under the @{$domain} domain.";
    return false;
}

// 3. Mandated Core API Key Generation (upon successful registration)
$api_key = getPasswordHash($userdata["id"] . $userdata["username"]);
$userdata["api_key"] = $api_key;
$_SESSION["apikey"] = $api_key;

// Proceed with database insertion
return true;




// Place event code here.

//$api_key = getPasswordHash ($userdata["id"].$userdata["username"]);
//$userdata["api_key"] = $api_key;
//$_SESSION["apikey"] = $api_key;

//return true;
		;
		return true;
	}

	function BeforeLogin( &$username, &$password, &$message, $pageObject, &$values ) {
		
/**
 * Event: BeforeLogin (V2.1 - Hardened & UI Enhanced)
 * Context: Validates user email domains with anti-spoofing constraints before core password validation.
 * UI: Implements Bootstrap/HTML injection for the error message output.
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
    
    // Email configuration check (Formatted Error)
    if (empty($email) || strpos($email, '@') === false) {
        $message = "<strong><i class='fa fa-exclamation-circle'></i> Access Denied:</strong> Invalid or missing email address configuration.";
        return false;
    }

    // 4. Strict Domain Targeting (Anti-Spoofing)
    $emailParts = explode('@', $email);
    $domain = strtolower(trim(end($emailParts))); // Target the LAST element to prevent multi-@ bypass
    
    if (in_array($domain, $allowedDomains)) {
        return true; 
    }
}

// 5. Unified Obfuscated Rejection (HTML/CSS Injected)
// PHPRunner renders $message inside the DOM, allowing direct HTML/CSS formatting.
$message = "
    <div style='text-align: center; line-height: 1.4;'>
        <strong style='font-size: 1.1em; display: block; margin-bottom: 6px;'>
            <i class='fa fa-ban'></i> Access Denied
        </strong>
        Invalid credentials or unauthorized organizational domain.<br><br>
        <span style='font-size: 1.05em;'>Only <b>Lifebox.org</b> and <b>Authorized</b> Users are Allowed to login!</span><br>
        <span style='color: #f4eb60; font-size: 0.85em; font-weight: 700; margin-top: 10px; display: inline-block;'>
            ⚠️ This incident will be reported. You have limited tries!
        </span>
    </div>
";

return false;



// MIKEINTOSH
// Place event code here.
// Use "Add Action" button to add code snippets.


		;
		return true;
	}
	
	// custom buttons 
		// custom button - CascadeDelete
	function buttonHandler_22027( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// Put your code here.

$selected_keys = $params["keys"];
$action = $params["action"];
$result["status"] = "error"; // Default fallback

$tables = [
    'Calculation Jobs'      => 'lbpmi_calculation_jobs', 
    'Calculation Logs'      => 'lbpmi_calculation_log', 
    'Indicator Actuals'     => 'lbpmi_indicator_actuals', 
    'Data Values'           => 'lbpmi_data_values', 
    'Training Sessions'     => 'training_sessions', 
    'Training Participants' => 'training_participants', 
    'Device Distributions'  => 'device_distributions', 
    'Venues'                => 'venues'
];

$facility_ids = [];
foreach ($selected_keys as $key) {
    $facility_ids[] = is_array($key) ? current($key) : $key;
}

// ==============================================================================
// PASS 2: FORCED EXECUTION 
// ==============================================================================
if ($action === "force_delete") {
    
    foreach ($facility_ids as $facility_id) {
        // Wipe dependencies
        foreach ($tables as $tbl) {
            DB::Exec(DB::PrepareSQL("DELETE FROM {$tbl} WHERE facility_id = :1", $facility_id));
        }
        // Wipe parent
        DB::Exec(DB::PrepareSQL("DELETE FROM facilities WHERE facility_id = :1", $facility_id));
    }
    $result["status"] = "success";

} 
// ==============================================================================
// PASS 1: IMPACT EVALUATION
// ==============================================================================
else {
    $total_impact = [];
    $total_count = 0;

    foreach ($facility_ids as $fid) {
        foreach ($tables as $label => $tbl) {
            $rs = DB::Query(DB::PrepareSQL("SELECT count(*) as c FROM {$tbl} WHERE facility_id = :1", $fid));
            if ($rs && $data = $rs->fetchAssoc()) {
                if ($data['c'] > 0) {
                    $total_impact[$label] = ($total_impact[$label] ?? 0) + $data['c'];
                    $total_count += $data['c'];
                }
            }
        }
    }

    if ($total_count > 0) {
        $result["status"] = "warning";
        
        $msg = "WARNING: CASCADE DELETION REQUIRED\n";
        $msg .= "========================================\n";
        $msg .= "You have selected " . count($facility_ids) . " facility(s).\n";
        $msg .= "This action will permanently destroy {$total_count} dependent records:\n\n";
        
        foreach ($total_impact as $label => $c) {
            $msg .= "  • {$label}: {$c} record(s)\n";
        }
        
        $msg .= "\nAre you absolutely sure you want to PERMANENTLY wipe these facilities and ALL related data above?";
        
        $result["message"] = $msg;
    } else {
        // No dependencies, safe to delete immediately
        foreach ($facility_ids as $facility_id) {
            DB::Exec(DB::PrepareSQL("DELETE FROM facilities WHERE facility_id = :1", $facility_id));
        }
        $result["status"] = "success";
    }
}

//$result["txt"] = $params["txt"]." world!";;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

	
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
