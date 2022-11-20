<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

// Контроль типов при работе с объектами

/*
 * 1
 *Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name и salary.
 *
 * 2
 * Создайте несколько объектов класса Post: программист, менеджер водитель
 *
 * 3
 * Сделайте класс Employee, в котором будут следующие свойства: name и surname. Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
 *
 * 4
 * Сделайте геттеры и сеттеры для свойств name и surname.
 *
 * 5
 * Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.
 *
 * 6
 * Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.
 *
 * 7
 * Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.
 *
 * 8
 * Выведите на экран имя, фамилию, должность и зарплату созданного работника.
 *
 * 9
 * Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде.
 *
 *
 *
 */

//class Employee
//{
//    private $name;
//    private $salary;
//
//    public function __construct($name,$salary){
//        $this->name=$name;
//        $this->salary=$salary;
//    }
//    public function getName(){
//        return$this->name;
//    }
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//}
//
//class EmployeeeCollection
//{
//    private $employees=[];
//    public function add(Employee $employee)
//    {
//        $this->employees[]=$employee;
//    }
//    public function getTotalSalary()
//    {
//        $sum=0;
//        foreach ($this->employees as $employee){
//            $sum+=$employee->getSalary();
//        } return $sum;
//    }
//}

class Post
{
    private $name;
    private $salary;

    public function __construct($name,$salary){
        $this->name=$name;
        $this->salary=$salary;
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
$programmist= new Post("Danil",1200);
$manager= new Post('Peter',200);
$driver= new Post("Bob",120);

class Employee
{
    public $name;
    public $surname;

    public function __construct($name,$surname, Post $post ){
        $this->name=$name;
        $this->surname=$surname;

    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return$this->surname;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setSurname($surname){
        $this->surname=$surname;
    }
}


<?php
