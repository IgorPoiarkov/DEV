<?php


// Массивы
// 1й способ задать массив
$arr = array('One', 'Two', 'Three');

echo $arr[0]; // Выведет 'One', так как по ключу 0 в массиве лежит это значение

echo $arr[1]; // А здесь 'Two';

print_r($arr); // Функция показывает что лежить в переменной(в данном случае в массиве)

// Для того , чтобы можно было наглядно удобно посмотреть что лежит в массиве, можно использовать следующий способ записи(обернуть в HTML тег 'pre')

echo '<pre>';
print_r($arr);
echo '</pre>';
// ИЛИ:
var_dump($arr);

//2й способ задать массив
$arr2 = [11, 22, 33];
echo $arr2[1] . '<br>';

//ПОдсчет динны массива
echo count($arr) . '<br>';

// Вывод последнего элемента массива
echo $arr[count($arr) - 1] . '<br>';

// Также, массив можно создать следующим методом:
$var = "php 8.2";
$arr3 = (array)$var;
var_dump($arr3);









// Домашка
/*
ЧИТАТЬ:
https://www.php.net/manual/ru/language.types.array.php
http://www.php.su/learnphp/datatypes/?array
https://htmlacademy.ru/blog/boost/backend/associative-arrays-php

ПРАКТИКА:
Создать три массива
1)с годами от 2000 до 2020
2)с месяцами (все 12 месяцев)
3)с днями недели (семь дней)
Выводить в одну строку данные с трех массивов:
--Любой год, любой месяц и любой день
--С каждого массива значение индекса 4
--С каждого массива последний индекс, получать через длину массива - 1
*/

//1)
$years = [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
var_dump($years);

//2)
$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var_dump($months);

//3)
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
var_dump($days);


//4)
echo "$years[4] $months[5] $days[6] <br>";

//5)
echo $years[4] . '<br>';
echo $months[4] . '<br>';
echo $days[4] . '<br>';

//6)
echo $years[count($years) - 1] . '<br>';
echo $months[count($months) - 1] . '<br>';
echo $days[count($days) - 1] . '<br>';
