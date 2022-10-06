<?php
//Проверка строки с помощью регулярки на PHP
//1
//Определите, есть ли в строке 3 цифры подряд.
echo preg_match('#\d{3}#', 'eee aaa bbb 123 111'); // выведет 1

//2 Определите, начинается ли переданная строка с http.
echo preg_match('#\bhttp#', 'htpp eee aaa bbb 123 111 ');
//3 Определите, начинается ли переданная строка с http или с https.
echo preg_match('#\bhttp|\bhttps#', 'htpp eee aaa bbb 123 111 ');
//4 Определите, заканчивается ли переданная строка расширением txt, html или php
echo preg_match('#txt$|html$|php$#', 'htpp eee aaa bbb 123 111 ');
//5 Определите, заканчивается ли переданная строка расширением jpg или jpeg.
echo preg_match('#jpeg$|jpg$#', 'htpp eee aaa bbb 123 111 ');
