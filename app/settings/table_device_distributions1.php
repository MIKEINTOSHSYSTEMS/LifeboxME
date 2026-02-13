<?php
global $runnerTableSettings;
$runnerTableSettings['device_distributions_report'] = array(
	'name' => 'device_distributions_report',
	'type' => 2,
	'shortName' => 'device_distributions1',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'report' => array( 
			'report' 
		),
		'rprint' => array( 
			'rprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'report' => 'report',
		'rprint' => 'rprint',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'report' => 'report',
		'rprint' => 'rprint',
		'search' => 'search' 
	),
	'detailsBadgeColor' => '22b1ce',
	'pageSizeGroups' => 1,
	'pageSizePrintGroups' => 1,
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
			'field' => 'distribution_id' 
		) 
	),
	'sql' => 'SELECT
	dd.distribution_id,
	d.device_type,
	dd.order_reference,
	r.region_name,
	c.country_name,
	f.facility_name,
	MAKE_DATE(dd.distribution_year, dd.distribution_month, 1) AS distribution_date,
	tt.transaction_name AS transaction_type,
	pm.method AS payment_method,
	dn.organization_name AS donor,
	dd.quantity,
	dd.contact_name,
	dd.contact_email,
	dd.monthly_surgical_volume,
	dd.notes
FROM
	device_distributions AS dd
	LEFT OUTER JOIN devices AS d ON d.device_id = dd.device_type
	LEFT OUTER JOIN facilities AS f ON f.facility_id = dd.facility_id
	LEFT OUTER JOIN countries AS c ON c.country_id = dd.country_id
	LEFT OUTER JOIN regions AS r ON r.region_id = dd.region_id
	LEFT OUTER JOIN transaction_types AS tt ON tt.id = dd.transaction_type
	LEFT OUTER JOIN payment_methods AS pm ON pm.id = dd.payment_method
	LEFT OUTER JOIN donors AS dn ON dn.id = dd.donor
ORDER BY
	dd.distribution_id
