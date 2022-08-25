<?php


$bird = [
	'name' => 'Синичка',
	'food' => [
		'2021-01-01' => 3,
		'2021-01-02' => 2,
		'2021-01-03' => 4,
		'2021-01-04' => 1
	]
];

$name = $bird['name'];
$food = $bird['food'];

$totalWorm = 0;
foreach ($food as $wormsAmount) {
	$totalWorm += $wormsAmount;
}

$averageWorms = $totalWorm / count($food);
echo $name . ':' . $averageWorms . '<br>';
