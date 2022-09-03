<?php

const BR = '<br />';

$name = 'Atari';
$Name = 'Sega';
$NAME = 'Nintendo';

echo $name . BR;
echo $Name . BR;
echo $NAME . BR;

$int = sqrt(16);
echo $int . BR;

//ternary expression : If expression 1 is true, return Expression 2 if it's false, return Expression 3.
$age = 33;
$eval = $age > 21 ? "You're over 21, here is your drink!" :
	"You're not old enough!";
echo $eval . BR;

//variable variable
$$Name = '16-bit console'; //$Sega = '16-bit console';
echo $Sega;

//using array index key as variable name
$planet = array(
	0 => 'Saturn',
	1 => 'Mercury',
	2 => 'Mars',
	3 => 'Neptune'
);

$$planet[2] = 'Roman god of war'; //$Mars = 'Roman god of war';
echo $Mars.BR;


//referencing

$copy = &$Name; //$Name = Sega
echo $copy.BR;


//manipulation





?>