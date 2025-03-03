<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$this->setFrameMode(true);
?>
<? foreach ($arResult as $item) : ?>
	<? if ($item["DEPTH_LEVEL"] == 1) : ?>
		<? if ($item['IS_PARENT']) : ?>
			<li class="header__nav_item header__nav_about hide-item">
				<button class="hide-item__link"><?= $item['TEXT'] ?></button>
				<div class="header__submenu submenu-3">
					<ul>
						<? foreach ($arResult as $sub_item) : ?>
							<? if ($sub_item["DEPTH_LEVEL"] == 2) : ?>
								<li class="header__sublink">
									<img src="<?= $sub_item['PARAMS']['ICON'] ?>" alt="<?= $sub_item['TEXT'] ?>">
									<a href="<?= $sub_item['LINK'] ?>"><?= $sub_item['TEXT'] ?></a>
								</li>
							<? endif ?>
						<? endforeach ?>
					</ul>
				</div>
			</li>
		<? else : ?>
			<li class="header__nav_item">
				<a href="<?= $item['IS_PARENT'] ? 'javascript:void(0)' : $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
			</li>
		<? endif ?>
	<? endif ?>
<? endforeach ?>