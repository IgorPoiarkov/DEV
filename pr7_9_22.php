<?php
/*
$str = 'Petya,Vasya,Stepan';

$a = explode(',', $str); //Эта функция превращвет строку в массив

var_dump($a);


foreach ($a as $key => $name) {
	$a[$key] = $name . ' Krasavchik';
}
$newStr = implode($a); // Собирает массив в строку
var_dump($newStr);


//Вася - редиска

//strpos - поиск вхождение , поиск кусочка строки с строке
//str_replace - замена

foreach ($a as $key => $name) {
	if (!(strpos($name, 'Petya') === false)) {
		$name = str_replace('Krasavchik','Rediska', $name);
	}
	echo $name;
}

*/
//===================================================================

$sales = '2022-09-01, 2022-01-01, 2010-01-09, 2007-09-01, 2012-09-03';

//explode
//substr
//1. Бьем на массив
//2. каждый элемент выделяем год substr
//3. объявляем массив и добавляем +1 к году
//4. isset - смотрит есть ли какоето значение в этом ключе



// $a = explode(', ', $sales);
// //var_dump($a);

// foreach ($a as $key => $rest) {
// 	$rest = substr($rest, 0, -6);

// 	var_dump($rest);
// }


$counterArray = [];
if (isset($counterArray[2])) {
	$counterArray[2] = 0;
} else {
	$counterArray[2] = 1;
}


//var_dump($a);

$counterArray = [];
foreach ($a as $key => $date) {
	$year = substr($date, 0, -6);

	if (isset($counterArray[$year])) {
		$counterArray[$year] += 1;
	} else {
		$counterArray[$year] = 1;
	}
}
var_dump($counterArray);
