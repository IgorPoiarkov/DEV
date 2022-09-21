<?php

class chair {
	public $legsAmount = 3;
	public $material = 'wood';
	public $color = 'white';

public function breakLeg(){
	$this -> legsAmount--;
}
public function changeColor($color){
	$this -> color = $color;
}



}

$chair2 = new chair();
$chair = new chair();
echo $chair -> legsAmount;
$chair -> breakLeg();
echo $chair -> legsAmount;
$chair -> changeColor('black');
echo $chair -> color; //black
echo $chair2 -> color; //white



