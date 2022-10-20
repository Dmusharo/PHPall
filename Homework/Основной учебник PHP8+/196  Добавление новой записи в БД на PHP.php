
<meta charset="utf-8">
<?php
//1 На странице new.php реализуйте форму для добавления нового юзера.

if (!empty($_POST)){
    //GET data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    var_dump($_POST);
    //connection to database
    $user = "root"; // имя пользователя
    $pass = "password"; // пароль
    $host = "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connection = new mysqli($host, $user, $pass, $namebase);
    mysqli_query($connection, "SET NAMES 'utf8'");
    $query = "INSERT INTO users1 SET  age='$age', salary='$salary', name='$name'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

}

?>
<form action="" method="POST">
	Name:<input name="name"><br>
	Age:<input name="age"><br>
	Salary:<input name="salary"><br>
	<input type="submit"><br>
</form>

//2 Модифицируйте предыдущую задачу так, чтобы после отправки формы значения из нее не удалялись.
<meta charset="utf-8">
<?php


if (!empty($_POST)){
    //GET data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    var_dump($_POST);
    //connection to database
    $user = "root"; // имя пользователя
    $pass = "password"; // пароль
    $host = "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connection = new mysqli($host, $user, $pass, $namebase);
    mysqli_query($connection, "SET NAMES 'utf8'");
    $query = "INSERT INTO users1 SET  age='$age', salary='$salary', name='$name'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

}

?>
<form action="" method="POST">
    Name:<input name="name" value="<?php echo $_POST['name']?>"><br>
    Age:<input name="age" value="<?php echo $_POST['age']?>"><br>
    Salary:<input name="salary" value="<?php echo $_POST['salary']?>"><br>
    <input type="submit"><br>
</form>

