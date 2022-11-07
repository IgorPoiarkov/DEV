<?php
$foodTypes = require_once('arrays3/food.php');
$ration = require_once('arrays3/ration.php');

//var_dump($foodTypes);
//var_dump($ration);

/**
 * У нас есть 2 массива
 * $foodTypes - массив с калорийностью, описанием еды по содержанию белков, жиров и углеводов
 * $ration - информация о том, что наш подопытный ел за неделю. Каждая цифра ссылается на id в массиве foodTypes
 * 
 * Нужно сделать несколько разных задач с этими массивами (лучше в разных файлах)
 * 
 * Задача 1. Вывести на экран информацию о блюде, которое наш пользователь ел чаще остальных

 * Подсказка
 * Перебирать в первую очередь нужно $ration
 */

foreach ($ration as $date => $mealForDate) {
	var_dump($mealForDate[0]); die;
}

