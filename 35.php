<?php
//Дана строка.
//Оставьте в ней только те слова, где есть 2 одинаковые буквы (не обязательно рядом стоящие).

function two_same_char($str) {
    $words = explode(" ", $str);
    $words = array_filter($words, function ($word) {
        $found = false;
        for ($j = 0; $j < strlen($word) && !$found; $j++) {
            for ($k = $j + 1; $k < strlen($word); $k++) {
                if (strtoupper($word[$j]) == strtoupper($word[$k]))
                    $found = true;

            }
        }
        return $found;
    });
    return implode(" ", $words);
}

echo two_same_char("gfdkdjg klk tyui op");