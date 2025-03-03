<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
switch ($arParams['WHERE']):
	case "SERVICES": // Для страницы услуг 

?>
		<section class="prices section-offset">
			<div class="container">
				<div class="section__flex">
					<h2 class="title-h2 prices__title">Цены на наши услуги</h2>
					<div class="section__top prices__top">
						<div class="prices__top_text">
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
						</div>
						<a href="/about/prices/" class="tertiary-btn prices__btn section__btn">Смотреть все цены</a>
					</div>
					<? foreach ($arResult["ITEMS"] as $arItem): ?>
						<div class="section__inner" data-filter-block>
							<table class="prices__table table">
								<tbody class="prices__table_body body-table">
									<? if (!empty($arItem["PROPERTIES"]["PRICES"]["VALUE"])) : ?>
										<? foreach ($arItem["PROPERTIES"]["PRICES"]["VALUE"] as $price_list) : ?>
											<? $price = explode('|', $price_list); ?>
											<tr class="prices__table_item filter-card search-page-item change-item">
												<td class="prices__table_name">
													<span class="search-page-name change-item__title"><?= $price[0] ?></span>
												</td>
												<td class="prices__table_cost">
													<p><span>Цена: </span><?= $price[1] ?></p>
												</td>
												<td class="prices__table_btn">
													<button class="primary-btn popup-btn change-item__btn" data-path="popup-change">
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
	<?
		break;



	case "MAIN": // Для главной странице  
	?>
		<?
		$i = $j = 0; // Счетчик для активного таба
		?>
		<section class="prices section-offset">
			<div class="container">
				<div class="section__flex">
					<h2 class="title-h2 prices__title">Цены на наши услуги</h2>
					<div class="section__top prices__top">
						<div class="prices__top_text">
							<p>Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
						</div>
						<a href="/about/prices/" class="tertiary-btn prices__btn section__btn">Смотреть все цены</a>
					</div>

					<div class="tab">
						<div class="page-prices__sort">
							<div class="page-prices__tab_btns tab__btns tab__btns-acc">
								<? foreach ($arResult['TAB_BUTTONS'] as $index => $item): ?>
									<button class="page-prices__tab_btn tab__btn-acc tab__btn<?= $i++ === 0 ? " active" : "" ?>" data-id="<?= $index ?>">
										<span><?= htmlspecialchars($item) ?></span>
										<div class="page-prices__btn-arrow btn-arrow"></div>
									</button>
								<? endforeach; ?>
							</div>
						</div>
						<div class="tab-contents">
							<? foreach ($arResult["ITEMS"] as $arItem): ?>
								<div class="tabcontent<?= $j++ === 0 ? ' active' : '' ?>" data-id="<?= $arItem['ID'] ?>">
									<table class="prices__table table">
										<tbody class="prices__table_body body-table">
											<? if (!empty($arItem["PRICES"])): ?>
												<? foreach ($arItem["PRICES"] as $price): ?>
													<tr class="prices__table_item search-page-item change-item">
														<td class="prices__table_name">
															<span class="search-page-name change-item__title"><?= htmlspecialchars($price[0]) ?></span>
														</td>
														<td class="prices__table_cost">
															<p><span>Цена: </span><?= htmlspecialchars($price[1]) ?></p>
														</td>
														<td class="prices__table_btn">
															<button class="primary-btn popup-btn change-item__btn" data-path="popup-change">
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
				</div>
			</div>
		</section><!-- guarantees-3 -->


	<?
		break;
	default:
	?>
		<?
		$i = $j = 0; // Счетчик для активного таба
		?>
		<section class="page-prices section-offset">
			<div class="container">
				<div class="tab">
					<div class="page-prices__sort">
						<div class="page-prices__tab_btns tab__btns tab__btns-acc">
							<? foreach ($arResult['TAB_BUTTONS'] as $index => $item): ?>
								<button class="page-prices__tab_btn tab__btn-acc tab__btn<?= $i++ === 0 ? " active" : "" ?>" data-id="<?= $index ?>">
									<span><?= htmlspecialchars($item) ?></span>
									<div class="page-prices__btn-arrow btn-arrow"></div>
								</button>
							<? endforeach; ?>
						</div>
					</div>
					<div class="tab-contents">
						<? foreach ($arResult["ITEMS"] as $arItem): ?>
							<div class="tabcontent<?= $j++ === 0 ? ' active' : '' ?>" data-id="<?= $arItem['ID'] ?>">
								<table class="prices__table table">
									<tbody class="prices__table_body body-table">
										<? if (!empty($arItem["PRICES"])): ?>
											<? foreach ($arItem["PRICES"] as $price): ?>
												<tr class="prices__table_item search-page-item change-item">
													<td class="prices__table_name">
														<span class="search-page-name change-item__title"><?= htmlspecialchars($price[0]) ?></span>
													</td>
													<td class="prices__table_cost">
														<p><span>Цена: </span><?= htmlspecialchars($price[1]) ?></p>
													</td>
													<td class="prices__table_btn">
														<button class="primary-btn popup-btn change-item__btn" data-path="popup-change">
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
			</div>
		</section>

<?
		break;
endswitch;
?>