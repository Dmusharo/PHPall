<?php
//Удалите какую-нибудь куку. Обновите страницу и
// убедитесь, что она удалилась.
setcookie('test', '', time());
var_dump($_COOKIE['test']); // первый раз выведет значение куки
?>


<?php
if (isset($_COOKIE['test'])) {
    setcookie('test', '', time());
    unset($_COOKIE['test']);
}

var_dump($_COOKIE['test']); // удалена
?>
