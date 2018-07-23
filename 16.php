<?php
/*Отсортировать числа на диагонали квадратной матрицы. На входе квадратная матрица:
array(
    array(10,5,3,6),
    array(8,2,11,13),
    array(9,25,30,18),
    array(34,37,38,24)
).
На выходе должен быть массив
array(
    array(2,5,3,6),
    array(8,10,11,13),
    array(9,25,24,18),
    array(34,37,38,30)
).*/

$arr = array(
    array(10,5,3,6),
    array(8,2,11,13),
    array(9,25,30,18),
    array(34,37,38,24)
);


function q_sort(&$array) {
    $left = 0;
    $right = count($array) - 1;

    my_sort($array, $left, $right);
}

function my_sort(&$array, $left, $right) {

    $l = $left;
    $r = $right;

    $center = $array[(int)($left + $right) / 2][(int)($left + $right) / 2];

    do {

        while($array[$r][$r] > $center) {
            $r--;
        }

        while($array[$l][$l] < $center) {
            $l++;
        }

        if($l <= $r) {
            list($array[$r][$r], $array[$l][$l]) = array($array[$l][$l], $array[$r][$r]);

            $l++;
            $r--;
        }
    } while($l <= $r);

    if ($r > $left) {
        my_sort($array, $left, $r);
    }

    if ($l < $right) {
        my_sort($array, $l, $right);
    }
}

q_sort($arr);
print_r($arr);