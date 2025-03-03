<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

function getParentSections($section_id)
{

	$result = array();

	$nav = CIBlockSection::GetNavChain(false, $section_id);
	while ($v = $nav->GetNext()) {

		if ($v['ID']) {
			Bitrix\Main\Diag\Debug::writeToFile('ID => ' . $v['ID']);
			Bitrix\Main\Diag\Debug::writeToFile('NAME => ' . $v['NAME']);
			Bitrix\Main\Diag\Debug::writeToFile('DEPTH_LEVEL => ' . $v['DEPTH_LEVEL']);
			$result[] = $v['ID'];
		}
	}

	return $result;
}