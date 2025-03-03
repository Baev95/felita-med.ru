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

use Bitrix\Main\Grid\Declension;

$this->setFrameMode(true);

// Инициализация склонения
$declension = new Declension('год', 'года', 'лет');
$arResult['DECLENSION'] = $declension;

// Получение активных разделов
$sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME']);
$arResult['SECTIONS'] = [];
while ($arSection = $sections->GetNext()) {
    $arResult['SECTIONS'][$arSection['ID']] = $arSection['NAME'];
}

// Подготовка кнопок для табов
$arResult['TAB_BUTTONS'] = [];
$i = 0;
foreach ($arResult["ITEMS"] as $arItem) {
    $service_value = $arItem['PROPERTIES']['SERVICES']['VALUE'];
    $class = $i++ === 0 ? "tab__btn--active" : "";
    $arResult['TAB_BUTTONS'][] = [
        'ID' => $service_value,
        'NAME' => $arResult['SECTIONS'][$service_value],
        'CLASS' => $class
    ];
}

// Подготовка HTML для статей
$arResult['ITEMS_HTML'] = [];
$j = 0;
foreach ($arResult["ITEMS"] as $arItem) {
    $service_value = $arItem['PROPERTIES']['SERVICES']['VALUE'];
    $preview_picture = $arItem['PREVIEW_PICTURE']['SRC'];
    $preview_alt = $arItem['PREVIEW_PICTURE']['ALT'];
    $data = strtolower(FormatDate("d F Y", MakeTimeStamp($arItem['ACTIVE_FROM'])));
    $item_html = <<<OED
        <div class="page-articles__card quantity-card search-page-item">
            <div class="page-articles__card_img">
                <picture>
                    <source srcset="$preview_picture" type="image/webp">
                    <img src="$preview_picture" loading="lazy">
                </picture>
                <div class="page-articles__card_labels">
                    <p>{$arResult['SECTIONS'][$service_value]}</p>
                </div>
            </div>
            <div class="page-articles__card_inner">
                <p class="page-articles__card_title search-page-name">{$arItem['NAME']}</p>
                <p class="page-articles__card_subtitle">{$arItem['PREVIEW_TEXT']}</p>
                <div class="page-articles__card_bottom">
                    <a href="{$arItem["DETAIL_PAGE_URL"]}" class="page-articles__card_btn btn-arrow">Читать статью</a>
                    <p class="page-articles__card_date">$data</p>
                </div>
            </div>
        </div>
    OED;

    if (!isset($arResult['ITEMS_HTML'][$service_value])) {
        $arResult['ITEMS_HTML'][$service_value] = '';
    }
    $arResult['ITEMS_HTML'][$service_value] .= $item_html;
}

// Упорядочивание ITEMS_HTML по TAB_BUTTONS
$sortedItemsHtml = [];
foreach ($arResult['TAB_BUTTONS'] as $button) {
    $sortedItemsHtml[] = $arResult['ITEMS_HTML'][$button['ID']];
}
$arResult['ITEMS_HTML'] = $sortedItemsHtml;
