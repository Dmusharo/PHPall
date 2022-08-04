<?php
//Lesson 63. Task 4
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrK = [];
$arrV = [];
foreach ($arr as $key => $value) {
    $arrK[$value] = $key;
}
var_dump($arrK);
//Lesson 63. Task 5
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arrN = [];
foreach ($arr as $value) {
    $valueString = (string) $value;
    if ($valueString[0] == 1 || $valueString[0] == 2) {
        $arrN[] = $value;
    }
}

print_r($arrN);
//Lesson 64. Task 1
$arr = [8, 9, 4, 7, 5, 3];
$lenght = count($arr);
for ($i = -1; $i < $lenght -1; $i++) {
    echo $arr[$i + 1];
}
//Lesson 64. Task 2
$arr = [8, 9, 4, 7, 5, 3];
$lenght = count($arr);
for ($i = 0; $i < $lenght -1; $i++) {
    echo $arr[$i] + $arr[$i + 1];
}
//Lesson 64. Task 3
$arr = [8, 9, 4, 7, 5, 3];
$lenght = count($arr);
for ($i = 2; $i < $lenght; $i++) {
    echo $arr[$i - 2], ' ', $arr[$i - 1];
}
//Lesson 64. Task 4
$arr = [8, 9, 4, 7, 5, 3];
$lenght = count($arr);
for ($i = 2; $i < $lenght; $i++) {
    echo $arr[$i - 2] + $arr[$i - 1] + $arr[$i];
}echo '<br>';
//Lesson 64. Task 5
$arr = [8, 9, 4, 7, 5, 3];
$lenght = count($arr);
for ($i = 1; $i < $lenght - 1; $i++) {
    echo $arr[$i] + $arr[$i - 1] + $arr[$i + 1];
}
//Lesson 65. Task 1
$one = 0;
$two = 1;
for($i = 1; $i <= 10; $i++) {
    $current = $one + $two;
    $one = $two;
    $two = $current;
    echo $current . '<br>';
}
//Lesson 65. Task 2
$one = 0;
$two = 1;
$three = 2;
for($i = 1; $i <= 10; $i++) {
    $current = $one + $two + $three;
    $one = $two;
    $two = $three;
    $three = $current;
    echo $current . '<br>';
}
//Lesson 66. Task 1
$str = '';

for ($i = 0; $i < 5; $i++) {
    $str .= 'xx';
    echo $str . '<br>';
}
//Lesson 66. Task 2
for($i = 1; $i <= 10; $i += 2) {
    for($j =1; $j <= $i; $j++) {
        echo $i;
    }echo '<br>';
}
//Lesson 66. Task 3
$str = '';

for ($i = 5; $i > 0; $i--) {
    $str .= 'x';
    echo $str . '<br>';
}
//Lesson 66. Task 4
for($i = 9; $i > 0; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo $i;
    }echo '<br>';
}
//Lesson 67. Task 1
$arr = [];
$str = '';
for($i = 0; $i <= 8; $i += 2) {
    $str .= 'xx';
    $arr[] = $str;

}var_dump($arr);
echo '<br>';
//Lesson 67. Task 2
$arr = [];

for($i = 1; $i < 6; $i++) {
    $str = '';
    for($j = 1; $j <= 5;$j++) {
        $str .= $i;
    }$arr[] = $str;
}var_dump($arr);
//Lesson 68. Task 1
for($i= 1; $i <= 100; $i++) {
    echo $i . '<br>';
}
//Lesson 68. Task 2
for($i = 100; $i > 0; $i--) {
    echo $i . '<br>';
}
//Lesson 68. Task 3
for($i = 1; $i <= 100; $i++) {
    if($i % 2 == 0) {
        echo $i . '<br>';
    }
}
//Lesson 68. Task 4
$str = '';
for($i = 1; $i <= 10; $i++) {
    $str .= 'x';
}echo $str;
//Lesson 68. Task 5
$arr = [];
for($i =1; $i <= 10; $i++) {
    $arr[] = $i;
}var_dump($arr);
//Lesson 68. Task 6
$arr = [1, 5, -3, 8, 7, 11, 45, 72];
foreach ($arr as $value) {
    if($value >= 0 and $value <= 10) {
        echo $value;
    }
}
//Lesson 68. Task 7
$arr = [1, 5, -3, 8, 7, 11, 45, 72];
foreach ($arr as $value) {
    if ($value == 5) {
        echo 'yes';
    }
}
//Lesson 68. Task 8
$arr = [1, 5, -3, 8, 7, 11, 45, 72];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
}echo $sum;
//Lesson 68. Task 9
$arr = [1, 5, -3, 8, 7, 11, 45, 72];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value ** 2;
}echo $sum;
echo '<br>';
//Lesson 68. Task 10
$arr = [1, 5, -3, 8, 7, 11, 45, 72];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
}echo $sum / count($arr);
//Lesson 68. Task 11
$n = 5;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo $factorial;