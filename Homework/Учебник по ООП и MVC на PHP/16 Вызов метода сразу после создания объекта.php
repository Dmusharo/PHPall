<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Вызов метода сразу после создания объекта

//Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.

//  ⊗ppOpBsMCAOC
class Arr
{
    private $numbers = []; // массив чисел

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
        // записываем массив $numbers в свойство
    }

    // Добавляем еще одно число в наш массив:
    public function add($number)
    {
        $this->numbers[] = $number;
    }

    // Находим сумму чисел:
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
$arr = new Arr([1, 2, 3]); // создаем объект, записываем в него массив [1, 2, 3]
$arr->add(4); // добавляем в конец массива число 4
$arr->add(5); // добавляем в конец массива число 5

// Находим сумму элементов массива:
echo $arr->getSum()."<br>"; // выведет 15
echo (new Arr([1,2,3,4,5,6,7,8]))->getSum()+(new Arr([3,4,5]))->getSum();



