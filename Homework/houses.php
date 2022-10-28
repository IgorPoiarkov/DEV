<?php


$houses = [
	'IST' => [
		'Rent' => [
			[
				'square' => 120,
				'cost' => 3000,
				'furniturised' => false
			],
			[
				'square' => 100,
				'cost' => 2000,
				'furniturised' => true
			]
		],
		'Purchace' => [
			[
				'square' => 120,
				'cost' => 3000000,
				'furniturised' => false
			],
			[
				'square' => 100,
				'cost' => 2000000,
				'furniturised' => true
			],
			[
				'square' => 60,
				'cost' => 1000000,
				'furniturised' => true
			]
		]
	],
	'MRM' => [
		'Rent' => [
			[
				'square' => 90,
				'cost' => 2000,
				'furniturised' => false
			],
			[
				'square' => 110,
				'cost' => 2500,
				'furniturised' => true
			]
		],
		'Purchace' => [
			[
				'square' => 120,
				'cost' => 3000000,
				'furniturised' => false
			],
			[
				'square' => 100,
				'cost' => 200000,
				'furniturised' => true
			],
			[
				'square' => 60,
				'cost' => 1000000,
				'furniturised' => true
			]
		]

	],
	'ANK' => [
		'Rent' => [
			[
				'square' => 120,
				'cost' => 3000,
				'furniturised' => false
			],
			[
				'square' => 100,
				'cost' => 2000,
				'furniturised' => true
			]
		],
		'Purchace' => [
			[
				'square' => 120,
				'cost' => 3000000,
				'furniturised' => false
			],
			[
				'square' => 100,
				'cost' => 2000000,
				'furniturised' => true
			],
			[
				'square' => 60,
				'cost' => 1000000,
				'furniturised' => true
			]
		]
	]
];

$cities = [
	'IST' => 'Istanbul',
	'MRM' => 'Marmaris',
	'ANK' => 'Ankara'
];


/**
 * У нас есть массив недвижимости
 * Есть недвижимость для аренды и для продажи
 * Так же у нас есть массив с городами
 * Вывести на экран недвижимость для покупки в Стамбуле и Анкаре в формате
 * Istabul, 120 meters, cost 3000, not furniturised
 */



//var_dump($houses);

foreach ($houses as $city => $puk) {
	foreach ($puk as $type => $opt) {
		if ($type == 'Purchace') {
			foreach ($opt as $house) {
				$cityFullName = $cities[$city];
				if ($house['furniturised'] == false) {

					echo $cityFullName . ', ' . $house['square'] . ' ' . 'meters' . ', cost: ' . $house['cost']  . ', ' . 'not furniturised' . '<br>';
				}
				echo $cityFullName . ', ' . $house['square'] . ' ' . 'meters' . ', cost: ' . $house['cost'] . ', ' . 'furniturised' . '<br>';
			}
		}
	}
}
