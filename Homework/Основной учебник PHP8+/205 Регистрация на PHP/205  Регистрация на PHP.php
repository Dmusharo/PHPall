<?php
session_start();
var_dump($_SESSION);
if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    //---
    //connection to database
    $userDB = "root"; // имя пользователя
    $passDB = "password"; // пароль
    $hostDB= "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connectionDB = new mysqli($hostDB, $userDB, $passDB, $namebase);
    mysqli_query($connectionDB, "SET NAMES 'utf8'");


    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = mysqli_query($connectionDB, $query);
    $user = mysqli_fetch_assoc($result);


    if (!empty($user)) {
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $user['login'];
    } else {
        echo "введенный логин или пароль вбиты не правильно";
        // неверно ввел логин или пароль
    }
}

if (!empty($_SESSION['auth'])): ?>
    <!DOCTYPE html>
    <html>
    <head>

    </head>
    <body>
    <p>текст только для авторизованного пользователя</p>
    <p><?php  echo "Привет, ".$_SESSION['login'] ?></p>
    <a href="Homework/Основной учебник PHP8+/204 Авторизация через сессию/1.php">ссылка</a><br>
    <a href="Homework/Основной учебник PHP8+/204 Авторизация через сессию/2.php">ссылка</a><br>
    <a href="Homework/Основной учебник PHP8+/204 Авторизация через сессию/3.php">ссылка</a><br>
    </body>
    </html>
    <?php var_dump($_SESSION);?>
<?php else: ?>
    <p>пожалуйста, авторизуйтесь</p>
    <form action="" method="POST">
        Login:<input name="login">
        Password: <input name="password" type="password">
        <input type="submit">
    </form>
    <a href="register.php">ссылка</a><br>
<?php endif; ?>


///--------------
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
