<?php
//Task 1
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
$var -= 1;
echo $var;
//Task 2
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
echo '<br>';
//Task 3
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
//Task 4
$name = 'Anton';
echo "Privet {$name}";
//Task 5
$num = '12345';
$result = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo $result;
//Task 6
$min = 60;
$hour = 60 * $min;
$day = 24 * $hour;
$months = 30 * $day;
echo "Hour - {$hour} sek <br> Day - {$day} sek <br> Months - {$months} sek ";
//Task 7
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;
//Task 8
$var = 10;
$var++;
$var++;
$var--;
echo $var;
//Task 9
$arr = ['Privet', 'mir', '!'];
$text = $arr[0] . ' ' . $arr[1] . $arr[2];
echo $text;
//Task 10
$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];
var_dump($arr['ru'][0]);
//Task 11
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];
//Task 12
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Петя'], ' ', $arr['Коля'];
//Task 13
$a = 10;
if($a == 10) {
    echo 'Verno';
}else {
    echo 'Neverno';
}
//Task 14
$min = 17;
if($min <= 15) {
    echo 'First quatre';
}
elseif($min >15 and $min <= 30) {
    echo 'Second quatre';
}elseif($min > 30 and $min <= 45) {
    echo '3-d quatre';
}elseif($min > 45 && $min <= 60) {
    echo '4-th quatre';
}
//Task 15.1
$lang = 'ru';
if($lang == 'ru') {
    $arr = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
}if($lang == 'en') {
    $arr = ['manday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
}var_dump($arr);
//Task 15.2
$lang = 'ru';
switch ($lang) {
    case 'ru':
        $arr = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
        break;
    case 'en':
        $arr = ['manday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
}var_dump($arr);
//Task 15.2
$lang = 'en';
$arr =[
    'ru' => ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
    'en' => ['manday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'],
];
var_dump($arr[$lang]);
//Task 16
$arr = [1, 3, -3, 0, null, true, '', '0'];
foreach ($arr as $elem) {
    if (isset($elem)) {
        echo 'verno' . '<br>';
    } else {
        echo 'neverno' . '<br>';
    }
}
//Task 17
$a = null;
if ($a) {
    echo "verno";
} else {
    echo "neverno";
}echo '<br>';
//task 18
$var = false;
if($var != true) {
    echo 'verno';
}else {
    echo 'neverno';
}
//Task 19
$month = 12;
if($month >= 1 and $month <= 2 or $month == 12) {
    echo 'winter';
}if($month > 2 and $month <= 5) {
    echo 'spring';
}if($month > 5 and $month <= 8) {
    echo 'summer';
}if($month > 8 and $month <= 11) {
    echo 'winter';
}
//Task 20
$year = 2005;
if($year % 400 == 0) {
    echo 'visokosniy';
}else {
    echo 'NEvisokosniy';
}
//Task 21
$str = 'abcde';
if($str[0] == 'a') {
    echo 'Letter A is here';
}else {
    echo 'There is no A';
}
//Task 22
$str = '12345';
if($str[0] == 1 || $str[1] == 2 || $str[2] == 3) {
    echo 'Yes';
}else {
    echo 'No';
}
//Task 23
$str = '246642';
if($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]) {
    echo 'Yes';
}else {
    echo 'No';
}