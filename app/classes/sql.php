<?php
///////////////////////////////////////////////////////////////////////////
// Data from wizard
///////////////////////////////////////////////////////////////////////////
class SQLEntity
{
	var $sql;
	function __construct( $proto ){}
	function IsAggregationFunctionCall() 
	{
		return false;
	}
	function IsBinary() 
	{
		return false;
	}
	function IsAsterisk() 
	{
		return false;
	}
	function SetQuery(&$query)
	{
	}
	function IsSQLField()
	{
		return false;
	}
	
};

class SQLNonParsed extends SQLEntity
{
	function __construct($proto)
	{
		$this->sql = sqlFromJson( $proto["sql"] );
	}
	
	function toSql($query)
	{
		return $this->sql;
	}

	function IsAsterisk() 
	{
		$last = substr($this->sql,strlen($this->sql)-1);
		return ($last=="*");
	}

	function fromJson( $proto ) {
		return new SQLNonParsed( $proto );
	}


}

class SQLField extends SQLEntity
{
	var $name;
	var $table;
	
	function __construct($proto)
	{
		$this->name = sqlFromJson( $proto["name"] );
		$this->table = sqlFromJson( $proto["table"] );
	}
	
	function toSql($query)
	{
		
		if( $query->cipherer != null )
		{
			return $query->cipherer->GetFieldName(
				($this->table != "" && $query->TableCount() > 1 ? $query->connection->addTableWrappers($this->table)."." : "")
					.$query->connection->addFieldWrappers($this->name) );
		}
		
		$fieldName = $query->connection->addFieldWrappers($this->name);
		if( $this->table == "" || $query->TableCount() == 1 )
			return $fieldName;

		return $query->connection->addTableWrappers($this->table) . "." . $fieldName;
	}
	
	function GetType()
	{
		$pSet = new ProjectSettings($this->table);
		return $pSet->getFieldType($this->name);
	}
	
	function IsBinary()
	{
		return IsBinaryType($this->GetType());
	}
	
	function IsSQLField()
	{
		return true;
	}
}

class SQLFieldListItem extends SQLEntity
{
	var $expression; 
	var $alias;
	var $columnName;
	var $encrypted = false;
	
	function __construct($proto)
	{
		$this->expression = sqlFromJson( $proto["expression"] );
		$this->alias = sqlFromJson( $proto["alias"] );
		$this->sql = sqlFromJson( $proto["sql"] );
		$this->columnName = sqlFromJson( $proto["columnName"] );
		$this->encrypted = sqlFromJson( $proto["encrypted"] );
		if( !$this->expression ) {
			$this->expression = new SQLNonParsed(array(
				"sql" => $this->sql
			));
		}
	}
	
	function toSql($query, $addAlias = true)
	{
		$ret = '';
		if($this->expression)
		{
			if(is_string($this->expression))
			{
				$ret = $this->expression;
			}
			else
			{
				if(is_a($this->expression, 'SQLQuery'))
				{
					$ret = $this->sql;
				}
				else
				{
					$ret = $this->expression->toSql($query);
				}
				
			}
		}
		if( $this->encrypted ) 
		{
			// ASP conversion requirement
			if( !$query->cipherer->isEncryptionByPHPEnabled() )
				$ret = $query->cipherer->GetEncryptedFieldName($ret);
		}
		
		if($addAlias)
		{
			if( $this->alias != "" ) {
				$ret .= ' as ' . $query->connection->addFieldWrappers($this->alias);
			} elseif( $this->encrypted ) {
				$ret .= ' as ' . $query->connection->addFieldWrappers( $this->columnName ); 
			}
		}
		
		return $ret;
	}
	
	function IsAsterisk() 
	{
		if(is_object($this->expression))
			return $this->expression->IsAsterisk();
		return false;
	}
	function IsAggregationFunctionCall()
	{
		if(is_object($this->expression))
			return $this->expression->IsAggregationFunctionCall();
		return false;
	}
	function getAlias()
	{
		return $this->columnName;
	}
}

class SQLFromListItem extends SQLEntity
{
	var $link;
	var $table;
	var $alias;
	var $joinOn;
	
