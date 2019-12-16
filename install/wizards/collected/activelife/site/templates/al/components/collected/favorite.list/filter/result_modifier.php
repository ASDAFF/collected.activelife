<?php
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

use Bitrix\Main\Config\Option;


if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$arParams['LIKES_COUNT_PROP'] = Option::get('collected.activelife', 'propcode_likes', 'LIKES_COUNT');