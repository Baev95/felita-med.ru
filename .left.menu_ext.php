<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;

$arFilter = array(
    "IBLOCK_ID" => 5,
    "ACTIVE" => "Y",
);

$sections = CIBlockSection::GetList(array("SORT" => "ASC"), $arFilter, true, ['ID', 'SECTION_PAGE_URL', 'NAME', 'LINK', 'ELEMENT_CNT', 'IBLOCK_ID', 'IBLOCK_SECTION_ID', 'DEPTH_LEVEL', 'CODE']);
$aMenuLinksExt = array();

while ($arSection = $sections->GetNext()) {

    if ($arSection['DEPTH_LEVEL'] == 1) {
        $aMenuLinksExt[] = array(
            $arSection['NAME'],
            $arSection['SECTION_PAGE_URL'],
            array(),
            array("ID" => $arSection['ID'], "LINK" => $arSection['LINK'], "ELEMENT_CNT" => $arSection['ELEMENT_CNT'], "IBLOCK_ID" => $arSection['IBLOCK_ID'], "DEPTH_LEVEL" => $arSection['DEPTH_LEVEL'], "CODE" => $arSection['CODE'], "IBLOCK_SECTION_ID" => $arSection['IBLOCK_SECTION_ID'],),
        );
    }
}
$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
