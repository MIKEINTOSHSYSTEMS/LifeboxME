<?php
$tdatadevice_distributions = array();
$tdatadevice_distributions[".searchableFields"] = array();
$tdatadevice_distributions[".ShortName"] = "device_distributions";
$tdatadevice_distributions[".OwnerID"] = "";
$tdatadevice_distributions[".OriginalTable"] = "public.device_distributions";


$tdatadevice_distributions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadevice_distributions[".originalPagesByType"] = $tdatadevice_distributions[".pagesByType"];
$tdatadevice_distributions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadevice_distributions[".originalPages"] = $tdatadevice_distributions[".pages"];
$tdatadevice_distributions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadevice_distributions[".originalDefaultPages"] = $tdatadevice_distributions[".defaultPages"];

//	field labels
$fieldLabelsdevice_distributions = array();
$fieldToolTipsdevice_distributions = array();
$pageTitlesdevice_distributions = array();
$placeHoldersdevice_distributions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevice_distributions["English"] = array();
	$fieldToolTipsdevice_distributions["English"] = array();
	$placeHoldersdevice_distributions["English"] = array();
	$pageTitlesdevice_distributions["English"] = array();
	$fieldLabelsdevice_distributions["English"]["distribution_id"] = "Distribution Id";
	$fieldToolTipsdevice_distributions["English"]["distribution_id"] = "";
	$placeHoldersdevice_distributions["English"]["distribution_id"] = "";
	$fieldLabelsdevice_distributions["English"]["region_id"] = "Region Id";
	$fieldToolTipsdevice_distributions["English"]["region_id"] = "";
	$placeHoldersdevice_distributions["English"]["region_id"] = "";
	$fieldLabelsdevice_distributions["English"]["country_id"] = "Country Id";
	$fieldToolTipsdevice_distributions["English"]["country_id"] = "";
	$placeHoldersdevice_distributions["English"]["country_id"] = "";
	$fieldLabelsdevice_distributions["English"]["device_type"] = "Device Type";
	$fieldToolTipsdevice_distributions["English"]["device_type"] = "";
	$placeHoldersdevice_distributions["English"]["device_type"] = "";
	$fieldLabelsdevice_distributions["English"]["order_reference"] = "Order Reference";
	$fieldToolTipsdevice_distributions["English"]["order_reference"] = "";
	$placeHoldersdevice_distributions["English"]["order_reference"] = "";
	$fieldLabelsdevice_distributions["English"]["facility_id"] = "Facility Id";
	$fieldToolTipsdevice_distributions["English"]["facility_id"] = "";
	$placeHoldersdevice_distributions["English"]["facility_id"] = "";
	$fieldLabelsdevice_distributions["English"]["monthly_surgical_volume"] = "Monthly Surgical Volume";
	$fieldToolTipsdevice_distributions["English"]["monthly_surgical_volume"] = "";
	$placeHoldersdevice_distributions["English"]["monthly_surgical_volume"] = "";
	$fieldLabelsdevice_distributions["English"]["contact_name"] = "Contact Name";
	$fieldToolTipsdevice_distributions["English"]["contact_name"] = "";
	$placeHoldersdevice_distributions["English"]["contact_name"] = "";
	$fieldLabelsdevice_distributions["English"]["contact_email"] = "Contact Email";
	$fieldToolTipsdevice_distributions["English"]["contact_email"] = "";
	$placeHoldersdevice_distributions["English"]["contact_email"] = "";
	$fieldLabelsdevice_distributions["English"]["distribution_month"] = "Distribution Month";
	$fieldToolTipsdevice_distributions["English"]["distribution_month"] = "";
	$placeHoldersdevice_distributions["English"]["distribution_month"] = "";
	$fieldLabelsdevice_distributions["English"]["distribution_year"] = "Distribution Year";
	$fieldToolTipsdevice_distributions["English"]["distribution_year"] = "";
	$placeHoldersdevice_distributions["English"]["distribution_year"] = "";
	$fieldLabelsdevice_distributions["English"]["payment_method"] = "Payment Method";
	$fieldToolTipsdevice_distributions["English"]["payment_method"] = "";
	$placeHoldersdevice_distributions["English"]["payment_method"] = "";
	$fieldLabelsdevice_distributions["English"]["quantity"] = "Quantity";
	$fieldToolTipsdevice_distributions["English"]["quantity"] = "";
	$placeHoldersdevice_distributions["English"]["quantity"] = "";
	$fieldLabelsdevice_distributions["English"]["notes"] = "Notes";
	$fieldToolTipsdevice_distributions["English"]["notes"] = "";
	$placeHoldersdevice_distributions["English"]["notes"] = "";
	$fieldLabelsdevice_distributions["English"]["created_at"] = "Created At";
	$fieldToolTipsdevice_distributions["English"]["created_at"] = "";
	$placeHoldersdevice_distributions["English"]["created_at"] = "";
	$fieldLabelsdevice_distributions["English"]["updated_at"] = "Updated At";
	$fieldToolTipsdevice_distributions["English"]["updated_at"] = "";
	$placeHoldersdevice_distributions["English"]["updated_at"] = "";
	if (count($fieldToolTipsdevice_distributions["English"]))
		$tdatadevice_distributions[".isUseToolTips"] = true;
}


	$tdatadevice_distributions[".NCSearch"] = true;



