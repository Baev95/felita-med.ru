<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?
if ($arParams['WHERE'] == 'SERVICES') : ?>
	<section class="faq faq-service section-offset">
		<div class="container">
			<div class="section__flex">
				<div class="section__top faq__top">
					<h2 class="faq__title title-h2">Ответы на частозадаваемые вопросы</h2>
					<a href="#" class="primary-btn faq__btn section__btn">Смотреть все вопросы</a>
				</div>
				<div class="faq__grid">
					<div class="faq__block">
						<div class="tab">

							<div class="page-faq__sort">
								<div class="page-faq__tab_btns tab__btns tab__btns-acc">
									<?= $arResult['TABS_HTML'] ?>
								</div>
							</div>

							<div class="tab-contents">
								<?
								$j = 0;
								foreach ($arResult['ITEMS_HTML'] as $code => $html):
									$class = $j++ == 0 ? "active" : "";
								?>
									<div class="tabcontent <?= $class ?>" data-id="<?= $code ?>">
										<ul class="faq__list">
											<?= $html ?>
										</ul>
									</div>
								<? endforeach; ?>
							</div>
						</div>
					</div>

					<div class="faq__block faq__block_form">
						<?
						$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_faq.php', array('data' => $arData), array('SHOW_BORDER' => false));
						?>
					</div>
				</div>
			</div>
	</section>

<? else : ?>


	<section class="page-faq faq-service section-offset">
		<div class="container">

			<div class="tab">
				<div class="page-faq__sort">
					<div class="page-faq__tab_btns tab__btns tab__btns-acc">
						<?= $arResult['TABS_HTML'] ?>
					</div>
				</div>

				<div class="faq__grid">
					<div class="tab-contents">

						<?
						$j = 0;
						foreach ($arResult['ITEMS_HTML'] as $code => $html):
							$class = $j++ == 0 ? " active" : "";
						?>
							<div class="tabcontent<?= $class ?>" data-id="<?= $code ?>">
								<ul class="faq__list">
									<?= $html ?>
								</ul>
							</div>
						<? endforeach; ?>
					</div>

					<div class="faq__block faq__block_form">
						<?
						$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_faq.php', array('data' => $arData), array('SHOW_BORDER' => false));
						?>
					</div>
				</div>
			</div>

		</div>
	</section>

<? endif; ?>