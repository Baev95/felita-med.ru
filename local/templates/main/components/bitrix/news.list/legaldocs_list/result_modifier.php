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

$arResult['TAB_BUTTONS'] = [];
foreach ($arResult["ITEMS"] as $arItem) {
    $arResult['TAB_BUTTONS'][] = [
        'ID' => $arItem['ID'],
        'NAME' => $arItem['NAME']
    ];
}

$arResult['ITEMS_HTML'] = [];
$i = 0;
foreach ($arResult["ITEMS"] as $arItem) {
    if (!empty($arItem["PROPERTIES"]["LEGAL_DOCS"]["VALUE"])) {
        $html = '';
        foreach ($arItem["PROPERTIES"]["LEGAL_DOCS"]["VALUE"] as $key => $pictures) {
            $photo = CFile::GetPath($pictures);
            $desc = "<p class='page-gallery__label'>{$arItem["PROPERTIES"]["PHOTO"]["DESCRIPTION"][$key]}</p>";
            $html .= <<<HTML
                <a href="$photo" class="legal-docs__img" data-fancybox="gallery-$i">
                    <picture class="licenses__picture">
                        <source srcset="$photo" type="image/webp">
                        <img src="$photo" alt="$desc" loading="lazy">
                    </picture>
                </a>
            HTML;
            $photo_arr = <<<HTML
                <a href="$photo" download></a>
            HTML;
        }
        $arResult['ITEMS_HTML'][$arItem['ID']] = $html;
        $arResult['ITEMS_PHOTO'][] = $photo_arr;
    }
    $i++;
}
