<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
?>


<section class="site-map section-offset">
	<div class="container">
		<div class="site-map__grid">
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"footer_link",
				array(
					"ALLOW_MULTI_SELECT" => "Y",
					"CHILD_MENU_TYPE" => "subtop",
					"DELAY" => "N",
					"MAX_LEVEL" => "3",
					"MENU_CACHE_GET_VARS" => array(),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_THEME" => "site",
					"ROOT_MENU_TYPE" => "footer",
					"USE_EXT" => "Y",
					"COMPONENT_TEMPLATE" => "footer_link",
					"WHERE" => 'MAP'
				),
				false,
				["HIDE_ICONS" => "Y"]
			); ?>
		</div>
	</div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>