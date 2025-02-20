<?

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();

while ($arData = $rsData->Fetch()): ?>
    <section class="contacts section-offset">
        <div class="container">
            <div class="contacts__row">
                <div class="contacts__contant">
                    <? if ($title) { ?> <h2 class="contacts__title title-h2">Контакты</h2> <? } ?>
                    <div class="contacts__inner">
                        <div class="contacts__item">
                            <p><?= GetMessage(name: "PHONE") ?></p>
                            <a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>" class="contacts__phone"><?= $arData['UF_PHONE']; ?></a>
                        </div>
                        <div class="contacts__item">
                            <p><?= GetMessage(name: "ADRESS") ?></p>
                            <!-- <button class="popup-btn" data-path="popup-city"></button> -->
                            <p class="contacts__location"><?= $arData['UF_CITY']; ?>,
                                <?= $arData['UF_ADRESS']; ?></p>
                        </div>
                        <div class="contacts__item">
                            <p><?= GetMessage(name: "EMAIL") ?></p>
                            <a href="mailto:<?= $arData['UF_EMAIL']; ?>" class="contacts__text"> <?= $arData['UF_EMAIL']; ?></a>
                        </div>
                        <div class="contacts__item">
                            <p><?= GetMessage(name: "OPERATING") ?></p>
                            <p class="contacts__text"><?= $arData['UF_OPERATING']; ?></p>
                        </div>
                        <div class="contacts__networks">
                            <? if ($arData['UF_TG']) : ?>
                                <a href="<?= $arData['UF_TG']; ?>" class="contacts__network">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.27177 7.93492C2.11321 6.83266 4.16877 5.91271 6.08938 4.98805C9.39358 3.47352 12.7109 1.98525 16.0617 0.599685C16.7137 0.363598 17.885 0.132718 17.9999 1.18263C17.937 2.66876 17.6783 4.14619 17.5008 5.62363C17.0504 8.87264 16.5297 12.1105 16.0221 15.3488C15.8471 16.4275 14.6037 16.9859 13.8081 16.2956C11.896 14.8921 9.9692 13.5022 8.08154 12.0662C7.46319 11.3834 8.03658 10.4029 8.58883 9.91527C10.1637 8.22871 11.8338 6.79579 13.3264 5.02207C13.729 3.96553 12.5394 4.85595 12.147 5.12877C9.99106 6.74329 7.88785 8.45638 5.61478 9.87533C4.45369 10.5699 3.10043 9.97633 1.93987 9.58874C0.89928 9.12056 -0.625461 8.64882 0.27177 7.93492Z" fill="white" />
                                    </svg>
                                </a>
                            <? endif ?>
                            <a href="<?= $arData['UF_VK']; ?>" class="contacts__network">
                                <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.7929 8.8042C16.1129 7.17175 16.3274 7.42016 18.3648 4.61661C19.5801 2.91319 20.0806 1.84855 19.9376 1.3872C19.8661 1.1033 18.901 1.17427 18.901 1.17427H15.8984C15.8984 1.17427 15.4338 1.17427 15.255 1.49366C14.9333 2.09696 14.7904 2.84221 14.1469 3.94234C12.7887 6.32004 12.2525 6.46199 12.038 6.32004C11.5376 5.96516 11.6448 4.936 11.6448 4.19075C11.6448 1.88403 11.9665 0.925856 11.0014 0.641952C10.787 0.570976 10.6082 0.570976 10.2865 0.535487C9.89333 0.499999 9.50014 0.5 9.14269 0.5C8.24908 0.5 7.56993 0.535488 7.10525 0.748416C6.7478 0.925856 6.49759 1.31622 6.67631 1.35171C6.89078 1.3872 7.31972 1.49366 7.56993 1.81306C7.89163 2.23891 7.85589 3.23258 7.85589 3.23258C7.85589 3.23258 8.03461 5.96516 7.42695 6.28455C7.03376 6.53296 6.46184 6.03613 5.28227 3.87136C4.67461 2.77123 4.60312 2.02599 4.20993 1.52915C3.95972 1.20976 3.49504 1.1033 3.49504 1.1033H0.635461C0.635461 1.1033 0.135035 1.06781 0.0635461 1.20976C-0.0794326 1.3872 0.0635461 1.74208 0.0635461 1.74208C0.0635461 1.74208 2.31546 7.24272 4.85333 10.0108C7.10525 12.6369 9.75035 12.495 9.75035 12.495C9.75035 12.495 11.2874 12.5659 11.5018 12.1756C11.6448 12.0336 11.6806 11.6078 11.6806 11.6078C11.6806 11.6078 11.6448 9.90433 12.3955 9.65591C13.1461 9.40749 14.0755 11.2884 15.0763 11.9981C15.8269 12.5659 16.0414 12.495 16.3989 12.495C17.1138 12.495 19.0797 12.495 19.0797 12.495C19.0797 12.495 20.4738 12.353 19.8304 11.1819C19.7231 11.1109 19.4014 10.3657 17.7929 8.8042Z" fill="white" />
                                </svg>
                            </a>
                            <a href="<?= $arData['UF_OK']; ?>" class="contacts__network">
                                <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.98804 9.80702C2.54199 9.80702 0.508956 7.69559 0.508956 5.19716C0.508956 2.61233 2.54199 0.5 4.98891 0.5C7.51895 0.5 9.468 2.61143 9.468 5.19716C9.46364 6.42392 8.99086 7.59869 8.15357 8.46327C7.31627 9.32786 6.18298 9.8115 5.00276 9.80792L4.98804 9.80702ZM4.98804 3.21533C3.95248 3.21533 3.16455 4.11985 3.16455 5.19806C3.16455 6.27447 3.95248 7.09348 4.98891 7.09348C6.06691 7.09348 6.81328 6.27447 6.81328 5.19806C6.81414 4.11895 6.06691 3.21533 4.98804 3.21533ZM6.77171 13.6429L9.30262 16.1854C9.80049 16.7443 9.80049 17.5633 9.30262 18.0808C8.76406 18.6397 7.9337 18.6397 7.51895 18.0808L4.98891 15.4951L2.54199 18.0808C2.29349 18.3391 1.961 18.4678 1.58695 18.4678C1.29689 18.4678 0.965264 18.3382 0.674335 18.0808C0.176467 17.5633 0.176467 16.7443 0.674335 16.1845L3.24594 13.642C2.31725 13.3561 1.42636 12.9513 0.59381 12.4368C-0.0287424 12.0921 -0.15256 11.2308 0.179064 10.5837C0.593811 9.93752 1.34018 9.76562 2.00429 10.1967C2.90357 10.7672 3.9367 11.069 4.99021 11.069C6.04372 11.069 7.07685 10.7672 7.97612 10.1967C8.64024 9.76562 9.4273 9.93752 9.80049 10.5837C10.1745 11.2308 10.0074 12.0912 9.42644 12.4368C8.63937 12.9544 7.72676 13.3423 6.77258 13.6438L6.77171 13.6429Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="contacts__license">
                            <?= $arData['UF_LICENSES']; ?>
                        </div>
                    </div>
                    <div class="contacts__btns">
                        <button class="primary-btn popup-btn" data-path="popup-call"><?= GetMessage(name: "ORDER_SERVICES") ?></button>
                        <button class="tertiary-btn popup-btn" data-path="popup-call"><?= GetMessage(name: "ASK_QUESTION") ?></button>
                    </div>
                </div>
                <div class="contacts__maps">
                    <div id="map__container" class="contacts__map">
                        <div id="map" style="width: 100%; height: 100%;" data-coordinates="<?= $arData['UF_COORDINATES']; ?>" data-city="<?= $arData['UF_CITY']; ?>, <?= $arData['UF_ADRESS']; ?>">
                            <img id="map-placeholder" src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/map-1.jpg" alt="Map" style="width: 100%; height: 100%; cursor: pointer; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? endwhile ?>