	function __construct($proto)
	{
		$this->link = sqlFromJson( $proto["link"] );
		$this->table = sqlFromJson( $proto["table"] );
		$this->alias = sqlFromJson( $proto["alias"] );
		$this->joinOn = sqlFromJson( $proto["joinOn"] );
		$this->sql = sqlFromJson( $proto["sql"] );
		
		if( !$this->table ) {
			$this->table = new SQLNonParsed(array(
				"sql" => $this->sql
			));
		}

	}
	
	function SetQuery(&$query)
	{
		if(is_object($this->table))
			$this->table->SetQuery($query);
	}
	
	function toSql($query, $first)
	{
		$ret = '';
		$skipAlias = false;
		if(is_a($this->table, "SQLTable"))
		{
			$ret .= $this->table->toSql($query);
		}
		else
		{
			return $this->sql;
		}
		
		if($this->alias != '' && !$skipAlias)
		{
			$ret .= ' ' . $query->connection->addFieldWrappers($this->alias);
		}
		
		if($this->link == sqlLinkMAIN)
		{
			return $ret;
		}
		
		switch($this->link)
		{
			case sqlLinkINNERJOIN:
				$ret = ' INNER JOIN ' . $ret;
				break;
			case sqlLinkNATURALJOIN:
				$ret = ' NATURAL JOIN ' . $ret;
				break;
			case sqlLinkLEFTJOIN:
				$ret = ' LEFT OUTER JOIN ' . $ret;
				break;
			case sqlLinkRIGHTJOIN:
				$ret = ' RIGHT OUTER JOIN ' . $ret;
				break;
			case sqlLinkFULLOUTERJOIN:
				$ret = ' FULL OUTER JOIN ' . $ret;
				break;
			case sqlLinkCROSSJOIN:
				$ret = (!$first ? ',' : '') . $ret;
				break;
		}
		
		$joinStr = $this->joinOn->toSql($query);
		if($joinStr != '')
		{
			$ret .= ' ON ' . $joinStr;
		}
		
		return $ret;
	}
	
	function getIdentifier()
	{
		if( $this->alias != '' )
			return $this->alias;
			
		return $this->table;
	}	
}

class SQLJoinOn extends SQLEntity
{
	var $field1;
	var $field2;
      
	function __construct($proto)
	{
		$this->field1 = sqlFromJson( $proto["field1"] );
		$this->field2 = sqlFromJson( $proto["field2"] );
	}
}

class SQLFunctionCall extends SQLEntity
{
	var $functionType;
	var $functionName;
	var $arguments;
	function __construct($proto)
	{
		$this->functionType = sqlFromJson( $proto["functionType"] );
		$this->functionName = sqlFromJson( $proto["functionName"] );
		$this->arguments = sqlFromJson( $proto["arguments"] );
	}
	
	function toSql($query)
	{
		$ret = '';
		switch($this->functionType)
		{
			case SQLF_AVG:
				$ret .= ' AVG';
				break;
			case SQLF_SUM:
				$ret .= ' SUM';
				break;
			case SQLF_MIN:
				$ret .= ' MIN';
				break;
			case SQLF_MAX:
				$ret .= ' MAX';
				break;
			case SQLF_COUNT:
				$ret .= ' COUNT';
				break;
			default:
				$ret .= $this->functionName;
		}
		$args = array();
		foreach($this->arguments as $a)
		{
			$args []= $a->toSql($query);
		}
		$ret .= '('.implode(',', $args).')';
		return $ret;
	}
	function IsAggregationFunctionCall() 
	{
		switch($this->functionType)
		{
			case SQLF_AVG:
			case SQLF_SUM:
			case SQLF_MIN:
			case SQLF_MAX:
			case SQLF_COUNT:
			return true;
		}
		if( strtolower( $this->functionName ) == "group_concat" )
			return true;
		return false;
	}
}

class SQLGroupByItem extends SQLEntity
{
	var $column;
	function __construct($proto)
	{
		$this->column = sqlFromJson( $proto["column"] );
		$this->sql = sqlFromJson( $proto["sql"] );
		if( !$this->column ) {
			$this->column = new SQLNonParsed(array(
				"sql" => $this->sql
			));
		}

	}
	
	function toSql($query)
	{
		return $this->column->toSql($query);
	}
}

define("LE_AND", 1);
define("LE_OR", 2);

define("LE_ISNULL", 1);
define("LE_EQ", 2);

