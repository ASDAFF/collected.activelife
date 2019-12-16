<?php
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$module_id = 'collected.developkit';

if($obModule = CModule::CreateModuleObject($module_id)){
	if(!$obModule->IsInstalled()){
		$obModule->InstallDB();
		$obModule->InstallEvents();
		$obModule->InstallOptions();
		$obModule->InstallFiles();
		$obModule->InstallPublic();
	}
}