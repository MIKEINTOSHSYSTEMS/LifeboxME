<?php
global $runnerTableSettings;
$runnerTableSettings['public.salesforce_device_distribution'] = array(
	'name' => 'public.salesforce_device_distribution',
	'shortName' => 'salesforce_device_distribution',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'view' => array( 
			'view' 
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
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.salesforce_device_distribution',
	'afterAddDetail' => 'public.salesforce_device_distribution',
	'detailsBadgeColor' => '6b8e23',
	'displayLoading' => true,
	'sql' => 'SELECT
	id,
	sf_id,
	sf_name,
	owner_id,
	is_deleted,
	currency_iso_code,
	created_date,
	created_by_id,
	last_modified_date,
	last_modified_by_id,
	system_modstamp,
	last_viewed_date,
	last_referenced_date,
	contact_name,
	email_address,
	contact_number,
	recipient_first_name,
	recipient_last_name,
	device_type,
	type_of_device,
	units,
	country,
	region,
	hospital_name,
	order_reference,
	product_code,
	payment,
	date_field,
	attributes_type,
	attributes_url,
	raw_json,
	created_at,
	updated_at,
	last_synced_at,
	sync_version
FROM
	"public".salesforce_device_distribution',
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
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'sf_id' => array(
			'name' => 'sf_id',
			'goodName' => 'sf_id',
			'strField' => 'sf_id',
			'index' => 2,
			'sqlExpression' => 'sf_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'sf_name' => array(
			'name' => 'sf_name',
			'goodName' => 'sf_name',
			'strField' => 'sf_name',
			'index' => 3,
			'sqlExpression' => 'sf_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'owner_id' => array(
			'name' => 'owner_id',
			'goodName' => 'owner_id',
			'strField' => 'owner_id',
			'index' => 4,
			'sqlExpression' => 'owner_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'is_deleted' => array(
			'name' => 'is_deleted',
			'goodName' => 'is_deleted',
			'strField' => 'is_deleted',
			'index' => 5,
			'type' => 11,
			'sqlExpression' => 'is_deleted',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox' 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'currency_iso_code' => array(
			'name' => 'currency_iso_code',
			'goodName' => 'currency_iso_code',
			'strField' => 'currency_iso_code',
			'index' => 6,
			'sqlExpression' => 'currency_iso_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'created_date' => array(
			'name' => 'created_date',
			'goodName' => 'created_date',
			'strField' => 'created_date',
			'index' => 7,
			'type' => 135,
			'sqlExpression' => 'created_date',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'created_by_id' => array(
			'name' => 'created_by_id',
			'goodName' => 'created_by_id',
			'strField' => 'created_by_id',
			'index' => 8,
			'sqlExpression' => 'created_by_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'last_modified_date' => array(
			'name' => 'last_modified_date',
			'goodName' => 'last_modified_date',
			'strField' => 'last_modified_date',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'last_modified_date',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'last_modified_by_id' => array(
			'name' => 'last_modified_by_id',
			'goodName' => 'last_modified_by_id',
			'strField' => 'last_modified_by_id',
			'index' => 10,
			'sqlExpression' => 'last_modified_by_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'system_modstamp' => array(
			'name' => 'system_modstamp',
			'goodName' => 'system_modstamp',
			'strField' => 'system_modstamp',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'system_modstamp',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'last_viewed_date' => array(
			'name' => 'last_viewed_date',
			'goodName' => 'last_viewed_date',
			'strField' => 'last_viewed_date',
			'index' => 12,
			'type' => 135,
			'sqlExpression' => 'last_viewed_date',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'last_referenced_date' => array(
			'name' => 'last_referenced_date',
			'goodName' => 'last_referenced_date',
			'strField' => 'last_referenced_date',
			'index' => 13,
			'type' => 135,
			'sqlExpression' => 'last_referenced_date',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'contact_name' => array(
			'name' => 'contact_name',
			'goodName' => 'contact_name',
			'strField' => 'contact_name',
			'index' => 14,
			'sqlExpression' => 'contact_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'email_address' => array(
			'name' => 'email_address',
			'goodName' => 'email_address',
			'strField' => 'email_address',
			'index' => 15,
			'sqlExpression' => 'email_address',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'contact_number' => array(
			'name' => 'contact_number',
			'goodName' => 'contact_number',
			'strField' => 'contact_number',
			'index' => 16,
			'sqlExpression' => 'contact_number',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'recipient_first_name' => array(
			'name' => 'recipient_first_name',
			'goodName' => 'recipient_first_name',
			'strField' => 'recipient_first_name',
			'index' => 17,
			'sqlExpression' => 'recipient_first_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'recipient_last_name' => array(
			'name' => 'recipient_last_name',
			'goodName' => 'recipient_last_name',
			'strField' => 'recipient_last_name',
			'index' => 18,
			'sqlExpression' => 'recipient_last_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'device_type' => array(
			'name' => 'device_type',
			'goodName' => 'device_type',
			'strField' => 'device_type',
			'index' => 19,
			'sqlExpression' => 'device_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'type_of_device' => array(
			'name' => 'type_of_device',
			'goodName' => 'type_of_device',
			'strField' => 'type_of_device',
			'index' => 20,
			'sqlExpression' => 'type_of_device',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'units' => array(
			'name' => 'units',
			'goodName' => 'units',
			'strField' => 'units',
			'index' => 21,
			'type' => 14,
			'sqlExpression' => 'units',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'index' => 22,
			'sqlExpression' => 'country',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'region' => array(
			'name' => 'region',
			'goodName' => 'region',
			'strField' => 'region',
			'index' => 23,
			'sqlExpression' => 'region',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'hospital_name' => array(
			'name' => 'hospital_name',
			'goodName' => 'hospital_name',
			'strField' => 'hospital_name',
			'index' => 24,
			'sqlExpression' => 'hospital_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'order_reference' => array(
			'name' => 'order_reference',
			'goodName' => 'order_reference',
			'strField' => 'order_reference',
			'index' => 25,
			'sqlExpression' => 'order_reference',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'product_code' => array(
			'name' => 'product_code',
			'goodName' => 'product_code',
			'strField' => 'product_code',
			'index' => 26,
			'sqlExpression' => 'product_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'payment' => array(
			'name' => 'payment',
			'goodName' => 'payment',
			'strField' => 'payment',
			'index' => 27,
			'sqlExpression' => 'payment',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'date_field' => array(
			'name' => 'date_field',
			'goodName' => 'date_field',
			'strField' => 'date_field',
			'index' => 28,
			'type' => 7,
			'sqlExpression' => 'date_field',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'attributes_type' => array(
			'name' => 'attributes_type',
			'goodName' => 'attributes_type',
			'strField' => 'attributes_type',
			'index' => 29,
			'sqlExpression' => 'attributes_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'attributes_url' => array(
			'name' => 'attributes_url',
			'goodName' => 'attributes_url',
			'strField' => 'attributes_url',
			'index' => 30,
			'type' => 201,
			'sqlExpression' => 'attributes_url',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'raw_json' => array(
			'name' => 'raw_json',
			'goodName' => 'raw_json',
			'strField' => 'raw_json',
			'index' => 31,
			'type' => 13,
			'sqlExpression' => 'raw_json',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 32,
			'type' => 135,
			'sqlExpression' => 'created_at',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 33,
			'type' => 135,
			'sqlExpression' => 'updated_at',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'last_synced_at' => array(
			'name' => 'last_synced_at',
			'goodName' => 'last_synced_at',
			'strField' => 'last_synced_at',
			'index' => 34,
			'type' => 135,
			'sqlExpression' => 'last_synced_at',
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
			'tableName' => 'public.salesforce_device_distribution' 
		),
		'sync_version' => array(
			'name' => 'sync_version',
			'goodName' => 'sync_version',
			'strField' => 'sync_version',
			'index' => 35,
			'type' => 3,
			'sqlExpression' => 'sync_version',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.salesforce_device_distribution' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	sf_id,
	sf_name,
	owner_id,
	is_deleted,
	currency_iso_code,
	created_date,
	created_by_id,
	last_modified_date,
	last_modified_by_id,
	system_modstamp,
	last_viewed_date,
	last_referenced_date,
	contact_name,
	email_address,
	contact_number,
	recipient_first_name,
	recipient_last_name,
	device_type,
	type_of_device,
	units,
	country,
	region,
	hospital_name,
	order_reference,
	product_code,
	payment,
	date_field,
	attributes_type,
	attributes_url,
	raw_json,
	created_at,
	updated_at,
	last_synced_at,
	sync_version
FROM
	"public".salesforce_device_distribution',
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
					'table' => 'public.salesforce_device_distribution',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'sf_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'sf_id' 
				),
				'encrypted' => false,
				'columnName' => 'sf_id' 
			),
			array(
				'sql' => 'sf_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'sf_name' 
				),
				'encrypted' => false,
				'columnName' => 'sf_name' 
			),
			array(
				'sql' => 'owner_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'owner_id' 
				),
				'encrypted' => false,
				'columnName' => 'owner_id' 
			),
			array(
				'sql' => 'is_deleted',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'is_deleted' 
				),
				'encrypted' => false,
				'columnName' => 'is_deleted' 
			),
			array(
				'sql' => 'currency_iso_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'currency_iso_code' 
				),
				'encrypted' => false,
				'columnName' => 'currency_iso_code' 
			),
			array(
				'sql' => 'created_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'created_date' 
				),
				'encrypted' => false,
				'columnName' => 'created_date' 
			),
			array(
				'sql' => 'created_by_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'created_by_id' 
				),
				'encrypted' => false,
				'columnName' => 'created_by_id' 
			),
			array(
				'sql' => 'last_modified_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'last_modified_date' 
				),
				'encrypted' => false,
				'columnName' => 'last_modified_date' 
			),
			array(
				'sql' => 'last_modified_by_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'last_modified_by_id' 
				),
				'encrypted' => false,
				'columnName' => 'last_modified_by_id' 
			),
			array(
				'sql' => 'system_modstamp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'system_modstamp' 
				),
				'encrypted' => false,
				'columnName' => 'system_modstamp' 
			),
			array(
				'sql' => 'last_viewed_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'last_viewed_date' 
				),
				'encrypted' => false,
				'columnName' => 'last_viewed_date' 
			),
			array(
				'sql' => 'last_referenced_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'last_referenced_date' 
				),
				'encrypted' => false,
				'columnName' => 'last_referenced_date' 
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
					'table' => 'public.salesforce_device_distribution',
					'name' => 'contact_name' 
				),
				'encrypted' => false,
				'columnName' => 'contact_name' 
			),
			array(
				'sql' => 'email_address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'email_address' 
				),
				'encrypted' => false,
				'columnName' => 'email_address' 
			),
			array(
				'sql' => 'contact_number',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'contact_number' 
				),
				'encrypted' => false,
				'columnName' => 'contact_number' 
			),
			array(
				'sql' => 'recipient_first_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'recipient_first_name' 
				),
				'encrypted' => false,
				'columnName' => 'recipient_first_name' 
			),
			array(
				'sql' => 'recipient_last_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'recipient_last_name' 
				),
				'encrypted' => false,
				'columnName' => 'recipient_last_name' 
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
					'table' => 'public.salesforce_device_distribution',
					'name' => 'device_type' 
				),
				'encrypted' => false,
				'columnName' => 'device_type' 
			),
			array(
				'sql' => 'type_of_device',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'type_of_device' 
				),
				'encrypted' => false,
				'columnName' => 'type_of_device' 
			),
			array(
				'sql' => 'units',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'units' 
				),
				'encrypted' => false,
				'columnName' => 'units' 
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
					'table' => 'public.salesforce_device_distribution',
					'name' => 'country' 
				),
				'encrypted' => false,
				'columnName' => 'country' 
			),
			array(
				'sql' => 'region',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'region' 
				),
				'encrypted' => false,
				'columnName' => 'region' 
			),
			array(
				'sql' => 'hospital_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'hospital_name' 
				),
				'encrypted' => false,
				'columnName' => 'hospital_name' 
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
					'table' => 'public.salesforce_device_distribution',
					'name' => 'order_reference' 
				),
				'encrypted' => false,
				'columnName' => 'order_reference' 
			),
			array(
				'sql' => 'product_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'product_code' 
				),
				'encrypted' => false,
				'columnName' => 'product_code' 
			),
			array(
				'sql' => 'payment',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'payment' 
				),
				'encrypted' => false,
				'columnName' => 'payment' 
			),
			array(
				'sql' => 'date_field',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'date_field' 
				),
				'encrypted' => false,
				'columnName' => 'date_field' 
			),
			array(
				'sql' => 'attributes_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'attributes_type' 
				),
				'encrypted' => false,
				'columnName' => 'attributes_type' 
			),
			array(
				'sql' => 'attributes_url',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'attributes_url' 
				),
				'encrypted' => false,
				'columnName' => 'attributes_url' 
			),
			array(
				'sql' => 'raw_json',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'raw_json' 
				),
				'encrypted' => false,
				'columnName' => 'raw_json' 
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
					'table' => 'public.salesforce_device_distribution',
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
					'table' => 'public.salesforce_device_distribution',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			),
			array(
				'sql' => 'last_synced_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'last_synced_at' 
				),
				'encrypted' => false,
				'columnName' => 'last_synced_at' 
			),
			array(
				'sql' => 'sync_version',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.salesforce_device_distribution',
					'name' => 'sync_version' 
				),
				'encrypted' => false,
				'columnName' => 'sync_version' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".salesforce_device_distribution',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".salesforce_device_distribution',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'sf_id',
						'sf_name',
						'owner_id',
						'is_deleted',
						'currency_iso_code',
						'created_date',
						'created_by_id',
						'last_modified_date',
						'last_modified_by_id',
						'system_modstamp',
						'last_viewed_date',
						'last_referenced_date',
						'contact_name',
						'email_address',
						'contact_number',
						'recipient_first_name',
						'recipient_last_name',
						'device_type',
						'type_of_device',
						'units',
						'country',
						'region',
						'hospital_name',
						'order_reference',
						'product_code',
						'payment',
						'date_field',
						'attributes_type',
						'attributes_url',
						'raw_json',
						'created_at',
						'updated_at',
						'last_synced_at',
						'sync_version' 
					),
					'name' => 'public.salesforce_device_distribution' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	sf_id,
	sf_name,
	owner_id,
	is_deleted,
	currency_iso_code,
	created_date,
	created_by_id,
	last_modified_date,
	last_modified_by_id,
	system_modstamp,
	last_viewed_date,
	last_referenced_date,
	contact_name,
	email_address,
	contact_number,
	recipient_first_name,
	recipient_last_name,
	device_type,
	type_of_device,
	units,
	country,
	region,
	hospital_name,
	order_reference,
	product_code,
	payment,
	date_field,
	attributes_type,
	attributes_url,
	raw_json,
	created_at,
	updated_at,
	last_synced_at,
	sync_version',
		'fromListSql' => 'FROM
	"public".salesforce_device_distribution',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.salesforce_device_distribution',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'view' => array( 
			'view' 
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
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'sf_id',
			'sf_name',
			'owner_id',
			'is_deleted',
			'currency_iso_code',
			'created_date',
			'created_by_id',
			'last_modified_date',
			'last_modified_by_id',
			'system_modstamp',
			'last_viewed_date',
			'last_referenced_date',
			'contact_name',
			'email_address',
			'contact_number',
			'recipient_first_name',
			'recipient_last_name',
			'device_type',
			'type_of_device',
			'units',
			'country',
			'region',
			'hospital_name',
			'order_reference',
			'product_code',
			'payment',
			'date_field',
			'attributes_type',
			'attributes_url',
			'raw_json',
			'created_at',
			'updated_at',
			'last_synced_at',
			'sync_version' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'sf_id',
			'sf_name',
			'owner_id',
			'is_deleted',
			'currency_iso_code',
			'created_date',
			'created_by_id',
			'last_modified_date',
			'last_modified_by_id',
			'system_modstamp',
			'last_viewed_date',
			'last_referenced_date',
			'contact_name',
			'email_address',
			'contact_number',
			'recipient_first_name',
			'recipient_last_name',
			'device_type',
			'type_of_device',
			'units',
			'country',
			'region',
			'hospital_name',
			'order_reference',
			'product_code',
			'payment',
			'date_field',
			'attributes_type',
			'attributes_url',
			'raw_json',
			'created_at',
			'updated_at',
			'last_synced_at',
			'sync_version' 
		) 
	),
	'connId' => 'lifebox_mesystem_at_localhost',
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
	$runnerTableLabels['public.salesforce_device_distribution'] = array(
	'tableCaption' => 'Salesforce Device Distribution',
	'fieldLabels' => array(
		'id' => 'Id',
		'sf_id' => 'Sf Id',
		'sf_name' => 'Sf Name',
		'owner_id' => 'Owner Id',
		'is_deleted' => 'Is Deleted',
		'currency_iso_code' => 'Currency Iso Code',
		'created_date' => 'Created Date',
		'created_by_id' => 'Created By Id',
		'last_modified_date' => 'Last Modified Date',
		'last_modified_by_id' => 'Last Modified By Id',
		'system_modstamp' => 'System Modstamp',
		'last_viewed_date' => 'Last Viewed Date',
		'last_referenced_date' => 'Last Referenced Date',
		'contact_name' => 'Contact Name',
		'email_address' => 'Email Address',
		'contact_number' => 'Contact Number',
		'recipient_first_name' => 'Recipient First Name',
		'recipient_last_name' => 'Recipient Last Name',
		'device_type' => 'Device Type',
		'type_of_device' => 'Type Of Device',
		'units' => 'Units',
		'country' => 'Country',
		'region' => 'Region',
		'hospital_name' => 'Hospital Name',
		'order_reference' => 'Order Reference',
		'product_code' => 'Product Code',
		'payment' => 'Payment',
		'date_field' => 'Date Field',
		'attributes_type' => 'Attributes Type',
		'attributes_url' => 'Attributes Url',
		'raw_json' => 'Raw Json',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'last_synced_at' => 'Last Synced At',
		'sync_version' => 'Sync Version' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'sf_id' => '',
		'sf_name' => '',
		'owner_id' => '',
		'is_deleted' => '',
		'currency_iso_code' => '',
		'created_date' => '',
		'created_by_id' => '',
		'last_modified_date' => '',
		'last_modified_by_id' => '',
		'system_modstamp' => '',
		'last_viewed_date' => '',
		'last_referenced_date' => '',
		'contact_name' => '',
		'email_address' => '',
		'contact_number' => '',
		'recipient_first_name' => '',
		'recipient_last_name' => '',
		'device_type' => '',
		'type_of_device' => '',
		'units' => '',
		'country' => '',
		'region' => '',
		'hospital_name' => '',
		'order_reference' => '',
		'product_code' => '',
		'payment' => '',
		'date_field' => '',
		'attributes_type' => '',
		'attributes_url' => '',
		'raw_json' => '',
		'created_at' => '',
		'updated_at' => '',
		'last_synced_at' => '',
		'sync_version' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'sf_id' => '',
		'sf_name' => '',
		'owner_id' => '',
		'is_deleted' => '',
		'currency_iso_code' => '',
		'created_date' => '',
		'created_by_id' => '',
		'last_modified_date' => '',
		'last_modified_by_id' => '',
		'system_modstamp' => '',
		'last_viewed_date' => '',
		'last_referenced_date' => '',
		'contact_name' => '',
		'email_address' => '',
		'contact_number' => '',
		'recipient_first_name' => '',
		'recipient_last_name' => '',
		'device_type' => '',
		'type_of_device' => '',
		'units' => '',
		'country' => '',
		'region' => '',
		'hospital_name' => '',
		'order_reference' => '',
		'product_code' => '',
		'payment' => '',
		'date_field' => '',
		'attributes_type' => '',
		'attributes_url' => '',
		'raw_json' => '',
		'created_at' => '',
		'updated_at' => '',
		'last_synced_at' => '',
		'sync_version' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>