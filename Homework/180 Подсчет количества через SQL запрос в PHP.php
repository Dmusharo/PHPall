<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");

$query='SELECT COUNT(*) as count FROM users where salary>300 OR age=23';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$data=mysqli_fetch_assoc($result);
var_dump($data);
//Формируем массив в цикле
//echo '----------------------'.'<br>';
//for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
//echo '<pre>';
//var_dump($data);
//echo '<pre>';



?>

