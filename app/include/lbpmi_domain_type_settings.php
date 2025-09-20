<?php
$tdatalbpmi_domain_type = array();
$tdatalbpmi_domain_type[".searchableFields"] = array();
$tdatalbpmi_domain_type[".ShortName"] = "lbpmi_domain_type";
$tdatalbpmi_domain_type[".OwnerID"] = "";
$tdatalbpmi_domain_type[".OriginalTable"] = "public.lbpmi_domain_type";


$tdatalbpmi_domain_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_domain_type[".originalPagesByType"] = $tdatalbpmi_domain_type[".pagesByType"];
$tdatalbpmi_domain_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_domain_type[".originalPages"] = $tdatalbpmi_domain_type[".pages"];
$tdatalbpmi_domain_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_domain_type[".originalDefaultPages"] = $tdatalbpmi_domain_type[".defaultPages"];

//	field labels
$fieldLabelslbpmi_domain_type = array();
$fieldToolTipslbpmi_domain_type = array();
$pageTitleslbpmi_domain_type = array();
$placeHolderslbpmi_domain_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_domain_type["English"] = array();
	$fieldToolTipslbpmi_domain_type["English"] = array();
	$placeHolderslbpmi_domain_type["English"] = array();
	$pageTitleslbpmi_domain_type["English"] = array();
	$fieldLabelslbpmi_domain_type["English"]["dom_id"] = "Dom Id";
	$fieldToolTipslbpmi_domain_type["English"]["dom_id"] = "";
	$placeHolderslbpmi_domain_type["English"]["dom_id"] = "";
	$fieldLabelslbpmi_domain_type["English"]["domain_type"] = "Domain Type";
	$fieldToolTipslbpmi_domain_type["English"]["domain_type"] = "";
	$placeHolderslbpmi_domain_type["English"]["domain_type"] = "";
	if (count($fieldToolTipslbpmi_domain_type["English"]))
		$tdatalbpmi_domain_type[".isUseToolTips"] = true;
}


	$tdatalbpmi_domain_type[".NCSearch"] = true;



$tdatalbpmi_domain_type[".shortTableName"] = "lbpmi_domain_type";
$tdatalbpmi_domain_type[".nSecOptions"] = 0;

$tdatalbpmi_domain_type[".mainTableOwnerID"] = "";
$tdatalbpmi_domain_type[".entityType"] = 0;
$tdatalbpmi_domain_type[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_domain_type[".strOriginalTableName"] = "public.lbpmi_domain_type";

	



$tdatalbpmi_domain_type[".showAddInPopup"] = false;

$tdatalbpmi_domain_type[".showEditInPopup"] = false;

$tdatalbpmi_domain_type[".showViewInPopup"] = false;

$tdatalbpmi_domain_type[".listAjax"] = false;
//	temporary
//$tdatalbpmi_domain_type[".listAjax"] = false;

	$tdatalbpmi_domain_type[".audit"] = false;

	$tdatalbpmi_domain_type[".locking"] = false;


$pages = $tdatalbpmi_domain_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_domain_type[".edit"] = true;
	$tdatalbpmi_domain_type[".afterEditAction"] = 1;
	$tdatalbpmi_domain_type[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_domain_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_domain_type[".add"] = true;
$tdatalbpmi_domain_type[".afterAddAction"] = 1;
$tdatalbpmi_domain_type[".closePopupAfterAdd"] = 1;
$tdatalbpmi_domain_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_domain_type[".list"] = true;
}



$tdatalbpmi_domain_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_domain_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_domain_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_domain_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_domain_type[".printFriendly"] = true;
}



