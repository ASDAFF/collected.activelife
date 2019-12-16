<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$APPLICATION->SetTitle("Обратная связь");
?>
<?$APPLICATION->IncludeComponent(
	"rssline:forms",
	"form",
	array(
		"TITLE_FOR_WEBFORM" => "",
		"DESCRIPTION_FOR_WEBFORM" => "",
		"COLLECT_EMAIL_TO" => "#SHOP_EMAIL#",
		"SHOW_FIELDS" => array(
			0 => "RS_NAME",
			1 => "RS_PHONE",
			2 => "RS_EMAIL",
			3 => "RS_TEXTAREA",
		),
		"REQUIRED_FIELDS" => array(
			0 => "RS_NAME",
			1 => "RS_EMAIL",
		),
		"COLLECT_USE_CAPTCHA" => "N",
		"INPUT_NAME_RS_PERSONAL_SITE" => "Ваш сайт",
		"INPUT_NAME_RS_TEXTAREA" => "Комментарий автора",
		"COLLECT_MESSAGE_AGREE" => "Спасибо, ваша заявка принята!",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"AJAX_OPTION_ADDITIONAL" => "",
		"EVENT_TYPE" => "COLLECTED_FEEDBACK",
		"FORM_TITLE" => "Свяжитесь с нами",
		"FORM_DESCRIPTION" => "",
		"EMAIL_TO" => "",
		"USE_CAPTCHA" => "Y",
		"MESSAGE_AGREE" => "Спасибо, ваша заявка принята!",
		"RS_MONOPOLY_EXT_FIELDS_COUNT" => "0",
		"COMPONENT_TEMPLATE" => "fancy"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>