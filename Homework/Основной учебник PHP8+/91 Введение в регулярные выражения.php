<?php
// функция preg_replace
/*
 * 	preg_replace(что менять, на что, строка);
 *
 *
 * <?php
	$str = 'ahb acb aeb aeeb adcb
		axeb';
?>
Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb' по шаблону: буква 'a', любой символ, буква 'b'.
 */
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a.b#','!',$str);
//2
/*
 * <?php
	$str = 'ahb acb aeb aeeb adcb
		axeb';
?>
Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'.
 */
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a..b#','!',$str);



