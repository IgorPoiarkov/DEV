<?php
/*
Массивы
Способы объявления
$array = array(1,2,3,5,7);
$array =[];
$array =[2,4,5,76];
$array[]=7; добавить элемент в конец массива
echo $array[1]; доступ к элементу массива через ключ.
Значениями массива могут быть, например, массивы.
echo $array[8][1]; Это пример двумерного массива, где мы вызываем значение по ключи 1 внутри массива по ключу 8;
$innerArray = $array[8];
echo $innerArray[1];


Функция которая считает сколько в массиве элементов.
*/


//=======Практика==================
/*
$array = [
	0 => [
		'Петя' => 'Редиска',
		42 => 'Ответ',
		777 => [2022, 2021, 2020]
	],
	'Новый Год' => [
		2021 => 'Отлично',
		2022 => [
			1 => 'Нормально',
			2 => 'Пиздос',
			3 => 'То же самое'
		]
	],
	'5' => 25
];
var_dump($array['5']);
echo '<br>';
var_dump($array[0]['Петя']);
echo '<br>';
var_dump($array[0][777][2]);
echo '<br>';
//var_dump($array['Новый Год'][2022]);

foreach($array['Новый Год'][2022] as $num => $val){
	echo $num.' => '.$val .'<br>';
	
}
*/




