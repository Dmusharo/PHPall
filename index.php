<?php
session_start();
if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (mb_strlen($firstName < 1) || mb_strlen($firstName) > 65) {
        echo "Недопустима довжина імені";
        exit();
    } elseif (mb_strlen($lastName < 3) || mb_strlen($lastName) > 65) {
        echo "Недопустима довжина прізвища";
        exit();
    } elseif (mb_strlen($email < 1) || mb_strlen($email) > 129) {
        echo "Недопустима довжина почти";
        exit();
    } elseif (mb_strlen($pass < 2) || mb_strlen($pass) > 257) {
        echo "Недопустима довжина пароля";
        exit();
    }
    $user = "root";
    $pass = "password";
    $hosts = "db";
    $dbdb = "db";
    $connetion = new mysqli($hosts, $user, $pass, $dbdb);
    if ($connetion->connect_error) {
        die("Connection failed: " . $connetion->connect_error);
    }
    $resutl = $connetion->query("SELECT `email` FROM `users` WHERE `email` = '$email'");
    $myrow = $resutl->fetch_array();
    if (!empty($myrow['email'])) {
        if ($myrow['email'] == $email) {
            echo "Такий користувач уже існує";
        }
    }
    $pass = md5($pass . "fdoief23466");
    $connetion->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$firstName','$lastName','$email','$pass')");
    if (empty($myrow['email'])) {
        echo "Зареєстровано новий користувач";
    }
    $connetion->close();
}
?>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма реєстрації</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="'container mt-4">
    <div class="row">
        <div class="col">
            <h1>Форма реєстрації</h1> <br>
            <form action="" method="post">
                <input type="text" class="form-control" name="firstname" placeholder="Введіть ім'я"> <br>
                <input type="text" class="form-control" name="lastname" placeholder="Введіть прізвище"> <br>
                <input type="email" class="form-control" name="email" placeholder="Введіть електронну адресу"> <br>
                <input type="password" class="form-control" name="password" placeholder="Введіть пароль"> <br>
                <button class="btn btn-success" type="submit">Зареєструвати</button>
            </form>
        </div>
        <div class="col">
            <h1>Форма авторизації</h1> <br>
            <form action="validation/auth.php" method="post">
                <input type="text" class="form-control" name="email" placeholder="Введіть електронну адресу"> <br>
                <input type="password" class="form-control" name="password" placeholder="Введіть пароль"> <br>
                <button class="btn btn-success" type="submit">Вхід</button>
            </form>
        </div>
    </div>
</body>
</html>