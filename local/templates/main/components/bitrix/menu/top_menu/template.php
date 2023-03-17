<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); 
?>

<? if (!empty($arResult)): ?>
    <div class="header_nav" data-burger-menu>
        <nav class="nav">
            <? foreach ($arResult as $arItem):?>
                <? if ($arItem["SELECTED"]): ?>
                    <a class="nav_link active" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <? else: ?>
                    <a class="nav_link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <? endif ?>

            <? endforeach ?>
        </nav>
    </div>
<? endif ?>
