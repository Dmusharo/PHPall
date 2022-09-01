<?php
session_start();
include "auth_function.php";
if(isset($_POST['submit'])) {
    header("Location: http://local.php:8080/login.php");
}

?>
<form method="post" action="login.php">
    LOGIN: <input type="text" name="login" required>
    <br>
    PASSWORD: <input type="password" name="password" required>
    <br>
    <input type="submit" value="Autorization" name="submit">
</form>
</body>


