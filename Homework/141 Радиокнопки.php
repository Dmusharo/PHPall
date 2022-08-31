<form action="" method="GET">
    <input type="radio" name="radio" value="1" <?php
    if (!empty($_GET['radio']) and $_GET['radio'] === '1') {
        echo "Checked";
    }
    ?>
    >
    <input type="radio" name="radio" value="2" <?php
    if (!empty($_GET['radio']) and $_GET['radio']==='2'){
        echo 'Checked';
    }
    ?>>
    <input type="radio"name="radio" value="3" <?php
    if (!empty($_GET['radio']) and $_GET['radio']==='3'){
        echo "Checked";
    }
    ?>>
    <input type="submit">
</form>
//

<form action="" method="GET">
    Русский <input type="radio" name="radio" value="rus" <?php
    if (!empty($_GET['radio']) and $_GET['radio'] === 'rus') {
        echo "Checked";
    }
    ?>
    >
    English <input type="radio" name="radio" value="ENG" <?php
    if (!empty($_GET['radio']) and $_GET['radio']==='ENG'){
        echo 'Checked';
    }
    ?>>
    Spanish <input type="radio"name="radio" value="SPA" <?php
    if (!empty($_GET['radio']) and $_GET['radio']==='SPA'){
        echo "Checked";
    }
    ?>>
    <input type="submit">
</form>