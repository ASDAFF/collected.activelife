<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>

<?$APPLICATION->IncludeComponent(
    "collected:catalog.sorter",
    "catalog", 
    array(
        "COMPONENT_TEMPLATE" => "catalog",
        "COLLECT_ACTION_PARAM_NAME" => "collectaction",
        "COLLECT_ACTION_PARAM_VALUE" => "collectvalue",
        "COLLECT_CHOSE_TEMPLATES_SHOW" => "N",
        "COLLECT_DEFAULT_TEMPLATE" => "catalog_blocks",
        "COLLECT_SORT_BY_SHOW" => "Y",
        "COLLECT_SORT_BY_NAME" => array(
            0 => "sort",
            1 => "name",
            2 => "PROPERTY_PROD_PRICE_FALSE",
            3 => "",
        ),
        "COLLECT_SORT_BY_DEFAULT" => "sort_asc",
        "COLLECT_OUTPUT_OF_SHOW" => "Y",
        "COLLECT_OUTPUT_OF" => array(
            0 => "20",
            1 => "16",
            2 => "40",
            3 => "80",
            4 => "",
        ),
        "COLLECT_OUTPUT_OF_DEFAULT" => "16",
        "COLLECT_OUTPUT_OF_SHOW_ALL" => "Y",
        "COLLECT_SHORT_SORTER" => "N",
        "TEMPLATE_AJAXID" => "catalog"
    ),
    null
);?>