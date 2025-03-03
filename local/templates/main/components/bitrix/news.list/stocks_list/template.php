<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
while ($arData = $rsData->Fetch()): ?>

	<?
	switch ($arParams['WHERE']):
		case "MAIN": // Для страницы услуг 
	?>



			<section class="stocks">
				<div class="container">
					<picture class="bg">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stocks/stocks-bg.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/stocks/stocks-bg.jpg" alt="background" loading="lazy" />
					</picture>

					<div class="stocks__row">
						<div class="stocks__flex section__flex">
							<div class="section__top stocks__top">
								<h2 class="title-h2 stocks__title">Акции</h2>
								<a href="/stocks/" class="primary-btn stocks__btn section__btn">Смотреть все акции</a>
							</div>

							<div class="section__inner">
								<div class="stocks__cards">
									<div class="stocks__swiper swiper stocksSwiper">
										<div class="swiper-wrapper">

											<? foreach ($arResult['SECTIONS'] as $elements): ?>
												<?= $elements['HTML'] ?>
											<? endforeach; ?>

										</div>

										<div class="stocks__swiper-btns">
											<div class="stocks__swiper-pagination swiper-pagination"></div>
											<div class="stocks__swiper-scrollbar swiper-scrollbar"></div>
											<div class="swiper-btns">
												<div class="stocks__swiper-button-prev swiper-button-prev"></div>
												<div class="stocks__swiper-button-next swiper-button-next"></div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<picture class="stocks__picture">
							<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/stocks/stocks-7/stock-1.webp" type="image/webp">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/stocks/stocks-7/stock-1.jpg" loading="lazy">
						</picture>
					</div>
				</div>
			</section>



		<?
			break;
		default:
		?>

			<section class="stocks-page section-offset">
				<div class="container">
					<div class="tab">
						<div class="stocks-page__sort">
							<div class="stocks-page__tab_btns tab__btns tab__btns-acc">
								<?
								$i = $j = 0;
								foreach ($arResult['SECTIONS'] as $section): ?>
									<? if (count($arResult['SECTIONS']) > 1) : ?>
										<button class="stocks-page__tab_btn tab__btn-acc tab__btn<?= $i++ == 0 ? " active" : "" ?>" data-id="<?= $section['NAME'] ?>">
											<span><?= $section['NAME'] ?></span>
											<div class="stocks-page__btn-arrow btn-arrow"></div>
										</button>
									<? endif ?>
								<? endforeach; ?>
							</div>
						</div>
						<? foreach ($arResult['SECTIONS'] as $elements): ?>
							<div class="tabcontent<?= $j++ == 0 ? " active" : "" ?>" data-id="<?= $elements['NAME'] ?>">
								<div class="stocks-page__cards">
									<?= $elements['HTML'] ?>
								</div>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</section>



			<?
			$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_white.php', array('data' => $arData), array('SHOW_BORDER' => false));
			?>



	<?
			break;
	endswitch;
	?>

<? endwhile ?>


<? /*
switch ($arParams['CUSTOM']):
	case "services": // Для страницы услуг
	case "main": // Для главной страницы
?>

		<section class="stocks section-offset">
			<div class="container">
				<div class="section__flex">
					<div class="section__top stocks__top">
						<h2 class="title-h2">Акции</h2>
						<a href="#" class="btn-arrow stocks__btn section__btn">Все акции</a>
					</div>

					<div class="section__inner">
						<div class="stocks__cards">
							<div class="stocks__swiper swiper stocks5Swiper">
								<div class="swiper-wrapper">
									<?= $arResult['ITEMS_HTML_LIST'] ?>
								</div>
							</div>
						</div>

						<div class="stocks__swiper-pagination swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>


	<?
		break;
	default:  // Для страницы статей 
	?>




		<section class="stocks section-offset">
			<div class="container">
				<div class="tab">
					<div class="stocks-page__sort">
						<div class="stocks-page__tab_btns ">
							<? foreach ($arResult['SECTIONS'] as $index => $section): ?>
								<? if ($section['ELEMENT_CNT'] > 0): ?>
									<button class="tablinks stocks-page__tab_btn tab__btn <?= $index == 0 ? "tab__btn--active" : "" ?>" data-id="<?= $section['ID'] ?>">
										<span><?= $section['NAME'] ?></span>
									</button>
								<? endif; ?>
							<? endforeach; ?>
						</div>
					</div>
					<? foreach ($arResult['ITEMS_HTML'] as $index => $html): ?>
						<div class="tabcontent <?= $index == 0 ? "tabcontent--active" : "" ?>" data-id="<?= $arResult['SECTION_IDS'][$index] ?>">
							<div class="stocks-page__cards">
								<?= $html ?>
							</div>
						</div>
					<? endforeach; ?>
				</div>
			</div>
		</section>


<?
		break;
endswitch;
?>

*/ ?>