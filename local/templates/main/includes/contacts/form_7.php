<section class="form-7 section-offset">
    <div class="container">
        <div class="form-7__row">
            <div class="form-7__content">
                <p class="form-7__title">Не знаете, какое лечение выбрать? Бесплатный подбор лечения!</p>
                <div class="form-7__text">
                    <p>Позвоните нам и получите бесплатную анонимную консультацию. Все звонки анонимны</p>

                    <?
                    $data = $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array(), array('MODE' => 'php'));
                    ?>

                    <a href="tel:<?= preg_replace("/[^0-9]/", "", $data[0]['phone']); ?>" class=" form-7__phone-btn phone-btn-yellow">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 2.08333C0 9.217 5.78299 15 12.9167 15C13.2385 15 13.5576 14.9882 13.8736 14.9651C14.2362 14.9385 14.4174 14.9253 14.5825 14.8303C14.7192 14.7516 14.8487 14.6121 14.9172 14.47C15 14.2985 15 14.0984 15 13.6983V11.3506C15 11.0141 15 10.8458 14.9446 10.7017C14.8958 10.5743 14.8162 10.4608 14.7132 10.3713C14.5967 10.27 14.4385 10.2125 14.1223 10.0975L11.45 9.12575C11.0821 8.992 10.8981 8.92508 10.7236 8.93642C10.5697 8.94642 10.4216 8.999 10.2957 9.08817C10.1531 9.18925 10.0524 9.35708 9.851 9.69283L9.16667 10.8333C6.95842 9.83325 5.16825 8.04075 4.16667 5.83333L5.30719 5.14902C5.64288 4.94761 5.81072 4.8469 5.91183 4.70422C6.001 4.5784 6.05358 4.43031 6.06358 4.27642C6.07492 4.10189 6.008 3.91794 5.87425 3.55004L4.90249 0.877675C4.7875 0.561466 4.73001 0.403358 4.62868 0.28675C4.53918 0.183742 4.42574 0.104292 4.29835 0.0553751C4.15413 1.01328e-07 3.9859 0 3.64943 0H1.30167C0.901566 0 0.701508 5.96046e-08 0.529983 0.0827084C0.387917 0.151217 0.24845 0.280842 0.16975 0.417525C0.0747334 0.582558 0.0614583 0.76385 0.0349083 1.12644C0.0117749 1.44238 0 1.76148 0 2.08333Z" fill="white" />
                        </svg>
                        <? echo $data[0]['phone']; ?>
                    </a>
                </div>
            </div>

            <form class="form-7__inner" data-modal-open="open" data-modal-ok=".popup-call-ok .result-wrapper" data-modal-err=".popup-call-error .result-wrapper">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array(), array('SHOW_BORDER' => false));
                ?>

                <p>Или оставьте свои данные, и наши специалисты перезвонят вам в течение 15 минут</p>
                <div class="form-7__form">
                    <input type="text" name="params[name][]" class="form-7__form_input input" placeholder="Имя" required>
                    <input type="tel" name="params[phone][]" class="form-7__form_input input" placeholder="+ 7 (___) - ___ - __ - __" required>
                    <button type="submit" class="form-7__form_btn primary-btn">Перезвонить мне</button>
                    <p class="form-7__form_politic politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
                </div>
            </form>
        </div>
    </div>
</section>