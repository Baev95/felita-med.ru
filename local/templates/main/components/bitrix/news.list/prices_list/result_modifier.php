<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
$arResult['TAB_BUTTONS'] = [];
foreach ($arResult["ITEMS"] as &$arItem) {
    $arResult['TAB_BUTTONS'][$arItem['ID']] = $arItem['NAME'];
    if (!empty($arItem["PROPERTIES"]["PRICES"]["VALUE"])) {
        $arItem["PRICES"] = [];
        foreach ($arItem["PROPERTIES"]["PRICES"]["VALUE"] as $price_list) {
            $price = explode('|', $price_list);
            $arItem["PRICES"][] = $price;
        }
    }
}
foreach ($arResult["ITEMS"] as &$arItem) {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
}
