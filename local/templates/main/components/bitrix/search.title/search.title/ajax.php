<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult["CATEGORIES"]) || !$arResult['CATEGORIES_ITEMS_EXISTS'])
	return;
?>
<ul class="search-list popup__search_list popup-city__list_result">
	<? foreach ($arResult["CATEGORIES"] as $category_id => $arCategory): ?>
		<? foreach ($arCategory["ITEMS"] as $i => $arItem): ?>
			<? if ($category_id === "all"):
			?>

			<? elseif (isset($arResult["ELEMENTS"][$arItem["ITEM_ID"]])):
				$arElement = $arResult["ELEMENTS"][$arItem["ITEM_ID"]]; ?>
				<div class="search-title-result-item py-2 d-flex align-items-center">

					<? if (is_array($arElement["PICTURE"])): ?>
						<div class="search-title-result-item-image-container pr-2">
							<div class="search-title-result-item-image"
								style="
								 background-image: url('<? echo $arElement["PICTURE"]["src"] ?>');
								 width:<?= $arElement["PICTURE"]["width"] ?>px;
								 height:<?= $arElement["PICTURE"]["height"] ?>px;
								 ">
							</div>
						</div>
					<? endif; ?>

					<div class="search-title-result-item-info flex-grow-1">
						<a class="search-title-result-item-link" href="<? echo $arItem["URL"] ?>"><? echo $arItem["NAME"] ?></a>
						<?
						foreach ($arElement["PRICES"] as $code => $arPrice) {
							if ($arPrice["MIN_PRICE"] != "Y")
								continue;

							if ($arPrice["CAN_ACCESS"]) {
								if ($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]): ?>
									<div class="search-title-result-item-price">
										<span class="search-title-result-item-current-price text-primary"><?= $arPrice["PRINT_DISCOUNT_VALUE"] ?></span>
										<span class="search-title-result-item-old-price text-muted"><?= $arPrice["PRINT_VALUE"] ?></span>
									</div>
								<? else: ?>
									<div class="search-title-result-item-price">
										<span class="search-title-result-item-current-price text-primary"><?= $arPrice["PRINT_VALUE"] ?></span>
									</div>
						<? endif;
							}
							if ($arPrice["MIN_PRICE"] == "Y")
								break;
						}
						?>
					</div>
				</div>
			<? else: ?>
				<li><a href="<? echo $arItem["URL"] ?>" class="search-name header__search_item">
						<p class="header__search_name"><? echo $arItem["NAME"] ?></p>
						<div class="header__search_item-bottom">
							<p><?= $arCategory['TITLE'] ?></p>
						</div>
					</a></li>
			<? endif; ?>
		<? endforeach; ?>
	<? endforeach; ?>
</ul>