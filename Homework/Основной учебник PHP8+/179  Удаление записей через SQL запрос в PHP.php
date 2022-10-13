<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");
//1  Удалите юзера с id, равным 7.
//$query = 'DELETE FROM users WHERE id=7';

//2  Удалите всех юзеров, у которых возраст 23 года.
//$query = 'DELETE FROM users WHERE age=23';

//3 Удалите всех юзеров
$query='DELETE FROM users' ;


$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';



?>

