<?php
$tdatapayment_methods = array();
$tdatapayment_methods[".searchableFields"] = array();
$tdatapayment_methods[".ShortName"] = "payment_methods";
$tdatapayment_methods[".OwnerID"] = "";
$tdatapayment_methods[".OriginalTable"] = "public.payment_methods";


$tdatapayment_methods[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapayment_methods[".originalPagesByType"] = $tdatapayment_methods[".pagesByType"];
$tdatapayment_methods[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapayment_methods[".originalPages"] = $tdatapayment_methods[".pages"];
$tdatapayment_methods[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapayment_methods[".originalDefaultPages"] = $tdatapayment_methods[".defaultPages"];

//	field labels
$fieldLabelspayment_methods = array();
$fieldToolTipspayment_methods = array();
$pageTitlespayment_methods = array();
$placeHolderspayment_methods = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayment_methods["English"] = array();
	$fieldToolTipspayment_methods["English"] = array();
	$placeHolderspayment_methods["English"] = array();
	$pageTitlespayment_methods["English"] = array();
	$fieldLabelspayment_methods["English"]["id"] = "Id";
	$fieldToolTipspayment_methods["English"]["id"] = "";
	$placeHolderspayment_methods["English"]["id"] = "";
	$fieldLabelspayment_methods["English"]["method"] = "Method";
	$fieldToolTipspayment_methods["English"]["method"] = "";
	$placeHolderspayment_methods["English"]["method"] = "";
	if (count($fieldToolTipspayment_methods["English"]))
		$tdatapayment_methods[".isUseToolTips"] = true;
}


	$tdatapayment_methods[".NCSearch"] = true;



$tdatapayment_methods[".shortTableName"] = "payment_methods";
$tdatapayment_methods[".nSecOptions"] = 0;

$tdatapayment_methods[".mainTableOwnerID"] = "";
$tdatapayment_methods[".entityType"] = 0;
$tdatapayment_methods[".connId"] = "lifebox_mesystem_at_localhost";


$tdatapayment_methods[".strOriginalTableName"] = "public.payment_methods";

	



$tdatapayment_methods[".showAddInPopup"] = false;

$tdatapayment_methods[".showEditInPopup"] = false;

$tdatapayment_methods[".showViewInPopup"] = false;

$tdatapayment_methods[".listAjax"] = false;
//	temporary
//$tdatapayment_methods[".listAjax"] = false;

	$tdatapayment_methods[".audit"] = false;

	$tdatapayment_methods[".locking"] = false;


$pages = $tdatapayment_methods[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapayment_methods[".edit"] = true;
	$tdatapayment_methods[".afterEditAction"] = 1;
	$tdatapayment_methods[".closePopupAfterEdit"] = 1;
	$tdatapayment_methods[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapayment_methods[".add"] = true;
$tdatapayment_methods[".afterAddAction"] = 1;
$tdatapayment_methods[".closePopupAfterAdd"] = 1;
$tdatapayment_methods[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapayment_methods[".list"] = true;
}



$tdatapayment_methods[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapayment_methods[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapayment_methods[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapayment_methods[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapayment_methods[".printFriendly"] = true;
}



$tdatapayment_methods[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapayment_methods[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapayment_methods[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapayment_methods[".isUseAjaxSuggest"] = true;





$tdatapayment_methods[".ajaxCodeSnippetAdded"] = false;

$tdatapayment_methods[".buttonsAdded"] = false;

$tdatapayment_methods[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayment_methods[".isUseTimeForSearch"] = false;


$tdatapayment_methods[".badgeColor"] = "D2691E";


$tdatapayment_methods[".allSearchFields"] = array();
$tdatapayment_methods[".filterFields"] = array();
$tdatapayment_methods[".requiredSearchFields"] = array();

$tdatapayment_methods[".googleLikeFields"] = array();
$tdatapayment_methods[".googleLikeFields"][] = "id";
$tdatapayment_methods[".googleLikeFields"][] = "method";



$tdatapayment_methods[".tableType"] = "list";

$tdatapayment_methods[".printerPageOrientation"] = 0;
$tdatapayment_methods[".nPrinterPageScale"] = 100;

$tdatapayment_methods[".nPrinterSplitRecords"] = 40;

$tdatapayment_methods[".geocodingEnabled"] = false;










$tdatapayment_methods[".pageSize"] = 20;

$tdatapayment_methods[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapayment_methods[".strOrderBy"] = $tstrOrderBy;

$tdatapayment_methods[".orderindexes"] = array();


$tdatapayment_methods[".sqlHead"] = "SELECT id,  	method";
$tdatapayment_methods[".sqlFrom"] = "FROM \"public\".payment_methods";
$tdatapayment_methods[".sqlWhereExpr"] = "";
$tdatapayment_methods[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayment_methods[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayment_methods[".arrGroupsPerPage"] = $arrGPP;

$tdatapayment_methods[".highlightSearchResults"] = true;

$tableKeyspayment_methods = array();
$tableKeyspayment_methods[] = "id";
$tdatapayment_methods[".Keys"] = $tableKeyspayment_methods;


$tdatapayment_methods[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.payment_methods";
	$fdata["Label"] = GetFieldLabel("public_payment_methods","id");
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


	$tdatapayment_methods["id"] = $fdata;
		$tdatapayment_methods[".searchableFields"][] = "id";
//	method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "method";
	$fdata["GoodName"] = "method";
	$fdata["ownerTable"] = "public.payment_methods";
	$fdata["Label"] = GetFieldLabel("public_payment_methods","method");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "method";

		$fdata["sourceSingle"] = "method";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "method";

	
	
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


	$tdatapayment_methods["method"] = $fdata;
		$tdatapayment_methods[".searchableFields"][] = "method";


$tables_data["public.payment_methods"]=&$tdatapayment_methods;
$field_labels["public_payment_methods"] = &$fieldLabelspayment_methods;
$fieldToolTips["public_payment_methods"] = &$fieldToolTipspayment_methods;
$placeHolders["public_payment_methods"] = &$placeHolderspayment_methods;
$page_titles["public_payment_methods"] = &$pageTitlespayment_methods;


changeTextControlsToDate( "public.payment_methods" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.payment_methods"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.payment_methods"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_payment_methods()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	method";
$proto0["m_strFrom"] = "FROM \"public\".payment_methods";
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
	"m_strTable" => "public.payment_methods",
	"m_srcTableName" => "public.payment_methods"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.payment_methods";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "method",
	"m_strTable" => "public.payment_methods",
	"m_srcTableName" => "public.payment_methods"
));

$proto8["m_sql"] = "method";
$proto8["m_srcTableName"] = "public.payment_methods";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.payment_methods";
$proto11["m_srcTableName"] = "public.payment_methods";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "method";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".payment_methods";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.payment_methods";
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
$proto0["m_srcTableName"]="public.payment_methods";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payment_methods = createSqlQuery_payment_methods();


	
		;

		

$tdatapayment_methods[".sqlquery"] = $queryData_payment_methods;



$tdatapayment_methods[".hasEvents"] = false;

?>