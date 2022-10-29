<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Класс как набор методов в ООП на PHP
// 1
// ⊗ppOpBsCAMS
// Математическая подсказка: корень первой степени - это само число. То есть calcSqrt(число, 1) должно просто вернуть само число.
//
//А корень любой степени можно найти с помощью функции pow, просто параметром передав ей дробь.
// Например, pow(число, 1/3) - так найдем корень третьей степени.

//class ArraySumHelper
//{
//    public function getSum1($arr)
//    {
//        return $this->getSum($arr, 1);
//    }
//
//    public function getSum2($arr)
//    {
//        return $this->getSum($arr, 2);
//    }
//
//    public function getSum3($arr)
//    {
//        return $this->getSum($arr, 3);
//    }
//
//    public function getSum4($arr)
//    {
//        return $this->getSum($arr, 4);
//    }
//
//    private function getSum($arr, $power) {
//        $sum = 0;
//
//        foreach ($arr as $elem) {
//            $sum += pow($elem, $power);
//        }
//
//        return $sum;
//    }
//}
//
//$arraySumHelper = new ArraySumHelper;
//
//$arr = [1, 2, 3];
//echo $arraySumHelper->getSum2($arr);




class ArraySumHelper
{
    /*
        Находит сумму первых
        степеней элементов массива:
    */
    public function getAvg1($arr)
    {
        return $this->getSum($arr,1);
    }

    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */
    public function getAvg2($arr)
    {
        return $this->getSum($arr,1/2);
    }

    /*
        Находит сумму третьих степеней
        элементов массива и извлекает
        из нее кубический корень:
    */
    public function getAvg3($arr)
    {
        return $this->getSum($arr,1/3);
    }

    /*
        Находит сумму четвертых степеней
        элементов массива и извлекает
        из нее корень четвертой степени:
    */
    public function getAvg4($arr)
    {
        return $this->getSum($arr,1/4);
    }

    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum($arr, $power) {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }

    /*
        Вспомогательный метод, который параметром
        принимает целое число и степень и возвращает
        корень заданной степени из числа:
    */
    public function calcSqrt($num, $power)
    {
        return pow($num,1/$power);
    }
}
$arraySumHelper = new ArraySumHelper;

$arr = [1, 2, 3,4];
echo $arraySumHelper->getAvg1($arr)."<br>";
echo $arraySumHelper->getAvg2($arr)."<br>";
echo $arraySumHelper->getAvg3($arr)."<br>";
echo $arraySumHelper->getAvg4($arr)."<br>";
echo $arraySumHelper->calcSqrt(5,3)."<br>";




