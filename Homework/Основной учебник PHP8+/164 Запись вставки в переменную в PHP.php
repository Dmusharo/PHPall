<?php

//Запись вставки в переменную в PHP
//ob_start();
//include 'Homework/163 Деление верстки на элементы в PHP/header.php';
//$res = ob_get_clean();
//var_dump($res);


//function getFile($name)
//{
//    ob_start();
//    include $name;
//    return ob_get_clean();
//}
//
//
//$res = getFile('Homework/163 Деление верстки на элементы в PHP/header.php');
//echo 'index' . $res;

//1
/*
 * Сделайте файл, который будет генерировать из массива дней выпадающий список дней недели.
 *  Запишите результат в переменную в вашем основном файле.
 *  Выведите эту переменную в нескольких местах файла.
 */
<?php
//function getFile($name) {
//    ob_start();
//    include $name;
//    return ob_get_clean();
//}
//$res = getFile('Homework/');
//echo 'index' . $res;


$days = ['Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday'];

//?>
<!--<select id="selectvalue">-->
<!---->
<!--    --><?php //include "Homework/165  Запись вставки в переменную в PHP.php";  ?>
<!---->
<!--</select>-->

<select id="selectvalue">
    <?php
    foreach ($days as $day) {
        echo '<option>' . $day.'</option>' . '<br>';
    }
    ?>
</select>

