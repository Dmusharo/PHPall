<?php
session_start();
$str=$_SESSION['test'];
$arr=explode(' ',$str);
echo array_sum($arr);

?>