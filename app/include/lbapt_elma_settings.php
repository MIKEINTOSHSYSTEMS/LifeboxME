<?php
$tdatalbapt_elma = array();
$tdatalbapt_elma[".searchableFields"] = array();
$tdatalbapt_elma[".ShortName"] = "lbapt_elma";
$tdatalbapt_elma[".OwnerID"] = "";
$tdatalbapt_elma[".OriginalTable"] = "public.lbapt_elma";


$tdatalbapt_elma[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbapt_elma[".originalPagesByType"] = $tdatalbapt_elma[".pagesByType"];
$tdatalbapt_elma[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbapt_elma[".originalPages"] = $tdatalbapt_elma[".pages"];
$tdatalbapt_elma[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbapt_elma[".originalDefaultPages"] = $tdatalbapt_elma[".defaultPages"];

//	field labels
$fieldLabelslbapt_elma = array();
$fieldToolTipslbapt_elma = array();
$pageTitleslbapt_elma = array();
$placeHolderslbapt_elma = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_elma["English"] = array();
	$fieldToolTipslbapt_elma["English"] = array();
	$placeHolderslbapt_elma["English"] = array();
	$pageTitleslbapt_elma["English"] = array();
	$fieldLabelslbapt_elma["English"]["elma_id"] = "ELMA ID";
	$fieldToolTipslbapt_elma["English"]["elma_id"] = "";
	$placeHolderslbapt_elma["English"]["elma_id"] = "";
	$fieldLabelslbapt_elma["English"]["strategic_area_id"] = "Strategic Area";
	$fieldToolTipslbapt_elma["English"]["strategic_area_id"] = "";
	$placeHolderslbapt_elma["English"]["strategic_area_id"] = "";
	$fieldLabelslbapt_elma["English"]["key_objective"] = "Key Objective";
	$fieldToolTipslbapt_elma["English"]["key_objective"] = "";
	$placeHolderslbapt_elma["English"]["key_objective"] = "";
	$fieldLabelslbapt_elma["English"]["kpi"] = "KPI";
	$fieldToolTipslbapt_elma["English"]["kpi"] = "";
	$placeHolderslbapt_elma["English"]["kpi"] = "";
	$fieldLabelslbapt_elma["English"]["means_of_verification"] = "Means Of Verification";
	$fieldToolTipslbapt_elma["English"]["means_of_verification"] = "";
	$placeHolderslbapt_elma["English"]["means_of_verification"] = "";
	$fieldLabelslbapt_elma["English"]["status_id"] = "Status";
	$fieldToolTipslbapt_elma["English"]["status_id"] = "";
	$placeHolderslbapt_elma["English"]["status_id"] = "";
	$fieldLabelslbapt_elma["English"]["planned_timeframe_q1"] = "Planned Timeframe Q1";
	$fieldToolTipslbapt_elma["English"]["planned_timeframe_q1"] = "";
	$placeHolderslbapt_elma["English"]["planned_timeframe_q1"] = "";
	$fieldLabelslbapt_elma["English"]["planned_timeframe_q2"] = "Planned Timeframe Q2";
	$fieldToolTipslbapt_elma["English"]["planned_timeframe_q2"] = "";
	$placeHolderslbapt_elma["English"]["planned_timeframe_q2"] = "";
	$fieldLabelslbapt_elma["English"]["planned_timeframe_q3"] = "Planned Timeframe Q3";
	$fieldToolTipslbapt_elma["English"]["planned_timeframe_q3"] = "";
	$placeHolderslbapt_elma["English"]["planned_timeframe_q3"] = "";
	$fieldLabelslbapt_elma["English"]["planned_timeframe_q4"] = "Planned Timeframe Q4";
	$fieldToolTipslbapt_elma["English"]["planned_timeframe_q4"] = "";
	$placeHolderslbapt_elma["English"]["planned_timeframe_q4"] = "";
	$fieldLabelslbapt_elma["English"]["achievement_q1"] = "Achievement Q1";
	$fieldToolTipslbapt_elma["English"]["achievement_q1"] = "";
	$placeHolderslbapt_elma["English"]["achievement_q1"] = "";
	$fieldLabelslbapt_elma["English"]["achievement_q2"] = "Achievement Q2";
	$fieldToolTipslbapt_elma["English"]["achievement_q2"] = "";
	$placeHolderslbapt_elma["English"]["achievement_q2"] = "";
	$fieldLabelslbapt_elma["English"]["achievement_q3"] = "Achievement Q3";
	$fieldToolTipslbapt_elma["English"]["achievement_q3"] = "";
	$placeHolderslbapt_elma["English"]["achievement_q3"] = "";
	$fieldLabelslbapt_elma["English"]["achievement_q4"] = "Achievement Q4";
	$fieldToolTipslbapt_elma["English"]["achievement_q4"] = "";
	$placeHolderslbapt_elma["English"]["achievement_q4"] = "";
	$fieldLabelslbapt_elma["English"]["notes"] = "Notes";
	$fieldToolTipslbapt_elma["English"]["notes"] = "";
	$placeHolderslbapt_elma["English"]["notes"] = "";
	$fieldLabelslbapt_elma["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_elma["English"]["created_at"] = "";
	$placeHolderslbapt_elma["English"]["created_at"] = "";
	$fieldLabelslbapt_elma["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_elma["English"]["updated_at"] = "";
	$placeHolderslbapt_elma["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_elma["English"]))
		$tdatalbapt_elma[".isUseToolTips"] = true;
}


	$tdatalbapt_elma[".NCSearch"] = true;



$tdatalbapt_elma[".shortTableName"] = "lbapt_elma";
$tdatalbapt_elma[".nSecOptions"] = 0;

$tdatalbapt_elma[".mainTableOwnerID"] = "";
$tdatalbapt_elma[".entityType"] = 0;
$tdatalbapt_elma[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_elma[".strOriginalTableName"] = "public.lbapt_elma";

	



$tdatalbapt_elma[".showAddInPopup"] = false;

$tdatalbapt_elma[".showEditInPopup"] = false;

$tdatalbapt_elma[".showViewInPopup"] = false;

$tdatalbapt_elma[".listAjax"] = false;
//	temporary
//$tdatalbapt_elma[".listAjax"] = false;

	$tdatalbapt_elma[".audit"] = false;

	$tdatalbapt_elma[".locking"] = false;


$pages = $tdatalbapt_elma[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_elma[".edit"] = true;
	$tdatalbapt_elma[".afterEditAction"] = 1;
	$tdatalbapt_elma[".closePopupAfterEdit"] = 1;
	$tdatalbapt_elma[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_elma[".add"] = true;
$tdatalbapt_elma[".afterAddAction"] = 1;
$tdatalbapt_elma[".closePopupAfterAdd"] = 1;
$tdatalbapt_elma[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_elma[".list"] = true;
}



$tdatalbapt_elma[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_elma[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_elma[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_elma[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_elma[".printFriendly"] = true;
}



$tdatalbapt_elma[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_elma[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_elma[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_elma[".isUseAjaxSuggest"] = true;





$tdatalbapt_elma[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_elma[".buttonsAdded"] = false;

$tdatalbapt_elma[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_elma[".isUseTimeForSearch"] = false;


$tdatalbapt_elma[".badgeColor"] = "EDCA00";


$tdatalbapt_elma[".allSearchFields"] = array();
$tdatalbapt_elma[".filterFields"] = array();
$tdatalbapt_elma[".requiredSearchFields"] = array();

$tdatalbapt_elma[".googleLikeFields"] = array();
$tdatalbapt_elma[".googleLikeFields"][] = "elma_id";
$tdatalbapt_elma[".googleLikeFields"][] = "strategic_area_id";
$tdatalbapt_elma[".googleLikeFields"][] = "key_objective";
$tdatalbapt_elma[".googleLikeFields"][] = "kpi";
$tdatalbapt_elma[".googleLikeFields"][] = "means_of_verification";
$tdatalbapt_elma[".googleLikeFields"][] = "status_id";
$tdatalbapt_elma[".googleLikeFields"][] = "planned_timeframe_q1";
$tdatalbapt_elma[".googleLikeFields"][] = "planned_timeframe_q2";
$tdatalbapt_elma[".googleLikeFields"][] = "planned_timeframe_q3";
$tdatalbapt_elma[".googleLikeFields"][] = "planned_timeframe_q4";
$tdatalbapt_elma[".googleLikeFields"][] = "achievement_q1";
$tdatalbapt_elma[".googleLikeFields"][] = "achievement_q2";
$tdatalbapt_elma[".googleLikeFields"][] = "achievement_q3";
$tdatalbapt_elma[".googleLikeFields"][] = "achievement_q4";
$tdatalbapt_elma[".googleLikeFields"][] = "notes";
$tdatalbapt_elma[".googleLikeFields"][] = "created_at";
$tdatalbapt_elma[".googleLikeFields"][] = "updated_at";



$tdatalbapt_elma[".tableType"] = "list";

$tdatalbapt_elma[".printerPageOrientation"] = 0;
$tdatalbapt_elma[".nPrinterPageScale"] = 100;

$tdatalbapt_elma[".nPrinterSplitRecords"] = 40;

$tdatalbapt_elma[".geocodingEnabled"] = false;










$tdatalbapt_elma[".pageSize"] = 20;

$tdatalbapt_elma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_elma[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_elma[".orderindexes"] = array();


$tdatalbapt_elma[".sqlHead"] = "SELECT elma_id,  	strategic_area_id,  	key_objective,  	kpi,  	means_of_verification,  	status_id,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	notes,  	created_at,  	updated_at";
$tdatalbapt_elma[".sqlFrom"] = "FROM \"public\".lbapt_elma";
$tdatalbapt_elma[".sqlWhereExpr"] = "";
$tdatalbapt_elma[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_elma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_elma[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_elma[".highlightSearchResults"] = true;

$tableKeyslbapt_elma = array();
$tableKeyslbapt_elma[] = "elma_id";
$tdatalbapt_elma[".Keys"] = $tableKeyslbapt_elma;


$tdatalbapt_elma[".hideMobileList"] = array();




//	elma_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "elma_id";
	$fdata["GoodName"] = "elma_id";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","elma_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "elma_id";

		$fdata["sourceSingle"] = "elma_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "elma_id";

	
	
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


	$tdatalbapt_elma["elma_id"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "elma_id";
//	strategic_area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "strategic_area_id";
	$fdata["GoodName"] = "strategic_area_id";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","strategic_area_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "strategic_area_id";

		$fdata["sourceSingle"] = "strategic_area_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "strategic_area_id";

	
	
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
	$edata["LookupTable"] = "public.lbapt_strategic_areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "strategic_area_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "area_name";

				$edata["LookupWhere"] = "strategic_area_id = 6";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "key_objective";

	
	
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


	$tdatalbapt_elma["strategic_area_id"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "strategic_area_id";
//	key_objective
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "key_objective";
	$fdata["GoodName"] = "key_objective";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","key_objective");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "key_objective";

		$fdata["sourceSingle"] = "key_objective";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "key_objective";

	
	
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
	$edata["LookupTable"] = "public.lbapt_annual_plan_tracker";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "key_objective";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "key_objective";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "strategic_area_id", "lookup" => "strategic_area_id" );

		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "kpi";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalbapt_elma["key_objective"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "key_objective";
//	kpi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kpi";
	$fdata["GoodName"] = "kpi";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","kpi");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "kpi";

		$fdata["sourceSingle"] = "kpi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kpi";

	
	
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
	$edata["LookupTable"] = "public.lbapt_annual_plan_tracker";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "kpi";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "kpi";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "key_objective", "lookup" => "key_objective" );

		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatalbapt_elma["kpi"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "kpi";
//	means_of_verification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "means_of_verification";
	$fdata["GoodName"] = "means_of_verification";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","means_of_verification");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "means_of_verification";

		$fdata["sourceSingle"] = "means_of_verification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "means_of_verification";

	
	
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


	$tdatalbapt_elma["means_of_verification"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "means_of_verification";
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","status_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "status_id";

		$fdata["sourceSingle"] = "status_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
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
	$edata["LookupTable"] = "public.lbapt_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_name";

	

	
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


	$tdatalbapt_elma["status_id"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "status_id";
//	planned_timeframe_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "planned_timeframe_q1";
	$fdata["GoodName"] = "planned_timeframe_q1";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","planned_timeframe_q1");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q1";

		$fdata["sourceSingle"] = "planned_timeframe_q1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q1";

	
	
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


	$tdatalbapt_elma["planned_timeframe_q1"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "planned_timeframe_q1";
//	planned_timeframe_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "planned_timeframe_q2";
	$fdata["GoodName"] = "planned_timeframe_q2";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","planned_timeframe_q2");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q2";

		$fdata["sourceSingle"] = "planned_timeframe_q2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q2";

	
	
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


	$tdatalbapt_elma["planned_timeframe_q2"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "planned_timeframe_q2";
//	planned_timeframe_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "planned_timeframe_q3";
	$fdata["GoodName"] = "planned_timeframe_q3";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","planned_timeframe_q3");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q3";

		$fdata["sourceSingle"] = "planned_timeframe_q3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q3";

	
	
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


	$tdatalbapt_elma["planned_timeframe_q3"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "planned_timeframe_q3";
//	planned_timeframe_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "planned_timeframe_q4";
	$fdata["GoodName"] = "planned_timeframe_q4";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","planned_timeframe_q4");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q4";

		$fdata["sourceSingle"] = "planned_timeframe_q4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q4";

	
	
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


	$tdatalbapt_elma["planned_timeframe_q4"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "planned_timeframe_q4";
//	achievement_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "achievement_q1";
	$fdata["GoodName"] = "achievement_q1";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","achievement_q1");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q1";

		$fdata["sourceSingle"] = "achievement_q1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q1";

	
	
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


	$tdatalbapt_elma["achievement_q1"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "achievement_q1";
//	achievement_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "achievement_q2";
	$fdata["GoodName"] = "achievement_q2";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","achievement_q2");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q2";

		$fdata["sourceSingle"] = "achievement_q2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q2";

	
	
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


	$tdatalbapt_elma["achievement_q2"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "achievement_q2";
//	achievement_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "achievement_q3";
	$fdata["GoodName"] = "achievement_q3";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","achievement_q3");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q3";

		$fdata["sourceSingle"] = "achievement_q3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q3";

	
	
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


	$tdatalbapt_elma["achievement_q3"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "achievement_q3";
//	achievement_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "achievement_q4";
	$fdata["GoodName"] = "achievement_q4";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","achievement_q4");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q4";

		$fdata["sourceSingle"] = "achievement_q4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q4";

	
	
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


	$tdatalbapt_elma["achievement_q4"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "achievement_q4";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","notes");
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


	$tdatalbapt_elma["notes"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "notes";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","created_at");
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


	$tdatalbapt_elma["created_at"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_elma";
	$fdata["Label"] = GetFieldLabel("public_lbapt_elma","updated_at");
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


	$tdatalbapt_elma["updated_at"] = $fdata;
		$tdatalbapt_elma[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_elma"]=&$tdatalbapt_elma;
$field_labels["public_lbapt_elma"] = &$fieldLabelslbapt_elma;
$fieldToolTips["public_lbapt_elma"] = &$fieldToolTipslbapt_elma;
$placeHolders["public_lbapt_elma"] = &$placeHolderslbapt_elma;
$page_titles["public_lbapt_elma"] = &$pageTitleslbapt_elma;


changeTextControlsToDate( "public.lbapt_elma" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_elma"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_elma"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbapt_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbapt_status";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbapt_status";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbapt_elma"][0] = $masterParams;
				$masterTablesData["public.lbapt_elma"][0]["masterKeys"] = array();
	$masterTablesData["public.lbapt_elma"][0]["masterKeys"][]="status_id";
				$masterTablesData["public.lbapt_elma"][0]["detailKeys"] = array();
	$masterTablesData["public.lbapt_elma"][0]["detailKeys"][]="status_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbapt_strategic_areas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbapt_strategic_areas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbapt_strategic_areas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbapt_elma"][1] = $masterParams;
				$masterTablesData["public.lbapt_elma"][1]["masterKeys"] = array();
	$masterTablesData["public.lbapt_elma"][1]["masterKeys"][]="strategic_area_id";
				$masterTablesData["public.lbapt_elma"][1]["detailKeys"] = array();
	$masterTablesData["public.lbapt_elma"][1]["detailKeys"][]="strategic_area_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_elma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "elma_id,  	strategic_area_id,  	key_objective,  	kpi,  	means_of_verification,  	status_id,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	notes,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_elma";
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
	"m_strName" => "elma_id",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto6["m_sql"] = "elma_id";
$proto6["m_srcTableName"] = "public.lbapt_elma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "strategic_area_id",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto8["m_sql"] = "strategic_area_id";
$proto8["m_srcTableName"] = "public.lbapt_elma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "key_objective",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto10["m_sql"] = "key_objective";
$proto10["m_srcTableName"] = "public.lbapt_elma";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "kpi",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto12["m_sql"] = "kpi";
$proto12["m_srcTableName"] = "public.lbapt_elma";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "means_of_verification",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto14["m_sql"] = "means_of_verification";
$proto14["m_srcTableName"] = "public.lbapt_elma";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto16["m_sql"] = "status_id";
$proto16["m_srcTableName"] = "public.lbapt_elma";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q1",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto18["m_sql"] = "planned_timeframe_q1";
$proto18["m_srcTableName"] = "public.lbapt_elma";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q2",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto20["m_sql"] = "planned_timeframe_q2";
$proto20["m_srcTableName"] = "public.lbapt_elma";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q3",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto22["m_sql"] = "planned_timeframe_q3";
$proto22["m_srcTableName"] = "public.lbapt_elma";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q4",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto24["m_sql"] = "planned_timeframe_q4";
$proto24["m_srcTableName"] = "public.lbapt_elma";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q1",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto26["m_sql"] = "achievement_q1";
$proto26["m_srcTableName"] = "public.lbapt_elma";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q2",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto28["m_sql"] = "achievement_q2";
$proto28["m_srcTableName"] = "public.lbapt_elma";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q3",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto30["m_sql"] = "achievement_q3";
$proto30["m_srcTableName"] = "public.lbapt_elma";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q4",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto32["m_sql"] = "achievement_q4";
$proto32["m_srcTableName"] = "public.lbapt_elma";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto34["m_sql"] = "notes";
$proto34["m_srcTableName"] = "public.lbapt_elma";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto36["m_sql"] = "created_at";
$proto36["m_srcTableName"] = "public.lbapt_elma";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_elma",
	"m_srcTableName" => "public.lbapt_elma"
));

$proto38["m_sql"] = "updated_at";
$proto38["m_srcTableName"] = "public.lbapt_elma";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "public.lbapt_elma";
$proto41["m_srcTableName"] = "public.lbapt_elma";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "elma_id";
$proto41["m_columns"][] = "strategic_area_id";
$proto41["m_columns"][] = "key_objective";
$proto41["m_columns"][] = "kpi";
$proto41["m_columns"][] = "means_of_verification";
$proto41["m_columns"][] = "status_id";
$proto41["m_columns"][] = "planned_timeframe_q1";
$proto41["m_columns"][] = "planned_timeframe_q2";
$proto41["m_columns"][] = "planned_timeframe_q3";
$proto41["m_columns"][] = "planned_timeframe_q4";
$proto41["m_columns"][] = "achievement_q1";
$proto41["m_columns"][] = "achievement_q2";
$proto41["m_columns"][] = "achievement_q3";
$proto41["m_columns"][] = "achievement_q4";
$proto41["m_columns"][] = "notes";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "updated_at";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "\"public\".lbapt_elma";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "public.lbapt_elma";
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
$proto0["m_srcTableName"]="public.lbapt_elma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_elma = createSqlQuery_lbapt_elma();


	
				;

																	

$tdatalbapt_elma[".sqlquery"] = $queryData_lbapt_elma;



$tdatalbapt_elma[".hasEvents"] = false;

?>