<div class="intro-4__form">
    <div class="intro-4__form_text">
        <p class="intro-4__form_title">Мы вам поможем — звоните! </p>
        <a href="tel:<?= preg_replace("/[^0-9]/", "", $data['UF_PHONE']); ?>" class="intro-4__form_phone phone">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4C1 12.5604 7.93959 19.5 16.5 19.5C16.8862 19.5 17.2691 19.4859 17.6483 19.4581C18.0834 19.4262 18.3009 19.4103 18.499 19.2963C18.663 19.2019 18.8185 19.0345 18.9007 18.864C19 18.6582 19 18.4181 19 17.938V15.1207C19 14.7169 19 14.515 18.9335 14.342C18.8749 14.1891 18.7795 14.053 18.6559 13.9456C18.516 13.824 18.3262 13.755 17.9468 13.617L14.74 12.4509C14.2985 12.2904 14.0777 12.2101 13.8683 12.2237C13.6836 12.2357 13.5059 12.2988 13.3549 12.4058C13.1837 12.5271 13.0629 12.7285 12.8212 13.1314L12 14.5C9.3501 13.2999 7.2019 11.1489 6 8.5L7.36863 7.67882C7.77145 7.43713 7.97286 7.31628 8.0942 7.14506C8.2012 6.99408 8.2643 6.81637 8.2763 6.6317C8.2899 6.42227 8.2096 6.20153 8.0491 5.76005L6.88299 2.55321C6.745 2.17376 6.67601 1.98403 6.55442 1.8441C6.44701 1.72049 6.31089 1.62515 6.15802 1.56645C5.98496 1.5 5.78308 1.5 5.37932 1.5H2.56201C2.08188 1.5 1.84181 1.5 1.63598 1.59925C1.4655 1.68146 1.29814 1.83701 1.2037 2.00103C1.08968 2.19907 1.07375 2.41662 1.04189 2.85173C1.01413 3.23086 1 3.61378 1 4Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <?= $data['UF_PHONE'] ?>
        </a>
        <p class="intro-4__form_subtitle">или оставьте свои данные, и мы вам перезвоним в течение 20 минут</p>
    </div>

    <form class="intro-4__form_inner">
        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array('data' => $data), array('SHOW_BORDER' => false));
        ?>
        <div class="input-wrapper intro-4__form_input">
            <input type="text" name="params[name][]" class="input input-white intro-4__form_input" placeholder="Имя" required>
            <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
        </div>

        <div class="input-wrapper intro-4__form_input">
            <input type="tel" name="params[phone][]" class="input input-white intro-4__form_input" placeholder="Номер телефона" required>
            <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
        </div>

        <button type="submit" class="secondary-btn intro-4__form_btn request-send-btn"><span>Перезвонить мне</span></button>
        <p class="politic politic-white intro-4__form_politic">Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности</p>
    </form>
</div>