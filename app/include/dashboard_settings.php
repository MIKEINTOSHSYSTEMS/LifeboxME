<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\",\"all_in_one_training\",\"lifebox_test_center\",\"lifebox_visitors_analytics\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\",\"all_in_one_training\",\"lifebox_test_center\",\"lifebox_visitors_analytics\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard["English"] = array();
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();

// all search fields
$tdatadashboard[".allSearchFields"] = array();

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
*/

/*
$tdatadashboard[".dashElements"] = array();

*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;




$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";


	
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>