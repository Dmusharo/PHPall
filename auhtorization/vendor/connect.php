<?php
$user = "root";
$pass = "password";
$host = "db";
$dbdb = "mydb";
$connect = mysqli_connect($host, $user, $pass, $dbdb);
if (!$connect) {
    die("Error connect");
}