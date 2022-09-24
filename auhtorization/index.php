<?php
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization and registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="vendor/signin.php" method="post">
    <label>Login</label>
    <input type="text" name="login"  placeholder="Enter your login">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <button type="submit">Enter</button>
    <p>
        Don't have an account? - <a href="registration.php">Registration</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }unset($_SESSION['message']);
    ?>
</form>


</body>
</html>

<?php
//$user = "root";
//$pass = "password";
//$host = "db";
//$dbdb = "db";
//
//$connection = new mysqli($host, $user, $pass, $dbdb);
//if (isset($_REQUEST['submit'])) {
//    $first_name = $_REQUEST['first_name'];
//    $last_name = $_REQUEST['last_name'];
//    $email = $_REQUEST['email'];
//    $password = $_REQUEST['password'];
//    $query = "SELECT * FROM users";
//
//    if ($result = $connection->query($query)) {
//        while ($array = $result->fetch_array()) {
//            if ($array['email'] === $email) {
//                echo 'User already exists';
//            }
//        }
//    }
//    $connection->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password');");
//}
//
//?>
<!--<form method="post">-->
<!--    First name <input type="text" name="first_name" required> <br>-->
<!--    Last name <input type="text" name="last_name" required> <br>-->
<!--    E-mail <input type="email" name="email" required> <br>-->
<!--    Password <input type="password" name="password" required>-->
<!--    <input type="submit" name="submit">-->
<!--</form>-->