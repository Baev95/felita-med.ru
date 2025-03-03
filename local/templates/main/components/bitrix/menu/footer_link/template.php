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
$services = $about = $other = "";

if ($arParams['WHERE'] === 'MAP') {

	$other = <<<HTML
<div class="site-map__items">
<ul>
HTML;
	foreach ($arResult as $item) : ?>
<? if ($item['TEXT'] == 'Услуги') {
			if (CModule::IncludeModule("iblock")) {
				$rsSelect = CIBlockSection::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5], ['ELEMENT_SUBSECTIONS' => 'Y'], false, []);
				foreach ($rsSelect->arResult as $item) {
					if ($item['ELEMENT_CNT'] > 0) {
						$services .= <<<HTML
			<div class="site-map__item">
				<div class="site-map__accordion accordion">
					<div class="site-map__item_top ">
						<p class="site-map__item_title">{$item['NAME']}</p>
					</div>
				</div>
				<div class="site-map__item_list accordion__content">
					<ul>
			HTML;
						$rsElements = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5, 'IBLOCK_SECTION_ID' => $item['ID']], false, false, ['CODE', 'NAME', 'PROPERTY_PRICE']);
						while ($arElement = $rsElements->GetNext()) {
							$services .= <<<HTML
			<li>
				<a href="/services/{$arElement['CODE']}/">{$arElement['NAME']}</a>
			</li>
			HTML;
						}
						$services .= <<<HTML
					</ul>
				</div>
			</div>
			HTML;
					};
				}
			}
		} elseif ($item['TEXT'] == 'О клинике') {
			$about = <<<HTML
			<div class="site-map__item">
				<div class="site-map__accordion accordion">
					<div class="site-map__item_top ">
						<p class="site-map__item_title">{$item['TEXT']}</p>
					</div>
				</div>
				<div class="site-map__item_list accordion__content">
					<ul>
			HTML;
			foreach ($arResult as $sub_item): ?>
		<? if ($sub_item["DEPTH_LEVEL"] == 2):
					$about .=  <<<HTML
				<li>
				<a href="/services/{$sub_item['LINK']}">{$sub_item['TEXT']}</a>
				</li>
				HTML;

				endif ?>
<? endforeach;
			$about .=  <<<HTML
					</ul>
				</div>
			</div>
			HTML;
		} else {
			if ($item["DEPTH_LEVEL"] == 1) :
				$other .= <<<HTML
				<li>
				<a href="/services/{$item['LINK']}/">{$item['TEXT']}</a>
				</li>
				HTML;
			endif;
		}
	endforeach;
	$other .= <<<HTML
	</ul>
</div>
HTML;
} elseif ($arParams['WHERE'] === 'FOOTER') {

	foreach ($arResult as $item) : ?>
<? if ($item['TEXT'] == 'Услуги') {
			if (CModule::IncludeModule("iblock")) {
				$rsSelect = CIBlockSection::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5], ['ELEMENT_SUBSECTIONS' => 'Y'], false, []);
				foreach ($rsSelect->arResult as $item) {
					if ($item['ELEMENT_CNT'] > 0) {
						$services .= <<<HTML
				<div class="footer__nav_item">
				<p class="footer__nav_acc">{$item['NAME']}</p>
				<ul>
			HTML;
						$rsElements = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5, 'IBLOCK_SECTION_ID' => $item['ID']], false, false, ['CODE', 'NAME', 'PROPERTY_PRICE']);
						while ($arElement = $rsElements->GetNext()) {
							$services .= <<<HTML
			<li>
				<a href="/services/{$arElement['CODE']}/">{$arElement['NAME']}</a>
			</li>
			HTML;
						}
						$services .= <<<HTML
					</ul>
				</div>
			HTML;
					};
				}
			}
		} elseif ($item['TEXT'] == 'О клинике') {
			$about = <<<HTML
			<div class="footer__nav_item footer__nav_item-menu">
					<ul>
			HTML;
			foreach ($arResult as $sub_item): ?>
		<? if ($sub_item["DEPTH_LEVEL"] == 2):
					$about .=  <<<HTML
				<li>
				<a href="{$sub_item['LINK']}">{$sub_item['TEXT']}</a>
				</li>
				HTML;
				endif ?>
<? endforeach;
		} else {
			if ($item["DEPTH_LEVEL"] == 1) :
				$about .= <<<HTML
				<li>
				<a href="{$item['LINK']}">{$item['TEXT']}</a>
				</li>
				HTML;
			endif;
		}
	endforeach;
	$about .=  <<<HTML
					<li>
				<a href="/services/">Услуги</a>
				</li>
					$other
				</ul>
			</div>
			HTML;
}

echo $services;
echo $about;
echo $other;

?>