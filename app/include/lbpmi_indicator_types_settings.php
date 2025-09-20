<?php
$tdatalbpmi_indicator_types = array();
$tdatalbpmi_indicator_types[".searchableFields"] = array();
$tdatalbpmi_indicator_types[".ShortName"] = "lbpmi_indicator_types";
$tdatalbpmi_indicator_types[".OwnerID"] = "";
$tdatalbpmi_indicator_types[".OriginalTable"] = "public.lbpmi_indicator_types";


$tdatalbpmi_indicator_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_indicator_types[".originalPagesByType"] = $tdatalbpmi_indicator_types[".pagesByType"];
$tdatalbpmi_indicator_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_indicator_types[".originalPages"] = $tdatalbpmi_indicator_types[".pages"];
$tdatalbpmi_indicator_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_indicator_types[".originalDefaultPages"] = $tdatalbpmi_indicator_types[".defaultPages"];

//	field labels
$fieldLabelslbpmi_indicator_types = array();
$fieldToolTipslbpmi_indicator_types = array();
$pageTitleslbpmi_indicator_types = array();
$placeHolderslbpmi_indicator_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_indicator_types["English"] = array();
	$fieldToolTipslbpmi_indicator_types["English"] = array();
	$placeHolderslbpmi_indicator_types["English"] = array();
	$pageTitleslbpmi_indicator_types["English"] = array();
	$fieldLabelslbpmi_indicator_types["English"]["indtype_id"] = "Indtype Id";
	$fieldToolTipslbpmi_indicator_types["English"]["indtype_id"] = "";
	$placeHolderslbpmi_indicator_types["English"]["indtype_id"] = "";
	$fieldLabelslbpmi_indicator_types["English"]["indicator_type"] = "Indicator Type";
	$fieldToolTipslbpmi_indicator_types["English"]["indicator_type"] = "";
	$placeHolderslbpmi_indicator_types["English"]["indicator_type"] = "";
	if (count($fieldToolTipslbpmi_indicator_types["English"]))
		$tdatalbpmi_indicator_types[".isUseToolTips"] = true;
}


	$tdatalbpmi_indicator_types[".NCSearch"] = true;



$tdatalbpmi_indicator_types[".shortTableName"] = "lbpmi_indicator_types";
$tdatalbpmi_indicator_types[".nSecOptions"] = 0;

$tdatalbpmi_indicator_types[".mainTableOwnerID"] = "";
$tdatalbpmi_indicator_types[".entityType"] = 0;
$tdatalbpmi_indicator_types[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_indicator_types[".strOriginalTableName"] = "public.lbpmi_indicator_types";

	



$tdatalbpmi_indicator_types[".showAddInPopup"] = false;

$tdatalbpmi_indicator_types[".showEditInPopup"] = false;

$tdatalbpmi_indicator_types[".showViewInPopup"] = false;

$tdatalbpmi_indicator_types[".listAjax"] = false;
//	temporary
//$tdatalbpmi_indicator_types[".listAjax"] = false;

	$tdatalbpmi_indicator_types[".audit"] = false;

	$tdatalbpmi_indicator_types[".locking"] = false;


$pages = $tdatalbpmi_indicator_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_indicator_types[".edit"] = true;
	$tdatalbpmi_indicator_types[".afterEditAction"] = 1;
	$tdatalbpmi_indicator_types[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_indicator_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_indicator_types[".add"] = true;
$tdatalbpmi_indicator_types[".afterAddAction"] = 1;
$tdatalbpmi_indicator_types[".closePopupAfterAdd"] = 1;
$tdatalbpmi_indicator_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_indicator_types[".list"] = true;
}



$tdatalbpmi_indicator_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_indicator_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_indicator_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_indicator_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_indicator_types[".printFriendly"] = true;
}



