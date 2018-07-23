<?php
//Отсортировать одномерный массив своими силами.
//На входе array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31).
//На выходе отсортированный массив.

$arr = array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31);

function q_sort(&$array) {
    $left = 0;
    $right = count($array) - 1;

    my_sort($array, $left, $right);
}

function my_sort(&$array, $left, $right) {

    $l = $left;
    $r = $right;

    $center = $array[(int)($left + $right) / 2];

    do {

        while($array[$r] > $center) {
            $r--;
        }

        while($array[$l] < $center) {
            $l++;
        }

        if($l <= $r) {
            list($array[$r], $array[$l]) = array($array[$l], $array[$r]);

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