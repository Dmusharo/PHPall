<?php

//Lesson 1
echo 'привет мир';
//Lesson 2
//var_dump('12345'); // выведет '12345' и еще некоторую полезную инфу
//Lesson 3. Task 1
$num = 123;
echo $num;
//Lesson 3. Task 2
$a = 10;
echo $a;
$a = 20;
echo $a;
//Lesson 4. Task 1
$a = 1 + 2 + 3;
echo $a;
//Lesson 5. Task 1
$a = 10;
$b = 2;
echo $a + $b, $a - $b, $a / $b, $a * $b;
//Lesson 5. Task 2
$c = 10;
$d = 5;
$result = $c + $d;
echo $result;
//Lesson 5. Task 3
$a = 1;
$b = 2;
$c = 3;
echo $a + $b + $c;
//Lesson 5. Task 4
$a = 10;
$b = 5;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
//Lesson 6. Task 1
$a = 5 + 5 * 3;
echo $a;
//Lesson 6. Task 2
$a = 5 + 5 * 3 + 3;
echo $a;
//Lesson 6. Task 3
$a = 8 / 2 + 2;
echo $a;
//Lesson 6. Task 4
$a = 8 + 2 / 2;
echo $a;
//Lesson 6. Task 5
$a = 8 / 2 * 2;
echo $a;
//Lesson 6. Task 6
$a = 8 * 4 / 2 / 2;
echo $a;
//Lesson 6. Task 7
$a = (2 + 3) * (2 + 3);
echo $a;
//Lesson 6. Task 8
$a = (2 + 3) * 2 + 3;
echo $a;
//Lesson 6. Task 9
$a = 2 * (2 + 4 * (3 + 1));
echo $a;
//Lesson 6. Task 10
$a = 2 * 8 / 4;
echo $a;
//Lesson 6. Task 11
$a = (2 * 8) / 4;
echo $a;
//Lesson 6. Task 12
$a = 2 * (8 / 4);
echo $a;
//Lesson 7. Task 1
$a = 1.5;
$b = 0.75;
echo $a + $b;
//Lesson 8. Task 1
$a = -100;
echo $a;
//Lesson 8. Task 2
$a = -10;
echo -$a;
//Lesson 9. Task 1
$a = 10;
$b = 3;
echo $a % $b;
//Lesson 10. Task 1
echo 2 ** 10;
//Lesson 10. Task 2
$a = 3 * 2 ** 3;
echo $a;
//Lesson 10. Task 3
$a = (3 * 2) ** 3;
echo $a;
//Lesson 10. Task 4
$a = 3 * 2 ** (3 + 1);
echo $a;
//Lesson 10. Task 5
$a = 2 ** 3 * 3;
echo $a;
//Lesson 10. Task 6
$a = 3 * 2 ** 3 * 3;
echo $a;
//Lesson 11. Task 1
$str = 'hello';
echo $str;
//Lesson 11. Task 2
$q = 'abc';
$a = 'def';
echo $q . $a;
//Lesson 11. Task 3
$a = 'hello';
$z = ' world';
echo $a . $z;
//Lesson 11. Task 4
$a = 'asdfg';
echo strlen($a);
//Lesson 11. Task 5
$a = 'привет';
echo mb_strlen($a);
//Lesson 12. Task 1
echo '<i>Курсив';
//Lesson 12. Task 2
echo '<br>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9';
$a = "<img='https://i.gifer.com/7MJv.gif'\>";
echo $a;
//Lesson 13. Task 1
$a = True;
var_dump($a);
//Lesson 13. Task 2
$name = False;
var_dump($name);
//Lesson 14. Task 1
$a = null;
var_dump($a);
//Lesson 14. Task 2
var_dump($qwest);
//Lesson 15. Task 1
$a = '1';
$b = '2';
echo $a + $b + '3';
//Lesson 16. Task 1
$test = '12345';
var_dump((int)$test);
//Lesson 16. Task 2
$test = '12.345';
var_dump((float)$test);
//Lesson 16. Task 3
$test = '12.345';
var_dump((int)$test);
//Lesson 16. Task 4
$test = 12345;
var_dump((string)$test);
//Lesson 16. Task 5
$test = 12.345;
var_dump((string)$test);
//Lesson 17. Task 1
$str = 'abcde';
echo $str[0];
echo $str[2];
echo $str[4];
//Lesson 17. Task 2
$str = 'abcde';
$str[0] = 'e';
$str[1] = 'd';
$str[2] = 'c';
$str[3] = 'b';
$str[4] = 'a';
echo $str;
//Lesson 17. Task 3
$str = 'abcde';
$num = 3;
echo $str[$num];
//Lesson 17. Task 4
$str = 'everybody move your body';
echo $str[strlen($str) - 1];
//Lesson 17. Task 5
$str = 'everybody move your body';
echo $str[strlen($str) - 2];
//Lesson 17. Task 6
$str = 'everybody move your body';
echo $str[strlen($str) - 3];
//Lesson 17. Task 7
$str = '12345';
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
//Lesson 17. Task 8
$num = 12345;
$str = (string)$num;
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
//Lesson 17. Task 9
$num = 12345;
$str = (string)$num;
echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
//Lesson 17. Task 10
$num = 12345;
$str = (string)$num;
$str[0] = '5';
$str[1] = '4';
$str[2] = '3';
$str[3] = '2';
$str[4] = '1';
echo $str;
//Lesson 18. Task 1
$num = 1;
$num = $num + 1;
$num = $num + 1;
echo $num;
//Lesson 18. Task 2
$num = 1;
$num = $num + 2;
$num = $num + 3;

