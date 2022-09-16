<?php
session_start();
include "database.php";
include 'auth.php';


if(isset($_POST['login'], $_POST['password'])) {
    $authUser = login($_POST['login'], $_POST['password']);
//    var_dump($authUser);
}
if (isset($_POST['logout'])) {
    logout();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <?php if (!isset($_SESSION['auth_user'])) { ?>
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup"></div>

    <div class="login">
        <form method="post">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="text" name="login" placeholder="login" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button>Login</button>
        </form>
        <?php
        }
        else
        { ?>
                <link href="style.css" rel="stylesheet">
            <h3> Hello, <?php echo $_SESSION['auth_user']['username']; ?></h3>

        <form method="post">
                <button type="submit" name="logout">Logout</button>
        </form>

        <?php
        }
        ?>
    </div>
</div>
</body>
</html>