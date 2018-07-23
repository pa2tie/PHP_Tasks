<?php
//На входе массив чисел array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31).
//Вывести числа кратные 3 или 7 в строку разделенную запятыми.
//Ответ '3,6,7...и тд.'

include 'assist_functions.php';

$arr = array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31);

function fold_three_or_seven($arr) {
    $result = array();
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 3 == 0 || $arr[$i] % 7 == 0) {
            array_push($result, $arr[$i]);
        }
    }
    return $result;
}

print_array_custom(fold_three_or_seven($arr));