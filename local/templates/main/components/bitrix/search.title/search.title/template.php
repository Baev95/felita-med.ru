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

$INPUT_ID = trim($arParams["~INPUT_ID"]);
if ($INPUT_ID == '')
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if ($CONTAINER_ID == '')
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-' . $arParams['TEMPLATE_THEME'] : '';

if (isset($arParams['TEXT']) && !empty($arParams['TEXT'])) {
	$placeholder = "Поиск по статьям";
} else {
	$placeholder = "Поиск по сайту";
}

if ($arParams["SHOW_INPUT"] !== "N"): ?>
	<div id="<? echo $CONTAINER_ID ?>" class="bx-searchtitle <?= $themeClass; ?>">
		<form class="header__search" action="<? echo $arResult["FORM_ACTION"] ?>">
			<input id="<? echo $INPUT_ID ?>" type="text" name="q" value="<?= htmlspecialcharsbx($_REQUEST["q"] ?? '') ?>" required placeholder="<?= $placeholder ?>" autocomplete=" off" class="form-control input" />
			<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/search.svg" class="header__search-icon">
		</form>
	</div>
	<div class="popup__search">
	</div>
<? endif ?>
<script>
	BX.ready(function() {
		new JCTitleSearch({
			'AJAX_PAGE': '<? echo CUtil::JSEscape(POST_FORM_ACTION_URI) ?>',
			'CONTAINER_ID': '<? echo $CONTAINER_ID ?>',
			'INPUT_ID': '<? echo $INPUT_ID ?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>