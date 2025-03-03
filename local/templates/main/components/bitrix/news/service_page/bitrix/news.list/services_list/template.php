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
$arr_section = $section_titles = $arr_sections_output = [];
?>
<?
switch ($arParams['WHERE']):
	case "MAIN": // Для главной страницы
?>

		<section class="services section-offset">
			<div class="container section__flex">
				<div class="services__top section__top">
					<h2 class="title-h2 services__title">Направления деятельности клиники</h2>
					<a href="/services/" class="tertiary-btn services__btn section__btn">Все услуги</a>
				</div>

				<div class="services__cards">
					<?
					$sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1], true, []);
					while ($section = $sections->GetNext()): ?>

						<? if ($section['ELEMENT_CNT'] > 0) : ?>


							<div class="services__card change-item animation-item transform-item">
								<div class="services__card_top">
									<div class="services__card_title">
										<p class="change-item__title"><?= $section['NAME'] ?> </p>
										<span><?= $section['ELEMENT_CNT'] ?> услуги</span>
									</div>

								</div>

								<div class="services__card_inner">
									<div class="services__card_main">
										<div class="services__card_list">
											<ul>

												<?
												foreach ($arResult["ITEMS"] as $arItem):

													if ($section['ID'] == $arItem['IBLOCK_SECTION_ID']) :
														if ($i++ === 6) break; ?>
														<li><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></li>

												<?
													endif;
												endforeach;
												?>

											</ul>
										</div>
										<a href="/services/" class="btn-arrow services__card_more">Полный список услуг</a>
									</div>

									<div class="services__card_bottom">
										<p class="services__card_price">от 3000 ₽</p>
										<button class="primary-btn popup-btn change-item__btn" data-path="popup-change">Заказать</button>
									</div>
								</div>
							</div>



							<?/*
							<div class="services__swiper-slide swiper-slide">
								<div class="services__card">
									<div class="services__card_main">
										<picture class="services__card_bg">
											<source srcset="<?= CFile::GetPath($section['PICTURE']); ?>" type="image/webp" />
											<img src="<?= CFile::GetPath($section['PICTURE']); ?>" alt="" loading="lazy" />
										</picture>

										<div class="services__card_titles services__card_between">
											<p class="services__card_title"><?= $section['NAME'] ?></p>
											<div class="services__card_prices">
												<p class="services__card_price"><?= $section['DESCRIPTION'] ?></p>
												<button class="primary-btn services__card_btn popup-btn" data-path="popup-call">Заказать</button>
											</div>
										</div>
										<div class="services__card_lists services__card_between">
											<div class="services__card_list">
												<ul>
													<?
													$i = 0;

													$subsections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y', '>DEPTH_LEVEL' => 1], true, []);
													while ($subsection = $subsections->GetNext()):
														if ($subsection['IBLOCK_SECTION_ID'] == $section['ID']) :

															foreach ($arResult["ITEMS"] as $arItem):
																if ($subsection['ID'] == $arItem['IBLOCK_SECTION_ID']) :
																	if ($i++ === 6) break; ?>
																	<li><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></li>
															<?
																endif;
															endforeach;
														endif;
													endwhile;


													foreach ($arResult["ITEMS"] as $arItem):

														if ($section['ID'] == $arItem['IBLOCK_SECTION_ID']) :
															if ($i++ === 6) break; ?>
															<li><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></li>

													<?
														endif;
													endforeach;

													?>
												</ul>
											</div>
											<a href="/services" class="btn-arrow services__card_more">Полный список услуг</a>
										</div>
									</div>

									<div class="services__card_image">
										<picture class="services__card_img">
											<source srcset="<?= CFile::GetPath($section['PICTURE']); ?>" type="image/webp" />
											<img src="<?= CFile::GetPath($section['PICTURE']); ?>" alt="" loading="lazy" />
										</picture>
										<p class="services__card_quantity"><?= $section['ELEMENT_CNT'] ?> услуги</p>
									</div>
								</div>
							</div>


							*/ ?>

					<?
						endif;
					endwhile;
					?>


				</div>
			</div>
		</section>


		<?/*




		<section class="services section-offset">
			<div class="container services__flex">
				<div class="services__top">
					<h2 class="title-h2 services__title">Направления деятельности клиники</h2>
					<a href="#" class="btn-arrow services__btn">Все услуги</a>
				</div>
				<div class="services__paginations">
					<div class="services__swiper-pagination swiper-pagination"></div>
				</div>
				<div class="services__cards">
					<div class="services__swiper swiper services4Swiper">
						<div class="swiper-wrapper services__grid">
							<?
							$sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1], true, []);
							while ($section = $sections->GetNext()): ?>

								<? if ($section['ELEMENT_CNT'] > 0) : ?>
									<div class="services__swiper-slide swiper-slide">
										<div class="services__card">
											<div class="services__card_main">
												<picture class="services__card_bg">
													<source srcset="<?= CFile::GetPath($section['PICTURE']); ?>" type="image/webp" />
													<img src="<?= CFile::GetPath($section['PICTURE']); ?>" alt="" loading="lazy" />
												</picture>

												<div class="services__card_titles services__card_between">
													<p class="services__card_title"><?= $section['NAME'] ?></p>
													<div class="services__card_prices">
														<p class="services__card_price"><?= $section['DESCRIPTION'] ?></p>
														<button class="primary-btn services__card_btn popup-btn" data-path="popup-call">Заказать</button>
													</div>
												</div>
												<div class="services__card_lists services__card_between">
													<div class="services__card_list">
														<ul>
															<?
															$i = 0;

															$subsections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y', '>DEPTH_LEVEL' => 1], true, []);
															while ($subsection = $subsections->GetNext()):
																if ($subsection['IBLOCK_SECTION_ID'] == $section['ID']) :

																	foreach ($arResult["ITEMS"] as $arItem):
																		if ($subsection['ID'] == $arItem['IBLOCK_SECTION_ID']) :
																			if ($i++ === 6) break; ?>
																			<li><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></li>
																	<?
																		endif;
																	endforeach;
																endif;
															endwhile;


															foreach ($arResult["ITEMS"] as $arItem):

																if ($section['ID'] == $arItem['IBLOCK_SECTION_ID']) :
																	if ($i++ === 6) break; ?>
																	<li><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></li>

															<?
																endif;
															endforeach;

															?>
														</ul>
													</div>
													<a href="/services" class="btn-arrow services__card_more">Полный список услуг</a>
												</div>
											</div>

											<div class="services__card_image">
												<picture class="services__card_img">
													<source srcset="<?= CFile::GetPath($section['PICTURE']); ?>" type="image/webp" />
													<img src="<?= CFile::GetPath($section['PICTURE']); ?>" alt="" loading="lazy" />
												</picture>
												<p class="services__card_quantity"><?= $section['ELEMENT_CNT'] ?> услуги</p>
											</div>
										</div>
									</div>
							<?
								endif;
							endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>*/ ?>
	<?
		break;
	default:  // Для страницы  
	?>

		<section class="linking section-offset">
			<div class="container">
				<?php
				$sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME', 'ELEMENT_CNT']);
				$section_titles = [];
				while ($section = $sections->GetNext()):
					if ($section['ELEMENT_CNT'] > 0) :
						$section_titles[$section['ID']]['NAME'] = $section['NAME'];
						$section_titles[$section['ID']]['HTML'] = '';
						$section_titles[$section['ID']]['HTML'] .= <<<HTML
          <div class="linking__block">
            <h2 class="title-h2 linking__title">{$section_titles[$section['ID']]['NAME']}</h2>
            <div class="linking__inner">
        HTML;
						foreach ($arResult["ITEMS"] as $arItem):
							if ($arItem['IBLOCK_SECTION_ID'] == $section['ID']) {
								$section_titles[$section['ID']]['HTML'] .= <<<HTML
              <div class="linking__item">
                <p class="linking__item-title">{$arItem['NAME']}</p>
                <div class="linking__item-bottom">
                  <p class="linking__item-price">{$arItem['PROPERTIES']['PRICE']['VALUE']}</p>
                  <a href="{$arItem['DETAIL_PAGE_URL']}" class="btn-circle linking__btn"></a>
                </div>
              </div>
            HTML;
							}
						endforeach;
						$section_titles[$section['ID']]['HTML'] .= <<<HTML
            </div>
          </div>
        HTML;
					endif;
				endwhile;
				foreach ($section_titles as $section) {
					echo $section['HTML'];
				}
				?>
			</div>
		</section>

<? break;
endswitch;
?>