<form action="" method="GET">
    Имя:<input name="Name">
    Фамилия:<input name="Surname">
    Отчество:<input name="Patronymic">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    echo $_GET['Surname']." ".$_GET['Name']." ".$_GET['Patronymic'];
}
?>
