<?php
session_start();
include "validation/check.php";
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
    <?php if (isset($_SESSION['auth_user'])){ ?>
    <div class="row">
        <div class="col">
            <h1>Форма реєстрації</h1> <br>
            <form action="" method="post">
                <input type="text" class="form-control" name="firstname" placeholder="Введіть ім'я"> <br>
                <input type="text" class="form-control" name="lastname" placeholder="Введіть прізвище"> <br>
                <input type="text" class="form-control" name="email" placeholder="Введіть електронну адресу"> <br>
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
        <?php } ?>
    </div>
</body>
</html>