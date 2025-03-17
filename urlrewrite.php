<?php
$arUrlRewrite=array (
  18 => 
  array (
    'CONDITION' => '#/(.+)/\\??(.*)?#',
    'RULE' => '$2',
    'ID' => '',
    'PATH' => '/$1.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/articles/index.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/doctors/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/doctors/index.php',
    'SORT' => 100,
  ),
);
