<?php
function square($a)
{
    $result = $a ** 2;
    return $result;
}

function summa($a, $b)
{
    $result = $a + $b;
    return $result;
}

function trio($a, $b, $c)
{
    $result = ($a - $b) / $c;
}

function days($a)
{
    switch ($a) {
        case '1':
            echo 'Понедельник';
            break;
        case '2':
            echo 'Вторник';
            break;
        case '3':
            echo 'Среда';
            break;
        case '4':
            echo 'Четверг';
            break;
        case '5':
            echo 'Пятница';
            break;
        case '6':
            echo 'Суббота';
            break;
        case '7':
            echo 'Воскресенье';
            break;
    }
}
const AUTH_DATA = [['login' => 'Tony', 'password' => '88888888'], ['login' => 'Anton', 'password' => '77777777']];

function getUserByLogin(string $login): ?array
{
    foreach (AUTH_DATA as $user) {
        if ($login === $user['login']) {
            return $user;
        }
    }
    return null;
}

function isvalidPassword(string $realPassword, string $passward): bool
{
    return $realPassword === $passward;
}

function year($year)
{
    if (($year % 4) != 0) {
        echo "Год не високосный";
    } else if (($year % 100) != 0) {
        echo "Год високосный";
    } else {
        if (($year % 400) != 0) {
            echo "Год не високосный";
        } else {
            echo "Год високосный";
        }
    }
}
function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}
function Factorial($number) {
    if($number <= 1) {
        return 1;
    } else return ($number * Factorial($number - 1));
}
function nums(int $a, int $b, int $c){

}




