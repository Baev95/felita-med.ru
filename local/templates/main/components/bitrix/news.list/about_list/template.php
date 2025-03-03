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

<section class="about section-offset">
	<div class="container">
		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<div class="about__grid">
				<? if (!$arParams["CUSTOM"]) : ?>
					<div class="about__item">
						<h2 class="title-h2 about__title">О нашей клинике</h2>
					</div>
				<? endif; ?>
				<div class="about__item about__text">
					<p><?= $arItem['PREVIEW_TEXT'] ?></p>
					<?
					foreach ($arItem["PROPERTIES"]["ADVANTAGE"]["VALUE"] as $advantages) :
						$advantages = explode('|', $advantages); ?>
						<p class="about__text_bold"><?= $advantages[0] ?></p>
					<? endforeach ?>
				</div>
			</div>
			<div class="about__advantages">
				<?
				foreach ($arItem["PROPERTIES"]["FIGURES"]["VALUE"] as $figures) :
					$figure = explode('|', $figures); ?>
					<div class="about__advantage">
						<p><span><?= $figure[0] ?></span> <?= $figure[1] ?></p>
						<p><?= $figure[2] ?></p>
					</div>
				<? endforeach ?>
				<div class="about__advantage" <?= $arParams['LINK'] ? "" : "style='display:none'" ?>>
					<? if ($arParams['LINK']) : ?>

						<a href="/about/" class="about__btn">Подробнее о клинике <div class="btn-circle about__btn-circle"></div></a>

					<? endif ?>
				</div>
			</div>
		<? endforeach; ?>
	</div>
</section>

<? if ($arParams["CUSTOM"]) : ?>
	<section class="advantages section-offset">
		<div class="container">
			<div class="advantages__top">
				<h2 class="title-h2">Преимущества клиники</h2>
			</div>

			<div class="section__inner">
				<div class="advantages__cards">

					<div class="advantages__card">
						<div class="advantages__card_top">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-1.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-1.png" alt="" loading="lazy">
							</picture>
							<p>Анонимность</p>
						</div>
						<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</div>

					<div class="advantages__card">
						<div class="advantages__card_top">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-2.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-2.png" alt="" loading="lazy">
							</picture>
							<p>Эффективность</p>
						</div>
						<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</div>

					<div class="advantages__card">
						<div class="advantages__card_top">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-3.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-3.png" alt="" loading="lazy">
							</picture>
							<p>Комплексность</p>
						</div>
						<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</div>

					<div class="advantages__card">
						<div class="advantages__card_top">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-4.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-4.png" alt="" loading="lazy">
							</picture>
							<p>Безопасность</p>
						</div>
						<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</div>

					<div class="advantages__card">
						<div class="advantages__card_top">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-5.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-5.png" alt="" loading="lazy">
							</picture>
							<p>Оперативность</p>
						</div>
						<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</div>

					<div class="advantages__card">
						<div class="advantages__card_top">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-6.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/advantages-icon-1/advantages-6.png" alt="" loading="lazy">
							</picture>
							<p>Доступность</p>
						</div>
						<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_7.php', array(), array('SHOW_BORDER' => false));
	?>

	<section class="guarantees section-offset">
		<div class="container">
			<div class="section__flex">
				<div class="section__top guarantees__top">
					<h2 class="title-h2">Наши гарантии</h2>
					<button class="primary-btn guarantees__btn section__btn popup-btn" data-path="popup-call">Заказать услугу</button>
				</div>

				<div class="section__inner">
					<div class="guarantees__grid">
						<div class="guarantees__card">
							<p>100% анонимность</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-1.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-1.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card">
							<p>Качественная диагоностика</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__img">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-2.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-2.png" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card">
							<p>Индивидуальный план лечения</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__bg">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-3.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-3.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card">
							<p>Реабилитация после лечения</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
							<picture class="guarantees__bg">
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-4.webp" type="image/webp" />
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/guarantees/guarantees-3/guarantees-4.jpg" alt="" loading="lazy" />
							</picture>
						</div>

						<div class="guarantees__card">
							<p>Уговорим на лечение</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
						</div>

						<div class="guarantees__card">
							<p>Круглосуточная поддержка</p>
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

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
			"CUSTOM" => "services",
			"COMPONENT_TEMPLATE" => "reviews_list"
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
			"CUSTOM" => "main",
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
			"CUSTOM" => "main",
			"COMPONENT_TEMPLATE" => "gallery_list"
		),
		false
	); ?>


	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/contacts/index.php', array("title" => true),  array('SHOW_BORDER' => false));
	?>

<? endif; ?>