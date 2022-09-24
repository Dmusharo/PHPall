<?php
session_start();
if(!$_SESSION['user']) {
    header('Location: /');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization and registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="150" style="text-align: center" alt="">
    <h2> <?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"> <?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Exit</a>

</form>


</body>
</html>
