<?php
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

use \Bitrix\Main\Loader;

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

if (Loader::includeModule('collected.devlibrary')) {
	$arResult = RSDevLibResultModifier::SearchPage($arResult);
}

