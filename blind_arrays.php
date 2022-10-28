<?php
$flights = require_once('arrays/planes.php');
$airports = require_once('arrays/airports.php');

//var_dump($flights);
//var_dump($airports);

//Вывести рейсы в следующем виде 10:30 Pulkovo -> Istanbul

foreach ($flights as $time => $flight){
	//var_dump($flight);die;
	$from = $flight['From'];
	$fromName = $airports[$from];
	$to = $flight['To'];
	$toName = $airports[$to];


	echo $time.' '.$fromName.' -> '.$toName.'<br>';
	

	//foreach($flight as $departure => $flightFrom){
		//var_dump($flight)
	//}

}





