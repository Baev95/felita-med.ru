<div class="popup" data-target="popup-change">
    <div class="popup__body">
        <div class="popup__content popup-change__content">
            <picture class="close-popup close-popup-btn popup-change__close">
                <source srcset="<?= SITE_TEMPLATE_PATH ?>/images/icons/popup-close.svg" type="image/svg+xml">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/popup-close.png" alt="close_popup">
            </picture>

            <div class="popup-change__left">
                <div class="popup-change__text">
                    <p class="popup-change__title original-title">Оставьте заявку</p>
                    <p class="popup-change__subtitle">Оставьте свои данные, и наш специалист свяжется с вами в самое ближайшее время</p>
                </div>
                <div class="popup-change__phone">
                    <p>Круглосуточный, анонимный номер</p>
                    <a href="tel:<?= preg_replace("/[^0-9]/", "", $data['UF_PHONE']); ?>" class="intro-1__form_phone phone">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 3.72222C1.5 11.3315 7.66852 17.5 15.2778 17.5C15.6211 17.5 15.9614 17.4875 16.2985 17.4628C16.6852 17.4344 16.8786 17.4203 17.0547 17.3189C17.2004 17.235 17.3387 17.0862 17.4117 16.9347C17.5 16.7517 17.5 16.5383 17.5 16.1116V13.6073C17.5 13.2484 17.5 13.0689 17.4409 12.9151C17.3888 12.7792 17.304 12.6582 17.1941 12.5628C17.0698 12.4547 16.9011 12.3933 16.5638 12.2707L13.7133 11.2341C13.3209 11.0915 13.1246 11.0201 12.9385 11.0322C12.7743 11.0428 12.6164 11.0989 12.4821 11.194C12.33 11.3019 12.2226 11.4809 12.0077 11.839L11.2778 13.0556C8.92231 11.9888 7.0128 10.0768 5.94444 7.72222L7.161 6.99228C7.51907 6.77745 7.6981 6.67003 7.80596 6.51783C7.90107 6.38363 7.95716 6.22566 7.96782 6.06151C7.97991 5.87535 7.90853 5.67914 7.76587 5.28671L6.72932 2.43619C6.60667 2.0989 6.54534 1.93025 6.43726 1.80587C6.34179 1.69599 6.22079 1.61124 6.08491 1.55907C5.93108 1.5 5.75163 1.5 5.39273 1.5H2.88845C2.46167 1.5 2.24828 1.5 2.06532 1.58822C1.91378 1.6613 1.76501 1.79956 1.68107 1.94536C1.57972 2.1214 1.56556 2.31477 1.53724 2.70154C1.51256 3.03854 1.5 3.37892 1.5 3.72222Z" fill="#625B5A" stroke="#625B5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <?= $data['UF_PHONE'] ?>
                    </a>
                </div>
            </div>
            <?
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/forms/form_main.php', array('data' => $data), array('SHOW_BORDER' => false));
            ?>
        </div>
    </div>
</div>