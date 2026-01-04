<?php
class ProjectSettings
{
	var $_table;

	var $_pageMode;

	var $_pageType;

	var $_page;

	var $_viewPage = PAGE_VIEW;

	var $_defaultViewPage = PAGE_VIEW;

	var $_editPage = PAGE_EDIT;

	var $_defaultEditPage = PAGE_EDIT;

	var $_tableData = array();

	/**
	 * _auxTableData is used for all page-related settings such as getDefaultPage, getPageOption etc
	 * The only page so far where table != auxTable is Register
	 * table is <users> there and auxTable is GLOBAL_PAGES
	 */
	var $_auxTable = "";
	var $_auxTableData = array();

	var $_pageOptions = array();

	var $_dashboardElemPSet = array();

	/**
	 * @param String table - project entity where table and field-level settings are read from
	 * @param pageType
	 * @param page - specific page id. When empty, the default page of type $pageType is used.
	 * 				 IMPORTANT! $page is stronger that $pageType. When page contradicts pageType,
	 * 	  			 e.g. $page.type is 'view', but $pageType is 'list', $pageType is ignored
	 * @param $pageTable - project entity where page-level settigns are read from. When empty, $table is used
	 */
	function __construct($table = "", $pageType = "", $page = "", $pageTable = "")
	{
		if( !$table )
			$table = GLOBAL_PAGES;
		if( !$pageTable )
			$pageTable = $table;
		$this->setTable($table);
		if( $table == $pageTable) {
			$this->_auxTableData = & $this->_tableData;
			$this->_auxTable = $this->_table;
		} else {
			$this->loadAuxTable( $pageTable );
		}
		if( $page ) {
			//	determine the page type to avoid unnecessary permission reading
			//	when creating pSetSearch
			$this->_pageType = $this->getOriginalPageType( $page );
		}



		if( $page && array_key_exists($page, $this->getPageIds()) ) {
			$this->setPage($page);
			$this->setPageType( $this->getPageType() );
		} else {
			if( !$pageType ) {
				//	pick default page type for the entity
				$pageType = $this->getDefaultPageType();
			}
			if( $pageType ) {
				$this->_pageType = $pageType;
				$page = $this->getDefaultPage( $pageType );
				if( $page )
				{
					$this->setPage( $page );
				}
			}
		}
		if( $page && !$pageType ) {
			$pageType = $this->getPageType();
		}
		if ( $pageType ) {
			$this->setPageType($pageType);
		}

		//	substitute page if mobile substitution needed
		global $mediaType;
		$mobileSub = $this->getMobileSub();
		if( $mediaType && $mobileSub ) {
			if( array_key_exists( $mobileSub, $this->getPageIds()) ) {
				$this->setPage( $mobileSub );
			}
		}
	}

	function table() {
		return $this->_table;
	}

	
	/**
	 * Legacy. 
	 * Was used in business templates
	 */
	function getTableName() {
		return $this->table();
	}

	function loadPageOptions( $option = "" ) {
		if( $this->_pageOptions )
			return;
		importPageOptions( $this->_auxTable, $this->_page );
		global $page_options;
		$this->_pageOptions = &$page_options[$this->_auxTable][$this->_page];


	}

	function setPage($page) {
		if( $page != $this->_page ) {
			$dummy = null;
			$this->_pageOptions = &$dummy;
		}
		$this->_page = $page;
		//	there is no such page!
		if( array_search( $page, $this->getPageIds() ) === FALSE ) {
			return;
		}
	}

	function setTable($table)
	{
		$this->_table = $table;
//		global $tables_data, $field_labels, $fieldToolTips, $placeHolders, $page_titles, $detailsTablesData, $masterTablesData, $bSubqueriesSupported;
		if(GetTableURL($table) != "") {
			importTableSettings( $table );
		}

		global $runnerTableSettings;
		if(isset( $runnerTableSettings[$this->_table]) )
			$this->_tableData = &$runnerTableSettings[$this->_table];

		$pageType = $this->getDefaultPageType();

		$this->_editPage = $this->getDefaultEditPageType($pageType);
		$this->_viewPage = $this->getDefaultViewPageType($pageType);
		$this->_defaultEditPage = $this->_editPage;
		$this->_defaultViewPage = $this->_viewPage;
	}

	function loadAuxTable($auxTable)
	{
		$this->_auxTable = $auxTable;
		if( GetTableURL($auxTable) != "" ) {
			importTableSettings( $auxTable );
		}

		global $runnerTableSettings;
		if(isset( $runnerTableSettings[$this->_auxTable]) )
			$this->_auxTableData = &$runnerTableSettings[$this->_auxTable];
	}


	function pageName() {
		return $this->_page;
	}

	function pageType() {
		return $this->_pageType;
	}


	/**
	 * Return table where the page belongs. <global> for Login, Register page desite table==usersTable
	 */
	function pageTable() {
		return $this->_auxTable;
	}

	function getDefaultViewPageType($tableType)
	{
		if($tableType == PAGE_CHART || $tableType == PAGE_REPORT)
			return $tableType;

		return PAGE_VIEW;
	}

	function getDefaultEditPageType($tableType)
	{
		if($tableType == PAGE_CHART || $tableType == PAGE_REPORT)
			return PAGE_SEARCH;

		return PAGE_EDIT;
	}

	function setPageType($page)
	{
		//	a deeper checking for table and page types compatibility might be added here
		if($this->isPageTypeForView($page))
		{
			$tableType = $this->getDefaultPageType();
			if($tableType != "report" && $tableType != "chart"
				&& ($page == PAGE_CHART || $page == PAGE_REPORT))
				$this->_viewPage = PAGE_LIST;
			else
				$this->_viewPage = $page;
			$this->_defaultViewPage = $this->getDefaultViewPageType($tableType);
		}
		if($this->isPageTypeForEdit($page))
		{
			$this->_editPage = $page;
			$this->_defaultEditPage = $this->getDefaultEditPageType($this->getDefaultPageType());
		}
	}

	function getDefaultPages() {
		$this->updatePages();
		return $this->getAuxTableValue("defaultPages");
	}

	function getDefaultPage( $type, $pageTable = "" ) {
		$this->updatePages();
		$defPages =& $this->getAuxTableValue("defaultPages");
		$defPage = $defPages[$type];
		if( $defPage )
			return $defPage;
		return null;
	}

	function getPageIds() {
		$this->updatePages();
		$ret = $this->getAuxTableValue("pageTypes");
		if( !is_array( $ret ) )
			return array();
		return $ret;
	}

	function getEditPageType()
	{
		return $this->_editPage;
	}

	function isPageTypeForView($ptype)
	{
		global $pageTypesForView;
		return in_array(strtolower($ptype), $pageTypesForView);
	}

	function isPageTypeForEdit($ptype)
	{
		global $pageTypesForEdit;
		return in_array(strtolower($ptype), $pageTypesForEdit);
	}

	function getPageTypeByFieldEditFormat($field, $editFormat )
	{
		$editFormats = $this->getTableValue( "fields", $field, "editFormats" );
		foreach( $editFormats as $pageType => $ef ) {
			if( $ef['format'] == $editFormat ) {
				return $pageType;
			}
		}
		return '';
	}

	/**
	 * Specify path to arguments in $key1, $key2 etc
	 * Returns FALSE if not found
	 */
	function getPageOption($key1, $key2 = FALSE, $key3 = FALSE, $key4 = FALSE, $key5 = FALSE )
	{
		$this->loadPageOptions( $key1.$key2 );
		if( !isset( $this->_pageOptions[ $key1 ] ) )
			return FALSE;
		$keys = array( $key1 );
		if( $key2!== FALSE )
			$keys[]= $key2;
		if( $key3!== FALSE )
			$keys[]= $key3;
		if( $key4!== FALSE )
			$keys[]= $key4;
		if( $key5!== FALSE )
			$keys[]= $key5;

		$opt = &$this->_pageOptions;
		foreach( $keys as $k ) {
			if( !is_array( $opt ) )
				return FALSE;
			if( !isset( $opt[ $k ] ) )
				return FALSE;
			$opt = &$opt[$k];
		}
		return $opt;
	}

	/**
	 * Like getPageOption, but always returns an array
	 */
	function getPageOptionAsArray($key1, $key2 = FALSE, $key3 = FALSE, $key4 = FALSE, $key5 = FALSE ) {
		$ret =& $this->getPageOption( $key1, $key2, $key3, $key4, $key5);
		if( !$ret || !is_array( $ret ) ) {
			return array();
		}
		return $ret;
	}

	/**
	 * Specify path to arguments in $key1, $key2 etc
	 * Returns FALSE if not found
	 */
	function getPageOptionArray( $keys )
	{
		$this->loadPageOptions();
		$opt = &$this->_pageOptions;
		foreach( $keys as $k ) {
			if( !is_array( $opt ) )
				return FALSE;
			if( !isset( $opt[ $k ] ) )
				return FALSE;
			$opt = &$opt[$k];
		}
		return $opt;
	}

	public function getEffectiveViewFormat( $field ) {
		
		$viewFormats = &$this->_tableData['fields'][ $field ]['viewFormats'];
		if( !is_array( $viewFormats ) || !$viewFormats ) {
			return null;
		}

		if( !@$this->_tableData['fields'][ $field ]['separateEditViewFormats'] ) {
			if( @$viewFormats['view'] ) {
				return 'view';
			}
			if( $this->getEntityType() == titREPORT ) {
				return 'report';
			}
		}

		$effectiveView = $this->getEffectiveViewPage( $field );
		if( array_key_exists( $effectiveView, $viewFormats ) ) {
			return $effectiveView;
		}
		$formats = array_keys( $viewFormats );
		return $formats[0];
	}

	public function getEffectiveEditFormat( $field ) {
		
		$editFormats = &$this->_tableData['fields'][ $field ]['editFormats'];
		if( !is_array( $editFormats ) || !$editFormats ) {
			return null;
		}
		if( !@$this->_tableData['fields'][ $field ]['separateEditViewFormats'] ) {
			//	charts and reports can have either 'edit' or 'search' format
			//	10.x version had 'search', 1 has 'edit'
			if( array_key_exists( 'edit', $editFormats ) ) {
				return 'edit';
			}
			$formats = array_keys( $editFormats );
			return $formats[0];
		}
		$effectiveEdit = $this->getEffectiveEditPage( $field );
		if( array_key_exists( $effectiveEdit, $editFormats ) ) {
			return $effectiveEdit;
		}
		$formats = array_keys( $editFormats );
		return $formats[0];
		
	}

	public function getEffectiveEditPage( $field )
	{
		if( $this->isSeparate($field) )
		{
			return $this->_editPage;
		}
		return $this->_defaultEditPage;
	}

	public function getEffectiveViewPage( $field )
	{
		if( $this->isSeparate($field) )
		{
			if( $this->_pageMode == EDIT_INLINE && $this->_viewPage != PAGE_VIEW )
				return PAGE_LIST;
			else if ( $this->_pageMode == LIST_MASTER && $this->_viewPage == PAGE_LIST )
				return PAGE_MASTER_INFO_LIST;
			else if ( $this->_pageMode == LIST_MASTER && $this->_viewPage == PAGE_REPORT )
				return PAGE_MASTER_INFO_REPORT;
			else if ( $this->_pageMode == PRINT_MASTER && $this->_viewPage == PAGE_RPRINT )
				return PAGE_MASTER_INFO_RPRINT;
			else if ( $this->_pageMode == PRINT_MASTER )
				return PAGE_MASTER_INFO_PRINT;

			return $this->_viewPage;
		}
		return $this->_defaultViewPage;
	}


	/**
	 * findField
	 * Returns field name in correct case if the field is found. Empty string otherwise.
	 * @param {string} field name in arbitrary case, original or GoodFieldName result
	 */

	function findField( $f )
	{
		//	check exact match
		$fields = $this->getFieldsList();
		if( $this->_tableData[ 'fields' ][ $f ] ) {
			return $f;
		}
		//	check goodfieldname
		global $runnerTableLabels;
		if( isset( $runnerTableLabels[ $this->_table ]['fieldlabels'][ $f ] ) ) {
			return $this->getFieldByGoodFieldName( $f );
		}

		//	case-insensitive check
		$f = strtoupper( $f );
		foreach( $this->getFieldsList() as $ff )
		{
			if( strtoupper( $ff ) == $f )
				return $ff;

			if( strtoupper( GoodFieldName($ff) ) == $f )
				return $ff;
		}
		return "";

	}

