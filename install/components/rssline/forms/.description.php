<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$arComponentDescription = array(
	'NAME' => GetMessage('RS.FLYAWAY.FORMS_SETTINGS.NAME'),
	'DESCRIPTION' => GetMessage('RS.FLYAWAY.FORMS_SETTINGS.DESCRIPTION'),
	'ICON' => '',
	'PATH' => array(
		'ID' => 'collect_com',
		'SORT' => 2000,
		'NAME' => GetMessage('RS.FLYAWAY.FORMS_SETTINGS.PATH_NAME_COLLECTED'),
		'CHILD' => array(
			'ID' => 'FLYAWAY',
			'NAME' => GetMessage('RS.FLYAWAY.FORMS_SETTINGS.NAMEPATH_NAME_FLYAWAY'),
			'SORT' => 8000,
		),
	),
);