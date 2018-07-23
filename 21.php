<?php
/*Склонение существительных после числительных.
В функцию передаётся число сущностей, для которого нужно подобрать окончания, и массив слов.
Например:
2 и ['устрица', 'устрицы', 'устриц'] => 'устрицы'
1, ["вещь", "вещи", "вещей"] => "вещь" */

$num = 2;
$arr = array('устрица', 'устрицы', 'устриц');

function decline_noun($num, $arr) {
    $num = $num % 100;

    if ($num >= 11 && $num <= 19) {
        $ending = $arr[2];
    } else {
        $i = $num % 10;
        switch ($i) {
            case (1): $ending = $arr[0]; break;
            case (2):
            case (3):
            case (4): $ending = $arr[1]; break;
            default: $ending = $arr[2];
        }
    }

    return $ending;
}

echo decline_noun($num, $arr);