define("F_AGG", 1);
define("F_SIMPLE", 2);


class SQLLogicalExpr extends SQLEntity
{
	var $unionType;
	var $column;
	var $case;
	var $havingMode;
	var $contained;
	var $inBrackets;
	var $useAlias;

	var $query;
	var $postSql;
	
	function __construct($proto)
	{
		$this->sql = sqlFromJson( $proto["sql"] );
		$this->unionType = sqlFromJson( $proto["unionType"] );
		$this->column = sqlFromJson( $proto["column"] );
		$this->case = sqlFromJson( $proto["case"] );
		$this->havingMode = sqlFromJson( $proto["havingMode"] );
		$this->contained = sqlFromJson( $proto["contained"] );
		$this->inBrackets = sqlFromJson( $proto["inBrackets"] );
		$this->useAlias = sqlFromJson( $proto["useAlias"] );
		$this->postSql = array();

		if( !$this->column ) {
			$this->column = new SQLNonParsed(array(
				"sql" => $this->sql
			));
		}
	}
	
	function SetQuery(&$query)
	{
		$this->query = &$query;
		for($nCnt = 0; $nCnt < count($this->contained); $nCnt ++)
		{
			$this->contained[$nCnt]->SetQuery($query);
		}
	}
	
	function toSql($query)
	{
		$ret = '';
		if($this->haveContained())
		{
			// guess glue
			$glue = '';
			if($this->unionType == sqlUnionAND )
			{
				$glue = ' AND ';
			}
			else if($this->unionType == sqlUnionOR )
			{
				$glue = ' OR ';
			}
			else
			{
				die ('Unknown union type in SQL Logical Expression');
			}
			
			// get list of contained sql
			$contained = array();
			foreach($this->contained as $c)
			{
				$cSql = $c->toSql($query);
				if($cSql != '')
				{
					$contained []= "(".$cSql.")";
				}
			}
			
			// concatenate it
			if(count($contained) > 0)
			{
				$ret = implode($glue, $contained);
			}
			
			// concatenate result with weak typed sql
			if(count($this->postSql) > 0)
			{
				if($ret == '')
				{
					$ret .= '(' . $this->postSql[0] . ')';
				}
				else
				{
					// $ret contains subtree, therefore escape it with brackets
					$ret = '(' . $ret . ')' . $glue . '(' . $this->postSql[0] . ')';
				}
				
				for($nCnt = 1; $nCnt < count($this->postSql); $nCnt++)
				{
					// concatenation of logical expressions of one union type
					$ret .= $glue . '(' . $this->postSql[$nCnt] . ')';
				}
			}
			
			if($this->inBrackets)
			{
				$ret = '(' . $ret . ')';
			}
			
			return $ret;
		}
		
		if( $this->sql ) {
			return $this->sql;
		}
		if(!$this->column)
		{
			$ret = $this->sql;
		}
		else
		{
			if($this->useAlias)
			{
				$ret = $this->column->alias;
			}
			else
			{
				$ret = $this->column->toSql($query);
			}
		}
		
		if($this->case == 'NOT')
		{
			return ' NOT ' . $ret;
		}
		else
		{
			if($ret != '')
			{
				$ret .= ' ' . $this->case;
			}
		}
		
		if($this->inBrackets)
		{
			$ret = '(' . $ret . ')';
		}
		
		return $ret;
	}
	
	function haveContained()
	{
		return count($this->contained) > 0 || count($this->postSql) > 0;
	}
}

class SQLOrderByItem extends SQLEntity
{
	var $column;
	var $asc;
	var $columnNumber;
	function __construct($proto)
	{
		$this->column = sqlFromJson( $proto["column"] );
		$this->asc = sqlFromJson( $proto["asc"] );
		$this->columnNumber = sqlFromJson( $proto["columnNumber"] );
		$this->sql = sqlFromJson( $proto["sql"] );
		if( !$this->column ) {
			$this->column = new SQLNonParsed(array(
				"sql" => $this->sql
			));
		}
	}
	
	function toSql($query)
	{
		$ret = '';
		if(0 == $this->columnNumber)
		{
			$ret .= $this->column->toSql($query);
		}
		else
		{
			$ret .= $this->columnNumber;
		}
		
		if(!$this->asc)
		{
			$ret .= ' DESC ';
		}
		
		return $ret;
	}
}

