<link rel="stylesheet" href="../style.css">
<form action="" method="get">
    <label>Enter your name </label>
    <input type="text" name="name" value="
<?php
if(isset($_REQUEST['name'])) {
    echo $_REQUEST['name'];
}
?>
">
    <br>
    <label>Enter your message</label>
    <textarea name="message">
        <?php
        if (isset($_REQUEST['message']))
            echo $_REQUEST['message'];
        ?>
    </textarea>
    <input type="submit" value="Enter">
</form>