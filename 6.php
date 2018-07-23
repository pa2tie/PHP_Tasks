<?php
//На входе массив array('A','B','C','D','E').
//Нужно его перевернуть, но можно использовать, только floor() и count() из встроенных функций.
//Перекладывать значения в другой массив нельзя, используйте, только входной параметра $array.

$arr = array('A','B','C','D','E');

function array_reverse_on_place(&$arr) {
    for ($i = 0; $i < floor(count($arr)/2); $i++) {
        $temp = $arr[$i];
        $arr[$i] = $arr[count($arr) - $i - 1];
        $arr[count($arr) - $i - 1] = $temp;
    }
}

array_reverse_on_place($arr);
print_r($arr);