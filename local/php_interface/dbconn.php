<?php
$DBDebug = false;
$DBDebugToFile = false;

define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~(BX_FILE_PERMISSIONS | BX_DIR_PERMISSIONS) & 0777);
setcookie("PHPSESSID", "", 777, '/', '.alkogolizm-klinika.local');

define("BX_DISABLE_INDEX_PAGE", true);

mb_internal_encoding("UTF-8");
