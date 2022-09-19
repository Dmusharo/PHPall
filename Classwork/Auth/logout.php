<?php
session_start();
if (isset($_COOKIE['login'])) {
    setcookie('login', '', time());
    unset($_COOKIE['login']);
}
if (isset($_COOKIE['password'])) {
    setcookie('password', '', time());
    unset($_COOKIE['password']);
}
if (isset($_COOKIE['role'])) {
    setcookie('role', '', time());
    unset($_COOKIE['role']);
}
if (isset($_SESSION)) {
    session_destroy();
}

?>

<html>
<head>
    <title>Logout</title>
</head>
<body>
<form action="" method="post">
    <p>Logout accepted</p>
    <br>
 <a href="index.php">Go to authorization page</a>
    <br>
    <input type="image" src="https://st.depositphotos.com/1008768/4036/i/600/depositphotos_40361867-stock-photo-logout-icon.jpg" alt="Кнопка «input»" >
</form>
</body>
</html>