<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
switch ($arParams['WHERE']):
	case "SERVICES": // Для страницы услуг 
?>
		<section class="reviews section-offset">
			<div class="container">
				<div class="section__flex">
					<div class="section__top reviews__top">
						<h2 class="title-h2">Отзывы о прохождении лечения</h2>
						<a href="#" class="tertiary-btn reviews__btn section__btn">Все отзывы</a>
					</div>


					<div class="section__inner">
						<div class="reviews__cards">
							<div class="reviews__swiper swiper reviewsSwiper">
								<div class="swiper-wrapper">


									<?
									foreach ($arResult["ITEMS"] as $arItem):
										$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
										$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


										$arItem['AGE'] = preg_replace('/[^0-9]/', '', $arItem['AGE']);
										$arItem['AGE'] = (int) $arItem['AGE'];

									?>
										<div class="reviews__swiper-slide swiper-slide">
											<div class="reviews__card">
												<div class="reviews__card_inner">
													<div class="reviews__card_info">
														<div class="reviews__card_fio">
															<p><?= $arItem['NAME'] ?>, <?= $arItem['AGE'] . " " . $arResult['DECLENSION']->get($arItem['AGE']); ?></p>
															<p><?= $arItem['CITY'] ?></p>
														</div>

														<div class="reviews__card_right">
															<div class="reviews__card_stars">

																<?
																for ($i = 0; $i < 5; $i++): ?>
																	<span class="<?= $i < $arItem['STARS'] ? 'reviews__card_star-active' : 'reviews__card_star' ?>">
																		<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M9.04894 1.42705C9.3483 0.505741 10.6517 0.50574 10.9511 1.42705L12.4697 6.10081C12.6035 6.51284 12.9875 6.7918 13.4207 6.7918H18.335C19.3037 6.7918 19.7065 8.03141 18.9228 8.60081L14.947 11.4894C14.5966 11.744 14.4499 12.1954 14.5838 12.6074L16.1024 17.2812C16.4017 18.2025 15.3472 18.9686 14.5635 18.3992L10.5878 15.5106C10.2373 15.256 9.7627 15.256 9.41221 15.5106L5.43648 18.3992C4.65276 18.9686 3.59828 18.2025 3.89763 17.2812L5.41623 12.6074C5.55011 12.1954 5.40345 11.744 5.05296 11.4894L1.07722 8.60081C0.293507 8.03141 0.696283 6.7918 1.66501 6.7918H6.57929C7.01252 6.7918 7.39647 6.51284 7.53035 6.10081L9.04894 1.42705Z" fill="#FFF089" />
																		</svg>
																	</span>

																<? endfor; ?>

															</div>

															<p class="reviews__card_publication"><?= $arItem['DATE_CREATE'] ?></p>
														</div>
													</div>

													<div class="reviews__card_main">
														<p class="reviews__card_text"><?= $arItem['PREVIEW_TEXT'] ?></p>
														<button class="reviews__card_more btn-arrow btn-more"><?= GetMessage('DETAILED') ?></button>
													</div>
												</div>

												<div class="reviews__card_answer">
													<p><?= $arItem['TEXT_DOCTOR'] ?></p>
													<div class="reviews__card_answered">
														<p><?= GetMessage('DOCTOR_COMMENT') ?></p>
														<p><?= $arItem['DOCTOR_NAME'] ?></p>
													</div>
												</div>
											</div>
										</div>

									<? endforeach; ?>


								</div>
							</div>
						</div>
						<div class="reviews__swiper-btns swiper-btns">
							<button class="reviews__swiper-button-prev swiper-button-prev"></button>
							<button class="reviews__swiper-button-next swiper-button-next"></button>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?
		break;
	default:  // Для страницы отзывов 
	?>
		<section class="page-reviews section-offset">
			<div class="container">
				<div class="page-reviews__inner" data-filter-block>
					<div class="page-reviews__sort">

						<div class="sort_block">
							<label for="service"><?= GetMessage('SERVICES') ?></label>
							<select id="service" name="service" class="select filter-select" data-filter-type="service">
								<option value="all" selected><?= GetMessage('SELECT_ALL') ?></option>
								<? foreach ($arResult['SERVICES'] as $service): ?>
									<option value="<?= $service['CODE'] ?>"><?= $service['NAME'] ?></option>
								<? endforeach; ?>
							</select>
						</div>

						<div class="sort_block">
							<label for="doctor"><?= GetMessage('DOCTOR') ?></label>
							<select id="doctor" name="doctor" class="select filter-select" data-filter-type="doctor">
								<option value="all" selected><?= GetMessage('SELECT_ALL') ?></option>
								<? foreach ($arResult['DOCTORS'] as $doctor): ?>
									<option value="<?= $doctor['CODE'] ?>"><?= $doctor['NAME'] ?></option>
								<? endforeach; ?>
							</select>
						</div>

					</div>

					<div class="page-reviews__cards">
						<?
						foreach ($arResult["ITEMS"] as $arItem):
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							$arItem['AGE'] = preg_replace('/[^0-9]/', '', $arItem['AGE']);
							$arItem['AGE'] = (int) $arItem['AGE'];

						?>
							<div class="reviews__card reviews-page__card filter-card quantity-card" data-service="<?= $arItem['SERVICE_CODE'] ?>" data-doctor="<?= $arItem['DOCTOR_CODE'] ?>">
								<div class="reviews__card_inner">
									<div class="reviews__card_info">
										<div class="reviews__card_fio">
											<p><?= $arItem['NAME'] ?>, <?= $arItem['AGE'] . " " . $arResult['DECLENSION']->get($arItem['AGE']); ?></p>
											<p><?= $arItem['CITY'] ?></p>
										</div>
										<? if ($arItem['PROPERTIES']['STARS']): ?>
											<div class="reviews__card_rating">
												<div class="reviews__card_stars">
													<?
													for ($i = 0; $i < 5; $i++): ?>
														<span class="<?= $i < $arItem['PROPERTIES']['STARS']['VALUE'] ? 'reviews__card_star-active' : 'reviews__card_star' ?>">
															<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M9.04894 1.42705C9.3483 0.505741 10.6517 0.50574 10.9511 1.42705L12.4697 6.10081C12.6035 6.51284 12.9875 6.7918 13.4207 6.7918H18.335C19.3037 6.7918 19.7065 8.03141 18.9228 8.60081L14.947 11.4894C14.5966 11.744 14.4499 12.1954 14.5838 12.6074L16.1024 17.2812C16.4017 18.2025 15.3472 18.9686 14.5635 18.3992L10.5878 15.5106C10.2373 15.256 9.7627 15.256 9.41221 15.5106L5.43648 18.3992C4.65276 18.9686 3.59828 18.2025 3.89763 17.2812L5.41623 12.6074C5.55011 12.1954 5.40345 11.744 5.05296 11.4894L1.07722 8.60081C0.293507 8.03141 0.696283 6.7918 1.66501 6.7918H6.57929C7.01252 6.7918 7.39647 6.51284 7.53035 6.10081L9.04894 1.42705Z" fill="#FFF089" />
															</svg>
														</span>
													<? endfor; ?>
												</div>
												<p><?= $arItem['DATE_CREATE'] ?></p>
											</div>
										<? endif; ?>
									</div>
									<div class="reviews__card_main">
										<p class="reviews__card_text"><?= $arItem['PREVIEW_TEXT'] ?></p>
										<button class="reviews__card_more btn-arrow btn-more"><?= GetMessage('DETAILED') ?></button>
									</div>
								</div>
								<div class="reviews__card_answer">
									<p><?= $arItem['TEXT_DOCTOR'] ?></p>
									<div class="reviews__card_answered">
										<p><?= GetMessage('DOCTOR_COMMENT') ?></p>
										<p><?= $arItem['DOCTOR_NAME'] ?></p>
									</div>
								</div>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</div>
		</section>






		<section class="feedback section-offset">
			<div class="container">
				<div class="feedback__inner">
					<div class="feedback__wrap">
						<p class="feedback__title">Оставьте ваш отзыв</p>
						<p class="feedback__subtitle">Ваше мнение для улучшения работы нашей клиники и наших специалистов</p>

						<form action="" class="feedback__form">
							<input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
							<input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
							<input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
							<input name='type' type='hidden' value='review' />
							<input name='cc' type='hidden' value='2' />
							<input name='sub' type='hidden' value='8' />
							<input name='mes' type='hidden' value='22' />
							<input name="urlMessage" type="hidden" value="">
							<input name="title_url_message" type="hidden" value="">
							<div class="feedback__form-input__wrap">
								<div class="input-wrapper">
									<input type="text" name="params[name][]" class="input feedback__input" placeholder="Ваше имя" required>
									<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
								</div>
								<div class="input-wrapper">
									<input type="tel" name="params[phone][]" class="input feedback__input" placeholder="+7 (___) ___-__-__" required>
									<button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
								</div>
							</div>

							<div class="feedback__form-input__wrap">
								<div class="sort_block">
									<label for="feedback-service">Услуга</label>
									<select name="params[phone][]" id="feedback-service" name="feedback-service" class="select feedback__select">
										<option value="all" selected>Выбрать</option>
										<option value="services-1">Значение 1</option>
										<option value="services-2">Значение 2</option>
										<option value="services-3">Значение 3</option>
									</select>
								</div>
								<div class="sort_block">
									<label for="feedback-doctor">Врач</label>
									<select id="feedback-doctor" name="feedback-doctor" class="select feedback__select">
										<option value="all" selected>Выбрать</option>
										<option value="doctor-1">Значение 1</option>
										<option value="doctor-2">Значение 2</option>
										<option value="doctor-3">Значение 3</option>
									</select>
								</div>
							</div>

							<textarea class="feedback__textarea textarea" placeholder="Текст отзыва"></textarea>

							<div class="feedback__stars">
								<p>Поставьте оценку врачу:</p>
								<div class="feedback-full-stars full-stars">
									<div class="rating-group">
										<input name="fst" value="0" type="radio" disabled checked />

										<label for="feedback-fst-1">
											<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
											</svg>
										</label>
										<input name="fst" id="feedback-fst-1" value="1" type="radio" />

										<label for="feedback-fst-2">
											<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
											</svg>
										</label>
										<input name="fst" id="feedback-fst-2" value="2" type="radio" />

										<label for="feedback-fst-3">
											<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
											</svg>
										</label>
										<input name="fst" id="feedback-fst-3" value="3" type="radio" />

										<label for="feedback-fst-4">
											<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
											</svg>
										</label>
										<input name="fst" id="feedback-fst-4" value="4" type="radio" />

										<label for="feedback-fst-5">
											<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
											</svg>
										</label>
										<input name="fst" id="feedback-fst-5" value="5" type="radio" />
									</div>
								</div>
							</div>
							<div class="feedback__bottom-wrap">
								<button class="primary-btn feedback__btn request-send-btn" type="submit"><span>Отправить</span></button>
								<p class="politic feedback__politic">
									Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности
								</p>
							</div>
						</form>
					</div>
					<picture class="feedback__picture">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/feedback/feedback-pic-1.webp" type="image/webp">
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/feedback/feedback-pic-1.jpg" alt="feedback"
							class="feedback__img">
					</picture>
				</div>
			</div>
		</section>










<?
		break;
endswitch;
?>