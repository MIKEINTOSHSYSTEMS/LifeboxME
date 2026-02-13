<?php
$runnerProjectDefaults = array(
	'detailedError' => true,
	'createRestAPI' => false,
	'restAPIReturnEncodedBinary' => false,
	'restAPIAcceptEncodedBinary' => false,
	'restAPIAuthType' => 'none',
	'restAPIKey' => '',
	'restAPIKeyField' => '',
	'enableWebreports' => false,
	'cookieBanner' => false,
	'emailTemplates' => array(
		 
	),
	'landingSettings' => array(
		'type' => 1,
		'table' => '<global>',
		'pageId' => 'menu',
		'page' => 'menu',
		'url' => '' 
	),
	'rteType' => 'BASIC',
	'richTextEnabled' => false,
	'section508Compat' => false,
	'menuIds' => array( 
		 
	),
	'tablesAdvSecurity' => array(
		'__meta__' => 1,
		'__object__' => array(
			'advSecurity' => 0,
			'usersOwnerIdField' => '' 
		) 
	),
	'customTemplates' => array( 
		 
	),
	'mysqlCharsetName' => 'utf8',
	'styleOverrides' => array(
		 
	),
	'hasCustomCss' => false,
	'hasCustomFunctionsJs' => false,
	'connEncryptInfo' => array(
		 
	),
	'userTableKeys' => array( 
		 
	),
	'phpSpreadsheet' => true,
	'security' => array(
		'__meta__' => 0,
		'__object__' => array(
			'projectName' => '',
			'loginDataSource' => '',
			'loginForm' => 3,
			'dynamicPermissions' => false,
			'dpTablePrefix' => '',
			'dpTableConnId' => '',
			'providers' => array(
				'__meta__' => 2,
				'__object__' => array(
					 
				) 
			),
			'enabled' => false,
			'advancedSecurityAvailable' => false,
			'userGroupsAvailable' => false,
			'hardcodedLogin' => false,
			'defaultProviderCode' => '',
			'adOnlyLogin' => false,
			'sessionControl' => array(
				'__meta__' => 0,
				'__object__' => array(
					'lifeTime' => 15,
					'sessionName' => '5bNxgWhjW6MIvHkV2fcp',
					'JWTSecret' => 'SsCkYf1kkEeK1c007kwL' 
				) 
			),
			'registration' => array(
				'__meta__' => 0,
				'__object__' => array(
					'remindMethod' => 0,
					'hashAlgorithm' => 0,
					'passwordValidation' => array(
						'__meta__' => 0,
						'__object__' => array(
							'strong' => false,
							'minimumLength' => 8,
							'uniqueCharacters' => 4,
							'digitsAndSymbols' => 2,
							'upperAndLowerCase' => false 
						) 
					) 
				) 
			),
			'captchaSettings' => array(
				'__meta__' => 0,
				'__object__' => array(
					'captchaType' => 0,
					'siteKey' => '',
					'secretKey' => '',
					'passesCount' => 5 
				) 
			),
			'emailSettings' => array(
				'__meta__' => 0,
				'__object__' => array(
					'fromEmail' => '',
					'usePHPDefinedSMTP' => false,
					'useBuiltInMailer' => false,
					'SMTPServer' => 'localhost',
					'SMTPPort' => 25,
					'SMTPUser' => '',
					'SMTPPassword' => '',
					'securityProtocol' => 0 
				) 
			),
			'advancedSecurity' => array(
				'__meta__' => 0,
				'__object__' => array(
					'allowGuestLogin' => false 
				) 
			),
			'auditAndLocking' => array(
				'__meta__' => 0,
				'__object__' => array(
					'loggingMode' => 0,
					'loggingTable' => array(
						'__meta__' => 0,
						'__object__' => array(
							'connId' => '',
							'table' => '' 
						) 
					),
					'loggingFile' => 'audit.log',
					'logSecurityActions' => false,
					'lockAfterUnsuccessfulLogin' => false,
					'enableLocking' => false,
					'lockingTable' => array(
						'__meta__' => 0,
						'__object__' => array(
							'connId' => '',
							'table' => '' 
						) 
					),
					'tables' => array(
						'__meta__' => 1,
						'__object__' => array(
							 
						) 
					) 
				) 
			),
			'twoFactorSettings' => array(
				'__meta__' => 0,
				'__object__' => array(
					'available' => false,
					'required' => false,
					'enable' => true,
					'remember' => true,
					'types' => array(
						 
					),
					'twoFactorField' => '',
					'emailField' => '',
					'phoneField' => '',
					'codeField' => '',
					'projectName' => '' 
				) 
			),
			'staticPermissions' => array(
				'__meta__' => 0,
				'__object__' => array(
					'groups' => array(
						'__meta__' => 1,
						'__object__' => array(
							'permissions' => array(
								'__meta__' => 1,
								'__object__' => array(
									'mask' => '',
									'table' => '',
									'restrictedPages' => array(
										 
									) 
								) 
							) 
						) 
					) 
				) 
			),
			'dbProvider' => array(
				'__meta__' => 0,
				'__object__' => array(
					'type' => '%db' 
				) 
			) 
		) 
	),
	'cloudSettings' => array(
		'__meta__' => 0,
		'__object__' => array(
			'cloudAmazonRegion' => '',
			'cloudAmazonBucket' => '',
			'cloudAmazonAccessKey' => '',
			'cloudAmazonSecretKey' => '',
			'cloudWasabiRegion' => '',
			'cloudWasabiBucket' => '',
			'cloudWasabiAccessKey' => '',
			'cloudWasabiSecretKey' => '',
			'cloudGDriveClientId' => '',
			'cloudGDriveClientSecret' => '',
			'cloudOneDriveClientId' => '',
			'cloudOneDriveClientSecret' => '',
			'cloudOneDriveDrive' => '',
			'cloudOneDriveAccountType' => 0,
			'cloudOneDriveDirectoryId' => '',
			'cloudDropboxClientId' => '',
			'cloudDropboxClientSecret' => '' 
		) 
	),
	'mapSettings' => array(
		'__meta__' => 0,
		'__object__' => array(
			'embed' => true,
			'provider' => 0,
			'apikey' => '' 
		) 
	),
	'smsSettings' => array(
		'__meta__' => 0,
		'__object__' => array(
			'smsProvider' => 4,
			'iBusername' => '',
			'iBpassword' => '',
			'iBsender' => '',
			'essUsername' => '',
			'essPassword' => '',
			'essSender' => '',
			'gwApiToken' => '',
			'gwSender' => '',
			'mbAuth' => '',
			'mbSender' => '',
			'twilioSID' => '',
			'twilioAuth' => '',
			'twilioNumber' => '',
			'phoneField' => '',
			'counryCode' => '+1',
			'wauUsername' => '',
			'wauPassword' => '',
			'wauSender' => '' 
		) 
	) 
);

