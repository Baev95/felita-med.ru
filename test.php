<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("тест"); ?><?$APPLICATION->IncludeComponent(
	"vision:vision.special",
	"",
Array()
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>