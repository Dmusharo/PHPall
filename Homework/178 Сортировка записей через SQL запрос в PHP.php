<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");
//1 Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты
//$query="SELECT * FROM users ORDER BY salary" ;

//2 Достаньте всех юзеров и отсортируйте их по убыванию зарплаты.
//$query="SELECT * FROM users ORDER BY salary DESC;"

//3 Достаньте всех юзеров и отсортируйте их по имени.
// SELECT * FROM users  ORDER BY name

//4 Достаньте юзеров с зарплатой 500 и отсортируйте их по возрасту.
//SELECT * FROM users where salary =550 ORDER BY name



$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';



?>

