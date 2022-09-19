<?php

$user = "root";
$pass = "password";
$hosts = "db";
$dbdb = "db";

$connetion = new mysqli($hosts, $user, $pass, $dbdb);

if ($connetion->connect_error){
    die("Connection failed: " . $connetion->connect_error);
}
$connetion->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('UserFirstName', 'UserLastName', 'test1@mail.com', 'skfsidnfdsf');");

var_dump($connetion->error_list);
echo "Success";

