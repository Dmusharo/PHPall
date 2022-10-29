<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Начальные значения свойств при объявлении

/*
 * 1
 * Реализуйте класс Arr, похожий на тот, который я реализовал выше.
 *  В отличие от моего класса метод add вашего класса параметром
 * должен принимать массив чисел. Все числа из этого массива должны
 * добавляться в конец массива $this->numbers.
 *
 * 2
 * Реализуйте также метод getAvg, который будет находить среднее
 * арифметическое чисел.
 *
 */

class Arr
{
    public $numbers = [11,22,44];
    public function add($arrNew){
        foreach ($arrNew as $item) {
            $this->numbers[]=$item;
        }
    }
    public function getProduct(){
        return array_product($this->numbers);
    }
    public function getAvg(){
        return $this->getSum()/$this->getCount();
    }
    public  function getSum(){
        return array_sum($this->numbers);
    }
    public  function getCount(){
        return count($this->numbers);
    }
}

$arr= new Arr;
$arr->add([5,2,3,4]);
echo "<pre>";
var_dump($arr);
echo "<pre>";
var_dump($arr->getProduct())."<br>";
var_dump($arr->getCount())."<br>";
var_dump($arr->getSum())."<br>";
var_dump($arr->getAvg())."<br>";
