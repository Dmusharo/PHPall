<?php
if (!isset($_REQUEST['age']) and !isset($_REQUEST['name'])) {
    ?>
    <form action="" method="GET">
    AGE:    <input type="text" name="age">
    NAME:    <input type="text" name="name">
        <input type="submit">
    </form>
    <?php
}
?>

<?php
if (isset($_REQUEST['age']) and isset($_REQUEST['name'])) {
    $age = strip_tags($_REQUEST['age']);
    $name = strip_tags($_REQUEST['name']);
    echo "Ваше имя: $name, Ваш возраст: $age";
}
?>