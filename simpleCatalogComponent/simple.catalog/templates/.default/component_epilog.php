<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use \Bitrix\Main\Localization\Loc;

$APPLICATION->SetTitle(Loc::getMessage('PAGE_TITLE') . $arResult['ELEMENT_COUNT']);
?>