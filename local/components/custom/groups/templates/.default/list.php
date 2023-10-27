<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<? $APPLICATION->SetTitle($arResult['PAGE_TITLE']); ?>

<table width="100%">
	<? foreach ($arResult['GROUPS'] as $group): ?>
		<tr>
			<td><?php echo $group['ID']; ?></td>
			<td><a href="<? echo $arResult['SEF_FOLDER'].$group['ID']; ?>/"><?php echo $group['NAME']; ?></td>
		</tr>
	<? endforeach; ?>
</table>