<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<h2 class="title"><?= $arResult['DESCRIPTION']?></h2>
<div class="grid-3">
    <? if (!empty($arResult["ITEMS"])): ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <a class="service-card" href="<?= isset($arItem["PROPERTIES"]["link"]["VALUE"]) ? $arItem["PROPERTIES"]["link"]["VALUE"]: '' ?>">
                <img class="service-card_img" src="<?= isset($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : '' ?>">
                <div class="service-card_content">
                    <h3 class="service-card_title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : '' ?></h3>
                </div>
            </a>
        <? endforeach; ?>
    <? endif; ?>
</div>
