<?php
/*
$sometext = 'okey';
switch ($sometext) {
	case 'value':
		echo 'Выражение верно okey-2';
		break; // Используется, чтобы выйти из скрипта

	case 'okey':
		echo 'Выражение верно okey';
		break;

	default:
		echo 'Выражение не верно okey';
		break;
}

// Конструкцию SWITCH можно записать как If ELSE. Преимущество свитча в том, что он требует меньше нагрузки, меньше итераций по прохождению  и быстрее читается интерпретатором.


$num = 100;
switch (false) {
	case ($num == 100 && $num <= 590);
		echo 'false';
		break;

	case ($num > 0 && $num <= 500);
		echo 'true';
		break;

	default:
		echo 'false23';
		break;
}


// Оператор goto

$nums = 1;

begin:
$nums++;
echo "$nums<br>";
if ($nums >= 22) goto finish;
goto begin;
finish:

*/



//Домашка
/*
ЧИТАЕМ ИЗУЧАЕМ:

https://www.php.net/manual/ru/control-structures.switch.php
http://www.php.su/learnphp/cs/?sc
https://www.php.net/manual/ru/control-structures.goto.php
https://habr.com/ru/post/62863/

ПРАКТИКА:

 if ($flag1 && $flag2) {
 	echo "<p>Оба флага возвращают true</p>";
 }else{
 	echo "<p>Один или оба флага возвращают false</p>";
 }
 if ($flag1 || $flag2) {
 	echo "<p>Оба или один флаг возвращают true</p>";
 }else{
 	echo "<p>Оба флага возвращают false</p>";
 }
*/
/*
Переписать оба условия в конструкцию switch

*/
//Напишите любую конструкцию для практики goto, если ничего не придумали, перепишите с занятия, но используйте другие условные операторы.


switch (true) {
	case ($flag1 && $flag2);
		echo "<p>Оба флага возвращают true</p>";
		break;
	default:
		echo "<p>Один или оба флага возвращают false</p>";
		break;
}
switch (true) {
	case ($flag1 || $flag2);
		echo "<p>Оба или один флаг возвращают true</p>";
		break;
	default:
		echo "<p>Оба флага возвращают false</p>";
		break;
}


echo '<hr>';

switch (true):
	case ($flag1 && $flag2) ?>
	<p>Оба флага возвращают true</p>
<?php
	default: ?>
	<p>Один или оба флага возвращают false</p>
<?php endswitch;

switch (true):
	case ($flag1 || $flag2) ?>
<p>Оба или один флаг возвращают true</p>
<?php
	default: ?>
	<p>Оба флага возвращают false</p>
<?php endswitch;

echo '<hr>';


//GO to

$num2 = 77;
begin:
$num2--;
echo $num2 . ', ';
if ($num2 <= 63) goto finish;
goto begin;
finish:
