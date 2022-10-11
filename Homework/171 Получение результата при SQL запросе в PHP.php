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
$query = 'SELECT * FROM users';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
////1 user
//$row = mysqli_fetch_assoc($result);
//var_dump($row);
//echo '<br>';
////2 user
//$row = mysqli_fetch_assoc($result);
//var_dump($row);
//echo '<br>';
//
////Получение в виде массива
//$row1=mysqli_fetch_assoc($result);
//$data[]=$row1;
//$row2=mysqli_fetch_assoc($result);
//$data[]=$row2;
//$row3=mysqli_fetch_assoc($result);
//$data[]=$row3;
//$row4=mysqli_fetch_assoc($result);
//$data[]=$row4;
//echo '----------------------'.'<br>';
//echo '<pre>';
//var_dump($data);
//echo '<pre>';

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';
echo '---------------------'.'<br>';
//2 Из полученного результата получите первого работника. Через echo выведите на экран его имя.
echo $data[0]['name'].'<br>';

//3
//Из полученного результата получите второго работника. Через echo выведите на экран его имя и возраст.
echo $data[1]['name'].'<br>',$data[1]['age'];

//4
//Из полученного результата получите третьего работника.
// Через echo выведите на экран его имя, возраст и зарплату.
echo $data[2]['name'].'<br>',$data[2]['age'].'<br>',$data[2]['salary'];
?>

