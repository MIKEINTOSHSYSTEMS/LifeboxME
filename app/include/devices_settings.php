<?php
$tdatadevices = array();
$tdatadevices[".searchableFields"] = array();
$tdatadevices[".ShortName"] = "devices";
$tdatadevices[".OwnerID"] = "";
$tdatadevices[".OriginalTable"] = "public.devices";


$tdatadevices[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadevices[".originalPagesByType"] = $tdatadevices[".pagesByType"];
$tdatadevices[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadevices[".originalPages"] = $tdatadevices[".pages"];
$tdatadevices[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadevices[".originalDefaultPages"] = $tdatadevices[".defaultPages"];

//	field labels
$fieldLabelsdevices = array();
$fieldToolTipsdevices = array();
$pageTitlesdevices = array();
$placeHoldersdevices = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevices["English"] = array();
	$fieldToolTipsdevices["English"] = array();
	$placeHoldersdevices["English"] = array();
	$pageTitlesdevices["English"] = array();
	$fieldLabelsdevices["English"]["device_id"] = "Device Id";
	$fieldToolTipsdevices["English"]["device_id"] = "";
	$placeHoldersdevices["English"]["device_id"] = "";
	$fieldLabelsdevices["English"]["device_type"] = "Device Type";
	$fieldToolTipsdevices["English"]["device_type"] = "";
	$placeHoldersdevices["English"]["device_type"] = "";
	$fieldLabelsdevices["English"]["model"] = "Model";
	$fieldToolTipsdevices["English"]["model"] = "";
	$placeHoldersdevices["English"]["model"] = "";
	$fieldLabelsdevices["English"]["description"] = "Description";
	$fieldToolTipsdevices["English"]["description"] = "";
	$placeHoldersdevices["English"]["description"] = "";
	$fieldLabelsdevices["English"]["serial_number"] = "Serial Number";
	$fieldToolTipsdevices["English"]["serial_number"] = "";
	$placeHoldersdevices["English"]["serial_number"] = "";
	$fieldLabelsdevices["English"]["manufacturer"] = "Manufacturer";
	$fieldToolTipsdevices["English"]["manufacturer"] = "";
	$placeHoldersdevices["English"]["manufacturer"] = "";
	$fieldLabelsdevices["English"]["production_date"] = "Production Date";
	$fieldToolTipsdevices["English"]["production_date"] = "";
	$placeHoldersdevices["English"]["production_date"] = "";
	$fieldLabelsdevices["English"]["warranty_expiry"] = "Warranty Expiry";
	$fieldToolTipsdevices["English"]["warranty_expiry"] = "";
	$placeHoldersdevices["English"]["warranty_expiry"] = "";
	$fieldLabelsdevices["English"]["unit_price"] = "Unit Price";
	$fieldToolTipsdevices["English"]["unit_price"] = "";
	$placeHoldersdevices["English"]["unit_price"] = "";
	$fieldLabelsdevices["English"]["total_quantity"] = "Total Quantity";
	$fieldToolTipsdevices["English"]["total_quantity"] = "";
	$placeHoldersdevices["English"]["total_quantity"] = "";
	$fieldLabelsdevices["English"]["available_quantity"] = "Available Quantity";
	$fieldToolTipsdevices["English"]["available_quantity"] = "";
	$placeHoldersdevices["English"]["available_quantity"] = "";
	$fieldLabelsdevices["English"]["status"] = "Status";
	$fieldToolTipsdevices["English"]["status"] = "";
	$placeHoldersdevices["English"]["status"] = "";
	$fieldLabelsdevices["English"]["warehouse_location"] = "Warehouse Location";
	$fieldToolTipsdevices["English"]["warehouse_location"] = "";
	$placeHoldersdevices["English"]["warehouse_location"] = "";
	$fieldLabelsdevices["English"]["created_at"] = "Created At";
	$fieldToolTipsdevices["English"]["created_at"] = "";
	$placeHoldersdevices["English"]["created_at"] = "";
	$fieldLabelsdevices["English"]["updated_at"] = "Updated At";
	$fieldToolTipsdevices["English"]["updated_at"] = "";
	$placeHoldersdevices["English"]["updated_at"] = "";
	if (count($fieldToolTipsdevices["English"]))
		$tdatadevices[".isUseToolTips"] = true;
}


	$tdatadevices[".NCSearch"] = true;



$tdatadevices[".shortTableName"] = "devices";
$tdatadevices[".nSecOptions"] = 0;

$tdatadevices[".mainTableOwnerID"] = "";
$tdatadevices[".entityType"] = 0;
$tdatadevices[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadevices[".strOriginalTableName"] = "public.devices";

	



$tdatadevices[".showAddInPopup"] = false;

$tdatadevices[".showEditInPopup"] = false;

$tdatadevices[".showViewInPopup"] = false;

$tdatadevices[".listAjax"] = false;
//	temporary
//$tdatadevices[".listAjax"] = false;

	$tdatadevices[".audit"] = false;

	$tdatadevices[".locking"] = false;


$pages = $tdatadevices[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevices[".edit"] = true;
	$tdatadevices[".afterEditAction"] = 1;
	$tdatadevices[".closePopupAfterEdit"] = 1;
	$tdatadevices[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevices[".add"] = true;
$tdatadevices[".afterAddAction"] = 1;
$tdatadevices[".closePopupAfterAdd"] = 1;
$tdatadevices[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevices[".list"] = true;
}



$tdatadevices[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevices[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevices[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevices[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevices[".printFriendly"] = true;
}



$tdatadevices[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevices[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevices[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevices[".isUseAjaxSuggest"] = true;





$tdatadevices[".ajaxCodeSnippetAdded"] = false;

$tdatadevices[".buttonsAdded"] = false;

$tdatadevices[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevices[".isUseTimeForSearch"] = false;


$tdatadevices[".badgeColor"] = "CFAE83";


$tdatadevices[".allSearchFields"] = array();
$tdatadevices[".filterFields"] = array();
$tdatadevices[".requiredSearchFields"] = array();

$tdatadevices[".googleLikeFields"] = array();
$tdatadevices[".googleLikeFields"][] = "device_id";
$tdatadevices[".googleLikeFields"][] = "device_type";
$tdatadevices[".googleLikeFields"][] = "model";
$tdatadevices[".googleLikeFields"][] = "description";
$tdatadevices[".googleLikeFields"][] = "serial_number";
$tdatadevices[".googleLikeFields"][] = "manufacturer";
$tdatadevices[".googleLikeFields"][] = "production_date";
$tdatadevices[".googleLikeFields"][] = "warranty_expiry";
$tdatadevices[".googleLikeFields"][] = "unit_price";
$tdatadevices[".googleLikeFields"][] = "total_quantity";
$tdatadevices[".googleLikeFields"][] = "available_quantity";
$tdatadevices[".googleLikeFields"][] = "status";
$tdatadevices[".googleLikeFields"][] = "warehouse_location";
$tdatadevices[".googleLikeFields"][] = "created_at";
$tdatadevices[".googleLikeFields"][] = "updated_at";



$tdatadevices[".tableType"] = "list";

$tdatadevices[".printerPageOrientation"] = 0;
$tdatadevices[".nPrinterPageScale"] = 100;

$tdatadevices[".nPrinterSplitRecords"] = 40;

$tdatadevices[".geocodingEnabled"] = false;










$tdatadevices[".pageSize"] = 20;

$tdatadevices[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevices[".strOrderBy"] = $tstrOrderBy;

$tdatadevices[".orderindexes"] = array();


$tdatadevices[".sqlHead"] = "SELECT device_id,  device_type,  model,  description,  serial_number,  manufacturer,  production_date,  warranty_expiry,  unit_price,  total_quantity,  available_quantity,  status,  warehouse_location,  created_at,  updated_at";
$tdatadevices[".sqlFrom"] = "FROM \"public\".devices";
$tdatadevices[".sqlWhereExpr"] = "";
$tdatadevices[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevices[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevices[".arrGroupsPerPage"] = $arrGPP;

$tdatadevices[".highlightSearchResults"] = true;

$tableKeysdevices = array();
$tableKeysdevices[] = "device_id";
$tdatadevices[".Keys"] = $tableKeysdevices;


$tdatadevices[".hideMobileList"] = array();




//	device_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "device_id";
	$fdata["GoodName"] = "device_id";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","device_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatadevices["device_id"] = $fdata;
		$tdatadevices[".searchableFields"][] = "device_id";
//	device_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "device_type";
	$fdata["GoodName"] = "device_type";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","device_type");
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


	$tdatadevices["device_type"] = $fdata;
		$tdatadevices[".searchableFields"][] = "device_type";
//	model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "model";
	$fdata["GoodName"] = "model";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","model");
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


	$tdatadevices["model"] = $fdata;
		$tdatadevices[".searchableFields"][] = "model";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatadevices["description"] = $fdata;
		$tdatadevices[".searchableFields"][] = "description";
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","serial_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "serial_number";

		$fdata["sourceSingle"] = "serial_number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "serial_number";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadevices["serial_number"] = $fdata;
		$tdatadevices[".searchableFields"][] = "serial_number";
//	manufacturer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "manufacturer";
	$fdata["GoodName"] = "manufacturer";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","manufacturer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "manufacturer";

		$fdata["sourceSingle"] = "manufacturer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "manufacturer";

	
	
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


	$tdatadevices["manufacturer"] = $fdata;
		$tdatadevices[".searchableFields"][] = "manufacturer";
//	production_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "production_date";
	$fdata["GoodName"] = "production_date";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","production_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "production_date";

		$fdata["sourceSingle"] = "production_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "production_date";

	
	
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


	$tdatadevices["production_date"] = $fdata;
		$tdatadevices[".searchableFields"][] = "production_date";
//	warranty_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "warranty_expiry";
	$fdata["GoodName"] = "warranty_expiry";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","warranty_expiry");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "warranty_expiry";

		$fdata["sourceSingle"] = "warranty_expiry";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "warranty_expiry";

	
	
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


	$tdatadevices["warranty_expiry"] = $fdata;
		$tdatadevices[".searchableFields"][] = "warranty_expiry";
//	unit_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "unit_price";
	$fdata["GoodName"] = "unit_price";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","unit_price");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "unit_price";

		$fdata["sourceSingle"] = "unit_price";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatadevices["unit_price"] = $fdata;
		$tdatadevices[".searchableFields"][] = "unit_price";
//	total_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "total_quantity";
	$fdata["GoodName"] = "total_quantity";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","total_quantity");
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


	$tdatadevices["total_quantity"] = $fdata;
		$tdatadevices[".searchableFields"][] = "total_quantity";
//	available_quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "available_quantity";
	$fdata["GoodName"] = "available_quantity";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","available_quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "available_quantity";

		$fdata["sourceSingle"] = "available_quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "available_quantity";

	
	
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


	$tdatadevices["available_quantity"] = $fdata;
		$tdatadevices[".searchableFields"][] = "available_quantity";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","status");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatadevices["status"] = $fdata;
		$tdatadevices[".searchableFields"][] = "status";
//	warehouse_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "warehouse_location";
	$fdata["GoodName"] = "warehouse_location";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","warehouse_location");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "warehouse_location";

		$fdata["sourceSingle"] = "warehouse_location";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "warehouse_location";

	
	
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


	$tdatadevices["warehouse_location"] = $fdata;
		$tdatadevices[".searchableFields"][] = "warehouse_location";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","created_at");
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


	$tdatadevices["created_at"] = $fdata;
		$tdatadevices[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.devices";
	$fdata["Label"] = GetFieldLabel("public_devices","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatadevices["updated_at"] = $fdata;
		$tdatadevices[".searchableFields"][] = "updated_at";


$tables_data["public.devices"]=&$tdatadevices;
$field_labels["public_devices"] = &$fieldLabelsdevices;
$fieldToolTips["public_devices"] = &$fieldToolTipsdevices;
$placeHolders["public_devices"] = &$placeHoldersdevices;
$page_titles["public_devices"] = &$pageTitlesdevices;


changeTextControlsToDate( "public.devices" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.devices"] = array();
//	public.device_distributions
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.device_distributions";
		$detailsParam["dOriginalTable"] = "public.device_distributions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "device_distributions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_device_distributions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.devices"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.devices"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.devices"][$dIndex]["masterKeys"][]="device_id";

				$detailsTablesData["public.devices"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.devices"][$dIndex]["detailKeys"][]="device_type";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.devices"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_devices()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "device_id,  device_type,  model,  description,  serial_number,  manufacturer,  production_date,  warranty_expiry,  unit_price,  total_quantity,  available_quantity,  status,  warehouse_location,  created_at,  updated_at";
$proto0["m_strFrom"] = "FROM \"public\".devices";
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
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto6["m_sql"] = "device_id";
$proto6["m_srcTableName"] = "public.devices";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "device_type",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto8["m_sql"] = "device_type";
$proto8["m_srcTableName"] = "public.devices";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "model",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto10["m_sql"] = "model";
$proto10["m_srcTableName"] = "public.devices";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "public.devices";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto14["m_sql"] = "serial_number";
$proto14["m_srcTableName"] = "public.devices";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "manufacturer",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto16["m_sql"] = "manufacturer";
$proto16["m_srcTableName"] = "public.devices";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "production_date",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto18["m_sql"] = "production_date";
$proto18["m_srcTableName"] = "public.devices";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "warranty_expiry",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto20["m_sql"] = "warranty_expiry";
$proto20["m_srcTableName"] = "public.devices";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_price",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto22["m_sql"] = "unit_price";
$proto22["m_srcTableName"] = "public.devices";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "total_quantity",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto24["m_sql"] = "total_quantity";
$proto24["m_srcTableName"] = "public.devices";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "available_quantity",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto26["m_sql"] = "available_quantity";
$proto26["m_srcTableName"] = "public.devices";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto28["m_sql"] = "status";
$proto28["m_srcTableName"] = "public.devices";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "warehouse_location",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto30["m_sql"] = "warehouse_location";
$proto30["m_srcTableName"] = "public.devices";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto32["m_sql"] = "created_at";
$proto32["m_srcTableName"] = "public.devices";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.devices",
	"m_srcTableName" => "public.devices"
));

$proto34["m_sql"] = "updated_at";
$proto34["m_srcTableName"] = "public.devices";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "public.devices";
$proto37["m_srcTableName"] = "public.devices";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "device_id";
$proto37["m_columns"][] = "device_type";
$proto37["m_columns"][] = "model";
$proto37["m_columns"][] = "description";
$proto37["m_columns"][] = "serial_number";
$proto37["m_columns"][] = "manufacturer";
$proto37["m_columns"][] = "production_date";
$proto37["m_columns"][] = "warranty_expiry";
$proto37["m_columns"][] = "unit_price";
$proto37["m_columns"][] = "total_quantity";
$proto37["m_columns"][] = "available_quantity";
$proto37["m_columns"][] = "status";
$proto37["m_columns"][] = "facility_id";
$proto37["m_columns"][] = "warehouse_location";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "updated_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "\"public\".devices";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "public.devices";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.devices";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_devices = createSqlQuery_devices();


	
				;

															

$tdatadevices[".sqlquery"] = $queryData_devices;



$tdatadevices[".hasEvents"] = false;

?>