<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//   Константы классов в ООП на PHP
class Test
{
    const CONSTANT ='test';
}
echo Test::CONSTANT;

//1
// ⊗ppOpBsCC
// Реализуйте предложенный класс Circle самостоятельно.
//2
// С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
class  Circle
{
    const PI=3.14;
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function getSquare(){
        return self::PI*pow($this->radius,2);
    }
    public function getCircuit(){
        return self::PI*2*$this->radius;
    }
}
$a= new Circle(10);
echo $a->getSquare();