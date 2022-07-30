<?php
//Lesson 35. Task 1
$test = 0;

if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 2
$test = -1;

if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 3
$test = '';

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 4
$test = -1;

if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 5
$test = '0';

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 6
$test = -1;

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 7
$test = null;

if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 8
$test = false;

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 9
$test = true;

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 10
$test = 'false';

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 11
$test = 'null';

if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 12
$test = 0;

if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 13
$test = null;

if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 35. Task 14
$test = false;

if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
//Lesson 36. Task 1
$test = 10;
if($test == 10) {
    echo 'right';
}
//Lesson 36. Task 2
if ($test == 0) echo 'right'; else echo 'wrong';
//Lesson 36. Task 3
$test = 0;
if ($test == 0) echo 'right';
//Lesson 37. Task 1
$day = 23;
if($day >= 1 and $day <= 10) {
    echo 'first decade';
}
if($day >= 11 and $day <= 20) {
    echo 'second decade';
}
if($day >=21 and $day <= 31) {
    echo 'third decade';
}
//Lesson 37. Task 2
$day = 13;
if($day >= 1 and $day <= 10) {
    echo 'first decade';
}elseif($day >= 11 and $day <= 20) {
    echo 'second decade';
}elseif($day >=21 and $day <= 31) {
    echo 'third decade';
}
//Lesson 37. Task 3
$day = 45;
if($day >= 1 and $day <= 10) {
    echo 'first decade';
}elseif($day >= 11 and $day <= 20) {
    echo 'second decade';
}elseif($day >=21 and $day <= 31) {
    echo 'third decade';
}else {
    echo 'wrong input';
}
//Lesson 37. Task 4
$age = '67';
$first = $age[0];
$second = $age % 10;
$sum = $first + $second;
if($age < 10 and $age > 99) {
    echo 'this number is not in the given range';
}
if($age >= 10 and $age <= 99 and $sum <= 9) {
    echo 'sum of digits equals one digit:', $sum;
}
if($age >= 10 and $age <= 99 and $sum > 9) {
    echo 'sum of digits equals:', $sum;
}
//Lesson 38. Task 1
$min = 55;

if ($min >= 0 and $min <= 14) {
    echo '1 четверть';
}
if ($min >= 15 and $min <= 29) {
    echo '2 четверть';
}
if ($min >= 30 and $min <= 44) {
    echo '3 четверть';
}
if ($min >= 45 and $min <= 59) {
    echo '4 четверть';
}
//Lesson 38. Task 2
$arr = [5, 6, 4, 8];

if (count($arr) >= 3) {
    echo array_sum($arr);
}
//Lesson 38. Task 3
$digit = 22;
if($digit % 2 == 0) {
    echo 'even';
}else {
    echo 'odd';
}
//Lesson 38. Task 4
$digit = 31;
if($digit % 3 == 0) {
    echo 'divided by 3';
}else {
    echo 'not divided';
}
//Lesson 39. Task 1
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
//Lesson 39. Task 2
$str = 'abcde';
if($str[0]== 'a') {
    echo 'True, first letter is "a"';
}
//Lesson 39. Task 3
$digit = '12345';
if($digit[0] == 1) {
    echo 'true is 1';
}elseif ($digit[0] !== 1) {
    echo 'it is not 1';
}elseif ($digit[0] !== 1) {
    echo 'it is not 1';
}
//Lesson 39. Task 4
$number = '123';
$sum = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}
echo "sum is {$sum}";
//Lesson 39. Task 5
$str = '468249';
if (($str[0]+$str[1]+$str[2]) == ($str[3]+$str[4]+$str[5]))
    echo 'yes';
else
    echo 'no';
//Lesson 40. Task 1
$num = 3;
switch ($num) {
    case '1':
        echo 'winter';
    break;
    case '2':
        echo 'spring';
    break;
    case '3':
        echo 'summer';
    break;
    case '3':
        echo 'autumn';
}
//Lesson 41. Task 1
$num = 2;
$result = $num >= 0 ? 1: -1;
echo $result;
/*lesson 42. Task 1
$user = ['name' => 'john', 'age' => 30];
$name = $user['name'] ?? 'unknown';
Coalesce operator is only allowed since php 7.0
lesson 42. Task 2
Coalesce operator is only allowed since php 7.0
Lesson 43. Task 1
*/
$a = 2 * (3 - 1);
$b = 6 - 2;
var_dump($a == $b);
//Lesson 43. Task 2
$a = 5 * (7 - 4);
$b = 1 + 2 + 7;
var_dump($a > $b);
//Lesson 43. Task 3
$a = 2 ** 4;
$b = 4 ** 2;
var_dump($a != $b);
//Lesson 44. Task 1
$i = 1;
while($i <= 100) {
    echo $i;
    $i++;
}
//Lesson 44. Task 2
$i = 11;
while($i <= 33) {
    echo $i;
    $i++;
}
//Lesson 44. Task 3
$i = 2;
while($i <= 100) {
    echo $i;
    $i += 2;
}
//Lesson 44. Task 4
$i = 1;
while($i <= 100) {
    echo $i;
    $i += 2;
}
//Lesson 44. Task 5
$i = 30;
while($i >= 0) {
    echo $i;
    $i--;
}
//Lesson 45. Task 1
$i = 10;

