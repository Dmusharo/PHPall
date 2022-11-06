<?php

error_reporting(E_ALL);
ini_set('display_errors', "on");

// Использование классов внутри других классов
// ⊗ppOpBsUOIC
//1
//  Самостоятельно повторите описанные мною классы Arr и SumHelper.
//2
// Создайте класс AvgHelper с методом getAvg, который параметром будет
// принимать массив и возвращать среднее арифметическое этого массива
// (сумма элементов делить на количество).

//class Arr
//{
//    private $nums = [];
//    private $sumHelper;
//    public function __construct()
//    {
//        $this->sumHelper = new SumHelper;
//    }
//
//    // Находим сумму квадратов и кубов элементов массива:
//    public function getSum23()
//    {
//        // Для краткости запишем $this->nums в переменную:
//        $nums = $this->nums;
//
//        // Найдем описанную сумму:
//        return $this->sumHelper->getSum2($nums)
//            + $this->sumHelper->getSum3($nums);
//    }
//
//    public function add($number)
//    {
//        $this->nums[] = $number;
//    }
//}
//class SumHelper
//{
//    // Сумма квадратов:
//    public function getSum2($arr)
//    {
//        return $this->getSum($arr, 2);
//    }
//
//    // Сумма кубов:
//    public function getSum3($arr)
//    {
//        return $this->getSum($arr, 3);
//    }
//
//    // Вспомогательная функция для нахождения суммы:
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
//$arr = new Arr(); // создаем объект
//
//$arr->add(1); // добавляем в массив число 1
//$arr->add(2); // добавляем в массив число 2
//$arr->add(3); // добавляем в массив число 3
//// Находим сумму квадратов и кубов:
//echo $arr->getSum23();
//echo $arr->getSum23();

//class AvgHelper
//{
//    private $num=[];
//    public function addNumbers($number)
//    {
//        $this->num[]=$number;
//    }
//    public function getAvg()
//    {   $sum=0;
//        $count=count($this->num);
//        foreach ($this->num as $item){
//            $sum+=$item;
//        }
//        return  $sum/$count;
//    }
//    public function getNum() {
//        return $this->num;
//    }
//    public function getMeanSquare(){
//        $sum=0;
//        foreach ($this->num as $item) {
//            $sum+=$item;
//        } return pow($sum,1/2);
//
//    }
//}
//
//$arr1= new AvgHelper;
//$arr1->addNumbers(2);
//$arr1->addNumbers(3);
//$arr1->addNumbers(30);
//echo  $arr1->getAvg();
//echo $arr1->getMeanSquare();

class Arr
{
    public function __construct()
    {
        $this->sum_helper = new SumHelper;
        $this->avg_helper = new AvgHelper;
    }

    public function add($elem)
    {
        $this->nums[] = $elem;
    }

    public function sum23()
    {
        $sum = $this->sum_helper->sum2($this->nums);
        $sum += $this->sum_helper->sum3($this->nums);
        return $sum;
    }

    public function get_avg_mean_sum()
    {
        return ($this->avg_helper->get_avg($this->nums) + $this->avg_helper->get_mean_square($this->nums));
    }

    private $nums = [];
    private $sum_helper;
    private $avg_helper;
}

class SumHelper
{
    public function sum2($arr)
    {
        return $this->sum_pow($arr, 2);
    }

    public function sum3($arr)
    {
        return $this->sum_pow($arr, 3);
    }

    private function sum_pow($arr, $p)
    {
        $sum = 0;
        foreach ($arr as $item) {
            $sum += pow($item, $p);
        }

        return $sum;
    }
}

$a = new Arr;
$a->add(2);
$a->add(2);
$a->add(2);

class AvgHelper
{
    public function get_avg($arr)
    {
        $sum = 0;

        foreach ($arr as $item) {
            $sum += $item;
        }

        return ($sum / sizeof($arr));
    }

    public function get_mean_square($arr)
    {
        $result = 0;
        $sum = 0;

        foreach ($arr as $item) {
            $sum += pow($item, 2);
        }
        $result = $sum / sizeof($arr);
        $result = sqrt($result);
        return $result;
    }
}

$ah = new AvgHelper;
$arr = [1, 2, 3];
echo $ah->get_avg($arr);

echo $a->get_avg_mean_sum();