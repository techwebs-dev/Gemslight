<?
header('Content-Type: text/css');
$content = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/accorsys.localization/js/inapp_store.css');
echo $content;
die();