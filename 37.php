<?php
//Дан массив с числами.
//Подсчитайте количество цифр 3 в данном массиве.
//Пример: [13, 35, 3, 443] - в массиве 4 цифры 3.

function three_count($arr) {
    $res = 0;
    foreach($arr as $value) {
        $str_num = strval($value);
        for ($i = 0; $i < strlen($str_num); $i++) {
            if ($str_num[$i] === '3')
                $res++;
        }
    }
    return $res;
}

$arr = [45, 33, 39389, 23];
echo three_count($arr);