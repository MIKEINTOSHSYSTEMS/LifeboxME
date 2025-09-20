<?php
$tdatacountries = array();
$tdatacountries[".searchableFields"] = array();
$tdatacountries[".ShortName"] = "countries";
$tdatacountries[".OwnerID"] = "";
$tdatacountries[".OriginalTable"] = "public.countries";


$tdatacountries[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacountries[".originalPagesByType"] = $tdatacountries[".pagesByType"];
$tdatacountries[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacountries[".originalPages"] = $tdatacountries[".pages"];
$tdatacountries[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacountries[".originalDefaultPages"] = $tdatacountries[".defaultPages"];

//	field labels
$fieldLabelscountries = array();
$fieldToolTipscountries = array();
$pageTitlescountries = array();
$placeHolderscountries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountries["English"] = array();
	$fieldToolTipscountries["English"] = array();
	$placeHolderscountries["English"] = array();
	$pageTitlescountries["English"] = array();
	$fieldLabelscountries["English"]["country_id"] = "Country Id";
	$fieldToolTipscountries["English"]["country_id"] = "";
	$placeHolderscountries["English"]["country_id"] = "";
	$fieldLabelscountries["English"]["country_name"] = "Country Name";
	$fieldToolTipscountries["English"]["country_name"] = "";
	$placeHolderscountries["English"]["country_name"] = "";
	$fieldLabelscountries["English"]["region_id"] = "Region Id";
	$fieldToolTipscountries["English"]["region_id"] = "";
	$placeHolderscountries["English"]["region_id"] = "";
	$fieldLabelscountries["English"]["iso_code"] = "Iso Code";
	$fieldToolTipscountries["English"]["iso_code"] = "";
	$placeHolderscountries["English"]["iso_code"] = "";
	$fieldLabelscountries["English"]["created_at"] = "Created At";
	$fieldToolTipscountries["English"]["created_at"] = "";
	$placeHolderscountries["English"]["created_at"] = "";
	$fieldLabelscountries["English"]["updated_at"] = "Updated At";
	$fieldToolTipscountries["English"]["updated_at"] = "";
	$placeHolderscountries["English"]["updated_at"] = "";
	if (count($fieldToolTipscountries["English"]))
		$tdatacountries[".isUseToolTips"] = true;
}


	$tdatacountries[".NCSearch"] = true;



$tdatacountries[".shortTableName"] = "countries";
$tdatacountries[".nSecOptions"] = 0;

$tdatacountries[".mainTableOwnerID"] = "";
$tdatacountries[".entityType"] = 0;
$tdatacountries[".connId"] = "lifebox_mesystem_at_localhost";


$tdatacountries[".strOriginalTableName"] = "public.countries";

	



$tdatacountries[".showAddInPopup"] = false;

$tdatacountries[".showEditInPopup"] = false;

$tdatacountries[".showViewInPopup"] = false;

$tdatacountries[".listAjax"] = false;
//	temporary
//$tdatacountries[".listAjax"] = false;

	$tdatacountries[".audit"] = true;

	$tdatacountries[".locking"] = false;


$pages = $tdatacountries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacountries[".edit"] = true;
	$tdatacountries[".afterEditAction"] = 1;
	$tdatacountries[".closePopupAfterEdit"] = 1;
	$tdatacountries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacountries[".add"] = true;
$tdatacountries[".afterAddAction"] = 1;
$tdatacountries[".closePopupAfterAdd"] = 1;
$tdatacountries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacountries[".list"] = true;
}



$tdatacountries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacountries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacountries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacountries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacountries[".printFriendly"] = true;
}



$tdatacountries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacountries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacountries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacountries[".isUseAjaxSuggest"] = true;



						

$tdatacountries[".ajaxCodeSnippetAdded"] = false;

$tdatacountries[".buttonsAdded"] = false;

$tdatacountries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountries[".isUseTimeForSearch"] = false;


$tdatacountries[".badgeColor"] = "D2AF80";


$tdatacountries[".allSearchFields"] = array();
$tdatacountries[".filterFields"] = array();
$tdatacountries[".requiredSearchFields"] = array();

$tdatacountries[".googleLikeFields"] = array();
$tdatacountries[".googleLikeFields"][] = "country_id";
$tdatacountries[".googleLikeFields"][] = "country_name";
$tdatacountries[".googleLikeFields"][] = "region_id";
$tdatacountries[".googleLikeFields"][] = "iso_code";
$tdatacountries[".googleLikeFields"][] = "created_at";
$tdatacountries[".googleLikeFields"][] = "updated_at";



$tdatacountries[".tableType"] = "list";

$tdatacountries[".printerPageOrientation"] = 0;
$tdatacountries[".nPrinterPageScale"] = 100;

$tdatacountries[".nPrinterSplitRecords"] = 40;

$tdatacountries[".geocodingEnabled"] = false;










$tdatacountries[".pageSize"] = 20;

$tdatacountries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacountries[".strOrderBy"] = $tstrOrderBy;

$tdatacountries[".orderindexes"] = array();


