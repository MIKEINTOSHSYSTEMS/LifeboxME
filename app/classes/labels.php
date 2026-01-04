<?php

class Labels {

	public static function getLanguages() {
		return ProjectSettings::languages();
	}

	private static function findLanguage( $lng ) {
		$languages = Labels::getLanguages();
		if( array_search( $lng, $languages ) !== FALSE )
			return $lng;
		$lng = strtoupper( $lng );
		foreach( $languages as $l )
		{
			if( strtoupper($l) == $lng )
				return $l;
		}
		return mlang_getcurrentlang();
	}

	private static function findTable( $table, $strict = false ) {
		$table = findTable( $table, $strict );
		if( !$table )
			return "";
		return $table;
	}

	protected static function setFieldString( $key, $table, $field, $str ) {
		global $runnerTableLabels;
		$table = Labels::findTable( $table );
		if( $table == "" )
			return false;
		$ps = new ProjectSettings( $table );
		$field = $ps->findField( $field );
		if( $field == "" )
			return false;
		$runnerTableLabels[ $table ][ $key ][ GoodFieldName($field) ] = $str;
		return true;
	}

	protected static function getFieldString( $key, $table, $field ) {
		global $runnerTableLabels;
		$table = Labels::findTable( $table );
		if( $table == "" )
			return "";
		$ps = new ProjectSettings( $table );
		$field = $ps->findField( $field );
		if( $field == "" )
			return "";
		return $runnerTableLabels[ $table ][ $key ][ GoodFieldName($field) ];
	}

	public static function getFieldLabel( $table, $field, $lng = "" ) {
		if( $lng && $lng !== mlang_getcurrentlang() ) {
			return "";
		}
		return Labels::getFieldString( 'fieldLabels', $table, $field );
	}

	public static function setFieldLabel( $table, $field, $str, $lng = "" ) {
		if( $lng && $lng !== mlang_getcurrentlang() ) {
			return false;
		}
		return Labels::setFieldString( 'fieldLabels', $table, $field, $str );
	}

	public static function getTableCaption( $table, $lng = "" ) {
		$table = Labels::findTable( $table, true );
		if( $table == "" )
			return "";
		$lng = Labels::findLanguage( $lng );
		$strings = ProjectSettings::getProjectValue( 'allTables', $table, 'caption' );
		if( !$strings ) {
			return $table;
		}
		return Labels::getLanguageValue( $strings , $lng );
	}

	public static function setTableCaption( $table, $str, $lng = "" ) {
		global $runnerProjectSettings;
		$table = Labels::findTable( $table );
		if( $table == "" )
			return false;
		$lng = Labels::findLanguage( $lng );
		$runnerProjectSettings[ 'allTables' ][ $table ][ 'caption' ][ $lng ] = $str;
		return true;
	}

	public static function getProjectLogo( $lng = '' )
	{
		global $runnerLangMessages;
		$lng = Labels::findLanguage( $lng );
		return @$runnerLangMessages[ $lng ]['projectLogo'];
	}

	public static function setProjectLogo( $str, $lng="" )
	{
		global $runnerLangMessages;
		$lng = Labels::findLanguage( $lng );
		if( !$runnerLangMessages[ $lng ] ) {
			$runnerLangMessages[ $lng ] = array();
		}
		$runnerLangMessages[ $lng ]['projectLogo'] = $str;
		return true;
	}


	public static function getCookieBanner( $lng = '' )
	{
		global $runnerLangMessages;
		$lng = Labels::findLanguage( $lng );
		$banner = @$runnerLangMessages[ $lng ]['cookieBannerText'];
		return $banner ? $banner : @$runnerLangMessages[ $lng ]['messages']["COOKIE_BANNER"];
	}

	public static function setCookieBanner( $str, $lng="" )
	{
		global $runnerLangMessages;
		$lng = Labels::findLanguage( $lng );
		if( !$runnerLangMessages[ $lng ] ) {
			$runnerLangMessages[ $lng ] = array();
		}
		$runnerLangMessages[ $lng ]['cookieBannerText'] = $str;
		return true;
	}

	public static function setFieldTooltip($table, $field, $str, $lng = "")
	{
		if( $lng && $lng !== mlang_getcurrentlang() ) {
			return "";
		}
		return Labels::setFieldString( 'fieldTooltips', $table, $field, $str );
	}

