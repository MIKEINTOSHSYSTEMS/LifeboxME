<?php
$tdataquarters = array();
$tdataquarters[".searchableFields"] = array();
$tdataquarters[".ShortName"] = "quarters";
$tdataquarters[".OwnerID"] = "";
$tdataquarters[".OriginalTable"] = "public.quarters";


$tdataquarters[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataquarters[".originalPagesByType"] = $tdataquarters[".pagesByType"];
$tdataquarters[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataquarters[".originalPages"] = $tdataquarters[".pages"];
$tdataquarters[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataquarters[".originalDefaultPages"] = $tdataquarters[".defaultPages"];

//	field labels
$fieldLabelsquarters = array();
$fieldToolTipsquarters = array();
$pageTitlesquarters = array();
$placeHoldersquarters = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsquarters["English"] = array();
	$fieldToolTipsquarters["English"] = array();
	$placeHoldersquarters["English"] = array();
	$pageTitlesquarters["English"] = array();
	$fieldLabelsquarters["English"]["quarter_id"] = "Quarter Id";
	$fieldToolTipsquarters["English"]["quarter_id"] = "";
	$placeHoldersquarters["English"]["quarter_id"] = "";
	$fieldLabelsquarters["English"]["quarter_name"] = "Quarter Name";
	$fieldToolTipsquarters["English"]["quarter_name"] = "";
	$placeHoldersquarters["English"]["quarter_name"] = "";
	if (count($fieldToolTipsquarters["English"]))
		$tdataquarters[".isUseToolTips"] = true;
}


	$tdataquarters[".NCSearch"] = true;



$tdataquarters[".shortTableName"] = "quarters";
$tdataquarters[".nSecOptions"] = 0;

$tdataquarters[".mainTableOwnerID"] = "";
$tdataquarters[".entityType"] = 0;
$tdataquarters[".connId"] = "lifebox_mesystem_at_localhost";


$tdataquarters[".strOriginalTableName"] = "public.quarters";

	



$tdataquarters[".showAddInPopup"] = false;

$tdataquarters[".showEditInPopup"] = false;

$tdataquarters[".showViewInPopup"] = false;

$tdataquarters[".listAjax"] = false;
//	temporary
//$tdataquarters[".listAjax"] = false;

	$tdataquarters[".audit"] = false;

	$tdataquarters[".locking"] = false;


$pages = $tdataquarters[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataquarters[".edit"] = true;
	$tdataquarters[".afterEditAction"] = 1;
	$tdataquarters[".closePopupAfterEdit"] = 1;
	$tdataquarters[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataquarters[".add"] = true;
$tdataquarters[".afterAddAction"] = 1;
$tdataquarters[".closePopupAfterAdd"] = 1;
$tdataquarters[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataquarters[".list"] = true;
}



$tdataquarters[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataquarters[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataquarters[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataquarters[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataquarters[".printFriendly"] = true;
}



$tdataquarters[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataquarters[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataquarters[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataquarters[".isUseAjaxSuggest"] = true;





$tdataquarters[".ajaxCodeSnippetAdded"] = false;

$tdataquarters[".buttonsAdded"] = false;

$tdataquarters[".addPageEvents"] = false;

// use timepicker for search panel
$tdataquarters[".isUseTimeForSearch"] = false;


$tdataquarters[".badgeColor"] = "4682B4";


$tdataquarters[".allSearchFields"] = array();
$tdataquarters[".filterFields"] = array();
$tdataquarters[".requiredSearchFields"] = array();

$tdataquarters[".googleLikeFields"] = array();
$tdataquarters[".googleLikeFields"][] = "quarter_id";
$tdataquarters[".googleLikeFields"][] = "quarter_name";



$tdataquarters[".tableType"] = "list";

$tdataquarters[".printerPageOrientation"] = 0;
$tdataquarters[".nPrinterPageScale"] = 100;

$tdataquarters[".nPrinterSplitRecords"] = 40;

$tdataquarters[".geocodingEnabled"] = false;










$tdataquarters[".pageSize"] = 20;

$tdataquarters[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataquarters[".strOrderBy"] = $tstrOrderBy;

$tdataquarters[".orderindexes"] = array();


$tdataquarters[".sqlHead"] = "SELECT quarter_id,  	quarter_name";
$tdataquarters[".sqlFrom"] = "FROM \"public\".quarters";
$tdataquarters[".sqlWhereExpr"] = "";
$tdataquarters[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataquarters[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataquarters[".arrGroupsPerPage"] = $arrGPP;

$tdataquarters[".highlightSearchResults"] = true;

$tableKeysquarters = array();
$tableKeysquarters[] = "quarter_id";
$tdataquarters[".Keys"] = $tableKeysquarters;


$tdataquarters[".hideMobileList"] = array();




//	quarter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "quarter_id";
	$fdata["GoodName"] = "quarter_id";
	$fdata["ownerTable"] = "public.quarters";
	$fdata["Label"] = GetFieldLabel("public_quarters","quarter_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "quarter_id";

		$fdata["sourceSingle"] = "quarter_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quarter_id";

	
	
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


	$tdataquarters["quarter_id"] = $fdata;
		$tdataquarters[".searchableFields"][] = "quarter_id";
//	quarter_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "quarter_name";
	$fdata["GoodName"] = "quarter_name";
	$fdata["ownerTable"] = "public.quarters";
	$fdata["Label"] = GetFieldLabel("public_quarters","quarter_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "quarter_name";

		$fdata["sourceSingle"] = "quarter_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quarter_name";

	
	
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


	$tdataquarters["quarter_name"] = $fdata;
		$tdataquarters[".searchableFields"][] = "quarter_name";


$tables_data["public.quarters"]=&$tdataquarters;
$field_labels["public_quarters"] = &$fieldLabelsquarters;
$fieldToolTips["public_quarters"] = &$fieldToolTipsquarters;
$placeHolders["public_quarters"] = &$placeHoldersquarters;
$page_titles["public_quarters"] = &$pageTitlesquarters;


changeTextControlsToDate( "public.quarters" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.quarters"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.quarters"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_quarters()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "quarter_id,  	quarter_name";
$proto0["m_strFrom"] = "FROM \"public\".quarters";
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
	"m_strName" => "quarter_id",
	"m_strTable" => "public.quarters",
	"m_srcTableName" => "public.quarters"
));

$proto6["m_sql"] = "quarter_id";
$proto6["m_srcTableName"] = "public.quarters";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter_name",
	"m_strTable" => "public.quarters",
	"m_srcTableName" => "public.quarters"
));

$proto8["m_sql"] = "quarter_name";
$proto8["m_srcTableName"] = "public.quarters";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.quarters";
$proto11["m_srcTableName"] = "public.quarters";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "quarter_id";
$proto11["m_columns"][] = "quarter_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".quarters";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.quarters";
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
$proto0["m_srcTableName"]="public.quarters";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_quarters = createSqlQuery_quarters();


	
		;

		

$tdataquarters[".sqlquery"] = $queryData_quarters;



$tdataquarters[".hasEvents"] = false;

?>