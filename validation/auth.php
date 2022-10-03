<?php
session_start();
$err = "ERORR";
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user = "root";
    $pass = "password";
    $hosts = "db";
    $dbdb = "db";
    $connetion = new mysqli($hosts, $user, $pass, $dbdb);
    if ($connetion->connect_error) {
        die("Connection failed: " . $connetion->connect_error);
    }
    $pass = md5($pass . "fdoief23466");
    $result = $connetion->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");
    $myrow = $result->fetch_array();
    if (isset($myrow)) {
        if ($email === $myrow['email'] and $pass === $myrow['password']) {
            $_SESSION['auth_user'] = $myrow;
        }
    } else {
        echo "Користувач не знайдений";
        exit();
    }
    if (isset($_POST['logout'])) {
        unset($_SESSION['auth_user']);
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обліковий запис</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="logg">
    <form action="/index.php" method="post">
        <h4> <?php if (isset($_SESSION['auth_user'])) {
                echo "Вітаю з авторизацією" . ' ' . $_SESSION['auth_user']['first_name'] . ' ' . $_SESSION['auth_user']['last_name'];
            } ?>
        </h4>
        <button class="btn btn-success" type="submit" name="logout" value="logout">
            Logout
        </button>
    </form>
</div>
