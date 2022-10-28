<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");


//Конструктор объекта в ООП на PHP
//class User
//{
//    public $name;
//    public $age;
//
//    // Конструктор объекта:
//    public function __construct()
//    {
//        echo '!!!';
//    }
//}
//
//$user= new User;

//class User
//{
//    public $name;
//    public $age;
//
//    // Конструктор объекта:
//    public function __construct($name, $age)
//    {
//        $this->name = $name; // запишем данные в свойство name
//        $this->age = $age; // запишем данные в свойство age
//    }
//}
//
//$user = new User('john', 25); // создадим объект, сразу заполнив его данными
//
//echo $user->name; // выведет 'john'
//echo $user->age; // выведет 25

/* ⊗ppOpBsCn
 *
 * 1
 * Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. Сделайте так,
 * чтобы эти свойства заполнялись в конструкторе при создании объекта.
 *
 * 2
 * Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000.
 *
 * 3
 * Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.
 *
 * 4
 *  Выведите на экран сумму зарплат созданных вами юзеров.
 *
 */

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
}
$employee = new Employee('eric',25,1000);
$employee1 = new Employee('kyle',30,2000);

echo $employee->salary+$employee1->salary;