	/**
	 * addCustomExpressionIndex
	 * Add new index to list, for determination of custom expressions position in SQL query
	 * @param {string} table wich contain a lookup field
	 * @param {string} name of lookup field
	 * @param {int} index
	 */
	function addCustomExpressionIndex($mainTable, $mainField, $index)
	{
		if(!$this->isExistsTableKey(".customExpressionIndexes"))
			$this->_tableData[".customExpressionIndexes"] = array();
		if(!isset($this->_tableData[".customExpressionIndexes"][$mainTable]))
			$this->_tableData[".customExpressionIndexes"][$mainTable] = array();
		$this->_tableData[".customExpressionIndexes"][$mainTable][$mainField] = $index;
	}

	/**
	 * getCustomExpressionIndex
	 * Get index of custom expression in SQL field
	 * @param {string} table wich contain a lookup field
	 * @param {string} name of lookup field
	 */
	function getCustomExpressionIndex($mainTable, $mainField)
	{
		if(!$this->isExistsTableKey(".customExpressionIndexes"))
			$this->_tableData[".customExpressionIndexes"] = array();
		if(isset($this->_tableData[".customExpressionIndexes"][$mainTable])
			&& isset($this->_tableData[".customExpressionIndexes"][$mainTable][$mainField]))
			return $this->_tableData[".customExpressionIndexes"][$mainTable][$mainField];

		return FALSE;
	}

	/**
	 * @return Array of string
	 */
	public function getDetailsTables() {
		return $this->getTableValue( 'detailsTables' );
	}

	/**
	 * Cached list of available details tables
	 * @return Array of string
	 */
	public function getAvailableDetailsTables() {
		if( !array_key_exists( 'availableDetailsTables', $this->_tableData ) ) {
			$available = array();
			$details = $this->getTableValue( 'detailsTables' );
			foreach( $details as $d ) {
				$strPerm = GetUserPermissions( $d );
				if( $strPerm !== '' ) {
					$available[] = $d;
				}
			}
			$this->_tableData[ 'availableDetailsTables' ] = $available;
		}
		return $this->_tableData[ 'availableDetailsTables' ];
	}


	/**
	 * Cached array of details keys
	 * @return Array( "masterKeys" => string[], "detailsKeys" => string[] )
	 */
	public function getDetailsKeys( $detailsTable ) {
		if( !array_key_exists( 'detailsKeys', $this->_tableData ) ) {
			$this->_tableData['detailsKeys'] = array();
		}
		$detailsKeys = &$this->_tableData['detailsKeys'];
		if( !array_key_exists( $detailsTable, $detailsKeys ) ) {
			$detailsPs = new ProjectSettings( $detailsTable );
			$detailsKeys[ $detailsTable ] = $detailsPs->getMasterKeys( $this->table() );
		}
		return $detailsKeys[ $detailsTable ];
	}

	public function getMasterTables() {
		return $this->getTableValue( 'masterTables' );
	}

	/**
	 * @return Array( "masterKeys" => string[], "detailsKeys" => string[] )
	 */
	public function getMasterKeys( $masterTable ) {
		foreach( $this->getMasterTables() as $master ) {
			if( $master['table'] === $masterTable ) {
				return array(
					'masterKeys' => $master['masterKeys'],
					'detailsKeys' => $master['detailsKeys'],
				);
			}
		}
		return array(
			'masterKeys' => array(),
			'detailsKeys' => array(),
		);

	}

	public function verifyMasterTable( $masterTable ) {
		if( !$masterTable ) {
			return false;
		}
		foreach( $this->getMasterTables() as $master ) {
			if( $master['table'] === $masterTable ) {
				return true;
			}
		}
		return false;
	}


	function GetFieldByIndex($index)
	{
		$fields = $this->getFieldsList();
		foreach( $fields as $f ) {
			if( $this->getFieldIndex( $f ) == $index ) {
				return $f;
			}
		}
		return null;
	}

	//	Is field has separate type for editing and viewing
	function isSeparate( $field ) {
		return $this->getFieldValue( $field, 'separateEditViewFormats' );
	}

	// return field label
	function label( $field ) {
		$result = GetFieldLabel( GoodFieldName($this->_table), GoodFieldName($field) );
		return $result != "" ? $result : $field;
	}

	function getFilenameField( $field ) {
		return $this->getFieldValue( $field, 'view', 'fileFilenameField' );
	}

	//	return hyperlink prefix
	//	viewFormat setting
	function getLinkPrefix( $field ) {
		return $this->getFieldValue( $field, 'view', 'linkPrefix' );
	}

	/**
	 * Get hyperlink type
	 */
	function getLinkType( $field ) {
		return $this->getFieldValue( $field, 'view', 'linkDisplay' );
	}

	/**
	 * Get hyperlink display field for title
	 * @return string field name
	 */
	function getLinkDisplayField( $field ) {
		return $this->getFieldValue( $field, 'view', 'linkDisplayField' );
	}

	function openLinkInNewWindow( $field ) {
		return $this->getFieldValue( $field, 'view', 'linkNewWindow' );
	}

	function getLinkDisplayText( $field ) {
		return $this->getFieldValue( $field, 'view', 'linkDisplayText' );
	}

	//	return database field type
	//	using ADO DataTypeEnum constants
	//	the full list available at:
	//	http://msdn.microsoft.com/library/default.asp?url=/library/en-us/ado270/htm/mdcstdatatypeenum.asp
	function getFieldType( $field ) {
		return $this->getFieldValue( $field, 'type' );
	}

	function getRestDateFormat( $field ) {
		return $this->getFieldValue( $field, 'restDateFormat' );
	}

	function isAutoincField( $field ) {
		return $this->getFieldValue( $field, 'autoinc' );
	}

	function getCustomExpression( $field, $value, $data )
	{
		$events = getEventObject( $this );
		$pageType = $this->getEffectiveViewFormat( $field );
		return $events->customExpression( $field, $pageType, $value, $data );
	}

	function getDefaultValue( $field )
	{
		$events = getEventObject( $this );
		$pageType = $this->getEffectiveEditFormat( $field );
		if( !$events->hasDefaultValue( $field, $pageType ) ) {
			return '';
		}
		return $events->defaultValue( $field, $pageType );
	}

	function getSearchDefaultValue( $field ) {
		if( !$this->isSeparate( $field ) ) {
			return '';
		}
		return $this->getDefaultValue( $field );
	}

	function isAutoUpdatable( $field ) {
		$events = getEventObject( $this );
		$pageType = $this->getEffectiveEditFormat( $field );
		return $events->hasAutoUpdateValue( $field, $pageType );
	}

	function getAutoUpdateValue( $field ) {
		$events = getEventObject( $this );
		$pageType = $this->getEffectiveEditFormat( $field );
		if( !$events->hasAutoUpdateValue( $field, $pageType ) ) {
			return '';
		}
		return $events->autoUpdateValue( $field, $pageType );
	}

	//	return Edit format
	//	editFormats
	function getEditFormat( $field ) {
		return $this->getFieldValue( $field, 'edit', 'format' );
	}

	//	return View format
	//	viewFormat setting
	function getViewFormat( $field ) {
		return $this->getFieldValue( $field, 'view', 'format' );
	}

	//	show time in datepicker or not
	function dateEditShowTime( $field ) {
		return $this->getFieldValue( $field, 'edit', 'dateShowTime' );
	}

	function lookupControlType( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupControlType' );
	}

	function lookupListPageId( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupListPage' );
	}
	function lookupAddPageId( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupAddPage' );
	}

	function isDeleteAssociatedFile( $field ) {
		return $this->getFieldValue( $field, 'deleteFile' );
	}

	//	is Lookup wizard dependent or not
	function useCategory( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupDependent' );
	}

	//	is Lookup wizard with multiple selection
	function multiSelect( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupMultiselect' );
	}

	/**
	 * Returns list of fields in the table that use cloud storage providers
	 * Only OAuth providers are checked here
	 * GoogleDrive, OneDrive, Dropbox
	 * @return Array of string
	 */
	function getOAuthCloudFields() {
		if( !ProjectSettings::getProjectValue( 'cloudSettings', 'cloudGDriveClientId' )
			&& !ProjectSettings::getProjectValue( 'cloudSettings', 'cloudOneDriveClientId' )
			&& !ProjectSettings::getProjectValue( 'cloudSettings', 'cloudDropboxClientId' )
		) {
			//	nothing to check
			return array();
		}
		$fields = array();
		foreach( $this->getFieldsList() as $field ) {
			$stp = $this->fileStorageProvider( $field );
			if( $stp == stpGOOGLEDRIVE
				|| $stp == stpDROPBOX
				|| $stp == stpONEDRIVE ) {

				$fields[] = $field;
			}
		}
		return $fields;
	}

	/**
	 * When a field is edited as single-select lookup wizard
	 * Use case:
	 * if( $pSet->multiSelect() && $pSet->singleSelectLookupEdit() )
	 * multiselect on search, single-select on add/edit.
	 * In that specific case multiple selected search values
	 * should be interpreted as:
	 * field=value1 or field=value2 or etc
	 *
	 */
	function singleSelectLookupEdit( $field )
	{
		$hasLookup = false;
		$editFormats = $this->getTableValue( "fields", $field, "editFormats" );
		foreach( $editFormats as $pageType => $editFormat ) {
			if( $pageType != "edit" && $pageType != "add" )
				continue;
			if( $editFormat["format"] != EDIT_FORMAT_LOOKUP_WIZARD )
				continue;
			$hasLookup = true;
			if( $editFormat["lookupMultiselect"] )
				return false;
		}
		return $hasLookup;
	}

	/**
	*  returns ProjectSettings object for main table if the link exists in project settings.
	*  returns NULL otherwise
	*/
	function getLookupMainTableSettings( $mainTableShortName, $mainField, $desiredPage = "" ) {
		$mainPSet = new ProjectSettings( GetTableByShort( $mainTableShortName ), $desiredPage );
		$editFormats = $mainPSet->getTableValue( "fields", $mainField, "editFormats" );
		if( !$editFormats ) {
			return null;
		}
		foreach( $editFormats as $ef ) {
			if( $ef['format'] != EDIT_FORMAT_LOOKUP_WIZARD || $ef['lookupType'] == LT_LISTOFVALUES ) {
				continue;
			}
			if( $ef['lookupTable'] == $this->table() ) {
				return $mainPSet;
			}
		}
		return null;
		
	}

	/**
	 * Check whether the field is a true multiselect lookup.
	 * True multiselect has this option on Add or Edit page, not only on Search.
	*/
	function multiSelectLookupEdit( $field )
	{
		$editFormats = $this->getTableValue( "fields", $field, "editFormats" );
		foreach( $editFormats as $pageType => $editFormat ) {
			if( $pageType != "edit" && $pageType != "add" )
				continue;
			if( $editFormat["format"] != EDIT_FORMAT_LOOKUP_WIZARD )
				continue;
			if( $editFormat["lookupMultiselect"] )
				return true;
		}
		return false;
	}

	/**
	 * Check whether the field is a lookup wizard with Link Field != Display field.
	*/
	function lookupField( $field )
	{
		$editFormats = $this->getTableValue( "fields", $field, "editFormats" );
		foreach( $editFormats as $pageType => $editFormat ) {
			if( $editFormat["format"] != EDIT_FORMAT_LOOKUP_WIZARD )
				continue;
			if( $editFormat["lookupLinkField"] != $editFormat["lookupDisplayField"] )
				return true;
		}
		return false;
	}


	// Lookup wizard select size
	function selectSize( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupSize' );
	}

	function showThumbnail( $field ) {
		return $this->getFieldValue( $field, 'view', 'imageShowThumbnail' );
	}

	function isImageURL( $field ) {
		return $this->getFieldValue( $field, 'view', 'imageUrl' );
	}

	function showCustomExpr( $field ) {
		return $this->getFieldValue( $field, 'view', 'fileShowCustom' );
	}

	function showFileSize( $field ) {
		return $this->getFieldValue( $field, 'view', 'fileShowSize' );
	}

