<?php

function square($num) {
    return $num ** 2;
}

function cube() {
    return $num ** 3;
}

require 'pow.php';

function squareSum($arr) {
    $res = 0;

    foreach ($arr as $elem) {
        $res += square($elem);
    }

    return $res;
}

function cubeSum($arr) {
    $res = 0;

    foreach ($arr as $elem) {
        $res += cube($elem);
    }

    return $res;
}
require_once 'pow.php';
require_once 'sum.php';

echo square(3) + squareSum([1, 2, 3]);