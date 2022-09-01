<?php
include "auth_function.php";
if (isset($_POST['logout'])) {
    logout();
    header("Location: http://local.php:8080");
}
?>


