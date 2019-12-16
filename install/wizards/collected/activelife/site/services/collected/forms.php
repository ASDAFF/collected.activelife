<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

WizardServices::IncludeServiceLang("forms.php", $lang);

global $DB, $DBType, $APPLICATION;

if(!function_exists('Collected_addEV')) {
	function Collected_addEV($arEventFields=array()) {
		global $DB;
		$EventTypeID = 0;
		$et = new CEventType;
		$EventTypeID = $et->Add($arEventFields);
		return $EventTypeID;
	}
}

$arData = array(
	'COLLECTED_RECALL',
	'COLLECTED_FEEDBACK',
	'COLLECTED_BUY1CLICK',
);

$arSites = array();
$rsSites = CSite::GetList($by="sort", $order="desc", array());
while ($arSite = $rsSites->Fetch()) {
	$arSites[] = $arSite['LID'];
}

if( is_array($arData) && count($arData)>0 ) {

	$ev = new CEventMessage;

	foreach($arData as $EVENT_TYPE) {
		$EventTypeID = 0;
		$arEventFields = array(
			'LID'           => 'ru',
			'EVENT_NAME'    => $EVENT_TYPE,
			'NAME'          => GetMessage('COLLECTED.EVENT_NAME_.'.$EVENT_TYPE),
			'DESCRIPTION'   => GetMessage('COLLECTED.EVENT_DESCRIPTION_.'.$EVENT_TYPE),
		);
		$EventTypeID = Collected_addEV($arEventFields);
		if($EventTypeID>0) {
			$arTemplate = array(
				'ACTIVE' 		=> 'Y',
				'EVENT_NAME' 	=> $EVENT_TYPE,
				'LID'			=> $arSites,
				'EMAIL_FROM'	=> '#DEFAULT_EMAIL_FROM#',
				'EMAIL_TO'		=> '#EMAIL_TO#',
				'BCC'			=> '',
				'SUBJECT'		=> GetMessage('COLLECTED.TEMPLATE_SUBJECT_.'.$EVENT_TYPE),
				'BODY_TYPE'		=> 'text',
				'MESSAGE'		=> GetMessage('COLLECTED.TEMPLATE_MESSAGE_.'.$EVENT_TYPE),
			);
			$EventTemplateID = $ev->Add($arTemplate);
		}
	}

}