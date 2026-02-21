<?php
global $runnerTableSettings;
$runnerTableSettings['public.users'] = array(
	'name' => 'public.users',
	'shortName' => 'users',
	'pagesByType' => array(
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'search' => 'search' 
	),
	'defaultPages' => array(
		'search' => 'search' 
	),
	'audit' => true,
	'detailsBadgeColor' => 'CD853F',
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
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
    "ID",
    username,
    password,
    email,
    fullname || 
        CASE 
            WHEN COALESCE(prefix_title, \'\') <> \'\' THEN \' (\' || prefix_title || \')\' 
            ELSE \'\' 
        END AS fullname,
    groupid,
    active,
    ext_security_id,
    userpic,
    reset_token,
    reset_date,
    first_name,
    middle_name,
    last_name,
    sex,
    (
        SELECT g."Label"
        FROM lifeboxme_ugmembers m
        JOIN lifeboxme_uggroups g ON g."GroupID" = m."GroupID"
        WHERE m."UserName" = users.username
        ORDER BY g."Label"
        LIMIT 1
    ) AS designation_role,
    region,
    country,
    phone,
    prefix_title,
    api_key
FROM "public".users;',
	'keyFields' => array( 
		'ID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ID' => array(
			'name' => 'ID',
			'goodName' => 'ID',
			'strField' => 'ID',
			'sourceSingle' => 'ID',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => '"ID"',
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
			'tableName' => 'public.users' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'sourceSingle' => 'username',
			'index' => 2,
			'sqlExpression' => 'username',
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
			'tableName' => 'public.users' 
		),
		'password' => array(
			'name' => 'password',
			'goodName' => 'password',
			'strField' => 'password',
			'sourceSingle' => 'password',
			'index' => 3,
			'sqlExpression' => 'password',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Password',
					'validateAs' => 'Password',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textInsertNull' => true,
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
			'tableName' => 'public.users' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'sourceSingle' => 'email',
			'index' => 4,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Email Hyperlink',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Email',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => 'Email',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.users' 
		),
		'fullname' => array(
			'name' => 'fullname',
			'goodName' => 'fullname',
			'strField' => 'fullname',
			'sourceSingle' => 'fullname',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => 'fullname || 
        CASE 
            WHEN COALESCE(prefix_title, \'\') <> \'\' THEN \' (\' || prefix_title || \')\' 
            ELSE \'\' 
        END',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => '' 
		),
		'groupid' => array(
			'name' => 'groupid',
			'goodName' => 'groupid',
			'strField' => 'groupid',
			'sourceSingle' => 'groupid',
			'index' => 6,
			'sqlExpression' => 'groupid',
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
			'tableName' => 'public.users' 
		),
		'active' => array(
			'name' => 'active',
			'goodName' => 'active',
			'strField' => 'active',
			'sourceSingle' => 'active',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'active',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateAs' => 'Number',
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotalsField' => 'ID' 
			),
			'tableName' => 'public.users' 
		),
		'ext_security_id' => array(
			'name' => 'ext_security_id',
			'goodName' => 'ext_security_id',
			'strField' => 'ext_security_id',
			'sourceSingle' => 'ext_security_id',
			'index' => 8,
			'sqlExpression' => 'ext_security_id',
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
			'tableName' => 'public.users' 
		),
		'userpic' => array(
			'name' => 'userpic',
			'goodName' => 'userpic',
			'strField' => 'userpic',
			'sourceSingle' => 'userpic',
			'index' => 9,
			'type' => 128,
			'sqlExpression' => 'userpic',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Database Image',
					'imageCaptions' => 1,
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Database image',
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
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.users' 
		),
		'reset_token' => array(
			'name' => 'reset_token',
			'goodName' => 'reset_token',
			'strField' => 'reset_token',
			'sourceSingle' => 'reset_token',
			'index' => 10,
			'type' => 201,
			'sqlExpression' => 'reset_token',
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
			'tableName' => 'public.users' 
		),
		'reset_date' => array(
			'name' => 'reset_date',
			'goodName' => 'reset_date',
			'strField' => 'reset_date',
			'sourceSingle' => 'reset_date',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'reset_date',
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
			'tableName' => 'public.users' 
		),
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'sourceSingle' => 'first_name',
			'index' => 12,
			'sqlExpression' => 'first_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'public.users' 
		),
		'middle_name' => array(
			'name' => 'middle_name',
			'goodName' => 'middle_name',
			'strField' => 'middle_name',
			'sourceSingle' => 'middle_name',
			'index' => 13,
			'sqlExpression' => 'middle_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.users' 
		),
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'sourceSingle' => 'last_name',
			'index' => 14,
			'sqlExpression' => 'last_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.users' 
		),
		'sex' => array(
			'name' => 'sex',
			'goodName' => 'sex',
			'strField' => 'sex',
			'sourceSingle' => 'sex',
			'index' => 15,
			'sqlExpression' => 'sex',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.sex',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'sex_id',
					'lookupDisplayField' => 'sex_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.users' 
		),
		'designation_role' => array(
			'name' => 'designation_role',
			'goodName' => 'designation_role',
			'strField' => 'designation_role',
			'sourceSingle' => 'designation_role',
			'index' => 16,
			'sqlExpression' => '(
        SELECT g."Label"
        FROM lifeboxme_ugmembers m
        JOIN lifeboxme_uggroups g ON g."GroupID" = m."GroupID"
        WHERE m."UserName" = users.username
        ORDER BY g."Label"
        LIMIT 1
    )',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly' 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'tableName' => '' 
		),
		'region' => array(
			'name' => 'region',
			'goodName' => 'region',
			'strField' => 'region',
			'sourceSingle' => 'region',
			'index' => 17,
			'sqlExpression' => 'region',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.regions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'region_id',
					'lookupDisplayField' => 'region_name',
					'lookupOrderBy' => 'region_name',
					'lookupWhere' => 'region_id != 8',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.users' 
		),
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'sourceSingle' => 'country',
			'index' => 18,
			'sqlExpression' => 'country',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.countries',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country_id',
					'lookupDisplayField' => 'country_name',
					'lookupOrderBy' => 'country_name',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'region',
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
			'tableName' => 'public.users' 
		),
		'phone' => array(
			'name' => 'phone',
			'goodName' => 'phone',
			'strField' => 'phone',
			'sourceSingle' => 'phone',
			'index' => 19,
			'sqlExpression' => 'phone',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Phone Number',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Telephone',
					'required' => true,
					'validateAs' => 'US Phone Number',
					'textHTML5Input' => '2',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1,
					'pluginInitString' => '$this->settings["required"] = true;                    // Wether is mandatory
$this->settings["tooltip"] = "Click here to enter telephone"; // Information tooltip
$this->settings["initialCountry"] = "et";               // Country default
$this->settings["preferredCountries"] = "et";           // Preferred Country' 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.users' 
		),
		'prefix_title' => array(
			'name' => 'prefix_title',
			'goodName' => 'prefix_title',
			'strField' => 'prefix_title',
			'sourceSingle' => 'prefix_title',
			'index' => 20,
			'sqlExpression' => 'prefix_title',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.users' 
		),
		'api_key' => array(
			'name' => 'api_key',
			'goodName' => 'api_key',
			'strField' => 'api_key',
			'sourceSingle' => 'api_key',
			'index' => 21,
			'sqlExpression' => 'api_key',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'public.users' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
    "ID",
    username,
    password,
    email,
    fullname || 
        CASE 
            WHEN COALESCE(prefix_title, \'\') <> \'\' THEN \' (\' || prefix_title || \')\' 
            ELSE \'\' 
        END AS fullname,
    groupid,
    active,
    ext_security_id,
    userpic,
    reset_token,
    reset_date,
    first_name,
    middle_name,
    last_name,
    sex,
    (
        SELECT g."Label"
        FROM lifeboxme_ugmembers m
        JOIN lifeboxme_uggroups g ON g."GroupID" = m."GroupID"
        WHERE m."UserName" = users.username
        ORDER BY g."Label"
        LIMIT 1
    ) AS designation_role,
    region,
    country,
    phone,
    prefix_title,
    api_key
FROM "public".users;',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => '"ID"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'ID' 
				),
				'encrypted' => false,
				'columnName' => 'ID' 
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
					'table' => 'public.users',
					'name' => 'username' 
				),
				'encrypted' => false,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'password',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'password' 
				),
				'encrypted' => false,
				'columnName' => 'password' 
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
					'table' => 'public.users',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'fullname || 
        CASE 
            WHEN COALESCE(prefix_title, \'\') <> \'\' THEN \' (\' || prefix_title || \')\' 
            ELSE \'\' 
        END',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'fullname',
				'expression' => array(
					'sql' => 'fullname || 
        CASE 
            WHEN COALESCE(prefix_title, \'\') <> \'\' THEN \' (\' || prefix_title || \')\' 
            ELSE \'\' 
        END',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'fullname' 
			),
			array(
				'sql' => 'groupid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'groupid' 
				),
				'encrypted' => false,
				'columnName' => 'groupid' 
			),
			array(
				'sql' => 'active',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'active' 
				),
				'encrypted' => false,
				'columnName' => 'active' 
			),
			array(
				'sql' => 'ext_security_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'ext_security_id' 
				),
				'encrypted' => false,
				'columnName' => 'ext_security_id' 
			),
			array(
				'sql' => 'userpic',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'userpic' 
				),
				'encrypted' => false,
				'columnName' => 'userpic' 
			),
			array(
				'sql' => 'reset_token',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'reset_token' 
				),
				'encrypted' => false,
				'columnName' => 'reset_token' 
			),
			array(
				'sql' => 'reset_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'reset_date' 
				),
				'encrypted' => false,
				'columnName' => 'reset_date' 
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
					'table' => 'public.users',
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
					'table' => 'public.users',
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
					'table' => 'public.users',
					'name' => 'last_name' 
				),
				'encrypted' => false,
				'columnName' => 'last_name' 
			),
			array(
				'sql' => 'sex',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'sex' 
				),
				'encrypted' => false,
				'columnName' => 'sex' 
			),
			array(
				'sql' => '(
        SELECT g."Label"
        FROM lifeboxme_ugmembers m
        JOIN lifeboxme_uggroups g ON g."GroupID" = m."GroupID"
        WHERE m."UserName" = users.username
        ORDER BY g."Label"
        LIMIT 1
    )',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'designation_role',
				'expression' => array(
					'sql' => '(
        SELECT g."Label"
        FROM lifeboxme_ugmembers m
        JOIN lifeboxme_uggroups g ON g."GroupID" = m."GroupID"
        WHERE m."UserName" = users.username
        ORDER BY g."Label"
        LIMIT 1
    )',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'designation_role' 
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
					'table' => 'public.users',
					'name' => 'region' 
				),
				'encrypted' => false,
				'columnName' => 'region' 
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
					'table' => 'public.users',
					'name' => 'country' 
				),
				'encrypted' => false,
				'columnName' => 'country' 
			),
			array(
				'sql' => 'phone',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'phone' 
				),
				'encrypted' => false,
				'columnName' => 'phone' 
			),
			array(
				'sql' => 'prefix_title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'prefix_title' 
				),
				'encrypted' => false,
				'columnName' => 'prefix_title' 
			),
			array(
				'sql' => 'api_key',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.users',
					'name' => 'api_key' 
				),
				'encrypted' => false,
				'columnName' => 'api_key' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".users',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".users',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID',
						'username',
						'password',
						'email',
						'fullname',
						'groupid',
						'active',
						'ext_security_id',
						'userpic',
						'reset_token',
						'reset_date',
						'first_name',
						'middle_name',
						'last_name',
						'sex',
						'designation_role',
						'region',
						'country',
						'phone',
						'prefix_title',
						'api_key' 
					),
					'name' => 'public.users' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => '"ID",
    username,
    password,
    email,
    fullname || 
        CASE 
            WHEN COALESCE(prefix_title, \'\') <> \'\' THEN \' (\' || prefix_title || \')\' 
            ELSE \'\' 
        END AS fullname,
    groupid,
    active,
    ext_security_id,
    userpic,
    reset_token,
    reset_date,
    first_name,
    middle_name,
    last_name,
    sex,
    (
        SELECT g."Label"
        FROM lifeboxme_ugmembers m
        JOIN lifeboxme_uggroups g ON g."GroupID" = m."GroupID"
        WHERE m."UserName" = users.username
        ORDER BY g."Label"
        LIMIT 1
    ) AS designation_role,
    region,
    country,
    phone,
    prefix_title,
    api_key',
		'fromListSql' => 'FROM "public".users',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.users',
	'originalPagesByType' => array(
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'ID',
			'username',
			'password',
			'email',
			'fullname',
			'groupid',
			'active',
			'ext_security_id',
			'reset_token',
			'reset_date',
			'first_name',
			'middle_name',
			'last_name',
			'sex',
			'designation_role',
			'region',
			'country',
			'phone',
			'prefix_title',
			'api_key' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ID',
			'username',
			'password',
			'email',
			'fullname',
			'groupid',
			'active',
			'ext_security_id',
			'first_name',
			'middle_name',
			'last_name',
			'sex',
			'designation_role',
			'region',
			'country',
			'phone',
			'prefix_title',
			'api_key' 
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
	$runnerTableLabels['public.users'] = array(
	'tableCaption' => 'Users',
	'fieldLabels' => array(
		'ID' => 'ID',
		'username' => 'Username',
		'password' => 'Password',
		'email' => 'Email',
		'fullname' => 'Full Name',
		'groupid' => 'Groupid',
		'active' => 'Active',
		'ext_security_id' => 'Ext Security Id',
		'userpic' => 'Userpic',
		'reset_token' => 'Reset Token',
		'reset_date' => 'Reset Date',
		'first_name' => 'First Name',
		'middle_name' => 'Middle Name',
		'last_name' => 'Last Name',
		'sex' => 'Sex',
		'designation_role' => 'Designation Role',
		'region' => 'Region',
		'country' => 'Country',
		'phone' => 'Phone',
		'prefix_title' => 'Prefix Title',
		'api_key' => 'API Key' 
	),
	'fieldTooltips' => array(
		'ID' => '',
		'username' => '',
		'password' => '',
		'email' => '',
		'fullname' => '',
		'groupid' => '',
		'active' => '',
		'ext_security_id' => '',
		'userpic' => '',
		'reset_token' => '',
		'reset_date' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'sex' => '',
		'designation_role' => '',
		'region' => '',
		'country' => '',
		'phone' => '',
		'prefix_title' => '',
		'api_key' => '' 
	),
	'fieldPlaceholders' => array(
		'ID' => '',
		'username' => '',
		'password' => '',
		'email' => '',
		'fullname' => '',
		'groupid' => '',
		'active' => '',
		'ext_security_id' => '',
		'userpic' => '',
		'reset_token' => '',
		'reset_date' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'sex' => '',
		'designation_role' => '',
		'region' => '',
		'country' => '',
		'phone' => '',
		'prefix_title' => '',
		'api_key' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>