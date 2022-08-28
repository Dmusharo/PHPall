
<?php
session_start();
$countView=0;
if (!isset($_SESSION['countView'])){
    $_SESSION['countView']=0;
} else{
    $_SESSION['countView']=$_SESSION['countView']+1;

}
?>

<html>

<h1>Ми перегялнули сторінку: <?php echo $_SESSION['countView'] ?></h1>
</html>