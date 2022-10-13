<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
while ($_SESSION['counter']>10){
    unset($_SESSION['counter']);
}
echo $_SESSION['counter'];
?>

<form name="" method="get">
   Удалить сессию: <input type="submit">
</form>




<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
while ($_SESSION['counter']>10){
    unset($_SESSION['counter']);
}

echo $_SESSION['counter'];
if (!empty($_GET['num'])){
    session_destroy();
}
?>

<form name="" method="get">
    Kill session<input name="num">
    <input type="submit">
</form>