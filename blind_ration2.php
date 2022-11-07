<?php
$foodTypes = require_once('arrays3/food.php');
$ration = require_once('arrays3/ration.php');

// var_dump($foodTypes);
// var_dump($ration);

/**
 * У нас есть 2 массива
 * $foodTypes - массив с калорийностью, описанием еды по содержанию белков, жиров и углеводов
 * $ration - информация о том, что наш подопытный ел за неделю. Каждая цифра ссылается на id в массиве foodTypes
 * 
 * Нужно сделать несколько разных задач с этими массивами (лучше в разных файлах)
 * 
 * Задача 2. Вывести на экран даты, когда любитель покушать употребил блюд более чем на 300 калорий

 * Подсказка
 * Перебирать в первую очередь нужно $ration
 */



foreach ($ration as $date => $mealForDate) {
	$caloriesForDate = 0;

	foreach ($mealForDate as $id) {
		$calories = 0;
		foreach ($foodTypes as $meal => $mealSpecs) {
			if ($mealSpecs['id'] == $id) {
				//var_dump($mealSpecs['id']);

				$calories = $mealSpecs['calories'];
			}
		}
		$caloriesForDate += $calories;
		//var_dump($calories);
	}
	if($caloriesForDate > 300){
		echo $date. '<br>';
	};
}
