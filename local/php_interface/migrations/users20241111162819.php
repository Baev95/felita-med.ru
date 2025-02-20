<?php

namespace Sprint\Migration;


class users20241111162819 extends Version
{
    protected $author = "mizevvln@yandex.ru";

    protected $description = "";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->UserTypeEntity()->saveUserTypeEntity(array (
  'ENTITY_ID' => 'HLBLOCK_Catalogue',
  'FIELD_NAME' => 'UF_PHONE',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'PHONE',
  'SORT' => '1',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 10,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Clinic phone number',
    'ru' => 'Номер телефона клиники',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Clinic phone number',
    'ru' => 'Номер телефона клиники',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Clinic phone number',
    'ru' => 'Номер телефона клиники',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Fill in your phone number',
    'ru' => 'Заполните номер телефона',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Field to fill in the clinic phone number',
    'ru' => 'Поле для заполнение номер телефона клиники',
  ),
));
        $helper->UserTypeEntity()->saveUserTypeEntity(array (
  'ENTITY_ID' => 'HLBLOCK_Catalogue',
  'FIELD_NAME' => 'UF_ADRESS',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'ADRESS',
  'SORT' => '2',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Clinic address',
    'ru' => 'Адрес клиники',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Clinic address',
    'ru' => 'Адрес клиники',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Clinic address',
    'ru' => 'Адрес клиники',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Fill in the clinic address',
    'ru' => 'Заполните адрес клиники',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Field for filling in the clinic address',
    'ru' => 'Поле для заполнение адреса клиники',
  ),
));
        $helper->UserTypeEntity()->saveUserTypeEntity(array (
  'ENTITY_ID' => 'HLBLOCK_Catalogue',
  'FIELD_NAME' => 'UF_CITY2',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'CITY2',
  'SORT' => '3',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'In what city',
    'ru' => 'В каком городе',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'In what city',
    'ru' => 'В каком городе',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'In what city',
    'ru' => 'В каком городе',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Fill in which city',
    'ru' => 'Заполните в каком городе',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Field for filling in the city (in the prepositional case, city2 Example: in Moscow)',
    'ru' => 'Поле для заполнение города (в предложном падеже, city2 Пример: в Москве)',
  ),
));
        $helper->UserTypeEntity()->saveUserTypeEntity(array (
  'ENTITY_ID' => 'HLBLOCK_Catalogue',
  'FIELD_NAME' => 'UF_COORDINATES',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'COORDINATES',
  'SORT' => '4',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Clinic coordinates',
    'ru' => 'Координаты клиники',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Clinic coordinates',
    'ru' => 'Координаты клиники',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Clinic coordinates',
    'ru' => 'Координаты клиники',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Field not filled in',
    'ru' => 'Не заполнено поле',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Clinic coordinates in the format: 45.001116, 41.132429',
    'ru' => 'Координаты клиники в формате: 45.001116, 41.132429',
  ),
));
        $helper->UserTypeEntity()->saveUserTypeEntity(array (
  'ENTITY_ID' => 'HLBLOCK_Catalogue',
  'FIELD_NAME' => 'UF_HEADER',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'HEADER',
  'SORT' => '5',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Information in the header',
    'ru' => 'Информация в хедере',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Information in the header',
    'ru' => 'Информация в хедере',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Information in the header',
    'ru' => 'Информация в хедере',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => 'Информация в хедере',
  ),
));
        $helper->UserTypeEntity()->saveUserTypeEntity(array (
  'ENTITY_ID' => 'HLBLOCK_Catalogue',
  'FIELD_NAME' => 'UF_FOOTER',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'FOOTER',
  'SORT' => '6',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Information in the footer',
    'ru' => 'Информация в футере',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Information in the footer',
    'ru' => 'Информация в футере',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Information in the footer',
    'ru' => 'Информация в футере',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Information in the footer (in the very last block)',
    'ru' => 'Информация в футере (в самом последнем блоке)',
  ),
));
    }

}
