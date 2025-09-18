<?php
$tdatadevice_distribution_log = array();
$tdatadevice_distribution_log[".searchableFields"] = array();
$tdatadevice_distribution_log[".ShortName"] = "device_distribution_log";
$tdatadevice_distribution_log[".OwnerID"] = "";
$tdatadevice_distribution_log[".OriginalTable"] = "public.device_distribution_log";


$tdatadevice_distribution_log[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadevice_distribution_log[".originalPagesByType"] = $tdatadevice_distribution_log[".pagesByType"];
$tdatadevice_distribution_log[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadevice_distribution_log[".originalPages"] = $tdatadevice_distribution_log[".pages"];
$tdatadevice_distribution_log[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadevice_distribution_log[".originalDefaultPages"] = $tdatadevice_distribution_log[".defaultPages"];

//	field labels
$fieldLabelsdevice_distribution_log = array();
$fieldToolTipsdevice_distribution_log = array();
$pageTitlesdevice_distribution_log = array();
$placeHoldersdevice_distribution_log = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevice_distribution_log["English"] = array();
	$fieldToolTipsdevice_distribution_log["English"] = array();
	$placeHoldersdevice_distribution_log["English"] = array();
	$pageTitlesdevice_distribution_log["English"] = array();
	$fieldLabelsdevice_distribution_log["English"]["log_id"] = "Log Id";
	$fieldToolTipsdevice_distribution_log["English"]["log_id"] = "";
	$placeHoldersdevice_distribution_log["English"]["log_id"] = "";
	$fieldLabelsdevice_distribution_log["English"]["distribution_id"] = "Distribution Id";
	$fieldToolTipsdevice_distribution_log["English"]["distribution_id"] = "";
	$placeHoldersdevice_distribution_log["English"]["distribution_id"] = "";
	$fieldLabelsdevice_distribution_log["English"]["device_type"] = "Device Type";
	$fieldToolTipsdevice_distribution_log["English"]["device_type"] = "";
	$placeHoldersdevice_distribution_log["English"]["device_type"] = "";
	$fieldLabelsdevice_distribution_log["English"]["previous_quantity"] = "Previous Quantity";
	$fieldToolTipsdevice_distribution_log["English"]["previous_quantity"] = "";
	$placeHoldersdevice_distribution_log["English"]["previous_quantity"] = "";
	$fieldLabelsdevice_distribution_log["English"]["distributed_quantity"] = "Distributed Quantity";
	$fieldToolTipsdevice_distribution_log["English"]["distributed_quantity"] = "";
	$placeHoldersdevice_distribution_log["English"]["distributed_quantity"] = "";
	$fieldLabelsdevice_distribution_log["English"]["new_quantity"] = "New Quantity";
	$fieldToolTipsdevice_distribution_log["English"]["new_quantity"] = "";
	$placeHoldersdevice_distribution_log["English"]["new_quantity"] = "";
	$fieldLabelsdevice_distribution_log["English"]["performed_by"] = "Performed By";
	$fieldToolTipsdevice_distribution_log["English"]["performed_by"] = "";
	$placeHoldersdevice_distribution_log["English"]["performed_by"] = "";
	$fieldLabelsdevice_distribution_log["English"]["created_at"] = "Created At";
	$fieldToolTipsdevice_distribution_log["English"]["created_at"] = "";
	$placeHoldersdevice_distribution_log["English"]["created_at"] = "";
	if (count($fieldToolTipsdevice_distribution_log["English"]))
		$tdatadevice_distribution_log[".isUseToolTips"] = true;
}


	$tdatadevice_distribution_log[".NCSearch"] = true;



$tdatadevice_distribution_log[".shortTableName"] = "device_distribution_log";
$tdatadevice_distribution_log[".nSecOptions"] = 0;

$tdatadevice_distribution_log[".mainTableOwnerID"] = "";
$tdatadevice_distribution_log[".entityType"] = 0;
$tdatadevice_distribution_log[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadevice_distribution_log[".strOriginalTableName"] = "public.device_distribution_log";

	



$tdatadevice_distribution_log[".showAddInPopup"] = false;

$tdatadevice_distribution_log[".showEditInPopup"] = false;

$tdatadevice_distribution_log[".showViewInPopup"] = false;

$tdatadevice_distribution_log[".listAjax"] = false;
//	temporary
//$tdatadevice_distribution_log[".listAjax"] = false;

	$tdatadevice_distribution_log[".audit"] = true;

	$tdatadevice_distribution_log[".locking"] = false;


$pages = $tdatadevice_distribution_log[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevice_distribution_log[".edit"] = true;
	$tdatadevice_distribution_log[".afterEditAction"] = 1;
	$tdatadevice_distribution_log[".closePopupAfterEdit"] = 1;
	$tdatadevice_distribution_log[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevice_distribution_log[".add"] = true;
$tdatadevice_distribution_log[".afterAddAction"] = 1;
$tdatadevice_distribution_log[".closePopupAfterAdd"] = 1;
$tdatadevice_distribution_log[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevice_distribution_log[".list"] = true;
}



$tdatadevice_distribution_log[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevice_distribution_log[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevice_distribution_log[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevice_distribution_log[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevice_distribution_log[".printFriendly"] = true;
}



$tdatadevice_distribution_log[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevice_distribution_log[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevice_distribution_log[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevice_distribution_log[".isUseAjaxSuggest"] = true;



						

$tdatadevice_distribution_log[".ajaxCodeSnippetAdded"] = false;

$tdatadevice_distribution_log[".buttonsAdded"] = false;

$tdatadevice_distribution_log[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevice_distribution_log[".isUseTimeForSearch"] = false;


$tdatadevice_distribution_log[".badgeColor"] = "4169E1";


$tdatadevice_distribution_log[".allSearchFields"] = array();
$tdatadevice_distribution_log[".filterFields"] = array();
$tdatadevice_distribution_log[".requiredSearchFields"] = array();

$tdatadevice_distribution_log[".googleLikeFields"] = array();
$tdatadevice_distribution_log[".googleLikeFields"][] = "log_id";
$tdatadevice_distribution_log[".googleLikeFields"][] = "distribution_id";
$tdatadevice_distribution_log[".googleLikeFields"][] = "device_type";
$tdatadevice_distribution_log[".googleLikeFields"][] = "previous_quantity";
$tdatadevice_distribution_log[".googleLikeFields"][] = "distributed_quantity";
$tdatadevice_distribution_log[".googleLikeFields"][] = "new_quantity";
$tdatadevice_distribution_log[".googleLikeFields"][] = "performed_by";
$tdatadevice_distribution_log[".googleLikeFields"][] = "created_at";



$tdatadevice_distribution_log[".tableType"] = "list";

$tdatadevice_distribution_log[".printerPageOrientation"] = 0;
$tdatadevice_distribution_log[".nPrinterPageScale"] = 100;

$tdatadevice_distribution_log[".nPrinterSplitRecords"] = 40;

$tdatadevice_distribution_log[".geocodingEnabled"] = false;










$tdatadevice_distribution_log[".pageSize"] = 20;

$tdatadevice_distribution_log[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevice_distribution_log[".strOrderBy"] = $tstrOrderBy;

$tdatadevice_distribution_log[".orderindexes"] = array();


$tdatadevice_distribution_log[".sqlHead"] = "SELECT log_id,  	distribution_id,  	device_type,  	previous_quantity,  	distributed_quantity,  	new_quantity,  	performed_by,  	created_at";
$tdatadevice_distribution_log[".sqlFrom"] = "FROM \"public\".device_distribution_log";
$tdatadevice_distribution_log[".sqlWhereExpr"] = "";
$tdatadevice_distribution_log[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevice_distribution_log[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevice_distribution_log[".arrGroupsPerPage"] = $arrGPP;

$tdatadevice_distribution_log[".highlightSearchResults"] = true;

$tableKeysdevice_distribution_log = array();
$tableKeysdevice_distribution_log[] = "log_id";
$tdatadevice_distribution_log[".Keys"] = $tableKeysdevice_distribution_log;


$tdatadevice_distribution_log[".hideMobileList"] = array();




//	log_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_id";
	$fdata["GoodName"] = "log_id";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","log_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "log_id";

		$fdata["sourceSingle"] = "log_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "log_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["log_id"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "log_id";
//	distribution_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "distribution_id";
	$fdata["GoodName"] = "distribution_id";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","distribution_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distribution_id";

		$fdata["sourceSingle"] = "distribution_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distribution_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.device_distributions";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"device_type", 'lookupF'=>"device_type");
	$edata["autoCompleteFields"][] = array('masterF'=>"previous_quantity", 'lookupF'=>"quantity");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "distribution_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "order_reference";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "previous_quantity";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["distribution_id"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "distribution_id";
//	device_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "device_type";
	$fdata["GoodName"] = "device_type";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","device_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "device_type";

		$fdata["sourceSingle"] = "device_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "device_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.devices";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "device_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "device_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["device_type"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "device_type";
//	previous_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "previous_quantity";
	$fdata["GoodName"] = "previous_quantity";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","previous_quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "previous_quantity";

		$fdata["sourceSingle"] = "previous_quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "previous_quantity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.device_distributions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "distribution_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "quantity";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "distribution_id", "lookup" => "distribution_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["previous_quantity"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "previous_quantity";
//	distributed_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "distributed_quantity";
	$fdata["GoodName"] = "distributed_quantity";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","distributed_quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distributed_quantity";

		$fdata["sourceSingle"] = "distributed_quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distributed_quantity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["distributed_quantity"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "distributed_quantity";
//	new_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "new_quantity";
	$fdata["GoodName"] = "new_quantity";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","new_quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "new_quantity";

		$fdata["sourceSingle"] = "new_quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "new_quantity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["new_quantity"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "new_quantity";
//	performed_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "performed_by";
	$fdata["GoodName"] = "performed_by";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","performed_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "performed_by";

		$fdata["sourceSingle"] = "performed_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "performed_by";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["performed_by"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "performed_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.device_distribution_log";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_log","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadevice_distribution_log["created_at"] = $fdata;
		$tdatadevice_distribution_log[".searchableFields"][] = "created_at";


$tables_data["public.device_distribution_log"]=&$tdatadevice_distribution_log;
$field_labels["public_device_distribution_log"] = &$fieldLabelsdevice_distribution_log;
$fieldToolTips["public_device_distribution_log"] = &$fieldToolTipsdevice_distribution_log;
$placeHolders["public_device_distribution_log"] = &$placeHoldersdevice_distribution_log;
$page_titles["public_device_distribution_log"] = &$pageTitlesdevice_distribution_log;


changeTextControlsToDate( "public.device_distribution_log" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.device_distribution_log"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.device_distribution_log"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.device_distributions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.device_distributions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "device_distributions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.device_distribution_log"][0] = $masterParams;
				$masterTablesData["public.device_distribution_log"][0]["masterKeys"] = array();
	$masterTablesData["public.device_distribution_log"][0]["masterKeys"][]="distribution_id";
				$masterTablesData["public.device_distribution_log"][0]["detailKeys"] = array();
	$masterTablesData["public.device_distribution_log"][0]["detailKeys"][]="distribution_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_device_distribution_log()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "log_id,  	distribution_id,  	device_type,  	previous_quantity,  	distributed_quantity,  	new_quantity,  	performed_by,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".device_distribution_log";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "log_id",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto6["m_sql"] = "log_id";
$proto6["m_srcTableName"] = "public.device_distribution_log";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "distribution_id",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto8["m_sql"] = "distribution_id";
$proto8["m_srcTableName"] = "public.device_distribution_log";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "device_type",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto10["m_sql"] = "device_type";
$proto10["m_srcTableName"] = "public.device_distribution_log";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_quantity",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto12["m_sql"] = "previous_quantity";
$proto12["m_srcTableName"] = "public.device_distribution_log";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "distributed_quantity",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto14["m_sql"] = "distributed_quantity";
$proto14["m_srcTableName"] = "public.device_distribution_log";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "new_quantity",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto16["m_sql"] = "new_quantity";
$proto16["m_srcTableName"] = "public.device_distribution_log";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "performed_by",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto18["m_sql"] = "performed_by";
$proto18["m_srcTableName"] = "public.device_distribution_log";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.device_distribution_log",
	"m_srcTableName" => "public.device_distribution_log"
));

$proto20["m_sql"] = "created_at";
$proto20["m_srcTableName"] = "public.device_distribution_log";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.device_distribution_log";
$proto23["m_srcTableName"] = "public.device_distribution_log";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "log_id";
$proto23["m_columns"][] = "distribution_id";
$proto23["m_columns"][] = "device_type";
$proto23["m_columns"][] = "previous_quantity";
$proto23["m_columns"][] = "distributed_quantity";
$proto23["m_columns"][] = "new_quantity";
$proto23["m_columns"][] = "performed_by";
$proto23["m_columns"][] = "created_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".device_distribution_log";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.device_distribution_log";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.device_distribution_log";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_device_distribution_log = createSqlQuery_device_distribution_log();


	
				;

								

$tdatadevice_distribution_log[".sqlquery"] = $queryData_device_distribution_log;



$tdatadevice_distribution_log[".hasEvents"] = false;

?>