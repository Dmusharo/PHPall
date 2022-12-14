<?php
/*
 * В предыдущих примерах операторы повторения действовали только на один символ, который стоял перед ними. Что делать, если мы хотим подействовать им на несколько символов?

Для этого существуют группирующие скобки '(' и ')'. Они работают так: если что-то стоит в группирующих скобках и сразу после ')' стоит оператор повторения - он подействует на все, что стоит внутри скобок.

Давайте посмотрим на примерах.
В предыдущих примерах операторы повторения действовали только на один символ, который стоял перед ними. Что делать, если мы хотим подействовать им на несколько символов?

Для этого существуют группирующие скобки '(' и ')'. Они работают так: если что-то стоит в группирующих скобках и сразу после ')' стоит оператор повторения - он подействует на все, что стоит внутри скобок.

Давайте посмотрим на примерах.
 */

//1 Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.
$str = 'ab abab abab abababab abea';
echo preg_replace("#(ab)+#",'!',$str);

