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
$item_htmls = $arr_section = $arr_tabs = [];
$i = $j = 0;
?>

<section class="faq section-offset">
    <div class="container">
        <div class="tab">
            <?
            $sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME']);
            while ($arItem = $sections->GetNext()):
                $arr_section[$arItem['ID']] = $arItem['NAME'];
            endwhile;
            foreach ($arResult["ITEMS"] as $arItem) :
                $class = $i++ === 0 ? "tab__btn--active" : "";
                $service_value = $arItem['PROPERTIES']['SERVICES']['VALUE'];
                $buttonHtml = <<<OED
				<button class="faq__tab_btn tab__btn $class" data-id="$service_value">
					{$arr_section[$service_value]}
				</button>
				OED;

                if (!array_key_exists($service_value, $arr_tabs)) {
                    $arr_tabs[$service_value] = $buttonHtml;
                }
                $item_htmls[$arItem['PROPERTIES']['SERVICES']['VALUE']] .= <<<OED
				<li>
					<button class="faq__button">
						<div class="faq__btn-more faq__btn-more">
							<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18.0714 17.5H23.4286C23.7127 17.5 23.9853 17.4473 24.1862 17.3536C24.3871 17.2598 24.5 17.1326 24.5 17C24.5 16.8674 24.3871 16.7402 24.1862 16.6464C23.9853 16.5527 23.7127 16.5 23.4286 16.5H18.0714H15.9286H10.5714C10.2873 16.5 10.0147 16.5527 9.81381 16.6464C9.61288 16.7402 9.5 16.8674 9.5 17C9.5 17.1326 9.61288 17.2598 9.81381 17.3536C10.0147 17.4473 10.2873 17.5 10.5714 17.5H15.9286H18.0714Z" fill="#677281" />
								<path d="M17.5 15.9286V10.5714C17.5 10.2873 17.4473 10.0147 17.3536 9.81381C17.2598 9.61288 17.1326 9.5 17 9.5C16.8674 9.5 16.7402 9.61288 16.6464 9.81381C16.5527 10.0147 16.5 10.2873 16.5 10.5714V15.9286V18.0714V23.4286C16.5 23.7127 16.5527 23.9853 16.6464 24.1862C16.7402 24.3871 16.8674 24.5 17 24.5C17.1326 24.5 17.2598 24.3871 17.3536 24.1862C17.4473 23.9853 17.5 23.7127 17.5 23.4286V18.0714V15.9286Z" fill="#677281" />
							</svg>
						</div>
						<h3 class="faq__name faq__name">{$arItem['NAME']}</h3>
						<div class="faq__content">
							<p>
								{$arItem['PREVIEW_TEXT']}
							</p>
							<div class="faq__editor faq__editor">
								<div class="faq__editor_left faq__editor_left">
									<picture class="faq__editor_img">
										<source srcset="assets/img/text-block/text-block-editor.webp" type="image/webp" />
										<img src="assets/img/text-block/text-block-editor.jpg" alt="" loading="lazy" />
									</picture>
									<div>
										<p class="faq__editor_text">На вопрос ответил врач:</p>
										<p class="faq__editor_fio">Королькова Ольга Николаевна</p>
									</div>
								</div>
								<div class="faq__editor_right">
									<div class="faq__editor_item">
										<img src="assets/img/icons/doctor-2.svg" alt="">
										<p>Психиатр-нарколог, психотерапевт</p>
									</div>
									<div class="faq__editor_item">
										<img src="assets/img/icons/experience.svg" alt="">
										<p>Стаж работы: 14 лет</p>
									</div>
								</div>
							</div>
						</div>
					</button>
				</li>
				OED;
            endforeach ?>
            <div class="faq__tabs">
                <div class="faq__tab_btns">
                    <?= implode($arr_tabs) ?>
                </div>
            </div>
            <?
            foreach ($item_htmls as $code => $html) {
                $class = $j++ == 0 ? "tabcontent--active" : "";
                $code = <<<OED
					<div class="tabcontent $class" data-id="$code">
						<ul class="faq__list">
							$html
						</ul>
				</div>
				OED;
                echo $code;
            }
            ?>

        </div>
</section>