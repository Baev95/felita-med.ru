<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("3D тур по клинике");
?>

<?
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/pages/3d.php', array(), array('SHOW_BORDER' => false));
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>