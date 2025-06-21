<?php
$tdataprograms = array();
$tdataprograms[".searchableFields"] = array();
$tdataprograms[".ShortName"] = "programs";
$tdataprograms[".OwnerID"] = "";
$tdataprograms[".OriginalTable"] = "public.programs";


$tdataprograms[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprograms[".originalPagesByType"] = $tdataprograms[".pagesByType"];
$tdataprograms[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprograms[".originalPages"] = $tdataprograms[".pages"];
$tdataprograms[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprograms[".originalDefaultPages"] = $tdataprograms[".defaultPages"];

//	field labels
$fieldLabelsprograms = array();
$fieldToolTipsprograms = array();
$pageTitlesprograms = array();
$placeHoldersprograms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprograms["English"] = array();
	$fieldToolTipsprograms["English"] = array();
	$placeHoldersprograms["English"] = array();
	$pageTitlesprograms["English"] = array();
	$fieldLabelsprograms["English"]["program_id"] = "Program Id";
	$fieldToolTipsprograms["English"]["program_id"] = "";
	$placeHoldersprograms["English"]["program_id"] = "";
	$fieldLabelsprograms["English"]["program_name"] = "Program Name";
	$fieldToolTipsprograms["English"]["program_name"] = "";
	$placeHoldersprograms["English"]["program_name"] = "";
	$fieldLabelsprograms["English"]["description"] = "Description";
	$fieldToolTipsprograms["English"]["description"] = "";
	$placeHoldersprograms["English"]["description"] = "";
	$fieldLabelsprograms["English"]["is_active"] = "Is Active";
	$fieldToolTipsprograms["English"]["is_active"] = "";
	$placeHoldersprograms["English"]["is_active"] = "";
	$fieldLabelsprograms["English"]["created_at"] = "Created At";
	$fieldToolTipsprograms["English"]["created_at"] = "";
	$placeHoldersprograms["English"]["created_at"] = "";
	$fieldLabelsprograms["English"]["updated_at"] = "Updated At";
	$fieldToolTipsprograms["English"]["updated_at"] = "";
	$placeHoldersprograms["English"]["updated_at"] = "";
	if (count($fieldToolTipsprograms["English"]))
		$tdataprograms[".isUseToolTips"] = true;
}


	$tdataprograms[".NCSearch"] = true;



$tdataprograms[".shortTableName"] = "programs";
$tdataprograms[".nSecOptions"] = 0;

$tdataprograms[".mainTableOwnerID"] = "";
$tdataprograms[".entityType"] = 0;
$tdataprograms[".connId"] = "lifebox_mesystem_at_localhost";


$tdataprograms[".strOriginalTableName"] = "public.programs";

	



$tdataprograms[".showAddInPopup"] = false;

$tdataprograms[".showEditInPopup"] = false;

$tdataprograms[".showViewInPopup"] = false;

$tdataprograms[".listAjax"] = false;
//	temporary
//$tdataprograms[".listAjax"] = false;

	$tdataprograms[".audit"] = false;

	$tdataprograms[".locking"] = false;


$pages = $tdataprograms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprograms[".edit"] = true;
	$tdataprograms[".afterEditAction"] = 1;
	$tdataprograms[".closePopupAfterEdit"] = 1;
	$tdataprograms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprograms[".add"] = true;
$tdataprograms[".afterAddAction"] = 1;
$tdataprograms[".closePopupAfterAdd"] = 1;
$tdataprograms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprograms[".list"] = true;
}



$tdataprograms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprograms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprograms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprograms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprograms[".printFriendly"] = true;
}



$tdataprograms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprograms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprograms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprograms[".isUseAjaxSuggest"] = true;





$tdataprograms[".ajaxCodeSnippetAdded"] = false;

$tdataprograms[".buttonsAdded"] = false;

$tdataprograms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprograms[".isUseTimeForSearch"] = false;


$tdataprograms[".badgeColor"] = "D2691E";


$tdataprograms[".allSearchFields"] = array();
$tdataprograms[".filterFields"] = array();
$tdataprograms[".requiredSearchFields"] = array();

