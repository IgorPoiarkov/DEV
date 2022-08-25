<?php


/*
$basketTotals = [
	2010 => 600,
	2011 => 800,
	2012 => 750,
	2013 => 650,
	2014 => 700,
	2015 => 760,
	2016 => 800
];

function totalAmount($array)
{
	$sum = 0;
	foreach ($array as $elem) {
		$sum += $elem;
	}
		return $sum;
}

echo totalAmount($basketTotals). '<br>';  




$trainsTotals = [
	2010 => 60000,
	2011 => 80660,
	2012 => 75230,
	2013 => 11650,
	2014 => 72200,
	2015 => 7660,
	2016 => 80770
];

function totalAmount2($array)
{
	$sum = 0;
	foreach ($array as $elem) {
		$sum += $elem;
	}
		return $sum;
}

echo totalAmount($trainsTotals); 
*/





$maxYear = 2015;
$basketTotals = [
	2010 => 600,
	2011 => 800,
	2012 => 750,
	2013 => 650,
	2014 => 700,
	2015 => 760,
	2016 => 800
];

function totalAmount($array, $maxValue)
{

	$sum = 0;
	foreach ($array as $id => $elem) {
		if ($id < $maxValue)
			$sum += $elem;
	}
	return $sum;
}


echo totalAmount($basketTotals, $maxYear) . '<br>';

//------------------------------------------------------------------------------------------------------------

$trainsTotals = [
	2010 => 60000,
	2011 => 80660,
	2012 => 75230,
	2013 => 11650,
	2014 => 72200,
	2015 => 7660,
	2016 => 80770
];




echo totalAmount($trainsTotals, $maxYear) . '<br>';