class SQLTable extends SQLEntity
{
	var $name;
	var $columns;
	var $query;
	
	function __construct($proto)
	{
		$this->name = sqlFromJson( $proto["name"] );
		$this->columns = sqlFromJson( $proto["columns"] );
	}

	function SetQuery(&$query)
	{
		$this->query = $query;
	}
	
	function toSql($query)
	{
		return $query->connection->addTableWrappers($this->name);
	}
}

class SQLQuery extends SQLEntity
{
	var $headSql;
	var $fieldListSql;
	var $fromListSql;
	var $whereSql;
	var $orderBySql;
	var $where;
	var $having;
	var $fieldList;
	var $fromList;
	var $groupBy;
	var $orderBy;
	var $bHasAsterisks = false;

	//	initialized in getSqlComponents and toSQL only
	public $connection = null;
	public $cipherer = null;
	
	function __construct($proto)
	{
		$this->headSql = sqlFromJson( $proto["headSql"] );
		$this->fieldListSql = sqlFromJson( $proto["fieldListSql"] );
		$this->fromListSql = sqlFromJson( $proto["fromListSql"] );
		$this->whereSql = sqlFromJson( $proto["whereSql"] );
		$this->orderBySql = sqlFromJson( $proto["orderBySql"] );
		$this->where = sqlFromJson( $proto["where"] );
		$this->having = sqlFromJson( $proto["having"] );
		$this->fieldList = sqlFromJson( $proto["fieldList"] );
		$this->fromList = sqlFromJson( $proto["fromList"] );
		$this->groupBy = sqlFromJson( $proto["groupBy"] );
		$this->orderBy = sqlFromJson( $proto["orderBy"] );
		
		for($nCnt = 0; $nCnt < count($this->fromList); $nCnt++)
		{
			$this->fromList[$nCnt]->SetQuery($this);
		}
		$this->where->SetQuery($this);
		if(!is_array($this->fieldList))
			return;
		for($i=0;$i<count($this->fieldList);$i++)
		{
			if($this->fieldList[$i]->IsAsterisk())
			{
				$this->bHasAsterisks=true;
				break;
			}
		}
	}
	
	function FromToSql()
	{
		$sql = "";
		if(count($this->fromList) > 0)
		{
			$sql .= "\r\n";
			$sql .= ' FROM ';
		}
		
		if( $this->connection->dbType == nDATABASE_Access )
		{
			$sqlFromList = '';
			for($nCnt = 0; $nCnt < count($this->fromList); $nCnt ++)
			{
				if($sqlFromList !== '')
				{
					$sqlFromList = '(' . $sqlFromList . ')';
				}
				$sqlFromList .=  $this->fromList[$nCnt]->toSql($this, $nCnt == 0);
			}
			$sql .= $sqlFromList;
		}
		else
		{		
			$fromlist = array();
			for($nCnt = 0; $nCnt < count($this->fromList); $nCnt ++)
			{
				$fromlist []= $this->fromList[$nCnt]->toSql($this, $nCnt == 0);
			}
			$sql .= implode("\r\n", $fromlist);
		}
	
		return $sql;
	}
	
	function HavingToSql()
	{
		return $this->having->toSql($this);
	}
	
	function OrderByToSql()
	{
		return $this->orderBySql;
	}
		
	function HeadToSql( $oneRecordMode = false )
	{
		$sql = '';
		$sql .= $this->headSql;
		
		if( $this->connection->dbType == nDATABASE_MSSQLServer || $this->connection->dbType == nDATABASE_Access )
		{
			if($oneRecordMode)
				$sql .= " top 1 ";
		}
		
		// do not add spaces to empty sql string		
		if($sql != '')
		{
			$sql .= "\r\n";
		}
		
		// collect fields
		$fields = array();
		foreach($this->fieldList as $f)
		{
			$fields []= $f->toSql($this);
		}

		// allow derived classes to drop out fields from field list
		if(count($fields) > 0)
		{
			$sql .= implode(', ', $fields);
		}
		
		return $sql;
	}
	
