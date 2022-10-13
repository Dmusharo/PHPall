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