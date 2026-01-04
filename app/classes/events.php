<?php
class eventsBase {
	var $events = array();
	var $maps = array();

	function __construct() {
		$this->init();
	}

	function init() {
	}

	
	function exists( $event, $table = "" ) {
		if( $table == "" )
			return array_key_exists( $event, $this->events ) !== FALSE;
		else
			return isset( $this->events[$event] ) && isset( $this->events[$event][$table] );
	}

	function existsMap( $page ) {
		return array_key_exists( $page, $this->maps ) !== FALSE ;
	}
}

class GlobalEventsBase extends eventsBase
{

	function snippetExists( $event ) {
		return array_key_exists( $event, $this->events["onScreenEvents"] );
	}

	function dashSnippetExists( $event ) {
		return array_key_exists( $event, $this->events["dashboardEvents"] );
	}

	function buttonExists( $event ) {
		return array_key_exists( $event, $this->events["buttons"] );
	}

	function exists( $event, $table = "" ) {
		if( $event === "GetTablePermissions" ) {
			return array_key_exists( $table, $this->events["tablePermissions"] );
		}
		
		if( $event === "IsRecordEditable" ) {
			return array_key_exists( $table, $this->events["recordEditable"] );
		}

		return array_key_exists( $event, $this->events["pageEvents"] );
	}

	function GetTablePermissions( $permissions, $table ) {
		$events = getEventObject( new ProjectSettings( $table ) );
		return $events->GetTablePermissions( $permissions );
	}
	
	function IsRecordEditable( $values, $isEditable, $table ) {
		$events = getEventObject( new ProjectSettings( $table ) );
		return $events->IsRecordEditable( $values, $isEditable );
	}

	function prepareButtonContext( &$params ) {
		// create new button object for get record data
		$params["keys"] = (array)runner_json_decode(postvalue('keys'));
		$params["isManyKeys"] = postvalue('isManyKeys');
		if( !$params["location"] ) {
			$params["location"] = postvalue('location');
		}
	
		$button = new Button($params);
	
		$masterData = false;
		if ( isset($params['masterData']) && count($params['masterData']) > 0 )
		{
			$masterData = $params['masterData'];
		}
		else if ( isset($params["masterTable"]) )
		{
			$masterData = $button->getMasterData($params["masterTable"]);
		}
		
		$contextParams = array();
		if ( $params["location"] == PAGE_VIEW )
		{
			$contextParams["data"] = $button->getRecordData();
			$contextParams["masterData"] = $masterData;
		}
		else if ( $params["location"] == PAGE_EDIT )
		{
			$contextParams["data"] = $button->getRecordData();
			$contextParams["newData"] = $params['fieldsData'];
			$contextParams["masterData"] = $masterData;
		}
		else if ( $params["location"] == "grid" )
		{	
			$params["location"] = "list";
			$contextParams["data"] = $button->getRecordData();
			$contextParams["newData"] = $params['fieldsData'];
			$contextParams["masterData"] = $masterData;
		}
		else 
		{
			$contextParams["masterData"] = $masterData;
		}
	
		RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		return $button;

	}

}

class TableEventsBase extends eventsBase {
	var $fieldValues = array();

	//	plugin initialization mock
	protected $settings = array();

	public function hasDefaultValue( $field, $pageType ) {
		return isset( $this->fieldValues[ 'defaultValue' ][ $field ][ $pageType ] );
	}
	public function hasAutoUpdateValue( $field, $pageType ) {
		return isset( $this->fieldValues[ 'autoUpdateValue' ][ $field ][ $pageType ] );
	}
	public function hasLookupWhere( $field, $pageType ) {
		return isset( $this->fieldValues[ 'lookupWhere' ][ $field ][ $pageType ] );
	}

	public function hasUploadFolder( $field ) {
		return isset( $this->fieldValues[ 'uploadFolder' ][ $field ] );
	}

	public function defaultValue( $field, $pageType ) {
		$method = 'default_' . GoodFieldName( $field ) . '_ef' . $pageType;
		return $this->$method();
	}
	
	public function autoUpdateValue( $field, $pageType ) {
		$method = 'autoupdate_' . GoodFieldName( $field ) . '_ef' . $pageType;
		return $this->$method();
	}

	public function filterIntervalValue( $field, $idx, $lower ) {
		$method = 'filter_' . GoodFieldName( $field ) . '_idx' . $idx . '_' . ( $lower ? 'lower' : 'upper' );
		return $this->$method();
	}
	
	public function customExpression( $field, $pageType, $value, $data ) {
		$method = 'custom_' . GoodFieldName( $field ) . '_vf' . $pageType;
		return $this->$method( $value, $data );
	}
	
	public function lookupWhere( $field, $pageType ) {
		$method = 'lookupwhere_' . GoodFieldName( $field ) . '_ef' . $pageType;
		return $this->$method();
	}

	public function mapMarker( $field, $pageType, $data ) {
		$method = 'marker_' . GoodFieldName( $field ) . '_vf' . $pageType;
		return $this->$method( $data );
	}

	public function fileText( $field, $pageType, $file, $data ) {
		$method = 'filetext_' . GoodFieldName( $field ) . '_vf' . $pageType;
		return $this->$method( $file, $data );
	}

	public function uploadFolder( $field, $file ) {
		$method = 'folder_' . GoodFieldName( $field );
		return $this->$method( $file );
	}



}

?>