<?php
class DashboardPage extends RunnerPage
{
	protected $elementsPermissions = array();

	public $action = "";
	public $elementName = "";

	/**
	 * @constructor
	 * @param &Array params
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		if ( $params["mode"] == "dashsearch" ) {
			$showShowAllButton = $this->searchClauseObj->searchStarted();
			
			// set the first page for elements with pages
			foreach( $this->pSet->getDashboardElements() as $elem ) {
				if( $elem['type'] == DASHBOARD_LIST || $elem['type'] == DASHBOARD_REPORT ) {
					$elSessionPrefix = $elem['type'] == DASHBOARD_LIST 
						? $this->tName."_".$elem["elementName"]
						: $this->tName."_".$elem["table"] ;
					
					$_SESSION[ $elSessionPrefix."_pagenumber" ] = 1;
				}
			}
			
			$returnJSON = array("success" => true, 'show_all' => $showShowAllButton);
			echo printJSON( $returnJSON );
			exit();
		}
		
		if ( $this->action == "reloadElement" ) {
			$snippetId = postvalue("snippetId");
			
			foreach( $this->pSet->getDashboardElements() as $key => $elem ) {
				if ( $elem["type"] == DASHBOARD_SNIPPET && $elem["elementName"] == $this->elementName ) {
					$snippetData = $this->callSnippet( $elem );
					$contentHtml = $this->getSnippetHtml( $elem, $snippetData );
					break;
				}
			}
			
			$returnJSON = array("success" => true, "contentHtml" => $contentHtml );
			echo printJSON( $returnJSON );
			exit();
		}

		// Set language params, if have more than one language
		$this->setLangParams();

	}

	function CheckPermissions( $table, $permis )
	{
		foreach( $this->getPermissionType( $permis ) as $val )
		{
			if( CheckTablePermissions( $table, $val ) )
				return true;
		}

		return false;
	}

	/**
	 * @param String $pageType
	 * @return Array permission types
	 */
	function getPermissionType( $pageType )
	{
		$result = array();
		$type = parent::getPermisType($pageType);

		if ($pageType == "view" || $pageType == "chart" || $pageType == "report" || $pageType == "list" || $pageType == "calendar" || $pageType == "gantt")
			$type = "S";
		elseif ($pageType == "add")
			$type = "A";
		elseif ($pageType == "edit")
			$type = "E";
		/*elseif ($pageType == "list")
			$result = array("E", "S", "A");*/

		return $type ? array($type) : $result;
	}

	function init()
	{
		parent::init();

		$this->fillElementPermissions();
		$this->createElementContainers();
	}

	/**
	 *
	 */
	function createElementContainers()
	{
		foreach( $this->pSet->getDashboardElements() as $key => $elem )
		{
			if ( !$this->elementsPermissions[$key] )
				continue;
			$style = "";

				if( $elem["width"] )
					$selectors = array();
					//$selectors []= str_repeat( "[data-dbelement=\"".$elem["elementName"]."\"]", 5 );
					// $selectors []= "#dashelement_" . $elem["elementName"] . $this->id . " > .panel > .panel-body";
					$selectors []= "#dashelement_" . $elem["elementName"] . $this->id . " > * > .tab-content > * > * > * > .panel > .panel-body";
					$selectors []= "#dashelement_" . $elem["elementName"] . $this->id . " > * > .tab-content > * > * > .panel > .panel-body";
					$selectors []= "#dashelement_" . $elem["elementName"] . $this->id . " > .panel > .panel-body";
					$selectors []= "#dashelement_" . $elem["elementName"] . $this->id . " > .bs-containedpage > .panel > .panel-body";


					$style.= join(",\n", $selectors ) . " {
						width: " . $elem["width"] . "px;
						overflow-x: auto;
					}";
				if( $elem["height"] )
					$style .= "#dashelement_" . $elem["elementName"] . $this->id . " > .panel > .panel-body,
						#dashelement_" . $elem["elementName"] . $this->id . " > * > .tab-content > * > * > * > .panel > .panel-body,
						#dashelement_" . $elem["elementName"] . $this->id . " > * > .tab-content > * > * > .panel > .panel-body,
						#dashelement_" . $elem["elementName"] . $this->id . " > .bs-containedpage > .panel > .panel-body {
						height: " . $elem["height"] . "px;
						overflow-y: auto;
					}";
				if( $style != "" )
				{
					$style = "<style> @media (min-width: 768px){ " . $style . " } </style>";
				}



			$contentHtml = "";
			if ( $elem['type'] == DASHBOARD_SNIPPET ) {
				$snippetData = $this->callSnippet( $elem );
				$contentHtml = $this->getSnippetHtml( $elem, $snippetData );
			}

