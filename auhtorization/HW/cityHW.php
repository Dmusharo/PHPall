<?php
if (!isset($_REQUEST['city'])) {
    ?>
<form action="" method="get">

    <label>Enter your city</label>
    <input type="text" name='city'>
    <input type="submit" value="Enter" name="submit">

</form>
<?php
}
?>
<?php

if (isset($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city']);
    echo "You are live in $city";
}



