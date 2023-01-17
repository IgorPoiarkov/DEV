<?php

//  https://youtu.be/t2ho3fFhkR8

// Параметры функции 
// function getResult($var) {
// 	$var = $var * 2;
// 	return $var;
// }

// $new = 10;
// echo getResult($new). "<br>";
// echo $new;



// Дальше будет та же самая функция, но с добавлением амперсада & перед параметром. Это нужно для того, чтобы в переменную передать значение из функции, параметр по ссылке
// function getResult(&$var) {
// 	$var = $var * 2;
// 	return $var;
// }

// $new1 = 20;
// echo getResult($new1)."<br>";
// echo $new1;


// Необязательные параметры
/*
function getResult ($var1 = 2, $var2 = 4){
	$var = $var1 * $var2;
	return $var;
}

echo getResult()."<br>";
echo getResult(4, 5)."<br>";
echo getResult(3)."<br>"; // Задан только первый параметр, второй берется из иниц функции

// Переменное или изменяемое количество параметров
function mylist(...$items){ // Таким способ мы можем передать в аргумент функции массив
	foreach ($items as $v){
		echo $v . "<br>";
	}
}

mylist('Nick','Mike', 'Sara', 'Andrei');

$some = ['PHP', 'Python', 'JS', 'HTML', 'CSS'];
mylist(...$some); // "..." ставить обязательно
*/
// Домашка:

echo '<hr>';

/*
1) Создайте массив с именами ваших друзей
2) Создайте функцию, которая будет принимать аргументов массив и внутри каждый элемент массива будет выводить в браузер с приветствием и 	именем друга
3) Создайте функцию для вычисления математических операций, простых:
a) На входе три параметра:
---первое число
---второе число
---математический символ (+, -, /, *)
b) Внутри функции берем два числа и с ними делаем математическую операцию исходя из полученного символа
c) Возвращаем результат наружу через return
*/


$names = ['Ilya', 'Vil', 'Rustam'];

function myFriends(...$items){
	foreach($items as $value){
		echo "Hi, my dear $value ! <br>";
	}
}

myFriends(...$names);

echo '<br>';


function getRes($num1,$num2,  $num3){
	if($num3 == '+'){
		$num4 = $num1 + $num2;
	} else if($num3 == '-'){
		$num4 = $num1 - $num2;
	} else if($num3 == '*'){
		$num4 = $num1 * $num2;
	} else if($num3 == '/'){
		$num4 = $num1 / $num2;
	}
	return  $num4;
}


echo getRes(9, 3, '/');
?> 