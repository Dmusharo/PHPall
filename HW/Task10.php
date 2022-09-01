<form action="" method="get">
    <label>Enter your name</label>
    <input type="text" name="name" value="<?php
    if(isset($_REQUEST['name'])) {
        echo $_REQUEST['name'];
    }
    ?>">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
}
?>