<?php

/**
 * Задача 3
 * Мы продолжаем писать программное обеспечение для фитнес браслета
 * 
 * Наш спортсмен тренируется поднимать штангу
 * Спортсмены бывают всех возрастов, а именно 
 * 'kid' - дети
 * 'adult' - взрослые
 * 'old' - пожилые
 * 
 * С использованием оператора switch, нам нужно вывести на экран, сколько раз надо поднять штангу спортсмену
 * в зависимости от типа возраста
 * kid - "подними штангу 100 раз"
 * adult - "подними штангу 200 раз"
 * old - "подними штангу 201 раз"
 */

//тип спортсмена, эту переменную мы можем менять для проверки нашего скрипта
//age - возраст, type - тип (перевод)
//может принимать значения kid/adult/old
$ageType = 'kid';


switch ($ageType) {
	case 'kid':
		echo 'Подними штангу 100 раз';
		break;
	case 'adult':
		echo 'Подними штангу 200 раз';
		break;
	case 'old':
		echo 'Подними штангу 201 рвз';
		break;
}