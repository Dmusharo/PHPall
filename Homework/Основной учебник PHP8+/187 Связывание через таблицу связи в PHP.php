<?php
//connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb1"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");

$query='SELECT
	users.name as user_name, cities.name as city_name
FROM
	users
LEFT JOIN users_cities ON users_cities.user_id=users.id
LEFT JOIN cities ON users_cities.city_id=cities.id';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$data=mysqli_fetch_assoc($result);
//Формируем массив в цикле

for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';
