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

$i = $j = 0;
$item_htmls = [];
?>
<section class="page-gallery section-offset">
    <div class="container">
        <div class="tab">
            <div class="page-gallery__top">
                <div class="page-gallery__tab_btns">
                    <?
                    foreach ($arResult["ITEMS"] as $arItem) :
                        $class = $i++ === 0 ? "tab__btn--active" : "";
                        echo <<<OED
					<button class="page-gallery__tab_btn tab__btn $class" data-id='{$arItem['ID']}'>
						{$arItem['NAME']}
					</button>
					OED;
                        if (!empty($arItem["PROPERTIES"]["PHOTO"]["VALUE"])) :
                            foreach ($arItem["PROPERTIES"]["PHOTO"]["VALUE"] as $key => $pictures) :
                                $photo = CFile::GetPath($pictures);
                                $desc = "<p class='page-gallery__label'>{$arItem["PROPERTIES"]["PHOTO"]["DESCRIPTION"][$key]}</p>";
                                $item_htmls[$arItem['ID']] .= <<<OED
								<a href="$photo" class="page-gallery__image" data-fancybox="gallery-$i">
								<picture>
									<source srcset="$photo" type="image/webp">
									<img src="$photo" loading="lazy">
								</picture>
									$desc
								</a>
								OED;
                            endforeach;
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="tab-contents">
                <?
                foreach ($item_htmls as $code => $html):
                    $class = $j++ == 0 ? "tabcontent--active" : "";
                    $code = <<<OED
						<div class="tabcontent $class" data-id="$code">
							<div class="page-gallery__images">
								$html 
							</div>
						</div>
						OED;
                    echo $code;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>