	public static function getFieldTooltip($table, $field, $lng = "")
	{
		if( $lng && $lng !== mlang_getcurrentlang() ) {
			return "";
		}
		return Labels::getFieldString( 'fieldTooltips', $table, $field );
	}

	public static function setPageTitleTempl( $table, $page, $str, $lng = "")
	{
		global $runnerTableLabels;
		$table = Labels::findTable( $table );
		if( $table == "" )
			return false;
		$runnerTableLabels[ $table ][ 'pageTitles' ][ $page ] = $page;
		return  true;
	}

	public static function getPageTitleTempl( $table, $page, $lng = "")
	{
		global $runnerTableLabels;
		$table = Labels::findTable( $table );
		if( $table == "" )
			return "";
		if( array_key_exists( $page, $runnerTableLabels[ $table ][ 'pageTitles' ]) ) {
			return $runnerTableLabels[ $table ][ 'pageTitles' ][ $page ];
		}
		$ps = new ProjectSettings( $table, '', $page );
		return RunnerPage::getDefaultPageTitle( $ps->getPageType(), $table, $ps );
	}

	public static function setBreadcrumbsLabelTempl( $table, $str, $master = "", $page = "", $lng = "" )
	{
		global $breadcrumb_labels;
		$table = Labels::findTable( $table );
		if( !$table )
			$table = ".";
		$master = findTable( $master );
		if( !$master )
			$master = ".";
		$lng = Labels::findLanguage( $lng );
		if( $page == "")
			$page = ".";
		if( !isset( $breadcrumb_labels[$lng] ) )
			$breadcrumb_labels[$lng] = array();
		if( !isset( $breadcrumb_labels[$lng][$table] ) )
			$breadcrumb_labels[$lng][$table] = array();
		if( !isset( $breadcrumb_labels[$lng][$table][$master] ) )
			$breadcrumb_labels[$lng][$table][$master] = array();
		$breadcrumb_labels[$lng][$table][$master][ $page ] = $str;
	}

	public static function getBreadcrumbsLabelTempl( $table, $master = "", $page = "", $lng = "" ) {
		global $breadcrumb_labels;
		$table = Labels::findTable( $table );
		if( !$table )
			$table = ".";
		$master = findTable( $master );
		if( !$master )
			$master = ".";
		$lng = Labels::findLanguage( $lng );
		if( $page == "")
			$page = ".";
		if( !isset( $breadcrumb_labels[$lng] ) )
			return "";
		if( !isset( $breadcrumb_labels[$lng][$table] ) )
			return "";
		if( !isset( $breadcrumb_labels[$lng][$table][$master] ) )
			return "";
		return $breadcrumb_labels[$lng][$table][$master][ $page ];
	}

	/**
	 * @param String table
	 * @param String field
	 * @param String lng
	 * @return String
	 */
	static function getPlaceholder( $table, $field, $lng = "" )
	{
		if( $lng && $lng !== mlang_getcurrentlang() ) {
			return "";
		}
		return Labels::getFieldString( 'fieldPlaceholders', $table, $field );
	}

	/**
	 * @param String table
	 * @param String field
	 * @param String placeHolder
	 * @param String lng
	 * @return Boolean
	 */
	static function setPlaceholder( $table, $field, $placeHolder, $lng = "" )
	{
		if( $lng && $lng !== mlang_getcurrentlang() ) {
			return "";
		}
		return Labels::setFieldString( 'fieldPlaceholders', $table, $field, $str );
	}

	/**
	 * @return String
	 */
	public static function multilangString( $mlString ) {
		if( !is_array( $mlString ) ) {
			return '';
		}
		switch( @$mlString['type'] ) {
			case mlTypeText: {
				return $mlString['text'];
			}		
			case mlTypeCustomLabel: {
				return GetCustomLabel( $mlString['label'] );
			}
		}
		return '';

	}

	
	protected static function getLanguageValue( &$strings, $lang ) {
		if( !$strings ) {
			return '';
		}
		if( array_key_exists( $lang, $strings ) ) {
			return $strings[ $lang ];
		}
		$defaultLang = ProjectSettings::getProjectValue( 'defaultLanguage' );
		if( array_key_exists( $defaultLang, $strings ) ) {
			return $strings[ $defaultLang ];
		}
		foreach( $strings as $str ) {
			return $str;
		}
		return '';
	}
}

?>