<?php

error_reporting(E_ALL);
ini_set('display_errors', "on");

//Наследование классов
//Не подсматривая в мой код реализуйте такие же классы User, Employee.   ⊗ppOpBsCI

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$employee = new Employee;

$employee->setSalary(1000); // метод класса Employee
$employee->setName('john'); // метод унаследован от родителя
$employee->setAge(25); // метод унаследован от родителя

echo $employee->getSalary(); // метод класса Employee
echo $employee->getName(); // метод унаследован от родителя
echo $employee->getAge() . "<br>"; // метод унаследован от родителя

//2
class Student extends User
{
    private $course; // курс

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student = new Student;

$student->setCourse(3); // метод класса Student
$student->setName('john'); // метод унаследован от родителя
$student->setAge(25); // метод унаследован от родителя

echo $student->getCourse(); // метод класса Student
echo $student->getName(); // метод унаследован от родителя
echo $student->getAge(); // метод унаследован от родителя

//Наследование от наследников
class StudentBSU extends Student
{
    // добавляем свои свойства и методы
    private $bsa;

    public function getBsa()
    {
        return $this->bsa;
    }

    public function setBsa($bsa)
    {
        $this->bsa = $bsa;
    }
}

$studentBSU = new StudentBSU;
$studentBSU->setBsa(4);
echo $studentBSU->getBsa();

//3
//Сделайте класс Programmer, который будет наследовать от класса Employee.
// Пусть новый класс имеет свойство langs, в котором будет хранится массив языков,
// которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.

class Programmer extends Employee
{
    private $langs = [];

    public function getLang()
    {
        return $this->langs;
    }

    public function setLang($lang)
    {
        $this->langs[] = $lang;
    }

}

$programmer = new Programmer;
$programmer->setName('Egor');
$programmer->setSalary(2000);
$programmer->setLang('UA');
//echo "<br>";
//var_dump($programmer);
//echo "<br>";
echo $programmer->getName();
print_r($programmer->getLang());

//4
// Сделайте класс Driver (водитель), который будет наследовать от класса Employee.
// Пусть новый класс добавляет следующие свойства: водительский стаж,
// категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
class Driver extends Employee
{
    private $expirience;
    private $category;

    public function getExpirience()
    {
        return $this->expirience;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setExpirience($expirience)
    {
        $this->expirience = $expirience;
    }

    public function setCategoty($category)
    {
        $this->category = $category;
    }

}

$driver = new Driver;
$driver->setName('Denys');
$driver->setExpirience('5');
$driver->setCategoty('A');

echo $driver->getName() . $driver->getExpirience() . "  - " . $driver->getCategory();

