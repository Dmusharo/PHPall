<?php
if (empty($_GET)){  ?>
    <form action="" method="GET">
        Name: <input name="test1">
        <input type="submit">
    </form>
    <?php
} else {
    echo "Привет, ".$_GET["test1"];
}
?>