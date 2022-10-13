
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

//1 Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно).
//$query = 'SELECT * FROM users WHERE (age > 25 AND age <=28)';

//2 Выберите юзера user1.
//$query = 'SELECT * FROM users WHERE name="user1"';

//3 Выберите юзеров user1 и user2.
//$query = 'SELECT * FROM users WHERE name="user1" OR name = "user2"';

//4 Выберите всех, кроме юзера user3.
//$query = 'SELECT * FROM users WHERE name!="user3"';

//5 Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000.
//$query = 'SELECT * FROM users WHERE  age = 27 or salary = 1000';

//6  Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400.
//$query = 'SELECT * FROM users WHERE  age = 27 or salary != 400';

//7  Выберите всех юзеров в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000.
//$query = 'SELECT * FROM users WHERE  (age >= 23 or age < 27) or salary = 1000';
//8 Выберите всех юзеров в возрасте от 23 лет до 27 лет или с зарплатой от 400 до 1000.
$query = 'SELECT * FROM users WHERE  (age > 23 or age < 27) or (salary > 400 AND salary < 1000 )';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';


?>


