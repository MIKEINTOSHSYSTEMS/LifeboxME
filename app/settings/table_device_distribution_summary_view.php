<?php
global $runnerTableSettings;
$runnerTableSettings['public.device_distribution_summary_view'] = array(
	'name' => 'public.device_distribution_summary_view',
	'shortName' => 'device_distribution_summary_view',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'audit' => true,
	'detailsBadgeColor' => 'DAA520',
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
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	distribution_id,
	device_type,
	order_reference,
	facility_name,
	country_name,
	region_name,
	monthly_surgical_volume,
	contact_name,
	contact_email,
	distribution_month,
	distribution_year,
	payment_method,
	quantity,
	notes
FROM "public".device_distribution_summary_view',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'distribution_id' => array(
			'name' => 'distribution_id',
			'goodName' => 'distribution_id',
			'strField' => 'distribution_id',
			'sourceSingle' => 'distribution_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'distribution_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'device_type' => array(
			'name' => 'device_type',
			'goodName' => 'device_type',
			'strField' => 'device_type',
			'sourceSingle' => 'device_type',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'device_type',
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
					'lookupTable' => 'public.devices',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'device_id',
					'lookupDisplayField' => 'device_type',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'order_reference' => array(
			'name' => 'order_reference',
			'goodName' => 'order_reference',
			'strField' => 'order_reference',
			'sourceSingle' => 'order_reference',
			'index' => 3,
			'sqlExpression' => 'order_reference',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'facility_name' => array(
			'name' => 'facility_name',
			'goodName' => 'facility_name',
			'strField' => 'facility_name',
			'sourceSingle' => 'facility_name',
			'index' => 4,
			'sqlExpression' => 'facility_name',
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
					'textboxMaxLenth' => 200,
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'country_name' => array(
			'name' => 'country_name',
			'goodName' => 'country_name',
			'strField' => 'country_name',
			'sourceSingle' => 'country_name',
			'index' => 5,
			'sqlExpression' => 'country_name',
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
					'textboxMaxLenth' => 100,
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'region_name' => array(
			'name' => 'region_name',
			'goodName' => 'region_name',
			'strField' => 'region_name',
			'sourceSingle' => 'region_name',
			'index' => 6,
			'sqlExpression' => 'region_name',
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
					'textboxMaxLenth' => 50,
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'monthly_surgical_volume' => array(
			'name' => 'monthly_surgical_volume',
			'goodName' => 'monthly_surgical_volume',
			'strField' => 'monthly_surgical_volume',
			'sourceSingle' => 'monthly_surgical_volume',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'monthly_surgical_volume',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'contact_name' => array(
			'name' => 'contact_name',
			'goodName' => 'contact_name',
			'strField' => 'contact_name',
			'sourceSingle' => 'contact_name',
			'index' => 8,
			'sqlExpression' => 'contact_name',
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
					'textboxMaxLenth' => 200,
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'contact_email' => array(
			'name' => 'contact_email',
			'goodName' => 'contact_email',
			'strField' => 'contact_email',
			'sourceSingle' => 'contact_email',
			'index' => 9,
			'sqlExpression' => 'contact_email',
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
					'textboxMaxLenth' => 100,
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'distribution_month' => array(
			'name' => 'distribution_month',
			'goodName' => 'distribution_month',
			'strField' => 'distribution_month',
			'sourceSingle' => 'distribution_month',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'distribution_month',
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
					'lookupTable' => 'public.months',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'month',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'distribution_year' => array(
			'name' => 'distribution_year',
			'goodName' => 'distribution_year',
			'strField' => 'distribution_year',
			'sourceSingle' => 'distribution_year',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'distribution_year',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'payment_method' => array(
			'name' => 'payment_method',
			'goodName' => 'payment_method',
			'strField' => 'payment_method',
			'sourceSingle' => 'payment_method',
			'index' => 12,
			'type' => 3,
			'sqlExpression' => 'payment_method',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'quantity' => array(
			'name' => 'quantity',
			'goodName' => 'quantity',
			'strField' => 'quantity',
			'sourceSingle' => 'quantity',
			'index' => 13,
			'type' => 3,
			'sqlExpression' => 'quantity',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.device_distribution_summary_view' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'sourceSingle' => 'notes',
			'index' => 14,
			'type' => 201,
			'sqlExpression' => 'notes',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distribution_summary_view' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	distribution_id,
	device_type,
	order_reference,
	facility_name,
	country_name,
	region_name,
	monthly_surgical_volume,
	contact_name,
	contact_email,
	distribution_month,
	distribution_year,
	payment_method,
	quantity,
	notes
FROM "public".device_distribution_summary_view',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'distribution_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'distribution_id' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_id' 
			),
			array(
				'sql' => 'device_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'device_type' 
				),
				'encrypted' => false,
				'columnName' => 'device_type' 
			),
			array(
				'sql' => 'order_reference',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'order_reference' 
				),
				'encrypted' => false,
				'columnName' => 'order_reference' 
			),
			array(
				'sql' => 'facility_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'facility_name' 
				),
				'encrypted' => false,
				'columnName' => 'facility_name' 
			),
			array(
				'sql' => 'country_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'country_name' 
				),
				'encrypted' => false,
				'columnName' => 'country_name' 
			),
			array(
				'sql' => 'region_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'region_name' 
				),
				'encrypted' => false,
				'columnName' => 'region_name' 
			),
			array(
				'sql' => 'monthly_surgical_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'monthly_surgical_volume' 
				),
				'encrypted' => false,
				'columnName' => 'monthly_surgical_volume' 
			),
			array(
				'sql' => 'contact_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'contact_name' 
				),
				'encrypted' => false,
				'columnName' => 'contact_name' 
			),
			array(
				'sql' => 'contact_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'contact_email' 
				),
				'encrypted' => false,
				'columnName' => 'contact_email' 
			),
			array(
				'sql' => 'distribution_month',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'distribution_month' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_month' 
			),
			array(
				'sql' => 'distribution_year',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'distribution_year' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_year' 
			),
			array(
				'sql' => 'payment_method',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'payment_method' 
				),
				'encrypted' => false,
				'columnName' => 'payment_method' 
			),
			array(
				'sql' => 'quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'quantity' 
				),
				'encrypted' => false,
				'columnName' => 'quantity' 
			),
			array(
				'sql' => 'notes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_summary_view',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".device_distribution_summary_view',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".device_distribution_summary_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'distribution_id',
						'device_type',
						'order_reference',
						'facility_name',
						'country_name',
						'region_name',
						'monthly_surgical_volume',
						'contact_name',
						'contact_email',
						'distribution_month',
						'distribution_year',
						'payment_method',
						'quantity',
						'notes' 
					),
					'name' => 'public.device_distribution_summary_view' 
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
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'distribution_id,
	device_type,
	order_reference,
	facility_name,
	country_name,
	region_name,
	monthly_surgical_volume,
	contact_name,
	contact_email,
	distribution_month,
	distribution_year,
	payment_method,
	quantity,
	notes',
		'fromListSql' => 'FROM "public".device_distribution_summary_view',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.device_distribution_summary_view',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'distribution_id',
			'device_type',
			'order_reference',
			'facility_name',
			'country_name',
			'region_name',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'distribution_month',
			'distribution_year',
			'payment_method',
			'quantity',
			'notes' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'distribution_id',
			'device_type',
			'order_reference',
			'facility_name',
			'country_name',
			'region_name',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'distribution_month',
			'distribution_year',
			'payment_method',
			'quantity',
			'notes' 
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
	$runnerTableLabels['public.device_distribution_summary_view'] = array(
	'tableCaption' => 'Device Distribution Summary View',
	'fieldLabels' => array(
		'distribution_id' => 'D_ID',
		'device_type' => 'Device Type',
		'order_reference' => 'Order Reference',
		'facility_name' => 'Facility Name',
		'country_name' => 'Country Name',
		'region_name' => 'Region Name',
		'monthly_surgical_volume' => 'Monthly Surgical Volume',
		'contact_name' => 'Contact Name',
		'contact_email' => 'Contact Email',
		'distribution_month' => 'Distribution Month',
		'distribution_year' => 'Distribution Year',
		'payment_method' => 'Payment Method',
		'quantity' => 'Quantity',
		'notes' => 'Notes' 
	),
	'fieldTooltips' => array(
		'distribution_id' => '',
		'device_type' => '',
		'order_reference' => '',
		'facility_name' => '',
		'country_name' => '',
		'region_name' => '',
		'monthly_surgical_volume' => '',
		'contact_name' => '',
		'contact_email' => '',
		'distribution_month' => '',
		'distribution_year' => '',
		'payment_method' => '',
		'quantity' => '',
		'notes' => '' 
	),
	'fieldPlaceholders' => array(
		'distribution_id' => '',
		'device_type' => '',
		'order_reference' => '',
		'facility_name' => '',
		'country_name' => '',
		'region_name' => '',
		'monthly_surgical_volume' => '',
		'contact_name' => '',
		'contact_email' => '',
		'distribution_month' => '',
		'distribution_year' => '',
		'payment_method' => '',
		'quantity' => '',
		'notes' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>