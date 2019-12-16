<?if(!$USER->IsAdmin()) return;
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

IncludeModuleLangFile(__FILE__);

CModule::IncludeModule("collected.activelife");

if(isset($_REQUEST["save"]) && check_bitrix_sessid())
{
	COption::SetOptionInt("collected.activelife", "click_protection_delay", ( IntVal($_REQUEST["click_protection_delay"])<0 ? 0 : IntVal($_REQUEST["click_protection_delay"]) ) );
	COption::SetOptionInt("collected.activelife", "request_delay", ( IntVal($_REQUEST["request_delay"])<0 ? 0 : IntVal($_REQUEST["request_delay"]) ) );
	COption::SetOptionString("collected.activelife", "show_mouse_loading", ( $_REQUEST["show_mouse_loading"]=="Y" ? "Y" : "N" ) );
	COption::SetOptionString("collected.activelife", "propcode_color", ( $_REQUEST["propcode_color"] ) );
	COption::SetOptionString("collected.activelife", "propcode_brands", ( $_REQUEST["propcode_brands"] ) );
	COption::SetOptionString("collected.activelife", "propcode_brands_img", ( $_REQUEST["propcode_brands_img"] ) );
	COption::SetOptionString("collected.activelife", "propcode_size", ( $_REQUEST["propcode_size"] ) );
	COption::SetOptionString("collected.activelife", "filter_price_view", ( $_REQUEST["filter_price_view"] ) );
	if(is_array($_REQUEST["color_table_rgb"]) && count($_REQUEST["color_table_rgb"])>0 && is_array($_REQUEST["color_table_name"]) && count($_REQUEST["color_table_name"])>0)
	{
		$c = 0;
		foreach($_REQUEST["color_table_rgb"] as $key => $rgb)
		{
			if(trim($rgb)!="" && trim($_REQUEST["color_table_name"][$key])!="")
			{
				COption::SetOptionString("collected.activelife", "color_table_name_".$c, trim($_REQUEST["color_table_name"][$key]) );
				COption::SetOptionString("collected.activelife", "color_table_rgb_".$c, trim($rgb) );
				$c++;
			}
		}
		COption::SetOptionString("collected.activelife", "color_table_count", $c);
	}
}

$arrFilterPriceView = array(
	"slider" => GetMessage("RSAL_FILTER_PRICE_VIEW_SLIDER"),
	"group" => GetMessage("RSAL_FILTER_PRICE_VIEW_GROUP"),
);

