<?php
if (!empty($_POST)) {
    include 'auth.php';
    $login = $_POST['login'] ?? "";
    $password = $_POST['password'] ?? "";

    if (checkAuth($login, $password)) {
        setcookie("login", $login, 0, '/');
        setcookie("password", $password, 0, '/');
        setcookie("role",getRole($login),0,'/');
        header("Location: /index.php");
    } else {
        $error = 'Authorisation failed';
    }
}

if (isset($_REQUEST['submit'])){
    session_start();
    $_SESSION['login']=$_REQUEST['login'];
    $_SESSION['password']=$_REQUEST['password'];
}
?>


<html>
<head>
    <title>Enter page</title>
</head>
<body>
<?php if (isset($error)): ?>
    <span style="color: red"><?= $error ?> </span>
<?php endif; ?>

<form action="" method="post">
    Login:<input type="text" name="login" required>
    <br>
    Password:<input type="password" name="password" required>
    <br>
    <input type="submit" value="Enter" name="submit">

</form>
</body>
</html>