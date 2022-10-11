
/*
 *
Как вы видите, после имени таблицы можно еще дописать команду WHERE,
 в которой можно писать ограничение на выбираемые записи.
 В условии допустимы следующие операции сравнения: =, !=, <>, <, >, <=, >=.
 */
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

//Подготовительные манипуляции для работы с SQL в PHP
// Отлавливаем ошибки базы данных

//1 Выберите юзера с id, равным 3.

$query = 'SELECT * FROM users WHERE id=3';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';

//2 Выберите юзеров с зарплатой 900.

$query = 'SELECT * FROM users WHERE salary=900';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';

//3  Выберите юзеров в возрасте 23 года.

$query = 'SELECT * FROM users WHERE age=23';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';
///4 Выберите юзеров с зарплатой более 400.
///
$query = 'SELECT * FROM users WHERE salary >=500';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';

//6 Выберите юзеров с зарплатой НЕ равной 500.

$query = 'SELECT * FROM users WHERE salary <> 500';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';
?>

