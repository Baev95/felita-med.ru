<section class="form-2 section-offset">
    <div class="container">
        <picture class="form-2__bg">
            <source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-bg.webp" type="image/webp" />
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-bg.png" alt="" loading="lazy" />
        </picture>
        <div class="form-2__row">
            <picture class="form-2__img">
                <source srcset="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.webp" type="image/webp" />
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/form/form-doctors.png" alt="" loading="lazy" />
            </picture>

            <div class="form-2__wrapper">
                <p class="form-2__title">Оставьте заявку и получите бесплатную консультацию</p>
                <div class="form-2__subtitle">
                    <p>Все звонки анонимы. Позвоните сейчас и получите бесплатную анонимную консультацию</p>
                    <a href="tel:<?= preg_replace("/[^0-9]/", "", $data['UF_PHONE']); ?>" class="form-2__phone-btn phone-btn-white">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.08333C1 10.217 6.78299 16 13.9167 16C14.2385 16 14.5576 15.9882 14.8736 15.9651C15.2362 15.9385 15.4174 15.9253 15.5825 15.8303C15.7192 15.7516 15.8487 15.6121 15.9172 15.47C16 15.2985 16 15.0984 16 14.6983V12.3506C16 12.0141 16 11.8458 15.9446 11.7017C15.8958 11.5743 15.8162 11.4608 15.7132 11.3713C15.5967 11.27 15.4385 11.2125 15.1223 11.0975L12.45 10.1258C12.0821 9.992 11.8981 9.92508 11.7236 9.93642C11.5697 9.94642 11.4216 9.999 11.2957 10.0882C11.1531 10.1892 11.0524 10.3571 10.851 10.6928L10.1667 11.8333C7.95842 10.8333 6.16825 9.04075 5.16667 6.83333L6.30719 6.14902C6.64288 5.94761 6.81072 5.8469 6.91183 5.70422C7.001 5.5784 7.05358 5.43031 7.06358 5.27642C7.07492 5.10189 7.008 4.91794 6.87425 4.55004L5.90249 1.87767C5.7875 1.56147 5.73001 1.40336 5.62868 1.28675C5.53918 1.18374 5.42574 1.10429 5.29835 1.05538C5.15413 1 4.9859 1 4.64943 1H2.30167C1.90157 1 1.70151 1 1.52998 1.08271C1.38792 1.15122 1.24845 1.28084 1.16975 1.41752C1.07473 1.58256 1.06146 1.76385 1.03491 2.12644C1.01177 2.44238 1 2.76148 1 3.08333Z" fill="#37384C" stroke="#37384C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span><?= $data['UF_PHONE'] ?></span>
                    </a>
                </div>

                <div class="form-2__content">
                    <p class="form-2__text">Или заполните ваши данные, и наши специалисты перезвонят вам в течение 15 минут. </p>
                    <form class="form-2__inner">
                        <?
                        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array('data' => $data), array('SHOW_BORDER' => false));
                        ?>
                        <div class="input-wrapper form-2__input">
                            <input type="text" name="params[name][]" class="input input-white form-2__input" placeholder="Имя" required>
                            <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
                        </div>

                        <div class="input-wrapper form-2__input">
                            <input type="tel" name="params[phone][]" class="input input-white form-2__input" placeholder="Номер телефона" required>
                            <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
                        </div>

                        <button type="submit" class="secondary-btn form-2__btn"><span>Перезвонить мне</span></button>
                        <p class="politic politic-white form-2__politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>