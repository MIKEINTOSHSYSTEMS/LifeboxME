<?php
$tdatamonths = array();
$tdatamonths[".searchableFields"] = array();
$tdatamonths[".ShortName"] = "months";
$tdatamonths[".OwnerID"] = "";
$tdatamonths[".OriginalTable"] = "public.months";


$tdatamonths[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamonths[".originalPagesByType"] = $tdatamonths[".pagesByType"];
$tdatamonths[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamonths[".originalPages"] = $tdatamonths[".pages"];
$tdatamonths[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamonths[".originalDefaultPages"] = $tdatamonths[".defaultPages"];

//	field labels
$fieldLabelsmonths = array();
$fieldToolTipsmonths = array();
$pageTitlesmonths = array();
$placeHoldersmonths = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmonths["English"] = array();
	$fieldToolTipsmonths["English"] = array();
	$placeHoldersmonths["English"] = array();
	$pageTitlesmonths["English"] = array();
	$fieldLabelsmonths["English"]["id"] = "Id";
	$fieldToolTipsmonths["English"]["id"] = "";
	$placeHoldersmonths["English"]["id"] = "";
	$fieldLabelsmonths["English"]["month"] = "Month";
	$fieldToolTipsmonths["English"]["month"] = "";
	$placeHoldersmonths["English"]["month"] = "";
	if (count($fieldToolTipsmonths["English"]))
		$tdatamonths[".isUseToolTips"] = true;
}


	$tdatamonths[".NCSearch"] = true;



$tdatamonths[".shortTableName"] = "months";
$tdatamonths[".nSecOptions"] = 0;

$tdatamonths[".mainTableOwnerID"] = "";
$tdatamonths[".entityType"] = 0;
$tdatamonths[".connId"] = "lifebox_mesystem_at_localhost";


$tdatamonths[".strOriginalTableName"] = "public.months";

	



$tdatamonths[".showAddInPopup"] = false;

$tdatamonths[".showEditInPopup"] = false;

$tdatamonths[".showViewInPopup"] = false;

$tdatamonths[".listAjax"] = false;
//	temporary
//$tdatamonths[".listAjax"] = false;

	$tdatamonths[".audit"] = true;

	$tdatamonths[".locking"] = false;


$pages = $tdatamonths[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamonths[".edit"] = true;
	$tdatamonths[".afterEditAction"] = 1;
	$tdatamonths[".closePopupAfterEdit"] = 1;
	$tdatamonths[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamonths[".add"] = true;
$tdatamonths[".afterAddAction"] = 1;
$tdatamonths[".closePopupAfterAdd"] = 1;
$tdatamonths[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamonths[".list"] = true;
}



$tdatamonths[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamonths[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamonths[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamonths[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamonths[".printFriendly"] = true;
}



$tdatamonths[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamonths[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamonths[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamonths[".isUseAjaxSuggest"] = true;



			

$tdatamonths[".ajaxCodeSnippetAdded"] = false;

$tdatamonths[".buttonsAdded"] = false;

$tdatamonths[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamonths[".isUseTimeForSearch"] = false;


$tdatamonths[".badgeColor"] = "BC8F8F";


$tdatamonths[".allSearchFields"] = array();
$tdatamonths[".filterFields"] = array();
$tdatamonths[".requiredSearchFields"] = array();

$tdatamonths[".googleLikeFields"] = array();
$tdatamonths[".googleLikeFields"][] = "id";
$tdatamonths[".googleLikeFields"][] = "month";



$tdatamonths[".tableType"] = "list";

$tdatamonths[".printerPageOrientation"] = 0;
$tdatamonths[".nPrinterPageScale"] = 100;

$tdatamonths[".nPrinterSplitRecords"] = 40;

$tdatamonths[".geocodingEnabled"] = false;










$tdatamonths[".pageSize"] = 20;

$tdatamonths[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamonths[".strOrderBy"] = $tstrOrderBy;

$tdatamonths[".orderindexes"] = array();


$tdatamonths[".sqlHead"] = "SELECT id,  	\"month\"";
$tdatamonths[".sqlFrom"] = "FROM \"public\".months";
$tdatamonths[".sqlWhereExpr"] = "";
$tdatamonths[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamonths[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamonths[".arrGroupsPerPage"] = $arrGPP;

$tdatamonths[".highlightSearchResults"] = true;

$tableKeysmonths = array();
$tableKeysmonths[] = "id";
$tdatamonths[".Keys"] = $tableKeysmonths;


$tdatamonths[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.months";
	$fdata["Label"] = GetFieldLabel("public_months","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatamonths["id"] = $fdata;
		$tdatamonths[".searchableFields"][] = "id";
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "public.months";
	$fdata["Label"] = GetFieldLabel("public_months","month");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "month";

		$fdata["sourceSingle"] = "month";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"month\"";

	
	
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


	$tdatamonths["month"] = $fdata;
		$tdatamonths[".searchableFields"][] = "month";


$tables_data["public.months"]=&$tdatamonths;
$field_labels["public_months"] = &$fieldLabelsmonths;
$fieldToolTips["public_months"] = &$fieldToolTipsmonths;
$placeHolders["public_months"] = &$placeHoldersmonths;
$page_titles["public_months"] = &$pageTitlesmonths;


changeTextControlsToDate( "public.months" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.months"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.months"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_months()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	\"month\"";
$proto0["m_strFrom"] = "FROM \"public\".months";
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
	"m_strName" => "id",
	"m_strTable" => "public.months",
	"m_srcTableName" => "public.months"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.months";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "month",
	"m_strTable" => "public.months",
	"m_srcTableName" => "public.months"
));

$proto8["m_sql"] = "\"month\"";
$proto8["m_srcTableName"] = "public.months";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.months";
$proto11["m_srcTableName"] = "public.months";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "month";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".months";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.months";
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
$proto0["m_srcTableName"]="public.months";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_months = createSqlQuery_months();


	
				;

		

$tdatamonths[".sqlquery"] = $queryData_months;



$tdatamonths[".hasEvents"] = false;

?>