<?php
//1
echo $_GET['par1'];
?>

<form action="" method="GET">
    <input name="par1">
    <input name="par2">
    <input name="par3">
    <input type="submit">
</form>

//2
<?php
echo pow($_GET['par1'],2) ;
?>

<form action="" method="GET">
    <input name="par1">
    <input name="par2">
    <input name="par3">
    <input type="submit">
</form>

//3
<?php
echo $_GET['par1']+$_GET['par2'];
?>

<form action="" method="GET">
    <input name="par1">
    <input name="par2">
    <input name="par3">
    <input type="submit">
</form>

//4
<?php
if ($_GET['par1']==1){
    echo "Hello";
} if ($_GET['par1']==2){
    echo "Bye";

}

?>

<form action="" method="GET">
    <input name="par1">
    <input name="par2">
    <input name="par3">
    <input type="submit">
</form>

//5
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

$num=$_GET['par1'];
echo $arr[$num];
?>

<form action="" method="GET">
    <input name="par1">
    <input type="submit">
</form>


