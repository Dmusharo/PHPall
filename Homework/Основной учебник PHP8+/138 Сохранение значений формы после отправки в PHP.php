<?php
//1
/*
 * С помощью формы спросите город и страну пользователя.
 *  После отправки формы выведите введенные данные на экран.
 *  Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.
 */
?>
    <form action="" method="GET">
        Country: <input
                name="country"
                value="<?php if (isset($_GET['country']))
                    echo $_GET['country'] ?>">
        City: <input
                name="city"
                value="<?php if (isset($_GET['city']))
                    echo $_GET['city'] ?>">
        <input type="submit">
    </form>

    //2
    //С помощью формы спросите у пользователя год. После отправки определите, этот год високосный или нет. Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год.
    <form action=".docker/php/135%20result.php" method="GET">
        <input
                name="year"
                value="<?php
                if (isset($_GET['year']))
                    echo $_GET['year'];
                else echo date("Y");
                ?>"
        >
        <input type="submit">
    </form>

    //3
    //С помощью трех инпутов спросите у пользователя год, месяц и день.
    //После отправки формы выведите на экран, сколько дней осталось от введенной даты до Нового Года.
    //По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата.
    <form action="" method="GET">
        Year:<input name="year" value="<?=
            $_GET["year"] ?? date("Y") ?>">
        Month:<input name="month" value="<?=
            $_GET["month"] ?? date("m") ?>">
        Day:<input name="day" value="<?=
            $_GET["day"] ?? date("j") ?>">
        <input type="submit">
    </form>
<?php
$year = $_GET['year'] + 1;
$y = $_GET['year'];
$m = $_GET['month'];
$d = $_GET['day'];
$date = mktime(0, 0, 0, 1, -1, "$year") - mktime(0, 0, 0, "$m", "$d", "$y");
echo floor($date / (60 * 60 * 24));

