<?php
$tdatayears = array();
$tdatayears[".searchableFields"] = array();
$tdatayears[".ShortName"] = "years";
$tdatayears[".OwnerID"] = "";
$tdatayears[".OriginalTable"] = "public.years";


$tdatayears[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatayears[".originalPagesByType"] = $tdatayears[".pagesByType"];
$tdatayears[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatayears[".originalPages"] = $tdatayears[".pages"];
$tdatayears[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatayears[".originalDefaultPages"] = $tdatayears[".defaultPages"];

//	field labels
$fieldLabelsyears = array();
$fieldToolTipsyears = array();
$pageTitlesyears = array();
$placeHoldersyears = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsyears["English"] = array();
	$fieldToolTipsyears["English"] = array();
	$placeHoldersyears["English"] = array();
	$pageTitlesyears["English"] = array();
	$fieldLabelsyears["English"]["id"] = "Id";
	$fieldToolTipsyears["English"]["id"] = "";
	$placeHoldersyears["English"]["id"] = "";
	$fieldLabelsyears["English"]["year"] = "Year";
	$fieldToolTipsyears["English"]["year"] = "";
	$placeHoldersyears["English"]["year"] = "";
	$fieldLabelsyears["English"]["is_active"] = "Is Active";
	$fieldToolTipsyears["English"]["is_active"] = "";
	$placeHoldersyears["English"]["is_active"] = "";
	if (count($fieldToolTipsyears["English"]))
		$tdatayears[".isUseToolTips"] = true;
}


	$tdatayears[".NCSearch"] = true;



$tdatayears[".shortTableName"] = "years";
$tdatayears[".nSecOptions"] = 0;

$tdatayears[".mainTableOwnerID"] = "";
$tdatayears[".entityType"] = 0;
$tdatayears[".connId"] = "lifebox_mesystem_at_localhost";


$tdatayears[".strOriginalTableName"] = "public.years";

	



$tdatayears[".showAddInPopup"] = false;

$tdatayears[".showEditInPopup"] = false;

$tdatayears[".showViewInPopup"] = false;

$tdatayears[".listAjax"] = false;
//	temporary
//$tdatayears[".listAjax"] = false;

	$tdatayears[".audit"] = true;

	$tdatayears[".locking"] = false;


$pages = $tdatayears[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatayears[".edit"] = true;
	$tdatayears[".afterEditAction"] = 1;
	$tdatayears[".closePopupAfterEdit"] = 1;
	$tdatayears[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatayears[".add"] = true;
$tdatayears[".afterAddAction"] = 1;
$tdatayears[".closePopupAfterAdd"] = 1;
$tdatayears[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatayears[".list"] = true;
}



$tdatayears[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatayears[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatayears[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatayears[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatayears[".printFriendly"] = true;
}



$tdatayears[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatayears[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatayears[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatayears[".isUseAjaxSuggest"] = true;





$tdatayears[".ajaxCodeSnippetAdded"] = false;

$tdatayears[".buttonsAdded"] = false;

$tdatayears[".addPageEvents"] = false;

// use timepicker for search panel
$tdatayears[".isUseTimeForSearch"] = false;


$tdatayears[".badgeColor"] = "DC143C";


$tdatayears[".allSearchFields"] = array();
$tdatayears[".filterFields"] = array();
$tdatayears[".requiredSearchFields"] = array();

$tdatayears[".googleLikeFields"] = array();
$tdatayears[".googleLikeFields"][] = "id";
$tdatayears[".googleLikeFields"][] = "year";
$tdatayears[".googleLikeFields"][] = "is_active";



$tdatayears[".tableType"] = "list";

$tdatayears[".printerPageOrientation"] = 0;
$tdatayears[".nPrinterPageScale"] = 100;

$tdatayears[".nPrinterSplitRecords"] = 40;

$tdatayears[".geocodingEnabled"] = false;










$tdatayears[".pageSize"] = 20;

$tdatayears[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatayears[".strOrderBy"] = $tstrOrderBy;

$tdatayears[".orderindexes"] = array();


$tdatayears[".sqlHead"] = "SELECT id,  	\"year\",  	is_active";
$tdatayears[".sqlFrom"] = "FROM \"public\".years";
$tdatayears[".sqlWhereExpr"] = "";
$tdatayears[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatayears[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatayears[".arrGroupsPerPage"] = $arrGPP;

$tdatayears[".highlightSearchResults"] = true;

$tableKeysyears = array();
$tableKeysyears[] = "id";
$tdatayears[".Keys"] = $tableKeysyears;


$tdatayears[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.years";
	$fdata["Label"] = GetFieldLabel("public_years","id");
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


	$tdatayears["id"] = $fdata;
		$tdatayears[".searchableFields"][] = "id";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.years";
	$fdata["Label"] = GetFieldLabel("public_years","year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"year\"";

	
	
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


	$tdatayears["year"] = $fdata;
		$tdatayears[".searchableFields"][] = "year";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.years";
	$fdata["Label"] = GetFieldLabel("public_years","is_active");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatayears["is_active"] = $fdata;
		$tdatayears[".searchableFields"][] = "is_active";


$tables_data["public.years"]=&$tdatayears;
$field_labels["public_years"] = &$fieldLabelsyears;
$fieldToolTips["public_years"] = &$fieldToolTipsyears;
$placeHolders["public_years"] = &$placeHoldersyears;
$page_titles["public_years"] = &$pageTitlesyears;


changeTextControlsToDate( "public.years" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.years"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.years"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_years()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	\"year\",  	is_active";
$proto0["m_strFrom"] = "FROM \"public\".years";
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
	"m_strTable" => "public.years",
	"m_srcTableName" => "public.years"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.years";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.years",
	"m_srcTableName" => "public.years"
));

$proto8["m_sql"] = "\"year\"";
$proto8["m_srcTableName"] = "public.years";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.years",
	"m_srcTableName" => "public.years"
));

$proto10["m_sql"] = "is_active";
$proto10["m_srcTableName"] = "public.years";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.years";
$proto13["m_srcTableName"] = "public.years";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "year";
$proto13["m_columns"][] = "is_active";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".years";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.years";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.years";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_years = createSqlQuery_years();


	
				;

			

$tdatayears[".sqlquery"] = $queryData_years;



$tdatayears[".hasEvents"] = false;

?>