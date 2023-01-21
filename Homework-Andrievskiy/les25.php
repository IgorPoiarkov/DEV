<?php
// Рекурсивные функции


function recur($num)
{
	// Если параметр $num меньше 10, то мы продолжаем рекурсию
	if ($num >= 10) {
		// Уменьшать значения параметра $num и его выводим в браузер
		echo ($num--) . '<br>';
		// Производим рекурсивный вызов функции
		recur($num);
	} else return;
}


recur(15);




// Домашка
// https://youtu.be/QGE96P7MPl0
echo '<hr>' . 'Домашка' . '<br>';
/*
ЧИТАТЬ:
http://www.php.su/articles/?cat=examples&page=019
https://www.php.net/manual/ru/functions.user-defined.php
https://habr.com/ru/post/280944/

ПРАКТИКА:
Написать рекурсию по примеру занятия, где
Принимаем число, как параметр
если оно больше 100 отнимаем каждый раз 5 и выводим через echo
Запустить и проверить на правильность


ЗАДАЧА СО *
Создайте многомерный массив или используйте с прошлых занятий готовый
Напишите рекурсивную функцию обхода этого массива с выводом его элементов
*/

//1
function recur1($num1)
{
	if ($num1 > 100) {
		echo ($num1 -= 5) . '<br>';
		recur1($num1);
	} else return;
}

recur1(150);

echo '<hr>';

$profile = [
	'Igor' => ['eyes' => 'brown', 'height' => 178, 'weight' => 78],
	'Nick' => ['eyes' => 'green', 'height' => 183, 'weight' => 75]
];





function recarray($arr) {
	foreach($arr as $key => $value) {
		if(!is_array($value)) echo $value . "<br>";
		recarray($value);
	}
}
recarray($profile);



//var_dump($profile);
// for ($i=1; $i <= count($profile); ++$i) { 
// 	var_dump ($profile[$i]['eyes']).'<br>';
// }

// foreach ($profile as $number => $specs) {
// 	foreach($specs as $value){
// 		echo $number.$value.'<br>';
// 	}
// }

