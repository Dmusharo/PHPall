<?php
include_once 'function.php';
?>
<?php
//Lesson 135. Task 1
//<form action="HW/code134to154.php" method="get">
//    NAME:  <input name="name" type="text">
//    AGE: <input name="age" type="text">
//    SALARY: <input name="salary" type="text">
//    <input type="submit">
//</form>
//print_r($_GET);
//$name = $_REQUEST['name'];
//$age = $_REQUEST['age'];
//$salary = $_REQUEST['salary'];
//$sum = $name + $age + $salary;
//echo  $sum;
?>
<!--    //Lesson 135. Task 2-->
<!--<form method="get">-->
<!--    NAME: <input type="text" name="name">-->
<!--    AGE: <input type="text" name="age">-->
<!--    <input type="submit">-->
<!---->
<!--</form>-->
<?php
//$name = $_REQUEST['name'];
//$age = $_REQUEST['age'];
//echo "Your name: $name <br>Your age: $age";
    ?>
<?php
//    Lesson 135. Task 3
//$pass = '12345';
//if (isset($_REQUEST['password']) == $pass) {
//    echo 'Succsessful';
//
//}else {
//   echo 'wrong pass';
//}
//?>
<!---->
<!--    <form method="post">-->
<!--        <label>Enter your password</label>-->
<!--        <input type="password" name="password">-->
<!--        <input type="submit">-->
<!--    </form>-->
<?php
//Lesson 135. Task 4
//    ?>
<!--<form method="get">-->
<!--    <h1>Введите дату своего рождения</h1>-->
<!--    DAY: <input type="text" name="day">-->
<!--    MONTHS: <input type="text" name="months">-->
<!--    YEAR: <input type="text" name="year">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
////$day = $_REQUEST['day'];
////$months = $_REQUEST['months'];
////$year = $_REQUEST['year'];
////$dayOfWeek =  date('w', mktime(0, 0, 0, $months, $day, $year));
////$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
////echo "Ваш день ро ждения: $day $months $year $week[$dayOfWeek]";
////    //Lesson 136. Task 1
////        ?>
<!--<form method="get">-->
<!--    <h3>Enter your name, Surname, Father name</h3>-->
<!--    NAME: <input type="text" name="name">-->
<!--    SURNAME: <input type="text" name="surname">-->
<!--    FATHER NAME: <input type="text" name="fatherName">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (!empty($_REQUEST['name']) && !empty($_REQUEST['surname']) && !empty($_REQUEST['fatherName'])) {
//    $name = $_REQUEST['name'];
//    $surname = $_REQUEST['surname'];
//    $fatherName = $_REQUEST['fatherName'];
//    echo "HELLO $name $surname $fatherName";
//}
////Lesson 137. Task 1
////?>

<?php
//if (empty($_GET)) {
//    ?>
<!--<form method="get">-->
<!--    PUT YOUR NAME: <input type="text" name="name">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//}
//else {
//    echo 'Hello' . $_REQUEST['name'];
//}
////Lesson 138. Task 1
//    ?>
<!--<form method="get">-->
<!--    <h3>Enter your country and city where you live</h3>-->
<!--    COUNTRY: <input type="text" name="country" value="-->
<?php
//if (isset($_GET['country']))
//    echo $_GET['country'];
//?>
<!--">-->
<!--    CITY: <input type="text" name="city" value="-->
<?php
//if (isset($_GET['city']))
//    echo $_GET['city'];
//?>
<!--">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<form method="get">-->
<!--    ENTER YEAR: <input type="text" name="year" value="-->
<?php
//    if (isset($_GET['year']))
//        echo $_GET['year'];
//    else
//        echo 'default';
//?>
<!--">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (isset($_GET['year'])) {
//    echo year($_GET['year']);
//}
////Lesson 138. Task 3
//    ?>
<!--<form method="get">-->
<!--    <h3>Left time to New Year <br>Enter date</h3>-->
<!--    YEAR: <input type="text" name="year">-->
<!--    NUMBER OF MONTHS: <input type="text" name="months">-->
<!--    DAY: <input type="text" name="day">-->
<!--    <input type="submit">-->
<!---->
<!--</form>-->
<?php
//if (isset($_GET['year'])) {
//    $inputYear = $_GET['year'];
//}
//if(isset($_GET['months'])) {
//    $inputMonths = $_GET['months'];
//}
//if(isset($_GET['day'])) {
//    $inputDay = $_GET['day'];
//}
//$newyear = mktime(0, 0, 0, 1, 1, 2023);
//$inputDate = mktime(0, 0, 0, $inputMonths, $inputDay, $inputYear);
//$timeleftsec = $newyear - $inputDate;
//$days = floor($timeleftsec / 86400);
//$leftAfterDays = $timeleftsec % 86400;
//$hours = floor($leftAfterDays / 3600);
//$leftAfterHours = $leftAfterDays % 3600;
//$minutes = floor($leftAfterHours / 60);
//$seconds = floor($leftAfterHours % 60);
//echo "Left $days days <"
//
//Lesson 139. Task 1?>
<!--<link rel="stylesheet" href="style.css">-->
<!--<form method="get">-->
<!--    Fill up your feedback: <textarea placeholder="Text should be here" name="text"></textarea>-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (isset($_GET['text'])) {
//    echo $_GET['text'];
//}
//Lesson 139. Task 2;
//?>
<!--<link rel="stylesheet" href="style.css">-->
<!--<form method="get">-->
<!--    Fill up your feedback: <textarea  placeholder="Text should be here" name="text">--><?//= $_GET['text'] ?? '' ?><!--</textarea>-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (isset($_GET['text'])) {
//    echo '<br>';
//    echo rus2translit($_GET['text']);
//}
//Lesson 140. Task 1?>
<!--<form method="get">-->
<!--    NAME: <input type="text" name="name">-->
<!--    <input type="checkbox" name="flag">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (isset($_GET['flag'])) {
//    $name = $_GET['name'];
//    echo "Hello $name";
//
//}else {
//    echo 'Good bye';
//}
//Lesson 140. Task 2?>
<!--<form method="get">-->
<!--    Do you have already 18 years old:<input name="age" type="hidden" value="0">-->
<!--    <input type="checkbox" name="age" value="1">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if(!empty($_GET)) {
//    if ($_GET['age'] == 1) {
//        echo 'Welcom';
//    }else {
//        echo 'Comback later';
//    }
//}
//Lesson 140. Task 3?>
<!--<form method="get">-->
<!--    <input type="hidden" name="flag1" value="0">-->
<!--    Are you human?: <input type="checkbox" name="flag1" value="1" --><?php
//    if (!empty($_GET['flag1'])) {
//        echo 'checked';
//    }
//    ?>
<!--    >-->
<!--    <input type="hidden" name="flag2" value="0">-->
<!--    Can you walk?: <input type="checkbox" name="flag2" value="1" --><?php
//    if(!empty($_GET['flag2'])) {
//        echo 'checked';
//    }
//    ?>
<!--    >-->
<!--    <input type="hidden" name="flag3" value="0">-->
<!--    Can you jump?: <input type="checkbox" name="flag3" value="1" --><?php
//    if(!empty($_GET['flag3'])) {
//        echo 'checked';
//    }
//    ?>
<!--    >-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//Lesson 141. Task 1
?>
<!--<form method="get">-->
<!--    MAN: <input type="radio" name="radio" value="1">-->
<!--    <br>-->
<!--    WOMAN: <input type="radio" name="radio" value="2">-->
<!--</form>-->
<?php
//Lesson 141. Task 2
?>
<!--<form action="" method="GET">-->
<!--    <h3>Which language are you speak mostly</h3>-->
<!--    RUS: <input type="radio" name="radio" value="1" --><?php
//    if (!empty($_GET['radio']) and $_GET['radio'] === '1') {
//        echo 'checked';
//    }
//    ?>
<!--    UKR:<input type="radio" name="radio" value="2" --><?php
//    if (!empty($_GET['radio']) and $_GET['radio'] === '2') {
//        echo 'checked';
//    }
//    ?>
<!--    EN:<input type="radio" name="radio" value="3" --><?php
//    if (!empty($_GET['radio']) and $_GET['radio'] === '3') {
//        echo 'checked';
//    }
//    ?>
<!--    <input type="submit">-->
<!--</form>-->
<?php
//Lesson 142. Task 1
    ?>
<!--<form method="get">-->
<!--    <h3>Where you live</h3>-->
<!--    <select name="city">-->
<!--        <option>Odessa</option>-->
<!--        <option>Kiev</option>-->
<!--        <option>Lviv</option>-->
<!--    </select>-->
<!--</form>-->
<?php
//Lesson 142. Task 3, 4
?>
<!--<form action="" method="GET">-->
<!--    <h4>Choose language</h4>-->
<!--    <select name="city">-->
<!--        <option value="1" --><?php
//        if(!empty($_GET['city']) && $_GET['city'] == 1) {
//            echo 'selected';
//        }
//        ?>
<!--        >RUS</option>-->
<!--        <option value="2" --><?php
//        if(!empty($_GET['city']) && $_GET['city'] == 2) {
//            echo 'selected';
//        }
//        ?>
<!--        >EN</option>-->
<!--        <option value="3" --><?php
//        if(!empty($_GET['city']) && $_GET['city'] == 3) {
//            echo 'selected';
//        }
//        ?>
<!--        >UA</option>-->
<!--    </select>-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//Lesson 143. Task 1
    ?>
<?php
//if(isset($_GET)) {
//    foreach ($_GET as $value) {
//        if ($value == 1) {
//            echo "Hello";
//        }else {
//            echo 'Buy';
//        }
//    }
//}
//?>
<?php
//$arr = ['a', 'b', 'c', 'd', 'e'];
//if(isset($_GET)) {
//    foreach ($_GET as $value) {
//        $a = $arr[$value];
//        var_dump($a);
//    }
//}
//Lesson 144. Task 1
//?>
<!--<a href="?par1=1" >number1</a>-->
<!---->
<!--<a href="?par2=2">number2</a>-->
<!--<a href="?par3=3">number3</a>-->
<!--<br>-->
<?php
//if (isset($_GET)) {
//    foreach ($_GET as $value) {
//        echo $value;
//    }
//}
//Lesson 144. Task 2
//?>
<?php
//for($i = 1; $i <= 10; $i++) {
//    echo "<a href=\"?par1=$i\">number$i</a>" . '<br>';
//}
//if (isset($_GET)) {
//    foreach ($_GET as $value) {
//        echo $value;
//    }
//}
//Lesson 144. Task 3
//?>
<?php
//$arr = ['a', 'b', 'c', 'd', 'e'];
//
//foreach ($arr as $value) {
//    echo "<a href=\"?par1=$value\">Letter $value</a>" . '<br>';
//}
//if (isset($_GET)) {
//    foreach ($_GET as $item) {
//        echo $item;
//    }
//}
//Lesson 145. Task 1
//?>
<!--<form method="get">-->
<!--    <h3>Celsium converter</h3>-->
<!--    Celsium: <input type="text" name="celsium">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if(isset($_GET['celsium'])) {
//    foreach ($_GET as $value) {
//        $far = ($value * 9/5) + 32;
//        echo $far . ' Farengeit';
//    }
//}
//Lesson 145. Task 2
//?>
<!--<form method="get">-->
<!--    <h3>Looking for factorial</h3>-->
<!--    Enter num: <input type="text" name="num">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//$fact = 1;
//if (isset($_GET['num'])) {
//    foreach ($_GET as $value) {
//        $fact = Factorial($value);
//    }
//}echo $fact;
//Lesson 145. Task 3
//?>
<!--<form method="get">-->
<!--    <h3>This number is divisible by</h3>-->
<!--    Enter num: <input type="text" name="num">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (isset($_GET['num'])) {
//    $num = $_GET['num'];
//}
//for ($i = 1; $i <= $num; $i++) {
//    if($num % $i == 0) {
//        echo 'Divisible by ' . $i . '<br>';
//    }
//}
//Lesson 145. Task 4
//    ?>
<!--<form method="get">-->
<!--<h3>This numbers can divisible together by</h3>-->
<!--Enter num: <input type="text" name="num1">-->
<!--Enter num: <input type="text" name="num2">-->
<!--        <input type="submit">-->
<!--</form>-->
<?php
//$arr1 = [];
//$arr2 = [];
//
//if(isset($_GET['num1'])) {
//    $num1 = $_GET['num1'];
//    for ($i = 1; $i <= $num1; $i++) {
//        if($num1 % $i == 0) {
//            $arr1[] = $i;
//        }
//    }
//}
//
//if(isset($_GET['num2'])) {
//    $num2 = $_GET['num2'];
//    for ($i = 1; $i <= $num2; $i++) {
//        if($num2 % $i == 0) {
//            $arr2[] = $i;
//        }
//    }
//}
//
//$sameDivisible = array_intersect($arr1, $arr2);
//if(isset($num1) && isset($num2)) {
//    echo 'Same divisible is ' . implode('-', $sameDivisible);
//}
//
////Lesson 145. Task 5    ?>
<!---->

<?php
//if (isset($_POST['sub'])) {
//    function sqrFunction($a,$b,$c = 0)
//    {
//        $x1 = 0;
//        $x2 = 0;
//        $d = ($b*$b) - (4*$a*$c);
//        if($d > 0){
//            $x1 = ((-$b) - sqrt($d))/2*$a;
//            $x2 = ((-$b) + sqrt($d))/2*$a;
//            echo 'X1 = '. $x1 . '<br>';
//            echo 'X2 = '.$x2 . '<br>';
//        }
//        elseif($d == 0) {
//            $x2 = ((-$b) + sqrt($d))/2*$a;
//            echo 'X1 = '.$x2 . '<br>';
//        }else {
//            echo "D = $d < 0, уравнение не имеет действительных корней";
//        }
//    }
//    if(isset($_POST['a']) and isset($_POST['b']) and isset($_POST['c'])) {
//        $a = $_POST['a'];
//        $b = $_POST['b'];
//        $c = $_POST['c'];
//        echo sqrFunction($a,$b,$c);
//    }
//}else{
//    ?>
<!--    <form action="" method="post">-->
<!--        <p>Введите a: <input required="" type="number" name="a"></p>-->
<!--        <p>Введите b: <input required="" type="number" name="b"></p>-->
<!--        <p>Введите c: <input required="" type="number" name="c" value="0"></p>-->
<!--        <input type="submit" name="sub">-->
<!--        <input type="reset">-->
<!--    </form>-->
<!--    --><?php
//}Lesson 145. Task 6
//?>
<?php
//if(isset($_REQUEST['submit'])) {
//    $z = $_REQUEST['z'];
//    $x = $_REQUEST['x'];
//    $y = $_REQUEST['y'];
//    if(($z ** 2) == ($x **2) + ($y **2)) {
//        echo "<h2>These numbers are a Pythagorean triple</h2>";
//    }else {
//        echo "<h2>These numbers are NOT a Pythagorean triple</h2>";
//    }
//}
//?>
<!---->
<!--<form method="get">-->
<!--    <p>Enter bigest number: Z <input type="number" name="z" required="" value="5"></p>-->
<!--    <p>Enter next number:  X<input type="number" name="x" required="" value="3"></p>-->
<!--    <p>Enter next number: Y<input type="number" name="y" required="" value="4"></p>-->
<!--    <input type="submit" name="submit">-->
<!--    <input type="reset">-->
<!--</form>-->
<?php
//Lesson 145. Task 7
?>
<?php
//if(isset($_REQUEST['submit'])) {
//    $date = explode('-', $_REQUEST['date']);
//}
//$now = time();
//$birthday = mktime(23, 59, 59, $date[1], $date[2]) + 1;
//if ($birthday > $now) {
//    echo floor(($birthday - $now) / 60 / 60 / 24) . ' days left';
//} else {
//    echo floor(($birthday - $now + 60 * 60 * 24 * 365) / 60 / 60 / 24) . ' days left';
//}
//
//?>
<!--<form method="get">-->
<!--    <h4>How many days left to Birthday:</h4>-->
<!--    <input type="date" name="date" required="">-->
<!--    <input type="submit" name="submit">-->
<!--</form>-->
<!--Lesson 145. Task 8-->
<?php
//if (!empty($_REQUEST['text'])) {
//    $str = $_REQUEST['text'];
//    $strLen = strlen($str);
//    $wordsCount = count(explode(' ', $str));
//    $spaceCount = $wordsCount - 1;
//    echo 'В тексте '.$wordsCount.' слов, '.$strLen.' символов, '.$spaceCount . ' пробелов.';
//}
//?>
<!---->
<!--<form method="get">-->
<!--    <h3>Enter text:</h3>-->
<!--    <textarea name="text" placeholder="Enter here"></textarea>-->
<!--    <input type="submit">-->
<!--</form>-->
<!--Lesson 145. Task 9-->
<?php
//mb_internal_encoding("UTF-8");
//if (!empty($_REQUEST['text'])) {
//    $str = $_REQUEST['text'];
//    $strLen = mb_strlen($str);
//    $valuesCount = array_count_values(str_split($str));
//    foreach ($valuesCount as $key => $value) {
//        $x = 100 / $strLen * $value;
//        echo '"'.$key.'" - "'.round($x, 2).'"<br>';
//    }
//}
//?>
<!--<form method="get">-->
<!--    <textarea name="text" placeholder=""></textarea>-->
<!--    <input type="submit">-->
<!--</form>-->
<!--Lesson 145. Task 10-->
<?php
$month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
if (isset($_REQUEST)) {
    $day = $_REQUEST['day'];
    $mon = array_search($_REQUEST['month'], $month);
    $year = $_REQUEST['year'];
    $dayOfWeek = $week[date('w', mktime(0, 0, 0, $mon, $day, $year))];
    echo $dayOfWeek;
}
?>

<form action="" method="post">
    <select name="day">
        <?php
        for($i = 1; $i <= 31; $i++) {
            echo "<option>$i</option>";
        }
        ?>

    </select>
    <select name="month">
        <?php
        foreach ($month as $value) {
            echo "<option>$value</option>";
        }
        ?>

    </select>
    <select name="year">
        <?php
        for($i = 1990; $i <= 2025; $i++)
            echo "<option>$i</option>";
        ?>
    </select>
    <input type="submit">
</form>




//Lesson 147. Task 1
//session_start();
//
//if (empty($_SESSION['time'])) {
//    $_SESSION['time'] = time();
//}
//
//echo 'You on web site already ' . time() - $_SESSION['time'] . ' seconds';
//Lesson 148. Task1
//?>
<?php
//session_start();
//
//if (!isset($_SESSION['counter'])) {
//    $_SESSION['counter'] = 1;
//} else {
//    $_SESSION['counter']++;
//}
//
//echo $_SESSION['counter'];
//if($_SESSION['counter'] >= 10) {
//    unset($_SESSION['counter']);
//}
    //Lesson 150. Task 1
?>
<?php
//session_start();
//
//if (!empty($_SESSION['data'])) {
//    foreach ($_SESSION['data'] as $key => $value) {
//        echo "<li>$key</li><ul>$value</ul>";
//
//
//    }
//}
//
//?>
<!--<form method="get">-->
<!--    Name: <input type="text" name="name">-->
<!--    Age: <input type="text" name="age">-->
<!--    Salary: <input type="text" name="salary">-->
<!--    Experience: <input type="text" name="experience">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//session_start();
//
//if (!empty($_SESSION['data'])) {
//    foreach ($_SESSION['data'] as $key => $value) {
//        echo $key . '=>' . $value;
//        echo '<br>';
//
//    }
//}
    //Lesson 152. Task 1
        ?>
<?php
//
//if(!isset($_COOKIE['time'])) {
//    setcookie('time', time());
//}
//if ($_COOKIE['time']) {
//    echo 'you alredy on website ' . (time() - $_COOKIE['time']) . ' seconds';
//}
//Lesson 153. Task 1
//?>












