<?php
session_start();
if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    $time=date('d-m-Y');

    $userDB = "root"; // имя пользователя
    $passDB = "password"; // пароль
    $hostDB= "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connectionDB = new mysqli($hostDB, $userDB, $passDB, $namebase);
    mysqli_query($connectionDB, "SET NAMES 'utf8'");

    $query = "SELECT * FROM users WHERE login='$login'";
    $user = mysqli_fetch_assoc(mysqli_query($connectionDB, $query));

    if(empty($user)){
        $query = "INSERT INTO users SET login='$login', password='$password', email='$email', time='$time'";
        mysqli_query($connectionDB, $query);
        $_SESSION['auth'] = true;
        header('Location: index.php');
    } else {
            echo "Account occupation";
    }

}
?>
<form action="" method="POST">
    <h1>Registration</h1>
	LOGIN:<input name="login">
	PASSWORD:<input name="password" type="password">
    EMAIL:<input name="email" type="email">
	<input type="submit">
</form>