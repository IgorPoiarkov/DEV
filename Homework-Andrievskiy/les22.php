<?php
// Функции
// function myFunc(){
// 	операторы
// }

function getSum()
{
	$sum = 1 + 2;
	echo $sum;
}

getSum(); // Можно вызвать функцию так


echo '<hr>';

function getSum1()
{
	$sum1 = 2 + 4;
	return $sum1;
}

$some = getSum1();
echo $some;
// ! Фунцию так же можно вызвать выше(до того как), чем она инициализирована, но не в случае, когда она инициализированна внутри if
echo '<hr>';

function getSum2($num2, int $num3)
{ //Параметры - при инициализации функции
	$sum2 = $num2 + $num3;
	return $sum2;
}

echo getSum2(22.98, 55.76); // Аргументы - при вызове ее
echo '<br>';

$aa = 10;
$bb = 20;
echo getSum2($aa, $bb); // переменные могут быть использованы в качестве аргументов

// С помощью добавления пометки типа данных к return, мы можем на выходе получить результат с нужным нам типом данных

function getSum3($num4, $num5): int
{
	$sum3 = $num4 + $num5;
	return $sum3;
}

echo '<hr>' . getSum3(2, 4.35); // Выведет 6, а не 6.35

echo '<hr>' . 'Домашка:' . '<br>';
// Домашка:

/*
ЧИТАТЬ:
https://www.php.net/manual/ru/functions.user-defined.php
https://www.php.net/manual/ru/functions.arguments.php
https://www.php.net/manual/ru/functions.returning-values.php
https://www.php.net/manual/ru/functions.variable-functions.php
https://www.php.net/manual/ru/functions.internal.php


ДЕЛАТЬ:
1) Создайте 4 функции, которые будут делать и возвращать значение
--сложение (+)
--вычитание (-)
--умножение (*)
--деление (/)
2) *Создайте функцию, которая принимает одно целое число, а внутри производит следующие операции
--к выбранному число добавляем точно такое же
--то что получилось умножаем на 2
--и то что вышло делим на 4
--результат выводим через return
3) **Создайте функцию с одним параметром, который обозначает имя пользователя (строка)
--внутри функции проверьте текущее время
----22:00 - 06:00 - доброй ночи
----07:00 - 16:00 - добрый день
----17:00 - 21:00 - добрый вечер
--добавьте к имени приветствие исходя из времени
--Должно получится что-то типа того (Доброго вечера Андрей)
*/

//1)
function getSum5($num6, $num7)
{
	$sum5 = $num6 + $num7;
	return $sum5;
}

echo getSum5(10, 35) . '<br>';

function getSubtraction($num1, $num2)
{
	$sub = $num1 - $num2;
	return $sub;
}

echo getSubtraction(20, 2) . '<br>';

function getMultiplication($num1, $num2)
{
	$mult = $num1 * $num2;
	return $mult;
}

echo getMultiplication(5, 8) . '<br>';

function getDivision($num1, $num2)
{
	$divis = $num1 / $num2;
	return $divis;
}

echo getDivision(49, 7) . '<br>';


//2)
function getResult(int $num)
{

	$res = $num + $num;
	$res = $res * 2;
	$res = $res / 4;
	return $res;
}

echo  getResult(rand()) . '<hr>';

//3)
date_default_timezone_set('America/Los_Angeles');
echo date('H:i a') . '<br>' . '<hr>' . '<br>';

function getString(string $name)
{


	$time = date('H');
	$timeIs = 0;

	if ($time > 22 && $time < 00) {
		$timeIs = "Good night, $name !";
	} else if ($time >= 00 && $time < 5) {
		$timeIs = "Good night, $name !";
	} else if ($time >= 5 && $time < 12) {
		$timeIs = "Good morning, $name !";
	} else if ($time >= 12  && $time <= 19) {
		$timeIs = "Good afternoon, $name !";
	} else {
		$timeIs = "Good evening, $name !";
	}

	return $timeIs;
}

echo  getString('Igor');
