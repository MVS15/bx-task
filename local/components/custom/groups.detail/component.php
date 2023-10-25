<? 
	use Bitrix\Main\GroupTable;
	
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
		
	$arResult['GROUP'] = [];
		
	$group = GroupTable::getRow([
		'select' => ['ID', 'NAME', 'DESCRIPTION'],
		'filter' => ['ID' => $arParams['GROUP_ID']]
	]);
	
	$arResult['GROUP'] = $group;
	
	$this->IncludeComponentTemplate();
?>