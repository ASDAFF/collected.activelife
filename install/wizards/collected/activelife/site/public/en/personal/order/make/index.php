<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Checkout");
?><?$APPLICATION->IncludeComponent("bitrix:sale.order.ajax", "al_modern", array(
	"PAY_FROM_ACCOUNT" => "Y",
	"COUNT_DELIVERY_TAX" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
	"ALLOW_AUTO_REGISTER" => "Y",
	"SEND_NEW_USER_NOTIFY" => "Y",
	"DELIVERY_NO_AJAX" => "N",
	"TEMPLATE_LOCATION" => "popup",
	"PROP_1" => array(
	),
	"PATH_TO_BASKET" => "#SITE_DIR#personal/cart/",
	"PATH_TO_PERSONAL" => "#SITE_DIR#personal/order/",
	"PATH_TO_PAYMENT" => "#SITE_DIR#personal/order/payment/",
	"PATH_TO_AUTH" => "#SITE_DIR#auth/",
	"SET_TITLE" => "Y" ,
	"SHOW_ACCOUNT_NUMBER" => "Y",
	"DELIVERY_NO_SESSION" => "Y",
	"COMPATIBLE_MODE" => "N",
	"BASKET_POSITION" => "before",
	"BASKET_IMAGES_SCALING" => "adaptive",
	"SERVICES_IMAGES_SCALING" => "adaptive"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>