<?php
class User1
{
    private $name;
    private $surname;
    private $salary;
}

//-- index.php

error_reporting(E_ALL);
ini_set('display_errors', "on");

// Хранение классов в отдельных файлах в PHP
//  ⊗ppOpBsOCOF

/*
*1
 * Сделайте несколько классов в разных файлах. Подключите ваши классы к файлу index.php.
 *
 */

require_once 'Homework/Учебник по ООП и MVC на PHP/10  Хранение классов в отдельных файлах в PHP.php';
$user = new User1;

require_once 'Homework/Учебник по ООП и MVC на PHP/9 Свойства только для чтения в ООП на PHP.php';
$employ = new User('22',22);