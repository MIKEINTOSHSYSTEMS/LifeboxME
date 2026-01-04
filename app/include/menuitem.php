<?php
class MenuItem
{
	/**
	 * Link id
	 *
	 * @var int
	 */
	var $id;
	/**
	 * Link href
	 *
	 * @var string
	 */
	var $href;
	/**
	 * Params for link href
	 *
	 * @var string
	 */
	var $params;
	/**
	 * Type of link
	 *
	 * @var string
	 */
	var $type;

	// for separator
	var $name;
	var $style;

	/**
	 * source table name
	 *
	 * @var string
	 */
	var $table;
	/**
	 * type of link
	 *
	 * @var string
	 */
	var $linkType;
	/**
	 * type of page
	 *
	 * @var string
	 */
	var $pageType;
	/**
	 * id of page
	 *
	 * @var string
	 */
	var $pageId = "";
	/**
	 * Collection of all pageTypes of menu links for this table
	 *
	 * @var array
	 */
//	var $pageTypesInMenuForThisTable = array();
	/**
	 * tag a title attr
	 *
	 * @var string
	 */
	var $title;
	/**
	 * Open in new window or not attr
	 *
	 * @var string
	 */
	var $openType;
	/**
	 * Array of children
	 *
	 * @var array
	 */
	var $children = array();

	var $parentItem = null;

	var $pageName = "";

	var $menuTableMap;

	/**
	 * Current (selected) item flag
	 *
	 * @var bool
	 */
	var $currentItem = false;

	var $menuId = "";

	/* welcome menu attributes */

	var $icon;
	var $iconType;
	var $iconStyle;

	/**
	 * 0 - always, 1 - only in collapsed column
	 */
	var $iconShow;
	var $color;

	/**
	 * @var Boolean
	 */
	var $linkToAnotherApp;


	/**
	 * Constructor, builds tree structure with item attributes
	 *
	 * @param array $menuItemInfo
	 * @param array $menuNodes
	 * @return MenuItem
	 */

	function __construct( &$menuItemInfo, &$menuTableMap, $menuId )
	{
		$this->menuId = $menuId;
		$this->menuTableMap =& $menuTableMap;

		$data = &$menuItemInfo['data'];
		$this->id = $menuItemInfo['id'];
		$this->name = $data['name'];
		$this->type = $data['itemType'];
		$this->href = $data['href'];
		$this->style = $data['style'];
		if( $data['tableName'] ) {
			$this->table = $data['tableName'];
		} else {
			$this->table = GetTableByGID( $data['table'] );
		}
		$this->params = $data['params'];
		$this->linkType = $data['linkType'];
		$this->pageType = $data['pageType'];
		$this->pageId = $data['pageId'];
		$this->openType = $data['openType'];
		$this->icon = $data['iconName'];
		$this->iconType = $data['iconType'];
		$this->iconStyle = $data['iconStyle'];
		if( !$this->iconStyle ) {
			$this->iconStyle = ICON_STYLE_SOLID;
		}
		$this->iconShow = $data['showIconType'];
		$this->linkToAnotherApp = $data['linkToAnotherApp'];

		$this->title = GetMLString( $this->name );


		if( is_array( $menuItemInfo['children'] ) ) {
			foreach( $menuItemInfo['children'] as $childInfo ) {
				$this->AddChild( new MenuItem( $childInfo, $menuTableMap, $menuId ) );
			}
			
		}

		if( !$this->isSeparator() && $this->table )
		{
			$pageType = strtolower( $this->pageType );
			if( !isset( $this->menuTableMap[ $this->table ] ) )
			{
				$this->menuTableMap[ $this->table ] = array();
			}
			$this->menuTableMap[ $this->table ] [ $pageType ] ++;

		}

	}

	/**
	 * Adds child
	 *
	 * @param link $child
	 */
	function AddChild(&$child)
	{
		global $globalEvents;
		$res = true;
		if($globalEvents->exists('ModifyMenuItem'))
		{
			$res = $globalEvents->ModifyMenuItem($child);
		}
		if ($res)
		{
			$this->children[] = $child;
			$child->parentItem = $this;
		}
	}

	function setUrl($href)
	{
		$this->href = $href;
		if ($this->linkType == menuLinkTypeInternal)
		{
			$this->linkType = menuLinkTypeExternal;
		}
	}

	function getUrl()
	{
		return $this->href;
	}

