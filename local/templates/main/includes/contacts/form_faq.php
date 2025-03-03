<div class="faq__block faq__block_form">
    <form class="faq__form" data-modal-open="open" data-modal-ok=".popup-call-ok .result-wrapper" data-modal-err=".popup-call-error .result-wrapper">
        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array(), array('SHOW_BORDER' => false));
        ?>
        <div class="faq__form_text">
            <p class="faq__form_title">Задайте ваш вопрос</p>
            <p class="faq__form_subtitle">Задайте вопрос, и наши специалисты перезвонят вам в ближайшее время</p>
        </div>
        <div class="faq__form_inputs">
            <input type="text" name="params[name][]" class="faq__form_input input" placeholder="Имя" required>
            <input type="tel" name="params[phone][]" class="faq__form_input input" placeholder="+ 7 (___) - ___ - __ - __" required>
            <textarea class="faq__form_textarea textarea" name="params[message][]" placeholder="Вопрос" required></textarea>
            <button type="submit" class="faq__form_btn primary-btn">Перезвонить мне</button>
            <p class="faq__form_politic politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
        </div>
    </form>
</div>