<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!CModule::IncludeModule('collected.activelife'))
	return;

global $APPLICATION;
if($arParams['PROPCODE_MORE_PHOTO']=='')
	$arParams['PROPCODE_MORE_PHOTO'] = 'MORE_PHOTO';
if($arParams['PROPCODE_SKU_MORE_PHOTO']=='')
	$arParams['PROPCODE_SKU_MORE_PHOTO'] = 'SKU_MORE_PHOTO';

$arAllPicParams = array('MORE_PHOTO_CODE'=>$arParams['PROPCODE_MORE_PHOTO'],'SKU_MORE_PHOTO_CODE'=>$arParams['PROPCODE_SKU_MORE_PHOTO']);
$arSizes = array('WIDTH'=>'207','HEIGHT'=>'160');
if(!empty($arResult['ITEMS'])){
	foreach($arResult['ITEMS'] as $key => $arItem){
		$arResult['ITEMS'][$key]['IMAGES'] = RSDevLibOffersExtension::GetAllPictures($arSizes,$arItem,$arAllPicParams);
	}
}