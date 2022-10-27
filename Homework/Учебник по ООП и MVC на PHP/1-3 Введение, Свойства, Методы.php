<?php
//Введение в классы и объекты в PHP

class Car
{
    // тут код, то есть PHP-чертеж автомобиля
}


//Работа со свойствами объектов на PHP
// Объявляем класс:
//class User
//{
//    public $name;
//    public $age;
//}
//
//// Создаем объект нашего класса:
//$user = new User;
//
//
//
//class User1
//{
//    public $name;
//    public $age;
//}
//
//$user = new User1; // создаем объект нашего класса
//$user->name = 'john'; // записываем имя в свойство name
//	$user->age = 25; // записываем возраст в свойство age
//
//	echo $user->name; // выводим записанное имя
//	echo $user->age; // выводим записанный возраст
//

class User
{
    public $name;
    public $age;
}

// Первый объект
$user1 = new User; // создаем первый объект
$user1->name = 'john'; // записываем имя
$user1->age = 25; // записываем возраст

// Второй объект
$user2 = new User; // создаем второй объект
$user2->name = 'eric'; // записываем имя
$user2->age = 30; // записываем возраст

// Найдем сумму возрастов:
echo $user1->age + $user2->age; // выведет 55

//1
//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
// ⊗ppOpBsPr

class Employee
{
    public $name;
    public $age;
    public $salary;
}

//2
// Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000.
$employee1= new Employee;
$employee1->name='john';
$employee1->age=25;
$employee1->salary=1000;

//3
//Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000.

$employee2= new Employee;
$employee2->name='eric';
$employee2->age=26;
$employee2->salary=2000;
//4
//Выведите на экран сумму зарплат созданных юзеров.
echo $employee1->salary+$employee2->salary;

//5
//Выведите на экран сумму возрастов созданных юзеров.
echo $employee1->age+$employee2->age;


///--------------------------------------------------------
///  Работа с методами объектов
class User3
{
    public $name;
    public $age;

    // Создаем метод:
    public function show()
    {
        return '!!!';
    }
}

$user = new User3;
$user->name = 'john';
$user->age = 25;

// Вызовем наш метод:
echo $user->show(); // выведет '!!!'

//-------------------
class User10
{
    public $name;
    public $age;

    // Создаем метод:
    public function show($str)
    {
        return $str . '!!!';
    }
}

$user = new User10;
$user->name = 'john';
$user->age = 25;

// Вызовем наш метод:
echo $user->show('hello'); // выведет 'hello!!!'


