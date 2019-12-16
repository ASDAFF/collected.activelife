<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Лидеры продаж");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.bestsellers", 
	"catalog", 
	array(
		"COMPONENT_TEMPLATE" => "catalog",
		"HIDE_NOT_AVAILABLE" => "N",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_NAME" => "Y",
		"SHOW_IMAGE" => "Y",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"PAGE_ELEMENT_COUNT" => "20",
		"TEMPLATE_VIEW" => "showcase",
		"NOVELTY_TIME" => "720",
		"USE_FAVORITE" => "Y",
		"USE_SHARE" => "Y",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"SHOW_PARENT" => "N",
		"SHOW_SECTION_URL" => "Y",
		"SECTION_PAGE_MORE_URL" => "#SITE_DIR#sales/bestsellers/",
		"USE_HOVER_POPUP" => "Y",
		"USE_SLIDER_MODE" => "N",
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
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "86400",
		"BY" => "AMOUNT",
		"PERIOD" => "0",
		"FILTER" => array(
			0 => "N",
		),
		"DISPLAY_COMPARE" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"SHOW_PRODUCTS_#CATALOG_IBLOCK_ID#" => "Y",
		"PROPERTY_CODE_#CATALOG_IBLOCK_ID#" => array(
			0 => "",
			1 => "",
		),
		"CART_PROPERTIES_#CATALOG_IBLOCK_ID#" => array(
		),
		"ADDITIONAL_PICT_PROP_#CATALOG_IBLOCK_ID#" => "MORE_PHOTO",
		"LABEL_PROP_#CATALOG_IBLOCK_ID#" => "-",
		"ICON_NOVELTY_PROP_#CATALOG_IBLOCK_ID#" => "ICON_NOVELTY",
		"ICON_DEALS_PROP_#CATALOG_IBLOCK_ID#" => "ICON_DEALS",
		"ICON_DISCOUNT_PROP_#CATALOG_IBLOCK_ID#" => "ICON_DISCOUNT",
		"ICON_HITS_PROP_#CATALOG_IBLOCK_ID#" => "ICON_HIT",
		"PROPERTY_CODE_#OFFERS_IBLOCK_ID#" => array(
			0 => "",
			1 => "",
		),
		"CART_PROPERTIES_#OFFERS_IBLOCK_ID#" => array(
			0 => "undefined",
		),
		"ADDITIONAL_PICT_PROP_#OFFERS_IBLOCK_ID#0" => "MORE_PHOTO",
		"OFFER_TREE_PROPS_#OFFERS_IBLOCK_ID#" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
			2 => "STORAGE",
		),
		"OFFER_TREE_COLOR_PROPS_#OFFERS_IBLOCK_ID#" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
		),
		"OFFER_TREE_BTN_PROPS" => array(
			0 => "-",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>