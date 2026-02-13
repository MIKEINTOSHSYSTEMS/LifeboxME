<?php
global $runnerTableSettings;
$runnerTableSettings['public.lifeboxme_dhis2_analytics_data'] = array(
	'name' => 'public.lifeboxme_dhis2_analytics_data',
	'shortName' => 'lifeboxme_dhis2_analytics_data',
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
	'detailsBadgeColor' => 'E67349',
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
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'ASC',
			'field' => 'id' 
		),
		array(
			'index' => 12,
			'dir' => 'ASC',
			'field' => 'ou_level_id' 
		) 
	),
	'sql' => 'SELECT
id,
setting_id,
dx_id,
dx_name,
dx_shortname,
dx_displayname,
dx_dimensiontype,
ou_id,
ou_name,
ou_parent_id,
ou_parent_name,
ou_level_id,
ou_level_name,
period_id,
period_display_name,
pe_relativeperiod,
"value",
stored_by,
created,
last_updated,
fetched_at
FROM "public".lifeboxme_dhis2_analytics_data
WHERE ("value" IS NOT NULL)
ORDER BY id, ou_level_id',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'setting_id' => array(
			'name' => 'setting_id',
			'goodName' => 'setting_id',
			'strField' => 'setting_id',
			'sourceSingle' => 'setting_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'setting_id',
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
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_settings',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'dx_id' => array(
			'name' => 'dx_id',
			'goodName' => 'dx_id',
			'strField' => 'dx_id',
			'sourceSingle' => 'dx_id',
			'index' => 3,
			'sqlExpression' => 'dx_id',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'dx_name' => array(
			'name' => 'dx_name',
			'goodName' => 'dx_name',
			'strField' => 'dx_name',
			'sourceSingle' => 'dx_name',
			'index' => 4,
			'sqlExpression' => 'dx_name',
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
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'dx_name',
					'lookupDisplayField' => 'dx_name',
					'lookupUnique' => true,
					'lookupControlType' => 3,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'dx_dimensiontype',
							'lookupField' => 'dx_dimensiontype' 
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
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'dx_shortname' => array(
			'name' => 'dx_shortname',
			'goodName' => 'dx_shortname',
			'strField' => 'dx_shortname',
			'sourceSingle' => 'dx_shortname',
			'index' => 5,
			'sqlExpression' => 'dx_shortname',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'dx_displayname' => array(
			'name' => 'dx_displayname',
			'goodName' => 'dx_displayname',
			'strField' => 'dx_displayname',
			'sourceSingle' => 'dx_displayname',
			'index' => 6,
			'sqlExpression' => 'dx_displayname',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'dx_dimensiontype' => array(
			'name' => 'dx_dimensiontype',
			'goodName' => 'dx_dimensiontype',
			'strField' => 'dx_dimensiontype',
			'sourceSingle' => 'dx_dimensiontype',
			'index' => 7,
			'sqlExpression' => 'dx_dimensiontype',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'dx_dimensiontype',
					'lookupDisplayField' => 'dx_dimensiontype',
					'lookupOrderBy' => 'dx_dimensiontype',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'ou_id' => array(
			'name' => 'ou_id',
			'goodName' => 'ou_id',
			'strField' => 'ou_id',
			'sourceSingle' => 'ou_id',
			'index' => 8,
			'sqlExpression' => 'ou_id',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'ou_name' => array(
			'name' => 'ou_name',
			'goodName' => 'ou_name',
			'strField' => 'ou_name',
			'sourceSingle' => 'ou_name',
			'index' => 9,
			'sqlExpression' => 'ou_name',
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
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'ou_name',
					'lookupDisplayField' => 'ou_name',
					'lookupUnique' => true,
					'lookupControlType' => 3,
					'lookupHorizontal' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'ou_parent_name',
							'lookupField' => 'ou_parent_name' 
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
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'ou_parent_id' => array(
			'name' => 'ou_parent_id',
			'goodName' => 'ou_parent_id',
			'strField' => 'ou_parent_id',
			'sourceSingle' => 'ou_parent_id',
			'index' => 10,
			'sqlExpression' => 'ou_parent_id',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'ou_parent_name' => array(
			'name' => 'ou_parent_name',
			'goodName' => 'ou_parent_name',
			'strField' => 'ou_parent_name',
			'sourceSingle' => 'ou_parent_name',
			'index' => 11,
			'sqlExpression' => 'ou_parent_name',
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
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'ou_parent_name',
					'lookupDisplayField' => 'ou_parent_name',
					'lookupUnique' => true,
					'lookupControlType' => 3,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'ou_level_name',
							'lookupField' => 'ou_level_name' 
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
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'ou_level_id' => array(
			'name' => 'ou_level_id',
			'goodName' => 'ou_level_id',
			'strField' => 'ou_level_id',
			'sourceSingle' => 'ou_level_id',
			'index' => 12,
			'type' => 3,
			'sqlExpression' => 'ou_level_id',
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
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'ou_level_id',
					'lookupDisplayField' => 'ou_level_name',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'ou_level_name' => array(
			'name' => 'ou_level_name',
			'goodName' => 'ou_level_name',
			'strField' => 'ou_level_name',
			'sourceSingle' => 'ou_level_name',
			'index' => 13,
			'sqlExpression' => 'ou_level_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'ou_level_name',
					'lookupDisplayField' => 'ou_level_name',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'period_id' => array(
			'name' => 'period_id',
			'goodName' => 'period_id',
			'strField' => 'period_id',
			'sourceSingle' => 'period_id',
			'index' => 14,
			'sqlExpression' => 'period_id',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'period_display_name' => array(
			'name' => 'period_display_name',
			'goodName' => 'period_display_name',
			'strField' => 'period_display_name',
			'sourceSingle' => 'period_display_name',
			'index' => 15,
			'sqlExpression' => 'period_display_name',
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
					'lookupSize' => 4,
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'period_display_name',
					'lookupDisplayField' => 'period_display_name',
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'pe_relativeperiod',
							'lookupField' => 'pe_relativeperiod' 
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
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'pe_relativeperiod' => array(
			'name' => 'pe_relativeperiod',
			'goodName' => 'pe_relativeperiod',
			'strField' => 'pe_relativeperiod',
			'sourceSingle' => 'pe_relativeperiod',
			'index' => 16,
			'sqlExpression' => 'pe_relativeperiod',
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
					'lookupTable' => 'public.lifeboxme_dhis2_analytics_data',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'pe_relativeperiod',
					'lookupDisplayField' => 'pe_relativeperiod',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'value' => array(
			'name' => 'value',
			'goodName' => 'value',
			'strField' => 'value',
			'sourceSingle' => 'value',
			'index' => 17,
			'type' => 14,
			'sqlExpression' => '"value"',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
					'numberFractionalDigits' => 4 
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
			'defaultSearchOption' => 'NOT Empty',
			'allSearchOptionsSelected' => true,
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'stored_by' => array(
			'name' => 'stored_by',
			'goodName' => 'stored_by',
			'strField' => 'stored_by',
			'sourceSingle' => 'stored_by',
			'index' => 18,
			'sqlExpression' => 'stored_by',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'created' => array(
			'name' => 'created',
			'goodName' => 'created',
			'strField' => 'created',
			'sourceSingle' => 'created',
			'index' => 19,
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'sourceSingle' => 'last_updated',
			'index' => 20,
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		),
		'fetched_at' => array(
			'name' => 'fetched_at',
			'goodName' => 'fetched_at',
			'strField' => 'fetched_at',
			'sourceSingle' => 'fetched_at',
			'index' => 21,
			'type' => 135,
			'sqlExpression' => 'fetched_at',
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
			'tableName' => 'public.lifeboxme_dhis2_analytics_data' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lifeboxme_dhis2_analytics_settings',
			'detailsKeys' => array( 
				'setting_id' 
			),
			'masterKeys' => array( 
				'id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
id,
setting_id,
dx_id,
dx_name,
dx_shortname,
dx_displayname,
dx_dimensiontype,
ou_id,
ou_name,
ou_parent_id,
ou_parent_name,
ou_level_id,
ou_level_name,
period_id,
period_display_name,
pe_relativeperiod,
"value",
stored_by,
created,
last_updated,
fetched_at
FROM "public".lifeboxme_dhis2_analytics_data
WHERE ("value" IS NOT NULL)
ORDER BY id, ou_level_id',
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
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'setting_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'setting_id' 
				),
				'encrypted' => false,
				'columnName' => 'setting_id' 
			),
			array(
				'sql' => 'dx_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'dx_id' 
				),
				'encrypted' => false,
				'columnName' => 'dx_id' 
			),
			array(
				'sql' => 'dx_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'dx_name' 
				),
				'encrypted' => false,
				'columnName' => 'dx_name' 
			),
			array(
				'sql' => 'dx_shortname',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'dx_shortname' 
				),
				'encrypted' => false,
				'columnName' => 'dx_shortname' 
			),
			array(
				'sql' => 'dx_displayname',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'dx_displayname' 
				),
				'encrypted' => false,
				'columnName' => 'dx_displayname' 
			),
			array(
				'sql' => 'dx_dimensiontype',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'dx_dimensiontype' 
				),
				'encrypted' => false,
				'columnName' => 'dx_dimensiontype' 
			),
			array(
				'sql' => 'ou_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_id' 
				),
				'encrypted' => false,
				'columnName' => 'ou_id' 
			),
			array(
				'sql' => 'ou_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_name' 
				),
				'encrypted' => false,
				'columnName' => 'ou_name' 
			),
			array(
				'sql' => 'ou_parent_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_parent_id' 
				),
				'encrypted' => false,
				'columnName' => 'ou_parent_id' 
			),
			array(
				'sql' => 'ou_parent_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_parent_name' 
				),
				'encrypted' => false,
				'columnName' => 'ou_parent_name' 
			),
			array(
				'sql' => 'ou_level_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_level_id' 
				),
				'encrypted' => false,
				'columnName' => 'ou_level_id' 
			),
			array(
				'sql' => 'ou_level_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_level_name' 
				),
				'encrypted' => false,
				'columnName' => 'ou_level_name' 
			),
			array(
				'sql' => 'period_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'period_id' 
				),
				'encrypted' => false,
				'columnName' => 'period_id' 
			),
			array(
				'sql' => 'period_display_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'period_display_name' 
				),
				'encrypted' => false,
				'columnName' => 'period_display_name' 
			),
			array(
				'sql' => 'pe_relativeperiod',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'pe_relativeperiod' 
				),
				'encrypted' => false,
				'columnName' => 'pe_relativeperiod' 
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
					'table' => 'public.lifeboxme_dhis2_analytics_data',
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
					'table' => 'public.lifeboxme_dhis2_analytics_data',
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
					'table' => 'public.lifeboxme_dhis2_analytics_data',
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
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			),
			array(
				'sql' => 'fetched_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'fetched_at' 
				),
				'encrypted' => false,
				'columnName' => 'fetched_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme_dhis2_analytics_data',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme_dhis2_analytics_data',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'setting_id',
						'dx_id',
						'dx_name',
						'dx_shortname',
						'dx_displayname',
						'dx_dimensiontype',
						'ou_id',
						'ou_name',
						'ou_parent_id',
						'ou_parent_name',
						'ou_level_id',
						'ou_level_name',
						'period_id',
						'period_display_name',
						'pe_relativeperiod',
						'value',
						'stored_by',
						'created',
						'last_updated',
						'fetched_at' 
					),
					'name' => 'public.lifeboxme_dhis2_analytics_data' 
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
			'sql' => '"value" IS NOT NULL',
			'parsed' => true,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => array(
				'sql' => '',
				'parsed' => true,
				'type' => 'SQLField',
				'table' => 'public.lifeboxme_dhis2_analytics_data',
				'name' => 'value' 
			),
			'case' => 'IS NOT NULL',
			'useAlias' => false 
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
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'id' 
				),
				'asc' => true,
				'columnNumber' => 1 
			),
			array(
				'sql' => 'ou_level_id',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_analytics_data',
					'name' => 'ou_level_id' 
				),
				'asc' => true,
				'columnNumber' => 12 
			) 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => 0,
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
				'orderByIndex' => 1,
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
				'whereIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
