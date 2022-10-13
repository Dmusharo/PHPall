<?php
/*
 * Давайте теперь научимся добавлять новые записи в таблицу. Это делается с помощью команды INSERT INTO. Она имеет следующий синтаксис:

<?php
	$query = "INSERT INTO таблица (поле1,
		поле2...) VALUES (значение1, значение2...)";
?>
Давайте в нашу таблицу users добавим нового юзера:

<?php
	$query = "INSERT INTO users (name,
		age, salary) VALUES ('user', 30, 1000)";
?>
 */
?>
<meta charset="utf-8">
<?php
// connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");

// 1 Добавьте нового юзера 'user7', 26 лет, зарплата 300.
//INSERT INTO users (name,age, salary) VALUES ('user7', 26, 300)



$query = 'SELECT name FROM users ';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//Формируем массив в цикле
echo '----------------------'.'<br>';
for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
echo '<pre>';
var_dump($data);
echo '<pre>';



?>


