<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты клиники"); ?>

<?
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/contacts/index.php', array("title" => false),    array('SHOW_BORDER' => false));
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>