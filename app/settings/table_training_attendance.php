<?php
global $runnerTableSettings;
$runnerTableSettings['public.training_attendance'] = array(
	'name' => 'public.training_attendance',
	'shortName' => 'training_attendance',
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
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => 'd2af80',
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
	'sql' => 'SELECT
ta.attendance_id,
ta.day_number,
ta.attended,
ta.attendance_date,
ta.notes,
ta.recorded_at,
ta.recorded_by,
ta.participation_id,
CONCAT(tpp.title_salutation, \' \', tpp.first_name, \' \', COALESCE(tpp.middle_name || \' \', \'\'), tpp.last_name) AS participant_full_name,
s.sex_name,
f.facility_name,
pr.role_name,
ts.training_id,
tc.course_name,
p.program_name,
ts.program_id,
ts.quarter,
ts.start_date,
ts.end_date,
tt.type_name AS training_type,
trapp.approach_name AS training_approach,
c.country_name AS host_country,
r.region_name AS host_region,
v.venue_name,
pt.partner_name,
CONCAT(ls.first_name, \' \', ls.last_name) AS training_lead_name
FROM "public".training_attendance AS ta
INNER JOIN "public".training_participation AS tp ON ta.participation_id = tp.participation_id
INNER JOIN "public".training_participants AS tpp ON tp.participant_id = tpp.participant_id
LEFT OUTER JOIN "public".sex AS s ON tpp.sex_id = s.sex_id
LEFT OUTER JOIN "public".facilities AS f ON tpp.facility_id = f.facility_id
LEFT OUTER JOIN "public".participant_role AS pr ON tpp.role_id = pr.role_id
INNER JOIN "public".training_sessions AS ts ON tp.training_id = ts.training_id
INNER JOIN "public".training_courses AS tc ON ts.course_id = tc.course_id
INNER JOIN "public".programs AS p ON ts.program_id = p.program_id
LEFT OUTER JOIN "public".training_types AS tt ON ts.training_type_id = tt.training_type_id
LEFT OUTER JOIN "public".training_approaches AS trapp ON ts.approach_id = trapp.approach_id
LEFT OUTER JOIN "public".countries AS c ON ts.host_country_id = c.country_id
LEFT OUTER JOIN "public".regions AS r ON c.region_id = r.region_id
LEFT OUTER JOIN "public".venues AS v ON ts.venue_id = v.venue_id
LEFT OUTER JOIN "public".training_partners AS tpr ON ts.training_id = tpr.training_id
LEFT OUTER JOIN "public".partners AS pt ON tpr.partner_id = pt.partner_id
LEFT OUTER JOIN "public".training_leads AS tl ON ts.training_id = tl.training_id
LEFT OUTER JOIN "public".lifebox_staff AS ls ON tl.staff_id = ls.staff_id',
	'keyFields' => array( 
		'attendance_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'attendance_id' => array(
			'name' => 'attendance_id',
			'goodName' => 'attendance_id',
			'strField' => 'attendance_id',
			'sourceSingle' => 'attendance_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ta.attendance_id',
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
			'tableName' => 'public.training_attendance' 
		),
		'day_number' => array(
			'name' => 'day_number',
			'goodName' => 'day_number',
			'strField' => 'day_number',
			'sourceSingle' => 'day_number',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'ta.day_number',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateAs' => 'Number',
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.training_attendance' 
		),
		'attended' => array(
			'name' => 'attended',
			'goodName' => 'attended',
			'strField' => 'attended',
			'sourceSingle' => 'attended',
			'index' => 3,
			'type' => 11,
			'sqlExpression' => 'ta.attended',
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
				'format' => 'Options list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'multilangCheckedMessage' => array(
					'text' => 'True',
					'type' => 0 
				),
				'multilangUncheckedMessage' => array(
					'text' => 'False',
					'type' => 0 
				) 
			),
			'tableName' => 'public.training_attendance' 
		),
		'attendance_date' => array(
			'name' => 'attendance_date',
			'goodName' => 'attendance_date',
			'strField' => 'attendance_date',
			'sourceSingle' => 'attendance_date',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'ta.attendance_date',
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
			'tableName' => 'public.training_attendance' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'sourceSingle' => 'notes',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => 'ta.notes',
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
			'tableName' => 'public.training_attendance' 
		),
		'recorded_at' => array(
			'name' => 'recorded_at',
			'goodName' => 'recorded_at',
			'strField' => 'recorded_at',
			'sourceSingle' => 'recorded_at',
			'index' => 6,
			'type' => 135,
			'sqlExpression' => 'ta.recorded_at',
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
			'tableName' => 'public.training_attendance' 
		),
		'recorded_by' => array(
			'name' => 'recorded_by',
			'goodName' => 'recorded_by',
			'strField' => 'recorded_by',
			'sourceSingle' => 'recorded_by',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'ta.recorded_by',
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
			'tableName' => 'public.training_attendance' 
		),
		'participation_id' => array(
			'name' => 'participation_id',
			'goodName' => 'participation_id',
			'strField' => 'participation_id',
			'sourceSingle' => 'participation_id',
			'index' => 8,
			'type' => 3,
			'sqlExpression' => 'ta.participation_id',
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
					'lookupTable' => 'public.training_participation',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'participation_id',
					'lookupDisplayField' => 'participant_id',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.training_attendance' 
		),
		'participant_full_name' => array(
			'name' => 'participant_full_name',
			'goodName' => 'participant_full_name',
			'strField' => 'participant_full_name',
			'index' => 9,
			'type' => 201,
			'sqlExpression' => 'CONCAT(tpp.title_salutation, \' \', tpp.first_name, \' \', COALESCE(tpp.middle_name || \' \', \'\'), tpp.last_name)',
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
		'sex_name' => array(
			'name' => 'sex_name',
			'goodName' => 'sex_name',
			'strField' => 'sex_name',
			'index' => 10,
			'sqlExpression' => 's.sex_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.training_attendance',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'sex_name',
					'lookupDisplayField' => 'sex_name',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.sex' 
		),
		'facility_name' => array(
			'name' => 'facility_name',
			'goodName' => 'facility_name',
			'strField' => 'facility_name',
			'index' => 11,
			'sqlExpression' => 'f.facility_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.facilities',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'facility_name',
					'lookupDisplayField' => 'facility_name',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.facilities' 
		),
		'role_name' => array(
			'name' => 'role_name',
			'goodName' => 'role_name',
			'strField' => 'role_name',
			'index' => 12,
			'sqlExpression' => 'pr.role_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.participant_role',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'role_name',
					'lookupDisplayField' => 'role_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.participant_role' 
		),
		'training_id' => array(
			'name' => 'training_id',
			'goodName' => 'training_id',
			'strField' => 'training_id',
			'index' => 13,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ts.training_id',
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
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'course_name' => array(
			'name' => 'course_name',
			'goodName' => 'course_name',
			'strField' => 'course_name',
			'index' => 14,
			'sqlExpression' => 'tc.course_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.training_attendance',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'course_name',
					'lookupDisplayField' => 'course_name',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.training_courses' 
		),
		'program_name' => array(
			'name' => 'program_name',
			'goodName' => 'program_name',
			'strField' => 'program_name',
			'index' => 15,
			'sqlExpression' => 'p.program_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.training_attendance',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'program_name',
					'lookupDisplayField' => 'program_name',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.programs' 
		),
		'program_id' => array(
			'name' => 'program_id',
			'goodName' => 'program_id',
			'strField' => 'program_id',
			'index' => 16,
			'type' => 3,
			'sqlExpression' => 'ts.program_id',
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
			'tableName' => 'public.training_sessions' 
		),
		'quarter' => array(
			'name' => 'quarter',
			'goodName' => 'quarter',
			'strField' => 'quarter',
			'index' => 17,
			'type' => 201,
			'sqlExpression' => 'ts.quarter',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.training_attendance',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'quarter',
					'lookupDisplayField' => 'quarter',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.training_sessions' 
		),
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'index' => 18,
			'type' => 7,
			'sqlExpression' => 'ts.start_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
			'tableName' => 'public.training_sessions' 
		),
		'end_date' => array(
			'name' => 'end_date',
			'goodName' => 'end_date',
			'strField' => 'end_date',
			'index' => 19,
			'type' => 7,
			'sqlExpression' => 'ts.end_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
			'tableName' => 'public.training_sessions' 
		),
		'training_type' => array(
			'name' => 'training_type',
			'goodName' => 'training_type',
			'strField' => 'type_name',
			'index' => 20,
			'sqlExpression' => 'tt.type_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.training_types',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'type_name',
					'lookupDisplayField' => 'type_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.training_types' 
		),
		'training_approach' => array(
			'name' => 'training_approach',
			'goodName' => 'training_approach',
			'strField' => 'approach_name',
			'index' => 21,
			'sqlExpression' => 'trapp.approach_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.training_approaches',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'approach_name',
					'lookupDisplayField' => 'approach_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.training_approaches' 
		),
		'host_country' => array(
			'name' => 'host_country',
			'goodName' => 'host_country',
			'strField' => 'country_name',
			'index' => 22,
			'sqlExpression' => 'c.country_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.countries',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country_name',
					'lookupDisplayField' => 'country_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.countries' 
		),
		'host_region' => array(
			'name' => 'host_region',
			'goodName' => 'host_region',
			'strField' => 'region_name',
			'index' => 23,
			'sqlExpression' => 'r.region_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.regions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'region_name',
					'lookupDisplayField' => 'region_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.regions' 
		),
		'venue_name' => array(
			'name' => 'venue_name',
			'goodName' => 'venue_name',
			'strField' => 'venue_name',
			'index' => 24,
			'sqlExpression' => 'v.venue_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.venues',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'venue_name',
					'lookupDisplayField' => 'venue_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.venues' 
		),
		'partner_name' => array(
			'name' => 'partner_name',
			'goodName' => 'partner_name',
			'strField' => 'partner_name',
			'index' => 25,
			'sqlExpression' => 'pt.partner_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.partners',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'partner_name',
					'lookupDisplayField' => 'partner_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => 'public.partners' 
		),
		'training_lead_name' => array(
			'name' => 'training_lead_name',
			'goodName' => 'training_lead_name',
			'strField' => 'training_lead_name',
			'index' => 26,
			'type' => 201,
			'sqlExpression' => 'CONCAT(ls.first_name, \' \', ls.last_name)',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.lifebox_staff',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'lifebox_staff_details',
					'lookupDisplayField' => 'lifebox_staff_details',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'attendance_id',
				'filterMultiselect' => 2 
			),
			'tableName' => '' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.training_participation',
			'detailsKeys' => array( 
				'participation_id' 
			),
			'masterKeys' => array( 
				'participation_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
ta.attendance_id,
ta.day_number,
ta.attended,
ta.attendance_date,
ta.notes,
ta.recorded_at,
ta.recorded_by,
ta.participation_id,
CONCAT(tpp.title_salutation, \' \', tpp.first_name, \' \', COALESCE(tpp.middle_name || \' \', \'\'), tpp.last_name) AS participant_full_name,
s.sex_name,
f.facility_name,
pr.role_name,
ts.training_id,
tc.course_name,
p.program_name,
ts.program_id,
ts.quarter,
ts.start_date,
ts.end_date,
tt.type_name AS training_type,
trapp.approach_name AS training_approach,
c.country_name AS host_country,
r.region_name AS host_region,
v.venue_name,
pt.partner_name,
CONCAT(ls.first_name, \' \', ls.last_name) AS training_lead_name
FROM "public".training_attendance AS ta
INNER JOIN "public".training_participation AS tp ON ta.participation_id = tp.participation_id
INNER JOIN "public".training_participants AS tpp ON tp.participant_id = tpp.participant_id
LEFT OUTER JOIN "public".sex AS s ON tpp.sex_id = s.sex_id
LEFT OUTER JOIN "public".facilities AS f ON tpp.facility_id = f.facility_id
LEFT OUTER JOIN "public".participant_role AS pr ON tpp.role_id = pr.role_id
INNER JOIN "public".training_sessions AS ts ON tp.training_id = ts.training_id
INNER JOIN "public".training_courses AS tc ON ts.course_id = tc.course_id
INNER JOIN "public".programs AS p ON ts.program_id = p.program_id
LEFT OUTER JOIN "public".training_types AS tt ON ts.training_type_id = tt.training_type_id
LEFT OUTER JOIN "public".training_approaches AS trapp ON ts.approach_id = trapp.approach_id
LEFT OUTER JOIN "public".countries AS c ON ts.host_country_id = c.country_id
LEFT OUTER JOIN "public".regions AS r ON c.region_id = r.region_id
LEFT OUTER JOIN "public".venues AS v ON ts.venue_id = v.venue_id
LEFT OUTER JOIN "public".training_partners AS tpr ON ts.training_id = tpr.training_id
LEFT OUTER JOIN "public".partners AS pt ON tpr.partner_id = pt.partner_id
LEFT OUTER JOIN "public".training_leads AS tl ON ts.training_id = tl.training_id
LEFT OUTER JOIN "public".lifebox_staff AS ls ON tl.staff_id = ls.staff_id',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ta.attendance_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'attendance_id' 
				),
				'encrypted' => false,
				'columnName' => 'attendance_id' 
			),
			array(
				'sql' => 'ta.day_number',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'day_number' 
				),
				'encrypted' => false,
				'columnName' => 'day_number' 
			),
			array(
				'sql' => 'ta.attended',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'attended' 
				),
				'encrypted' => false,
				'columnName' => 'attended' 
			),
			array(
				'sql' => 'ta.attendance_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'attendance_date' 
				),
				'encrypted' => false,
				'columnName' => 'attendance_date' 
			),
			array(
				'sql' => 'ta.notes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			),
			array(
				'sql' => 'ta.recorded_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'recorded_at' 
				),
				'encrypted' => false,
				'columnName' => 'recorded_at' 
			),
			array(
				'sql' => 'ta.recorded_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'recorded_by' 
				),
				'encrypted' => false,
				'columnName' => 'recorded_by' 
			),
			array(
				'sql' => 'ta.participation_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ta',
					'name' => 'participation_id' 
				),
				'encrypted' => false,
				'columnName' => 'participation_id' 
			),
			array(
				'sql' => 'CONCAT(tpp.title_salutation, \' \', tpp.first_name, \' \', COALESCE(tpp.middle_name || \' \', \'\'), tpp.last_name)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'participant_full_name',
				'expression' => array(
					'sql' => 'CONCAT(tpp.title_salutation, \' \', tpp.first_name, \' \', COALESCE(tpp.middle_name || \' \', \'\'), tpp.last_name)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'tpp.title_salutation',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'tpp.first_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'COALESCE(tpp.middle_name || \' \', \'\')',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'tpp.last_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'participant_full_name' 
			),
			array(
				'sql' => 's.sex_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 's',
					'name' => 'sex_name' 
				),
				'encrypted' => false,
				'columnName' => 'sex_name' 
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
				'sql' => 'pr.role_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'pr',
					'name' => 'role_name' 
				),
				'encrypted' => false,
				'columnName' => 'role_name' 
			),
			array(
				'sql' => 'ts.training_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ts',
					'name' => 'training_id' 
				),
				'encrypted' => false,
				'columnName' => 'training_id' 
			),
			array(
				'sql' => 'tc.course_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tc',
					'name' => 'course_name' 
				),
				'encrypted' => false,
				'columnName' => 'course_name' 
			),
			array(
				'sql' => 'p.program_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'p',
					'name' => 'program_name' 
				),
				'encrypted' => false,
				'columnName' => 'program_name' 
			),
			array(
				'sql' => 'ts.program_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ts',
					'name' => 'program_id' 
				),
				'encrypted' => false,
				'columnName' => 'program_id' 
			),
			array(
				'sql' => 'ts.quarter',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ts',
					'name' => 'quarter' 
				),
				'encrypted' => false,
				'columnName' => 'quarter' 
			),
			array(
				'sql' => 'ts.start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ts',
					'name' => 'start_date' 
				),
				'encrypted' => false,
				'columnName' => 'start_date' 
			),
			array(
				'sql' => 'ts.end_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ts',
					'name' => 'end_date' 
				),
				'encrypted' => false,
				'columnName' => 'end_date' 
			),
			array(
				'sql' => 'tt.type_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'training_type',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tt',
					'name' => 'type_name' 
				),
				'encrypted' => false,
				'columnName' => 'training_type' 
			),
			array(
				'sql' => 'trapp.approach_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'training_approach',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'trapp',
					'name' => 'approach_name' 
				),
				'encrypted' => false,
				'columnName' => 'training_approach' 
			),
			array(
				'sql' => 'c.country_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'host_country',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'c',
					'name' => 'country_name' 
				),
				'encrypted' => false,
				'columnName' => 'host_country' 
			),
			array(
				'sql' => 'r.region_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'host_region',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'r',
					'name' => 'region_name' 
				),
				'encrypted' => false,
				'columnName' => 'host_region' 
			),
			array(
				'sql' => 'v.venue_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'v',
					'name' => 'venue_name' 
				),
				'encrypted' => false,
				'columnName' => 'venue_name' 
			),
			array(
				'sql' => 'pt.partner_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'pt',
					'name' => 'partner_name' 
				),
				'encrypted' => false,
				'columnName' => 'partner_name' 
			),
			array(
				'sql' => 'CONCAT(ls.first_name, \' \', ls.last_name)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'training_lead_name',
				'expression' => array(
					'sql' => 'CONCAT(ls.first_name, \' \', ls.last_name)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'ls.first_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'ls.last_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'training_lead_name' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".training_attendance AS ta',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_attendance',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'attendance_id',
						'day_number',
						'attended',
						'attendance_date',
						'notes',
						'recorded_at',
						'recorded_by',
						'participation_id' 
					),
					'name' => 'public.training_attendance' 
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
				'alias' => 'ta',
				'link' => 0 
			),
			array(
				'sql' => 'INNER JOIN "public".training_participation AS tp ON ta.participation_id = tp.participation_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_participation',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'participation_id',
						'participant_id',
						'training_id',
						'created_at',
						'pre_test_score',
						'post_test_score',
						'ceu_points' 
					),
					'name' => 'public.training_participation' 
				),
				'joinOn' => array(
					'sql' => 'tp.participation_id = ta.participation_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tp',
						'name' => 'participation_id' 
					),
					'case' => '= ta.participation_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ta.participation_id = tp.participation_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tp',
							'name' => 'participation_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ta',
							'name' => 'participation_id' 
						) 
					) 
				),
				'alias' => 'tp',
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN "public".training_participants AS tpp ON tp.participant_id = tpp.participant_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_participants',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'participant_id',
						'first_name',
						'last_name',
						'sex_id',
						'role_id',
						'facility_id',
						'phone',
						'email',
						'country_id',
						'training_date',
						'created_at',
						'updated_at',
						'venue_id',
						'title_salutation',
						'middle_name' 
					),
					'name' => 'public.training_participants' 
				),
				'joinOn' => array(
					'sql' => 'tpp.participant_id = tp.participant_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tpp',
						'name' => 'participant_id' 
					),
					'case' => '= tp.participant_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tp.participant_id = tpp.participant_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tpp',
							'name' => 'participant_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tp',
							'name' => 'participant_id' 
						) 
					) 
				),
				'alias' => 'tpp',
				'link' => 1 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".sex AS s ON tpp.sex_id = s.sex_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".sex',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'sex_id',
						'sex_name',
						'description',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.sex' 
				),
				'joinOn' => array(
					'sql' => 's.sex_id = tpp.sex_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 's',
						'name' => 'sex_id' 
					),
					'case' => '= tpp.sex_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tpp.sex_id = s.sex_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 's',
							'name' => 'sex_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tpp',
							'name' => 'sex_id' 
						) 
					) 
				),
				'alias' => 's',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".facilities AS f ON tpp.facility_id = f.facility_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".facilities',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'facility_id',
						'facility_name',
						'country_id',
						'facility_type',
						'address',
						'city',
						'latitude',
						'longitude',
						'is_active',
						'created_at',
						'updated_at',
						'region_id' 
					),
					'name' => 'public.facilities' 
				),
				'joinOn' => array(
					'sql' => 'f.facility_id = tpp.facility_id',
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
					'case' => '= tpp.facility_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tpp.facility_id = f.facility_id',
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
							'table' => 'tpp',
							'name' => 'facility_id' 
						) 
					) 
				),
				'alias' => 'f',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".participant_role AS pr ON tpp.role_id = pr.role_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".participant_role',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'role_id',
						'role_name',
						'description',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.participant_role' 
				),
				'joinOn' => array(
					'sql' => 'pr.role_id = tpp.role_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'pr',
						'name' => 'role_id' 
					),
					'case' => '= tpp.role_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tpp.role_id = pr.role_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'pr',
							'name' => 'role_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tpp',
							'name' => 'role_id' 
						) 
					) 
				),
				'alias' => 'pr',
				'link' => 3 
			),
			array(
				'sql' => 'INNER JOIN "public".training_sessions AS ts ON tp.training_id = ts.training_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_sessions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'training_id',
						'course_id',
						'training_type',
						'training_approach',
						'program',
						'quarter',
						'start_date',
						'end_date',
						'facility_id',
						'host_country_id',
						'ceu_points',
						'num_participants',
						'avg_pre_test_score',
						'avg_post_test_score',
						'remarks',
						'created_at',
						'updated_at',
						'training_type_id',
						'approach_id',
						'program_id',
						'venue_id' 
					),
					'name' => 'public.training_sessions' 
				),
				'joinOn' => array(
					'sql' => 'ts.training_id = tp.training_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'ts',
						'name' => 'training_id' 
					),
					'case' => '= tp.training_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tp.training_id = ts.training_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'training_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tp',
							'name' => 'training_id' 
						) 
					) 
				),
				'alias' => 'ts',
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN "public".training_courses AS tc ON ts.course_id = tc.course_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_courses',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'course_id',
						'course_name',
						'description',
						'duration_hours',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.training_courses' 
				),
				'joinOn' => array(
					'sql' => 'tc.course_id = ts.course_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tc',
						'name' => 'course_id' 
					),
					'case' => '= ts.course_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.course_id = tc.course_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tc',
							'name' => 'course_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'course_id' 
						) 
					) 
				),
				'alias' => 'tc',
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN "public".programs AS p ON ts.program_id = p.program_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".programs',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'program_id',
						'program_name',
						'description',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.programs' 
				),
				'joinOn' => array(
					'sql' => 'p.program_id = ts.program_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'p',
						'name' => 'program_id' 
					),
					'case' => '= ts.program_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.program_id = p.program_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'p',
							'name' => 'program_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'program_id' 
						) 
					) 
				),
				'alias' => 'p',
				'link' => 1 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".training_types AS tt ON ts.training_type_id = tt.training_type_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_types',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'training_type_id',
						'type_name',
						'description',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.training_types' 
				),
				'joinOn' => array(
					'sql' => 'tt.training_type_id = ts.training_type_id',
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
						'name' => 'training_type_id' 
					),
					'case' => '= ts.training_type_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.training_type_id = tt.training_type_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tt',
							'name' => 'training_type_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'training_type_id' 
						) 
					) 
				),
				'alias' => 'tt',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".training_approaches AS trapp ON ts.approach_id = trapp.approach_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_approaches',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'approach_id',
						'approach_name',
						'description',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.training_approaches' 
				),
				'joinOn' => array(
					'sql' => 'trapp.approach_id = ts.approach_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'trapp',
						'name' => 'approach_id' 
					),
					'case' => '= ts.approach_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.approach_id = trapp.approach_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'trapp',
							'name' => 'approach_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'approach_id' 
						) 
					) 
				),
				'alias' => 'trapp',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".countries AS c ON ts.host_country_id = c.country_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".countries',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'country_id',
						'country_name',
						'region_id',
						'iso_code',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.countries' 
				),
				'joinOn' => array(
					'sql' => 'c.country_id = ts.host_country_id',
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
					'case' => '= ts.host_country_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.host_country_id = c.country_id',
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
							'table' => 'ts',
							'name' => 'host_country_id' 
						) 
					) 
				),
				'alias' => 'c',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".regions AS r ON c.region_id = r.region_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".regions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'region_id',
						'region_name',
						'description',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.regions' 
				),
				'joinOn' => array(
					'sql' => 'r.region_id = c.region_id',
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
					'case' => '= c.region_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'c.region_id = r.region_id',
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
							'table' => 'c',
							'name' => 'region_id' 
						) 
					) 
				),
				'alias' => 'r',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".venues AS v ON ts.venue_id = v.venue_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".venues',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'venue_id',
						'venue_name',
						'facility_id',
						'address_line1',
						'address_line2',
						'city',
						'state_province',
						'postal_code',
						'country_id',
						'capacity',
						'room_type',
						'amenities',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.venues' 
				),
				'joinOn' => array(
					'sql' => 'v.venue_id = ts.venue_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'v',
						'name' => 'venue_id' 
					),
					'case' => '= ts.venue_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.venue_id = v.venue_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'v',
							'name' => 'venue_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'venue_id' 
						) 
					) 
				),
				'alias' => 'v',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".training_partners AS tpr ON ts.training_id = tpr.training_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_partners',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'training_partner_id',
						'training_id',
						'partner_id',
						'created_at' 
					),
					'name' => 'public.training_partners' 
				),
				'joinOn' => array(
					'sql' => 'tpr.training_id = ts.training_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tpr',
						'name' => 'training_id' 
					),
					'case' => '= ts.training_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.training_id = tpr.training_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tpr',
							'name' => 'training_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'training_id' 
						) 
					) 
				),
				'alias' => 'tpr',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".partners AS pt ON tpr.partner_id = pt.partner_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".partners',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'partner_id',
						'partner_name',
						'description',
						'website',
						'contact_email',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.partners' 
				),
				'joinOn' => array(
					'sql' => 'pt.partner_id = tpr.partner_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'pt',
						'name' => 'partner_id' 
					),
					'case' => '= tpr.partner_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tpr.partner_id = pt.partner_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'pt',
							'name' => 'partner_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tpr',
							'name' => 'partner_id' 
						) 
					) 
				),
				'alias' => 'pt',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".training_leads AS tl ON ts.training_id = tl.training_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_leads',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'training_lead_id',
						'training_id',
						'staff_id',
						'created_at' 
					),
					'name' => 'public.training_leads' 
				),
				'joinOn' => array(
					'sql' => 'tl.training_id = ts.training_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tl',
						'name' => 'training_id' 
					),
					'case' => '= ts.training_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.training_id = tl.training_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tl',
							'name' => 'training_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'training_id' 
						) 
					) 
				),
				'alias' => 'tl',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".lifebox_staff AS ls ON tl.staff_id = ls.staff_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifebox_staff',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'staff_id',
						'first_name',
						'last_name',
						'email',
						'role',
						'region_id',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.lifebox_staff' 
				),
				'joinOn' => array(
					'sql' => 'ls.staff_id = tl.staff_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'ls',
						'name' => 'staff_id' 
					),
					'case' => '= tl.staff_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tl.staff_id = ls.staff_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ls',
							'name' => 'staff_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tl',
							'name' => 'staff_id' 
						) 
					) 
				),
				'alias' => 'ls',
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ta.attendance_id,
ta.day_number,
ta.attended,
ta.attendance_date,
ta.notes,
ta.recorded_at,
ta.recorded_by,
ta.participation_id,
CONCAT(tpp.title_salutation, \' \', tpp.first_name, \' \', COALESCE(tpp.middle_name || \' \', \'\'), tpp.last_name) AS participant_full_name,
s.sex_name,
f.facility_name,
pr.role_name,
ts.training_id,
tc.course_name,
p.program_name,
ts.program_id,
ts.quarter,
ts.start_date,
ts.end_date,
tt.type_name AS training_type,
trapp.approach_name AS training_approach,
c.country_name AS host_country,
r.region_name AS host_region,
v.venue_name,
pt.partner_name,
CONCAT(ls.first_name, \' \', ls.last_name) AS training_lead_name',
		'fromListSql' => 'FROM "public".training_attendance AS ta
INNER JOIN "public".training_participation AS tp ON ta.participation_id = tp.participation_id
INNER JOIN "public".training_participants AS tpp ON tp.participant_id = tpp.participant_id
LEFT OUTER JOIN "public".sex AS s ON tpp.sex_id = s.sex_id
LEFT OUTER JOIN "public".facilities AS f ON tpp.facility_id = f.facility_id
LEFT OUTER JOIN "public".participant_role AS pr ON tpp.role_id = pr.role_id
INNER JOIN "public".training_sessions AS ts ON tp.training_id = ts.training_id
INNER JOIN "public".training_courses AS tc ON ts.course_id = tc.course_id
INNER JOIN "public".programs AS p ON ts.program_id = p.program_id
LEFT OUTER JOIN "public".training_types AS tt ON ts.training_type_id = tt.training_type_id
LEFT OUTER JOIN "public".training_approaches AS trapp ON ts.approach_id = trapp.approach_id
LEFT OUTER JOIN "public".countries AS c ON ts.host_country_id = c.country_id
LEFT OUTER JOIN "public".regions AS r ON c.region_id = r.region_id
LEFT OUTER JOIN "public".venues AS v ON ts.venue_id = v.venue_id
LEFT OUTER JOIN "public".training_partners AS tpr ON ts.training_id = tpr.training_id
LEFT OUTER JOIN "public".partners AS pt ON tpr.partner_id = pt.partner_id
LEFT OUTER JOIN "public".training_leads AS tl ON ts.training_id = tl.training_id
LEFT OUTER JOIN "public".lifebox_staff AS ls ON tl.staff_id = ls.staff_id',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.training_attendance',
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
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'attendance_id',
			'day_number',
			'attended',
			'attendance_date',
			'notes',
			'recorded_at',
			'recorded_by',
			'participation_id',
			'participant_full_name',
			'sex_name',
			'facility_name',
			'role_name',
			'training_id',
			'course_name',
			'program_name',
			'program_id',
			'quarter',
			'start_date',
			'end_date',
			'training_type',
			'training_approach',
			'host_country',
			'host_region',
			'venue_name',
			'partner_name',
			'training_lead_name' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'attendance_id',
			'day_number',
			'attended',
			'attendance_date',
			'notes',
			'recorded_at',
			'recorded_by',
			'participation_id',
			'participant_full_name',
			'sex_name',
			'facility_name',
			'role_name',
			'training_id',
			'course_name',
			'program_name',
			'program_id',
			'quarter',
			'start_date',
			'end_date',
			'training_type',
			'training_approach',
			'host_country',
			'host_region',
			'venue_name',
			'partner_name',
			'training_lead_name' 
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
	$runnerTableLabels['public.training_attendance'] = array(
	'tableCaption' => 'Training Attendance',
	'fieldLabels' => array(
		'attendance_id' => 'Att ID',
		'day_number' => 'Day#',
		'attended' => 'Attended',
		'attendance_date' => 'Attendance Date',
		'notes' => 'Notes',
		'recorded_at' => 'Recorded At',
		'recorded_by' => 'Recorded By',
		'participation_id' => 'Participation Id',
		'participant_full_name' => 'Training Participant Name',
		'sex_name' => 'Sex',
		'facility_name' => 'Facility',
		'role_name' => 'Role/Designation',
		'training_id' => 'Session',
		'course_name' => 'Training Course',
		'program_name' => 'Program',
		'program_id' => 'Program Id',
		'quarter' => 'Quarter',
		'start_date' => 'Start Date',
		'end_date' => 'End Date',
		'training_type' => 'Training Type',
		'training_approach' => 'Training Approach',
		'host_country' => 'Host Country',
		'host_region' => 'Host Region',
		'venue_name' => 'Venue',
		'partner_name' => 'Partner',
		'training_lead_name' => 'Training Lead' 
	),
	'fieldTooltips' => array(
		'attendance_id' => '',
		'day_number' => '',
		'attended' => '',
		'attendance_date' => '',
		'notes' => '',
		'recorded_at' => '',
		'recorded_by' => '',
		'participation_id' => '',
		'participant_full_name' => '',
		'sex_name' => '',
		'facility_name' => '',
		'role_name' => '',
		'training_id' => '',
		'course_name' => '',
		'program_name' => '',
		'program_id' => '',
		'quarter' => '',
		'start_date' => '',
		'end_date' => '',
		'training_type' => '',
		'training_approach' => '',
		'host_country' => '',
		'host_region' => '',
		'venue_name' => '',
		'partner_name' => '',
		'training_lead_name' => '' 
	),
	'fieldPlaceholders' => array(
		'attendance_id' => '',
		'day_number' => '',
		'attended' => '',
		'attendance_date' => '',
		'notes' => '',
		'recorded_at' => '',
		'recorded_by' => '',
		'participation_id' => '',
		'participant_full_name' => '',
		'sex_name' => '',
		'facility_name' => '',
		'role_name' => '',
		'training_id' => '',
		'course_name' => '',
		'program_name' => '',
		'program_id' => '',
		'quarter' => '',
		'start_date' => '',
		'end_date' => '',
		'training_type' => '',
		'training_approach' => '',
		'host_country' => '',
		'host_region' => '',
		'venue_name' => '',
		'partner_name' => '',
		'training_lead_name' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>