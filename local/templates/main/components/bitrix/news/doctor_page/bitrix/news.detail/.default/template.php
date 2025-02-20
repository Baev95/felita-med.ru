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
?>

<!-- doctor -->
<section class="doctor section-offset">
	<div class="container">
		<div class="doctor__grid">
			<div class="doctor__left">
				<div class="doctor__photo">
					<picture class="doctor__img">
						<source srcset="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" type="image/webp">
						<img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" loading="lazy" alt="<?= $arResult["NAME"] ?>">
					</picture>
					<? if ($arResult['PROPERTIES']['STARS']['VALUE']) : ?>
						<div class="doctor__rating">
							<div class="doctor__rating_estimation">
								<p><?= $arResult['PROPERTIES']['STARS']['VALUE'] ?></p>
								<div class="doctor__rating_stars">
									<?
									for ($i = 0; $i < 5; $i++) :
										$star = $i < $arResult['PROPERTIES']['STARS']['VALUE']  ? 'reviews__card_star-active' : 'reviews__card_star'; ?>
										<span class="<?= $star ?>">
											<svg width="16" height="15" viewBox=0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M7.04894 0.92705C7.3483 0.00573921 8.6517 0.00573969 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58778 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z" stroke="#FFDD99" fill="#FFDD99" />
											</svg>
										</span>
									<? endfor ?>
								</div>
							</div>
							<div class="doctor__rating_logo">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/pro-doctorov.svg" type="image/svg+xml">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/pro-doctorov.png" alt="pro-doctorov">
								</picture>
							</div>
						</div>
					<? endif ?>
				</div>
				<div class="doctor__btns">
					<? if ($arResult['PROPERTIES']['PRICE_CLINIC']['VALUE'] && $arResult['PROPERTIES']['PRICE_HOME']['VALUE']) : ?>
						<div class="doctor__prices">
							<p class="doctor__price"><?= GetMessage(name: "PRICE_CLINIC") ?><span> <?= $arResult['PROPERTIES']['PRICE_CLINIC']['VALUE'] ?></span></p>
							<p class="doctor__price"><?= GetMessage(name: "PRICE_HOME") ?><span> <?= $arResult['PROPERTIES']['PRICE_HOME']['VALUE'] ?></span></p>
						</div>
					<? endif ?>
					<button class="primary-btn doctor__btn popup-btn" data-path="popup-call"><?= GetMessage(name: "SIGN_UP") ?></button>
				</div>
				<div class="doctor__schedule">
					<p class="doctor__schedule_title"><?= GetMessage(name: "WORKING_HOURS") ?></p>
					<ul class="doctor__schedule_list">
						<?
						foreach ($arResult["PROPERTIES"]["WORKING_HOURS"]["VALUE"] as $working) :
							$day = explode('|', $working);
							$class_day = trim($day[1]) == GetMessage(name: "WEEKEND") ? 'doctor__schedule_weekend' : 'doctor__schedule_time'; ?>
							<li class="doctor__schedule_item">
								<p class="doctor__schedule_day"><?= $day[0] ?></p>
								<p class="<?= $class_day ?>"><?= $day[1] ?></p>
							</li>
						<? endforeach ?>
					</ul>
				</div>
			</div>

			<div class="doctor__right">
				<div class="doctor__info">
					<div class="doctor__info_top">
						<p class="doctor__info_experience"><?= GetMessage(name: "WORK_EXPERIENCE") ?> <?= $arResult['PROPERTIES']['WORK_EXPERIENCE']['VALUE'] . " " . $declension->get($arResult['PROPERTIES']['WORK_EXPERIENCE']['VALUE']) ?></p>
						<p class="doctor__info_fio"><?= $arResult['NAME'] ?></p>
					</div>
					<div class="doctor__info_post">
						<div class="doctor__post_item">
							<div class="doctor__post_icon">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor-post.svg" alt="">
							</div>
							<div>
								<p class="doctor__post_text"><?= GetMessage(name: "POST") ?></p>
								<p class="doctor__post_post"><?= $arResult["PROPERTIES"]["POST"]["VALUE"] ?></p>
							</div>
						</div>
						<div class="doctor__post_item">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doctor-stepen.svg" class="doctor__post_icon" alt="">
							<div>
								<p class="doctor__post_text"><?= GetMessage(name: "ACADEMIC_DEGREE") ?></p>
								<p class="doctor__post_post"><?= $arResult["PROPERTIES"]["ACADEMIC_DEGREE"]["VALUE"] ?></p>
							</div>
						</div>
					</div>
					<p class="doctor__info_description"><?= $arResult["DETAIL_TEXT"] ?></p>
				</div>
				<div class="doctor__content">
					<div class="doctor__education">
						<p class="doctor__right_title"><?= GetMessage(name: "DOCTOR_EDUCATION") ?></p>
						<div class="doctor__list">
							<ul>
								<?
								foreach ($arResult["PROPERTIES"]["DOCTOR_EDUCATION"]["VALUE"] as $education_list) {
									$education = explode('|', $education_list);
									echo <<<OED
											<li>
												<p><span>{$education[0]}</span>{$education[1]}</p>
											</li>
									OED;
								}
								?>
							</ul>
						</div>
					</div>
					<?
					if (!empty($arResult["PROPERTIES"]["DIPLOMS"]["VALUE"])): ?>
						<div class="doctor__diplomas">
							<p class="doctor__right_title"><?= GetMessage(name: "DIPLOMS") ?></p>
							<div class="doctor__diplomas_swiper swiper doctorDiplomasSwiper">
								<div class="swiper-wrapper">
									<? foreach ($arResult["PROPERTIES"]["DIPLOMS"]["VALUE"] as $key => $photo): ?>
										<div class="doctor__diplomas_swiper-slide swiper-slide">
											<a href="<?= CFile::GetPath($photo) ?>" data-fancybox="diplomas">
												<picture class="gallery__picture animation-item img-animation">
													<source srcset="<?= CFile::GetPath($photo) ?>" type="image/webp">
													<img src="<?= CFile::GetPath($photo) ?>" loading="lazy" alt="<?= $arResult["PROPERTIES"]["DIPLOMS"]["DESCRIPTION"][$key] ?>">
												</picture>
												<? if ($arResult["PROPERTIES"]["DIPLOMS"]["DESCRIPTION"][$key]) : ?>
													<p class=" doctor__diplomas_label"><?= $arResult["PROPERTIES"]["DIPLOMS"]["DESCRIPTION"][$key] ?></p>
												<? endif ?>
											</a>
										</div>
									<? endforeach ?>
								</div>
							</div>
							<div class="doctor__diplomas_swiper-pagination swiper-pagination"></div>
						</div>
					<? endif ?>
					<? if (!empty($arResult["PROPERTIES"]["JOB_PROFILE"]["VALUE"])): ?>
						<div class="doctor__works">
							<p class="doctor__right_title"><?= GetMessage(name: "JOB_PROFILE") ?></p>
							<div class="doctor__list">
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
			</div>
		</div>
	</div>
</section>