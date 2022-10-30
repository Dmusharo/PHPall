<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Перезапись методов родителя в классе потомке

class User
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {  if(strlen($name)>3){
        $this->name = $name;
    }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}

//class Student extends User
//{
//    private $course;
//
//    // Перезаписываем метод родителя:
//    public function setAge($age)
//    {
//        if ($age >= 18 and $age <= 25) {
//            $this->age = $age;
//        }
//    }
//
//    public function getCourse()
//    {
//        return $this->course;
//    }
//
//    public function setCourse($course)
//    {
//        $this->course = $course;
//    }
//}
//$student = new Student;
//
//$student->setAge(24);    // укажем корректный возраст
//echo $student->getAge(); // выведет 24 - возраст поменялся
//
//$student->setAge(250);    // укажем некорректный возраст
//echo $student->getAge(); // выведет 24 - возраст не поменялся
//


//1 ⊗ppOpBsOOPM
// Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов.

class Student extends User
{
    private $course;

    public function setAge($age)
    {
        // Если возраст меньше или равен 25:
        if ($age <= 25) {
            // Вызываем метод родителя:
            parent::setAge($age); // в родителе выполняется проверка age >= 18
        }
    }
    public function setName($name){
        if(strlen($name)>3 AND strlen($name)< 10){
            parent::setName($name);
        }
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
$student = new Student;

$student->setName('Denis');    // укажем корректный возраст
echo $student->getName(); // выведет 24 - возраст поменялся

$student->setName('De');    // укажем корректный возраст
echo $student->getName(); // выведет 24 - возраст поменялся

//2
// Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и менее 10 символов. Пусть этот метод использует метод setName своего родителя, чтобы выполнить часть проверки.
//

