<?php
session_start();
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
<?php endif; ?>



//----------\

<?php
session_start();

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
    <a href="1.php">ссылка</a><br>
    <a href="2.php">ссылка</a><br>
    <a href="3.php">ссылка</a><br>
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
    <a href="5.php">ссылка</a><br>
<?php endif; ?>


























