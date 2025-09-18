<?php
$tdatadevice_inventory_changes = array();
$tdatadevice_inventory_changes[".searchableFields"] = array();
$tdatadevice_inventory_changes[".ShortName"] = "device_inventory_changes";
$tdatadevice_inventory_changes[".OwnerID"] = "";
$tdatadevice_inventory_changes[".OriginalTable"] = "public.device_inventory_changes";


$tdatadevice_inventory_changes[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadevice_inventory_changes[".originalPagesByType"] = $tdatadevice_inventory_changes[".pagesByType"];
$tdatadevice_inventory_changes[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadevice_inventory_changes[".originalPages"] = $tdatadevice_inventory_changes[".pages"];
$tdatadevice_inventory_changes[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadevice_inventory_changes[".originalDefaultPages"] = $tdatadevice_inventory_changes[".defaultPages"];

//	field labels
$fieldLabelsdevice_inventory_changes = array();
$fieldToolTipsdevice_inventory_changes = array();
$pageTitlesdevice_inventory_changes = array();
$placeHoldersdevice_inventory_changes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevice_inventory_changes["English"] = array();
	$fieldToolTipsdevice_inventory_changes["English"] = array();
	$placeHoldersdevice_inventory_changes["English"] = array();
	$pageTitlesdevice_inventory_changes["English"] = array();
	$fieldLabelsdevice_inventory_changes["English"]["device_id"] = "Device Id";
	$fieldToolTipsdevice_inventory_changes["English"]["device_id"] = "";
	$placeHoldersdevice_inventory_changes["English"]["device_id"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["device_type"] = "Device Type";
	$fieldToolTipsdevice_inventory_changes["English"]["device_type"] = "";
	$placeHoldersdevice_inventory_changes["English"]["device_type"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["model"] = "Model";
	$fieldToolTipsdevice_inventory_changes["English"]["model"] = "";
	$placeHoldersdevice_inventory_changes["English"]["model"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["current_quantity"] = "Current Quantity";
	$fieldToolTipsdevice_inventory_changes["English"]["current_quantity"] = "";
	$placeHoldersdevice_inventory_changes["English"]["current_quantity"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["total_quantity"] = "Total Quantity";
	$fieldToolTipsdevice_inventory_changes["English"]["total_quantity"] = "";
	$placeHoldersdevice_inventory_changes["English"]["total_quantity"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["total_distributed"] = "Total Distributed";
	$fieldToolTipsdevice_inventory_changes["English"]["total_distributed"] = "";
	$placeHoldersdevice_inventory_changes["English"]["total_distributed"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["calculated_available"] = "Calculated Available";
	$fieldToolTipsdevice_inventory_changes["English"]["calculated_available"] = "";
	$placeHoldersdevice_inventory_changes["English"]["calculated_available"] = "";
	$fieldLabelsdevice_inventory_changes["English"]["last_transaction"] = "Last Transaction";
	$fieldToolTipsdevice_inventory_changes["English"]["last_transaction"] = "";
	$placeHoldersdevice_inventory_changes["English"]["last_transaction"] = "";
	if (count($fieldToolTipsdevice_inventory_changes["English"]))
		$tdatadevice_inventory_changes[".isUseToolTips"] = true;
}


	$tdatadevice_inventory_changes[".NCSearch"] = true;



$tdatadevice_inventory_changes[".shortTableName"] = "device_inventory_changes";
$tdatadevice_inventory_changes[".nSecOptions"] = 0;

$tdatadevice_inventory_changes[".mainTableOwnerID"] = "";
$tdatadevice_inventory_changes[".entityType"] = 0;
$tdatadevice_inventory_changes[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadevice_inventory_changes[".strOriginalTableName"] = "public.device_inventory_changes";

	



$tdatadevice_inventory_changes[".showAddInPopup"] = false;

$tdatadevice_inventory_changes[".showEditInPopup"] = false;

$tdatadevice_inventory_changes[".showViewInPopup"] = false;

$tdatadevice_inventory_changes[".listAjax"] = false;
//	temporary
//$tdatadevice_inventory_changes[".listAjax"] = false;

	$tdatadevice_inventory_changes[".audit"] = true;

	$tdatadevice_inventory_changes[".locking"] = false;


$pages = $tdatadevice_inventory_changes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevice_inventory_changes[".edit"] = true;
	$tdatadevice_inventory_changes[".afterEditAction"] = 1;
	$tdatadevice_inventory_changes[".closePopupAfterEdit"] = 1;
	$tdatadevice_inventory_changes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevice_inventory_changes[".add"] = true;
$tdatadevice_inventory_changes[".afterAddAction"] = 1;
$tdatadevice_inventory_changes[".closePopupAfterAdd"] = 1;
$tdatadevice_inventory_changes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevice_inventory_changes[".list"] = true;
}



$tdatadevice_inventory_changes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevice_inventory_changes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevice_inventory_changes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevice_inventory_changes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevice_inventory_changes[".printFriendly"] = true;
}



$tdatadevice_inventory_changes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevice_inventory_changes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevice_inventory_changes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevice_inventory_changes[".isUseAjaxSuggest"] = true;



			

$tdatadevice_inventory_changes[".ajaxCodeSnippetAdded"] = false;

$tdatadevice_inventory_changes[".buttonsAdded"] = false;

$tdatadevice_inventory_changes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevice_inventory_changes[".isUseTimeForSearch"] = false;


$tdatadevice_inventory_changes[".badgeColor"] = "6B8E23";


$tdatadevice_inventory_changes[".allSearchFields"] = array();
$tdatadevice_inventory_changes[".filterFields"] = array();
$tdatadevice_inventory_changes[".requiredSearchFields"] = array();

$tdatadevice_inventory_changes[".googleLikeFields"] = array();
$tdatadevice_inventory_changes[".googleLikeFields"][] = "device_id";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "device_type";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "model";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "current_quantity";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "total_quantity";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "total_distributed";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "calculated_available";
$tdatadevice_inventory_changes[".googleLikeFields"][] = "last_transaction";



$tdatadevice_inventory_changes[".tableType"] = "list";

$tdatadevice_inventory_changes[".printerPageOrientation"] = 0;
$tdatadevice_inventory_changes[".nPrinterPageScale"] = 100;

$tdatadevice_inventory_changes[".nPrinterSplitRecords"] = 40;

$tdatadevice_inventory_changes[".geocodingEnabled"] = false;










$tdatadevice_inventory_changes[".pageSize"] = 20;

$tdatadevice_inventory_changes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevice_inventory_changes[".strOrderBy"] = $tstrOrderBy;

$tdatadevice_inventory_changes[".orderindexes"] = array();


$tdatadevice_inventory_changes[".sqlHead"] = "SELECT device_id,  	device_type,  	model,  	current_quantity,  	total_quantity,  	total_distributed,  	calculated_available,  	last_transaction";
$tdatadevice_inventory_changes[".sqlFrom"] = "FROM \"public\".device_inventory_changes";
$tdatadevice_inventory_changes[".sqlWhereExpr"] = "";
$tdatadevice_inventory_changes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevice_inventory_changes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevice_inventory_changes[".arrGroupsPerPage"] = $arrGPP;

$tdatadevice_inventory_changes[".highlightSearchResults"] = true;

$tableKeysdevice_inventory_changes = array();
$tdatadevice_inventory_changes[".Keys"] = $tableKeysdevice_inventory_changes;


$tdatadevice_inventory_changes[".hideMobileList"] = array();




//	device_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "device_id";
	$fdata["GoodName"] = "device_id";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","device_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "device_id";

		$fdata["sourceSingle"] = "device_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "device_id";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadevice_inventory_changes["device_id"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "device_id";
//	device_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "device_type";
	$fdata["GoodName"] = "device_type";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","device_type");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatadevice_inventory_changes["device_type"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "device_type";
//	model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "model";
	$fdata["GoodName"] = "model";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","model");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "model";

		$fdata["sourceSingle"] = "model";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "model";

	
	
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


	$tdatadevice_inventory_changes["model"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "model";
//	current_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "current_quantity";
	$fdata["GoodName"] = "current_quantity";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","current_quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "current_quantity";

		$fdata["sourceSingle"] = "current_quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "current_quantity";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadevice_inventory_changes["current_quantity"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "current_quantity";
//	total_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_quantity";
	$fdata["GoodName"] = "total_quantity";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","total_quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_quantity";

		$fdata["sourceSingle"] = "total_quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_quantity";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadevice_inventory_changes["total_quantity"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "total_quantity";
//	total_distributed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_distributed";
	$fdata["GoodName"] = "total_distributed";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","total_distributed");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "total_distributed";

		$fdata["sourceSingle"] = "total_distributed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_distributed";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadevice_inventory_changes["total_distributed"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "total_distributed";
//	calculated_available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calculated_available";
	$fdata["GoodName"] = "calculated_available";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","calculated_available");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "calculated_available";

		$fdata["sourceSingle"] = "calculated_available";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calculated_available";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadevice_inventory_changes["calculated_available"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "calculated_available";
//	last_transaction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "last_transaction";
	$fdata["GoodName"] = "last_transaction";
	$fdata["ownerTable"] = "public.device_inventory_changes";
	$fdata["Label"] = GetFieldLabel("public_device_inventory_changes","last_transaction");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_transaction";

		$fdata["sourceSingle"] = "last_transaction";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_transaction";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatadevice_inventory_changes["last_transaction"] = $fdata;
		$tdatadevice_inventory_changes[".searchableFields"][] = "last_transaction";


$tables_data["public.device_inventory_changes"]=&$tdatadevice_inventory_changes;
$field_labels["public_device_inventory_changes"] = &$fieldLabelsdevice_inventory_changes;
$fieldToolTips["public_device_inventory_changes"] = &$fieldToolTipsdevice_inventory_changes;
$placeHolders["public_device_inventory_changes"] = &$placeHoldersdevice_inventory_changes;
$page_titles["public_device_inventory_changes"] = &$pageTitlesdevice_inventory_changes;


changeTextControlsToDate( "public.device_inventory_changes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.device_inventory_changes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.device_inventory_changes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_device_inventory_changes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "device_id,  	device_type,  	model,  	current_quantity,  	total_quantity,  	total_distributed,  	calculated_available,  	last_transaction";
$proto0["m_strFrom"] = "FROM \"public\".device_inventory_changes";
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
	"m_strName" => "device_id",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto6["m_sql"] = "device_id";
$proto6["m_srcTableName"] = "public.device_inventory_changes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "device_type",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto8["m_sql"] = "device_type";
$proto8["m_srcTableName"] = "public.device_inventory_changes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "model",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto10["m_sql"] = "model";
$proto10["m_srcTableName"] = "public.device_inventory_changes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "current_quantity",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto12["m_sql"] = "current_quantity";
$proto12["m_srcTableName"] = "public.device_inventory_changes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total_quantity",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto14["m_sql"] = "total_quantity";
$proto14["m_srcTableName"] = "public.device_inventory_changes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_distributed",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto16["m_sql"] = "total_distributed";
$proto16["m_srcTableName"] = "public.device_inventory_changes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "calculated_available",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto18["m_sql"] = "calculated_available";
$proto18["m_srcTableName"] = "public.device_inventory_changes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "last_transaction",
	"m_strTable" => "public.device_inventory_changes",
	"m_srcTableName" => "public.device_inventory_changes"
));

$proto20["m_sql"] = "last_transaction";
$proto20["m_srcTableName"] = "public.device_inventory_changes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.device_inventory_changes";
$proto23["m_srcTableName"] = "public.device_inventory_changes";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "device_id";
$proto23["m_columns"][] = "device_type";
$proto23["m_columns"][] = "model";
$proto23["m_columns"][] = "current_quantity";
$proto23["m_columns"][] = "total_quantity";
$proto23["m_columns"][] = "total_distributed";
$proto23["m_columns"][] = "calculated_available";
$proto23["m_columns"][] = "last_transaction";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".device_inventory_changes";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.device_inventory_changes";
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
$proto0["m_srcTableName"]="public.device_inventory_changes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_device_inventory_changes = createSqlQuery_device_inventory_changes();


	
				;

								

$tdatadevice_inventory_changes[".sqlquery"] = $queryData_device_inventory_changes;



$tdatadevice_inventory_changes[".hasEvents"] = false;

?>