$tdatacountries[".sqlHead"] = "SELECT country_id,  	country_name,  	region_id,  	iso_code,  	created_at,  	updated_at";
$tdatacountries[".sqlFrom"] = "FROM \"public\".countries";
$tdatacountries[".sqlWhereExpr"] = "";
$tdatacountries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountries[".arrGroupsPerPage"] = $arrGPP;

$tdatacountries[".highlightSearchResults"] = true;

$tableKeyscountries = array();
$tableKeyscountries[] = "country_id";
$tdatacountries[".Keys"] = $tableKeyscountries;


$tdatacountries[".hideMobileList"] = array();




//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_countries","country_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacountries["country_id"] = $fdata;
		$tdatacountries[".searchableFields"][] = "country_id";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_countries","country_name");
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


	$tdatacountries["country_name"] = $fdata;
		$tdatacountries[".searchableFields"][] = "country_name";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_countries","region_id");
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


	$tdatacountries["region_id"] = $fdata;
		$tdatacountries[".searchableFields"][] = "region_id";
//	iso_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "iso_code";
	$fdata["GoodName"] = "iso_code";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_countries","iso_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "iso_code";

		$fdata["sourceSingle"] = "iso_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iso_code";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatacountries["iso_code"] = $fdata;
		$tdatacountries[".searchableFields"][] = "iso_code";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_countries","created_at");
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


	$tdatacountries["created_at"] = $fdata;
		$tdatacountries[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_countries","updated_at");
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


	$tdatacountries["updated_at"] = $fdata;
		$tdatacountries[".searchableFields"][] = "updated_at";


$tables_data["public.countries"]=&$tdatacountries;
$field_labels["public_countries"] = &$fieldLabelscountries;
$fieldToolTips["public_countries"] = &$fieldToolTipscountries;
$placeHolders["public_countries"] = &$placeHolderscountries;
$page_titles["public_countries"] = &$pageTitlescountries;


changeTextControlsToDate( "public.countries" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.countries"] = array();
//	public.clean_cut_implementations
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.clean_cut_implementations";
		$detailsParam["dOriginalTable"] = "public.clean_cut_implementations";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "clean_cut_implementations";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_clean_cut_implementations");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//	public.device_distributions
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.device_distributions";
		$detailsParam["dOriginalTable"] = "public.device_distributions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "device_distributions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_device_distributions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//	public.facilities
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.facilities";
		$detailsParam["dOriginalTable"] = "public.facilities";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "facilities";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_facilities");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//	public.surgical_cases
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.surgical_cases";
		$detailsParam["dOriginalTable"] = "public.surgical_cases";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "surgical_cases";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_surgical_cases");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//	public.training_sessions
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_sessions";
		$detailsParam["dOriginalTable"] = "public.training_sessions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_sessions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_sessions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="host_country_id";
//	public.training_participants
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_participants";
		$detailsParam["dOriginalTable"] = "public.training_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//	public.venues
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.venues";
		$detailsParam["dOriginalTable"] = "public.venues";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "venues";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_venues");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//	public.lbpmi_data_values
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_data_values";
		$detailsParam["dOriginalTable"] = "public.lbpmi_data_values";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_data_values";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_data_values");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["public.countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.countries"][$dIndex]["detailKeys"][]="country_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.countries"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.countries"][0] = $masterParams;
				$masterTablesData["public.countries"][0]["masterKeys"] = array();
	$masterTablesData["public.countries"][0]["masterKeys"][]="region_id";
				$masterTablesData["public.countries"][0]["detailKeys"] = array();
	$masterTablesData["public.countries"][0]["detailKeys"][]="region_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "country_id,  	country_name,  	region_id,  	iso_code,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".countries";
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
	"m_strName" => "country_id",
	"m_strTable" => "public.countries",
	"m_srcTableName" => "public.countries"
));

$proto6["m_sql"] = "country_id";
$proto6["m_srcTableName"] = "public.countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "public.countries",
	"m_srcTableName" => "public.countries"
));

$proto8["m_sql"] = "country_name";
$proto8["m_srcTableName"] = "public.countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.countries",
	"m_srcTableName" => "public.countries"
));

$proto10["m_sql"] = "region_id";
$proto10["m_srcTableName"] = "public.countries";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "iso_code",
	"m_strTable" => "public.countries",
	"m_srcTableName" => "public.countries"
));

$proto12["m_sql"] = "iso_code";
$proto12["m_srcTableName"] = "public.countries";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.countries",
	"m_srcTableName" => "public.countries"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.countries";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.countries",
	"m_srcTableName" => "public.countries"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.countries";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.countries";
$proto19["m_srcTableName"] = "public.countries";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "country_id";
$proto19["m_columns"][] = "country_name";
$proto19["m_columns"][] = "region_id";
$proto19["m_columns"][] = "iso_code";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "updated_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".countries";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.countries";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_countries = createSqlQuery_countries();


	
				;

						

$tdatacountries[".sqlquery"] = $queryData_countries;



$tdatacountries[".hasEvents"] = false;

?>