<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

//delayed function must return a string
if (empty($arResult))
	return "";

$strReturn .= '<ul class="breadcrumbs">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0 ? '' : '');

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '<li><a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a></li>';
	} else {
		$strReturn .= '<li>' . $title . '</li>';
	}
}

$strReturn .= '</ul>';

return $strReturn;
