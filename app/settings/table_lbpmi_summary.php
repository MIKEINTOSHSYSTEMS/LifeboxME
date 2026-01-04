<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbpmi_summary'] = array(
	'name' => 'public.lbpmi_summary',
	'shortName' => 'lbpmi_summary',
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
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'detailsBadgeColor' => 'BC8F8F',
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
	indicator_group_id,
	indicator_group_name,
	indicator_group_code,
	indicator_id,
	indicator_name,
	indicator_code,
	indicator_type,
	formula,
	period_type,
	period_year,
	period_quarter,
	period_month,
	region_id,
	region_name,
	country_id,
	country_name,
	facility_id,
	facility_name,
	actual_value,
	target_value,
	"variance",
	variance_percentage,
	calculation_timestamp,
	is_calculated,
	decimals,
	annualized,
	data_completeness,
	overall_completion_percentage,
	actual_value_completion,
	target_value_completion,
	completion_status,
	is_actual_missing,
	is_target_missing,
	data_freshness,
	days_since_last_calculation,
	performance_status,
	performance_percentage,
	data_quality_flag,
	data_hierarchy_level,
	period_completeness,
	calculation_method,
	formula_type,
	org_unit_validity,
	period_validity,
	legacy_performance_status
FROM "public".lbpmi_summary',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'indicator_group_id' => array(
			'name' => 'indicator_group_id',
			'goodName' => 'indicator_group_id',
			'strField' => 'indicator_group_id',
			'sourceSingle' => 'indicator_group_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'indicator_group_id',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'indicator_group_name' => array(
			'name' => 'indicator_group_name',
			'goodName' => 'indicator_group_name',
			'strField' => 'indicator_group_name',
			'sourceSingle' => 'indicator_group_name',
			'index' => 2,
			'sqlExpression' => 'indicator_group_name',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'indicator_group_code' => array(
			'name' => 'indicator_group_code',
			'goodName' => 'indicator_group_code',
			'strField' => 'indicator_group_code',
			'sourceSingle' => 'indicator_group_code',
			'index' => 3,
			'sqlExpression' => 'indicator_group_code',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'indicator_id' => array(
			'name' => 'indicator_id',
			'goodName' => 'indicator_id',
			'strField' => 'indicator_id',
			'sourceSingle' => 'indicator_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'indicator_id',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'indicator_name' => array(
			'name' => 'indicator_name',
			'goodName' => 'indicator_name',
			'strField' => 'indicator_name',
			'sourceSingle' => 'indicator_name',
			'index' => 5,
			'sqlExpression' => 'indicator_name',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'indicator_code' => array(
			'name' => 'indicator_code',
			'goodName' => 'indicator_code',
			'strField' => 'indicator_code',
			'sourceSingle' => 'indicator_code',
			'index' => 6,
			'sqlExpression' => 'indicator_code',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'indicator_type' => array(
			'name' => 'indicator_type',
			'goodName' => 'indicator_type',
			'strField' => 'indicator_type',
			'sourceSingle' => 'indicator_type',
			'index' => 7,
			'sqlExpression' => 'indicator_type',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'formula' => array(
			'name' => 'formula',
			'goodName' => 'formula',
			'strField' => 'formula',
			'sourceSingle' => 'formula',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'formula',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'period_type' => array(
			'name' => 'period_type',
			'goodName' => 'period_type',
			'strField' => 'period_type',
			'sourceSingle' => 'period_type',
			'index' => 9,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'period_year' => array(
			'name' => 'period_year',
			'goodName' => 'period_year',
			'strField' => 'period_year',
			'sourceSingle' => 'period_year',
			'index' => 10,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'period_quarter' => array(
			'name' => 'period_quarter',
			'goodName' => 'period_quarter',
			'strField' => 'period_quarter',
			'sourceSingle' => 'period_quarter',
			'index' => 11,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'period_month' => array(
			'name' => 'period_month',
			'goodName' => 'period_month',
			'strField' => 'period_month',
			'sourceSingle' => 'period_month',
			'index' => 12,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'region_id' => array(
			'name' => 'region_id',
			'goodName' => 'region_id',
			'strField' => 'region_id',
			'sourceSingle' => 'region_id',
			'index' => 13,
			'type' => 3,
			'sqlExpression' => 'region_id',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'region_name' => array(
			'name' => 'region_name',
			'goodName' => 'region_name',
			'strField' => 'region_name',
			'sourceSingle' => 'region_name',
			'index' => 14,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'country_id' => array(
			'name' => 'country_id',
			'goodName' => 'country_id',
			'strField' => 'country_id',
			'sourceSingle' => 'country_id',
			'index' => 15,
			'type' => 3,
			'sqlExpression' => 'country_id',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'country_name' => array(
			'name' => 'country_name',
			'goodName' => 'country_name',
			'strField' => 'country_name',
			'sourceSingle' => 'country_name',
			'index' => 16,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'facility_id' => array(
			'name' => 'facility_id',
			'goodName' => 'facility_id',
			'strField' => 'facility_id',
			'sourceSingle' => 'facility_id',
			'index' => 17,
			'type' => 3,
			'sqlExpression' => 'facility_id',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'facility_name' => array(
			'name' => 'facility_name',
			'goodName' => 'facility_name',
			'strField' => 'facility_name',
			'sourceSingle' => 'facility_name',
			'index' => 18,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'actual_value' => array(
			'name' => 'actual_value',
			'goodName' => 'actual_value',
			'strField' => 'actual_value',
			'sourceSingle' => 'actual_value',
			'index' => 19,
			'type' => 14,
			'sqlExpression' => 'actual_value',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'target_value' => array(
			'name' => 'target_value',
			'goodName' => 'target_value',
			'strField' => 'target_value',
			'sourceSingle' => 'target_value',
			'index' => 20,
			'type' => 14,
			'sqlExpression' => 'target_value',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'variance' => array(
			'name' => 'variance',
			'goodName' => 'variance',
			'strField' => 'variance',
			'sourceSingle' => 'variance',
			'index' => 21,
			'type' => 14,
			'sqlExpression' => '"variance"',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'variance_percentage' => array(
			'name' => 'variance_percentage',
			'goodName' => 'variance_percentage',
			'strField' => 'variance_percentage',
			'sourceSingle' => 'variance_percentage',
			'index' => 22,
			'type' => 14,
			'sqlExpression' => 'variance_percentage',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'calculation_timestamp' => array(
			'name' => 'calculation_timestamp',
			'goodName' => 'calculation_timestamp',
			'strField' => 'calculation_timestamp',
			'sourceSingle' => 'calculation_timestamp',
			'index' => 23,
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'is_calculated' => array(
			'name' => 'is_calculated',
			'goodName' => 'is_calculated',
			'strField' => 'is_calculated',
			'sourceSingle' => 'is_calculated',
			'index' => 24,
			'type' => 11,
			'sqlExpression' => 'is_calculated',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'decimals' => array(
			'name' => 'decimals',
			'goodName' => 'decimals',
			'strField' => 'decimals',
			'sourceSingle' => 'decimals',
			'index' => 25,
			'type' => 3,
			'sqlExpression' => 'decimals',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'annualized' => array(
			'name' => 'annualized',
			'goodName' => 'annualized',
			'strField' => 'annualized',
			'sourceSingle' => 'annualized',
			'index' => 26,
			'type' => 11,
			'sqlExpression' => 'annualized',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'data_completeness' => array(
			'name' => 'data_completeness',
			'goodName' => 'data_completeness',
			'strField' => 'data_completeness',
			'sourceSingle' => 'data_completeness',
			'index' => 27,
			'type' => 3,
			'sqlExpression' => 'data_completeness',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'overall_completion_percentage' => array(
			'name' => 'overall_completion_percentage',
			'goodName' => 'overall_completion_percentage',
			'strField' => 'overall_completion_percentage',
			'sourceSingle' => 'overall_completion_percentage',
			'index' => 28,
			'type' => 3,
			'sqlExpression' => 'overall_completion_percentage',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'actual_value_completion' => array(
			'name' => 'actual_value_completion',
			'goodName' => 'actual_value_completion',
			'strField' => 'actual_value_completion',
			'sourceSingle' => 'actual_value_completion',
			'index' => 29,
			'type' => 3,
			'sqlExpression' => 'actual_value_completion',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'target_value_completion' => array(
			'name' => 'target_value_completion',
			'goodName' => 'target_value_completion',
			'strField' => 'target_value_completion',
			'sourceSingle' => 'target_value_completion',
			'index' => 30,
			'type' => 3,
			'sqlExpression' => 'target_value_completion',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'completion_status' => array(
			'name' => 'completion_status',
			'goodName' => 'completion_status',
			'strField' => 'completion_status',
			'sourceSingle' => 'completion_status',
			'index' => 31,
			'type' => 201,
			'sqlExpression' => 'completion_status',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'is_actual_missing' => array(
			'name' => 'is_actual_missing',
			'goodName' => 'is_actual_missing',
			'strField' => 'is_actual_missing',
			'sourceSingle' => 'is_actual_missing',
			'index' => 32,
			'type' => 3,
			'sqlExpression' => 'is_actual_missing',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'is_target_missing' => array(
			'name' => 'is_target_missing',
			'goodName' => 'is_target_missing',
			'strField' => 'is_target_missing',
			'sourceSingle' => 'is_target_missing',
			'index' => 33,
			'type' => 3,
			'sqlExpression' => 'is_target_missing',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'data_freshness' => array(
			'name' => 'data_freshness',
			'goodName' => 'data_freshness',
			'strField' => 'data_freshness',
			'sourceSingle' => 'data_freshness',
			'index' => 34,
			'type' => 201,
			'sqlExpression' => 'data_freshness',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'days_since_last_calculation' => array(
			'name' => 'days_since_last_calculation',
			'goodName' => 'days_since_last_calculation',
			'strField' => 'days_since_last_calculation',
			'sourceSingle' => 'days_since_last_calculation',
			'index' => 35,
			'type' => 14,
			'sqlExpression' => 'days_since_last_calculation',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'performance_status' => array(
			'name' => 'performance_status',
			'goodName' => 'performance_status',
			'strField' => 'performance_status',
			'sourceSingle' => 'performance_status',
			'index' => 36,
			'type' => 201,
			'sqlExpression' => 'performance_status',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'performance_percentage' => array(
			'name' => 'performance_percentage',
			'goodName' => 'performance_percentage',
			'strField' => 'performance_percentage',
			'sourceSingle' => 'performance_percentage',
			'index' => 37,
			'type' => 14,
			'sqlExpression' => 'performance_percentage',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'data_quality_flag' => array(
			'name' => 'data_quality_flag',
			'goodName' => 'data_quality_flag',
			'strField' => 'data_quality_flag',
			'sourceSingle' => 'data_quality_flag',
			'index' => 38,
			'type' => 201,
			'sqlExpression' => 'data_quality_flag',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'data_hierarchy_level' => array(
			'name' => 'data_hierarchy_level',
			'goodName' => 'data_hierarchy_level',
			'strField' => 'data_hierarchy_level',
			'sourceSingle' => 'data_hierarchy_level',
			'index' => 39,
			'type' => 201,
			'sqlExpression' => 'data_hierarchy_level',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'period_completeness' => array(
			'name' => 'period_completeness',
			'goodName' => 'period_completeness',
			'strField' => 'period_completeness',
			'sourceSingle' => 'period_completeness',
			'index' => 40,
			'type' => 201,
			'sqlExpression' => 'period_completeness',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'calculation_method' => array(
			'name' => 'calculation_method',
			'goodName' => 'calculation_method',
			'strField' => 'calculation_method',
			'sourceSingle' => 'calculation_method',
			'index' => 41,
			'type' => 201,
			'sqlExpression' => 'calculation_method',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'formula_type' => array(
			'name' => 'formula_type',
			'goodName' => 'formula_type',
			'strField' => 'formula_type',
			'sourceSingle' => 'formula_type',
			'index' => 42,
			'type' => 201,
			'sqlExpression' => 'formula_type',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'org_unit_validity' => array(
			'name' => 'org_unit_validity',
			'goodName' => 'org_unit_validity',
			'strField' => 'org_unit_validity',
			'sourceSingle' => 'org_unit_validity',
			'index' => 43,
			'type' => 201,
			'sqlExpression' => 'org_unit_validity',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'period_validity' => array(
			'name' => 'period_validity',
			'goodName' => 'period_validity',
			'strField' => 'period_validity',
			'sourceSingle' => 'period_validity',
			'index' => 44,
			'type' => 201,
			'sqlExpression' => 'period_validity',
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
			'tableName' => 'public.lbpmi_summary' 
		),
		'legacy_performance_status' => array(
			'name' => 'legacy_performance_status',
			'goodName' => 'legacy_performance_status',
			'strField' => 'legacy_performance_status',
			'sourceSingle' => 'legacy_performance_status',
			'index' => 45,
			'type' => 201,
			'sqlExpression' => 'legacy_performance_status',
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
			'tableName' => 'public.lbpmi_summary' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	indicator_group_id,
	indicator_group_name,
	indicator_group_code,
	indicator_id,
	indicator_name,
	indicator_code,
	indicator_type,
	formula,
	period_type,
	period_year,
	period_quarter,
	period_month,
	region_id,
	region_name,
	country_id,
	country_name,
	facility_id,
	facility_name,
	actual_value,
	target_value,
	"variance",
	variance_percentage,
	calculation_timestamp,
	is_calculated,
	decimals,
	annualized,
	data_completeness,
	overall_completion_percentage,
	actual_value_completion,
	target_value_completion,
	completion_status,
	is_actual_missing,
	is_target_missing,
	data_freshness,
	days_since_last_calculation,
	performance_status,
	performance_percentage,
	data_quality_flag,
	data_hierarchy_level,
	period_completeness,
	calculation_method,
	formula_type,
	org_unit_validity,
	period_validity,
	legacy_performance_status
FROM "public".lbpmi_summary',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'indicator_group_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_group_id' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_id' 
			),
			array(
				'sql' => 'indicator_group_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_group_name' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_name' 
			),
			array(
				'sql' => 'indicator_group_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_group_code' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_code' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_id' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_id' 
			),
			array(
				'sql' => 'indicator_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_name' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_name' 
			),
			array(
				'sql' => 'indicator_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_code' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_code' 
			),
			array(
				'sql' => 'indicator_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'indicator_type' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_type' 
			),
			array(
				'sql' => 'formula',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'formula' 
				),
				'encrypted' => false,
				'columnName' => 'formula' 
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
					'table' => 'public.lbpmi_summary',
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
					'table' => 'public.lbpmi_summary',
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
					'table' => 'public.lbpmi_summary',
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
					'table' => 'public.lbpmi_summary',
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
					'table' => 'public.lbpmi_summary',
					'name' => 'region_id' 
				),
				'encrypted' => false,
				'columnName' => 'region_id' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'region_name' 
				),
				'encrypted' => false,
				'columnName' => 'region_name' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'country_id' 
				),
				'encrypted' => false,
				'columnName' => 'country_id' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'country_name' 
				),
				'encrypted' => false,
				'columnName' => 'country_name' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'facility_name' 
				),
				'encrypted' => false,
				'columnName' => 'facility_name' 
			),
			array(
				'sql' => 'actual_value',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'actual_value' 
				),
				'encrypted' => false,
				'columnName' => 'actual_value' 
			),
			array(
				'sql' => 'target_value',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'target_value' 
				),
				'encrypted' => false,
				'columnName' => 'target_value' 
			),
			array(
				'sql' => '"variance"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'variance' 
				),
				'encrypted' => false,
				'columnName' => 'variance' 
			),
			array(
				'sql' => 'variance_percentage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'variance_percentage' 
				),
				'encrypted' => false,
				'columnName' => 'variance_percentage' 
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
					'table' => 'public.lbpmi_summary',
					'name' => 'calculation_timestamp' 
				),
				'encrypted' => false,
				'columnName' => 'calculation_timestamp' 
			),
			array(
				'sql' => 'is_calculated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'is_calculated' 
				),
				'encrypted' => false,
				'columnName' => 'is_calculated' 
			),
			array(
				'sql' => 'decimals',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'decimals' 
				),
				'encrypted' => false,
				'columnName' => 'decimals' 
			),
			array(
				'sql' => 'annualized',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'annualized' 
				),
				'encrypted' => false,
				'columnName' => 'annualized' 
			),
			array(
				'sql' => 'data_completeness',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'data_completeness' 
				),
				'encrypted' => false,
				'columnName' => 'data_completeness' 
			),
			array(
				'sql' => 'overall_completion_percentage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'overall_completion_percentage' 
				),
				'encrypted' => false,
				'columnName' => 'overall_completion_percentage' 
			),
			array(
				'sql' => 'actual_value_completion',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'actual_value_completion' 
				),
				'encrypted' => false,
				'columnName' => 'actual_value_completion' 
			),
			array(
				'sql' => 'target_value_completion',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'target_value_completion' 
				),
				'encrypted' => false,
				'columnName' => 'target_value_completion' 
			),
			array(
				'sql' => 'completion_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'completion_status' 
				),
				'encrypted' => false,
				'columnName' => 'completion_status' 
			),
			array(
				'sql' => 'is_actual_missing',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'is_actual_missing' 
				),
				'encrypted' => false,
				'columnName' => 'is_actual_missing' 
			),
			array(
				'sql' => 'is_target_missing',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'is_target_missing' 
				),
				'encrypted' => false,
				'columnName' => 'is_target_missing' 
			),
			array(
				'sql' => 'data_freshness',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'data_freshness' 
				),
				'encrypted' => false,
				'columnName' => 'data_freshness' 
			),
			array(
				'sql' => 'days_since_last_calculation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'days_since_last_calculation' 
				),
				'encrypted' => false,
				'columnName' => 'days_since_last_calculation' 
			),
			array(
				'sql' => 'performance_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'performance_status' 
				),
				'encrypted' => false,
				'columnName' => 'performance_status' 
			),
			array(
				'sql' => 'performance_percentage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'performance_percentage' 
				),
				'encrypted' => false,
				'columnName' => 'performance_percentage' 
			),
			array(
				'sql' => 'data_quality_flag',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'data_quality_flag' 
				),
				'encrypted' => false,
				'columnName' => 'data_quality_flag' 
			),
			array(
				'sql' => 'data_hierarchy_level',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'data_hierarchy_level' 
				),
				'encrypted' => false,
				'columnName' => 'data_hierarchy_level' 
			),
			array(
				'sql' => 'period_completeness',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'period_completeness' 
				),
				'encrypted' => false,
				'columnName' => 'period_completeness' 
			),
			array(
				'sql' => 'calculation_method',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'calculation_method' 
				),
				'encrypted' => false,
				'columnName' => 'calculation_method' 
			),
			array(
				'sql' => 'formula_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'formula_type' 
				),
				'encrypted' => false,
				'columnName' => 'formula_type' 
			),
			array(
				'sql' => 'org_unit_validity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'org_unit_validity' 
				),
				'encrypted' => false,
				'columnName' => 'org_unit_validity' 
			),
			array(
				'sql' => 'period_validity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'period_validity' 
				),
				'encrypted' => false,
				'columnName' => 'period_validity' 
			),
			array(
				'sql' => 'legacy_performance_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_summary',
					'name' => 'legacy_performance_status' 
				),
				'encrypted' => false,
				'columnName' => 'legacy_performance_status' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbpmi_summary',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbpmi_summary',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'indicator_group_id',
						'indicator_group_name',
						'indicator_group_code',
						'indicator_id',
						'indicator_name',
						'indicator_code',
						'indicator_type',
						'formula',
						'period_type',
						'period_year',
						'period_quarter',
						'period_month',
						'region_id',
						'region_name',
						'country_id',
						'country_name',
						'facility_id',
						'facility_name',
						'actual_value',
						'target_value',
						'variance',
						'variance_percentage',
						'calculation_timestamp',
						'is_calculated',
						'decimals',
						'annualized',
						'data_completeness',
						'overall_completion_percentage',
						'actual_value_completion',
						'target_value_completion',
						'completion_status',
						'is_actual_missing',
						'is_target_missing',
						'data_freshness',
						'days_since_last_calculation',
						'performance_status',
						'performance_percentage',
						'data_quality_flag',
						'data_hierarchy_level',
						'period_completeness',
						'calculation_method',
						'formula_type',
						'org_unit_validity',
						'period_validity',
						'legacy_performance_status' 
					),
					'name' => 'public.lbpmi_summary' 
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
			),
			array(
				'fieldIndex' => 19,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 20,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 21,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 22,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 23,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 24,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 25,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 26,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 27,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 28,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 29,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 30,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 31,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 32,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 33,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 34,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 35,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 36,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 37,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 38,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 39,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 40,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 41,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 42,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 43,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 44,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'indicator_group_id,
	indicator_group_name,
	indicator_group_code,
	indicator_id,
	indicator_name,
	indicator_code,
	indicator_type,
	formula,
	period_type,
	period_year,
	period_quarter,
	period_month,
	region_id,
	region_name,
	country_id,
	country_name,
	facility_id,
	facility_name,
	actual_value,
	target_value,
	"variance",
	variance_percentage,
	calculation_timestamp,
	is_calculated,
	decimals,
	annualized,
	data_completeness,
	overall_completion_percentage,
	actual_value_completion,
	target_value_completion,
	completion_status,
	is_actual_missing,
	is_target_missing,
	data_freshness,
	days_since_last_calculation,
	performance_status,
	performance_percentage,
	data_quality_flag,
	data_hierarchy_level,
	period_completeness,
	calculation_method,
	formula_type,
	org_unit_validity,
	period_validity,
	legacy_performance_status',
		'fromListSql' => 'FROM "public".lbpmi_summary',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbpmi_summary',
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
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'indicator_group_id',
			'indicator_group_name',
			'indicator_group_code',
			'indicator_id',
			'indicator_name',
			'indicator_code',
			'indicator_type',
			'formula',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'region_id',
			'region_name',
			'country_id',
			'country_name',
			'facility_id',
			'facility_name',
			'actual_value',
			'target_value',
			'variance',
			'variance_percentage',
			'calculation_timestamp',
			'is_calculated',
			'decimals',
			'annualized',
			'data_completeness',
			'overall_completion_percentage',
			'actual_value_completion',
			'target_value_completion',
			'completion_status',
			'is_actual_missing',
			'is_target_missing',
			'data_freshness',
			'days_since_last_calculation',
			'performance_status',
			'performance_percentage',
			'data_quality_flag',
			'data_hierarchy_level',
			'period_completeness',
			'calculation_method',
			'formula_type',
			'org_unit_validity',
			'period_validity',
			'legacy_performance_status' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'indicator_group_id',
			'indicator_group_name',
			'indicator_group_code',
			'indicator_id',
			'indicator_name',
			'indicator_code',
			'indicator_type',
			'formula',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'region_id',
			'region_name',
			'country_id',
			'country_name',
			'facility_id',
			'facility_name',
			'actual_value',
			'target_value',
			'variance',
			'variance_percentage',
			'calculation_timestamp',
			'is_calculated',
			'decimals',
			'annualized',
			'data_completeness',
			'overall_completion_percentage',
			'actual_value_completion',
			'target_value_completion',
			'completion_status',
			'is_actual_missing',
			'is_target_missing',
			'data_freshness',
			'days_since_last_calculation',
			'performance_status',
			'performance_percentage',
			'data_quality_flag',
			'data_hierarchy_level',
			'period_completeness',
			'calculation_method',
			'formula_type',
			'org_unit_validity',
			'period_validity',
			'legacy_performance_status' 
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
	$runnerTableLabels['public.lbpmi_summary'] = array(
	'tableCaption' => 'Lbpmi Summary',
	'fieldLabels' => array(
		'indicator_group_id' => 'Indicator Group Id',
		'indicator_group_name' => 'Indicator Group Name',
		'indicator_group_code' => 'Indicator Group Code',
		'indicator_id' => 'Indicator Id',
		'indicator_name' => 'Indicator Name',
		'indicator_code' => 'Indicator Code',
		'indicator_type' => 'Indicator Type',
		'formula' => 'Formula',
		'period_type' => 'Period Type',
		'period_year' => 'Period Year',
		'period_quarter' => 'Period Quarter',
		'period_month' => 'Period Month',
		'region_id' => 'Region Id',
		'region_name' => 'Region Name',
		'country_id' => 'Country Id',
		'country_name' => 'Country Name',
		'facility_id' => 'Facility Id',
		'facility_name' => 'Facility Name',
		'actual_value' => 'Actual Value',
		'target_value' => 'Target Value',
		'variance' => 'Variance',
		'variance_percentage' => 'Variance Percentage',
		'calculation_timestamp' => 'Calculation Timestamp',
		'is_calculated' => 'Is Calculated',
		'decimals' => 'Decimals',
		'annualized' => 'Annualized',
		'data_completeness' => 'Data Completeness',
		'overall_completion_percentage' => 'Overall Completion Percentage',
		'actual_value_completion' => 'Actual Value Completion',
		'target_value_completion' => 'Target Value Completion',
		'completion_status' => 'Completion Status',
		'is_actual_missing' => 'Is Actual Missing',
		'is_target_missing' => 'Is Target Missing',
		'data_freshness' => 'Data Freshness',
		'days_since_last_calculation' => 'Days Since Last Calculation',
		'performance_status' => 'Performance Status',
		'performance_percentage' => 'Performance Percentage',
		'data_quality_flag' => 'Data Quality Flag',
		'data_hierarchy_level' => 'Data Hierarchy Level',
		'period_completeness' => 'Period Completeness',
		'calculation_method' => 'Calculation Method',
		'formula_type' => 'Formula Type',
		'org_unit_validity' => 'Org Unit Validity',
		'period_validity' => 'Period Validity',
		'legacy_performance_status' => 'Legacy Performance Status' 
	),
	'fieldTooltips' => array(
		'indicator_group_id' => '',
		'indicator_group_name' => '',
		'indicator_group_code' => '',
		'indicator_id' => '',
		'indicator_name' => '',
		'indicator_code' => '',
		'indicator_type' => '',
		'formula' => '',
		'period_type' => '',
		'period_year' => '',
		'period_quarter' => '',
		'period_month' => '',
		'region_id' => '',
		'region_name' => '',
		'country_id' => '',
		'country_name' => '',
		'facility_id' => '',
		'facility_name' => '',
		'actual_value' => '',
		'target_value' => '',
		'variance' => '',
		'variance_percentage' => '',
		'calculation_timestamp' => '',
		'is_calculated' => '',
		'decimals' => '',
		'annualized' => '',
		'data_completeness' => '',
		'overall_completion_percentage' => '',
		'actual_value_completion' => '',
		'target_value_completion' => '',
		'completion_status' => '',
		'is_actual_missing' => '',
		'is_target_missing' => '',
		'data_freshness' => '',
		'days_since_last_calculation' => '',
		'performance_status' => '',
		'performance_percentage' => '',
		'data_quality_flag' => '',
		'data_hierarchy_level' => '',
		'period_completeness' => '',
		'calculation_method' => '',
		'formula_type' => '',
		'org_unit_validity' => '',
		'period_validity' => '',
		'legacy_performance_status' => '' 
	),
	'fieldPlaceholders' => array(
		'indicator_group_id' => '',
		'indicator_group_name' => '',
		'indicator_group_code' => '',
		'indicator_id' => '',
		'indicator_name' => '',
		'indicator_code' => '',
		'indicator_type' => '',
		'formula' => '',
		'period_type' => '',
		'period_year' => '',
		'period_quarter' => '',
		'period_month' => '',
		'region_id' => '',
		'region_name' => '',
		'country_id' => '',
		'country_name' => '',
		'facility_id' => '',
		'facility_name' => '',
		'actual_value' => '',
		'target_value' => '',
		'variance' => '',
		'variance_percentage' => '',
		'calculation_timestamp' => '',
		'is_calculated' => '',
		'decimals' => '',
		'annualized' => '',
		'data_completeness' => '',
		'overall_completion_percentage' => '',
		'actual_value_completion' => '',
		'target_value_completion' => '',
		'completion_status' => '',
		'is_actual_missing' => '',
		'is_target_missing' => '',
		'data_freshness' => '',
		'days_since_last_calculation' => '',
		'performance_status' => '',
		'performance_percentage' => '',
		'data_quality_flag' => '',
		'data_hierarchy_level' => '',
		'period_completeness' => '',
		'calculation_method' => '',
		'formula_type' => '',
		'org_unit_validity' => '',
		'period_validity' => '',
		'legacy_performance_status' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>