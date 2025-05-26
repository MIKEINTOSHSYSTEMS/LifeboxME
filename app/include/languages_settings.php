<?php
$tdatalanguages = array();
$tdatalanguages[".searchableFields"] = array();
$tdatalanguages[".ShortName"] = "languages";
$tdatalanguages[".OwnerID"] = "";
$tdatalanguages[".OriginalTable"] = "public.languages";


$tdatalanguages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalanguages[".originalPagesByType"] = $tdatalanguages[".pagesByType"];
$tdatalanguages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalanguages[".originalPages"] = $tdatalanguages[".pages"];
$tdatalanguages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalanguages[".originalDefaultPages"] = $tdatalanguages[".defaultPages"];

//	field labels
$fieldLabelslanguages = array();
$fieldToolTipslanguages = array();
$pageTitleslanguages = array();
$placeHolderslanguages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslanguages["English"] = array();
	$fieldToolTipslanguages["English"] = array();
	$placeHolderslanguages["English"] = array();
	$pageTitleslanguages["English"] = array();
	$fieldLabelslanguages["English"]["language_id"] = "Language Id";
	$fieldToolTipslanguages["English"]["language_id"] = "";
	$placeHolderslanguages["English"]["language_id"] = "";
	$fieldLabelslanguages["English"]["language_name"] = "Language Name";
	$fieldToolTipslanguages["English"]["language_name"] = "";
	$placeHolderslanguages["English"]["language_name"] = "";
	$fieldLabelslanguages["English"]["iso_code"] = "Iso Code";
	$fieldToolTipslanguages["English"]["iso_code"] = "";
	$placeHolderslanguages["English"]["iso_code"] = "";
	$fieldLabelslanguages["English"]["created_at"] = "Created At";
	$fieldToolTipslanguages["English"]["created_at"] = "";
	$placeHolderslanguages["English"]["created_at"] = "";
	if (count($fieldToolTipslanguages["English"]))
		$tdatalanguages[".isUseToolTips"] = true;
}


	$tdatalanguages[".NCSearch"] = true;



$tdatalanguages[".shortTableName"] = "languages";
$tdatalanguages[".nSecOptions"] = 0;

$tdatalanguages[".mainTableOwnerID"] = "";
$tdatalanguages[".entityType"] = 0;
$tdatalanguages[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalanguages[".strOriginalTableName"] = "public.languages";

	



$tdatalanguages[".showAddInPopup"] = false;

$tdatalanguages[".showEditInPopup"] = false;

$tdatalanguages[".showViewInPopup"] = false;

$tdatalanguages[".listAjax"] = false;
//	temporary
//$tdatalanguages[".listAjax"] = false;

	$tdatalanguages[".audit"] = false;

	$tdatalanguages[".locking"] = false;


$pages = $tdatalanguages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalanguages[".edit"] = true;
	$tdatalanguages[".afterEditAction"] = 1;
	$tdatalanguages[".closePopupAfterEdit"] = 1;
	$tdatalanguages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalanguages[".add"] = true;
$tdatalanguages[".afterAddAction"] = 1;
$tdatalanguages[".closePopupAfterAdd"] = 1;
$tdatalanguages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalanguages[".list"] = true;
}



$tdatalanguages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalanguages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalanguages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalanguages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalanguages[".printFriendly"] = true;
}



$tdatalanguages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalanguages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalanguages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalanguages[".isUseAjaxSuggest"] = true;





$tdatalanguages[".ajaxCodeSnippetAdded"] = false;

$tdatalanguages[".buttonsAdded"] = false;

$tdatalanguages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalanguages[".isUseTimeForSearch"] = false;


$tdatalanguages[".badgeColor"] = "CD5C5C";


$tdatalanguages[".allSearchFields"] = array();
$tdatalanguages[".filterFields"] = array();
$tdatalanguages[".requiredSearchFields"] = array();

$tdatalanguages[".googleLikeFields"] = array();
$tdatalanguages[".googleLikeFields"][] = "language_id";
$tdatalanguages[".googleLikeFields"][] = "language_name";
$tdatalanguages[".googleLikeFields"][] = "iso_code";
$tdatalanguages[".googleLikeFields"][] = "created_at";