	/**
	 * Add custom expression to the fields list
	 * @param String expression
	 * @param ProjectSettings pSet
	 * @param String mainTable
	 * @param String mainFiled
	 * @param String alias
	 */
	function AddCustomExpression($expression, $pSet, $mainTable, $mainFiled, $alias = "")
	{
		$index = count($this->fieldList);
		$itemFound = false;	
		foreach($this->fieldList as $key => $listItem)
		{
			if( $listItem->expression == $expression &&  $listItem->alias == $alias )
			{
				$index = $key;
				$itemFound = true;
				break;
			}
		}
		
		if( !$itemFound ) 
			$this->fieldList[] = new SQLFieldListItem( array(
				"expression" => $expression, 
				"alias" => $alias
			));
		
		$pSet->addCustomExpressionIndex($mainTable, $mainFiled, $index);
	}
	
	function GroupByToSql()
	{
		$sql = '';
		$groupby = array();
		foreach($this->groupBy as $g)
		{
			$groupby []= $g->toSql($this);
		}
		if(count($groupby) > 0)
		{
			$sql .= ' GROUP BY ';
			$sql .= implode(',', $groupby);
			$sql .= " ";
		}
		return $sql;
	}

	function GroupByHavingToSql()
	{
		$sql = "";
		$sqlGroup = $this->GroupByToSql();
		$sqlHaving = $this->HavingToSql();
		if ( strlen($sqlGroup) )
			$sql .= $sqlGroup;
		if ( strlen($sqlHaving) )
			$sql .= " HAVING ". $sqlHaving;

		return $sql;
	}
		
	/**
	 * Only called for subqueries
	 * @param SQLQuery main query
	 */
	function toSql( $query )
	{
		$this->connection = $query->connection;
		$this->cipherer = $query->cipherer;

		$sql = $this->HeadToSql($oneRecordMode);
		
		$sql .= $this->FromToSql();
		
		$sql .= $joinFromPart;
		
		if($strwhere != null)
		{
			if($strwhere !== '')
			{
				$sql .= ' WHERE ' . $strwhere . "\r\n";
			}
		}
		else
		{
			$where = $this->where->toSql($this);
			if($where != "")
			{
				$sql .= ' WHERE ' . $where . "\r\n";
			}
		}
		
		$sql .= $this->GroupByToSql();
		
		if($strhaving != null)
		{
			if($strhaving !== '')
			{
				$sql .= ' HAVING ' . $strhaving . "\r\n";
			}
		}
		else
		{
			$having = $this->having->toSql($this);
			if($having != "")
			{
				$sql .= ' HAVING ' . $having . "\r\n";
			}
		}
		
		if($strorderby !== null)
		{
			$sql .= $strorderby . "\r\n";
		}
		else
		{
			$orderby = array();
			foreach($this->orderBy as $g)
			{
				$orderby []= $g->toSql($this);
			}
			if(count($orderby) > 0)
			{
				$sql .= ' ORDER BY ';
				$sql .= implode(',', $orderby);
				$sql .= "\r\n";
			}
		}
		
		if( $this->connection->dbType == nDATABASE_MySQL )
		{	
			if($oneRecordMode)
				$sql.=" limit 0,1";
		}
		
		if( $this->connection->dbType == nDATABASE_PostgreSQL )
		{		
			if($oneRecordMode)
				$sql.=" limit 1";
		}
		
		if( $this->connection->dbType == nDATABASE_DB2 )
		{			
			if($oneRecordMode)
				$sql.=" fetch first 1 rows only";
		}
		
		return $sql;
	}
	
	function TableCount()
	{
		return count($this->fromList);
	}
	
	/**
	 * checks if field list item is an aggregation funciton call
	 */
	function IsAggrFuncField($idx)
	{
		if($this->HasAsterisks())
			return false;
		if(!isset($this->fieldList[$idx]))
			return false;
		return $this->fieldList[$idx]->IsAggregationFunctionCall();
	}
	
	/**
	 * @param Array fieldindices
	 */
	function ReplaceFieldsWithDummies( $fieldindices )
	{
		if($this->HasAsterisks())
			return;
			
		foreach($fieldindices as $idx)
		{
			if(!isset($this->fieldList[$idx - 1]))
				return;
			
			$this->fieldList[$idx - 1] = new SQLFieldListItem(array(
				"alias" => "runnerdummy" . $idx,
				"expression" => "1"
			));
		}
	}
	
