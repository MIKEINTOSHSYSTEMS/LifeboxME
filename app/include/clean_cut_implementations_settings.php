<?php
$tdataclean_cut_implementations = array();
$tdataclean_cut_implementations[".searchableFields"] = array();
$tdataclean_cut_implementations[".ShortName"] = "clean_cut_implementations";
$tdataclean_cut_implementations[".OwnerID"] = "";
$tdataclean_cut_implementations[".OriginalTable"] = "public.clean_cut_implementations";


$tdataclean_cut_implementations[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataclean_cut_implementations[".originalPagesByType"] = $tdataclean_cut_implementations[".pagesByType"];
$tdataclean_cut_implementations[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataclean_cut_implementations[".originalPages"] = $tdataclean_cut_implementations[".pages"];
$tdataclean_cut_implementations[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataclean_cut_implementations[".originalDefaultPages"] = $tdataclean_cut_implementations[".defaultPages"];

//	field labels
$fieldLabelsclean_cut_implementations = array();
$fieldToolTipsclean_cut_implementations = array();
$pageTitlesclean_cut_implementations = array();
$placeHoldersclean_cut_implementations = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclean_cut_implementations["English"] = array();
	$fieldToolTipsclean_cut_implementations["English"] = array();
	$placeHoldersclean_cut_implementations["English"] = array();
	$pageTitlesclean_cut_implementations["English"] = array();
	$fieldLabelsclean_cut_implementations["English"]["implementation_id"] = "Implementation Id";
	$fieldToolTipsclean_cut_implementations["English"]["implementation_id"] = "";
	$placeHoldersclean_cut_implementations["English"]["implementation_id"] = "";
	$fieldLabelsclean_cut_implementations["English"]["facility_id"] = "Facility Id";
	$fieldToolTipsclean_cut_implementations["English"]["facility_id"] = "";
	$placeHoldersclean_cut_implementations["English"]["facility_id"] = "";
	$fieldLabelsclean_cut_implementations["English"]["country_id"] = "Country Id";
	$fieldToolTipsclean_cut_implementations["English"]["country_id"] = "";
	$placeHoldersclean_cut_implementations["English"]["country_id"] = "";
	$fieldLabelsclean_cut_implementations["English"]["implementation_year"] = "Implementation Year";
	$fieldToolTipsclean_cut_implementations["English"]["implementation_year"] = "";
	$placeHoldersclean_cut_implementations["English"]["implementation_year"] = "";
	$fieldLabelsclean_cut_implementations["English"]["start_date"] = "Start Date";
	$fieldToolTipsclean_cut_implementations["English"]["start_date"] = "";
	$placeHoldersclean_cut_implementations["English"]["start_date"] = "";
	$fieldLabelsclean_cut_implementations["English"]["end_date"] = "End Date";
	$fieldToolTipsclean_cut_implementations["English"]["end_date"] = "";
	$placeHoldersclean_cut_implementations["English"]["end_date"] = "";
	$fieldLabelsclean_cut_implementations["English"]["implementation_months"] = "Implementation Months";
	$fieldToolTipsclean_cut_implementations["English"]["implementation_months"] = "";
	$placeHoldersclean_cut_implementations["English"]["implementation_months"] = "";
	$fieldLabelsclean_cut_implementations["English"]["avg_monthly_surgical_volume"] = "Avg Monthly Surgical Volume";
	$fieldToolTipsclean_cut_implementations["English"]["avg_monthly_surgical_volume"] = "";
	$placeHoldersclean_cut_implementations["English"]["avg_monthly_surgical_volume"] = "";
	$fieldLabelsclean_cut_implementations["English"]["estimated_operations_impacted"] = "Estimated Operations Impacted";
	$fieldToolTipsclean_cut_implementations["English"]["estimated_operations_impacted"] = "";
	$placeHoldersclean_cut_implementations["English"]["estimated_operations_impacted"] = "";
	$fieldLabelsclean_cut_implementations["English"]["general_surgery_volume"] = "General Surgery Volume";
	$fieldToolTipsclean_cut_implementations["English"]["general_surgery_volume"] = "";
	$placeHoldersclean_cut_implementations["English"]["general_surgery_volume"] = "";
	$fieldLabelsclean_cut_implementations["English"]["ob_gyn_volume"] = "Ob Gyn Volume";
	$fieldToolTipsclean_cut_implementations["English"]["ob_gyn_volume"] = "";
	$placeHoldersclean_cut_implementations["English"]["ob_gyn_volume"] = "";
	$fieldLabelsclean_cut_implementations["English"]["pediatrics_volume"] = "Pediatrics Volume";
	$fieldToolTipsclean_cut_implementations["English"]["pediatrics_volume"] = "";
	$placeHoldersclean_cut_implementations["English"]["pediatrics_volume"] = "";
	$fieldLabelsclean_cut_implementations["English"]["ortho_volume"] = "Ortho Volume";
	$fieldToolTipsclean_cut_implementations["English"]["ortho_volume"] = "";
	$placeHoldersclean_cut_implementations["English"]["ortho_volume"] = "";
	$fieldLabelsclean_cut_implementations["English"]["total_volume"] = "Total Volume";
	$fieldToolTipsclean_cut_implementations["English"]["total_volume"] = "";
	$placeHoldersclean_cut_implementations["English"]["total_volume"] = "";
	$fieldLabelsclean_cut_implementations["English"]["remarks"] = "Remarks";
	$fieldToolTipsclean_cut_implementations["English"]["remarks"] = "";
	$placeHoldersclean_cut_implementations["English"]["remarks"] = "";
	$fieldLabelsclean_cut_implementations["English"]["created_at"] = "Created At";
	$fieldToolTipsclean_cut_implementations["English"]["created_at"] = "";
	$placeHoldersclean_cut_implementations["English"]["created_at"] = "";
	$fieldLabelsclean_cut_implementations["English"]["updated_at"] = "Updated At";
	$fieldToolTipsclean_cut_implementations["English"]["updated_at"] = "";
	$placeHoldersclean_cut_implementations["English"]["updated_at"] = "";
	if (count($fieldToolTipsclean_cut_implementations["English"]))
		$tdataclean_cut_implementations[".isUseToolTips"] = true;
}


	$tdataclean_cut_implementations[".NCSearch"] = true;



$tdataclean_cut_implementations[".shortTableName"] = "clean_cut_implementations";
$tdataclean_cut_implementations[".nSecOptions"] = 0;

$tdataclean_cut_implementations[".mainTableOwnerID"] = "";
$tdataclean_cut_implementations[".entityType"] = 0;
$tdataclean_cut_implementations[".connId"] = "lifebox_mesystem_at_localhost";


$tdataclean_cut_implementations[".strOriginalTableName"] = "public.clean_cut_implementations";

	



$tdataclean_cut_implementations[".showAddInPopup"] = false;

$tdataclean_cut_implementations[".showEditInPopup"] = false;

$tdataclean_cut_implementations[".showViewInPopup"] = false;

$tdataclean_cut_implementations[".listAjax"] = false;
//	temporary
//$tdataclean_cut_implementations[".listAjax"] = false;

	$tdataclean_cut_implementations[".audit"] = false;

	$tdataclean_cut_implementations[".locking"] = false;


$pages = $tdataclean_cut_implementations[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataclean_cut_implementations[".edit"] = true;
	$tdataclean_cut_implementations[".afterEditAction"] = 1;
	$tdataclean_cut_implementations[".closePopupAfterEdit"] = 1;
	$tdataclean_cut_implementations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataclean_cut_implementations[".add"] = true;
$tdataclean_cut_implementations[".afterAddAction"] = 1;
$tdataclean_cut_implementations[".closePopupAfterAdd"] = 1;
$tdataclean_cut_implementations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataclean_cut_implementations[".list"] = true;
}



$tdataclean_cut_implementations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataclean_cut_implementations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataclean_cut_implementations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataclean_cut_implementations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataclean_cut_implementations[".printFriendly"] = true;
}



$tdataclean_cut_implementations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataclean_cut_implementations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataclean_cut_implementations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataclean_cut_implementations[".isUseAjaxSuggest"] = true;





$tdataclean_cut_implementations[".ajaxCodeSnippetAdded"] = false;

$tdataclean_cut_implementations[".buttonsAdded"] = false;

$tdataclean_cut_implementations[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclean_cut_implementations[".isUseTimeForSearch"] = false;


$tdataclean_cut_implementations[".badgeColor"] = "8FBC8B";


$tdataclean_cut_implementations[".allSearchFields"] = array();
$tdataclean_cut_implementations[".filterFields"] = array();
$tdataclean_cut_implementations[".requiredSearchFields"] = array();

$tdataclean_cut_implementations[".googleLikeFields"] = array();
$tdataclean_cut_implementations[".googleLikeFields"][] = "implementation_id";
$tdataclean_cut_implementations[".googleLikeFields"][] = "facility_id";
$tdataclean_cut_implementations[".googleLikeFields"][] = "country_id";
$tdataclean_cut_implementations[".googleLikeFields"][] = "implementation_year";
$tdataclean_cut_implementations[".googleLikeFields"][] = "start_date";
$tdataclean_cut_implementations[".googleLikeFields"][] = "end_date";
$tdataclean_cut_implementations[".googleLikeFields"][] = "implementation_months";
$tdataclean_cut_implementations[".googleLikeFields"][] = "avg_monthly_surgical_volume";
$tdataclean_cut_implementations[".googleLikeFields"][] = "estimated_operations_impacted";
$tdataclean_cut_implementations[".googleLikeFields"][] = "general_surgery_volume";
$tdataclean_cut_implementations[".googleLikeFields"][] = "ob_gyn_volume";
$tdataclean_cut_implementations[".googleLikeFields"][] = "pediatrics_volume";
$tdataclean_cut_implementations[".googleLikeFields"][] = "ortho_volume";
$tdataclean_cut_implementations[".googleLikeFields"][] = "total_volume";
$tdataclean_cut_implementations[".googleLikeFields"][] = "remarks";
$tdataclean_cut_implementations[".googleLikeFields"][] = "created_at";
$tdataclean_cut_implementations[".googleLikeFields"][] = "updated_at";



$tdataclean_cut_implementations[".tableType"] = "list";

$tdataclean_cut_implementations[".printerPageOrientation"] = 0;
$tdataclean_cut_implementations[".nPrinterPageScale"] = 100;

$tdataclean_cut_implementations[".nPrinterSplitRecords"] = 40;

$tdataclean_cut_implementations[".geocodingEnabled"] = false;










$tdataclean_cut_implementations[".pageSize"] = 20;

$tdataclean_cut_implementations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataclean_cut_implementations[".strOrderBy"] = $tstrOrderBy;

$tdataclean_cut_implementations[".orderindexes"] = array();


$tdataclean_cut_implementations[".sqlHead"] = "SELECT implementation_id,  	facility_id,  	country_id,  	implementation_year,  	start_date,  	end_date,  	implementation_months,  	avg_monthly_surgical_volume,  	estimated_operations_impacted,  	general_surgery_volume,  	ob_gyn_volume,  	pediatrics_volume,  	ortho_volume,  	total_volume,  	remarks,  	created_at,  	updated_at";
$tdataclean_cut_implementations[".sqlFrom"] = "FROM \"public\".clean_cut_implementations";
$tdataclean_cut_implementations[".sqlWhereExpr"] = "";
$tdataclean_cut_implementations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclean_cut_implementations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclean_cut_implementations[".arrGroupsPerPage"] = $arrGPP;

$tdataclean_cut_implementations[".highlightSearchResults"] = true;

$tableKeysclean_cut_implementations = array();
$tableKeysclean_cut_implementations[] = "implementation_id";
$tdataclean_cut_implementations[".Keys"] = $tableKeysclean_cut_implementations;


$tdataclean_cut_implementations[".hideMobileList"] = array();




//	implementation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "implementation_id";
	$fdata["GoodName"] = "implementation_id";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","implementation_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "implementation_id";

		$fdata["sourceSingle"] = "implementation_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation_id";

	
	
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


	$tdataclean_cut_implementations["implementation_id"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "implementation_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","facility_id");
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


	$tdataclean_cut_implementations["facility_id"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "facility_id";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","country_id");
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


	$tdataclean_cut_implementations["country_id"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "country_id";
//	implementation_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "implementation_year";
	$fdata["GoodName"] = "implementation_year";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","implementation_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "implementation_year";

		$fdata["sourceSingle"] = "implementation_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation_year";

	
	
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


	$tdataclean_cut_implementations["implementation_year"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "implementation_year";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

		$fdata["sourceSingle"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataclean_cut_implementations["start_date"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

		$fdata["sourceSingle"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";

	
	
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


	$tdataclean_cut_implementations["end_date"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "end_date";
//	implementation_months
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "implementation_months";
	$fdata["GoodName"] = "implementation_months";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","implementation_months");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "implementation_months";

		$fdata["sourceSingle"] = "implementation_months";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation_months";

	
	
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


	$tdataclean_cut_implementations["implementation_months"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "implementation_months";
//	avg_monthly_surgical_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "avg_monthly_surgical_volume";
	$fdata["GoodName"] = "avg_monthly_surgical_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","avg_monthly_surgical_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "avg_monthly_surgical_volume";

		$fdata["sourceSingle"] = "avg_monthly_surgical_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_monthly_surgical_volume";

	
	
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


	$tdataclean_cut_implementations["avg_monthly_surgical_volume"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "avg_monthly_surgical_volume";
//	estimated_operations_impacted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "estimated_operations_impacted";
	$fdata["GoodName"] = "estimated_operations_impacted";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","estimated_operations_impacted");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estimated_operations_impacted";

		$fdata["sourceSingle"] = "estimated_operations_impacted";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estimated_operations_impacted";

	
	
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


	$tdataclean_cut_implementations["estimated_operations_impacted"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "estimated_operations_impacted";
//	general_surgery_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "general_surgery_volume";
	$fdata["GoodName"] = "general_surgery_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","general_surgery_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "general_surgery_volume";

		$fdata["sourceSingle"] = "general_surgery_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "general_surgery_volume";

	
	
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


	$tdataclean_cut_implementations["general_surgery_volume"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "general_surgery_volume";
//	ob_gyn_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ob_gyn_volume";
	$fdata["GoodName"] = "ob_gyn_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","ob_gyn_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ob_gyn_volume";

		$fdata["sourceSingle"] = "ob_gyn_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_gyn_volume";

	
	
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


	$tdataclean_cut_implementations["ob_gyn_volume"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "ob_gyn_volume";
//	pediatrics_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pediatrics_volume";
	$fdata["GoodName"] = "pediatrics_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","pediatrics_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pediatrics_volume";

		$fdata["sourceSingle"] = "pediatrics_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pediatrics_volume";

	
	
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


	$tdataclean_cut_implementations["pediatrics_volume"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "pediatrics_volume";
//	ortho_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ortho_volume";
	$fdata["GoodName"] = "ortho_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","ortho_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ortho_volume";

		$fdata["sourceSingle"] = "ortho_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ortho_volume";

	
	
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


	$tdataclean_cut_implementations["ortho_volume"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "ortho_volume";
//	total_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "total_volume";
	$fdata["GoodName"] = "total_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","total_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_volume";

		$fdata["sourceSingle"] = "total_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_volume";

	
	
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


	$tdataclean_cut_implementations["total_volume"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "total_volume";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","remarks");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "remarks";

		$fdata["sourceSingle"] = "remarks";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarks";

	
	
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


	$tdataclean_cut_implementations["remarks"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "remarks";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","created_at");
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


	$tdataclean_cut_implementations["created_at"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.clean_cut_implementations";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementations","updated_at");
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


	$tdataclean_cut_implementations["updated_at"] = $fdata;
		$tdataclean_cut_implementations[".searchableFields"][] = "updated_at";


$tables_data["public.clean_cut_implementations"]=&$tdataclean_cut_implementations;
$field_labels["public_clean_cut_implementations"] = &$fieldLabelsclean_cut_implementations;
$fieldToolTips["public_clean_cut_implementations"] = &$fieldToolTipsclean_cut_implementations;
$placeHolders["public_clean_cut_implementations"] = &$placeHoldersclean_cut_implementations;
$page_titles["public_clean_cut_implementations"] = &$pageTitlesclean_cut_implementations;


changeTextControlsToDate( "public.clean_cut_implementations" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.clean_cut_implementations"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.clean_cut_implementations"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.countries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.countries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "countries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.clean_cut_implementations"][0] = $masterParams;
				$masterTablesData["public.clean_cut_implementations"][0]["masterKeys"] = array();
	$masterTablesData["public.clean_cut_implementations"][0]["masterKeys"][]="country_id";
				$masterTablesData["public.clean_cut_implementations"][0]["detailKeys"] = array();
	$masterTablesData["public.clean_cut_implementations"][0]["detailKeys"][]="country_id";
		
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
					$masterTablesData["public.clean_cut_implementations"][1] = $masterParams;
				$masterTablesData["public.clean_cut_implementations"][1]["masterKeys"] = array();
	$masterTablesData["public.clean_cut_implementations"][1]["masterKeys"][]="facility_id";
				$masterTablesData["public.clean_cut_implementations"][1]["detailKeys"] = array();
	$masterTablesData["public.clean_cut_implementations"][1]["detailKeys"][]="facility_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_clean_cut_implementations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "implementation_id,  	facility_id,  	country_id,  	implementation_year,  	start_date,  	end_date,  	implementation_months,  	avg_monthly_surgical_volume,  	estimated_operations_impacted,  	general_surgery_volume,  	ob_gyn_volume,  	pediatrics_volume,  	ortho_volume,  	total_volume,  	remarks,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".clean_cut_implementations";
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
	"m_strName" => "implementation_id",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto6["m_sql"] = "implementation_id";
$proto6["m_srcTableName"] = "public.clean_cut_implementations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto8["m_sql"] = "facility_id";
$proto8["m_srcTableName"] = "public.clean_cut_implementations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto10["m_sql"] = "country_id";
$proto10["m_srcTableName"] = "public.clean_cut_implementations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "implementation_year",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto12["m_sql"] = "implementation_year";
$proto12["m_srcTableName"] = "public.clean_cut_implementations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto14["m_sql"] = "start_date";
$proto14["m_srcTableName"] = "public.clean_cut_implementations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto16["m_sql"] = "end_date";
$proto16["m_srcTableName"] = "public.clean_cut_implementations";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "implementation_months",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto18["m_sql"] = "implementation_months";
$proto18["m_srcTableName"] = "public.clean_cut_implementations";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_monthly_surgical_volume",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto20["m_sql"] = "avg_monthly_surgical_volume";
$proto20["m_srcTableName"] = "public.clean_cut_implementations";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "estimated_operations_impacted",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto22["m_sql"] = "estimated_operations_impacted";
$proto22["m_srcTableName"] = "public.clean_cut_implementations";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "general_surgery_volume",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto24["m_sql"] = "general_surgery_volume";
$proto24["m_srcTableName"] = "public.clean_cut_implementations";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_gyn_volume",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto26["m_sql"] = "ob_gyn_volume";
$proto26["m_srcTableName"] = "public.clean_cut_implementations";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "pediatrics_volume",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto28["m_sql"] = "pediatrics_volume";
$proto28["m_srcTableName"] = "public.clean_cut_implementations";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ortho_volume",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto30["m_sql"] = "ortho_volume";
$proto30["m_srcTableName"] = "public.clean_cut_implementations";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "total_volume",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto32["m_sql"] = "total_volume";
$proto32["m_srcTableName"] = "public.clean_cut_implementations";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto34["m_sql"] = "remarks";
$proto34["m_srcTableName"] = "public.clean_cut_implementations";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto36["m_sql"] = "created_at";
$proto36["m_srcTableName"] = "public.clean_cut_implementations";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.clean_cut_implementations",
	"m_srcTableName" => "public.clean_cut_implementations"
));

$proto38["m_sql"] = "updated_at";
$proto38["m_srcTableName"] = "public.clean_cut_implementations";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "public.clean_cut_implementations";
$proto41["m_srcTableName"] = "public.clean_cut_implementations";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "implementation_id";
$proto41["m_columns"][] = "facility_id";
$proto41["m_columns"][] = "country_id";
$proto41["m_columns"][] = "implementation_year";
$proto41["m_columns"][] = "start_date";
$proto41["m_columns"][] = "end_date";
$proto41["m_columns"][] = "implementation_months";
$proto41["m_columns"][] = "avg_monthly_surgical_volume";
$proto41["m_columns"][] = "estimated_operations_impacted";
$proto41["m_columns"][] = "general_surgery_volume";
$proto41["m_columns"][] = "ob_gyn_volume";
$proto41["m_columns"][] = "pediatrics_volume";
$proto41["m_columns"][] = "ortho_volume";
$proto41["m_columns"][] = "total_volume";
$proto41["m_columns"][] = "remarks";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "updated_at";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "\"public\".clean_cut_implementations";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "public.clean_cut_implementations";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.clean_cut_implementations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clean_cut_implementations = createSqlQuery_clean_cut_implementations();


	
				;

																	

$tdataclean_cut_implementations[".sqlquery"] = $queryData_clean_cut_implementations;



$tdataclean_cut_implementations[".hasEvents"] = false;

?>