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
 * Задача 4. Посчитать, чего он съел за неделю больше - белков, жиров или углеводов
 * и вывести это в виде (например) "За неделю вы съели больше всего белков"
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


//Чего больше
if ($totalCarbohydrates > $totalFat && $totalCarbohydrates > $totalProteins) {
	echo "За неделю вы съели больше всего углеводов";
} else if ($totalFat > $totalCarbohydrates && $totalFat > $totalProteins) {
	echo "За неделю вы съели больше всего жиров";
} echo  "За неделю вы съели больше всего белков";


