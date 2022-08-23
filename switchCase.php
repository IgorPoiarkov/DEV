<?php
$number = 9;

/*
if($number == 1){
	echo '1';
} else if($number == 2){
	echo '2';
} else if($number == 3){
	echo '3';
} else{
	echo 'другое число';
}

// То же самое можно записать в виде конструкции switch case:

switch($number){ //switch используется вместо if
	case 1:
		echo '1';
		break;
	case 2:
		echo '2';
		break;
	case 3:
		echo '3';
		break;	
	default:  //default используется вместо else
		echo 'другое число';	
		break;	
}
*/
//--------------------------------------------------------------------------------------------------
/*
if($number == 1 or $number == 2){
	echo '1 или 2';
} else if($number == 3){
	echo '3';
} else{
	echo 'другое число';
}

// С помощью switch case это можно записать следующим образом:

switch($number){
	case 1:
	case 2:
		echo '1 или 2';
		break;
	case 3:
		echo '3';
		break;
	default:
	echo 'другое число';
	break;		

}
*/
//-------------------------------------------------------------------------------------

// Вместо фигурных скобок { } также можно использовать конструкцию ": + endswitch (endif)" :

/*	
	if($number == 3): echo '3'; endif;
*/

switch($number):
	case 1:
		echo 1;
		break;
	case 5:
		echo '5';
		break;
	default:
		echo 'другое число';
	endswitch;	