$tdatalbpmi_indicator_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_indicator_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_indicator_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_indicator_types[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_indicator_types[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_indicator_types[".buttonsAdded"] = false;

$tdatalbpmi_indicator_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_indicator_types[".isUseTimeForSearch"] = false;


$tdatalbpmi_indicator_types[".badgeColor"] = "E07878";


$tdatalbpmi_indicator_types[".allSearchFields"] = array();
$tdatalbpmi_indicator_types[".filterFields"] = array();
$tdatalbpmi_indicator_types[".requiredSearchFields"] = array();

$tdatalbpmi_indicator_types[".googleLikeFields"] = array();
$tdatalbpmi_indicator_types[".googleLikeFields"][] = "indtype_id";
$tdatalbpmi_indicator_types[".googleLikeFields"][] = "indicator_type";



$tdatalbpmi_indicator_types[".tableType"] = "list";

$tdatalbpmi_indicator_types[".printerPageOrientation"] = 0;
$tdatalbpmi_indicator_types[".nPrinterPageScale"] = 100;

$tdatalbpmi_indicator_types[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_indicator_types[".geocodingEnabled"] = false;










$tdatalbpmi_indicator_types[".pageSize"] = 20;

$tdatalbpmi_indicator_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_indicator_types[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_indicator_types[".orderindexes"] = array();


$tdatalbpmi_indicator_types[".sqlHead"] = "SELECT indtype_id,  	indicator_type";
$tdatalbpmi_indicator_types[".sqlFrom"] = "FROM \"public\".lbpmi_indicator_types";
$tdatalbpmi_indicator_types[".sqlWhereExpr"] = "";
$tdatalbpmi_indicator_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_indicator_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_indicator_types[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_indicator_types[".highlightSearchResults"] = true;

$tableKeyslbpmi_indicator_types = array();
$tableKeyslbpmi_indicator_types[] = "indtype_id";
$tdatalbpmi_indicator_types[".Keys"] = $tableKeyslbpmi_indicator_types;


$tdatalbpmi_indicator_types[".hideMobileList"] = array();




//	indtype_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indtype_id";
	$fdata["GoodName"] = "indtype_id";
	$fdata["ownerTable"] = "public.lbpmi_indicator_types";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_types","indtype_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indtype_id";

		$fdata["sourceSingle"] = "indtype_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indtype_id";

	
	
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


	$tdatalbpmi_indicator_types["indtype_id"] = $fdata;
		$tdatalbpmi_indicator_types[".searchableFields"][] = "indtype_id";
//	indicator_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_type";
	$fdata["GoodName"] = "indicator_type";
	$fdata["ownerTable"] = "public.lbpmi_indicator_types";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_types","indicator_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_type";

		$fdata["sourceSingle"] = "indicator_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_type";

	
	
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


	$tdatalbpmi_indicator_types["indicator_type"] = $fdata;
		$tdatalbpmi_indicator_types[".searchableFields"][] = "indicator_type";


$tables_data["public.lbpmi_indicator_types"]=&$tdatalbpmi_indicator_types;
$field_labels["public_lbpmi_indicator_types"] = &$fieldLabelslbpmi_indicator_types;
$fieldToolTips["public_lbpmi_indicator_types"] = &$fieldToolTipslbpmi_indicator_types;
$placeHolders["public_lbpmi_indicator_types"] = &$placeHolderslbpmi_indicator_types;
$page_titles["public_lbpmi_indicator_types"] = &$pageTitleslbpmi_indicator_types;


changeTextControlsToDate( "public.lbpmi_indicator_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_indicator_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_indicator_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_indicator_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indtype_id,  	indicator_type";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_indicator_types";
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
	"m_strName" => "indtype_id",
	"m_strTable" => "public.lbpmi_indicator_types",
	"m_srcTableName" => "public.lbpmi_indicator_types"
));

$proto6["m_sql"] = "indtype_id";
$proto6["m_srcTableName"] = "public.lbpmi_indicator_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_type",
	"m_strTable" => "public.lbpmi_indicator_types",
	"m_srcTableName" => "public.lbpmi_indicator_types"
));

$proto8["m_sql"] = "indicator_type";
$proto8["m_srcTableName"] = "public.lbpmi_indicator_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.lbpmi_indicator_types";
$proto11["m_srcTableName"] = "public.lbpmi_indicator_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "indtype_id";
$proto11["m_columns"][] = "indicator_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".lbpmi_indicator_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.lbpmi_indicator_types";
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
$proto0["m_srcTableName"]="public.lbpmi_indicator_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_indicator_types = createSqlQuery_lbpmi_indicator_types();


	
				;

		

$tdatalbpmi_indicator_types[".sqlquery"] = $queryData_lbpmi_indicator_types;



$tdatalbpmi_indicator_types[".hasEvents"] = false;

?>