$tdatalanguages[".tableType"] = "list";

$tdatalanguages[".printerPageOrientation"] = 0;
$tdatalanguages[".nPrinterPageScale"] = 100;

$tdatalanguages[".nPrinterSplitRecords"] = 40;

$tdatalanguages[".geocodingEnabled"] = false;










$tdatalanguages[".pageSize"] = 20;

$tdatalanguages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalanguages[".strOrderBy"] = $tstrOrderBy;

$tdatalanguages[".orderindexes"] = array();


$tdatalanguages[".sqlHead"] = "SELECT language_id,  	language_name,  	iso_code,  	created_at";
$tdatalanguages[".sqlFrom"] = "FROM \"public\".languages";
$tdatalanguages[".sqlWhereExpr"] = "";
$tdatalanguages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalanguages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalanguages[".arrGroupsPerPage"] = $arrGPP;

$tdatalanguages[".highlightSearchResults"] = true;

$tableKeyslanguages = array();
$tableKeyslanguages[] = "language_id";
$tdatalanguages[".Keys"] = $tableKeyslanguages;


$tdatalanguages[".hideMobileList"] = array();




//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "public.languages";
	$fdata["Label"] = GetFieldLabel("public_languages","language_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatalanguages["language_id"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "language_id";
//	language_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "language_name";
	$fdata["GoodName"] = "language_name";
	$fdata["ownerTable"] = "public.languages";
	$fdata["Label"] = GetFieldLabel("public_languages","language_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "language_name";

		$fdata["sourceSingle"] = "language_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "language_name";

	
	
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


	$tdatalanguages["language_name"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "language_name";
//	iso_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "iso_code";
	$fdata["GoodName"] = "iso_code";
	$fdata["ownerTable"] = "public.languages";
	$fdata["Label"] = GetFieldLabel("public_languages","iso_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "iso_code";

		$fdata["sourceSingle"] = "iso_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iso_code";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatalanguages["iso_code"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "iso_code";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.languages";
	$fdata["Label"] = GetFieldLabel("public_languages","created_at");
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


	$tdatalanguages["created_at"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "created_at";


$tables_data["public.languages"]=&$tdatalanguages;
$field_labels["public_languages"] = &$fieldLabelslanguages;
$fieldToolTips["public_languages"] = &$fieldToolTipslanguages;
$placeHolders["public_languages"] = &$placeHolderslanguages;
$page_titles["public_languages"] = &$pageTitleslanguages;


changeTextControlsToDate( "public.languages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.languages"] = array();
//	public.training_languages
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_languages";
		$detailsParam["dOriginalTable"] = "public.training_languages";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_languages";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_languages");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.languages"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.languages"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.languages"][$dIndex]["masterKeys"][]="language_id";

				$detailsTablesData["public.languages"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.languages"][$dIndex]["detailKeys"][]="language_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.languages"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_languages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "language_id,  	language_name,  	iso_code,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".languages";
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
	"m_strName" => "language_id",
	"m_strTable" => "public.languages",
	"m_srcTableName" => "public.languages"
));

$proto6["m_sql"] = "language_id";
$proto6["m_srcTableName"] = "public.languages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "language_name",
	"m_strTable" => "public.languages",
	"m_srcTableName" => "public.languages"
));

$proto8["m_sql"] = "language_name";
$proto8["m_srcTableName"] = "public.languages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "iso_code",
	"m_strTable" => "public.languages",
	"m_srcTableName" => "public.languages"
));

$proto10["m_sql"] = "iso_code";
$proto10["m_srcTableName"] = "public.languages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.languages",
	"m_srcTableName" => "public.languages"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.languages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.languages";
$proto15["m_srcTableName"] = "public.languages";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "language_id";
$proto15["m_columns"][] = "language_name";
$proto15["m_columns"][] = "iso_code";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".languages";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.languages";
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
$proto0["m_srcTableName"]="public.languages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_languages = createSqlQuery_languages();


	
		;

				

$tdatalanguages[".sqlquery"] = $queryData_languages;



$tdatalanguages[".hasEvents"] = false;

?>