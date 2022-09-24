<?php
include 'function.php';

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
$errorMessage = null;
$auth = false;


if($login && $password) {
    $user = getUserByLogin($login);

    if ($user === null) {
        $errorMessage = 'User not found';
    }


    elseif (!isvalidPassword($user['password'], $password)){
        $errorMessage = 'Password invalid';
    }

    else {
        $auth = true;
    }
}


if ($errorMessage) {
    echo $errorMessage;
}

elseif ($auth === true) {
    echo 'Success login';
}

else {
    ?>

<link rel="stylesheet" href="../style.css">
    <body>
<form action="" method="post">
    <label for="login" >Login</label>
    <input type="text" id="login" placeholder="Введите свой логин" name="login">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Введите пароль" name="password">
    <input type="submit" value="login">
</form>

    </body>
    <?php
}
?>




