<?php
$tdatatraining_partners = array();
$tdatatraining_partners[".searchableFields"] = array();
$tdatatraining_partners[".ShortName"] = "training_partners";
$tdatatraining_partners[".OwnerID"] = "";
$tdatatraining_partners[".OriginalTable"] = "public.training_partners";


$tdatatraining_partners[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_partners[".originalPagesByType"] = $tdatatraining_partners[".pagesByType"];
$tdatatraining_partners[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_partners[".originalPages"] = $tdatatraining_partners[".pages"];
$tdatatraining_partners[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_partners[".originalDefaultPages"] = $tdatatraining_partners[".defaultPages"];

//	field labels
$fieldLabelstraining_partners = array();
$fieldToolTipstraining_partners = array();
$pageTitlestraining_partners = array();
$placeHolderstraining_partners = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_partners["English"] = array();
	$fieldToolTipstraining_partners["English"] = array();
	$placeHolderstraining_partners["English"] = array();
	$pageTitlestraining_partners["English"] = array();
	$fieldLabelstraining_partners["English"]["training_partner_id"] = "Training Partner Id";
	$fieldToolTipstraining_partners["English"]["training_partner_id"] = "";
	$placeHolderstraining_partners["English"]["training_partner_id"] = "";
	$fieldLabelstraining_partners["English"]["training_id"] = "Training Session";
	$fieldToolTipstraining_partners["English"]["training_id"] = "";
	$placeHolderstraining_partners["English"]["training_id"] = "";
	$fieldLabelstraining_partners["English"]["partner_id"] = "Partner";
	$fieldToolTipstraining_partners["English"]["partner_id"] = "";
	$placeHolderstraining_partners["English"]["partner_id"] = "";
	$fieldLabelstraining_partners["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_partners["English"]["created_at"] = "";
	$placeHolderstraining_partners["English"]["created_at"] = "";
	if (count($fieldToolTipstraining_partners["English"]))
		$tdatatraining_partners[".isUseToolTips"] = true;
}


	$tdatatraining_partners[".NCSearch"] = true;



$tdatatraining_partners[".shortTableName"] = "training_partners";
$tdatatraining_partners[".nSecOptions"] = 0;

$tdatatraining_partners[".mainTableOwnerID"] = "";
$tdatatraining_partners[".entityType"] = 0;
$tdatatraining_partners[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_partners[".strOriginalTableName"] = "public.training_partners";

	



$tdatatraining_partners[".showAddInPopup"] = false;

$tdatatraining_partners[".showEditInPopup"] = false;

$tdatatraining_partners[".showViewInPopup"] = false;

$tdatatraining_partners[".listAjax"] = false;
//	temporary
//$tdatatraining_partners[".listAjax"] = false;

	$tdatatraining_partners[".audit"] = true;

	$tdatatraining_partners[".locking"] = false;


$pages = $tdatatraining_partners[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_partners[".edit"] = true;
	$tdatatraining_partners[".afterEditAction"] = 1;
	$tdatatraining_partners[".closePopupAfterEdit"] = 1;
	$tdatatraining_partners[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_partners[".add"] = true;
$tdatatraining_partners[".afterAddAction"] = 1;
$tdatatraining_partners[".closePopupAfterAdd"] = 1;
$tdatatraining_partners[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_partners[".list"] = true;
}



$tdatatraining_partners[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_partners[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_partners[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_partners[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_partners[".printFriendly"] = true;
}



$tdatatraining_partners[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_partners[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_partners[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_partners[".isUseAjaxSuggest"] = true;



									

$tdatatraining_partners[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_partners[".buttonsAdded"] = false;

$tdatatraining_partners[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_partners[".isUseTimeForSearch"] = false;


$tdatatraining_partners[".badgeColor"] = "2f4f4f";


$tdatatraining_partners[".allSearchFields"] = array();
$tdatatraining_partners[".filterFields"] = array();
$tdatatraining_partners[".requiredSearchFields"] = array();

$tdatatraining_partners[".googleLikeFields"] = array();
$tdatatraining_partners[".googleLikeFields"][] = "training_partner_id";
$tdatatraining_partners[".googleLikeFields"][] = "training_id";
$tdatatraining_partners[".googleLikeFields"][] = "partner_id";
$tdatatraining_partners[".googleLikeFields"][] = "created_at";



$tdatatraining_partners[".tableType"] = "list";

$tdatatraining_partners[".printerPageOrientation"] = 0;
$tdatatraining_partners[".nPrinterPageScale"] = 100;

$tdatatraining_partners[".nPrinterSplitRecords"] = 40;

$tdatatraining_partners[".geocodingEnabled"] = false;










$tdatatraining_partners[".pageSize"] = 20;

$tdatatraining_partners[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_partners[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_partners[".orderindexes"] = array();


$tdatatraining_partners[".sqlHead"] = "SELECT training_partner_id,  	training_id,  	partner_id,  	created_at";
$tdatatraining_partners[".sqlFrom"] = "FROM \"public\".training_partners";
$tdatatraining_partners[".sqlWhereExpr"] = "";
$tdatatraining_partners[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_partners[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_partners[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_partners[".highlightSearchResults"] = true;

$tableKeystraining_partners = array();
$tableKeystraining_partners[] = "training_partner_id";
$tdatatraining_partners[".Keys"] = $tableKeystraining_partners;


$tdatatraining_partners[".hideMobileList"] = array();




//	training_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_partner_id";
	$fdata["GoodName"] = "training_partner_id";
	$fdata["ownerTable"] = "public.training_partners";
	$fdata["Label"] = GetFieldLabel("public_training_partners","training_partner_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_partner_id";

		$fdata["sourceSingle"] = "training_partner_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_partner_id";

	
	
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


	$tdatatraining_partners["training_partner_id"] = $fdata;
		$tdatatraining_partners[".searchableFields"][] = "training_partner_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_partners";
	$fdata["Label"] = GetFieldLabel("public_training_partners","training_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_id";

		$fdata["sourceSingle"] = "training_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.training_sessions";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "training_details";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_partners["training_id"] = $fdata;
		$tdatatraining_partners[".searchableFields"][] = "training_id";
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "public.training_partners";
	$fdata["Label"] = GetFieldLabel("public_training_partners","partner_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "partner_id";

		$fdata["sourceSingle"] = "partner_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partner_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.partners";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "partner_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "partner_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatraining_partners["partner_id"] = $fdata;
		$tdatatraining_partners[".searchableFields"][] = "partner_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_partners";
	$fdata["Label"] = GetFieldLabel("public_training_partners","created_at");
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


	$tdatatraining_partners["created_at"] = $fdata;
		$tdatatraining_partners[".searchableFields"][] = "created_at";


$tables_data["public.training_partners"]=&$tdatatraining_partners;
$field_labels["public_training_partners"] = &$fieldLabelstraining_partners;
$fieldToolTips["public_training_partners"] = &$fieldToolTipstraining_partners;
$placeHolders["public_training_partners"] = &$placeHolderstraining_partners;
$page_titles["public_training_partners"] = &$pageTitlestraining_partners;


changeTextControlsToDate( "public.training_partners" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_partners"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_partners"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.partners";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.partners";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "partners";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_partners"][0] = $masterParams;
				$masterTablesData["public.training_partners"][0]["masterKeys"] = array();
	$masterTablesData["public.training_partners"][0]["masterKeys"][]="partner_id";
				$masterTablesData["public.training_partners"][0]["detailKeys"] = array();
	$masterTablesData["public.training_partners"][0]["detailKeys"][]="partner_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_sessions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_sessions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_sessions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_partners"][1] = $masterParams;
				$masterTablesData["public.training_partners"][1]["masterKeys"] = array();
	$masterTablesData["public.training_partners"][1]["masterKeys"][]="training_id";
				$masterTablesData["public.training_partners"][1]["detailKeys"] = array();
	$masterTablesData["public.training_partners"][1]["detailKeys"][]="training_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_partners()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_partner_id,  	training_id,  	partner_id,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".training_partners";
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
	"m_strName" => "training_partner_id",
	"m_strTable" => "public.training_partners",
	"m_srcTableName" => "public.training_partners"
));

$proto6["m_sql"] = "training_partner_id";
$proto6["m_srcTableName"] = "public.training_partners";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_partners",
	"m_srcTableName" => "public.training_partners"
));

$proto8["m_sql"] = "training_id";
$proto8["m_srcTableName"] = "public.training_partners";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "public.training_partners",
	"m_srcTableName" => "public.training_partners"
));

$proto10["m_sql"] = "partner_id";
$proto10["m_srcTableName"] = "public.training_partners";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_partners",
	"m_srcTableName" => "public.training_partners"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.training_partners";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.training_partners";
$proto15["m_srcTableName"] = "public.training_partners";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "training_partner_id";
$proto15["m_columns"][] = "training_id";
$proto15["m_columns"][] = "partner_id";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".training_partners";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.training_partners";
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
$proto0["m_srcTableName"]="public.training_partners";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_partners = createSqlQuery_training_partners();


	
				;

				

$tdatatraining_partners[".sqlquery"] = $queryData_training_partners;



$tdatatraining_partners[".hasEvents"] = false;

?>