setting_id,
dx_id,
dx_name,
dx_shortname,
dx_displayname,
dx_dimensiontype,
ou_id,
ou_name,
ou_parent_id,
ou_parent_name,
ou_level_id,
ou_level_name,
period_id,
period_display_name,
pe_relativeperiod,
"value",
stored_by,
created,
last_updated,
fetched_at',
		'fromListSql' => 'FROM "public".lifeboxme_dhis2_analytics_data',
		'whereSql' => '("value" IS NOT NULL)',
		'orderBySql' => 'ORDER BY id, ou_level_id',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme_dhis2_analytics_data',
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
			'setting_id',
			'dx_id',
			'dx_name',
			'dx_shortname',
			'dx_displayname',
			'dx_dimensiontype',
			'ou_id',
			'ou_name',
			'ou_parent_id',
			'ou_parent_name',
			'ou_level_id',
			'ou_level_name',
			'period_id',
			'period_display_name',
			'pe_relativeperiod',
			'value',
			'stored_by',
			'created',
			'last_updated',
			'fetched_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'setting_id',
			'dx_id',
			'dx_name',
			'dx_shortname',
			'dx_displayname',
			'dx_dimensiontype',
			'ou_id',
			'ou_name',
			'ou_parent_id',
			'ou_parent_name',
			'ou_level_id',
			'ou_level_name',
			'period_id',
			'period_display_name',
			'pe_relativeperiod',
			'value',
			'stored_by',
			'created',
			'last_updated',
			'fetched_at' 
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
	$runnerTableLabels['public.lifeboxme_dhis2_analytics_data'] = array(
	'tableCaption' => 'Lifeboxme Dhis2 Analytics Data',
	'fieldLabels' => array(
		'id' => 'ID',
		'setting_id' => 'Setting Id',
		'dx_id' => 'DxID',
		'dx_name' => 'Data Item',
		'dx_shortname' => 'Shortname',
		'dx_displayname' => 'Displayname',
		'dx_dimensiontype' => 'Dimension Type',
		'ou_id' => 'OUID',
		'ou_name' => 'Organization Unit',
		'ou_parent_id' => 'OU PID',
		'ou_parent_name' => 'OU Parent',
		'ou_level_id' => 'OU LID',
		'ou_level_name' => 'OU Level',
		'period_id' => 'PeID',
		'period_display_name' => 'Period',
		'pe_relativeperiod' => 'Relative Period',
		'value' => 'Value',
		'stored_by' => 'Stored By',
		'created' => 'Created',
		'last_updated' => 'Last Updated',
		'fetched_at' => 'Fetched At' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'setting_id' => '',
		'dx_id' => '',
		'dx_name' => '',
		'dx_shortname' => '',
		'dx_displayname' => '',
		'dx_dimensiontype' => '',
		'ou_id' => '',
		'ou_name' => '',
		'ou_parent_id' => '',
		'ou_parent_name' => '',
		'ou_level_id' => '',
		'ou_level_name' => '',
		'period_id' => '',
		'period_display_name' => '',
		'pe_relativeperiod' => '',
		'value' => '',
		'stored_by' => '',
		'created' => '',
		'last_updated' => '',
		'fetched_at' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'setting_id' => '',
		'dx_id' => '',
		'dx_name' => '',
		'dx_shortname' => '',
		'dx_displayname' => '',
		'dx_dimensiontype' => '',
		'ou_id' => '',
		'ou_name' => '',
		'ou_parent_id' => '',
		'ou_parent_name' => '',
		'ou_level_id' => '',
		'ou_level_name' => '',
		'period_id' => '',
		'period_display_name' => '',
		'pe_relativeperiod' => '',
		'value' => '',
		'stored_by' => '',
		'created' => '',
		'last_updated' => '',
		'fetched_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>