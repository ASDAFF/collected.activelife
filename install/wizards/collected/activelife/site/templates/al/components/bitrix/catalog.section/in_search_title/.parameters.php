<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!CModule::IncludeModule('collected.activelife'))
	return;

$arTemplateParameters = array(
	// more photo
	'ADDITIONAL_PICT_PROP' => array(
		'NAME' => GetMessage('MSG_ADDITIONAL_PICT_PROP'),
		'TYPE' => 'STRING',
		'DEFAULT' => 'MORE_PHOTO',
	),
	'OFFER_ADDITIONAL_PICT_PROP' => array(
		'NAME' => GetMessage('MSG_OFFER_ADDITIONAL_PICT_PROP'),
		'TYPE' => 'STRING',
		'DEFAULT' => 'SKU_MORE_PHOTO',
	),
);