	function displayPDF( $field ) {
		return $this->getFieldValue( $field, 'view', 'fileShowPdf' );
	}

	function showIcon( $field ) {
		return $this->getFieldValue( $field, 'view', 'fileShowIcon' );
	}

	function getImageWidth( $field ) {
		return $this->getFieldValue( $field, 'view', 'imageWidth' );
	}

	function getImageHeight( $field ) {
		return $this->getFieldValue( $field, 'view', 'imageHeight' );
	}

	function getThumbnailWidth( $field ) {
		return $this->getFieldValue( $field, 'view', 'imageThumbWidth' );
	}

	function getThumbnailHeight( $field ) {
		return $this->getFieldValue( $field, 'view', 'imageThumbHeight' );
	}

	// Get nLookupType for current field
	function getLookupType( $field ) {
		$lookupType = $this->getFieldValue( $field, 'edit', 'lookupType' );
		if( $lookupType == LT_LISTOFVALUES ) {
			return $lookupType;
		}
		//	legacy projects
		$projectTable = findTable( $this->getLookupTable( $field ) );
		return $projectTable
			? LT_QUERY
			: LT_LOOKUPTABLE;
	}

	//Get lookup table name
	function getLookupTable( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupTable' );
	}

	/**
	 *	Returns true if Lookup Where clause is specified as PHP code expression
	 *	@return Boolean
	 */
	function isLookupWhereCode( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupWhereCode' );
	}

	function isLookupWhereSet( $field ) {
		return 0 != strlen( $this->getFieldValue( $field, 'edit', 'lookupWhere' ) );
	}


	function getLookupWhere( $field ) {
		if( $this->getEntityType() == titDASHBOARD )
		{
			$pSet = $this->getDashSearchFieldSettings( $field );
			if( !$pSet ) {
				return '';
			}
			return $pSet->getLookupWhere( $field );
		}
		
		if( $this->isLookupWhereCode( $field )) {
			$events = getEventObject( $this );
			$pageType = $this->getEffectiveEditFormat( $field );
			if( !$events->hasLookupWhere( $field, $pageType ) ) {
				return '';
			}
			return $events->lookupWhere( $field, $pageType );
		}

		return $this->getFieldValue( $field, 'edit', 'lookupWhere' );
	}



	function getNotProjectLookupTableConnId( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupTableConnection' );
	}

	function getConnId()
	{
		return $this->getTableValue( 'connId' );
	}

	function getLinkField( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupLinkField' );
	}

	function getDisplayField( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupDisplayField' );
	}

	/**
	 * Lookup custom display field
	 */
	function getCustomDisplay( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupCustomDisplay' );
	}

	//	???
	function NeedEncode( $field ) {
		$nonEncodeViewFormats = array(
			FORMAT_CUSTOM, 
			FORMAT_HTML,
			FORMAT_FILE,
			FORMAT_FILE_IMAGE,
			FORMAT_CHECKBOX,
			FORMAT_EMAILHYPERLINK,
			FORMAT_HYPERLINK
		);
		return array_search( $this->getViewFormat( $field ), $nonEncodeViewFormats ) === false;
	}

	/**
	 * return String
	 */
	function getValidationType( $field ) {
		return $this->getFieldValue( $field, 'edit', 'validateAs' );
	}

	/**
	 * Get array of validation for control
	 */
	function getValidationData( $field ) {
		$ret = array();
		$ret["basicValidate"] = array();
		$ret["customMessages"] = array();
		$editFormat = $this->getEditFormat( $field );
		$validationType = $this->getValidationType( $field );
		if( $validationType && ( $editFormat == EDIT_FORMAT_TEXT_FIELD || $editFormat == EDIT_FORMAT_TIME || $editFormat == EDIT_FORMAT_PASSWORD ) ) {
			$ret["basicValidate"][] = getJsValidatorName( $validationType );
			if( $validationType === VALIDATE_AS_REGEXP ) {
				$ret["regExp"] = $this->getFieldValue( $field, 'edit', 'validateRegex' );
				$ret["customMessages"]["RegExp"] = $this->getFieldValue( $field, 'edit', 'validateRegexMessage' );
			}
		}
		if( $this->isRequired( $field ) && $editFormat != EDIT_FORMAT_READONLY ) {
			$ret["basicValidate"][] = "IsRequired";
		}
		if( !$this->allowDuplicateValues( $field ) ) {
			$ret["basicValidate"][] = "DenyDuplicated";
			$ret["customMessages"]["DenyDuplicated"] = $this->getFieldValue( $field, 'edit', 'denyDuplicateMessage' );
		}
		return $ret;
	}

	/**
	 * Returns array of items for a given field
	 */
	function getFieldItems( $field )
	{
		return $this->getPageOption( "fields", "fieldItems", $field );
	}

	/**
	 * Returns array of group fields
	 */
	function getGroupFields()
	{
		return $this->getPageOption( "dataGrid", "groupFields");
	}

	/**
	 * Check is appear current field on list page
	 * return boolean - true or false
	 */
	function appearOnListPage( $field ) {
		if( array_search( $field, $this->getPageOption("fields", "gridFields") ) !== FALSE )
			return true;
		if( isReport( $this->getEntityType() ) ) {
			return array_search( $field, $this->getReportGroupFields() ) !== FALSE;
		}
		return false;
	}

	/**
	 * Check is appear current field on add page
	 * return boolean - true or false
	 */
	function appearOnAddPage( $field ) {
		return $this->appearOnPage( $field );
	}

