<?php

//Подключение файлов:

require_once "utilites/test_require.php"; //Это называется Относительный путь
require_once __DIR__ . "/utilites/test_require.php"; // Это Абсолютный (связка константы DIR и относительного пути+/ )

echo '<hr>';
echo 'Это файл "les9.php"';
echo '<br>';
echo __DIR__;
echo '<br>';


// Константы класса==============================================

class ConstantClass
{
	const NAME = "const";
}
//echo ConstantClass -> NAME - НЕЛЬЗЯ. Такая запись не будет работать с константами.
echo ConstantClass::NAME; // Обращаться к константе нужно так
echo '<br>';
echo defined('ConstantClass::NAME'); // Так проверяется существование константы внутри класса. Вывод будет в виде булевого значения, то есть 1 или 0. ИЛИ проверку можно выполнить с помощью условия:
echo '<br>';
if (defined('ConstantClass::NAME1')){
	echo 'Константа "NAME1" существует';
}  else{
	echo 'Константа "NAME1" не существует';
}



//Домашка===================================================

echo '<hr>';
echo "Домашка <br>";
//1) Создан файл под названием les9homework1.php
//2)
require 'les9homework1.php';
//3) Создан файл под названием les9homework2.php
echo '<br>';

//4)
require '/app/Homework-Andrievskiy/les9homework2.php';
echo '<br>';
//require __DIR__.'/les9homework2.php';
//5)
require __DIR__.'/les9homework2.php'; 