<?php
/*
 ДЕЛАЕМ:
1)Создаем переменную со значением времени (от 00 до 23)только часы, без минут.

2)Создаем вторую переменную (timeIs), присваивая туда значение 0;

3)Используя условный оператор определяем какое время и даем рекомендации
	---Например если промежуток с 23 по 06 присваиваем в переменную 
		timeIs = 1, если с 07 по 15 timeIs = 2 и т.д.
	---Можете поделить 24 часа на любое количество, но минимум 3!
	---Подумайте при помощи чего вы будете проверять промежутки

	4)Создайте второе условие if с перемешкой html и проверяя переменную timeIs значение выводите в теге <h1>Сейчас ночь </h1>, ну или что-то другое в зависимости от диапазона времени

 */

// date_default_timezone_set('America/Los_Angeles');



// $timeIS = 0;

// var_dump(date('H:i'));

// if ('23:00' <= date('H:i')) {
// 	$timeIs = 1;
// } else if (date('H:i') <= '06:00') {
// 	$timeIs = 1;
// } else if ('06:00' < date('H:i')) {
// 	$timeIs = 2;
// } else if (date('H:i') <= '15:00') {
// 	$timeIs = 2;
// } else if ('15:01' < date('H:i')) {
// 	$timeIs = 3;
// } else if (date('H:i') <= '22:59') {
// 	$timeIs = 3;
// }
// echo $timeIs;

date_default_timezone_set('America/Los_Angeles');
echo date('H:i a') . '<br>' . '<hr>' . '<br>';
$time = date('H');
$timeIs = 0;

if ($time >= 22 && $time < 5) {
	$timeIs = 1; // Good night!

} else if ($time >= 5 && $time < 12) {
	$timeIs = 2; // Good morning!

} else if ($time >= 12  && $time <= 17) {
	$timeIs = 3; // Good afternoon!
} else {
	$timeIs = 4; // Good evening!

}

echo $timeIs . '<hr>';
?>

<?php

// 
if ($timeIs == 1) : ?>
	<h1>Good night!</h1>
<?php
elseif ($timeIs == 2) : ?>
	<h1>Good morning!</h1>
<?php
elseif ($timeIs == 3) : ?>
	<h1>Good afternoon!</h1>
<?php
else : ?>
	<h1>Good evening!</h1>
<?php
endif;

// Внимание! else if и elseif не одно и то же! else if раздельно пишется , когда используются фигурные скобки. Когда двоеточие - слитно!