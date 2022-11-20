<?php
error_reporting(E_ALL);
ini_set('display_errors', "on");

//   Объект со статическими свойствами и методами
//class User
//{
//    public static $count=0;
//    public $name;
//    public function __construct($name)
//    {
//        $this->name=$name;
//            self::$count++;
//    }
//}
//$user1= new  User('User1');
//$user2=new  User("User2");
//echo User::$count;
//1  Не подсматривая в мой код реализуйте такой же класс User, подсчитывающий количество своих объектов.


class User
{
    private static $count=0;
    public  $name;
    public function  __construct($name){
        $this->name=$name;
        self::$count++;
    }
    public static function getCount(){
        return self::$count;
    }
}
$user1 = new User('User1');
$user2= new User('User2');
echo User::getCount();
