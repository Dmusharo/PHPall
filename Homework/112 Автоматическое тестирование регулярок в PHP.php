
<?php
//Автоматическое тестирование регулярок в PHP
//1
//Пусть вам нужно проверить, что в строке есть дробное число.
// Используя предложенный скрипт, проверьте вашу регулярку на различных строках.
    $reg   = '#\d,\d#'; // ваша регулярка

    $arr[] = 'aaa 123 bbb 0,1';   //
    $arr[] = 'aaa 12345 bbb 3,3'; //
    $arr[] = 'aaa 12x bbb';   //
    $arr[] = 'aaa 12 bbb';    //

    foreach ($arr as $str) {
        echo $str . ' ' . preg_match($reg, $str) . '<br>';
    }