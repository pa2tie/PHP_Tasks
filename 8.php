<?php
//Нужно: вычислить факториал числа рекурсивно $n - число.

function factorial($n) {
    if ($n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(8);