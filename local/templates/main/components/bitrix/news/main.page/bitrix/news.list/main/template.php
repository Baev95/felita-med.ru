<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Grid\Declension;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

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

Loader::includeModule("highloadblock");
$this->setFrameMode(true);
$item_htmls = $arr_section = $arr_tabs = [];
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$i = 0;
$data = strtolower(FormatDate("d.m.Y", MakeTimeStamp($arResult['ITEMS'][0]['ACTIVE_FROM'])));
$newTimestamp = strtotime($data) + (16 * 24 * 60 * 60);
$newDate = date("d.m.Y", $newTimestamp);
$data_checked = strtolower($newDate);
$properties = $arResult['ITEMS'][0]['PROPERTIES'];
$declension = new Declension('год', 'года', 'лет');

$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();

while ($arData = $rsData->Fetch()): ?>

	<section class="intro-4 section-offset">
		<div class="container">
			<picture class="bg">
				<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-bg.webp" type="image/webp" />
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-bg.jpg" alt="background" />
			</picture>

			<div class="intro-4__row">

				<div class="intro-4__advantages">
					<div class="intro-4__labels">
						<ul>
							<li>
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-5.svg" alt="">
								<p>Время приезда <span>30 минут</span></p>
							</li>
							<li>
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-6.svg" alt="">
								<p>Сейчас дежурит <span>15 бригад</span></p>
							</li>
						</ul>
					</div>

					<div class="intro-4__cards">
						<ul>
							<li>
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-1.svg" alt="">
								<span>Услуги оказываются профессионалами</span>
							</li>
							<li>
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-2.svg" alt="">
								<span>Гарантия эффективного лечения</span>
							</li>
							<li>
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-3.svg" alt="">
								<span>Не ставим наших пациентов на учет</span>
							</li>
							<li>
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-4.svg" alt="">
								<span>100% гарантия анонимности</span>
							</li>
						</ul>
					</div>

				</div>

				<div class="intro-4__main change-item">
					<div class="intro-4__main_top">
						<h1 class="intro-4__title title-h1 change-item__title">Лечение алкоголизма методом Довженко в Ростове-на-Дону</h1>
						<div class="intro-4__main_info">
							<p class="intro-4__main_subtitle">Наши специализированные программы лечения алкоголизма предлагают комплексный подход, включающий медицинскую поддержку, психологическую терапию и индивидуальные планы реабилитации</p>
							<div class="intro-4__cards-mobile">
								<ul>
									<li>
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-1.svg" alt="">
										<span>Услуги оказываются профессионалами</span>
									</li>
									<li>
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-2.svg" alt="">
										<span>Гарантия эффективного лечения</span>
									</li>
									<li>
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-3.svg" alt="">
										<span>Не ставим наших пациентов на учет</span>
									</li>
									<li>
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-4.svg" alt="">
										<span>100% гарантия анонимности</span>
									</li>
								</ul>
							</div>
							<button class="secondary-btn intro-4__main_btn popup-btn change-item__btn" data-path="popup-change">Записаться на услугу</button>
						</div>
					</div>

					<div class="intro-4__main_bottom">

						<div class="intro-4__form-wrap">

							<?
							$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_main_intro.php', array('data' => $arData), array('SHOW_BORDER' => false));
							?>

						</div>

						<div class="intro-4__labels-mobile">
							<ul>
								<li>
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-8.svg" alt="">
									<p>Время приезда <span>30 минут</span></p>
								</li>
								<li>
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-icon/intro4-icon-9.svg" alt="">
									<p>Сейчас дежурит <span>15 бригад</span></p>
								</li>
							</ul>
						</div>

						<div class="intro-4__stocks">
							<div class="intro-4__paginations">
								<div class="intro__swiper-pagination swiper-pagination swiper-pagination-solid"></div>
								<div class="intro__swiper-scrollbar swiper-scrollbar"></div>
								<div class="swiper-btns">
									<button class="intro__swiper-button-prev swiper-button-prev swiper-button-prev--white"></button>
									<button class="intro__swiper-button-next swiper-button-next swiper-button-next--white"></button>
								</div>
							</div>

							<div class="intro-4__swiper swiper intro4Swiper">
								<div class="swiper-wrapper">

									<div class="intro-4__swiper-slide swiper-slide">
										<div class="intro-4__stock change-item">
											<div>
												<p class="change-item__title">Бесплатная первичная консультация по телефону</p>
												<span>0 ₽</span>
											</div>
											<div class="intro-4__stock_bottom">
												<button class="btn-arrow intro-4__stock_btn popup-btn change-item__btn" data-path="popup-change">Записаться</button>
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro\intro4-stock.jpg" alt="">
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"about_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.M.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "14",
			"IBLOCK_TYPE" => "about",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "about_list",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("ADVANTAGE", "FIGURES"),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
			"STRICT_SECTION_CHECK" => "N",
			"LINK" => true,
			"WHERE" => "MAIN"
		),
		$component,
		['HIDE_ICONS' => 'Y']
	);
	?>



	<?
	$APPLICATION->IncludeComponent(
		"bitrix:news",
		"service_page",
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
			"COMPONENT_TEMPLATE" => "service_page",
			"DETAIL_ACTIVE_DATE_FORMAT" => "d.M.Y",
			"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
			"DETAIL_DISPLAY_TOP_PAGER" => "N",
			"DETAIL_FIELD_CODE" => array(
				0 => "",
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
				8 => "PRICE",
				9 => "",
			),
			"DETAIL_SET_CANONICAL_URL" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "5",
			"IBLOCK_TYPE" => "detail_pages",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"LIST_ACTIVE_DATE_FORMAT" => "d.M.Y",
			"LIST_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"LIST_PROPERTY_CODE" => array(
				0 => "PRICE",
				1 => "",
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
			"SEF_FOLDER" => "/services/",
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
			"WHERE" => "MAIN",
			"SEF_URL_TEMPLATES" => array(
				"news" => "",
				"section" => "#SECTION_CODE#/",
				"detail" => "#ELEMENT_CODE#/",
			)
		),
		false
	);

	?>

	<section class="stages section-offset">
		<div class="container">
			<h2 class="stages__title title-h2 section__title">Этапы прохождения лечения</h2>

			<div class="stages__cards">
				<ol>
					<li class="animation-item transform-item">
						<p class="stages__name">
							<picture class="stages__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-1.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-1.jpg" alt="" loading="lazy" />
							</picture>
							<span>Диагностика состояния</span>
						</p>
						<p class="stages__text">Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</li>
					<li class="animation-item transform-item">
						<p class="stages__name">
							<picture class="stages__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-2.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-2.jpg" alt="" loading="lazy" />
							</picture>
							<span>Составление плана лечения</span>
						</p>
						<p class="stages__text">Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</li>
					<li class="animation-item transform-item">
						<p class="stages__name">
							<picture class="stages__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-3.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-3.jpg" alt="" loading="lazy" />
							</picture>
							<span>Устранение симптомов</span>
						</p>
						<p class="stages__text">Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</li>
					<li class="animation-item transform-item">
						<p class="stages__name">
							<picture class="stages__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4.jpg" alt="" loading="lazy" />
							</picture>
							<span>Прохождение лечения</span>
						</p>
						<p class="stages__text">Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</li>
				</ol>
			</div>

		</div>
	</section>



	<section class="advantages section-offset">
		<div class="container">
			<picture class="advantages__bg">
				<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-bg.webp" type="image/webp" />
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-bg.jpg" alt="background" loading="lazy" />
			</picture>
			<div class="section__flex">
				<div class="section__top advantages__top">
					<h2 class="advantages__title title-h2">Преимущества клиники</h2>
					<button class="tertiary-btn advantages__btn section__btn popup-btn" data-path="popup-change">Заказать услугу</button>
				</div>

				<div class="section__inner">
					<div class="advantages__cards">
						<div class="advantages__card animation-item transform-item">
							<div class="advantages__card_top">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-1.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-1.png" alt="" loading="lazy">
								</picture>
								<p>Анонимность</p>
							</div>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
						</div>

						<div class="advantages__card animation-item transform-item">
							<div class="advantages__card_top">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-2.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-2.png" alt="" loading="lazy">
								</picture>
								<p>Эффективность</p>
							</div>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
						</div>

						<div class="advantages__card animation-item transform-item">
							<div class="advantages__card_top">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-3.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-3.png" alt="" loading="lazy">
								</picture>
								<p>Комплексность</p>
							</div>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
						</div>

						<div class="advantages__card animation-item transform-item">
							<div class="advantages__card_top">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-4.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-4.png" alt="" loading="lazy">
								</picture>
								<p>Безопасность</p>
							</div>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
						</div>

						<div class="advantages__card animation-item transform-item">
							<div class="advantages__card_top">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-5.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-5.png" alt="" loading="lazy">
								</picture>
								<p>Оперативность</p>
							</div>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
						</div>

						<div class="advantages__card animation-item transform-item">
							<div class="advantages__card_top">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-6.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-6.png" alt="" loading="lazy">
								</picture>
								<p>Доступность</p>
							</div>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>




	<?

	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"prices_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "IBLOCK_CODE",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "11",
			"IBLOCK_TYPE" => "info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "PRICES",
				1 => "SERVICES",
				2 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "prices_list",
			"WHERE" => "MAIN"
		),
		false
	);
	?>




	<section class="guarantees">
		<div class="container">
			<div class="section__flex">
				<div class="section__top guarantees__top">
					<h2 class="title-h2">Наши гарантии</h2>
					<button class="tertiary-btn guarantees__btn section__btn popup-btn" data-path="popup-change">Заказать услугу</button>
				</div>

				<div class="section__inner">
					<div class="guarantees__grid">
						<div class="guarantees__card animation-item transform-item">
							<p>100% анонимность</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-1.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-1.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card animation-item transform-item">
							<p>Качественная диагоностика</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-2.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-2.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card animation-item transform-item">
							<p>Индивидуальный план лечения</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__bg">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card animation-item transform-item">
							<p>Реабилитация после лечения</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__bg">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-4.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-4.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card animation-item transform-item">
							<p>Уговорим на лечение</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
						</div>

						<div class="guarantees__card animation-item transform-item">
							<p>Круглосуточная поддержка</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>






	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_faq.php', array('data' => $arData), array('SHOW_BORDER' => false));
	?>




	<section class="article section-offset">
		<div class="container">

			<div class="article__block">
				<? if ($properties['PHOTO']['VALUE']) : ?>
					<div class="article__img">
						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp" />
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['DESCRIPTION']['VALUE'][$i]; ?>" loading="lazy" />
						</picture>
					</div>
				<? endif; ?>

				<? if ($properties['TEXT_1']['~VALUE']) : ?>
					<?= $properties['TEXT_1']['~VALUE']['TEXT']; ?>
				<? endif; ?>

				<? if ($properties['DOCTOR_COMMENT']['VALUE'] && $properties['DOCTOR_COMMENT_TEXT']['~VALUE']) : ?>

					<p>
						<?= $properties['DOCTOR_COMMENT_TEXT']['~VALUE']['TEXT']; ?>
					</p>

					<?
					$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_COMMENT']['VALUE']], false, false, []);
					while ($row = $res->GetNextElement()) {
						$ar_fields = $row->GetFields();
						$ar_properties = $row->GetProperties();
						$name = $ar_fields['NAME'];
						$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
						$post = $ar_properties['POST']['VALUE'];
						$work_experience = preg_replace('/[^0-9]/', '', $ar_properties['WORK_EXPERIENCE']['VALUE']);
						$work_experience = (int) $work_experience;
					}
					?>

					<blockquote class="blockquote-1">
						<div class="blockquote-1__editor">
							<div class="blockquote-1__editor_left">
								<picture class="blockquote-1__editor_img">
									<source srcset="<?= $photo ?>" type="image/webp" />
									<img src="<?= $photo ?>" alt="<?= $name ?>" loading="lazy" />
								</picture>
								<div class="blockquote-1__editor_text">
									<p>Комментарий врача:</p>
									<p><?= $name ?></p>
								</div>
							</div>
							<div class="blockquote-1__editor_right">
								<div class="blockquote-1__editor_item">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor.svg" alt="" loading="lazy">
									<p><?= $post ?></p>
								</div>
								<div class="blockquote-1__editor_item">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.svg" alt="" loading="lazy">
									<p>Стаж работы: <?= $work_experience ?> <?= $declension->get($work_experience) ?></p>
								</div>
							</div>
						</div>
					</blockquote>

				<? endif; ?>

			</div>
			<div class="article__block">
				<? if ($properties['TEXT_2']['~VALUE']) : ?>
					<?= $properties['TEXT_2']['~VALUE']['TEXT']; ?>
				<? endif; ?>
			</div>

		</div>
	</section>






	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"faq_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.M.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "4",
			"IBLOCK_TYPE" => "info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("", "SERVICES", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"CUSTOM" => "services"
		)
	); ?>






	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"reviews_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.M.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "DATE_ACTIVE_FROM",
				1 => "DATE_CREATE",
				2 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "CITY",
				1 => "AGE",
				2 => "STARS",
				3 => "TEXT_DOCTOR",
				4 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"WHERE" => "SERVICES",
			"COMPONENT_TEMPLATE" => "reviews_list"
		),
		false
	); ?>






	<? $APPLICATION->IncludeComponent(
		"bitrix:news",
		"doctor_page",
		array(
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_ACTIVE_DATE_FORMAT" => "d.M.Y",
			"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
			"DETAIL_DISPLAY_TOP_PAGER" => "N",
			"DETAIL_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"DETAIL_PAGER_SHOW_ALL" => "Y",
			"DETAIL_PAGER_TEMPLATE" => "",
			"DETAIL_PAGER_TITLE" => "Страница",
			"DETAIL_PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"DETAIL_SET_CANONICAL_URL" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "3",
			"IBLOCK_TYPE" => "specialist",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
			"LIST_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"LIST_PROPERTY_CODE" => array(
				0 => "STARS",
				1 => "POST",
				2 => "ACADEMIC_DEGREE",
				3 => "WORK_EXPERIENCE",
				4 => "PRICE_CLINIC",
				5 => "PRICE_HOME",
				6 => "WORKING_HOURS",
				7 => "DOCTOR_EDUCATION",
				8 => "JOB_PROFILE",
				9 => "",
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
			"WHERE" => "SERVICES",
			"COMPONENT_TEMPLATE" => "doctor_page",
			"SEF_FOLDER" => "/doctors/",
			"SEF_URL_TEMPLATES" => array(
				"news" => "",
				"section" => "",
				"detail" => "#ELEMENT_CODE#/",
			)
		),
		false
	); ?>






	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"licenses_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.M.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "DATE_ACTIVE_FROM",
				1 => "DATE_CREATE",
				2 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "9",
			"IBLOCK_TYPE" => "gallery",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "LICENSE",
				2 => "",
				3 => "",
				4 => "",
				5 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"CUSTOM" => "main",
			"COMPONENT_TEMPLATE" => "licenses_list"
		),
		false
	); ?>



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
			"WHERE" => "MAIN",
		),
		false
	); ?>





	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"gallery_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.M.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "DATE_ACTIVE_FROM",
				1 => "DATE_CREATE",
				2 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "8",
			"IBLOCK_TYPE" => "gallery",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "LICENSE",
				2 => "",
				3 => "",
				4 => "",
				5 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"WHERE" => "MAIN",
			"COMPONENT_TEMPLATE" => "gallery_list"
		),
		false
	); ?>







	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"stocks_list",
		array(
			"ACTIVE_DATE_FORMAT" => "d.M.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "DATE_ACTIVE_FROM",
				1 => "DATE_CREATE",
				2 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "gallery",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "LICENSE",
				2 => "",
				3 => "",
				4 => "",
				5 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"WHERE" => "MAIN",
			"COMPONENT_TEMPLATE" => "stocks_list"
		),
		false
	); ?>

	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/pages/contacts.php', array("title" => true),  array('SHOW_BORDER' => false));
	?>


<? endwhile; ?>