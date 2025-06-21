<?php
$tdatatransaction_types = array();
$tdatatransaction_types[".searchableFields"] = array();
$tdatatransaction_types[".ShortName"] = "transaction_types";
$tdatatransaction_types[".OwnerID"] = "";
$tdatatransaction_types[".OriginalTable"] = "public.transaction_types";


$tdatatransaction_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatransaction_types[".originalPagesByType"] = $tdatatransaction_types[".pagesByType"];
$tdatatransaction_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatransaction_types[".originalPages"] = $tdatatransaction_types[".pages"];
$tdatatransaction_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatransaction_types[".originalDefaultPages"] = $tdatatransaction_types[".defaultPages"];

//	field labels
$fieldLabelstransaction_types = array();
$fieldToolTipstransaction_types = array();
$pageTitlestransaction_types = array();
$placeHolderstransaction_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransaction_types["English"] = array();
	$fieldToolTipstransaction_types["English"] = array();
	$placeHolderstransaction_types["English"] = array();
	$pageTitlestransaction_types["English"] = array();
	$fieldLabelstransaction_types["English"]["id"] = "Id";
	$fieldToolTipstransaction_types["English"]["id"] = "";
	$placeHolderstransaction_types["English"]["id"] = "";
	$fieldLabelstransaction_types["English"]["transaction_name"] = "Transaction Name";
	$fieldToolTipstransaction_types["English"]["transaction_name"] = "";
	$placeHolderstransaction_types["English"]["transaction_name"] = "";
	if (count($fieldToolTipstransaction_types["English"]))
		$tdatatransaction_types[".isUseToolTips"] = true;
}


	$tdatatransaction_types[".NCSearch"] = true;



$tdatatransaction_types[".shortTableName"] = "transaction_types";
$tdatatransaction_types[".nSecOptions"] = 0;

$tdatatransaction_types[".mainTableOwnerID"] = "";
$tdatatransaction_types[".entityType"] = 0;
$tdatatransaction_types[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatransaction_types[".strOriginalTableName"] = "public.transaction_types";

	



$tdatatransaction_types[".showAddInPopup"] = false;

$tdatatransaction_types[".showEditInPopup"] = false;

$tdatatransaction_types[".showViewInPopup"] = false;

$tdatatransaction_types[".listAjax"] = false;
//	temporary
//$tdatatransaction_types[".listAjax"] = false;

	$tdatatransaction_types[".audit"] = false;

	$tdatatransaction_types[".locking"] = false;


$pages = $tdatatransaction_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransaction_types[".edit"] = true;
	$tdatatransaction_types[".afterEditAction"] = 1;
	$tdatatransaction_types[".closePopupAfterEdit"] = 1;
	$tdatatransaction_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransaction_types[".add"] = true;
$tdatatransaction_types[".afterAddAction"] = 1;
$tdatatransaction_types[".closePopupAfterAdd"] = 1;
$tdatatransaction_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransaction_types[".list"] = true;
}



$tdatatransaction_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransaction_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransaction_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransaction_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransaction_types[".printFriendly"] = true;
}



$tdatatransaction_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransaction_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransaction_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransaction_types[".isUseAjaxSuggest"] = true;





$tdatatransaction_types[".ajaxCodeSnippetAdded"] = false;

$tdatatransaction_types[".buttonsAdded"] = false;

$tdatatransaction_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransaction_types[".isUseTimeForSearch"] = false;


$tdatatransaction_types[".badgeColor"] = "4169E1";


$tdatatransaction_types[".allSearchFields"] = array();
$tdatatransaction_types[".filterFields"] = array();
$tdatatransaction_types[".requiredSearchFields"] = array();

$tdatatransaction_types[".googleLikeFields"] = array();
$tdatatransaction_types[".googleLikeFields"][] = "id";
$tdatatransaction_types[".googleLikeFields"][] = "transaction_name";



$tdatatransaction_types[".tableType"] = "list";

$tdatatransaction_types[".printerPageOrientation"] = 0;
$tdatatransaction_types[".nPrinterPageScale"] = 100;

$tdatatransaction_types[".nPrinterSplitRecords"] = 40;

$tdatatransaction_types[".geocodingEnabled"] = false;










$tdatatransaction_types[".pageSize"] = 20;

$tdatatransaction_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatransaction_types[".strOrderBy"] = $tstrOrderBy;

$tdatatransaction_types[".orderindexes"] = array();


$tdatatransaction_types[".sqlHead"] = "SELECT id,  	transaction_name";
$tdatatransaction_types[".sqlFrom"] = "FROM \"public\".transaction_types";
$tdatatransaction_types[".sqlWhereExpr"] = "";
$tdatatransaction_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransaction_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransaction_types[".arrGroupsPerPage"] = $arrGPP;

$tdatatransaction_types[".highlightSearchResults"] = true;

$tableKeystransaction_types = array();
$tableKeystransaction_types[] = "id";
$tdatatransaction_types[".Keys"] = $tableKeystransaction_types;


$tdatatransaction_types[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.transaction_types";
	$fdata["Label"] = GetFieldLabel("public_transaction_types","id");
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


	$tdatatransaction_types["id"] = $fdata;
		$tdatatransaction_types[".searchableFields"][] = "id";
//	transaction_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "transaction_name";
	$fdata["GoodName"] = "transaction_name";
	$fdata["ownerTable"] = "public.transaction_types";
	$fdata["Label"] = GetFieldLabel("public_transaction_types","transaction_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "transaction_name";

		$fdata["sourceSingle"] = "transaction_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "transaction_name";

	
	
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


	$tdatatransaction_types["transaction_name"] = $fdata;
		$tdatatransaction_types[".searchableFields"][] = "transaction_name";


$tables_data["public.transaction_types"]=&$tdatatransaction_types;
$field_labels["public_transaction_types"] = &$fieldLabelstransaction_types;
$fieldToolTips["public_transaction_types"] = &$fieldToolTipstransaction_types;
$placeHolders["public_transaction_types"] = &$placeHolderstransaction_types;
$page_titles["public_transaction_types"] = &$pageTitlestransaction_types;


changeTextControlsToDate( "public.transaction_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.transaction_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.transaction_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_transaction_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	transaction_name";
$proto0["m_strFrom"] = "FROM \"public\".transaction_types";
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
	"m_strTable" => "public.transaction_types",
	"m_srcTableName" => "public.transaction_types"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.transaction_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "transaction_name",
	"m_strTable" => "public.transaction_types",
	"m_srcTableName" => "public.transaction_types"
));

$proto8["m_sql"] = "transaction_name";
$proto8["m_srcTableName"] = "public.transaction_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.transaction_types";
$proto11["m_srcTableName"] = "public.transaction_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "transaction_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".transaction_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.transaction_types";
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
$proto0["m_srcTableName"]="public.transaction_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transaction_types = createSqlQuery_transaction_types();


	
				;

		

$tdatatransaction_types[".sqlquery"] = $queryData_transaction_types;



$tdatatransaction_types[".hasEvents"] = false;

?>