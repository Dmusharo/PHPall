<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");
//1
//Получите первых 4 юзера.

//$query='SELECT * FROM users LIMIT 4';

//2 Получите юзеров со второго, 3 штуки.
//$query='SELECT * FROM users LIMIT 2,3';

//3
//Отсортируйте юзеров по возрастанию зарплаты и получите первых 3 работника из результата сортировки.
$query='SELECT * FROM users order by salary  LIMIT 2,3';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';



?>

