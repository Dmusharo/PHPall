<?php
switch ($_GET['par']) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
}
?>
<br>
<a href="?par=1">link1</a>
<a href="?par=2">link2</a>
<a href="?par=3">link3</a>


//2
<?php
switch ($_GET['par']) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    case 5:
        echo "5";
        break;
    case 6:
        echo "6";
        break;
    case 7:
        echo "7";
        break;
    case 8:
        echo "8";
        break;
    case 9:
        echo "9";
        break;
}
?>
<br>
<a href="?par=1">link1</a>
<a href="?par=2">link2</a>
<a href="?par=3">link3</a>
<a href="?par=4">link4</a>
<a href="?par=5">link5</a>
<a href="?par=6">link6</a>
<a href="?par=7">link7</a>
<a href="?par=8">link8</a>
<a href="?par=9">link9</a>
<a href="?par=10">link10</a>

//3
<?php


$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $item) {
    echo "<a href='$item'>Ссылка $item</a>";

}

?>

