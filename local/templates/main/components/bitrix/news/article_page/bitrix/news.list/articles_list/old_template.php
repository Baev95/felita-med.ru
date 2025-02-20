<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Grid\Declension;

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
$item_htmls = $arr_section = $arr_tabs = [];
$i = $j = 0;
$declension = new Declension('год', 'года', 'лет');
?>

<section class="page-articles section-offset">
    <div class="container">
        <div class="tab">
            <?
            $sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME']);
            while ($arItem = $sections->GetNext()):
                $arr_section[$arItem['ID']] = $arItem['NAME'];
            endwhile;
            foreach ($arResult["ITEMS"] as $arItem):
                $class = $i++ === 0 ? "tab__btn--active" : "";
                $service_value = $arItem['PROPERTIES']['SERVICES']['VALUE'];
                $preview_picture = $arItem['PREVIEW_PICTURE']['SRC'];
                $preview_alt = $arItem['PREVIEW_PICTURE']['ALT'];
                $data = strtolower(FormatDate("d F Y", MakeTimeStamp($arItem['ACTIVE_FROM'])));
                $buttonHtml = <<<OED
				<button class="page-articles__tab_btn tab__btn $class" data-id="$service_value">
					{$arr_section[$service_value]}
				</button>
				OED;
                if (!array_key_exists($service_value, $arr_tabs)) {
                    $arr_tabs[$service_value] = $buttonHtml;
                }
                $item_htmls[$service_value] .= <<<OED
						<div class="page-articles__card quantity-card search-page-item">
							<div class="page-articles__card_img">
								<picture>
									<source srcset="$preview_picture" type="image/webp">
									<img src="$preview_picture" loading="lazy">
								</picture>
								<div class="page-articles__card_labels">
									<p>$arr_section[$service_value]</p>
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
            endforeach ?>
            <div class="page-articles__top">
                <div class="page-articles__sort">
                    <div class="page-articles__sort_search">
                        <form class="page-articles__search form-search">
                            <input id="searchInput" type="search" placeholder="Поиск услуги" required class="input">
                            <img src="assets/img/icons/search.svg" class="page-articles__search-icon">
                        </form>
                    </div>
                    <div class="page-articles__tab_btns">
                        <?= implode($arr_tabs) ?>
                    </div>
                </div>
                <p class="page-articles__quantity quantity">Найдено статей: <span></span></p>
            </div>
            <div class="tab-contents">
                <?
                foreach ($item_htmls as $code => $html) {
                    $class = $j++ == 0 ? "tabcontent--active" : "";
                    $code = <<<OED
					<div class="tabcontent $class" data-id="$code">
						<div class="page-articles__cards">
							$html
						</div>
					</div>
					OED;
                    echo $code;
                }
                ?>
            </div>
        </div>
    </div>
</section>