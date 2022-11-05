<?php
$flights = require_once('arrays2/planes.php');
$airports = require_once('arrays2/airports.php');
$statuses = require_once('arrays2/flight_statuses.php');

//var_dump($flights);
// var_dump($airports);
//var_dump($statuses);

//Вывести только активные рейсы в следующем виде 10:30 Pulkovo -> Istanbul


//var_dump($flightNo);



foreach ($flights as $time => $flight) {

	$from = $flight['From'];
	$fromName = $airports[$from];
	$to = $flight['To'];
	$toName = $airports[$to];

	//echo $time . ' ' . $fromName . ' -> ' . $toName . '<br>';


	foreach ($statuses as $flightNo) {
		 // var_dump($flight['code']);

		if ($flightNo == 'Active') {
			$flight['code'] = $flightNo;


			echo $time . ' ' . $fromName . ' -> ' . $toName . '<br>';
		}
		//}
	}
}
