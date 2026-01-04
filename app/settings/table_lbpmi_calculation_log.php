<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbpmi_calculation_log'] = array(
	'name' => 'public.lbpmi_calculation_log',
	'shortName' => 'lbpmi_calculation_log',
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
	'detailsBadgeColor' => '6B8E23',
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
	log_id,
	indicator_id,
	data_element_id,
	calculation_type,
	period_type,
	period_year,
	period_quarter,
	period_month,
	region_id,
	country_id,
	facility_id,
	calculated_value,
	calculation_timestamp,
	status,
	error_message,
	execution_time_ms
FROM "public".lbpmi_calculation_log',
	'keyFields' => array( 
		'log_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'log_id' => array(
			'name' => 'log_id',
			'goodName' => 'log_id',
			'strField' => 'log_id',
			'sourceSingle' => 'log_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'log_id',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'indicator_id' => array(
			'name' => 'indicator_id',
			'goodName' => 'indicator_id',
			'strField' => 'indicator_id',
			'sourceSingle' => 'indicator_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'indicator_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_indicators',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'indicator_id',
					'lookupDisplayField' => 'indicator_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'data_element_id' => array(
			'name' => 'data_element_id',
			'goodName' => 'data_element_id',
			'strField' => 'data_element_id',
			'sourceSingle' => 'data_element_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'data_element_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_data_elements',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'data_element_id',
					'lookupDisplayField' => 'data_element_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'calculation_type' => array(
			'name' => 'calculation_type',
			'goodName' => 'calculation_type',
			'strField' => 'calculation_type',
			'sourceSingle' => 'calculation_type',
			'index' => 4,
			'sqlExpression' => 'calculation_type',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'period_type' => array(
			'name' => 'period_type',
			'goodName' => 'period_type',
			'strField' => 'period_type',
			'sourceSingle' => 'period_type',
			'index' => 5,
			'sqlExpression' => 'period_type',
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
					'textboxMaxLenth' => 20,
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'period_year' => array(
			'name' => 'period_year',
			'goodName' => 'period_year',
			'strField' => 'period_year',
			'sourceSingle' => 'period_year',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'period_year',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'period_quarter' => array(
			'name' => 'period_quarter',
			'goodName' => 'period_quarter',
			'strField' => 'period_quarter',
			'sourceSingle' => 'period_quarter',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'period_quarter',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'period_month' => array(
			'name' => 'period_month',
			'goodName' => 'period_month',
			'strField' => 'period_month',
			'sourceSingle' => 'period_month',
			'index' => 8,
			'type' => 3,
			'sqlExpression' => 'period_month',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'region_id' => array(
			'name' => 'region_id',
			'goodName' => 'region_id',
			'strField' => 'region_id',
			'sourceSingle' => 'region_id',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'region_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupType' => 2,
					'lookupTable' => 'public.regions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'region_id',
					'lookupDisplayField' => 'region_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'country_id' => array(
			'name' => 'country_id',
			'goodName' => 'country_id',
			'strField' => 'country_id',
			'sourceSingle' => 'country_id',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'country_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupType' => 2,
					'lookupTable' => 'public.countries',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country_id',
					'lookupDisplayField' => 'country_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'facility_id' => array(
			'name' => 'facility_id',
			'goodName' => 'facility_id',
			'strField' => 'facility_id',
			'sourceSingle' => 'facility_id',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'facility_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupType' => 2,
					'lookupTable' => 'public.facilities',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'facility_id',
					'lookupDisplayField' => 'facility_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'calculated_value' => array(
			'name' => 'calculated_value',
			'goodName' => 'calculated_value',
			'strField' => 'calculated_value',
			'sourceSingle' => 'calculated_value',
			'index' => 12,
			'type' => 14,
			'sqlExpression' => 'calculated_value',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'calculation_timestamp' => array(
			'name' => 'calculation_timestamp',
			'goodName' => 'calculation_timestamp',
			'strField' => 'calculation_timestamp',
			'sourceSingle' => 'calculation_timestamp',
			'index' => 13,
			'type' => 135,
			'sqlExpression' => 'calculation_timestamp',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'sourceSingle' => 'status',
			'index' => 14,
			'sqlExpression' => 'status',
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
					'textboxMaxLenth' => 20,
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'error_message' => array(
			'name' => 'error_message',
			'goodName' => 'error_message',
			'strField' => 'error_message',
			'sourceSingle' => 'error_message',
			'index' => 15,
			'type' => 201,
			'sqlExpression' => 'error_message',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		),
		'execution_time_ms' => array(
			'name' => 'execution_time_ms',
			'goodName' => 'execution_time_ms',
			'strField' => 'execution_time_ms',
			'sourceSingle' => 'execution_time_ms',
			'index' => 16,
			'type' => 3,
			'sqlExpression' => 'execution_time_ms',
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
			'tableName' => 'public.lbpmi_calculation_log' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lbpmi_indicators',
			'detailsKeys' => array( 
				'indicator_id' 
			),
			'masterKeys' => array( 
				'indicator_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	log_id,
	indicator_id,
	data_element_id,
	calculation_type,
	period_type,
	period_year,
	period_quarter,
	period_month,
	region_id,
	country_id,
	facility_id,
	calculated_value,
	calculation_timestamp,
	status,
	error_message,
	execution_time_ms
FROM "public".lbpmi_calculation_log',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'log_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'log_id' 
				),
				'encrypted' => false,
				'columnName' => 'log_id' 
			),
			array(
				'sql' => 'indicator_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'indicator_id' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_id' 
			),
			array(
				'sql' => 'data_element_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'data_element_id' 
				),
				'encrypted' => false,
				'columnName' => 'data_element_id' 
			),
			array(
				'sql' => 'calculation_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'calculation_type' 
				),
				'encrypted' => false,
				'columnName' => 'calculation_type' 
			),
			array(
				'sql' => 'period_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'period_type' 
				),
				'encrypted' => false,
				'columnName' => 'period_type' 
			),
			array(
				'sql' => 'period_year',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'period_year' 
				),
				'encrypted' => false,
				'columnName' => 'period_year' 
			),
			array(
				'sql' => 'period_quarter',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'period_quarter' 
				),
				'encrypted' => false,
				'columnName' => 'period_quarter' 
			),
			array(
				'sql' => 'period_month',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'period_month' 
				),
				'encrypted' => false,
				'columnName' => 'period_month' 
			),
			array(
				'sql' => 'region_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'region_id' 
				),
				'encrypted' => false,
				'columnName' => 'region_id' 
			),
			array(
				'sql' => 'country_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'country_id' 
				),
				'encrypted' => false,
				'columnName' => 'country_id' 
			),
			array(
				'sql' => 'facility_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
			),
			array(
				'sql' => 'calculated_value',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'calculated_value' 
				),
				'encrypted' => false,
				'columnName' => 'calculated_value' 
			),
			array(
				'sql' => 'calculation_timestamp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'calculation_timestamp' 
				),
				'encrypted' => false,
				'columnName' => 'calculation_timestamp' 
			),
			array(
				'sql' => 'status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
			),
			array(
				'sql' => 'error_message',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'error_message' 
				),
				'encrypted' => false,
				'columnName' => 'error_message' 
			),
			array(
				'sql' => 'execution_time_ms',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_calculation_log',
					'name' => 'execution_time_ms' 
				),
				'encrypted' => false,
				'columnName' => 'execution_time_ms' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbpmi_calculation_log',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbpmi_calculation_log',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'log_id',
						'indicator_id',
						'data_element_id',
						'calculation_type',
						'period_type',
						'period_year',
						'period_quarter',
						'period_month',
						'region_id',
						'country_id',
						'facility_id',
						'calculated_value',
						'calculation_timestamp',
						'status',
						'error_message',
						'execution_time_ms' 
					),
					'name' => 'public.lbpmi_calculation_log' 
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
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 15,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'log_id,
	indicator_id,
	data_element_id,
	calculation_type,
	period_type,
	period_year,
	period_quarter,
	period_month,
	region_id,
	country_id,
	facility_id,
	calculated_value,
	calculation_timestamp,
	status,
	error_message,
	execution_time_ms',
		'fromListSql' => 'FROM "public".lbpmi_calculation_log',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbpmi_calculation_log',
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
			'log_id',
			'indicator_id',
			'data_element_id',
			'calculation_type',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'region_id',
			'country_id',
			'facility_id',
			'calculated_value',
			'calculation_timestamp',
			'status',
			'error_message',
			'execution_time_ms' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'log_id',
			'indicator_id',
			'data_element_id',
			'calculation_type',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'region_id',
			'country_id',
			'facility_id',
			'calculated_value',
			'calculation_timestamp',
			'status',
			'error_message',
			'execution_time_ms' 
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
	$runnerTableLabels['public.lbpmi_calculation_log'] = array(
	'tableCaption' => 'Lbpmi Calculation Log',
	'fieldLabels' => array(
		'log_id' => 'Log Id',
		'indicator_id' => 'Indicator',
		'data_element_id' => 'Data Element Id',
		'calculation_type' => 'Calculation Type',
		'period_type' => 'Period Type',
		'period_year' => 'Period Year',
		'period_quarter' => 'Period Quarter',
		'period_month' => 'Period Month',
		'region_id' => 'Region Id',
		'country_id' => 'Country Id',
		'facility_id' => 'Facility Id',
		'calculated_value' => 'Calculated Value',
		'calculation_timestamp' => 'Calculation Timestamp',
		'status' => 'Status',
		'error_message' => 'Error Message',
		'execution_time_ms' => 'Execution Time Ms' 
	),
	'fieldTooltips' => array(
		'log_id' => '',
		'indicator_id' => '',
		'data_element_id' => '',
		'calculation_type' => '',
		'period_type' => '',
		'period_year' => '',
		'period_quarter' => '',
		'period_month' => '',
		'region_id' => '',
		'country_id' => '',
		'facility_id' => '',
		'calculated_value' => '',
		'calculation_timestamp' => '',
		'status' => '',
		'error_message' => '',
		'execution_time_ms' => '' 
	),
	'fieldPlaceholders' => array(
		'log_id' => '',
		'indicator_id' => '',
		'data_element_id' => '',
		'calculation_type' => '',
		'period_type' => '',
		'period_year' => '',
		'period_quarter' => '',
		'period_month' => '',
		'region_id' => '',
		'country_id' => '',
		'facility_id' => '',
		'calculated_value' => '',
		'calculation_timestamp' => '',
		'status' => '',
		'error_message' => '',
		'execution_time_ms' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>