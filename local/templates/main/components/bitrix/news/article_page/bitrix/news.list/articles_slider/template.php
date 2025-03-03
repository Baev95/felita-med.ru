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

$sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME']);
$class = "";
$name = "Новости нашей клиники";
while ($arItem = $sections->GetNext()):
	$arr_section[$arItem['ID']] = $arItem['NAME'];
endwhile;
if ($arParams['WHERE'] == 'MAIN') {
	$class = " articles section-offset";
}
if ($arParams["WHERE"] == "VRACH") {
	$name = "Статьи врача";
}

if ($arResult["ITEMS"]) {

?>

	<section class="articles<?= $class ?>">
		<div class="container">
			<div class="section__flex">
				<div class="section__top articles__top">
					<h2 class="title-h2"><?= $name ?> </h2>
					<a href="/articles/" class="tertiary-btn articles__btn section__btn">Все статьи</a>
				</div>

				<div class="section__inner articles__inner">
					<div class="articles__cards">
						<div class="articles__swiper swiper articlesSwiper">
							<div class="swiper-wrapper">
								<?
								foreach ($arResult["ITEMS"] as $arItem):
									$service_value = $arItem['PROPERTIES']['SERVICES']['VALUE'];
									$preview_picture = $arItem['PREVIEW_PICTURE']['SRC'];
									$preview_alt = $arItem['PREVIEW_PICTURE']['ALT'];
									$data = strtolower(FormatDate("d F Y", MakeTimeStamp($arItem['ACTIVE_FROM'])));
								?>
									<div class="articles__swiper-slide swiper-slide">
										<div class="articles__card">
											<div class="articles__card_picture">
												<picture>
													<source srcset="<?= $preview_picture ?>" type="image/webp">
													<img src="<?= $preview_picture ?>" loading="lazy" alt="<?= $preview_alt ?>">
												</picture>
											</div>
											<div class="articles__card_labels">
												<p><?= $arr_section[$service_value] ?></p>
											</div>
											<div class="articles__card_inner">
												<div class="articles__card_text">
													<p class="articles__card_title"><?= $arItem['NAME'] ?></p>
													<p><?= $arItem['PREVIEW_TEXT'] ?></p>
												</div>
												<div class="articles__card_bottom">
													<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="articles__card_more btn-arrow">Читать статью</a>
													<p class="articles__card_date"><?= $data ?></p>
												</div>
											</div>
										</div>
									</div>
								<? endforeach ?>

							</div>
						</div>
					</div>
					<div class="articles__swiper-btns swiper-btns">
						<button class="articles__swiper-button-prev swiper-button-prev"></button>
						<button class="articles__swiper-button-next swiper-button-next"></button>
					</div>
				</div>
			</div>
		</div>
	</section>
<? } ?>