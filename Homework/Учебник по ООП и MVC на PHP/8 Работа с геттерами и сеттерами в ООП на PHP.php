<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Работа с геттерами и сеттерами в ООП на PHP

/*
 * 1
 * Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
 *
 * 2
 * Сделайте геттеры и сеттеры для всех свойств класса Employee
 *
 * 3
 * Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
 *
 * 4
 * Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.
 *
 *
 */

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function  getName(){
        return $this->name;
    }
    public function  getAge(){
        return $this->age;
    }
    public function  getSalary(){
        return $this->salary;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function setAge($age){
        if($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function setSalary($salary){
        $this->salary=$salary.'$';
    }
    private function isAgeCorrect($age){
        return $age>=1 and $age<=100;
    }
}

$employee= new Employee;

$employee->setAge(15);
$employee->setAge(335);
$employee->setSalary(1500);

echo $employee->getAge()."<br>";
echo $employee->getSalary()."<br>";
