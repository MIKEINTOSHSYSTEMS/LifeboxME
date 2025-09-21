<?php
$tdatalbpmi_indicator_groups = array();
$tdatalbpmi_indicator_groups[".searchableFields"] = array();
$tdatalbpmi_indicator_groups[".ShortName"] = "lbpmi_indicator_groups";
$tdatalbpmi_indicator_groups[".OwnerID"] = "";
$tdatalbpmi_indicator_groups[".OriginalTable"] = "public.lbpmi_indicator_groups";


$tdatalbpmi_indicator_groups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_indicator_groups[".originalPagesByType"] = $tdatalbpmi_indicator_groups[".pagesByType"];
$tdatalbpmi_indicator_groups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_indicator_groups[".originalPages"] = $tdatalbpmi_indicator_groups[".pages"];
$tdatalbpmi_indicator_groups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_indicator_groups[".originalDefaultPages"] = $tdatalbpmi_indicator_groups[".defaultPages"];

//	field labels
$fieldLabelslbpmi_indicator_groups = array();
$fieldToolTipslbpmi_indicator_groups = array();
$pageTitleslbpmi_indicator_groups = array();
$placeHolderslbpmi_indicator_groups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_indicator_groups["English"] = array();
	$fieldToolTipslbpmi_indicator_groups["English"] = array();
	$placeHolderslbpmi_indicator_groups["English"] = array();
	$pageTitleslbpmi_indicator_groups["English"] = array();
	$fieldLabelslbpmi_indicator_groups["English"]["indicator_group_id"] = "Indicator Group Id";
	$fieldToolTipslbpmi_indicator_groups["English"]["indicator_group_id"] = "";
	$placeHolderslbpmi_indicator_groups["English"]["indicator_group_id"] = "";
	$fieldLabelslbpmi_indicator_groups["English"]["indicator_group_name"] = "Indicator Group Name";
	$fieldToolTipslbpmi_indicator_groups["English"]["indicator_group_name"] = "";
	$placeHolderslbpmi_indicator_groups["English"]["indicator_group_name"] = "";
	$fieldLabelslbpmi_indicator_groups["English"]["indicator_group_description"] = "Indicator Group Description";
	$fieldToolTipslbpmi_indicator_groups["English"]["indicator_group_description"] = "";
	$placeHolderslbpmi_indicator_groups["English"]["indicator_group_description"] = "";
	$fieldLabelslbpmi_indicator_groups["English"]["indicator_group_code"] = "Indicator Group Code (Auto Generated)";
	$fieldToolTipslbpmi_indicator_groups["English"]["indicator_group_code"] = "";
	$placeHolderslbpmi_indicator_groups["English"]["indicator_group_code"] = "";
	if (count($fieldToolTipslbpmi_indicator_groups["English"]))
		$tdatalbpmi_indicator_groups[".isUseToolTips"] = true;
}


	$tdatalbpmi_indicator_groups[".NCSearch"] = true;



$tdatalbpmi_indicator_groups[".shortTableName"] = "lbpmi_indicator_groups";
$tdatalbpmi_indicator_groups[".nSecOptions"] = 0;

$tdatalbpmi_indicator_groups[".mainTableOwnerID"] = "";
$tdatalbpmi_indicator_groups[".entityType"] = 0;
$tdatalbpmi_indicator_groups[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_indicator_groups[".strOriginalTableName"] = "public.lbpmi_indicator_groups";

	



$tdatalbpmi_indicator_groups[".showAddInPopup"] = false;

$tdatalbpmi_indicator_groups[".showEditInPopup"] = false;

$tdatalbpmi_indicator_groups[".showViewInPopup"] = false;

$tdatalbpmi_indicator_groups[".listAjax"] = false;
//	temporary
//$tdatalbpmi_indicator_groups[".listAjax"] = false;

	$tdatalbpmi_indicator_groups[".audit"] = false;

	$tdatalbpmi_indicator_groups[".locking"] = false;


$pages = $tdatalbpmi_indicator_groups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_indicator_groups[".edit"] = true;
	$tdatalbpmi_indicator_groups[".afterEditAction"] = 1;
	$tdatalbpmi_indicator_groups[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_indicator_groups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_indicator_groups[".add"] = true;
$tdatalbpmi_indicator_groups[".afterAddAction"] = 1;
$tdatalbpmi_indicator_groups[".closePopupAfterAdd"] = 1;
$tdatalbpmi_indicator_groups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_indicator_groups[".list"] = true;
}



$tdatalbpmi_indicator_groups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_indicator_groups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_indicator_groups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_indicator_groups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_indicator_groups[".printFriendly"] = true;
}



