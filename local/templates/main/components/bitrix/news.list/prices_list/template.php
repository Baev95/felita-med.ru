<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
switch ($arParams['CUSTOM']):
	case "services": // Для страницы услуг 
?>
		<? if ($arResult["ITEMS"]) : ?>
			<section class="price section-offset" style="padding-top:16px;">
				<div class=" container">
					<div class="section__flex">
						<div class="section__top price__top">
							<h2 class="title-h2 price__title">Цены на наши услуги</h2>
							<a href="/" class="btn-arrow price__btn section__btn">Все цены</a>
						</div>
						<? foreach ($arResult["ITEMS"] as $arItem): ?>
							<div class="section__inner">
								<table class="price__table table">
									<tbody class="price__table-body body-table">
										<? if (!empty($arItem["PROPERTIES"]["PRICES"]["VALUE"])) : ?>
											<? foreach ($arItem["PROPERTIES"]["PRICES"]["VALUE"] as $price_list) : ?>
												<? $price = explode('|', $price_list); ?>
												<tr class="price__item">
													<td class="price__name">
														<span><?= $price[0] ?></span>
													</td>
													<td class="price__cost">
														<p><?= $price[1] ?></p>
													</td>
													<td class="price__table-btn">
														<button class="price__table_btn primary-btn popup-btn" data-path="popup-call">
															<span><?= GetMessage('SIGN_UP') ?></span>
														</button>
													</td>
												</tr>
											<? endforeach; ?>
										<? endif; ?>

									</tbody>
								</table>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</section>
		<? endif; ?>
	<?
		break;
	default:  // Для страницы цен 
	?>
		<section class="page-price section-offset">
			<div class="container">
				<? if ($arParams['CUSTOM'] == 'main') : ?>
					<div class="section__flex">
						<div class="section__top price__top">
							<h2 class="title-h2 price__title">Цены на наши услуги</h2>
							<a href="#" class="btn-arrow price__btn section__btn">Все цены</a>
						</div>
					<? endif ?>
					<? foreach ($arResult["ITEMS"] as $arItem): ?>
						<div class="page-price__category accordion">
							<button class="page-price__category_top accordion__btn">
								<p><?= $arItem['NAME'] ?></p>
								<div class="page-price__category_btn-more">
									<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="41" height="41" rx="20.5" stroke="#677281"></rect>
										<path d="M22.0714 21.5H27.4286C27.7127 21.5 27.9853 21.4473 28.1862 21.3536C28.3871 21.2598 28.5 21.1326 28.5 21C28.5 20.8674 28.3871 20.7402 28.1862 20.6464C27.9853 20.5527 27.7127 20.5 27.4286 20.5H22.0714H19.9286H14.5714C14.2873 20.5 14.0147 20.5527 13.8138 20.6464C13.6129 20.7402 13.5 20.8674 13.5 21C13.5 21.1326 13.6129 21.2598 13.8138 21.3536C14.0147 21.4473 14.2873 21.5 14.5714 21.5H19.9286H22.0714Z" fill="#677281"></path>
										<path d="M21.5 19.9286V14.5714C21.5 14.2873 21.4473 14.0147 21.3536 13.8138C21.2598 13.6129 21.1326 13.5 21 13.5C20.8674 13.5 20.7402 13.6129 20.6464 13.8138C20.5527 14.0147 20.5 14.2873 20.5 14.5714V19.9286V22.0714V27.4286C20.5 27.7127 20.5527 27.9853 20.6464 28.1862C20.7402 28.3871 20.8674 28.5 21 28.5C21.1326 28.5 21.2598 28.3871 21.3536 28.1862C21.4473 27.9853 21.5 27.7127 21.5 27.4286V22.0714V19.9286Z" fill="#677281"></path>
									</svg>
								</div>
							</button>
							<table class="page-price__table table accordion__content">
								<tbody class="page-price__table-body body-table">
									<? if (!empty($arItem["PROPERTIES"]["PRICES"]["VALUE"])) : ?>
										<? foreach ($arItem["PROPERTIES"]["PRICES"]["VALUE"] as $price_list) : ?>
											<? $price = explode('|', $price_list); ?>
											<tr class="page-price__item">
												<td class="page-price__name">
													<span><?= $price[0] ?></span>
												</td>
												<td class="page-price__cost">
													<p><?= $price[1] ?></p>
												</td>
												<td class="page-price__table-btn">
													<button class="page-price__table_btn primary-btn popup-btn" data-path="popup-call">
														<span><?= GetMessage('SIGN_UP') ?></span>
													</button>
												</td>
											</tr>
										<? endforeach; ?>
									<? endif; ?>
								</tbody>
							</table>
						</div>
					<? endforeach; ?>
					</div>
					<? if ($arParams['CUSTOM'] == 'main') : ?>
			</div>
		<? endif ?>
		</section>
<?
		break;
endswitch;
?>