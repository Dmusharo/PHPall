<?php
include 'auth.php';
$login = getUserLogin();
session_start();

?>

<html>
<head>
    <title>Main page</title>
</head>
<body>
<span style="color: green">
    <?php if ($login !== null): ?>
        Hello , <?= $login . " Role : " . getRole($login); ?>
    <?php else: ?>
        <a href="/login.php">Autorization</a>
    <?php endif; ?>
    <?php if ($login !== null){
    ?>  </span>

<form action="/logout.php" method="post">
    <br>
    <input type="submit" name="Log out" value="logout">
    <br>
</body>

</html>
<?php
} ?>
