<?php
/*
 * Правило 1
База данных и таблицы в ней должны быть в кодировке utf8_general_ci.

Правило 2
Сам PHP файл должен быть в кодировке utf8.

Правило 3
В начале PHP файла должен быть следующий HTML тег:

<meta charset="utf-8">
Правило 4
На всякий случай сразу после команды mysqli_connect добавьте такое запрос:

<?php
	mysqli_query($link, "SET NAMES 'utf8'");
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
   //-----------
//    $result=mysqli_query($connection, 'SELECT * FROM users');
//    echo '<pre>';
//    var_dump($result);
//    echo '<pre>';

//Подготовительные манипуляции для работы с SQL в PHP
    // Отлавливаем ошибки базы данных
  $query='SELECT * FROM users WHERE salary <500';
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    echo '<pre>';
    var_dump($result);
    echo '<pre>';
?>
