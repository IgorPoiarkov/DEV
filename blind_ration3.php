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
 * Задача 3. Посчитать, сколько белков, жиров и углеводов пожиратель съел за неделю
 * 
 * Подсказка
 * Перебирать в первую очередь нужно $ration
 */


// Считаем жиры
$totalFat = 0;
foreach ($ration as $date => $mealForDate) {
	$fatForDate = 0;
	foreach ($mealForDate as $id) {
		$fat = 0;
		foreach ($foodTypes as $meal => $mealSpecs) {
			if ($mealSpecs['id'] == $id) {
				$fat = $mealSpecs['fat'];
			}
		}
		$fatForDate += $fat;
	}
	$totalFat += $fatForDate;
}


//Считаем белки
$totalProteins = 0;
foreach ($ration as $date => $mealForDate) {
	$proteinsForDate = 0;
	foreach ($mealForDate as $id) {
		$proteins = 0;
		foreach ($foodTypes as $meal => $mealSpecs) {
			if ($mealSpecs['id'] == $id) {
				$proteins = $mealSpecs['proteins'];
			}
		}
		$proteinsForDate += $proteins;
	}
	$totalProteins += $proteinsForDate;
}


//Считаем углеводы
$totalCarbohydrates = 0;
foreach ($ration as $date => $mealForDate) {
	$carbohydratesForDate = 0;
	foreach ($mealForDate as $id) {
		$carbohydrates = 0;
		foreach ($foodTypes as $meal => $mealSpecs) {
			if ($mealSpecs['id'] == $id) {
				$carbohydrates = $mealSpecs['carbohydrates'];
			}
		}
		$carbohydratesForDate += $carbohydrates;
	}
	$totalCarbohydrates += $carbohydratesForDate;
}

//Вывод:
echo 'Белков: '.$totalProteins.', Жиров: '.$totalFat.', Углеводов: '.$totalCarbohydrates;