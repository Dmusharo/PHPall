<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Статические методы в ООП на PHP

//class Math
//{
//    public function getSum($a,$b){
//        return $a+$b;
//    }
//    public function getProduct($a,$b){
//        return $a*$b;
//    }
//}
//$math= new Math();
//echo $math->getSum(1,2)+$math->getProduct(3,4);

//class Math
//{
//    public static function getDoubleSum($a,$b){
//        return 2*self::getSum($a,$b);
//    }
//    public static function getSum($a,$b){
//        return $a+$b;
//    }
//    public static function getProduct($a,$b){
//        return $a*$b;
//    }
//
//}
//echo Math::getDoubleSum(4,4);

// 1  Переделайте методы класса ArraySumHelper на статические. ⊗ppOpBsSM

class ArraySumHelper
{
    public static function getSum($arr, $power) {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
    public static function getSum1($arr){
        return self::getSum($arr,1);
    }
    public static function sumSq($arr){
        $sum=0;
        foreach ($arr as $item) {
            $sum+=$item*$item;
        }
        return $sum;
    }
}
$arr1=[1,2,3,4];
echo  ArraySumHelper::getSum1($arr1);

//2
//Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper сумму квадратов элементов этого массива.




