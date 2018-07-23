<?php
/*Напишите функцию, которая находит разницу между двумя датами в годах, месяцах, днях, минутах, часах, секундах.
Функция принимает две даты в формате 2014-12-31T12:59:59, а возвращает ассоциативный массив с ключами (год, месяц ... секунда).*/

function compare_date($start, $end) {
    $date1 = date_create($start);
    $date2 = date_create($end);
    $inter = compare_date($date1, $date2);

    $res = array();
    $arr_names = array("y","m","d","h","i","s","год","месяц","день","час","минута","секунда");
    for ($i = 0; $i < 6; $i++) {
        $res [$arr_names[$i+6]] = $inter -> {$arr_names[$i]};
    }
    return $res;
}

var_dump(compare_date('2015-05-24T12:30:30', '2017-11-21T17:17:17'));