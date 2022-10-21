<?php
///1
/// Реализуйте описанную выше авторизацию. Сделайте так, чтобы, если пользователь прошел авторизацию - выводилось сообщение об этом, а если не прошел - то сообщение о том, что введенный логин или пароль вбиты не правильно.
///  ⊗ppPmAuAtr
///
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
        echo  'прошел авторизацию';
        // прошел авторизацию
    } else {
        // неверно ввел логин или пароль
        echo "введенный логин или пароль вбиты не правильно";
    }
}


?>

<form action="" method="POST">
    Login:<input name="login">
    Password: <input name="password" type="password">
    <input type="submit">
</form>


<?php
//2
//Модифицируйте код так, чтобы в случае успешной авторизации форма для ввода пароля и логина не показывалась на экране.
//

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
//        echo  'прошел авторизацию';
        header('Location: index.php');
        // прошел авторизацию
    } else {
        // неверно ввел логин или пароль
        echo "введенный логин или пароль вбиты не правильно";
    }
} else { ?>
    <form action="" method="POST">
        Login:<input name="login">
        Password: <input name="password" type="password">
        <input type="submit">
    </form>

    <?php

}

?>


<?php
//3
//  Модифицируйте код так, чтобы в случае успешной авторизации происходил редирект на страницу index.php.
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
//       echo  'прошел авторизацию';
        header('Location: index.php');

        // прошел авторизацию
    } else {
        // неверно ввел логин или пароль
        echo "введенный логин или пароль вбиты не правильно";
    }
} else { ?>
    <form action="" method="POST">
        Login:<input name="login">
        Password: <input name="password" type="password">
        <input type="submit">
    </form>

    <?php

}
if ()
?>


---------------------------4
    Модифицируйте код так, чтобы на странице index.php выводилось сообщение об успешной авторизации. Решите задачу через флеш-сообщения на сессиях.

    <?php
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
        session_start();
        $_SESSION['flash'] = 'Авторизация успешна';
        header('Location: index.php');


        // прошел авторизацию
    } else {
        // неверно ввел логин или пароль
        echo "введенный логин или пароль вбиты не правильно";
    }
} else { ?>
    <form action="" method="POST">
        Login:<input name="login">
        Password: <input name="password" type="password">
        <input type="submit">
    </form>

    <?php
}
if (!empty($_SESSION['flash'])){
    echo $_SESSION['flash'];
}

?>