$tdatadevice_distributions[".shortTableName"] = "device_distributions";
$tdatadevice_distributions[".nSecOptions"] = 0;

$tdatadevice_distributions[".mainTableOwnerID"] = "";
$tdatadevice_distributions[".entityType"] = 0;
$tdatadevice_distributions[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadevice_distributions[".strOriginalTableName"] = "public.device_distributions";

	



$tdatadevice_distributions[".showAddInPopup"] = false;

$tdatadevice_distributions[".showEditInPopup"] = false;

$tdatadevice_distributions[".showViewInPopup"] = false;

$tdatadevice_distributions[".listAjax"] = false;
//	temporary
//$tdatadevice_distributions[".listAjax"] = false;

	$tdatadevice_distributions[".audit"] = false;

	$tdatadevice_distributions[".locking"] = false;


$pages = $tdatadevice_distributions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevice_distributions[".edit"] = true;
	$tdatadevice_distributions[".afterEditAction"] = 1;
	$tdatadevice_distributions[".closePopupAfterEdit"] = 1;
	$tdatadevice_distributions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevice_distributions[".add"] = true;
$tdatadevice_distributions[".afterAddAction"] = 1;
$tdatadevice_distributions[".closePopupAfterAdd"] = 1;
$tdatadevice_distributions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevice_distributions[".list"] = true;
}



$tdatadevice_distributions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevice_distributions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevice_distributions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevice_distributions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevice_distributions[".printFriendly"] = true;
}



$tdatadevice_distributions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevice_distributions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevice_distributions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevice_distributions[".isUseAjaxSuggest"] = true;





$tdatadevice_distributions[".ajaxCodeSnippetAdded"] = false;

$tdatadevice_distributions[".buttonsAdded"] = false;

$tdatadevice_distributions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevice_distributions[".isUseTimeForSearch"] = false;


$tdatadevice_distributions[".badgeColor"] = "CD853F";


$tdatadevice_distributions[".allSearchFields"] = array();
$tdatadevice_distributions[".filterFields"] = array();
$tdatadevice_distributions[".requiredSearchFields"] = array();

$tdatadevice_distributions[".googleLikeFields"] = array();
$tdatadevice_distributions[".googleLikeFields"][] = "distribution_id";
$tdatadevice_distributions[".googleLikeFields"][] = "region_id";
$tdatadevice_distributions[".googleLikeFields"][] = "country_id";
$tdatadevice_distributions[".googleLikeFields"][] = "device_type";
$tdatadevice_distributions[".googleLikeFields"][] = "order_reference";
$tdatadevice_distributions[".googleLikeFields"][] = "facility_id";
$tdatadevice_distributions[".googleLikeFields"][] = "monthly_surgical_volume";
$tdatadevice_distributions[".googleLikeFields"][] = "contact_name";
$tdatadevice_distributions[".googleLikeFields"][] = "contact_email";
$tdatadevice_distributions[".googleLikeFields"][] = "distribution_month";
$tdatadevice_distributions[".googleLikeFields"][] = "distribution_year";
$tdatadevice_distributions[".googleLikeFields"][] = "payment_method";
$tdatadevice_distributions[".googleLikeFields"][] = "quantity";
$tdatadevice_distributions[".googleLikeFields"][] = "notes";
$tdatadevice_distributions[".googleLikeFields"][] = "created_at";
$tdatadevice_distributions[".googleLikeFields"][] = "updated_at";



$tdatadevice_distributions[".tableType"] = "list";

$tdatadevice_distributions[".printerPageOrientation"] = 0;
$tdatadevice_distributions[".nPrinterPageScale"] = 100;

$tdatadevice_distributions[".nPrinterSplitRecords"] = 40;

