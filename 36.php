<?php
//Сделайте 2 функции, которые
//1. Определяет, что два числа являются дружественными.
//2. Определяет, что переданное число является совершенным.
//Дру́жественные чи́сла — два различных натуральных числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу.
//http://ru.wikipedia.org/wiki/Дружественные_числа
//Иногда частным случаем дружественных чисел считаются совершенные числа: каждое совершенное число дружественно себе.
//http://ru.wikipedia.org/wiki/Совершенные_числа

function  div_sum($num) {
    $divisors = array();
    for ($i = 2; $i<ceil(sqrt($num)); $i++) {
        if ($num % $i === 0) {
            $divisors[] = $i;
            $divisors[] = $num/$i;
        }
    }
    if ($num/$i == $i) $divisors[] = $i;
    return array_sum($divisors)+1;
}
function  is_amicable($n1, $n2) {
    return ($n1 == div_sum($n2) && $n2 == div_sum($n1));
}
function is_perfect($n) {
    // 1 не входит в число совершенных чисел, хотя и равно своему делителю
    if ($n == 1) return false;
    return $n == div_sum($n);
}
for ($i = 0; $i < 10000; $i++)
    if (is_perfect($i))
        echo $i." ";
for ($i = 0; $i < 10000; $i++)
    for ($j = $i; $j < 10000; $j++)
        if (is_amicable($i, $j))
            echo $i." ".$j."<br>\n";