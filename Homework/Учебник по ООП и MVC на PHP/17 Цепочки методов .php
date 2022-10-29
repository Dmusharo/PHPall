<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Цепочки методов


class Arr
{
    private $numbers = []; // массив чисел

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this; // вернем ссылку сами на себя
    }

    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this; // вернем ссылку сами на себя
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
$arr = new Arr;
echo $arr->add(1)->add(2)->push([3,4])->getSum(); // выведет 10
echo (new Arr)->add(1)->add(2)->push([3, 4])->getSum(); // выведет 10
