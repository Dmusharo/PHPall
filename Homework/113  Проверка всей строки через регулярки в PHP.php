<?php
//Проверка всей строки через регулярки в PHP
//1
//Определите, является ли переданная строка является доменом. Используйте для тестов следующие строки:
$reg   = '#^[a-z-_0-9]+\.[a-z]{2,}$#';
$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -
foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . "<br>";
}

//2 Определите, является ли переданная строка является емейлом. Используйте для тестов следующие строки:
$reg   = '#^[a-z-_0-9]+@[a-z]+\.[a-z]{2,}$#';
$arr[] = 'addr@mail.ru';    // +
$arr[] = 'addr123@mail.ru'; // +
$arr[] = 'my-addr@mail.ru'; // +
$arr[] = 'my_addr@mail.ru'; // +
$arr[] = 'addr@site.ru';    // +
$arr[] = 'addr.ru';         // -
$arr[] = 'addr@.ru';        // -
$arr[] = 'my@addr@mail.ru'; // -
foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . "<br>";
}