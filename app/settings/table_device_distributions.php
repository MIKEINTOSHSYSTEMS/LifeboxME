<?php
global $runnerTableSettings;
$runnerTableSettings['public.device_distributions'] = array(
	'name' => 'public.device_distributions',
	'shortName' => 'device_distributions',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => '22b1ce',
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
	distribution_id,
	region_id,
	country_id,
	order_reference,
	facility_id,
	monthly_surgical_volume,
	contact_name,
	contact_email,
	distribution_month,
	distribution_year,
	quantity,
	notes,
	created_at,
	updated_at,
	device_type,
	payment_method,
	transaction_type,
	donor,
	is_received,
	receiving_date,
	started_using,
	date_started_using
FROM
	"public".device_distributions',
	'keyFields' => array( 
		'distribution_id' 
	),
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
			'autoinc' => true,
			'sqlExpression' => 'distribution_id',
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
			'tableName' => 'public.device_distributions' 
		),
		'region_id' => array(
			'name' => 'region_id',
			'goodName' => 'region_id',
			'strField' => 'region_id',
			'sourceSingle' => 'region_id',
			'index' => 2,
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
					'lookupAllowAdd' => true,
					'lookupAllowEdit' => true,
					'lookupAddPage' => 'add',
					'lookupEditPage' => 'edit',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'country_id' => array(
			'name' => 'country_id',
			'goodName' => 'country_id',
			'strField' => 'country_id',
			'sourceSingle' => 'country_id',
			'index' => 3,
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
					'lookupOrderBy' => 'country_name',
					'lookupAllowAdd' => true,
					'lookupAllowEdit' => true,
					'lookupAddPage' => 'add',
					'lookupEditPage' => 'edit',
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
			'tableName' => 'public.device_distributions' 
		),
		'order_reference' => array(
			'name' => 'order_reference',
			'goodName' => 'order_reference',
			'strField' => 'order_reference',
			'sourceSingle' => 'order_reference',
			'index' => 4,
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
			'tableName' => 'public.device_distributions' 
		),
		'facility_id' => array(
			'name' => 'facility_id',
			'goodName' => 'facility_id',
			'strField' => 'facility_id',
			'sourceSingle' => 'facility_id',
			'index' => 5,
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
					'lookupOrderBy' => 'facility_name',
					'lookupAllowAdd' => true,
					'lookupAllowEdit' => true,
					'lookupControlType' => 2,
					'lookupListPage' => 'list',
					'lookupAddPage' => 'add',
					'lookupEditPage' => 'edit',
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
			'tableName' => 'public.device_distributions' 
		),
		'monthly_surgical_volume' => array(
			'name' => 'monthly_surgical_volume',
			'goodName' => 'monthly_surgical_volume',
			'strField' => 'monthly_surgical_volume',
			'sourceSingle' => 'monthly_surgical_volume',
			'index' => 6,
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
					'textHTML5Input' => 'Number',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'contact_name' => array(
			'name' => 'contact_name',
			'goodName' => 'contact_name',
			'strField' => 'contact_name',
			'sourceSingle' => 'contact_name',
			'index' => 7,
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
			'tableName' => 'public.device_distributions' 
		),
		'contact_email' => array(
			'name' => 'contact_email',
			'goodName' => 'contact_email',
			'strField' => 'contact_email',
			'sourceSingle' => 'contact_email',
			'index' => 8,
			'sqlExpression' => 'contact_email',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Email Hyperlink',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Email',
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
			'tableName' => 'public.device_distributions' 
		),
		'distribution_month' => array(
			'name' => 'distribution_month',
			'goodName' => 'distribution_month',
			'strField' => 'distribution_month',
			'sourceSingle' => 'distribution_month',
			'index' => 9,
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
					'required' => true,
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
			'tableName' => 'public.device_distributions' 
		),
		'distribution_year' => array(
			'name' => 'distribution_year',
			'goodName' => 'distribution_year',
			'strField' => 'distribution_year',
			'sourceSingle' => 'distribution_year',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'distribution_year',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'defaultValue' => 'strftime("%Y")',
					'validateAs' => 'Number',
					'textboxMaxLenth' => 4,
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
			'tableName' => 'public.device_distributions' 
		),
		'quantity' => array(
			'name' => 'quantity',
			'goodName' => 'quantity',
			'strField' => 'quantity',
			'sourceSingle' => 'quantity',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'quantity',
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
					'textHTML5Input' => 'Number',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'sourceSingle' => 'notes',
			'index' => 12,
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
			'tableName' => 'public.device_distributions' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 13,
			'type' => 135,
			'sqlExpression' => 'created_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'defaultValue' => 'strftime("%Y-%m-%d")',
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
			'tableName' => 'public.device_distributions' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'updated_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'autoUpdateValue' => 'strftime("%Y-%m-%d")',
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
			'tableName' => 'public.device_distributions' 
		),
		'device_type' => array(
			'name' => 'device_type',
			'goodName' => 'device_type',
			'strField' => 'device_type',
			'sourceSingle' => 'device_type',
			'index' => 15,
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
					'required' => true,
					'validateAs' => 'Number',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.devices',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'device_id',
					'lookupDisplayField' => 'device_type',
					'lookupAllowAdd' => true,
					'lookupAddPage' => 'add',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'payment_method' => array(
			'name' => 'payment_method',
			'goodName' => 'payment_method',
			'strField' => 'payment_method',
			'sourceSingle' => 'payment_method',
			'index' => 16,
			'type' => 3,
			'sqlExpression' => 'payment_method',
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
					'lookupTable' => 'public.payment_methods',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'method',
					'lookupAllowAdd' => true,
					'lookupAddPage' => 'add',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'transaction_type' => array(
			'name' => 'transaction_type',
			'goodName' => 'transaction_type',
			'strField' => 'transaction_type',
			'sourceSingle' => 'transaction_type',
			'index' => 17,
			'type' => 3,
			'sqlExpression' => 'transaction_type',
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
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.transaction_types',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'transaction_name',
					'lookupAllowAdd' => true,
					'lookupAddPage' => 'add',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'donor' => array(
			'name' => 'donor',
			'goodName' => 'donor',
			'strField' => 'donor',
			'sourceSingle' => 'donor',
			'index' => 18,
			'type' => 3,
			'sqlExpression' => 'donor',
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
					'lookupTable' => 'public.donors',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'organization_name',
					'lookupAllowAdd' => true,
					'lookupAllowEdit' => true,
					'lookupAddPage' => 'add',
					'lookupEditPage' => 'edit',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distributions' 
		),
		'is_received' => array(
			'name' => 'is_received',
			'goodName' => 'is_received',
			'strField' => 'is_received',
			'sourceSingle' => 'is_received',
			'index' => 19,
			'type' => 11,
			'sqlExpression' => 'is_received',
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
			'tableName' => 'public.device_distributions' 
		),
		'receiving_date' => array(
			'name' => 'receiving_date',
			'goodName' => 'receiving_date',
			'strField' => 'receiving_date',
			'sourceSingle' => 'receiving_date',
			'index' => 20,
			'type' => 135,
			'sqlExpression' => 'receiving_date',
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
			'tableName' => 'public.device_distributions' 
		),
		'started_using' => array(
			'name' => 'started_using',
			'goodName' => 'started_using',
			'strField' => 'started_using',
			'sourceSingle' => 'started_using',
			'index' => 21,
			'type' => 11,
			'sqlExpression' => 'started_using',
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
			'tableName' => 'public.device_distributions' 
		),
		'date_started_using' => array(
			'name' => 'date_started_using',
			'goodName' => 'date_started_using',
			'strField' => 'date_started_using',
			'sourceSingle' => 'date_started_using',
			'index' => 22,
			'type' => 135,
			'sqlExpression' => 'date_started_using',
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
			'tableName' => 'public.device_distributions' 
		) 
	),
	'masterTables' => array( 
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
			'table' => 'public.devices',
			'detailsKeys' => array( 
				'device_type' 
			),
			'masterKeys' => array( 
				'device_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'public.device_distribution_log' 
	),
	'query' => array(
		'sql' => 'SELECT
	distribution_id,
	region_id,
	country_id,
	order_reference,
	facility_id,
	monthly_surgical_volume,
	contact_name,
	contact_email,
	distribution_month,
	distribution_year,
	quantity,
	notes,
	created_at,
	updated_at,
	device_type,
	payment_method,
	transaction_type,
	donor,
	is_received,
	receiving_date,
	started_using,
	date_started_using
FROM
	"public".device_distributions',
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
					'table' => 'public.device_distributions',
					'name' => 'distribution_id' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_id' 
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
					'table' => 'public.device_distributions',
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
					'table' => 'public.device_distributions',
					'name' => 'country_id' 
				),
				'encrypted' => false,
				'columnName' => 'country_id' 
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
					'table' => 'public.device_distributions',
					'name' => 'order_reference' 
				),
				'encrypted' => false,
				'columnName' => 'order_reference' 
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
					'table' => 'public.device_distributions',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
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
					'table' => 'public.device_distributions',
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
					'table' => 'public.device_distributions',
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
					'table' => 'public.device_distributions',
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
					'table' => 'public.device_distributions',
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
					'table' => 'public.device_distributions',
					'name' => 'distribution_year' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_year' 
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
					'table' => 'public.device_distributions',
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
					'table' => 'public.device_distributions',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			),
			array(
				'sql' => 'created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => 'updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
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
					'table' => 'public.device_distributions',
					'name' => 'device_type' 
				),
				'encrypted' => false,
				'columnName' => 'device_type' 
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
					'table' => 'public.device_distributions',
					'name' => 'payment_method' 
				),
				'encrypted' => false,
				'columnName' => 'payment_method' 
			),
			array(
				'sql' => 'transaction_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'transaction_type' 
				),
				'encrypted' => false,
				'columnName' => 'transaction_type' 
			),
			array(
				'sql' => 'donor',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'donor' 
				),
				'encrypted' => false,
				'columnName' => 'donor' 
			),
			array(
				'sql' => 'is_received',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'is_received' 
				),
				'encrypted' => false,
				'columnName' => 'is_received' 
			),
			array(
				'sql' => 'receiving_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'receiving_date' 
				),
				'encrypted' => false,
				'columnName' => 'receiving_date' 
			),
			array(
				'sql' => 'started_using',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'started_using' 
				),
				'encrypted' => false,
				'columnName' => 'started_using' 
			),
			array(
				'sql' => 'date_started_using',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distributions',
					'name' => 'date_started_using' 
				),
				'encrypted' => false,
				'columnName' => 'date_started_using' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".device_distributions',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".device_distributions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'distribution_id',
						'region_id',
						'country_id',
						'order_reference',
						'facility_id',
						'monthly_surgical_volume',
						'contact_name',
						'contact_email',
						'distribution_month',
						'distribution_year',
						'quantity',
						'notes',
						'created_at',
						'updated_at',
						'device_type',
						'payment_method',
						'transaction_type',
						'donor',
						'is_received',
						'receiving_date',
						'started_using',
						'date_started_using' 
					),
					'name' => 'public.device_distributions' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'distribution_id,
	region_id,
	country_id,
	order_reference,
	facility_id,
	monthly_surgical_volume,
	contact_name,
	contact_email,
	distribution_month,
	distribution_year,
	quantity,
	notes,
	created_at,
	updated_at,
	device_type,
	payment_method,
	transaction_type,
	donor,
	is_received,
	receiving_date,
	started_using,
	date_started_using',
		'fromListSql' => 'FROM
	"public".device_distributions',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.device_distributions',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'distribution_id',
			'region_id',
			'country_id',
			'order_reference',
			'facility_id',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'distribution_month',
			'distribution_year',
			'quantity',
			'notes',
			'created_at',
			'updated_at',
			'device_type',
			'payment_method',
			'transaction_type',
			'donor',
			'is_received',
			'receiving_date',
			'started_using',
			'date_started_using' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'distribution_id',
			'region_id',
			'country_id',
			'order_reference',
			'facility_id',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'distribution_month',
			'distribution_year',
			'quantity',
			'notes',
			'created_at',
			'updated_at',
			'device_type',
			'payment_method',
			'transaction_type',
			'donor',
			'is_received',
			'receiving_date',
			'started_using',
			'date_started_using' 
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
	$runnerTableLabels['public.device_distributions'] = array(
	'tableCaption' => 'Device Distributions',
	'fieldLabels' => array(
		'distribution_id' => 'Distribution Id',
		'region_id' => 'Region',
		'country_id' => 'Country',
		'order_reference' => 'Order Reference',
		'facility_id' => 'Facility',
		'monthly_surgical_volume' => 'Monthly Surgical Volume',
		'contact_name' => 'Contact Name',
		'contact_email' => 'Contact Email',
		'distribution_month' => 'Distribution Month',
		'distribution_year' => 'Distribution Year',
		'quantity' => 'Quantity',
		'notes' => 'Notes',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'device_type' => 'Device Type',
		'payment_method' => 'Payment Method',
		'transaction_type' => 'Transaction Type',
		'donor' => 'Donor',
		'is_received' => 'Is Received',
		'receiving_date' => 'Receiving Date',
		'started_using' => 'Started Using',
		'date_started_using' => 'Date Started Using' 
	),
	'fieldTooltips' => array(
		'distribution_id' => '',
		'region_id' => '',
		'country_id' => '',
		'order_reference' => '',
		'facility_id' => '',
		'monthly_surgical_volume' => '',
		'contact_name' => '',
		'contact_email' => '',
		'distribution_month' => '',
		'distribution_year' => '',
		'quantity' => '',
		'notes' => '',
		'created_at' => '',
		'updated_at' => '',
		'device_type' => '',
		'payment_method' => '',
		'transaction_type' => '',
		'donor' => '',
		'is_received' => '',
		'receiving_date' => '',
		'started_using' => '',
		'date_started_using' => '' 
	),
	'fieldPlaceholders' => array(
		'distribution_id' => '',
		'region_id' => '',
		'country_id' => '',
		'order_reference' => '',
		'facility_id' => '',
		'monthly_surgical_volume' => '',
		'contact_name' => '',
		'contact_email' => '',
		'distribution_month' => '',
		'distribution_year' => '',
		'quantity' => '',
		'notes' => '',
		'created_at' => '',
		'updated_at' => '',
		'device_type' => '',
		'payment_method' => '',
		'transaction_type' => '',
		'donor' => '',
		'is_received' => '',
		'receiving_date' => '',
		'started_using' => '',
		'date_started_using' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>