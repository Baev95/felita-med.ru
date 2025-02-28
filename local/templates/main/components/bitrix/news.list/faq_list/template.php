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
						<div class="faq__form">
							<div class="faq__form_text">
								<p class="faq__form_title">Не нашли ответа на вопрос? Задайте его нашим специалистам</p>
								<p class="faq__form_subtitle">Задайте интересующий вас вопрос, и наши врачи на него ответят</p>
							</div>

							<form action="" class="faq__form_inputs" data-modal-open="open" data-modal-ok=".popup-change-ok .result-wrapper" data-modal-err=".popup-change-error .result-wrapper">
								<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
								<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
								<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
								<input name='type' type='hidden' value='request' />
								<input name='cc' type='hidden' value='2' />
								<input name='sub' type='hidden' value='8' />
								<input name='mes' type='hidden' value='22' />
								<input name="urlMessage" type="hidden" value="">
								<input name="title_url_message" type="hidden" value="">
								<div class="input-wrapper">
									<input type="text" name="name" class="input input-white faq__form_input" placeholder="Имя" required>
									<button class="input-clear"><img src="assets/img/icons/clear.svg" alt=""></button>
								</div>

								<div class="input-wrapper">
									<input type="tel" name="phone" class="input input-white faq__form_input" placeholder="Номер телефона" required>
									<button class="input-clear"><img src="assets/img/icons/clear.svg" alt=""></button>
								</div>

								<textarea class="faq__form_textarea textarea textarea-white" placeholder="Вопрос"></textarea>

								<button type="submit" class="primary-btn faq__form_btn request-send-btn"><span>Перезвонить мне</span></button>
								<p class="politic politic-white faq__form_politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
							</form>
						</div>


					</div>


					<?/*
					$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_faq.php', array(), array('MODE' => 'html'));*/
					?>


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
						<div class="faq__form">
							<div class="faq__form_text">
								<p class="faq__form_title">Не нашли ответа на вопрос? Задайте его нашим специалистам</p>
								<p class="faq__form_subtitle">Задайте интересующий вас вопрос, и наши врачи на него ответят</p>
							</div>

							<form action="" class="faq__form_inputs" data-modal-open="open" data-modal-ok=".popup-change-ok .result-wrapper" data-modal-err=".popup-change-error .result-wrapper">
								<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
								<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
								<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
								<input name='type' type='hidden' value='request' />
								<input name='cc' type='hidden' value='2' />
								<input name='sub' type='hidden' value='8' />
								<input name='mes' type='hidden' value='22' />
								<input name="urlMessage" type="hidden" value="">
								<input name="title_url_message" type="hidden" value="">
								<div class="input-wrapper">
									<input type="text" name="name" class="input input-white faq__form_input" placeholder="Имя" required>
									<button class="input-clear"><img src="assets/img/icons/clear.svg" alt=""></button>
								</div>

								<div class="input-wrapper">
									<input type="tel" name="phone" class="input input-white faq__form_input" placeholder="Номер телефона" required>
									<button class="input-clear"><img src="assets/img/icons/clear.svg" alt=""></button>
								</div>

								<textarea class="faq__form_textarea textarea textarea-white" placeholder="Вопрос"></textarea>

								<button type="submit" class="primary-btn faq__form_btn request-send-btn"><span>Перезвонить мне</span></button>
								<p class="politic politic-white faq__form_politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
							</form>
						</div>


					</div>
				</div>
			</div>

		</div>
	</section>

<? endif; ?>