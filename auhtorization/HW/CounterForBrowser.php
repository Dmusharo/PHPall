<?php
session_start();


if (!isset($_SESSION['count_view'])) {
    $_SESSION['count_view'] = 1;
} else {
    $_SESSION['count_view'] = $_SESSION['count_view'] + 1;
}


?>

<html>

<h1>Ми перегялнули сторінку: <?php echo $_SESSION['count_view'] ?></h1>

</html>