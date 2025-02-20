<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
while ($arData = $rsData->Fetch()): ?>

	<section class="jobs section-offset">
		<div class="container">
			<ol class="jobs__list">
				<? foreach ($arResult["ITEMS"] as $arItem) : ?>

					<li class="jobs__item accordion">
						<button class="jobs__button accordion__btn">
							<p class="jobs__button_name"><?= $arItem["NAME"] ?></p>
							<p class="jobs__button_salary"><?= $arItem["PROPERTIES"]["INCOME_LEVEL"]["VALUE"] ?></p>
							<div class="jobs__button_btn-more">
								<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="0.5" y="0.5" width="33" height="33" rx="16.5" stroke="#38755A" />
									<path d="M18.0714 17.5H23.4286C23.7127 17.5 23.9853 17.4473 24.1862 17.3536C24.3871 17.2598 24.5 17.1326 24.5 17C24.5 16.8674 24.3871 16.7402 24.1862 16.6464C23.9853 16.5527 23.7127 16.5 23.4286 16.5H18.0714H15.9286H10.5714C10.2873 16.5 10.0147 16.5527 9.81381 16.6464C9.61288 16.7402 9.5 16.8674 9.5 17C9.5 17.1326 9.61288 17.2598 9.81381 17.3536C10.0147 17.4473 10.2873 17.5 10.5714 17.5H15.9286H18.0714Z" fill="#38755A" />
									<path d="M17.5 15.9286V10.5714C17.5 10.2873 17.4473 10.0147 17.3536 9.81381C17.2598 9.61288 17.1326 9.5 17 9.5C16.8674 9.5 16.7402 9.61288 16.6464 9.81381C16.5527 10.0147 16.5 10.2873 16.5 10.5714V15.9286V18.0714V23.4286C16.5 23.7127 16.5527 23.9853 16.6464 24.1862C16.7402 24.3871 16.8674 24.5 17 24.5C17.1326 24.5 17.2598 24.3871 17.3536 24.1862C17.4473 23.9853 17.5 23.7127 17.5 23.4286V18.0714V15.9286Z" fill="#38755A" />
								</svg>
							</div>
						</button>

						<div class="jobs__content accordion__content">
							<div class="jobs__content_labels">
								<div class="jobs__content_label">
									<picture class="jobs__content_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/job-bag.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/job-bag.png" alt="" loading="lazy">
									</picture>
									<div>
										<p><?= $arItem["PROPERTIES"]["EXPERIENCE"]["VALUE"] ?></p>
										<p>Требуемый опыт</p>
									</div>
								</div>

								<div class="jobs__content_label">
									<picture class="jobs__content_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/job-time.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/job-time.png" alt="" loading="lazy">
									</picture>
									<div>
										<p><?= $arItem["PROPERTIES"]["EMPLOYMENT"]["VALUE"] ?></p>
										<p>Тип занятости</p>
									</div>
								</div>

								<div class="jobs__content_label">
									<picture class="jobs__content_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/job-calendar.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/job-calendar.png" alt="" loading="lazy">
									</picture>
									<div>
										<p><?= $arItem["PROPERTIES"]["SCHEDULE"]["VALUE"] ?></p>
										<p>График</p>
									</div>
								</div>
							</div>

							<div class="jobs__content_block">
								<p>Основные задачи</p>
								<ul>
									<? foreach ($arItem["PROPERTIES"]["DEMAND"]["VALUE"] as $main_tasks_list) :
										$main_task = explode('|', $main_tasks_list);
									?>
										<li><?= $main_task[0] ?></li>
									<? endforeach ?>
								</ul>
							</div>

							<div class="jobs__content_block">
								<p>Требования</p>
								<ul>
									<? foreach ($arItem["PROPERTIES"]["DEMAND"]["VALUE"] as $demands_list) :
										$demand = explode('|', $demands_list);
									?>
										<li><?= $demand[0] ?></li>
									<? endforeach ?>
								</ul>
							</div>

							<div class="jobs__content_block">
								<p>Условия</p>
								<ul>
									<? foreach ($arItem["PROPERTIES"]["CIRCS"]["VALUE"] as $circs_list) :
										$circ = explode('|', $circs_list);
									?>
										<li><?= $circ[0] ?></li>
									<? endforeach ?>
								</ul>
							</div>

							<div class="jobs__content_bottom">
								<div class="jobs__content_text">
									<p>Заинтересовала вакансия? </p>
									<p>Тогда свяжитесь с нами</p>
								</div>
								<div class="jobs__content_contacts">
									<p>Телефон для связи: <a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>"><?= $arData['UF_PHONE']; ?></a></p>
									<p>Электронная почта: <a href="mailto:<?= $arData['UF_EMAIL']; ?>"><?= $arData['UF_EMAIL']; ?></a></p>
								</div>
							</div>
						</div>
					</li>

				<? endforeach; ?>
			</ol>
		</div>
	</section>
<? endwhile ?>