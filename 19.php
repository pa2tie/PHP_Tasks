<?php
//Дана строка с любыми символами.
//Для примера пусть будет '1234567890'.
//Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся.

$str = '1234567890';

function splittin($str) {
    $n = 1;
    $t = 0;
    $arr = array();
    while ($t < strlen($str)) {
        echo $t;
        array_push($arr, substr($str, $t, $n));
        $n++;
        $t+=$n-1;
    }
    return $arr;
}

print_r(splittin($str));