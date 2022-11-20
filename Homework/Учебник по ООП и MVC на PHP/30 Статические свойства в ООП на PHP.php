<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//  Статические свойства в ООП на PHP

class  Test
{
    public static $property;
}

Test::$property='test';
echo Test::$property;
// Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2. Запишите в первое свойство число 2, а во второе - число 3. Выведите сумму значений свойств на экран.
// 1  ⊗ppOpBsSP

//class Num
//{
//    public static $num1;
//    public static $num2;
//}
//Num::$num1=1;
//Num::$num2=2;
//echo  Num::$num1+Num::$num2;

// Статическое свойство внутри класса
//2
//Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2. Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
//3 Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2.

class Num
{
    private static $num1=13;
    private static $num2=2;
    public static function getSum(){
        return self::$num1+self::$num2;
    }

}
echo  Num::getSum();
echo "<br>";

//4
//Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. С помощью этого метода выведите на экран объем шара с радиусом 10.
class Geometry
{
    public static function getVolume($radius){
        return (4/3)*pi()*pow($radius,3);
    }
}
echo  Geometry::getVolume(2);
