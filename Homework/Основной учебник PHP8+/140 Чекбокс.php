<?php
// С помощью флажка спросите у пользователя, есть ему уже 18 лет или нет. Если есть, разрешите ему доступ на сайт, а если нет - не разрешите.
?>
<form action="" method="GET">
    <p>Вам есть 18 лет?</p>
    <input type="checkbox" name="flag">
    <input name="text">
    <input type="submit">
</form>
<?php
if (!empty($_GET)){
    if (isset($_GET['flag'])){
        echo "Пользователю есть 18 лет";
    } else {
        echo "Пользователю нет 18 лет";
    }
}
?>
////////////2 способ

    <form action="" method="GET">
        <p>Вам есть 18 лет?</p>
        <input type="hidden" name="flag" value="0">
        <input type="checkbox" name="flag" value="1">
        <input type="submit">
    </form>
<?php
if (!empty($_GET)) {
    if ($_GET['flag'] === '1') {
        echo 'Да,мне 18 лет';
    } else {
        echo 'Мне нет 18 лет';
    }
}
?>

//3

    <form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    Flag1:<input
            type="checkbox"
            name="flag" <?php
    if (isset($_GET['flag']) and $_GET['flag'] === 1)
        echo 'checked';
    ?>
    >
    <br>
    <input type="hidden" name="flag1" value="0">
    Flag2:<input
            type="checkbox"
            name="flag1" <?php
    if (isset($_GET['flag1']) and $_GET['flag1'] === 1)
        echo 'checked';
    ?>
    > <br>
    <input type="hidden" name="flag2" value="0">
    Flag3:<input
            type="checkbox"
            name="flag2" <?php
    if (isset($_GET['flag2']) and $_GET['flag2'] === 1)
        echo 'checked';
    ?>
    ><br>
    <input type="submit">
</form>

