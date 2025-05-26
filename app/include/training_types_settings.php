<?php
$tdatatraining_types = array();
$tdatatraining_types[".searchableFields"] = array();
$tdatatraining_types[".ShortName"] = "training_types";
$tdatatraining_types[".OwnerID"] = "";
$tdatatraining_types[".OriginalTable"] = "public.training_types";


$tdatatraining_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_types[".originalPagesByType"] = $tdatatraining_types[".pagesByType"];
$tdatatraining_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_types[".originalPages"] = $tdatatraining_types[".pages"];
$tdatatraining_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_types[".originalDefaultPages"] = $tdatatraining_types[".defaultPages"];

//	field labels
$fieldLabelstraining_types = array();
$fieldToolTipstraining_types = array();
$pageTitlestraining_types = array();
$placeHolderstraining_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_types["English"] = array();
	$fieldToolTipstraining_types["English"] = array();
	$placeHolderstraining_types["English"] = array();
	$pageTitlestraining_types["English"] = array();
	$fieldLabelstraining_types["English"]["training_type_id"] = "Training Type Id";
	$fieldToolTipstraining_types["English"]["training_type_id"] = "";
	$placeHolderstraining_types["English"]["training_type_id"] = "";
	$fieldLabelstraining_types["English"]["type_name"] = "Type Name";
	$fieldToolTipstraining_types["English"]["type_name"] = "";
	$placeHolderstraining_types["English"]["type_name"] = "";
	$fieldLabelstraining_types["English"]["description"] = "Description";
	$fieldToolTipstraining_types["English"]["description"] = "";
	$placeHolderstraining_types["English"]["description"] = "";
	$fieldLabelstraining_types["English"]["is_active"] = "Is Active";
	$fieldToolTipstraining_types["English"]["is_active"] = "";
	$placeHolderstraining_types["English"]["is_active"] = "";
	$fieldLabelstraining_types["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_types["English"]["created_at"] = "";
	$placeHolderstraining_types["English"]["created_at"] = "";
	$fieldLabelstraining_types["English"]["updated_at"] = "Updated At";
	$fieldToolTipstraining_types["English"]["updated_at"] = "";
	$placeHolderstraining_types["English"]["updated_at"] = "";
	if (count($fieldToolTipstraining_types["English"]))
		$tdatatraining_types[".isUseToolTips"] = true;
}


	$tdatatraining_types[".NCSearch"] = true;



$tdatatraining_types[".shortTableName"] = "training_types";
$tdatatraining_types[".nSecOptions"] = 0;

$tdatatraining_types[".mainTableOwnerID"] = "";
$tdatatraining_types[".entityType"] = 0;
$tdatatraining_types[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_types[".strOriginalTableName"] = "public.training_types";

	



$tdatatraining_types[".showAddInPopup"] = false;

$tdatatraining_types[".showEditInPopup"] = false;

$tdatatraining_types[".showViewInPopup"] = false;

$tdatatraining_types[".listAjax"] = false;
//	temporary
//$tdatatraining_types[".listAjax"] = false;

	$tdatatraining_types[".audit"] = false;

	$tdatatraining_types[".locking"] = false;


$pages = $tdatatraining_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_types[".edit"] = true;
	$tdatatraining_types[".afterEditAction"] = 1;
	$tdatatraining_types[".closePopupAfterEdit"] = 1;
	$tdatatraining_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_types[".add"] = true;
$tdatatraining_types[".afterAddAction"] = 1;
$tdatatraining_types[".closePopupAfterAdd"] = 1;
$tdatatraining_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_types[".list"] = true;
}



$tdatatraining_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_types[".printFriendly"] = true;
}



$tdatatraining_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_types[".isUseAjaxSuggest"] = true;





