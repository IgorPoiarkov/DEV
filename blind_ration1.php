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

// foreach ($ration as $date => $mealForDate) {
// 	var_dump($mealForDate[0]); die;
// }



//var_dump($foodTypes[0]['id']);








$array = [];


foreach ($ration as $date => $mealForDate) {
	foreach ($mealForDate as $mealId) {
		if (isset($array[$mealId])) {

			$array[$mealId] += 1;
		} else {
			$array[$mealId] = 1;
		}
	}
}

var_dump($array);

$maxs = array_keys($array, max($array));

var_dump($maxs);
foreach ($maxs as $maxsKey => $maxsValue) {
	foreach ($foodTypes as $meal => $mealSpecs) {
		if ($maxsValue == $mealSpecs['id']) {
			echo $mealSpecs['name'] . '<br>';
		}
	}
}
