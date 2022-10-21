<?php
if (!empty($_GET)){
    echo "Success";
}

/* Перенаправление браузера на другую страницу в той же директории, что и
изначально запрошенная */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'Homework/Основной учебник PHP8+/199 GET запросы и редирект в PHP.php?arg=1';
header("Location: http://$host$uri/$extra");
exit;
?>



<?php
///* Перенаправление браузера на другую страницу в той же директории, что и
//изначально запрошенная */
//$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//$extra = 'Homework/Основной учебник PHP8+/199 GET запросы и редирект в PHP.php?arg=1';
//header("Location: http://$host$uri/$extra");
//exit;

if (!isset($_GET['arg'])) {
    header('Location: ?arg=1');
}

echo $_GET['arg'];

?>


