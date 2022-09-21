<?php
$names = [
	'PivoZavr*',
	'PiV***oZaVr*', //например, этот пользователь и предыдущий - это один и тот же бот 
	'Ali***-J',
	'***BitMaker',
	'Piv*oZaV**r*',
	'*Bit*marker',
	'*a*l*i-J',
	'**Piv*oZavr*',
	'BitMakEr',
];



/*
$a = implode (', ' , $names);

$b = strtolower($a);
$b = str_replace('*','',$b);

$a = explode(',' , $b);

var_dump($a);
*/
$counters = [];
foreach ($names as $key => $name) {
	$name = str_replace('*', '', $name);
	$name = strtolower($name);


	if (isset($counters[$name])) {
		$counters[$name]++;
	} else {
		$counters[$name] = 1;
	}
}
var_dump($counters);
