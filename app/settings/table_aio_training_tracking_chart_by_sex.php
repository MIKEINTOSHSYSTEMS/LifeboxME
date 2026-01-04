<?php
global $runnerTableSettings;
$runnerTableSettings['aio_training_tracking Chart by sex'] = array(
	'name' => 'aio_training_tracking Chart by sex',
	'type' => 9,
	'shortName' => 'aio_training_tracking_chart_by_sex',
	'pagesByType' => array(
		'chart' => array( 
			'chart' 
		),
		'masterchart' => array( 
			'masterchart' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'chart' => 'chart',
		'masterchart' => 'masterchart',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'chart' => 'chart',
		'masterchart' => 'masterchart',
		'search' => 'search' 
	),
	'detailsBadgeColor' => 'e8926f',
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
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'participant_id' => array(
			'name' => 'participant_id',
			'goodName' => 'participant_id',
			'strField' => 'participant_id',
			'index' => 1,
			'type' => 3,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'title' => array(
			'name' => 'title',
			'goodName' => 'title',
			'strField' => 'title',
			'index' => 2,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'index' => 3,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'middle_name' => array(
			'name' => 'middle_name',
			'goodName' => 'middle_name',
			'strField' => 'middle_name',
			'index' => 4,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'index' => 5,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'gender' => array(
			'name' => 'gender',
			'goodName' => 'gender',
			'strField' => 'gender',
			'index' => 6,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'search',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'aio_training_tracking',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'gender',
					'lookupDisplayField' => 'gender',
					'lookupUnique' => true,
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
		'participant_role' => array(
			'name' => 'participant_role',
			'goodName' => 'participant_role',
			'strField' => 'participant_role',
			'index' => 7,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'index' => 8,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'search',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'aio_training_tracking',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country',
					'lookupDisplayField' => 'country',
					'lookupUnique' => true,
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
		'facility' => array(
			'name' => 'facility',
			'goodName' => 'facility',
			'strField' => 'facility',
			'index' => 9,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'phone' => array(
			'name' => 'phone',
			'goodName' => 'phone',
			'strField' => 'phone',
			'index' => 10,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Phone Number',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
			'index' => 11,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Email Hyperlink',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'training_id' => array(
			'name' => 'training_id',
			'goodName' => 'training_id',
			'strField' => 'training_id',
			'index' => 12,
			'type' => 3,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'training_name' => array(
			'name' => 'training_name',
			'goodName' => 'training_name',
			'strField' => 'training_name',
			'index' => 13,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'search',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'aio_training_tracking',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'training_name',
					'lookupDisplayField' => 'training_name',
					'lookupUnique' => true,
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
		'program' => array(
			'name' => 'program',
			'goodName' => 'program',
			'strField' => 'program',
			'index' => 14,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'partners' => array(
			'name' => 'partners',
			'goodName' => 'partners',
			'strField' => 'partners',
			'index' => 15,
			'type' => 201,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Text area',
					'pageType' => 'search',
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
		'training_type' => array(
			'name' => 'training_type',
			'goodName' => 'training_type',
			'strField' => 'training_type',
			'index' => 16,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'training_approach' => array(
			'name' => 'training_approach',
			'goodName' => 'training_approach',
			'strField' => 'training_approach',
			'index' => 17,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'training_language' => array(
			'name' => 'training_language',
			'goodName' => 'training_language',
			'strField' => 'training_language',
			'index' => 18,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'training_lead' => array(
			'name' => 'training_lead',
			'goodName' => 'training_lead',
			'strField' => 'training_lead',
			'index' => 19,
			'type' => 201,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Text area',
					'pageType' => 'search',
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
		'quarter' => array(
			'name' => 'quarter',
			'goodName' => 'quarter',
			'strField' => 'quarter',
			'index' => 20,
			'type' => 201,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Text area',
					'pageType' => 'search',
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
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'index' => 21,
			'type' => 7,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Short Date',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Date',
					'pageType' => 'search',
					'required' => true,
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
		'end_date' => array(
			'name' => 'end_date',
			'goodName' => 'end_date',
			'strField' => 'end_date',
			'index' => 22,
			'type' => 7,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Short Date',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Date',
					'pageType' => 'search',
					'required' => true,
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
		'total_days' => array(
			'name' => 'total_days',
			'goodName' => 'total_days',
			'strField' => 'total_days',
			'index' => 23,
			'type' => 3,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'days_recorded' => array(
			'name' => 'days_recorded',
			'goodName' => 'days_recorded',
			'strField' => 'days_recorded',
			'index' => 24,
			'type' => 3,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'days_attended' => array(
			'name' => 'days_attended',
			'goodName' => 'days_attended',
			'strField' => 'days_attended',
			'index' => 25,
			'type' => 3,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'attendance_percentage' => array(
			'name' => 'attendance_percentage',
			'goodName' => 'attendance_percentage',
			'strField' => 'attendance_percentage',
			'index' => 26,
			'type' => 14,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Number',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'attendance_status' => array(
			'name' => 'attendance_status',
			'goodName' => 'attendance_status',
			'strField' => 'attendance_status',
			'index' => 27,
			'type' => 201,
			'viewFormats' => array(
				'chart' => array(
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'format' => 'Text area',
					'pageType' => 'search',
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
		'pre_test_score' => array(
			'name' => 'pre_test_score',
			'goodName' => 'pre_test_score',
			'strField' => 'pre_test_score',
			'index' => 28,
			'type' => 14,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Number',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'post_test_score' => array(
			'name' => 'post_test_score',
			'goodName' => 'post_test_score',
			'strField' => 'post_test_score',
			'index' => 29,
			'type' => 14,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Number',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		'ceu_points' => array(
			'name' => 'ceu_points',
			'goodName' => 'ceu_points',
			'strField' => 'ceu_points',
			'index' => 30,
			'type' => 14,
			'viewFormats' => array(
				'chart' => array(
					'format' => 'Number',
					'pageType' => 'chart',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'search' => array(
					'pageType' => 'search',
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
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'aio_training_tracking',
			'detailsKeys' => array( 
				'participant_id' 
			),
			'masterKeys' => array( 
				'participant_id' 
			) 
		) 
	),
	'originalTable' => 'aio_training_tracking',
	'originalPagesByType' => array(
		'chart' => array( 
			'chart' 
		),
		'masterchart' => array( 
			'masterchart' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'chart' => 'chart',
		'masterchart' => 'masterchart',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'chart' => 'chart',
		'masterchart' => 'masterchart',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'participant_id',
			'title',
			'first_name',
			'middle_name',
			'last_name',
			'gender',
			'participant_role',
			'country',
			'facility',
			'phone',
			'email',
			'training_id',
			'training_name',
			'program',
			'partners',
			'training_type',
			'training_approach',
			'training_language',
			'training_lead',
			'quarter',
			'start_date',
			'end_date',
			'total_days',
			'days_recorded',
			'days_attended',
			'attendance_percentage',
			'attendance_status',
			'pre_test_score',
			'post_test_score',
			'ceu_points' 
		),
		'searchSuggest' => false,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'participant_id',
			'title',
			'first_name',
			'middle_name',
			'last_name',
			'gender',
			'participant_role',
			'country',
			'facility',
			'phone',
			'email',
			'training_id',
			'training_name',
			'program',
			'partners',
			'training_type',
			'training_approach',
			'training_language',
			'training_lead',
			'quarter',
			'start_date',
			'end_date',
			'total_days',
			'days_recorded',
			'days_attended',
			'attendance_percentage',
			'attendance_status',
			'pre_test_score',
			'post_test_score',
			'ceu_points' 
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
		'shape' => '0',
		'style' => '0',
		'is100Stacked' => false,
		'logarithmic' => false,
		'legend' => true,
		'grid' => false,
		'names' => true,
		'values' => true,
		'currency' => false,
		'labelField' => 'gender',
		'labelInterval' => 0,
		'groupChart' => true,
		'width' => 700,
		'height' => 530,
		'preview' => false,
		'animation' => true,
		'ID' => '2d_column',
		'typeNumber' => 24,
		'type' => '2DColumn',
		'is3D' => false,
		'stacked' => false,
		'chartRefresh' => false,
		'chartRefreshTime' => 60,
		'bubbleTransparent' => false,
		'accumInverted' => false,
		'accumulationAppearance' => 0,
		'gaugeAppearance' => 0,
		'lineStyle' => 0,
		'header' => array(
			'text' => 'AIO Training Tracking Chart',
			'type' => 0 
		),
		'footer' => array(
			'text' => 'Gender/Sex',
			'type' => 0 
		),
		'yAxisLabel' => array(
			'text' => 'Score',
			'type' => 0 
		),
		'dataSeries' => array( 
			array(
				'dataField' => 'post_test_score',
				'bubbleSize' => '',
				'open' => '',
				'high' => '',
				'low' => '',
				'close' => '',
				'minValue' => '',
				'maxValue' => '',
				'gaugeColorZones' => array( 
					 
				),
				'total' => 'avg' 
			),
			array(
				'dataField' => 'pre_test_score',
				'bubbleSize' => '',
				'open' => '',
				'high' => '',
				'low' => '',
				'close' => '',
				'minValue' => '',
				'maxValue' => '',
				'gaugeColorZones' => array( 
					 
				),
				'total' => 'avg' 
			) 
		) 
	),
	'dataSourceOperations' => array(
		'selectList' => array(
			'sql' => 'SELECT
  -- Participant Identification
  pas."participant_id" AS "participant_id",
  tp."title_salutation" AS "title",
  pas."first_name" AS "first_name",
  tp."middle_name" AS "middle_name",
  pas."last_name" AS "last_name",
  s."sex_name" AS "gender",
  pr."role_name" AS "participant_role",
  
  -- Participant Contact Info
  c."country_name" AS "country",
  f."facility_name" AS "facility",
  tp."phone" AS "phone",
  pas."email" AS "email",
  
  -- Training Information
  pas."training_id" AS "training_id",
  tc."course_name" AS "training_name",
  p."program_name" AS "program",
  STRING_AGG(part."partner_name", \', \') AS "partners",
  tt."type_name" AS "training_type",
  ta."approach_name" AS "training_approach",
  lang."language_name" AS "training_language",
  ls.lifebox_staff_details AS "training_lead",
  
  -- Training Dates
  ts."quarter" AS "quarter",  
  ts."start_date" AS "start_date",
  ts."end_date" AS "end_date",
  
  -- Attendance Details
  pas."total_days" AS "total_days",
  pas."days_recorded" AS "days_recorded",
  pas."days_attended" AS "days_attended",
  pas."attendance_percentage" AS "attendance_percentage",
  pas."attendance_status" AS "attendance_status",
  
  -- Assessment Results
  pas."pre_test_score" AS "pre_test_score",
  pas."post_test_score" AS "post_test_score",
  pas."ceu_points" AS "ceu_points"
FROM
  "public"."participant_attendance_summary" pas
JOIN
  "public"."training_participants" tp
  ON pas."participant_id" = tp."participant_id"
JOIN
  "public"."sex" s
  ON tp."sex_id" = s."sex_id"
JOIN
  "public"."participant_role" pr
  ON tp."role_id" = pr."role_id"
JOIN
  "public"."facilities" f
  ON tp."facility_id" = f."facility_id"
JOIN
  "public"."countries" c
  ON tp."country_id" = c."country_id"
JOIN
  "public"."training_sessions" ts
  ON pas."training_id" = ts."training_id"
LEFT JOIN
  "public"."training_languages" tl
  ON ts."training_id" = tl."training_id"
LEFT JOIN
  "public"."languages" lang
  ON tl."language_id" = lang."language_id"
LEFT JOIN
  "public"."training_partners" tpart
  ON ts."training_id" = tpart."training_id"
LEFT JOIN
  "public"."partners" part
  ON tpart."partner_id" = part."partner_id"
LEFT JOIN
  "public"."programs" p
  ON ts."program_id" = p."program_id"
LEFT JOIN
  "public"."training_leads" tlead
  ON ts."training_id" = tlead."training_id"
LEFT JOIN (
  SELECT
    staff_id,
    CONCAT(first_name, \' \', last_name, \' | \', email) AS lifebox_staff_details
  FROM 
    "public".lifebox_staff
) ls ON tlead."staff_id" = ls.staff_id
JOIN
  "public"."training_courses" tc
  ON ts."course_id" = tc."course_id"
JOIN
  "public"."training_types" tt
  ON ts."training_type_id" = tt."training_type_id"
JOIN
  "public"."training_approaches" ta
  ON ts."approach_id" = ta."approach_id"
GROUP BY
  pas."participant_id",
  tp."title_salutation",
  pas."first_name",
  tp."middle_name",
  pas."last_name",
  s."sex_name",
  pr."role_name",
  c."country_name",
  f."facility_name",
  tp."phone",
  pas."email",
  pas."training_id",
  ts."quarter", 
  tc."course_name",
  p."program_name",
  lang."language_name",
  tt."type_name",
  ta."approach_name",
  ls.lifebox_staff_details,
  ts."start_date",
  ts."end_date",
  pas."total_days",
  pas."days_recorded",
  pas."days_attended",
  pas."attendance_percentage",
  pas."attendance_status",
  pas."pre_test_score",
  pas."post_test_score",
  pas."ceu_points"
ORDER BY
  pas."participant_id",
  pas."last_name",
  pas."first_name",
  ts."start_date";',
			'enabled' => true,
			'subtype' => 'sql',
			'method' => '',
			'request' => '',
			'type' => 'selectList',
			'payloadFormat' => 4,
			'rawPayload' => false,
			'payloadString' => '',
			'skipFilter' => false,
			'skipOrder' => false,
			'payload' => array( 
				 
			) 
		) 
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
	$runnerTableLabels['aio_training_tracking Chart by sex'] = array(
	'tableCaption' => 'aio_training_tracking Chart by sex',
	'fieldLabels' => array(
		'participant_id' => 'Participant Id',
		'title' => 'Title',
		'first_name' => 'First Name',
		'middle_name' => 'Middle Name',
		'last_name' => 'Last Name',
		'gender' => 'Gender',
		'participant_role' => 'Participant Role',
		'country' => 'Country',
		'facility' => 'Facility',
		'phone' => 'Phone',
		'email' => 'Email',
		'training_id' => 'Training Id',
		'training_name' => 'Training Name',
		'program' => 'Program',
		'partners' => 'Partners',
		'training_type' => 'Training Type',
		'training_approach' => 'Training Approach',
		'training_language' => 'Training Language',
		'training_lead' => 'Training Lead',
		'quarter' => 'Quarter',
		'start_date' => 'Start Date',
		'end_date' => 'End Date',
		'total_days' => 'Total Days',
		'days_recorded' => 'Days Recorded',
		'days_attended' => 'Days Attended',
		'attendance_percentage' => 'Attendance Percentage',
		'attendance_status' => 'Attendance Status',
		'pre_test_score' => 'Pre Test Score',
		'post_test_score' => 'Post Test Score',
		'ceu_points' => 'Ceu Points' 
	),
	'fieldTooltips' => array(
		'participant_id' => '',
		'title' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'gender' => '',
		'participant_role' => '',
		'country' => '',
		'facility' => '',
		'phone' => '',
		'email' => '',
		'training_id' => '',
		'training_name' => '',
		'program' => '',
		'partners' => '',
		'training_type' => '',
		'training_approach' => '',
		'training_language' => '',
		'training_lead' => '',
		'quarter' => '',
		'start_date' => '',
		'end_date' => '',
		'total_days' => '',
		'days_recorded' => '',
		'days_attended' => '',
		'attendance_percentage' => '',
		'attendance_status' => '',
		'pre_test_score' => '',
		'post_test_score' => '',
		'ceu_points' => '' 
	),
	'fieldPlaceholders' => array(
		'participant_id' => '',
		'title' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'gender' => '',
		'participant_role' => '',
		'country' => '',
		'facility' => '',
		'phone' => '',
		'email' => '',
		'training_id' => '',
		'training_name' => '',
		'program' => '',
		'partners' => '',
		'training_type' => '',
		'training_approach' => '',
		'training_language' => '',
		'training_lead' => '',
		'quarter' => '',
		'start_date' => '',
		'end_date' => '',
		'total_days' => '',
		'days_recorded' => '',
		'days_attended' => '',
		'attendance_percentage' => '',
		'attendance_status' => '',
		'pre_test_score' => '',
		'post_test_score' => '',
		'ceu_points' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>