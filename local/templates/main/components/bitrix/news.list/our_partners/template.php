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
    <div class="slider">
        <a class="crumbs-link" href="<?= $arResult['LIST_PAGE_URL'] ?>">
            <?= $arResult["NAME"] ?>
        </a>
        <h2 class="title slider_title">
            <?= $arResult['DESCRIPTION'] ?>
        </h2>
            <div class="swiper" data-slider>
                <div class="swiper-wrapper">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <? $imgList = $arItem['PROPERTIES']['img_file']['VALUE']; ?>
                        <div class="swiper-slide slider_slide">
                            <div class="grid-4 grid-2-mobile">
                                <? if (!empty($imgList)): ?>
                                    <? foreach ($imgList as $imgId): ?>
                                        <img src="<?= CFile::GetPath($imgId) ?>">
                                    <? endforeach; ?>
                                <? endif; ?>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="slider_container">
                    <div class="swiper-pagination slider_pagination slider_pagination--blue"></div>
                    <div class="slider_buttons">
                        <button class="swiper-button-prev slider_button slider_button--blue slider_button--prev">
                            <img class="slider_button-img"
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/slider-arrow-left.svg" alt="назад"
                                width="8" height="15">
                        </button>
                        <button class="swiper-button-next slider_button slider_button--blue slider_button--next">
                            <img class="slider_button-img"
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/slider-arrow-right.svg" alt="вперед"
                                width="8" height="15">
                        </button>
                    </div>
                </div>
        </div>
    <? endif; ?>

