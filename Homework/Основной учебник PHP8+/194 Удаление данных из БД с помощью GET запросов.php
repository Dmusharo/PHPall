<?php
//Удаление данных из БД с помощью GET запросов

$del = 1;
$query = "DELETE FROM users1 WHERE id=$del";
mysqli_query($connection, $query) or die(mysqli_error($connection));

//2 Модифицируйте предыдущую задачу так, чтобы на странице были ссылки для удаления каждого юзера:
$query = "SELECT * FROM users1";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
for ($data = [];
     $row = mysqli_fetch_assoc($result);
     $data[] = $row);

$del = $_GET['par'];
$query = "DELETE FROM users1 WHERE id=$del";
mysqli_query($connection, $query) or die(mysqli_error($connection));
echo '<pre>';
var_dump($data);
echo '<pre>';

?>
<br>
<a href="?par=1">Remove User id=1</a>
<a href="?par=2">Remove User id=2</a>
<a href="?par=3">Remove User id=3</a>


<?php foreach ($data as $elem): ?>
    <br>
    <a href="?par=<?= $elem['id'] ?>">Remove <?= $elem['name'] ?> </a>
<?php endforeach; ?>

<?php
//3 Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:
$query = "SELECT * FROM users1";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
for ($data = [];
$row = mysqli_fetch_assoc($result);
$data[] = $row);

$del = $_GET['del'];
$query = "DELETE FROM users1 WHERE id=$del";
mysqli_query($connection, $query) or die(mysqli_error($connection));
echo '<pre>';
var_dump($data);
echo '<pre>';
var_dump($del);
?>
<br>
<a href="?par=1">Remove User id=1</a>
<a href="?par=2">Remove User id=2</a>
<a href="?par=3">Remove User id=3</a>


<?php foreach ($data as $elem): ?>
    <ul>
    <li><?= $elem['id'] ?> <a href="?del=<?= $elem['id'] ?>">удалить</a></li>
</ul>
<?php endforeach; ?>

//4 ⊗ppPmDPDR
//Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:
<?php
$query = "SELECT * FROM users1";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
for ($data = [];
$row = mysqli_fetch_assoc($result);
$data[] = $row);

$del = $_GET['del'];
$query = "DELETE FROM users1 WHERE id=$del";
mysqli_query($connection, $query) or die(mysqli_error($connection));
echo '<pre>';
var_dump($data);
echo '<pre>';
var_dump($del);
?>
<br>
<a href="?par=1">Remove User id=1</a>
<a href="?par=2">Remove User id=2</a>
<a href="?par=3">Remove User id=3</a>


<?php foreach ($data as $elem): ?>

    <table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>delete</th>
    </tr>
    <tr>
        <td><?= $elem['id'] ?></td>
        <td><?= $elem['name'] ?></td>
        <td><?= $elem['age'] ?></td>
        <td><?= $elem['salary'] ?></td>
        <td><a href="?del=<?= $elem['id'] ?>">удалить</a></td>
    </tr>
</table>
<?php endforeach; ?>

