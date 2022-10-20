<meta charset="utf-8">
<?php
//connection to database
$user = "root"; // имя пользователя
$pass = "password"; // пароль
$host = "db"; //имя хоста
$name = "mydb1"; //имя базы данныз
$connection = new mysqli($host, $user, $pass, $name);
mysqli_query($connection, "SET NAMES 'utf8'");
$query = "SELECT * FROM users1";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
for ($data = [];
     $row = mysqli_fetch_assoc($result);
     $data[] = $row);
?>

<?php foreach ($data as $elem): ?>
    <p>
        <b><?= $elem['name'] ?></b>
        <b><?= $elem['age'] ?></b>
        <b><?= $elem['salary'] ?></b>
    </p>
<?php endforeach; ?>

//1


<?php foreach ($data as $elem): ?>
    <div>
        <h2><?= $elem['name'] ?></h2>
        <p>
            <?= $elem['age'].',' ?> <b><?= $elem['salary'] ?></b>
        </p>
    </div>

<?php endforeach; ?>

//2
<?php foreach ($data as $elem): ?>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>salary</th>
        </tr>
        <tr>
            <th><?= $elem['id'] ?></th>
            <th><?= $elem['name'] ?></th>
            <th><?= $elem['age'].',' ?></th>
            <th><?= $elem['salary'] ?></th>
        </tr>
    </table>
<?php endforeach; ?>
//3

<?php foreach ($data as $elem): ?>
    <ul>
        <li><?= $elem['name'] .' age- '. $elem['age']?></li>
    </ul>
<?php endforeach; ?>;
