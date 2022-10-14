<?php
/*
* 17
*HTTP редиректы
* https://developer.mozilla.org/ru/docs/Web/HTTP/Redirections
 *
HTTP/1.1 301 OK
Location: /test.html
 *
 *
 * 18
 * User Agent в протоколе HTTP
 * User-Agent: Mozilla/5.0 (system-information) platform
 * Как правило это браузеры.
 *
 *
 * 20
 * Протокол  HTTPS
 * HTTP  это открытый протокол- без защиты
 * И создали расширенный протокол HTTPS
 * Данные предаються в зашиврованном виде.
 * HyperText Transfer Protocol Secure
 *
 * Поддерживает протоколы  SSL и TLS  (цифровая подпись сайта)
 * Ключи шифрирования
 * Ассиметричный- два кулюча у браузера и у сервера публичный и частный
 * Симметричный - у обоих 1 ключ.
 * Функция протокола это Шифрование, Аутентификация, Сохранение данных
 * Испольлзуют 443 порт
 *
 * Алгоритм работы
 *
Браузер пользователя просит предоставить SSL-сертификат.
Сайт на HTTPS отправляет сертификат.
Браузер проверяет подлинность сертификата в центре сертификации.
Браузер и сайт договариваются о симметричном ключе при помощи асимметричного шифрования.
Браузер и сайт передают зашифрованную информацию.

 *
Доверие. Сайты, которые заботятся о данных пользователей, вызывают доверие со стороны клиентов. Это добавляет лояльности аудитории.
SEO-оптимизация. Поисковые системы с недоверием относятся к сайтам, работающим по HTTP-протоколу. Даже при грамотной SEO-оптимизации можно не достичь желаемых показателей.
 *
 *21
 * GET параметры
 *
 *амперсанд &
 *GET /page/?param1=value1¶m2=value2 HTTP/1.1
 *
 *22
 * Отправка форм методом GET в протоколе HTTP
 *
 *
 */
?>

<meta charset="utf-8">
<?php
//// connection to database
//$user = "root"; // имя пользователя
//$pass = "password"; // пароль
//$host = "db"; //имя хоста
//$name = "mydb"; //имя базы данныз
//$connection = new mysqli($host, $user, $pass, $name);
//mysqli_query($connection, "SET NAMES 'utf8'");
//
//$query='SELECT COUNT(*) as count FROM users where salary>300 OR age=23';
//$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
//$data=mysqli_fetch_assoc($result);
//var_dump($data);
//Формируем массив в цикле
//echo '----------------------'.'<br>';
//for ($data=[];$row=mysqli_fetch_assoc($result); $data[]=$row);
//echo '<pre>';
//var_dump($data);
//echo '<pre>';
?>
<!--<form action="/page/" method="GET">-->
<!--	<input name="test1" value="1">-->
<!--	<input name="test2" value="2">-->
<!---->
<!--	<input type="submit">-->
<!--</form>-->

<!-- Отправка форм методом POST в протоколе HTTP
-->

<form action="/page/" method="POST">
    <input name="test1">
    <input name="test2">

    <input type="submit">
</form>


