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


// var_dump($arResult);

if (CModule::IncludeModule("iblock")) {
	$arr_html = $arr_tabs = [];
	foreach ($arResult as $item) {
		$class = $i == 0 ? "active" : "";
		$arr_tabs[] = <<<HTML
			<button class="header__submenu_tab-btn $class" data-id="{$item['PARAMS']['ID']}">
				{$item['TEXT']}
			</button>
		HTML;
		$class = $i++ == 0 ? "active" : "";
		$arr_child[$item['PARAMS']['ID']] .= <<<HTML
			<div class="header__submenu_tab-contents">
				<div class="header__submenu_tab-content $class" data-id="{$item['PARAMS']['ID']}">
					<ul class="header__tab-content_list">
			HTML;

		if ($item['PARAMS']['ELEMENT_CNT'] > 0) {
			$rsElements = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5, 'IBLOCK_SECTION_ID' => $item['PARAMS']['ID']], false, false, []);
			while ($arElement = $rsElements->GetNext()) {
				$arr_child[$item['PARAMS']['ID']] .= <<<HTML
					<a href="/services/{$arElement['CODE']}/" class="header__tab-content_title">{$arElement['NAME']}</a>
				HTML;
			}
		}
		$sections = CIBlockSection::GetList(array("SORT" => "ASC"), ["SECTION_ID" => $item['PARAMS']['ID']], true, []);
		while ($arSection = $sections->GetNext()) {
			if ($arSection['ELEMENT_CNT'] > 0) {
				$arr_child[$item['PARAMS']['ID']] .= <<<HTML
						<li>
							<p>{$arSection['NAME']}</p>
							<div class="header__submenu_tab-content_item">
				HTML;
				$rsElements = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 5, 'IBLOCK_SECTION_ID' => $arSection['ID']], false, false, []);
				while ($arElement = $rsElements->GetNext()) {
					$arr_child[$item['PARAMS']['ID']] .= <<<HTML
					<a href="/services/{$arElement['CODE']}/">{$arElement['NAME']}</a>
				HTML;
				}
				$arr_child[$item['PARAMS']['ID']] .= <<<HTML
								</div>
								<button class="header__submenu_more-btn">Еще</button>
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


/*
?>








					<div class="header__submenu_tab-content active" style="order: 2">
						<ul class="header__tab-content_list">
							<li>
								<a href="#" class="header__tab-content_title">
									Лечение наркомании
									<span>от 5 000 руб</span>
								</a>
							</li>
							<li>
								<a href="#" class="header__tab-content_title">
									тест Наркомания
									<span>от 5 000 руб</span>
								</a>
							</li>
						</ul>
					</div>



















<li class="header__nav_item header__nav_service hide-item">
	<button class="hide-item__link hide-item_service">
		<div class="header__nav_service-span">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span>Услуги</span>
	</button>
	<div class="header__submenu service-subsubmenu-2">
		<div class="service-subsubmenu-2__row">
			<div class="header__submenu_tabs tab">
				<div class="header__submenu_tab-btns">
					<?= implode($arr_tabs); ?>
				</div>
				<div class="header__submenu_tab-contents">
					<?= implode($arr_child); ?>
				</div>
			</div>
			<!-- <div class="header__submenu_stocks">
				<div class="header__stock">
					<div>
						<p class="header__stock_date">Действует до 23.05.2024</p>
						<p class="header__stock_title">Скидка на услуги до 15%</p>
						<p class="header__stock_subtitle">
							Наши доктора помогают избавиться пациентам от
							хронических зависимостей. Повышаем качество жизни
							клиентов, их родственников, родных и близких.
						</p>
					</div>
					<div class="header__stock_link">
						<a href="#" class="btn-circle"></a>
					</div>
				</div>

				<div class="header__stock">
					<div>
						<p class="header__stock_date">Действует до 23.05.2024</p>
						<p class="header__stock_title">Скидка на услуги до 15%</p>
						<p class="header__stock_subtitle">
							Наши доктора помогают избавиться пациентам от
							хронических зависимостей. Повышаем качество жизни
							клиентов, их родственников, родных и близких.
						</p>
					</div>
					<div class="header__stock_link">
						<a href="#" class="btn-circle"></a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</li>











					<div class="header__submenu_tab-content active" style="order: 2">
						<ul class="header__tab-content_list">
							<li>
								<a href="#" class="header__tab-content_title">
									Лечение наркомании
									<span>от 5 000 руб</span>
								</a>
							</li>
							<li>
								<a href="#" class="header__tab-content_title">
									тест Наркомания
									<span>от 5 000 руб</span>
								</a>
							</li>
						</ul>
					</div>


*/ ?>



















<li class="header__nav_item header__nav_service hide-item">
	<button class="hide-item__link hide-item_service">
		<div class="header__nav_service-span">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span>Услуги</span>
	</button>
	<!--  Меню 2-го уровня: service-submenu-1 (3 варианта) -->
	<!--  Меню 3-го уровня: service-subsubmenu-1 (3 варианта) -->
	<!-- service-submenu-1 -->
	<div class="header__submenu service-submenu-1">
		<div class="container service-submenu-1__row">
			<div class="header__submenu_tabs">
				<div class="header__submenu_tab-btns">

					<?= implode($arr_tabs); ?>

				</div>

				<div class="header__submenu_tab-contents">

					<?= implode($arr_child); ?>

				</div>
			</div>

			<!-- <div class="header__submenu-wrapper">
				<div class="header__submenu_stocks">
					<div class="header__stock">
						<div>
							<p class="header__stock_date">Действует до 23.05.2024</p>
							<p class="header__stock_title">Скидка на услуги до 15%</p>
							<p class="header__stock_subtitle">
								Наши доктора помогают избавиться пациентам от
								хронических зависимостей. Повышаем качество жизни
								клиентов, их родственников, родных и близких.
							</p>
						</div>
						<a href="#" class="header__stock_link btn-arrow"><span>Подробнее</span></a>
					</div>

					<div class="header__stock">
						<div>
							<p class="header__stock_date">Действует до 23.05.2024</p>
							<p class="header__stock_title">Скидка на услуги до 15%</p>
							<p class="header__stock_subtitle">
								Наши доктора помогают избавиться пациентам от
								хронических зависимостей. Повышаем качество жизни
								клиентов, их родственников, родных и близких.
							</p>
						</div>
						<a href="#" class="header__stock_link btn-arrow"><span>Подробнее</span></a>
					</div>

					<div class="header__stock">
						<div>
							<p class="header__stock_date">Действует до 23.05.2024</p>
							<p class="header__stock_title">Скидка на услуги до 15%</p>
							<p class="header__stock_subtitle">
								Наши доктора помогают избавиться пациентам от
								хронических зависимостей. Повышаем качество жизни
								клиентов, их родственников, родных и близких.
							</p>
						</div>
						<a href="#" class="header__stock_link btn-arrow"><span>Подробнее</span></a>
					</div>
				</div>
			</div> -->

		</div>
	</div>
</li>