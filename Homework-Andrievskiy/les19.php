<?php

// Ассоциативные и индексные массивы

$arr = ['name' => 'Igor', 'age' => 30]; //  Ассоциативный массив

$arr2 = ['Igor', 31]; // Индексный  массив

// Многомерный массив

$people = [
	'Igor' => ['age' => 30, 'height' => 177],
	'Ivan' => ['age' => 41, 'height' => 184],
	'Katya' => ['age' => 39, 'height' => 173]
];

echo $people['Igor']['height']; // Таким образом можно зарыться в многомерный массив(обратить внимание на кавычки)

// Интерполяция элемента массива в строку
echo '<br>';
echo "В декабре 2022-го года Игорю {$people['Igor']['age']}"; // Обращение к элементу многомерного массива в строке происходит с помощью обрамление его с помощью фигурных скобок



echo "<br> <hr>  Домашка: <br> ";



// Домашка
/*
ЧИТАЕМ: 
https://www.php.net/manual/ru/language.types.array.php
https://puzzleweb.ru/php/22_arrays2.php
https://habr.com/ru/sandbox/68770/

ПРАКТИКА:
1) Создайте два одномерных массива:
--С индексными ключами на 10 элементов
--С Ассоциативными ключами на 10 элементов
2) Создайте многоуровневый массив
--Первый уровень это количество месяцев в году (индексный)
--Второй уровень это дни недели от понедельника по воскресенье (ассоциативный массив)
3) Распечатайте многомерный массив функцией print_r
4) Выведите несколько предложений, красиво интегрировав внутрь элементы многомерного массива используя правила интерполяции
*/


//1)
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Numeric array
$arr2 = [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10]; // Associative array

var_dump($arr1);
var_dump($arr2);

//2)
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

//3)
echo '<pre>';
print_r($months);
echo '</pre>';

var_dump($months);

//4)
echo "I woke up at 7:30 a.m. on {$months['January'][1]}.";


