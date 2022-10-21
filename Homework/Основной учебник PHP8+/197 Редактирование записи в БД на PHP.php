<?php //save.php
$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];
//connection to database
$userDB = "root"; // имя пользователя
$passDB = "password"; // пароль
$hostDB= "db"; //имя хоста
$namebase = "mydb1"; //имя базы данныз
$connectionDB = new mysqli($hostDB, $userDB, $passDB, $namebase);
mysqli_query($connectionDB, "SET NAMES 'utf8'");

$query = "UPDATE users1 SET
		name='$name', age='$age', salary='$salary'
	WHERE id=$id";
mysqli_query($connectionDB, $query) or die(mysqli_error($connectionDB));
echo 'юзер успешно изменен!';
?>

///2
///
<meta charset="utf-8">
<?php

if (!empty($_POST)) {
    //GET data
//    $name = $_POST['name'];
//    $age = $_POST['age'];
//    $salary = $_POST['salary'];
//    var_dump($_POST);
    //connection to database
    $userDB = "root"; // имя пользователя
    $passDB = "password"; // пароль
    $hostDB= "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connectionDB = new mysqli($hostDB, $userDB, $passDB, $namebase);
    mysqli_query($connectionDB, "SET NAMES 'utf8'");


    // Операции над базой
    $id = $_GET['id'];
    $query = "SELECT * FROM users1 WHERE id=$id";
    $result = mysqli_query($connectionDB, $query) or die(mysqli_error($connectionDB));
    $user = mysqli_fetch_assoc($result); //Получим данные юзера в переменную:
    var_dump($result);
}

?>
<!---->
<!--<form action="" method="POST">-->
<!--    Name: <input name="name">-->
<!--    Age :<input name="age">-->
<!--    Salary: <input name="salary">-->
<!--    <input type="submit">-->
<!--</form>-->


<form action="save.php?id=<?= $_GET['id'] ?>" method="POST">
  Name:  <input name="name" value="<?=$user['name'] ?>">
  Age:  <input name="age" value="<?= $user['age'] ?>">
  Salary:  <input name="salary" value="<?= $user['salary'] ?>">
    <input type="submit">
</form>