	/**
	 * Check is appear current field on inline add
	 * return boolean
	 */
	function appearOnInlineAdd( $field ) {
		$fields =& $this->getInlineAddFields();
		if( !$fields ) {
			return false;
		}
		return array_search( $field, $fields ) !== FALSE;
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnEditPage( $field ) {
		return $this->appearOnPage( $field );
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnInlineEdit( $field ) {
		$inlineFields =& $this->getInlineEditFields();
		if( !$inlineFields ) {
			return false;
		}
		return array_search( $field, $inlineFields ) !== FALSE;
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnUpdateSelected( $field ) {
		$updateOnEditFields = $this->getPageOption("fields", "updateOnEditFields");
		if( !$updateOnEditFields )
			return false;

		return array_search( $field, $this->getPageOption("fields", "updateOnEditFields") ) !== FALSE;
	}

	function appearOnPage( $field ) {
		$gridFields = &$this->getPageOption("fields", "gridFields");
		if( !$gridFields )
			$ret = false;
		else
			$ret = ( array_search( $field, $gridFields ) !== FALSE );
		if( !$ret ) {
			if( $this->getPageType() === 'report' || $this->getPageType() === 'rprint' )
				return array_search( $field, $this->getReportGroupFields() ) !== false;
		}
		return $ret;
	}

	function appearOnSearchPanel( $field ) {
		$fields = &$this->getPageOption("fields", "searchPanelFields");
		if( !$fields )
			return false;

		return array_search( $field, $fields ) !== FALSE;
	}


	function appearAlwaysOnSearchPanel( $field ) {
		$fields  = &$this->getPageOption("listSearch", "alwaysOnPanelFields");
		if( !$fields )
			return false;

		return array_search( $field, $fields ) !== FALSE;

	}

	function getPageFields()
	{
		$fields = $this->getPageOptionAsArray("fields", "gridFields" );
		if( isReport( $this->getEntityType() ) ) {
			return array_merge( $fields, $this->getReportGroupFields() );
		}
		return $fields;
	}

	/**
	 * Check is appear current field on view page
	 * return boolean - true or false
	 */
	function appearOnViewPage( $field ) {
		return $this->appearOnPage( $field );
	}

	/**
	 * Check is appear current field on print page
	 * return boolean - true or false
	 */
	function appearOnPrinterPage( $field ) {
		return $this->appearOnListPage($field);
	}

	function isVideoUrlField( $field ) {
		return $this->getFieldValue( $field, 'view', 'videoFieldContainsFileURL' );
	}

	function isAbsolute( $field ) {
		return $this->getFieldValue( $field, 'absolutePath' );
	}

	function getAudioTitleField( $field ) {
		return $this->getFieldValue( $field, 'view', 'videoTitleField' );
	}

	function getVideoWidth( $field ) {
		return $this->getFieldValue( $field, 'view', 'videoWidth' );
	}

	function getVideoHeight( $field ) {
		return $this->getFieldValue( $field, 'view', 'videoHeight' );
	}

	function isRewindEnabled( $field ) {
		return $this->getFieldValue( $field, 'view', 'videoRewindEnabled' );
	}

	/**
	 * @param String field
	 * @return Array
	 */
	function getParentFieldsData( $field )
	{
		if( !$this->useCategory( $field ) ) {
			return array();
		}
		$categoryFields = array();
		foreach( $this->getFieldValue( $field, 'edit', 'lookupDependentFields' ) as $fields ) {
			$categoryFields[] = array(
				'main' => $fields['masterField'],
				'lookup' => $fields['lookupField']
			);
		}
		return $categoryFields;
	}

	/**
	 * @param String field
	 * @return Array
	 */
	function getLookupParentFNames( $field )
	{
		$fNames = array();
		foreach( $this->getParentFieldsData( $field ) as $data )
		{
			$fNames[] = $data["main"];
		}
		return $fNames;
	}

	function isLookupUnique( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupUnique' );
	}

	function getLookupOrderBy( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupOrderBy' );
	}

	function isLookupDesc( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupOrderByDesc' );
	}

	function getOwnerTable( $field ) {
		return $this->getFieldValue( $field, 'tableName' );
	}

	function isFieldEncrypted( $field ) {
		return $this->getFieldValue( $field, 'encrypted' );
	}

	function isAllowToAdd( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupAllowAdd' );
	}

	function isAllowToEdit( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupAllowEdit' );
	}

	public static function encryptSettings( $connId ) {
		$ret = ProjectSettings::getProjectValue( 'connEncryptInfo', $connId  );
		if( !$ret ) {
			$ret = array(
				"encryptMethod" => 0
			);
		}
		return $ret;
	}


	/**
	 * Get the array containing the autocomplete fields data
	 * basing on page's type and lookup wizard settings
	 * @param String field
	 * @return Array
	 */
	function getAutoCompleteFields( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupAutofillFields' );
	}

	function isAutoCompleteFieldsOnEdit( $field ) {
		return $this->getFieldValue( $field, 'edit', 'lookupAutofillEdit' );
	}

	function isFreeInput( $field ) {
		return $this->lookupControlType( $field ) == LCT_AJAX 
			&& $this->getDisplayField( $field ) == $this->getLinkField( $field )
			&& $this->getFieldValue( $field, 'edit', 'lookupFreeInput' );
	}

	function getMapData( $field ) {
		if( $this->getViewFormat( $field ) != FORMAT_MAP ) {
			return array();
		}
		$mapData = array(
			'width' => $this->getFieldValue( $field, 'view', 'mapWidth' ),
			'height' => $this->getFieldValue( $field, 'view', 'mapHeight' ),
			'address' => $this->getFieldValue( $field, 'view', 'mapAddressField' ),
			'lat' => $this->getFieldValue( $field, 'view', 'mapLatField' ),
			'lng' => $this->getFieldValue( $field, 'view', 'mapLonField' ),
			'desc' => $this->getFieldValue( $field, 'view', 'mapDescriptionField' ),
			'mapIcon' => $this->getFieldValue( $field, 'view', 'mapMarkerIcon' ),
			'isMapIconCustom' => $this->getFieldValue( $field, 'view', 'mapMarkerCodeExpression' ),
		);
		$zoom = $this->getFieldValue( $field, 'view', 'mapZoom' );
		if( $zoom ) {
			$mapData[ 'zoom' ] = $zoom;
		}
		return $mapData;
	}

	function getFormatTimeAttrs( $field ) {
		$hours = $this->getFieldValue( $field, 'edit', 'timeConvention' ) == 0
			? 12
			: 24;
		return array(
			"useTimePicker" => $this->getFieldValue( $field, 'edit', 'timeUseTimepicker' ),
			"hours" => $hours,
			"minutes" => $this->getFieldValue( $field, 'edit', 'timeMinutesStep' ),
			"showSeconds" => $this->getFieldValue( $field, 'edit', 'timeShowSeconds' )
		);
	}

	function getViewAsTimeFormatData( $field ) {
		return array(
			"showSeconds" => $this->getFieldValue( $field, 'view', 'timeShowSeconds' ),
			"showDaysInTotals" => false,
			"timeFormat" => $this->getFieldValue( $field, 'view', 'timeFormat' )
		);
	}

	function showDaysInTimeTotals( $field ) {
		$formatData = $this->getViewAsTimeFormatData( $field );
		return $formatData ? $formatData["showDaysInTotals"] : false;
	}

	/**
	 * Check is appear current field on export page
	 * return boolean - true or false
	 */
	function appearOnExportPage( $field ) {
		return $this->appearOnpage($field);
	}

	/**
	 * Return original table name for report or chart
	 */
	function getStrOriginalTableName()
	{
		return $this->getTableValue( 'originalTable' );
	}

	function getSearchableFields()
	{
		if( $this->getEntityType() == titDASHBOARD ) {
			return $this->getPageOptionAsArray( 'dashSearch', 'allSearchFields');
		}
		return $this->getTableValue( 'searchSettings', 'searchableFields' );
	}

	function getAllSearchFields()
	{
		return $this->getEntityType() == titDASHBOARD
			? $this->getPageOptionAsArray("dashSearch", "allSearchFields")
			: $this->getPageOptionAsArray("fields", "searchPanelFields");
	}

	function getAdvSearchFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields");
	}


	public function getDefaultPageType() {
		return ProjectSettings::defaultPageType( $this->getEntityType() );
	}

	public static function defaultPageType( $entityType )
	{
		switch( $entityType ) {
			case titTABLE:
			case titVIEW:
			case titSQL:
			case titREST:
				return 'list';
			case titDASHBOARD:
				return 'dashboard';
			case titGLOBAL:
				return 'menu';
				
			case titREPORT:
			case titSQL_REPORT:
			case titREST_REPORT:
				return 'report';
			case titCHART:
			case titSQL_CHART:
			case titREST_CHART:
				return 'chart';
		}
		return '';
	}

	function getShortTableName()
	{
		return GetTableURL( $this->_table );
	}

	function isShowAddInPopup()
	{
		return $this->getPageOption("list", "addInPopup");
	}

	function isShowEditInPopup()
	{
		return $this->getPageOption("list", "editInPopup");
	}

	function isShowViewInPopup()
	{
		return $this->getPageOption("list", "viewInPopup");
	}

	function isResizeColumns()
	{
		return $this->getTableValue( 'resizeColumns' );
	}

	function isUseAjaxSuggest()
	{
		return $this->getTableValue( 'searchSettings', 'searchSuggest' );
	}


	function getAllPageFields()
	{
		return array_merge( $this->getPageFields(), $this->getAllSearchFields() );
	}

	function getPanelSearchFields()
	{
		return $this->getPageOptionAsArray("listSearch", "alwaysOnPanelFields");
	}

	function getGoogleLikeFields()
	{
		if( $this->getEntityType() == titDASHBOARD )
		{
			return $this->getPageOptionAsArray( 'dashSearch', 'googleLikeFields');
		}
		return $this->getTableValue( 'searchSettings', 'googleLikeSearchFields' );

	}

	function getInlineEditFields()
	{
		return $this->getPageOptionAsArray("fields", "inlineEditFields");
	}

	function getUpdateSelectedFields()
	{
		return $this->getPageOptionAsArray("fields", "updateOnEditFields");
	}

	function getExportFields()
	{
		return $this->getPageOptionAsArray("fields", "exportFields");
	}

	function getImportFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields");
	}

	function getEditFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getInlineAddFields()
	{
		return $this->getPageOptionAsArray("fields", "inlineAddFields");
	}

	function getAddFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getMasterListFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getViewFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getFieldFilterFields()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray("fields", "fieldFilterFields" ) as $f ) {
			if( !IsBinaryType( $this->getFieldType( $f ) ) ) {
				$ret[] = $f;
			}
		}
		return $ret;
	}

	function getPrinterFields()
	{
		return $this->getPageFields();
	}

	function getListFields()
	{
		$fields = $this->getPageOptionAsArray("fields", "gridFields" );
		if( isReport( $this->getEntityType() ) ) {
			return array_merge( $fields, $this->getReportGroupFields() );
		}
		return $fields;
	}

	function hasJsEvents()
	{
		return $this->getAuxTableValue("hasJsEvents");
	}

	function hasButtonsAdded()
	{
		return $this->getPageOption("page", "hasCustomButtons");
	}

	function customButtons()
	{
		return $this->getPageOptionAsArray("page", "customButtons");
	}

	function clickHandlerSnippets()	{
		return $this->getPageOptionAsArray("page", "clickHandlerSnippets");
	}

	function isUseFieldsMaps()
	{
		return $this->getTableValue( 'hasFieldMaps' );
	}
	function getOrderInfo() {
		return $this->getTableValue( 'orderInfo' );
	}

	/**
	 * 	legacy order info format
	 * [ index, direction, field ]
	 * In new code use getOrderInfo instead
	 */
	function getOrderIndexes()
	{
		$ret = array();
		foreach( $this->getOrderInfo() as $o ) {
			$ret[] = array( $o['index'], $o['dir'], $o['field'] );
		}
		return $ret;
	}

	function getStrOrderBy()
	{
		return $this->getTableValue( 'strOrderBy' );
	}

	function getSQLQuery() {
		return ProjectSettings::getTableSQLQuery( $this->table() );
	}

	static function getTableSQLQuery( $table ) {
		global $runnerTableSettings;
		$tableData = &$runnerTableSettings[ $table ];
		if( !$tableData ) {
			return null;
		}
		if( !$tableData['sqlQuery'] ) {
			$tableData['sqlQuery'] = sqlFromJson( $tableData['query'] );
		}
		return $tableData['sqlQuery'];

	}
	
	function getSQLQueryByField( $field ) {
		if( $this->getEntityType() == titDASHBOARD ) {
			$pSet = $this->getDashSearchFieldSettings( $field );
			return $pSet->getSQLQuery();
		} else {
			return $this->getSQLQuery();
		}
	}

	function getDashSearchFieldSettings( $field ) {
		$dashSearchFields = $this->getDashboardSearchFields();
		return new ProjectSettings($dashSearchFields[$field][0]["table"], $this->_editPage);
	}

	/**
	 * Create Thumbnail or not
	 */
	function getCreateThumbnail( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileCreateThumbnail' );
	}

	/**
	 * Return Thumbnail prefix
	 */
	function getStrThumbnail( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileThumbnailPrefix' );
	}
	function getThumbnailField( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileThumbnailField' );
	}

	/**
	 * Return Thumbnail prefix
	 */
	function getThumbnailSize( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileThumbnailSize' );
	}

	/**
	 * Resize on upload
	 */
	function getResizeOnUpload( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileResize' );
	}

	/**
	 * True if FileField must work in old single-file mode
	 */
	function isBasicUploadUsed( $field ) {
		return $this->getFieldValue( $field, 'basicUpload' );
	}

	/**
	 * Get size to reduce image after upload
	 */
	function getNewImageSize( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileResizeSize' );
	}

	function getAcceptFileTypes( $field ) {
		$ret = array();
		foreach( $this->getFieldValue( $field, 'edit', 'fileTypes' ) as $ext ) {
			$ret[] = strtoupper( $ext );
		}
		return $ret;
	}

	function getAcceptFileTypesHtml( $field ) {
		$ret = array();
		foreach( $this->getFieldValue( $field, 'edit', 'fileTypes' ) as $ext ) {
			$ret[] = '.' . $ext;
		}
		return implode( ',', $ret );

	}

	/**
	 * Get maximum allowed size for uploaded files
	 */
	function getMaxFileSize( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileSizeLimit' );
	}

	/**
	 * Get maximum allowed size for all uploaded files per field
	 */
	function getMaxTotalFilesSize( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileTotalSizeLimit' );
	}

	/**
	 * Get maximum allowed number of uploaded files
	 */
	function getMaxNumberOfFiles( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fileMaxNumber' );
	}

	/**
	 * Return height of text area
	 * EditFormat setting
	 */
	function getNRows( $field ) {
		return $this->getFieldValue( $field, 'edit', 'textareaHeight' );
	}

	/**
	 * Return original table name
	 */
	function getOriginalTableName()
	{
		$result = $this->getTableValue("originalTable");
		return $result != "" ? $result : $this->_table;
	}

	/**
	 * Return list of key fields
	 */
	function getTableKeys()
	{
		return $this->getTableValue( 'keyFields' );
	}

	function truncateLargeText( $field ) {
		return $this->getFieldValue( $field, 'view', 'textShowFirst' );
	}

	/**
	 * Return number of chars to show before "More..." link
	 */
	function getNumberOfChars( $field ) {
		return $this->truncateLargeText( $field ) 
			? $this->getFieldValue( $field, 'view', 'textShowFirstN' )
			: 0;
	}

	/**
	 * Check if the field is an sql expression
	 */
	function isSQLExpression( $field ) {
		return !!$this->getFieldValue( $field, 'sqlExpression' );
	}

	/**
	 * Get full field name
	 */
	function getFullFieldName( $field ) {
		return $this->getFieldValue( $field, 'sqlExpression' );
	}

	/**
	 * For Meetings business template only
	 */
	function setFullFieldName( $field, $value ) {
		$this->_tableData['fields'][ $field ][ 'sqlExpression' ] = $value;
	}

	/**
	 * Is field marked as required
	 * EditFormat setting
	 */
	function isRequired( $field ) {
		return $this->getFieldValue( $field, 'edit', 'required' );
	}

	function insertNull( $field ) {
		return $this->getFieldValue( $field, 'edit', 'textInsertNull' );
	}

	/**
	 * IS use Rich Text Editor or not
	 */
	function isUseRTE( $field ) {
		return $this->getFieldValue( $field, 'edit', 'textareaRTE' );
	}


	/**
	 * Add timestamp to filename when files uploading or not
	 * EditFormat setting
	 */
	function isUseTimestamp( $field ) {
		return $this->getFieldValue( $field, "edit", "fileAddTimestamp" );
	}

	function getFieldIndex( $field ) {
		return $this->getFieldValue( $field, 'index' );
	}

	function getEntityType()
	{
		return $this->getTableValue( "type" );
	}

	function getAuxEntityType()
	{
		return $this->getAuxTableValue( "type" );
	}

	protected function getDefaultFieldValue( $path1, $path2 = null, $path3 = null, $path4 = null ) {
		$path = array( "fields", "" );
		if( $path1 === "filter" ) {
			$path[] = "filterFormat";
		} else if( $path1 === "view" ) {
			$path[] = "filterFormats";		
			$path[] = '';
		} else if( $path1 === "edit" ) {
			$path[] = "editFormats";		
			$path[] = '';
		} else {
			$path[] = $path1;
		}
		if( $path2 !== null ) $path[] = $path2;
		if( $path3 !== null ) $path[] = $path3;
		if( $path4 !== null ) $path[] = $path4;
		return ProjectSettings::_getTableDefault( $path );

	}

	function getDashFieldValue( $field, $path1, $path2 = null, $path3 = null, $path4 = null ) {
		$dashSearchFields = $this->getDashboardSearchFields();
		$dfield = $dashSearchFields[ $field ];
		if( $dfield )
			$table = $dfield[0]["table"];
		if( !$dfield || !$table)
			return $this->getDefaultFieldvalue( $path1, $path2, $path3, $path4 );

		if( !$this->_dashboardElemPSet[ $table ] )
			$this->_dashboardElemPSet[ $table ] = new ProjectSettings( $table, $this->_editPage );

		return $this->_dashboardElemPSet[ $table ]->getFieldValue( $dfield[0]["field"], $path1, $path2, $path3, $path4 );
	}

	public static function & getFieldObj( $table, $field ) {
		global $runnerTableSettings;
		return $runnerTableSettings[ $table ][ 'fields' ][ $field ];
	}

	public static function & getFieldEditFormat( $table, $field, $pageType = 'edit' ) {
		$fieldObj = & ProjectSettings::getFieldObj( $table, $field );
		if( !array_key_exists( $pageType, $fieldObj['editFormats'] ) ) {
			$pageTypes = array_keys( $fieldObj['editFormats'] );
			$pageType = $pageTypes[0];
		}
		return $fieldObj['editFormats'][ $pageType ];
	}

	public static function & getFieldViewFormat( $table, $field, $pageType = 'view' ) {
		$fieldObj = & ProjectSettings::getFieldObj( $table, $field );
		if( !array_key_exists( $pageType, $fieldObj['viewFormats'] ) ) {
			$pageTypes = array_keys( $fieldObj['viewFormats'] );
			$pageType = $pageTypes[0];
		}
		return $fieldObj['viewFormats'][ $pageType ];
	}

	
	/**
	 * Special values for $path1
	 * "view" -> effective view format value
	 * "edit" -> effective edit format value
	 * "filter" -> filter format
	 */
	public function getFieldValue( $field, $path1, $path2 = null, $path3 = null, $path4 = null ) {

		if( $this->getEntityType() == titDASHBOARD ) {
			return $this->getDashFieldValue( $field, $path1, $path2, $path3, $path4 );
		}

		if( !$this->_tableData['fields'] || !array_key_exists( $field, $this->_tableData['fields'] ) ) {
			return $this->getDefaultFieldvalue( $path1, $path2, $path3, $path4 );
		}
		if( $path1 === "filter" ) {
			$path1 = "filterFormat";
		}
		$path = array( "fields", $field );
		if( $path1 == "view" ) {
			$path[] = "viewFormats";
			$path[] = $this->getEffectiveViewFormat( $field );
		} else if( $path1 == "edit" ) {
			$path[] = "editFormats";
			$path[] = $this->getEffectiveEditFormat( $field );
		} else {
			$path[] = $path1;
		}
		if( $path2 !== null ) $path[] = $path2;
		if( $path3 !== null ) $path[] = $path3;
		if( $path4 !== null ) $path[] = $path4;
		$value = ProjectSettings::_getSettingsValue( $this->_tableData, $path );
		if( $value === null ) {
			return ProjectSettings::_getTableDefault( $path );
		}
		return $value;
	}

	public function getCalendarValue( $name ) { 
		return $this->getTableValue( 'calendarSettings', $name );
	}

	public function getGanttValue( $name ) { 
		return $this->getTableValue( 'ganttSettings', $name );
	}

	public function getTableValue( $path1, $path2 = null, $path3 = null, $path4 = null ) {
		$path = array( $path1 );
		if( $path2 !== null ) $path[] = $path2;
		if( $path3 !== null ) $path[] = $path3;
		if( $path4 !== null ) $path[] = $path4;
		
		$value = ProjectSettings::_getSettingsValue( $this->_tableData, $path );
		if( $value === null ) {
			return ProjectSettings::_getTableDefault( $path );
		}
		return $value;
	}

	protected function getAuxTableValue( $path1, $path2 = null, $path3 = null, $path4 = null  ) {
		$path = array( $path1 );
		if( $path2 !== null ) $path[] = $path2;
		if( $path3 !== null ) $path[] = $path3;
		if( $path4 !== null ) $path[] = $path4;
		
		$value = ProjectSettings::_getSettingsValue( $this->_auxTableData, $path );
		if( $value === null ) {
			return ProjectSettings::_getTableDefault( $path );
		}
		return $value;
	}

	public static function passwordValidationValue( $name ) {
		return ProjectSettings::getSecurityValue('registration', 'passwordValidation', $name );
	}

	public static function & staticPermissions() {
		return ProjectSettings::getSecurityValue( 'staticPermissions', 'groups' );
	}

	public static function twoFactorValue( $name )	{
		return ProjectSettings::getSecurityValue( 'twoFactorSettings', $name );
	}

	public static function captchaValue( $name ) {
		return ProjectSettings::getSecurityValue( 'captchaSettings', $name );
	}

	public static function getSecurityValue( $path1, $path2 = null, $path3 = null, $path4 = null  ) {
		$path = array( 'security', $path1 );
		if( $path2 !== null ) $path[] = $path2;
		if( $path3 !== null ) $path[] = $path3;
		if( $path4 !== null ) $path[] = $path4;
		
		global $runnerProjectSettings, $runnerProjectDefaults;
		$value = ProjectSettings::_getSettingsValue( $runnerProjectSettings, $path );
		if( $value === null ) {
			return ProjectSettings::_getDefaultSetting( $runnerProjectDefaults, $path );
		}
		return $value;
	}

	public static function getProjectValue( $path1, $path2 = null, $path3 = null, $path4 = null  ) {
		$path = array( $path1 );
		if( $path2 !== null ) $path[] = $path2;
		if( $path3 !== null ) $path[] = $path3;
		if( $path4 !== null ) $path[] = $path4;
		
		global $runnerProjectSettings, $runnerProjectDefaults;
		$value =  ProjectSettings::_getSettingsValue( $runnerProjectSettings, $path );
		if( $value === null ) {
			return ProjectSettings::_getDefaultSetting( $runnerProjectDefaults, $path );
		}
		return $value;
	}

	public static function & getProjectTables() {
		global $runnerProjectSettings;
		return $runnerProjectSettings['allTables'];
	}
	

	protected static function _getSettingsValue( &$root, $path ) {
		$ptr = &$root;
		foreach( $path as $p ) {
			if( !is_array( $ptr ) ) {
				return null;
			}
			if( !isset( $ptr[ $p ] ) ) {
				return null;
			}
			$ptr = &$ptr[ $p ];
		}
		return $ptr;
	}


	/**
	 * @param Array() $path - path in the TableSettings array
	 */
	protected static  function _getTableDefault( $path ) {
		
		global $runnerTableDefaults;
		return ProjectSettings::_getDefaultSetting( $runnerTableDefaults, $path );
	}

	protected static function _getDefaultSetting( &$root, $path ) {
		$ptr = &$root;
		foreach( $path as $p ) {
			if( !is_array( $ptr ) ) {
				global $strictSettings;
				if( $strictSettings ) {
					echo "error in _getDefaultSetting";
					debugVar( $path );
					printStack();
					exit();
				}
				
				return null;
			}
			if( isset( $ptr['__meta__'] ) ) {
				$metaType = $ptr['__meta__'];
				$ptr = &$ptr[ '__object__' ];
				if( $metaType === metaObject ) {
					$ptr = &$ptr[ $p ];
				}
			} else {
				$ptr = &$ptr[ $p ];
			}
		}
		if( is_array($ptr) && $ptr['__meta__'] ) {
			return array();
		}
		return $ptr;
	}


	/**
	 * Return Date field edit type
	 */
	function getDateEditType( $field ) {
		return $this->getFieldValue( $field, "edit", "dateEditType" );
	}

	function getHTML5InputType( $field ) {
		return $this->getFieldValue( $field, "edit", "textHTML5Input" );
	}

	function getMaxLength( $field ) {
		return $this->getFieldValue( $field, "edit", "textboxMaxLenth" );
	}

	function getControlWidth( $field ) {
		return $this->getFieldValue( $field, "edit", "textboxSize" );
	}

	/**
	 * Check whether field is viewable
	 */
	function checkFieldPermissions( $field ) {
		return $this->appearOnPage( $field );
	}

	function getTableOwnerIdField()
	{
		return $this->getTableValue( 'tableOwnerIdField' );
	}

	function hasEvents() {
		return $this->getTableValue( 'hasEvents' );
	}


	function isHorizontalLookup( $field ) {
		return $this->getFieldValue( $field, "edit", "lookupHorizontal" );
	}

	function isDecimalDigits( $field ) {
		return $this->getFieldValue( $field, 'view', 'numberFractionalDigits' );
	}

	function getLookupValues( $field ) {
		return $this->getFieldValue( $field, "edit", "lookupValues" );
	}

	function hasEditPage()
	{
		return !!$this->getDefaultPage( "edit" );
	}

	function hasAddPage()
	{
		return !!$this->getDefaultPage( "add" );
	}

	function hasListPage()
	{
		return !!$this->getDefaultPage( "list" );
	}

	function hasImportPage()
	{
		return !!$this->getDefaultPage( "import" );
	}

	function hasInlineEdit()
	{
		return $this->getPageOption("list", "inlineEdit");
	}

	function hasUpdateSelected()
	{
		return $this->getPageOption("list", "updateSelected");
	}

	function updateSelectedButtons()
	{
		$data = $this->labeledButtons();
		return $data['update_records'];
	}

	function activatonMessages()
	{
		$data = $this->labeledButtons();
		if( !is_array( $data['register_activate_message'] ) )
			return array();
		return $data['register_activate_message'];
	}

	function labeledButtons()
	{
		return $this->getPageOptionAsArray("page", "labeledButtons");
	}

	function printPagesLabelsData()
	{
		$data = $this->labeledButtons();
		return $data['print_pages'];
	}

	function hasSortByDropdown()
	{
		return $this->getPageOption("list", "sortDropdown");
	}

	function getSortControlSettings()
	{
		return $this->getTableValue( 'sortByFields', 'sortOrder' );
	}
	function getClickActions()
	{
		return $this->getTableValue( 'clickActions' );
	}

	function hasCopyPage()
	{
		return true;
		//return $this->getPageOption("pageLinks", "copy");
	}
	function hasViewPage()
	{
		return !!$this->getDefaultPage("view");
	}
	function hasExportPage()
	{
		return !!$this->getDefaultPage("export");
	}
	function hasPrintPage()
	{
		return !!$this->getDefaultPage("print") || !!$this->getDefaultPage("rprint");
	}
	function hasDelete()
	{
		return $this->getPageOption("list", "delete");
	}
	function getTotalsFields()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray('totals') as $field => $totals ) {
			if( $totals /* ?? */ && $totals["totalsType"] ) {
				$ret[] = array(
					"fName" => $field,
					"numRows" => 0,
					"totalsType" => $totals["totalsType"],
					"viewFormat" => $this->getViewFormat( $field )

				);
			}
		}
		return $ret;
	}

	function calcTotalsFor() {
		return $this->getPageOption("page", "calcTotalsFor");
	}

	function pageHasCharts() {
		return $this->getPageOption("page", "hasCharts");
	}

	function getExportTxtFormattingType()
	{
		return $this->getPageOption("export","format");
	}

	function getExportDelimiter()
	{
		return $this->getPageOption("export","delimiter");
	}

	function chekcExportDelimiterSelection()
	{
		return $this->getPageOption("export","selectDelimiter");
	}

	function checkExportFieldsSelection()
	{
		return $this->getPageOption("export","selectFields");
	}

	function exportFileTypes()
	{
		return $this->getPageOption("export", "exportFileTypes");
	}

	function getLoginFormType()
	{
		return $this->getPageOption("loginForm", "loginForm");
	}

	function getAdvancedSecurityType()
	{
		if( !Security::advancedSecurityAvailable() )
			return ADVSECURITY_ALL;
		return $this->getTableValue( 'advancedSecurityType' );
	}
	function displayLoading()
	{
		return $this->getTableValue( 'displayLoading' );
	}
	function getRecordsPerPageArray() {
		$values = $this->getTableValue( 'pageSizeSelectorRecords' );
		return $this->postProcessPerPageArr( 
			$values 
				? $values 
				: array( '10', '20', '30', '50', '100', '500', 'all' )
		);
	}

	function getGroupsPerPageArray() {
		$values = $this->getTableValue( 'pageSizeSelectorGroups' );
		return $this->postProcessPerPageArr( 
			$values 
				? $values 
				: array( '1', '3', '5', '10', '50', '100', 'all' )
		);
	}

	protected function postProcessPerPageArr( $values ) {
		$ret = array();
		foreach( $values as $v ) {
			$ret[] = $v == 'all'
				? '-1'
				: $v;
		}
		return $ret;
	}


	function isReportWithGroups()
	{
		return !!$this->getPageOption("newreport", "reportInfo", "groupFields" );
	}

	function isCrossTabReport()
	{
		return $this->getPageOption("newreport", "reportInfo", "crosstab" );
	}

	function getReportGroupFields()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "groupFields" ) as $g ) {
			$ret[] = $g["field"];
		}
		return $ret;
	}

	function getReportGroupFieldsData()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "groupFields" ) as $idx => $g ) {
			$gdata = array();
			$gdata["strGroupField"] = $g["field"];
			$gdata["groupInterval"] = $g["interval"];
			$gdata["groupOrder"] = $idx + 1;
			$gdata["showGroupSummary"] = $g["summary"];
			$gdata["crossTabAxis"] = $g["axis"];
			$ret[] = $gdata;
		}
		return $ret;
	}

	function reportHasHorizontalSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "horizSummary" );
	}

	function reportHasVerticalSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "vertSummary" );
	}

	function reportHasPageSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "pageSummary" );
	}

	function reportHasGlobalSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "globalSummary" );
	}

	function getReportLayout()
	{
		$rLayout =  $this->getPageOption("newreport", "reportInfo", "layout" );
		if( $rLayout === 'stepped' ) {
			return REPORT_STEPPED;
		}
		else if( $rLayout === 'align' ) {
			return REPORT_ALIGN;
		}
		else if( $rLayout === 'outline' ) {
			return REPORT_OUTLINE;
		}
		else if( $rLayout === 'block' ) {
			return REPORT_BLOCK;
		} else {
			return REPORT_TABULAR;
		}
	}

	function isGroupSummaryCountShown()
	{
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "groupFields" ) as $g ) {
			if( $g["summary"] ) {
				return true;
			}
		}
		return false;
	}

	function reportDetailsShown()
	{
		return $this->getPageOption("newreport", "reportInfo", "showData" );
	}

	function reportTotalFieldsExist()
	{
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "fields" ) as $f ) {
			if( $f["sum"] || $f["min"] || $f["max"] || $f["avg"] ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * boolean
	 * True if the field has 'max' total in report
	 */
	function reportFieldInfo( $field ) {
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "fields" ) as $f ) {
			if( $f["field"] === $field ) {
				return $f;
			}
		}
		return null;
	}

	function noRecordsOnFirstPage()
	{
		return $this->getTableValue( 'searchSettings', 'hideDataUntilSearch' );
	}

	function isPrinterPageFitToPage()
	{
		return $this->getTableValue( 'printFitToPage' );
	}

	function getPrinterPageScale()
	{
		return $this->getTableValue( 'printScale' );
	}

	function getPrinterSplitRecords()
	{
		return $this->getTableValue( 'pageSizePrintRecords' );
	}

	function isPrinterPagePDF()
	{
		return $this->getPageOption("pdf", "pdfView");
	}

	function hasCaptcha() {
		return $this->getPageOption( "captcha", "captcha" );
	}

	function hasBreadcrumb() {
		return $this->getPageOption( "misc", "breadcrumb" );
	}

	function isSearchRequiredForFiltering()
	{
		return $this->getTableValue( 'searchSettings', 'hideFilterUntilSearch' );
	}
	function warnLeavingPages()
	{
		return $this->getTableValue( 'warnLeavingEdit' );
	}

	function hideEmptyViewFields()
	{
		return $this->getTableValue( 'hideEmptyFieldsOnView' );
	}

	function getInitialPageSize()
	{
		if( isReport( $this->getEntityType() ) ) {
			if( $this->isReportWithGroups() ) {
				return $this->getTableValue("pageSizeGroups");
			}

		}
		return $this->getTableValue("pageSizeRecords");
	}

	function getRecordsPerRowList()
	{
		return $this->getPageOption( "page", "recsPerRow" );
	}

	function getRecordsPerRowPrint()
	{
		return $this->getPageOption( "page", "recsPerRow" );
	}

	function getRecordsLimit()
	{
		return $this->getTableValue( 'limitRecords' );
	}

	function useMoveNext()
	{
		return $this->getPageOption( "misc", "nextPrev" );
	}

	function hasInlineAdd()
	{
		return $this->getpageOption("list", "inlineAdd");
	}

	function getListGridLayout()
	{
		return $this->getPageOption("page", "gridType");
	}

	function getPrintGridLayout()
	{
		return $this->getPageOption("page", "gridType");
	}

	function getPrinterPageOrientation()
	{
		return $this->getTableValue( 'pageOrientation' );
	}


	function getReportPrintGroupsPerPage()
	{
		if( $this->isReportWithGroups() )
			return $this->getTableValue( 'pageSizePrintGroups' );
		else
			return $this->getTableValue( 'pageSizePrintRecords' );

	}

	function ajaxBasedListPage()
	{
		return $this->getTableValue( 'listAjax' );
	}

	function isMultistepped()
	{
		return $this->getPageOption("page", "multiStep");
	}

	function hasVerticalBar()
	{
		return $this->getPageOption("page", "verticalBar");
	}


	/**
	 * Returns array of tabs, which use on list/report/chart page
	 * @return array
	 */
	function getGridTabs()
	{
		$ret = $this->getTableValue("whereTabs");
		if( !$ret ) {
			return array();
		}
		foreach( array_keys( $ret ) as $tabIdx ) {
			$tab = &$ret[ $tabIdx ];
			if( !array_key_exists( 'title', $tab ) ) {
				$tab['title'] = ProjectSettings::_getTableDefault( array( 'whereTabs', '', 'title' ) );
			}
		}
		return $ret;
	}


	function highlightSearchResults()
	{
		return $this->getTableValue( 'searchSettings', 'highlightSearchResults' );
	}


	function getFieldsList()
	{
		if( !$this->_tableData['fields'] ) {
			return array();
		}
		return array_keys( $this->_tableData['fields'] );
	}

	function getFieldCount() {
		return count( $this->getFieldsList() );
	}


	function getBinaryFieldsIndices()
	{
		$fields = $this->getFieldsList();
		$out = array();
		foreach($fields as $idx => $f)
		{
			if(IsBinaryType($this->getFieldType($f)))
				$out[] = $idx + 1;
		}
		return $out;
	}

	function getNBFieldsList()
	{
		$t = $this->getFieldsList();
		$arr = array();
		foreach($t as $f)
			if(!IsBinaryType($this->getFieldType($f)))
				$arr[] = $f;
		return $arr;
	}

	/**
	 * Get field by good field name
	 * @param string	$field The good field name
	 * @return string
	 */
	function getFieldByGoodFieldName( $field ) {
		foreach( $this->_tableData['fields'] as $key => $value ) {
			if( is_array( $value ) && count( $value ) > 1 ) {
				if( $value["goodName"] == $field )
					return $key;
			}
		}
		return "";
	}

	/**
	 * getUploadFolder
	 * Return inputed value or calculated path for upload folder
	 * @param {string} field name
	 * @param {array} file info (name, type, size)
	 */
	function getUploadFolder($field, $fileData = array()) {
		$eventObj = getEventObject( $this );
		if( $eventObj->hasUploadFolder( $field ) ) {
			$path = $eventObj->uploadFolder( $field, $fileData );
		} else {
			$path = $this->getFieldValue( $field, 'uploadFolder' );
		}
		if(strlen($path) && substr($path,strlen($path)-1) != "/")
			$path.="/";
		return $path;
	}

	function isMakeDirectoryNeeded( $field ) {
		return $this->isUploadCodeExpression($field) || !$this->isAbsolute($field);
	}

	function getFinalUploadFolder($field, $fileData = array())
	{
		if($this->isAbsolute($field))
			$path = $this->getUploadFolder($field, $fileData);
		else
			$path = getabspath($this->getUploadFolder($field, $fileData));
		
		if( ProjectSettings::ext() == "php") {
			if(strlen($path) && substr($path,strlen($path)-1) != "/")
				$path.="/";
		} else {
			if(strlen($path) && substr($path,strlen($path)-1) != "\\")
				$path.="\\";
		}
		
		return $path;
	}

	function isUploadCodeExpression( $field ) {
		$eventObj = getEventObject( $this );
		return $eventObj->hasUploadFolder( $field );
	}

	function &getQueryObject()
	{
		$queryObj = $this->getSQLQuery();
		return $queryObj;
	}

	function getListOfFieldsByExprType( $needaggregate )
	{
		$query = &$this->getSQLQuery();
		if( !$query ) {
			return array();
		}
		$fields = $this->getFieldsList();
		$out = array();
		foreach( $fields as $f ) {
			$idx = $this->getFieldIndex( $f ) - 1;
			$aggr = $query->IsAggrFuncField( $idx ) ;
			if( $needaggregate && $aggr || !$needaggregate && !$aggr)
				$out[] = $f;
		}
		return $out;
	}

	function isAggregateField( $field ) {
		$query = &$this->getSQLQuery();
		$idx = $this->getFieldIndex($field) - 1;
		return $query->IsAggrFuncField($idx);
	}

	/**
	 * Check if searching is case insensitive for the table
	 * @return Boolean
	 */
	function getNCSearch()
	{
		return !$this->getTableValue( 'searchSettings', 'caseSensitiveSearch');
	}

	function getChartType()
	{
		return $this->getTableValue( 'chartSettings', 'shape' );
	}

	function getChartRefreshTime()
	{
		return $this->chartRefresh()
			? $this->getTableValue( 'chartSettings', 'chartRefreshTime' )
			: 0;
	}

	function chartRefresh()
	{
		return $this->getTableValue( 'chartSettings', 'chartRefresh' );
	}

	function getChartSettings()
	{
		return $this->getTableValue( 'chartSettings' );
	}

	function auditEnabled()
	{
		return $this->getTableValue( 'audit' );
	}

	function isSearchSavingEnabled()
	{
		return $this->getPageOption( "listSearch", "searchSaving" );
	}

	function isAllowShowHideFields()
	{
		if ( $this->getScrollGridBody() )
			return false;

		return $this->getPageOption( "list", "showHideFields" );
	}

	public function isAllowFieldsReordering()
	{
		if ( $this->getScrollGridBody() || $this->getRecordsPerRowList() > 1)
			return false;

		return $this->getPageOption( "list", "reorderFields" );
	}

	function lockingEnabled()
	{
		return $this->getTableValue( 'locking' );
	}

	function hasEncryptedFields()
	{
		return $this->getTableValue( 'hasEncryptedFields' );
	}

	function showSearchPanel()
	{
		return $this->getPageOption( "listSearch", "searchPanel" );
	}

	function isFlexibleSearch()
	{
		return !$this->getPageOption( "listSearch", "fixedSearchPanel" );
	}

	function getSearchRequiredFields()
	{
		return $this->getPageOptionAsArray("fields", "searchRequiredFields");
	}

	function showSimpleSearchOptions()
	{
		return $this->getPageOption("listSearch", "simpleSearchOptions");
	}

	public function getFieldsToHideIfEmpty()
	{
		return $this->getPageOption("fields", "hideEmptyFields");
	}

	function getFilterFields()
	{
		return  $this->getPageOptionAsArray("fields", "filterFields");
	}

	function getFilterFieldFormat( $field ) {
		return $this->getFieldValue( $field, 'filter', 'format' );
	}

	function getFilterFieldTotal( $field ) {
		return $this->getFieldValue( $field, 'filter', 'filterTotals' );
	}

	function showWithNoRecords( $field ) {
		return $this->getFieldValue( $field, 'filter', 'showWithNoRecords' );
	}

	function getFilterSortValueType( $field ) {
		return $this->getFieldValue( $field, 'filter', 'sortValueType' );
	}

	function isFilterSortOrderDescending( $field ) {
		return $this->getFieldValue( $field, 'filter', 'descendingOrder' );
	}

	function getNumberOfVisibleFilterItems( $field ) {
		return $this->getFieldValue( $field, 'filter', 'firstVisibleItems' );
	}

	function getFilterByInterval( $field ) {
		return $this->getFieldValue( $field, 'filter', 'filterBy' );
	}

	function getParentFilterName( $field ) {
		return $this->getFieldValue( $field, 'parentFilter' );
	}

	function getFilterIntervals( $field ) {
		$ret = array();
		foreach( $this->getFieldValue( $field, 'filter', 'arrFilterIntervals' ) as $idx => $original ) {
			$interval = $original;
			$interval['index'] = $idx + 1;
			$interval['remainder'] = $original['lowerLimitType'] == FIL_REMAINDER && $original['upperLimitType'] == FIL_REMAINDER;
			$interval['noLimits'] = $original['lowerLimitType'] == FIL_NONE && $original['upperLimitType'] == FIL_NONE;
			$ret[] = $interval;
		}
		return $ret;
	}

	function showCollapsed( $field ) {
		return $this->getFieldValue( $field, 'filter', 'hideControl' );
	}
		

	public function getFilterIntervalDatabyIndex($field, $idx)
	{
		$intervalData = array();

		$filterIntervalsData = $this->getFilterIntervals($field);
		if( $filterIntervalsData[ $idx - 1 ] ) {
			return $filterIntervalsData[ $idx - 1 ];
		}
		if( $filterIntervalsData[0] ) {
			return $filterIntervalsData[0];
		}
		return array();
	}
		

	function getFilterTotalsField( $field ) {
		return $this->getFieldValue( $field, 'filter', 'filterTotalsField' );
	}

	function getFilterFiledMultiSelect( $field ) {
		return $this->getFieldValue( $field, 'filter', 'filterMultiselect' );
	}

	function getBooleanFilterMessageData( $field, $checked ) {
		return $this->getFieldValue( $field, 'filter', $checked ? 'multilangCheckedMessage' : 'multilangUncheckedMessage' );
	}


	function getFilterStepType( $field ) {
		// #17488 p.2 ( string -> number)
		return (int)$this->getFieldValue( $field, 'filter', 'sliderStepType' );
	}

	function getFilterStepValue( $field ) {
		// #17488 p.2 ( string -> number)
		return (float)$this->getFieldValue( $field, 'filter', 'sliderStepValue' );
	}

	function getFilterKnobsType( $field ) {
		// #17488 p.2 ( string -> number)
		return (int)$this->getFieldValue( $field, 'filter', 'sliderKnobs' );
	}

	function isFilterApplyBtnSet( $field ) {
		return $this->getFieldValue( $field, 'filter', 'addApplyButton' );
	}

	function getStrField( $field ) {
		return $this->getFieldValue( $field, 'strField' );
	}

	function getSourceSingle( $field )
	{
		return $this->getFieldValue( $field, 'sourceSingle' );
	}

	function getFieldSource( $field, $listRequest )
	{
		return $this->getFieldValue( $field, $listRequest ? 'strField' : 'sourceSingle' );
	}

	function getScrollGridBody()
	{
		return $this->getTableValue( 'scrollGridBody' );
	}

	/**
	 * Is 'UpdateLatLng' ticked for the table
	 */
	function isUpdateLatLng()
	{
		return $this->getTableValue( 'geoCoding', 'enabled' );
	}

	/**
	 * get geocoding data for the table
	 */
	function getGeocodingData()
	{
		$ret = $this->getTableValue( 'geoCoding' );
		$ret['lngField'] = $ret['lonField'];
		return $ret;
	}

	function allowDuplicateValues( $field ) {
		return !$this->getFieldValue( $field, 'edit', 'denyDuplicate' );
	}

	/**
	 * It returns an empty array if the 'Select all' (search options) is ticked
	 */
	function getSearchOptionsList( $field ) {
		return $this->getFieldValue( $field, 'searchOptions' );
	}


	function getDefaultSearchOption( $field ) {
		$defaultOpt = $this->getFieldValue( $field, 'defaultSearchOption' );

		if( !$defaultOpt )
		{
			$searchOptionsList = $this->getSearchOptionsList($field);
			if( count($searchOptionsList) )
				$defaultOpt = $searchOptionsList[0];
		}
		return $defaultOpt;
	}

	static function isMenuTreelike( $menuName ) {
		global $runnerMenus;
		return $runnerMenus[ $menuName ]['treeLike'];
	}

	function setPageMode($pageMode)
	{
		$this->_pageMode = $pageMode;
	}

	function editPageHasDenyDuplicatesFields()
	{
		foreach($this->getEditFields() as $fieldName)
		{
			if( !$this->allowDuplicateValues($fieldName) )
			{
				return true;
			}
		}
		return false;
	}

	static function rteType() {
		return ProjectSettings::getProjectValue( 'rteType' );
	}

	/**
	 * @return Boolean
	 */
	static function richTextEnabled() {
		return ProjectSettings::getProjectValue( 'richTextEnabled' );
	}

	/**
	 * Get the list of the fields that must be hidden on the List page on a particular device
	 * @param {Number} Device code : 1-4
	 * @return {Array} array in the form of: $arr[$field]=true, where the $field must be hidden.
	 */
	function getHiddenFields( $device )
	{
		$list = $this->getTableValue( 'deviceHideFields' );
		if( isset( $list[$device] ) )
			return $list[$device];
		return array();
	}

	/**
	 * Get the list of the fields that must be hidden on the List page on a particular device
	 * @param {Number} Device code : 1-4
	 * @return {Array} array in the form of: $arr[$goodfieldName]=true, where the $field must be hidden.
	 */
	function getHiddenGoodNameFields($device)
	{
		$hGoodFields = array();
		$hFields = $this->getHiddenFields($device);
		foreach ( $hFields as $field ) {
			$hGoodFields[] = GoodFieldName( $field );
		}

		return $hGoodFields;
	}

	/**
	 * Checks if the 'columns By Device' is enabled
	 * @return {Boolean}
	 */
	function columnsByDeviceEnabled()
	{
		$list = $this->getTableValue( 'deviceHideFields' );
		foreach( $list as $d => $v )
		{
			if( $v )
				return true;
		}
		return false;
	}


	/**
	 * @return Mixed
	 */
	public static function getForLogin()
	{
		return !!Security::dbProvider()
			? new ProjectSettings( Security::loginTable(), PAGE_LIST)
			: null;
	}

	/**
	 * Returns the list of the dashboard search fields.
	 * Each field is an array of "table", "field" pairs.
	 */
	function getDashboardSearchFields()
	{
		return $this->getPageOptionAsArray( 'dashSearch', 'searchFields');
	}

	/**
	 * @param String dashElementName
	 * @return Array
	 */
	function getDashboardElementData( $dashElementName )
	{
		$dElements = $this->getDashboardElements();
		foreach( $dElements as $dElemData )
		{
			if( $dElemData["elementName"] == $dashElementName )
				return $dElemData;
		}
		return array();
	}

	/**
	 * @return Number
	 */
	function getAfterAddAction()
	{
		return $this->getTableValue( 'afterAddAction' );
	}

	/**
	 * @return String
	 */
	function getAADetailTable()
	{
		return $this->getTableValue( 'afterAddDetail' );
	}

	/**
	 * @return Boolean
	 */
	function checkClosePopupAfterAdd()
	{
		return $this->getTableValue( 'closePopupAfterAdd' );
	}

	/**
	 * @return Number
	 */
	function getAfterEditAction()
	{
		return $this->getTableValue( 'afterEditAction' );
	}

	/**
	 * @return String
	 */
	function getAEDetailTable()
	{
		return $this->getTableValue( 'afterEditDetails' );
	}

	/**
	 * @return Boolean
	 */
	function checkClosePopupAfterEdit()
	{
		return $this->getTableValue( 'closePopupAfterEdit' );
	}

	function getMapIcon($field, $data)
	{
		if( !$this->isMapIconCustom($field) ) {
			$mapData = $this->getMapData($field);
			if( $mapData["mapIcon"] != "" )
				return "images/menuicons/" . $mapData["mapIcon"];
			return "";
		}
		else
		{
			$eventObj = getEventObject( $this );
			$pageType = $this->getEffectiveViewFormat( $field );
			return $eventObj->mapMarker( $field, $pageType, $data );
		}
	}

	function getFileText( $field, $fileData, $data )
	{
		$eventObj = getEventObject( $this );
		$pageType = $this->getEffectiveViewFormat( $field );
		return $eventObj->fileText( $field, $pageType, $fileData, $data );
	}


	/**
	 * @param String dashElementName
	 * @param Array data
	 * @return String
	 */
	function getDashMapIcon( $dashElementName, $data )
	{
		global $globalEvents;
		$dashElementData = $this->getDashboardElementData( $dashElementName );

		if( $dashElementData["isMarkerIconCustom"] ) {
			$funcName = "event_" . $dashElementData["iconSnippet"];
			return $globalEvents->$funcName( $data );
		}
		if( $dashElementData["iconF"] )
			return "images/menuicons/" . $dashElementData["iconF"];

		return "";
	}

	/**
	 * @param String dashElementName
	 * @param Array data
	 * @return String
	 */
	function getDashMapLocationIcon( $dashElementName )
	{
		global $globalEvents;
		$dashElementData = $this->getDashboardElementData( $dashElementName );
		if( $dashElementData["isLocationMarkerIconCustom"] ) {
			$funcName = "event_" . $dashElementData["currentLocationIconSnippet"];
			return $globalEvents->$funcName( array() );
		}

		if( $dashElementData["currentLocationIcon"] )
			return "images/menuicons/" . $dashElementData["currentLocationIcon"];

		return "";
	}

	function isMapIconCustom( $field ) {
		$mapData = $this->getMapData($field);
		return $mapData["isMapIconCustom"];
	}

	function getDetailsBadgeColor( $dTable ) {
		return $this->getPageOption( "details", $dTable, "badgeColor" );
	}

	/**
	 * returns array of array( "id" => menuId, "horizontal" => boolean )
	 */
	function getPageMenus() {
		return $this->getPageOptionAsArray( "page", "menus" );
	}

	function getDefaultBadgeColor() {
		return $this->getTableValue( 'detailsBadgeColor' );
	}

	function & helperFormItems()
	{
		return $this->getPageOption("layoutHelper", "formItems");
	}
	function & helperItemsByType()
	{
		return $this->getPageOption("layoutHelper", "itemsByType");
	}

	function & allFieldItems()
	{
		return $this->getPageOption("fields", "fieldItems");
	}

	function & helperItemVisibility()
	{
		return $this->getPageOption("layoutHelper", "itemVisibility");
	}

	function & helperCellMaps()
	{
		return $this->getPageOption("layoutHelper", "cellMaps");
	}

	function detailsShowCount($dTable)
	{
		return $this->getPageOption("details", $dTable, "showCount" );
	}

	function detailsHideEmpty($dTable)
	{
		return $this->getPageOption("details", $dTable, "hideEmptyChild" );
	}

	function detailsHideEmptyPreview($dTable)
	{
		return $this->getPageOption("details", $dTable, "hideEmptyPreview" );
	}

	function detailsPreview($dTable)
	{
		return $this->getPageOption("details", $dTable, "displayPreview" );
	}

	function detailsProceedLink($dTable)
	{
		return $this->getPageOption("details", $dTable, "showProceedLink" );
	}

	function detailsPrint($dTable)
	{
		return $this->getPageOption("details", $dTable, "printDetails" );
	}

	function detailsLinks()
	{
		return $this->getPageOption("allDetails", "linkType" );
	}
	function detailsPageId( $dTable )
	{
		return $this->getPageOption("details", $dTable, "previewPageId" );
	}

	function masterPreview( $mTable )
	{
		return $this->getPageOption("master", $mTable, "preview" );
	}

	/**
	 * @return boolean if success otherwise false
	 */
	function hasMap()
	{
		return !!$this->getPageOption("events", "maps" );
	}
	function maps()
	{
		return $this->getPageOption("events", "maps" );
	}

	function mapsData()
	{
		return $this->getPageOption("events", "mapsData" );
	}

	function buttons()
	{
		return $this->getPageOption("events", "buttons" );
	}

	function getPageType( $page = "" )
	{
		if( !$page )
			$page = $this->_page;
		return $this->_auxTableData[ "pageTypes" ][ $page ];
	}

	/**
	 * returns page type without applying page permissions
	 */
	function getOriginalPageType( $page = "" )
	{
		if( !$page )
			$page = $this->_page;
		return $this->_auxTableData[ "originalPageTypes" ][ $page ];
	}

	/**
	 * @return Array( pageId => pageType )
	 */
	function & getOriginalPages()
	{
		return $this->_auxTableData[ "originalPageTypes" ];
	}

	function welcomeItems()
	{
		return $this->getPageOption("welcome", "welcomeItems");
	}

	function welcomePageSkip()
	{
		return $this->getPageOption("welcome", "welcomePageSkip");
	}

	function getMultipleImgMode( $field )
	{
		$editFormat = $this->getEditFormat( $field );
		if( $editFormat == EDIT_FORMAT_DATABASE_IMAGE || $editFormat == EDIT_FORMAT_DATABASE_FILE ) {
			return false;
		}
		return $this->getFieldValue( $field, 'view', 'imageMultipleMode' );
	}

	function getMaxImages( $field )
	{
		if( !$this->getMultipleImgMode( $field ) ) {
			return 1;
		}
		return $this->getFieldValue( $field, 'view', 'imageMaxCount' );
	}
	function isGalleryEnabled( $field )
	{
		return $this->getFieldValue( $field, 'view', 'imageGallery' );
	}
	function getGalleryMode()
	{
		return $this->getTableValue( 'galleryMode' );
	}
	function getCaptionMode( $field )
	{
		return $this->getFieldValue( $field, 'view', 'imageCaptions' );
	}
	function getCaptionField( $field )
	{
		return $this->getFieldValue( $field, 'view', 'imageCaptionField' );
	}

	/**
	 * @return boolean
	 */
	function getImageBorder( $field )
	{
		return $this->getFieldValue( $field, 'view', 'imageBorder' );
	}

	function getImageFullWidth( $field )
	{
		return $this->getFieldValue( $field, 'view', 'imageMobileFullWidth' );
	}

	/**
	 * Page exists
	 * @return Boolean
	 */
	function pageTypeAvailable( $pageType ) {
		$pagesByType =& $this->_auxTableData["pagesByType"];
		return !!$pagesByType[ $pageType ];
	}

	function updatePages() {

		if( $this->_auxTableData["pagesUpdated"] ) {
			return;
		}

		//	don't filter pages available to all users
		if( $this->_pageType == PAGE_LOGIN
			|| $this->_pageType == PAGE_REGISTER
			|| $this->_pageType == PAGE_REMIND
			|| $this->_pageType == PAGE_REMIND_SUCCESS
		) {
			return;
		}


		$this->_auxTableData["pagesUpdated"] = true;

		$restrictedPages = Security::getRestrictedPages( $this->_auxTable, $this );
		if( !$restrictedPages ) {
			return;
		}
		$pages =& $this->_auxTableData["pageTypes"];
		$pagesByType =& $this->_auxTableData["pagesByType"];
		$newPages = array();
		$defaultPages =& $this->_auxTableData["defaultPages"];
		foreach( $pages as $p => $type ) {
			if( !$restrictedPages[$p] ) {
				$newPages[ $p ] = $type;
			}
			else {
				$idx = array_search( $p, $pagesByType[$type] );
				unset( $pagesByType[$type][$idx] );
				if( $defaultPages[ $type ] == $p ) {
					$defaultPages[ $type ] = "";
					//	pick the first available page
					foreach( $pagesByType[$type] as $d ) {
						$defaultPages[ $type ] = $d;
						break;
					}
				}
			}
		}
		$this->_auxTableData["pageTypes"] = &$newPages;
	}

	/**
	 * Revert pages list to original.
	 * This is called from Security::setRestrictedPages/setAllowedPages
	 */
	function resetPages() {
		unset( $this->_auxTableData["pagesUpdated"] );
		$this->_auxTableData["defaultPages"] = $this->_auxTableData["originalDefaultPages"];
		$this->_auxTableData["pageTypes"] = $this->_auxTableData["originalPageTypes"];
	}

	/**
	 * returns array of page ids ignoring user permissions
	 */
	function getOriginalPagesByType( $pageType) {
		return $this->_auxTableData["originalPagesByType"][ $pageType ];
	}

	function &getDataSourceOps()
	{
		return $this->getTableValue( 'dataSourceOperations' );
	}

	/**
	 * @return Boolean
	 */
	function groupChart() {
		return $this->getTableValue( 'chartSettings', 'groupChart' );
	}

	/**
	 * @return Integer
	 */
	function chartLabelInterval() {
		return $this->getTableValue( 'chartSettings', 'labelInterval' );
	}

	/**
	 * @return Array
	 */
	function chartSeries() {
		return $this->getTableValue( 'chartSettings', 'dataSeries' );
	}

	/**
	 * @return String
	 */
	function chartLabelField() {
		return $this->getTableValue( 'chartSettings', 'labelField' );
	}

	function getViewPageType() {
		return $this->_viewPage;
	}

	function spreadsheetGrid() {
		return $this->getPageOption( "list", "spreadsheetMode");
	}

	/**
	 * Tell whether the edit format involves file uploading
	 * @return boolean
	 */
	public static function uploadEditType( $editFormat ) {
		return $editFormat == EDIT_FORMAT_DATABASE_FILE || $editFormat == EDIT_FORMAT_DATABASE_IMAGE || $editFormat == EDIT_FORMAT_FILE;
	}

	public function addNewRecordAutomatically() {
		return $this->getPageOption( "list", "addNewRecordAutomatically" );
	}

	public function reorderRows() {
		return $this->getPageOption( "list", "reorderRows" ) && $this->reorderRowsField() != '';
	}

	public function reorderRowsField() {
		return $this->getPageOption( "list", "reorderRowsField");
	}

	public function inlineAddBottom() {
		return !!( $this->getPageOption( "list", "addToBottom") || $this->spreadsheetGrid() && $this->addNewRecordAutomatically() );
	}

	function listColumnsOrderOnPrint() {
		return $this->getPageOption( "misc", "listColumnsOrderOnPrint" );
	}

	function fileStorageProvider( $field ) {
		return $this->getFieldValue( $field, 'storageProvider' );
	}

	function googleDriveFolder( $field ) {
		return $this->getFieldValue( $field, 'googleDrivePath' );
	}

	function hideAdGroupsUntilSearch() {
		return $this->getPageOption("adGroups", "hideUntilSearch");
	}

	function hasNotifications()
	{
		return $this->getPageOption("page", "hasNotifications");
	}

	static function amazonSecretKey() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudAmazonSecretKey' );
	}

	static function amazonAccessKey() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudAmazonAccessKey' );
	}

	function amazonPath( $field ) {
		return $this->getFieldValue( $field, 'amazonPath' );
	}

	static function amazonBucket() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudAmazonBucket' );
	}

	static function amazonRegion() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudAmazonRegion' );
	}


	static function wasabiSecretKey() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudWasabiSecretKey' );
	}

	static function wasabiAccessKey() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudWasabiAccessKey' );
	}

	function wasabiPath( $field ) {
		return $this->getFieldValue( $field, 'wasabiPath' );
	}

	static function wasabiBucket() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudWasabiBucket' );
	}

	static function wasabiRegion() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudWasabiRegion' );
	}

	function oneDrivePath( $field ) {
		return $this->getFieldValue( $field, 'oneDrivePath' );
	}

	static function oneDriveDrive() {
		return ProjectSettings::getProjectValue( 'cloudSettings', 'cloudOneDriveDrive' );
	}

	function dropboxPath( $field ) {
		return $this->getFieldValue( $field, 'dropboxPath' );
	}

	/**
	 * check if change password page has 'Old password' field
	 */
	function hasOldPassField() {
		return $this->getPageOption("changepwd", "oldPassFieldOnPage");
	}

	/**
	 * @return Array of dashboard elements
	 * See DasboardItem in TS code
	 */
	function getDashboardElements() {
		return $this->getPageOption("dashboard", "elements");
	}

	function getMobileSub() {
		return $this->getPageOption("page", "mobileSub");
	}

	/**
	 * returns number of charts on the page
	 */
	function getChartCount() {
		return $this->getPageOption("chart", "chartCount");
	}

	function hideNumberOfRecords()
	{
		return $this->getPageOption("list", "hideNumberOfRecords");
	}

	/**
	 * @return array( array( 
	 * 	name => string,
	 * 	nativename => string,
	 * 	rtl => boolean,
	 * 	filename => string	
	 * ) )
	 */
	public static function languageDescriptors() {
		global $runnerProjectSettings;
		return $runnerProjectSettings['languages'];
	}

	/**
	 * @return Array( string )
	 */
	public static function languages() {
		global $runnerProjectSettings;
		return $runnerProjectSettings['languageNames'];
	}

	function fieldEditEvents( $field ) {
		return $this->getFieldValue( $field, 'edit', 'fieldEvents' );
	}

	function fieldViewEvents( $field ) {
		return $this->getFieldValue( $field, 'view', 'fieldEvents' );
	}

	function fieldHasEvent( $eventId, $field, $editEvent ) {
		if( $editEvent ) {
			$editFormats = $this->getTableValue( "fields", $field, "editFormats" );
			foreach( $editFormats as $pageType => $editFormat ) {
				$fieldEvents = $editFormat['fieldEvents'];
				if( $this->eventInList( $editFormat['fieldEvents'], $eventId ) ) {
					return true;
				}
			} 
		} else {
			$viewFormats = $this->getTableValue( "fields", $field, "viewFormats" );
			foreach( $viewFormats as $pageType => $viewFormat ) {
				if( $this->eventInList( $viewFormat['fieldEvents'], $eventId ) ) {
					return true;
				}
			}
		}
		return $false;
	}

	/**
	 * @return Boolean
	 */
	protected function eventInList( $fieldEvents, $eventId ) {
		foreach( $fieldEvents as $e ) {
			if( $e['handlerId'] == $eventId ) {
				return true;
			}
		}
		return false;
	}

	/** 
	 * @return String 'php' or 'aspx'
	*/
	public static function ext() {
		return ProjectSettings::getProjectValue( 'ext' );
	}

	/** 
	 * @return Boolean
	*/
	public static function webReports() {
		return false;
		//return ProjectSettings::getProjectValue( 'enableWebreports' );
	}

	/**
	 * Legacy function, used in some Edit plugins
	 */
	function getEditParams( $field ) {
		return "";
	}

	/**
	 * LEGACY alias. Used in some business templates and old code
	 */
	function getTableOwnerID()
	{
		return $this->getTableOwnerIdField();
	}


}