	function setParams($params)
	{
		$this->params = $params;
	}

	function getParams()
	{
		return $this->params;
	}
	function setTitle($title)
	{
		$this->title = $title;
	}

	function getTitle()
	{
		return $this->title;
	}

	function setTable($table)
	{
		$this->table = $table;
	}

	function getTable() {
		return $this->table;
	}

	function setPageType($pType)
	{
		$this->pageType = $pType;
	}

	function getPageType()
	{
		return $this->pageType;
	}

	function setPage( $pageId )
	{
		$this->pageId = $pageId;
	}

	function getPage()
	{
		return $this->pageId;
	}

	function openNewWindow( $newWindow = true ) {
		$oldValue = $this->openType == menuOpenTypeNewWindow;
		$this->openType = $newWindow ? menuOpenTypeNewWindow : menuOpenTypeNone;
		return $oldValue;
	}

	/**
	 * part of Menu API
	 * @return string
	 */
	function getLinkType() {
		switch( $this->linkType ) {
			case menuLinkTypeInternal:
				return 'Internal';
			case menuLinkTypeExternal:
				return 'External';
			case menuLinkTypeNone:
				return 'None';
			}
	}

	/**
	 * Check if user have permission for link(check page)
	 *
	 * @return bool
	 */
	function linkAvailable()
	{
		return menuLinkAvailable($this->table, $this->pageType, $this->pageId);
	}

