<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>



<!DOCTYPE html>

<body>

    <html lang="ru">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <? $APPLICATION->ShowTitle(); ?>
        </title>
        <link rel="apple-touch-icon" sizes="180x180"
            href="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"
            href="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16"
            href="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/favicon/safari-pinned-tab.svg"
            color="#737a7c">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta meta name="theme-color" content="#ffffff">

        <? $APPLICATION->ShowHead() ?>
        <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/markup/css/style.min.css');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/markup/js/main.min.js');
        Asset::getInstance()->addString(`<link rel="preload" href="$SITE_TEMPLATE_PATH/assets/markup/fonts/Lato-Black.woff2" as="font" crossorigin="anonymous">`);
        Asset::getInstance()->addString(`<link rel="preload" href="$SITE_TEMPLATE_PATH/assets/markup/fonts/Lato-Bold.woff2" as="font" crossorigin="anonymous">`);
        Asset::getInstance()->addString(`<link rel="preload" href="$SITE_TEMPLATE_PATH/assets/markup/fonts/Lato-Light.woff2" as="font" crossorigin="anonymous">`);
        Asset::getInstance()->addString(`<link rel="preload" href="$SITE_TEMPLATE_PATH/assets/markup/fonts/Merriweather-Black.woff2" as="font" crossorigin="anonymous">`);
        Asset::getInstance()->addString(`<link rel="preload" href="$SITE_TEMPLATE_PATH/assets/markup/fonts/Merriweather-Bold.woff2" as="font" crossorigin="anonymous">`);
        ?>
    </head>

    <body>
        <div id="panel">
            <? $APPLICATION->ShowPanel(); ?>
        </div>

        <div class="site-wrapper">
            <header class="container">
                <div class="header_container">
                    <button class="burger header_burger" type="button" data-burger>
                        <span class="burger_open"></span>
                        <span class="burger_close"></span>
                    </button>
                    <div class="header_logo-container">
                        <? if ($APPLICATION->GetCurDir() === '/'): ?>
                            <span class="logo">
                                <img class="logo_img" src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/logo.svg"
                                    alt="Логотип" width="40" height="40">
                                <span class="logo_text">BuhOne</span>
                            </span>
                        <? else: ?>
                            <a href="/" class="logo">
                                <img class="logo_img" src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/logo.svg"
                                    alt="Логотип" width="40" height="40">
                                <span class="logo_text">BuhOne</span>
                            </a>
                        <? endif; ?>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "company_info_header",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => "info_top",
                            "USE_EXT" => "N",
                        ),
                        false
                    ); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "top_menu"
                        ),
                        false
                    ); ?>

                </div>
            </header>
