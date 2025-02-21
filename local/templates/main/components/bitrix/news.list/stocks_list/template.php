<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
while ($arData = $rsData->Fetch()): ?>


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
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form-white.php', array('data' => $arData), array('SHOW_BORDER' => false));
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