			$dbElementAttrs = "";
			if( $elem["width"] ) {
				$dbElementAttrs .= " data-fixed-width";
			}
			if( $elem["height"] ) {
				$dbElementAttrs .= " data-fixed-height";
			}
			$dbElementAttrs .= ' data-dashtype="' . $elem['type'] . '"';

			$this->xt->assign( "db_".$elem["elementName"] , $contentHtml );
 		}
	}

	protected function callSnippet( $dashElem ) {
		$snippetData = array( "body" => "" );
		$header = "";
		$icon = $dashElem["item"]["icon"];
		global $globalEvents;
		if( $globalEvents->dashSnippetExists( $dashElem['snippetId'] ) ) {
			$funcName = "event_" . $dashElem['snippetId'];
			$snippetData["body"] = callDashboardSnippet( $funcName, $icon, $header );
		}
		$snippetData["header"] = $header;
		$snippetData["icon"] = $icon;
		return $snippetData;
	}

	/**
	 * Formation html code snippet panel
	 * @param String $headerCont
	 * @param String $bodyCont
	 * @param Integer $width
	 * @param Integer $height
	 * @return String html
	 */
	function getSnippetHtml( $elem, $snippetData )
	{
		$iconHtml = getIconHTML( $snippetData["icon"] );
		$style = $elem["item"]["snippetStyle"];
		if( !$style ) {
			$style = "classic";
		}
		if( $style == 'classic' ) {
			$headerCont = '<div class="panel-heading">' . $iconHtml . $snippetData["header"] . '</div>';
			$bodyCont = '<div class="panel-body">' . $snippetData["body"] . '</div>';
			$html = '<div class="panel panel-'.$elem["panelStyle"].'">' . $headerCont . $bodyCont . '</div>';
		} else if( $style == 'left' ) {
			$iconHtml = '<div class="r-box-icon">' . $iconHtml . '</div>';
			$html = '<div class="r-box-left">'
					. $iconHtml
					.'<div class="r-box-text">'
						.'<div class="r-box-header">'
							.$snippetData["header"]
						.'</div>'
						.'<div class="r-box-body">'
							.$snippetData["body"]
						.'</div>'
					.'</div>'
				.'</div>';
		} else if( $style == 'right' ) {
			$iconHtml = '<div class="r-box-icon">' . $iconHtml . '</div>';
			$footer = $snippetData["footer"]
				? '<div class="r-box-footer">' . $snippetData["footer"] . '</div>'
				: '';
			$html = '<div class="r-box-right">'
					.'<div class="r-box-main">'
						.'<div class="r-box-text">'
							.'<div class="r-box-header">'
								.$snippetData["header"]
							.'</div>'
							.'<div class="r-box-body">'
								.$snippetData["body"]
							.'</div>'
						.'</div>'
						. $iconHtml
					.'</div>'
					. $footer
				.'</div>';
		}

		return $html;
	}

	/**
	 * Clear the page's and elements pages' session keys
	 * if the page is loaded with "empty" params
	 */
	function clearSessionKeys()
	{
		if ( count($_POST) && $_POST["mode"] == "dashsearch" )
		{
			return;
		}

		parent::clearSessionKeys();

		if( IsEmptyRequest() )
		{
			$this->unsetAllPageSessionKeys();
		}

		foreach( $this->pSet->getDashboardElements() as $elem )
		{
			if( $elem['type'] != DASHBOARD_SEARCH ) {
				if( $elem['type'] == DASHBOARD_LIST ) {
					$this->unsetAllPageSessionKeys( $this->tName."_".$elem["elementName"] );
				} else {
					$this->unsetAllPageSessionKeys( $this->tName."_".$elem["table"] );
				}
			}
		}
	}

	/**
	 * Set session variables
	 */
	function setSessionVariables()
	{
		parent::setSessionVariables();

		$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
	}

	/**
	 * Add extra JS and CSS files
	 */
	public function addDashElementsJSAndCSS()
	{
	}

	/**
	 * Check if the dashboard has any 'single record' or 'details' element
	 * @return Boolean
	 */
	protected function hasSingleRecordOrDetailsElement()
	{
		foreach( $this->pSet->getDashboardElements() as $key => $elem )
		{
			if ( !$this->elementsPermissions[$key] )
				continue;

			if( $elem["type"] == DASHBOARD_RECORD || $elem["type"] == DASHBOARD_DETAILS )
				return true;
		}

		return false;
	}

	/**
	 * @param String table
	 * @return Boolean
	 */
	protected function hasGridElement( $table )
	{
		if( $this->getGridElement( $table ) )
			return true;

		return false;
	}

	protected function getGridElement( $table ) {
		foreach( $this->pSet->getDashboardElements() as $elem ) {
			if( $elem["table"] == $table && $elem["type"] == DASHBOARD_LIST )
				return $elem;
		}
		return null;
	}

	/**
	 * Assign 'body' element
	 */
	public function addCommonHtml()
	{
		$this->body['begin'] = GetBaseScriptsForPage(false);
		$this->body['begin'].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";

		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( 'assignBodyEnd', $this );

		$this->xt->assignbyref('body', $this->body);
	}

	/**
	 * Common xt assignments
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("asearch_link", true);

		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");

	}

	/**
	 * Add common assign
	 */
	function commonAssign()
	{
		parent::commonAssign();

	}

	/**
	 * Process the page
	 */
	public function process()
	{
		if( $this->eventsObject->exists("BeforeProcessDashboard") )
			$this->eventsObject->BeforeProcessDashboard( $this );

		// add button events if exist
		$this->addButtonHandlers();
		$this->addDashElementsJSAndCSS();
		$this->addCommonJs();
		$this->commonAssign();
		$this->doCommonAssignments();
		$this->addCommonHtml();

		$this->assignSimpleSearch();
		$this->updateJsSettings();

		if( $this->eventsObject->exists("BeforeShowDashboard") ) {
			$this->eventsObject->BeforeShowDashboard( $this->xt, $this->templatefile, $this );
		}
		$this->display( $this->templatefile );
	}

	/**
	 * Fill in element children and parents lists
	 * Children can be updated by this element, parents can update this element
	 * There can be peer elements that are both child and parent to each other.
	 * @param &Array elem
	 */
	function createElementLinks( &$elem )
	{
		$elem["parents"] = array();
		$elem["children"] = array();

		foreach( $this->pSet->getDashboardElements() as $key => $e )
		{
			if( $e["elementName"] == $elem["elementName"] )
				continue;
			if( $e["table"] == $elem["masterTable"] && DashboardPage::canUpdateDetails( $e ) )
			{
				$elem["parents"][ $e["elementName"] ] = true;
			}
			if( $elem["table"] == $e["masterTable"] && DashboardPage::canUpdateDetails( $elem ) )
			{
				$elem["children"][ $e["elementName"] ] = true;
			}
			if( $elem["table"] == $e["table"] )
			{
				if( DashboardPage::canUpdatePeers( $e ) )
					$elem["parents"][ $e["elementName"] ] = true;
				if( DashboardPage::canUpdatePeers( $elem ) )
					$elem["children"][ $e["elementName"] ] = true;
			}
		}
	}

	/**
	 * @return Array
	 */
	function getMajorElements()
	{
		$majorElements = array();
		$dashboardTables = array();
		$elements = $this->pSet->getDashboardElements();
		//	distribute elements by tables
		foreach( $elements as $key => $e )
		{
			if( !isset( $dashboardTables[ $e["table"] ] ) )
			{
				$dashboardTables[ $e["table"] ] = array();
			}
			$dashboardTables[ $e["table"] ][] = $key;
		}
		//	locate major element in each table
		foreach( $dashboardTables as $t )
		{
			$major = "";
			//	locate main map first
			foreach( $t as $i )
			{
				if( $elements[$i]["type"] == DASHBOARD_MAP && $elements[$i]["updateMoved"] )
				{
					$major = $elements[$i]["elementName"];
					break;
				}
			}
			//	locate grid
			if( $major == "" )
			{
				foreach( $t as $i )
				{
					$elementType = $elements[$i]["type"];
					if( $elementType == DASHBOARD_LIST || $elementType == DASHBOARD_CHART || $elementType == DASHBOARD_REPORT || $elementType == DASHBOARD_CALENDAR || $elementType == DASHBOARD_GANTT )
					{
						$major = $elements[$i]["elementName"];
						break;
					}
				}
			}
			//	locate any map
			if( $major == "" )
			{
				foreach( $t as $i )
				{
					if( $elements[$i]["type"] == DASHBOARD_MAP )
					{
						$major = $elements[$i]["elementName"];
						break;
					}
				}
			}
			//	locate single record with edit or view enabled
			if( $major == "" )
			{
				foreach( $t as $i )
				{
					if( $elements[$i]["type"] != DASHBOARD_RECORD )
						continue;
					if( in_array( PAGE_EDIT, $elements[$i]["tabsPageTypes"] ) || in_array( PAGE_VIEW, $elements[$i]["tabsPageTypes"] ) )
					{
						$major = $elements[$i]["elementName"];
						break;
					}
				}
			}
			if( $major != "" )
				$majorElements[ $major ] = true;

		}

		return $majorElements;
	}

	/**
	 * @param &Array elem
	 * @return Boolean
	 */
	static function canUpdateDetails( &$elem )
	{
		return DashboardPage::canUpdatePeers( $elem );
	}

	/**
	 * @param &Array elem
	 * @return Boolean
	 */
	static function canUpdatePeers( &$elem )
	{
		return $elem["type"] == DASHBOARD_LIST
				|| $elem["type"] == DASHBOARD_CHART
				|| $elem["type"] == DASHBOARD_REPORT
				|| $elem["type"] == DASHBOARD_RECORD
				|| $elem["type"] == DASHBOARD_MAP;
	}

	protected function fillElementPermissions() {
		foreach( $this->pSet->getDashboardElements() as $key => $elem )
		{
			$this->createElementLinks( $elem );
			$permissions = false;
			$newElem = $elem;

			if( $elem['type'] == DASHBOARD_RECORD)
			{
				// check tables (add, view, edit) permissinons befor add to js
				foreach( $elem['tabsPageTypes'] as $idx => $pageType )
				{
					if( $this->CheckPermissions( $elem['table'], $pageType ) ) {
						$permissions = true;
						break;
					}
				}
			}
			elseif( $elem['type'] == DASHBOARD_DETAILS)
			{
				$eset = new ProjectSettings( $elem['table'] );
				$detailsTables = $eset->getAvailableDetailsTables();
				foreach( $detailsTables as $idx => $d )
				{
					if( in_array( $d, $elem['notUsedDetailTables'] ) )
						continue;
					$permissions = true;
					break;
				}
				
			} elseif( $elem['type'] == DASHBOARD_CHART || $elem['type'] == DASHBOARD_REPORT || $elem['type'] == DASHBOARD_SEARCH) {
				$permissions = $this->CheckPermissions($elem['table'], "list" );
			} elseif( $elem['type'] == DASHBOARD_LIST ) {
				$permissions = $this->CheckPermissions( $elem['table'], "list" );
			} elseif( $elem['type'] == DASHBOARD_CALENDAR ) {
				$permissions = $this->CheckPermissions( $elem['table'], "list" );
			} elseif( $elem['type'] == DASHBOARD_GANTT ) {
				$permissions = $this->CheckPermissions( $elem['table'], "list" );
			} elseif( $elem['type'] == DASHBOARD_MAP ) {
				$permissions = $this->CheckPermissions( $elem['table'], "list" );
			} elseif( $elem['type'] == DASHBOARD_SNIPPET ) {
				$permissions = true;
			}

			$this->elementsPermissions[$key] = $permissions;
		}

	}
	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		$settings['dashElements'] = array();

		$majorElements = $this->getMajorElements();

		//	calculate additional element settings
		foreach( $this->pSet->getDashboardElements() as $key => $elem )
		{
			if ( !$this->elementsPermissions[$key] )
				continue;
			$this->createElementLinks( $elem );
			$newElem = $elem;

			if( $elem['type'] == DASHBOARD_RECORD)
			{
				// check tables (add, view, edit) permissinons befor add to js
				$newElem['tabsPageTypes'] = array();
				foreach( $elem['tabsPageTypes'] as $idx => $pageType )
				{
					if( $this->CheckPermissions( $elem['table'], $pageType ) )
					{
						$newElem['tabsPageTypes'][] = $pageType;
					}
				}

				$gridElem = $this->getGridElement( $elem['table'] );
				if( $gridElem ) {
					$eset = new ProjectSettings( $elem['table'], PAGE_LIST, $gridElem['pageName'] );
					$newElem['spreadsheetGrid'] = $eset->spreadsheetGrid();
					$newElem['hostListPage'] = $gridElem['pageName'];
				}
			}
			elseif( $elem['type'] == DASHBOARD_DETAILS)
			{
				$eset = new ProjectSettings( $elem['table'] );
				$detailsTables = $eset->getAvailableDetailsTables();

				// add details shortTableNames
				$newElem['details'] = array();
				foreach( $detailsTables as $idx => $d )
				{
					if( in_array( $d, $elem['notUsedDetailTables'] ) )
						continue;
					
					$detailsData = array();
					$detailsData["dDataSourceTable"] = $d;
					$detailsData["pageName"] = $elem['details'][ $d ]['pageName'];
					$detailsData["dShortTable"] = GetTableURL( $d );
					$detailsData["dCaptionTable"] = Labels::getTableCaption( $d );
					$detailsData["dType"] = ProjectSettings::defaultPageType( GetEntityType( $d ) );

					$newElem['details'][] = $detailsData;
				
				}
				
			} elseif( $elem['type'] == DASHBOARD_MAP ) {
				if( !$elem["updateMoved"] )
					$newElem["updateMoved"] = !$this->hasGridElement( $elem['table'] );
			} 

			if( isset( $majorElements[ $newElem["elementName"]] ) )
				$newElem["major"] = true;

			$settings['dashElements'][$key] = $newElem;
		}

		return $settings;
	}

	protected function updateJsSettings() {
		// add shortTableNames
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) {
			if( !$elem['table']) {
				continue;
			}
			$this->jsSettings['tableSettings'][ $elem['table'] ]['shortTName'] = GetTableURL( $elem['table'] );
		}
	}

}
?>