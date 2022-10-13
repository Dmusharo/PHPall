//1
<?php
session_start();
$_SESSION['test']="1 2 5";

?>
<a href="Homework/146%20%20Session%20page2.php">Session 2</a>

//2

<?php
session_start();
$str=$_SESSION['test'];
$arr=explode(' ',$str);
echo array_sum($arr);

?>
