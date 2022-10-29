<?php

error_reporting(E_ALL);
ini_set('display_errors', "on");

// Переменные названия свойств объектов в PHP
/*
 * ⊗ppOpBsVPN
 * 1
 * Сделайте класс City, в котором будут следующие свойства - name, foundation (дата основания), population (население). Создайте объект этого класса.
 *
 * 2
 * Пусть дана переменная $props, в которой хранится массив названий свойств класса City.
 *  Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.
 *
 *
 */

class City
{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

$probs = ['name', 'foundation', 'population'];
$city = new City('Kharkiv', 1700, 250000);
foreach ($probs as $prob) {
    echo $city->$prob . "<br>";
}

// Массив свойств  ⊗ppOpBsVPN
// Скопируйте мой код класса User и массив $props. В моем примере на экран выводится фамилия юзера.
// Выведите еще и имя, и отчество.
class User
{
    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$props = ['surname', 'name', 'patronymic'];
$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]} . " " . $user->{$props[1]} . $user->{$props[2]};
