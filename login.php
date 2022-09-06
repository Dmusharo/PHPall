<?php

session_start();
include "auth_function.php";
if(isset($_POST['login']) && $_POST['password']) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $users = login($login, $password);


    if($users === null) {
        echo 'Invalid login or password';
        echo "<br>";
        echo "<a href='index.php'>back</a>";
    }else {
        $role = $_SESSION['role'];
        echo "Hello, $login. Role: $role.";
        ?>
<form method="post">
    <input type="submit" name="logout" value="logout">
</form>
<?php
    }
}
if(isset($_POST['logout'])) {
    logout();
}