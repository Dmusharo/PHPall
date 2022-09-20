<?php
if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (mb_strlen($firstName < 1) || mb_strlen($firstName) > 65) {
        echo "Недопустима довжина імені";
    } elseif (mb_strlen($lastName < 3) || mb_strlen($lastName) > 65) {
        echo "Недопустима довжина прізвища";
    } elseif (mb_strlen($email < 1) || mb_strlen($email) > 129) {
        echo "Недопустима довжина прізвища";
    } elseif (mb_strlen($pass < 2) || mb_strlen($pass) > 257) {
        echo "Недопустима довжина пароля";
    }
    $user = "root";
    $pass = "password";
    $hosts = "db";
    $dbdb = "db";
    $connetion = new mysqli($hosts, $user, $pass, $dbdb);
    if ($connetion->connect_error) {
        die("Connection failed: " . $connetion->connect_error);
    }
    $pass = md5($pass . "fdoief23466");
    $connetion->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$firstName','$lastName','$email','$pass')");
    $connetion->close();
}
