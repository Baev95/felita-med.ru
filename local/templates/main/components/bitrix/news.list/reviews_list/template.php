<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
switch ($arParams['CUSTOM']):
	case "services": // Для страницы услуг 
?>
		<section class="reviews">
			<div class="container">
				<div class="section__flex">
					<div class="section__top reviews__top">
						<h2 class="title-h2">Отзывы о прохождении лечения</h2>
						<a href="#" class="btn-arrow reviews__btn section__btn">Все отзывы</a>
					</div>

					<div class="section__inner">
						<div class="reviews__cards">
							<div class="reviews__swiper swiper reviews4Swiper">
								<div class="swiper-wrapper">
									<?
									foreach ($arResult["ITEMS"] as $arItem):
										$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
										$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
									?>
										<div class="reviews__swiper-slide swiper-slide">
											<div class="reviews__card">
												<div class="reviews__card_inner">
													<div class="reviews__card_top">
														<div class="reviews__card_fio">
															<p><?= $arItem['NAME'] ?>, <?= $arItem['AGE'] . " " . $arResult['DECLENSION']->get($arItem['AGE']); ?></p>
															<p><?= $arItem['CITY'] ?></p>
														</div>
														<? if ($arItem['STARS']): ?>
															<div class="reviews__card_rating">
																<div class="reviews__card_stars">
																	<?
																	for ($i = 0; $i < 5; $i++): ?>
																		<span class="<?= $i < $arItem['STARS'] ? 'reviews__card_star-active' : 'reviews__card_star' ?>">
																			<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10.4755 1.58156L11.9941 6.25532C12.1949 6.87336 12.7709 7.2918 13.4207 7.2918H18.335C18.8194 7.2918 19.0207 7.9116 18.6289 8.1963L14.6531 11.0848C14.1274 11.4668 13.9074 12.1439 14.1082 12.7619L15.6268 17.4357C15.7765 17.8963 15.2493 18.2794 14.8574 17.9947L10.8817 15.1061C10.3559 14.7242 9.64405 14.7242 9.11832 15.1061L5.14258 17.9947C4.75073 18.2794 4.22349 17.8963 4.37316 17.4357L5.89176 12.7619C6.09257 12.1439 5.87258 11.4668 5.34685 11.0848L1.37111 8.1963C0.979256 7.9116 1.18064 7.2918 1.66501 7.2918H6.57929C7.22913 7.2918 7.80506 6.87335 8.00587 6.25532L9.52447 1.58156C9.67415 1.1209 10.3259 1.12091 10.4755 1.58156Z" stroke="#FFDD99" fill="#FFDD99" />
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

												<div class="reviews__card_bottom">
													<p><?= $arItem['TEXT_DOCTOR'] ?></p>
													<div class="reviews__card_doctor">
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
						<div class="reviews__swiper-pagination swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>
	<?
		break;
	default:  // Для страницы отзывов 
	?>
		<section class="reviews-page section-offset" data-filter-block>
			<div class="container">
				<div class="reviews-page__sort">
					<div class="reviews-page__sort_block sort_block">
						<label for="select-services"><?= GetMessage('SERVICES') ?></label>
						<select id="select-services" name="reviews-services" class="filter-select select" data-filter-type="service">
							<option value="all" selected><?= GetMessage('SELECT_ALL') ?></option>
							<? foreach ($arResult['SERVICES'] as $service): ?>
								<option value="<?= $service['CODE'] ?>"><?= $service['NAME'] ?></option>
							<? endforeach; ?>
						</select>
					</div>
					<div class="reviews-page__sort_block sort_block">
						<label for="select-doctor"><?= GetMessage('DOCTOR') ?></label>
						<select id="select-doctor" name="reviews-doctor" class="filter-select select" data-filter-type="doctor">
							<option value="all" selected><?= GetMessage('SELECT_ALL') ?></option>
							<? foreach ($arResult['DOCTORS'] as $doctor): ?>
								<option value="<?= $doctor['CODE'] ?>"><?= $doctor['NAME'] ?></option>
							<? endforeach; ?>
						</select>
					</div>
				</div>
				<p class="reviews-page__quantity quantity"><?= GetMessage('ITEMS_FOUND') ?> <span></span></p>
				<div class="reviews-page__cards">
					<?
					foreach ($arResult["ITEMS"] as $arItem):
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
						<div class="reviews__card reviews-page__card filter-card quantity-card" data-service="<?= $arItem['SERVICE_CODE'] ?>" data-doctor="<?= $arItem['DOCTOR_CODE'] ?>">
							<div class="reviews__card_inner">
								<div class="reviews__card_top">
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
															<path d="M10.4755 1.58156L11.9941 6.25532C12.1949 6.87336 12.7709 7.2918 13.4207 7.2918H18.335C18.8194 7.2918 19.0207 7.9116 18.6289 8.1963L14.6531 11.0848C14.1274 11.4668 13.9074 12.1439 14.1082 12.7619L15.6268 17.4357C15.7765 17.8963 15.2493 18.2794 14.8574 17.9947L10.8817 15.1061C10.3559 14.7242 9.64405 14.7242 9.11832 15.1061L5.14258 17.9947C4.75073 18.2794 4.22349 17.8963 4.37316 17.4357L5.89176 12.7619C6.09257 12.1439 5.87258 11.4668 5.34685 11.0848L1.37111 8.1963C0.979256 7.9116 1.18064 7.2918 1.66501 7.2918H6.57929C7.22913 7.2918 7.80506 6.87335 8.00587 6.25532L9.52447 1.58156C9.67415 1.1209 10.3259 1.12091 10.4755 1.58156Z" stroke="#FFDD99" fill="#FFDD99" />
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
							<div class="reviews__card_bottom">
								<p><?= $arItem['TEXT_DOCTOR'] ?></p>
								<div class="reviews__card_doctor">
									<p><?= GetMessage('DOCTOR_COMMENT') ?></p>
									<p><?= $arItem['DOCTOR_NAME'] ?></p>
								</div>
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