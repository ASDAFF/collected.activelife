<?
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class collected_devlibrary extends CModule
{
	var $MODULE_ID = "collected.devlibrary";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function collected_devlibrary()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage("SCOM_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("SCOM_INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = GetMessage("SPER_PARTNER");
		$this->PARTNER_URI = GetMessage("PARTNER_URI");
	}

	// Install functions
	function InstallDB()
	{
		global $DB, $DBType, $APPLICATION;
		RegisterModule("collected.devlibrary");
		return TRUE;
	}

	function InstallEvents()
	{
		RegisterModuleDependences("iblock", "OnAfterIBlockElementAdd", "collected.devlibrary", "RSDevLibOffersExtension", "OnAfterIBlockElementAddHandler",10000);
		RegisterModuleDependences("iblock", "OnAfterIBlockElementUpdate", "collected.devlibrary", "RSDevLibOffersExtension", "OnAfterIBlockElementUpdateHandler",10000);
		RegisterModuleDependences("catalog", "OnPriceAdd", "collected.devlibrary", "RSDevLibOffersExtension", "OnPriceUpdateAddHandler",10000);
		RegisterModuleDependences("catalog", "OnPriceUpdate", "collected.devlibrary", "RSDevLibOffersExtension", "OnPriceUpdateAddHandler",10000);
		return TRUE;
	}

	function InstallOptions()
	{
		COption::SetOptionString("collected.devlibrary", "fakeprice_active", "Y" );
		COption::SetOptionString("collected.devlibrary", "propcode_cml2link", "CML2_LINK" );
		COption::SetOptionString("collected.devlibrary", "propcode_fakeprice", "PROD_PRICE_FALSE" );
		return TRUE;
	}

	function InstallFiles()
	{
		COption::SetOptionString("collected.devlibrary", "no_photo_path", "/bitrix/modules/collected.devlibrary/img/no-photo.png");
		$arFile = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.devlibrary/img/no-photo.png");
		$fid = CFile::SaveFile($arFile, "collected_devlibrary_nophoto");
		COption::SetOptionInt("collected.devlibrary", "no_photo_fileid", $fid);
		
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.devlibrary/install/js", $_SERVER["DOCUMENT_ROOT"]."/bitrix/js", true, true);
		return TRUE;
	}

	function InstallPublic()
	{
		return TRUE;
	}

	// UnInstal functions
	function UnInstallDB()
	{
		global $DB, $DBType, $APPLICATION;
		UnRegisterModule("collected.devlibrary");
		return TRUE;
	}

	function UnInstallEvents()
	{
		UnRegisterModuleDependences("iblock", "OnAfterIBlockElementAdd", "collected.devlibrary", "RSDevLibOffersExtension", "OnAfterIBlockElementAddHandler");
		UnRegisterModuleDependences("iblock", "OnAfterIBlockElementUpdate", "collected.devlibrary", "RSDevLibOffersExtension", "OnAfterIBlockElementUpdateHandler");
		UnRegisterModuleDependences("catalog", "OnPriceAdd", "collected.devlibrary", "RSDevLibOffersExtension", "OnPriceUpdateAddHandler");
		UnRegisterModuleDependences("catalog", "OnPriceUpdate", "collected.devlibrary", "RSDevLibOffersExtension", "OnPriceUpdateAddHandler");
		return TRUE;
	}

	function UnInstallOptions()
	{
		COption::RemoveOption("collected.devlibrary");
		return TRUE;
	}

	function UnInstallFiles()
	{
		DeleteDirFilesEx("/bitrix/js/collected.devlibrary");
		return TRUE;
	}

	function UnInstallPublic()
	{
		return TRUE;
	}

    function DoInstall()
    {
		global $APPLICATION, $step;
		$keyGoodDB = $this->InstallDB();
		$keyGoodEvents = $this->InstallEvents();
		$keyGoodOptions = $this->InstallOptions();
		$keyGoodFiles = $this->InstallFiles();
		$keyGoodPublic = $this->InstallPublic();
		$APPLICATION->IncludeAdminFile(GetMessage("SCOM_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.devlibrary/install/install.php");
    }

    function DoUninstall()
    {
		global $APPLICATION, $step;
		$keyGoodFiles = $this->UnInstallFiles();
		$keyGoodEvents = $this->UnInstallEvents();
		$keyGoodOptions = $this->UnInstallOptions();
		$keyGoodDB = $this->UnInstallDB();
		$keyGoodPublic = $this->UnInstallPublic();
		$APPLICATION->IncludeAdminFile(GetMessage("SCOM_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.devlibrary/install/uninstall.php");
    }
}