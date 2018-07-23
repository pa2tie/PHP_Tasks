<?php
//Дана строка с маленькими буквами.
//Сделайте заглавными половину случайных букв этой строки, игнорируя пробелы.

function uppercase_half_rand($str) {
    $can_upp = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != strtoupper($str[$i]))
            $can_upp++;
    }

    $to_upp = 0;
    while ($to_upp < ceil($can_upp/2)) {
        $int = rand(0, strlen($str) - 1);
        if ($str[$int] != strtoupper($str[$int])) {
            $str[$int] = strtoupper($str[$int]);
            $to_upp++;
        }
    }

    return $str;
}

echo uppercase_half_rand("ddkffdkjf gfkldjgfkg  fdfd");