<?php
$tdataantibiotics = array();
$tdataantibiotics[".searchableFields"] = array();
$tdataantibiotics[".ShortName"] = "antibiotics";
$tdataantibiotics[".OwnerID"] = "";
$tdataantibiotics[".OriginalTable"] = "public.antibiotics";


$tdataantibiotics[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataantibiotics[".originalPagesByType"] = $tdataantibiotics[".pagesByType"];
$tdataantibiotics[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataantibiotics[".originalPages"] = $tdataantibiotics[".pages"];
$tdataantibiotics[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataantibiotics[".originalDefaultPages"] = $tdataantibiotics[".defaultPages"];

//	field labels
$fieldLabelsantibiotics = array();
$fieldToolTipsantibiotics = array();
$pageTitlesantibiotics = array();
$placeHoldersantibiotics = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsantibiotics["English"] = array();
	$fieldToolTipsantibiotics["English"] = array();
	$placeHoldersantibiotics["English"] = array();
	$pageTitlesantibiotics["English"] = array();
	$fieldLabelsantibiotics["English"]["antibiotic_id"] = "Antibiotic Id";
	$fieldToolTipsantibiotics["English"]["antibiotic_id"] = "";
	$placeHoldersantibiotics["English"]["antibiotic_id"] = "";
	$fieldLabelsantibiotics["English"]["antibiotic_name"] = "Antibiotic Name";
	$fieldToolTipsantibiotics["English"]["antibiotic_name"] = "";
	$placeHoldersantibiotics["English"]["antibiotic_name"] = "";
	$fieldLabelsantibiotics["English"]["description"] = "Description";
	$fieldToolTipsantibiotics["English"]["description"] = "";
	$placeHoldersantibiotics["English"]["description"] = "";
	$fieldLabelsantibiotics["English"]["created_at"] = "Created At";
	$fieldToolTipsantibiotics["English"]["created_at"] = "";
	$placeHoldersantibiotics["English"]["created_at"] = "";
	if (count($fieldToolTipsantibiotics["English"]))
		$tdataantibiotics[".isUseToolTips"] = true;
}


	$tdataantibiotics[".NCSearch"] = true;



$tdataantibiotics[".shortTableName"] = "antibiotics";
$tdataantibiotics[".nSecOptions"] = 0;

$tdataantibiotics[".mainTableOwnerID"] = "";
$tdataantibiotics[".entityType"] = 0;
$tdataantibiotics[".connId"] = "lifebox_mesystem_at_localhost";


$tdataantibiotics[".strOriginalTableName"] = "public.antibiotics";

	



$tdataantibiotics[".showAddInPopup"] = false;

$tdataantibiotics[".showEditInPopup"] = false;

$tdataantibiotics[".showViewInPopup"] = false;

$tdataantibiotics[".listAjax"] = false;
//	temporary
//$tdataantibiotics[".listAjax"] = false;

	$tdataantibiotics[".audit"] = true;

	$tdataantibiotics[".locking"] = false;


$pages = $tdataantibiotics[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataantibiotics[".edit"] = true;
	$tdataantibiotics[".afterEditAction"] = 1;
	$tdataantibiotics[".closePopupAfterEdit"] = 1;
	$tdataantibiotics[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataantibiotics[".add"] = true;
$tdataantibiotics[".afterAddAction"] = 1;
$tdataantibiotics[".closePopupAfterAdd"] = 1;
$tdataantibiotics[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataantibiotics[".list"] = true;
}



$tdataantibiotics[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataantibiotics[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataantibiotics[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataantibiotics[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataantibiotics[".printFriendly"] = true;
}



$tdataantibiotics[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataantibiotics[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataantibiotics[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataantibiotics[".isUseAjaxSuggest"] = true;





$tdataantibiotics[".ajaxCodeSnippetAdded"] = false;

$tdataantibiotics[".buttonsAdded"] = false;

$tdataantibiotics[".addPageEvents"] = false;

// use timepicker for search panel
$tdataantibiotics[".isUseTimeForSearch"] = false;


$tdataantibiotics[".badgeColor"] = "BC8F8F";


$tdataantibiotics[".allSearchFields"] = array();
$tdataantibiotics[".filterFields"] = array();
$tdataantibiotics[".requiredSearchFields"] = array();

$tdataantibiotics[".googleLikeFields"] = array();
$tdataantibiotics[".googleLikeFields"][] = "antibiotic_id";
$tdataantibiotics[".googleLikeFields"][] = "antibiotic_name";
$tdataantibiotics[".googleLikeFields"][] = "description";
$tdataantibiotics[".googleLikeFields"][] = "created_at";



$tdataantibiotics[".tableType"] = "list";

$tdataantibiotics[".printerPageOrientation"] = 0;
$tdataantibiotics[".nPrinterPageScale"] = 100;

$tdataantibiotics[".nPrinterSplitRecords"] = 40;

$tdataantibiotics[".geocodingEnabled"] = false;










$tdataantibiotics[".pageSize"] = 20;

$tdataantibiotics[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataantibiotics[".strOrderBy"] = $tstrOrderBy;

$tdataantibiotics[".orderindexes"] = array();


$tdataantibiotics[".sqlHead"] = "SELECT antibiotic_id,  	antibiotic_name,  	description,  	created_at";
$tdataantibiotics[".sqlFrom"] = "FROM \"public\".antibiotics";
$tdataantibiotics[".sqlWhereExpr"] = "";
$tdataantibiotics[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataantibiotics[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataantibiotics[".arrGroupsPerPage"] = $arrGPP;

$tdataantibiotics[".highlightSearchResults"] = true;

$tableKeysantibiotics = array();
$tableKeysantibiotics[] = "antibiotic_id";
$tdataantibiotics[".Keys"] = $tableKeysantibiotics;


$tdataantibiotics[".hideMobileList"] = array();




//	antibiotic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "antibiotic_id";
	$fdata["GoodName"] = "antibiotic_id";
	$fdata["ownerTable"] = "public.antibiotics";
	$fdata["Label"] = GetFieldLabel("public_antibiotics","antibiotic_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "antibiotic_id";

		$fdata["sourceSingle"] = "antibiotic_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotic_id";

	
	
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


	$tdataantibiotics["antibiotic_id"] = $fdata;
		$tdataantibiotics[".searchableFields"][] = "antibiotic_id";
//	antibiotic_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "antibiotic_name";
	$fdata["GoodName"] = "antibiotic_name";
	$fdata["ownerTable"] = "public.antibiotics";
	$fdata["Label"] = GetFieldLabel("public_antibiotics","antibiotic_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "antibiotic_name";

		$fdata["sourceSingle"] = "antibiotic_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotic_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataantibiotics["antibiotic_name"] = $fdata;
		$tdataantibiotics[".searchableFields"][] = "antibiotic_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.antibiotics";
	$fdata["Label"] = GetFieldLabel("public_antibiotics","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataantibiotics["description"] = $fdata;
		$tdataantibiotics[".searchableFields"][] = "description";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.antibiotics";
	$fdata["Label"] = GetFieldLabel("public_antibiotics","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataantibiotics["created_at"] = $fdata;
		$tdataantibiotics[".searchableFields"][] = "created_at";


$tables_data["public.antibiotics"]=&$tdataantibiotics;
$field_labels["public_antibiotics"] = &$fieldLabelsantibiotics;
$fieldToolTips["public_antibiotics"] = &$fieldToolTipsantibiotics;
$placeHolders["public_antibiotics"] = &$placeHoldersantibiotics;
$page_titles["public_antibiotics"] = &$pageTitlesantibiotics;


changeTextControlsToDate( "public.antibiotics" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.antibiotics"] = array();
//	public.case_antibiotics
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.case_antibiotics";
		$detailsParam["dOriginalTable"] = "public.case_antibiotics";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "case_antibiotics";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_case_antibiotics");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.antibiotics"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.antibiotics"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.antibiotics"][$dIndex]["masterKeys"][]="antibiotic_id";

				$detailsTablesData["public.antibiotics"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.antibiotics"][$dIndex]["detailKeys"][]="antibiotic_id";
//	public.ward_antibiotics
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ward_antibiotics";
		$detailsParam["dOriginalTable"] = "public.ward_antibiotics";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ward_antibiotics";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ward_antibiotics");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.antibiotics"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.antibiotics"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.antibiotics"][$dIndex]["masterKeys"][]="antibiotic_id";

				$detailsTablesData["public.antibiotics"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.antibiotics"][$dIndex]["detailKeys"][]="antibiotic_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.antibiotics"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_antibiotics()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "antibiotic_id,  	antibiotic_name,  	description,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".antibiotics";
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
	"m_strName" => "antibiotic_id",
	"m_strTable" => "public.antibiotics",
	"m_srcTableName" => "public.antibiotics"
));

$proto6["m_sql"] = "antibiotic_id";
$proto6["m_srcTableName"] = "public.antibiotics";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotic_name",
	"m_strTable" => "public.antibiotics",
	"m_srcTableName" => "public.antibiotics"
));

$proto8["m_sql"] = "antibiotic_name";
$proto8["m_srcTableName"] = "public.antibiotics";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.antibiotics",
	"m_srcTableName" => "public.antibiotics"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.antibiotics";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.antibiotics",
	"m_srcTableName" => "public.antibiotics"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.antibiotics";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.antibiotics";
$proto15["m_srcTableName"] = "public.antibiotics";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "antibiotic_id";
$proto15["m_columns"][] = "antibiotic_name";
$proto15["m_columns"][] = "description";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".antibiotics";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.antibiotics";
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
$proto0["m_srcTableName"]="public.antibiotics";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_antibiotics = createSqlQuery_antibiotics();


	
				;

				

$tdataantibiotics[".sqlquery"] = $queryData_antibiotics;



$tdataantibiotics[".hasEvents"] = false;

?>