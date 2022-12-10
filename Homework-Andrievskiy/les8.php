<?php

//Констатнты

define('PI', 3.14); // Слово define определяет константу. В скобках указывается сначала ее имя(принято заглавными буквами),  затем ее значение)
echo PI; // При выводе константы не нужно использовать $.
//echo pi; // Будет работать только, если имя константы будет pi

/*
define('PI', 3.1);

echo PI; // Выведет 3.14, так переопределение не работает с константами
*/

// С помощью функции defined можно проверить сущестует ли такая константа в нашем коде или нет. Результат будет в виде 1 или 0 :

echo defined('PI');// Выведет 1, так как конст 'PI' существует у нас. 
echo defined('PI1');// Выведет 0, так как 'PI1' не существует.

echo '<br>';
echo 'File name is "'.__FILE__.'"';
echo '<br>';
echo __DIR__;

//Домашка
/*
Написать код с задействованием, каждой константы приведенной ниже:
__LINE__
__FILE__
__FUNCTION__
__CLASS__
____METHOD__
__DIR__
PHP_VERSION
OS_VERSION
PHP_EOL
*/
echo '<br>';

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __FUNCTION__;
echo '<br>';
echo __CLASS__;
echo '<br>';
echo __METHOD__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo PHP_VERSION;
echo '<br>';

echo '<br>';
echo PHP_EOL;
