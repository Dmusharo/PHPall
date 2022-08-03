<?php
$arr = [
    [
        'name' => 'Alex',
        'age'  => '25',
    ],
    [
        'name' => 'Jack',
        'age'  => '38',
    ],
];
foreach($arr as $value) {
    echo $value['name'] . ' '. $value['age'] . '<br>';
}