$tdatalbpmi_indicator_groups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_indicator_groups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_indicator_groups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_indicator_groups[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_indicator_groups[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_indicator_groups[".buttonsAdded"] = false;

$tdatalbpmi_indicator_groups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_indicator_groups[".isUseTimeForSearch"] = false;


$tdatalbpmi_indicator_groups[".badgeColor"] = "CD853F";


$tdatalbpmi_indicator_groups[".allSearchFields"] = array();
$tdatalbpmi_indicator_groups[".filterFields"] = array();
$tdatalbpmi_indicator_groups[".requiredSearchFields"] = array();

$tdatalbpmi_indicator_groups[".googleLikeFields"] = array();
$tdatalbpmi_indicator_groups[".googleLikeFields"][] = "indicator_group_id";
$tdatalbpmi_indicator_groups[".googleLikeFields"][] = "indicator_group_name";
$tdatalbpmi_indicator_groups[".googleLikeFields"][] = "indicator_group_description";
$tdatalbpmi_indicator_groups[".googleLikeFields"][] = "indicator_group_code";



$tdatalbpmi_indicator_groups[".tableType"] = "list";

$tdatalbpmi_indicator_groups[".printerPageOrientation"] = 0;
$tdatalbpmi_indicator_groups[".nPrinterPageScale"] = 100;

$tdatalbpmi_indicator_groups[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_indicator_groups[".geocodingEnabled"] = false;










$tdatalbpmi_indicator_groups[".pageSize"] = 20;

$tdatalbpmi_indicator_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_indicator_groups[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_indicator_groups[".orderindexes"] = array();


$tdatalbpmi_indicator_groups[".sqlHead"] = "SELECT indicator_group_id,  	indicator_group_name,  	indicator_group_description,  	indicator_group_code";
$tdatalbpmi_indicator_groups[".sqlFrom"] = "FROM \"public\".lbpmi_indicator_groups";
$tdatalbpmi_indicator_groups[".sqlWhereExpr"] = "";
$tdatalbpmi_indicator_groups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_indicator_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_indicator_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_indicator_groups[".highlightSearchResults"] = true;

$tableKeyslbpmi_indicator_groups = array();
$tableKeyslbpmi_indicator_groups[] = "indicator_group_id";
$tdatalbpmi_indicator_groups[".Keys"] = $tableKeyslbpmi_indicator_groups;


$tdatalbpmi_indicator_groups[".hideMobileList"] = array();




//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.lbpmi_indicator_groups";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_groups","indicator_group_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indicator_group_id";

		$fdata["sourceSingle"] = "indicator_group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_id";

	
	
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


	$tdatalbpmi_indicator_groups["indicator_group_id"] = $fdata;
		$tdatalbpmi_indicator_groups[".searchableFields"][] = "indicator_group_id";
//	indicator_group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_group_name";
	$fdata["GoodName"] = "indicator_group_name";
	$fdata["ownerTable"] = "public.lbpmi_indicator_groups";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_groups","indicator_group_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_group_name";

		$fdata["sourceSingle"] = "indicator_group_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_name";

	
	
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


	$tdatalbpmi_indicator_groups["indicator_group_name"] = $fdata;
		$tdatalbpmi_indicator_groups[".searchableFields"][] = "indicator_group_name";
//	indicator_group_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_group_description";
	$fdata["GoodName"] = "indicator_group_description";
	$fdata["ownerTable"] = "public.lbpmi_indicator_groups";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_groups","indicator_group_description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_group_description";

		$fdata["sourceSingle"] = "indicator_group_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_description";

	
	
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


	$tdatalbpmi_indicator_groups["indicator_group_description"] = $fdata;
		$tdatalbpmi_indicator_groups[".searchableFields"][] = "indicator_group_description";
//	indicator_group_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "indicator_group_code";
	$fdata["GoodName"] = "indicator_group_code";
	$fdata["ownerTable"] = "public.lbpmi_indicator_groups";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_groups","indicator_group_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_group_code";

		$fdata["sourceSingle"] = "indicator_group_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_code";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatalbpmi_indicator_groups["indicator_group_code"] = $fdata;
		$tdatalbpmi_indicator_groups[".searchableFields"][] = "indicator_group_code";


$tables_data["public.lbpmi_indicator_groups"]=&$tdatalbpmi_indicator_groups;
$field_labels["public_lbpmi_indicator_groups"] = &$fieldLabelslbpmi_indicator_groups;
$fieldToolTips["public_lbpmi_indicator_groups"] = &$fieldToolTipslbpmi_indicator_groups;
$placeHolders["public_lbpmi_indicator_groups"] = &$placeHolderslbpmi_indicator_groups;
$page_titles["public_lbpmi_indicator_groups"] = &$pageTitleslbpmi_indicator_groups;


changeTextControlsToDate( "public.lbpmi_indicator_groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_indicator_groups"] = array();
//	public.lbpmi_indicators
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_indicators";
		$detailsParam["dOriginalTable"] = "public.lbpmi_indicators";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_indicators";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_indicators");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbpmi_indicator_groups"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbpmi_indicator_groups"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbpmi_indicator_groups"][$dIndex]["masterKeys"][]="indicator_group_id";

				$detailsTablesData["public.lbpmi_indicator_groups"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbpmi_indicator_groups"][$dIndex]["detailKeys"][]="indicator_group_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_indicator_groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_indicator_groups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_group_id,  	indicator_group_name,  	indicator_group_description,  	indicator_group_code";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_indicator_groups";
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
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.lbpmi_indicator_groups",
	"m_srcTableName" => "public.lbpmi_indicator_groups"
));

$proto6["m_sql"] = "indicator_group_id";
$proto6["m_srcTableName"] = "public.lbpmi_indicator_groups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_name",
	"m_strTable" => "public.lbpmi_indicator_groups",
	"m_srcTableName" => "public.lbpmi_indicator_groups"
));

