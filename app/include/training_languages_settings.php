<?php
$tdatatraining_languages = array();
$tdatatraining_languages[".searchableFields"] = array();
$tdatatraining_languages[".ShortName"] = "training_languages";
$tdatatraining_languages[".OwnerID"] = "";
$tdatatraining_languages[".OriginalTable"] = "public.training_languages";


$tdatatraining_languages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_languages[".originalPagesByType"] = $tdatatraining_languages[".pagesByType"];
$tdatatraining_languages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_languages[".originalPages"] = $tdatatraining_languages[".pages"];
$tdatatraining_languages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_languages[".originalDefaultPages"] = $tdatatraining_languages[".defaultPages"];

//	field labels
$fieldLabelstraining_languages = array();
$fieldToolTipstraining_languages = array();
$pageTitlestraining_languages = array();
$placeHolderstraining_languages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_languages["English"] = array();
	$fieldToolTipstraining_languages["English"] = array();
	$placeHolderstraining_languages["English"] = array();
	$pageTitlestraining_languages["English"] = array();
	$fieldLabelstraining_languages["English"]["training_language_id"] = "Training Language Id";
	$fieldToolTipstraining_languages["English"]["training_language_id"] = "";
	$placeHolderstraining_languages["English"]["training_language_id"] = "";
	$fieldLabelstraining_languages["English"]["training_id"] = "Training Id";
	$fieldToolTipstraining_languages["English"]["training_id"] = "";
	$placeHolderstraining_languages["English"]["training_id"] = "";
	$fieldLabelstraining_languages["English"]["language_id"] = "Language Id";
	$fieldToolTipstraining_languages["English"]["language_id"] = "";
	$placeHolderstraining_languages["English"]["language_id"] = "";
	$fieldLabelstraining_languages["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_languages["English"]["created_at"] = "";
	$placeHolderstraining_languages["English"]["created_at"] = "";
	if (count($fieldToolTipstraining_languages["English"]))
		$tdatatraining_languages[".isUseToolTips"] = true;
}


	$tdatatraining_languages[".NCSearch"] = true;



$tdatatraining_languages[".shortTableName"] = "training_languages";
$tdatatraining_languages[".nSecOptions"] = 0;

$tdatatraining_languages[".mainTableOwnerID"] = "";
$tdatatraining_languages[".entityType"] = 0;
$tdatatraining_languages[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_languages[".strOriginalTableName"] = "public.training_languages";

	



$tdatatraining_languages[".showAddInPopup"] = false;

$tdatatraining_languages[".showEditInPopup"] = false;

$tdatatraining_languages[".showViewInPopup"] = false;

$tdatatraining_languages[".listAjax"] = false;
//	temporary
//$tdatatraining_languages[".listAjax"] = false;

	$tdatatraining_languages[".audit"] = false;

	$tdatatraining_languages[".locking"] = false;


$pages = $tdatatraining_languages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_languages[".edit"] = true;
	$tdatatraining_languages[".afterEditAction"] = 1;
	$tdatatraining_languages[".closePopupAfterEdit"] = 1;
	$tdatatraining_languages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_languages[".add"] = true;
$tdatatraining_languages[".afterAddAction"] = 1;
$tdatatraining_languages[".closePopupAfterAdd"] = 1;
$tdatatraining_languages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_languages[".list"] = true;
}



$tdatatraining_languages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_languages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_languages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_languages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_languages[".printFriendly"] = true;
}



$tdatatraining_languages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_languages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_languages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_languages[".isUseAjaxSuggest"] = true;





