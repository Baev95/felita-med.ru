<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="faq section-offset">
	<div class="container">
		<?
		if ($arParams['CUSTOM'] == 'services') : ?>
			<div class="section__flex">
				<div class="section__top faq__top">
					<h2 class="title-h2">Ответы на частозадаваемые вопросы</h2>
					<a href="#" class="btn-arrow faq__btn section__btn">Все вопросы</a>
				</div>
			<? endif; ?>

			<div class="tab">
				<div class="faq__tabs">
					<div class="faq__tab_btns">
						<?= $arResult['TABS_HTML'] ?>
					</div>
				</div>

				<div class="faq__grid">
					<div class="faq__block">
						<div class="tab-contents">
							<?
							$j = 0;
							foreach ($arResult['ITEMS_HTML'] as $code => $html):
								$class = $j++ == 0 ? "tabcontent--active" : "";
							?>
								<div class="tabcontent <?= $class ?>" data-id="<?= $code ?>">
									<ul class="faq__list">
										<?= $html ?>
									</ul>
								</div>
							<? endforeach; ?>
						</div>
					</div>
					<?
					$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_faq.php', array(), array('MODE' => 'html'));
					?>
				</div>
			</div>
			<?
			if ($arParams['CUSTOM'] == 'services') : ?>
			</div>
		<? endif; ?>
	</div>
</section>