/**
 * Find correct table name from user-specified name
 */
function findTable( $tableName, $strict = false ) {

	$projectTables =& ProjectSettings::getProjectTables();
	$tableObj = $projectTables[ $tableName ];
	if( $tableObj ) {
		return $tableObj['name'];
	}
	if( $strict ) {
		return '';
	}

	$uTable = strtoupper( $tableName );
	foreach( ProjectSettings::getProjectTables() as $table ) {
		if( strtoupper( $table['name'] ) == $uTable ) {
			return $table['name'];
		}
		$gTable = GoodFieldName( $table['name'] );
		if( $uTable == strtoupper( $gTable ) ) {
			return $table['name'];
		}
	}

	$found = GetTableByShort( $tableName );
	if( $found ) {
		return $found;
	}

	foreach( ProjectSettings::getProjectTables() as $table ) {
		if( strtoupper( $table['shortName'] ) == $uTable ) {
			return $table['name'];
		}
	}

	return "";
}


//	return table short name
function GetTableURL( $tableName )
{
	if( $tableName == "<global>")
		return GLOBAL_PAGES_SHORT;
	$projectTables =& ProjectSettings::getProjectTables();
	$tableObj = $projectTables[ $tableName ];
	if( $tableObj ) {
		return $tableObj["shortName"];
	}
	return "";
}

