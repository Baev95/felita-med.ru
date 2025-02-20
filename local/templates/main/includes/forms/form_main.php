<form class="popup-change__form">

    <?
    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array('data' => $data), array('SHOW_BORDER' => false));
    ?>

    <div class="input-wrapper">
        <input type="text" name="params[name][]" class="input popup-change__input" placeholder="Ваше имя" required>
        <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
    </div>

    <div class="input-wrapper">
        <input type="tel" name="params[phone][]" class="input popup-change__input" placeholder="+7 (___) ___-__-__" required>
        <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
    </div>

    <button type="submit" class="primary-btn popup-change__btn request-send-btn"><span>Отправить</span></button>
    <p class="politic popup-change__politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
</form>
