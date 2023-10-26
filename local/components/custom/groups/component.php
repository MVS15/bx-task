<? 
	use Bitrix\Main\GroupTable;
	
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
		
	$arResult = ['SEF_FOLDER' => $arParams['SEF_FOLDER']];
	$arVariables = [];
	
	$arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates([
		'list' => 'index.php',
		'detail' => '#GROUP_ID#',
	], []);
	
	$componentPage = CComponentEngine::ParseComponentPath(
		$arParams['SEF_FOLDER'],
		$arUrlTemplates,
		$arVariables
	);
	
	if (strlen($componentPage) <= 0) $componentPage = 'list';
	
	CComponentEngine::InitComponentVariables($componentPage, ['GROUP_ID'], [], $arVariables);
	
	if ($componentPage == 'detail') {
		$arResult['GROUP_ID'] = $arVariables['GROUP_ID'];
	} else {
		$arResult['GROUPS'] = [];
		
		$groups = GroupTable::getList([
			'select' => ['ID', 'NAME'],
			'cache' => ['ttl' => $arParams['CACHE_TIME']]
		]);
		
		while ($group = $groups->fetch()) {
			$arResult['GROUPS'][] = $group;
		}
	}
	
	$this->IncludeComponentTemplate($componentPage);
?>