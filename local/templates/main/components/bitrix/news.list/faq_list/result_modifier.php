<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Grid\Declension;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
$declension = new Declension('год', 'года', 'лет');

if (!isset($arResult["ITEMS"]) || empty($arResult["ITEMS"])) {
    return;
}

$sections = [];
$tabs = [];
$itemHtmls = [];
$i = 0;

$sectionResult = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'], true, ['ID', 'NAME']);
while ($section = $sectionResult->GetNext()) {
    $sections[$section['ID']] = $section['NAME'];
}

foreach ($arResult["ITEMS"] as $index => $item) {
    $serviceValue = $item['PROPERTIES']['SERVICES']['VALUE'];
    $class = $index === 0 ? "active" : "";

    $buttonHtml = <<<HTML
        <button class="page-faq__tab_btn tab__btn-acc tab__btn $class" data-id="$serviceValue">
            {$sections[$serviceValue]}
        <div class="page-faq__btn-arrow btn-arrow"></div>
        </button>
    HTML;

    if (!isset($tabs[$serviceValue])) {
        $tabs[$serviceValue] = $buttonHtml;
    }
    $res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $item['PROPERTIES']['WHICH_DOCTOR']['VALUE']], false, false, []);

    if ($row = $res->GetNextElement()) {
        $ar_fields = $row->GetFields();
        $ar_properties = $row->GetProperties();

        $name = $ar_fields['NAME'];
        $photo = CFile::GetPath($ar_fields['PREVIEW_PICTURE']);
        $post = $ar_properties['POST']['VALUE'];
        $work_experience_text = GetMessage('WORK_EXPERIENCE');
        $doctor_answered_text = GetMessage('DOCTOR_ANSWERED');
        $work_experience = preg_replace('/[^0-9]/', '', $ar_properties['WORK_EXPERIENCE']['VALUE']);
        $work_experience = (int) $work_experience;
        $work_experience_text = $declension->get($work_experience);
        $site_template_path = SITE_TEMPLATE_PATH;

        $itemHtmls[$serviceValue] .= <<<HTML
            <li>
                    <button class="faq__button accordion">
                        <h3 class="faq__name faq__name">{$item['NAME']}</h3>
                        <div class="faq__btn-more faq__btn-more">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.0714 17.5H23.4286C23.7127 17.5 23.9853 17.4473 24.1862 17.3536C24.3871 17.2598 24.5 17.1326 24.5 17C24.5 16.8674 24.3871 16.7402 24.1862 16.6464C23.9853 16.5527 23.7127 16.5 23.4286 16.5H18.0714H15.9286H10.5714C10.2873 16.5 10.0147 16.5527 9.81381 16.6464C9.61288 16.7402 9.5 16.8674 9.5 17C9.5 17.1326 9.61288 17.2598 9.81381 17.3536C10.0147 17.4473 10.2873 17.5 10.5714 17.5H15.9286H18.0714Z" fill="#37384C" />
                                <path d="M17.5 15.9286V10.5714C17.5 10.2873 17.4473 10.0147 17.3536 9.81381C17.2598 9.61288 17.1326 9.5 17 9.5C16.8674 9.5 16.7402 9.61288 16.6464 9.81381C16.5527 10.0147 16.5 10.2873 16.5 10.5714V15.9286V18.0714V23.4286C16.5 23.7127 16.5527 23.9853 16.6464 24.1862C16.7402 24.3871 16.8674 24.5 17 24.5C17.1326 24.5 17.2598 24.3871 17.3536 24.1862C17.4473 23.9853 17.5 23.7127 17.5 23.4286V18.0714V15.9286Z" fill="#37384C" />
                            </svg>
                        </div>
                        <div class="faq__content accordion__content">
                            <p class="faq__content_text">
                                {$item['PREVIEW_TEXT']}										
                            </p>
                            <div class="faq__editor faq__editor">
                                <div class="faq__editor_left faq__editor_left">
                                    <picture class="faq__editor_img">
                                        <source srcset="$site_template_path/images/text-block/text-block-editor.webp" type="image/webp" />
                                        <img src="$site_template_path/images/text-block/text-block-editor.jpg" alt="" loading="lazy" />
                                    </picture>
                                    <div>
                                    <p class="faq__editor_text">$doctor_answered_text</p>
                                    <p class="faq__editor_fio">$name</p>
                                    </div>
                                </div>
                                <div class="faq__editor_right">
                                    <div class="faq__editor_item">
                                        <img src="$site_template_path/images/icons/doctor.svg" alt="">
                                            <p>$post</p>
                                    </div>
                                    <div class="faq__editor_item">
                                        <img src="$site_template_path/images/icons/calendar.svg" alt="">
                    <p>$work_experience_text $work_experience  $work_experience_text</p>												
                </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
        HTML;
    }
}

$arResult['TABS_HTML'] = implode($tabs);
$arResult['ITEMS_HTML'] = $itemHtmls;
