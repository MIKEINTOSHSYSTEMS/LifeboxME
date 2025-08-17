<?php
$tdatalbapt_cri = array();
$tdatalbapt_cri[".searchableFields"] = array();
$tdatalbapt_cri[".ShortName"] = "lbapt_cri";
$tdatalbapt_cri[".OwnerID"] = "";
$tdatalbapt_cri[".OriginalTable"] = "public.lbapt_cri";


$tdatalbapt_cri[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbapt_cri[".originalPagesByType"] = $tdatalbapt_cri[".pagesByType"];
$tdatalbapt_cri[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbapt_cri[".originalPages"] = $tdatalbapt_cri[".pages"];
$tdatalbapt_cri[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbapt_cri[".originalDefaultPages"] = $tdatalbapt_cri[".defaultPages"];

//	field labels
$fieldLabelslbapt_cri = array();
$fieldToolTipslbapt_cri = array();
$pageTitleslbapt_cri = array();
$placeHolderslbapt_cri = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_cri["English"] = array();
	$fieldToolTipslbapt_cri["English"] = array();
	$placeHolderslbapt_cri["English"] = array();
	$pageTitleslbapt_cri["English"] = array();
	$fieldLabelslbapt_cri["English"]["cri_id"] = "CRI ID";
	$fieldToolTipslbapt_cri["English"]["cri_id"] = "";
	$placeHolderslbapt_cri["English"]["cri_id"] = "";
	$fieldLabelslbapt_cri["English"]["strategic_area_id"] = "Strategic Area";
	$fieldToolTipslbapt_cri["English"]["strategic_area_id"] = "";
	$placeHolderslbapt_cri["English"]["strategic_area_id"] = "";
	$fieldLabelslbapt_cri["English"]["key_objective"] = "Key Objective";
	$fieldToolTipslbapt_cri["English"]["key_objective"] = "";
	$placeHolderslbapt_cri["English"]["key_objective"] = "";
	$fieldLabelslbapt_cri["English"]["year_1_target"] = "Year 1 Target";
	$fieldToolTipslbapt_cri["English"]["year_1_target"] = "";
	$placeHolderslbapt_cri["English"]["year_1_target"] = "";
	$fieldLabelslbapt_cri["English"]["kpi"] = "KPI";
	$fieldToolTipslbapt_cri["English"]["kpi"] = "";
	$placeHolderslbapt_cri["English"]["kpi"] = "";
	$fieldLabelslbapt_cri["English"]["status_id"] = "Status";
	$fieldToolTipslbapt_cri["English"]["status_id"] = "";
	$placeHolderslbapt_cri["English"]["status_id"] = "";
	$fieldLabelslbapt_cri["English"]["planned_timeframe_q1"] = "Planned Timeframe Q1";
	$fieldToolTipslbapt_cri["English"]["planned_timeframe_q1"] = "";
	$placeHolderslbapt_cri["English"]["planned_timeframe_q1"] = "";
	$fieldLabelslbapt_cri["English"]["planned_timeframe_q2"] = "Planned Timeframe Q2";
	$fieldToolTipslbapt_cri["English"]["planned_timeframe_q2"] = "";
	$placeHolderslbapt_cri["English"]["planned_timeframe_q2"] = "";
	$fieldLabelslbapt_cri["English"]["planned_timeframe_q3"] = "Planned Timeframe Q3";
	$fieldToolTipslbapt_cri["English"]["planned_timeframe_q3"] = "";
	$placeHolderslbapt_cri["English"]["planned_timeframe_q3"] = "";
	$fieldLabelslbapt_cri["English"]["planned_timeframe_q4"] = "Planned Timeframe Q4";
	$fieldToolTipslbapt_cri["English"]["planned_timeframe_q4"] = "";
	$placeHolderslbapt_cri["English"]["planned_timeframe_q4"] = "";
	$fieldLabelslbapt_cri["English"]["achievement_q1"] = "Achievement Q1";
	$fieldToolTipslbapt_cri["English"]["achievement_q1"] = "";
	$placeHolderslbapt_cri["English"]["achievement_q1"] = "";
	$fieldLabelslbapt_cri["English"]["achievement_q2"] = "Achievement Q2";
	$fieldToolTipslbapt_cri["English"]["achievement_q2"] = "";
	$placeHolderslbapt_cri["English"]["achievement_q2"] = "";
	$fieldLabelslbapt_cri["English"]["achievement_q3"] = "Achievement Q3";
	$fieldToolTipslbapt_cri["English"]["achievement_q3"] = "";
	$placeHolderslbapt_cri["English"]["achievement_q3"] = "";
	$fieldLabelslbapt_cri["English"]["achievement_q4"] = "Achievement Q4";
	$fieldToolTipslbapt_cri["English"]["achievement_q4"] = "";
	$placeHolderslbapt_cri["English"]["achievement_q4"] = "";
	$fieldLabelslbapt_cri["English"]["notes"] = "Notes";
	$fieldToolTipslbapt_cri["English"]["notes"] = "";
	$placeHolderslbapt_cri["English"]["notes"] = "";
	$fieldLabelslbapt_cri["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_cri["English"]["created_at"] = "";
	$placeHolderslbapt_cri["English"]["created_at"] = "";
	$fieldLabelslbapt_cri["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_cri["English"]["updated_at"] = "";
	$placeHolderslbapt_cri["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_cri["English"]))
		$tdatalbapt_cri[".isUseToolTips"] = true;
}


	$tdatalbapt_cri[".NCSearch"] = true;



$tdatalbapt_cri[".shortTableName"] = "lbapt_cri";
$tdatalbapt_cri[".nSecOptions"] = 0;

$tdatalbapt_cri[".mainTableOwnerID"] = "";
$tdatalbapt_cri[".entityType"] = 0;
$tdatalbapt_cri[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_cri[".strOriginalTableName"] = "public.lbapt_cri";

	



$tdatalbapt_cri[".showAddInPopup"] = false;

$tdatalbapt_cri[".showEditInPopup"] = false;

$tdatalbapt_cri[".showViewInPopup"] = false;

$tdatalbapt_cri[".listAjax"] = false;
//	temporary
//$tdatalbapt_cri[".listAjax"] = false;

	$tdatalbapt_cri[".audit"] = false;

	$tdatalbapt_cri[".locking"] = false;


$pages = $tdatalbapt_cri[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_cri[".edit"] = true;
	$tdatalbapt_cri[".afterEditAction"] = 1;
	$tdatalbapt_cri[".closePopupAfterEdit"] = 1;
	$tdatalbapt_cri[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_cri[".add"] = true;
$tdatalbapt_cri[".afterAddAction"] = 1;
$tdatalbapt_cri[".closePopupAfterAdd"] = 1;
$tdatalbapt_cri[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_cri[".list"] = true;
}



$tdatalbapt_cri[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_cri[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_cri[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_cri[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_cri[".printFriendly"] = true;
}



$tdatalbapt_cri[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_cri[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_cri[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_cri[".isUseAjaxSuggest"] = true;





$tdatalbapt_cri[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_cri[".buttonsAdded"] = false;

$tdatalbapt_cri[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_cri[".isUseTimeForSearch"] = false;


$tdatalbapt_cri[".badgeColor"] = "9ACD32";


$tdatalbapt_cri[".allSearchFields"] = array();
$tdatalbapt_cri[".filterFields"] = array();
$tdatalbapt_cri[".requiredSearchFields"] = array();

$tdatalbapt_cri[".googleLikeFields"] = array();
$tdatalbapt_cri[".googleLikeFields"][] = "cri_id";
$tdatalbapt_cri[".googleLikeFields"][] = "strategic_area_id";
$tdatalbapt_cri[".googleLikeFields"][] = "key_objective";
$tdatalbapt_cri[".googleLikeFields"][] = "year_1_target";
$tdatalbapt_cri[".googleLikeFields"][] = "kpi";
$tdatalbapt_cri[".googleLikeFields"][] = "status_id";
$tdatalbapt_cri[".googleLikeFields"][] = "planned_timeframe_q1";
$tdatalbapt_cri[".googleLikeFields"][] = "planned_timeframe_q2";
$tdatalbapt_cri[".googleLikeFields"][] = "planned_timeframe_q3";
$tdatalbapt_cri[".googleLikeFields"][] = "planned_timeframe_q4";
$tdatalbapt_cri[".googleLikeFields"][] = "achievement_q1";
$tdatalbapt_cri[".googleLikeFields"][] = "achievement_q2";
$tdatalbapt_cri[".googleLikeFields"][] = "achievement_q3";
$tdatalbapt_cri[".googleLikeFields"][] = "achievement_q4";
$tdatalbapt_cri[".googleLikeFields"][] = "notes";
$tdatalbapt_cri[".googleLikeFields"][] = "created_at";
$tdatalbapt_cri[".googleLikeFields"][] = "updated_at";



$tdatalbapt_cri[".tableType"] = "list";

$tdatalbapt_cri[".printerPageOrientation"] = 0;
$tdatalbapt_cri[".nPrinterPageScale"] = 100;

$tdatalbapt_cri[".nPrinterSplitRecords"] = 40;

$tdatalbapt_cri[".geocodingEnabled"] = false;










$tdatalbapt_cri[".pageSize"] = 20;

$tdatalbapt_cri[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_cri[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_cri[".orderindexes"] = array();


$tdatalbapt_cri[".sqlHead"] = "SELECT cri_id,  	strategic_area_id,  	key_objective,  	year_1_target,  	kpi,  	status_id,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	notes,  	created_at,  	updated_at";
$tdatalbapt_cri[".sqlFrom"] = "FROM \"public\".lbapt_cri";
$tdatalbapt_cri[".sqlWhereExpr"] = "";
$tdatalbapt_cri[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_cri[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_cri[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_cri[".highlightSearchResults"] = true;

$tableKeyslbapt_cri = array();
$tableKeyslbapt_cri[] = "cri_id";
$tdatalbapt_cri[".Keys"] = $tableKeyslbapt_cri;


$tdatalbapt_cri[".hideMobileList"] = array();




//	cri_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cri_id";
	$fdata["GoodName"] = "cri_id";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","cri_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cri_id";

		$fdata["sourceSingle"] = "cri_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cri_id";

	
	
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


	$tdatalbapt_cri["cri_id"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "cri_id";
//	strategic_area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "strategic_area_id";
	$fdata["GoodName"] = "strategic_area_id";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","strategic_area_id");
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

				$edata["LookupWhere"] = "strategic_area_id = 7";


	
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


	$tdatalbapt_cri["strategic_area_id"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "strategic_area_id";
//	key_objective
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "key_objective";
	$fdata["GoodName"] = "key_objective";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","key_objective");
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


	$tdatalbapt_cri["key_objective"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "key_objective";
//	year_1_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "year_1_target";
	$fdata["GoodName"] = "year_1_target";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","year_1_target");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "year_1_target";

		$fdata["sourceSingle"] = "year_1_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "year_1_target";

	
	
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


	$tdatalbapt_cri["year_1_target"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "year_1_target";
//	kpi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "kpi";
	$fdata["GoodName"] = "kpi";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","kpi");
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


	$tdatalbapt_cri["kpi"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "kpi";
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","status_id");
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


	$tdatalbapt_cri["status_id"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "status_id";
//	planned_timeframe_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "planned_timeframe_q1";
	$fdata["GoodName"] = "planned_timeframe_q1";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","planned_timeframe_q1");
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


	$tdatalbapt_cri["planned_timeframe_q1"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "planned_timeframe_q1";
//	planned_timeframe_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "planned_timeframe_q2";
	$fdata["GoodName"] = "planned_timeframe_q2";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","planned_timeframe_q2");
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


	$tdatalbapt_cri["planned_timeframe_q2"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "planned_timeframe_q2";
//	planned_timeframe_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "planned_timeframe_q3";
	$fdata["GoodName"] = "planned_timeframe_q3";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","planned_timeframe_q3");
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


	$tdatalbapt_cri["planned_timeframe_q3"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "planned_timeframe_q3";
//	planned_timeframe_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "planned_timeframe_q4";
	$fdata["GoodName"] = "planned_timeframe_q4";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","planned_timeframe_q4");
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


	$tdatalbapt_cri["planned_timeframe_q4"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "planned_timeframe_q4";
//	achievement_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "achievement_q1";
	$fdata["GoodName"] = "achievement_q1";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","achievement_q1");
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


	$tdatalbapt_cri["achievement_q1"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "achievement_q1";
//	achievement_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "achievement_q2";
	$fdata["GoodName"] = "achievement_q2";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","achievement_q2");
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


	$tdatalbapt_cri["achievement_q2"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "achievement_q2";
//	achievement_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "achievement_q3";
	$fdata["GoodName"] = "achievement_q3";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","achievement_q3");
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


	$tdatalbapt_cri["achievement_q3"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "achievement_q3";
//	achievement_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "achievement_q4";
	$fdata["GoodName"] = "achievement_q4";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","achievement_q4");
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


	$tdatalbapt_cri["achievement_q4"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "achievement_q4";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","notes");
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


	$tdatalbapt_cri["notes"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "notes";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","created_at");
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


	$tdatalbapt_cri["created_at"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_cri";
	$fdata["Label"] = GetFieldLabel("public_lbapt_cri","updated_at");
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


	$tdatalbapt_cri["updated_at"] = $fdata;
		$tdatalbapt_cri[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_cri"]=&$tdatalbapt_cri;
$field_labels["public_lbapt_cri"] = &$fieldLabelslbapt_cri;
$fieldToolTips["public_lbapt_cri"] = &$fieldToolTipslbapt_cri;
$placeHolders["public_lbapt_cri"] = &$placeHolderslbapt_cri;
$page_titles["public_lbapt_cri"] = &$pageTitleslbapt_cri;


changeTextControlsToDate( "public.lbapt_cri" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_cri"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_cri"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbapt_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbapt_status";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbapt_status";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbapt_cri"][0] = $masterParams;
				$masterTablesData["public.lbapt_cri"][0]["masterKeys"] = array();
	$masterTablesData["public.lbapt_cri"][0]["masterKeys"][]="status_id";
				$masterTablesData["public.lbapt_cri"][0]["detailKeys"] = array();
	$masterTablesData["public.lbapt_cri"][0]["detailKeys"][]="status_id";
		
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
					$masterTablesData["public.lbapt_cri"][1] = $masterParams;
				$masterTablesData["public.lbapt_cri"][1]["masterKeys"] = array();
	$masterTablesData["public.lbapt_cri"][1]["masterKeys"][]="strategic_area_id";
				$masterTablesData["public.lbapt_cri"][1]["detailKeys"] = array();
	$masterTablesData["public.lbapt_cri"][1]["detailKeys"][]="strategic_area_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_cri()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cri_id,  	strategic_area_id,  	key_objective,  	year_1_target,  	kpi,  	status_id,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	notes,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_cri";
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
	"m_strName" => "cri_id",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto6["m_sql"] = "cri_id";
$proto6["m_srcTableName"] = "public.lbapt_cri";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "strategic_area_id",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto8["m_sql"] = "strategic_area_id";
$proto8["m_srcTableName"] = "public.lbapt_cri";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "key_objective",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto10["m_sql"] = "key_objective";
$proto10["m_srcTableName"] = "public.lbapt_cri";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "year_1_target",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto12["m_sql"] = "year_1_target";
$proto12["m_srcTableName"] = "public.lbapt_cri";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "kpi",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto14["m_sql"] = "kpi";
$proto14["m_srcTableName"] = "public.lbapt_cri";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto16["m_sql"] = "status_id";
$proto16["m_srcTableName"] = "public.lbapt_cri";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q1",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto18["m_sql"] = "planned_timeframe_q1";
$proto18["m_srcTableName"] = "public.lbapt_cri";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q2",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto20["m_sql"] = "planned_timeframe_q2";
$proto20["m_srcTableName"] = "public.lbapt_cri";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q3",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto22["m_sql"] = "planned_timeframe_q3";
$proto22["m_srcTableName"] = "public.lbapt_cri";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q4",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto24["m_sql"] = "planned_timeframe_q4";
$proto24["m_srcTableName"] = "public.lbapt_cri";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q1",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto26["m_sql"] = "achievement_q1";
$proto26["m_srcTableName"] = "public.lbapt_cri";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q2",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto28["m_sql"] = "achievement_q2";
$proto28["m_srcTableName"] = "public.lbapt_cri";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q3",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto30["m_sql"] = "achievement_q3";
$proto30["m_srcTableName"] = "public.lbapt_cri";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q4",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto32["m_sql"] = "achievement_q4";
$proto32["m_srcTableName"] = "public.lbapt_cri";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto34["m_sql"] = "notes";
$proto34["m_srcTableName"] = "public.lbapt_cri";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto36["m_sql"] = "created_at";
$proto36["m_srcTableName"] = "public.lbapt_cri";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_cri",
	"m_srcTableName" => "public.lbapt_cri"
));

$proto38["m_sql"] = "updated_at";
$proto38["m_srcTableName"] = "public.lbapt_cri";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "public.lbapt_cri";
$proto41["m_srcTableName"] = "public.lbapt_cri";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "cri_id";
$proto41["m_columns"][] = "strategic_area_id";
$proto41["m_columns"][] = "key_objective";
$proto41["m_columns"][] = "year_1_target";
$proto41["m_columns"][] = "kpi";
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
$proto40["m_sql"] = "\"public\".lbapt_cri";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "public.lbapt_cri";
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
$proto0["m_srcTableName"]="public.lbapt_cri";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_cri = createSqlQuery_lbapt_cri();


	
				;

																	

$tdatalbapt_cri[".sqlquery"] = $queryData_lbapt_cri;



$tdatalbapt_cri[".hasEvents"] = false;

?>