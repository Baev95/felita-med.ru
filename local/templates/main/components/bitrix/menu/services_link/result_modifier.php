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
$arr_parent = $arr_child =  [];
$i = 0;
if (CModule::IncludeModule("iblock")) {
    $arr_html = $arr_tabs = [];
    foreach ($arResult as $item) {
        if ($item['PARAMS']['ELEMENT_CNT'] > 0) {
            $class = $i == 0 ? "active" : "";
            $arr_tabs[] = <<<HTML
			<button class="header__submenu_tab-btn $class" data-id="{$item['PARAMS']['ID']}">
				{$item['TEXT']}
			</button>
		HTML;
        }
        $class = $i++ == 0 ? "active" : "";
        $arr_child[$item['PARAMS']['ID']] .= <<<HTML
			<div class="header__submenu_tab-contents">
				<div class="header__submenu_tab-content $class" data-id="{$item['PARAMS']['ID']}">
					<ul class="header__tab-content_list">
			HTML;
        if ($item['PARAMS']['ELEMENT_CNT'] > 0) {
            $rsElements = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5, 'IBLOCK_SECTION_ID' => $item['PARAMS']['ID']], false, false, ['CODE', 'NAME', 'PROPERTY_PRICE']);
            while ($arElement = $rsElements->GetNext()) {
                if ($arElement['PROPERTY_PRICE_VALUE']) {
                    $price = "<span>{$arElement['PROPERTY_PRICE_VALUE']}</span>";
                }
                $arr_child[$item['PARAMS']['ID']] .= <<<HTML
					<li>
						<a href="/services/{$arElement['CODE']}/" class="header__tab-content_title">{$arElement['NAME']}</a>
							$price
						</a>
					</li>
				HTML;
            }
        }
        $arr_child[$item['PARAMS']['ID']] .= <<<HTML
					</ul> 	
				</div>	
			</div>		
			HTML;
    };
}