$tdatatraining_languages[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_languages[".buttonsAdded"] = false;

$tdatatraining_languages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_languages[".isUseTimeForSearch"] = false;


$tdatatraining_languages[".badgeColor"] = "E07878";


$tdatatraining_languages[".allSearchFields"] = array();
$tdatatraining_languages[".filterFields"] = array();
$tdatatraining_languages[".requiredSearchFields"] = array();

$tdatatraining_languages[".googleLikeFields"] = array();
$tdatatraining_languages[".googleLikeFields"][] = "training_language_id";
$tdatatraining_languages[".googleLikeFields"][] = "training_id";
$tdatatraining_languages[".googleLikeFields"][] = "language_id";
$tdatatraining_languages[".googleLikeFields"][] = "created_at";



$tdatatraining_languages[".tableType"] = "list";

$tdatatraining_languages[".printerPageOrientation"] = 0;
$tdatatraining_languages[".nPrinterPageScale"] = 100;

$tdatatraining_languages[".nPrinterSplitRecords"] = 40;

$tdatatraining_languages[".geocodingEnabled"] = false;










$tdatatraining_languages[".pageSize"] = 20;

$tdatatraining_languages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_languages[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_languages[".orderindexes"] = array();


$tdatatraining_languages[".sqlHead"] = "SELECT training_language_id,  	training_id,  	language_id,  	created_at";
$tdatatraining_languages[".sqlFrom"] = "FROM \"public\".training_languages";
$tdatatraining_languages[".sqlWhereExpr"] = "";
$tdatatraining_languages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_languages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_languages[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_languages[".highlightSearchResults"] = true;

$tableKeystraining_languages = array();
$tableKeystraining_languages[] = "training_language_id";
$tdatatraining_languages[".Keys"] = $tableKeystraining_languages;


$tdatatraining_languages[".hideMobileList"] = array();




//	training_language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_language_id";
	$fdata["GoodName"] = "training_language_id";
	$fdata["ownerTable"] = "public.training_languages";
	$fdata["Label"] = GetFieldLabel("public_training_languages","training_language_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_language_id";

		$fdata["sourceSingle"] = "training_language_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_language_id";

	
	
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


	$tdatatraining_languages["training_language_id"] = $fdata;
		$tdatatraining_languages[".searchableFields"][] = "training_language_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_languages";
	$fdata["Label"] = GetFieldLabel("public_training_languages","training_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_id";

		$fdata["sourceSingle"] = "training_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_id";

	
	
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
	$edata["LookupTable"] = "public.training_sessions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "remarks";

	

	
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


	$tdatatraining_languages["training_id"] = $fdata;
		$tdatatraining_languages[".searchableFields"][] = "training_id";
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "public.training_languages";
	$fdata["Label"] = GetFieldLabel("public_training_languages","language_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "language_id";

		$fdata["sourceSingle"] = "language_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "language_id";

	
	
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
	$edata["LookupTable"] = "public.languages";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "language_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "language_name";

	

	
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


	$tdatatraining_languages["language_id"] = $fdata;
		$tdatatraining_languages[".searchableFields"][] = "language_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_languages";
	$fdata["Label"] = GetFieldLabel("public_training_languages","created_at");
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


	$tdatatraining_languages["created_at"] = $fdata;
		$tdatatraining_languages[".searchableFields"][] = "created_at";


$tables_data["public.training_languages"]=&$tdatatraining_languages;
$field_labels["public_training_languages"] = &$fieldLabelstraining_languages;
$fieldToolTips["public_training_languages"] = &$fieldToolTipstraining_languages;
$placeHolders["public_training_languages"] = &$placeHolderstraining_languages;
$page_titles["public_training_languages"] = &$pageTitlestraining_languages;


changeTextControlsToDate( "public.training_languages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_languages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_languages"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.languages";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.languages";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "languages";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_languages"][0] = $masterParams;
				$masterTablesData["public.training_languages"][0]["masterKeys"] = array();
	$masterTablesData["public.training_languages"][0]["masterKeys"][]="language_id";
				$masterTablesData["public.training_languages"][0]["detailKeys"] = array();
	$masterTablesData["public.training_languages"][0]["detailKeys"][]="language_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_sessions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_sessions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_sessions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_languages"][1] = $masterParams;
				$masterTablesData["public.training_languages"][1]["masterKeys"] = array();
	$masterTablesData["public.training_languages"][1]["masterKeys"][]="training_id";
				$masterTablesData["public.training_languages"][1]["detailKeys"] = array();
	$masterTablesData["public.training_languages"][1]["detailKeys"][]="training_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_languages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_language_id,  	training_id,  	language_id,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".training_languages";
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
	"m_strName" => "training_language_id",
	"m_strTable" => "public.training_languages",
	"m_srcTableName" => "public.training_languages"
));

$proto6["m_sql"] = "training_language_id";
$proto6["m_srcTableName"] = "public.training_languages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_languages",
	"m_srcTableName" => "public.training_languages"
));

$proto8["m_sql"] = "training_id";
$proto8["m_srcTableName"] = "public.training_languages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "public.training_languages",
	"m_srcTableName" => "public.training_languages"
));

$proto10["m_sql"] = "language_id";
$proto10["m_srcTableName"] = "public.training_languages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_languages",
	"m_srcTableName" => "public.training_languages"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.training_languages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.training_languages";
$proto15["m_srcTableName"] = "public.training_languages";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "training_language_id";
$proto15["m_columns"][] = "training_id";
$proto15["m_columns"][] = "language_id";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".training_languages";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.training_languages";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.training_languages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_languages = createSqlQuery_training_languages();


	
		;

				

$tdatatraining_languages[".sqlquery"] = $queryData_training_languages;



$tdatatraining_languages[".hasEvents"] = false;

?>