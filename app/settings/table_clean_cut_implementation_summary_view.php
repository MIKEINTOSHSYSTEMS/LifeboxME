<?php
global $runnerTableSettings;
$runnerTableSettings['public.clean_cut_implementation_summary_view'] = array(
	'name' => 'public.clean_cut_implementation_summary_view',
	'shortName' => 'clean_cut_implementation_summary_view',
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
	implementation_id,
	facility_name,
	country_name,
	region_name,
	implementation_year,
	start_date,
	end_date,
	implementation_months,
	avg_monthly_surgical_volume,
	estimated_operations_impacted,
	general_surgery_volume,
	ob_gyn_volume,
	pediatrics_volume,
	ortho_volume,
	total_volume,
	remarks
FROM
	"public".clean_cut_implementation_summary_view',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'implementation_id' => array(
			'name' => 'implementation_id',
			'goodName' => 'implementation_id',
			'strField' => 'implementation_id',
			'sourceSingle' => 'implementation_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'implementation_id',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'facility_name' => array(
			'name' => 'facility_name',
			'goodName' => 'facility_name',
			'strField' => 'facility_name',
			'sourceSingle' => 'facility_name',
			'index' => 2,
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'country_name' => array(
			'name' => 'country_name',
			'goodName' => 'country_name',
			'strField' => 'country_name',
			'sourceSingle' => 'country_name',
			'index' => 3,
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'region_name' => array(
			'name' => 'region_name',
			'goodName' => 'region_name',
			'strField' => 'region_name',
			'sourceSingle' => 'region_name',
			'index' => 4,
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'implementation_year' => array(
			'name' => 'implementation_year',
			'goodName' => 'implementation_year',
			'strField' => 'implementation_year',
			'sourceSingle' => 'implementation_year',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'implementation_year',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'sourceSingle' => 'start_date',
			'index' => 6,
			'type' => 7,
			'sqlExpression' => 'start_date',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'end_date' => array(
			'name' => 'end_date',
			'goodName' => 'end_date',
			'strField' => 'end_date',
			'sourceSingle' => 'end_date',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => 'end_date',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'implementation_months' => array(
			'name' => 'implementation_months',
			'goodName' => 'implementation_months',
			'strField' => 'implementation_months',
			'sourceSingle' => 'implementation_months',
			'index' => 8,
			'type' => 3,
			'sqlExpression' => 'implementation_months',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'avg_monthly_surgical_volume' => array(
			'name' => 'avg_monthly_surgical_volume',
			'goodName' => 'avg_monthly_surgical_volume',
			'strField' => 'avg_monthly_surgical_volume',
			'sourceSingle' => 'avg_monthly_surgical_volume',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'avg_monthly_surgical_volume',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'estimated_operations_impacted' => array(
			'name' => 'estimated_operations_impacted',
			'goodName' => 'estimated_operations_impacted',
			'strField' => 'estimated_operations_impacted',
			'sourceSingle' => 'estimated_operations_impacted',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'estimated_operations_impacted',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'general_surgery_volume' => array(
			'name' => 'general_surgery_volume',
			'goodName' => 'general_surgery_volume',
			'strField' => 'general_surgery_volume',
			'sourceSingle' => 'general_surgery_volume',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'general_surgery_volume',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'ob_gyn_volume' => array(
			'name' => 'ob_gyn_volume',
			'goodName' => 'ob_gyn_volume',
			'strField' => 'ob_gyn_volume',
			'sourceSingle' => 'ob_gyn_volume',
			'index' => 12,
			'type' => 3,
			'sqlExpression' => 'ob_gyn_volume',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'pediatrics_volume' => array(
			'name' => 'pediatrics_volume',
			'goodName' => 'pediatrics_volume',
			'strField' => 'pediatrics_volume',
			'sourceSingle' => 'pediatrics_volume',
			'index' => 13,
			'type' => 3,
			'sqlExpression' => 'pediatrics_volume',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'ortho_volume' => array(
			'name' => 'ortho_volume',
			'goodName' => 'ortho_volume',
			'strField' => 'ortho_volume',
			'sourceSingle' => 'ortho_volume',
			'index' => 14,
			'type' => 3,
			'sqlExpression' => 'ortho_volume',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'total_volume' => array(
			'name' => 'total_volume',
			'goodName' => 'total_volume',
			'strField' => 'total_volume',
			'sourceSingle' => 'total_volume',
			'index' => 15,
			'type' => 3,
			'sqlExpression' => 'total_volume',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		),
		'remarks' => array(
			'name' => 'remarks',
			'goodName' => 'remarks',
			'strField' => 'remarks',
			'sourceSingle' => 'remarks',
			'index' => 16,
			'type' => 201,
			'sqlExpression' => 'remarks',
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
			'tableName' => 'public.clean_cut_implementation_summary_view' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	implementation_id,
	facility_name,
	country_name,
	region_name,
	implementation_year,
	start_date,
	end_date,
	implementation_months,
	avg_monthly_surgical_volume,
	estimated_operations_impacted,
	general_surgery_volume,
	ob_gyn_volume,
	pediatrics_volume,
	ortho_volume,
	total_volume,
	remarks
FROM
	"public".clean_cut_implementation_summary_view',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'implementation_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'implementation_id' 
				),
				'encrypted' => false,
				'columnName' => 'implementation_id' 
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
					'table' => 'public.clean_cut_implementation_summary_view',
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
					'table' => 'public.clean_cut_implementation_summary_view',
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
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'region_name' 
				),
				'encrypted' => false,
				'columnName' => 'region_name' 
			),
			array(
				'sql' => 'implementation_year',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'implementation_year' 
				),
				'encrypted' => false,
				'columnName' => 'implementation_year' 
			),
			array(
				'sql' => 'start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'start_date' 
				),
				'encrypted' => false,
				'columnName' => 'start_date' 
			),
			array(
				'sql' => 'end_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'end_date' 
				),
				'encrypted' => false,
				'columnName' => 'end_date' 
			),
			array(
				'sql' => 'implementation_months',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'implementation_months' 
				),
				'encrypted' => false,
				'columnName' => 'implementation_months' 
			),
			array(
				'sql' => 'avg_monthly_surgical_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'avg_monthly_surgical_volume' 
				),
				'encrypted' => false,
				'columnName' => 'avg_monthly_surgical_volume' 
			),
			array(
				'sql' => 'estimated_operations_impacted',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'estimated_operations_impacted' 
				),
				'encrypted' => false,
				'columnName' => 'estimated_operations_impacted' 
			),
			array(
				'sql' => 'general_surgery_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'general_surgery_volume' 
				),
				'encrypted' => false,
				'columnName' => 'general_surgery_volume' 
			),
			array(
				'sql' => 'ob_gyn_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'ob_gyn_volume' 
				),
				'encrypted' => false,
				'columnName' => 'ob_gyn_volume' 
			),
			array(
				'sql' => 'pediatrics_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'pediatrics_volume' 
				),
				'encrypted' => false,
				'columnName' => 'pediatrics_volume' 
			),
			array(
				'sql' => 'ortho_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'ortho_volume' 
				),
				'encrypted' => false,
				'columnName' => 'ortho_volume' 
			),
			array(
				'sql' => 'total_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'total_volume' 
				),
				'encrypted' => false,
				'columnName' => 'total_volume' 
			),
			array(
				'sql' => 'remarks',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.clean_cut_implementation_summary_view',
					'name' => 'remarks' 
				),
				'encrypted' => false,
				'columnName' => 'remarks' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".clean_cut_implementation_summary_view',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".clean_cut_implementation_summary_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'implementation_id',
						'facility_name',
						'country_name',
						'region_name',
						'implementation_year',
						'start_date',
						'end_date',
						'implementation_months',
						'avg_monthly_surgical_volume',
						'estimated_operations_impacted',
						'general_surgery_volume',
						'ob_gyn_volume',
						'pediatrics_volume',
						'ortho_volume',
						'total_volume',
						'remarks' 
					),
					'name' => 'public.clean_cut_implementation_summary_view' 
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
		'fieldListSql' => 'implementation_id,
	facility_name,
	country_name,
	region_name,
	implementation_year,
	start_date,
	end_date,
	implementation_months,
	avg_monthly_surgical_volume,
	estimated_operations_impacted,
	general_surgery_volume,
	ob_gyn_volume,
	pediatrics_volume,
	ortho_volume,
	total_volume,
	remarks',
		'fromListSql' => 'FROM
	"public".clean_cut_implementation_summary_view',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.clean_cut_implementation_summary_view',
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
			'implementation_id',
			'facility_name',
			'country_name',
			'region_name',
			'implementation_year',
			'start_date',
			'end_date',
			'implementation_months',
			'avg_monthly_surgical_volume',
			'estimated_operations_impacted',
			'general_surgery_volume',
			'ob_gyn_volume',
			'pediatrics_volume',
			'ortho_volume',
			'total_volume',
			'remarks' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'implementation_id',
			'facility_name',
			'country_name',
			'region_name',
			'implementation_year',
			'start_date',
			'end_date',
			'implementation_months',
			'avg_monthly_surgical_volume',
			'estimated_operations_impacted',
			'general_surgery_volume',
			'ob_gyn_volume',
			'pediatrics_volume',
			'ortho_volume',
			'total_volume',
			'remarks' 
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
	$runnerTableLabels['public.clean_cut_implementation_summary_view'] = array(
	'tableCaption' => 'Clean Cut Implementation Summary View',
	'fieldLabels' => array(
		'implementation_id' => 'Implementation Id',
		'facility_name' => 'Facility Name',
		'country_name' => 'Country Name',
		'region_name' => 'Region Name',
		'implementation_year' => 'Implementation Year',
		'start_date' => 'Start Date',
		'end_date' => 'End Date',
		'implementation_months' => 'Implementation Months',
		'avg_monthly_surgical_volume' => 'Avg Monthly Surgical Volume',
		'estimated_operations_impacted' => 'Estimated Operations Impacted',
		'general_surgery_volume' => 'General Surgery Volume',
		'ob_gyn_volume' => 'Ob Gyn Volume',
		'pediatrics_volume' => 'Pediatrics Volume',
		'ortho_volume' => 'Ortho Volume',
		'total_volume' => 'Total Volume',
		'remarks' => 'Remarks' 
	),
	'fieldTooltips' => array(
		'implementation_id' => '',
		'facility_name' => '',
		'country_name' => '',
		'region_name' => '',
		'implementation_year' => '',
		'start_date' => '',
		'end_date' => '',
		'implementation_months' => '',
		'avg_monthly_surgical_volume' => '',
		'estimated_operations_impacted' => '',
		'general_surgery_volume' => '',
		'ob_gyn_volume' => '',
		'pediatrics_volume' => '',
		'ortho_volume' => '',
		'total_volume' => '',
		'remarks' => '' 
	),
	'fieldPlaceholders' => array(
		'implementation_id' => '',
		'facility_name' => '',
		'country_name' => '',
		'region_name' => '',
		'implementation_year' => '',
		'start_date' => '',
		'end_date' => '',
		'implementation_months' => '',
		'avg_monthly_surgical_volume' => '',
		'estimated_operations_impacted' => '',
		'general_surgery_volume' => '',
		'ob_gyn_volume' => '',
		'pediatrics_volume' => '',
		'ortho_volume' => '',
		'total_volume' => '',
		'remarks' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>