<?php
//class User
//{
//    public $name;
//    public $age;
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//}

class City
{
    public $city;
    public $population;
    public function __construct($city,$population){
        $this->city=$city;
        $this->population=$population;
    }
}

//---index.php

error_reporting(E_ALL);
ini_set('display_errors', "on");

// Хранение объектов в массивах в ООП на PHP

/*
 * 1
 * Сделайте класс City, в котором будут следующие свойства: name, population (количество населения).
 *
 * 2
 * Создайте 5 объектов класса City, заполните их данными и запишите в массив.
 *
 * 3
 * Переберите созданный вами массив с городами циклом и выведите города и их население на экран
 *
 */
//require_once "Homework/Учебник по ООП и MVC на PHP/11 Хранение объектов в массивах в ООП на PHP.php";
////$user1 = new User('john', 21);
////$user2 = new User('eric', 22);
////$user3 = new User('kyle', 23);
////
////$users[] = $user1;
////$users[] = $user2;
////$users[] = $user3;
//$users = [
//    new User('john', 21),
//    new User('eric', 22),
//    new User('kyle', 23)
//];
//
////echo "<pre>";
////var_dump($users);
////echo "<pre>";
//
//foreach ($users as $user) {
//    echo $user->name . ' ' . $user->age . '<br>';
//}

require_once "Homework/Учебник по ООП и MVC на PHP/11 Хранение объектов в массивах в ООП на PHP.php";
$cities = [
    new City('Kharkiv', 20000),
    new City('Dnipro', 33000),
    new City('Kiev', 50000),
    new City('Lviv', 5100),
    new City('Odessa', 2500),
];
foreach ($cities as $city1) {
    echo $city1->city . '  ' . $city1->population . "<br>";
}

