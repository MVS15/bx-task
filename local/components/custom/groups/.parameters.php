<?
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

	$arComponentParameters = [
		'PARAMETERS' => [
			'PAGE_TITLE' => [
				'NAME' => 'Название страницы', 
				'TYPE' => 'STRING',
				'DEFAULT' => 'Список групп'
			],
			'TTL' => [
				'NAME' => 'Время кэша', 
				'TYPE' => 'STRING',
				'DEFAULT' => '3600'
			],
		]
	];
?>
