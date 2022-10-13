//1
//№1⊗ppPmFmTx
//
//Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран.

<form action="" method="GET">
    Отзыв:<textarea name="test"></textarea>
    <input type="submit">
</form>
<?php
if (!empty($_GET)){
    echo  $_GET['test'];
}
?>
//2 Пусть в textarea вводится русский текст. После отправки формы выведите на экран транслит этого текста. Сделайте так, чтобы содержимое формы сохранялось после отправки.

<form action="" method="GET">
	<textarea name="test"><?= $_GET['test']
            ?? '' ?></textarea>
<input type="submit">
</form>
<?php
function translit_sef($value)
{
    $converter = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
    );

    $value = mb_strtolower($value);
    $value = strtr($value, $converter);
    $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
    $value = mb_ereg_replace('[-]+', '-', $value);
    $value = trim($value, '-');

    return $value;
}

if (!empty($_GET)){
    echo translit_sef( $_GET['test']);
}
