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
    if (!empty($arItem["PROPERTIES"]["PHOTO"]["VALUE"])) {
        $html = '';
        foreach ($arItem["PROPERTIES"]["PHOTO"]["VALUE"] as $key => $pictures) {
            $photo = CFile::GetPath($pictures);
            $desc = "<p class='page-gallery__label'>{$arItem["PROPERTIES"]["PHOTO"]["DESCRIPTION"][$key]}</p>";
            if ($arParams['CUSTOM'] === 'main') {
                $desc = "<p class='gallery__label'>{$arItem["PROPERTIES"]["PHOTO"]["DESCRIPTION"][$key]}</p>";
                $html .= <<<HTML
                    <div class="gallery__swiper-slide swiper-slide">
                        <a href="$photo" class="gallery__image" data-fancybox="gallery-$i">
                            <picture class="gallery__picture">
                                <source srcset="$photo" type="image/webp">
                                <img src="$photo" loading="lazy">
                            </picture>
                            $desc
                        </a>
                    </div>
                HTML;
            } else {
                $html .= <<<HTML
                <a href="$photo" class="page-gallery__image" data-fancybox="gallery-$i">
                    <picture>
                        <source srcset="$photo" type="image/webp">
                        <img src="$photo" loading="lazy">
                    </picture>
                    $desc
                </a>
            HTML;
            }
        }
        $arResult['ITEMS_HTML'][$arItem['ID']] = $html;
    }
    $i++;
}
