<?php

error_reporting(E_ALL);
ini_set('display_errors', "on");

//Определение принадлежности объекта к классу

//
// Первый класс:
//class Employee
//{
//    public $name;
//    public $salary;
//
//}
//class Student
//{
//    public $name;
//    public $scholarship;
//}
//$arr=[];
//$arr0= new Student();
//$arr0->name='Denis';
//$arr0->scholarship=1200;
//$arr1=new Student();
//$arr1->name="Jack";
//$arr1->scholarship=800;
//$arr2=new Student();
//$arr2->name="Rasssel";
//$arr2->scholarship=1800;
//
//$arr3= new Employee();
//$arr3->name="Wolter";
//$arr3->salary=2222;
//$arr[]=$arr0;
//$arr[]=$arr1;
//$arr[]=$arr2;
//$arr[]=$arr3;
//
//foreach ($arr as $key=>$values) {
//    if ($values instanceof Employee) {
//        foreach ($values as $keys => $value) {
//            if ($keys == "name") {
//                echo "Worker " . $value . "<br>";
//            }
//        }
//    } else {
//        foreach ($values as $keys => $value) {
//            if ($keys == "name") {
//                echo "Student " . $value . "<br>";
//            }
//        }
//    }
//}
//echo "<pre>";
//var_dump($arr);
//echo "<pre>";
//echo "------------------------"."<br>";
//$sum=0;
//foreach ($arr as $key=>$item) {
//    foreach ($item as $keys=>$value){
//        if ($keys=='scholarship' or $keys=='salary') {
//            $sum+=$value;
//        }
//    }
//}
//echo $sum;

// Сделайте класс User с публичным свойствами name и surname.

//class User
//{
//    public $name;
//    public $surname;
//    public function __construct($name,$surname){
//        $this->name=$name;
//        $this->surname=$surname;
//    }
//
//}
//
//class Employee extends User
//{
//    public $salary;
//    public function __construct($name,$surname,$salary)
//    {        parent::__construct($name,$surname);
//        $this->salary=$salary;
//    }
//
//}
//class City
//{
//    public $name;
//    public $population;
//
//}
//
//$user1=new User('Fill','Webber');
//$employee1= new Employee('Kal',"Didko",1200);
//
//

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Student
{
    private $name;
    private $scholarship; // стипендия

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}

class UsersCollection
{
    private $employees = [];
    private $students = [];

    public function add($user)
    {
        if ($user instanceof Employee) {
            $this->employees[] = $user;
        }

        if ($user instanceof Student) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary()
    {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }

    public function getTotalScholarship()
    {
        $sum = 0;

        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }

        return $sum;
    }

    // Получаем общую сумму платежей и работникам, и студентам:
    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}

$usersCollection = new UsersCollection;

$usersCollection->add(new Student('kyle', 100));
$usersCollection->add(new Student('luis', 200));

$usersCollection->add(new Employee('john', 300));
$usersCollection->add(new Employee('eric', 400));

// Получим полную сумму стипендий:
echo $usersCollection->getTotalScholarship() . "<br>";

// Получим полную сумму зарплат:
echo $usersCollection->getTotalSalary() . "<br>";

// Получим полную сумму платежей:
echo $usersCollection->getTotalPayment() . "<br>";
echo "<pre>";
var_dump($usersCollection);
echo "<pre>";
