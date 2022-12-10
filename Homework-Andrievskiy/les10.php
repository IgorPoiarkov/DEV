<?php

// Операторы в PHP

// Домашка
//1
echo  "1) <br>";
$str1 = 'Привет!' . '<br>';
$str2 = 'Я изучаю PHP.';
$str3 = ' Пожелай мне удачи!';
$str = $str1 . $str2 . $str3;
echo $str;
echo '<hr>';

//2
echo "2) <br>";
$num1 = 11;
$num2 = 22;
$num1 .= $num2;
echo $num1;
echo '<hr>';
//3
echo "3) <br>";
echo 'Скоро ', 'я ', 'буду ', 'знать ', 'php.';
$strr = 'Скоро ';
$strr1 = 'я ';
$strr2 = 'буду ';
$strr3 = 'знать ';
$strr4 = 'php.';
echo '<br>';
echo $strr, $strr1, $strr2, $strr3, $strr4;
echo '<hr>';
//4
echo "4) <br>";
$numm1 = 53;
$numm2 = 20;
echo $numm1 + $numm2 . '<br>';
echo $numm1 - $numm2 . '<br>';
echo $numm1 * $numm2 . '<br>';
echo $numm1 / $numm2 . '<br>';
echo $numm1 % $numm2;
echo '<hr>';
//5
echo "5) <br>";
$number = 101;
if (!($number % 2)) { //проверка условия что число четное
	echo $number + 10;
} else {
	echo $number - 1;
}
