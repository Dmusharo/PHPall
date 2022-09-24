<?php
session_start();
//if($_SESSION['user']) {
//header('Location: profile.php');
//    $query = "SELECT * FROM users";
//
//    if ($result = $connection->query($query)) {
//        while ($array = $result->fetch_array()) {
//            if ($array['email'] === $email) {
//                echo 'User already exists';
//            }
//        }
//    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization and registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>Full Name</label>
    <input type="text" placeholder="Enter full name" name="full_name">
    <label>Login</label>
    <input type="text"  placeholder="Enter your login" name="login">
    <label>E-mail</label>
    <input type="email"  placeholder="Enter your e-mail" name="email">
    <label>Profile picture</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <label>Repeat your password </label>
    <input type="password" name="password_confirm" placeholder="Repeat your password">
    <button type="submit">Enter</button>
    <p>
        Already have an account?? - <a href="index.php">Authorization</a>
    </p>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }unset($_SESSION['message']);
        ?>

</form>


</body>
</html>