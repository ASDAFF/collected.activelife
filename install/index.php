<?
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class collected_activelife extends CModule
{
	var $MODULE_ID = "collected.activelife";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function collected_activelife()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage("COLLECTED.ACTIVELIFE.INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("COLLECTED.ACTIVELIFE.INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = GetMessage("COLLECTED.ACTIVELIFE.SPER_PARTNER");
		$this->PARTNER_URI = GetMessage("COLLECTED.ACTIVELIFE.PARTNER_URI");
	}


	function InstallDB($install_wizard = true)
	{
		global $DB, $DBType, $APPLICATION;

		RegisterModule("collected.activelife");
		COption::SetOptionString("collected.activelife", "wizard_version", "1");
		RegisterModuleDependences("main", "OnBeforeProlog", "collected.activelife", "rsActiveLife", "ShowPanel");

        if(CModule::IncludeModule('collected.activelife'))
		{
			rsActiveLife::InstallModuleOptions();
		}
        
		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		global $DB, $DBType, $APPLICATION;

		UnRegisterModule("collected.activelife");
		UnRegisterModuleDependences("main", "OnBeforeProlog", "collected.activelife", "rsActiveLife", "ShowPanel");

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.activelife/install/modules", $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.activelife/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
		//CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.activelife/install/wizards/bitrix/eshop.mobile", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards/bitrix/eshop.mobile", true, true);
		//CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.activelife/install/images",  $_SERVER["DOCUMENT_ROOT"]."/bitrix/images/collected.activelife", true, true);
	
		return true;
	}

	function InstallPublic()
	{
	}

	function UnInstallFiles()
	{
		//DeleteDirFilesEx("/bitrix/images/collected.activelife/");//images
		return true;
	}

	function DoInstall()
	{
		global $APPLICATION, $step;

		$this->InstallFiles();
		$this->InstallDB(false);
		$this->InstallEvents();
		$this->InstallPublic();
		return true;
	}

	function DoUninstall()
	{
		global $APPLICATION, $step;

		$this->UnInstallDB();
		$this->UnInstallFiles();
		$this->UnInstallEvents();
		return true;
	}
}
?>