<?php
function square($a) {
    $result = $a ** 2;
    return $result;
}
function summa($a, $b) {
    $result = $a + $b;
    return $result;
}
function trio($a, $b, $c) {
    $result = ($a - $b) / $c;
}

function days($a) {
    switch ($a) {
        case '1':
            echo 'Понедельник';
            break;
        case '2':
            echo 'Вторник';
            break;
        case '3':
            echo 'Среда';
            break;
        case '4':
            echo 'Четверг';
            break;
        case '5':
            echo 'Пятница';
            break;
        case '6':
            echo 'Суббота';
            break;
        case '7':
            echo 'Воскресенье';
            break;
    }
}
const AUTH_DATA = [['login' => 'Tony', 'password' => '88888888'], ['login' => 'Anton', 'password' => '77777777']];

function getUserByLogin(string $login): ?array {
    foreach (AUTH_DATA as $user) {
        if($login === $user['login']) {
            return $user;
        }
    }return null;
}
function isvalidPassword(string $realPassword, string $passward): bool
{
    return $realPassword === $passward;
}