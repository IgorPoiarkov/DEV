<?php

//$array  = count(rand(5, 10));
//$value = rand(0, 100);

//var_dump($array);



//$array = [];

// foreach ($array as $key => $value) {
// 	$value = rand(0,100);
// 	array_push($array, $value);
// }
// var_dump($array);

// $num = rand();
// $value = rand(0,100);
// for ($i=0; $i < $num; $i++) { 

// 	array_push($array[$i], $value);
// }
// var_dump($array[$i]);

// $num1 = rand(5, 10);
// $num2 = rand(0, 100);
// $array = [$num1 => $num2];
// var_dump($array);


for($i = 0; $i <= rand(5,10) ;$i++){
	$arr[] = rand(0,100);
}
asort($arr);
var_dump($arr);