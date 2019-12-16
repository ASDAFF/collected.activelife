<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$APPLICATION->SetTitle("Contact us");
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
			2 => "RS_TEXTAREA",
		),
		"REQUIRED_FIELDS" => array(
			0 => "RS_NAME",
			1 => "RS_PHONE",
		),
		"COLLECT_USE_CAPTCHA" => "N",
		"INPUT_NAME_RS_PERSONAL_SITE" => "Your website",
		"INPUT_NAME_RS_TEXTAREA" => "Author comment",
		"COLLECT_MESSAGE_AGREE" => "Thank you for your application is accepted!",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"AJAX_OPTION_ADDITIONAL" => "",
		"EVENT_TYPE" => "COLLECTED_RECALL",
		"FORM_TITLE" => "Contact us",
		"FORM_DESCRIPTION" => "",
		"EMAIL_TO" => "",
		"USE_CAPTCHA" => "Y",
		"MESSAGE_AGREE" => "Thank you for your application is accepted!",
		"RS_MONOPOLY_EXT_FIELDS_COUNT" => "0",
		"COMPONENT_TEMPLATE" => "form",
		"RS_FLYAWAY_EXT_FIELDS_COUNT" => "0",
		"RS_FLYAWAY_DISABLED_FIELDS" => ""
	),
	false
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>