	function RemoveAllFieldsExcept($idx)
	{
		if($this->HasAsterisks())
			return;
		$removeindices=array();
		for($i=0;$i<count($this->fieldList);$i++)
		{
			if($i!=$idx-1)
				$removeindices[]=$i+1;
		}
		$this->ReplaceFieldsWithDummies($removeindices);
	}	

	function RemoveAllFieldsExceptList( $arr )
	{
		if($this->HasAsterisks())
			return;
		$removeindices=array();
		for($i=0;$i<count($this->fieldList);$i++)
		{
			if( array_search( $i + 1, $arr ) === false )
				$removeindices[] = $i + 1;
		}
		$this->ReplaceFieldsWithDummies($removeindices);
	}	
	
	function WhereToSql()
	{
		return $this->where->toSql($this);
	}
	
	function & Where()
	{
		return $this->where;
	}
	
	function & Having()
	{
		return $this->having;
	}
	
	function Copy()
	{
		return unserialize(serialize($this));
	}
	
	function HasGroupBy()
	{
		return count($this->groupBy) > 0;
	}
	
	function HasSubQueryInFromClause()
	{
		foreach($this->fromList as $fromList)
		{
			if( is_object( $fromList->table ) && is_a($fromList->table, 'SQLQuery') ) 
				return true;
		}
		return false;
	}
	
	function HasJoinInFromClause()
	{
		return count( $this->fromList ) > 1;
	}
	
	function HasTableInFormClause($tName)
	{
		foreach($this->fromList as $fromList)
		{
			if( $tName == $fromList->getIdentifier() )
				return true;
		}
		return false;
	}
	
	function HasAsterisks()
	{
		return $this->bHasAsterisks;
	}
	
	function addWhere($_where)
	{
		if(trim($_where) == "")
		{
			return;		
		}
		
		$myproto=array();
		$myproto["sql"] = $_where;
		$myproto["unionType"] = sqlUnionUNKNOWN;

		$myproto["column"]=null;
		$myproto["contained"] = array();
		$myproto["case"] = "";
		$myproto["havingMode"] = false;
		$myproto["inBrackets"] = true;
		$myproto["useAlias"] = false;
		
		$myobj = new SQLLogicalExpr($myproto);
		$myobj->query = $this;
		
		if(!$this->where)
		{
			$this->where = $myobj;
			return;
		}

		$newproto=array();
		$newproto["unionType"] = sqlUnionAND;
		$newproto["contained"] = array();
		$newproto["contained"][] = $this->where;
		$newproto["contained"][] = $myobj;
		$newobj = new SQLLogicalExpr($newproto);
		$newobj->query = $this;
		$this->where = $newobj;
		
	}
	
	function replaceWhere($_where)
	{	
		if(trim($_where) == "")
		{
			$myproto = array();
			$myobj = new SQLLogicalExpr($myproto);
			$myobj->query = $this;
			
			$this->where = $myobj;
			
			return;
		}
		$myproto = array();
		$myproto["sql"] = $_where;
		$myproto["unionType"] = sqlUnionUNKNOWN;

		$myproto["column"]=null;
		$myproto["contained"] = array();
		$myproto["case"] = "";
		$myproto["havingMode"] = false;
		$myproto["inBrackets"] = true;
		$myproto["useAlias"] = false;
		
		$myobj = new SQLLogicalExpr($myproto);
		$myobj->query = $this;
		
		$this->where = $myobj;
	}
	
	function addField($_field, $_alias)
	{
		$myproto=array();
		$myobj = new SQLNonParsed(array(
			"sql" => $_field
		));
		$myproto["expression"]=$myobj;
		$myproto["alias"]=$_alias;
		
		$myobj = new SQLFieldListItem($myproto);
		$this->fieldList[] = $myobj;
	}
	
	function replaceField($_field, $_newfield, $_newalias = "")
	{
		$myproto=array();
		$myobj = new SQLNonParsed(array(
			"sql" => $_newfield
		));
		$myproto["expression"]=$myobj;

		if(!is_numeric($_field))
		{
			foreach($this->fieldList as $key=>$obj)
			{
				if($this->fieldList[$key]->getAlias() == $_field)
				{
					$_field = $key;
					break;
				}
			}
		}
		if(is_numeric($_field))
		{
			if(!$_newalias)
				$_newalias = $this->fieldList[$_field]->getAlias();
			$myproto["alias"]=$_newalias;
			
			$myobj = new SQLFieldListItem($myproto);
			$this->fieldList[$_field] = $myobj;
		}
	}
	
