<?php
$tdatasex = array();
$tdatasex[".searchableFields"] = array();
$tdatasex[".ShortName"] = "sex";
$tdatasex[".OwnerID"] = "";
$tdatasex[".OriginalTable"] = "public.sex";


$tdatasex[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasex[".originalPagesByType"] = $tdatasex[".pagesByType"];
$tdatasex[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasex[".originalPages"] = $tdatasex[".pages"];
$tdatasex[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasex[".originalDefaultPages"] = $tdatasex[".defaultPages"];

//	field labels
$fieldLabelssex = array();
$fieldToolTipssex = array();
$pageTitlessex = array();
$placeHolderssex = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssex["English"] = array();
	$fieldToolTipssex["English"] = array();
	$placeHolderssex["English"] = array();
	$pageTitlessex["English"] = array();
	$fieldLabelssex["English"]["sex_id"] = "Sex Id";
	$fieldToolTipssex["English"]["sex_id"] = "";
	$placeHolderssex["English"]["sex_id"] = "";
	$fieldLabelssex["English"]["sex_name"] = "Sex Name";
	$fieldToolTipssex["English"]["sex_name"] = "";
	$placeHolderssex["English"]["sex_name"] = "";
	$fieldLabelssex["English"]["description"] = "Description";
	$fieldToolTipssex["English"]["description"] = "";
	$placeHolderssex["English"]["description"] = "";
	$fieldLabelssex["English"]["is_active"] = "Is Active";
	$fieldToolTipssex["English"]["is_active"] = "";
	$placeHolderssex["English"]["is_active"] = "";
	$fieldLabelssex["English"]["created_at"] = "Created At";
	$fieldToolTipssex["English"]["created_at"] = "";
	$placeHolderssex["English"]["created_at"] = "";
	$fieldLabelssex["English"]["updated_at"] = "Updated At";
	$fieldToolTipssex["English"]["updated_at"] = "";
	$placeHolderssex["English"]["updated_at"] = "";
	if (count($fieldToolTipssex["English"]))
		$tdatasex[".isUseToolTips"] = true;
}


	$tdatasex[".NCSearch"] = true;



$tdatasex[".shortTableName"] = "sex";
$tdatasex[".nSecOptions"] = 0;

$tdatasex[".mainTableOwnerID"] = "";
$tdatasex[".entityType"] = 0;
$tdatasex[".connId"] = "lifebox_mesystem_at_localhost";


$tdatasex[".strOriginalTableName"] = "public.sex";

	



$tdatasex[".showAddInPopup"] = false;

$tdatasex[".showEditInPopup"] = false;

$tdatasex[".showViewInPopup"] = false;

$tdatasex[".listAjax"] = false;
//	temporary
//$tdatasex[".listAjax"] = false;

	$tdatasex[".audit"] = false;

	$tdatasex[".locking"] = false;


$pages = $tdatasex[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasex[".edit"] = true;
	$tdatasex[".afterEditAction"] = 1;
	$tdatasex[".closePopupAfterEdit"] = 1;
	$tdatasex[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasex[".add"] = true;
$tdatasex[".afterAddAction"] = 1;
$tdatasex[".closePopupAfterAdd"] = 1;
$tdatasex[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasex[".list"] = true;
}



$tdatasex[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasex[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasex[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasex[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasex[".printFriendly"] = true;
}



$tdatasex[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasex[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasex[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasex[".isUseAjaxSuggest"] = true;





$tdatasex[".ajaxCodeSnippetAdded"] = false;

$tdatasex[".buttonsAdded"] = false;

$tdatasex[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasex[".isUseTimeForSearch"] = false;


$tdatasex[".badgeColor"] = "7B68EE";


$tdatasex[".allSearchFields"] = array();
$tdatasex[".filterFields"] = array();
$tdatasex[".requiredSearchFields"] = array();

$tdatasex[".googleLikeFields"] = array();
$tdatasex[".googleLikeFields"][] = "sex_id";
$tdatasex[".googleLikeFields"][] = "sex_name";
$tdatasex[".googleLikeFields"][] = "description";
$tdatasex[".googleLikeFields"][] = "is_active";
$tdatasex[".googleLikeFields"][] = "created_at";
$tdatasex[".googleLikeFields"][] = "updated_at";



$tdatasex[".tableType"] = "list";

$tdatasex[".printerPageOrientation"] = 0;
$tdatasex[".nPrinterPageScale"] = 100;

$tdatasex[".nPrinterSplitRecords"] = 40;

$tdatasex[".geocodingEnabled"] = false;










$tdatasex[".pageSize"] = 20;

$tdatasex[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasex[".strOrderBy"] = $tstrOrderBy;

$tdatasex[".orderindexes"] = array();


$tdatasex[".sqlHead"] = "SELECT sex_id,  	sex_name,  	description,  	is_active,  	created_at,  	updated_at";
$tdatasex[".sqlFrom"] = "FROM \"public\".sex";
$tdatasex[".sqlWhereExpr"] = "";
$tdatasex[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasex[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasex[".arrGroupsPerPage"] = $arrGPP;

$tdatasex[".highlightSearchResults"] = true;

$tableKeyssex = array();
$tableKeyssex[] = "sex_id";
$tdatasex[".Keys"] = $tableKeyssex;


$tdatasex[".hideMobileList"] = array();




//	sex_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sex_id";
	$fdata["GoodName"] = "sex_id";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_sex","sex_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "sex_id";

		$fdata["sourceSingle"] = "sex_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_id";

	
	
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


	$tdatasex["sex_id"] = $fdata;
		$tdatasex[".searchableFields"][] = "sex_id";
//	sex_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sex_name";
	$fdata["GoodName"] = "sex_name";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_sex","sex_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sex_name";

		$fdata["sourceSingle"] = "sex_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_name";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatasex["sex_name"] = $fdata;
		$tdatasex[".searchableFields"][] = "sex_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_sex","description");
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


	$tdatasex["description"] = $fdata;
		$tdatasex[".searchableFields"][] = "description";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_sex","is_active");
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


	$tdatasex["is_active"] = $fdata;
		$tdatasex[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_sex","created_at");
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


	$tdatasex["created_at"] = $fdata;
		$tdatasex[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_sex","updated_at");
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


	$tdatasex["updated_at"] = $fdata;
		$tdatasex[".searchableFields"][] = "updated_at";


$tables_data["public.sex"]=&$tdatasex;
$field_labels["public_sex"] = &$fieldLabelssex;
$fieldToolTips["public_sex"] = &$fieldToolTipssex;
$placeHolders["public_sex"] = &$placeHolderssex;
$page_titles["public_sex"] = &$pageTitlessex;


changeTextControlsToDate( "public.sex" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.sex"] = array();
//	public.training_participants
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_participants";
		$detailsParam["dOriginalTable"] = "public.training_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.sex"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.sex"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.sex"][$dIndex]["masterKeys"][]="sex_id";

				$detailsTablesData["public.sex"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.sex"][$dIndex]["detailKeys"][]="sex_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.sex"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sex()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sex_id,  	sex_name,  	description,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".sex";
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
	"m_strName" => "sex_id",
	"m_strTable" => "public.sex",
	"m_srcTableName" => "public.sex"
));

$proto6["m_sql"] = "sex_id";
$proto6["m_srcTableName"] = "public.sex";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_name",
	"m_strTable" => "public.sex",
	"m_srcTableName" => "public.sex"
));

$proto8["m_sql"] = "sex_name";
$proto8["m_srcTableName"] = "public.sex";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.sex",
	"m_srcTableName" => "public.sex"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.sex";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.sex",
	"m_srcTableName" => "public.sex"
));

$proto12["m_sql"] = "is_active";
$proto12["m_srcTableName"] = "public.sex";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.sex",
	"m_srcTableName" => "public.sex"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.sex";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.sex",
	"m_srcTableName" => "public.sex"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.sex";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.sex";
$proto19["m_srcTableName"] = "public.sex";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "sex_id";
$proto19["m_columns"][] = "sex_name";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "is_active";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "updated_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".sex";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.sex";
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
$proto0["m_srcTableName"]="public.sex";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sex = createSqlQuery_sex();


	
				;

						

$tdatasex[".sqlquery"] = $queryData_sex;



$tdatasex[".hasEvents"] = false;

?>