//	return table name
function GetTableByGID( $gid ) {
	if( $gid == -1 ) {
		return "<global>";
	}
	foreach( ProjectSettings::getProjectTables() as $name => $table ) {
		if( $table['gid'] == $gid ) {
			return $name;
		}
	}
	return '';
}


function GetEntityType($table = "")
{
	if( $tableName == GLOBAL_PAGES)
		return titGLOBAL;
	$projectTables =& ProjectSettings::getProjectTables();
	$tableObj = $projectTables[ $table ];
	if( $tableObj ) {
		return $tableObj["type"];
	}
	return null;
}


//	return strTableName by short table name
function GetTableByShort( $shortTName ) {

	if( $tableName == GLOBAL_PAGES_SHORT)
		return GLOBAL_PAGES;
	global $runnerProjectSettings;
	if( array_key_exists( $shortTName, $runnerProjectSettings['tablesByShort'] ) ) {
		return $runnerProjectSettings['tablesByShort'][ $shortTName ];
	}
	return "";
}

function GetTableByGood( $goodTableName ) {

	if( $tableName == GLOBAL_PAGES_SHORT)
		return GLOBAL_PAGES;
	global $runnerProjectSettings;
	if( array_key_exists( $goodTableName, $runnerProjectSettings['tablesByGood'] ) ) {
		return $runnerProjectSettings['tablesByGood'][ $goodTableName ];
	}
	return "";
}

/**
 * Legacy, used in some business templates (News)
 */
function getSecurityOption( $option ) {
	return ProjectSettings::getSecurityValue( $option );
}

require_once( getabspath('settings/defaults.php') );


?>