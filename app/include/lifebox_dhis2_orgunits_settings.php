<?php
$tdatalifebox_dhis2_orgunits = array();
$tdatalifebox_dhis2_orgunits[".searchableFields"] = array();
$tdatalifebox_dhis2_orgunits[".ShortName"] = "lifebox_dhis2_orgunits";
$tdatalifebox_dhis2_orgunits[".OwnerID"] = "";
$tdatalifebox_dhis2_orgunits[".OriginalTable"] = "Lifebox_DHIS2_OrgUnits";


$tdatalifebox_dhis2_orgunits[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalifebox_dhis2_orgunits[".originalPagesByType"] = $tdatalifebox_dhis2_orgunits[".pagesByType"];
$tdatalifebox_dhis2_orgunits[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalifebox_dhis2_orgunits[".originalPages"] = $tdatalifebox_dhis2_orgunits[".pages"];
$tdatalifebox_dhis2_orgunits[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalifebox_dhis2_orgunits[".originalDefaultPages"] = $tdatalifebox_dhis2_orgunits[".defaultPages"];

//	field labels
$fieldLabelslifebox_dhis2_orgunits = array();
$fieldToolTipslifebox_dhis2_orgunits = array();
$pageTitleslifebox_dhis2_orgunits = array();
$placeHolderslifebox_dhis2_orgunits = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifebox_dhis2_orgunits["English"] = array();
	$fieldToolTipslifebox_dhis2_orgunits["English"] = array();
	$placeHolderslifebox_dhis2_orgunits["English"] = array();
	$pageTitleslifebox_dhis2_orgunits["English"] = array();
	$fieldLabelslifebox_dhis2_orgunits["English"]["Continent"] = "Continent";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Continent"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Continent"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["Country"] = "Country";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Country"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Country"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["Level"] = "Level";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Level"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Level"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["LB_Int_ID"] = "LB";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["LB_Int_ID"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["LB_Int_ID"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["LB_Int"] = "LB Int";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["LB_Int"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["LB_Int"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["Cont_ID"] = "Cont_ID";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Cont_ID"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Cont_ID"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["Count_ID"] = "Count_ID";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Count_ID"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Count_ID"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["Hosp_Fac_ID"] = "Hosp_Fac_ID";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Hosp_Fac_ID"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Hosp_Fac_ID"] = "";
	$fieldLabelslifebox_dhis2_orgunits["English"]["Hospital_Facility"] = "Hospital/Facility";
	$fieldToolTipslifebox_dhis2_orgunits["English"]["Hospital_Facility"] = "";
	$placeHolderslifebox_dhis2_orgunits["English"]["Hospital_Facility"] = "";
	if (count($fieldToolTipslifebox_dhis2_orgunits["English"]))
		$tdatalifebox_dhis2_orgunits[".isUseToolTips"] = true;
}


	$tdatalifebox_dhis2_orgunits[".NCSearch"] = true;



$tdatalifebox_dhis2_orgunits[".shortTableName"] = "lifebox_dhis2_orgunits";
$tdatalifebox_dhis2_orgunits[".nSecOptions"] = 0;

$tdatalifebox_dhis2_orgunits[".mainTableOwnerID"] = "";
$tdatalifebox_dhis2_orgunits[".entityType"] = 7;
$tdatalifebox_dhis2_orgunits[".connId"] = "rest";


$tdatalifebox_dhis2_orgunits[".strOriginalTableName"] = "Lifebox_DHIS2_OrgUnits";

	



$tdatalifebox_dhis2_orgunits[".showAddInPopup"] = false;

$tdatalifebox_dhis2_orgunits[".showEditInPopup"] = false;

$tdatalifebox_dhis2_orgunits[".showViewInPopup"] = false;

$tdatalifebox_dhis2_orgunits[".listAjax"] = false;
//	temporary
//$tdatalifebox_dhis2_orgunits[".listAjax"] = false;

	$tdatalifebox_dhis2_orgunits[".audit"] = true;

	$tdatalifebox_dhis2_orgunits[".locking"] = false;


$pages = $tdatalifebox_dhis2_orgunits[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifebox_dhis2_orgunits[".edit"] = true;
	$tdatalifebox_dhis2_orgunits[".afterEditAction"] = 1;
	$tdatalifebox_dhis2_orgunits[".closePopupAfterEdit"] = 1;
	$tdatalifebox_dhis2_orgunits[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifebox_dhis2_orgunits[".add"] = true;
$tdatalifebox_dhis2_orgunits[".afterAddAction"] = 1;
$tdatalifebox_dhis2_orgunits[".closePopupAfterAdd"] = 1;
$tdatalifebox_dhis2_orgunits[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifebox_dhis2_orgunits[".list"] = true;
}



$tdatalifebox_dhis2_orgunits[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifebox_dhis2_orgunits[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifebox_dhis2_orgunits[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifebox_dhis2_orgunits[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifebox_dhis2_orgunits[".printFriendly"] = true;
}



$tdatalifebox_dhis2_orgunits[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifebox_dhis2_orgunits[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifebox_dhis2_orgunits[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifebox_dhis2_orgunits[".isUseAjaxSuggest"] = true;



			

$tdatalifebox_dhis2_orgunits[".ajaxCodeSnippetAdded"] = false;

$tdatalifebox_dhis2_orgunits[".buttonsAdded"] = false;

$tdatalifebox_dhis2_orgunits[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifebox_dhis2_orgunits[".isUseTimeForSearch"] = false;


$tdatalifebox_dhis2_orgunits[".badgeColor"] = "4169E1";


$tdatalifebox_dhis2_orgunits[".allSearchFields"] = array();
$tdatalifebox_dhis2_orgunits[".filterFields"] = array();
$tdatalifebox_dhis2_orgunits[".requiredSearchFields"] = array();

$tdatalifebox_dhis2_orgunits[".googleLikeFields"] = array();
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "LB_Int_ID";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "LB_Int";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Cont_ID";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Continent";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Count_ID";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Country";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Hosp_Fac_ID";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Hospital_Facility";
$tdatalifebox_dhis2_orgunits[".googleLikeFields"][] = "Level";




$tdatalifebox_dhis2_orgunits[".printerPageOrientation"] = 0;
$tdatalifebox_dhis2_orgunits[".nPrinterPageScale"] = 100;

$tdatalifebox_dhis2_orgunits[".nPrinterSplitRecords"] = 40;

$tdatalifebox_dhis2_orgunits[".geocodingEnabled"] = false;




$tdatalifebox_dhis2_orgunits[".isDisplayLoading"] = true;






$tdatalifebox_dhis2_orgunits[".pageSize"] = 20;

$tdatalifebox_dhis2_orgunits[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifebox_dhis2_orgunits[".strOrderBy"] = $tstrOrderBy;

$tdatalifebox_dhis2_orgunits[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdatalifebox_dhis2_orgunits[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatalifebox_dhis2_orgunits[".sqlHead"] = "";
$tdatalifebox_dhis2_orgunits[".sqlFrom"] = "";
$tdatalifebox_dhis2_orgunits[".sqlWhereExpr"] = "";
$tdatalifebox_dhis2_orgunits[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifebox_dhis2_orgunits[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifebox_dhis2_orgunits[".arrGroupsPerPage"] = $arrGPP;

$tdatalifebox_dhis2_orgunits[".highlightSearchResults"] = true;

$tableKeyslifebox_dhis2_orgunits = array();
$tdatalifebox_dhis2_orgunits[".Keys"] = $tableKeyslifebox_dhis2_orgunits;


$tdatalifebox_dhis2_orgunits[".hideMobileList"] = array();




//	LB_Int_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LB_Int_ID";
	$fdata["GoodName"] = "LB_Int_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","LB_Int_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/LB_Int_ID";

	
	
		$fdata["FullName"] = "LB_Int_ID";

	
	
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


	$tdatalifebox_dhis2_orgunits["LB_Int_ID"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "LB_Int_ID";
//	LB_Int
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LB_Int";
	$fdata["GoodName"] = "LB_Int";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","LB_Int");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/LB_Int";

	
	
		$fdata["FullName"] = "LB_Int";

	
	
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


	$tdatalifebox_dhis2_orgunits["LB_Int"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "LB_Int";
//	Cont_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cont_ID";
	$fdata["GoodName"] = "Cont_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Cont_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/Cont_ID";

	
	
		$fdata["FullName"] = "Cont_ID";

	
	
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


	$tdatalifebox_dhis2_orgunits["Cont_ID"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Cont_ID";
//	Continent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Continent";
	$fdata["GoodName"] = "Continent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Continent");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/Continent";

	
	
		$fdata["FullName"] = "Continent";

	
	
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
	$edata["LookupTable"] = "Lifebox_DHIS2_OrgUnits";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Cont_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Continent";

	

	
	$edata["LookupOrderBy"] = "Continent";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Level";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_orgunits["Continent"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Continent";
//	Count_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Count_ID";
	$fdata["GoodName"] = "Count_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Count_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/Count_ID";

	
	
		$fdata["FullName"] = "Count_ID";

	
	
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


	$tdatalifebox_dhis2_orgunits["Count_ID"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Count_ID";
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Country");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/Country";

	
	
		$fdata["FullName"] = "Country";

	
	
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
	$edata["LookupTable"] = "Lifebox_DHIS2_OrgUnits";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Count_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Country";

	

	
	$edata["LookupOrderBy"] = "Country";

		$edata["LookupDesc"] = true;

		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Cont_ID", "lookup" => "Cont_ID" );

	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Level";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_orgunits["Country"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Country";
//	Hosp_Fac_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Hosp_Fac_ID";
	$fdata["GoodName"] = "Hosp_Fac_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Hosp_Fac_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/Hosp_Fac_ID";

	
	
		$fdata["FullName"] = "Hosp_Fac_ID";

	
	
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


	$tdatalifebox_dhis2_orgunits["Hosp_Fac_ID"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Hosp_Fac_ID";
//	Hospital_Facility
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Hospital_Facility";
	$fdata["GoodName"] = "Hospital_Facility";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Hospital_Facility");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/Hospital_Facility";

	
	
		$fdata["FullName"] = "Hospital_Facility";

	
	
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
	$edata["LookupTable"] = "Lifebox_DHIS2_OrgUnits";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Hosp_Fac_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Hospital_Facility";

	

	
	$edata["LookupOrderBy"] = "Hospital_Facility";

		$edata["LookupDesc"] = true;

		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Count_ID", "lookup" => "Count_ID" );

	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Level";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_orgunits["Hospital_Facility"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Hospital_Facility";
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_OrgUnits","Level");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data/*/Level";

	
	
		$fdata["FullName"] = "Level";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Level";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_orgunits["Level"] = $fdata;
		$tdatalifebox_dhis2_orgunits[".searchableFields"][] = "Level";


$tables_data["Lifebox_DHIS2_OrgUnits"]=&$tdatalifebox_dhis2_orgunits;
$field_labels["Lifebox_DHIS2_OrgUnits"] = &$fieldLabelslifebox_dhis2_orgunits;
$fieldToolTips["Lifebox_DHIS2_OrgUnits"] = &$fieldToolTipslifebox_dhis2_orgunits;
$placeHolders["Lifebox_DHIS2_OrgUnits"] = &$placeHolderslifebox_dhis2_orgunits;
$page_titles["Lifebox_DHIS2_OrgUnits"] = &$pageTitleslifebox_dhis2_orgunits;


changeTextControlsToDate( "Lifebox_DHIS2_OrgUnits" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Lifebox_DHIS2_OrgUnits"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Lifebox_DHIS2_OrgUnits"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/lifebox_dhis2_orgunits_ops.php" ) );



	
				;

									

$tdatalifebox_dhis2_orgunits[".sqlquery"] = $queryData_lifebox_dhis2_orgunits;



$tdatalifebox_dhis2_orgunits[".hasEvents"] = false;

?>