	function deleteField($_field)
	{
		if(!is_numeric($_field))
		{
			foreach($this->fieldList as $key=>$obj)
			{
				if($this->fieldList[$key]->getAlias() == $_field)
				{
					$_field = $key;
					break;
				}
			}
		}
		if(is_numeric($_field))
		{
			$fieldlist = $this->fieldList;
			array_splice($fieldlist, $_field,1);
			$this->fieldList = $fieldlist;
		}
	}

	/**
	 * Deletes all fields from the SELECT-list except a single field.
	 * @param Integer idx - 0-based index of the field to leave in the query.
	 */
	function deleteAllFieldsExcept( $idx )
	{
		$field = $this->fieldList[ $idx ];
		$this->fieldList = array();
		$this->fieldList[] = $field;
	}

	/**
	 *
	 */
	function getSqlComponents( $connection, $cipherer, $oneRecordMode = false ) 
	{
		$this->connection = $connection;
		$this->cipherer = $cipherer;
		return array(
			"head" => $this->HeadToSql( $oneRecordMode ),
			"from" => $this->FromToSql(),
			"where" => $this->WhereToSql(),
			"groupby" => $this->GroupByToSql(),
			"having" => $this->Having()->toSql($this)
		);
	}


	/**
	 * Build SQL query from components.
	 *
	 * @param Array $sqlParts - array of original SQL parts. Keys are "head", "from", "where", "groupby", "having"
	 *							All of this comes from the original SQL query. No user input or database data can be added to these parameters. They are treated with DB:PrepareSQL
	 * @param Array $mandatoryWhere - these are mandatory WHERE cases. Records in the subset must agree with ALL these conditions. Security, master-details, filters, Search with 'all criteria' etc.
	 * @param Array $mandatoryHaving - the same as $mandatoryWhere.
	 * @param Array $optionalWhere - these are Search clauses. Records in the subset may agree with AT LEAST ONE of the conditions. Search with 'or' criteria and all-fields search go here.
	 * @param Array $optionalHaving - the same as $optionalWhere.
	 * @return String
	 */
	
	static function buildSQL( $sqlParts, $mandatoryWhere = array(), $mandatoryHaving = array(), $optionalWhere = array(), $optionalHaving = array() )
	{
		
		//	process templates in SQL
		$prepSqlParts = array();
		foreach( $sqlParts as $k => $s ) {
			$prepSqlParts[ $k ] = DB::PrepareSQL( $s );
		}
		
		$sqlHead = $prepSqlParts["head"];
		if( 0 == strlen( $sqlHead ) )
			$sqlHead = "select * ";
		
		$unionMode = ( $optionalWhere && $optionalHaving );
		
		$mWhere = SQLQuery::combineCases( $mandatoryWhere, "and" );
		$oWhere = SQLQuery::combineCases( $optionalWhere, "or" );
		$mHaving = SQLQuery::combineCases( $mandatoryHaving, "and" );
		$oHaving = SQLQuery::combineCases( $optionalHaving, "or" );
		if( strlen($oWhere) && strlen($oHaving) ) 
		{
			//	UNION mode
			$where1 = SQLQuery::combineCases( array( $mWhere, $oWhere, $prepSqlParts["where"] ), "and" );
			$having1 = SQLQuery::combineCases( array( $mHaving, $prepSqlParts["having"] ), "and" );
			$where2 = SQLQuery::combineCases( array( $mWhere, $prepSqlParts["where"] ), "and" );
			$having2 = SQLQuery::combineCases( array( $mHaving, $oHaving, $prepSqlParts["having"] ), "and" );

			if( 0 != strlen($where1) )
				$where1 = " WHERE " . $where1;
			if( 0 != strlen($having1) )
				$having1 = " HAVING " . $having1;
			if( 0 != strlen($where2) )
				$where2 = " WHERE " . $where2;
			if( 0 != strlen($having2) )
				$having2 = " HAVING " . $having2;
			
			return implode( " ", array( $sqlHead, 
									$prepSqlParts["from"],  
									$where1, 
									$prepSqlParts["groupby"], 
									$having1,
									"union",
									$sqlHead, 
									$prepSqlParts["from"],  
									$where2, 
									$prepSqlParts["groupby"], 
									$having2
								) );
			
		}
		else
		{
			$where = SQLQuery::combineCases( array( $mWhere, $oWhere, $prepSqlParts["where"] ), "and" );
			$having = SQLQuery::combineCases( array( $mHaving, $oHaving, $prepSqlParts["having"] ), "and" );
			
			if( 0 != strlen($where) )
				$where = " WHERE " . $where;

			if( 0 != strlen($having) )
				$having = " HAVING " . $having;
			
			return implode( " ", array( $sqlHead, 
									$prepSqlParts["from"],  
									$where, 
									$prepSqlParts["groupby"], 
									$having 
								) );
		}
		
	}
	
