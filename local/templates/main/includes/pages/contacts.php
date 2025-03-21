<?

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
$class = "contacts-page section-offset";
if ($title) {
    $class = "contacts";
}
while ($arData = $rsData->Fetch()): ?>

    <section class="<?= $class ?>">
        <div class="container">
            <div class="contacts__info">
                <div class="contacts__info_line"></div>
                <div class="contacts__info_item">
                    <p class="contacts__info_text"><?= GetMessage(name: "PHONE") ?></p>
                    <a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>" class="contacts__info_link contacts__info_link-phone"><?= $arData['UF_PHONE']; ?></a>
                </div>
                <div class="contacts__info_line"></div>
                <div class="contacts__info_item">
                    <p class="contacts__info_text"><?= GetMessage(name: "ADRESS") ?>:</p>
                    <p class="contacts__info_link contacts__info_link-location"><button class="popup-btn" data-path="popup-city"><?= $arData['UF_CITY']; ?>,</button> <?= $arData['UF_ADRESS']; ?></p>
                </div>
                <div class="contacts__info_line"></div>
                <div class="contacts__info_item">
                    <p class="contacts__info_text"><?= GetMessage(name: "EMAIL") ?></p>
                    <a href="mailto:<?= $arData['UF_EMAIL']; ?>" class="contacts__info_link"><?= $arData['UF_EMAIL']; ?></a>
                </div>
                <div class="contacts__info_line"></div>
                <div class="contacts__info_item">
                    <p class="contacts__info_text"><?= GetMessage(name: "OPERATING") ?></p>
                    <p class="contacts__info_link"><?= $arData['UF_OPERATING']; ?></p>
                </div>
                <div class="contacts__info_line"></div>
            </div>
            <div class="contacts__maps">
                <div id="map__container" class="contacts__map">
                    <div id="map" style="width: 100%; height: 100%;" data-coordinates="<?= $arData['UF_COORDINATES']; ?>" data-city="<?= $arData['UF_CITY']; ?>, <?= $arData['UF_ADRESS']; ?>">
                        <img id="map-placeholder" src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/map-6.jpg" alt="Map" style="width: 100%; height: 100%; cursor: pointer; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="contacts__plashka">
                <div class="contacts__plashka_left">
                    <?= $arData['UF_LICENSES']; ?>
                </div>
                <div class="contacts__plashka_right">
                    <div class="contacts__plashka_networks">
                        <? if ($arData['UF_TG']) : ?>
                            <a href="<?= $arData['UF_TG']; ?>" class="contacts__plashka_network">
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4654 0.123596C16.4654 0.123596 18.1306 -0.482404 17.9918 0.989311C17.9455 1.59532 17.5293 3.71632 17.2055 6.01048L16.0954 12.8064C16.0954 12.8064 16.0029 13.8019 15.1703 13.9751C14.3377 14.1482 13.0889 13.3691 12.8576 13.1959C12.6726 13.0661 9.38863 11.1182 8.23226 10.1659C7.90848 9.90619 7.53845 9.38675 8.27851 8.78075L13.1352 4.4522C13.6902 3.93276 14.2453 2.72076 11.9326 4.19248L5.45705 8.30464C5.45705 8.30464 4.71699 8.73747 3.3294 8.34791L0.322895 7.48219C0.322895 7.48219 -0.787196 6.83292 1.10921 6.1836C5.73459 4.14916 11.4238 2.07144 16.4654 0.123596Z" fill="#625B5A" />
                                </svg>
                            </a>
                        <? endif ?>
                        <? if ($arData['UF_VK']) : ?>
                            <a href="<?= $arData['UF_VK']; ?>" class="contacts__plashka_network">
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5927 1.25623C17.3901 1.91004 17.1171 2.47914 16.775 2.99587L16.7893 2.97277C16.4532 3.54777 16.0519 4.2121 15.5853 4.96577C15.1853 5.56079 14.9735 5.86883 14.95 5.88988C14.8465 6.0231 14.7745 6.18636 14.7497 6.36579L14.749 6.37118C14.7692 6.53444 14.8427 6.67691 14.95 6.78318L15.25 7.12664C16.8553 8.82033 17.7582 9.98779 17.9587 10.629C17.985 10.6999 18 10.7815 18 10.867C18 11.0164 17.9535 11.1542 17.8747 11.2674L17.8762 11.2651C17.7442 11.4045 17.5597 11.4908 17.3556 11.4908C17.3331 11.4908 17.3099 11.49 17.2881 11.4877H17.2911H15.3176C15.3168 11.4877 15.3153 11.4877 15.3138 11.4877C15.061 11.4877 14.8285 11.3968 14.6462 11.2459L14.6484 11.2474C14.3829 11.0233 14.1466 10.7807 13.9351 10.5174L13.9283 10.5081C13.5828 10.1072 13.2762 9.7696 13.0087 9.49545C12.1175 8.62576 11.4599 8.19091 11.0358 8.19091C11.0201 8.18937 11.0021 8.1886 10.9833 8.1886C10.8596 8.1886 10.744 8.22788 10.6488 8.29487L10.651 8.29333C10.573 8.39345 10.5258 8.52282 10.5258 8.66221C10.5258 8.68993 10.5273 8.71611 10.531 8.74307V8.73999C10.5108 8.9818 10.4987 9.26288 10.4987 9.54704C10.4987 9.63869 10.5002 9.72956 10.5025 9.82043V9.80734V10.6999C10.51 10.7361 10.5145 10.7777 10.5145 10.82C10.5145 11.0064 10.432 11.1727 10.303 11.2828L10.3022 11.2836C10.0119 11.4199 9.67286 11.5 9.31505 11.5C9.23854 11.5 9.16353 11.4961 9.08926 11.4892L9.09902 11.49C7.91832 11.4669 6.82314 11.1119 5.89223 10.5135L5.91849 10.5289C4.78505 9.82197 3.84589 8.90171 3.13027 7.81434L3.11002 7.78199C2.43041 6.85634 1.79655 5.81056 1.25646 4.70778L1.20395 4.58919C0.888148 3.97158 0.561094 3.21227 0.279047 2.43139L0.234039 2.28892C0.11927 1.93776 0.036006 1.52961 0.00150025 1.10683L0 1.08758C0 0.698427 0.223037 0.503851 0.669111 0.503851H2.64194C2.65994 0.50231 2.68095 0.50154 2.7027 0.50154C2.88873 0.50154 3.06051 0.566998 3.19628 0.677121L3.19478 0.675581C3.34481 0.844231 3.45583 1.05139 3.51059 1.28241L3.51284 1.29165C3.8759 2.34437 4.26071 3.22844 4.70328 4.07554L4.65303 3.97004C5.01459 4.71703 5.4144 5.36005 5.87048 5.95379L5.85323 5.92992C6.25329 6.43407 6.56534 6.68615 6.78938 6.68615C6.79613 6.68692 6.80438 6.68692 6.81339 6.68692C6.9244 6.68692 7.02117 6.62531 7.07368 6.5329L7.07443 6.53136C7.12994 6.38505 7.16219 6.21486 7.16219 6.03773C7.16219 6 7.16069 5.96227 7.15769 5.9253V5.92992V2.94273C7.14194 2.5908 7.05793 2.26197 6.91765 1.96703L6.92365 1.98166C6.83064 1.77835 6.71887 1.60277 6.5861 1.44644L6.58835 1.44952C6.46533 1.32323 6.38131 1.15766 6.35506 0.972837L6.35431 0.968216C6.35431 0.8373 6.41282 0.719476 6.50433 0.642467L6.50508 0.641697C6.59585 0.556217 6.71737 0.504621 6.85014 0.504621H6.85614H9.96616C9.98266 0.50231 10.0014 0.50154 10.0209 0.50154C10.1672 0.50154 10.2985 0.569308 10.3855 0.675581L10.3862 0.676351C10.4635 0.821129 10.5093 0.994399 10.5093 1.17768C10.5093 1.20694 10.5078 1.23544 10.5055 1.26393V1.26008V5.24377C10.504 5.26225 10.5033 5.28381 10.5033 5.30538C10.5033 5.44707 10.5415 5.5803 10.6075 5.6935L10.606 5.69042C10.6608 5.77359 10.7523 5.8275 10.8558 5.8275C10.9878 5.81826 11.1086 5.77359 11.2099 5.70274L11.2076 5.70428C11.4117 5.56028 11.5872 5.39625 11.7395 5.21065L11.7425 5.2068C12.1978 4.67852 12.6179 4.09479 12.9839 3.4741L13.0132 3.42019C13.2712 2.98124 13.5503 2.44063 13.803 1.8854L13.8496 1.77219L14.1841 1.08527C14.3004 0.741809 14.6124 0.5 14.9792 0.5C14.9935 0.5 15.0077 0.5 15.022 0.50077H15.0198H16.9933C17.5264 0.50077 17.7265 0.75259 17.5934 1.25623H17.5927Z" fill="#625B5A" />
                                </svg>
                            </a>
                        <? endif ?>
                        <? if ($arData['UF_OK']) : ?>
                            <a href="<?= $arData['UF_OK']; ?>" class="contacts__plashka_network">
                                <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.00066 9.11114C8.55673 9.11114 10.6284 7.07165 10.6284 4.55536C10.6283 2.03907 8.5567 0 6.00066 0C3.4437 0 1.37119 2.03907 1.37119 4.55536C1.37116 7.07165 3.4437 9.11114 6.00066 9.11114ZM6.00066 2.31414C7.25792 2.31414 8.2772 3.31741 8.2772 4.55532C8.2772 5.79327 7.25792 6.79651 6.00066 6.79651C4.74208 6.79651 3.7232 5.79327 3.7232 4.55532C3.7232 3.31741 4.74204 2.31414 6.00066 2.31414ZM11.3351 9.66706C11.0744 9.15027 10.3506 8.7205 9.38844 9.46624C8.08788 10.4743 6.00063 10.4743 6.00063 10.4743C6.00063 10.4743 3.91202 10.4743 2.61145 9.46624C1.64973 8.7205 0.926457 9.15027 0.665278 9.66706C0.208984 10.5675 0.723755 11.003 1.8855 11.7369C2.87757 12.364 4.24109 12.5982 5.12111 12.6857L4.3862 13.409C3.35129 14.4272 2.35253 15.4112 1.65914 16.0936C1.24436 16.5014 1.24436 17.1629 1.65914 17.5707L1.78368 17.6942C2.19846 18.1019 2.86998 18.1019 3.28473 17.6942L6.01179 15.0095C7.0476 16.0282 8.04636 17.0117 8.73972 17.6942C9.1545 18.1019 9.82602 18.1019 10.2408 17.6942L10.3653 17.5707C10.7801 17.1624 10.7801 16.5014 10.3653 16.0932L7.63824 13.4091L6.90158 12.6835C7.78246 12.5939 9.13081 12.3587 10.1148 11.7369C11.2766 11.003 11.7905 10.5675 11.3351 9.66706Z" fill="#625B5A" />
                                </svg>
                            </a>
                        <? endif ?>
                    </div>
                    <div class="contacts__info_line"></div>
                    <div class="contacts__plashka_btns">
                        <button class="tertiary-btn popup-btn" data-path="popup-change"><?= GetMessage(name: "ORDER_SERVICES") ?></button>
                        <button class="primary-btn popup-btn" data-path="popup-change"><?= GetMessage(name: "ASK_QUESTION") ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="filials section-offset">
        <div class="container">
            <h2 class="filials__title title-h2 section__title">Филиалы клиники</h2>

            <div class="filials__cards">
                <div class="filials__card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/filials-bg.svg" alt="" class="filials__card_bg" loading="lazy">
                    <div class="filials__card_content">
                        <p class="filials__card_name">Название отделения</p>

                        <div class="filials__card_info">
                            <div class="filials__card_item">
                                <p>Телефон горячей линии:</p>
                                <a href="tel:89999999999" class="filials__card_phone phone">8 (888) 999-99-99</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filials__card_btn primary-btn"><span>Акции отделения</span></a>
                </div>
                <div class="filials__card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/filials-bg.svg" alt="" class="filials__card_bg" loading="lazy">
                    <div class="filials__card_content">
                        <p class="filials__card_name">Название отделения</p>

                        <div class="filials__card_info">
                            <div class="filials__card_item">
                                <p>Телефон горячей линии:</p>
                                <a href="tel:89999999999" class="filials__card_phone phone">8 (888) 999-99-99</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filials__card_btn primary-btn"><span>Акции отделения</span></a>
                </div>
                <div class="filials__card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/filials-bg.svg" alt="" class="filials__card_bg" loading="lazy">
                    <div class="filials__card_content">
                        <p class="filials__card_name">Название отделения</p>

                        <div class="filials__card_info">
                            <div class="filials__card_item">
                                <p>Телефон горячей линии:</p>
                                <a href="tel:89999999999" class="filials__card_phone phone">8 (888) 999-99-99</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filials__card_btn primary-btn"><span>Акции отделения</span></a>
                </div>
                <div class="filials__card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/filials-bg.svg" alt="" class="filials__card_bg" loading="lazy">
                    <div class="filials__card_content">
                        <p class="filials__card_name">Название отделения</p>

                        <div class="filials__card_info">
                            <div class="filials__card_item">
                                <p>Телефон горячей линии:</p>
                                <a href="tel:89999999999" class="filials__card_phone phone">8 (888) 999-99-99</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filials__card_btn primary-btn"><span>Акции отделения</span></a>
                </div>
                <div class="filials__card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/filials-bg.svg" alt="" class="filials__card_bg" loading="lazy">
                    <div class="filials__card_content">
                        <p class="filials__card_name">Название отделения</p>
                        <div class="filials__card_info">
                            <div class="filials__card_item">
                                <p>Телефон горячей линии:</p>
                                <a href="tel:89999999999" class="filials__card_phone phone">8 (888) 999-99-99</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filials__card_btn primary-btn"><span>Акции отделения</span></a>
                </div>
                <div class="filials__card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/filials-bg.svg" alt="" class="filials__card_bg" loading="lazy">
                    <div class="filials__card_content">
                        <p class="filials__card_name">Название отделения</p>

                        <div class="filials__card_info">
                            <div class="filials__card_item">
                                <p>Телефон горячей линии:</p>
                                <a href="tel:89999999999" class="filials__card_phone phone">8 (888) 999-99-99</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filials__card_btn primary-btn"><span>Акции отделения</span></a>
                </div>
            </div>
            </h2>
    </section> -->

<? endwhile ?>