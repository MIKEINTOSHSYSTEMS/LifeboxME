<?php

//	load code
require_once("phpfunctions.php");
require_once( getabspath( 'include/commonfunctions.php' ) );
require_once( getabspath( 'classes/security.php' ) );
require_once( getabspath( 'classes/runnerpage.php' ) );
require_once( getabspath( 'classes/context.php' ) );
require_once( getabspath( 'connections/ConnectionManager.php' ) );
require_once( getabspath( 'connections/apis.php' ) );
require_once( getabspath( 'classes/cipherer.php' ) );
require_once( getabspath( 'classes/labels.php' ) );
require_once( getabspath( 'classes/datasource/datacontext.php') );
require_once( getabspath( 'classes/db.php' ) );
require_once( getabspath( 'classes/projectsettings.php' ) );
require_once( getabspath( 'classes/db.php' ) );
require_once( getabspath( 'classes/runnermenu.php' ) );
require_once( getabspath( 'classes/pdlayout.php' ) );
require_once( getabspath( 'include/LocaleFunctions.php' ) );
require_once( getabspath( 'classes/wheretabs.php' ) );
require_once( getabspath( 'classes/filesystem/filesystem.php' ) );
require_once( getabspath( 'classes/events.php' ) );
require_once( getabspath( 'classes/datasource/httprequest.php') );
require_once( getabspath( 'classes/searchclause.php' ) );
require_once( getabspath( 'classes/sql.php') );
require_once( getabspath( 'classes/audit.php' ) );
require_once( getabspath( 'connections/dbfunctions_legacy.php' ) );
require_once( getabspath( 'classes/controls/ViewControl.php' ) );

//	events
require_once( getabspath( 'usercode/globalevents.php' ) );
require_once( getabspath( 'usercode/db.php' ) );


//	init constants and variables
require_once( getabspath( 'include/constants.php' ) );
require_once( getabspath( 'include/globalvars.php' ) );

// load settings
require_once( getabspath( 'connections/databases.php' ) );
require_once( getabspath( 'settings/project.php' ) );
require_once( getabspath( 'settings/project_add.php' ) );
require_once( getabspath( 'include/locale.php' ) );


//E_STRICT has become a part of E_ALL since php 5.4 only
error_reporting( (E_ALL ) &  ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
set_error_handler( 'runner_error_handler' );

require_once( getabspath( 'include/legacy.php' ) );

startSession();

//	language initialization
$mlang_defaultlang = getDefaultLanguage();
loadLanguage( mlang_getcurrentlang() );
//locale initialization
$locale_info["LOCALE_ILONGDATE"] = GetLongDateFormat();


header("Content-Type: text/html; charset=" . $runnerProjectSettings['charset'] );

if( Security::hasLogin() ) {
	Security::autoLoginAsGuest();
	Security::updateCSRFCookie();
}


require_once( getabspath( 'usercode/initapp.php' ) );

?>