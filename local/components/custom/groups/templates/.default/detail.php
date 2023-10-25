<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<? $APPLICATION->IncludeComponent('custom:groups.detail', '', ['GROUP_ID' => $arResult['GROUP_ID']]); ?>