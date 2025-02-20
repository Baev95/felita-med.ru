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
global $arrFilter;
$this->setFrameMode(true);
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$i = 0;
$data = strtolower(FormatDate("d.m.Y", MakeTimeStamp($arResult['ACTIVE_FROM'])));
$newTimestamp = strtotime($data) + (16 * 24 * 60 * 60);
$newDate = date("d.m.Y", $newTimestamp);
$data_checked = strtolower($newDate);
$properties = $arResult['PROPERTIES'];
echo '<pre>';
// var_dump($properties['TEXT_1']['~VALUE']);

echo '</pre>';

$declension = new Declension('год', 'года', 'лет');
?>

<section class="intro-5 section-offset">
	<div class="container">
		<div class="intro-5__row intro-service__row">
			<div class="intro-5__main intro-service__main">
				<picture class="intro-5__row_bg">
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-5/intro-5-bg.webp" type="image/webp" />
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-5/intro-5-bg.jpg" alt="photo" />
				</picture>

				<div class="intro-5__main_top">
					<div class="intro-service__main_text">
						<h1 class="intro-5__title title-h1"><?= $arResult['NAME'] ?></h1>
						<p class="intro-5__subtitle"><?= $arResult['PREVIEW_TEXT'] ?></p>
					</div>

					<div class="intro-5__cards">
						<ul>
							<li>
								<div class="intro-5__cards_icon">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-5/intro5-icon-1.svg" alt="">
								</div>
								<span>Услуги оказываются профессионалами</span>
							</li>
							<li>
								<div class="intro-5__cards_icon">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-5/intro5-icon-2.svg" alt="">
								</div>
								<span>Гарантия эффективного лечения</span>
							</li>
							<li>
								<div class="intro-5__cards_icon">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro/intro-5/intro5-icon-3.svg" alt="">
								</div>
								<span>Не ставим наших пациентов на учет</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="intro-5__main_bottom">
					<button class="primary-btn intro-5__main_btn popup-btn" data-path="popup-call">Записаться на услугу</button>
				</div>
			</div>

			<div class="intro-5__right">
				<form class="intro-5__form intro-service__form">
					<div class="intro-5__form_text">
						<p class="intro-5__form_title">Мы вам поможем — звоните! </p>
						<a href="#" class="intro-5__form_phone phone">
							<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 3C0 11.5604 6.93959 18.5 15.5 18.5C15.8862 18.5 16.2691 18.4859 16.6483 18.4581C17.0834 18.4262 17.3009 18.4103 17.499 18.2963C17.663 18.2019 17.8185 18.0345 17.9007 17.864C18 17.6582 18 17.4181 18 16.938V14.1207C18 13.7169 18 13.515 17.9335 13.342C17.8749 13.1891 17.7795 13.053 17.6559 12.9456C17.516 12.824 17.3262 12.755 16.9468 12.617L13.74 11.4509C13.2985 11.2904 13.0777 11.2101 12.8683 11.2237C12.6836 11.2357 12.5059 11.2988 12.3549 11.4058C12.1837 11.5271 12.0629 11.7285 11.8212 12.1314L11 13.5C8.3501 12.2999 6.2019 10.1489 5 7.5L6.36863 6.67882C6.77145 6.43713 6.97286 6.31628 7.0942 6.14506C7.2012 5.99408 7.2643 5.81637 7.2763 5.6317C7.2899 5.42227 7.2096 5.20153 7.0491 4.76005L5.88299 1.55321C5.745 1.17376 5.67601 0.98403 5.55442 0.8441C5.44701 0.72049 5.31089 0.62515 5.15802 0.56645C4.98496 0.5 4.78308 0.5 4.37932 0.5H1.56201C1.08188 0.5 0.84181 0.5 0.63598 0.59925C0.4655 0.68146 0.29814 0.83701 0.2037 1.00103C0.0896801 1.19907 0.0737499 1.41662 0.0418899 1.85173C0.0141299 2.23086 0 2.61378 0 3Z" fill="#00B768" />
							</svg>
							8 (888) 999-99-99
						</a>
						<p class="intro-5__form_subtitle">или оставьте свои данные, и мы вам перезвоним в течение 20 минут</p>
					</div>

					<div class="intro-5__form_inner">
						<input type="text" class="input" placeholder="Имя">
						<input type="tel" class="input" placeholder="Номер телефона">
						<button class="primary-btn" type="submit">Перезвонить мне</button>
						<p class="intro-5__form_politic politic">Мы обеспечиваем полную <a href="#">конфиденциальность</a> вашей личности</p>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>

<?

