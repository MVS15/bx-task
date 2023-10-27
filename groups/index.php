<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список групп");

//global $USER;

//$USER->Authorize(1);
?><?$APPLICATION->IncludeComponent(
	"custom:groups",
	"",
	Array(
		"PAGE_TITLE" => "Группы, список",
		"SEF_FOLDER" => "/groups/",
		"SEF_MODE" => "Y",
		"TTL" => "160"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>