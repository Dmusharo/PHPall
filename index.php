<link rel="stylesheet" href="style.css">
<?php

include "auth_function.php";

if (empty($_POST)) {
    ?>

    <body>
    <form method="post">
        LOGIN: <input type="text" name="login" required>
        <br>
        PASSWORD: <input type="password" name="password" required>
        <br>
        <input type="submit" value="Autorization">
    </form>
    </body>
<?php
}
if (isset($_POST) && !empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login && $password) {
        login($login, $password);
    }
    if (isset($_SESSION['auth']))  {
        $role = $_SESSION['role'];
        echo "<h1>Hello $login.<br></br>Role: $role</h1>";
        ?>

            <form method="post" action="logout.php">
                <input type="submit" name="logout" value="logout" >
            </form>
        <?php

    }
    elseif (isset($_POST['logout'])) {
        logout();
    }
    else {
        echo "<h1>Login or password invalid</h1>";
        ?><a href="index.php">Back</a>
    <?php

    }
}




?>

