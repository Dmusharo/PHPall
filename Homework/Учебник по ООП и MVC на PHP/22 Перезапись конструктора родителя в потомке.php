<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Перезапись конструктора родителя в потомке
//1  ⊗ppOpBsPCO
// Не подсматривая в мой код реализуйте такой же класс Student, наследующий от User

//class User
//{
//    protected $name; // объявим свойство защищенным
//    protected $age;  // объявим свойство защищенным
//
//    // Конструктор объекта:
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//
//class Student extends User
//{
//    private $course;
//
//    // Конструктор объекта:
//    public function __construct($name, $age, $course)
//    {
//        // Дублируем код конструктора родителя:
//        $this->name = $name;
//        $this->age = $age;
//
//        // Наш код:
//        $this->course = $course;
//    }
//
//    public function getCourse()
//    {
//        return $this->course;
//    }
//}
//
//$student = new Student('John',19,2);
//$user= new User('Peter',22);
//
//echo $student->getName();
//echo $user->getName();
//echo $student->getCourse();


//2
// Сделайте класс User, в котором будут следующие свойства только для чтения: name и surname.
// Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры
// этих свойс

//3
// Модифицируйте предыдущую задачу так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день. Запишите ее в свойство birthday. Сделайте геттер для этого свойства.


//class User
//{
//    private $name; // объявим свойство приватным
//    private $surname;  // объявим свойство приватным
//    private $birthday;
//    private $age;
//
//    public function __construct($name, $surname, $birthday)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->birthday = $birthday;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function getBirthday()
//    {
//        return $this->birthday;
//    }
//
//    public function calculateAge()
//    {
//        $arr = explode('-', $this->birthday);
//        $today = date("Y-n-j");
//        $arrToday = explode("-", $today);
//        if (($arr[1] < $arrToday[1]) or ($arr[1] === $arrToday[1] and $arr[2] < $arrToday[2])) {
//            return $arrToday[0]-$arr[0];
//        }  else {
//            return $arrToday[0]-$arr[0]-1;
//        }
//
//    }
//}
//
//$user = new User('Denys', 'Fidgerald', "1987-11-15");
//
//echo $user->getSurname();
//echo $user->getBirthday()."<br>";
//var_dump($user->calculateAge()) ;

//5 ⊗ppOpBsPCO

class User
{
    private $name; // объявим свойство приватным
    private $surname;  // объявим свойство приватным
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age= $this->calculateAge();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function calculateAge()
    {
        $arr = explode('-', $this->birthday);
        $today = date("Y-n-j");
        $arrToday = explode("-", $today);
        if (($arr[1] < $arrToday[1]) or ($arr[1] === $arrToday[1] and $arr[2] < $arrToday[2])) {
            return $arrToday[0]-$arr[0];
        }  else {
            return $arrToday[0]-$arr[0]-1;
        }

    }
}

$user = new User('Denys', 'Fidgerald', "1987-11-15");

echo $user->getAge()."<br>";
//6
// Сделайте класс Employee, который будет наследовать от класса User. Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника. Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.

class Employee extends User
{
    public $salary;
    public  function __construct($name, $surname, $birthday,$salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary=$salary;
    }
    public function getSalary()
    {
        Return $this->salary;
    }
}

$employee = new Employee('Karl','Weber','1987-5-6',1500);
echo $employee->getSalary();
