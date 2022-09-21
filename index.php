    <?php
    if (!empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['mail']) and !empty($_POST['password'])) {
        // Get data from form to $
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $mail=$_POST['mail'];
        $password=$_POST['password'];
        // connection to database
        $user = "root";
        $pass = "password";
        $host = "db";
        $dbdb = "db";
        $connection = new mysqli($host, $user, $pass, $dbdb);
        // Query
        $query = "SELECT * FROM users WHERE email='$mail'";
        $mailinbase=mysqli_fetch_assoc(mysqli_query($connection,$query));
        // Check
        if (empty($mailinbase)) {
            $connection->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$name', '$surname', '$mail', '$password');");
            echo "Hello, ".$name;

             } else {
            echo "Пользователь с таким E-mail  уже существует в базе";
        }
    }
    ?>

    <html>
    <head>
        <title>Enter page</title>
    </head>
    <body>
    <form action="" method="post">
        Name:<input type="text" name="name" required>
        <br>
        Surname:<input type="text" name="surname" required>
        <br>
        E-mail:<input type="text" name="mail" required>
        <br>
        Password:<input type="password" name="password" required>
        <br>
        <input type="submit" value="Create" name="submit">

    </form>
    </body>
    </html>

