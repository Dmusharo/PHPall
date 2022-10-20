<?php
//Просмотр данных из БД в PHP
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

?>


<?php foreach ($data as $elem): ?>
    <div>
        <p>
            имя: <span class="name"><?= $elem['name'] ?></span>
        </p>
        <p>
            возраст: <span class="age"><?= $elem['age'] ?></span>,
            зарплата: <span class="salary"><?= $elem['salary'] ?></span>,
        </p>
    </div>
<?php endforeach; ?>



