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
switch ($arParams['CUSTOM']):
	case "main": // Для главной страницы
?>
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
		</section>
	<?
		break;
	default:  // Для страницы  
	?>
		<section class="services section-offset">
			<div class="container">
				<?php
				$sections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME']);
				while ($section = $sections->GetNext()):
					if ($section['ELEMENT_CNT'] > 0) :
						$section_titles[$section['ID']] = $section['NAME'];
					endif;
				endwhile;
				$current_section_id = null;
				foreach ($arResult["ITEMS"] as $arItem):
					if ($current_section_id !== $arItem['IBLOCK_SECTION_ID']) :
						if ($current_section_id !== null) :
							$arr_sections_output[$current_section_id] .= <<<HTML
							</ul>
						</div>
						HTML;
						endif;
						$current_section_id = $arItem['IBLOCK_SECTION_ID'];
						$arr_sections_output[$current_section_id] = <<<HTML
						<div class="services__category">
							<p class="services__category_title">{$section_titles[$current_section_id]}</p>
							<ul>
						HTML;
					endif;
					$arr_sections_output[$current_section_id] .= <<<HTML
						<li class="search-page-item">
							<a href="{$arItem['DETAIL_PAGE_URL']}">
							<p class="services__category_name search-page-name">{$arItem['NAME']}</p>
							<div class="services__category_price">
								<p>{$arItem['PROPERTIES']['PRICE']['VALUE']}</p> 
								<div class="services__category_btn-circle btn-circle"></div>
							</div>
							</a>
						</li>
					HTML;
				endforeach;
				if ($current_section_id !== null) :
					$arr_sections_output[$current_section_id] .= <<<HTML
					</ul>
				</div>
				HTML;
				endif;
				echo implode("", $arr_sections_output);
				?>
			</div>
		</section>
<? break;
endswitch;
?>