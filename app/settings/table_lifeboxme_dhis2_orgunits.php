<?php
global $runnerTableSettings;
$runnerTableSettings['public.lifeboxme_dhis2_orgunits'] = array(
	'name' => 'public.lifeboxme_dhis2_orgunits',
	'shortName' => 'lifeboxme_dhis2_orgunits',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => '00C2C5',
	'pageSizeSelectorRecords' => array( 
		'10',
		'20',
		'30',
		'50',
		'100',
		'500',
		'-1' 
	),
	'pageSizeSelectorGroups' => array( 
		'1',
		'3',
		'5',
		'10',
		'50',
		'100',
		'-1' 
	),
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	id,
	lb_int_id,
	lb_int,
	cont_id,
	continent,
	count_id,
	country,
	hosp_fac_id,
	hospital_facility,
	"level",
	last_updated
FROM "public".lifeboxme_dhis2_orgunits',
	'keyFields' => array( 
		'id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'sourceSingle' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'lb_int_id' => array(
			'name' => 'lb_int_id',
			'goodName' => 'lb_int_id',
			'strField' => 'lb_int_id',
			'sourceSingle' => 'lb_int_id',
			'index' => 2,
			'sqlExpression' => 'lb_int_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'lb_int' => array(
			'name' => 'lb_int',
			'goodName' => 'lb_int',
			'strField' => 'lb_int',
			'sourceSingle' => 'lb_int',
			'index' => 3,
			'sqlExpression' => 'lb_int',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'cont_id' => array(
			'name' => 'cont_id',
			'goodName' => 'cont_id',
			'strField' => 'cont_id',
			'sourceSingle' => 'cont_id',
			'index' => 4,
			'sqlExpression' => 'cont_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'cont_id',
					'lookupDisplayField' => 'cont_id',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'continent' => array(
			'name' => 'continent',
			'goodName' => 'continent',
			'strField' => 'continent',
			'sourceSingle' => 'continent',
			'index' => 5,
			'sqlExpression' => 'continent',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'continent',
					'lookupDisplayField' => 'continent',
					'lookupOrderBy' => 'continent',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'count_id' => array(
			'name' => 'count_id',
			'goodName' => 'count_id',
			'strField' => 'count_id',
			'sourceSingle' => 'count_id',
			'index' => 6,
			'sqlExpression' => 'count_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'count_id',
					'lookupDisplayField' => 'count_id',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'sourceSingle' => 'country',
			'index' => 7,
			'sqlExpression' => 'country',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country',
					'lookupDisplayField' => 'country',
					'lookupOrderBy' => 'country',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'continent',
							'lookupField' => 'continent' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'hosp_fac_id' => array(
			'name' => 'hosp_fac_id',
			'goodName' => 'hosp_fac_id',
			'strField' => 'hosp_fac_id',
			'sourceSingle' => 'hosp_fac_id',
			'index' => 8,
			'sqlExpression' => 'hosp_fac_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'hosp_fac_id',
					'lookupDisplayField' => 'hosp_fac_id',
					'lookupOrderBy' => 'hosp_fac_id',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'hospital_facility' => array(
			'name' => 'hospital_facility',
			'goodName' => 'hospital_facility',
			'strField' => 'hospital_facility',
			'sourceSingle' => 'hospital_facility',
			'index' => 9,
			'sqlExpression' => 'hospital_facility',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 255,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'hospital_facility',
					'lookupDisplayField' => 'hospital_facility',
					'lookupOrderBy' => 'hospital_facility',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'country',
							'lookupField' => 'country' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'level' => array(
			'name' => 'level',
			'goodName' => 'level',
			'strField' => 'level',
			'sourceSingle' => 'level',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => '"level"',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_orgunits',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'level',
					'lookupDisplayField' => 'level',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'sourceSingle' => 'last_updated',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'last_updated',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 13,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_orgunits' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	lb_int_id,
	lb_int,
	cont_id,
	continent,
	count_id,
	country,
	hosp_fac_id,
	hospital_facility,
	"level",
	last_updated
FROM "public".lifeboxme_dhis2_orgunits',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'lb_int_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'lb_int_id' 
				),
				'encrypted' => false,
				'columnName' => 'lb_int_id' 
			),
			array(
				'sql' => 'lb_int',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'lb_int' 
				),
				'encrypted' => false,
				'columnName' => 'lb_int' 
			),
			array(
				'sql' => 'cont_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'cont_id' 
				),
				'encrypted' => false,
				'columnName' => 'cont_id' 
			),
			array(
				'sql' => 'continent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'continent' 
				),
				'encrypted' => false,
				'columnName' => 'continent' 
			),
			array(
				'sql' => 'count_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'count_id' 
				),
				'encrypted' => false,
				'columnName' => 'count_id' 
			),
			array(
				'sql' => 'country',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'country' 
				),
				'encrypted' => false,
				'columnName' => 'country' 
			),
			array(
				'sql' => 'hosp_fac_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'hosp_fac_id' 
				),
				'encrypted' => false,
				'columnName' => 'hosp_fac_id' 
			),
			array(
				'sql' => 'hospital_facility',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'hospital_facility' 
				),
				'encrypted' => false,
				'columnName' => 'hospital_facility' 
			),
			array(
				'sql' => '"level"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'level' 
				),
				'encrypted' => false,
				'columnName' => 'level' 
			),
			array(
				'sql' => 'last_updated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_orgunits',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme_dhis2_orgunits',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme_dhis2_orgunits',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'lb_int_id',
						'lb_int',
						'cont_id',
						'continent',
						'count_id',
						'country',
						'hosp_fac_id',
						'hospital_facility',
						'level',
						'last_updated' 
					),
					'name' => 'public.lifeboxme_dhis2_orgunits' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	lb_int_id,
	lb_int,
	cont_id,
	continent,
	count_id,
	country,
	hosp_fac_id,
	hospital_facility,
	"level",
	last_updated',
		'fromListSql' => 'FROM "public".lifeboxme_dhis2_orgunits',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme_dhis2_orgunits',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'lb_int_id',
			'lb_int',
			'cont_id',
			'continent',
			'count_id',
			'country',
			'hosp_fac_id',
			'hospital_facility',
			'level',
			'last_updated' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'lb_int_id',
			'lb_int',
			'cont_id',
			'continent',
			'count_id',
			'country',
			'hosp_fac_id',
			'hospital_facility',
			'level',
			'last_updated' 
		) 
	),
	'connId' => 'lifebox_mesystem_at_localhost',
	'sortByFields' => array(
		'sortOrder' => array( 
			 
		) 
	),
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['public.lifeboxme_dhis2_orgunits'] = array(
	'tableCaption' => 'Lifeboxme Dhis2 Orgunits',
	'fieldLabels' => array(
		'id' => 'Id',
		'lb_int_id' => 'Lb Int Id',
		'lb_int' => 'Lb Int',
		'cont_id' => 'Cont Id',
		'continent' => 'Continent',
		'count_id' => 'Count Id',
		'country' => 'Country',
		'hosp_fac_id' => 'Hosp Fac Id',
		'hospital_facility' => 'Hospital/Facility',
		'level' => 'Level',
		'last_updated' => 'Last Updated' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'lb_int_id' => '',
		'lb_int' => '',
		'cont_id' => '',
		'continent' => '',
		'count_id' => '',
		'country' => '',
		'hosp_fac_id' => '',
		'hospital_facility' => '',
		'level' => '',
		'last_updated' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'lb_int_id' => '',
		'lb_int' => '',
		'cont_id' => '',
		'continent' => '',
		'count_id' => '',
		'country' => '',
		'hosp_fac_id' => '',
		'hospital_facility' => '',
		'level' => '',
		'last_updated' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>