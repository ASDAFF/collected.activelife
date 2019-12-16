<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!CModule::IncludeModule('collected.activelife'))
	return;

$arAllPicParams = array('MORE_PHOTO_CODE'=>$arParams['ADDITIONAL_PICT_PROP'],'SKU_MORE_PHOTO_CODE'=>$arParams['OFFER_ADDITIONAL_PICT_PROP']);
$arSizes = array('WIDTH'=>'60','HEIGHT'=>'50');
if(is_array($arResult['ITEMS']) && count($arResult['ITEMS'])>0){
	foreach($arResult['ITEMS'] as $key => $arItem){
		$arResult['ITEMS'][$key]['IMAGES'] = RSDevLibOffersExtension::GetAllPictures($arSizes,$arItem,$arAllPicParams);
	}
}