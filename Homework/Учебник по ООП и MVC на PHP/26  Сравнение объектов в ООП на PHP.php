<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Сравнение объектов в ООП на PHP ⊗ppOpBsOC

// 1
//
//Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса, и false, если это не так.

//2
//Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если переданные переменные ссылаются на один и тот же объект, и false, если на разные.

//3
//Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
//
//Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
//
//Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.
//
//Функция должна возвращать -1 в противном случае.

//class User
//{
//    private $name;
//    private $age;
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age  = $age;
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
//    public function compare($object1,$object2){
//        if($object1===$object2){
//            return 1;
//        } elseif ($object1==$object2){
//            return 0;
//        } else {
//            return -1;
//        }
//    }
//
//}
//$user1 = new User('john', 30);
////$user2 = new User('john', 30);
//$user2=$user1;
//
////var_dump($user1->compare($user1,$user2)); // выведет true
//echo "<br>";
//var_dump($user1->compare($user1,$user2)); //


//Применение
//Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс EmployeesCollection, проверьте его работу

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

class EmployeesCollection
{
    private $employees = [];

    public function add($newEmployee)
    {
        // Если такого работника нет - то добавляем:
        if (!in_array($newEmployee,$this->employees,false)) {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }

//    private function exists($newEmployee)
//    {
//        foreach ($this->employees as $employee) {
//            if ($employee == $newEmployee) {
//                return true;
//            }
//        }
//
////        return false;
//    }

}

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee('john', 100));
$employeesCollection->add(new Employee('joohn',100));
echo "<pre>";
var_dump($employeesCollection->get()); // убедимся в этом
echo "<pre>";


