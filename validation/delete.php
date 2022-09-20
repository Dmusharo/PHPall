<?php
$user = "root";
$pass = "password";
$hosts = "db";
$dbdb = "db";
$connetion = new mysqli($hosts, $user, $pass, $dbdb);
if ($connetion->connect_error) {
    die("Connection failed: " . $connetion->connect_error);
}
$getid = $connetion->query("SELECT * FROM `users`");
$myrow = $getid->fetch_assoc();
$id = $myrow['id'];
$delete = $connetion->query("DELETE FROM `users` WHERE `id`='$id'");
header("Location: /index.php");
?>