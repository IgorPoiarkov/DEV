<?php



class Hotel
{
	public $stars;
	public $board;
	public $rooms = 50;
	public $hamam = false;
	public $parking = false;
	public $pool = true;
	public $priceCoefficient = 1;

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

$hotel = new Hotel(4, 'All inclusive');
$hotel->addParking();
$hotel->rooms = 70;

var_dump($hotel);
