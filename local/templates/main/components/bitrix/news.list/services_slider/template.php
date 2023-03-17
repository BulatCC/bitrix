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

<? if (!empty($arResult["ITEMS"])): ?>
    <div class="slider slider--full-bg">
        <div class="swiper" data-slider>
            <div class="swiper-wrapper">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    // echo '<pre>';
                    // print_r($arItem);
                    // '</pre>';
                    ?>
                    <div class="swiper-slide slider_slide"
                        style="--bg-img:url(<?= isset($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : '' ?>);">
                        <div class="slider_content">
                            <div class="container">
                                <h2 class="title color-white slider_title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : '' ?></h2>
                                <? if (isset($arItem["DETAIL_TEXT"]) && isset($arItem["PROPERTIES"]["link"]["VALUE"])): ?>
                                    <a class="button" href="<?= $arItem["PROPERTIES"]["link"]["VALUE"] ?>">
                                    <?= $arItem["DETAIL_TEXT"] ?>
                                </a>
                                <? endif; ?>
 
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

            <div class="container slider_container">
                <div class="swiper-pagination slider_pagination"></div>
                <div class="slider_buttons">
                    <button class="swiper-button-prev slider_button slider_button--prev"><img class="slider_button-img"
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/slider-arrow-left.svg" alt="назад" width="8" height="15"></button>
                    <button class="swiper-button-next slider_button slider_button--next"><img class="slider_button-img"
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/slider-arrow-right.svg" alt="вперед" width="8" height="15"></button>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>
