<?php
//1
echo file_get_contents('Homework/155  Чтение и запись файла в PHP/test.txt');

/*
 * Пример 4
Пусть у нас есть следующая структура файлов:

/script/
/test/
index.php
/directory/
test.txt
В этом случае нам потребуется выйти наверх два раза:

<?php
	echo file_get_contents('../../directory/test.txt');
 */

