<?php
global $runnerTableSettings;
$runnerTableSettings['public.participant_attendance_detail'] = array(
	'name' => 'public.participant_attendance_detail',
	'shortName' => 'participant_attendance_detail',
	'pagesByType' => array(
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
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'audit' => true,
	'detailsBadgeColor' => 'BC8F8F',
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
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	participant_id,
	participant_name,
	training_id,
	training_name,
	day_number,
	attendance_date,
	attended,
	notes,
	recorded_at
FROM
	"public".participant_attendance_detail',
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
			'sourceSingle' => 'participant_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'participant_id',
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
					'lookupTable' => 'public.training_participants',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'participant_id',
					'lookupDisplayField' => 'participant_id',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.participant_attendance_detail' 
		),
		'participant_name' => array(
			'name' => 'participant_name',
			'goodName' => 'participant_name',
			'strField' => 'participant_name',
			'sourceSingle' => 'participant_name',
			'index' => 2,
			'type' => 201,
			'sqlExpression' => 'participant_name',
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
			'tableName' => 'public.participant_attendance_detail' 
		),
		'training_id' => array(
			'name' => 'training_id',
			'goodName' => 'training_id',
			'strField' => 'training_id',
			'sourceSingle' => 'training_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'training_id',
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
					'lookupTable' => 'public.training_sessions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'training_id',
					'lookupDisplayField' => 'training_details',
					'lookupAutofillEdit' => true,
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'training_name',
							'lookupField' => 'training_details' 
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
			'tableName' => 'public.participant_attendance_detail' 
		),
		'training_name' => array(
			'name' => 'training_name',
			'goodName' => 'training_name',
			'strField' => 'training_name',
			'sourceSingle' => 'training_name',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'training_name',
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
					'lookupType' => 2,
					'lookupTable' => 'public.training_sessions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'training_id',
					'lookupDisplayField' => 'training_details',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'training_id',
							'lookupField' => 'training_id' 
						) 
					),
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.participant_attendance_detail' 
		),
		'day_number' => array(
			'name' => 'day_number',
			'goodName' => 'day_number',
			'strField' => 'day_number',
			'sourceSingle' => 'day_number',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'day_number',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.participant_attendance_detail' 
		),
		'attendance_date' => array(
			'name' => 'attendance_date',
			'goodName' => 'attendance_date',
			'strField' => 'attendance_date',
			'sourceSingle' => 'attendance_date',
			'index' => 6,
			'type' => 7,
			'sqlExpression' => 'attendance_date',
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
			'tableName' => 'public.participant_attendance_detail' 
		),
		'attended' => array(
			'name' => 'attended',
			'goodName' => 'attended',
			'strField' => 'attended',
			'sourceSingle' => 'attended',
			'index' => 7,
			'type' => 11,
			'sqlExpression' => 'attended',
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
			'tableName' => 'public.participant_attendance_detail' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'sourceSingle' => 'notes',
			'index' => 8,
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
			'tableName' => 'public.participant_attendance_detail' 
		),
		'recorded_at' => array(
			'name' => 'recorded_at',
			'goodName' => 'recorded_at',
			'strField' => 'recorded_at',
			'sourceSingle' => 'recorded_at',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'recorded_at',
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
			'tableName' => 'public.participant_attendance_detail' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	participant_id,
	participant_name,
	training_id,
	training_name,
	day_number,
	attendance_date,
	attended,
	notes,
	recorded_at
FROM
	"public".participant_attendance_detail',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'participant_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'participant_id' 
				),
				'encrypted' => false,
				'columnName' => 'participant_id' 
			),
			array(
				'sql' => 'participant_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'participant_name' 
				),
				'encrypted' => false,
				'columnName' => 'participant_name' 
			),
			array(
				'sql' => 'training_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'training_id' 
				),
				'encrypted' => false,
				'columnName' => 'training_id' 
			),
			array(
				'sql' => 'training_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'training_name' 
				),
				'encrypted' => false,
				'columnName' => 'training_name' 
			),
			array(
				'sql' => 'day_number',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'day_number' 
				),
				'encrypted' => false,
				'columnName' => 'day_number' 
			),
			array(
				'sql' => 'attendance_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'attendance_date' 
				),
				'encrypted' => false,
				'columnName' => 'attendance_date' 
			),
			array(
				'sql' => 'attended',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'attended' 
				),
				'encrypted' => false,
				'columnName' => 'attended' 
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
					'table' => 'public.participant_attendance_detail',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			),
			array(
				'sql' => 'recorded_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_detail',
					'name' => 'recorded_at' 
				),
				'encrypted' => false,
				'columnName' => 'recorded_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".participant_attendance_detail',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".participant_attendance_detail',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'participant_id',
						'participant_name',
						'training_id',
						'training_name',
						'day_number',
						'attendance_date',
						'attended',
						'notes',
						'recorded_at' 
					),
					'name' => 'public.participant_attendance_detail' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'participant_id,
	participant_name,
	training_id,
	training_name,
	day_number,
	attendance_date,
	attended,
	notes,
	recorded_at',
		'fromListSql' => 'FROM
	"public".participant_attendance_detail',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.participant_attendance_detail',
	'originalPagesByType' => array(
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
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'participant_id',
			'participant_name',
			'training_id',
			'training_name',
			'day_number',
			'attendance_date',
			'attended',
			'notes',
			'recorded_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'participant_id',
			'participant_name',
			'training_id',
			'training_name',
			'day_number',
			'attendance_date',
			'attended',
			'notes',
			'recorded_at' 
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
	$runnerTableLabels['public.participant_attendance_detail'] = array(
	'tableCaption' => 'Participant Attendance Detail',
	'fieldLabels' => array(
		'participant_id' => 'Participant Id',
		'participant_name' => 'Participant Name',
		'training_id' => 'Training Id',
		'training_name' => 'Training Name',
		'day_number' => 'Day Number',
		'attendance_date' => 'Attendance Date',
		'attended' => 'Attended',
		'notes' => 'Notes',
		'recorded_at' => 'Recorded At' 
	),
	'fieldTooltips' => array(
		'participant_id' => '',
		'participant_name' => '',
		'training_id' => '',
		'training_name' => '',
		'day_number' => '',
		'attendance_date' => '',
		'attended' => '',
		'notes' => '',
		'recorded_at' => '' 
	),
	'fieldPlaceholders' => array(
		'participant_id' => '',
		'participant_name' => '',
		'training_id' => '',
		'training_name' => '',
		'day_number' => '',
		'attendance_date' => '',
		'attended' => '',
		'notes' => '',
		'recorded_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>