<?php

/*
ООП:
1) Абстракция : Твои классы должны отражать объекты в реальном мире
2) Инкапсуляция: Набор методов для защиты от несанкционированного доступа. Области видимости. Правило сознательного ограничения доступа к полям и методам.

public protected private
class A(){
	public $publicField;
	protected $protectedField;
	private $privateField;

	public function publicFunction(){
		echo 'I'm public';
	}
	protected function protectedFunction(){
		echo 'I'm protected';
	}
	private function privateFunction(){
		echo 'I'm private';
	}

	Ex: Вызов полей и функций извне. Только у паблик можно.
	$a = new A()
	echo $a -> publicField;
	echo $a -> protectedField; // упадет. Нельзя вызвать извне
	echo $a -> privateField; // нет, я погиб

	EX: Наследовать поля и функции
	class B extends A{
		//public $publicField;
		//protected $protectedField;
		//public function publicFunction()
		//protected function protectedFunction()

		Наследуются public и protected

	EX: Переопределение полей и функций	

	

3) Полиморфизм


4) Наследование:

class room{
	public $square
	public $temperature
	public $lightning
	public $clean = false
	public function cleanRoom(){
		$this -> clean = true;
	}
}
class StorageRoom extends Room{
	public $fullness = 0; 0 - 100
	public $airConditioning = true;
	public $clean = true;
}

$storage = new StorageRoom();
$storage -> cleanRoom();
$room = new Room();
//clean false

class LivingRoom extends Room{
	public $peopleAmount;
}
*/
//==============================================================================================================

class Car
{
	public $isStolen = false;
	protected $wheelsAmount;
	public $batteryCapacity;
	public $price;
	private $vin;

	public function __construct($vin)
	{
		$this->vin = $vin;
	}
	public function checkIsStolen($vin)
	{
		if ($vin == $this->vin)
			return true;
		else
			return false;
	}
}


class PassengerCar extends Car
{
	protected $wheelsAmount = 4;
	public $passengerAmount = 5;
}


class Truck extends Car
{
	protected $wheelsAmount = 6;
	public $capacity = 200;
}


$stolenCars = ['1a7c', '2m3b'];
$lightCar = new PassengerCar('3a7c');
foreach ($stolenCars as $stolenVin) {
	if ($lightCar->checkIsStolen($stolenVin)) {
		$lightCar->isStolen = true;
	}
}

if ($lightCar->isStolen) {
	echo 'Авто 1 украдено';
} else {
	echo 'Вы можете купить Авто 1';
}
