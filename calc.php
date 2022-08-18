<meta charset="utf-8">
<html lang="en" >
<head>
    <title>Калькулятор</title>
</head>
<body>
<h2>Калькулятор</h2>
<p>Введите значение</p>
<form action=".docker/php/result.php">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>
<?php




$number=5;
function squearFuncReturn(){
    global $number;
    $number**=2;
    echo "<h1>Результат, $number</h1>";

}
squearFuncReturn();

$a=5;
$b=6;
function sum(){
    global $a;
    global $b;
    $s=0;
    $s=$a+$b;
    echo $s;
}
sum();
?>

