<?php
$tdatalbpmi_indicator_actuals = array();
$tdatalbpmi_indicator_actuals[".searchableFields"] = array();
$tdatalbpmi_indicator_actuals[".ShortName"] = "lbpmi_indicator_actuals";
$tdatalbpmi_indicator_actuals[".OwnerID"] = "";
$tdatalbpmi_indicator_actuals[".OriginalTable"] = "public.lbpmi_indicator_actuals";


$tdatalbpmi_indicator_actuals[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_indicator_actuals[".originalPagesByType"] = $tdatalbpmi_indicator_actuals[".pagesByType"];
$tdatalbpmi_indicator_actuals[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_indicator_actuals[".originalPages"] = $tdatalbpmi_indicator_actuals[".pages"];
$tdatalbpmi_indicator_actuals[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_indicator_actuals[".originalDefaultPages"] = $tdatalbpmi_indicator_actuals[".defaultPages"];

//	field labels
$fieldLabelslbpmi_indicator_actuals = array();
$fieldToolTipslbpmi_indicator_actuals = array();
$pageTitleslbpmi_indicator_actuals = array();
$placeHolderslbpmi_indicator_actuals = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_indicator_actuals["English"] = array();
	$fieldToolTipslbpmi_indicator_actuals["English"] = array();
	$placeHolderslbpmi_indicator_actuals["English"] = array();
	$pageTitleslbpmi_indicator_actuals["English"] = array();
	$fieldLabelslbpmi_indicator_actuals["English"]["actual_id"] = "Actual Id";
	$fieldToolTipslbpmi_indicator_actuals["English"]["actual_id"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["actual_id"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["indicator_id"] = "Indicator";
	$fieldToolTipslbpmi_indicator_actuals["English"]["indicator_id"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["indicator_id"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["year"] = "Year";
	$fieldToolTipslbpmi_indicator_actuals["English"]["year"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["year"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["q1_actual"] = "Q1 Actual";
	$fieldToolTipslbpmi_indicator_actuals["English"]["q1_actual"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["q1_actual"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["q2_actual"] = "Q2 Actual";
	$fieldToolTipslbpmi_indicator_actuals["English"]["q2_actual"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["q2_actual"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["q3_actual"] = "Q3 Actual";
	$fieldToolTipslbpmi_indicator_actuals["English"]["q3_actual"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["q3_actual"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["q4_actual"] = "Q4 Actual";
	$fieldToolTipslbpmi_indicator_actuals["English"]["q4_actual"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["q4_actual"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_indicator_actuals["English"]["created_at"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["created_at"] = "";
	$fieldLabelslbpmi_indicator_actuals["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_indicator_actuals["English"]["updated_at"] = "";
	$placeHolderslbpmi_indicator_actuals["English"]["updated_at"] = "";
	if (count($fieldToolTipslbpmi_indicator_actuals["English"]))
		$tdatalbpmi_indicator_actuals[".isUseToolTips"] = true;
}


	$tdatalbpmi_indicator_actuals[".NCSearch"] = true;



$tdatalbpmi_indicator_actuals[".shortTableName"] = "lbpmi_indicator_actuals";
$tdatalbpmi_indicator_actuals[".nSecOptions"] = 0;

$tdatalbpmi_indicator_actuals[".mainTableOwnerID"] = "";
$tdatalbpmi_indicator_actuals[".entityType"] = 0;
$tdatalbpmi_indicator_actuals[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_indicator_actuals[".strOriginalTableName"] = "public.lbpmi_indicator_actuals";

	



$tdatalbpmi_indicator_actuals[".showAddInPopup"] = false;

$tdatalbpmi_indicator_actuals[".showEditInPopup"] = false;

$tdatalbpmi_indicator_actuals[".showViewInPopup"] = false;

$tdatalbpmi_indicator_actuals[".listAjax"] = false;
//	temporary
//$tdatalbpmi_indicator_actuals[".listAjax"] = false;

	$tdatalbpmi_indicator_actuals[".audit"] = false;

	$tdatalbpmi_indicator_actuals[".locking"] = false;


$pages = $tdatalbpmi_indicator_actuals[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_indicator_actuals[".edit"] = true;
	$tdatalbpmi_indicator_actuals[".afterEditAction"] = 1;
	$tdatalbpmi_indicator_actuals[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_indicator_actuals[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_indicator_actuals[".add"] = true;
$tdatalbpmi_indicator_actuals[".afterAddAction"] = 1;
$tdatalbpmi_indicator_actuals[".closePopupAfterAdd"] = 1;
$tdatalbpmi_indicator_actuals[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_indicator_actuals[".list"] = true;
}



$tdatalbpmi_indicator_actuals[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_indicator_actuals[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_indicator_actuals[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_indicator_actuals[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_indicator_actuals[".printFriendly"] = true;
}



$tdatalbpmi_indicator_actuals[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_indicator_actuals[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_indicator_actuals[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_indicator_actuals[".isUseAjaxSuggest"] = true;





$tdatalbpmi_indicator_actuals[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_indicator_actuals[".buttonsAdded"] = false;

$tdatalbpmi_indicator_actuals[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_indicator_actuals[".isUseTimeForSearch"] = false;


$tdatalbpmi_indicator_actuals[".badgeColor"] = "7B68EE";


$tdatalbpmi_indicator_actuals[".allSearchFields"] = array();
$tdatalbpmi_indicator_actuals[".filterFields"] = array();
$tdatalbpmi_indicator_actuals[".requiredSearchFields"] = array();

$tdatalbpmi_indicator_actuals[".googleLikeFields"] = array();
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "actual_id";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "year";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "q1_actual";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "q2_actual";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "q3_actual";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "q4_actual";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "created_at";
$tdatalbpmi_indicator_actuals[".googleLikeFields"][] = "updated_at";



$tdatalbpmi_indicator_actuals[".tableType"] = "list";

$tdatalbpmi_indicator_actuals[".printerPageOrientation"] = 0;
$tdatalbpmi_indicator_actuals[".nPrinterPageScale"] = 100;

$tdatalbpmi_indicator_actuals[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_indicator_actuals[".geocodingEnabled"] = false;










$tdatalbpmi_indicator_actuals[".pageSize"] = 20;

$tdatalbpmi_indicator_actuals[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_indicator_actuals[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_indicator_actuals[".orderindexes"] = array();


$tdatalbpmi_indicator_actuals[".sqlHead"] = "SELECT actual_id,  	indicator_id,  	\"year\",  	q1_actual,  	q2_actual,  	q3_actual,  	q4_actual,  	created_at,  	updated_at";
$tdatalbpmi_indicator_actuals[".sqlFrom"] = "FROM \"public\".lbpmi_indicator_actuals";
$tdatalbpmi_indicator_actuals[".sqlWhereExpr"] = "";
$tdatalbpmi_indicator_actuals[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_indicator_actuals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_indicator_actuals[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_indicator_actuals[".highlightSearchResults"] = true;

$tableKeyslbpmi_indicator_actuals = array();
$tableKeyslbpmi_indicator_actuals[] = "actual_id";
$tdatalbpmi_indicator_actuals[".Keys"] = $tableKeyslbpmi_indicator_actuals;


$tdatalbpmi_indicator_actuals[".hideMobileList"] = array();




//	actual_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "actual_id";
	$fdata["GoodName"] = "actual_id";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","actual_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "actual_id";

		$fdata["sourceSingle"] = "actual_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual_id";

	
	
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


	$tdatalbpmi_indicator_actuals["actual_id"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "actual_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_id";

	
	
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
	$edata["LookupTable"] = "public.lbpmi_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "indicator_name";

	

	
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


	$tdatalbpmi_indicator_actuals["indicator_id"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "indicator_id";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"year\"";

	
	
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
	$edata["LookupTable"] = "public.years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
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


	$tdatalbpmi_indicator_actuals["year"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "year";
//	q1_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "q1_actual";
	$fdata["GoodName"] = "q1_actual";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","q1_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q1_actual";

		$fdata["sourceSingle"] = "q1_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q1_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_indicator_actuals["q1_actual"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "q1_actual";
//	q2_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "q2_actual";
	$fdata["GoodName"] = "q2_actual";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","q2_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q2_actual";

		$fdata["sourceSingle"] = "q2_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q2_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_indicator_actuals["q2_actual"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "q2_actual";
//	q3_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "q3_actual";
	$fdata["GoodName"] = "q3_actual";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","q3_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q3_actual";

		$fdata["sourceSingle"] = "q3_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q3_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_indicator_actuals["q3_actual"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "q3_actual";
//	q4_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "q4_actual";
	$fdata["GoodName"] = "q4_actual";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","q4_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q4_actual";

		$fdata["sourceSingle"] = "q4_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q4_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_indicator_actuals["q4_actual"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "q4_actual";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","created_at");
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


	$tdatalbpmi_indicator_actuals["created_at"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbpmi_indicator_actuals";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_actuals","updated_at");
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


	$tdatalbpmi_indicator_actuals["updated_at"] = $fdata;
		$tdatalbpmi_indicator_actuals[".searchableFields"][] = "updated_at";


$tables_data["public.lbpmi_indicator_actuals"]=&$tdatalbpmi_indicator_actuals;
$field_labels["public_lbpmi_indicator_actuals"] = &$fieldLabelslbpmi_indicator_actuals;
$fieldToolTips["public_lbpmi_indicator_actuals"] = &$fieldToolTipslbpmi_indicator_actuals;
$placeHolders["public_lbpmi_indicator_actuals"] = &$placeHolderslbpmi_indicator_actuals;
$page_titles["public_lbpmi_indicator_actuals"] = &$pageTitleslbpmi_indicator_actuals;


changeTextControlsToDate( "public.lbpmi_indicator_actuals" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_indicator_actuals"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_indicator_actuals"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbpmi_indicators";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbpmi_indicators";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbpmi_indicators";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbpmi_indicator_actuals"][0] = $masterParams;
				$masterTablesData["public.lbpmi_indicator_actuals"][0]["masterKeys"] = array();
	$masterTablesData["public.lbpmi_indicator_actuals"][0]["masterKeys"][]="indicator_id";
				$masterTablesData["public.lbpmi_indicator_actuals"][0]["detailKeys"] = array();
	$masterTablesData["public.lbpmi_indicator_actuals"][0]["detailKeys"][]="indicator_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_indicator_actuals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "actual_id,  	indicator_id,  	\"year\",  	q1_actual,  	q2_actual,  	q3_actual,  	q4_actual,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_indicator_actuals";
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
	"m_strName" => "actual_id",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto6["m_sql"] = "actual_id";
$proto6["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto10["m_sql"] = "\"year\"";
$proto10["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_actual",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto12["m_sql"] = "q1_actual";
$proto12["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_actual",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto14["m_sql"] = "q2_actual";
$proto14["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_actual",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto16["m_sql"] = "q3_actual";
$proto16["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_actual",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto18["m_sql"] = "q4_actual";
$proto18["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto20["m_sql"] = "created_at";
$proto20["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_indicator_actuals",
	"m_srcTableName" => "public.lbpmi_indicator_actuals"
));

$proto22["m_sql"] = "updated_at";
$proto22["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.lbpmi_indicator_actuals";
$proto25["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "actual_id";
$proto25["m_columns"][] = "indicator_id";
$proto25["m_columns"][] = "year";
$proto25["m_columns"][] = "q1_actual";
$proto25["m_columns"][] = "q2_actual";
$proto25["m_columns"][] = "q3_actual";
$proto25["m_columns"][] = "q4_actual";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".lbpmi_indicator_actuals";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.lbpmi_indicator_actuals";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbpmi_indicator_actuals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_indicator_actuals = createSqlQuery_lbpmi_indicator_actuals();


	
				;

									

$tdatalbpmi_indicator_actuals[".sqlquery"] = $queryData_lbpmi_indicator_actuals;



$tdatalbpmi_indicator_actuals[".hasEvents"] = false;

?>