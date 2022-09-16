<?php

$link = mysqli_connect('localhost', 'root', '123456', 'test');
if (mysqli_connect_errno()) {
    echo 'error connect' . mysqli_connect_errno() . mysqli_connect_error();
}