// $list = CIBlockSection::GetNavChain(false, $arResult['IBLOCK_SECTION_ID'], array(), true);
// foreach ($list as $arSectionPath) {
// 	echo '<pre>';
// 	//print_r($arSectionPath);
// 	echo '</pre>';
// }


// $iblock_section_id = getParentSections($arResult['IBLOCK_SECTION_ID']);
$arrFilter = ['PROPERTY_SERVICES' => $arResult['IBLOCK_SECTION_ID']];
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"prices_list",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" 	=> "N",
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
		"FILTER_NAME" => "arrFilter",
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
		"CUSTOM" => "services"
	),
	false
);
?>

<?
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_7.php', array(), array('MODE' => 'html'));
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

<section class="stages section-offset">
	<div class="container">
		<h2 class="stages__title title-h2">Этапы прохождения лечения</h2>

		<div class="stages__cards">
			<ol>
				<li>
					<picture class="stages__img">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-1.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-1.jpg" alt="" loading="lazy" />
					</picture>
					<p class="stages__name">Диагностика состояния</p>
					<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
				</li>
				<li>
					<picture class="stages__img">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-2.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-2.jpg" alt="" loading="lazy" />
					</picture>
					<p class="stages__name">Составление плана лечения</p>
					<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
				</li>
				<li>
					<picture class="stages__img">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-3.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-3.jpg" alt="" loading="lazy" />
					</picture>
					<p class="stages__name">Устранение симптомов</p>
					<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
				</li>
				<li>
					<picture class="stages__img">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-4.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/stages/stages-4/stages-4.jpg" alt="" loading="lazy" />
					</picture>
					<p class="stages__name">Прохождение лечения</p>
					<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
				</li>
			</ol>
		</div>
	</div>
</section>

<? if ($properties['TEXT_1']['~VALUE'] || $properties['TEXT_2']['~VALUE'] || $properties['TEXT_3']['~VALUE']) : ?>
	<section class="content section-offset">
		<div class="container">
			<div class="content__row">
				<div class="content__nav">
					<p class="content__title title-h2">Содержание страницы</p>
					<nav class="article__navigation">
						<div class="article__navigation_item">
							<ul class="navigation__list article__navigation_list">
							</ul>
						</div>
					</nav>
				</div>
				<div class="content__block">
					<p>Нет времени читать?</p>
					<p>Бесплатно проконсультируйтесь с врачом по телефону</p>
					<a href="tel:88889999999" class="phone">
						<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 2.63889C0 11.6749 7.32512 19 16.3611 19C16.7688 19 17.1729 18.9851 17.5732 18.9558C18.0325 18.9221 18.2621 18.9053 18.4712 18.785C18.6443 18.6853 18.8084 18.5086 18.8952 18.3287C19 18.1114 19 17.858 19 17.3512V14.3774C19 13.9512 19 13.7381 18.9298 13.5554C18.8679 13.394 18.7672 13.2504 18.6368 13.137C18.4891 13.0087 18.2888 12.9358 17.8883 12.7902L14.5033 11.5593C14.0373 11.3899 13.8042 11.3051 13.5832 11.3195C13.3882 11.3321 13.2007 11.3987 13.0413 11.5117C12.8606 11.6397 12.7331 11.8523 12.4779 12.2776L11.6111 13.7222C8.814 12.4554 6.54645 10.1849 5.27778 7.38889L6.72244 6.52209C7.14764 6.26697 7.36024 6.13941 7.48832 5.95867C7.60127 5.79931 7.66787 5.61172 7.68054 5.41679C7.69489 5.19573 7.61013 4.96273 7.44072 4.49672L6.20982 1.11172C6.06417 0.711191 5.99134 0.510921 5.863 0.363217C5.74962 0.232739 5.60594 0.132103 5.44458 0.0701418C5.2619 1.27405e-07 5.04881 0 4.62262 0H1.64879C1.14198 0 0.888577 7.54992e-08 0.671312 0.104764C0.491361 0.191541 0.314703 0.355733 0.215017 0.528865C0.0946623 0.737907 0.0778471 0.967543 0.0442171 1.42683C0.0149149 1.82702 0 2.23121 0 2.63889Z" fill="#00B768" />
						</svg>
						8 (888) 999-99-99
					</a>
				</div>
			</div>

			<div class="content__editors">
				<? if ($properties['DOCTOR_REVIEW']['VALUE']) : ?>

					<?
					$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_REVIEW']['VALUE']], false, false, []);
					while ($row = $res->GetNextElement()) {
						$ar_fields = $row->GetFields();
						$ar_properties = $row->GetProperties();
						$name = $ar_fields['NAME'];
						$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
						$post = $ar_properties['POST']['VALUE'];
						$work_experience = $ar_properties['WORK_EXPERIENCE']['VALUE'];
					}
					?>
					<div class="content__editor">
						<div class="content__editor_top">
							<p>Статью на странице проверил врач:</p>
							<p><?= $data_checked ?></p>
						</div>
						<div class="content__editor_main">
							<picture class="content__editor_img">
								<source srcset="<?= $photo ?>" type="image/webp" />
								<img src="<?= $photo ?>" alt="<?= $name ?>" />
							</picture>
							<div class="content__editor_info">
								<p class="content__editor_fio"><?= $name ?></p>
								<div class="content__editor_item">
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor.svg" type="image/svg+xml" />
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor.png" alt="" />
									</picture>
									<p><?= $post ?></p>
								</div>
								<div class="content__editor_item">
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.svg" type="image/svg+xml" />
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.png" alt="" />
									</picture>
									<p>Стаж работы: <span><?= $work_experience ?> <?= $declension->get($work_experience) ?></span></p>
								</div>
							</div>
						</div>
					</div>
				<? endif; ?>

				<? if ($properties['DOCTOR_WROTE']['VALUE']) : ?>

					<?
					$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_WROTE']['VALUE']], false, false, []);
					while ($row = $res->GetNextElement()) {
						$ar_fields = $row->GetFields();
						$ar_properties = $row->GetProperties();
						$name = $ar_fields['NAME'];
						$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
						$post = $ar_properties['POST']['VALUE'];
						$work_experience = $ar_properties['WORK_EXPERIENCE']['VALUE'];
					}
					?>
					<div class="content__editor">
						<div class="content__editor_top">
							<p>Статью на странице написал врач:</p>
							<p><?= $data ?></p>
						</div>
						<div class="content__editor_main">
							<picture class="content__editor_img">
								<source srcset="<?= $photo ?>" type="image/webp" />
								<img src="<?= $photo ?>" alt="<?= $name ?>" />
							</picture>

							<div class="content__editor_info">
								<p class="content__editor_fio"><?= $name ?></p>
								<div class="content__editor_item">
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor.svg" type="image/svg+xml" />
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor.png" alt="" />
									</picture>
									<p><?= $post ?></p>
								</div>
								<div class="content__editor_item">
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.svg" type="image/svg+xml" />
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.png" alt="" />
									</picture>
									<p>Стаж работы: <span><?= $work_experience ?> <?= $declension->get($work_experience) ?></span></p>
								</div>
							</div>
						</div>
					</div>
				<? endif; ?>
			</div>
		</div>
	</section>
