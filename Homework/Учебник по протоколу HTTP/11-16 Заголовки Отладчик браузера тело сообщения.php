<?php
/*
 * 11
 * Полезные заголовки
 * Host - содержит имя домена на который идет запрос
GET /test/ HTTP/1.1
Host: example.com
 *
 *Date - момент времени создании HTTP запроса
 *Date: Wed, 21 Oct 2020 07:28:00 GMT
 * Last-Modified: Sat, 16 Jan 2020 21:16:42 GMT
 *
 *Content-Type - тип содержимого и его кодировку
 * Content-Type: text/html; charset=utf-8
 *
 *Content-Language: ru
 *
 * Content-Length: 10000
 * Размер отправленного тела в байтах
 *
 * 12
 *Свои заголовки
 * X-
 * Попоулярынй заголовок X-Powered-By
 * //1 Придумайте идею своего заголовка. Дайте этому заголовку соответствующее имя.
 * X-user-area
 *
 * 13
 * Тело общения

 */
?>

HTTP/1.1 200 OK  -стартова строка
Connection: Keep-Alive
Content-Encoding: gzip
Content-Length: 2263
Content-Type: text/html; charset=UTF-8
Date: Tue, 27 Sep 2022 13:04:13 GMT
Keep-Alive: timeout=5, max=100
Server: Apache/2.4.46 (Ubuntu)
Vary: Accept-Encoding

<!DOCTYPE html>                     <<!- тело ->
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
text
	</body>
</html>

<?php
    /*
     *  Автоматические запросы браузера
GET /test.html HTTP/1.1
Host: example.com

     */
        ?>
1
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>
<img src="images/img.png">
</body>
</html>


---------------------------------

<!-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="styles.css">
		<script src="scripts.js"></script>
	</head>
	<body>
		<img src="images/img1.png">
		<img src="images/img2.png">
		<img src="images/img3.png">
	</body>
</html> -->
<?php
    //1 Сколько HTTP запросов сделает браузер после загрузки следующей страницы:
    //  1 запрос тела+ 2 запроса стилей+ 1 запрос скрипа + 3 запроса картинок


/*
 * 14
 * Затраты на запросы
 * CSS   для быстродецствия объеденяют в 1 файл
 * -- Используються сборщики Gulp or Webpack
 *
 * //1
 *
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="styles1.css">
		<link rel="stylesheet" href="styles2.css">
		<link rel="stylesheet" href="styles3.css">
		<link rel="stylesheet" href="styles4.css">
		<link rel="stylesheet" href="styles5.css">
		<link rel="stylesheet" href="styles6.css">
		<link rel="stylesheet" href="styles7.css">
		<link rel="stylesheet" href="styles8.css">
		<script src="scripts1.js"></script>
		<script src="scripts2.js"></script>
		<script src="scripts3.js"></script>
		<script src="scripts4.js"></script>
		<script src="scripts5.js"></script>
	</head>
	<body>

	</body>
</html>
 *
 *
 * Анализ --- CSS файл нужно сделать один для увеичении быстродействия
 *
 * 15
 * Сообщения об отладчике браузера
 * В отладчике браузера можно посмотреть на HTTP запросы и ответы своими глазами. Для этого в нем необходимо перейти на вкладку "Server" и после этого обновить страницу. Лучше всего это делать в браузере Chrome.

В этой вкладке можно посмотреть список загруженных файлов, выполнить фильтрацию по каждому типу файлов, а также посмотреть HTTP заголовки запроса и ответа.

 */

