<? if ($_SERVER['DOCUMENT_URI'] == "/404.php") {
 $_SERVER['REQUEST_URI'] = $_SERVER['DOCUMENT_URI'];
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
$APPLICATION->SetPageProperty("CACHE_TIME", "0");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
header("HTTP/1.1 404 Not Found");
$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty("TITLE", "404 Not Found");
$APPLICATION->SetPageProperty("keywords", "Страница не найдена");
$APPLICATION->SetPageProperty("description", "Страница не найдена");
?>

<section class="error section-offset">
	<div class="error__inner">
		<picture class="bg">
			<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/error/error-bg.webp" type="image/webp">
			<img src="<?= SITE_TEMPLATE_PATH ?>/images/error/error-bg.jpg">
		</picture>

		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="/">Главная</a></li>
			</ul>
			<div class="error__top">
				<p class="error__number">404</p>
				<div class="error__text">
					<p>Страница не найдена</p>
					<p class="error__text-bottom">К сожалению, страница, которую вы ищете не существует</p>
					<a href="/" class="secondary-btn">Вернуться на главную</a>
				</div>
			</div>
		</div>
	</div>

	<section class="site-map section-offset">
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"services_list",
			array(
				"ACTIVE_DATE_FORMAT" => "d.M.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "5",
				"IBLOCK_TYPE" => "detail_pages",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "30",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "services_list"
			),
			false
		);
		?>
	</section>


	<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>