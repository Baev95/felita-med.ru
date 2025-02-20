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
$arr_items = [];
$item_htmls = [];
$i = $j = 0;
?>
<section class="stocks section-offset">
    <div class="container">
        <div class="tab">
            <div class="stocks-page__sort">
                <div class="stocks-page__tab_btns ">
                    <?
                    $sections = CIBlockSection::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 1, 'ACTIVE' => 'Y',], true, ['ID', 'NAME', 'ELEMENT_CNT']);
                    while ($arItem = $sections->GetNext()):
                        if ($arItem['ELEMENT_CNT'] > 0) :
                            $class = $i++ == 0 ? "tab__btn--active" : "";
                            echo "<button class='tablinks stocks-page__tab_btn tab__btn $class' data-id='{$arItem['ID']}'>
							<span>{$arItem['NAME']}</span>
						</button>";
                        endif;
                    endwhile;
                    ?>
                </div>
            </div>
            <?
            foreach ($arResult["ITEMS"] as $arItem) {
                $messageDate = GetMessage('DATE');
                $formattedDate = substr($arItem['DATE_ACTIVE_TO'], 0, 10);
                $data_html = "<p class='stocks__card_date'>$messageDate $formattedDate</p>";
                $date = $arItem['DATE_ACTIVE_TO'] ? $data_html : "";
                $item_htmls[$arItem['IBLOCK_SECTION_ID']] .= <<<OED
					<div class="stocks__card">
						<picture class="stocks__card_img">
							<source srcset="{$arItem['PREVIEW_PICTURE']['SRC']}" type="image/webp">
							<img src="{$arItem['PREVIEW_PICTURE']['SRC']}" loading="lazy" alt="{$arItem['PREVIEW_PICTURE']['ALT']}">
							$date
						</picture>
						<div class="stocks__card_main">
							<p class="stocks__card_name">{$arItem['NAME']}</p>
							<div class="stocks__card_info">
								<p>{$arItem['PREVIEW_TEXT']}</p>
								<button class="stocks__card_btn primary-btn popup-btn" data-path="popup-call">Записаться на услугу</button>
							</div>
						</div>
					</div>
					OED;
            }
            foreach ($item_htmls as $code => $html) {
                $class = $j++ == 0 ? "tabcontent--active" : "";
                $code = <<<OED
						<div class="tabcontent $class" data-id="$code">
							<div class="stocks-page__cards">
								$html 
							</div>
						</div>
						OED;
                echo $code;
            }
            ?>
        </div>
    </div>
</section>