<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Передача объектов по ссылке
//

/*
 * ⊗ppOpBsPOBR
 * 1
 * Сделайте класс Product, в котором будут следующие свойства: name, price.
 *
 * 2
 * Создайте объект класса Product, запишите его в переменную $product1.
 *
 * 3
 * Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на один и тот же объект.
 *
 *
 */

class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
}

$user = new User('john', 30);

class Product
{
    public $name;
    public $price;

    public function __construct($name,$price)
    {
        $this->name=$name;
        $this->price=$price;
    }
}
$product1= new Product('Apple',2000);
$product2=$product1;

var_dump($product1);
echo "<br>";
$product2=22;
var_dump(($product2));
echo "<br>";
var_dump($product1);
