<?php
include_once(getabspath("classes/searchpage.php"));
class SearchPageDash extends SearchPage
{	
	public $tableSettings = array();
	
	function __construct(&$params)
	{
		parent::__construct($params);
		
		if( $this->mode == SEARCH_DASHBOARD ) {
			$this->pageData['isDashSearchPage'] = true;
		}
	}
	
	protected function assignSessionPrefix() {
		$this->sessionPrefix = $this->tName;
	}
	
	protected function getTableSettings( $table )
	{
		if( !isset( $this->tableSettings[ $table ]) )
		{
			$this->tableSettings[ $table ] = new ProjectSettings( $tableSettings[ $table ], PAGE_SEARCH );
		}
		return $this->tableSettings[ $table ];
	
	}

	protected function buildJsFieldSettings( $pSet, $field, $pageType ) {
		$settings = parent::buildJsFieldSettings( $pSet, $field, $pageType );

		$editFormat = $pSet->getEditFormat( $field );
		if( $editFormat === EDIT_FORMAT_LOOKUP_WIZARD ) {
			$parentData = $pSet->getLookupParentFNames( $tableFieldName );
			foreach( $fData as $i => $parentField ) {
				$parentData[ $i ] = $this->locateDashFieldByOriginal( $pSet->table(), $parentField );
			}
			$settings["parentFields"] = $parentData;
		}
		
		return $settings;
	}
	
	
	protected function prepareFields()
	{	
		$pageFields = $this->pSet->getPageFields();
		foreach( $this->pSet->getDashboardSearchFields() as $f => $fdata )
		{
			if( array_search( $f, $pageFields ) === false ) {
				continue;
			}
			$field = $fdata[0]["field"];
			$table = $fdata[0]["table"];
			$fSet = $this->getTableSettings( $table );
	
			$srchFields = $this->searchClauseObj->getSearchCtrlParams( $f );
			$firstFieldParams = array();
			if (count($srchFields))
			{
				$firstFieldParams = $srchFields[0];
			}
			else
			{
				$firstFieldParams['fName'] = $f;
				$firstFieldParams['eType'] = '';
				$firstFieldParams['value1'] = $this->pSet->getSearchDefaultValue( $field );
				$firstFieldParams['value2'] = '';
				$firstFieldParams['not'] = false;
				$firstFieldParams['opt'] = $this->pSet->getDefaultSearchOption( $f );
				$firstFieldParams['not'] = false;
				if ( substr($firstFieldParams['opt'], 0, 4) == 'NOT ' )
				{
					$firstFieldParams['opt'] = substr($firstFieldParams['opt'], 4);
					$firstFieldParams['not'] = true;
				}
			}
	// create control	
			$ctrlBlockArr = $this->searchControlBuilder->buildSearchCtrlBlockArr($this->id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
			if($firstFieldParams['opt'] == "")
			{
				$firstFieldParams['opt'] = $this->pSet->getDefaultSearchOption($firstFieldParams['fName']);
			}
			$srchTypeFull = $this->searchControlBuilder->getCtrlSearchType($firstFieldParams['fName'], $this->id, 0, $firstFieldParams['opt'], $firstFieldParams['not'], true, true);
			
			if(isEnableSection508())
				$this->xt->assign_section( $f . "_label","<label for=\"". $this->getInputElementId( $field, $fSet )."\">","</label>");
			else 
				$this->xt->assign( $f . "_label", true);
			
			$this->xt->assign( $f . "_fieldblock", true);
			$this->xt->assignbyref( $f . "_editcontrol", $ctrlBlockArr['searchcontrol']);
			$this->xt->assign( $f . "_notbox", $ctrlBlockArr['notbox']);
			// create second control, if need it
			$this->xt->assignbyref( $f . "_editcontrol1", $ctrlBlockArr['searchcontrol1']);
			// create search type select
			$this->xt->assign("searchtype_" . $f, $ctrlBlockArr['searchtype']);
			$this->xt->assign("searchtypefull_" . $f, $srchTypeFull);
			$isFieldNeedSecCtrl = $this->searchControlBuilder->isNeedSecondCtrl($f);
			$ctrlInd = 0;
			if ($isFieldNeedSecCtrl)
			{
				$this->controlsMap["search"]["searchBlocks"][] = array('fName'=> $f , 'recId'=>$this->id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
				$ctrlInd+=2;
			}
			else
			{
				$this->controlsMap["search"]["searchBlocks"][] = array('fName'=> $f , 'recId'=>$this->id, 'ctrlsMap'=>array(0=>$ctrlInd));			
				$ctrlInd++;
			}
		}
	}
	
	function locateDashFieldByOriginal( $table, $field )
	{
		foreach($this->pSet->getDashboardSearchFields() as $fname => $data)
		{
			if( !$data )
				continue;
			if( $data[0]["table"] == $table && $data[0]["field"] == $field )
			{
				return $fname;
			}
		}
		return $fname;
	}

	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		if( $pSet->table() != $this->pSet->table() ) {
			return $settings;
		}
		
		$tableSettingsFilled = array();
		$tableSettingsFilled[ $this->tName ] = true;
		$dashSearchFields = $this->pSet->getDashboardSearchFields();
		
		$settings[ 'fieldSettings' ] = array();

		foreach( $this->pSet->getAllSearchFields() as $fieldName ) {
			$tableName = $dashSearchFields[$fieldName][0]["table"];
			$pSet = new ProjectSettings( $tableName, $pageType);
			$tableFieldName = $dashSearchFields[$fieldName][0]["field"];

			if( !@$tableSettingsFilled[ $tableName ] ) {
				$tableSettingsFilled[ $tableName ] = true;
				$this->fillTableSettings( $tableName, $pSet );
			}
			$settings[ 'fieldSettings' ][ $fieldName ] = array( $this->pageType => $this->buildJsFieldSettings( $pSet, $tableFieldName, $pageType ) );
		}
		return $settings;

	}

	protected function buildJsGlobalSettings() {
		$settings = parent::buildJsGlobalSettings();

		foreach( $this->pSet->getDashboardSearchFields() as $f => $fdata )
		{
			$field = $fdata[0]["field"];
			$table = $fdata[0]["table"];
			$fSet = $this->getTableSettings( $table );
			$lookupTable = $fSet->getLookupTable( $field );
			if( $lookupTable ) {
				$settings['shortTNames'][ $lookupTable ] = GetTableURL( $lookupTable );
			}
		}
		return $settings;
	}


}
?>