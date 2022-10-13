<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");
//-----------
//    $result=mysqli_query($connection, 'SELECT * FROM users');
//    echo '<pre>';
//    var_dump($result);
//    echo '<pre>';

//1 Выберите из таблицы users имя, возраст и зарплату для каждого работника.
//$query = 'SELECT name, age,salary FROM users ';

//2 Выберите из таблицы users имена всех работников.
$query = 'SELECT name FROM users ';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';


?>

