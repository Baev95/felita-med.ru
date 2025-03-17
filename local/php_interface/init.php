<?

AddEventHandler('main', 'OnUserTypeBuildList', array('CUserTypeSectionsHtmlField', 'GetUserTypeDescription'), 5000);
class CUserTypeSectionsHtmlField
{

    public static function GetUserTypeDescription()
    {
        return array(
            // уникальный идентификатор
            'USER_TYPE_ID' => 'sections_html_field',
            // имя класса, методы которого формируют поведение типа
            'CLASS_NAME' => 'CUserTypeSectionsHtmlField',
            // название для показа в списке типов пользовательских свойств
            'DESCRIPTION' => 'HTML/text',
            // базовый тип на котором будут основаны операции фильтра
            'BASE_TYPE' => 'string',
        );
    }

    public static function GetDBColumnType($arUserField)
    {
        switch (strtolower($GLOBALS['DB']->type)) {
            case 'mysql':
                return 'text';
                break;
        }
    }

    public static function GetSettingsHTML($arUserField = false, $arHtmlControl, $bVarsFromForm)
    {
        $result = '';

        return $result;
    }

    public static function CheckFields($arUserField, $value)
    {
        $aMsg = array();
        return $aMsg;
    }

    public static function GetEditFormHTML($arUserField, $arHtmlControl)
    {
        if ($arUserField["ENTITY_VALUE_ID"] < 1 && strlen($arUserField["SETTINGS"]["DEFAULT_VALUE"]) > 0)
            $arHtmlControl["VALUE"] = htmlspecialchars($arUserField["SETTINGS"]["DEFAULT_VALUE"]);
        ob_start();
        CFileMan::AddHTMLEditorFrame($arHtmlControl["NAME"], $arHtmlControl["VALUE"], "html", "html", 200, "N", 0, "", "", "s1");
        $b = ob_get_clean();
        return $b;
    }

    public static function GetEditFormHTMLMulty($arUserField, $arHtmlControl)
    {
        $html = 'Поле не может быть множественным!';
        return $html;
    }

    public static function GetFilterHTML($arUserField, $arHtmlControl)
    {
        $sVal = intval($arHtmlControl['VALUE']);
        $sVal = $sVal > 0 ? $sVal : '';

        return CUserTypeSectionsHtmlField::GetEditFormHTML($arUserField, $arHtmlControl);
    }

    public static function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
        return '';
    }

    public static function GetAdminListViewHTMLMulty($arUserField, $arHtmlControl)
    {
        return '';
    }

    public static function GetAdminListEditHTML($arUserField, $arHtmlControl)
    {
        return '';
    }

    public static function GetAdminListEditHTMLMulty($arUserField, $arHtmlControl)
    {
        return '';
    }

    public static function onsearchIndex($arUserField)
    {
        return '';
    }

    public static function OnBeforeSave($arUserField, $value)
    {
        return $value;
    }
}

ini_set('xdebug.var_display_max_depth', '-1');
ini_set('xdebug.var_display_max_children', '-1');
ini_set('xdebug.var_display_max_data', '-1');


use Bitrix\Main\Loader;

// Убедитесь, что модуль 'iblock' загружен
if (!Loader::includeModule('iblock')) {
    return;
}

// Регистрируем обработчик события для построения списка свойств
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', 'OnIBlockPropertyBuildListHandler');

// Обработчик для создания списка свойств
function OnIBlockPropertyBuildListHandler()
{
    return [
        'PROPERTY_TYPE' => 'S', // Тип свойства: строка
        'USER_TYPE' => 'iblock_section', // Привязка к разделу
        'DESCRIPTION' => 'Выбор корневых разделов услуг', // Описание
        'LINK_IBLOCK_ID' => 5, // Указываем ID инфоблока, к которому привязан раздел
        'CLASS_NAME' => '', // Пустое, потому что используем функции
        'ConvertToDB' => 'ConvertToDB', // Обработчик конвертации в базу
        'ConvertFromDB' => 'ConvertFromDB', // Обработчик конвертации из базы
        'GetPropertyFieldHtml' => 'GetPropertyFieldHtml', // Функция вывода формы
    ];
}

