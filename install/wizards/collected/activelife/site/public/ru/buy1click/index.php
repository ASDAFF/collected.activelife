<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$APPLICATION->SetTitle("Купить в 1 клик");
?>
<?$APPLICATION->IncludeComponent(
    "rssline:forms",
    "form",
    array(
    "COMPONENT_TEMPLATE" => "form",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "COLLECT_EMAIL_TO" => "#SHOP_EMAIL#",
    "COLLECT_EXT_FIELDS_COUNT" => "1",
    "COLLECT_MESSAGE_AGREE" => "Спасибо, ваша заявка принята!",
    "COLLECT_USE_CAPTCHA" => "N",
    "CACHE_TIME" => "3600",
    "CACHE_TYPE" => "A",
    "DESCRIPTION_FOR_WEBFORM" => "",
    "EMAIL_TO" => "",
    "EVENT_TYPE" => "COLLECTED_BUY1CLICK",
    "FORM_DESCRIPTION" => "",
    "FORM_TITLE" => "Купить в 1 клик",
    "INPUT_NAME_RS_PERSONAL_SITE" => "Ваш сайт",
    "INPUT_NAME_RS_TEXTAREA" => "Комментарий",
    "MESSAGE_AGREE" => "Спасибо, ваша заявка принята!",
    "REQUIRED_FIELDS" => array(
        0 => "RS_NAME",
        1 => "RS_PHONE",
    ),
    "RS_FLYAWAY_FIELD_0_NAME" => "Товар",
    "SHOW_FIELDS" => array(
        0 => "RS_NAME",
        1 => "RS_PHONE",
        2 => "RS_TEXTAREA",
    ),
    "DISABLED_FIELDS" => array(
        0 => "RS_EXT_FIELD_0"
     ),
    "TITLE_FOR_WEBFORM" => "Купить в 1 клик",
    "USE_CAPTCHA" => "Y"
    ),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>