<?php
//Task 1
echo strtoupper('php');
//Task 2
echo strtolower('PHP');
//Task3
echo ucfirst('london');
//Task 4
echo lcfirst('London');
//Task 5
echo ucwords('london is the capital of great britain');
//Task 6
echo strtolower('LONDON');
//Task 7
echo strlen('html css php');
//Task 8
$password = 'sassj';
if (strlen($password) < 5 | strlen($password) > 10) {
    echo "Incorrect password";
}
else {
    echo "Good password";
    }
//Task 9
$a = 'html css php';
$html = substr($a, 0, 4);
echo $html;
$css = substr($a, 5, -4);
echo '<br>';
echo $css;
echo '<br>';
$php = substr($a, -3);
echo $php;
//Task 10
$a ='Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.';
echo mb_substr($a, -3);
//Task 11
$a = 'http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html';
if (substr($a, 0, 7) == 'http://') {
    echo 'yes';
}
else {
    echo 'no';
}
echo '<br>';
//Task 12
$a = 'https://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html';
if (substr($a, 0, 7) == 'http://' | substr($a, 0, 8) == 'https://') {
    echo 'yes';
}
else {
    echo 'no';
}
echo '<br>';
//Task 13
$a = '123.png';
if (substr($a, -4) == '.png') {
    echo 'yes';
}
else {
    echo 'no';
}
echo '<br>';
//Task 14
$a = '123.jpeg';
if (substr($a, -4) == '.png' | substr($a, -5) == '.jpeg') {
    echo 'yes';
}
else {
    echo 'no';
}
echo '<br>';
//Task 15
$a = 'abcdefg';
if (strlen($a) < 5) {
    echo $a;
}
else {
    echo substr($a, 0, 5) . '...';
}
//Task 16
$a = '31.12.2013';
echo str_replace('.', '-', $a);
echo '<br>';
//Task 17
$str = 'abcabcabc';
echo str_replace(['a', 'b', 'c' ], [1, 2, 3], $str);
//Task 18
$a = '1a2b3c4b5d6e7f8g9h0';
echo str_


