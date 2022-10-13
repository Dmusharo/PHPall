
<?php
//1
//Пусть в корне вашего сайта лежит файл old.txt. Переименуйте его на new.txt.
//rename('Homework/157 Абсолютные пути в PHP/dir/test.txt', 'Homework/157 Абсолютные пути в PHP/dir/test_new.txt');

//Пусть в корне вашего сайта лежит файл file.txt. Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку.
//rename('Homework/157 Абсолютные пути в PHP/dir/test_new.txt', 'Homework/157 Абсолютные пути в PHP/test_new1.txt');
//3 копирование
//copy('Homework/157 Абсолютные пути в PHP/test_new1.txt','Homework/157 Абсолютные пути в PHP/dir/test_new.txt');

//4 Удаление
//unlink('test.txt');

// РАЗМЕР ФАЙЛА
//echo filesize('Homework/157 Абсолютные пути в PHP/test_new1.txt').'<br>';
//echo filesize('Homework/157 Абсолютные пути в PHP/test_new1.txt')/1024;
//echo filesize('Homework/157 Абсолютные пути в PHP/test_new1.txt')/1024*1024;

//Проверка существования
var_dump(file_exists('Homework/157 Абсолютные пути в PHP/test_new1.txt')); // true или false
if (file_exists('Homework/157 Абсолютные пути в PHP/test_new1.txt')) {
    echo filesize('Homework/157 Абсолютные пути в PHP/test_new1.txt');
} else {
    echo 'файла не существует';
}

