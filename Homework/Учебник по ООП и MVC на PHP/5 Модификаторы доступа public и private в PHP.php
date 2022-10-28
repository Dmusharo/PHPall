<?php
// Модификаторы доступа public и private в PHP
//инкапсуляцией - все лишнее не должно быть доступно извне

//
//class User
//{
//    public $name;
//    public $age;
//
//    // Метод для проверки возраста:
//    public function isAgeCorrect($age)
//    {
//        return $age >= 18 and $age <= 60;
//    }
//
//    // Метод для изменения возраста юзера:
//    public function setAge($age)
//    {
//        // Проверим возраст на корректность:
//        if ($this->isAgeCorrect($age)) {
//            $this->age = $age;
//        }
//    }
//
//    // Метод для добавления к возрасту:
//    public function addAge($years)
//    {
//        $newAge = $this->age + $years;
//        // вычислим новый возраст
//
//        // Проверим возраст на корректность:
//        if ($this->isAgeCorrect($newAge)) {
//            $this->age = $newAge; // обновим, если новый возраст прошел проверку
//			}
//    }
//}


error_reporting(E_ALL);
ini_set('display_errors', "on");

/*  ⊗ppOpBsAMPP
 * 1
 * Не подсматривая в мой код внесите такие же правки в класс User.
 *
 * 2
 * Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку.
 *
 * 3
 * Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
 *
 * 4
 * В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс
 *
 * 5
 * Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
 *
 * 6
 * Вынесите проверку курса в отдельный private метод isCourseCorrect.
 *
 */

class User
{
    public $name;
    public $age;

    // Метод для изменения возраста юзера:
    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge($years)
    {
        $newAge = $this->age + $years;
        // вычислим новый возраст

        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // обновим,если новый возраст прошел проверку
        }
    }

    // Метод для проверки возраста:
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }
}

$user = new User;

//$user->isAgeCorrect(34);


class Student
{
    public $name;
    public $course;

    public function transferToNextCourse($course)
    {
//        if ($course<5){
//            $newCourse= $this->course+1;
//            return $newCourse;
//        } else {
//            return $course;
//        }
        $newCourse = $this->course + 1;
        if ($this->isCourseCorrect($newCourse)) {
            $this->course = $newCourse;
            return $newCourse;
        }
    }

    private function isCourseCorrect($course)
    {
        if ($course < 5) {
            return $course;
        }
    }
}

$student = new Student; // создаем объект класса
$student->name = 'john'; // записываем имя
$student->course = 2; // записываем возраст

echo $student->transferToNextCourse($student->course);




