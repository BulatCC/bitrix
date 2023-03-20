<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="contact-us">
    <div class="container">
        <div class="content contact-us_content">
            <div class="grid-2">
                <div>
                    <h2 class="title contact-us_title">Связь с нами</h2>
                    <p class="paragraph">У вас остались вопросы? Напишите нам - мы ответим в ближайшее время!</p>
                    <div class="contact-us_contacts-wrap">
                        <a class="info-item" href="tel: +71112223344">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/smartphone-white.svg" alt="смартфон" width="17" height="30">
                            <span class="info-item_text contact-us_info-item_text">8 (111) 222-33-44</span>
                        </a>
                        <a class="info-item" href="mailto:order@buhone.ru">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/markup/img/svg/envelope-white.svg" alt="конверт" width="40" height="30">
                            <span class="info-item_text contact-us_info-item_text">order@buhone.ru</span>
                        </a>
                    </div>
                </div>
                <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="form" data-form>
                    <? if (!empty($arResult["ERROR_MESSAGE"])) {
                        foreach ($arResult["ERROR_MESSAGE"] as $v)
                            ShowError($v);
                    }
                    if ($arResult["OK_MESSAGE"] <> '') {
                        ?>
                        <div class="mf-ok-text">
                            <?= $arResult["OK_MESSAGE"] ?>
                        </div>
                        <?
                    }
                    ?>
                    <?= bitrix_sessid_post() ?>
                    <div class="sub-grid-2">
                        <div class="form_wrap">
                            <span class="form_name">Email</span>
                            <input class="form_input" type="email" name="user_email" placeholder="email" data-email
                                value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                            <span class="form_error">Некорректный Email</span>
                        </div>
                        <div class="form_wrap">
                            <span class="form_name">Телефон</span>
                            <input class="form_input" type="tel" name="user_phone" value="+7"
                                placeholder="+7(000)000-00-00" value="<?= $arResult["AUTHOR_PHONE"] ?>" data-tel>
                            <span class="form_error">Некорректный номер телефона</span>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <span class="form_name">Сообщение</span>
                        <textarea class="form_input" name="MESSAGE" rows="4" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <input class="button form_button" type="submit" name="submit" data-submit-button
                        value="<?= GetMessage("MFT_SUBMIT") ?>">
                </form>

            </div>
        </div>
    </div>
</div>
