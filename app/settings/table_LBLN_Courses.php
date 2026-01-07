<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbln_courses'] = array(
	'name' => 'public.lbln_courses',
	'shortName' => 'lbln_courses',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.lbln_courses',
	'afterAddDetail' => 'public.lbln_courses',
	'detailsBadgeColor' => '4682b4',
	'sql' => 'SELECT
	data_id,
	course_id,
	course_title,
	"type",
	categories,
	description,
	name,
	image,
	course_image,
	original_price,
	discount_price,
	final_price,
	"access",
	expires,
	expires_type,
	drip_feed,
	identifiers,
	after_purchase,
	author,
	created,
	modified,
	fetched_at,
	last_updated,
	is_active
FROM
	"public".lbln_courses',
	'keyFields' => array( 
		'data_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'data_id' => array(
			'name' => 'data_id',
			'goodName' => 'data_id',
			'strField' => 'data_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'data_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'course_id' => array(
			'name' => 'course_id',
			'goodName' => 'course_id',
			'strField' => 'course_id',
			'index' => 2,
			'sqlExpression' => 'course_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'course_title' => array(
			'name' => 'course_title',
			'goodName' => 'course_title',
			'strField' => 'course_title',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'course_title',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'type' => array(
			'name' => 'type',
			'goodName' => 'type',
			'strField' => 'type',
			'index' => 4,
			'sqlExpression' => '"type"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'categories' => array(
			'name' => 'categories',
			'goodName' => 'categories',
			'strField' => 'categories',
			'index' => 5,
			'type' => 13,
			'sqlExpression' => 'categories',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'description' => array(
			'name' => 'description',
			'goodName' => 'description',
			'strField' => 'description',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'description',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'index' => 7,
			'sqlExpression' => 'name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'image' => array(
			'name' => 'image',
			'goodName' => 'image',
			'strField' => 'image',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'image',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'course_image' => array(
			'name' => 'course_image',
			'goodName' => 'course_image',
			'strField' => 'course_image',
			'index' => 9,
			'type' => 201,
			'sqlExpression' => 'course_image',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'original_price' => array(
			'name' => 'original_price',
			'goodName' => 'original_price',
			'strField' => 'original_price',
			'index' => 10,
			'type' => 14,
			'sqlExpression' => 'original_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'discount_price' => array(
			'name' => 'discount_price',
			'goodName' => 'discount_price',
			'strField' => 'discount_price',
			'index' => 11,
			'type' => 14,
			'sqlExpression' => 'discount_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'final_price' => array(
			'name' => 'final_price',
			'goodName' => 'final_price',
			'strField' => 'final_price',
			'index' => 12,
			'type' => 14,
			'sqlExpression' => 'final_price',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'access' => array(
			'name' => 'access',
			'goodName' => 'access',
			'strField' => 'access',
			'index' => 13,
			'sqlExpression' => '"access"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'expires' => array(
			'name' => 'expires',
			'goodName' => 'expires',
			'strField' => 'expires',
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'expires',
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
			'tableName' => 'public.lbln_courses' 
		),
		'expires_type' => array(
			'name' => 'expires_type',
			'goodName' => 'expires_type',
			'strField' => 'expires_type',
			'index' => 15,
			'sqlExpression' => 'expires_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'drip_feed' => array(
			'name' => 'drip_feed',
			'goodName' => 'drip_feed',
			'strField' => 'drip_feed',
			'index' => 16,
			'sqlExpression' => 'drip_feed',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'identifiers' => array(
			'name' => 'identifiers',
			'goodName' => 'identifiers',
			'strField' => 'identifiers',
			'index' => 17,
			'type' => 13,
			'sqlExpression' => 'identifiers',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'after_purchase' => array(
			'name' => 'after_purchase',
			'goodName' => 'after_purchase',
			'strField' => 'after_purchase',
			'index' => 18,
			'type' => 13,
			'sqlExpression' => 'after_purchase',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'author' => array(
			'name' => 'author',
			'goodName' => 'author',
			'strField' => 'author',
			'index' => 19,
			'type' => 13,
			'sqlExpression' => 'author',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'created' => array(
			'name' => 'created',
			'goodName' => 'created',
			'strField' => 'created',
			'index' => 20,
			'type' => 3,
			'sqlExpression' => 'created',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'modified' => array(
			'name' => 'modified',
			'goodName' => 'modified',
			'strField' => 'modified',
			'index' => 21,
			'type' => 3,
			'sqlExpression' => 'modified',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_courses' 
		),
		'fetched_at' => array(
			'name' => 'fetched_at',
			'goodName' => 'fetched_at',
			'strField' => 'fetched_at',
			'index' => 22,
			'type' => 135,
			'sqlExpression' => 'fetched_at',
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
			'tableName' => 'public.lbln_courses' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'index' => 23,
			'type' => 135,
			'sqlExpression' => 'last_updated',
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
			'tableName' => 'public.lbln_courses' 
		),
		'is_active' => array(
			'name' => 'is_active',
			'goodName' => 'is_active',
			'strField' => 'is_active',
			'index' => 24,
			'type' => 11,
			'sqlExpression' => 'is_active',
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
			'tableName' => 'public.lbln_courses' 
		) 
	),
	'detailsTables' => array( 
		'public.lbln_course_analytics',
		'public.lbln_course_users' 
	),
	'query' => array(
		'sql' => 'SELECT
	data_id,
	course_id,
	course_title,
	"type",
	categories,
	description,
	name,
	image,
	course_image,
	original_price,
	discount_price,
	final_price,
	"access",
	expires,
	expires_type,
	drip_feed,
	identifiers,
	after_purchase,
	author,
	created,
	modified,
	fetched_at,
	last_updated,
	is_active
FROM
	"public".lbln_courses',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'data_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'data_id' 
				),
				'encrypted' => false,
				'columnName' => 'data_id' 
			),
			array(
				'sql' => 'course_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'course_id' 
				),
				'encrypted' => false,
				'columnName' => 'course_id' 
			),
			array(
				'sql' => 'course_title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'course_title' 
				),
				'encrypted' => false,
				'columnName' => 'course_title' 
			),
			array(
				'sql' => '"type"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'type' 
				),
				'encrypted' => false,
				'columnName' => 'type' 
			),
			array(
				'sql' => 'categories',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'categories' 
				),
				'encrypted' => false,
				'columnName' => 'categories' 
			),
			array(
				'sql' => 'description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'description' 
				),
				'encrypted' => false,
				'columnName' => 'description' 
			),
			array(
				'sql' => 'name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'name' 
				),
				'encrypted' => false,
				'columnName' => 'name' 
			),
			array(
				'sql' => 'image',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'image' 
				),
				'encrypted' => false,
				'columnName' => 'image' 
			),
			array(
				'sql' => 'course_image',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'course_image' 
				),
				'encrypted' => false,
				'columnName' => 'course_image' 
			),
			array(
				'sql' => 'original_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'original_price' 
				),
				'encrypted' => false,
				'columnName' => 'original_price' 
			),
			array(
				'sql' => 'discount_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'discount_price' 
				),
				'encrypted' => false,
				'columnName' => 'discount_price' 
			),
			array(
				'sql' => 'final_price',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'final_price' 
				),
				'encrypted' => false,
				'columnName' => 'final_price' 
			),
			array(
				'sql' => '"access"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'access' 
				),
				'encrypted' => false,
				'columnName' => 'access' 
			),
			array(
				'sql' => 'expires',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'expires' 
				),
				'encrypted' => false,
				'columnName' => 'expires' 
			),
			array(
				'sql' => 'expires_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'expires_type' 
				),
				'encrypted' => false,
				'columnName' => 'expires_type' 
			),
			array(
				'sql' => 'drip_feed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'drip_feed' 
				),
				'encrypted' => false,
				'columnName' => 'drip_feed' 
			),
			array(
				'sql' => 'identifiers',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'identifiers' 
				),
				'encrypted' => false,
				'columnName' => 'identifiers' 
			),
			array(
				'sql' => 'after_purchase',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'after_purchase' 
				),
				'encrypted' => false,
				'columnName' => 'after_purchase' 
			),
			array(
				'sql' => 'author',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'author' 
				),
				'encrypted' => false,
				'columnName' => 'author' 
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
					'table' => 'public.lbln_courses',
					'name' => 'created' 
				),
				'encrypted' => false,
				'columnName' => 'created' 
			),
			array(
				'sql' => 'modified',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'modified' 
				),
				'encrypted' => false,
				'columnName' => 'modified' 
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
					'table' => 'public.lbln_courses',
					'name' => 'fetched_at' 
				),
				'encrypted' => false,
				'columnName' => 'fetched_at' 
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
					'table' => 'public.lbln_courses',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			),
			array(
				'sql' => 'is_active',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_courses',
					'name' => 'is_active' 
				),
				'encrypted' => false,
				'columnName' => 'is_active' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbln_courses',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbln_courses',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'data_id',
						'course_id',
						'course_title',
						'type',
						'categories',
						'description',
						'name',
						'image',
						'course_image',
						'original_price',
						'discount_price',
						'final_price',
						'access',
						'expires',
						'expires_type',
						'drip_feed',
						'identifiers',
						'after_purchase',
						'author',
						'created',
						'modified',
						'fetched_at',
						'last_updated',
						'is_active' 
					),
					'name' => 'public.lbln_courses' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'data_id,
	course_id,
	course_title,
	"type",
	categories,
	description,
	name,
	image,
	course_image,
	original_price,
	discount_price,
	final_price,
	"access",
	expires,
	expires_type,
	drip_feed,
	identifiers,
	after_purchase,
	author,
	created,
	modified,
	fetched_at,
	last_updated,
	is_active',
		'fromListSql' => 'FROM
	"public".lbln_courses',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbln_courses',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'data_id',
			'course_id',
			'course_title',
			'type',
			'categories',
			'description',
			'name',
			'image',
			'course_image',
			'original_price',
			'discount_price',
			'final_price',
			'access',
			'expires',
			'expires_type',
			'drip_feed',
			'identifiers',
			'after_purchase',
			'author',
			'created',
			'modified',
			'fetched_at',
			'last_updated',
			'is_active' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'data_id',
			'course_id',
			'course_title',
			'type',
			'categories',
			'description',
			'name',
			'image',
			'course_image',
			'original_price',
			'discount_price',
			'final_price',
			'access',
			'expires',
			'expires_type',
			'drip_feed',
			'identifiers',
			'after_purchase',
			'author',
			'created',
			'modified',
			'fetched_at',
			'last_updated',
			'is_active' 
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
	$runnerTableLabels['public.lbln_courses'] = array(
	'tableCaption' => 'Lbln Courses',
	'fieldLabels' => array(
		'data_id' => 'Data Id',
		'course_id' => 'Course Id',
		'course_title' => 'Course Title',
		'type' => 'Type',
		'categories' => 'Categories',
		'description' => 'Description',
		'name' => 'Language',
		'image' => 'Image',
		'course_image' => 'Course Image',
		'original_price' => 'Original Price',
		'discount_price' => 'Discount Price',
		'final_price' => 'Final Price',
		'access' => 'Access',
		'expires' => 'Expires',
		'expires_type' => 'Expires Type',
		'drip_feed' => 'Drip Feed',
		'identifiers' => 'Identifiers',
		'after_purchase' => 'After Purchase',
		'author' => 'Author',
		'created' => 'Created',
		'modified' => 'Modified',
		'fetched_at' => 'Fetched At',
		'last_updated' => 'Last Updated',
		'is_active' => 'Is Active' 
	),
	'fieldTooltips' => array(
		'data_id' => '',
		'course_id' => '',
		'course_title' => '',
		'type' => '',
		'categories' => '',
		'description' => '',
		'name' => '',
		'image' => '',
		'course_image' => '',
		'original_price' => '',
		'discount_price' => '',
		'final_price' => '',
		'access' => '',
		'expires' => '',
		'expires_type' => '',
		'drip_feed' => '',
		'identifiers' => '',
		'after_purchase' => '',
		'author' => '',
		'created' => '',
		'modified' => '',
		'fetched_at' => '',
		'last_updated' => '',
		'is_active' => '' 
	),
	'fieldPlaceholders' => array(
		'data_id' => '',
		'course_id' => '',
		'course_title' => '',
		'type' => '',
		'categories' => '',
		'description' => '',
		'name' => '',
		'image' => '',
		'course_image' => '',
		'original_price' => '',
		'discount_price' => '',
		'final_price' => '',
		'access' => '',
		'expires' => '',
		'expires_type' => '',
		'drip_feed' => '',
		'identifiers' => '',
		'after_purchase' => '',
		'author' => '',
		'created' => '',
		'modified' => '',
		'fetched_at' => '',
		'last_updated' => '',
		'is_active' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>