<?php
/*Напишите функцию, которая проверяет то, что два слова являются анаграммами.
Анаграммы - это слова состоящие из одинаковых букв (их количество одинаковое!).
Пример: воз-зов, киборг-гробик, корсер-костер-сектор.*/

function is_anagram($w1, $w2) {
    $w1_arr = str_split($w1);
    $w2_arr = str_split($w2);

    if (count(array_diff($w1_arr, $w2_arr)) == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(is_anagram("кот", "ток"));
