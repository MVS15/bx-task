<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список групп");

//global $USER;

//$USER->Authorize(1);
?>

<? $APPLICATION->IncludeComponent('custom:groups', '', [
	'CACHE_TIME' => 3600,
	'SEF_MODE' => 'Y',
	'SEF_FOLDER' => '/groups/'
]); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>