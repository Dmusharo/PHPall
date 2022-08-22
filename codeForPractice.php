<?php
$arr = [];
for($i = 0; $i < 10; $i++) {
    $arr[] = rand(1 , 100);
}
var_dump($arr);
echo '<br>';
for($k = 0; $k < count($arr) - 1; $k ++) {
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }echo '<br>';
    var_dump($arr);
}