$tdatatraining_types[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_types[".buttonsAdded"] = false;

$tdatatraining_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_types[".isUseTimeForSearch"] = false;


$tdatatraining_types[".badgeColor"] = "E07878";


$tdatatraining_types[".allSearchFields"] = array();
$tdatatraining_types[".filterFields"] = array();
$tdatatraining_types[".requiredSearchFields"] = array();

$tdatatraining_types[".googleLikeFields"] = array();
$tdatatraining_types[".googleLikeFields"][] = "training_type_id";
$tdatatraining_types[".googleLikeFields"][] = "type_name";
$tdatatraining_types[".googleLikeFields"][] = "description";
$tdatatraining_types[".googleLikeFields"][] = "is_active";
$tdatatraining_types[".googleLikeFields"][] = "created_at";
$tdatatraining_types[".googleLikeFields"][] = "updated_at";



$tdatatraining_types[".tableType"] = "list";

$tdatatraining_types[".printerPageOrientation"] = 0;
$tdatatraining_types[".nPrinterPageScale"] = 100;

$tdatatraining_types[".nPrinterSplitRecords"] = 40;

$tdatatraining_types[".geocodingEnabled"] = false;










$tdatatraining_types[".pageSize"] = 20;

$tdatatraining_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_types[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_types[".orderindexes"] = array();


$tdatatraining_types[".sqlHead"] = "SELECT training_type_id,  	type_name,  	description,  	is_active,  	created_at,  	updated_at";
$tdatatraining_types[".sqlFrom"] = "FROM \"public\".training_types";
$tdatatraining_types[".sqlWhereExpr"] = "";
$tdatatraining_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_types[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_types[".highlightSearchResults"] = true;

$tableKeystraining_types = array();
$tableKeystraining_types[] = "training_type_id";
$tdatatraining_types[".Keys"] = $tableKeystraining_types;


$tdatatraining_types[".hideMobileList"] = array();




//	training_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_type_id";
	$fdata["GoodName"] = "training_type_id";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_types","training_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_type_id";

		$fdata["sourceSingle"] = "training_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_type_id";

	
	
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


	$tdatatraining_types["training_type_id"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "training_type_id";
//	type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type_name";
	$fdata["GoodName"] = "type_name";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_types","type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type_name";

		$fdata["sourceSingle"] = "type_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_name";

	
	
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


	$tdatatraining_types["type_name"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "type_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_types","description");
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


	$tdatatraining_types["description"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "description";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_types","is_active");
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


	$tdatatraining_types["is_active"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_types","created_at");
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


	$tdatatraining_types["created_at"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_types","updated_at");
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


	$tdatatraining_types["updated_at"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "updated_at";


$tables_data["public.training_types"]=&$tdatatraining_types;
$field_labels["public_training_types"] = &$fieldLabelstraining_types;
$fieldToolTips["public_training_types"] = &$fieldToolTipstraining_types;
$placeHolders["public_training_types"] = &$placeHolderstraining_types;
$page_titles["public_training_types"] = &$pageTitlestraining_types;


changeTextControlsToDate( "public.training_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_types"] = array();
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


		
	$detailsTablesData["public.training_types"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_types"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_types"][$dIndex]["masterKeys"][]="training_type_id";

				$detailsTablesData["public.training_types"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_types"][$dIndex]["detailKeys"][]="training_type_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_type_id,  	type_name,  	description,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".training_types";
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
	"m_strName" => "training_type_id",
	"m_strTable" => "public.training_types",
	"m_srcTableName" => "public.training_types"
));

$proto6["m_sql"] = "training_type_id";
$proto6["m_srcTableName"] = "public.training_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "type_name",
	"m_strTable" => "public.training_types",
	"m_srcTableName" => "public.training_types"
));

$proto8["m_sql"] = "type_name";
$proto8["m_srcTableName"] = "public.training_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.training_types",
	"m_srcTableName" => "public.training_types"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.training_types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.training_types",
	"m_srcTableName" => "public.training_types"
));

$proto12["m_sql"] = "is_active";
$proto12["m_srcTableName"] = "public.training_types";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_types",
	"m_srcTableName" => "public.training_types"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.training_types";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.training_types",
	"m_srcTableName" => "public.training_types"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.training_types";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.training_types";
$proto19["m_srcTableName"] = "public.training_types";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "training_type_id";
$proto19["m_columns"][] = "type_name";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "is_active";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "updated_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".training_types";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.training_types";
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
$proto0["m_srcTableName"]="public.training_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_types = createSqlQuery_training_types();


	
		;

						

$tdatatraining_types[".sqlquery"] = $queryData_training_types;



$tdatatraining_types[".hasEvents"] = false;

?>