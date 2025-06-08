<?php
$tdatadevice_distribution_summary_view = array();
$tdatadevice_distribution_summary_view[".searchableFields"] = array();
$tdatadevice_distribution_summary_view[".ShortName"] = "device_distribution_summary_view";
$tdatadevice_distribution_summary_view[".OwnerID"] = "";
$tdatadevice_distribution_summary_view[".OriginalTable"] = "public.device_distribution_summary_view";


$tdatadevice_distribution_summary_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadevice_distribution_summary_view[".originalPagesByType"] = $tdatadevice_distribution_summary_view[".pagesByType"];
$tdatadevice_distribution_summary_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadevice_distribution_summary_view[".originalPages"] = $tdatadevice_distribution_summary_view[".pages"];
$tdatadevice_distribution_summary_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadevice_distribution_summary_view[".originalDefaultPages"] = $tdatadevice_distribution_summary_view[".defaultPages"];

//	field labels
$fieldLabelsdevice_distribution_summary_view = array();
$fieldToolTipsdevice_distribution_summary_view = array();
$pageTitlesdevice_distribution_summary_view = array();
$placeHoldersdevice_distribution_summary_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevice_distribution_summary_view["English"] = array();
	$fieldToolTipsdevice_distribution_summary_view["English"] = array();
	$placeHoldersdevice_distribution_summary_view["English"] = array();
	$pageTitlesdevice_distribution_summary_view["English"] = array();
	$fieldLabelsdevice_distribution_summary_view["English"]["distribution_id"] = "D_ID";
	$fieldToolTipsdevice_distribution_summary_view["English"]["distribution_id"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["distribution_id"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["device_type"] = "Device Type";
	$fieldToolTipsdevice_distribution_summary_view["English"]["device_type"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["device_type"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["order_reference"] = "Order Reference";
	$fieldToolTipsdevice_distribution_summary_view["English"]["order_reference"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["order_reference"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["facility_name"] = "Facility Name";
	$fieldToolTipsdevice_distribution_summary_view["English"]["facility_name"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["facility_name"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["country_name"] = "Country Name";
	$fieldToolTipsdevice_distribution_summary_view["English"]["country_name"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["country_name"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["region_name"] = "Region Name";
	$fieldToolTipsdevice_distribution_summary_view["English"]["region_name"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["region_name"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["monthly_surgical_volume"] = "Monthly Surgical Volume";
	$fieldToolTipsdevice_distribution_summary_view["English"]["monthly_surgical_volume"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["monthly_surgical_volume"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["contact_name"] = "Contact Name";
	$fieldToolTipsdevice_distribution_summary_view["English"]["contact_name"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["contact_name"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["contact_email"] = "Contact Email";
	$fieldToolTipsdevice_distribution_summary_view["English"]["contact_email"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["contact_email"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["distribution_month"] = "Distribution Month";
	$fieldToolTipsdevice_distribution_summary_view["English"]["distribution_month"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["distribution_month"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["distribution_year"] = "Distribution Year";
	$fieldToolTipsdevice_distribution_summary_view["English"]["distribution_year"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["distribution_year"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["payment_method"] = "Payment Method";
	$fieldToolTipsdevice_distribution_summary_view["English"]["payment_method"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["payment_method"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["quantity"] = "Quantity";
	$fieldToolTipsdevice_distribution_summary_view["English"]["quantity"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["quantity"] = "";
	$fieldLabelsdevice_distribution_summary_view["English"]["notes"] = "Notes";
	$fieldToolTipsdevice_distribution_summary_view["English"]["notes"] = "";
	$placeHoldersdevice_distribution_summary_view["English"]["notes"] = "";
	if (count($fieldToolTipsdevice_distribution_summary_view["English"]))
		$tdatadevice_distribution_summary_view[".isUseToolTips"] = true;
}


	$tdatadevice_distribution_summary_view[".NCSearch"] = true;



$tdatadevice_distribution_summary_view[".shortTableName"] = "device_distribution_summary_view";
$tdatadevice_distribution_summary_view[".nSecOptions"] = 0;

$tdatadevice_distribution_summary_view[".mainTableOwnerID"] = "";
$tdatadevice_distribution_summary_view[".entityType"] = 0;
$tdatadevice_distribution_summary_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadevice_distribution_summary_view[".strOriginalTableName"] = "public.device_distribution_summary_view";

	



$tdatadevice_distribution_summary_view[".showAddInPopup"] = false;

$tdatadevice_distribution_summary_view[".showEditInPopup"] = false;

$tdatadevice_distribution_summary_view[".showViewInPopup"] = false;

$tdatadevice_distribution_summary_view[".listAjax"] = false;
//	temporary
//$tdatadevice_distribution_summary_view[".listAjax"] = false;

	$tdatadevice_distribution_summary_view[".audit"] = false;

	$tdatadevice_distribution_summary_view[".locking"] = false;


$pages = $tdatadevice_distribution_summary_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevice_distribution_summary_view[".edit"] = true;
	$tdatadevice_distribution_summary_view[".afterEditAction"] = 1;
	$tdatadevice_distribution_summary_view[".closePopupAfterEdit"] = 1;
	$tdatadevice_distribution_summary_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevice_distribution_summary_view[".add"] = true;
$tdatadevice_distribution_summary_view[".afterAddAction"] = 1;
$tdatadevice_distribution_summary_view[".closePopupAfterAdd"] = 1;
$tdatadevice_distribution_summary_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevice_distribution_summary_view[".list"] = true;
}



$tdatadevice_distribution_summary_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevice_distribution_summary_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevice_distribution_summary_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevice_distribution_summary_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevice_distribution_summary_view[".printFriendly"] = true;
}



$tdatadevice_distribution_summary_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevice_distribution_summary_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevice_distribution_summary_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevice_distribution_summary_view[".isUseAjaxSuggest"] = true;





$tdatadevice_distribution_summary_view[".ajaxCodeSnippetAdded"] = false;

$tdatadevice_distribution_summary_view[".buttonsAdded"] = false;

$tdatadevice_distribution_summary_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevice_distribution_summary_view[".isUseTimeForSearch"] = false;


$tdatadevice_distribution_summary_view[".badgeColor"] = "DAA520";


$tdatadevice_distribution_summary_view[".allSearchFields"] = array();
$tdatadevice_distribution_summary_view[".filterFields"] = array();
$tdatadevice_distribution_summary_view[".requiredSearchFields"] = array();

$tdatadevice_distribution_summary_view[".googleLikeFields"] = array();
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "distribution_id";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "device_type";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "order_reference";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "facility_name";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "country_name";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "region_name";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "monthly_surgical_volume";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "contact_name";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "contact_email";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "distribution_month";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "distribution_year";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "payment_method";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "quantity";
$tdatadevice_distribution_summary_view[".googleLikeFields"][] = "notes";



$tdatadevice_distribution_summary_view[".tableType"] = "list";

$tdatadevice_distribution_summary_view[".printerPageOrientation"] = 0;
$tdatadevice_distribution_summary_view[".nPrinterPageScale"] = 100;

$tdatadevice_distribution_summary_view[".nPrinterSplitRecords"] = 40;

$tdatadevice_distribution_summary_view[".geocodingEnabled"] = false;










$tdatadevice_distribution_summary_view[".pageSize"] = 20;

$tdatadevice_distribution_summary_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevice_distribution_summary_view[".strOrderBy"] = $tstrOrderBy;

$tdatadevice_distribution_summary_view[".orderindexes"] = array();


$tdatadevice_distribution_summary_view[".sqlHead"] = "SELECT distribution_id,  	device_type,  	order_reference,  	facility_name,  	country_name,  	region_name,  	monthly_surgical_volume,  	contact_name,  	contact_email,  	distribution_month,  	distribution_year,  	payment_method,  	quantity,  	notes";
$tdatadevice_distribution_summary_view[".sqlFrom"] = "FROM \"public\".device_distribution_summary_view";
$tdatadevice_distribution_summary_view[".sqlWhereExpr"] = "";
$tdatadevice_distribution_summary_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevice_distribution_summary_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevice_distribution_summary_view[".arrGroupsPerPage"] = $arrGPP;

$tdatadevice_distribution_summary_view[".highlightSearchResults"] = true;

$tableKeysdevice_distribution_summary_view = array();
$tdatadevice_distribution_summary_view[".Keys"] = $tableKeysdevice_distribution_summary_view;


$tdatadevice_distribution_summary_view[".hideMobileList"] = array();




//	distribution_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "distribution_id";
	$fdata["GoodName"] = "distribution_id";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","distribution_id");
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


	$tdatadevice_distribution_summary_view["distribution_id"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "distribution_id";
//	device_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "device_type";
	$fdata["GoodName"] = "device_type";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","device_type");
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


	$tdatadevice_distribution_summary_view["device_type"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "device_type";
//	order_reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "order_reference";
	$fdata["GoodName"] = "order_reference";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","order_reference");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "order_reference";

		$fdata["sourceSingle"] = "order_reference";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_reference";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatadevice_distribution_summary_view["order_reference"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "order_reference";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","facility_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility_name";

		$fdata["sourceSingle"] = "facility_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatadevice_distribution_summary_view["facility_name"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "facility_name";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","country_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country_name";

		$fdata["sourceSingle"] = "country_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_name";

	
	
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


	$tdatadevice_distribution_summary_view["country_name"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "country_name";
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","region_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "region_name";

		$fdata["sourceSingle"] = "region_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatadevice_distribution_summary_view["region_name"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "region_name";
//	monthly_surgical_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "monthly_surgical_volume";
	$fdata["GoodName"] = "monthly_surgical_volume";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","monthly_surgical_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "monthly_surgical_volume";

		$fdata["sourceSingle"] = "monthly_surgical_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monthly_surgical_volume";

	
	
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


	$tdatadevice_distribution_summary_view["monthly_surgical_volume"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "monthly_surgical_volume";
//	contact_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contact_name";
	$fdata["GoodName"] = "contact_name";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","contact_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_name";

		$fdata["sourceSingle"] = "contact_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatadevice_distribution_summary_view["contact_name"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "contact_name";
//	contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contact_email";
	$fdata["GoodName"] = "contact_email";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","contact_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_email";

		$fdata["sourceSingle"] = "contact_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_email";

	
	
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


	$tdatadevice_distribution_summary_view["contact_email"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "contact_email";
//	distribution_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "distribution_month";
	$fdata["GoodName"] = "distribution_month";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","distribution_month");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distribution_month";

		$fdata["sourceSingle"] = "distribution_month";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distribution_month";

	
	
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
	$edata["LookupTable"] = "public.months";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "month";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatadevice_distribution_summary_view["distribution_month"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "distribution_month";
//	distribution_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distribution_year";
	$fdata["GoodName"] = "distribution_year";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","distribution_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distribution_year";

		$fdata["sourceSingle"] = "distribution_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distribution_year";

	
	
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


	$tdatadevice_distribution_summary_view["distribution_year"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "distribution_year";
//	payment_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "payment_method";
	$fdata["GoodName"] = "payment_method";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","payment_method");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "payment_method";

		$fdata["sourceSingle"] = "payment_method";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payment_method";

	
	
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


	$tdatadevice_distribution_summary_view["payment_method"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "payment_method";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "quantity";

		$fdata["sourceSingle"] = "quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quantity";

	
	
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


	$tdatadevice_distribution_summary_view["quantity"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "quantity";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.device_distribution_summary_view";
	$fdata["Label"] = GetFieldLabel("public_device_distribution_summary_view","notes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "notes";

		$fdata["sourceSingle"] = "notes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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


	$tdatadevice_distribution_summary_view["notes"] = $fdata;
		$tdatadevice_distribution_summary_view[".searchableFields"][] = "notes";


$tables_data["public.device_distribution_summary_view"]=&$tdatadevice_distribution_summary_view;
$field_labels["public_device_distribution_summary_view"] = &$fieldLabelsdevice_distribution_summary_view;
$fieldToolTips["public_device_distribution_summary_view"] = &$fieldToolTipsdevice_distribution_summary_view;
$placeHolders["public_device_distribution_summary_view"] = &$placeHoldersdevice_distribution_summary_view;
$page_titles["public_device_distribution_summary_view"] = &$pageTitlesdevice_distribution_summary_view;


changeTextControlsToDate( "public.device_distribution_summary_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.device_distribution_summary_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.device_distribution_summary_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_device_distribution_summary_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "distribution_id,  	device_type,  	order_reference,  	facility_name,  	country_name,  	region_name,  	monthly_surgical_volume,  	contact_name,  	contact_email,  	distribution_month,  	distribution_year,  	payment_method,  	quantity,  	notes";
$proto0["m_strFrom"] = "FROM \"public\".device_distribution_summary_view";
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
	"m_strName" => "distribution_id",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto6["m_sql"] = "distribution_id";
$proto6["m_srcTableName"] = "public.device_distribution_summary_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "device_type",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto8["m_sql"] = "device_type";
$proto8["m_srcTableName"] = "public.device_distribution_summary_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "order_reference",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto10["m_sql"] = "order_reference";
$proto10["m_srcTableName"] = "public.device_distribution_summary_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto12["m_sql"] = "facility_name";
$proto12["m_srcTableName"] = "public.device_distribution_summary_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto14["m_sql"] = "country_name";
$proto14["m_srcTableName"] = "public.device_distribution_summary_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto16["m_sql"] = "region_name";
$proto16["m_srcTableName"] = "public.device_distribution_summary_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "monthly_surgical_volume",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto18["m_sql"] = "monthly_surgical_volume";
$proto18["m_srcTableName"] = "public.device_distribution_summary_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_name",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto20["m_sql"] = "contact_name";
$proto20["m_srcTableName"] = "public.device_distribution_summary_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_email",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto22["m_sql"] = "contact_email";
$proto22["m_srcTableName"] = "public.device_distribution_summary_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "distribution_month",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto24["m_sql"] = "distribution_month";
$proto24["m_srcTableName"] = "public.device_distribution_summary_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distribution_year",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto26["m_sql"] = "distribution_year";
$proto26["m_srcTableName"] = "public.device_distribution_summary_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "payment_method",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto28["m_sql"] = "payment_method";
$proto28["m_srcTableName"] = "public.device_distribution_summary_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto30["m_sql"] = "quantity";
$proto30["m_srcTableName"] = "public.device_distribution_summary_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.device_distribution_summary_view",
	"m_srcTableName" => "public.device_distribution_summary_view"
));

$proto32["m_sql"] = "notes";
$proto32["m_srcTableName"] = "public.device_distribution_summary_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "public.device_distribution_summary_view";
$proto35["m_srcTableName"] = "public.device_distribution_summary_view";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "distribution_id";
$proto35["m_columns"][] = "device_type";
$proto35["m_columns"][] = "order_reference";
$proto35["m_columns"][] = "facility_name";
$proto35["m_columns"][] = "country_name";
$proto35["m_columns"][] = "region_name";
$proto35["m_columns"][] = "monthly_surgical_volume";
$proto35["m_columns"][] = "contact_name";
$proto35["m_columns"][] = "contact_email";
$proto35["m_columns"][] = "distribution_month";
$proto35["m_columns"][] = "distribution_year";
$proto35["m_columns"][] = "payment_method";
$proto35["m_columns"][] = "quantity";
$proto35["m_columns"][] = "notes";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "\"public\".device_distribution_summary_view";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "public.device_distribution_summary_view";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.device_distribution_summary_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_device_distribution_summary_view = createSqlQuery_device_distribution_summary_view();


	
		;

														

$tdatadevice_distribution_summary_view[".sqlquery"] = $queryData_device_distribution_summary_view;



$tdatadevice_distribution_summary_view[".hasEvents"] = false;

?>