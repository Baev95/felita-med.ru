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

use Bitrix\Main\Grid\Declension;

$declension = new Declension('год', 'года', 'лет');
$arResult['DECLENSION'] = $declension;
$arServices = [];
$arVrach = [];
foreach ($arResult["ITEMS"] as &$arItem) {
    $arServices[] = $arItem['PROPERTIES']['SERVICES']['VALUE'];
    $arVrach[] = $arItem['PROPERTIES']['DOCTOR']['VALUE'];

    if ($arItem['TIMESTAMP_X']) {
        $arItem['DATE_CREATE'] = CIBlockFormatProperties::DateFormat('j F Y', MakeTimeStamp(($arItem['TIMESTAMP_X']), CSite::GetDateFormat()));
    }
    $res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $arItem['PROPERTIES']['DOCTOR']['VALUE']], false, false, ['CODE', 'NAME']);
    while ($row = $res->Fetch()) {
        $arItem['DOCTOR_CODE'] = $row['CODE'];
        $arItem['DOCTOR_NAME'] = $row['NAME'];
    }
    $sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'CODE']);
    while ($row = $sections->GetNext()) {
        if ($row['ID'] == $arItem['PROPERTIES']['SERVICES']['VALUE']) {
            $arItem['SERVICE_CODE'] = $row['CODE'];
            break;
        }
    }
    $arItem['AGE'] = $arItem['PROPERTIES']['AGE']['VALUE'];
    $arItem['CITY'] = $arItem['PROPERTIES']['CITY']['VALUE'];
    $arItem['TEXT_DOCTOR'] = $arItem['PROPERTIES']['TEXT_DOCTOR']['VALUE']['TEXT'];
}
$services = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'CODE', 'NAME']);
$arResult['SERVICES'] = [];
while ($arService = $services->GetNext()) {
    if (in_array($arService['ID'], $arServices)) {
        $arResult['SERVICES'][] = $arService;
    }
}
$doctors = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3], false, false, ['ID', 'CODE', 'NAME']);
$arResult['DOCTORS'] = [];
while ($arDoctor = $doctors->Fetch()) {
    if (in_array($arDoctor['ID'], $arVrach)) {
        $arResult['DOCTORS'][] = $arDoctor;
    }
}
