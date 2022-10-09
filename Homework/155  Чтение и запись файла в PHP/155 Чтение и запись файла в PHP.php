
<?php


//1
//Пусть у вас есть файлы 1.txt и 2.txt, в тексте которых записаны какие-то числа. Напишите скрипт, который выведет на экран сумму записанных в этих файлах чисел.
$txt1=file_get_contents('1.txt');
$txt2=file_get_contents('2.txt');
$arr1=explode(' ',$txt1);
$arr2=explode(' ',$txt2);
$ar1sum=array_sum($arr1);
$ar2sum=array_sum($arr2);
echo ' Сумма первого файла 1.txt = '.$ar1sum.' Сумма первого файла 2.txt = '.$ar2sum.' Общая сумма двух файлов ='.$ar1sum+$ar2sum;

// Запись файла
//2
//Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt.
$txt1=file_get_contents('1.txt');
$arr1=explode(' ',$txt1);
$ar1sum=array_sum($arr1);
file_put_contents('sum.txt',$ar1sum);

//Комбинация операций
//3
//Пусть у вас есть файл, в котором записано некоторое число. Откройте этот файл, возведите число в квадрат
// и запишите обратно в файл.

$textsquare=file_get_contents('square.txt');
file_put_contents('square.txt',$textsquare*$textsquare);

//4
/*
 * Пусть в корне вашего сайта лежит файл count.txt.
 * Изначально в нем записано число 0. Сделайте так, чтобы при
 *  обновлении страницы наш скрипт каждый раз увеличивал это число
 * на 1. То есть у нас получится счетчик обновления страницы в виде
 * файла.
 */
$count=file_get_contents('count.txt');
file_put_contents('count.txt',(int)$count+1);

//5
//
/*
 * Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов.
 *  Переберите его циклом, прочитайте содержимое каждого из файлов,
 * слейте его в одну строку и запишите в новый файл new.txt.
 *  Изначально этого файла не должно быть.
 */
$arr=['1.txt','2.txt','3.txt',];
$str=null;
foreach ($arr as $item) {
    $str=$str.' ';
    $str.=file_get_contents($item);
}
file_put_contents('new.txt',$str);