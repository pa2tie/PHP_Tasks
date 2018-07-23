<?php
/*Пусть имеется файл, в котором построчно записаны названия языков программирования:
1 Fort
2 PHP
3 JavaScript
4 ASP.NET
5 Java
6 Perl
7 C++
8 Pascal
9 Fortran
10 Assembler

а) Создайте функцию, которая бы перезаписывала строки файла в случайном порядке.
б) Разработайте функцию, которая бы восстаналивала лексикографическую сортировку файла.
в) Необходимо разработать функцию, которая бы сортировала языки программирования по алфавиту,
не принимая во внимание цифры (в результирующем файле цифры, однако должны остаться).*/

//A
$fname = 'lp.txt';

function random_str_write($fname) {
    $arr = file($fname);

    for ($i = 0; $i < count($arr); $i++) {
        $rnd = rand(0, count($arr));
        $temp = $arr[$i];
        $arr[$i] = $arr[$rnd];
        $arr[$rnd] = $temp;
    }

    file_put_contents($fname, $arr);
}

random_str_write($fname);
print_r(file($fname));

//B
function sort_lex($fname) {
    $arr = file($fname);
    asort($arr, SORT_NUMERIC);
    file_put_contents($fname, $arr);
}

sort_lex($fname);
print_r(file($fname));

//C
function sort_alp($fname) {
    $arr = file($fname);
    $result = array();

    foreach($arr as $v) {
        list($key, $value) = explode(" ", trim($v));
        $result[$value] = $key." ".$value.PHP_EOL;
    }

    ksort($result);
    file_put_contents($fname, $result);
}

sort_alp($fname);
print_r(file($fname));