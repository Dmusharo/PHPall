<?php
//$files = scandir('Homework');
//$files=array_diff($files,['..','.']);
//echo '<pre>';
//var_dump($files);
//echo '<pre>';

/*
 * Важный нюанс
В массиве с результатом функция scandir также покажет наличие папок с именами ".." и ".". Технически первое имя соответствует ссылке на родительскую папку, а второе - на текущую.

Эти имена лучше убрать из массива с результатом. Делается это следующим образом:
 */

//2
$files = scandir('Homework/155  Чтение и запись файла в PHP');
$files=array_diff($files,['..','.']);
echo '<pre>';
var_dump($files);
echo '<pre>';
echo '-------------------'.'<br>';
foreach ($files as $item) {
    echo $item.' '.'<br>';
}
echo '----------------------------------'.'<br>';
$str=null;
foreach ($files as $item) {
    $str.=file_get_contents('Homework/155  Чтение и запись файла в PHP/'.$item).'<br>';
}
var_dump($str);


//echo $str;
//echo file_get_contents('Homework/155  Чтение и запись файла в PHP/2.txt');