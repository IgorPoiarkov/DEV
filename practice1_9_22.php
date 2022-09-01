<?php
/*

$num = '100.77';
var_dump($num); //function to find out what the data types are in PHP

// identify   +$a
$num = '100.77';
var_dump(+$num); // conversion of $a to integer or float as appropriate. (strint to float)

$num = '100';
var_dump(+$num);  //string to int


//numeric array
$game_genres = array('rpg', 'adventure', 'action', 'puzzle', 'strategy', 'mmorpg', 'fps');
echo $game_genres[0];// the rpg's(key) value is 0


//multidimensional array
$game_genres = array('rpg', array('adventure', 'action', 'puzzle'), 'strategy', 'mmorpg', 'fps');
echo $game_genres[1][1];




// associative array:  key + value
define('RELEASE_YEAR', 2013); // function to initialize a constant
$years = array('StarCraft' => 1998, 'The Witcher' => 2009, 'The Mass Effect 3' => RELEASE_YEAR, 'Diablo' => 1996);
echo '<pre>';
print_r($years);
echo '</pre>';

*/


//function
const BR = '<br />';
$num = add(100,100);
echo $num.BR;

function add($x, $y){
	return $x + $y;

}