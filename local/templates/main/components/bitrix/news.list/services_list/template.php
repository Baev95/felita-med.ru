<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="container">
	<div class="error__links">
		<p>Или попробуйте найти то, что вам нужно в следующих направлениях:</p>
		<ul>
			<?
			foreach ($arResult["ITEMS"] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<li><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
						<span><?= $arItem['NAME'] ?></span>
						<div class="error__btn-circle btn-circle"></div>
					</a></li>
			<? endforeach; ?>
		</ul>
	</div>
</div>