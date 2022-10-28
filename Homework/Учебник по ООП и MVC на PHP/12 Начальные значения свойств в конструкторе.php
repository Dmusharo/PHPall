<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Начальные значения свойств в конструкторе
class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер курса:
    public function getCourse()
    {
        return $this->course;
    }

    // Перевод студента на новый курс:
    public function transferToNextCourse()
    {
        if ($this->course < 5) {
            $this->course++;
        }

    }
}

$student = new Student('john'); // создаем объект класса

echo $student->getCourse(); // выведет 1 - начальное значение
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 2
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 3
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 4
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 5
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет  5