	/**
	 * Getter, show status as group
	 *
	 * @return bool
	 */
	function showAsGroup()
	{
		// if this element not group
		if (!$this->isGroup())
			return false;

		// for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// if there are children to show in this child, we need to show this group
			if ($this->children[$i]->showAsGroup())
				return true;
			// if we should show this descendant, not include separators
			elseif ($this->children[$i]->showAsLink() && !$this->children[$i]->isSeparator())
				return true;
		}
		// if no descendants to show
		return false;
	}
	/**
	 * Getter, show status as link
	 *
	 * @return bool
	 */
	function showAsLink()
	{
		if( $this->isGroup() ) {
			return false;
		}
		// if link external and has href
		if ($this->linkType == menuLinkTypeExternal && strlen($this->href)>0)
			return true;
		// allways show separators
		if ($this->linkType == menuLinkTypeNone)
			return true;
		// if internal and has href and user have permissions
		if ($this->linkType == menuLinkTypeInternal && $this->linkAvailable())
			return true;
		// else not show as link
		return false;
	}
	/**
	 * Checks if this element is group
	 *
	 * @return bool
	 */
	function isGroup()
	{
		return $this->type == menuItemTypeGroup;
	}
	/**
	 * Checks if this element is separator
	 *
	 * @return bool
	 */
	function isSeparator()
	{
		return $this->type == menuItemTypeSeparator;
	}

	function iconStyleClass( $style ) {
		switch( $style ) {
			case ICON_STYLE_BRANDS:
				return 'fab';
			case ICON_STYLE_LEGACY:
				return 'fa';
			case ICON_STYLE_REGULAR:
				return 'far';
		}
		return 'fas';
	}
	function getIconHTML()
	{
		if( !$this->icon )
			return "";
		if( $this->iconType == ICON_BOOTSTRAP_GLYPH )
		{
			return '<span class="menu-icon glyphicon '.$this->icon.'"></span>';
		}
		else if( $this->iconType == ICON_FONT_AWESOME )
		{
			
			$style = $this->iconStyleClass( $this->iconStyle );
			return '<span class="menu-icon ' . $style . ' '.$this->icon.'"></span>';
		}
		else if ( $this->iconType == ICON_FILE )
		{
			return '<img class="menu-icon" src="'.GetRootPathForResources( "images/menuicons/".$this->icon ) .'">';
		}
	}


	/**
	 * Returns array ready to be assigned to a XTempl variable
	 *
	 * Important!!!
	 * 
	 * All possible values in return arrays must be filled in. 
	 * $ret[x] = xxx ? "active" : ""
	 * instead of
	 * if( xxx )
	 *   $ret[x] = "active"
	 * Otherwise children element will use parent values
	 */
	function getMenuXtData( $activeId, $menuMode, $level = 1 ) {
		// if not need to show
		if ( $this->id && !$this->showAsGroup() && !$this->showAsLink() && !$this->isSeparator() )
			return false;

		// show element
		$showSubmenu = true;

		$ret = $this->getXtLinkAttrs( $menuMode );

		$ret[ "item_menulink" . $level ] = true;
		$ret[ "item_id" ] = $this->id;
		$ret[ "item_current" ] = $this->id == $activeId ? "active" : "";

		$children = array();
		$expanded = false;
		for( $i=0; $i < count( $this->children ); $i++ ) {
			// call children
			$child = $this->children[$i]->getMenuXtData( $activeId, $menuMode, $level + 1 );
			if( $child !== false ) {
				$children[] = $child;
				if( !$expanded ) {
					$expanded = $this->children[ $i ]->hasActiveChildren( $activeId );
				}
			}
		}
		$ret[ "submenu_class" ] = $expanded ? "in" : "";
		$ret["item_children" . $level ] = array( "data" => $children );
		$ret["item_haschildren" . $level ] = count( $children ) > 0;
		//	to avoid folded-in item_haschildren
		$ret["item_showchildren" . $level ] = count( $children ) > 0;
		return $ret;

	}

	function findActiveItem( $savedItemId, $hostTable, $hostPageType )
	{
		if( $this->activeItem( $savedItemId, $hostTable, $hostPageType ) ) {
			return $this;
		}

		foreach( $this->children as $child ) {
			$activeChild = $child->findActiveItem( $savedItemId, $hostTable, $hostPageType );
			if( $activeChild ) {
				return $activeChild;
			}
		}
		return null;
	 }

	/**
	 * @return Boolean
	 */
	protected function hasActiveChildren( $activeId ) {
		if( $this->id == $activeId ) {
			return true;
		}
		foreach( $this->children as $child ) {
			if( $child->hasActiveChildren( $activeId ) ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * @return Boolean
	 */
 	protected function activeItem( $savedActiveId, $hostTable, $hostPageType )
	{
		if( $hostTable != $this->table  ) {
			return false;
		}

		if( $hostPageType == strtolower($this->pageType) ) {
			return !$savedActiveId || $savedActiveId == $this->id;
		}
		//	if active page is not in menu, but this item is the 

		elseif( !$this->hostPageInMenu( $hostTable, $hostPageType ) && $this->highestPriorityItem() ) {
			return true;
		}
		return false;
	}



	public function getMenuItemAttributes( $menuMode )
	{
		$attrs = array();
		if( $this->showAsGroup()  )
		{
			//$attrs["class"] = "r-menugroup";
			if( $this->isTreelike( $menuMode ) )
			{
				$attrs["data-toggle"] = "menu-collapse";
				$attrs["data-target"] = "#submenu" . $this->id;
			}
			else
			{
				//$attrs["class"] .= " dropdown-toggle";
				$attrs["data-toggle"] = "nested-dropdown";
				$attrs["aria-haspopup"] = "true";
				$attrs["aria-expanded"] = "false";
			}
		}

		$attrs["id"] = 'itemlink' . $this->id;
		$attrs["itemtitle"] = $this->title;
		if( $this->style != "" )
			$attrs["style"] = $this->style;
	if( $this->openType == menuOpenTypeNewWindow )
		{
			$attrs["rel"] = "external";
			$attrs["target"] = "_blank";
			$attrs["link"] = "External";
		}

		if( $this->linkType == menuLinkTypeInternal && $this->pageType == "webreports" )
		{
			$attrs["href"] = GetTableLink("webreport");
			$attrs["value"] = GetTableLink("webreport");
		}
		elseif( $this->linkType == menuLinkTypeInternal )
		{
			$params = array();

			if ( $this->pageId != "" )
			{
				$params[] = 'page=' . $this->pageId;
			}


			// add menu id param. Used for setting current menu element
			if ( $this->menuTableMap[ $this->table ][ strtolower($this->pageType) ] > 1 )
				$params[] = 'menuItemId=' . $this->id;

			if( $this->params )
				$params[] = $this->params;

			$getParams = implode("&", $params);

			$attrs["href"] = GetTableLink(GetTableURL($this->table), strtolower($this->pageType), $getParams);
			$attrs["value"] = GetTableLink(GetTableURL($this->table), strtolower($this->pageType), $getParams);

		}
		elseif( $this->linkType == menuLinkTypeExternal )
		{
			$attrs["href"] = $this->href;
			$attrs["value"] = $this->href;
			if( $this->linkToAnotherApp ) {
				$externalLink = ProjectSettings::ext() == 'php' ? 'external.php' : 'external';
				$attrs["href"] = $externalLink . "?url=".rawurlencode( $this->href );
			}
		}
		return $attrs;
	}

	/**
	 * Important! All possible xt variables should be assigned.
	 * Otherwise elements in subgroups will receive its parent group values
	 */
	protected function getXtLinkAttrs( $menuMode )
	{
		$separator = $this->isSeparator();
		$ret = array();
		// assign title between tag a
		$title = $this->title;
		
		$ret[ "item_expand_icon" ] = $this->showAsGroup();

		$icon = $this->getIconHTML();
		$ret[ "item_icon" ] = $icon && $this->iconShow == 1 
			? $icon . ' '
			: '';
		$ret[ "item_collicon" ] = $icon 
			? $icon . ' '
			: '';
		$ret[ "item_firstcap" ] = !$icon && !$separator
			? substr( trim( $this->title ), 0, 1 )
			: '';

		$attrs = $this->getMenuItemAttributes( $menuMode );

		if( !$separator ) {
			$ret[ "item_tooltip" ] = runner_htmlspecialchars( $this->title );
			$ret[ "item_title" ] = $title;
		} else {
			$ret[ "item_tooltip" ] = "";
			$ret[ "item_title" ] = "";
			$attrs["data-separator"] = true;
		}

		$groupOnlyAttrs = array();
		$groupOnlyAttrs["id"] = true;
		$groupOnlyAttrs["title"] = true;
		$groupOnlyAttrs["style"] = true;
		$groupOnlyAttrs["class"] = true;
		$groupOnlyAttrs["data-toggle"] = true;
		$groupOnlyAttrs["data-target"] = true;
		$groupOnlyAttrs["aria-haspopup"] = true;
		$groupOnlyAttrs["aria-expanded"] = true;

		$groupOnlyMode = !$this->showAsLink() && $this->showAsGroup();

		if( $groupOnlyMode && !$this->isTreelike( $menuMode ) )
		{
			$childWithLink = $this->getFirstChildWithLink();
			if( $childWithLink )
			{
				$groupOnlyAttrs["href"] = true;
				$linkChildAttrs = $childWithLink->getMenuItemAttributes( $menuMode );
				$attrs['href'] = $linkChildAttrs['href'];
			}
		}

		$option_attrs = "";
		$link_attrs = "";
		foreach( $attrs as $key => $value )
		{
			if( $groupOnlyMode && !$groupOnlyAttrs[ $key ] )
				continue;
			if( !$value )
				continue;
			if( $key == "value" || $key == "link" )
				$option_attrs .= ' ' . $key . '="' . $value . '"';
			else
				$link_attrs .= ' ' . $key . '="' . $value . '"';
		}


		if( $groupOnlyMode )
		{
			$option_attrs = "disabled";
		}
		$ret[ "item_attrs" ] = $link_attrs;
		$ret[ "item_optionattrs" ] = $option_attrs;
		return $ret;

	}

	/**
	 * Find a menu descendant with a link
	 *
	 */
	function getFirstChildWithLink()
	{
		if( $this->showAsLink() )
			return $this;
		foreach( $this->children as $child )
		{
			if( $child->showAsLink() )
				return $child;
		}
		foreach( $this->children as $child )
		{
			$childWithLink = $child->getFirstChildWithLink();
			if( $childWithLink )
				return $childWithLink;
		}
		return null;
	}
	/**
	 * Assign values for groups that not links
	 *
	 * @param link $xt
	 */
	function assignGroupOnly(&$xt)
	{
		// assign title between tag a
		$xt->assign("item".$this->id."_title", $this->title);
		// assign common attr
		$attrForAssign = ' id="itemlink'.$this->id.'" itemtitle="'.$this->title.'" '.($this->style ? ' style="cursor:default;text-decoration:none; '.$this->style.'"' : '');

		$xt->assign("item".$this->id."_menulink_attrs", $attrForAssign);
		$xt->assign("item".$this->id."_optionattrs","disabled");
	}
	/**
	 * Highest priority item is shown as active when the host page is not in menu
	 * Checks if this item is the highest priority item in the menu for its table.
	 * @return Boolean
	 */
	function highestPriorityItem()
	{
		if( !isset( $this->menuTableMap[ $this->table ] ) )
			return false;

		$priorityList = array( 'list', 'chart', 'report', 'search', 'add', 'print');
		$pageTypesInMenu = array_keys( $this->menuTableMap[ $this->table ] );

		
		$priorityIdx = array_search( strtolower( $this->pageType ), $priorityList );
		if( $priorityIdx === false ) 
			$priorityIdx = count( $priorityList );
		for( $i = 0; $i < $priorityIdx; ++$i ) {
			if( array_search( $priorityList[ $i ], $pageTypesInMenu ) !== false ) {
				return false;
			}
		}
		return true;
	}

	/**
	 * Check if current page, that we want to show, isset in menu elements collection
	 *
	 * @param string $pageName
	 * @return bool
	 */
	function hostPageInMenu( $hostTable, $hostPageType )
	{
		return isset( $this->menuTableMap[ $hostTable ][ $hostPageType ] );
	}

	/**
	 * Returns array of keys in lower case
	 *
	 * @param array $arr
	 * @return array
	 */
	function changeKeysInLowerCaseFromArr($arr) {
		$lowArr = array();
		foreach ($arr as $key=>$val){
			$lowArr[] = strtolower($key);
		}
		return $lowArr;
	}
	/**
	 * Clear session params
	 *
	 */
	function clearMenuSession()
	{
		if (isset($_SESSION['menuItemId']))
			unset($_SESSION['menuItemId']);

	}
	/**
	 * Set session params before start
	 *
	 */
	static function setMenuSession()
	{
		if (postvalue("menuItemId"))
			$_SESSION['menuItemId'] = postvalue("menuItemId");
	}

	function getItemDescendants( &$descendants, $level = 0 )
	{
		foreach( $this->children as $child )
		{
			$descendants[] = $child;
			if( $level )
				$child->getItemDescendants( $descendants, $level - 1 );
		}
	}

	function isTreelike( $menuMode )
	{
		return MENU_VERTICAL == $menuMode && ProjectSettings::isMenuTreelike( $this->menuId );
	}

	/**
	 * @param MenuItem $root
	 * @param Integer $id
	 * @return MenuItem reference
	 */
	static function & findItemById( $root, $id ) {
		if( !$id || $root->id == $id ) {
			return $root;
		}

		foreach( $root->children as $child ) {
			$item = MenuItem::findItemById( $child, $id );
			if( $item ) {
				return $item;
			}
		}

		return null;
	}
	
	/**
	 * @param MenuItem $root
	 * @param Array $ids
	 */
	protected static function getMenuIds( $root, &$ids = array() ) {
		$ids[] = $root->id;
		foreach( $root->children as $child ) {
			MenuItem::getMenuIds( $child, $ids );
		}
		
		return $ids;
	}

	/**
	 * @param MenuItem $root
	 */
	static function newId( $root ) {
		$ids = MenuItem::getMenuIds( $root );
		$newId = substr( md5( implode('', $ids) ), 0, 12 );
		
		$i = 0;
		while( in_array( $newId, $ids ) ) {
			$newId = $newId . ++$i;
		}

		return $newId;
	}

	/**
	 * @param MenuItem $item
	 * @return MenuItem
	 */
	static function cloneNode( $item ) {
		// stub data
		$menuNode = array();
		$cloneItem = new MenuItem( $menuNode, $item->menuTableMap, null );

		$cloneItem->id = $item->id;
		$cloneItem->name = $item->name;
		$cloneItem->type = $item->type;
		$cloneItem->href = $item->href;	
		$cloneItem->title = $item->title;
		$cloneItem->style = $item->style;	
		$cloneItem->table = $item->table;
		$cloneItem->params = $item->params;
		$cloneItem->linkType = $item->linkType;
		$cloneItem->pageType = $item->pageType;
		$cloneItem->pageId = $item->pageId;
		$cloneItem->openType = $item->openType;
		$cloneItem->icon = $item->icon;
		$cloneItem->iconType = $item->iconType;
		$cloneItem->iconShow = $item->iconShow;
		
		$cloneItem->menuId = $item->menuId;
		$cloneItem->menuTableMap =& $item->menuTableMap;


		return $cloneItem;
	}

	/**
	 * Collect all tree nodes as array, including self
	 * @return Array<MenuItem>
	 */
	public function collectNodes() {
		$queue = array( $this );
		
		foreach( $this->children as $child ) {
			$queue = array_merge( $queue, $child->collectNodes() );
		}

		return $queue;
	}
}
?>