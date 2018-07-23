<?php
//Дана строка.
//Удалите из нее третий пробел.
//Пример: строка '12 34 56 78' станет '12 34 5678'.

function del_third_space($str) {
    $words = explode(" ", $str, 4);
    $res = $words[0];
    if (count($words) > 1) {
        $res .= " ".$words[1];
        if (count($words) > 2) {
            $res .= " ".$words[2];
            if (count($words) == 4)
                $res .= $words[3];
        }
    }

    return $res;
}

$str = '12 34 56 78';
echo del_third_space($str);