<? endif; ?>

<section class="text-block section-offset text__content">
	<div class="container">
		<div class="text-block__grid">
			<div class="text-block__left">
				<? if ($properties['TEXT_1']['~VALUE']) : ?>
					<?= $properties['TEXT_1']['~VALUE']['TEXT']; ?>
				<? endif; ?>
				<? if ($properties['DOCTOR_COMMENT']['VALUE'] && $properties['DOCTOR_COMMENT_TEXT']['~VALUE']) : ?>
					<div class="text-block__quote">
						<div class="text-block__quote_main">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/quote.svg" alt="" class="text-block__quote_bg">
							<p>
								<?= $properties['DOCTOR_COMMENT_TEXT']['~VALUE']['TEXT']; ?>
							</p>
						</div>
						<?
						$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_COMMENT']['VALUE']], false, false, []);
						while ($row = $res->GetNextElement()) {
							$ar_fields = $row->GetFields();
							$ar_properties = $row->GetProperties();
							$name = $ar_fields['NAME'];
							$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
							$post = $ar_properties['POST']['VALUE'];
							$work_experience = $ar_properties['WORK_EXPERIENCE']['VALUE'];
						}
						?>
						<div class="text-block__quote_editor">
							<div class="text-block__quote_left">
								<picture class="text-block__quote_img">
									<source srcset="<?= $photo ?>" type="image/webp" />
									<img src="<?= $photo ?>" alt="<?= $name ?>" loading="lazy" />
								</picture>
								<div>
									<p class="text-block__quote_text">Комментарий врача:</p>
									<p class="text-block__quote_fio"><?= $name ?></p>
								</div>
							</div>
							<div class="text-block__quote_right">
								<div class="text-block__quote_item">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor.svg" alt="">
									<p><?= $post ?></p>
								</div>
								<div class="text-block__quote_item">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.svg" alt="">
									<p>Стаж работы: <?= $work_experience ?> <?= $declension->get($work_experience) ?></p>
								</div>
							</div>
						</div>
					</div>
				<? endif; ?>
			</div>
			<div class="text-block__right">
				<? if ($properties['PHOTO']['VALUE']) : ?>
					<div class="text-block__img">
						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp" />
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['DESCRIPTION']['VALUE'][$i]; ?>" loading="lazy" />
						</picture>
						<? if ($properties['PHOTO']['~DESCRIPTION'][$i++]) : ?>
							<?= $properties['PHOTO']['~DESCRIPTION'][$i++]; ?>
						<? endif; ?>
					</div>
				<? endif; ?>
			</div>
		</div>
		<div class="text-block__grid">
			<div class="text-block__left">
				<? if ($properties['TEXT_2']['~VALUE']) : ?>
					<?= $properties['TEXT_2']['~VALUE']['TEXT']; ?>
				<? endif; ?>
			</div>
			<div class="text-block__right">
				<? if ($properties['PHOTO']['VALUE']) : ?>
					<div class="text-block__img">
						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp" />
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['DESCRIPTION']['VALUE'][$i]; ?>" loading="lazy" />
						</picture>
						<? if ($properties['PHOTO']['~DESCRIPTION'][$i++]) : ?>
							<?= $properties['PHOTO']['~DESCRIPTION'][$i++]; ?>
						<? endif; ?>
					</div>
				<? endif; ?>
			</div>
		</div>
	</div>
