<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Best price");
global $arBestPriceFilter; $arBestPriceFilter = array('!PROPERTY_PROD_BEST_PRICE_VALUE' => false);
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"catalog",
	array(
		"COMPONENT_TEMPLATE" => "catalog",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arBestPriceFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
			2 => "STORAGE",
			3 => "",
		),
		"OFFERS_SORT_FIELD" => "CATALOG_PRICE_1",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "sort",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFERS_LIMIT" => "0",
		"TEMPLATE_VIEW" => "showcase",
		"ADDITIONAL_PICT_PROP" => "MORE_PHOTO",
		"ICON_NOVELTY_PROP" => "ICON_NOVELTY",
		"ICON_DEALS_PROP" => "ICON_DEALS",
		"ICON_DISCOUNT_PROP" => "ICON_DISCOUNT",
		"ICON_HITS_PROP" => "ICON_HIT",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"PARENT_TITLE" => "",
		"SHOW_PARENT" => "N",
		"USE_HOVER_POPUP" => "Y",
		"USE_SLIDER_MODE" => "N",
		"OFFER_ADDITIONAL_PICT_PROP" => "MORE_PHOTO",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
			2 => "STORAGE",
		),
		"OFFER_TREE_COLOR_PROPS" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
		),
		"OFFER_TREE_BTN_PROPS" => array(
			0 => "-",
		),
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"ADD_SECTIONS_CHAIN" => "Y",
		"SET_STATUS_404" => "Y",
		"CACHE_FILTER" => "N",
		"NOVELTY_TIME" => "720",
		"USE_FAVORITE" => "Y",
		"USE_SHARE" => "Y",
		"SHOW_SECTION_URL" => "Y",
		"SECTION_PAGE_MORE_URL" => "",
		"SOCIAL_SERVICES" => array(
			0 => "facebook",
			1 => "gplus",
			2 => "moikrug",
			3 => "moimir",
			4 => "odnoklassniki",
			5 => "twitter",
			6 => "vkontakte",
			7 => "",
		),
		"SOCIAL_SKIN" => "default",
		"SOCIAL_POPUP_TYPE" => "none",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"CONVERT_CURRENCY" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
		),
		"DISPLAY_COMPARE" => "Y",
		"COMPARE_PATH" => "",
		"PAGER_TEMPLATE" => "onair",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"USE_AJAXPAGES" => "Y",
		"USE_AUTO_AJAXPAGES" => "Y",
		"TEMPLATE_AJAXID" => "js_ajax-bestprice"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
