<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>


<section class="section-offset">
	<div class="container">
		<ul class="search-page popup-city__list_result">
			<?php if (count($arResult["SEARCH"]) > 0): /* если что-то найдено */ ?>
				<?php if ($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]; /* постраничная навигация вверху */ ?>

				<?php foreach ($arResult["SEARCH"] as $arItem): ?>

					<li>
						<a href="<?= $arItem["URL"]; ?>" class="search-name header__search_item"><?= $arItem["TITLE_FORMATED"]; ?></a>
						<p><?= $arItem["BODY_FORMATED"]; ?></p>
					</li>
				<?php endforeach; ?>

				<?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]; /* постраничная навигация внизу */ ?>
			<?php else: ?>
				<p><?= GetMessage("SEARCH_NOTHING_TO_FOUND"); /* ничего не найдено */ ?></p>
			<?php endif; ?>
		</ul>
	</div>
</section>