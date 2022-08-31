<form action="" method="GET">
    <select name="test">
        <option>Uktaine</option>
        <option>Mexico</option>
        <option>Usono</option>
    </select>
    <input type="submit">
</form>

//2


<form action="" method="GET">
    <select name="test">
        <option value="1">Uktaine</option>
        <option value="2">Mexico</option>
        <option value="3">Usono</option>
    </select>
    <input type="submit">
</form>

//3
<form action="" method="GET">
    <select name="test">
        <option value="1" <?php
        if (!empty($_GET['test']) and $_GET['test'] === '1') {
            echo 'selected';
        }
        ?>>item1
        </option>
        <option value="2" <?php
        if (!empty($_GET['test']) and $_GET['test'] === '2') {
            echo 'selected';
        }
        ?>>item2
        </option>
        <option value="3" <?php
        if (!empty($_GET['test']) and $_GET['test'] === '3') {
            echo 'selected';
        }
        ?>>item3
        </option>
    </select>
    <input type="submit">
</form>


<form action="" method="GET">
    <select name="test">
        <option value="1" <?php
        if (!empty($_GET["test"]) and $_GET['test']==='1'){
            echo "selected";
        }
        ?>>Uktaine</option>
        <option value="2" <?php
        if (!empty($_GET["test"]) and $_GET['test']==='2'){
            echo "selected";
        }
        ?>>Mexico</option>
        <option value="3" <?php
        if (!empty($_GET["test"]) and $_GET['test']==='3'){
            echo "selected";
        }
        ?>>Usono</option>
    </select>
    <input type="submit">
</form>

