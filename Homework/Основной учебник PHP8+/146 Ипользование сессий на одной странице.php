<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // первыйзаход на страницу
} else {
    $_SESSION['counter']++;   // последующие заходы
}

echo $_SESSION['counter'];
?>


//
