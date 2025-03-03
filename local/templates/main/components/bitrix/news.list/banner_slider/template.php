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
$i = 0;
?>

<section class="intro-5 section-offset">
	<div class="container">
		<div class="intro-5__swiper swiper introSwiper">
			<div class="swiper-wrapper">
				<? foreach ($arResult["ITEMS"] as $arItem): ?>
					<div class="intro-5__swiper-slide swiper-slide">
						<div class="intro-5__row">
							<picture class="intro-5__row_bg">
								<source srcset="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" type="image/webp" />
								<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="photo" />
							</picture>
							<div class="intro-5__main">
								<div class="intro-5__main_top">
									<div class="intro-5__main_text">
										<? $teg = $i++ == 0 ? "h1" : "h2"; ?>
										<<?= $teg ?> class='intro-5__title title-h1'><?= $arItem['NAME'] ?></<?= $teg ?>>
										<p class="intro-5__subtitle"><?= $arItem['PREVIEW_TEXT'] ?></p>
									</div>

									<div class="intro-5__cards">
										<ul>
											<?
											foreach ($arItem["PROPERTIES"]["INFO"]["VALUE"] as $add_info) :
												$info = explode('|', $add_info); ?>
												<li>
													<div class="intro-5__cards_icon">
														<img src="<?= $info[0] ?>" alt="">
													</div>
													<span><?= $info[1] ?></span>
												</li>
											<? endforeach ?>
										</ul>
									</div>
								</div>
								<div class="intro-5__main_bottom">
									<button class="primary-btn intro-5__main_btn popup-btn" data-path="popup-call">Записаться на услугу</button>
								</div>
							</div>

							<?
							$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_5.php', array(), ["MODE" => "html"]);
							?>

						</div>
					</div>
				<? endforeach; ?>
			</div>
		</div>

		<div class="intro-5__paginations">
			<div class="intro__swiper-pagination swiper-pagination"></div>
		</div>
	</div>
</section>