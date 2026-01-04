<?php
//	legacy data
$cCharset = @$runnerProjectSettings['charset'];
$cCodePage = @$runnerProjectSettings['codepage'];
$useUTF8 = $cCharset == "utf-8";

$loginKeyFields = @ProjectSettings::getProjectValue( 'userTableKeys' );
$cLoginTable = @Security::loginTable();
$cUserNameField = @Security::usernameField();
$cUserGroupField = @Security::groupIdField();
$cPasswordField = @Security::passwordField();
$cDisplayNameField = @Security::fullnameField();
$cUserpicField = @Security::userpicField();

$projectBuildKey = ProjectSettings::getProjectValue('projectBuild');
$wizardBuildKey = ProjectSettings::getProjectValue('wizardBuild');

$projectLanguage = ProjectSettings::ext();

?>