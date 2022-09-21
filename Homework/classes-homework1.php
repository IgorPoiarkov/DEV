<?php



/**
 * Задача 1
 * Внимательно посмотреть код и посчитать, сколько роз мы можем увезти в одной газели
 * 
 * Перед вами пример класса
 * Представим себе, что мы занимаемся продажей комнатных растений
 * поэтому наш класс будет описывать комнатное растение
 */

//вот описание самого класса
class Plant
{
	public $height = 20; //дефолтная высота растения, 20 см
	public $width = 10; //дефолтная длина растения, 10 см
	public $depth = 10; //дефолтная глубина растения, 10 см
	public $weight = 1; //дефолтный вес растения, 1кг
	public $potWeight = 0.3; //дефолтный вес горшка
	public $withPot = true; //дефолтное значение наличия горшка
	public $waterNeedsInDay; //требуемое количество воды в день, дефолтного значения нет (!!!)
	//public $vPlant = $height * $width * $depth;??????????????????????????????????????????????????????????????????????????????????????
	public function __construct($weight, $waterNeeds) // 
	{
		$this->weight = $weight;
		$this->waterNeedsInDay = $waterNeeds;
	}
	public function removePot()
	{ //функция удаления горшка
		$this->weight -= $this->potWeight;
		$this->withPot = false;
	}

	public function addPot()
	{ //функция добавления горшка
		$this->weight += $this->potWeight;
		$this->withPot = true;
	}

	public function fillWithWater()
	{
		$this->weight += $this->waterNeedsInDay;
	}
}

/**
 * Далее идут действия с ранее описанным классом
 * Вот так мы инициализирум класс розы
 */
$rose = new Plant(1.5, 0.5);
/**
 * мы можем менять параметры у уже инициализированного в ту или иную переменную класса
 * розы обычно повыше, поэтому заменим высоту
 * и вес тоже подкорректируем
 */
$rose->height = 100;

//вывести на экран можно с помощью echo, напимер echo $rose->height;
echo $rose->height . '</br>';
$vPlant = ($rose->height * $rose->width * $rose->depth) * 1e-6;
var_dump($vPlant) . '</br>';


$trackCap = 5000;
$rosesWithPot = $trackCap / $vPlant;
var_dump($rosesWithPot);




/**
 * Теперь давайте инициализируем класс фиалки
 */
$violet = new Plant(0.6, 0.2);
$violet->potWeight = 0.2;
$violet->width = 7;
$violet->height = 10;
$violet->depth = 7;
//так же мы можем вызвать функцию класса, которая изменит параметры класса как прописано в функции
$violet->removePot();


echo $violet->weight;
var_dump($violet->withPot);


echo $rose->weight;
var_dump($rose->withPot);

/**
 * Теперь у фиалки нет горшка - это можно проверить с помощью
 * echo $violet->withPot;
 * обратите внимание, что это изменение не коснулось розы, а коснулось только класса, находящегося 
 * в переменной, для которой было произведено выполнение функции
 */

/**
 * Итоговая задача такая!
 * Зная, что в галезь влезает 5 кубометров и максимальная масса груза может быть 2 тонны
 * необходимо посчитать, сколько влезет в газель
 * 
 * - роз с горшками
 * - роз без горшков
 * - фиалок с горшками
 * - фиалок без горшков
 */


//====================занятие================
//__construct(){ //Функция создать класс

//}
$maxAmountByWeightV = 2000 / $violet->weight;
var_dump($maxAmountByWeightV);

$maxAmountByVolumeV = 5000000 / ($violet->height * $violet->width * $violet->depth);
var_dump($maxAmountByVolumeV);

if ($maxAmountByVolumeV > $maxAmountByWeightV) {
	echo $maxAmountByWeightV;
} else {
	echo $maxAmountByVolumeV;
}

// Это для роз=============================================
$maxAmountByWeightR = 2000 / $rose->weight;
var_dump($maxAmountByWeightR);

$maxAmountByVolumeR = 5000000 / ($rose->height * $rose->width * $rose->depth);
var_dump($maxAmountByVolumeR);

if ($maxAmountByVolumeR > $maxAmountByWeightR) {
	echo $maxAmountByWeightR;
} else {
	echo $maxAmountByVolumeR;
}
