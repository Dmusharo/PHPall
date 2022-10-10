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
