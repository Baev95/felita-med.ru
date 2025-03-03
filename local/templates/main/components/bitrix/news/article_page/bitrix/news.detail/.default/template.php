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

$dateCreate = FormatDate("d.m.Y", MakeTimeStamp($arResult["DATE_CREATE"]));
$dateModify = FormatDate("d.m.Y", MakeTimeStamp($arResult["TIMESTAMP_X"]));

while ($arData = $rsData->Fetch()): ?>

	<section class=" intro-article section-offset">
		<picture class="bg">
			<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/intro-article/intro-article-bg.webp" type="image/webp" />
			<img src="<?= SITE_TEMPLATE_PATH ?>/images/intro-article/intro-article-bg.jpg" alt="" />
		</picture>
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="/">Главная</a></li>
				<li><a href="">Статьи</a></li>
				<li><?= $arResult['NAME'] ?></li>
			</ul>

			<div class="intro-article__row">
				<div class="intro-article__main">
					<div class="intro-article__main_top">
						<h1 class="title-h1"><?= $arResult['NAME'] ?></h1>
						<p class="intro-article__subtitle"><?= $arResult['PREVIEW_TEXT'] ?><?= $arResult['PREVIEW_TEXT'] ?></p>
					</div>
				</div>

				<div class="intro-article__right">
					<div class="intro-article__marks">
						<p>Просмотров: <span><?= 300 + $arResult['SHOW_COUNTER'] ?></span></p>
						<p>Время чтения: <span><span class="time_read"></span></span></p>
						<p>Дата публикации: <span><?= $dateCreate ?></span></p>
						<p>Дата обновления: <span><?= $dateModify ?></span></p>
					</div>

					<div class="intro-article__form">
						<div class="intro-article__form_text">
							<p class="intro-article__form_title">Нет времени читать?</p>
							<p class="intro-article__form_subtitle">Бесплатно проконсультируйтесь с врачом по телефону:</p>
						</div>
						<a href="tel:80000000000" class="intro-article__form_phone phone">
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 3.44444C1 10.1025 6.39746 15.5 13.0556 15.5C13.3559 15.5 13.6537 15.489 13.9487 15.4674C14.2871 15.4426 14.4563 15.4302 14.6103 15.3416C14.7379 15.2681 14.8588 15.1379 14.9228 15.0053C15 14.8453 15 14.6585 15 14.2851V12.0939C15 11.7798 15 11.6228 14.9483 11.4882C14.9027 11.3693 14.8285 11.2634 14.7324 11.1799C14.6236 11.0853 14.4759 11.0317 14.1808 10.9243L11.6867 10.0174C11.3433 9.89253 11.1715 9.83008 11.0087 9.84065C10.865 9.84999 10.7268 9.89907 10.6094 9.98229C10.4762 10.0766 10.3823 10.2333 10.1943 10.5466L9.55556 11.6111C7.49452 10.6777 5.8237 9.0047 4.88889 6.94444L5.95338 6.30575C6.26668 6.11777 6.42334 6.02377 6.51771 5.8906C6.60093 5.77317 6.65001 5.63495 6.65934 5.49132C6.66992 5.32843 6.60747 5.15675 6.48263 4.81337L5.57566 2.31916C5.46833 2.02404 5.41467 1.87647 5.3201 1.76763C5.23656 1.67149 5.13069 1.59734 5.01179 1.55168C4.87719 1.5 4.72017 1.5 4.40614 1.5H2.2149C1.84146 1.5 1.65474 1.5 1.49465 1.57719C1.36206 1.64114 1.23189 1.76212 1.15843 1.88969C1.06975 2.04372 1.05736 2.21293 1.03258 2.55135C1.01099 2.84622 1 3.14405 1 3.44444Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<?= $arData["UF_PHONE"] ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="navigation navigation-4 section-offset">
		<div class="container">
			<div class="navigation__inner-4">
				<div class="navigation__wrap-4">
					<h2 class="navigation__title-4 title-h2">Содержание страницы</h2>
					<ul class="navigation__list navigation__list-4"></ul>
				</div>
				<div class="dock-check__inner-4">

					<?
					$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_REVIEW']['VALUE']], false, false, []);
					while ($row = $res->GetNextElement()) {
						$ar_fields = $row->GetFields();
						$ar_properties = $row->GetProperties();
						$name = $ar_fields['NAME'];
						$link = $ar_fields["DETAIL_PAGE_URL"];
						$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
						$post = $ar_properties['POST']['VALUE'];
						$work_experience = preg_replace('/[^0-9]/', '', $ar_properties['WORK_EXPERIENCE']['VALUE']);
						$work_experience = (int) $work_experience;
					}
					?>


					<a href="<?= $link ?>" class="doctor-reviewer-4 doc-check-4">
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
								<p class="doctor-reviewer__stage-4 doc-check__stage-4"><?= $work_experience ?> <?= $declension->get($work_experience) ?></span></p>
							</div>
						</div>
					</a>







					<?
					$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_WROTE']['VALUE']], false, false, []);
					while ($row = $res->GetNextElement()) {
						$ar_fields = $row->GetFields();
						$ar_properties = $row->GetProperties();
						$name = $ar_fields['NAME'];
						$link = $ar_fields["DETAIL_PAGE_URL"];
						$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
						$post = $ar_properties['POST']['VALUE'];
						$work_experience = preg_replace('/[^0-9]/', '', $ar_properties['WORK_EXPERIENCE']['VALUE']);
						$work_experience = (int) $work_experience;
					}
					?>


					<a href="<?= $link ?>" class="doctor-reviewer-4 doc-check-4">
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
								<p class="doctor-reviewer__stage-4 doc-check__stage-4"><?= $work_experience ?> <?= $declension->get($work_experience) ?></span></p>
							</div>
						</div>
					</a>



				</div>
			</div>
		</div>
	</section><!-- article-2 -->





	<section class="article section-offset">
		<div class="container">

			<div class="article__block">
				<div class="article__img">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/text-block/text-block-1.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/text-block/text-block-1.jpg" alt="" loading="lazy" />
					</picture>
				</div>

				<?= $properties['TEXT_1']['~VALUE']['TEXT']; ?>
				<?
				if ($properties['DOCTOR_COMMENT_TEXT']['~VALUE']) : ?>

					<blockquote class="blockquote-1">
						<p>
							<?= $properties['DOCTOR_COMMENT_TEXT']['~VALUE']['TEXT']; ?>
						</p>


						<?
						$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $properties['DOCTOR_COMMENT']['VALUE']], false, false, []);
						while ($row = $res->GetNextElement()) {
							$ar_fields = $row->GetFields();
							$ar_properties = $row->GetProperties();
							$name = $ar_fields['NAME'];
							$link = $ar_fields["DETAIL_PAGE_URL"];
							$photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
							$post = $ar_properties['POST']['VALUE'];
							$work_experience = preg_replace('/[^0-9]/', '', $ar_properties['WORK_EXPERIENCE']['VALUE']);
							$work_experience = (int) $work_experience;
						}
						?>

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

				<? endif;
				?>


			</div>

			<div class="article__block">
				<?= $properties['TEXT_2']['~VALUE']['TEXT']; ?>
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
	</section><!-- article-2 -->


	<?
	//$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_6.php', array(), array('SHOW_BORDER' => false));
	?>









	<section class="article section-offset">
		<div class="container">

			<div class="article__block">
				<div class="article__form">
					<p class="article__form_title">Уважаемые читатели, не занимайтесь самолечением</p>
					<div class="article__form_text">
						<p>Обратитесь за помощью к профессиональным врачам. Это важно для сохранения и укрепления вашего здоровья. Звоните:</p>
						<a href="tel:80000000000" class="article__form_phone phone">
							<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 3.58333C1 10.717 6.78299 16.5 13.9167 16.5C14.2385 16.5 14.5576 16.4882 14.8736 16.4651C15.2362 16.4385 15.4174 16.4253 15.5825 16.3303C15.7192 16.2516 15.8487 16.1121 15.9172 15.97C16 15.7985 16 15.5984 16 15.1983V12.8506C16 12.5141 16 12.3458 15.9446 12.2017C15.8958 12.0743 15.8162 11.9608 15.7132 11.8713C15.5967 11.77 15.4385 11.7125 15.1223 11.5975L12.45 10.6258C12.0821 10.492 11.8981 10.4251 11.7236 10.4364C11.5697 10.4464 11.4216 10.499 11.2957 10.5882C11.1531 10.6892 11.0524 10.8571 10.851 11.1928L10.1667 12.3333C7.95842 11.3333 6.16825 9.54075 5.16667 7.33333L6.30719 6.64902C6.64288 6.44761 6.81072 6.3469 6.91183 6.20422C7.001 6.0784 7.05358 5.93031 7.06358 5.77642C7.07492 5.60189 7.008 5.41794 6.87425 5.05004L5.90249 2.37767C5.7875 2.06147 5.73001 1.90336 5.62868 1.78675C5.53918 1.68374 5.42574 1.60429 5.29835 1.55538C5.15413 1.5 4.9859 1.5 4.64943 1.5H2.30167C1.90157 1.5 1.70151 1.5 1.52998 1.58271C1.38792 1.65122 1.24845 1.78084 1.16975 1.91752C1.07473 2.08256 1.06146 2.26385 1.03491 2.62644C1.01177 2.94238 1 3.26148 1 3.58333Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							8 (888) 999-99-99
						</a>
					</div>
				</div>
			</div>

			<div class="article__block">
				<div class="article__img">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/text-block/text-block-2.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/text-block/text-block-2.jpg" alt="" loading="lazy" />
					</picture>
				</div>

				<?= $properties['TEXT_3']['~VALUE']['TEXT']; ?>
			</div>

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
							<a href="#" class="article__bottom_link">
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
							<a href="#" class="article__bottom_link">
								<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.2212 0.605939C14.2212 0.605939 15.6088 0.0865112 15.4932 1.34798C15.4546 1.86742 15.1077 3.68541 14.8379 5.65184L13.9128 11.4769C13.9128 11.4769 13.8358 12.3302 13.1419 12.4786C12.4481 12.627 11.4074 11.9592 11.2147 11.8108C11.0605 11.6995 8.32386 10.0299 7.36022 9.21364C7.0904 8.99102 6.78204 8.54579 7.39875 8.02636L11.446 4.31617C11.9085 3.87094 12.371 2.83208 10.4438 4.09355L5.04754 7.61826C5.04754 7.61826 4.43082 7.98926 3.2745 7.65536L0.769079 6.91331C0.769079 6.91331 -0.155997 6.35678 1.42434 5.80022C5.27882 4.05642 10.0198 2.27552 14.2212 0.605939Z" fill="#fff" />
								</svg>
							</a>
							<a href="#" class="article__bottom_link">
								<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.6832 0.618734C13.5257 1.15367 13.3133 1.61929 13.0473 2.04208L13.0583 2.02317C12.797 2.49363 12.4848 3.03717 12.1219 3.65381C11.8108 4.14065 11.6461 4.39268 11.6278 4.4099C11.5473 4.5189 11.4912 4.65248 11.472 4.79929L11.4714 4.8037C11.4872 4.93727 11.5443 5.05384 11.6278 5.14079L11.8611 5.4218C13.1097 6.80755 13.8119 7.76274 13.9679 8.28738C13.9883 8.34535 14 8.41214 14 8.48208C14 8.60431 13.9638 8.7171 13.9026 8.80972L13.9037 8.80783C13.8011 8.92187 13.6575 8.99244 13.4988 8.99244C13.4813 8.99244 13.4632 8.99181 13.4463 8.98992H13.4487H11.9137C11.9131 8.98992 11.9119 8.98992 11.9107 8.98992C11.7141 8.98992 11.5333 8.91557 11.3915 8.79208L11.3932 8.79333C11.1867 8.60998 11.0029 8.41151 10.8384 8.19602L10.8331 8.18846C10.5644 7.8604 10.3259 7.58422 10.1179 7.35991C9.42474 6.64835 8.91326 6.29256 8.58343 6.29256C8.57118 6.2913 8.55718 6.29067 8.54259 6.29067C8.44632 6.29067 8.35648 6.32281 8.28238 6.37762L8.28413 6.37636C8.22345 6.45827 8.1867 6.56413 8.1867 6.67817C8.1867 6.70085 8.18786 6.72228 8.19078 6.74433V6.74181C8.17503 6.93965 8.16569 7.16963 8.16569 7.40213C8.16569 7.47711 8.16686 7.55146 8.16861 7.6258V7.61509V8.34535C8.17445 8.37496 8.17795 8.40899 8.17795 8.44364C8.17795 8.59612 8.11377 8.73222 8.01342 8.82232L8.01284 8.82295C7.78705 8.93447 7.52334 9 7.24504 9C7.18553 9 7.12719 8.99685 7.06943 8.99118L7.07701 8.99181C6.15869 8.97291 5.30688 8.68244 4.58285 8.19287L4.60327 8.20547C3.7217 7.62707 2.99125 6.87412 2.43466 5.98446L2.4189 5.95799C1.89032 5.20064 1.39732 4.345 0.977246 3.44273L0.936406 3.3457C0.690782 2.84038 0.436406 2.21913 0.217036 1.58023L0.18203 1.46367C0.0927655 1.17635 0.0280047 0.842411 0.00116686 0.4965L0 0.480748C0 0.162349 0.173473 0.00315045 0.52042 0.00315045H2.05484C2.06884 0.0018903 2.08518 0.00126006 2.1021 0.00126006C2.24679 0.00126006 2.3804 0.0548166 2.486 0.144917L2.48483 0.143657C2.60152 0.281644 2.68786 0.451134 2.73046 0.640157L2.73221 0.647718C3.01459 1.50903 3.31389 2.23236 3.65811 2.92544L3.61902 2.83912C3.90023 3.45029 4.2112 3.97641 4.56593 4.46219L4.55251 4.44266C4.86367 4.85515 5.10638 5.0614 5.28063 5.0614C5.28588 5.06203 5.2923 5.06203 5.2993 5.06203C5.38565 5.06203 5.46091 5.01162 5.50175 4.93601L5.50233 4.93475C5.54551 4.81504 5.57059 4.67579 5.57059 4.53087C5.57059 4.5 5.56943 4.46913 5.56709 4.43888V4.44266V1.9986C5.55484 1.71066 5.4895 1.44161 5.3804 1.20029L5.38506 1.21227C5.31272 1.04593 5.22579 0.902268 5.12252 0.774363L5.12427 0.776883C5.02859 0.673551 4.96324 0.538084 4.94282 0.386866L4.94224 0.383086C4.94224 0.275973 4.98775 0.179572 5.05893 0.116564L5.05951 0.115934C5.13011 0.0459955 5.22462 0.00378048 5.32789 0.00378048H5.33256H7.75146C7.76429 0.00189025 7.77888 0.00126006 7.79405 0.00126006C7.90782 0.00126006 8.00992 0.0567069 8.0776 0.143657L8.07818 0.144287C8.13827 0.262742 8.17386 0.404509 8.17386 0.554467C8.17386 0.578409 8.1727 0.601722 8.17095 0.625035V0.621885V3.88127C8.16978 3.89639 8.1692 3.91403 8.1692 3.93167C8.1692 4.04761 8.19895 4.15661 8.25029 4.24923L8.24913 4.24671C8.29172 4.31476 8.36289 4.35886 8.44341 4.35886C8.54609 4.3513 8.64002 4.31476 8.71879 4.25679L8.71704 4.25805C8.87573 4.14023 9.01225 4.00602 9.13069 3.85417L9.13302 3.85102C9.48716 3.41879 9.81389 2.94119 10.0986 2.43335L10.1214 2.38925C10.3221 2.0301 10.5391 1.58779 10.7357 1.13351L10.7719 1.04088L11.0321 0.478857C11.1225 0.197844 11.3652 0 11.6505 0C11.6616 0 11.6727 -4.56973e-08 11.6838 0.00063003H11.682H13.217C13.6317 0.00063003 13.7872 0.206665 13.6838 0.618734H13.6832Z" fill="#fff" />
								</svg>
							</a>
							<a href="#" class="article__bottom_link">
								<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.00054 7.59262C7.09187 7.59262 8.78686 5.89304 8.78686 3.79613C8.78683 1.69922 7.09184 0 5.00054 0C2.90848 0 1.21279 1.69922 1.21279 3.79613C1.21276 5.89304 2.90848 7.59262 5.00054 7.59262ZM5.00054 1.92845C6.02921 1.92845 6.86316 2.76451 6.86316 3.7961C6.86316 4.82772 6.02921 5.66376 5.00054 5.66376C3.97079 5.66376 3.13716 4.82772 3.13716 3.7961C3.13716 2.76451 3.97076 1.92845 5.00054 1.92845ZM9.36507 8.05588C9.15176 7.62523 8.55961 7.26708 7.77236 7.88853C6.70826 8.72862 5.00051 8.72862 5.00051 8.72862C5.00051 8.72862 3.29165 8.72862 2.22755 7.88853C1.44069 7.26708 0.848919 7.62523 0.635227 8.05588C0.261896 8.80626 0.683072 9.16917 1.63359 9.78076C2.44529 10.3034 3.56089 10.4985 4.28091 10.5714L3.67962 11.1742C2.83288 12.0227 2.01571 12.8426 1.44839 13.4114C1.10902 13.7512 1.10902 14.3024 1.44839 14.6422L1.55028 14.7451C1.88965 15.085 2.43908 15.085 2.77841 14.7451L5.00965 12.5079C5.85713 13.3568 6.6743 14.1764 7.24159 14.7451C7.58095 15.085 8.13038 15.085 8.46972 14.7451L8.57161 14.6422C8.91098 14.302 8.91098 13.7512 8.57161 13.411L6.34038 11.1742L5.73766 10.5696C6.45838 10.4949 7.56157 10.2989 8.36668 9.78079C9.31722 9.16914 9.7377 8.80623 9.36507 8.05588Z" fill="#fff" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section><!-- articles-3 -->












	<!-- text-block-1 -->
	<section class="text-block section-offset text__content">
		<div class="container">
			<div class="text-block__grid">
				<div class="text-block__left">
					<?= $properties['TEXT_3']['~VALUE']['TEXT']; ?>
				</div>

				<div class="text-block__right">
					<div class="text-block__img">

						<picture>
							<source srcset="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" type="image/webp" />
							<img src="<?= CFile::GetPath($properties['PHOTO']['VALUE'][$i]); ?>" alt="<?= $properties['DESCRIPTION']['VALUE'][$i]; ?>" loading="lazy" />
						</picture>
						<?= $properties['PHOTO']['~DESCRIPTION'][$i]; ?>
					</div>

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
					<p class="text-block__literature_title title-h4">Используемая литература</p>
					<div class="text-block__literature">
						<ol>

							<? foreach ($properties["LITERATURE"]["VALUE"] as $literature) :
							?>
								<li>
									<?= $literature ?>
								</li>
							<? endforeach ?>
						</ol>


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




























	<section class="articles section-offset">
		<div class="container">
			<div class="section__flex">
				<div class="section__top articles__top">
					<h2 class="title-h2">Статьи нашей клиники</h2>
					<a href="#" class="tertiary-btn articles__btn section__btn">Все статьи</a>
				</div>

				<div class="section__inner articles__inner">
					<div class="articles__cards">
						<div class="articles__swiper swiper articlesSwiper">
							<div class="swiper-wrapper">

								<div class="articles__swiper-slide swiper-slide">
									<div class="articles__card">
										<div class="articles__card_picture">
											<picture>
												<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.webp" type="image/webp">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.jpg" loading="lazy">
											</picture>
										</div>
										<div class="articles__card_labels">
											<p>Алкоголизм</p>
										</div>
										<div class="articles__card_inner">
											<div class="articles__card_text">
												<p class="articles__card_title">Лечение алкоголизма по методу Довженко</p>
												<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
											</div>
											<div class="articles__card_bottom">
												<a href="#" class="articles__card_more btn-arrow">Читать статью</a>
												<p class="articles__card_date">12 мая 2024</p>
											</div>
										</div>
									</div>
								</div>

								<div class="articles__swiper-slide swiper-slide">
									<div class="articles__card">
										<div class="articles__card_picture">
											<picture>
												<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.webp" type="image/webp">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.jpg" loading="lazy">
											</picture>
										</div>
										<div class="articles__card_labels">
											<p>Алкоголизм</p>
										</div>
										<div class="articles__card_inner">
											<div class="articles__card_text">
												<p class="articles__card_title">Лечение алкоголизма по методу Довженко</p>
												<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
											</div>
											<div class="articles__card_bottom">
												<a href="#" class="articles__card_more btn-arrow">Читать статью</a>
												<p class="articles__card_date">12 мая 2024</p>
											</div>
										</div>
									</div>
								</div>

								<div class="articles__swiper-slide swiper-slide">
									<div class="articles__card">
										<div class="articles__card_picture">
											<picture>
												<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.webp" type="image/webp">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.jpg" loading="lazy">
											</picture>
										</div>
										<div class="articles__card_labels">
											<p>Алкоголизм</p>
										</div>
										<div class="articles__card_inner">
											<div class="articles__card_text">
												<p class="articles__card_title">Лечение алкоголизма по методу Довженко</p>
												<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
											</div>
											<div class="articles__card_bottom">
												<a href="#" class="articles__card_more btn-arrow">Читать статью</a>
												<p class="articles__card_date">12 мая 2024</p>
											</div>
										</div>
									</div>
								</div>

								<div class="articles__swiper-slide swiper-slide">
									<div class="articles__card">
										<div class="articles__card_picture">
											<picture>
												<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.webp" type="image/webp">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.jpg" loading="lazy">
											</picture>
										</div>
										<div class="articles__card_labels">
											<p>Алкоголизм</p>
										</div>
										<div class="articles__card_inner">
											<div class="articles__card_text">
												<p class="articles__card_title">Лечение алкоголизма по методу Довженко</p>
												<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
											</div>
											<div class="articles__card_bottom">
												<a href="#" class="articles__card_more btn-arrow">Читать статью</a>
												<p class="articles__card_date">12 мая 2024</p>
											</div>
										</div>
									</div>
								</div>

								<div class="articles__swiper-slide swiper-slide">
									<div class="articles__card">
										<div class="articles__card_picture">
											<picture>
												<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.webp" type="image/webp">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/articles/articles-3/article-1.jpg" loading="lazy">
											</picture>
										</div>
										<div class="articles__card_labels">
											<p>Алкоголизм</p>
										</div>
										<div class="articles__card_inner">
											<div class="articles__card_text">
												<p class="articles__card_title">Лечение алкоголизма по методу Довженко</p>
												<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких</p>
											</div>
											<div class="articles__card_bottom">
												<a href="#" class="articles__card_more btn-arrow">Читать статью</a>
												<p class="articles__card_date">12 мая 2024</p>
											</div>
										</div>
									</div>
								</div>

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


	<section class="form-2 form-white" style="background-color: #fff;">
		<div class="container">
			<div class="form-2__row">
				<picture class="form-2__img">
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.webp" type="image/webp" />
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.png" alt="" loading="lazy" />
				</picture>

				<div class="form-2__wrapper">
					<p class="form-2__title">Оставьте заявку и получите бесплатную консультацию</p>
					<div class="form-2__subtitle">
						<p>Все звонки анонимы. Позвоните сейчас и получите бесплатную анонимную консультацию</p>
						<a href="tel:80000000000" class="form-2__phone-btn phone-btn">
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 3.08333C1 10.217 6.78299 16 13.9167 16C14.2385 16 14.5576 15.9882 14.8736 15.9651C15.2362 15.9385 15.4174 15.9253 15.5825 15.8303C15.7192 15.7516 15.8487 15.6121 15.9172 15.47C16 15.2985 16 15.0984 16 14.6983V12.3506C16 12.0141 16 11.8458 15.9446 11.7017C15.8958 11.5743 15.8162 11.4608 15.7132 11.3713C15.5967 11.27 15.4385 11.2125 15.1223 11.0975L12.45 10.1258C12.0821 9.992 11.8981 9.92508 11.7236 9.93642C11.5697 9.94642 11.4216 9.999 11.2957 10.0882C11.1531 10.1892 11.0524 10.3571 10.851 10.6928L10.1667 11.8333C7.95842 10.8333 6.16825 9.04075 5.16667 6.83333L6.30719 6.14902C6.64288 5.94761 6.81072 5.8469 6.91183 5.70422C7.001 5.5784 7.05358 5.43031 7.06358 5.27642C7.07492 5.10189 7.008 4.91794 6.87425 4.55004L5.90249 1.87767C5.7875 1.56147 5.73001 1.40336 5.62868 1.28675C5.53918 1.18374 5.42574 1.10429 5.29835 1.05538C5.15413 1 4.9859 1 4.64943 1H2.30167C1.90157 1 1.70151 1 1.52998 1.08271C1.38792 1.15122 1.24845 1.28084 1.16975 1.41752C1.07473 1.58256 1.06146 1.76385 1.03491 2.12644C1.01177 2.44238 1 2.76148 1 3.08333Z" fill="#625B5A" stroke="#625B5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
								<input type="text" name="name" class="input form-2__input" placeholder="Имя" required>
								<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
							</div>

							<div class="input-wrapper form-2__input">
								<input type="tel" name="phone" class="input form-2__input" placeholder="Номер телефона" required>
								<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
							</div>

							<button type="submit" class="primary-btn form-2__btn"><span>Перезвонить мне</span></button>
							<p class="politic form-2__politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<? endwhile ?>