<?php
$tdataperiod_types = array();
$tdataperiod_types[".searchableFields"] = array();
$tdataperiod_types[".ShortName"] = "period_types";
$tdataperiod_types[".OwnerID"] = "";
$tdataperiod_types[".OriginalTable"] = "public.period_types";


$tdataperiod_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataperiod_types[".originalPagesByType"] = $tdataperiod_types[".pagesByType"];
$tdataperiod_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperiod_types[".originalPages"] = $tdataperiod_types[".pages"];
$tdataperiod_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataperiod_types[".originalDefaultPages"] = $tdataperiod_types[".defaultPages"];

//	field labels
$fieldLabelsperiod_types = array();
$fieldToolTipsperiod_types = array();
$pageTitlesperiod_types = array();
$placeHoldersperiod_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperiod_types["English"] = array();
	$fieldToolTipsperiod_types["English"] = array();
	$placeHoldersperiod_types["English"] = array();
	$pageTitlesperiod_types["English"] = array();
	$fieldLabelsperiod_types["English"]["period_id"] = "Period Id";
	$fieldToolTipsperiod_types["English"]["period_id"] = "";
	$placeHoldersperiod_types["English"]["period_id"] = "";
	$fieldLabelsperiod_types["English"]["period_name"] = "Period Name";
	$fieldToolTipsperiod_types["English"]["period_name"] = "";
	$placeHoldersperiod_types["English"]["period_name"] = "";
	if (count($fieldToolTipsperiod_types["English"]))
		$tdataperiod_types[".isUseToolTips"] = true;
}


	$tdataperiod_types[".NCSearch"] = true;



$tdataperiod_types[".shortTableName"] = "period_types";
$tdataperiod_types[".nSecOptions"] = 0;

$tdataperiod_types[".mainTableOwnerID"] = "";
$tdataperiod_types[".entityType"] = 0;
$tdataperiod_types[".connId"] = "lifebox_mesystem_at_localhost";


$tdataperiod_types[".strOriginalTableName"] = "public.period_types";

	



$tdataperiod_types[".showAddInPopup"] = false;

$tdataperiod_types[".showEditInPopup"] = false;

$tdataperiod_types[".showViewInPopup"] = false;

$tdataperiod_types[".listAjax"] = false;
//	temporary
//$tdataperiod_types[".listAjax"] = false;

	$tdataperiod_types[".audit"] = false;

	$tdataperiod_types[".locking"] = false;


$pages = $tdataperiod_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperiod_types[".edit"] = true;
	$tdataperiod_types[".afterEditAction"] = 1;
	$tdataperiod_types[".closePopupAfterEdit"] = 1;
	$tdataperiod_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperiod_types[".add"] = true;
$tdataperiod_types[".afterAddAction"] = 1;
$tdataperiod_types[".closePopupAfterAdd"] = 1;
$tdataperiod_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperiod_types[".list"] = true;
}



$tdataperiod_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperiod_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperiod_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperiod_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperiod_types[".printFriendly"] = true;
}



$tdataperiod_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperiod_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperiod_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperiod_types[".isUseAjaxSuggest"] = true;



			

$tdataperiod_types[".ajaxCodeSnippetAdded"] = false;

$tdataperiod_types[".buttonsAdded"] = false;

$tdataperiod_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperiod_types[".isUseTimeForSearch"] = false;


$tdataperiod_types[".badgeColor"] = "CD853F";


$tdataperiod_types[".allSearchFields"] = array();
$tdataperiod_types[".filterFields"] = array();
$tdataperiod_types[".requiredSearchFields"] = array();

$tdataperiod_types[".googleLikeFields"] = array();
$tdataperiod_types[".googleLikeFields"][] = "period_id";
$tdataperiod_types[".googleLikeFields"][] = "period_name";



$tdataperiod_types[".tableType"] = "list";

$tdataperiod_types[".printerPageOrientation"] = 0;
$tdataperiod_types[".nPrinterPageScale"] = 100;

$tdataperiod_types[".nPrinterSplitRecords"] = 40;

$tdataperiod_types[".geocodingEnabled"] = false;










$tdataperiod_types[".pageSize"] = 20;

$tdataperiod_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataperiod_types[".strOrderBy"] = $tstrOrderBy;

$tdataperiod_types[".orderindexes"] = array();


$tdataperiod_types[".sqlHead"] = "SELECT period_id,  	period_name";
$tdataperiod_types[".sqlFrom"] = "FROM \"public\".period_types";
$tdataperiod_types[".sqlWhereExpr"] = "";
$tdataperiod_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperiod_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperiod_types[".arrGroupsPerPage"] = $arrGPP;

$tdataperiod_types[".highlightSearchResults"] = true;

$tableKeysperiod_types = array();
$tableKeysperiod_types[] = "period_id";
$tdataperiod_types[".Keys"] = $tableKeysperiod_types;


$tdataperiod_types[".hideMobileList"] = array();




//	period_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "period_id";
	$fdata["GoodName"] = "period_id";
	$fdata["ownerTable"] = "public.period_types";
	$fdata["Label"] = GetFieldLabel("public_period_types","period_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "period_id";

		$fdata["sourceSingle"] = "period_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_id";

	
	
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


	$tdataperiod_types["period_id"] = $fdata;
		$tdataperiod_types[".searchableFields"][] = "period_id";
//	period_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "period_name";
	$fdata["GoodName"] = "period_name";
	$fdata["ownerTable"] = "public.period_types";
	$fdata["Label"] = GetFieldLabel("public_period_types","period_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "period_name";

		$fdata["sourceSingle"] = "period_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_name";

	
	
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


	$tdataperiod_types["period_name"] = $fdata;
		$tdataperiod_types[".searchableFields"][] = "period_name";


$tables_data["public.period_types"]=&$tdataperiod_types;
$field_labels["public_period_types"] = &$fieldLabelsperiod_types;
$fieldToolTips["public_period_types"] = &$fieldToolTipsperiod_types;
$placeHolders["public_period_types"] = &$placeHoldersperiod_types;
$page_titles["public_period_types"] = &$pageTitlesperiod_types;


changeTextControlsToDate( "public.period_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.period_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.period_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_period_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "period_id,  	period_name";
$proto0["m_strFrom"] = "FROM \"public\".period_types";
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
	"m_strName" => "period_id",
	"m_strTable" => "public.period_types",
	"m_srcTableName" => "public.period_types"
));

$proto6["m_sql"] = "period_id";
$proto6["m_srcTableName"] = "public.period_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "period_name",
	"m_strTable" => "public.period_types",
	"m_srcTableName" => "public.period_types"
));

$proto8["m_sql"] = "period_name";
$proto8["m_srcTableName"] = "public.period_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.period_types";
$proto11["m_srcTableName"] = "public.period_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "period_id";
$proto11["m_columns"][] = "period_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".period_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.period_types";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.period_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_period_types = createSqlQuery_period_types();


	
				;

		

$tdataperiod_types[".sqlquery"] = $queryData_period_types;



$tdataperiod_types[".hasEvents"] = false;

?>