	static function combineCases( $_cases, $operator )
	{
		$cases = array();
		foreach( $_cases as $c ) {
			if( 0 != strlen( trim( $c ) ) )
				$cases[] = $c;
		}
		
		$result = implode( " ) " . $operator . " ( ", $cases );
		if( 0 == strlen( $result ) )
			return "";
		return "( " . $result . " )";
	}
	
	
	
	
	/**
	 * Check whether the column specified by an index is a field that comes from the main table.
	 * False cases include joined, aliased, calculated fields, function calls and subqueries
	 * @param Number index	
	 * @param String tableName	
	 * @param String field
	 * @return String
	 */
	public function fieldComesFromTheTableAsIs($index, $tableName, $field)
	{
		$fieldListItem = $this->fieldList[ $index ];
		
		if( !is_object($fieldListItem) )
			return false;
		if( 0 != strlen($fieldListItem->alias) )
			return false;
		if( !is_a($fieldListItem->expression, 'SQLField') )
			return false;
		if( strlen($fieldListItem->expression->table) != 0 && $fieldListItem->expression->table != $tableName )
			return false;
			
		return 0 == strcasecmp($fieldListItem->expression->name, $field);
		
	}
}

class SQLCountQuery extends SQLQuery
{
	function __construct($src)
	{
		// copy base class memebers
		foreach($src as $k => $v)
		{
			$this[$k] = $v;
		}
		
		// drop this
		$this->headSql = '';
		
		if(!$this->HasGroupBy())
		{
			// drop all fields to make sql look like:
			// select count(*) from ...
			// otherwise it will look like:
			// select count(*) from (select ... from ...) 
			$this->fieldList = array();
		}
	}
	
	function toSql($strwhere = null, $strorderby = null, $strhaving = null, $oneRecordMode = false, $joinFromPart = null)
	{
		$sql = SQLQuery::toSql($strwhere);
		if($this->HasGroupBy())
		{
			$ret = 'select count(*) from (' . $sql . ') a';
		}
		else
		{
			// sql variable begins with 'FROM ...' cause
			// we dropped out everything before it in constructor.
			// Therefore we may not use subqueries.
			$ret = 'select count(*) from ' . $sql;
		}
		return $ret;
	}
}

function sqlFromJson( $proto ) {
	if( !is_array( $proto ) ) {
		return $proto;
	}
	if( !$proto['type'] ) {
		//	array of objects
		$ret = array();
		foreach( $proto as $obj ) {
			$ret[] = sqlFromJson( $obj );
		}
		return $ret;
	}
	switch( $proto['type'] ) {
		case 'FieldListItem':
			return new SQLFieldListItem( $proto );
		case 'SQLField':
			return new SQLField( $proto );
		case 'JoinOn':
			return new SQLJoinOn( $proto );
		case 'FromListItem':
			return new SQLFromListItem( $proto );
		case 'FunctionCall':
			return new SQLFunctionCall( $proto );
		case 'GroupByListItem':
			return new SQLGroupByItem( $proto );
		case 'LogicalExpression':
			return new SQLLogicalExpr( $proto );
		case 'OrderByListItem':
			return new SQLOrderByItem( $proto );
		case 'SQLQuery':
			return new SQLQuery( $proto );
		case 'SQLTable':
			return new SQLTable( $proto );
		case 'NonParsedEntity':
			return new SQLNonParsed( $proto );
		case 'Entity':
			return new SQLEntity( $proto );
	}
	return null;
}

?>