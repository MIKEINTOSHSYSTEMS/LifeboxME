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
	'sql' => '-- USERS

SELECT
    u."ID",
    u.username,
    u.password,
    u.email,

    (
        CASE 
            WHEN u.sex = \'1\' THEN \'Mr. \'
            WHEN u.sex <> \'1\' AND LOWER(COALESCE(u.prefix_title, \'\')) = \'mr\'
                THEN \'\'
            WHEN COALESCE(u.prefix_title, \'\') <> \'\'
                THEN u.prefix_title || \'. \'
            ELSE \'\'
        END ||

        CASE 
            WHEN COALESCE(TRIM(u.fullname), \'\') <> \'\' 
                THEN u.fullname
            ELSE TRIM(
                COALESCE(u.first_name, \'\') || \' \' ||
                COALESCE(u.middle_name || \' \', \'\') ||
                COALESCE(u.last_name, \'\')
            )
        END ||

        CASE 
            WHEN role_label IS NOT NULL 
                THEN \' (\' || role_label || \')\'
            ELSE \'\'
        END
    ) AS fullname,

    u.groupid,
    u.active,
    u.ext_security_id,
    u.userpic,
    u.reset_token,
    u.reset_date,
    u.first_name,
    u.middle_name,
    u.last_name,
    u.sex,
    role_label AS designation_role,
    u.region,
    u.country,
    u.phone,
    u.prefix_title,
    u.api_key

FROM public.users u

LEFT JOIN LATERAL (
    SELECT g."Label" AS role_label
    FROM lifeboxme_ugmembers m
    JOIN lifeboxme_uggroups g 
        ON g."GroupID" = m."GroupID"
    WHERE m."UserName" = u.username
    ORDER BY g."Label"
    LIMIT 1
) r ON true;',
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
			'sqlExpression' => 'u."ID"',
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
			'tableName' => '' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'sourceSingle' => 'username',
			'index' => 2,
			'sqlExpression' => 'u.username',
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
			'tableName' => '' 
		),
		'password' => array(
			'name' => 'password',
			'goodName' => 'password',
			'strField' => 'password',
			'sourceSingle' => 'password',
			'index' => 3,
			'sqlExpression' => 'u.password',
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
			'tableName' => '' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'sourceSingle' => 'email',
			'index' => 4,
			'sqlExpression' => 'u.email',
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
			'tableName' => '' 
		),
		'fullname' => array(
			'name' => 'fullname',
			'goodName' => 'fullname',
			'strField' => 'fullname',
			'sourceSingle' => 'fullname',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => '(
        CASE 
            WHEN u.sex = \'1\' THEN \'Mr. \'
            WHEN u.sex <> \'1\' AND LOWER(COALESCE(u.prefix_title, \'\')) = \'mr\'
                THEN \'\'
            WHEN COALESCE(u.prefix_title, \'\') <> \'\'
                THEN u.prefix_title || \'. \'
            ELSE \'\'
        END ||

        CASE 
            WHEN COALESCE(TRIM(u.fullname), \'\') <> \'\' 
                THEN u.fullname
            ELSE TRIM(
                COALESCE(u.first_name, \'\') || \' \' ||
                COALESCE(u.middle_name || \' \', \'\') ||
                COALESCE(u.last_name, \'\')
            )
        END ||

        CASE 
            WHEN role_label IS NOT NULL 
                THEN \' (\' || role_label || \')\'
            ELSE \'\'
        END
    )',
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
			'sqlExpression' => 'u.groupid',
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
			'tableName' => '' 
		),
		'active' => array(
			'name' => 'active',
			'goodName' => 'active',
			'strField' => 'active',
			'sourceSingle' => 'active',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'u.active',
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
			'tableName' => '' 
		),
		'ext_security_id' => array(
			'name' => 'ext_security_id',
			'goodName' => 'ext_security_id',
			'strField' => 'ext_security_id',
			'sourceSingle' => 'ext_security_id',
			'index' => 8,
			'sqlExpression' => 'u.ext_security_id',
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
			'tableName' => '' 
		),
		'userpic' => array(
			'name' => 'userpic',
			'goodName' => 'userpic',
			'strField' => 'userpic',
			'sourceSingle' => 'userpic',
			'index' => 9,
			'type' => 128,
			'sqlExpression' => 'u.userpic',
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
			'tableName' => '' 
		),
		'reset_token' => array(
			'name' => 'reset_token',
			'goodName' => 'reset_token',
			'strField' => 'reset_token',
			'sourceSingle' => 'reset_token',
			'index' => 10,
			'type' => 201,
			'sqlExpression' => 'u.reset_token',
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
			'tableName' => '' 
		),
		'reset_date' => array(
			'name' => 'reset_date',
			'goodName' => 'reset_date',
			'strField' => 'reset_date',
			'sourceSingle' => 'reset_date',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'u.reset_date',
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
			'tableName' => '' 
		),
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'sourceSingle' => 'first_name',
			'index' => 12,
			'sqlExpression' => 'u.first_name',
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
			'tableName' => '' 
		),
		'middle_name' => array(
			'name' => 'middle_name',
			'goodName' => 'middle_name',
			'strField' => 'middle_name',
			'sourceSingle' => 'middle_name',
			'index' => 13,
			'sqlExpression' => 'u.middle_name',
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
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'sourceSingle' => 'last_name',
			'index' => 14,
			'sqlExpression' => 'u.last_name',
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
		'sex' => array(
			'name' => 'sex',
			'goodName' => 'sex',
			'strField' => 'sex',
			'sourceSingle' => 'sex',
			'index' => 15,
			'sqlExpression' => 'u.sex',
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
			'tableName' => '' 
		),
		'designation_role' => array(
			'name' => 'designation_role',
			'goodName' => 'designation_role',
			'strField' => 'designation_role',
			'sourceSingle' => 'designation_role',
			'index' => 16,
			'sqlExpression' => 'role_label',
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
			'sqlExpression' => 'u.region',
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
			'tableName' => '' 
		),
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'sourceSingle' => 'country',
			'index' => 18,
			'sqlExpression' => 'u.country',
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
			'tableName' => '' 
		),
		'phone' => array(
			'name' => 'phone',
			'goodName' => 'phone',
			'strField' => 'phone',
			'sourceSingle' => 'phone',
			'index' => 19,
			'sqlExpression' => 'u.phone',
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
			'tableName' => '' 
		),
		'prefix_title' => array(
			'name' => 'prefix_title',
			'goodName' => 'prefix_title',
			'strField' => 'prefix_title',
			'sourceSingle' => 'prefix_title',
			'index' => 20,
			'sqlExpression' => 'u.prefix_title',
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
		'api_key' => array(
			'name' => 'api_key',
			'goodName' => 'api_key',
			'strField' => 'api_key',
			'sourceSingle' => 'api_key',
			'index' => 21,
			'sqlExpression' => 'u.api_key',
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
			'tableName' => '' 
		) 
	),
	'query' => array(
		'sql' => '-- USERS

SELECT
    u."ID",
    u.username,
    u.password,
    u.email,

    (
        CASE 
            WHEN u.sex = \'1\' THEN \'Mr. \'
            WHEN u.sex <> \'1\' AND LOWER(COALESCE(u.prefix_title, \'\')) = \'mr\'
                THEN \'\'
            WHEN COALESCE(u.prefix_title, \'\') <> \'\'
                THEN u.prefix_title || \'. \'
            ELSE \'\'
        END ||

        CASE 
            WHEN COALESCE(TRIM(u.fullname), \'\') <> \'\' 
                THEN u.fullname
            ELSE TRIM(
                COALESCE(u.first_name, \'\') || \' \' ||
                COALESCE(u.middle_name || \' \', \'\') ||
                COALESCE(u.last_name, \'\')
            )
        END ||

        CASE 
            WHEN role_label IS NOT NULL 
                THEN \' (\' || role_label || \')\'
            ELSE \'\'
        END
    ) AS fullname,

    u.groupid,
    u.active,
    u.ext_security_id,
    u.userpic,
    u.reset_token,
    u.reset_date,
    u.first_name,
    u.middle_name,
    u.last_name,
    u.sex,
    role_label AS designation_role,
    u.region,
    u.country,
    u.phone,
    u.prefix_title,
    u.api_key

FROM public.users u

LEFT JOIN LATERAL (
    SELECT g."Label" AS role_label
    FROM lifeboxme_ugmembers m
    JOIN lifeboxme_uggroups g 
        ON g."GroupID" = m."GroupID"
    WHERE m."UserName" = u.username
    ORDER BY g."Label"
    LIMIT 1
) r ON true;',
		'parsed' => false,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'u."ID"',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'ID' 
			),
			array(
				'sql' => 'u.username',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'u.password',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'password' 
			),
			array(
				'sql' => 'u.email',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => '(
        CASE 
            WHEN u.sex = \'1\' THEN \'Mr. \'
            WHEN u.sex <> \'1\' AND LOWER(COALESCE(u.prefix_title, \'\')) = \'mr\'
                THEN \'\'
            WHEN COALESCE(u.prefix_title, \'\') <> \'\'
                THEN u.prefix_title || \'. \'
            ELSE \'\'
        END ||

        CASE 
            WHEN COALESCE(TRIM(u.fullname), \'\') <> \'\' 
                THEN u.fullname
            ELSE TRIM(
                COALESCE(u.first_name, \'\') || \' \' ||
                COALESCE(u.middle_name || \' \', \'\') ||
                COALESCE(u.last_name, \'\')
            )
        END ||

        CASE 
            WHEN role_label IS NOT NULL 
                THEN \' (\' || role_label || \')\'
            ELSE \'\'
        END
    )',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => 'fullname',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'fullname' 
			),
			array(
				'sql' => 'u.groupid',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'groupid' 
			),
			array(
				'sql' => 'u.active',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'active' 
			),
			array(
				'sql' => 'u.ext_security_id',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'ext_security_id' 
			),
			array(
				'sql' => 'u.userpic',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'userpic' 
			),
			array(
				'sql' => 'u.reset_token',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'reset_token' 
			),
			array(
				'sql' => 'u.reset_date',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'reset_date' 
			),
			array(
				'sql' => 'u.first_name',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'first_name' 
			),
			array(
				'sql' => 'u.middle_name',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'middle_name' 
			),
			array(
				'sql' => 'u.last_name',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'last_name' 
			),
			array(
				'sql' => 'u.sex',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'sex' 
			),
			array(
				'sql' => 'role_label',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => 'designation_role',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'designation_role' 
			),
			array(
				'sql' => 'u.region',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'region' 
			),
			array(
				'sql' => 'u.country',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'country' 
			),
			array(
				'sql' => 'u.phone',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'phone' 
			),
			array(
				'sql' => 'u.prefix_title',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'prefix_title' 
			),
			array(
				'sql' => 'u.api_key',
				'parsed' => false,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => null,
				'encrypted' => false,
				'columnName' => 'api_key' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'public.users u',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'public.users',
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
				'alias' => 'u',
				'link' => 0 
			),
			array(
				'sql' => 'LEFT JOIN LATERAL (
    SELECT g."Label" AS role_label
    FROM lifeboxme_ugmembers m
    JOIN lifeboxme_uggroups g 
        ON g."GroupID" = m."GroupID"
    WHERE m."UserName" = u.username
    ORDER BY g."Label"
    LIMIT 1
) r ON true',
				'parsed' => false,
				'type' => 'FromListItem',
				'table' => null,
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
				) 
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
			 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'u."ID",
    u.username,
    u.password,
    u.email,

    (
        CASE 
            WHEN u.sex = \'1\' THEN \'Mr. \'
            WHEN u.sex <> \'1\' AND LOWER(COALESCE(u.prefix_title, \'\')) = \'mr\'
                THEN \'\'
            WHEN COALESCE(u.prefix_title, \'\') <> \'\'
                THEN u.prefix_title || \'. \'
            ELSE \'\'
        END ||

        CASE 
            WHEN COALESCE(TRIM(u.fullname), \'\') <> \'\' 
                THEN u.fullname
            ELSE TRIM(
                COALESCE(u.first_name, \'\') || \' \' ||
                COALESCE(u.middle_name || \' \', \'\') ||
                COALESCE(u.last_name, \'\')
            )
        END ||

        CASE 
            WHEN role_label IS NOT NULL 
                THEN \' (\' || role_label || \')\'
            ELSE \'\'
        END
    ) AS fullname,

    u.groupid,
    u.active,
    u.ext_security_id,
    u.userpic,
    u.reset_token,
    u.reset_date,
    u.first_name,
    u.middle_name,
    u.last_name,
    u.sex,
    role_label AS designation_role,
    u.region,
    u.country,
    u.phone,
    u.prefix_title,
    u.api_key',
		'fromListSql' => 'FROM public.users u

LEFT JOIN LATERAL (
    SELECT g."Label" AS role_label
    FROM lifeboxme_ugmembers m
    JOIN lifeboxme_uggroups g 
        ON g."GroupID" = m."GroupID"
    WHERE m."UserName" = u.username
    ORDER BY g."Label"
    LIMIT 1
) r ON true',
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