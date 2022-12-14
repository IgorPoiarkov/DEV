<?php

$names = ['Alex', 'Andy', 'Petr', 'Kiril', 'Victor'];

/*
$element = count($names);

for ($i = 0; $i < $element; $i++) {
	echo $names[$i] . '<br>';
}
// В цикле FOR, когда мы выводили на экран информацию нам нужен был стопор, т.е. нам стопором служила переменная element, которая получала количество элементов в нашем массиве (сколько элементов в массиве, столько шагов и будет проделано) Чтобы избавиться от этого шага, придуман цикл FOREACH:

$test = array(
	'name1' => 'Alex',
	'name2' => 'Andy',
	'name3' => 'Petr',
	'name4' => 'Kiril',
	'name5' => 'Victor'
);

foreach($test as $name) {
	echo $name.'<br>';
}

//В этом цикле исп-ся 2 параметра: 1й - массив (test) и 2й - значение в виде какой-то переменной, например name. 
//Этот цикл возьмет массив и расложит его по полочкам. Т.е. на место 2ого параметра выводится значение (value) нашего массива и выводятся пошагово

//----------------------------------------------------------------------------------------------------------------
*/
//Цикл While

$i = 0;
while($i <= 10){
	echo $i. '<br>';
	$i++;
}

//Чтобы этот цикл применить с нашим массивом:

$i = 0;
while($i <= count($names)){
	echo $names[$i]. '<br>';
	$i++;
}

//------------------------------------------------------------------------------------------------------------------

//Цикл Do While
// Работает по аналогии с while (Сначала проверяем, а потом делаем). Т.е. в этом цикле мы сначала что-то делаем, а уже потом проверяем значение.

$j = 0;
do{
	echo $names[$j]. '<br>';
	$j++;
} while($j < count($names));

