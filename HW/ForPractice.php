<?php
include_once 'function.php';
//print_r($_GET);
//$a = $_GET['num'];
if (isset($_GET['submit'])) {
    $a = $_GET['num'];
    if(!empty($a)) {
        $result = days($a);
        print_r($result);
    }
}

?>







<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.</title>
</head>
<body>

<form action="../index.php" method="get">
    NUM: <input type="text" name="num">
    <input type="submit" value="Lets go" name="submit">
</form>

</body>
</html>