// Генерация HTML для поля выбора корневых разделов
function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
{
    if ($arProperty['CODE'] !== 'SERVICES_NEW') {
        return ''; // Если это не нужное свойство, выходим
    }

    // Логируем значение для отладки
    AddMessage2Log('Current value: ' . print_r($value, true)); // Логируем значение

    // Фильтрация для получения только корневых разделов
    $arFilter = [
        'IBLOCK_ID' => 5,
        'DEPTH_LEVEL' => 1, // Корневые разделы
        'ACTIVE' => 'Y',
    ];

    // Получение корневых разделов (используем старую версию CIBlockSection без пространства имен)
    $arSections = [];
    $dbSections = CIBlockSection::GetList(
        ['SORT' => 'ASC'], // Сортировка по сортировке
        $arFilter, // Фильтры
        false, // Не выводим вложенные разделы
        ['ID', 'NAME'] // Выбираем только ID и Name
    );

    while ($arSection = $dbSections->Fetch()) {
        $arSections[$arSection['ID']] = $arSection['NAME'];
    }

    // Генерация HTML для выпадающего списка
    $html = '<select name="' . $strHTMLControlName['NAME'] . '">';
    $html .= '<option value="">' . '(не установлено)' . '</option>';
    foreach ($arSections as $id => $name) {
        $selected = ($value['VALUE'] == $id) ? 'selected' : ''; // если это выбранный элемент
        $html .= '<option value="' . $id . '" ' . $selected . '>' . htmlspecialchars($name) . '</option>';
    }
    $html .= '</select>';

    return $html;
}

// Обработчик сохранения данных в базу
function ConvertToDB($arProperty, $value)
{
    // Проверим, что значение вообще передано
    if (isset($value['VALUE'])) {
        // Если значение установлено, проверим его
        if ((int)$value['VALUE'] > 0) {
            // Логируем значение для отладки
            AddMessage2Log('Saving value: ' . $value['VALUE']); // Логируем значение
            return [
                'VALUE' => (int)$value['VALUE'],
            ];
        }
    }

    // Если значение пустое или некорректное, записываем лог
    AddMessage2Log('No valid value to save.'); // Логируем, если значения нет

    // Если значение не выбрано, сохраняем пустое значение
    return ['VALUE' => ''];
}

// Обработчик для получения данных из базы
function ConvertFromDB($arProperty, $value)
{
    // Возвращаем значение для вывода в форме
    return [
        'VALUE' => isset($value['VALUE']) ? (int)$value['VALUE'] : '',
    ];
}

// Пример обработчиков событий для отладки перед сохранением
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', 'OnBeforeIBlockElementAddHandler');
AddEventHandler('iblock', 'OnBeforeIBlockElementUpdate', 'OnBeforeIBlockElementUpdateHandler');

// Обработчик перед сохранением
function OnBeforeIBlockElementAddHandler(&$arFields)
{
    // Проверяем, что поле 'SERVICES_NEW' передано и имеет значение
    if (isset($arFields['PROPERTY_VALUES']['SERVICES_NEW'])) {
        AddMessage2Log('Before save: ' . print_r($arFields['PROPERTY_VALUES']['SERVICES_NEW'], true));
    }
}

// Обработчик перед обновлением
function OnBeforeIBlockElementUpdateHandler(&$arFields)
{
    // Проверяем, что поле 'SERVICES_NEW' передано и имеет значение
    if (isset($arFields['PROPERTY_VALUES']['SERVICES_NEW'])) {
        AddMessage2Log('Before update: ' . print_r($arFields['PROPERTY_VALUES']['SERVICES_NEW'], true));
    }
}

AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);
function _Check404Error()
{
    if (defined('ERROR_404') && ERROR_404 == 'Y') {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
        include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/footer.php';
    }
}
