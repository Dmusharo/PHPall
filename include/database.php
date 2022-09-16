<?php
//
//$link = mysqli_connect('localhost', 'root', '123456', 'test');
//if (mysqli_connect_errno()) {
//    echo 'error connect' . mysqli_connect_errno() . mysqli_connect_error();
//}

$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'Загруженный php.ini: ' . $inipath;
} else {
    echo 'Файл php.ini не загружен';
}
