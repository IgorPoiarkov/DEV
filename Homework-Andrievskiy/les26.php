<?php
// Вложенные функции. Не может быть использована до тех пор пока не будет вызвана внешняя функция


	$arr = [1,2,4];
function box($items){

	function inn(){
		echo "TEST";
	}
	inn();
	var_dump($items);
}

box($arr);

// print_r()
echo '<br>';
// Динамическое имя функции

//1
function hello(){
	return 'Hello';
}

$var = hello(); 
echo $var;
// В то же время:
echo '<br>';
function hello1(){
	echo 'Hello';
}

$var = hello1(); // Здесь прямо во время записи функции в переменную, функция уже отработает
echo '<br>';

// Анонимные функции - не имеют собственных имен. Запускаются и сипользуются в качестве аргумента другими функциями

$some = function (...$arr){
	foreach ($arr as $value){
		echo $value.'<br>';
	}
};
// ! В обычных функциях не ставится в конце ";" , а в анонимных ставится, так как идет присвоение в переменную
$some(23, 34, 45, 56432);

echo '<hr>';
// Домашка:
/*
ЧИТАТЬ:
https://www.php.net/manual/ru/functions.anonymous.php
http://www.php.su/functions/custom/?1
https://www.php.net/manual/ru/functions.variable-functions.php

ПРАКТИКА:

1) Доделать функцию с урока (ТЗ в самом ролике)

2) Напишите две разные функции с использованием динамического имени:
а) Первую с аргументами
b) Вторую без аргументов

3) Создайте функцию sum ( ) , которая принимает любое количество числовых аргументов и возвращает их сумму.
*/
//2a)
function result1($num){
	$summ = $num + $num*40;
	return $summ;
}

$res1 = result1(6);

echo $res1;
echo '<br>';
//2b)

function result2(){
	echo 'Hello World!';
}
$res2 = result2();

echo '<br>';

//3)
$items1 = [3, 4, 56];
function sum(...$arr){
	echo array_sum($arr);
}

echo sum(...$items1);
echo '<br>';

// Альтернативный вариант решения задачи номер 3
function sum1(...$arr){
	$sum = 0;
	for($i=0;$i<=count($arr)-1;$i++){
		$sum += $arr[$i];
	}
	return $sum;
}

echo sum1(3, 4, 5);

?>