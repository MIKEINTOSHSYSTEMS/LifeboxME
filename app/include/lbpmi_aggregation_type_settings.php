<?php
$tdatalbpmi_aggregation_type = array();
$tdatalbpmi_aggregation_type[".searchableFields"] = array();
$tdatalbpmi_aggregation_type[".ShortName"] = "lbpmi_aggregation_type";
$tdatalbpmi_aggregation_type[".OwnerID"] = "";
$tdatalbpmi_aggregation_type[".OriginalTable"] = "public.lbpmi_aggregation_type";


$tdatalbpmi_aggregation_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_aggregation_type[".originalPagesByType"] = $tdatalbpmi_aggregation_type[".pagesByType"];
$tdatalbpmi_aggregation_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_aggregation_type[".originalPages"] = $tdatalbpmi_aggregation_type[".pages"];
$tdatalbpmi_aggregation_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_aggregation_type[".originalDefaultPages"] = $tdatalbpmi_aggregation_type[".defaultPages"];

//	field labels
$fieldLabelslbpmi_aggregation_type = array();
$fieldToolTipslbpmi_aggregation_type = array();
$pageTitleslbpmi_aggregation_type = array();
$placeHolderslbpmi_aggregation_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_aggregation_type["English"] = array();
	$fieldToolTipslbpmi_aggregation_type["English"] = array();
	$placeHolderslbpmi_aggregation_type["English"] = array();
	$pageTitleslbpmi_aggregation_type["English"] = array();
	$fieldLabelslbpmi_aggregation_type["English"]["agg_id"] = "Agg Id";
	$fieldToolTipslbpmi_aggregation_type["English"]["agg_id"] = "";
	$placeHolderslbpmi_aggregation_type["English"]["agg_id"] = "";
	$fieldLabelslbpmi_aggregation_type["English"]["aggregation_type"] = "Aggregation Type";
	$fieldToolTipslbpmi_aggregation_type["English"]["aggregation_type"] = "";
	$placeHolderslbpmi_aggregation_type["English"]["aggregation_type"] = "";
	if (count($fieldToolTipslbpmi_aggregation_type["English"]))
		$tdatalbpmi_aggregation_type[".isUseToolTips"] = true;
}


	$tdatalbpmi_aggregation_type[".NCSearch"] = true;



$tdatalbpmi_aggregation_type[".shortTableName"] = "lbpmi_aggregation_type";
$tdatalbpmi_aggregation_type[".nSecOptions"] = 0;

$tdatalbpmi_aggregation_type[".mainTableOwnerID"] = "";
$tdatalbpmi_aggregation_type[".entityType"] = 0;
$tdatalbpmi_aggregation_type[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_aggregation_type[".strOriginalTableName"] = "public.lbpmi_aggregation_type";

	



$tdatalbpmi_aggregation_type[".showAddInPopup"] = false;

$tdatalbpmi_aggregation_type[".showEditInPopup"] = false;

$tdatalbpmi_aggregation_type[".showViewInPopup"] = false;

$tdatalbpmi_aggregation_type[".listAjax"] = false;
//	temporary
//$tdatalbpmi_aggregation_type[".listAjax"] = false;

	$tdatalbpmi_aggregation_type[".audit"] = false;

	$tdatalbpmi_aggregation_type[".locking"] = false;


$pages = $tdatalbpmi_aggregation_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_aggregation_type[".edit"] = true;
	$tdatalbpmi_aggregation_type[".afterEditAction"] = 1;
	$tdatalbpmi_aggregation_type[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_aggregation_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_aggregation_type[".add"] = true;
$tdatalbpmi_aggregation_type[".afterAddAction"] = 1;
$tdatalbpmi_aggregation_type[".closePopupAfterAdd"] = 1;
$tdatalbpmi_aggregation_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_aggregation_type[".list"] = true;
}



$tdatalbpmi_aggregation_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_aggregation_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_aggregation_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_aggregation_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_aggregation_type[".printFriendly"] = true;
}



