<?php
//Сохранение формы в БД и редирект в PHP

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
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = '/home/dsim/PhpstormDenys/index.php';
        header("Location: http://$host$uri/$extra");


    }

?>

<form action="" method="POST">
    Name:<input name="name" value="<?php echo $_POST['name']?>"><br>
    Age:<input name="age" value="<?php echo $_POST['age']?>"><br>
    Salary:<input name="salary" value="<?php echo $_POST['salary']?>"><br>
    <input type="submit"><br>
</form>




<?php
session_start();
if (!empty($_POST)){
    //GET data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    //connection to database
    $user = "root"; // имя пользователя
    $pass = "password"; // пароль
    $host = "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connection = new mysqli($host, $user, $pass, $namebase);
    mysqli_query($connection, "SET NAMES 'utf8'");
    $query = "INSERT INTO users1 SET  age='$age', salary='$salary', name='$name'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '/home/dsim/PhpstormDenys/index.php';
    header("Location: http://$host$uri/$extra");


}

?>

<form action="" method="POST">
    Name:<input name="name" value="<?php echo $_POST['name']?>"><br>
    Age:<input name="age" value="<?php echo $_POST['age']?>"><br>
    Salary:<input name="salary" value="<?php echo $_POST['salary']?>"><br>
    <input type="submit"><br>
</form>


<?php
session_start();

if (!empty($_POST)){
    //GET data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    //connection to database
    $user = "root"; // имя пользователя
    $pass = "password"; // пароль
    $host = "db"; //имя хоста
    $namebase = "mydb1"; //имя базы данныз
    $connection = new mysqli($host, $user, $pass, $namebase);
    mysqli_query($connection, "SET NAMES 'utf8'");
    $query = "INSERT INTO users1 SET  age='$age', salary='$salary', name='$name'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    header('Location: index.php');
    var_dump($_POST);
    ?>
    <form action="" method="POST">
        Name:<input name="name" value="<?php echo $_POST['name']?>"><br>
        Age:<input name="age" value="<?php echo $_POST['age']?>"><br>
        Salary:<input name="salary" value="<?php echo $_POST['salary']?>"><br>
        <input type="submit"><br>
    </form>

<?php } else { ?>
    <form action="" method="POST">
        Name:<input name="name" value=""><br>
        Age:<input name="age" value=""><br>
        Salary:<input name="salary" value=""><br>
        <input type="submit"><br>
    </form>
    <?php
}
?>






