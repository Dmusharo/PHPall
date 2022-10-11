<?php
// connection to database
$user = "root";
$pass = "password";
$host = "db";
$dbdb = "db";
$connection = new mysqli($host, $user, $pass, $dbdb);


// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
//-----------
//    $result=mysqli_query($connection, 'SELECT * FROM users');
//    echo '<pre>';
//    var_dump($result);
//    echo '<pre>';

//Подготовительные манипуляции для работы с SQL в PHP
// Отлавливаем ошибки базы данных
$query = 'SELECT * FROM users WHERE salary <500';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
echo '<pre>';
var_dump($result);
echo '<pre>';


