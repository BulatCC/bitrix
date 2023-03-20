<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Кейсы");
?>
<section class="content">
    <div class="container">
        <?
        require($_SERVER['DOCUMENT_ROOT'] . '/local/templates/main/case.php');
        ?>
    </div>
</section>
<? $APPLICATION->IncludeComponent(
    "customForm:main.feedback",
    "",
    array(
        "AJAX_MODE" => "Y",
        "EMAIL_TO" => "test@test.ru",
        "EVENT_MESSAGE_ID" => array(),
        "OK_TEXT" => "Спасибо, ваше сообщение принято",
        "REQUIRED_FIELDS" => array("PHONE", "EMAIL"),
        "USE_CAPTCHA" => "N"
    )
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
