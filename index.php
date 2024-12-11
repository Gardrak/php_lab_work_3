<?php

require_once 'vendor/autoload.php';

use App\MagicClass;

echo"Создание объекта</br>";
$magic = new MagicClass();

echo "</br>Клонирование объекта </br>";
$clonedMagic = clone $magic;

echo "</br>Вызов несуществующих методов</br>";
$magic->nonExistentMethod();   
echo "</br>";
MagicClass::staticNonExistentMethod();  
echo "</br>";
echo "</br>Попытка получить доступ к несуществующим свойствам</br>";
echo $magic->someProperty;    
echo "</br>";
$magic->anotherProperty = "test";  
echo "</br>";
echo "</br>Проверка существования свойств </br>";
var_dump(isset($magic->property));  
echo "</br>";
echo "</br>Удаление несуществующего свойства</br>";
unset($magic->yetAnotherProperty);  
echo "</br>";
echo"</br>Преобразование объекта в строку</br>";
echo $magic;                       
echo "</br>";
echo"</br>Отладочная информация об объекте</br>";
var_dump($magic);
echo "</br>";
echo"</br>Уничтожение объекта</br>";
unset($magic);                     
echo "</br></br>-------------------</br></br>";


require_once 'src/Point.php';
require_once 'src/Vector.php';
use Geometry\Point;
use Geometry\Vector;


// a. Точка с произвольными координатами T1
$t1 = new Point(3, 5);

// b. Произвольный вектор V1
$v1 = new Vector(4, 3);

// c. Нулевой вектор V2
$v2 = new Vector(0, 0);

// d. Вектор V3, перпендикулярный V1
$v3 = new Vector(-3, 4);

echo "Длина вектора V1: " . $v1->length() . "<br>";
echo "Длина вектора V2: " . $v2->length() . "<br>";
echo "Длина вектора V3: " . $v3->length() . "<br>";

if ($v1->isPerpendicularTo($v3)) {
  echo "Векторы V1 и V3 перпендикулярны.<br>";
} else {
  echo "Векторы V1 и V3 не перпендикулярны.<br>";
}

$t1->moveByX($v1->getX());
$t1->moveByY($v1->getY());
echo "Новые координаты точки T1 после переноса: (" . $t1->getX() . ", " . $t1->getY() . ")<br>";