<?php
//На входе массив чисел $array и число $min.
//Нам нужно удалить все значения, что меньше $min.
//На входе array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31).
//Передаем $min = 9. На выходе должно быть array(9,25,24,18,26,27,28,29,30,31).

$min = 9;

$arr = array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31);

function delete_less($arr, $min) {
    asort($arr);
    $i = 0;
    while($arr[$i] < $min) {
        unset($arr[$i]);
        $i++;
    }
    return array_values($arr);
}

print_r(delete_less($arr, $min));