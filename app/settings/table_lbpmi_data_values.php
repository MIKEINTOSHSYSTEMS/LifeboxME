<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbpmi_data_values'] = array(
	'name' => 'public.lbpmi_data_values',
	'shortName' => 'lbpmi_data_values',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
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
		),
		'view' => array( 
			'view' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => '3CB371',
	'pageSizeSelectorRecords' => array( 
		'10',
		'20',
		'30',
		'50',
		'100',
		'500',
		'1' 
	),
	'pageSizeSelectorGroups' => array( 
		'1',
		'3',
		'5',
		'10',
		'50',
		'100',
		'1' 
	),
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	data_value_id,
	data_element_id,
	period_type,
	period_year,
	period_quarter,
	period_month,
	period_week,
	period_day,
	region_id,
	country_id,
	facility_id,
	"value",
	stored_by,
	created,
	last_updated,
	deleted,
	data_source,
	source_detail,
	value_type
FROM
	"public".lbpmi_data_values',
	'keyFields' => array( 
		'data_value_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'data_value_id' => array(
			'name' => 'data_value_id',
			'goodName' => 'data_value_id',
			'strField' => 'data_value_id',
			'sourceSingle' => 'data_value_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'data_value_id',
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
			'tableName' => 'public.lbpmi_data_values' 
		),
		'data_element_id' => array(
			'name' => 'data_element_id',
			'goodName' => 'data_element_id',
			'strField' => 'data_element_id',
			'sourceSingle' => 'data_element_id',
			'index' => 2,
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
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_data_elements',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'data_element_id',
					'lookupDisplayField' => 'data_element_name',
					'lookupAutofillEdit' => true,
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'value_type',
							'lookupField' => 'value_type' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'period_type' => array(
			'name' => 'period_type',
			'goodName' => 'period_type',
			'strField' => 'period_type',
			'sourceSingle' => 'period_type',
			'index' => 3,
			'sqlExpression' => 'period_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 20,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.period_types',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'period_name',
					'lookupDisplayField' => 'period_name',
					'lookupOrderBy' => 'period_name',
					'lookupOrderByDesc' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'period_year' => array(
			'name' => 'period_year',
			'goodName' => 'period_year',
			'strField' => 'period_year',
			'sourceSingle' => 'period_year',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'period_year',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'defaultValue' => 'date("Y")',
					'validateAs' => 'Number',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.years',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'year',
					'lookupDisplayField' => 'year',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'period_quarter' => array(
			'name' => 'period_quarter',
			'goodName' => 'period_quarter',
			'strField' => 'period_quarter',
			'sourceSingle' => 'period_quarter',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'period_quarter',
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
					'lookupTable' => 'public.quarters',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'quarter_id',
					'lookupDisplayField' => 'quarter_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'period_month' => array(
			'name' => 'period_month',
			'goodName' => 'period_month',
			'strField' => 'period_month',
			'sourceSingle' => 'period_month',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'period_month',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'defaultValue' => 'date("m")',
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
			'tableName' => 'public.lbpmi_data_values' 
		),
		'period_week' => array(
			'name' => 'period_week',
			'goodName' => 'period_week',
			'strField' => 'period_week',
			'sourceSingle' => 'period_week',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'period_week',
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
			'tableName' => 'public.lbpmi_data_values' 
		),
		'period_day' => array(
			'name' => 'period_day',
			'goodName' => 'period_day',
			'strField' => 'period_day',
			'sourceSingle' => 'period_day',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'period_day',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'defaultValue' => 'date("Y-m-d")',
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
			'tableName' => 'public.lbpmi_data_values' 
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
			'tableName' => 'public.lbpmi_data_values' 
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
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'region_id',
							'lookupField' => 'region_id' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
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
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'country_id',
							'lookupField' => 'country_id' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'value' => array(
			'name' => 'value',
			'goodName' => 'value',
			'strField' => 'value',
			'sourceSingle' => 'value',
			'index' => 12,
			'type' => 14,
			'sqlExpression' => '"value"',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number' 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'tableName' => 'public.lbpmi_data_values' 
		),
		'stored_by' => array(
			'name' => 'stored_by',
			'goodName' => 'stored_by',
			'strField' => 'stored_by',
			'sourceSingle' => 'stored_by',
			'index' => 13,
			'sqlExpression' => 'stored_by',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["UserName"]',
					'autoUpdateValue' => '$_SESSION["UserName"]',
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
			'tableName' => 'public.lbpmi_data_values' 
		),
		'created' => array(
			'name' => 'created',
			'goodName' => 'created',
			'strField' => 'created',
			'sourceSingle' => 'created',
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'created',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'strftime("%Y-%m-%d %H:%M:%S")',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'sourceSingle' => 'last_updated',
			'index' => 15,
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
					'format' => 'Readonly',
					'autoUpdateValue' => 'strftime("%Y-%m-%d %H:%M:%S")',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'deleted' => array(
			'name' => 'deleted',
			'goodName' => 'deleted',
			'strField' => 'deleted',
			'sourceSingle' => 'deleted',
			'index' => 16,
			'type' => 11,
			'sqlExpression' => 'deleted',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
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
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'data_source' => array(
			'name' => 'data_source',
			'goodName' => 'data_source',
			'strField' => 'data_source',
			'index' => 17,
			'type' => 201,
			'sqlExpression' => 'data_source',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_data_sources',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'source_id',
					'lookupDisplayField' => 'data_source_name' 
				) 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'source_detail' => array(
			'name' => 'source_detail',
			'goodName' => 'source_detail',
			'strField' => 'source_detail',
			'index' => 18,
			'type' => 201,
			'sqlExpression' => 'source_detail',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_source_details',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'detail_id',
					'lookupDisplayField' => 'source_detail',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'data_source',
							'lookupField' => 'source_id' 
						) 
					) 
				) 
			),
			'tableName' => 'public.lbpmi_data_values' 
		),
		'value_type' => array(
			'name' => 'value_type',
			'goodName' => 'value_type',
			'strField' => 'value_type',
			'index' => 19,
			'sqlExpression' => 'value_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_data_elements',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'data_element_id',
					'lookupDisplayField' => 'value_type' 
				) 
			),
			'tableName' => 'public.lbpmi_data_values' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lbpmi_data_elements',
			'detailsKeys' => array( 
				'data_element_id' 
			),
			'masterKeys' => array( 
				'data_element_id' 
			) 
		),
		array(
			'table' => 'public.regions',
			'detailsKeys' => array( 
				'region_id' 
			),
			'masterKeys' => array( 
				'region_id' 
			) 
		),
		array(
			'table' => 'public.countries',
			'detailsKeys' => array( 
				'country_id' 
			),
			'masterKeys' => array( 
				'country_id' 
			) 
		),
		array(
			'table' => 'public.facilities',
			'detailsKeys' => array( 
				'facility_id' 
			),
			'masterKeys' => array( 
				'facility_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	data_value_id,
	data_element_id,
	period_type,
	period_year,
	period_quarter,
	period_month,
	period_week,
	period_day,
	region_id,
	country_id,
	facility_id,
	"value",
	stored_by,
	created,
	last_updated,
	deleted,
	data_source,
	source_detail,
	value_type
FROM
	"public".lbpmi_data_values',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'data_value_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'data_value_id' 
				),
				'encrypted' => false,
				'columnName' => 'data_value_id' 
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
					'table' => 'public.lbpmi_data_values',
					'name' => 'data_element_id' 
				),
				'encrypted' => false,
				'columnName' => 'data_element_id' 
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
					'table' => 'public.lbpmi_data_values',
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
					'table' => 'public.lbpmi_data_values',
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
					'table' => 'public.lbpmi_data_values',
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
					'table' => 'public.lbpmi_data_values',
					'name' => 'period_month' 
				),
				'encrypted' => false,
				'columnName' => 'period_month' 
			),
			array(
				'sql' => 'period_week',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'period_week' 
				),
				'encrypted' => false,
				'columnName' => 'period_week' 
			),
			array(
				'sql' => 'period_day',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'period_day' 
				),
				'encrypted' => false,
				'columnName' => 'period_day' 
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
					'table' => 'public.lbpmi_data_values',
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
					'table' => 'public.lbpmi_data_values',
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
					'table' => 'public.lbpmi_data_values',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
			),
			array(
				'sql' => '"value"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'value' 
				),
				'encrypted' => false,
				'columnName' => 'value' 
			),
			array(
				'sql' => 'stored_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'stored_by' 
				),
				'encrypted' => false,
				'columnName' => 'stored_by' 
			),
			array(
				'sql' => 'created',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'created' 
				),
				'encrypted' => false,
				'columnName' => 'created' 
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
					'table' => 'public.lbpmi_data_values',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			),
			array(
				'sql' => 'deleted',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'deleted' 
				),
				'encrypted' => false,
				'columnName' => 'deleted' 
			),
			array(
				'sql' => 'data_source',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'data_source' 
				),
				'encrypted' => false,
				'columnName' => 'data_source' 
			),
			array(
				'sql' => 'source_detail',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'source_detail' 
				),
				'encrypted' => false,
				'columnName' => 'source_detail' 
			),
			array(
				'sql' => 'value_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_values',
					'name' => 'value_type' 
				),
				'encrypted' => false,
				'columnName' => 'value_type' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbpmi_data_values',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbpmi_data_values',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'data_value_id',
						'data_element_id',
						'period_type',
						'period_year',
						'period_quarter',
						'period_month',
						'period_week',
						'period_day',
						'region_id',
						'country_id',
						'facility_id',
						'value',
						'stored_by',
						'created',
						'last_updated',
						'deleted',
						'data_source',
						'source_detail',
						'value_type' 
					),
					'name' => 'public.lbpmi_data_values' 
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
			),
			array(
				'fieldIndex' => 16,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 17,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 18,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'data_value_id,
	data_element_id,
	period_type,
	period_year,
	period_quarter,
	period_month,
	period_week,
	period_day,
	region_id,
	country_id,
	facility_id,
	"value",
	stored_by,
	created,
	last_updated,
	deleted,
	data_source,
	source_detail,
	value_type',
		'fromListSql' => 'FROM
	"public".lbpmi_data_values',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'public.lbpmi_data_values',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
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
		),
		'view' => array( 
			'view' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'data_value_id',
			'data_element_id',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'period_week',
			'period_day',
			'region_id',
			'country_id',
			'facility_id',
			'value',
			'stored_by',
			'created',
			'last_updated',
			'deleted',
			'data_source',
			'source_detail',
			'value_type' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'data_value_id',
			'data_element_id',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'period_week',
			'period_day',
			'region_id',
			'country_id',
			'facility_id',
			'value',
			'stored_by',
			'created',
			'last_updated',
			'deleted',
			'data_source',
			'source_detail',
			'value_type' 
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
	$runnerTableLabels['public.lbpmi_data_values'] = array(
	'tableCaption' => 'Lbpmi Data Values',
	'fieldLabels' => array(
		'data_value_id' => 'DV-ID',
		'data_element_id' => 'Data Element',
		'period_type' => 'Period Type',
		'period_year' => 'Year',
		'period_quarter' => 'Quarter',
		'period_month' => 'Month',
		'period_week' => 'Week',
		'period_day' => 'Date',
		'region_id' => 'Region',
		'country_id' => 'Country',
		'facility_id' => 'Facility',
		'value' => 'Value',
		'stored_by' => 'Stored By',
		'created' => 'Created',
		'last_updated' => 'Last Updated',
		'deleted' => 'Deleted',
		'data_source' => 'Data Source',
		'source_detail' => 'Source Detail',
		'value_type' => 'Value Type' 
	),
	'fieldTooltips' => array(
		'data_value_id' => '',
		'data_element_id' => '',
		'period_type' => '',
		'period_year' => '',
		'period_quarter' => '',
		'period_month' => '',
		'period_week' => '',
		'period_day' => '',
		'region_id' => '',
		'country_id' => '',
		'facility_id' => '',
		'value' => '',
		'stored_by' => '',
		'created' => '',
		'last_updated' => '',
		'deleted' => '',
		'data_source' => '',
		'source_detail' => '',
		'value_type' => '' 
	),
	'fieldPlaceholders' => array(
		'data_value_id' => '',
		'data_element_id' => '',
		'period_type' => '',
		'period_year' => '',
		'period_quarter' => '',
		'period_month' => '',
		'period_week' => '',
		'period_day' => '',
		'region_id' => '',
		'country_id' => '',
		'facility_id' => '',
		'value' => '',
		'stored_by' => '',
		'created' => '',
		'last_updated' => '',
		'deleted' => '',
		'data_source' => '',
		'source_detail' => '',
		'value_type' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>