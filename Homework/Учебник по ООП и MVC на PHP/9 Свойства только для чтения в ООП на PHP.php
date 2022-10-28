<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Свойства только для чтения в ООП на PHP
// ⊗ppOpBsROP

/*
 * 1
 * Сделайте класс Employee, в котором будут следующие свойства: name, surname и salary.
 *
 * 2
 * Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
 *
 */

class User
{
    private $name;
    private $age;

    // Конструктор объекта:
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Геттер для имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер для возраста:
    public function getAge()
    {
        return $this->age;
    }

    // Сеттер для возраста:
    public function setAge($age)
    {
        $this->age = $age;
    }
}

$user = new User('john', 25); // создаем объект с начальными данными

// Имя можно только читать, но нельзя поменять:
echo $user->getName(); // выведет 'john'

// Возраст можно и читать, и менять:
echo $user->getAge(); // выведет 25
echo $user->setAge(30); // установим возраст в значение 30
echo $user->getAge(); // выведет 30

//1

class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname,$salary)
    {
        $this->name = $name;
        $this->surname=$surname;
        $this->salary=$salary;
    }
    public function getName() {
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public  function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary=$salary;
    }
}

$employ= new Employee('Eric',"Frankov",1500);
echo  "<br>";
echo $employ->getName()."<br>";
echo $employ->getSurname()."<br>";
echo $employ->getSalary()."<br>";
$employ->setSalary(2000);
echo $employ->getSalary()."<br>";
