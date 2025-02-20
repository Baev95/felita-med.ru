<div class="intro-5__right">
    <form class="intro-5__form" data-modal-open="open" data-modal-ok=".popup-call-ok .result-wrapper" data-modal-err=".popup-call-error .result-wrapper">

        <?
        $data = $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/inputs.php', array(), array('MODE' => 'php'));
        ?>

        <div class="intro-5__form_text">
            <p class="intro-5__form_title">Мы вам поможем — звоните! </p>
            <a href="tel:<?= preg_replace("/[^0-9]/", "", $data[0]['phone']); ?>" class="intro-5__form_phone phone">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3C0 11.5604 6.93959 18.5 15.5 18.5C15.8862 18.5 16.2691 18.4859 16.6483 18.4581C17.0834 18.4262 17.3009 18.4103 17.499 18.2963C17.663 18.2019 17.8185 18.0345 17.9007 17.864C18 17.6582 18 17.4181 18 16.938V14.1207C18 13.7169 18 13.515 17.9335 13.342C17.8749 13.1891 17.7795 13.053 17.6559 12.9456C17.516 12.824 17.3262 12.755 16.9468 12.617L13.74 11.4509C13.2985 11.2904 13.0777 11.2101 12.8683 11.2237C12.6836 11.2357 12.5059 11.2988 12.3549 11.4058C12.1837 11.5271 12.0629 11.7285 11.8212 12.1314L11 13.5C8.3501 12.2999 6.2019 10.1489 5 7.5L6.36863 6.67882C6.77145 6.43713 6.97286 6.31628 7.0942 6.14506C7.2012 5.99408 7.2643 5.81637 7.2763 5.6317C7.2899 5.42227 7.2096 5.20153 7.0491 4.76005L5.88299 1.55321C5.745 1.17376 5.67601 0.98403 5.55442 0.8441C5.44701 0.72049 5.31089 0.62515 5.15802 0.56645C4.98496 0.5 4.78308 0.5 4.37932 0.5H1.56201C1.08188 0.5 0.84181 0.5 0.63598 0.59925C0.4655 0.68146 0.29814 0.83701 0.2037 1.00103C0.0896801 1.19907 0.0737499 1.41662 0.0418899 1.85173C0.0141299 2.23086 0 2.61378 0 3Z" fill="#00B768" />
                </svg>
                <? echo $data[0]['phone']; ?>
            </a>
            <p class="intro-5__form_subtitle">или оставьте свои данные, и мы вам перезвоним в течение 20 минут</p>
        </div>

        <div class="intro-5__form_inner">
            <input type="text" name="params[name][]" class="intro-5__form_input input" placeholder="Имя" required>
            <input type="tel" name="params[phone][]" class="intro-5__form_input input" placeholder="Номер телефона" required>
            <button class="primary-btn" type="submit">Перезвонить мне</button>
            <p class="intro-5__form_politic politic">Мы обеспечиваем полную <a href="#">конфиденциальность</a> вашей личности</p>
        </div>
    </form>
</div>