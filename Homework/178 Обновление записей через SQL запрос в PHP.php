<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");
//1//2

//$query = 'UPDATE users SET age=35 WHERE id=4';

//3 Всем, у кого зарплата 500, сделайте ее 700.
//UPDATE users  SET salary=700 WHERE salary=500
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


//4 Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
//UPDATE users  SET age =23 WHERE id >2 and id < 5


//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';



?>

