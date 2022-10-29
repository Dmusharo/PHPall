<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Модификатор доступа protected в ООП на PHP

class User
{
    private $name;
    protected $age;

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

class Student extends User
{
    private $course;

    // Реализуем этот метод:
    public function addOneYear()
    {
        $this->age++;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student = new Student();

$student->setName('john'); // установим имя
$student->setCourse(3);    // установим курс
$student->setAge(25);      // установим возраст в 25

$student->addOneYear();    // увеличим возраст на единицу
echo $student->getAge();   // выведет 26
