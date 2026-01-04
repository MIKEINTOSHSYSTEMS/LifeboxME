<?php
$dDebug = false;


//	variables for project settings
$lookupTableLinks = array();
$runnerProjectSettings = array();
$runnerTableSettings = array();
$runnerMenus = array();
$runnerDatabases = array();
$runnerLangMessages = array();
$runnerPageInfo = array();
$locale_info = array();
$page_options = array();
$runnerTableLabels = array();

// runtime cached values
$pd_pages = array();
$runnerRestConnections = array();
$all_page_layouts = array();
$page_layouts = array();
$menuCache = array();
$cCharset = "utf-8";
$cCodePage = 65001;
$_cachedSeachClauses = array();

//	top-level event parameters
$table = "";
$query = null;

// application settings
$fieldFilterMaxDisplayValueLength = 50;
$fieldFilterMaxSearchValueLength = 200;
$fieldFilterMaxValuesCount = 3000;
$fieldFilterDefaultValue = "";
$fieldFilterValueShrinkPostfix = "...";
$gPermissionsRefreshTime = 5;
$auditMaxFieldLength = 300;
$csrfProtectionOff = false;
$cacheImages = true;
$resizeImagesOnClient = true;
$gLoadSearchControls = 30;
$bSubqueriesSupported = true;
$regenerateSessionOnLogin = true;
$ajaxSearchStartsWith = true;
$suggestAllContent = true;
$doMySQLCountBugWorkaround = false;


//	application state variables
$mediaType = isset($_COOKIE["mediaType"]) ? $_COOKIE["mediaType"] : 0;
$gPermissionsRead = false;
$gReadPermissions = true;
$pagesData = array();
$logoutPerformed = false;
$gGuestHasPermissions = -1;

//	legacy variables and settings
$conn = null;
$loginKeyFields = array();
$cLoginTable = "";
$cUserNameField = "";
$cUserGroupField = "";


//	necessary global objects
$contextStack = new RunnerContext;
$cman = new ConnectionManager();
$restApis = new RestManager();
$breadcrumb_labels = array();
$dummyEvents = new eventsBase;
$tableEvents = array();
$globalEvents = new class_GlobalEvents;
$onDemnadVariables = array();
$jsonDataFromRequest = null;
$runnerDbTableInfo = array();
$runnerDbTables = array();
$tableinfo_cache = array();
/**
 * substitute for $_SESSION when in REST API (stateless) mode
 */
$restStorage = array();
/**
 * Only used in .NET
 */
$_eventClasses = array();



// debug variables
$strictSettings = false;
$debug2Factor = false;


//	reference data 
$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

$pageTypesForView = array();
$pageTypesForView[] = "list";
$pageTypesForView[] = "view";
$pageTypesForView[] = "export";
$pageTypesForView[] = "print";
$pageTypesForView[] = "report";
$pageTypesForView[] = "rprint";
$pageTypesForView[] = "chart";
$pageTypesForView[] = "masterlist";
$pageTypesForView[] = "masterprint";
$pageTypesForView[] = "gantt";
$pageTypesForView[] = "calendar";

$pageTypesForEdit = array();
$pageTypesForEdit[] = "add";
$pageTypesForEdit[] = "edit";
$pageTypesForEdit[] = "search";
$pageTypesForEdit[] = "register";


?>