$tdatadevice_distributions[".geocodingEnabled"] = false;










$tdatadevice_distributions[".pageSize"] = 20;

$tdatadevice_distributions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevice_distributions[".strOrderBy"] = $tstrOrderBy;

$tdatadevice_distributions[".orderindexes"] = array();


$tdatadevice_distributions[".sqlHead"] = "SELECT distribution_id,  	region_id,  	country_id,  	device_type,  	order_reference,  	facility_id,  	monthly_surgical_volume,  	contact_name,  	contact_email,  	distribution_month,  	distribution_year,  	payment_method,  	quantity,  	notes,  	created_at,  	updated_at";
$tdatadevice_distributions[".sqlFrom"] = "FROM \"public\".device_distributions";
$tdatadevice_distributions[".sqlWhereExpr"] = "";
$tdatadevice_distributions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevice_distributions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevice_distributions[".arrGroupsPerPage"] = $arrGPP;

$tdatadevice_distributions[".highlightSearchResults"] = true;

$tableKeysdevice_distributions = array();
$tableKeysdevice_distributions[] = "distribution_id";
$tdatadevice_distributions[".Keys"] = $tableKeysdevice_distributions;


$tdatadevice_distributions[".hideMobileList"] = array();




//	distribution_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "distribution_id";
	$fdata["GoodName"] = "distribution_id";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","distribution_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatadevice_distributions["distribution_id"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "distribution_id";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";

	
	
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
	$edata["LookupTable"] = "public.regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "region_name";

	

	
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


	$tdatadevice_distributions["region_id"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "region_id";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "country_id";

		$fdata["sourceSingle"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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
	$edata["LookupTable"] = "public.countries";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "country_name";

	

	
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


	$tdatadevice_distributions["country_id"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "country_id";
//	device_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "device_type";
	$fdata["GoodName"] = "device_type";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","device_type");
	$fdata["FieldType"] = 13;


	
	
			

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


	$tdatadevice_distributions["device_type"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "device_type";
//	order_reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order_reference";
	$fdata["GoodName"] = "order_reference";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","order_reference");
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


	$tdatadevice_distributions["order_reference"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "order_reference";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","facility_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "facility_id";

		$fdata["sourceSingle"] = "facility_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_id";

	
	
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
	$edata["LookupTable"] = "public.facilities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "facility_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "facility_name";

	

	
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


	$tdatadevice_distributions["facility_id"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "facility_id";
//	monthly_surgical_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "monthly_surgical_volume";
	$fdata["GoodName"] = "monthly_surgical_volume";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","monthly_surgical_volume");
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


	$tdatadevice_distributions["monthly_surgical_volume"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "monthly_surgical_volume";
//	contact_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contact_name";
	$fdata["GoodName"] = "contact_name";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","contact_name");
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


	$tdatadevice_distributions["contact_name"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "contact_name";
//	contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contact_email";
	$fdata["GoodName"] = "contact_email";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","contact_email");
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


	$tdatadevice_distributions["contact_email"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "contact_email";
//	distribution_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "distribution_month";
	$fdata["GoodName"] = "distribution_month";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","distribution_month");
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


	$tdatadevice_distributions["distribution_month"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "distribution_month";
//	distribution_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distribution_year";
	$fdata["GoodName"] = "distribution_year";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","distribution_year");
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


	$tdatadevice_distributions["distribution_year"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "distribution_year";
//	payment_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "payment_method";
	$fdata["GoodName"] = "payment_method";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","payment_method");
	$fdata["FieldType"] = 13;


	
	
			

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


	$tdatadevice_distributions["payment_method"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "payment_method";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","quantity");
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


	$tdatadevice_distributions["quantity"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "quantity";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","notes");
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


	$tdatadevice_distributions["notes"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "notes";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","created_at");
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


	$tdatadevice_distributions["created_at"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.device_distributions";
	$fdata["Label"] = GetFieldLabel("public_device_distributions","updated_at");
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


	$tdatadevice_distributions["updated_at"] = $fdata;
		$tdatadevice_distributions[".searchableFields"][] = "updated_at";


$tables_data["public.device_distributions"]=&$tdatadevice_distributions;
$field_labels["public_device_distributions"] = &$fieldLabelsdevice_distributions;
$fieldToolTips["public_device_distributions"] = &$fieldToolTipsdevice_distributions;
$placeHolders["public_device_distributions"] = &$placeHoldersdevice_distributions;
$page_titles["public_device_distributions"] = &$pageTitlesdevice_distributions;


changeTextControlsToDate( "public.device_distributions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.device_distributions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.device_distributions"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.countries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.countries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "countries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.device_distributions"][0] = $masterParams;
				$masterTablesData["public.device_distributions"][0]["masterKeys"] = array();
	$masterTablesData["public.device_distributions"][0]["masterKeys"][]="country_id";
				$masterTablesData["public.device_distributions"][0]["detailKeys"] = array();
	$masterTablesData["public.device_distributions"][0]["detailKeys"][]="country_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.device_distributions"][1] = $masterParams;
				$masterTablesData["public.device_distributions"][1]["masterKeys"] = array();
	$masterTablesData["public.device_distributions"][1]["masterKeys"][]="facility_id";
				$masterTablesData["public.device_distributions"][1]["detailKeys"] = array();
	$masterTablesData["public.device_distributions"][1]["detailKeys"][]="facility_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.device_distributions"][2] = $masterParams;
				$masterTablesData["public.device_distributions"][2]["masterKeys"] = array();
	$masterTablesData["public.device_distributions"][2]["masterKeys"][]="region_id";
				$masterTablesData["public.device_distributions"][2]["detailKeys"] = array();
	$masterTablesData["public.device_distributions"][2]["detailKeys"][]="region_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_device_distributions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "distribution_id,  	region_id,  	country_id,  	device_type,  	order_reference,  	facility_id,  	monthly_surgical_volume,  	contact_name,  	contact_email,  	distribution_month,  	distribution_year,  	payment_method,  	quantity,  	notes,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".device_distributions";
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
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto6["m_sql"] = "distribution_id";
$proto6["m_srcTableName"] = "public.device_distributions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto8["m_sql"] = "region_id";
$proto8["m_srcTableName"] = "public.device_distributions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto10["m_sql"] = "country_id";
$proto10["m_srcTableName"] = "public.device_distributions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "device_type",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto12["m_sql"] = "device_type";
$proto12["m_srcTableName"] = "public.device_distributions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order_reference",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto14["m_sql"] = "order_reference";
$proto14["m_srcTableName"] = "public.device_distributions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto16["m_sql"] = "facility_id";
$proto16["m_srcTableName"] = "public.device_distributions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "monthly_surgical_volume",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto18["m_sql"] = "monthly_surgical_volume";
$proto18["m_srcTableName"] = "public.device_distributions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_name",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto20["m_sql"] = "contact_name";
$proto20["m_srcTableName"] = "public.device_distributions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_email",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto22["m_sql"] = "contact_email";
$proto22["m_srcTableName"] = "public.device_distributions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "distribution_month",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto24["m_sql"] = "distribution_month";
$proto24["m_srcTableName"] = "public.device_distributions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distribution_year",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto26["m_sql"] = "distribution_year";
$proto26["m_srcTableName"] = "public.device_distributions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "payment_method",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto28["m_sql"] = "payment_method";
$proto28["m_srcTableName"] = "public.device_distributions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto30["m_sql"] = "quantity";
$proto30["m_srcTableName"] = "public.device_distributions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto32["m_sql"] = "notes";
$proto32["m_srcTableName"] = "public.device_distributions";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto34["m_sql"] = "created_at";
$proto34["m_srcTableName"] = "public.device_distributions";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.device_distributions",
	"m_srcTableName" => "public.device_distributions"
));

$proto36["m_sql"] = "updated_at";
$proto36["m_srcTableName"] = "public.device_distributions";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "public.device_distributions";
$proto39["m_srcTableName"] = "public.device_distributions";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "distribution_id";
$proto39["m_columns"][] = "region_id";
$proto39["m_columns"][] = "country_id";
$proto39["m_columns"][] = "device_type";
$proto39["m_columns"][] = "order_reference";
$proto39["m_columns"][] = "facility_id";
$proto39["m_columns"][] = "monthly_surgical_volume";
$proto39["m_columns"][] = "contact_name";
$proto39["m_columns"][] = "contact_email";
$proto39["m_columns"][] = "distribution_month";
$proto39["m_columns"][] = "distribution_year";
$proto39["m_columns"][] = "payment_method";
$proto39["m_columns"][] = "quantity";
$proto39["m_columns"][] = "notes";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "updated_at";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "\"public\".device_distributions";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "public.device_distributions";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.device_distributions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_device_distributions = createSqlQuery_device_distributions();


	
		;

																

$tdatadevice_distributions[".sqlquery"] = $queryData_device_distributions;



$tdatadevice_distributions[".hasEvents"] = false;

?>