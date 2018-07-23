<?php
//Найти максимальное значение в мультимассиве.
//На входе array(array(2,5,3),5,6,7,array(8,9,25),24,18).
//В результате должно получится 25.

$arr = array(array(2,5,3),5,6,7,array(8,9,25),24,18);

function max_in_multyarray($arr) {
    echo ($arr[0] === array());
    if (is_array($arr[0])) {
        $max = max_in_multyarray($arr[0]);
    } else {
        $max = $arr[0];
    }

    for($i = 1; $i < count($arr); $i++) {
        if (is_array($arr[0])) {
            $current = max_in_multyarray($arr[$i]);
        } else {
            $current = $arr[$i];
        }

        if ($current > $max) {
            $max = $current;
        }
    }

    return $max;
}

echo max_in_multyarray($arr);