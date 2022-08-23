<?php

/**
 * Задача 1
 * Мы делаем скрипт, например, для магазина IKEA
 * У нас есть стоимость заказа, но нам необходимо посчитать, сколько будет стоить этот заказ с учетом доставки
 * Доставка составляет дополнительные 10, 15 или 20% от стоимости заказа в зависимости от того, как далеко находится клиент
 * Если клиент находится в менее чем 5 километрах от магазина, стоимость доставки составляет 10%
 * Если клиент находится в 5-20 километрах от магазина, стоимость доставки 15%
 * Если клиент находится более чем в 20 километрах от магазина, стоимость доставки 20%
 * 
 * Усложнение задачи
 * Клиент может выбрать опцию самовывоза
 * В таком случае стоимость доставки равна 0
 * 
 * Усложнение задачи
 * Для пожилых людей (от 70 лет) действует скидка на доставку 50%
 */


//стоимость заказа, эту переменную мы можем менять для проверки нашего скрипта
$cost = 1000;
//дистанция до клиента, эту переменную мы можем менять для проверки нашего скрипта
$distance = 21;
//отметка, выбрал ли клиент самовывоз, эту переменную мы можем менять для проверки нашего скрипта
$pickup = true;
//возраст покупателя, эту переменную мы можем менять для проверки нашего скрипта
$age = 12;

//множитель для расчета доставки 0-5км
$delivery1 = 0.1;
//множитель для расчета доставки 5-20км
$delivery2 = 0.15;


//Решение (В это варианте я проверял запись переменной с булевым значением пикап в условии):
$total;
if ($distance <= 5  && $age < 70 && $pickup) {
	echo $total = $cost + $cost * $delivery1;
} else if ($distance <= 5  && $age >= 70 && $pickup) {
	echo $total = $cost + $cost * $delivery1 * 0.5;
} else if (($distance > 5 && $distance < 20)  && $age < 70 && $pickup) {
	echo $total = $cost + $cost * $delivery2;
} else if (($distance > 5 && $distance < 20)  && $age >= 70 && $pickup) {
	echo $total = $cost + $cost * $delivery2 * 0.5;
} else if ($distance >= 20 && $age < 70 && $pickup) {
	//множитель для расчета доставки 20+км
	$delivery1 = 0.2;
	echo $total = $cost + $cost * $delivery1;
} else if ($distance >= 20 && $age >= 70 && $pickup) {
	$delivery1 = 0.2;
	echo $total = $cost + $cost * $delivery1 * 0.5;
} else {
	echo $total = $cost;
}