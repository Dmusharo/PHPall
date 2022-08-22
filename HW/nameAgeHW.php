<?php

//print_r($_GET);
//$a = $_GET['num'];
if (isset($_REQUEST['submit'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $message = strip_tags($_REQUEST['message']);
    $format = 'Привет %s, тебе %d лет, твое сообщение %s';
    printf($format, $name, $age, $message);

}
?>






<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Name, age</title>
</head>
<body>

<form action="../index.php" method="get">
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <textarea name="message"></textarea>
    <input type="submit" value="Enter" name="submit">
</form>

</body>
</html>