<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//   Передача объектов параметрами
//1  ⊗ppOpBsPOBP
//Сделайте класс Product, в котором будут приватные свойства name, price и quantity. Пусть все эти свойства будут доступны только для чтения.

class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function get_quantity()
    {
        return $this->quantity;
    }

    public function get_cost()
    {
        return ($this->quantity * $this->price);
    }

}

class Card
{
    private $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remove($name){
        unset($this->products[$name]);
    }

    public function get_total_cost()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->get_cost();
        }
        return $sum;
    }

    public function get_total_quantity()
    {
        $result = 0;
        foreach ($this->products as $product) {
            $result += $product->get_quantity();
        }
        return $result;
    }

    public function get_avg_price()
    {
        $result = $this->get_total_cost();
        $result = $result / $this->get_total_quantity();
        return $result;
    }

}
$card = new Card();
$card->add(new Product('tomato', 25, 22));
$card->add(new Product('Cola', 15, 12));
$card->add(new Product('Sprite', 20, 2));

echo "<pre>";
var_dump($card);
echo "<pre>";
echo "-------------------------------------------"."<br>";
echo $card->get_total_cost()."<br>";
echo $card->get_avg_price()."<br>";
$card->remove('Cola');
echo "<pre>";
var_dump($card);
echo "<pre>";

