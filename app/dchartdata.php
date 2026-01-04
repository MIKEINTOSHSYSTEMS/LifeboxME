<?php
	@ini_set("display_errors","1");
	@ini_set("display_startup_errors","1");
	require_once("include/dbcommon.php");
	header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
	require_once("classes/charts.php");
	require_once(getabspath("classes/searchclause.php"));
	
	if( ProjectSettings::webReports() ) {
		require_once(getabspath("include/xml.php"));
		//include_once("include/reportfunctions.php");
	}
	

	if( Security::hasLogin() ) {
		if( !isLogged() ) {
			Security::saveRedirectURL();
			HeaderRedirect("login", "", "message=expired");
			return;
		}
	}

	$chartSettings = null;
	if( GetTableByShort(postvalue("chartname") ) ) {
		$pSet = new ProjectSettings( GetTableByShort( postvalue("chartname") ) );
		$chartSettings = $pSet->getChartSettings();
		
		if( !$_SESSION["webobject"] ) {
			$_SESSION["webobject"] = array();
		}
	
		$_SESSION["webobject"]["table_type"] = "project";
		$_SESSION["object_sql"] = "";
	}
	
	$webchart = false;
	if( !$chartSettings ) {
		/*
		$xml = new xml();
		
		$sessPrefix = "webchart".postvalue('cname');
		$chrt_strXML = wrLoadSelectedEntity( postvalue('cname'), WR_CHART );
		$webchart = true;
		
		$chrt_array = $xml->xml_to_array( $chrt_strXML );
		if( is_wr_project() )
	    	include_once("include/" . $chrt_array['settings']['short_table_name'] . "_variables.php");
		
		$chartSettings = convertToChartSettings( $chrt_array );
		*/
	}
	
	$param = array();
	$param["webchart"] = $webchart;
	$param["showDetails"] = postvalue('showDetails');
	$param["chartPreview"] = postvalue('chartPreview');
	$param["dashChart"] = postvalue('dashChart');
	$param["pageId"] = postvalue('pageId');
	
	$param["masterTable"] = postvalue('mastertable');
	if( $param["masterTable"] )
		$param["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();
	
	if( $param["dashChart"] ) {
		$param["dashTName"] = postvalue('dashTName');
		$param["dashElementName"] = postvalue('dashElName');
		$params["dashPage"] = postvalue("dashPage");
	}
	
	$param["cname"] = postvalue("chartname");
	$param["tName"] =  GetTableByShort( postvalue("chartname") );
	$param["tableType"] = "project";
	
	if( $webchart ) {				
		$param["cname"] = postvalue("cname");
		$param["tableType"] = $chartSettings["webTableType"];
		$param["tName"] =$chartSettings["webTableName"];
	}


	switch( $chartSettings["type"] ) {
		case "2DColumn":
			$param["2d"] = !$chartSettings["is3D"];
			$param["bar"] = false;
			$param["stacked"] = $chartSettings["stacked"];

			$chartObj = new Chart_Bar( $param, $chartSettings );
		break;
		case "2DBar":
			$param["2d"] = !$chartSettings["is3D"];
			$param["bar"] = true;
			$param["stacked"] = $chartSettings["stacked"];

			$chartObj = new Chart_Bar( $param, $chartSettings );
		break;
		case "Line":
			$chartObj = new Chart_Line( $param, $chartSettings );
		break;
		case "Area":
			$param["stacked"] = $chartSettings["stacked"];

			$chartObj = new Chart_Area( $param, $chartSettings );
		break;
		case "2DPie":
			$param["2d"] = !$chartSettings["is3D"];
			$param["pie"] = true;
			
			$chartObj = new Chart_Pie( $param, $chartSettings );
		break;
		case "2DDoughnut":
			$param["2d"] = !$chartSettings["is3D"];
			$param["pie"] = false;
				
			$chartObj = new Chart_Pie( $param, $chartSettings );
		break;
		case "Combined":
			$chartObj = new Chart_Combined( $param, $chartSettings );
		break;
		case "Funnel":
			$param["funnel_type"] =  $chartSettings["accumulationAppearance"];
			$param["funnel_inv"] = $chartSettings["accumInverted"];

			$chartObj = new Chart_Funnel( $param, $chartSettings );
		break;
		case "Bubble":
			$param["2d"] = !$chartSettings["is3D"];
			
			$param["oppos"] = 1;
			if( $chartSettings["bubbleTransparent"] )
				$param["oppos"] = 0.3;
			
			$chartObj = new Chart_Bubble( $param, $chartSettings );
		break;
		case "Gauge":
			// 0 circle, 1 vertical, 2 horizontal
			if( $chartSettings["gaugeAppearance"] == 0 )
				$param["gaugeType"] = "circular-gauge";
			else
				$param["gaugeType"] = "linear-gauge";
				
			if( $chartSettings["gaugeAppearance"] == 2 )
				$param["layout"] = "horizontal";
			else
				$param["layout"] = "";
				
			$chartObj = new Chart_Gauge( $param, $chartSettings );
		break;
		case "OHLC":
			$param["ohcl_type"] = "ohcl";
			$chartObj = new Chart_Ohlc( $param, $chartSettings );
		break;
		case "Candle":
			$param["ohcl_type"] = "candlestick";
			$chartObj = new Chart_Ohlc( $param, $chartSettings );
		break;
	}
		
	if ( postvalue("action") == "refresh" ) {
		echo runner_json_encode( $chartObj->get_data() );
		exit();
	}
	
	header("Content-Type: application/json");
	$chartObj->write();
?>
