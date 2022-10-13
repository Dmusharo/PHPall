<?php
$y = $_GET['year'];

if (date("L", mktime(0, 0, 0, 1, 1, $y))) {
    echo 'Год ' . $y . ' - високосный<br>';
} else {
    echo 'Год ' . $y . ' - Не високосный<br>';
}


$y=$_GET['year'];
$y1=$y+1;
$d=$_GET['day'];
$m=$_GET['month'];
$date= mktime(0,0,0,"$m","$d","$y1");
$newYear= mktime(0,0,0,1,1,"$y");
$result=-$newYear+$date;
echo  floor($result / (60*60*24));
?>