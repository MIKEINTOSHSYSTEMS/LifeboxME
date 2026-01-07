<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbln_course_users'] = array(
	'name' => 'public.lbln_course_users',
	'shortName' => 'lbln_course_users',
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
	'afterEditDetails' => 'public.lbln_course_users',
	'afterAddDetail' => 'public.lbln_course_users',
	'detailsBadgeColor' => '9acd32',
	'displayLoading' => true,
	'sql' => 'SELECT
	data_id,
	course_id,
	course_title,
	user_id,
	email,
	username,
	first_name,
	middle_name,
	last_name,
	subscribed_for_marketing_emails,
	eu_customer,
	is_admin,
	is_instructor,
	is_suspended,
	is_reporter,
	is_affiliate,
	role_level,
	role_name,
	referrer_id,
	created,
	last_login,
	signup_approval_status,
	email_verification_status,
	fields,
	tags,
	utms,
	billing_info,
	nps_score,
	nps_comment,
	fc_country,
	fc_referrer,
	lc_referrer,
	lc_country,
	fetched_at,
	last_seen
FROM
	"public".lbln_course_users
',
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
			'tableName' => 'public.lbln_course_users' 
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
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'public.lbln_courses',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'course_id',
					'lookupDisplayField' => 'course_id' 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
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
			'tableName' => 'public.lbln_course_users' 
		),
		'user_id' => array(
			'name' => 'user_id',
			'goodName' => 'user_id',
			'strField' => 'user_id',
			'index' => 4,
			'sqlExpression' => 'user_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 5,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'index' => 6,
			'sqlExpression' => 'username',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'index' => 7,
			'sqlExpression' => 'first_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'middle_name' => array(
			'name' => 'middle_name',
			'goodName' => 'middle_name',
			'strField' => 'middle_name',
			'index' => 8,
			'sqlExpression' => 'middle_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'index' => 9,
			'sqlExpression' => 'last_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'subscribed_for_marketing_emails' => array(
			'name' => 'subscribed_for_marketing_emails',
			'goodName' => 'subscribed_for_marketing_emails',
			'strField' => 'subscribed_for_marketing_emails',
			'index' => 10,
			'type' => 11,
			'sqlExpression' => 'subscribed_for_marketing_emails',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'eu_customer' => array(
			'name' => 'eu_customer',
			'goodName' => 'eu_customer',
			'strField' => 'eu_customer',
			'index' => 11,
			'type' => 11,
			'sqlExpression' => 'eu_customer',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'is_admin' => array(
			'name' => 'is_admin',
			'goodName' => 'is_admin',
			'strField' => 'is_admin',
			'index' => 12,
			'type' => 11,
			'sqlExpression' => 'is_admin',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'is_instructor' => array(
			'name' => 'is_instructor',
			'goodName' => 'is_instructor',
			'strField' => 'is_instructor',
			'index' => 13,
			'type' => 11,
			'sqlExpression' => 'is_instructor',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'is_suspended' => array(
			'name' => 'is_suspended',
			'goodName' => 'is_suspended',
			'strField' => 'is_suspended',
			'index' => 14,
			'type' => 11,
			'sqlExpression' => 'is_suspended',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'is_reporter' => array(
			'name' => 'is_reporter',
			'goodName' => 'is_reporter',
			'strField' => 'is_reporter',
			'index' => 15,
			'type' => 11,
			'sqlExpression' => 'is_reporter',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'is_affiliate' => array(
			'name' => 'is_affiliate',
			'goodName' => 'is_affiliate',
			'strField' => 'is_affiliate',
			'index' => 16,
			'type' => 11,
			'sqlExpression' => 'is_affiliate',
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
			'tableName' => 'public.lbln_course_users' 
		),
		'role_level' => array(
			'name' => 'role_level',
			'goodName' => 'role_level',
			'strField' => 'role_level',
			'index' => 17,
			'sqlExpression' => 'role_level',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'role_name' => array(
			'name' => 'role_name',
			'goodName' => 'role_name',
			'strField' => 'role_name',
			'index' => 18,
			'sqlExpression' => 'role_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'referrer_id' => array(
			'name' => 'referrer_id',
			'goodName' => 'referrer_id',
			'strField' => 'referrer_id',
			'index' => 19,
			'sqlExpression' => 'referrer_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'created' => array(
			'name' => 'created',
			'goodName' => 'created',
			'strField' => 'created',
			'index' => 20,
			'type' => 5,
			'sqlExpression' => 'created',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'last_login' => array(
			'name' => 'last_login',
			'goodName' => 'last_login',
			'strField' => 'last_login',
			'index' => 21,
			'type' => 5,
			'sqlExpression' => 'last_login',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'signup_approval_status' => array(
			'name' => 'signup_approval_status',
			'goodName' => 'signup_approval_status',
			'strField' => 'signup_approval_status',
			'index' => 22,
			'sqlExpression' => 'signup_approval_status',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'email_verification_status' => array(
			'name' => 'email_verification_status',
			'goodName' => 'email_verification_status',
			'strField' => 'email_verification_status',
			'index' => 23,
			'sqlExpression' => 'email_verification_status',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'fields' => array(
			'name' => 'fields',
			'goodName' => 'fields',
			'strField' => 'fields',
			'index' => 24,
			'type' => 13,
			'sqlExpression' => 'fields',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'tags' => array(
			'name' => 'tags',
			'goodName' => 'tags',
			'strField' => 'tags',
			'index' => 25,
			'type' => 13,
			'sqlExpression' => 'tags',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'utms' => array(
			'name' => 'utms',
			'goodName' => 'utms',
			'strField' => 'utms',
			'index' => 26,
			'type' => 13,
			'sqlExpression' => 'utms',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'billing_info' => array(
			'name' => 'billing_info',
			'goodName' => 'billing_info',
			'strField' => 'billing_info',
			'index' => 27,
			'type' => 13,
			'sqlExpression' => 'billing_info',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'nps_score' => array(
			'name' => 'nps_score',
			'goodName' => 'nps_score',
			'strField' => 'nps_score',
			'index' => 28,
			'type' => 3,
			'sqlExpression' => 'nps_score',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'nps_comment' => array(
			'name' => 'nps_comment',
			'goodName' => 'nps_comment',
			'strField' => 'nps_comment',
			'index' => 29,
			'type' => 201,
			'sqlExpression' => 'nps_comment',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'fc_country' => array(
			'name' => 'fc_country',
			'goodName' => 'fc_country',
			'strField' => 'fc_country',
			'index' => 30,
			'sqlExpression' => 'fc_country',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'fc_referrer' => array(
			'name' => 'fc_referrer',
			'goodName' => 'fc_referrer',
			'strField' => 'fc_referrer',
			'index' => 31,
			'type' => 201,
			'sqlExpression' => 'fc_referrer',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'lc_referrer' => array(
			'name' => 'lc_referrer',
			'goodName' => 'lc_referrer',
			'strField' => 'lc_referrer',
			'index' => 32,
			'type' => 201,
			'sqlExpression' => 'lc_referrer',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'lc_country' => array(
			'name' => 'lc_country',
			'goodName' => 'lc_country',
			'strField' => 'lc_country',
			'index' => 33,
			'sqlExpression' => 'lc_country',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_users' 
		),
		'fetched_at' => array(
			'name' => 'fetched_at',
			'goodName' => 'fetched_at',
			'strField' => 'fetched_at',
			'index' => 34,
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
			'tableName' => 'public.lbln_course_users' 
		),
		'last_seen' => array(
			'name' => 'last_seen',
			'goodName' => 'last_seen',
			'strField' => 'last_seen',
			'index' => 35,
			'type' => 135,
			'sqlExpression' => 'last_seen',
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
			'tableName' => 'public.lbln_course_users' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lbln_courses',
			'detailsKeys' => array( 
				'course_id' 
			),
			'masterKeys' => array( 
				'course_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	data_id,
	course_id,
	course_title,
	user_id,
	email,
	username,
	first_name,
	middle_name,
	last_name,
	subscribed_for_marketing_emails,
	eu_customer,
	is_admin,
	is_instructor,
	is_suspended,
	is_reporter,
	is_affiliate,
	role_level,
	role_name,
	referrer_id,
	created,
	last_login,
	signup_approval_status,
	email_verification_status,
	fields,
	tags,
	utms,
	billing_info,
	nps_score,
	nps_comment,
	fc_country,
	fc_referrer,
	lc_referrer,
	lc_country,
	fetched_at,
	last_seen
FROM
	"public".lbln_course_users
',
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
					'table' => 'public.lbln_course_users',
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
					'table' => 'public.lbln_course_users',
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
					'table' => 'public.lbln_course_users',
					'name' => 'course_title' 
				),
				'encrypted' => false,
				'columnName' => 'course_title' 
			),
			array(
				'sql' => 'user_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'user_id' 
				),
				'encrypted' => false,
				'columnName' => 'user_id' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'username',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'username' 
				),
				'encrypted' => false,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'first_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'first_name' 
				),
				'encrypted' => false,
				'columnName' => 'first_name' 
			),
			array(
				'sql' => 'middle_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'middle_name' 
				),
				'encrypted' => false,
				'columnName' => 'middle_name' 
			),
			array(
				'sql' => 'last_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'last_name' 
				),
				'encrypted' => false,
				'columnName' => 'last_name' 
			),
			array(
				'sql' => 'subscribed_for_marketing_emails',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'subscribed_for_marketing_emails' 
				),
				'encrypted' => false,
				'columnName' => 'subscribed_for_marketing_emails' 
			),
			array(
				'sql' => 'eu_customer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'eu_customer' 
				),
				'encrypted' => false,
				'columnName' => 'eu_customer' 
			),
			array(
				'sql' => 'is_admin',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'is_admin' 
				),
				'encrypted' => false,
				'columnName' => 'is_admin' 
			),
			array(
				'sql' => 'is_instructor',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'is_instructor' 
				),
				'encrypted' => false,
				'columnName' => 'is_instructor' 
			),
			array(
				'sql' => 'is_suspended',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'is_suspended' 
				),
				'encrypted' => false,
				'columnName' => 'is_suspended' 
			),
			array(
				'sql' => 'is_reporter',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'is_reporter' 
				),
				'encrypted' => false,
				'columnName' => 'is_reporter' 
			),
			array(
				'sql' => 'is_affiliate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'is_affiliate' 
				),
				'encrypted' => false,
				'columnName' => 'is_affiliate' 
			),
			array(
				'sql' => 'role_level',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'role_level' 
				),
				'encrypted' => false,
				'columnName' => 'role_level' 
			),
			array(
				'sql' => 'role_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'role_name' 
				),
				'encrypted' => false,
				'columnName' => 'role_name' 
			),
			array(
				'sql' => 'referrer_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'referrer_id' 
				),
				'encrypted' => false,
				'columnName' => 'referrer_id' 
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
					'table' => 'public.lbln_course_users',
					'name' => 'created' 
				),
				'encrypted' => false,
				'columnName' => 'created' 
			),
			array(
				'sql' => 'last_login',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'last_login' 
				),
				'encrypted' => false,
				'columnName' => 'last_login' 
			),
			array(
				'sql' => 'signup_approval_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'signup_approval_status' 
				),
				'encrypted' => false,
				'columnName' => 'signup_approval_status' 
			),
			array(
				'sql' => 'email_verification_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'email_verification_status' 
				),
				'encrypted' => false,
				'columnName' => 'email_verification_status' 
			),
			array(
				'sql' => 'fields',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'fields' 
				),
				'encrypted' => false,
				'columnName' => 'fields' 
			),
			array(
				'sql' => 'tags',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'tags' 
				),
				'encrypted' => false,
				'columnName' => 'tags' 
			),
			array(
				'sql' => 'utms',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'utms' 
				),
				'encrypted' => false,
				'columnName' => 'utms' 
			),
			array(
				'sql' => 'billing_info',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'billing_info' 
				),
				'encrypted' => false,
				'columnName' => 'billing_info' 
			),
			array(
				'sql' => 'nps_score',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'nps_score' 
				),
				'encrypted' => false,
				'columnName' => 'nps_score' 
			),
			array(
				'sql' => 'nps_comment',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'nps_comment' 
				),
				'encrypted' => false,
				'columnName' => 'nps_comment' 
			),
			array(
				'sql' => 'fc_country',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'fc_country' 
				),
				'encrypted' => false,
				'columnName' => 'fc_country' 
			),
			array(
				'sql' => 'fc_referrer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'fc_referrer' 
				),
				'encrypted' => false,
				'columnName' => 'fc_referrer' 
			),
			array(
				'sql' => 'lc_referrer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'lc_referrer' 
				),
				'encrypted' => false,
				'columnName' => 'lc_referrer' 
			),
			array(
				'sql' => 'lc_country',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'lc_country' 
				),
				'encrypted' => false,
				'columnName' => 'lc_country' 
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
					'table' => 'public.lbln_course_users',
					'name' => 'fetched_at' 
				),
				'encrypted' => false,
				'columnName' => 'fetched_at' 
			),
			array(
				'sql' => 'last_seen',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_users',
					'name' => 'last_seen' 
				),
				'encrypted' => false,
				'columnName' => 'last_seen' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbln_course_users',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbln_course_users',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'data_id',
						'course_id',
						'course_title',
						'user_id',
						'email',
						'username',
						'first_name',
						'middle_name',
						'last_name',
						'subscribed_for_marketing_emails',
						'eu_customer',
						'is_admin',
						'is_instructor',
						'is_suspended',
						'is_reporter',
						'is_affiliate',
						'role_level',
						'role_name',
						'referrer_id',
						'created',
						'last_login',
						'signup_approval_status',
						'email_verification_status',
						'fields',
						'tags',
						'utms',
						'billing_info',
						'nps_score',
						'nps_comment',
						'fc_country',
						'fc_referrer',
						'lc_referrer',
						'lc_country',
						'fetched_at',
						'last_seen' 
					),
					'name' => 'public.lbln_course_users' 
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
		'fieldListSql' => 'data_id,
	course_id,
	course_title,
	user_id,
	email,
	username,
	first_name,
	middle_name,
	last_name,
	subscribed_for_marketing_emails,
	eu_customer,
	is_admin,
	is_instructor,
	is_suspended,
	is_reporter,
	is_affiliate,
	role_level,
	role_name,
	referrer_id,
	created,
	last_login,
	signup_approval_status,
	email_verification_status,
	fields,
	tags,
	utms,
	billing_info,
	nps_score,
	nps_comment,
	fc_country,
	fc_referrer,
	lc_referrer,
	lc_country,
	fetched_at,
	last_seen',
		'fromListSql' => 'FROM
	"public".lbln_course_users',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbln_course_users',
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
			'data_id',
			'course_id',
			'course_title',
			'user_id',
			'email',
			'username',
			'first_name',
			'middle_name',
			'last_name',
			'subscribed_for_marketing_emails',
			'eu_customer',
			'is_admin',
			'is_instructor',
			'is_suspended',
			'is_reporter',
			'is_affiliate',
			'role_level',
			'role_name',
			'referrer_id',
			'created',
			'last_login',
			'signup_approval_status',
			'email_verification_status',
			'fields',
			'tags',
			'utms',
			'billing_info',
			'nps_score',
			'nps_comment',
			'fc_country',
			'fc_referrer',
			'lc_referrer',
			'lc_country',
			'fetched_at',
			'last_seen' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'data_id',
			'course_id',
			'course_title',
			'user_id',
			'email',
			'username',
			'first_name',
			'middle_name',
			'last_name',
			'subscribed_for_marketing_emails',
			'eu_customer',
			'is_admin',
			'is_instructor',
			'is_suspended',
			'is_reporter',
			'is_affiliate',
			'role_level',
			'role_name',
			'referrer_id',
			'created',
			'last_login',
			'signup_approval_status',
			'email_verification_status',
			'fields',
			'tags',
			'utms',
			'billing_info',
			'nps_score',
			'nps_comment',
			'fc_country',
			'fc_referrer',
			'lc_referrer',
			'lc_country',
			'fetched_at',
			'last_seen' 
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
	$runnerTableLabels['public.lbln_course_users'] = array(
	'tableCaption' => 'Lbln Course Users',
	'fieldLabels' => array(
		'data_id' => 'Data Id',
		'course_id' => 'Course Id',
		'course_title' => 'Course Title',
		'user_id' => 'User Id',
		'email' => 'Email',
		'username' => 'Username',
		'first_name' => 'First Name',
		'middle_name' => 'Middle Name',
		'last_name' => 'Last Name',
		'subscribed_for_marketing_emails' => 'Subscribed For Marketing Emails',
		'eu_customer' => 'Eu Customer',
		'is_admin' => 'Is Admin',
		'is_instructor' => 'Is Instructor',
		'is_suspended' => 'Is Suspended',
		'is_reporter' => 'Is Reporter',
		'is_affiliate' => 'Is Affiliate',
		'role_level' => 'Role Level',
		'role_name' => 'Role Name',
		'referrer_id' => 'Referrer Id',
		'created' => 'Created',
		'last_login' => 'Last Login',
		'signup_approval_status' => 'Signup Approval Status',
		'email_verification_status' => 'Email Verification Status',
		'fields' => 'Fields',
		'tags' => 'Tags',
		'utms' => 'Utms',
		'billing_info' => 'Billing Info',
		'nps_score' => 'Nps Score',
		'nps_comment' => 'Nps Comment',
		'fc_country' => 'Fc Country',
		'fc_referrer' => 'Fc Referrer',
		'lc_referrer' => 'Lc Referrer',
		'lc_country' => 'Lc Country',
		'fetched_at' => 'Fetched At',
		'last_seen' => 'Last Seen' 
	),
	'fieldTooltips' => array(
		'data_id' => '',
		'course_id' => '',
		'course_title' => '',
		'user_id' => '',
		'email' => '',
		'username' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'subscribed_for_marketing_emails' => '',
		'eu_customer' => '',
		'is_admin' => '',
		'is_instructor' => '',
		'is_suspended' => '',
		'is_reporter' => '',
		'is_affiliate' => '',
		'role_level' => '',
		'role_name' => '',
		'referrer_id' => '',
		'created' => '',
		'last_login' => '',
		'signup_approval_status' => '',
		'email_verification_status' => '',
		'fields' => '',
		'tags' => '',
		'utms' => '',
		'billing_info' => '',
		'nps_score' => '',
		'nps_comment' => '',
		'fc_country' => '',
		'fc_referrer' => '',
		'lc_referrer' => '',
		'lc_country' => '',
		'fetched_at' => '',
		'last_seen' => '' 
	),
	'fieldPlaceholders' => array(
		'data_id' => '',
		'course_id' => '',
		'course_title' => '',
		'user_id' => '',
		'email' => '',
		'username' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'subscribed_for_marketing_emails' => '',
		'eu_customer' => '',
		'is_admin' => '',
		'is_instructor' => '',
		'is_suspended' => '',
		'is_reporter' => '',
		'is_affiliate' => '',
		'role_level' => '',
		'role_name' => '',
		'referrer_id' => '',
		'created' => '',
		'last_login' => '',
		'signup_approval_status' => '',
		'email_verification_status' => '',
		'fields' => '',
		'tags' => '',
		'utms' => '',
		'billing_info' => '',
		'nps_score' => '',
		'nps_comment' => '',
		'fc_country' => '',
		'fc_referrer' => '',
		'lc_referrer' => '',
		'lc_country' => '',
		'fetched_at' => '',
		'last_seen' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>