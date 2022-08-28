<?php

/*
 * 1. Сделайте функцию, которая возвращает квадрат числа.
 *  Число передается параметром.
 */
//1

function sqVal($num){
    $num=pow($num,2);
    echo $num;
    return$num;
}
sqVal(3);

//2
/*
 * Сделайте функцию, которая возвращает сумму двух чисел.
 *  Числа передаются параметрами функции.
 */
function sum2val($num1,$num2){
    $result=$num2+$num1;
    return $result;
}
echo sum2val(5,7);


//3 Сделайте функцию, которая отнимает от первого числа
// второе и делит на третье.
function sumActions($num1,$num2,$num3){
    $result=($num1-$num2)/$num3;
    return $result;
}
echo sumActions(6,4,2);

//4
//Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.

function dayNumberWeek($num)
{
    switch ($num) {
        case 1:
            return "Понедельник";
        case 2:
            return "Вторник";
        case 3:
            return "Среда";
        case 4 :
            return "Четверг";
        case 5 :
            return "Пятница";
        case 6 :
            return "Суббота";
        case 7 :
            return "Воскресенье";
        case  ($num > 7 and $num<=0):
            return "Число введено не верно";
    }
}
echo dayNumberWeek(5);
?>

//5 Задача. Спросите город
//пользователя с помощью формы. Результат запишите в переменную $city
//. Выведите на экран фразу 'Ваш город: %Город%'<form action

<form action="" method="GET">
    <input type="text" name="city">
    <input type="submit">
</form>
<?php
//Если форма была отправлена и город не пустой:
if (!empty($_REQUEST['city'])) {
    $city = $_REQUEST['city'];
    echo 'Ваш город: '.$city;
}

?>

//6
/*
 * Решим предыдущую задачу так, чтобы пользовательне мог вводить теги
и сломать нам сайт. Для этогопри записи
содержимого поля в переменную$city
обработаем его (содержимое, то есть$_REQUEST['city']
) функцие strip_tags
, которая удалит теги (можно вместо нее обработать функцией htmlspecialchars
):
 */
<form action="" method="GET">
    <input type="text" name="city">
    <input type="submit">
</form>
<?php
//Если форма была отправлена и город не пустой:
if (isset($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city'])."<b>";
    echo '<h1>Ваш город: '.$city."</h1>";
}


//7 Давайте сделаем так, чтобы форма после отправки скрывалась:

?>

<?php
//Если город пустой - покажем форму
if (isset($_REQUEST['city'])) {
    ?>
    <form action="" method="GET">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php
}
?>
<?php
//Если форма была отправлена и город не пустой:
if (!empty($_REQUEST['city'])) {
    $age = strip_tags($_REQUEST['city']);
    echo 'Ваш город: '.$age;
}
?>

//8  Спросите у пользователя имя
//,возраст
//, а также попросите его ввестисообщение
//(его сделайте в textarea
//). Выведите эти данные на экран вформате
//, приведенном под данной задачей. Позаботьтесь о том, чтобы пользовательне мог вводить теги
//(просто удаляйте их) и таким образом сломать сайт.
    <meta charset="utf-8">
    </head>
    <body>

    <form action="" method="GET">
        <p>Какое Ваше имя ? </p>
        <input type="text" name="name">
        <p>Сколько Вам лет? </p>
        <input type="text" name="age"><br><br>
        <p>Введите описание</p>
        <textarea name="textarea1" rows="4" cols="50">
        </textarea><br><br>
        <input type="submit">
    </form>
    </body>
    </html>
<?php
if ((!empty($_REQUEST['name']) and !empty($_REQUEST['age']) and !empty($_REQUEST['textarea1']))) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $textarea1 = strip_tags($_REQUEST['textarea1']);
    echo 'Ваше имя: ' . $name . "  " . "Ваш возраст : " . $age."<br>".$textarea1;
}
?>
//9 Спросите возраст
//пользователя. Если форма была отправлена
//ивведен
//возраст, то выведите его на экран, аформу уберите. Если же форма не была отправлена (это будет при первом
//заходе на страницу) - просто покажите ее.

     <meta charset="utf-8">
    </head>
    <body>

    <form action="" method="GET">
        <p>Какое Ваше имя ? </p>
        <input type="text" name="name">
        <p>Сколько Вам лет? </p>
        <input type="text" name="age"><br><br>
        <p>Введите описание</p>
        <textarea name="textarea1" rows="4" cols="50">
        </textarea><br><br>
        <input type="submit">
    </form>
    </body>
    </html>
<?php
if (isset(($_GET['submit']))){
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $textarea1 = strip_tags($_REQUEST['textarea1']);

    if ((!empty($_REQUEST['name']) and !empty($_REQUEST['age']) and !empty($_REQUEST['textarea1']))) {
        $name = strip_tags($_REQUEST['name']);
        $age = strip_tags($_REQUEST['age']);
        $textarea1 = strip_tags($_REQUEST['textarea1']);



    echo "Форма отпревлена";
    ?>