</section>

<?
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_6_1.php', array(), array('MODE' => 'html'));
?>

<section class="text-block section-offset text__content">
	<div class="container">
		<div class="text-block__grid">
			<div class="text-block__left">
				<? if ($properties['TEXT_3']['~VALUE']) : ?>
					<?= $properties['TEXT_3']['~VALUE']['TEXT']; ?>
				<? endif; ?>
			</div>
			<div class="text-block__right">
				<? if ($properties['PHOTO']['VALUE']) : ?>
					<div class="text-block__img">
						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp" />
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['DESCRIPTION']['VALUE'][$i]; ?>" loading="lazy" />
						</picture>
						<? if ($properties['PHOTO']['~DESCRIPTION'][$i++]) : ?>

							<?= $properties['PHOTO']['~DESCRIPTION'][$i]; ?>
						<? endif; ?>
					</div>
				<? endif; ?>
			</div>
		</div>

		<div class="text-block__form">
			<p class="text-block__form_title">Уважаемые читатели, не занимайтесь самолечением</p>
			<div class="text-block__form_text">
				<p>Обратитесь за помощью к профессиональным врачам. Это важно для сохранения и укрепления вашего здоровья. Звоните:</p>
				<a href="tel:80000000000" class="phone-btn">
					<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 3.08333C1 10.217 6.78299 16 13.9167 16C14.2385 16 14.5576 15.9882 14.8736 15.9651C15.2362 15.9385 15.4174 15.9253 15.5825 15.8303C15.7192 15.7516 15.8487 15.6121 15.9172 15.47C16 15.2985 16 15.0984 16 14.6983V12.3506C16 12.0141 16 11.8458 15.9446 11.7017C15.8958 11.5743 15.8162 11.4608 15.7132 11.3713C15.5967 11.27 15.4385 11.2125 15.1223 11.0975L12.45 10.1258C12.0821 9.992 11.8981 9.92508 11.7236 9.93642C11.5697 9.94642 11.4216 9.999 11.2957 10.0882C11.1531 10.1892 11.0524 10.3571 10.851 10.6928L10.1667 11.8333C7.95842 10.8333 6.16825 9.04075 5.16667 6.83333L6.30719 6.14902C6.64288 5.94761 6.81072 5.8469 6.91183 5.70422C7.001 5.5784 7.05358 5.43031 7.06358 5.27642C7.07492 5.10189 7.008 4.91794 6.87425 4.55004L5.90249 1.87767C5.7875 1.56147 5.73001 1.40336 5.62868 1.28675C5.53918 1.18374 5.42574 1.10429 5.29835 1.05538C5.15413 1 4.9859 1 4.64943 1H2.30167C1.90157 1 1.70151 1 1.52998 1.08271C1.38792 1.15122 1.24845 1.28084 1.16975 1.41752C1.07473 1.58256 1.06146 1.76385 1.03491 2.12644C1.01177 2.44238 1 2.76148 1 3.08333Z" fill="#fff" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					8 (888) 999-99-99
				</a>
			</div>
		</div>

		<div class="text-block__grid">
			<div class="text-block__left">
				<? if ($properties["LITERATURE"]["VALUE"]) : ?>
					<p class="text-block__literature_title title-h4">Используемая литература</p>
					<div class="text-block__literature">
						<ol>
					</div>
					<? foreach ($properties["LITERATURE"]["VALUE"] as $literature) :
					?>
						<li>
							<?= $literature ?>
						</li>
					<? endforeach ?>
					</ol>
				<? endif; ?>


				<div class="text-block__literature_bottom">
					<div class="text-block__literature_item">
						<p>Оцените статью:</p>
						<div class="full-stars">
							<div class="rating-group popup-btn" data-path="popup-call-simple">
								<input name="fst" value="0" type="radio" disabled checked />

								<label for="fst-1">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFA900" />
									</svg>
								</label>
								<input name="fst" id="fst-1" value="1" type="radio" />

								<label for="fst-2">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFA900" />
									</svg>
								</label>
								<input name="fst" id="fst-2" value="2" type="radio" />

								<label for="fst-3">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFA900" />
									</svg>
								</label>
								<input name="fst" id="fst-3" value="3" type="radio" />

								<label for="fst-4">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFA900" />
									</svg>
								</label>
								<input name="fst" id="fst-4" value="4" type="radio" />
								<label for="fst-5">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFA900" />
									</svg>
								</label>
								<input name="fst" id="fst-5" value="5" type="radio" />
							</div>
						</div>
					</div>
					<div class="text-block__literature_item">
						<p>Поделитесь статьей:</p>
						<div class="text-block__literature_links">
							<a href="javascript:void(0);" id="copyDiv" class="popup-btn text-block__literature_link" data-path="popup-copy" title="Скопировать ссылку">
								<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_2028_26665)">
										<path d="M10.5809 0.0385733C10.1297 0.135253 9.69905 0.325683 9.35042 0.586425C9.05159 0.812011 5.02913 4.85205 4.87679 5.08057C4.48128 5.67236 4.32015 6.25244 4.34651 6.97607C4.37581 7.76416 4.63655 8.38525 5.17269 8.95068C5.70882 9.52197 6.43245 9.86768 7.19417 9.91748L7.46077 9.93506L8.2723 9.11768C8.96956 8.41748 9.08382 8.28857 9.1014 8.19189C9.15999 7.88135 8.96663 7.63818 8.66194 7.63818C8.51546 7.63818 8.44808 7.67041 8.26644 7.82275C7.79769 8.20947 7.19417 8.24463 6.69319 7.91064C6.30355 7.64697 6.10726 7.24561 6.13362 6.75049C6.14534 6.53955 6.16292 6.47217 6.25667 6.27588C6.36507 6.05322 6.42659 5.9917 8.36605 4.05225C9.46175 2.95361 10.4198 2.01904 10.4901 1.9751C10.6981 1.84619 10.9237 1.78174 11.1698 1.77881C11.4481 1.77588 11.6619 1.8374 11.8875 1.98389C12.4383 2.34131 12.6346 3.03271 12.3534 3.62451C12.2596 3.82373 12.1922 3.90576 11.6825 4.41553L11.117 4.98682L11.4276 5.29736C11.7323 5.59912 11.9959 5.95068 12.1366 6.24365C12.1746 6.32275 12.2186 6.38428 12.2362 6.38428C12.286 6.38428 13.5018 5.14209 13.66 4.93115C14.5828 3.69482 14.4451 1.93408 13.3407 0.855956C12.9686 0.492675 12.4852 0.220214 11.9637 0.0795889C11.6737 0.000487328 10.8739 -0.0229502 10.5809 0.0385733Z" fill="white" />
										<path d="M7.8252 5.78967C7.39453 6.22034 7.02832 6.60413 7.01074 6.63928C6.96387 6.7301 6.96973 6.95862 7.02246 7.05823C7.11328 7.23108 7.30957 7.31897 7.52051 7.28088C7.57617 7.26917 7.69043 7.20471 7.77539 7.13733C8.10645 6.87366 8.31152 6.79163 8.66309 6.79163C9.16406 6.79163 9.60059 7.06116 9.82031 7.5094C10.0078 7.88733 10.0078 8.27698 9.81738 8.66663C9.73242 8.84241 9.55371 9.03284 7.68457 10.899C6.5625 12.0211 5.58691 12.9762 5.5166 13.0201C5.30859 13.149 5.08301 13.2135 4.83691 13.2164C4.55859 13.2194 4.34473 13.1578 4.11914 13.0114C3.90234 12.8707 3.75879 12.7008 3.63281 12.4313C3.54199 12.2438 3.53613 12.2086 3.53613 11.9215C3.53613 11.6256 3.53906 11.6051 3.64746 11.3824C3.75 11.1686 3.80859 11.0983 4.35938 10.5416L4.96289 9.93518L4.67285 9.64807C4.36523 9.34045 4.18945 9.11194 3.98145 8.74866L3.85547 8.52893L3.1377 9.23499C2.66309 9.70374 2.37598 10.0143 2.28516 10.149C1.91016 10.7174 1.73438 11.2858 1.73438 11.9215C1.73438 13.3336 2.67188 14.5465 4.04297 14.9156C4.33301 14.9918 5.00977 15.0211 5.3291 14.9684C5.80078 14.8922 6.28125 14.6901 6.65625 14.4088C6.78223 14.3151 7.79297 13.3219 9 12.109C10.9307 10.1696 11.1387 9.95276 11.2529 9.74768C11.7568 8.84241 11.8799 7.92542 11.6045 7.1051C11.4346 6.59827 11.1973 6.23499 10.7637 5.82483C10.2422 5.32971 9.60645 5.05432 8.91211 5.01917L8.60449 5.00159L7.8252 5.78967Z" fill="white" />
									</g>
									<defs>
										<clipPath id="clip0_2028_26665">
											<rect width="14.537" height="14.9914" fill="white" transform="translate(0.734375 0.00390625)" />
										</clipPath>
									</defs>
								</svg>
							</a>
							<a href="https://t.me/share/url?url=<?= urlencode($url) ?>" class="text-block__literature_link" target="_blank" title="Поделиться в Телеграм">
								<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.2212 0.605939C14.2212 0.605939 15.6088 0.0865112 15.4932 1.34798C15.4546 1.86742 15.1077 3.68541 14.8379 5.65184L13.9128 11.4769C13.9128 11.4769 13.8358 12.3302 13.1419 12.4786C12.4481 12.627 11.4074 11.9592 11.2147 11.8108C11.0605 11.6995 8.32386 10.0299 7.36022 9.21364C7.0904 8.99102 6.78204 8.54579 7.39875 8.02636L11.446 4.31617C11.9085 3.87094 12.371 2.83208 10.4438 4.09355L5.04754 7.61826C5.04754 7.61826 4.43082 7.98926 3.2745 7.65536L0.769079 6.91331C0.769079 6.91331 -0.155997 6.35678 1.42434 5.80022C5.27882 4.05642 10.0198 2.27552 14.2212 0.605939Z" fill="white" />
								</svg>
							</a>
							<a href="http://vk.com/share.php?url=<?= urlencode($f_h1) ?>&noparse=true"
								class="text-block__literature_link" rel="noopener" target="_blank"
								title="Поделиться во Вконтакте">
								<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.6832 0.618734C13.5257 1.15367 13.3133 1.61929 13.0473 2.04208L13.0583 2.02317C12.797 2.49363 12.4848 3.03717 12.1219 3.65381C11.8108 4.14065 11.6461 4.39268 11.6278 4.4099C11.5473 4.5189 11.4912 4.65248 11.472 4.79929L11.4714 4.8037C11.4872 4.93727 11.5443 5.05384 11.6278 5.14079L11.8611 5.4218C13.1097 6.80755 13.8119 7.76274 13.9679 8.28738C13.9883 8.34535 14 8.41214 14 8.48208C14 8.60431 13.9638 8.7171 13.9026 8.80972L13.9037 8.80783C13.8011 8.92187 13.6575 8.99244 13.4988 8.99244C13.4813 8.99244 13.4632 8.99181 13.4463 8.98992H13.4487H11.9137C11.9131 8.98992 11.9119 8.98992 11.9107 8.98992C11.7141 8.98992 11.5333 8.91557 11.3915 8.79208L11.3932 8.79333C11.1867 8.60998 11.0029 8.41151 10.8384 8.19602L10.8331 8.18846C10.5644 7.8604 10.3259 7.58422 10.1179 7.35991C9.42474 6.64835 8.91326 6.29256 8.58343 6.29256C8.57118 6.2913 8.55718 6.29067 8.54259 6.29067C8.44632 6.29067 8.35648 6.32281 8.28238 6.37762L8.28413 6.37636C8.22345 6.45827 8.1867 6.56413 8.1867 6.67817C8.1867 6.70085 8.18786 6.72228 8.19078 6.74433V6.74181C8.17503 6.93965 8.16569 7.16963 8.16569 7.40213C8.16569 7.47711 8.16686 7.55146 8.16861 7.6258V7.61509V8.34535C8.17445 8.37496 8.17795 8.40899 8.17795 8.44364C8.17795 8.59612 8.11377 8.73222 8.01342 8.82232L8.01284 8.82295C7.78705 8.93447 7.52334 9 7.24504 9C7.18553 9 7.12719 8.99685 7.06943 8.99118L7.07701 8.99181C6.15869 8.97291 5.30688 8.68244 4.58285 8.19287L4.60327 8.20547C3.7217 7.62707 2.99125 6.87412 2.43466 5.98446L2.4189 5.95799C1.89032 5.20064 1.39732 4.345 0.977246 3.44273L0.936406 3.3457C0.690782 2.84038 0.436406 2.21913 0.217036 1.58023L0.18203 1.46367C0.0927655 1.17635 0.0280047 0.842411 0.00116686 0.4965L0 0.480748C0 0.162349 0.173473 0.00315045 0.52042 0.00315045H2.05484C2.06884 0.0018903 2.08518 0.00126006 2.1021 0.00126006C2.24679 0.00126006 2.3804 0.0548166 2.486 0.144917L2.48483 0.143657C2.60152 0.281644 2.68786 0.451134 2.73046 0.640157L2.73221 0.647718C3.01459 1.50903 3.31389 2.23236 3.65811 2.92544L3.61902 2.83912C3.90023 3.45029 4.2112 3.97641 4.56593 4.46219L4.55251 4.44266C4.86367 4.85515 5.10638 5.0614 5.28063 5.0614C5.28588 5.06203 5.2923 5.06203 5.2993 5.06203C5.38565 5.06203 5.46091 5.01162 5.50175 4.93601L5.50233 4.93475C5.54551 4.81504 5.57059 4.67579 5.57059 4.53087C5.57059 4.5 5.56943 4.46913 5.56709 4.43888V4.44266V1.9986C5.55484 1.71066 5.4895 1.44161 5.3804 1.20029L5.38506 1.21227C5.31272 1.04593 5.22579 0.902268 5.12252 0.774363L5.12427 0.776883C5.02859 0.673551 4.96324 0.538084 4.94282 0.386866L4.94224 0.383086C4.94224 0.275973 4.98775 0.179572 5.05893 0.116564L5.05951 0.115934C5.13011 0.0459955 5.22462 0.00378048 5.32789 0.00378048H5.33256H7.75146C7.76429 0.00189025 7.77888 0.00126006 7.79405 0.00126006C7.90782 0.00126006 8.00992 0.0567069 8.0776 0.143657L8.07818 0.144287C8.13827 0.262742 8.17386 0.404509 8.17386 0.554467C8.17386 0.578409 8.1727 0.601722 8.17095 0.625035V0.621885V3.88127C8.16978 3.89639 8.1692 3.91403 8.1692 3.93167C8.1692 4.04761 8.19895 4.15661 8.25029 4.24923L8.24913 4.24671C8.29172 4.31476 8.36289 4.35886 8.44341 4.35886C8.54609 4.3513 8.64002 4.31476 8.71879 4.25679L8.71704 4.25805C8.87573 4.14023 9.01225 4.00602 9.13069 3.85417L9.13302 3.85102C9.48716 3.41879 9.81389 2.94119 10.0986 2.43335L10.1214 2.38925C10.3221 2.0301 10.5391 1.58779 10.7357 1.13351L10.7719 1.04088L11.0321 0.478857C11.1225 0.197844 11.3652 0 11.6505 0C11.6616 0 11.6727 -4.56973e-08 11.6838 0.00063003H11.682H13.217C13.6317 0.00063003 13.7872 0.206665 13.6838 0.618734H13.6832Z" fill="white" />
								</svg>
							</a>
							<a href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&service=odnoklassniki&st.shareUrl=<?= urlencode($url) ?>&st.title=<?= urlencode($f_h1) ?>"
								class="text-block__literature_link" target="_blank"
								title="Поделиться в Однаклассниках">
								<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.00054 7.59262C7.09187 7.59262 8.78686 5.89304 8.78686 3.79613C8.78683 1.69922 7.09184 0 5.00054 0C2.90848 0 1.21279 1.69922 1.21279 3.79613C1.21276 5.89304 2.90848 7.59262 5.00054 7.59262ZM5.00054 1.92845C6.02921 1.92845 6.86316 2.76451 6.86316 3.7961C6.86316 4.82772 6.02921 5.66376 5.00054 5.66376C3.97079 5.66376 3.13716 4.82772 3.13716 3.7961C3.13716 2.76451 3.97076 1.92845 5.00054 1.92845ZM9.36507 8.05588C9.15176 7.62523 8.55961 7.26708 7.77236 7.88853C6.70826 8.72862 5.00051 8.72862 5.00051 8.72862C5.00051 8.72862 3.29165 8.72862 2.22755 7.88853C1.44069 7.26708 0.848919 7.62523 0.635227 8.05588C0.261896 8.80626 0.683072 9.16917 1.63359 9.78076C2.44529 10.3034 3.56089 10.4985 4.28091 10.5714L3.67962 11.1742C2.83288 12.0227 2.01571 12.8426 1.44839 13.4114C1.10902 13.7512 1.10902 14.3024 1.44839 14.6422L1.55028 14.7451C1.88965 15.085 2.43908 15.085 2.77841 14.7451L5.00965 12.5079C5.85713 13.3568 6.6743 14.1764 7.24159 14.7451C7.58095 15.085 8.13038 15.085 8.46972 14.7451L8.57161 14.6422C8.91098 14.302 8.91098 13.7512 8.57161 13.411L6.34038 11.1742L5.73766 10.5696C6.45838 10.4949 7.56157 10.2989 8.36668 9.78079C9.31722 9.16914 9.7377 8.80623 9.36507 8.05588Z" fill="white" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-block__right"></div>
	</div>
	</div>
