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
	public $rooms = 3;
	public $ac = false;
	public $rentprice = 1000;
	public $bathrooms = 2;

	public function putAc()
	{
		$this->ac = true;
		$this->rentprice += 100;
	}


	public function addRoom()
	{
		$this->rooms++;
		$this->rentprice += 100;
	}

	public function remRoom()
	{
		$this->rooms--;
		$this->rentprice -= 100;
	}

	public function addBathroom()
	{
		$this->bathrooms++;
		$this->rentprice += 50;
	}

	public function remBathroom()
	{
		$this->bathrooms--;
		$this->rentprice -= 50;
	}
}

$appart = new Appartment();
$appart->putAc();
$appart->addRoom();
$appart->remRoom();
$appart->addBathroom();


var_dump($appart);
