<?php

// Читаем:
// https://www.php.net/manual/ru/language.oop5.static.php
// https://www.php.net/manual/ru/language.oop5.paamayim-nekudotayim.php

// Делаем:

// Создайте класс животного Animal объект которого будет содержать
// -класс животного
// -вид животного
// -цвет животного
// -скорость перемещения
// -средний возраст жизни
// Подумайте, что из перечисленного можно сделать статическими данными
// Создайте три объекта на классе Animal
// Присвойте каждому объекту значения
// Второй объект скопируйте создав новую переменную новому объекту измените любые два параметра
// -выведите их при помощи ECHO
// -выведи их также у второго объекта (с которого делали копию)



class Animal
{
	public static $classification = "Mammals";
	public $speices;
	public $color;
	public $speed;
	public $avAge;
}

//echo Animal::$classification.'<br>';

$whales = new Animal();
$whales->speices = 'Cetacea';
$whales->color = 'grey';
$whales->speed = '15 km/h';
$whales->avAge = 30;

//var_dump(Animal::$classification);

$seals = new Animal();
$seals->speices = 'Pinnipedia';
$seals->color = 'brown';
$seals->speed = '10 km/h';
$seals->avAge = 20;


$pred = new Animal();
$pred->speices = 'Predators';
$pred->color = 'rainbow';
$pred->speed = '1 - 120 km/h';
$pred->avAge = 40;


$cats = $pred; // В этом случае мы копируем(на самом деле, ссылаемся) экземпляр класса в переменную cats, при этом не создавая доп ячейку в оперативной памяти, а лишь создавая ссылку на старую. И при изменении параметров в ней или в копии, она меняется везде. !!! Чтобы не просто  ссылаться, а клонировать и иметь возможность меня данные только в конретном объекты(экземпляре), то используется зарезервированное слово clone. 
$cats->speed = 120;
$cats->color = 'yellow';

echo $cats->speed . ', ' . $cats->color . '<br>';

echo $pred->speed . ', ' . $pred->color;
echo PHP_VERSION_ID;