',
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
			'sqlExpression' => 'dd.distribution_id',
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
			'tableName' => 'device_distributions' 
		),
		'order_reference' => array(
			'name' => 'order_reference',
			'goodName' => 'order_reference',
			'strField' => 'order_reference',
			'sourceSingle' => 'order_reference',
			'index' => 3,
			'sqlExpression' => 'dd.order_reference',
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
			'tableName' => 'device_distributions' 
		),
		'monthly_surgical_volume' => array(
			'name' => 'monthly_surgical_volume',
			'goodName' => 'monthly_surgical_volume',
			'strField' => 'monthly_surgical_volume',
			'sourceSingle' => 'monthly_surgical_volume',
			'index' => 14,
			'type' => 3,
			'sqlExpression' => 'dd.monthly_surgical_volume',
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
			'tableName' => 'device_distributions' 
		),
		'contact_name' => array(
			'name' => 'contact_name',
			'goodName' => 'contact_name',
			'strField' => 'contact_name',
			'sourceSingle' => 'contact_name',
			'index' => 12,
			'sqlExpression' => 'dd.contact_name',
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
			'tableName' => 'device_distributions' 
		),
		'contact_email' => array(
			'name' => 'contact_email',
			'goodName' => 'contact_email',
			'strField' => 'contact_email',
			'sourceSingle' => 'contact_email',
			'index' => 13,
			'sqlExpression' => 'dd.contact_email',
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
			'tableName' => 'device_distributions' 
		),
		'quantity' => array(
			'name' => 'quantity',
			'goodName' => 'quantity',
			'strField' => 'quantity',
			'sourceSingle' => 'quantity',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'dd.quantity',
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
			'tableName' => 'device_distributions' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'sourceSingle' => 'notes',
			'index' => 15,
			'type' => 201,
			'sqlExpression' => 'dd.notes',
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
			'tableName' => 'device_distributions' 
		),
		'device_type' => array(
			'name' => 'device_type',
			'goodName' => 'device_type',
			'strField' => 'device_type',
			'sourceSingle' => 'device_type',
			'index' => 2,
			'sqlExpression' => 'd.device_type',
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
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'devices' 
		),
		'payment_method' => array(
			'name' => 'payment_method',
			'goodName' => 'payment_method',
			'strField' => 'method',
			'sourceSingle' => 'payment_method',
			'index' => 9,
			'sqlExpression' => 'pm.method',
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
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'payment_methods' 
		),
		'transaction_type' => array(
			'name' => 'transaction_type',
			'goodName' => 'transaction_type',
			'strField' => 'transaction_name',
			'sourceSingle' => 'transaction_type',
			'index' => 8,
			'sqlExpression' => 'tt.transaction_name',
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
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'transaction_types' 
		),
		'donor' => array(
			'name' => 'donor',
			'goodName' => 'donor',
			'strField' => 'organization_name',
			'sourceSingle' => 'donor',
			'index' => 10,
			'sqlExpression' => 'dn.organization_name',
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
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'donors' 
		),
		'region_name' => array(
			'name' => 'region_name',
			'goodName' => 'region_name',
			'strField' => 'region_name',
			'index' => 4,
			'sqlExpression' => 'r.region_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'device_distributions_report',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'region_name',
					'lookupDisplayField' => 'region_name',
					'lookupOrderBy' => 'region_name',
					'lookupUnique' => true 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'regions' 
		),
		'country_name' => array(
			'name' => 'country_name',
			'goodName' => 'country_name',
			'strField' => 'country_name',
			'index' => 5,
			'sqlExpression' => 'c.country_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'device_distributions_report',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country_name',
					'lookupDisplayField' => 'country_name',
					'lookupOrderBy' => 'country_name',
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'region_name',
							'lookupField' => 'region_name' 
						) 
					) 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'countries' 
		),
		'facility_name' => array(
			'name' => 'facility_name',
			'goodName' => 'facility_name',
			'strField' => 'facility_name',
			'index' => 6,
			'sqlExpression' => 'f.facility_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'device_distributions_report',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'facility_name',
					'lookupDisplayField' => 'facility_name',
					'lookupOrderBy' => 'facility_name',
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'country_name',
							'lookupField' => 'country_name' 
						) 
					) 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'facilities' 
		),
		'distribution_date' => array(
			'name' => 'distribution_date',
			'goodName' => 'distribution_date',
			'strField' => 'distribution_date',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => 'MAKE_DATE(dd.distribution_year, dd.distribution_month, 1)',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'searchOptions' => array( 
				'More than',
				'Less than',
				'Between',
				'Empty',
				'NOT Empty',
				'Contains',
				'Starts with' 
			),
			'filterFormat' => array(
				'format' => 'Interval slider',
				'sliderStepType' => 4,
				'addApplyButton' => true 
			),
			'tableName' => '' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	dd.distribution_id,
	d.device_type,
	dd.order_reference,
	r.region_name,
	c.country_name,
	f.facility_name,
	MAKE_DATE(dd.distribution_year, dd.distribution_month, 1) AS distribution_date,
	tt.transaction_name AS transaction_type,
	pm.method AS payment_method,
	dn.organization_name AS donor,
	dd.quantity,
	dd.contact_name,
	dd.contact_email,
	dd.monthly_surgical_volume,
	dd.notes
FROM
	device_distributions AS dd
	LEFT OUTER JOIN devices AS d ON d.device_id = dd.device_type
	LEFT OUTER JOIN facilities AS f ON f.facility_id = dd.facility_id
	LEFT OUTER JOIN countries AS c ON c.country_id = dd.country_id
	LEFT OUTER JOIN regions AS r ON r.region_id = dd.region_id
	LEFT OUTER JOIN transaction_types AS tt ON tt.id = dd.transaction_type
	LEFT OUTER JOIN payment_methods AS pm ON pm.id = dd.payment_method
	LEFT OUTER JOIN donors AS dn ON dn.id = dd.donor
ORDER BY
	dd.distribution_id
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'dd.distribution_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'distribution_id' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_id' 
			),
			array(
				'sql' => 'd.device_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'd',
					'name' => 'device_type' 
				),
				'encrypted' => false,
				'columnName' => 'device_type' 
			),
			array(
				'sql' => 'dd.order_reference',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'order_reference' 
				),
				'encrypted' => false,
				'columnName' => 'order_reference' 
			),
			array(
				'sql' => 'r.region_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'r',
					'name' => 'region_name' 
				),
				'encrypted' => false,
				'columnName' => 'region_name' 
			),
			array(
				'sql' => 'c.country_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'c',
					'name' => 'country_name' 
				),
				'encrypted' => false,
				'columnName' => 'country_name' 
			),
			array(
				'sql' => 'f.facility_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'f',
					'name' => 'facility_name' 
				),
				'encrypted' => false,
				'columnName' => 'facility_name' 
			),
			array(
				'sql' => 'MAKE_DATE(dd.distribution_year, dd.distribution_month, 1)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'distribution_date',
				'expression' => array(
					'sql' => 'MAKE_DATE(dd.distribution_year, dd.distribution_month, 1)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'dd.distribution_year',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'dd.distribution_month',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '1',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'MAKE_DATE',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'distribution_date' 
			),
			array(
				'sql' => 'tt.transaction_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'transaction_type',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tt',
					'name' => 'transaction_name' 
				),
				'encrypted' => false,
				'columnName' => 'transaction_type' 
			),
			array(
				'sql' => 'pm.method',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'payment_method',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'pm',
					'name' => 'method' 
				),
				'encrypted' => false,
				'columnName' => 'payment_method' 
			),
			array(
				'sql' => 'dn.organization_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'donor',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dn',
					'name' => 'organization_name' 
				),
				'encrypted' => false,
				'columnName' => 'donor' 
			),
			array(
				'sql' => 'dd.quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'quantity' 
				),
				'encrypted' => false,
				'columnName' => 'quantity' 
			),
			array(
				'sql' => 'dd.contact_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'contact_name' 
				),
				'encrypted' => false,
				'columnName' => 'contact_name' 
			),
			array(
				'sql' => 'dd.contact_email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'contact_email' 
				),
				'encrypted' => false,
				'columnName' => 'contact_email' 
			),
			array(
				'sql' => 'dd.monthly_surgical_volume',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'monthly_surgical_volume' 
				),
				'encrypted' => false,
				'columnName' => 'monthly_surgical_volume' 
			),
			array(
				'sql' => 'dd.notes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'device_distributions AS dd',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'device_distributions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'device_distributions' 
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
				'alias' => 'dd',
				'link' => 0 
			),
			array(
				'sql' => 'LEFT OUTER JOIN devices AS d ON d.device_id = dd.device_type',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'devices',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'devices' 
				),
				'joinOn' => array(
					'sql' => 'd.device_id = dd.device_type',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'd',
						'name' => 'device_id' 
					),
					'case' => '= dd.device_type',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'd.device_id = dd.device_type',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'd',
							'name' => 'device_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'device_type' 
						) 
					) 
				),
				'alias' => 'd',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN facilities AS f ON f.facility_id = dd.facility_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'facilities',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'facilities' 
				),
				'joinOn' => array(
					'sql' => 'f.facility_id = dd.facility_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'f',
						'name' => 'facility_id' 
					),
					'case' => '= dd.facility_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'f.facility_id = dd.facility_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'f',
							'name' => 'facility_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'facility_id' 
						) 
					) 
				),
				'alias' => 'f',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN countries AS c ON c.country_id = dd.country_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'countries',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'countries' 
				),
				'joinOn' => array(
					'sql' => 'c.country_id = dd.country_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'c',
						'name' => 'country_id' 
					),
					'case' => '= dd.country_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'c.country_id = dd.country_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'c',
							'name' => 'country_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'country_id' 
						) 
					) 
				),
				'alias' => 'c',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN regions AS r ON r.region_id = dd.region_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'regions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'regions' 
				),
				'joinOn' => array(
					'sql' => 'r.region_id = dd.region_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'r',
						'name' => 'region_id' 
					),
					'case' => '= dd.region_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'r.region_id = dd.region_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'r',
							'name' => 'region_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'region_id' 
						) 
					) 
				),
				'alias' => 'r',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN transaction_types AS tt ON tt.id = dd.transaction_type',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'transaction_types',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'transaction_types' 
				),
				'joinOn' => array(
					'sql' => 'tt.id = dd.transaction_type',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tt',
						'name' => 'id' 
					),
					'case' => '= dd.transaction_type',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tt.id = dd.transaction_type',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tt',
							'name' => 'id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'transaction_type' 
						) 
					) 
				),
				'alias' => 'tt',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN payment_methods AS pm ON pm.id = dd.payment_method',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'payment_methods',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'payment_methods' 
				),
				'joinOn' => array(
					'sql' => 'pm.id = dd.payment_method',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'pm',
						'name' => 'id' 
					),
					'case' => '= dd.payment_method',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'pm.id = dd.payment_method',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'pm',
							'name' => 'id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'payment_method' 
						) 
					) 
				),
				'alias' => 'pm',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN donors AS dn ON dn.id = dd.donor',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'donors',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'donors' 
				),
				'joinOn' => array(
					'sql' => 'dn.id = dd.donor',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'dn',
						'name' => 'id' 
					),
					'case' => '= dd.donor',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'dn.id = dd.donor',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dn',
							'name' => 'id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'dd',
							'name' => 'donor' 
						) 
					) 
				),
				'alias' => 'dn',
				'link' => 3 
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
			array(
				'sql' => 'dd.distribution_id',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'dd',
					'name' => 'distribution_id' 
				),
				'asc' => true,
				'columnNumber' => 1 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'dd.distribution_id,
	d.device_type,
	dd.order_reference,
	r.region_name,
	c.country_name,
	f.facility_name,
	MAKE_DATE(dd.distribution_year, dd.distribution_month, 1) AS distribution_date,
	tt.transaction_name AS transaction_type,
	pm.method AS payment_method,
	dn.organization_name AS donor,
	dd.quantity,
	dd.contact_name,
	dd.contact_email,
	dd.monthly_surgical_volume,
	dd.notes',
		'fromListSql' => 'FROM
	device_distributions AS dd
	LEFT OUTER JOIN devices AS d ON d.device_id = dd.device_type
	LEFT OUTER JOIN facilities AS f ON f.facility_id = dd.facility_id
	LEFT OUTER JOIN countries AS c ON c.country_id = dd.country_id
	LEFT OUTER JOIN regions AS r ON r.region_id = dd.region_id
	LEFT OUTER JOIN transaction_types AS tt ON tt.id = dd.transaction_type
	LEFT OUTER JOIN payment_methods AS pm ON pm.id = dd.payment_method
	LEFT OUTER JOIN donors AS dn ON dn.id = dd.donor',
		'orderBySql' => 'ORDER BY
	dd.distribution_id',
		'tailSql' => '' 
	),
	'originalTable' => 'public.device_distributions',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'report' => array( 
			'report' 
		),
		'rprint' => array( 
			'rprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'report' => 'report',
		'rprint' => 'rprint',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'report' => 'report',
		'rprint' => 'rprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'distribution_id',
			'order_reference',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'quantity',
			'notes',
			'device_type',
			'payment_method',
			'transaction_type',
			'donor',
			'region_name',
			'country_name',
			'facility_name',
			'distribution_date' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'distribution_id',
			'order_reference',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'quantity',
			'notes',
			'device_type',
			'payment_method',
			'transaction_type',
			'donor',
			'region_name',
			'country_name',
			'facility_name',
			'distribution_date' 
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
	$runnerTableLabels['device_distributions_report'] = array(
	'tableCaption' => 'Device Distributions Report',
	'fieldLabels' => array(
		'distribution_id' => 'Distribution Id',
		'order_reference' => 'Order Reference',
		'monthly_surgical_volume' => 'Monthly Surgical Volume',
		'contact_name' => 'Contact Name',
		'contact_email' => 'Contact Email',
		'quantity' => 'Quantity',
		'notes' => 'Notes',
		'device_type' => 'Device Type',
		'payment_method' => 'Payment Method',
		'transaction_type' => 'Transaction Type',
		'donor' => 'Donor',
		'region_name' => 'Region',
		'country_name' => 'Country',
		'facility_name' => 'Facility',
		'distribution_date' => 'Distribution Date' 
	),
	'fieldTooltips' => array(
		'distribution_id' => '',
		'order_reference' => '',
		'monthly_surgical_volume' => '',
		'contact_name' => '',
		'contact_email' => '',
		'quantity' => '',
		'notes' => '',
		'device_type' => '',
		'payment_method' => '',
		'transaction_type' => '',
		'donor' => '',
		'region_name' => '',
		'country_name' => '',
		'facility_name' => '',
		'distribution_date' => '' 
	),
	'fieldPlaceholders' => array(
		'distribution_id' => '',
		'order_reference' => '',
		'monthly_surgical_volume' => '',
		'contact_name' => '',
		'contact_email' => '',
		'quantity' => '',
		'notes' => '',
		'device_type' => '',
		'payment_method' => '',
		'transaction_type' => '',
		'donor' => '',
		'region_name' => '',
		'country_name' => '',
		'facility_name' => '',
		'distribution_date' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>