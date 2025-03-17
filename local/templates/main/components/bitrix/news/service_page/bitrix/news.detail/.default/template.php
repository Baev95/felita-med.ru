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
global $arrFilter;

Loader::includeModule("highloadblock");
$this->setFrameMode(true);
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$i = 0;
$data = strtolower(FormatDate("d.m.Y", MakeTimeStamp($arResult['ACTIVE_FROM'])));
$newTimestamp = strtotime($data) + (16 * 24 * 60 * 60);
$newDate = date("d.m.Y", $newTimestamp);
$data_checked = strtolower($newDate);
$properties = $arResult['PROPERTIES'];
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
						<h1 class="intro-4__title title-h1 change-item__title"><?= $arResult['NAME'] ?></h1>
						<div class="intro-4__main_info">
							<p class="intro-4__main_subtitle"><?= $arResult['PREVIEW_TEXT'] ?></p>
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
							<div class="intro-4__form">
								<div class="intro-4__form_text">
									<p class="intro-4__form_title">Мы вам поможем — звоните! </p>
									<a href="#" class="intro-4__form_phone phone">
										<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 4C1 12.5604 7.93959 19.5 16.5 19.5C16.8862 19.5 17.2691 19.4859 17.6483 19.4581C18.0834 19.4262 18.3009 19.4103 18.499 19.2963C18.663 19.2019 18.8185 19.0345 18.9007 18.864C19 18.6582 19 18.4181 19 17.938V15.1207C19 14.7169 19 14.515 18.9335 14.342C18.8749 14.1891 18.7795 14.053 18.6559 13.9456C18.516 13.824 18.3262 13.755 17.9468 13.617L14.74 12.4509C14.2985 12.2904 14.0777 12.2101 13.8683 12.2237C13.6836 12.2357 13.5059 12.2988 13.3549 12.4058C13.1837 12.5271 13.0629 12.7285 12.8212 13.1314L12 14.5C9.3501 13.2999 7.2019 11.1489 6 8.5L7.36863 7.67882C7.77145 7.43713 7.97286 7.31628 8.0942 7.14506C8.2012 6.99408 8.2643 6.81637 8.2763 6.6317C8.2899 6.42227 8.2096 6.20153 8.0491 5.76005L6.88299 2.55321C6.745 2.17376 6.67601 1.98403 6.55442 1.8441C6.44701 1.72049 6.31089 1.62515 6.15802 1.56645C5.98496 1.5 5.78308 1.5 5.37932 1.5H2.56201C2.08188 1.5 1.84181 1.5 1.63598 1.59925C1.4655 1.68146 1.29814 1.83701 1.2037 2.00103C1.08968 2.19907 1.07375 2.41662 1.04189 2.85173C1.01413 3.23086 1 3.61378 1 4Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										8 (888) 999-99-99
									</a>
									<p class="intro-4__form_subtitle">или оставьте свои данные, и мы вам перезвоним в течение 20 минут</p>
								</div>

								<form action="" class="intro-4__form_inner" data-modal-open="open" data-modal-ok=".popup-change-ok .result-wrapper" data-modal-err=".popup-change-error .result-wrapper">
									<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
									<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
									<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
									<input name='type' type='hidden' value='request' />
									<input name='cc' type='hidden' value='2' />
									<input name='sub' type='hidden' value='8' />
									<input name='mes' type='hidden' value='22' />
									<input name="urlMessage" type="hidden" value="">
									<input name="title_url_message" type="hidden" value="">
									<div class="input-wrapper intro-4__form_input">
										<input type="text" name="name" class="input input-white intro-4__form_input" placeholder="Имя" required>
										<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
									</div>

									<div class="input-wrapper intro-4__form_input">
										<input type="tel" name="phone" class="input input-white intro-4__form_input" placeholder="Номер телефона" required>
										<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
									</div>

									<button type="submit" class="secondary-btn intro-4__form_btn request-send-btn"><span>Перезвонить мне</span></button>
									<p class="politic politic-white intro-4__form_politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
								</form>
							</div>
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
			"WHERE" => "SERVICES"
		),
		false
	);
	?>

	<section class="form-7 section-offset">
		<div class="container">
			<div class="form-7__row">
				<div class="form-7__content">
					<p class="form-7__title">Не знаете, какое лечение выбрать? Бесплатный подбор лечения!</p>
					<div class="form-7__text">
						<p>Позвоните нам и получите бесплатную анонимную консультацию. Все звонки анонимны</p>
						<a href="tel:80000000000" class="form-7__phone-btn phone-btn">
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 2.72222C0 10.3315 6.16852 16.5 13.7778 16.5C14.1211 16.5 14.4614 16.4875 14.7985 16.4628C15.1852 16.4344 15.3786 16.4203 15.5547 16.3189C15.7004 16.235 15.8387 16.0862 15.9117 15.9347C16 15.7517 16 15.5383 16 15.1116V12.6073C16 12.2484 16 12.0689 15.9409 11.9151C15.8888 11.7792 15.804 11.6582 15.6941 11.5628C15.5698 11.4547 15.4011 11.3933 15.0638 11.2707L12.2133 10.2341C11.8209 10.0915 11.6246 10.0201 11.4385 10.0322C11.2743 10.0428 11.1164 10.0989 10.9821 10.194C10.83 10.3019 10.7226 10.4809 10.5077 10.839L9.77778 12.0556C7.42231 10.9888 5.5128 9.0768 4.44444 6.72222L5.661 5.99228C6.01907 5.77745 6.1981 5.67003 6.30596 5.51783C6.40107 5.38363 6.45716 5.22566 6.46782 5.06151C6.47991 4.87535 6.40853 4.67914 6.26587 4.28671L5.22932 1.43619C5.10667 1.0989 5.04534 0.930249 4.93726 0.805867C4.84179 0.695991 4.72079 0.611245 4.58491 0.559067C4.43108 0.5 4.25163 0.5 3.89273 0.5H1.38845C0.961671 0.5 0.748275 0.5 0.565315 0.588222C0.413778 0.661298 0.265013 0.799564 0.181067 0.94536C0.0797156 1.1214 0.0655555 1.31477 0.0372355 1.70154C0.0125599 2.03854 0 2.37892 0 2.72222Z" fill="white" />
							</svg>
							8 (888) 999-99-99
						</a>
					</div>
				</div>

				<div class="form-7__inner">
					<p>Или оставьте свои данные, и наши специалисты перезвонят вам в течение 15 минут</p>
					<form class="form-7__form">
						<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
						<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
						<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
						<input name='type' type='hidden' value='request' />
						<input name='cc' type='hidden' value='2' />
						<input name='sub' type='hidden' value='8' />
						<input name='mes' type='hidden' value='22' />
						<input name="urlMessage" type="hidden" value="">
						<input name="title_url_message" type="hidden" value="">
						<div class="input-wrapper form-7__form_input">
							<input type="text" name="name" class="input form-7__form_input" placeholder="Имя" required>
							<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear-black.svg" alt=""></button>
						</div>

						<div class="input-wrapper form-7__form_input">
							<input type="tel" name="phone" class="input form-7__form_input" placeholder="Номер телефона" required>
							<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear-black.svg" alt=""></button>
						</div>

						<button type="submit" class="primary-btn form-7__form_btn"><span>Перезвонить мне</span></button>
						<p class="politic politic-white form-7__form_politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?/*
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_7.php', array(), array('MODE' => 'html'));*/
	?>

	<section class="guarantees section-offset">
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

	<? if ($properties['TEXT_1']['~VALUE'] || $properties['TEXT_2']['~VALUE'] || $properties['TEXT_3']['~VALUE']) : ?>
		<section class="navigation navigation-4 section-offset">
			<div class="container">
				<div class="navigation__inner-4">
					<div class="navigation__wrap-4">
						<h2 class="navigation__title-4 title-h2">Содержание страницы</h2>
						<ul class="navigation__list navigation__list-4"></ul>
					</div>
					<div class="dock-check__inner-4">
						<? if ($properties['DOCTOR_REVIEW']['VALUE']) : ?>
							<?
							$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_REVIEW']['VALUE']], false, false, []);
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
							<a href="#" class="doctor-reviewer-4 doc-check-4">
								<div class="doctor-reviewer__top-4 doc-check__top-4">
									<span>Статью на странице проверил врач:</span>
									<span class="doctor-reviewer__date-4 doc-check__date-4"><?= $data_checked ?></span>
								</div>
								<div class="doctor-reviewer__content-4 doc-check__content-4">
									<picture class="doctor-reviewer__picture-4 doc-check__picture-4">
										<source srcset="<?= $photo ?>" type="image/webp">
										<img src="<?= $photo ?>" alt="<?= $name ?>"
											class="doctor-reviewer__image-4 doc-check__image-4">
									</picture>
									<div class="doctor-reviewer__info-4 doc-check__info-4">
										<h4 class="doctor-reviewer__name-4 doc-check__name-4"><?= $name ?></h4>
										<p class="doctor-reviewer__post-4 doc-check__post-4"><?= $post ?></p>
										<p class="doctor-reviewer__stage-4 doc-check__stage-4">Стаж работы: <?= $work_experience ?> <?= $declension->get($work_experience) ?></p>
									</div>
								</div>
							</a>
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
								$work_experience = preg_replace('/[^0-9]/', '', $ar_properties['WORK_EXPERIENCE']['VALUE']);
								$work_experience = (int) $work_experience;
							}
							?>
							<a href="#" class="doctor-author-4 doc-check-4">
								<div class="doctor-author__top-4 doc-check__top-4">
									<span>Статью на странице написал врач:</span>
									<span class="doctor-author__date-4 doc-check__date-4"><?= $data_checked ?></span>
								</div>
								<div class="doctor-author__content-4 doc-check__content-4">
									<picture class="doctor-author__picture-4 doc-check__picture-4">
										<source srcset="<?= $photo ?>" type="image/webp">
										<img src="<?= $photo ?>" alt="<?= $name ?>"
											class="doctor-author__image-4 doc-check__image-4">
									</picture>
									<div class="doctor-author__info-4 doc-check__info-4">
										<h4 class="doctor-author__name-4 doc-check__name-4"><?= $name ?></h4>
										<p class="doctor-author__post-4 doc-check__post-4"><?= $post ?></p>
										<p class="doctor-reviewer__stage-4 doc-check__stage-4">Стаж работы: <?= $work_experience ?> <?= $declension->get($work_experience) ?></p>
									</div>
								</div>
							</a>
						<? endif; ?>
					</div>
				</div>
			</div>
		</section>
	<? endif; ?>

	<section class="article section-offset">
		<div class="container">

			<div class="article__block">
				<? if ($properties['PHOTO']['VALUE']) : ?>

					<?

					echo '<pre>';
					//var_dump($properties['PHOTO']);

					echo '</pre>';
					?>
					<div class="article__img">
						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp" />
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['PHOTO']['DESCRIPTION'][$i]; ?>" loading="lazy" />
						</picture>
						<p style="font-size: 14px;line-height: 130%;color: var(--chernyy---60);margin: 0;">
							<?= $properties['PHOTO']['DESCRIPTION'][$i]; ?>
						</p>
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

	<section class="form-2 section-offset">
		<div class="container">
			<picture class="form-2__bg">
				<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-bg.webp" type="image/webp" />
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-bg.png" alt="" loading="lazy" />
			</picture>
			<div class="form-2__row">
				<picture class="form-2__img">
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.webp" type="image/webp" />
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.png" alt="" loading="lazy" />
				</picture>

				<div class="form-2__wrapper">
					<p class="form-2__title">Оставьте заявку и получите бесплатную консультацию</p>
					<div class="form-2__subtitle">
						<p>Все звонки анонимы. Позвоните сейчас и получите бесплатную анонимную консультацию</p>
						<a href="tel:80000000000" class="form-2__phone-btn phone-btn-white">
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 3.08333C1 10.217 6.78299 16 13.9167 16C14.2385 16 14.5576 15.9882 14.8736 15.9651C15.2362 15.9385 15.4174 15.9253 15.5825 15.8303C15.7192 15.7516 15.8487 15.6121 15.9172 15.47C16 15.2985 16 15.0984 16 14.6983V12.3506C16 12.0141 16 11.8458 15.9446 11.7017C15.8958 11.5743 15.8162 11.4608 15.7132 11.3713C15.5967 11.27 15.4385 11.2125 15.1223 11.0975L12.45 10.1258C12.0821 9.992 11.8981 9.92508 11.7236 9.93642C11.5697 9.94642 11.4216 9.999 11.2957 10.0882C11.1531 10.1892 11.0524 10.3571 10.851 10.6928L10.1667 11.8333C7.95842 10.8333 6.16825 9.04075 5.16667 6.83333L6.30719 6.14902C6.64288 5.94761 6.81072 5.8469 6.91183 5.70422C7.001 5.5784 7.05358 5.43031 7.06358 5.27642C7.07492 5.10189 7.008 4.91794 6.87425 4.55004L5.90249 1.87767C5.7875 1.56147 5.73001 1.40336 5.62868 1.28675C5.53918 1.18374 5.42574 1.10429 5.29835 1.05538C5.15413 1 4.9859 1 4.64943 1H2.30167C1.90157 1 1.70151 1 1.52998 1.08271C1.38792 1.15122 1.24845 1.28084 1.16975 1.41752C1.07473 1.58256 1.06146 1.76385 1.03491 2.12644C1.01177 2.44238 1 2.76148 1 3.08333Z" fill="#37384C" stroke="#37384C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<span>8 (888) 999-99-99</span>
						</a>
					</div>

					<div class="form-2__content">
						<p class="form-2__text">Или заполните ваши данные, и наши специалисты перезвонят вам в течение 15 минут. </p>
						<form class="form-2__inner">
							<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
							<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
							<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
							<input name='type' type='hidden' value='request' />
							<input name='cc' type='hidden' value='2' />
							<input name='sub' type='hidden' value='8' />
							<input name='mes' type='hidden' value='22' />
							<input name="urlMessage" type="hidden" value="">
							<input name="title_url_message" type="hidden" value="">
							<div class="input-wrapper form-2__input">
								<input type="text" name="name" class="input input-white form-2__input" placeholder="Имя" required>
								<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
							</div>

							<div class="input-wrapper form-2__input">
								<input type="tel" name="phone" class="input input-white form-2__input" placeholder="Номер телефона" required>
								<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
							</div>

							<button type="submit" class="secondary-btn form-2__btn"><span>Перезвонить мне</span></button>
							<p class="politic politic-white form-2__politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?/*
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_6_1.php', array(), array('MODE' => 'html'));*/
	?>

	<section class="article section-offset">
		<div class="container">

			<div class="article__block">
				<div class="article__form">
					<p class="article__form_title">Уважаемые читатели, не занимайтесь самолечением</p>
					<div class="article__form_text">
						<p>Обратитесь за помощью к профессиональным врачам. Это важно для сохранения и укрепления вашего здоровья. Звоните:</p>
						<a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>" class="article__form_phone phone">
							<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 3.58333C1 10.717 6.78299 16.5 13.9167 16.5C14.2385 16.5 14.5576 16.4882 14.8736 16.4651C15.2362 16.4385 15.4174 16.4253 15.5825 16.3303C15.7192 16.2516 15.8487 16.1121 15.9172 15.97C16 15.7985 16 15.5984 16 15.1983V12.8506C16 12.5141 16 12.3458 15.9446 12.2017C15.8958 12.0743 15.8162 11.9608 15.7132 11.8713C15.5967 11.77 15.4385 11.7125 15.1223 11.5975L12.45 10.6258C12.0821 10.492 11.8981 10.4251 11.7236 10.4364C11.5697 10.4464 11.4216 10.499 11.2957 10.5882C11.1531 10.6892 11.0524 10.8571 10.851 11.1928L10.1667 12.3333C7.95842 11.3333 6.16825 9.54075 5.16667 7.33333L6.30719 6.64902C6.64288 6.44761 6.81072 6.3469 6.91183 6.20422C7.001 6.0784 7.05358 5.93031 7.06358 5.77642C7.07492 5.60189 7.008 5.41794 6.87425 5.05004L5.90249 2.37767C5.7875 2.06147 5.73001 1.90336 5.62868 1.78675C5.53918 1.68374 5.42574 1.60429 5.29835 1.55538C5.15413 1.5 4.9859 1.5 4.64943 1.5H2.30167C1.90157 1.5 1.70151 1.5 1.52998 1.58271C1.38792 1.65122 1.24845 1.78084 1.16975 1.91752C1.07473 2.08256 1.06146 2.26385 1.03491 2.62644C1.01177 2.94238 1 3.26148 1 3.58333Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<?= $arData['UF_PHONE']; ?>
						</a>
					</div>
				</div>
			</div>

			<div class="article__block">
				<? if ($properties['PHOTO']['VALUE']) : ?>
					<? $i++ ?>
					<div class="article__img">
						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp">
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['PHOTO']['DESCRIPTION'][$i]; ?>" loading="lazy">
						</picture>
						<p style="font-size: 14px;line-height: 130%;color: var(--chernyy---60);margin: 0;"><?= $properties['PHOTO']['DESCRIPTION'][$i]; ?></p>
					</div>
				<? endif; ?>


				<? if ($properties['TEXT_3']['~VALUE']) : ?>
					<?= $properties['TEXT_3']['~VALUE']['TEXT']; ?>
				<? endif; ?>

			</div>

			<? if ($properties["LITERATURE"]["VALUE"]) : ?>
				<div class="article__block">
					<div class="article__literature">
						<p class="article__literature_title">Используемая литература</p>
						<ol>
							<? foreach ($properties["LITERATURE"]["VALUE"] as $literature) :
							?>
								<li>
									<?= $literature ?>
								</li>
							<? endforeach ?>
						</ol>
					</div>
				</div>
			<? endif; ?>

			<div class="article__block">
				<div class="article__bottom">
					<div class="article__bottom_item">
						<p>Оцените статью:</p>
						<div class="full-stars">
							<div class="rating-group">
								<input name="fst" value="0" type="radio" disabled checked />

								<label for="fst-1">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#37384C" />
									</svg>

								</label>
								<input name="fst" id="fst-1" value="1" type="radio" />

								<label for="fst-2">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#37384C" />
									</svg>
								</label>
								<input name="fst" id="fst-2" value="2" type="radio" />

								<label for="fst-3">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#37384C" />
									</svg>
								</label>
								<input name="fst" id="fst-3" value="3" type="radio" />

								<label for="fst-4">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#37384C" />
									</svg>
								</label>
								<input name="fst" id="fst-4" value="4" type="radio" />

								<label for="fst-5">
									<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#37384C" />
									</svg>
								</label>
								<input name="fst" id="fst-5" value="5" type="radio" />
							</div>
						</div>
					</div>
					<div class="article__bottom_item">
						<p>Поделитесь статьей:</p>
						<div class="article__bottom_links">
							<a href="javascript:void(0);" class="article__bottom_link" data-path="popup-copy" title="Скопировать ссылку">
								<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_2028_26665)">
										<path d="M10.5809 0.0385733C10.1297 0.135253 9.69905 0.325683 9.35042 0.586425C9.05159 0.812011 5.02913 4.85205 4.87679 5.08057C4.48128 5.67236 4.32015 6.25244 4.34651 6.97607C4.37581 7.76416 4.63655 8.38525 5.17269 8.95068C5.70882 9.52197 6.43245 9.86768 7.19417 9.91748L7.46077 9.93506L8.2723 9.11768C8.96956 8.41748 9.08382 8.28857 9.1014 8.19189C9.15999 7.88135 8.96663 7.63818 8.66194 7.63818C8.51546 7.63818 8.44808 7.67041 8.26644 7.82275C7.79769 8.20947 7.19417 8.24463 6.69319 7.91064C6.30355 7.64697 6.10726 7.24561 6.13362 6.75049C6.14534 6.53955 6.16292 6.47217 6.25667 6.27588C6.36507 6.05322 6.42659 5.9917 8.36605 4.05225C9.46175 2.95361 10.4198 2.01904 10.4901 1.9751C10.6981 1.84619 10.9237 1.78174 11.1698 1.77881C11.4481 1.77588 11.6619 1.8374 11.8875 1.98389C12.4383 2.34131 12.6346 3.03271 12.3534 3.62451C12.2596 3.82373 12.1922 3.90576 11.6825 4.41553L11.117 4.98682L11.4276 5.29736C11.7323 5.59912 11.9959 5.95068 12.1366 6.24365C12.1746 6.32275 12.2186 6.38428 12.2362 6.38428C12.286 6.38428 13.5018 5.14209 13.66 4.93115C14.5828 3.69482 14.4451 1.93408 13.3407 0.855956C12.9686 0.492675 12.4852 0.220214 11.9637 0.0795889C11.6737 0.000487328 10.8739 -0.0229502 10.5809 0.0385733Z" fill="#fff" />
										<path d="M7.8252 5.78967C7.39453 6.22034 7.02832 6.60413 7.01074 6.63928C6.96387 6.7301 6.96973 6.95862 7.02246 7.05823C7.11328 7.23108 7.30957 7.31897 7.52051 7.28088C7.57617 7.26917 7.69043 7.20471 7.77539 7.13733C8.10645 6.87366 8.31152 6.79163 8.66309 6.79163C9.16406 6.79163 9.60059 7.06116 9.82031 7.5094C10.0078 7.88733 10.0078 8.27698 9.81738 8.66663C9.73242 8.84241 9.55371 9.03284 7.68457 10.899C6.5625 12.0211 5.58691 12.9762 5.5166 13.0201C5.30859 13.149 5.08301 13.2135 4.83691 13.2164C4.55859 13.2194 4.34473 13.1578 4.11914 13.0114C3.90234 12.8707 3.75879 12.7008 3.63281 12.4313C3.54199 12.2438 3.53613 12.2086 3.53613 11.9215C3.53613 11.6256 3.53906 11.6051 3.64746 11.3824C3.75 11.1686 3.80859 11.0983 4.35938 10.5416L4.96289 9.93518L4.67285 9.64807C4.36523 9.34045 4.18945 9.11194 3.98145 8.74866L3.85547 8.52893L3.1377 9.23499C2.66309 9.70374 2.37598 10.0143 2.28516 10.149C1.91016 10.7174 1.73438 11.2858 1.73438 11.9215C1.73438 13.3336 2.67188 14.5465 4.04297 14.9156C4.33301 14.9918 5.00977 15.0211 5.3291 14.9684C5.80078 14.8922 6.28125 14.6901 6.65625 14.4088C6.78223 14.3151 7.79297 13.3219 9 12.109C10.9307 10.1696 11.1387 9.95276 11.2529 9.74768C11.7568 8.84241 11.8799 7.92542 11.6045 7.1051C11.4346 6.59827 11.1973 6.23499 10.7637 5.82483C10.2422 5.32971 9.60645 5.05432 8.91211 5.01917L8.60449 5.00159L7.8252 5.78967Z" fill="#fff" />
									</g>
									<defs>
										<clipPath id="clip0_2028_26665">
											<rect width="14.537" height="14.9914" fill="#fff" transform="translate(0.734375 0.00390625)" />
										</clipPath>
									</defs>
								</svg>
							</a>
							<a href="https://t.me/share/url?url=<?= urlencode($url) ?>" class="article__bottom_link" target="_blank" title="Поделиться в Телеграм">
								<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.2212 0.605939C14.2212 0.605939 15.6088 0.0865112 15.4932 1.34798C15.4546 1.86742 15.1077 3.68541 14.8379 5.65184L13.9128 11.4769C13.9128 11.4769 13.8358 12.3302 13.1419 12.4786C12.4481 12.627 11.4074 11.9592 11.2147 11.8108C11.0605 11.6995 8.32386 10.0299 7.36022 9.21364C7.0904 8.99102 6.78204 8.54579 7.39875 8.02636L11.446 4.31617C11.9085 3.87094 12.371 2.83208 10.4438 4.09355L5.04754 7.61826C5.04754 7.61826 4.43082 7.98926 3.2745 7.65536L0.769079 6.91331C0.769079 6.91331 -0.155997 6.35678 1.42434 5.80022C5.27882 4.05642 10.0198 2.27552 14.2212 0.605939Z" fill="#fff" />
								</svg>
							</a>
							<a href="http://vk.com/share.php?url=<?= urlencode($f_h1) ?>&noparse=true" class="article__bottom_link" target="_blank"
								title="Поделиться во Вконтакте">
								<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.6832 0.618734C13.5257 1.15367 13.3133 1.61929 13.0473 2.04208L13.0583 2.02317C12.797 2.49363 12.4848 3.03717 12.1219 3.65381C11.8108 4.14065 11.6461 4.39268 11.6278 4.4099C11.5473 4.5189 11.4912 4.65248 11.472 4.79929L11.4714 4.8037C11.4872 4.93727 11.5443 5.05384 11.6278 5.14079L11.8611 5.4218C13.1097 6.80755 13.8119 7.76274 13.9679 8.28738C13.9883 8.34535 14 8.41214 14 8.48208C14 8.60431 13.9638 8.7171 13.9026 8.80972L13.9037 8.80783C13.8011 8.92187 13.6575 8.99244 13.4988 8.99244C13.4813 8.99244 13.4632 8.99181 13.4463 8.98992H13.4487H11.9137C11.9131 8.98992 11.9119 8.98992 11.9107 8.98992C11.7141 8.98992 11.5333 8.91557 11.3915 8.79208L11.3932 8.79333C11.1867 8.60998 11.0029 8.41151 10.8384 8.19602L10.8331 8.18846C10.5644 7.8604 10.3259 7.58422 10.1179 7.35991C9.42474 6.64835 8.91326 6.29256 8.58343 6.29256C8.57118 6.2913 8.55718 6.29067 8.54259 6.29067C8.44632 6.29067 8.35648 6.32281 8.28238 6.37762L8.28413 6.37636C8.22345 6.45827 8.1867 6.56413 8.1867 6.67817C8.1867 6.70085 8.18786 6.72228 8.19078 6.74433V6.74181C8.17503 6.93965 8.16569 7.16963 8.16569 7.40213C8.16569 7.47711 8.16686 7.55146 8.16861 7.6258V7.61509V8.34535C8.17445 8.37496 8.17795 8.40899 8.17795 8.44364C8.17795 8.59612 8.11377 8.73222 8.01342 8.82232L8.01284 8.82295C7.78705 8.93447 7.52334 9 7.24504 9C7.18553 9 7.12719 8.99685 7.06943 8.99118L7.07701 8.99181C6.15869 8.97291 5.30688 8.68244 4.58285 8.19287L4.60327 8.20547C3.7217 7.62707 2.99125 6.87412 2.43466 5.98446L2.4189 5.95799C1.89032 5.20064 1.39732 4.345 0.977246 3.44273L0.936406 3.3457C0.690782 2.84038 0.436406 2.21913 0.217036 1.58023L0.18203 1.46367C0.0927655 1.17635 0.0280047 0.842411 0.00116686 0.4965L0 0.480748C0 0.162349 0.173473 0.00315045 0.52042 0.00315045H2.05484C2.06884 0.0018903 2.08518 0.00126006 2.1021 0.00126006C2.24679 0.00126006 2.3804 0.0548166 2.486 0.144917L2.48483 0.143657C2.60152 0.281644 2.68786 0.451134 2.73046 0.640157L2.73221 0.647718C3.01459 1.50903 3.31389 2.23236 3.65811 2.92544L3.61902 2.83912C3.90023 3.45029 4.2112 3.97641 4.56593 4.46219L4.55251 4.44266C4.86367 4.85515 5.10638 5.0614 5.28063 5.0614C5.28588 5.06203 5.2923 5.06203 5.2993 5.06203C5.38565 5.06203 5.46091 5.01162 5.50175 4.93601L5.50233 4.93475C5.54551 4.81504 5.57059 4.67579 5.57059 4.53087C5.57059 4.5 5.56943 4.46913 5.56709 4.43888V4.44266V1.9986C5.55484 1.71066 5.4895 1.44161 5.3804 1.20029L5.38506 1.21227C5.31272 1.04593 5.22579 0.902268 5.12252 0.774363L5.12427 0.776883C5.02859 0.673551 4.96324 0.538084 4.94282 0.386866L4.94224 0.383086C4.94224 0.275973 4.98775 0.179572 5.05893 0.116564L5.05951 0.115934C5.13011 0.0459955 5.22462 0.00378048 5.32789 0.00378048H5.33256H7.75146C7.76429 0.00189025 7.77888 0.00126006 7.79405 0.00126006C7.90782 0.00126006 8.00992 0.0567069 8.0776 0.143657L8.07818 0.144287C8.13827 0.262742 8.17386 0.404509 8.17386 0.554467C8.17386 0.578409 8.1727 0.601722 8.17095 0.625035V0.621885V3.88127C8.16978 3.89639 8.1692 3.91403 8.1692 3.93167C8.1692 4.04761 8.19895 4.15661 8.25029 4.24923L8.24913 4.24671C8.29172 4.31476 8.36289 4.35886 8.44341 4.35886C8.54609 4.3513 8.64002 4.31476 8.71879 4.25679L8.71704 4.25805C8.87573 4.14023 9.01225 4.00602 9.13069 3.85417L9.13302 3.85102C9.48716 3.41879 9.81389 2.94119 10.0986 2.43335L10.1214 2.38925C10.3221 2.0301 10.5391 1.58779 10.7357 1.13351L10.7719 1.04088L11.0321 0.478857C11.1225 0.197844 11.3652 0 11.6505 0C11.6616 0 11.6727 -4.56973e-08 11.6838 0.00063003H11.682H13.217C13.6317 0.00063003 13.7872 0.206665 13.6838 0.618734H13.6832Z" fill="#fff" />
								</svg>
							</a>
							<a href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&service=odnoklassniki&st.shareUrl=<?= urlencode($url) ?>&st.title=<?= urlencode($f_h1) ?>" class="article__bottom_link" target="_blank" title="Поделиться в Одноклассниках">
								<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.00054 7.59262C7.09187 7.59262 8.78686 5.89304 8.78686 3.79613C8.78683 1.69922 7.09184 0 5.00054 0C2.90848 0 1.21279 1.69922 1.21279 3.79613C1.21276 5.89304 2.90848 7.59262 5.00054 7.59262ZM5.00054 1.92845C6.02921 1.92845 6.86316 2.76451 6.86316 3.7961C6.86316 4.82772 6.02921 5.66376 5.00054 5.66376C3.97079 5.66376 3.13716 4.82772 3.13716 3.7961C3.13716 2.76451 3.97076 1.92845 5.00054 1.92845ZM9.36507 8.05588C9.15176 7.62523 8.55961 7.26708 7.77236 7.88853C6.70826 8.72862 5.00051 8.72862 5.00051 8.72862C5.00051 8.72862 3.29165 8.72862 2.22755 7.88853C1.44069 7.26708 0.848919 7.62523 0.635227 8.05588C0.261896 8.80626 0.683072 9.16917 1.63359 9.78076C2.44529 10.3034 3.56089 10.4985 4.28091 10.5714L3.67962 11.1742C2.83288 12.0227 2.01571 12.8426 1.44839 13.4114C1.10902 13.7512 1.10902 14.3024 1.44839 14.6422L1.55028 14.7451C1.88965 15.085 2.43908 15.085 2.77841 14.7451L5.00965 12.5079C5.85713 13.3568 6.6743 14.1764 7.24159 14.7451C7.58095 15.085 8.13038 15.085 8.46972 14.7451L8.57161 14.6422C8.91098 14.302 8.91098 13.7512 8.57161 13.411L6.34038 11.1742L5.73766 10.5696C6.45838 10.4949 7.56157 10.2989 8.36668 9.78079C9.31722 9.16914 9.7377 8.80623 9.36507 8.05588Z" fill="#fff" />
								</svg>
							</a>
						</div>
					</div>
				</div>
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
			"WHERE" => "SERVICES"
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
			"COMPONENT_TEMPLATE" => "doctor_page",
			"SEF_FOLDER" => "/doctors/",
			"SEF_URL_TEMPLATES" => array(
				"news" => "",
				"section" => "",
				"detail" => "#ELEMENT_CODE#/",
			),
			"WHERE" => "SERVICES"
		),
		false
	); ?>

	<section class="form-2 section-offset">
		<div class="container">
			<picture class="form-2__bg">
				<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-bg.webp" type="image/webp" />
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-bg.png" alt="" loading="lazy" />
			</picture>
			<div class="form-2__row">
				<picture class="form-2__img">
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.webp" type="image/webp" />
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.png" alt="" loading="lazy" />
				</picture>

				<div class="form-2__wrapper">
					<p class="form-2__title">Оставьте заявку и получите бесплатную консультацию</p>
					<div class="form-2__subtitle">
						<p>Все звонки анонимы. Позвоните сейчас и получите бесплатную анонимную консультацию</p>
						<a href="tel:80000000000" class="form-2__phone-btn phone-btn-white">
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 3.08333C1 10.217 6.78299 16 13.9167 16C14.2385 16 14.5576 15.9882 14.8736 15.9651C15.2362 15.9385 15.4174 15.9253 15.5825 15.8303C15.7192 15.7516 15.8487 15.6121 15.9172 15.47C16 15.2985 16 15.0984 16 14.6983V12.3506C16 12.0141 16 11.8458 15.9446 11.7017C15.8958 11.5743 15.8162 11.4608 15.7132 11.3713C15.5967 11.27 15.4385 11.2125 15.1223 11.0975L12.45 10.1258C12.0821 9.992 11.8981 9.92508 11.7236 9.93642C11.5697 9.94642 11.4216 9.999 11.2957 10.0882C11.1531 10.1892 11.0524 10.3571 10.851 10.6928L10.1667 11.8333C7.95842 10.8333 6.16825 9.04075 5.16667 6.83333L6.30719 6.14902C6.64288 5.94761 6.81072 5.8469 6.91183 5.70422C7.001 5.5784 7.05358 5.43031 7.06358 5.27642C7.07492 5.10189 7.008 4.91794 6.87425 4.55004L5.90249 1.87767C5.7875 1.56147 5.73001 1.40336 5.62868 1.28675C5.53918 1.18374 5.42574 1.10429 5.29835 1.05538C5.15413 1 4.9859 1 4.64943 1H2.30167C1.90157 1 1.70151 1 1.52998 1.08271C1.38792 1.15122 1.24845 1.28084 1.16975 1.41752C1.07473 1.58256 1.06146 1.76385 1.03491 2.12644C1.01177 2.44238 1 2.76148 1 3.08333Z" fill="#37384C" stroke="#37384C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<span>8 (888) 999-99-99</span>
						</a>
					</div>

					<div class="form-2__content">
						<p class="form-2__text">Или заполните ваши данные, и наши специалисты перезвонят вам в течение 15 минут. </p>
						<form class="form-2__inner">
							<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
							<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
							<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
							<input name='type' type='hidden' value='request' />
							<input name='cc' type='hidden' value='2' />
							<input name='sub' type='hidden' value='8' />
							<input name='mes' type='hidden' value='22' />
							<input name="urlMessage" type="hidden" value="">
							<input name="title_url_message" type="hidden" value="">
							<div class="input-wrapper form-2__input">
								<input type="text" name="name" class="input input-white form-2__input" placeholder="Имя" required>
								<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
							</div>

							<div class="input-wrapper form-2__input">
								<input type="tel" name="phone" class="input input-white form-2__input" placeholder="Номер телефона" required>
								<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
							</div>

							<button type="submit" class="secondary-btn form-2__btn"><span>Перезвонить мне</span></button>
							<p class="politic politic-white form-2__politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

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
			"COMPONENT_TEMPLATE" => "licenses_list",
			"WHERE" => "SERVICES"
		),
		false
	); ?>

	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/pages/contacts.php', array("title" => true),  array('SHOW_BORDER' => false));
	?>

<? endwhile ?>