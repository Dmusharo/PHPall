<?php
if (isset($_GET['name'])) {
    setcookie('name', $_GET['name']);
    $name = $_GET['name'];
} elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = 'Guest';
}
?>
<h1></h1>
<p> Привет <?php echo $name; ?></p>
<title>Page #1</title>
<form action="" method="get">
    <label for="name">Ваше ім'я</label>
    <input type="text" name="name" id="name">
    <input type="submit">
</form>
<br>
<br>
<a href="Classwork/Page2.php">Вторая страница</a>



