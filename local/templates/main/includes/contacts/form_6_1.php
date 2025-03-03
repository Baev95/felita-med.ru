<section class="form-6 section-offset">
    <div class="container">
        <div class="form-6__row">
            <div class="form-6__image">
                <picture class="form-6__img">
                    <source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-6.webp" type="image/webp" />
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-6.jpg" alt="" loading="lazy" />
                </picture>
            </div>

            <div class="form-6__wrapper">
                <p class="form-6__title">Оставьте заявку и получите бесплатную консультацию</p>

                <div class="form-6__content">
                    <p class="form-6__text politic">Или заполните ваши данные, и наши специалисты перезвонят вам в течение 15 минут. Мы обеспечиваем полную <a href="/" rel="nofollow">конфиденциальность</a> вашей личности</p>
                    <form class="form-6__inner" data-modal-open="open" data-modal-ok=".popup-call-ok .result-wrapper" data-modal-err=".popup-call-error .result-wrapper">
                        <?
                        $data = $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array(), array('MODE' => 'php'));
                        ?>
                        <input type="text" name="params[name][]" class="form-6__input input" placeholder="Имя" required>
                        <input type="tel" name="params[phone][]" class="form-6__input input" placeholder="Номер телефона" required>
                        <button class="form-6__btn primary-btn" type="submit">Перезвонить мне</button>
                    </form>
                </div>

                <div class="form-6__subtitle">
                    <p>Позвоните нам и получите бесплатную анонимную консультацию. Все звонки анонимны</p>
                    <a href="tel:<?= preg_replace("/[^0-9]/", "", $data[0]['phone']); ?>" class="form-6__phone-btn phone-btn-yellow">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.5C1 12.0604 7.93959 19 16.5 19C16.8862 19 17.2691 18.9859 17.6483 18.9581C18.0834 18.9262 18.3009 18.9103 18.499 18.7963C18.663 18.7019 18.8185 18.5345 18.9007 18.364C19 18.1582 19 17.9181 19 17.438V14.6207C19 14.2169 19 14.015 18.9335 13.842C18.8749 13.6891 18.7795 13.553 18.6559 13.4456C18.516 13.324 18.3262 13.255 17.9468 13.117L14.74 11.9509C14.2985 11.7904 14.0777 11.7101 13.8683 11.7237C13.6836 11.7357 13.5059 11.7988 13.3549 11.9058C13.1837 12.0271 13.0629 12.2285 12.8212 12.6314L12 14C9.3501 12.7999 7.2019 10.6489 6 8L7.36863 7.17882C7.77145 6.93713 7.97286 6.81628 8.0942 6.64506C8.2012 6.49408 8.2643 6.31637 8.2763 6.1317C8.2899 5.92227 8.2096 5.70153 8.0491 5.26005L6.88299 2.05321C6.745 1.67376 6.67601 1.48403 6.55442 1.3441C6.44701 1.22049 6.31089 1.12515 6.15802 1.06645C5.98496 1 5.78308 1 5.37932 1H2.56201C2.08188 1 1.84181 1 1.63598 1.09925C1.4655 1.18146 1.29814 1.33701 1.2037 1.50103C1.08968 1.69907 1.07375 1.91662 1.04189 2.35173C1.01413 2.73086 1 3.11378 1 3.5Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span><? echo $data[0]['phone']; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>