<?php
$tickets = [
	'2022-09-26' => [
		'Стамбул' => [
			'Внуково' => [
				'Turkish Airlines' => [
					'10:00' => [
						'flight_number' => '001',
						'price' => 700000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '002',
						'price' => 950000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '002',
						'price' => 700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '003',
						'price' => 700000,
						'return' => false
					],
				],
			],
			'Шереметьево' => [
				'Turkish Airlines' => [
					'11:00' => [
						'flight_number' => '005',
						'price' => 700000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '006',
						'price' => 950000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '007',
						'price' => 700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '008',
						'price' => 700000,
						'return' => false
					],
				],
			]
		],
		'Ереван' => [
			'Внуково' => [
				'Turkish Airlines' => [
					'10:00' => [
						'flight_number' => '009',
						'price' => 500000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '010',
						'price' => 450000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '011',
						'price' => 700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '012',
						'price' => 500000,
						'return' => false
					],
				],
			],
			'Шереметьево' => [
				'Turkish Airlines' => [
					'11:00' => [
						'flight_number' => '013',
						'price' => 300000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '014',
						'price' => 1950000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '015',
						'price' => 2700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '016',
						'price' => 3700000,
						'return' => false
					],
				],
			]
		]
	],
	'2022-09-27' => [
		'Стамбул' => [
			'Внуково' => [
				'Turkish Airlines' => [
					'10:00' => [
						'flight_number' => '017',
						'price' => 700000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '018',
						'price' => 950000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '019',
						'price' => 700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '020',
						'price' => 700000,
						'return' => false
					],
				],
			],
			'Шереметьево' => [
				'Turkish Airlines' => [
					'11:00' => [
						'flight_number' => '021',
						'price' => 700000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '022',
						'price' => 950000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '023',
						'price' => 700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '024',
						'price' => 700000,
						'return' => false
					],
				],
			]
		],
		'Ереван' => [
			'Внуково' => [
				'Turkish Airlines' => [
					'10:00' => [
						'flight_number' => '025',
						'price' => 500000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '026',
						'price' => 450000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '027',
						'price' => 700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '028',
						'price' => 500000,
						'return' => false
					],
				],
			],
			'Шереметьево' => [
				'Turkish Airlines' => [
					'11:00' => [
						'flight_number' => '029',
						'price' => 300000,
						'return' => true
					],
					'12:00' => [
						'flight_number' => '030',
						'price' => 1950000,
						'return' => false
					]
				],
				'Pepelatz Airlines' => [
					'20:00' => [
						'flight_number' => '031',
						'price' => 2700000,
						'return' => false
					],
					'22:00' => [
						'flight_number' => '032',
						'price' => 3700000,
						'return' => false
					],
				],
			]
		]
	]
];

//var_dump($tickets['2022-09-26']);

//====Задание:=================
/*Нужно вывести на экран все номера рейсов с возвратными билетами ('return' == true), дешевле 700 тысяч, летящие в Ереван в первой половине дня (до 15:00)*/

foreach ($tickets as $date => $flightsForDate) {
	foreach ($flightsForDate as $destination => $flightForDestination) {
		if ($destination == 'Ереван') {
			foreach ($flightForDestination as $airport => $flightsForAirport) {
				foreach ($flightsForAirport as $airlines => $flightForAirlines) {
					foreach ($flightForAirlines as $flightTime => $flightForTime) {
						if ($flightTime < '15:00' && $flightForTime['price'] < 700000 && $flightForTime['return'] == true) {
							echo  $date . ' - ' . $flightForTime['flight_number'] . '<br>';
						}
					}
				}
			}
		}
	}
}
