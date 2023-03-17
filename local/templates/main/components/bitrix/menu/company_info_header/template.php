<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); 
?>

<? if (!empty($arResult)): ?>
    <ul class="header_list">
        <? foreach ($arResult as $arItem): ?>
            <li class="header_list-item">
                <? if (!empty($arItem["LINK"])): ?>
                    <a class="info-item" href="<?= $arItem["LINK"] ?>">
                        <img src="<?= SITE_TEMPLATE_PATH . $arItem["ADDITIONAL_LINKS"][0] ?>" 
                        width="<?= $arItem["PARAMS"]["icon_width"] ?>" height="<?= $arItem["PARAMS"]["icon_height"] ?>">
                        <span class="info-item_text laptop-hide"><?= $arItem["TEXT"] ?></span>
                    </a>
                <? else : ?>
                    <span class="info-item">
                        <img src="<?= SITE_TEMPLATE_PATH . $arItem["ADDITIONAL_LINKS"][0] ?>" 
                        width="<?= $arItem["PARAMS"]["icon_width"] ?>" height="<?= $arItem["PARAMS"]["icon_height"] ?>">
                        <span class="info-item_text laptop-hide"><?= $arItem["TEXT"] ?></span>
                    </span>
                <? endif ?>
            </li>
        <? endforeach ?>
    </ul>


<? endif ?>

