<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!CModule::IncludeModule('collected.activelife'))
	return;

$arTemplateParameters = array(
	'CATALOG_IBLOCK_TYPE' => array(
		'NAME' => GetMessage('MSG_CATALOG_IBLOCK_TYPE'),
		'TYPE' => 'STRING',
		'DEFAULT' => '',
	),
	'CATALOG_IBLOCK_ID' => array(
		'NAME' => GetMessage('MSG_CATALOG_IBLOCK_ID'),
		'TYPE' => 'STRING',
		'DEFAULT' => '',
	),
	
	// count iblocks (not catalog)
	'COUNT_RESULT_NOT_CATALOG' => array(
		'NAME' => GetMessage('MSG_COUNT_RESULT_NOT_CATALOG'),
		'TYPE' => 'STRING',
		'DEFAULT' => '10',
	),
);