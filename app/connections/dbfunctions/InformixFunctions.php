<?php
class InformixFunctions extends DBFunctions
{	

	function __construct( $params )
	{
		parent::__construct( $params );
		$this->strLeftWrapper = "";
		$this->strRightWrapper = "";
	}

	/**
	 * @param String str
	 * @return String
	 */	
	public function escapeLIKEpattern( $str )
	{
		return $str;
	}
	
	/**
	 *  add wrappers only to schema name!!
	 */
	public function addTableWrappers( $strName )
	{
		$arr = explode(".", $strName);
		if( count( $arr ) == 1 ) {
			return $strName;
		}
		$ret = "";
		foreach( $arr as $idx => $e )
		{
			if( $ret != "" )
				$ret .= ".";
			if( $idx == 0 ) {
				$ret .= '"' . $e . '"';
			} else {
				$ret .= $e;
			}
		}
		return $ret;
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		return $str;
	}
	

	/**
	 * @param String dbval
	 * @return String	 
	 */	
	public function upper( $dbval )
	{
		return "upper(".$dbval.")";
	}
	
	/**
	 * @param Mixed $val
	 * @return String
	 */
	public function addDateQuotes( $val )
	{
		if( $val == "" || $val === null )
			return 'null';
		$arrDate = db2time($val);
		return "'".$arrDate[0]."-".$arrDate[1]."-".$arrDate[2]." ".$arrDate[3].":".$arrDate[4].":".$arrDate[5]."'";
	}
	
	/**
	 * It's called for Contains and Starts with searches
	 * @param Mixed value
	 * @param Number type (optional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		return 'TO_CHAR(' . $value . ')';
	}	
	/**
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time($value, $type)
	{
		return $value;
	}	

	public function limitedQuery( $connection, $strSQL, $skip, $total, $applyLimit ) 
	{
		if( $applyLimit && $total >= 0 ) 
			$strSQL = AddTopIfx($strSQL, $skip + $total);
	
		$qResult =  $connection->query( $strSQL );
		$qResult->seekRecord( $skip );
		
		return $qResult;
	}

	public function intervalExpressionString( $expr, $interval ) 
	{
		return DBFunctions::intervalExprSubstring( $expr, $interval );
	}

	public function intervalExpressionNumber( $expr, $interval ) 
	{
		return DBFunctions::intervalExprFloor( $expr, $interval );
	}
}
?>