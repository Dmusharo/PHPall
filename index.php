<?php

/*
 * 1 Возведите 2 в 10 степень.
 */

echo pow(2,10).'<br>';
/*
 * 2 Найдите квадратный корень из 245.
 */

echo  sqrt(245).'<br>';;


/*
 * 3 <?php
	$arr = [4, 2, 5, 19, 13, 0, 10];
?>
Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом foreach.
 */
$arr = [1,2];
$result=0;


foreach ($arr as $item) {
    $sqrtValue=pow($item,2);
    $result+=$sqrtValue;
    }
 echo sqrt($result);



/*
 * 4 Найдите квадратный корень из 379. Результат округлите до целых, до десятых, до сотых.
 */


/*
 * 5 Найдите квадратный корень из 587. Округлите результат в большую и меньшую сторону, запишите результаты округления в ассоциативный массив с ключами 'floor' и 'ceil'.
 */

/*
 * 6  <?php
	$arr = [4, -2, 5, 19, -130, 0, 10];
?>
Найдите минимальное и максимальное число.
 */

/*
 * 7 Выведите на экран случайное целое число от 1 до 10
 */

/*
 * 8 С помощью цикла заполните массив 10-ю случайными целыми числами
 */

/*
 * 9   Даны переменные $a и $b. Найдите найдите модуль разности $a и $b. Проверьте работу скрипта самостоятельно для различных $a и $b.
 */

