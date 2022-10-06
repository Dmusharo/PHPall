<?php
/*
 * Команда \b обозначает начало или конец слова, а \B, соответственно, - не начало и не конец слова. Что такое слово? На первый взгляд кажется, что это нечто, ограниченное пробелами, но это не совсем так.

Посмотрите на следующую строку: 'мама мыла раму'. Подстрока 'мыла' - это слово (по обоим краям пробелы), однако и 'мама', и 'раму' тоже слова, которые стоят в начале и в конце строки.

Давайте посмотрим на практическое применение данной команды.

В следующем примере шаблон поиска такой: начало слова, маленькие латинские буквы один или более раз, конец слова. Таким образом, регулярка найдет все слова и заменит их на '!':
 */
//1
//Напишите регулярку, которая найдет строки по шаблону: буква 'x' в начале слова.
$str = 'aaa xaa aaa xbb aaa';
echo preg_replace('#\bx[a-z]+\b#','!',$str);