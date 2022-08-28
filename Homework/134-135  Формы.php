//1
//Сделайте форму с тремя инпутами, в которые можно ввести имя, возраст и зарплату пользователя.

<form>
    <input name="name">
    <input name="age">
    <input name="salary">
    <input type="submit">
</form>

//2 Метод отправки формы
//На странице index.php сделайте форму. Отправьте ее на страницу result.php. Проверьте оба метода отправки формы.
<form action="./.docker/php/result.php" method="POST">
    <input name="test1">
    <input type="submit">
</form>

<form action="./.docker/php/result.php" method="GET">
    <input name="test1">
    <input type="submit">
</form>

//135
//1
//Сделайте форму с тремя инпутами.
Пусть в эти инпуты вводятся числа.
После отправки формы выведите на экран сумму этих чисел.
<form action="135%20result.php" method="GET">
    <input name="num1">
    <input name="num2">
    <input name="num3">
    <input type="submit">
</form>

//3
Сделайте так, чтобы после отправки формы на странице
результата сравнивался пароль из переменной и пароль из формы. После сравнения сообщите пользователю, правильный он ввел пароль или нет.

<form action="/result.php" method="POST">
    <input type="password" name="pass">
    <input type="submit">
</form>

<?php
$password= '12345';
if ($_POST["pass"]===$password) {
    echo "Привет пользователь";
} else {
    echo "Пароль введен не правильно";
}
var_dump(($_POST));
?>

//4

<form action=".docker/php/135%20result.php" method="POST">
    <p>Введите дату вашего рождения</p><br>
    Год: <br><input name="year"><br>
    Месяц: <br><input name="month"><br>
    День: <br><input name="day"><br><br>
    <input type="submit">
</form>

?>
