<?php

/**
 * Задача 2
 * 
 * Самостоятельно напишите класс для описания квартиры
 * Придумайте поля и 2-3 метода класса, отражающих операции, которые можно с этой квартирой сделать
 */


class Appartment
{
	public $floors = 1;
	public $location;
	public $rooms = 3;
	public $hamam = false;
	public $parking = false;
	public $pool = true;
	public $bathrooms = 2;

	public function __construct($rank, $meal)
	{
		$this->stars = $rank;
		if ($meal == 'All inclusive') {
			$this->priceCoefficient = 1.5;
		}
	}

	public function addParking()
	{
		$this->parking = true;
		$this->stars++;
	}
}

$hotel = new Appartment(4, 'All inclusive');
$hotel->addParking();
$hotel->rooms = 70;

var_dump($hotel);



?>