$tdatalbpmi_domain_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_domain_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_domain_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_domain_type[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_domain_type[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_domain_type[".buttonsAdded"] = false;

$tdatalbpmi_domain_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_domain_type[".isUseTimeForSearch"] = false;


$tdatalbpmi_domain_type[".badgeColor"] = "3CB371";


$tdatalbpmi_domain_type[".allSearchFields"] = array();
$tdatalbpmi_domain_type[".filterFields"] = array();
$tdatalbpmi_domain_type[".requiredSearchFields"] = array();

$tdatalbpmi_domain_type[".googleLikeFields"] = array();
$tdatalbpmi_domain_type[".googleLikeFields"][] = "dom_id";
$tdatalbpmi_domain_type[".googleLikeFields"][] = "domain_type";



$tdatalbpmi_domain_type[".tableType"] = "list";

$tdatalbpmi_domain_type[".printerPageOrientation"] = 0;
$tdatalbpmi_domain_type[".nPrinterPageScale"] = 100;

$tdatalbpmi_domain_type[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_domain_type[".geocodingEnabled"] = false;










$tdatalbpmi_domain_type[".pageSize"] = 20;

$tdatalbpmi_domain_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_domain_type[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_domain_type[".orderindexes"] = array();


$tdatalbpmi_domain_type[".sqlHead"] = "SELECT dom_id,  	domain_type";
$tdatalbpmi_domain_type[".sqlFrom"] = "FROM \"public\".lbpmi_domain_type";
$tdatalbpmi_domain_type[".sqlWhereExpr"] = "";
$tdatalbpmi_domain_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_domain_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_domain_type[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_domain_type[".highlightSearchResults"] = true;

$tableKeyslbpmi_domain_type = array();
$tableKeyslbpmi_domain_type[] = "dom_id";
$tdatalbpmi_domain_type[".Keys"] = $tableKeyslbpmi_domain_type;


$tdatalbpmi_domain_type[".hideMobileList"] = array();




//	dom_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dom_id";
	$fdata["GoodName"] = "dom_id";
	$fdata["ownerTable"] = "public.lbpmi_domain_type";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_domain_type","dom_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "dom_id";

		$fdata["sourceSingle"] = "dom_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dom_id";

	
	
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


	$tdatalbpmi_domain_type["dom_id"] = $fdata;
		$tdatalbpmi_domain_type[".searchableFields"][] = "dom_id";
//	domain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domain_type";
	$fdata["GoodName"] = "domain_type";
	$fdata["ownerTable"] = "public.lbpmi_domain_type";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_domain_type","domain_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domain_type";

		$fdata["sourceSingle"] = "domain_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domain_type";

	
	
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


	$tdatalbpmi_domain_type["domain_type"] = $fdata;
		$tdatalbpmi_domain_type[".searchableFields"][] = "domain_type";


$tables_data["public.lbpmi_domain_type"]=&$tdatalbpmi_domain_type;
$field_labels["public_lbpmi_domain_type"] = &$fieldLabelslbpmi_domain_type;
$fieldToolTips["public_lbpmi_domain_type"] = &$fieldToolTipslbpmi_domain_type;
$placeHolders["public_lbpmi_domain_type"] = &$placeHolderslbpmi_domain_type;
$page_titles["public_lbpmi_domain_type"] = &$pageTitleslbpmi_domain_type;


changeTextControlsToDate( "public.lbpmi_domain_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_domain_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_domain_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_domain_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dom_id,  	domain_type";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_domain_type";
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
	"m_strName" => "dom_id",
	"m_strTable" => "public.lbpmi_domain_type",
	"m_srcTableName" => "public.lbpmi_domain_type"
));

$proto6["m_sql"] = "dom_id";
$proto6["m_srcTableName"] = "public.lbpmi_domain_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "domain_type",
	"m_strTable" => "public.lbpmi_domain_type",
	"m_srcTableName" => "public.lbpmi_domain_type"
));

$proto8["m_sql"] = "domain_type";
$proto8["m_srcTableName"] = "public.lbpmi_domain_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.lbpmi_domain_type";
$proto11["m_srcTableName"] = "public.lbpmi_domain_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "dom_id";
$proto11["m_columns"][] = "domain_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".lbpmi_domain_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.lbpmi_domain_type";
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
$proto0["m_srcTableName"]="public.lbpmi_domain_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_domain_type = createSqlQuery_lbpmi_domain_type();


	
				;

		

$tdatalbpmi_domain_type[".sqlquery"] = $queryData_lbpmi_domain_type;



$tdatalbpmi_domain_type[".hasEvents"] = false;

?>