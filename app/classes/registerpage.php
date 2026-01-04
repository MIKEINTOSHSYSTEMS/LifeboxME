<?php
class RegisterPage extends RunnerPage
{
	public $action;

	protected $regValues = array();

	protected $registerSuccess = false;

	protected $strUsername;
	protected $strPassword;
	protected $strEmail;

	protected $usernameFiled;
	protected $emailFiled;

	protected $prepActivationCode = "";

	protected $sendActivationLink = false;

	protected $sendActivationLinkFailedMessage = "";

	protected $userErrorMessage = '';
	protected $emailErrorMessage = '';
	protected $pwdErrorMessage = '';

	function __construct(&$params = "")
	{
		parent::__construct($params);

		$this->usernameFiled = Security::usernameField();
		$this->emailFiled = GetEmailField();

		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) ) {
			$this->sendActivationLink = true;
		}

		// fill global password settings
		$this->headerForms = array( "top" );
		$this->footerForms = array( "below-grid" );

		if ( $this->isMultistepped() )
			$this->bodyForms = array( "above-grid", "steps" );
		else
			$this->bodyForms = array( "above-grid", "grid" );
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();
	}

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer( $this->tName );
	}

	protected function setDataSource() {
		$this->dataSource = getLoginDataSource();
	}	
	
	/**
	 * Activate user by email link
	 */
	protected function activateNewUser()
	{
		$username = base64_decode( @$_GET["u"] );
		$code = @$_GET["code"];
		$usernameCondition = DataCondition::FieldEquals( 
			Security::usernameField(), 
			$username, 
			0, 
			Security::caseInsensitiveUsername() ? dsCASE_INSENSITIVE : dsCASE_STRICT 
		);

		$dc = new DsCommand();
		$dc->filter = $usernameCondition;

		$rs = $this->dataSource->getSingle( $dc );		
		if( !$rs ) {
			echo mlang_message('SEC_INVALID_REG_CODE');
			return;
		}
		
		$data = $this->dataSource->decryptRecord( $rs->fetchAssoc() );
		
		if( !$data )
		{
			echo mlang_message('SEC_INVALID_REG_CODE');
			return;
		}

		$dbPassword = $data[ Security::passwordField() ];
		if( !Security::verifyActivationCode( $code, $username, $dbPassword ) )
		{
			echo mlang_message('SEC_INVALID_REG_CODE');
			return;
		}

		$dcUpdate = new DsCommand();
		$dcUpdate->values[ ProjectSettings::getSecurityValue( 'dbProvider', 'activationField' ) ] = 1;
		$dcUpdate->filter = $usernameCondition;
			
		$this->dataSource->updateSingle( $dcUpdate, false );

		$sessionLevel = Security::userSessionLevel();
		if( $sessionLevel === LOGGED_ACTIVATION_PENDING ) {
			//	verify if 2factor activation needed
			$twofSettings =& Security::twoFactorSettings();
			if( $twofSettings["available"] && ( $twofSettings["required"] || $twofSettings["enable"] ) ) {
				Security::elevateSession( LOGGED_2FSETUP_PENDING );
			}
			else {
				Security::elevateSession();
				Security::auditLoginSuccess();
				Security::callAfterLogin();
			}
			$sessionLevel = Security::userSessionLevel();
		}


		$this->switchToSuccessPage();

		$this->hideItemType('register_activate_message');
		$this->body["begin"].= "<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
		<input type=\"Hidden\" name=\"username\" value=\"".runner_htmlspecialchars($username)."\">";
		$this->body["begin"].= "</form>";

		$onClick = "";
		if( $sessionLevel === LOGGED_2FSETUP_PENDING ) {
			$continueUrl = GetTableLink("userinfo");
		} else if( $sessionLevel === LOGGED_FULL ) {
			//	probably landing page instead of menu
			$continueUrl = GetTableLink("menu");
		} else {
			$continueUrl = GetTableLink("login");
			$onClick = 'onclick="document.forms.loginform.submit();return false;"';
		}
		$this->xt->assign("body", $this->body);
		//$this->xt->assign("registered_block", true);
		$this->xt->assign("loginlink_attrs", 'href="' . $continueUrl . '" '.$onClick.' id="ProceedToLogin"');

		//	display register_success page
		$this->display( $this->templatefile );
	}

	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;

		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRegister") )
			$globalEvents->BeforeProcessRegister( $this );

		if( $this->action == "activate" && ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) ) {
			return $this->activateNewUser();
		}

		if( $this->action == "Register" )
		{
			$this->registerSuccess = $this->registerNewUser();
			$this->doAfterRegistrationEvent();
			
			$this->notifyUserAndAdmin();

			if( !$this->registerSuccess && $this->mode == REGISTER_POPUP )
			{
				$returnJSON = array();
				$returnJSON['success'] = false;

				if( strlen( $this->message ) )
					$returnJSON['message'] = $this->message;

				if( !$this->isCaptchaOk )
					$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();

				echo printJSON( $returnJSON );
				exit();
			}
		}

		// proccess captcha
		if( $this->captchaExists() )
			$this->displayCaptcha();

		if( !$this->registerSuccess )
		{
			$this->prepareEditControls();
			$this->prepareSteps();
			$this->prepareReadonlyFields();
		}


		if( $this->registerSuccess && !$this->sendActivationLink || !$this->registerSuccess )
		{
			$this->addCommonJs();
			$this->fillSetCntrlMaps();
			$this->addButtonHandlers();
		}

		if( $this->registerSuccess )
		{
			$this->tryLoginNewUser();
			$this->pageName = $this->pSet->getDefaultPage( $this->successPageType() );
			$this->pSet = new ProjectSettings( $this->tName, $this->pageType, $this->pageName, GLOBAL_PAGES );
			$this->xt->assign("supertop_block", true);
			$this->pageData["buttons"] = array_merge( $this->pageData["buttons"], $this->pSet->buttons() );
			foreach( $this->pSet->buttons() as $b ) {
				if( !$b ) {
					continue;
				}
				$this->AddJSFile( "usercode/button_".$b.".js" );
			}
		}

		$this->doCommonAssignments();

		$this->showPage();
	}

	function addCommonJs() {
		parent::addCommonJs();

		// users table pSet
		$pSet = new ProjectSettings( $this->tName, $this->pageType, $this->pageName );
		if( $pSet->hasJsEvents() )
			$this->AddJSFile("usercode/pageevents_".GetTableURL( $this->pageTable ).".js");
	}

	/**
	 * Run after registration event
	 */
	protected function doAfterRegistrationEvent()
	{
		global $globalEvents;

		if( $this->registerSuccess && $globalEvents->exists("AfterSuccessfulRegistration") )
			$globalEvents->AfterSuccessfulRegistration( $this->regValues, $this );

		if( !$this->registerSuccess && $globalEvents->exists("AfterUnsuccessfulRegistration") )
			$globalEvents->AfterUnsuccessfulRegistration( $this->regValues, $this->message, $this );
	}

	/**
	 * Send emails to a new registered user or/and to admin-user
	 */
	protected function notifyUserAndAdmin()
	{
		if( !$this->registerSuccess )
			return;

		if( ProjectSettings::getSecurityValue('registration', 'notifyUser' ) ) {
			$sentMailResults = $this->sendUserRegisterMessage();
			if( !@$sentMailResults["mailed"] ) {
				$this->message.= " ".$sentMailResults["message"];
				if ( $this->sendActivationLink )
					$this->sendActivationLinkFailedMessage = $sentMailResults["message"];
			}
		}

		if( ProjectSettings::getSecurityValue('registration', 'notifyAdmin' ) ) {
			$sentMailResults1 = $this->sendAdminRegisterMessage();
			if( !@$sentMailResults1["mailed"] ) {
				$this->message.= " ".$sentMailResults1["message"];
			}
		}
	}

	/**
	 * Send an email to a new registered user
	 * @return Array
	 */
	protected function sendUserRegisterMessage()
	{
		$data = array();
		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) ) {
			$data["activateurl"] = $this->getUserActivationUrl( $this->regValues[Security::usernameField()], $this->prepActivationCode );
		}

		foreach( $this->pSet->getPageFields() as $uf ) {
			$data[ GoodFieldName( $uf . "_value" ) ] = $this->regValues[ $uf ];
		}

		$strEmail = $this->strEmail;
		if( ( $pos = strpos($this->strEmail,"\r") ) !== FALSE || ($pos = strpos( $this->strEmail, "\n") ) !== FALSE )
			$strEmail = substr( $this->strEmail, 0, $pos );

		$data["email_value"] = $strEmail;

		$html = isEmailTemplateUseHTML("userregister");
		return RunnerPage::sendEmailByTemplate($strEmail, "userregister", $data, $html);
	}

	/**
	 * Send an email to admin-user
	 * @return Array
	 */
	protected function sendAdminRegisterMessage()
	{
		$data = array();
		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' )	)
			$data["activateurl"] = $this->getUserActivationUrl( $this->regValues[Security::usernameField()], $this->prepActivationCode );

		foreach( $this->pSet->getPageFields() as $uf ) {
			$data[ GoodFieldName( $uf . "_value" ) ] = $this->regValues[ $uf ];
		}

		$strEmail = ProjectSettings::getSecurityValue('registration', 'adminEmail' );

		$html = isEmailTemplateUseHTML("adminregister");
		return RunnerPage::sendEmailByTemplate($strEmail, "adminregister", $data, $html);
	}

	/**
	 *
	 */
	protected function registerNewUser()
	{
		global $globalEvents;

		$allow_registration = true;

		if ( !$this->checkCaptcha() )
			$allow_registration = false;

		$values = array();
		$blobfields = array();
		$filename_values = array();
		foreach( $this->pSet->getPageFields() as $uf )
		{
			$_control = $this->getControl( $uf, $this->id );;
			$_control->readWebValue($values, $blobfields, NULL, NULL, $filename_values);;
		}

		//	add filenames to values
		foreach( $filename_values as $key => $value )
		{
			$values[ $key ] = $value;
		}

		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) ) {
			$values[ ProjectSettings::getSecurityValue( 'dbProvider', 'activationField' ) ] = 0;
		}

		$this->strUsername = $values[Security::usernameField()];
		$this->strPassword = $values[Security::passwordField()];
		if( Security::emailField() ) {
			$this->strEmail = $values[Security::emailField()];
		}
		$this->regValues = $values;

		if( !$this->checkRegisterData( $this->strUsername, $this->strPassword, $this->strEmail )
			|| !$this->checkDeniedDuplicated( $values ) ) {
			$allow_registration = false;
		}

		$retval = $allow_registration;
		$sqlValues = array();
		if( $retval && $globalEvents->exists("BeforeRegister") )
			$retval = $globalEvents->BeforeRegister($values, $sqlValues, $this->message, $this);

		if( !$retval )
			return false;

		$originalpassword = $values[ Security::passwordField() ];

		//	hash password
		if( ProjectSettings::getSecurityValue( 'registration', 'hashPassword' ) && !$this->cipherer->isFieldEncrypted( Security::passwordField() ) ) {
			$values[ Security::passwordField() ] = Security::hashPassword( $originalpassword );
		}

		$dc = new DsCommand();
		$dc->values = &$values;
		$dc->advValues = array();
		foreach( $sqlValues as $field => $sqlValue ) {
			$dc->advValues[ $field ] = new DsOperand( dsotSQL, $sqlValue );
		}			
		
		$retval = $this->dataSource->insertSingle( $dc );

		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) ) {
			$this->prepActivationCode = Security::getActivationCode(
				$this->strUsername,
				$values[ Security::passwordField() ]
			);
		}
		
		$values[Security::passwordField()] = $originalpassword;

		if( !$retval ) {
			$this->setDatabaseError( $this->dataSource->lastError() );
		} else {
			$this->ProcessFiles();			
		}

		return !!$retval;
	}

	/**
	 * Check if the registration data is valid
	 * @param String strUsername
	 * @param String strPassword
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkRegisterData( $strUsername, $strPassword, $strEmail )
	{
		$ret = true;

		//	check if entered username already exists
		if( !strlen($strUsername) )
		{
			$this->userErrorMessage = mlang_message('USER_NOEMPTY');
			$ret = false;
		}
		else if( !$this->checkIfUsernameUnique( $strUsername ) )
		{
			$this->userErrorMessage = mlang_message('USERNAME_EXISTS1')." <i>".runner_htmlspecialchars( $strUsername )."</i> ".mlang_message('USERNAME_EXISTS2');
			$ret = false;
		}

		if( Security::emailField() && $this->pSet->appearOnPage( Security::emailField() ) )
		{
			//	check if entered email already exists
			if( !strlen($strEmail) )
			{
				$this->emailErrorMessage = mlang_message('VALID_EMAIL');
				$ret = false;
			}
			else if( !$this->checkIfEmailUnique( $strEmail ) )
			{
				$this->emailErrorMessage = mlang_message('EMAIL_ALREADY1')." <i>". runner_htmlspecialchars( $strEmail )."</i> ".mlang_message('EMAIL_ALREADY2');
				$ret = false;
			}
		}

		if( ProjectSettings::passwordValidationValue( 'strong' ) )
		{
			if( !checkpassword( $strPassword ) )
			{
				$this->pwdErrorMessage = $this->getPwdStrongFailedMessage();
				$ret = false;
			}
		}

		return $ret;
	}


	/**
	 * @param String strUsername
	 * @return Boolean
	 */
	protected function checkIfUsernameUnique( $strUsername )
	{
		if( $this->cipherer->isFieldEncrypted(Security::usernameField()) )
			$sUsername = $this->cipherer->MakeDBValue(Security::usernameField(), $strUsername, "", true);
		else
			$sUsername = add_db_quotes(Security::usernameField(), $strUsername);

		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( Security::loginTable() )
			. " where " .
			$this->connection->comparisonSQL(
				$this->getFieldSQLDecrypt(Security::usernameField()),
				$sUsername,
				Security::caseInsensitiveUsername()
			);

		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;
	}

	/**
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkIfEmailUnique( $strEmail )
	{
		if( $this->cipherer->isFieldEncrypted(Security::emailField()) )
			$sEmail = $this->cipherer->MakeDBValue(Security::emailField(), $strEmail, "", true);
		else
			$sEmail = add_db_quotes(Security::emailField(), $strEmail);

		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( Security::loginTable() )
			." where ".
			$this->connection->comparisonSQL(
				$this->getFieldSQLDecrypt(Security::emailField()),
				$sEmail,
				true
			);

		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;
	}

	/**
	 * Set values for the page's controls
	 */
	protected function prepareEditControls()
	{
		$regFields = $this->pSet->getPageFields();

		if( !count($this->regValues) )
		{
			foreach( $regFields as $f )
			{
				$defaultValue = $this->pSetSearch->getDefaultValue( $f );
				if( strlen($defaultValue) )
					$this->regValues[ $f ] = $defaultValue;
			}
		}

		foreach($regFields as $fName)
		{
			$gfName = GoodFieldName($fName);

			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["value"] = $this->regValues[ $fName ];
			$parameters["pageObj"] = $this;
			$parameters["suggest"] = ($fName == Security::passwordField() || $fName == $this->usernameFiled || $fName == $this->emailFiled);

			if( $fName == Security::passwordField() )
			{
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
			}

			// Add validation
			if( $fName == $this->usernameFiled || $fName == Security::passwordField() || $fName == $this->emailFiled )
				$parameters["validate"] = Array('basicValidate' => Array ( 'IsRequired' ));
			else
				$parameters["validate"] = $this->pSet->getValidationData( $fName );

			$controls = array('controls' => array());
			$controls["controls"]["id"] = $this->id;
			$controls["controls"]["mode"] = "add";
			$controls["controls"]["ctrlInd"] = 0;
			$controls["controls"]['suggest'] = $parameters["suggest"];
			$controls["controls"]['fieldName'] = $fName;

			$this->xt->assign($gfName."_fieldblock", true);
			$this->xt->assign($gfName."_tabfieldblock", true);

			$firstElementId = $this->getControl($fName, $this->id)->getFirstElementId();
			if ( $firstElementId )
				$this->xt->assign("labelfor_" . goodFieldName($fName), $firstElementId);

			if( $this->pSet->getEditFormat( $fName ) == EDIT_FORMAT_CHECKBOX ) {
				$parameters[ "xt" ] = $this->xt;
				$parameters[ "clearVar" ] = $gfName . "_forward_control";
			}
			$this->xt->assign_function($gfName."_editcontrol", "xt_buildeditcontrol", $parameters );
			if( $this->pSet->getEditFormat( $fName ) == EDIT_FORMAT_CHECKBOX ) {
				$parameters[ "xt" ] = $this->xt;
				$parameters[ "clearVar" ] = $gfName . "_editcontrol";
				$this->xt->assign_function( $gfName . "_forward_control", "xt_buildforwardcontrol", $parameters );
				
				$this->xt->assign( $gfName . '_label_class' , 'r-checkbox-label' );
			}

			$preload = $this->fillPreload($fName, $regFields, $this->regValues);
			if( $preload !== false)
				$controls["controls"]['preloadData'] = $preload;

			$this->fillControlsMap( $controls );
			$this->fillControlFlags( $fName, $fName == $this->usernameFiled || $fName == Security::passwordField() || $fName == $this->emailFiled );

			// Confirm field for re-enter password
			if( $fName == Security::passwordField() && Security::passwordField() != $this->usernameFiled)
			{
				$parameters = array();
				$parameters["id"] = $this->id;
				$parameters["mode"] = "add";
				$parameters["field"] = "confirm";
				$parameters["format"] = "Password";
				$parameters["suggest"] = true;
				$parameters["pageObj"] = $this;
				$parameters["validate"] = array( 'basicValidate' => array('IsRequired'));

				$parameters["extraParams"] = array();
				$parameters["extraParams"]["isConfirm"] = true;
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;

				$controls = array('controls' => array());
				$controls["controls"]['id'] = $this->id;
				$controls["controls"]['mode'] = "add";
				$controls["controls"]['ctrlInd'] = 0;
				$controls["controls"]['suggest'] = true;
				$controls["controls"]['fieldName'] = "confirm";

				$this->xt->assign("confirm_label", true);
				if( $this->is508 )
					$this->xt->assign_section("confirm_label", "<label for=\"value_confirm_".$this->id."\">", "</label>");

				$this->xt->assign("labelfor_" . goodFieldName($fName) . "_confirm", "value_confirm_".$this->id);

				$this->xt->assign_function("confirm_editcontrol1", "xt_buildeditcontrol", $parameters );
				$this->xt->assign("confirm_block", true);
				$this->xt->assign("confirm_fieldblock", true);

				$this->fillControlsMap( $controls );
				$this->fillControlFlags( "confirm", true );
			}
		}
	}

	/**
	 *
	 */
	protected function prepareReadonlyFields()
	{
		//	show readonly fields
		foreach( $this->pSet->getPageFields() as $uf )
		{
			if( $this->pSet->getEditFormat( $uf ) == EDIT_FORMAT_READONLY )
				$this->readOnlyFields[ $uf ] = $this->showDBValue( $uf , $this->regValues );
		}
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{
		return "_register_captcha";
	}

	function getCaptchaId()
	{
		return "register";
	}

	/**
	 *
	 */
	public function setDatabaseError( $messageText )
	{
		//global $strMessage;
		$this->message = $messageText;
	}

	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("legend", true);

		$this->xt->assign("buttons_block", true);

		$this->xt->assign("message_block", true);
		if ( strlen($this->message) ) {
			$messageClass = "alert-danger";
			if ( $this->registerSuccess )
			{
				$messageClass = "alert-success";
			}

			$this->xt->assign("message_class", $messageClass );
			$this->xt->assign("message", $this->message);
		} else {
			$this->hideElement("message");
		}
		
		$addStyle = "";
		if ( $this->isMultistepped() )
			$addStyle = " style=\"display: none;\"";

		$this->xt->assign("submit_attrs", "id=\"saveButton".$this->id."\"" . $addStyle);

		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) && $this->registerSuccess )
		{
			$this->xt->assign( "firstAboveGridCell", true );

			$this->xt->assign("email", $this->strEmail);
			$this->xt->assign("activation_block", true);

			$this->xt->assign("activate_message_class",
				$this->sendActivationLinkFailedMessage ? "alert-danger" : "alert-success" );

			foreach ( $this->pSet->activatonMessages() as $itemId => $mLString )
			{
				if( $this->sendActivationLinkFailedMessage )
					$label = 'Error sending email.' . $this->sendActivationLinkFailedMessage;
				else
					$label = str_replace( "%email%", runner_htmlspecialchars( $this->strEmail ), GetMLString($mLString) );

				$this->xt->assign("label_".$itemId, $label );
			}
		}
		if( $this->registerSuccess )
		{
			$this->xt->assign("registered_block", true);
			$continueUrl = GetTableLink("menu");
			if( Security::userSessionLevel() === LOGGED_2FSETUP_PENDING ) {
				$continueUrl = GetTableLink("userinfo");
			}
			$this->xt->assign("loginlink_attrs",'href="'. $continueUrl .'" id="ProceedToLogin"');
			if( $this->mode == REGISTER_POPUP )
			{
				$this->xt->assign("close_win_btn", true);
				$this->xt->assign("closewindow_attrs", 'id="closeWindowRegister"');
			}
		}

		if( $this->mode == REGISTER_POPUP )
			$this->xt->assign("backlink_attrs", 'style="display:none"');
		if( $this->mode == REGISTER_SIMPLE )
			$this->assignBody();
	}

	/**
	 *
	 */
	protected function assignBody()
	{
		if( $this->registerSuccess && !ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) )
		{
			$this->body["begin"].= GetBaseScriptsForPage( false )
				."<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
					<input type=\"Hidden\" name=username value=\"".runner_htmlspecialchars($this->strUsername)."\">".
					"</form>";


			$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
			$this->xt->assign("body", $this->body);
			return;
		}

		parent::assignBody();
	}

	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;

		if( $this->registerSuccess )
		{
			$this->switchToSuccessPage();
			$this->bodyForms = array( "above-grid", "grid" );
			if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) ) {
				//	this must happen after switchToSuccessPage call
				$this->hideItemType("register_proceed");
				$this->hideItemType("register_activated_message");
			}
		}

		if( $globalEvents->exists("BeforeShowRegister") )
			$globalEvents->BeforeShowRegister($this->xt, $this->templatefile, $this);

		if ( $this->mode == REGISTER_POPUP )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body); //? true fore register success ?

			$this->displayAJAX($this->templatefile, $this->id + 1);
			exit();
		}

		$this->display( $this->templatefile );
		return;
	}

	/**
	 * @return Number
	 */
	public static function readRegisterModeFromRequest()
	{
		if( postvalue("onFly") == 1 ) //fix it
			return REGISTER_POPUP;

		return REGISTER_SIMPLE;
	}

	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{
		if( @$_POST["btnSubmit"] )
			return @$_POST["btnSubmit"];

		return postvalue("a");
	}

	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "register_message" );
		}
		return parent::element2Item( $name );
	}


	/**
	 * Check if some values are duplicated for the fields not allowing duplicates
	 * @param Array ( fieldName => fieldValue , ... )
	 * @return Boolean
	 */
	public function checkDeniedDuplicated( $values ) {
		$usermessage = "";
		$ret = $this->hasDeniedDuplicateValues( $values, $usermessage );
		if( $ret )
			$this->message = $usermessage;

		return !$ret;
	}
	/**
	 * Try to login the new user.
	 * Create full or provisional session if possible
	 */
	protected function tryLoginNewUser() {
		if( !$this->registerSuccess ) {
			return false;
		}
		$userData = Security::fetchUserData( $this->strUsername, "", true );
		if( !$userData ) {
			return false;
		}

		//	always use username from DB to avoid upper/lower case issues
		$username = $userData[ Security::usernameField() ];

		if( ProjectSettings::getSecurityValue( 'registration', 'sendActivationLink' ) && $userData[ ProjectSettings::getSecurityValue( 'dbProvider', 'activationField' ) ] != 1 ) {
			//	create 'activation' provisional session
			Security::createProvisionalSession( Security::dbProvider(), LOGGED_ACTIVATION_PENDING, $username, $userData[ Security::fullnameField() ], $userData );
		} else {
			// create 2fsetup provisional session or a full one
			$twoSettings =& Security::twoFactorSettings();
			if( $twoSettings["enable"] || $twoSettings["required"] ) {
				Security::createProvisionalSession( Security::dbProvider(), LOGGED_2FSETUP_PENDING, $username, $userData[ Security::fullnameField() ], $userData );
			} else {
				Security::createUserSession( Security::dbProvider(), $username, $userData[ Security::fullnameField() ], $userData );
				Security::auditLoginSuccess();
				Security::callAfterLogin();
			}
		}
		return true;
	}

	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		if( $this->userErrorMessage ) {
			$settings['msg_userError'] = $this->userErrorMessage;
		}
		if( $this->emailErrorMessage ) {
			$settings['msg_emailError'] = $this->emailErrorMessage;
		}
		if( $this->pwdErrorMessage ) {
			$settings['msg_passwordError'] = $this->pwdErrorMessage;
		}
		foreach( $this->pSet->getPageFields() as $fName ) {
			if( $fName == Security::passwordField() ) {
				$settings['passFieldName'] = $fName;
			}
			if( $fName == $this->usernameFiled ) {
				$settings['userFieldName'] = $fName;
			}
			if( $fName == $this->emailFiled ) {
				$settings['emailFieldName'] = $fName;
			}
		}


		
		return $settings;
	}

}
?>