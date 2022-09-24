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
echo '<br>';
//Task 18
$a = '1a2b3c4b5d6e7f8g9h0';
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $a);
//Task 19
$str = 'abcabcabcabc';
echo strtr($str, 'abc', '123');
echo strtr($str, ['a' => '1', 'b' => '2', 'c' => '3']);
//Task 20
$str = 'Hellomydearfriend';
echo substr_replace($str, '!!!', 2 , 5);
//Task 21
echo '<br>';
$str = 'abc abc abc';
echo strpos($str, 'b');
echo '<br>';
//Task 22
$str = 'abc abc abc';
echo strrpos($str, 'b');
//Task 23
echo '<br>';
$str = 'abc abc abc';
echo strpos($str, 'b', 3);
echo '<br>';
//Task 24
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', 4);
//Task 25
$str = 'jnfunfuoew..';
if(strpos($str, '..') !== false) {
    echo 'yes';
}
else {
    echo 'no';
}
echo '<br>';
//Task 26
$str = 'http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html';
if (strpos($str, 'http://') === 0) {
    echo 'yes';
}
else {
    echo 'no';
}
//Task 27
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);
//Task 28
$arr = ['html', 'css', 'php'];
$str = implode(', ', $arr);
echo $str;
//Task 29
$str = '2013-12-31';
$arr = explode('-', $str);
$str1 = implode('.', $arr);
echo $str1;
//Task 30
$str = '1234567890';
$arr = str_split($str, 2);
var_dump($arr);
//Task 31
$str = '1234567890';
$arr = str_split($str, 1);
var_dump($arr);
//Task 32
$str = '1234567890';
$arr = str_split($str, 2);
echo implode('-', $arr);
//Task 33

$str = "  abcde  ";
echo rtrim($str);
//Task 34
$str = "/php/";
echo trim($str, "/");
//Task 35
$str = 'слова слова слова.';
echo rtrim($str, ".") . ".";
//Task 36
$str = "12345";
echo strrev($str);
//Task 37
$str = "Madam, Otto, Kayak, Nun, level";
echo strrev($str);
//Task 38
$str = "abhjdn..!?)&&";
echo str_shuffle($str);
//Task 39
$str = 'abcdefghiklmnopqrstvxyz';
$shuffle = str_shuffle($str);
echo substr($shuffle, 0, 6);
//Task 40
$str = "12345678";
echo number_format($str, 0, "", " ");
//Task 41
$str = "x";
$repead = "";
for ($i=1; $i <= 9; $i++) {
    $repead = str_repeat($str, $i) . "<br>";
    echo $repead;
}
//Task 42

for ($i=1; $i <= 9; $i++) {
    echo str_repeat($i, $i) . '<br>';
}
//Task 43
$str = 'html, <b>php</b>, js';
echo strip_tags($str);
//Task 44
$str = '<h2>Заголовок h2</h2>
<p>Это еще один абзац.
    Это обычный текст, а это <i>курсивный</i> текст.</p>
<p>И еще один абзац. Это обычный текст, а это <b>жирный</b> текст.</p>
<h3>Заголовок h3</h3>';
echo strip_tags($str, '<b><b/><i></i>');
//Task 45
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);
//Task 46
echo '<br>';
echo ord('a');
echo '<br>';
echo ord('b');
echo '<br>';
echo ord('c');
echo '<br>';
echo ord(' ');
//Task 47
echo chr(33);
//Task 48
$str = chr(90);
echo $str;
//Task 49
$str = '';
$len = 15;
for ($i = 0; $i < $len; $i++)
    $str .= chr(rand(97,122));
echo $str;
//Task 50
$letter = 'C';
if(ord($letter) >= 65 and ord($letter) <= 90) {
    echo 'Big one';
}
elseif (ord($letter) >= 91 and ord($letter) <= 122) {
    echo 'Small one';
}
//Task 52
$str = 'ab-cd-ef';
echo strchr($str, "-");
//Task 53
$str = 'ab-cd-ef';
echo strrchr($str, "-");
//Task 54
$str = 'ab--cd--ef';
echo strstr($str, "--");
//Task 55
$str = 'var_test_text';
$strF = str_replace("_", " ", $str);
$strS = ucwords($strF);
$strT = str_replace(["V", " "], ["v", ""], $strS);
echo $strT;
//Task 55
$arr = explode('_', 'var_test_text');
$str = '';
foreach ($arr as $key=>$val) {
    if($key == 0) {
        $str .= $val;
    } else {
        $str .=  ucfirst($val);
    }
}
echo $str;
//Task 56

$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = rand(0, 1000);
}
var_dump($arr);
foreach($arr as $value) {
    if (strpos($value, "3") !== false) {
        echo $value;
    }
}
