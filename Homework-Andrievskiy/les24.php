<?php

// Глобальные переменные 

function getSum()
{
	$var = 2;  // Локальная переменная
	return $var;
}

$var = 5;  // Внешняя переменная


var_dump(getSum()); // Выведет 2

var_dump($var); // Выведет 5, т.к. локальная переменная никак не влияет на внешнюю переменную и наоборот

// ! Чтобы локальная переменная стала ГЛОБАЛЬНОЙ, нам нужно перед переменной написать ключевое слово global

function getSum1()
{
	global $var1; // В случае с глобальной переменной объявлять ее можно только так. Глобальная переменная видима везде
	$var1 = 2;
	return $var1;
}

$var1 = 5;

var_dump(getSum1());
var_dump($var1); // Выведет 2, несмотря на то, что $var1 = 5, так как внутри фунцкции она объявляна как глобальная => ее значение будет такое

// Статические переменные

function calculator()
{
	$start = 0;
	return ++$start;
}

echo calculator();
echo calculator();
echo calculator(); // Сколько бы мы раз не вызывали эту функцию, в переменной старт на выходе всегда будет 1

echo '<hr>';
//Функция не занимает место в оперативной памяти. Начинает занимать оперативную память только когда мы ее вызываем

// Если мы хотим, чтобы локальная переменная при каждом вызове функции не инициализировалась заново, нам нужно использовать ключевое слово static

function calculator1()
{
	static $start = 0;
	return ++$start;
}

echo calculator1(); // 1
echo calculator1(); // 2
echo calculator1(); // 3

// Возврат функцией массива
echo '<hr>';
function myFriends()
{
	$kate = 'Kate';
	$nick = 'Nick';
	$vadim = 'Vadim';

	return [$kate, $nick, $vadim];
}

var_dump(myFriends());








// Домашка
/*
Урок №24 https://youtu.be/KMJTfWeU8ps
ЧИТАТЬ:
https://www.php.net/manual/ru/language.variables.scope.php
http://www.php.su/learnphp/vars/?localvars
https://www.php.net/manual/ru/functions.returning-values.php

ПРАКТИКА:
1) Создайте функцию с глобальной переменной, которая будет делать следующие вещи:
	a)Принимать параметрами два числа
	b) Внутри умножать их друг на друга
	c) Возвращать глобальную переменную с результатом
2) *Вызовите функцию два раза
	a) Второй раз используйте первый параметр саму функцию
3) *Создайте функцию с следующим функционалом:
	a) Принимает два параметра (имя, дату возраст)
	b) внутри функции считаете (преобразовываете) возраст в количество прожитых месяцев
	c) внутри функции считаете (преобразовываете) возраст в количество прожитых дней
	d) Через return возвращаете массив:
		[имя, возраст, месяца, дни]
 */

echo '<hr>';
echo 'Domashka' . '<br>';

//1)
function getMultiplication($num1, $num2)
{
	global $num;
	$num = $num1 * $num2;
	return $num;
}

var_dump(getMultiplication(3, 5));


//2)
var_dump(getMultiplication(getMultiplication(4, 5), 69));


//3)
function profile($name, $age)
{
	$months = $age * 12;
	$days = $months * 30;
	return [$name, $age, $months, $days];
}

var_dump(profile('Igor', 30));
