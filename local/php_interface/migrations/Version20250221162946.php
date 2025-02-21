<?php

namespace Sprint\Migration;


class Version20250221162946 extends Version
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

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'services',
            'detail_pages'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Лечение алкоголизма',
    'CODE' => 'lechenie-alkogolizma',
    'SORT' => '1',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'от 3000 ₽',
    'DESCRIPTION_TYPE' => 'text',
  ),
  1 => 
  array (
    'NAME' => 'Наркологическая помощь',
    'CODE' => 'narkologicheskaya-pomoshch',
    'SORT' => '2',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'от 3000 ₽',
    'DESCRIPTION_TYPE' => 'text',
  ),
  2 => 
  array (
    'NAME' => 'Наркомания',
    'CODE' => 'narkomaniya',
    'SORT' => '3',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'от 15 000 ₽',
    'DESCRIPTION_TYPE' => 'text',
  ),
)        );
    }
}