$tdatalbpmi_aggregation_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_aggregation_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_aggregation_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_aggregation_type[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_aggregation_type[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_aggregation_type[".buttonsAdded"] = false;

$tdatalbpmi_aggregation_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_aggregation_type[".isUseTimeForSearch"] = false;


$tdatalbpmi_aggregation_type[".badgeColor"] = "DAA520";


$tdatalbpmi_aggregation_type[".allSearchFields"] = array();
$tdatalbpmi_aggregation_type[".filterFields"] = array();
$tdatalbpmi_aggregation_type[".requiredSearchFields"] = array();

$tdatalbpmi_aggregation_type[".googleLikeFields"] = array();
$tdatalbpmi_aggregation_type[".googleLikeFields"][] = "agg_id";
$tdatalbpmi_aggregation_type[".googleLikeFields"][] = "aggregation_type";



$tdatalbpmi_aggregation_type[".tableType"] = "list";

$tdatalbpmi_aggregation_type[".printerPageOrientation"] = 0;
$tdatalbpmi_aggregation_type[".nPrinterPageScale"] = 100;

$tdatalbpmi_aggregation_type[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_aggregation_type[".geocodingEnabled"] = false;










$tdatalbpmi_aggregation_type[".pageSize"] = 20;

$tdatalbpmi_aggregation_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_aggregation_type[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_aggregation_type[".orderindexes"] = array();


$tdatalbpmi_aggregation_type[".sqlHead"] = "SELECT agg_id,  	aggregation_type";
$tdatalbpmi_aggregation_type[".sqlFrom"] = "FROM \"public\".lbpmi_aggregation_type";
$tdatalbpmi_aggregation_type[".sqlWhereExpr"] = "";
$tdatalbpmi_aggregation_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_aggregation_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_aggregation_type[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_aggregation_type[".highlightSearchResults"] = true;

$tableKeyslbpmi_aggregation_type = array();
$tableKeyslbpmi_aggregation_type[] = "agg_id";
$tdatalbpmi_aggregation_type[".Keys"] = $tableKeyslbpmi_aggregation_type;


$tdatalbpmi_aggregation_type[".hideMobileList"] = array();




//	agg_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agg_id";
	$fdata["GoodName"] = "agg_id";
	$fdata["ownerTable"] = "public.lbpmi_aggregation_type";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_aggregation_type","agg_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "agg_id";

		$fdata["sourceSingle"] = "agg_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agg_id";

	
	
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


	$tdatalbpmi_aggregation_type["agg_id"] = $fdata;
		$tdatalbpmi_aggregation_type[".searchableFields"][] = "agg_id";
//	aggregation_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aggregation_type";
	$fdata["GoodName"] = "aggregation_type";
	$fdata["ownerTable"] = "public.lbpmi_aggregation_type";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_aggregation_type","aggregation_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "aggregation_type";

		$fdata["sourceSingle"] = "aggregation_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aggregation_type";

	
	
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


	$tdatalbpmi_aggregation_type["aggregation_type"] = $fdata;
		$tdatalbpmi_aggregation_type[".searchableFields"][] = "aggregation_type";


$tables_data["public.lbpmi_aggregation_type"]=&$tdatalbpmi_aggregation_type;
$field_labels["public_lbpmi_aggregation_type"] = &$fieldLabelslbpmi_aggregation_type;
$fieldToolTips["public_lbpmi_aggregation_type"] = &$fieldToolTipslbpmi_aggregation_type;
$placeHolders["public_lbpmi_aggregation_type"] = &$placeHolderslbpmi_aggregation_type;
$page_titles["public_lbpmi_aggregation_type"] = &$pageTitleslbpmi_aggregation_type;


changeTextControlsToDate( "public.lbpmi_aggregation_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_aggregation_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_aggregation_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_aggregation_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "agg_id,  	aggregation_type";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_aggregation_type";
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
	"m_strName" => "agg_id",
	"m_strTable" => "public.lbpmi_aggregation_type",
	"m_srcTableName" => "public.lbpmi_aggregation_type"
));

$proto6["m_sql"] = "agg_id";
$proto6["m_srcTableName"] = "public.lbpmi_aggregation_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "aggregation_type",
	"m_strTable" => "public.lbpmi_aggregation_type",
	"m_srcTableName" => "public.lbpmi_aggregation_type"
));

$proto8["m_sql"] = "aggregation_type";
$proto8["m_srcTableName"] = "public.lbpmi_aggregation_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.lbpmi_aggregation_type";
$proto11["m_srcTableName"] = "public.lbpmi_aggregation_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "agg_id";
$proto11["m_columns"][] = "aggregation_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".lbpmi_aggregation_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.lbpmi_aggregation_type";
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
$proto0["m_srcTableName"]="public.lbpmi_aggregation_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_aggregation_type = createSqlQuery_lbpmi_aggregation_type();


	
				;

		

$tdatalbpmi_aggregation_type[".sqlquery"] = $queryData_lbpmi_aggregation_type;



$tdatalbpmi_aggregation_type[".hasEvents"] = false;

?>