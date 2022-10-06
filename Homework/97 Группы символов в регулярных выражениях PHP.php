<?php
/*
 * Существуют специальные команды, которые позволяют выбрать сразу целые группы
 * символов. Команда \d означает цифру от 0 до 9. Команда \w обозначает цифру, латинскую
 * букву или знак подчеркивания. Команда \s обозначает пробел или пробельный символ: пробел,
 * перевод строки, табуляцию. Можно инвертировать значение команды, написав большую букву: например,
 *  если \d - цифра, то \D - не цифра.
 */

//1 Напишите регулярку, которая найдет строки,
// в которых по краям стоят буквы 'a', а между ними одна цифра.
$str = 'a1a a2a a3a a4a a5a aba aca';
echo preg_replace('#a\da#', '!', $str);
//2 Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
// а между ними любое количество цифр.
$str = 'a1a a22a a333a a4444a a55555a aba aca';
echo preg_replace('#a\d+a#', '!', $str);

//3 Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a', а
// между ними любое количество цифр (в том числе и ноль цифр, то есть строка 'aa').
$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
echo preg_replace('#a\d*a#', '!', $str);

//4 Напишите регулярку, которая найдет строки следующего вида:
// по краям стоят буквы 'a' и 'b', а между ними - не число.
$str = 'avb a1b a2b a3b a4b a5b abb acb';
echo preg_replace('#a\Db#', '!', $str);

//5 Напишите регулярку, которая найдет строки следующего вида:
// по краям стоят буквы 'a' и 'b', а между ними - не буква и не цифра.
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
echo preg_replace('#a\Wb#', '!', $str);

//6 Напишите регулярку, которая заменит все пробелы на '!'.
$str = 'ave a#a a2a a$a a4a a5a a-a aca';
echo preg_replace('#\s#', '!', $str);

