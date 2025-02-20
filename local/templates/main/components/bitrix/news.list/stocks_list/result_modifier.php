
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
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

$sections = CIBlockSection::GetList(
    ['ID' => 'ASC'],
    ['IBLOCK_ID' => 1, 'ACTIVE' => 'Y'],
    true,
    ['ID', 'NAME', 'ELEMENT_CNT']
);



$arResult['SECTIONS'] = [];
$arResult['SECTION_IDS'] = [];
while ($arSection = $sections->GetNext()) {
    if ($arSection['ELEMENT_CNT'] > 0) {
        $arResult['SECTIONS'][] = $arSection;
        $arResult['SECTION_IDS'][] = $arSection['ID'];
    }
}

$arResult['ITEMS_HTML'] = [];
foreach ($arResult["ITEMS"] as $arItem) {


    var_dump($arItem);


    $message_date = GetMessage('DATE');
    $sign_up = GetMessage('SIGN_UP');
    $photo = $arItem['PREVIEW_PICTURE']['SRC'];
    $formattedDate = substr($arItem['DATE_ACTIVE_TO'], 0, 10);
    $data_html = "<p class='stocks__card_date'>$message_date $formattedDate</p>";
    $date = $arItem['DATE_ACTIVE_TO'] ? $data_html : "";


    if ($arParams['CUSTOM']) {
        $item_html .= <<<HTML
                <div class="stocks__swiper-slide swiper-slide">
                    <div class="stocks__card">
                        <picture class="stocks__card_img">
                            <source srcset="$photo" type="image/webp">
                            <img src="$photo" loading="lazy" alt="{$arItem['PREVIEW_PICTURE']['ALT']}">
                            $date
                        </picture>
                        <div class="stocks__card_main">
                            <p class="stocks__card_name">{$arItem['NAME']}</p>
                            <div class="stocks__card_info">
                                <p>{$arItem['PREVIEW_TEXT']}</p>
                                <button class="stocks__card_btn primary-btn popup-btn" data-path="popup-call">$sign_up</button>
                            </div>
                        </div>
                    </div>
                </div>
    HTML;
    } else {
        $item_html = <<<HTML
        <div class="stocks__card">
            <picture class="stocks__card_img">
                <source srcset="$photo" type="image/webp">
                <img src="$photo" loading="lazy" alt="{$arItem['PREVIEW_PICTURE']['ALT']}">
                $date
            </picture>
            <div class="stocks__card_main">
                <p class="stocks__card_name">{$arItem['NAME']}</p>
                <div class="stocks__card_info">
                    <p>{$arItem['PREVIEW_TEXT']}</p>
                    <button class="stocks__card_btn primary-btn popup-btn" data-path="popup-call">$sign_up</button>
                </div>
            </div>
        </div>
    HTML;
    }

    if (!isset($arResult['ITEMS_HTML'][$arItem['IBLOCK_SECTION_ID']])) {
        $arResult['ITEMS_HTML'][$arItem['IBLOCK_SECTION_ID']] = '';
    }
    if ($arParams['CUSTOM']) {
        $arResult['ITEMS_HTML_LIST'] = $item_html;
    } else {
        $arResult['ITEMS_HTML'][$arItem['IBLOCK_SECTION_ID']] .= $item_html;
    }
}

$sortedItemsHtml = [];
foreach ($arResult['SECTION_IDS'] as $sectionId) {
    $sortedItemsHtml[] = $arResult['ITEMS_HTML'][$sectionId];
}
$arResult['ITEMS_HTML'] = $sortedItemsHtml;
