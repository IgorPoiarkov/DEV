<?php

// Массивы

$arr = [1, 2, 3];

list ($one, $two, $three) = $arr;

echo $two . "<br>";
echo $arr[1]. "<br>";
echo $three . "<hr>";

// Обход массива с помощью цикла FOR

for ($i=0; $i < count($arr); $i++) { 
	echo $arr[$i]. "<br>";
}

$igor = [
	'name' => 'Igor',
	'age' => 30,
	'weight' => 74
];

foreach ($igor as $key => $value) {
	echo $key . "-" . $value . "<br>";
}
// Цикл foreach удобно использовать, когда надо перебрать все элементы массива. Если же нужно перебрать ограниченное количество, то можно использовать for


// Домашка:
echo "<hr> Домашка: <br>";
/*
Читать:
https://www.php.net/manual/ru/control-structures.foreach.php
https://www.php.net/manual/ru/ref.array.php
https://habr.com/ru/post/172647/

ПРАКТИКА:
1) Возьмите массивы с 19 занятия (год и месяца)
2) Выведите все элементы массива используя вначале цикл FOR после FOREACH

ЗАДАНИЕ СО ЗВЕЗДОЧКОЙ*
3) Попробуйте поработать с многомерным массивом при помощи foreach
4) Например выводите  echo только значения вложенного (внутреннего массива)
5) Подсказка (используйте foreach внутри foreach ну и гуглите )))
*/

$months = [
	'January' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'February' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'March' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'April' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'May' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'June' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'July' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'August' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'September' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'October' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'November' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'],
	'December' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday']

];
//1)
echo "<hr> *: <br>";

foreach ($months as $currentMonth => $days) {
	foreach ($days as $key => $value) {
		echo "$key - $value <br>";
	} die;
}



