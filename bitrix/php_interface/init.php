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








use Bitrix\Iblock;
use Bitrix\Main\Loader;

if (Loader::includeModule('iblock')) {
    // Регистрируем обработчик события для построения списка свойств
    AddEventHandler('iblock', 'OnIBlockPropertyBuildList', function () {
        return [
            'PROPERTY_TYPE' => 'S', // Тип свойства: строка
            'USER_TYPE' => 'iblock_section', // Привязка к разделу
            'DESCRIPTION' => 'Выбор корневых разделов', // Описание
            'LINK_IBLOCK_ID' => "5",
            'GetPropertyFieldHtml' => function ($arProperty, $value, $strHTMLControlName) {
                if ($arProperty['CODE'] !== 'SERVICES_NEW') {
                    return ''; // Если это не нужное свойство, выходим
                }

                // Фильтрация для получения только корневых разделов
                $arFilter = [
                    'IBLOCK_ID' => 5,
                    'DEPTH_LEVEL' => 1,
                    'ACTIVE' => 'Y',
                ];

                // Получение разделов
                $arSections = [];
                $dbSections = Iblock\SectionTable::getList([
                    'filter' => $arFilter,
                    'order' => ['SORT' => 'ASC'],
                    'select' => ['ID', 'NAME'],
                ]);

                while ($arSection = $dbSections->fetch()) {
                    $arSections[$arSection['ID']] = $arSection['NAME'];
                }

                // Генерация HTML для выбора
                $html = '<select name="' . $strHTMLControlName['NAME'] . '">';
                $html .= '<option value="">' . '(не установлено)' . '</option>';
                foreach ($arSections as $id => $name) {
                    $selected = ($value['VALUE'] == $id) ? 'selected' : '';
                    $html .= '<option value="' . $id . '" ' . $selected . '>' . htmlspecialchars($name) . '</option>';
                }
                $html .= '</select>';

                return $html;
            },
            'GetPropertyFieldHtmlMulty' => function ($arProperty, $value, $strHTMLControlName) {
                // Если требуется поддержка многозначных полей, аналогично
                return ''; // здесь можно реализовать поддержку, если нужно
            },
            'GetUserTypeDescription' => function () {
                // Здесь вы можете добавить описание для вашего типа свойства
                return [
                    'PROPERTY_TYPE' => 'S',
                    'USER_TYPE' => 'iblock_section',
                    'DESCRIPTION' => 'Выбор корневых разделов',
                    'GetAdminListViewHTML' => function ($arProperty, $value, $strHTMLControlName) {
                        // Отображение значения в списках
                        return htmlspecialchars($value['VALUE']);
                    },
                ];
            },
            'ConvertToDB' => function ($arProperty, $value) {
                // Сохранение значения
                return [
                    'VALUE' => $value['VALUE'],
                ];
            },
            'ConvertFromDB' => function ($arProperty, $value) {
                // Получение значения из базы данных
                return [
                    'VALUE' => $value['VALUE'],
                ];
            },
        ];
    });
}