$proto8["m_sql"] = "indicator_group_name";
$proto8["m_srcTableName"] = "public.lbpmi_indicator_groups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_description",
	"m_strTable" => "public.lbpmi_indicator_groups",
	"m_srcTableName" => "public.lbpmi_indicator_groups"
));

$proto10["m_sql"] = "indicator_group_description";
$proto10["m_srcTableName"] = "public.lbpmi_indicator_groups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_code",
	"m_strTable" => "public.lbpmi_indicator_groups",
	"m_srcTableName" => "public.lbpmi_indicator_groups"
));

$proto12["m_sql"] = "indicator_group_code";
$proto12["m_srcTableName"] = "public.lbpmi_indicator_groups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.lbpmi_indicator_groups";
$proto15["m_srcTableName"] = "public.lbpmi_indicator_groups";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "indicator_group_id";
$proto15["m_columns"][] = "indicator_group_name";
$proto15["m_columns"][] = "indicator_group_description";
$proto15["m_columns"][] = "indicator_group_code";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".lbpmi_indicator_groups";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.lbpmi_indicator_groups";
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
$proto0["m_srcTableName"]="public.lbpmi_indicator_groups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_indicator_groups = createSqlQuery_lbpmi_indicator_groups();


	
				;

				

$tdatalbpmi_indicator_groups[".sqlquery"] = $queryData_lbpmi_indicator_groups;



include_once(getabspath("include/lbpmi_indicator_groups_events.php"));
$tdatalbpmi_indicator_groups[".hasEvents"] = true;

?>