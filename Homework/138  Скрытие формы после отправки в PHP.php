<?php
if (empty($_GET)) {
    ?>
    <form action="" method="GET">
        имя:<input name="Name">
        <input type="submit">
    </form>
    <?php
} else {
    echo "Привет, ".$_GET['Name']."!";
}
?>