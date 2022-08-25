<?php


$birds = [
	[
		'name' => 'Синичка',
		'food' => [
			'2021-01-01' => 3,
			'2021-01-02' => 2,
			'2021-01-03' => 4,
			'2021-01-04' => 1
		]
	],
	[
		'name' => 'Снегирь',
		'food' => [
			'2021-01-01' => 3,
			'2021-01-02' => 3,
			'2021-01-03' => 3,
			'2021-01-04' => 2
		]
	],
	[
		'name' => 'Ворона',
		'food' => [
			'2021-01-01' => 6,
			'2021-01-02' => 5,
			'2021-01-03' => 5,
			'2021-01-04' => 8
		]
	],
	[
		'name' => 'Голубь',
		'food' => [
			'2021-01-01' => 4,
			'2021-01-02' => 3,
			'2021-01-03' => 3,
			'2021-01-04' => 5
		]
	],
	[
		'name' => 'Дятел',
		'food' => [
			'2021-01-01' => 5,
			'2021-01-02' => 3,
			'2021-01-03' => 4,
			'2021-01-04' => 3
		]
	],
	[
		'name' => 'Кеклик',
		'food' => [
			'2021-01-01' => 2,
			'2021-01-02' => 2,
			'2021-01-03' => 3,
			'2021-01-04' => 2
		]
	],
];
//=============================
$totalAverages = 0;
foreach ($birds as $bird) {
	$name = $bird['name'];
	$food = $bird['food'];

	$totalWorm = 0;
	foreach ($food as $wormsAmount) {
		$totalWorm += $wormsAmount;
	}

	$averageWorms = $totalWorm / count($food);
	$totalAverages += $averageWorms;
}

$averageForBirds = $totalAverages / count($birds);
var_dump($averageForBirds);

foreach ($birds as $bird) {
	$name = $bird['name'];
	$food = $bird['food'];

	$totalWorm = 0;
	foreach ($food as $wormsAmount) {
		$totalWorm += $wormsAmount;
	}

	$averageWorms = $totalWorm / count($food);
	if ($averageWorms > $averageForBirds) {
		echo $name . ':' . $averageWorms . '<br>';
	} else {
		
		echo 'Голодный ' . $name . ':' . $averageWorms . '<br>';
	}
}
