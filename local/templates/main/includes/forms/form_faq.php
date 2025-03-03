<div class="faq__form">
    <div class="faq__form_text">
        <p class="faq__form_title">Не нашли ответа на вопрос? Задайте его нашим специалистам</p>
        <p class="faq__form_subtitle">Задайте интересующий вас вопрос, и наши врачи на него ответят</p>
    </div>

    <form class="faq__form_inputs">
        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array('data' => $data), array('SHOW_BORDER' => false));
        ?>
        <div class="input-wrapper">
            <input type="text" name="params[name][]" class="input input-white faq__form_input" placeholder="Имя" required>
            <button class="input-clear"><img src="as<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
        </div>

        <div class="input-wrapper">
            <input type="tel" name="params[phone][]" class="input input-white faq__form_input" placeholder="Номер телефона" required>
            <button class="input-clear"><img src="as<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
        </div>

        <textarea class="faq__form_textarea textarea textarea-white" placeholder="Вопрос"></textarea>

        <button type="submit" class="primary-btn faq__form_btn request-send-btn"><span>Перезвонить мне</span></button>
        <p class="politic politic-white faq__form_politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
    </form>
</div>