$runnerTableDefaults = array(
	'name' => '',
	'type' => 0,
	'shortName' => '',
	'advancedSecurityType' => 0,
	'pagesByType' => array(
		 
	),
	'pageTypes' => array(
		 
	),
	'defaultPages' => array(
		 
	),
	'tableOwnerIdField' => '',
	'usersOwnerIdField' => '',
	'scrollGridBody' => false,
	'hasEncryptedFields' => false,
	'listAjax' => false,
	'audit' => false,
	'locking' => false,
	'afterEditAction' => 1,
	'afterEditDetails' => '',
	'closePopupAfterEdit' => true,
	'afterAddAction' => 1,
	'afterAddDetail' => '',
	'closePopupAfterAdd' => true,
	'hasFieldMaps' => false,
	'detailsBadgeColor' => '',
	'pageOrientation' => 0,
	'printFitToPage' => true,
	'printScale' => 100,
	'pageSizeRecords' => 20,
	'pageSizeGroups' => 5,
	'pageSizePrintRecords' => 40,
	'pageSizePrintGroups' => 3,
	'pageSizeSelectorRecords' => array( 
		 
	),
	'pageSizeSelectorGroups' => array( 
		 
	),
	'displayLoading' => false,
	'resizeColumns' => false,
	'warnLeavingEdit' => false,
	'hideEmptyFieldsOnView' => false,
	'strOrderBy' => '',
	'orderInfo' => array( 
		 
	),
	'sql' => '',
	'limitRecords' => 0,
	'keyFields' => array( 
		 
	),
	'deviceHideFields' => array(
		 
	),
	'fields' => array(
		'__meta__' => 1,
		'__object__' => array(
			'name' => '',
			'goodName' => '',
			'strField' => '',
			'sourceSingle' => '',
			'index' => 0,
			'type' => 200,
			'autoinc' => false,
			'encrypted' => false,
			'restDateFormat' => '',
			'sqlExpression' => '',
			'deleteFile' => false,
			'basicUpload' => false,
			'absolutePath' => false,
			'uploadFolder' => 'files',
			'codeUploadFolder' => '',
			'codeUploadFolderLang' => 'cs',
			'viewFormats' => array(
				'__meta__' => 1,
				'__object__' => array(
					'format' => '',
					'pageType' => 'view',
					'imageWidth' => 600,
					'imageHeight' => 400,
					'imageThumbWidth' => 200,
					'imageThumbHeight' => 150,
					'imageUrl' => false,
					'imageMultipleMode' => 1,
					'imageMaxCount' => 0,
					'imageGallery' => true,
					'imageCaptions' => 2,
					'imageCaptionField' => '',
					'imageBorder' => true,
					'imageMobileFullWidth' => true,
					'imageShowThumbnail' => false,
					'linkNewWindow' => false,
					'linkDisplay' => 0,
					'linkDisplayField' => '',
					'linkDisplayText' => array(
						'text' => 'Link',
						'type' => 0 
					),
					'linkPrefix' => '',
					'customExpressionLang' => 'cs',
					'customExpression' => '',
					'fileCustomExpression' => '',
					'fileCustomExpressionLang' => 'cs',
					'fileShowCustom' => false,
					'fileShowSize' => false,
					'fileShowIcon' => true,
					'fileShowPdf' => false,
					'fileFilenameField' => '',
					'mapWidth' => 300,
					'mapHeight' => 225,
					'mapZoom' => 15,
					'mapAddressField' => '',
					'mapLatField' => '',
					'mapLonField' => '',
					'mapDescriptionField' => '',
					'mapMarkerIcon' => '',
					'mapMarkerCodeExpression' => false,
					'mapMarkerLang' => 'cs',
					'videoTitleField' => '',
					'videoWidth' => 300,
					'videoHeight' => 200,
					'videoFieldContainsFileURL' => false,
					'videoRewindEnabled' => true,
					'videoPluginInitString' => '',
					'numberFractionalDigits' => 2,
					'fieldEvents' => array(
						'__meta__' => 2,
						'__object__' => array(
							'event' => '',
							'handlerId' => 0 
						) 
					),
					'textShowFirst' => true,
					'textShowFirstN' => 80,
					'timeFormat' => 0,
					'timeShowSeconds' => true,
					'timeShowDays' => true,
					'pluginInitString' => '' 
				) 
			),
			'editFormats' => array(
				'__meta__' => 1,
				'__object__' => array(
					'format' => 'Text field',
					'pageType' => 'edit',
					'required' => false,
					'defaultValue' => '',
					'defaultValueLang' => 'cs',
					'autoUpdateValue' => '',
					'autoUpdateLang' => 'cs',
					'validateAs' => '',
					'validateRegex' => '',
					'validateRegexMessage' => array(
						'text' => 'The value is invalid',
						'type' => 0 
					),
					'denyDuplicate' => false,
					'denyDuplicateMessage' => array(
						'text' => 'Value %value% already exists',
						'type' => 0 
					),
					'textboxSize' => 200,
					'textboxMaxLenth' => 0,
					'textboxMask' => '',
					'textInsertNull' => false,
					'textHTML5Input' => 'text',
					'textareaHeight' => 100,
					'textareaRTE' => false,
					'lookupSize' => 1,
					'lookupMultiselect' => false,
					'lookupType' => 1,
					'lookupValues' => array( 
						 
					),
					'lookupTable' => '',
					'lookupTableConnection' => '',
					'lookupLinkField' => '',
					'lookupDisplayField' => '',
					'lookupCustomDisplay' => false,
					'lookupOrderBy' => '',
					'lookupOrderByDesc' => false,
					'lookupUnique' => false,
					'lookupAllowAdd' => false,
					'lookupAllowEdit' => false,
					'lookupControlType' => 0,
					'lookupHorizontal' => false,
					'lookupWhere' => '',
					'lookupWhereCode' => false,
					'lookupWhereCodeLang' => 'cs',
					'lookupFreeInput' => false,
					'lookupListPage' => '',
					'lookupAddPage' => '',
					'lookupEditPage' => '',
					'lookupDependent' => false,
					'lookupDependentFields' => array(
						'__meta__' => 2,
						'__object__' => array(
							 
						) 
					),
					'lookupAutofillEdit' => false,
					'lookupAutofillFields' => array(
						'__meta__' => 2,
						'__object__' => array(
							 
						) 
					),
					'fileAddTimestamp' => false,
					'fileResize' => false,
					'fileResizeSize' => 600,
					'fileCreateThumbnail' => false,
					'fileThumbnailPrefix' => 'th',
					'fileThumbnailSize' => 600,
					'fileMaxNumber' => 0,
					'fileSizeLimit' => 0,
					'fileTotalSizeLimit' => 0,
					'fileTypes' => array( 
						 
					),
					'fileThumbnailField' => '',
					'dateEditType' => 0,
					'dateShowTime' => false,
					'dateFirstYearFactor' => 100,
					'dateLastYearFactor' => 10,
					'dateAllowedDays' => array( 
						 
					),
					'dateAllowedDaysMessage' => array(
						'text' => 'Invalid week day',
						'type' => 0 
					),
					'timeUseTimepicker' => false,
					'timeShowSeconds' => false,
					'timeMinutesStep' => 1,
					'timeConvention' => 0,
					'pluginInitString' => '',
					'fieldEvents' => array(
						'__meta__' => 2,
						'__object__' => array(
							'event' => '',
							'handlerId' => 0 
						) 
					) 
				) 
			),
			'separateEditViewFormats' => false,
			'storageProvider' => 0,
			'amazonPath' => '',
			'googleDrivePath' => '',
			'oneDrivePath' => '',
			'dropboxPath' => '',
			'googleDrivePublicAccess' => true,
			'wasabiPath' => '',
			'defaultSearchOption' => 'Equals',
			'searchOptions' => array( 
				 
			),
			'allSearchOptionsSelected' => false,
			'filterFormat' => array(
				'__meta__' => 0,
				'__object__' => array(
					'format' => '',
					'filterTotals' => 0,
					'filterTotalsField' => '',
					'filterMultiselect' => 0,
					'hideControl' => false,
					'filterBy' => 0,
					'sortValueType' => 0,
					'descendingOrder' => false,
					'firstVisibleItems' => 10,
					'multilangCheckedMessage' => array(
						'text' => 'Checked',
						'type' => 0 
					),
					'multilangUncheckedMessage' => array(
						'text' => 'Unchecked',
						'type' => 0 
					),
					'arrFilterIntervals' => array(
						'__meta__' => 2,
						'__object__' => array(
							'lowerLimit' => '',
							'upperLimit' => '',
							'lowerLimitDotNetLanguage' => 'cs',
							'upperLimitDotNetLanguage' => 'cs',
							'lowerLimitType' => 0,
							'upperLimitType' => 0,
							'mutilangIntervalText' => array(
								'text' => '',
								'type' => 0 
							),
							'lowerUsesExpression' => false,
							'upperUsesExpression' => false,
							'caseInsensitiveFiltering' => false 
						) 
					),
					'showWithNoRecords' => false,
					'sliderKnobs' => 0,
					'sliderStepType' => 1,
					'sliderStepValue' => '1',
					'addApplyButton' => false,
					'pluginInitString' => '' 
				) 
			),
			'parentFilter' => '' 
		) 
	),
	'masterTables' => array(
		'__meta__' => 2,
		'__object__' => array(
			'table' => '',
			'detailsKeys' => array( 
				 
			),
			'masterKeys' => array( 
				 
			) 
		) 
	),
	'detailsTables' => array( 
		 
	),
	'query' => null,
	'hasEvents' => false,
	'hasJsEvents' => false,
	'galleryMode' => 2,
	'searchSettings' => array(
		'__meta__' => 0,
		'__object__' => array(
			'caseSensitiveSearch' => false,
			'searchableFields' => array( 
				 
			),
			'googleLikeSearchFields' => array( 
				 
			),
			'searchSuggest' => true,
			'highlightSearchResults' => true,
			'hideDataUntilSearch' => false,
			'hideFilterUntilSearch' => false 
		) 
	),
	'sortByFields' => array(
		'__meta__' => 0,
		'__object__' => array(
			'sortOrder' => array(
				'__meta__' => 2,
				'__object__' => array(
					'fields' => array(
						'__meta__' => 2,
						'__object__' => array(
							'field' => '',
							'desc' => false 
						) 
					),
					'label' => array(
						'text' => '',
						'type' => 0 
					) 
				) 
			) 
		) 
	),
	'clickActions' => array(
		'__meta__' => 0,
		'__object__' => array(
			'row' => array(
				'__meta__' => 0,
				'__object__' => array(
					'action' => 'noaction' 
				) 
			),
			'fields' => array(
				'__meta__' => 1,
				'__object__' => array(
					'action' => 'noaction' 
				) 
			) 
		) 
	),
	'geoCoding' => array(
		'__meta__' => 0,
		'__object__' => array(
			'enabled' => false,
			'latField' => '',
			'lonField' => '',
			'addressFields' => array( 
				 
			) 
		) 
	),
	'labels' => array(
		'__meta__' => 0,
		'__object__' => array(
			'tableCaption' => '',
			'fieldLabels' => array(
				 
			),
			'fieldTooltips' => array(
				 
			),
			'fieldPlaceholders' => array(
				 
			),
			'pageTitles' => array(
				 
			) 
		) 
	) 
);

?>