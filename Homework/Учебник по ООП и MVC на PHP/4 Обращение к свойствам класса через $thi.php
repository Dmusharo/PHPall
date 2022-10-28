<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

/*
 * ⊗ppOpBsPTh
 *1
 * Сделайте класс Employee, в котором будут следующие свойства - name, age, salary.
 *
 * 2
 *Сделайте в классе Employee метод getName, который будет возвращать имя работника.
 *
 * 3
 * Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
 *
 * 4
 * Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
 *
 * 5
 * Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
 *
 * 6
 * Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
 *
 *
 *
 *
 */

class Eployee
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        // Возвращаем имя:
        return $this->name;
    }

    public function getAge()
    {
        // Возвращаем возраст
        return $this->age;
    }

    public function getSalary()
    {
        // Возвращаем зарплату
        return $this->salary;
    }

    public function checkAge($age)  //Метод проверки возраста
    {
        // Возвращаем тру если  >18 лет
        if ($age > 18) {
            return true;

        } else {
            return false;

        }
    }
    //Метод удвоения зарплаты
    public function doubleSalary($salary){
        $salary=$salary*2;
        return $salary;
    }


}

$user = new Eployee; // создаем объект класса
$user->name = 'john1'; // записываем имя
$user->age = 25; // записываем возраст
$user->salary = 2500;

$user1 = new Eployee; // создаем объект класса
$user1->name = 'john2'; // записываем имя
$user1->age = 17; // записываем возраст
$user1->salary = 4500;

// Вызываем наш метод:
echo $user->getName() . "<br>"; // выведет имя
echo $user1->getName() . "<br>"; // выведет имя
echo $user->getSalary() + $user1->getSalary() . "<br>"; // выведет Сумму зарплат
echo $user->getAge() . "<br>"; // выведет возвраст
var_dump($user1->checkAge($user->age));
echo "<br>";
echo $user->getSalary()."<br>";
echo " Двойная зарплата ".$user->doubleSalary($user->salary)."<br>";
echo $user->getSalary()."<br>";
echo "<br>";
echo '----------------------------------' . "<br>";


//Запись свойств ⊗ppOpBsPTh
/*
 *
 * 7
 * Сделайте класс User, в котором будут следующие свойства - name и age.
 *
 * 8
 * Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
 *
 * 9
 *Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
 *
 * 10
 * Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
 *
 * 11
 * Сделайте класс Employee, в котором будут следующие свойства работника - name, salary. Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
 *
 * 12
 *Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника.
 *
 * 13
 * В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
 *
 * 14
 * В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.
 *
 */

class User
{
    public $name;
    public $age;

    // Метод для изменения имени юзера:
    public function setName($name)
    {
        $this->name = $name; // запишем новое значение свойства name
    }

    // Метод   для возраста
    public function setAge($age)
    {
        if($age>=18) {
            $this->age = $age;
        }
    }


}

$user = new User; // создаем объект класса
$user->name = 'john'; // записываем имя
$user->age = 25; // записываем возраст

// Установим новое имя:
$user->setAge(34);
$user->setName('eric');

$user10 = new User;
$user10->age = 25;
$user10->name = "John1";

//Установка  возраста
$user10->setAge(26);


// Проверим, что имя изменилось:
echo $user->name . "<br>";// выведет 'eric'
echo $user->age . "<br>";// выведет  34
echo $user10->age . "<br>";// выведет  30


class Rectangle
{
    public $width ;
    public $height;

    public function getSquare($width,$height)
    {
        $square=$width*$height;
        return $square;
    }
    public function getPerimeter($width,$height)
    {
        $perimeter=2*($width+$height);
        return $perimeter;
    }

}
$p= new Rectangle;
$p->height=20;
$p->width=30;

echo $p->getSquare($p->width,$p->height)."<br>";
echo $p->getPerimeter($p->width,$p->height)."<br>";



