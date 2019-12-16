<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$arResult['OFFERS_IBLOCK_ID'] = 0;
$arSKU = CCatalogSKU::GetInfoByProductIBlock($arParams['IBLOCK_ID']);
if (!empty($arSKU) && is_array($arSKU)) {
	$arResult['OFFERS_IBLOCK_ID'] = $arSKU['IBLOCK_ID'];
}

if (!Bitrix\Main\Loader::includeModule('collected.devlibrary')) {
    return;
}

if ('' != $arParams['ADDITIONAL_PICT_PROP'] && '-' != $arParams['ADDITIONAL_PICT_PROP'])
{
	$arParams['ADDITIONAL_PICT_PROP'] = array($arParams['IBLOCK_ID'] => $arParams['ADDITIONAL_PICT_PROP']);
}
else
{
	$arParams['ADDITIONAL_PICT_PROP'] = array();
}

if ('' != $arParams['ARTICLE_PROP'] && '-' != $arParams['ARTICLE_PROP'])
{
	$arParams['ARTICLE_PROP'] = array($arParams['IBLOCK_ID'] => $arParams['ARTICLE_PROP']);
}

if ($arResult['OFFERS_IBLOCK_ID'])
{
	if ('' != $arParams['OFFER_ADDITIONAL_PICT_PROP'] && '-' != $arParams['OFFER_ADDITIONAL_PICT_PROP'])
	{
		$arParams['ADDITIONAL_PICT_PROP'][$arResult['OFFERS_IBLOCK_ID']] = $arParams['OFFER_ADDITIONAL_PICT_PROP'];
	}
	if ('' != $arParams['OFFER_ARTICLE_PROP'] && '-' != $arParams['OFFER_ARTICLE_PROP'])
	{
		$arParams['ARTICLE_PROP'][$arResult['OFFERS_IBLOCK_ID']] = $arParams['OFFER_ARTICLE_PROP'];
	}
}

if (0 < $arParams['OFFER_ID'])
{
	foreach ($arResult['OFFERS'] as $iOfferKey => $arOffer)
	{
		if ($arOffer['ID'] == $arParams['OFFER_ID'])
		{
			$arResult['OFFERS_SELECTED'] = $iOfferKey;
		}
	}
}

if (Bitrix\Main\Loader::includeModule('collected.devlibrary'))
{
	$params = array(
		'RESIZE' => array(
			'preview' => array(
				'MAX_WIDTH' => 88,
				'MAX_HEIGHT' => 88,
			)
		),
		'DETAIL_PICTURE' => true,
		'ADDITIONAL_PICT_PROP' => $arParams['ADDITIONAL_PICT_PROP']
	);
	RSDevLib::getElementPictures($arResult, $params);
}