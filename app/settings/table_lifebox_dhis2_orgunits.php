<?php
global $runnerTableSettings;
$runnerTableSettings['Lifebox_DHIS2_OrgUnits'] = array(
	'name' => 'Lifebox_DHIS2_OrgUnits',
	'type' => 7,
	'shortName' => 'lifebox_dhis2_orgunits',
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
	'detailsBadgeColor' => '4169E1',
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
		'LB_Int_ID' => array(
			'name' => 'LB_Int_ID',
			'goodName' => 'LB_Int_ID',
			'strField' => 'data/*/LB_Int_ID',
			'index' => 1,
			'type' => 202,
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
		'LB_Int' => array(
			'name' => 'LB_Int',
			'goodName' => 'LB_Int',
			'strField' => 'data/*/LB_Int',
			'index' => 2,
			'type' => 202,
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
		'Cont_ID' => array(
			'name' => 'Cont_ID',
			'goodName' => 'Cont_ID',
			'strField' => 'data/*/Cont_ID',
			'index' => 3,
			'type' => 202,
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
		'Continent' => array(
			'name' => 'Continent',
			'goodName' => 'Continent',
			'strField' => 'data/*/Continent',
			'index' => 4,
			'type' => 202,
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'Lifebox_DHIS2_OrgUnits',
					'lookupTableConnection' => 'rest',
					'lookupLinkField' => 'Cont_ID',
					'lookupDisplayField' => 'Continent',
					'lookupOrderBy' => 'Continent',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'Level',
				'filterMultiselect' => 2 
			),
			'tableName' => '' 
		),
		'Count_ID' => array(
			'name' => 'Count_ID',
			'goodName' => 'Count_ID',
			'strField' => 'data/*/Count_ID',
			'index' => 5,
			'type' => 202,
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
		'Country' => array(
			'name' => 'Country',
			'goodName' => 'Country',
			'strField' => 'data/*/Country',
			'index' => 6,
			'type' => 202,
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'Lifebox_DHIS2_OrgUnits',
					'lookupTableConnection' => 'rest',
					'lookupLinkField' => 'Count_ID',
					'lookupDisplayField' => 'Country',
					'lookupOrderBy' => 'Country',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'Cont_ID',
							'lookupField' => 'Cont_ID' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'Level',
				'filterMultiselect' => 2 
			),
			'tableName' => '' 
		),
		'Hosp_Fac_ID' => array(
			'name' => 'Hosp_Fac_ID',
			'goodName' => 'Hosp_Fac_ID',
			'strField' => 'data/*/Hosp_Fac_ID',
			'index' => 7,
			'type' => 202,
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
		'Hospital_Facility' => array(
			'name' => 'Hospital_Facility',
			'goodName' => 'Hospital_Facility',
			'strField' => 'data/*/Hospital_Facility',
			'index' => 8,
			'type' => 202,
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'Lifebox_DHIS2_OrgUnits',
					'lookupTableConnection' => 'rest',
					'lookupLinkField' => 'Hosp_Fac_ID',
					'lookupDisplayField' => 'Hospital_Facility',
					'lookupOrderBy' => 'Hospital_Facility',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'Count_ID',
							'lookupField' => 'Count_ID' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'Level',
				'filterMultiselect' => 2 
			),
			'tableName' => '' 
		),
		'Level' => array(
			'name' => 'Level',
			'goodName' => 'Level',
			'strField' => 'data/*/Level',
			'index' => 9,
			'type' => 3,
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
				'filterTotalsField' => 'Level',
				'filterMultiselect' => 1 
			),
			'tableName' => '' 
		) 
	),
	'originalTable' => '',
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
			'LB_Int_ID',
			'LB_Int',
			'Cont_ID',
			'Continent',
			'Count_ID',
			'Country',
			'Hosp_Fac_ID',
			'Hospital_Facility',
			'Level' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'LB_Int_ID',
			'LB_Int',
			'Cont_ID',
			'Continent',
			'Count_ID',
			'Country',
			'Hosp_Fac_ID',
			'Hospital_Facility',
			'Level' 
		) 
	),
	'connId' => 'rest',
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
		'selectList' => array(
			'sql' => '',
			'enabled' => true,
			'subtype' => 'rest',
			'method' => 'GET',
			'request' => '/api/dhis2/orgunits/index.php',
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
	$runnerTableLabels['Lifebox_DHIS2_OrgUnits'] = array(
	'tableCaption' => 'Lifebox DHIS2 OrgUnits',
	'fieldLabels' => array(
		'LB_Int_ID' => 'LB',
		'LB_Int' => 'LB Int',
		'Cont_ID' => 'Cont_ID',
		'Continent' => 'Continent',
		'Count_ID' => 'Count_ID',
		'Country' => 'Country',
		'Hosp_Fac_ID' => 'Hosp_Fac_ID',
		'Hospital_Facility' => 'Hospital/Facility',
		'Level' => 'Level' 
	),
	'fieldTooltips' => array(
		'LB_Int_ID' => '',
		'LB_Int' => '',
		'Cont_ID' => '',
		'Continent' => '',
		'Count_ID' => '',
		'Country' => '',
		'Hosp_Fac_ID' => '',
		'Hospital_Facility' => '',
		'Level' => '' 
	),
	'fieldPlaceholders' => array(
		'LB_Int_ID' => '',
		'LB_Int' => '',
		'Cont_ID' => '',
		'Continent' => '',
		'Count_ID' => '',
		'Country' => '',
		'Hosp_Fac_ID' => '',
		'Hospital_Facility' => '',
		'Level' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>