$aTabs = array(
	array("DIV" => "collected_al_color_table", "TAB" => GetMessage("RSAL_COLOR_TABLE"), "ICON" => "settings", "TITLE" => GetMessage("RSAL_COLOR_TABLE_TITLE")),
);
$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();
?><script type="text/javascript">
function OnColorPicker(val,obj){
	document.getElementById(obj.oPar.id).value = val;
}
</script><?
?><form name="activelife_options" method="post" action="<?=$APPLICATION->GetCurPage()?>?mid=<?=urlencode($mid)?>&amp;lang=<?=LANGUAGE_ID?>"><?
$tabControl->BeginNextTab();
	?><tr class="heading"><?
		?><td colspan="3"><?=GetMessage("RSAL_PROTECTION_SETTINGS")?></td><?
	?></tr><?
	?><tr><?
		$click_protection_delay = COption::GetOptionInt("collected.activelife", "click_protection_delay", 1500 );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_CLICK_PROTECTION_DELAY")?></td><?
		?><td><input type="text" name="click_protection_delay" value="<?=$click_protection_delay?>" />&nbsp;&nbsp;<?=GetMessage("RSAL_TIME_FORMAT")?></td><?
	?></tr><?
	?><tr><?
		$request_delay = COption::GetOptionInt("collected.activelife", "request_delay", 250 );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_REQUEST_DELAY")?></td><?
		?><td><input type="text" name="request_delay" value="<?=$request_delay?>" />&nbsp;&nbsp;<?=GetMessage("RSAL_TIME_FORMAT")?></td><?
	?></tr><?
	?><tr class="heading"><?
		?><td colspan="3"><?=GetMessage("RSAL_CATALOG_AND_MOUSE_SETTINGS")?></td><?
	?></tr><?
	?><tr><?
		$show_mouse_loading = COption::GetOptionString("collected.activelife", "show_mouse_loading", "N" );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_SHOW_MOUSE_LOADING")?></td><?
		?><td><input type="checkbox" name="show_mouse_loading" value="Y"<?if($show_mouse_loading=="Y"):?> checked="checked"<?endif;?> /></td><?
	?></tr><?
	?><tr><?
		$propcode_color = COption::GetOptionString("collected.activelife", "propcode_color", "COLOR" );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_PROPCODE_COLOR")?></td><?
		?><td><input type="text" name="propcode_color" value="<?=$propcode_color?>" /></td><?
	?></tr><?
	?><tr><?
		$propcode_brands = COption::GetOptionString("collected.activelife", "propcode_brands", "MAKER" );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_PROPCODE_BRANDS")?></td><?
		?><td><input type="text" name="propcode_brands" value="<?=$propcode_brands?>" /></td><?
	?></tr><?
	?><tr><?
		$propcode_brands_img = COption::GetOptionString("collected.activelife", "propcode_brands_img", "MAKER_LOGO" );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_PROPCODE_BRANDS_IMG")?></td><?
		?><td><input type="text" name="propcode_brands_img" value="<?=$propcode_brands_img?>" /></td><?
	?></tr><?
	?><tr><?
		$propcode_size = COption::GetOptionString("collected.activelife", "propcode_size", "SIZE" );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_PROPCODE_SIZE")?></td><?
		?><td><input type="text" name="propcode_size" value="<?=$propcode_size?>" /></td><?
	?></tr><?
	?><tr><?
		$filter_price_view = COption::GetOptionString("collected.activelife", "filter_price_view", "" );
		?><td colspan="2" valign="top" width="47%"><?=GetMessage("RSAL_FILTER_PRICE_VIEW")?></td><?
		?><td><?
			?><select name="filter_price_view"><?
			foreach($arrFilterPriceView as $value => $valName):
			?><option value="<?=$value?>"<?if($value==$filter_price_view):?> selected <?endif;?>><?=$valName?></option><?
			endforeach;
			?></select><?
		?></td><?
	?></tr><?
	?><tr class="heading"><?
		?><td colspan="3"><?=GetMessage("RSAL_COLOR_TABLE")?></td><?
	?></tr><?
	$c = COption::GetOptionString("collected.activelife", "color_table_count", 0);
	for($i=0;$i<$c;$i++):
	$c_name = COption::GetOptionString("collected.activelife", "color_table_name_".$i, "");
	$c_rgb = COption::GetOptionString("collected.activelife", "color_table_rgb_".$i, "");
	?><tr><?
		?><td valign="top" width="47%"><input type="text" name="color_table_name[]" value="<?=$c_name?>" /></td><?
		?><td>&nbsp;</td><?
		?><td valign="top" width="47%"><?
			$color_table_rgb = COption::GetOptionString("collected.activelife", "color_table_rgb");
			?><input type="text" name="color_table_rgb[]" id="color_table_rgb_<?=$i?>" value="<?=$c_rgb?>" /><?
			$APPLICATION->IncludeComponent(
				"bitrix:main.colorpicker",
				"",
				array(
					"ID" => "color_table_rgb_".$i,
					"NAME" => "",
					"SHOW_BUTTON" => "Y",
					"ONSELECT" => "OnColorPicker",
				)
			);
		?></td><?
	?></tr><?
	endfor;
	for($t=($i+1);$t<($i+6);$t++):
	?><tr><?
		?><td valign="top" width="47%" class="more"><input type="text" name="color_table_name[]" value="" /></td><?
		?><td>&nbsp;</td><?
		?><td valign="top" width="47%"><?
			$color_table_rgb = COption::GetOptionString("collected.activelife", "color_table_rgb");
			?><input type="text" name="color_table_rgb[]" id="color_table_rgb_<?=$t?>" value="" /><?
			$APPLICATION->IncludeComponent(
				"bitrix:main.colorpicker",
				"",
				array(
					"ID" => "color_table_rgb_".$t,
					"NAME" => "",
					"SHOW_BUTTON" => "Y",
					"ONSELECT" => "OnColorPicker",
				)
			);
		?></td><?
	?></tr><?
	endfor;
$tabControl->Buttons();
	?><input type="submit" name="save" value="<?=GetMessage("RSAL_BTN_SAVE")?>"><?
	echo bitrix_sessid_post();
$tabControl->End();
?></form><?