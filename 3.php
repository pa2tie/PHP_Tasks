<?php
/*На входе массив array(2, 5, 3, 5, 4, 1, 6, 7, 8, 9, 25, 24, 18, 26, 27, 28, 29, 30, 31)
  и некоторое число n.
Нужно: найти все пары значений, которые в сумме равны n.
Например: n = 5
Тогда, на выходе мультимассив
array(
    array(2,5),
    array(2,3),
       ... и тд.
)
Причем, массив должен содержать только уникальные пары.
Т.е. нужна одна из пар array(2,5) или array(5,2), а не обе.
Входные параметры: $array и $n
Выходной параметр: mixed*/

$array = array(0, 2, 5, 3, 5, 4, 1, 6, 7, 8, 9, 25, 24, 18, 26, 27, 28, 29, 30, 31);

$n = 5;

function pair_sum($array, $n) {
    $pairs = array();
    for ($i = 0; $i<count($array); $i++) {
        for ($j=$i+1; $j<count($array); $j++) {
            if ($array[$i] + $array[$j] == $n && !in_array(array($array[$i], $array[$j]), $pairs) &&  !in_array(array($array[$j], $array[$i]), $pairs))
                array_push($pairs, array($array[$i], $array[$j]));
        }
    }
    return $pairs;
}


print_r(pair_sum($array, $n));
