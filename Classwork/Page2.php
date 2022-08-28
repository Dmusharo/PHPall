<?php
$name=$_GET['name'];
if (isset($_COOKIE)){
    echo "Привет юзер";
} else {
    echo "Привет, ".$name."!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вторая страница</title>
</head>
<body>
<p> Привет <?php   echo $name;  ?> </p>
</body>
</html>