echo $num;
//Lesson 18. Task 3
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo $num;
//Lesson 18. Task 4
$str = 'a';
$str .= 'b';
$str .= 'c';
echo $str;
//Lesson 19. Task 1
$num = 10;
$num++;
$num++;
$num--;
echo $num;
//Lesson 19. Task 2
$num = 3;
echo ++$num;
//Lesson 19. Task 3
$num = 3;
echo $num++;
//Lesson 19. Task 4
$num = 3;
echo --$num;
//Lesson 19. Task 5
$num = 3;
echo $num--;
//Lesson 19. Task 6
$num1 = 3;
$num2 = ++$num1;
echo $num1;
echo $num2;
//Lesson 19. Task 7
$num1 = 3;
$num2 = $num1++;
echo $num1;
echo $num2;
//Lesson 19. Task 8
$num1 = 3;
$num2 = --$num1;
echo $num1;
echo $num2;
//Lesson 19. Task 9
$num1 = 3;
$num2 = $num1--;
echo $num1;
echo $num2;
//Lesson 19. Task 10
$num1 = 3;
$num1++;
$num2 = $num1--;
echo $num1++;
echo --$num2;
//Lesson 20. Task 1

$vhr = 60 * 60;
$vday = $vhr * 24;
echo $vday . 'Second per day<br>';
//Lesson 20. Task 2
echo $vday * 30;
//Lesson 20. Task 3
echo $vday * 12 + 2, 'Second per year';
//Lesson 20. Task 4
echo 24 * 60, 'minutes per 24 hours';
//Lesson 20. Task 5
echo 24 * 60 * 365, 'munutes per year';
//Lesson 20. Task 6
echo 1024 * 1024, 'bit in 1 mb';
//Lesson 20. Task 7
$kb = 1024;
$mb = $kb * 1024;
$gb = $mb * 1024;
echo $gb, 'bit in Gb';
//Lesson 20. Task 8
echo $gb * 10, 'bit in 10 Gb';
//Lesson 20. Task 9
$tb = $gb * 1024;
echo $tb, 'bit per TB';
//Lesson 20. Task 10
echo $tb / 1024, 'kb per TB';
//Lesson 21. Task 1
$R = 5;
$S = 3.14 * $R**2;
echo $S;
//Lesson 21. Task 2
$side = 10;
$Skv = $side ** 2;
echo $Skv;
//Lesson 21. Task 3
$a = 25;
$b = 20;
$p = $a + $b;
echo $p;
//Lesson 21. Task 4
$a = 22;
$b = 12;
$s = $a * $b;
echo $s;
//Lesson 21. Task 5
$tc = 32;
$fr = $tc * 9 / 5 + 32;
echo $fr;
//Lesson 21. Task 6
$tf = 105;
$tc = ($tf - 32) * 5/9;
echo $tc;
//Lesson 22. Task 1
$array = ['a', 'b', 'c'];
echo $array;
var_dump($array);
//Lesson 22. Task 2
var_dump($array[0]);
var_dump($array[1]);
var_dump($array[2]);
//Lesson 22. Task 3
$a = ['a', 'b', 'c', 'd'];
var_dump($a[0], '+', $a[1], '+', $a[2], '+', $a[3]);
//Lesson 22. Task 4
$a = [1, 2, 3];
var_dump($a[0] + $a[1] + $a[2]);
//Lesson 22. Task 5
$a = [2, 5, 3, 9];
$result = ($a[0] * $a[1]) + ($a[2] * $a[3]);
var_dump($result);
//Lesson 23. Task 1
$a = [1 => 'a', 2 => 'b', 3 => 'c'];
echo $a[1], $a[2], $a[3];
//Lesson 23. Task 2
$a = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
echo $a[2];
//Lesson 23. Task 3
$user = ['name' => 'Anton', 'surname' => 'Dudnik', 'patronymic' => 'Valeryevich'];
echo $user['surname'], ' ', $user['name'], ' ', $user['patronymic'];
//Lesson 23. Task 4
$date = ['day' => 26, 'months' => 'july', 'year' => 2022];
echo $date['day'], '-', $date['months'], '-', $date['year'];
//Lesson 24. Task 1
$list = [2 => 'name?', 1 => 'your', 0 => 'What"s'];
echo $list[0], ' ', $list[1], ' ', $list[2];
//Lesson 25. Task 1
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr);
//Lesson 25. Task 2
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo count($arr);
//Lesson 25. Task 3
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr) -1];
//Lesson 25. Task 4
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr) -2];
//Lesson 26. Task 1
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a'] = 7;
$arr['b'] = 7;
$arr['c'] = 7;
var_dump($arr);
//Lesson 26. Task 2
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a'] += 3;
$arr['b'] += 3;
$arr['c'] += 3;
var_dump($arr);
//Lesson 26. Task 3
$arr = ['a' => 1, 'b' => 2, 'c' => 3];

$arr['a']++;
$arr['a']++;
$arr['b']--;
$arr['c']--;
$arr['c']--;

var_dump($arr);




//Lesson 23. Task 3
//Lesson 23. Task 4







