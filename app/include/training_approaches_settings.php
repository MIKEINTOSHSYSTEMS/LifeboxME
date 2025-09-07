<?php
$tdatatraining_approaches = array();
$tdatatraining_approaches[".searchableFields"] = array();
$tdatatraining_approaches[".ShortName"] = "training_approaches";
$tdatatraining_approaches[".OwnerID"] = "";
$tdatatraining_approaches[".OriginalTable"] = "public.training_approaches";


$tdatatraining_approaches[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_approaches[".originalPagesByType"] = $tdatatraining_approaches[".pagesByType"];
$tdatatraining_approaches[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_approaches[".originalPages"] = $tdatatraining_approaches[".pages"];
$tdatatraining_approaches[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_approaches[".originalDefaultPages"] = $tdatatraining_approaches[".defaultPages"];

//	field labels
$fieldLabelstraining_approaches = array();
$fieldToolTipstraining_approaches = array();
$pageTitlestraining_approaches = array();
$placeHolderstraining_approaches = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_approaches["English"] = array();
	$fieldToolTipstraining_approaches["English"] = array();
	$placeHolderstraining_approaches["English"] = array();
	$pageTitlestraining_approaches["English"] = array();
	$fieldLabelstraining_approaches["English"]["approach_id"] = "Approach Id";
	$fieldToolTipstraining_approaches["English"]["approach_id"] = "";
	$placeHolderstraining_approaches["English"]["approach_id"] = "";
	$fieldLabelstraining_approaches["English"]["approach_name"] = "Approach Name";
	$fieldToolTipstraining_approaches["English"]["approach_name"] = "";
	$placeHolderstraining_approaches["English"]["approach_name"] = "";
	$fieldLabelstraining_approaches["English"]["description"] = "Description";
	$fieldToolTipstraining_approaches["English"]["description"] = "";
	$placeHolderstraining_approaches["English"]["description"] = "";
	$fieldLabelstraining_approaches["English"]["is_active"] = "Is Active";
	$fieldToolTipstraining_approaches["English"]["is_active"] = "";
	$placeHolderstraining_approaches["English"]["is_active"] = "";
	$fieldLabelstraining_approaches["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_approaches["English"]["created_at"] = "";
	$placeHolderstraining_approaches["English"]["created_at"] = "";
	$fieldLabelstraining_approaches["English"]["updated_at"] = "Updated At";
	$fieldToolTipstraining_approaches["English"]["updated_at"] = "";
	$placeHolderstraining_approaches["English"]["updated_at"] = "";
	if (count($fieldToolTipstraining_approaches["English"]))
		$tdatatraining_approaches[".isUseToolTips"] = true;
}


	$tdatatraining_approaches[".NCSearch"] = true;



$tdatatraining_approaches[".shortTableName"] = "training_approaches";
$tdatatraining_approaches[".nSecOptions"] = 0;

$tdatatraining_approaches[".mainTableOwnerID"] = "";
$tdatatraining_approaches[".entityType"] = 0;
$tdatatraining_approaches[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_approaches[".strOriginalTableName"] = "public.training_approaches";

	



$tdatatraining_approaches[".showAddInPopup"] = false;

$tdatatraining_approaches[".showEditInPopup"] = false;

$tdatatraining_approaches[".showViewInPopup"] = false;

$tdatatraining_approaches[".listAjax"] = false;
//	temporary
//$tdatatraining_approaches[".listAjax"] = false;

	$tdatatraining_approaches[".audit"] = true;

	$tdatatraining_approaches[".locking"] = false;


$pages = $tdatatraining_approaches[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_approaches[".edit"] = true;
	$tdatatraining_approaches[".afterEditAction"] = 1;
	$tdatatraining_approaches[".closePopupAfterEdit"] = 1;
	$tdatatraining_approaches[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_approaches[".add"] = true;
$tdatatraining_approaches[".afterAddAction"] = 1;
$tdatatraining_approaches[".closePopupAfterAdd"] = 1;
$tdatatraining_approaches[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_approaches[".list"] = true;
}



$tdatatraining_approaches[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_approaches[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_approaches[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_approaches[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_approaches[".printFriendly"] = true;
}



$tdatatraining_approaches[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_approaches[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_approaches[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_approaches[".isUseAjaxSuggest"] = true;





$tdatatraining_approaches[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_approaches[".buttonsAdded"] = false;

$tdatatraining_approaches[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_approaches[".isUseTimeForSearch"] = false;


$tdatatraining_approaches[".badgeColor"] = "2F4F4F";


$tdatatraining_approaches[".allSearchFields"] = array();
$tdatatraining_approaches[".filterFields"] = array();
$tdatatraining_approaches[".requiredSearchFields"] = array();

$tdatatraining_approaches[".googleLikeFields"] = array();
$tdatatraining_approaches[".googleLikeFields"][] = "approach_id";
$tdatatraining_approaches[".googleLikeFields"][] = "approach_name";
$tdatatraining_approaches[".googleLikeFields"][] = "description";
$tdatatraining_approaches[".googleLikeFields"][] = "is_active";
$tdatatraining_approaches[".googleLikeFields"][] = "created_at";
$tdatatraining_approaches[".googleLikeFields"][] = "updated_at";



$tdatatraining_approaches[".tableType"] = "list";

$tdatatraining_approaches[".printerPageOrientation"] = 0;
$tdatatraining_approaches[".nPrinterPageScale"] = 100;

$tdatatraining_approaches[".nPrinterSplitRecords"] = 40;

$tdatatraining_approaches[".geocodingEnabled"] = false;










$tdatatraining_approaches[".pageSize"] = 20;

$tdatatraining_approaches[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_approaches[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_approaches[".orderindexes"] = array();


$tdatatraining_approaches[".sqlHead"] = "SELECT approach_id,  	approach_name,  	description,  	is_active,  	created_at,  	updated_at";
$tdatatraining_approaches[".sqlFrom"] = "FROM \"public\".training_approaches";
$tdatatraining_approaches[".sqlWhereExpr"] = "";
$tdatatraining_approaches[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_approaches[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_approaches[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_approaches[".highlightSearchResults"] = true;

$tableKeystraining_approaches = array();
$tableKeystraining_approaches[] = "approach_id";
$tdatatraining_approaches[".Keys"] = $tableKeystraining_approaches;


$tdatatraining_approaches[".hideMobileList"] = array();




//	approach_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "approach_id";
	$fdata["GoodName"] = "approach_id";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_approaches","approach_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "approach_id";

		$fdata["sourceSingle"] = "approach_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approach_id";

	
	
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


	$tdatatraining_approaches["approach_id"] = $fdata;
		$tdatatraining_approaches[".searchableFields"][] = "approach_id";
//	approach_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "approach_name";
	$fdata["GoodName"] = "approach_name";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_approaches","approach_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approach_name";

		$fdata["sourceSingle"] = "approach_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approach_name";

	
	
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


	$tdatatraining_approaches["approach_name"] = $fdata;
		$tdatatraining_approaches[".searchableFields"][] = "approach_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_approaches","description");
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


	$tdatatraining_approaches["description"] = $fdata;
		$tdatatraining_approaches[".searchableFields"][] = "description";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_approaches","is_active");
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


	$tdatatraining_approaches["is_active"] = $fdata;
		$tdatatraining_approaches[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_approaches","created_at");
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


	$tdatatraining_approaches["created_at"] = $fdata;
		$tdatatraining_approaches[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_approaches","updated_at");
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


	$tdatatraining_approaches["updated_at"] = $fdata;
		$tdatatraining_approaches[".searchableFields"][] = "updated_at";


$tables_data["public.training_approaches"]=&$tdatatraining_approaches;
$field_labels["public_training_approaches"] = &$fieldLabelstraining_approaches;
$fieldToolTips["public_training_approaches"] = &$fieldToolTipstraining_approaches;
$placeHolders["public_training_approaches"] = &$placeHolderstraining_approaches;
$page_titles["public_training_approaches"] = &$pageTitlestraining_approaches;


changeTextControlsToDate( "public.training_approaches" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_approaches"] = array();
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


		
	$detailsTablesData["public.training_approaches"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_approaches"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_approaches"][$dIndex]["masterKeys"][]="approach_id";

				$detailsTablesData["public.training_approaches"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_approaches"][$dIndex]["detailKeys"][]="approach_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_approaches"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_approaches()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "approach_id,  	approach_name,  	description,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".training_approaches";
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
	"m_strName" => "approach_id",
	"m_strTable" => "public.training_approaches",
	"m_srcTableName" => "public.training_approaches"
));

$proto6["m_sql"] = "approach_id";
$proto6["m_srcTableName"] = "public.training_approaches";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "approach_name",
	"m_strTable" => "public.training_approaches",
	"m_srcTableName" => "public.training_approaches"
));

$proto8["m_sql"] = "approach_name";
$proto8["m_srcTableName"] = "public.training_approaches";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.training_approaches",
	"m_srcTableName" => "public.training_approaches"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.training_approaches";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.training_approaches",
	"m_srcTableName" => "public.training_approaches"
));

$proto12["m_sql"] = "is_active";
$proto12["m_srcTableName"] = "public.training_approaches";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_approaches",
	"m_srcTableName" => "public.training_approaches"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.training_approaches";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.training_approaches",
	"m_srcTableName" => "public.training_approaches"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.training_approaches";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.training_approaches";
$proto19["m_srcTableName"] = "public.training_approaches";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "approach_id";
$proto19["m_columns"][] = "approach_name";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "is_active";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "updated_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".training_approaches";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.training_approaches";
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
$proto0["m_srcTableName"]="public.training_approaches";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_approaches = createSqlQuery_training_approaches();


	
				;

						

$tdatatraining_approaches[".sqlquery"] = $queryData_training_approaches;



$tdatatraining_approaches[".hasEvents"] = false;

?>