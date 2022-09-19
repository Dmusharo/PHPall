<!-- //1  Напишите скрипт, который будет преобразовывать температуру из градусов Цельсия в градусы Фарингейта.
Для этого сделайте инпут и кнопку-->
<?php
$num = $_GET['num'];
echo ($num * 9 / 5) + 32;

?>

<form name="" method="get">
    Введите Гадусы:<input name="num">
    <input type="submit">
</form>

<!--//2   Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и
после нажатия на кнопку пользователь должен увидеть результат.-->
<?php
$num=$_GET['num'];
if ($num==0){
    echo 1;
}else {
    $arr=range(1,$num);
    echo array_product($arr);
}


?>

<form name="" method="get">
    Введите Факториал:<input name="num">
    <input type="submit">
</form>

<!-- 3     Дан инпут и кнопка. В инпут вводится число.
 По нажатию на кнопку выведите список делителей этого числа.  -->

<?php

if (!empty($_GET['num'])) {
    $num=$_GET['num'];
    echo "Делители числа $num это :" . "<br>";
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i ===0) {
            echo "$num / ".$i ."=".$num/$i."<br>";
        }
    }
}
?>

<form name="" method="get">
    Введите Число:<input name="num">
    <input type="submit">
</form>

<!-- 4  Даны 2 инпута и кнопка. В инпуты вводятся числа.
 По нажатию на кнопку выведите список общих делителей этих двух чисел.-->
<?php
$arr1=[];
$arr2=[];
if (!empty($_GET['num1'])) {
    $num1=$_GET['num1'];
    echo "Делители числа $num1 это :" . "<br>";
    for ($i = 1; $i <= $num1; $i++) {
        if ($num1 % $i ===0) {
            echo "$num1 / ".$i ."=".$num1/$i."<br>";
            $arr1[]=$i;
        }
    }
}

if (!empty($_GET['num2'])) {
    $num2=$_GET['num2'];
    echo "Делители числа $num2 это :" . "<br>";
    for ($i = 1; $i <= $num2; $i++) {
        if ($num2 % $i ===0) {
            echo "$num2 / ".$i ."=".$num2/$i."<br>";
            $arr2[]=$i;
        }
    }
}
var_dump(array_intersect($arr1,$arr2));
?>

<form name="" method="get">
    Введите Число1:<input name="num1">
    Введите Число2:<input name="num2">
    <input type="submit">
</form>

<!-- 5 Напишите скрипт, который будет находить корни квадратного уравнения.
Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения. -->>
<?php
//ax2 + bx + c = 0
$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
$d=$b*$b-4*$a*$c;
if ($d<0){
    echo "Корней нет";
} if ($d==0){
    echo "Есть один корень";
} else {
    echo "Два корня";
}
echo "X1=".((-$b-sqrt($d))/2*$a);
echo "X2=".((-$b+sqrt($d))/2*$a);


?>

<form name="" method="get">
    Введите a:<input name="num1">
    Введите b:<input name="num2">
    Введите c:<input name="num3">
    <input type="submit">
</form>

<!--  6  Даны 3 инпута. В них вводятся числа.
Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого
 числа должен быть равен сумме квадратов двух остальных.-->

<?php
//Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора:
// квадрат самого большого числа должен быть равен сумме квадратов двух остальных.
$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
$arr[]=$a;
$arr[]=$b;
$arr[]=$c;
$max=max($arr);
$temp=(array_splice($arr,array_search("$max",$arr),1));

function powMsssiv2($n)
{
    return pow($n,2);
}
$arr1=array_map('powMsssiv2',$arr);

if (pow($max,2)==(array_sum($arr1))){
    echo "Это тройка пифагора";
} else {
    echo "Это не тройка Пифагора";
}

?>

<form name="" method="get">
    Введите a:<input name="num1">
    Введите b:<input name="num2">
    Введите c:<input name="num3">
    <input type="submit">
</form>

<!--
   7 Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '01.12.1990'.
   По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя.
   -->

<?php
if (isset($_GET['num1'])) {
    $date =$_GET['num1'];
    $date=strval($date);
    $arr = explode(".", $date);
    $year = date('Y');
    $date1 = mktime(0, 0, 0, "$arr[1]", "$arr[0]", "$year") - time();
    echo "До твоего дня рождения осталось" . floor($date1 / (60 * 60 * 24));
}
?>

<form name="" method="get">
    Введите день рождения:<input name="num1">
    <input type="submit">
</form>

<!-- 8  Дан текстареа и кнопка. В текстареа вводится текст.
По нажатию на кнопку выведите количество слов и количество символов в тексте. -->

<?php
$str=strval($_GET['test']) ;
print_r(str_word_count($str, 0));
//only for eng
?>




<form action="" method="GET">
	<textarea name="test"><?= $_GET['test']
            ?? '' ?></textarea>
    <input type="submit">
</form>


<!-- 9 Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное
 содержание каждого символа в тексте. -->

<?php
mb_internal_encoding("UTF-8");
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = mb_strlen($str);
    $valuesCount = array_count_values(str_split($str));
    foreach ($valuesCount as $key => $item) {
        $x = 100 / $strLen * $item;
        echo '"'.$key.'" - "'.round($x, 2).'"<br>';
    }
}
?>
<form action="" method="post">
    <textarea name="text" placeholder=""></textarea>
    <input type="submit">
</form>

<!--  10 Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, второй селект - это месяцы от января до декабря,
а третий - это годы от 1990 до 2025. С помощью этих селектов можно выбрать дату.
По нажатию на кнопку выведите на экран день недели, соответствующий этой дате.  -->
<?php
$month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
if (isset($_REQUEST)) {
    $day = $_REQUEST['day'];
    $mon = array_search($_REQUEST['month'], $month);
    $year = $_REQUEST['year'];
    $dayOfWeek = $week[date('w', mktime(0, 0, 0, $mon, $day, $year))];
    echo $dayOfWeek;
}
?>
<form action="" method="post">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <select name="month">
        <?php foreach ($month as $item): ?>
            <option><?=$item;?></option>
        <?php endforeach;?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <input type="submit">
</form>