while ($i <= 1) {
    echo $i;
    $i--;
}
//Lesson 45. Task 2
$i = 10;

while ($i >= 1) {
    echo $i;
    $i--;
}
//Lesson 45. Task 3
$i = 10;

while ($i >= 0) {
    echo $i;
    $i--;
}
//Lesson 45. Task 4
$i = 10;

while ($i >= 0) {
    echo $i;
    $i--;
}
//Lesson 45. Task 5
$i = 10;

while ($i >= 0) {
    echo $i;
    $i--;
}
//Lesson 46. Task 1
echo '<br>';
for($i = 1; $i <= 100; $i++) {
    echo $i;
}
//Lesson 46. Task 2
echo '<br>';
for($i = 11; $i <= 33; $i++) {
    echo $i;
}
//Lesson 46. Task 3
echo '<br>';
for($i = 2; $i <= 100; $i += 2) {
    echo $i;
}
//Lesson 46. Task 4
echo '<br>';
for($i = 1; $i <= 100; $i += 2) {
    echo $i;
}
//Lesson 46. Task 5
echo '<br>';
for($i = 100; $i >= 0; $i--) {
    echo $i;
}
//Lesson 47. Task 1
echo '<br>';
$result= 1;
for($i = 1; $i <= 20; $i++) {
    $result *= $i;
}echo $result;
//Lesson 47. Task 2
echo '<br>';
$result = 0;
for($i = 2; $i <= 100; $i += 2) {
    $result += $i;
}echo $result;
//Lesson 47. Task 3
echo '<br>';
$result = 0;
for($i = 1; $i <= 100; $i += 2) {
    $result += $i;
}echo $result;
//Lesson 48. Task 1
echo '<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $result) {
    echo $result . '<br>';
}
//Lesson 48. Task 2
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem;
}echo $result;
//Lesson 48. Task 3
echo '<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem;
}echo $result / count($arr);
//Lesson 49. Task 1
$arr = ['green' => 'зеленый', 'red' =>
    'красный','blue' => 'голубой'];
foreach ($arr as $k => $v){
    echo $k . '-' . $v . '<br>';
}
//Lesson 49. Task 2
$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
foreach ($arr as $k => $v) {
    echo $k . '-' . $v . '<br>';
}
//Lesson 50. Task 1
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    if($elem % 2 != 0) {
        echo $elem;
    }
}
//Lesson 50. Task 2
$arr = [2, 5, 9, 15, 1, 4];
foreach($arr as $elem) {
    if($elem > 3 and $elem < 10) {
        echo $elem;
    }
}echo '<br>';
//Lesson 50. Task 3
$arr = [ -5, 6, 5, 8, -3];
$result = 0;
foreach($arr as $elem) {
    if($elem >= 0) {
        $result += $elem;
    }
}echo $result;
//Lesson 50. Task 4
$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $elem) {
    $elem = (string) $elem;
    if($elem[0] == 1 || $elem[0] == 2 || $elem[0] == 5) {
        echo ' ' . $elem . ' ';
    }
}
//Lesson 50. Task 5
$arr = [ 0 => 'Monday', 1 => 'Tuesday', 2 => 'Wednesday', 3 => 'Thursday', 4 => 'Friday', 5 => 'Saturday', 6 => 'Sunday'];
foreach ($arr as $elem => $value) {
    if($value == 'Saturday' or $value == 'Sunday') {
        echo '<b>' . $value . '</b>' . '<br>';
        continue;
    }echo $value . '<br>';
}
//Lesson 50. Task 6
$arr = [ 0 => 'Monday', 1 => 'Tuesday', 2 => 'Wednesday', 3 => 'Thursday', 4 => 'Friday', 5 => 'Saturday', 6 => 'Sunday'];
$day = 5;
foreach ($arr as $elem => $value) {
    if ($elem == $day) {
        echo '<i>' . $value . '</i>' . '<br>';
        continue;
    }echo $value . '</br>';
}


