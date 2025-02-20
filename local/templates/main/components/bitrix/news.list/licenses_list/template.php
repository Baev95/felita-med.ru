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
?>
<?

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

$i = 0;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
while ($arData = $rsData->Fetch()):
	$license_photo = CFile::GetPath($arData['UF_LICENSE']);
	switch ($arParams['CUSTOM']):
		case "services": // Для страницы услуг 
		case "main": // Для главной страницы 

?>
			<section class="licenses section-offset">
				<div class="container">
					<div class="licenses__flex">
						<div class="licenses__content">
							<div class="licenses__top">
								<h2 class="licenses__title title-h2">Лицензии клиники</h2>
								<p>Деятельность клиники «MedAlco» полностью лицензирована, а эффективность работы доказана сотнями здоровых пациентов.</p>
								<p>Мы работаем над тем, чтобы более 95% наших пациентов и их родственников оставались довольными лечением в наркологической клинике «MedAlco».</p>
							</div>
							<div class="licenses__bottom">
								<p>Деятельность клиники основана на медицинской лицензии <span><?= $arData['UF_LICENSE_HEADER'] ?></span></p>
								<div class="licenses__links">
									<a href="<?= $license_photo ?>" download class="licenses__link">Скачать лицензию
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/licenses-download.svg" alt="download">
									</a>
									<a href="<?= $license_photo ?>" class="licenses__link" target="_blank">Посмотреть
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/licenses-eye.svg" alt="eye">
									</a>
								</div>
							</div>
						</div>
						<div class="licenses__images">
							<div class="licenses__swipers">
								<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="licenses__swiper swiper licenses4Swiper2">
									<div class="swiper-wrapper">
										<? foreach ($arResult["ITEMS"] as $arItem):
											foreach ($arItem['PROPERTIES']['LICENSE']['VALUE'] as $key => $license) :
												$photo = CFile::GetPath($license);
										?>
												<div class="licenses__swiper-slide swiper-slide">
													<a href="<?= $photo ?>" class="licenses__image rotate-item animation-item  img-animation" data-fancybox="licenses_<?= $i ?>">
														<picture class="licenses__picture">
															<source srcset="<?= $photo ?>" type="image/webp">
															<img src="<?= $photo ?>" loading="lazy">
														</picture>
														<p class="licenses__image_label"><?= $arItem["PROPERTIES"]["LICENSE"]["DESCRIPTION"][$key] ?></p>
													</a>
												</div>
										<?
											endforeach;
										endforeach;
										$i++;
										?>
									</div>
								</div>
								<div thumbsSlider="" class="licenses__swiper swiper licenses4Swiper">
									<div class="swiper-wrapper">
										<? foreach ($arResult["ITEMS"] as $arItem):
											foreach ($arItem['PROPERTIES']['LICENSE']['VALUE'] as $key => $license) :
												$photo = CFile::GetPath($license);
										?>
												<div class="licenses__swiper-slide swiper-slide">
													<a href="<?= $photo ?>" class="licenses__image rotate-item animation-item  img-animation" data-fancybox="licenses_<?= $i ?>">
														<picture class="licenses__picture">
															<source srcset="<?= $photo ?>" type="image/webp">
															<img src="<?= $photo ?>" loading="lazy">
														</picture>
													</a>
												</div>
										<?
											endforeach;
										endforeach;
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?
			break;
		default:  // Для страницы цен 
		?>
			<section class="licenses-page section-offset">
				<div class="container">
					<div class="licenses-page__top">
						<div class="licenses-page__text">
							<p>Деятельность клиники «MedAlco» полностью лицензирована, а эффективность работы доказана сотнями здоровых пациентов.</p>
							<p>Мы работаем над тем, чтобы более 95% наших пациентов и их родственников оставались довольными лечением в наркологической клинике «MedAlco».</p>
						</div>
						<div class="licenses-page__info">
							<p>Деятельность клиники основана на медицинской лицензии</p>
							<span><?= $arData['UF_LICENSE_HEADER'] ?></span>
						</div>
					</div>
					<div class="licenses-page__images">
						<? foreach ($arResult["ITEMS"] as $arItem):
							foreach ($arItem['PROPERTIES']['LICENSE']['VALUE'] as $key => $license) :
								$photo = CFile::GetPath($license);
						?>
								<a href="<?= $photo ?>" class="licenses__image rotate-item animation-item  img-animation" data-fancybox="license">
									<picture class="licenses__picture">
										<source srcset="<?= $photo ?>" type="image/webp">
										<img src="<?= $photo ?>" loading="lazy">
									</picture>
									<p class="licenses__image_label licenses-page__image_label"><?= $arItem["PROPERTIES"]["LICENSE"]["DESCRIPTION"][$key] ?></p>
								</a>
						<?
							endforeach;
						endforeach;
						?>
					</div>
				</div>
			</section>
<?
			break;
	endswitch;
endwhile;
?>