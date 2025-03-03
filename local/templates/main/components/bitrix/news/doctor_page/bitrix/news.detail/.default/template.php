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
$declension = new Declension('год', 'года', 'лет');
$work_experience = preg_replace('/[^0-9]/', '', subject: $arResult['PROPERTIES']['WORK_EXPERIENCE']['VALUE']);
$work_experience = (int) $work_experience;

// echo '<pre>';
// var_dump(value: $arResult["ID"]);
// echo '</pre>';


?>

<section class="doctor-page section-offset">
	<div class="container">
		<div class="doctor-page__flex change-item">

			<div class="doctor-page__info doctor-page__block">
				<div class="doctor-page__info_photo">
					<picture class="doctor-page__info_img">
						<source srcset="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" type="image/webp">
						<img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" loading="lazy" alt="<?= $arResult["NAME"] ?>">
					</picture>

					<? if ($arResult['PROPERTIES']['STARS']['VALUE']) : ?>

						<div class="doctor-page__rating">
							<div class="doctor-page__rating_estimation">
								<p><?= $arResult['PROPERTIES']['STARS']['VALUE'] ?></p>
								<div class="doctor-page__rating_stars">

									<?
									for ($i = 0; $i < 5; $i++) :
										$star = $i < $arResult['PROPERTIES']['STARS']['VALUE']  ? 'doctor-page__rating_star-active' : 'doctor-page__rating_star'; ?>
										<span class="<?= $star ?>">
											<svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.5525 0.808147C10.8585 -0.098909 12.1415 -0.0989079 12.4475 0.808148L14.3014 6.30249C14.4386 6.70905 14.8198 6.98278 15.2489 6.98278H21.1655C22.1434 6.98278 22.54 8.2416 21.7388 8.80215L17.0179 12.1051C16.6541 12.3596 16.5017 12.8235 16.6436 13.2441L18.462 18.6334C18.7707 19.5481 17.7323 20.3259 16.9413 19.7724L12.0733 16.3666C11.729 16.1258 11.271 16.1258 10.9267 16.3666L6.05873 19.7724C5.26773 20.3259 4.22932 19.5481 4.53796 18.6334L6.35637 13.2441C6.49832 12.8235 6.3459 12.3596 5.98212 12.1051L1.2612 8.80215C0.459988 8.2416 0.856625 6.98278 1.83446 6.98278H7.75109C8.18017 6.98278 8.56142 6.70905 8.6986 6.30249L10.5525 0.808147Z" fill="#FFDA33" />
											</svg>
										</span>
									<? endfor ?>
								</div>
							</div>

							<div class="doctor-page__rating_logo">
								<picture>

									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/pro-doctorov.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/pro-doctorov.png" alt="pro-doctorov">
								</picture>
							</div>
						</div>

					<? endif ?>

				</div>

				<? if ($arResult['PROPERTIES']['PRICE_CLINIC']['VALUE']) : ?>
					<div class="doctor-page__info_btns--mob">
						<button class="primary-btn doctor-page__info_btn popup-btn change-item__btn doctor__btn-js" data-path="popup-change">Записаться на прием</button>
						<p class="doctor-page__info_price"><?= GetMessage(name: "PRICE_CLINIC") ?> <span><?= $arResult['PROPERTIES']['PRICE_CLINIC']['VALUE'] ?></span></p>
					</div>
				<? endif ?>
				<div class="doctor-page__info_content">
					<div>
						<p class="doctor-page__info_experience"><?= GetMessage(name: "WORK_EXPERIENCE") ?> <?= $work_experience . " " . $declension->get($work_experience) ?></p>
						<p class="doctor-page__info_fio change-item__title"><?= $arResult['NAME'] ?></p>
					</div>
					<div class="doctor-page__info_post">
						<div class="doctor-page__post_item">
							<picture class="doctor-page__post_icon">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor-page-post.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor-page-post.svg" loading="lazy" alt="Должность">
							</picture>
							<div>
								<p class="doctor-page__post_text"><?= GetMessage(name: "POST") ?></p>
								<p class="doctor-page__post_post"><?= $arResult["PROPERTIES"]["POST"]["VALUE"] ?></p>
							</div>
						</div>
						<div class="doctor-page__post_item">
							<picture class="doctor-page__post_icon">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor-page-stepen.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor-page-stepen.svg" loading="lazy" alt="Ученая степень">
							</picture>
							<div>
								<p class="doctor-page__post_text"><?= GetMessage(name: "ACADEMIC_DEGREE") ?></p>
								<p class="doctor-page__post_post"><?= $arResult["PROPERTIES"]["ACADEMIC_DEGREE"]["VALUE"] ?></p>
							</div>
						</div>
					</div>
					<p class="doctor-page__info_description"><?= $arResult["DETAIL_TEXT"] ?></p>

					<div class="doctor-page__info_btns">
						<button class="primary-btn doctor-page__info_btn popup-btn change-item__btn doctor__btn-js"
							data-path="popup-change"><?= GetMessage(name: "SIGN_UP") ?></button>


						<? if ($arResult['PROPERTIES']['PRICE_CLINIC']['VALUE']) : ?>

							<p class="doctor-page__info_price"><?= GetMessage(name: "PRICE_CLINIC") ?> <span><?= $arResult['PROPERTIES']['PRICE_CLINIC']['VALUE'] ?></span></span></p>
						<? endif ?>
					</div>

				</div>
			</div>

			<? if ($arResult["PROPERTIES"]["WORKING_HOURS"]["VALUE"]) : ?>

				<div class="doctor-page__schedule doctor-page__block">
					<p class="doctor-page__block_title"><?= GetMessage(name: "WORKING_HOURS") ?></p>
					<ul class="doctor-page__schedule_list">

						<?
						foreach ($arResult["PROPERTIES"]["WORKING_HOURS"]["VALUE"] as $working) :
							$day = explode('|', $working);
							$class_day = trim($day[1]) == GetMessage(name: "WEEKEND") ? 'doctor-page__schedule_weekend' : 'doctor-page__schedule_time'; ?>
							<li class="doctor-page__schedule_item">
								<p class="doctor-page__schedule_day"><?= $day[0] ?></p>
								<p class="<?= $class_day ?>"><?= $day[1] ?></p>
							</li>
						<? endforeach ?>

					</ul>
				</div>

			<? endif; ?>


			<? if ($arResult["PROPERTIES"]["DOCTOR_EDUCATION"]["VALUE"]) : ?>

				<div class="doctor-page__education doctor-page__block">
					<p class="doctor-page__block_title"><?= GetMessage(name: "DOCTOR_EDUCATION") ?></p>
					<div class="tab-contents">
						<div class="tab-content active" style="order: 2">
							<div class="doctor-page__list">
								<ul>

									<?
									foreach ($arResult["PROPERTIES"]["DOCTOR_EDUCATION"]["VALUE"] as $education_list) {
										$education = explode('|', $education_list);
										echo <<<OED
										<li>
											<p><span>{$education[0]}</span>{$education[1]}</p>
										</li>
								OED;
									} ?>
								</ul>
							</div>
						</div>


					</div>
				</div>

			<? endif; ?>

			<?
			if (!empty($arResult["PROPERTIES"]["DIPLOMS"]["VALUE"])): ?>

				<div class="doctor-page__diplomas doctor-page__block tabs">

					<p class="doctor-page__block_title"><?= GetMessage(name: "DIPLOMS") ?></p>

					<div class="doctor-page__diplomas_swiper swiper doctorDiplomasSwiper">
						<div class="swiper-wrapper">

							<? foreach ($arResult["PROPERTIES"]["DIPLOMS"]["VALUE"] as $key => $photo): ?>

								<div class="doctor-page__diplomas_swiper-slide swiper-slide">
									<a href="<?= CFile::GetPath($photo) ?>" data-fancybox="diplomas">
										<picture class="doctor-page__diplomas_picture">
											<source srcset="<?= CFile::GetPath($photo) ?>" type="image/webp">
											<img src="<?= CFile::GetPath($photo) ?>" loading="lazy" alt="<?= $arResult["PROPERTIES"]["DIPLOMS"]["DESCRIPTION"][$key] ?>">
										</picture>

										<? if ($arResult["PROPERTIES"]["DIPLOMS"]["DESCRIPTION"][$key]) : ?>
											<p class="doctor-page__diplomas_label"><?= $arResult["PROPERTIES"]["DIPLOMS"]["DESCRIPTION"][$key] ?></p>
										<? endif ?>
									</a>
								</div>
							<? endforeach ?>

						</div>
					</div>
					<div class="doctor-page__diplomas_swiper-btns swiper-btns">
						<button class="diplomas__swiper-button-prev swiper-button-prev"></button>
						<button class="diplomas__swiper-button-next swiper-button-next"></button>
					</div>
				</div>
			<? endif ?>

			<? if (!empty($arResult["PROPERTIES"]["JOB_PROFILE"]["VALUE"])): ?>

				<div class="doctor-page__works doctor-page__block">
					<p class="doctor-page__block_title"><?= GetMessage(name: "JOB_PROFILE") ?></p>
					<div class="doctor-page__list">
						<ul>
							<? foreach ($arResult["PROPERTIES"]["JOB_PROFILE"]["VALUE"] as $job_list) :
								$job = explode('|', $job_list);
							?>
								<li>
									<p><?= $job[0] ?></p>
								</li>
							<? endforeach ?>

						</ul>
					</div>
				</div>
			<? endif ?>
		</div>
</section>












<? $APPLICATION->IncludeComponent(
	"bitrix:news",
	"article_page",
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "NAME",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "article_page",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.M.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "SHOW_COUNTER",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "DOCTOR_REVIEW",
			1 => "DOCTOR_WROTE",
			2 => "DOCTOR_COMMENT",
			3 => "DOCTOR_COMMENT_TEXT",
			4 => "TEXT_1",
			5 => "TEXT_2",
			6 => "TEXT_3",
			7 => "LITERATURE",
			8 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "detail_pages",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.M.Y",
		"LIST_FIELD_CODE" => array(
			0 => "DATE_ACTIVE_FROM",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "SERVICES",
			2 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/articles/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		),
		"WHERE" => "VRACH",
		"WHAT" => $arResult["ID"],
	),
	false
); ?>