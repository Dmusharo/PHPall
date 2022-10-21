<?php
session_start();

$_SESSION['flash'] = 'сообщение';
header('Location: index.php');
?>

<?php
session_start();

if (isset($_SESSION['flash'])) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
}

//Массив флеш сообщений
?>

<?php
session_start();
$_SESSION['flash'][] = 'сообщение 1';
?>

<?php
session_start();
$_SESSION['flash'][] = 'сообщение 2';
?>

<?php
session_start();

if (!empty($_SESSION['flash'])) {
    foreach ($_SESSION['flash'] as $flash) {
        echo $flash;
    }

    $_SESSION['flash'] = []; // очистим сообщения
}
?>
