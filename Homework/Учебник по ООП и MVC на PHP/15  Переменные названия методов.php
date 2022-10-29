<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//Переменные названия методов

// ⊗ppOpBsVMN
//1
//Пусть массив $methods будет ассоциативным с ключами method1 и method
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
$user = new User('john', 21);

echo $user->{$methods['method1']}()."<br>";
echo $user->{$methods['method2']}()."<br>";