<?php

/**
 * В этом задании вам необходимо будет написать через строку, какое значение
 * в какой переменной
 * для того, чтобы написать комментарий - используется //
 * на любой строке, вы можете посмотреть текущее значение переменной 
 * с помощью команды echo
 * 
 * например
 * echo $x;
 */

$x = 6;
//x = 6
//вы можете посмотреть, что находится в $x если напишете echo $x;
$h = 15;
//x = 6, h = 15
$x = 32;
//x = 32, h = 15
$j = 9;
//x = 32, h = 15, j = 9
//echo $x, $h, $j;
$u = $x + $j + $x;
//x = 32, h = 15, j = 9, u = 73
//echo $x, $h, $j, $u;
$x = $u - $x;
//x = 41, h = 15, j = 9, u = 73
//echo $x, $h, $j, $u;
$b = $h + 11;
//x = 41, h = 15, j = 9, u = 73, b = 26
//echo $x, $h, $j, $u, $b;
$h = $j + $x;
//x = 41, h = 50, j = 9, u = 73, b = 26
//echo $x, $h, $j, $u, $b;
$x = $h + $u;
//x = 123, h = 50, j = 9, u = 73, b = 26
//echo $x, $h, $j, $u, $b;
$h = 3.1;
//x = 123, h = 3.1, j = 9, u = 73, b = 26
//echo $x, $h, $j, $u, $b;
$j = $h * $j / 3;
//x = 123, h = 3.1, j = 9.3, u = 73, b = 26
//echo $x, $h, $j, $u, $b;
$u = $u + $h + $j;
//x = 123, h = 3.1, j = 9.3, u = 85.4, b = 26
echo $x, $h, $j, $u, $b;