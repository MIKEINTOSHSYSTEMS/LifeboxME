<?php
$tdatasurgical_case_summary_view = array();
$tdatasurgical_case_summary_view[".searchableFields"] = array();
$tdatasurgical_case_summary_view[".ShortName"] = "surgical_case_summary_view";
$tdatasurgical_case_summary_view[".OwnerID"] = "";
$tdatasurgical_case_summary_view[".OriginalTable"] = "public.surgical_case_summary_view";


$tdatasurgical_case_summary_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasurgical_case_summary_view[".originalPagesByType"] = $tdatasurgical_case_summary_view[".pagesByType"];
$tdatasurgical_case_summary_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasurgical_case_summary_view[".originalPages"] = $tdatasurgical_case_summary_view[".pages"];
$tdatasurgical_case_summary_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasurgical_case_summary_view[".originalDefaultPages"] = $tdatasurgical_case_summary_view[".defaultPages"];

//	field labels
$fieldLabelssurgical_case_summary_view = array();
$fieldToolTipssurgical_case_summary_view = array();
$pageTitlessurgical_case_summary_view = array();
$placeHolderssurgical_case_summary_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssurgical_case_summary_view["English"] = array();
	$fieldToolTipssurgical_case_summary_view["English"] = array();
	$placeHolderssurgical_case_summary_view["English"] = array();
	$pageTitlessurgical_case_summary_view["English"] = array();
	$fieldLabelssurgical_case_summary_view["English"]["case_id"] = "Case Id";
	$fieldToolTipssurgical_case_summary_view["English"]["case_id"] = "";
	$placeHolderssurgical_case_summary_view["English"]["case_id"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["facility_name"] = "Facility Name";
	$fieldToolTipssurgical_case_summary_view["English"]["facility_name"] = "";
	$placeHolderssurgical_case_summary_view["English"]["facility_name"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["country_name"] = "Country Name";
	$fieldToolTipssurgical_case_summary_view["English"]["country_name"] = "";
	$placeHolderssurgical_case_summary_view["English"]["country_name"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["surgery_date"] = "Surgery Date";
	$fieldToolTipssurgical_case_summary_view["English"]["surgery_date"] = "";
	$placeHolderssurgical_case_summary_view["English"]["surgery_date"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["data_type"] = "Data Type";
	$fieldToolTipssurgical_case_summary_view["English"]["data_type"] = "";
	$placeHolderssurgical_case_summary_view["English"]["data_type"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["data_collector_name"] = "Data Collector Name";
	$fieldToolTipssurgical_case_summary_view["English"]["data_collector_name"] = "";
	$placeHolderssurgical_case_summary_view["English"]["data_collector_name"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["location_of_surgery"] = "Location Of Surgery";
	$fieldToolTipssurgical_case_summary_view["English"]["location_of_surgery"] = "";
	$placeHolderssurgical_case_summary_view["English"]["location_of_surgery"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["patient_sex"] = "Patient Sex";
	$fieldToolTipssurgical_case_summary_view["English"]["patient_sex"] = "";
	$placeHolderssurgical_case_summary_view["English"]["patient_sex"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["patient_age"] = "Patient Age";
	$fieldToolTipssurgical_case_summary_view["English"]["patient_age"] = "";
	$placeHolderssurgical_case_summary_view["English"]["patient_age"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["procedure_name"] = "Procedure Name";
	$fieldToolTipssurgical_case_summary_view["English"]["procedure_name"] = "";
	$placeHolderssurgical_case_summary_view["English"]["procedure_name"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["diagnosis_name"] = "Diagnosis Name";
	$fieldToolTipssurgical_case_summary_view["English"]["diagnosis_name"] = "";
	$placeHolderssurgical_case_summary_view["English"]["diagnosis_name"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["wound_classification"] = "Wound Classification";
	$fieldToolTipssurgical_case_summary_view["English"]["wound_classification"] = "";
	$placeHolderssurgical_case_summary_view["English"]["wound_classification"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["case_type"] = "Case Type";
	$fieldToolTipssurgical_case_summary_view["English"]["case_type"] = "";
	$placeHolderssurgical_case_summary_view["English"]["case_type"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["death_in_or"] = "Death In Or";
	$fieldToolTipssurgical_case_summary_view["English"]["death_in_or"] = "";
	$placeHolderssurgical_case_summary_view["English"]["death_in_or"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["fetal_death"] = "Fetal Death";
	$fieldToolTipssurgical_case_summary_view["English"]["fetal_death"] = "";
	$placeHolderssurgical_case_summary_view["English"]["fetal_death"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["death_in_ward"] = "Death In Ward";
	$fieldToolTipssurgical_case_summary_view["English"]["death_in_ward"] = "";
	$placeHolderssurgical_case_summary_view["English"]["death_in_ward"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["neonatal_death"] = "Neonatal Death";
	$fieldToolTipssurgical_case_summary_view["English"]["neonatal_death"] = "";
	$placeHolderssurgical_case_summary_view["English"]["neonatal_death"] = "";
	$fieldLabelssurgical_case_summary_view["English"]["follow_up_status"] = "Follow Up Status";
	$fieldToolTipssurgical_case_summary_view["English"]["follow_up_status"] = "";
	$placeHolderssurgical_case_summary_view["English"]["follow_up_status"] = "";
	if (count($fieldToolTipssurgical_case_summary_view["English"]))
		$tdatasurgical_case_summary_view[".isUseToolTips"] = true;
}


	$tdatasurgical_case_summary_view[".NCSearch"] = true;



$tdatasurgical_case_summary_view[".shortTableName"] = "surgical_case_summary_view";
$tdatasurgical_case_summary_view[".nSecOptions"] = 0;

$tdatasurgical_case_summary_view[".mainTableOwnerID"] = "";
$tdatasurgical_case_summary_view[".entityType"] = 0;
$tdatasurgical_case_summary_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatasurgical_case_summary_view[".strOriginalTableName"] = "public.surgical_case_summary_view";

	



$tdatasurgical_case_summary_view[".showAddInPopup"] = false;

$tdatasurgical_case_summary_view[".showEditInPopup"] = false;

$tdatasurgical_case_summary_view[".showViewInPopup"] = false;

$tdatasurgical_case_summary_view[".listAjax"] = false;
//	temporary
//$tdatasurgical_case_summary_view[".listAjax"] = false;

	$tdatasurgical_case_summary_view[".audit"] = false;

	$tdatasurgical_case_summary_view[".locking"] = false;


$pages = $tdatasurgical_case_summary_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasurgical_case_summary_view[".edit"] = true;
	$tdatasurgical_case_summary_view[".afterEditAction"] = 1;
	$tdatasurgical_case_summary_view[".closePopupAfterEdit"] = 1;
	$tdatasurgical_case_summary_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasurgical_case_summary_view[".add"] = true;
$tdatasurgical_case_summary_view[".afterAddAction"] = 1;
$tdatasurgical_case_summary_view[".closePopupAfterAdd"] = 1;
$tdatasurgical_case_summary_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasurgical_case_summary_view[".list"] = true;
}



$tdatasurgical_case_summary_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasurgical_case_summary_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasurgical_case_summary_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasurgical_case_summary_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasurgical_case_summary_view[".printFriendly"] = true;
}



$tdatasurgical_case_summary_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasurgical_case_summary_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasurgical_case_summary_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasurgical_case_summary_view[".isUseAjaxSuggest"] = true;





$tdatasurgical_case_summary_view[".ajaxCodeSnippetAdded"] = false;

$tdatasurgical_case_summary_view[".buttonsAdded"] = false;

$tdatasurgical_case_summary_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurgical_case_summary_view[".isUseTimeForSearch"] = false;


$tdatasurgical_case_summary_view[".badgeColor"] = "4682B4";


$tdatasurgical_case_summary_view[".allSearchFields"] = array();
$tdatasurgical_case_summary_view[".filterFields"] = array();
$tdatasurgical_case_summary_view[".requiredSearchFields"] = array();

$tdatasurgical_case_summary_view[".googleLikeFields"] = array();
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "case_id";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "facility_name";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "country_name";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "surgery_date";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "data_type";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "data_collector_name";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "location_of_surgery";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "patient_sex";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "patient_age";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "procedure_name";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "diagnosis_name";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "wound_classification";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "case_type";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "death_in_or";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "fetal_death";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "death_in_ward";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "neonatal_death";
$tdatasurgical_case_summary_view[".googleLikeFields"][] = "follow_up_status";



$tdatasurgical_case_summary_view[".tableType"] = "list";

$tdatasurgical_case_summary_view[".printerPageOrientation"] = 0;
$tdatasurgical_case_summary_view[".nPrinterPageScale"] = 100;

$tdatasurgical_case_summary_view[".nPrinterSplitRecords"] = 40;

$tdatasurgical_case_summary_view[".geocodingEnabled"] = false;










$tdatasurgical_case_summary_view[".pageSize"] = 20;

$tdatasurgical_case_summary_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasurgical_case_summary_view[".strOrderBy"] = $tstrOrderBy;

$tdatasurgical_case_summary_view[".orderindexes"] = array();


$tdatasurgical_case_summary_view[".sqlHead"] = "SELECT case_id,  	facility_name,  	country_name,  	surgery_date,  	data_type,  	data_collector_name,  	location_of_surgery,  	patient_sex,  	patient_age,  	procedure_name,  	diagnosis_name,  	wound_classification,  	case_type,  	death_in_or,  	fetal_death,  	death_in_ward,  	neonatal_death,  	follow_up_status";
$tdatasurgical_case_summary_view[".sqlFrom"] = "FROM \"public\".surgical_case_summary_view";
$tdatasurgical_case_summary_view[".sqlWhereExpr"] = "";
$tdatasurgical_case_summary_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurgical_case_summary_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurgical_case_summary_view[".arrGroupsPerPage"] = $arrGPP;

$tdatasurgical_case_summary_view[".highlightSearchResults"] = true;

$tableKeyssurgical_case_summary_view = array();
$tdatasurgical_case_summary_view[".Keys"] = $tableKeyssurgical_case_summary_view;


$tdatasurgical_case_summary_view[".hideMobileList"] = array();




//	case_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "case_id";
	$fdata["GoodName"] = "case_id";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","case_id");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "case_id";

		$fdata["sourceSingle"] = "case_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case_id";

	
	
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


	$tdatasurgical_case_summary_view["case_id"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "case_id";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","facility_name");
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


	$tdatasurgical_case_summary_view["facility_name"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "facility_name";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","country_name");
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


	$tdatasurgical_case_summary_view["country_name"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "country_name";
//	surgery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "surgery_date";
	$fdata["GoodName"] = "surgery_date";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","surgery_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "surgery_date";

		$fdata["sourceSingle"] = "surgery_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surgery_date";

	
	
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


	$tdatasurgical_case_summary_view["surgery_date"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "surgery_date";
//	data_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "data_type";
	$fdata["GoodName"] = "data_type";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","data_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_type";

		$fdata["sourceSingle"] = "data_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_type";

	
	
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


	$tdatasurgical_case_summary_view["data_type"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "data_type";
//	data_collector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data_collector_name";
	$fdata["GoodName"] = "data_collector_name";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","data_collector_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_collector_name";

		$fdata["sourceSingle"] = "data_collector_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_collector_name";

	
	
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


	$tdatasurgical_case_summary_view["data_collector_name"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "data_collector_name";
//	location_of_surgery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "location_of_surgery";
	$fdata["GoodName"] = "location_of_surgery";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","location_of_surgery");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "location_of_surgery";

		$fdata["sourceSingle"] = "location_of_surgery";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "location_of_surgery";

	
	
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


	$tdatasurgical_case_summary_view["location_of_surgery"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "location_of_surgery";
//	patient_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "patient_sex";
	$fdata["GoodName"] = "patient_sex";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","patient_sex");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "patient_sex";

		$fdata["sourceSingle"] = "patient_sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_sex";

	
	
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


	$tdatasurgical_case_summary_view["patient_sex"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "patient_sex";
//	patient_age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "patient_age";
	$fdata["GoodName"] = "patient_age";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","patient_age");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "patient_age";

		$fdata["sourceSingle"] = "patient_age";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_age";

	
	
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


	$tdatasurgical_case_summary_view["patient_age"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "patient_age";
//	procedure_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "procedure_name";
	$fdata["GoodName"] = "procedure_name";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","procedure_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "procedure_name";

		$fdata["sourceSingle"] = "procedure_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedure_name";

	
	
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


	$tdatasurgical_case_summary_view["procedure_name"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "procedure_name";
//	diagnosis_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "diagnosis_name";
	$fdata["GoodName"] = "diagnosis_name";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","diagnosis_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "diagnosis_name";

		$fdata["sourceSingle"] = "diagnosis_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis_name";

	
	
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


	$tdatasurgical_case_summary_view["diagnosis_name"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "diagnosis_name";
//	wound_classification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "wound_classification";
	$fdata["GoodName"] = "wound_classification";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","wound_classification");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "wound_classification";

		$fdata["sourceSingle"] = "wound_classification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_classification";

	
	
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


	$tdatasurgical_case_summary_view["wound_classification"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "wound_classification";
//	case_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "case_type";
	$fdata["GoodName"] = "case_type";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","case_type");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "case_type";

		$fdata["sourceSingle"] = "case_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case_type";

	
	
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


	$tdatasurgical_case_summary_view["case_type"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "case_type";
//	death_in_or
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "death_in_or";
	$fdata["GoodName"] = "death_in_or";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","death_in_or");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "death_in_or";

		$fdata["sourceSingle"] = "death_in_or";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "death_in_or";

	
	
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


	$tdatasurgical_case_summary_view["death_in_or"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "death_in_or";
//	fetal_death
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fetal_death";
	$fdata["GoodName"] = "fetal_death";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","fetal_death");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "fetal_death";

		$fdata["sourceSingle"] = "fetal_death";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fetal_death";

	
	
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


	$tdatasurgical_case_summary_view["fetal_death"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "fetal_death";
//	death_in_ward
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "death_in_ward";
	$fdata["GoodName"] = "death_in_ward";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","death_in_ward");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "death_in_ward";

		$fdata["sourceSingle"] = "death_in_ward";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "death_in_ward";

	
	
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


	$tdatasurgical_case_summary_view["death_in_ward"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "death_in_ward";
//	neonatal_death
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "neonatal_death";
	$fdata["GoodName"] = "neonatal_death";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","neonatal_death");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "neonatal_death";

		$fdata["sourceSingle"] = "neonatal_death";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "neonatal_death";

	
	
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


	$tdatasurgical_case_summary_view["neonatal_death"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "neonatal_death";
//	follow_up_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "follow_up_status";
	$fdata["GoodName"] = "follow_up_status";
	$fdata["ownerTable"] = "public.surgical_case_summary_view";
	$fdata["Label"] = GetFieldLabel("public_surgical_case_summary_view","follow_up_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "follow_up_status";

		$fdata["sourceSingle"] = "follow_up_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "follow_up_status";

	
	
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


	$tdatasurgical_case_summary_view["follow_up_status"] = $fdata;
		$tdatasurgical_case_summary_view[".searchableFields"][] = "follow_up_status";


$tables_data["public.surgical_case_summary_view"]=&$tdatasurgical_case_summary_view;
$field_labels["public_surgical_case_summary_view"] = &$fieldLabelssurgical_case_summary_view;
$fieldToolTips["public_surgical_case_summary_view"] = &$fieldToolTipssurgical_case_summary_view;
$placeHolders["public_surgical_case_summary_view"] = &$placeHolderssurgical_case_summary_view;
$page_titles["public_surgical_case_summary_view"] = &$pageTitlessurgical_case_summary_view;


changeTextControlsToDate( "public.surgical_case_summary_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.surgical_case_summary_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.surgical_case_summary_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_surgical_case_summary_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "case_id,  	facility_name,  	country_name,  	surgery_date,  	data_type,  	data_collector_name,  	location_of_surgery,  	patient_sex,  	patient_age,  	procedure_name,  	diagnosis_name,  	wound_classification,  	case_type,  	death_in_or,  	fetal_death,  	death_in_ward,  	neonatal_death,  	follow_up_status";
$proto0["m_strFrom"] = "FROM \"public\".surgical_case_summary_view";
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
	"m_strName" => "case_id",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto6["m_sql"] = "case_id";
$proto6["m_srcTableName"] = "public.surgical_case_summary_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto8["m_sql"] = "facility_name";
$proto8["m_srcTableName"] = "public.surgical_case_summary_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto10["m_sql"] = "country_name";
$proto10["m_srcTableName"] = "public.surgical_case_summary_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "surgery_date",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto12["m_sql"] = "surgery_date";
$proto12["m_srcTableName"] = "public.surgical_case_summary_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "data_type",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto14["m_sql"] = "data_type";
$proto14["m_srcTableName"] = "public.surgical_case_summary_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "data_collector_name",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto16["m_sql"] = "data_collector_name";
$proto16["m_srcTableName"] = "public.surgical_case_summary_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "location_of_surgery",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto18["m_sql"] = "location_of_surgery";
$proto18["m_srcTableName"] = "public.surgical_case_summary_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_sex",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto20["m_sql"] = "patient_sex";
$proto20["m_srcTableName"] = "public.surgical_case_summary_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_age",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto22["m_sql"] = "patient_age";
$proto22["m_srcTableName"] = "public.surgical_case_summary_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "procedure_name",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto24["m_sql"] = "procedure_name";
$proto24["m_srcTableName"] = "public.surgical_case_summary_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis_name",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto26["m_sql"] = "diagnosis_name";
$proto26["m_srcTableName"] = "public.surgical_case_summary_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_classification",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto28["m_sql"] = "wound_classification";
$proto28["m_srcTableName"] = "public.surgical_case_summary_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "case_type",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto30["m_sql"] = "case_type";
$proto30["m_srcTableName"] = "public.surgical_case_summary_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "death_in_or",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto32["m_sql"] = "death_in_or";
$proto32["m_srcTableName"] = "public.surgical_case_summary_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fetal_death",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto34["m_sql"] = "fetal_death";
$proto34["m_srcTableName"] = "public.surgical_case_summary_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "death_in_ward",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto36["m_sql"] = "death_in_ward";
$proto36["m_srcTableName"] = "public.surgical_case_summary_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "neonatal_death",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto38["m_sql"] = "neonatal_death";
$proto38["m_srcTableName"] = "public.surgical_case_summary_view";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "follow_up_status",
	"m_strTable" => "public.surgical_case_summary_view",
	"m_srcTableName" => "public.surgical_case_summary_view"
));

$proto40["m_sql"] = "follow_up_status";
$proto40["m_srcTableName"] = "public.surgical_case_summary_view";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "public.surgical_case_summary_view";
$proto43["m_srcTableName"] = "public.surgical_case_summary_view";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "case_id";
$proto43["m_columns"][] = "facility_name";
$proto43["m_columns"][] = "country_name";
$proto43["m_columns"][] = "surgery_date";
$proto43["m_columns"][] = "data_type";
$proto43["m_columns"][] = "data_collector_name";
$proto43["m_columns"][] = "location_of_surgery";
$proto43["m_columns"][] = "patient_sex";
$proto43["m_columns"][] = "patient_age";
$proto43["m_columns"][] = "procedure_name";
$proto43["m_columns"][] = "diagnosis_name";
$proto43["m_columns"][] = "wound_classification";
$proto43["m_columns"][] = "case_type";
$proto43["m_columns"][] = "death_in_or";
$proto43["m_columns"][] = "fetal_death";
$proto43["m_columns"][] = "death_in_ward";
$proto43["m_columns"][] = "neonatal_death";
$proto43["m_columns"][] = "follow_up_status";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "\"public\".surgical_case_summary_view";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "public.surgical_case_summary_view";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.surgical_case_summary_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surgical_case_summary_view = createSqlQuery_surgical_case_summary_view();


	
				;

																		

$tdatasurgical_case_summary_view[".sqlquery"] = $queryData_surgical_case_summary_view;



$tdatasurgical_case_summary_view[".hasEvents"] = false;

?>