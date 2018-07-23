<?php
//На входе массив array('A','B','C','D','E'). Нужно его перевернуть без использования array_reverse().

$array = array('A','B','C','D','E');

function array_reverse_custom($array) {
    $result = array();
    for ($i = 0; $i < count($array); $i++) {
        $result[$i] = $array[count($array) - $i - 1];
    }
    return $result;
}

print_r(array_reverse_custom($array));