$tdataprograms[".googleLikeFields"] = array();
$tdataprograms[".googleLikeFields"][] = "program_id";
$tdataprograms[".googleLikeFields"][] = "program_name";
$tdataprograms[".googleLikeFields"][] = "description";
$tdataprograms[".googleLikeFields"][] = "is_active";
$tdataprograms[".googleLikeFields"][] = "created_at";
$tdataprograms[".googleLikeFields"][] = "updated_at";



$tdataprograms[".tableType"] = "list";

$tdataprograms[".printerPageOrientation"] = 0;
$tdataprograms[".nPrinterPageScale"] = 100;

$tdataprograms[".nPrinterSplitRecords"] = 40;

$tdataprograms[".geocodingEnabled"] = false;










$tdataprograms[".pageSize"] = 20;

$tdataprograms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprograms[".strOrderBy"] = $tstrOrderBy;

$tdataprograms[".orderindexes"] = array();


$tdataprograms[".sqlHead"] = "SELECT program_id,  	program_name,  	description,  	is_active,  	created_at,  	updated_at";
$tdataprograms[".sqlFrom"] = "FROM \"public\".programs";
$tdataprograms[".sqlWhereExpr"] = "";
$tdataprograms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprograms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprograms[".arrGroupsPerPage"] = $arrGPP;

$tdataprograms[".highlightSearchResults"] = true;

$tableKeysprograms = array();
$tableKeysprograms[] = "program_id";
$tdataprograms[".Keys"] = $tableKeysprograms;


$tdataprograms[".hideMobileList"] = array();




//	program_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "program_id";
	$fdata["GoodName"] = "program_id";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_programs","program_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "program_id";

		$fdata["sourceSingle"] = "program_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "program_id";

	
	
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


	$tdataprograms["program_id"] = $fdata;
		$tdataprograms[".searchableFields"][] = "program_id";
//	program_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "program_name";
	$fdata["GoodName"] = "program_name";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_programs","program_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "program_name";

		$fdata["sourceSingle"] = "program_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "program_name";

	
	
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


	$tdataprograms["program_name"] = $fdata;
		$tdataprograms[".searchableFields"][] = "program_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_programs","description");
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


	$tdataprograms["description"] = $fdata;
		$tdataprograms[".searchableFields"][] = "description";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_programs","is_active");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdataprograms["is_active"] = $fdata;
		$tdataprograms[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_programs","created_at");
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


	$tdataprograms["created_at"] = $fdata;
		$tdataprograms[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_programs","updated_at");
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


	$tdataprograms["updated_at"] = $fdata;
		$tdataprograms[".searchableFields"][] = "updated_at";


$tables_data["public.programs"]=&$tdataprograms;
$field_labels["public_programs"] = &$fieldLabelsprograms;
$fieldToolTips["public_programs"] = &$fieldToolTipsprograms;
$placeHolders["public_programs"] = &$placeHoldersprograms;
$page_titles["public_programs"] = &$pageTitlesprograms;


changeTextControlsToDate( "public.programs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.programs"] = array();
//	public.training_sessions
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_sessions";
		$detailsParam["dOriginalTable"] = "public.training_sessions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_sessions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_sessions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.programs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.programs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.programs"][$dIndex]["masterKeys"][]="program_id";

				$detailsTablesData["public.programs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.programs"][$dIndex]["detailKeys"][]="program_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.programs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_programs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "program_id,  	program_name,  	description,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".programs";
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
	"m_strName" => "program_id",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.programs"
));

$proto6["m_sql"] = "program_id";
$proto6["m_srcTableName"] = "public.programs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "program_name",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.programs"
));

$proto8["m_sql"] = "program_name";
$proto8["m_srcTableName"] = "public.programs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.programs"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.programs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.programs"
));

$proto12["m_sql"] = "is_active";
$proto12["m_srcTableName"] = "public.programs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.programs"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.programs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.programs"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.programs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.programs";
$proto19["m_srcTableName"] = "public.programs";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "program_id";
$proto19["m_columns"][] = "program_name";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "is_active";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "updated_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".programs";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.programs";
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
$proto0["m_srcTableName"]="public.programs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_programs = createSqlQuery_programs();


	
				;

						

$tdataprograms[".sqlquery"] = $queryData_programs;



$tdataprograms[".hasEvents"] = false;

?>