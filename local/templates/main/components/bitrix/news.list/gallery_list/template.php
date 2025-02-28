<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
switch ($arParams['CUSTOM']):
	case "services": // Для страницы услуг
	case "main": // Для главной страницы
?>
		<section class="gallery section-offset">
			<div class="container">
				<div class="section__flex">
					<div class="section__top gallery__top">
						<h2 class="title-h2">Фотографии нашей клиники</h2>
						<a href="#" class="btn-arrow gallery__btn section__btn">Все фото</a>
					</div>
					<div class="section__inner gallery__inner tab">
						<div class="gallery__nav">
							<button class="gallery__swiper-button-prev swiper-button-prev"></button>
							<div class="gallery__nav_btns">
								<div class="gallery__tab_btns ">
									<?
									$index_id = '';
									foreach ($arResult['TAB_BUTTONS'] as $index => $button):
										$index_id = $index == 0 ? $button['ID'] : $index_id; ?>
										<button class="tablinks gallery__tab_btn tab__btn <?= $index == 0 ? "tab__btn--active" : "" ?>" data-id="<?= $button['ID'] ?>">
											<span><?= $button['NAME'] ?></span>
										</button>
									<? endforeach; ?>
								</div>
							</div>
							<button class="gallery__swiper-button-next swiper-button-next"></button>
						</div>

						<? foreach ($arResult['ITEMS_HTML'] as $index => $html): ?>
							<div class="tabcontent <?= $index == $index_id ? "tabcontent--active" : "" ?>" data-id="<?= $index ?>">
								<div class="gallery__cards">
									<div class="gallery__swiper swiper gallery4Swiper">
										<div class="swiper-wrapper">
											<?= $html ?>
										</div>
									</div>
								</div>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	<?
		break;
	default:  // Для страницы статей 
	?>









		<section class="gallery section-offset">
			<div class="container">

				<div class="tab">

					<div class="gallery__tab_btns tab__btns-acc">
						<?
						$index_id = '';
						foreach ($arResult['TAB_BUTTONS'] as $index => $button):
							$index_id = $index == 0 ? $button['ID'] : $index_id; ?>
							<button class="tablinks gallery__tab_btn tab__btn-acc tab__btn<?= $index == 0 ? " active" : "" ?>" data-id="<?= $button['ID'] ?>">
								<?= $button['NAME'] ?>
								<div class="gallery__btn-arrow btn-arrow"></div>
							</button>
						<? endforeach; ?>
					</div>


					<? foreach ($arResult['ITEMS_HTML'] as $index => $html): ?>
						<div class="tabcontent<?= $index == $index_id ? " active" : "" ?>" data-id="<?= $index ?>">
							<div class="gallery-page__cards gallery__cards">
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