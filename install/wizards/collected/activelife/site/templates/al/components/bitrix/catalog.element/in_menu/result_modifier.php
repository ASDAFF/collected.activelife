<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!CModule::IncludeModule('collected.devlibrary'))
	return;

$arAllPicParams = array('MORE_PHOTO_CODE'=>$arParams['ADDITIONAL_PICT_PROP'],'SKU_MORE_PHOTO_CODE'=>$arParams['OFFER_ADDITIONAL_PICT_PROP']);
$arSizes = array('WIDTH'=>'200','HEIGHT'=>'200');
$arResult['IMAGES'] = RSDevLibOffersExtension::GetAllPictures($arSizes,$arResult,$arAllPicParams);