</section>

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
		"CUSTOM" => "services",
		"COMPONENT_TEMPLATE" => "reviews_list"
	),
	false
); ?>

<section class="rating section-offset">
	<div class="container">
		<div class="rating__top">
			<h2 class="title-h2">Рейтинг на независимых площадках</h2>
		</div>

		<div class="rating__cards">
			<div class="rating__card">
				<div class="rating__card_name">
					<picture class="rating__card_logo">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/rating/yandex-2.webp" type="image/webp">
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/rating/yandex-2.jpg" alt="Яндекс">
					</picture>

					<div class="rating__card_estimation">
						<p>4.9</p>
						<div class="rating__card_stars">
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
						</div>
					</div>
				</div>

				<div class="rating__card_info">
					<p>Более <span>70 отзывов</span></p>
					<p>Рекомендует <span>89% пользователей</span></p>
				</div>
			</div>

			<div class="rating__card">
				<div class="rating__card_name">
					<picture class="rating__card_logo">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/rating/google-2.webp" type="image/webp">
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/rating/google-2.jpg" alt="Google">
					</picture>

					<div class="rating__card_estimation">
						<p>4.9</p>
						<div class="rating__card_stars">
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
						</div>
					</div>
				</div>

				<div class="rating__card_info">
					<p>Более <span>70 отзывов</span></p>
					<p>Рекомендует <span>89% пользователей</span></p>
				</div>
			</div>

			<div class="rating__card">
				<div class="rating__card_name">
					<picture class="rating__card_logo">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/rating/pro-doctorov-2.webp" type="image/webp">
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/rating/pro-doctorov-2.jpg" alt="pro-doctorov">
					</picture>

					<div class="rating__card_estimation">
						<p>4.9</p>
						<div class="rating__card_stars">
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star-active">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
							<span class="rating__card_star">
								<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.32614 1.52196C8.5427 0.826015 9.4573 0.826013 9.67386 1.52196L10.9686 5.68276C11.1921 6.40105 11.8421 6.9076 12.5973 6.9076H16.7872C17.1186 6.9076 17.3648 7.12038 17.461 7.42955C17.5576 7.74006 17.4795 8.08112 17.1965 8.29583L13.8068 10.8674C13.2094 11.3206 12.9693 12.1122 13.1918 12.8274L14.4866 16.9882C14.6003 17.3537 14.4604 17.6737 14.2221 17.8545C13.987 18.0329 13.6786 18.0633 13.4034 17.8545L10.0137 15.283C9.41078 14.8256 8.58922 14.8256 7.98628 15.283L4.5966 17.8545C4.32141 18.0633 4.01304 18.0329 3.77794 17.8545C3.53964 17.6737 3.39971 17.3537 3.51342 16.9882L4.80816 12.8274C5.03072 12.1122 4.79058 11.3206 4.19318 10.8674L0.803512 8.29583C0.52048 8.08112 0.442365 7.74006 0.538987 7.42955C0.635194 7.12038 0.881415 6.9076 1.21284 6.9076H5.40271C6.15789 6.9076 6.80789 6.40105 7.0314 5.68276L8.32614 1.52196Z" stroke="#F69800" />
								</svg>
							</span>
						</div>
					</div>
				</div>

				<div class="rating__card_info">
					<p>Более <span>70 отзывов</span></p>
					<p>Рекомендует <span>89% пользователей</span></p>
				</div>
			</div>
		</div>

	</div>
</section>

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
		"CUSTOM" => "services",
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

<?
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_6.php', array(), array('MODE' => 'html'));
?>

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
		"CUSTOM" => "services",
		"COMPONENT_TEMPLATE" => "licenses_list"
	),
	false
); ?>

<?
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/contacts/index.php', array("title" => true),  array('SHOW_BORDER' => false));
?>