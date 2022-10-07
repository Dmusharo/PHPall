<?php
// Именованные карманы внутри регулярки PHP

//1
// Найдите все подстроки со временем, в которых час совпадает с секундами.

$str = '12:59:59 12:59:12 09:45:09';
$res = preg_replace('#(?P<hs>\d{2}):(?&hs):\g{-1}#', '!', $str);
print_r($res);